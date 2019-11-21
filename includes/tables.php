<?php

require "conexaoMysql.php";


class Funcionario 
{
	public $id;
	public $nome;
	public $cargo;
	public $cpf;
	public $celular;
}

class Cliente{

	public $nomeCliente;
	public $emailCliente;
	public $cpfCliente;
	public $celularCliente;
}

class Imovel{
	
	public $proprietario;
	public $categoria;
	public $bairro;
	public $valor;
}

class Interesse{
	
	public $idImovel;
	public $nomeInteressado;
	public $emailInteressado;
	public $telefoneInteressado;
	public $descricaoProposta;
}

function getFuncionarios($conn)
{
	$arrayFuncionarios = null;

	$SQL = "
		SELECT *
		FROM Funcionario
	";

	$result = $conn->query($SQL);
	if (! $result)
		throw new Exception('Ocorreu um erro ao recuperar os funcionarios: ' . $conn->error);

	if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$funcionario = new Funcionario();  
			$funcionario->id = $row["Id"];  		
			$funcionario->nome = $row["Nome"];
			$funcionario->cargo = $row["Cargo"];
			$funcionario->cpf = $row["Cpf"]; 
			$funcionario->celular = $row["TelefoneCelular"];
			$arrayFuncionarios[] = $funcionario;
		}
	}

	return $arrayFuncionarios;
}

function getClientes($conn){

	$arrayClientes = null;

	$SQL = "
		SELECT *
		FROM Cliente_Proprietario
	";

	$result = $conn->query($SQL);
	if (! $result)
		throw new Exception('Ocorreu um erro ao recuperar os clientes: ' . $conn->error);

	if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$cliente = new Cliente();  		
			$cliente->nomeCliente = $row["Nome"];
			$cliente->emailCliente = $row["Email"];
			$cliente->cpfCliente = $row["CPF"]; 
			$cliente->celularCliente = $row["Celular"];
			$arrayClientes[] = $cliente;
		}
	}

	return $arrayClientes;
}

function getImoveis($conn){

	$arrayImoveis = null;

	$SQL = "
		SELECT DISTINCT I.Categoria, I.Bairro, I.ValorImovel, C.Nome FROM Imovel as I 
		INNER JOIN Possui as P ON I.CPF_Proprietario = P.IdCliente 
		INNER JOIN Cliente_Proprietario as C ON P.IdCliente = C.CPF
	";

	$result = $conn->query($SQL);
	if (! $result)
		throw new Exception('Ocorreu um erro ao recuperar os imóveis: ' . $conn->error);

	if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$imovel = new Imovel();  		
			$imovel->proprietario = $row["Nome"]; //ALterar para o nome correto da tabela q representa o cliente relacionado ao imovel
			$imovel->categoria = $row["Categoria"];
			$imovel->bairro = $row["Bairro"]; 
			$imovel->valor = $row["ValorImovel"];
			$arrayImoveis[] = $imovel;
		}
	}

	return $arrayImoveis;
}

function getInteresses($conn){

	$arrayInteresses = null;

	$SQL = "
		SELECT *
		FROM Interesse
	";

	$result = $conn->query($SQL);
	if (! $result)
		throw new Exception('Ocorreu um erro ao recuperar os clientes: ' . $conn->error);

	if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$interessado = new Interesse();
			$interessado->idImovel = $row["Imovel_ID"];  		
			$interessado->nomeInteressado = $row["Nome"];
			$interessado->emailInteressado = $row["Email"];
			$interessado->telefoneInteressado = $row["Telefone"];
			$interessado->descricaoProposta = $row["Descricao"]; 
			$arrayInteresses[] = $interessado;
		}
	}

	return $arrayInteresses;
}

$arrayFuncionarios = null;
$arrayClientes = null;
$arrayImoveis = null;
$arrayInteresses = null;

$msgErro = "";

try
{
	$conn = conectaAoMySQL();
	$arrayFuncionarios = getFuncionarios($conn);
	$arrayClientes     = getClientes($conn);
	$arrayImoveis 	   = getImoveis($conn);
	$arrayInteresses   = getInteresses($conn);
}
catch (Exception $e)
{
	$msgErro = $e->getMessage();
}

if ($conn != null)
		$conn->close();
?>

<div class="container" id="tables">

	<!-- Start - Tabela Funcionario -->
	<div id="tableFuncionario">

		<div class="col-12 text-center">
			<h3 class="heading">Consulta de Funcionarios</h3>
			<div class="heading-underline"></div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead class="thead-dark">
				    <tr>
				      <th scope="col"><label class="text-center">#</label></th>
				      <th scope="col"><label class="text-center">Nome</label></th>
				      <th scope="col"><label class="text-center">Cargo</label></th>
				      <th scope="col"><label class="text-center">CPF</label></th>
				      <th scope="col"><label class="text-center">Celular</label></th>
				    </tr>
				</thead>

				<tbody>
					<?php
						if ($arrayFuncionarios != null)
						{
							foreach ($arrayFuncionarios as $funcionario)
							{       
								echo "
								<tr>
									<td>$funcionario->id</td>
									<td>$funcionario->nome</td>
									<td>$funcionario->cargo</td>
									<td>$funcionario->cpf</td>
									<td>$funcionario->celular</td>
								</tr> 
								";
							}
						}
					?>
				</tbody>
			</table>
			<?php

			if ($msgErro != "")
				echo "<p class='text-danger'>A operação não pode ser realizada: $msgErro</p>";

			?>
		</div>
	</div>
	<!-- End - Tabela Funcionario -->

	<!-- Start - Tabela Clientes -->
	<div id="tableClientes">

		<div class="col-12 text-center">
			<h3 class="heading">Consulta de Clientes</h3>
			<div class="heading-underline"></div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead class="thead-dark">
				    <tr>
				      <th scope="col"><label class="text-center">Nome</label></th>
				      <th scope="col"><label class="text-center">Email</label></th>
				      <th scope="col"><label class="text-center">CPF</label></th>
				      <th scope="col"><label class="text-center">Celular</label></th>
				    </tr>
				</thead>

				<tbody>
					<?php
						if ($arrayClientes != null)
						{
							foreach ($arrayClientes as $cliente)
							{       
								echo "
								<tr>
									<td>$cliente->nomeCliente</td>            
									<td>$cliente->emailCliente</td>
									<td>$cliente->cpfCliente</td>
									<td>$cliente->celularCliente</td>
								</tr> 
								";
							}
						}
					?>
				</tbody>
			</table>
			<?php

			if ($msgErro != "")
				echo "<p class='text-danger'>A operação não pode ser realizada: $msgErro</p>";

			?>
		</div>
	</div>
	<!-- End - Tabela Clientes -->

	<!-- Start - Tabela Imoveis -->
	<div id="tableImoveis">

		<div class="col-12 text-center">
			<h3 class="heading">Consulta de Imoveis</h3>
			<div class="heading-underline"></div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead class="thead-dark">
				    <tr>
				      <th scope="col"><label class="text-center">Proprietário</label></th>
				      <th scope="col"><label class="text-center">Categoria</label></th>
				      <th scope="col"><label class="text-center">Bairro</label></th>
				      <th scope="col"><label class="text-center">Valor do Imóvel</label></th>
				    </tr>
				</thead>

				<tbody>
					<?php
						if ($arrayImoveis != null)
						{
							foreach ($arrayImoveis as $imovel)
							{       
								echo "
								<tr>
									<td>$imovel->proprietario</td>            
									<td>$imovel->categoria</td>
									<td>$imovel->bairro</td>
									<td>$imovel->valor</td>
								</tr> 
								";
							}
						}
					?>
				</tbody>
			</table>
			<?php

			if ($msgErro != "")
				echo "<p class='text-danger'>A operação não pode ser realizada: $msgErro</p>";

			?>
		</div>
	</div>
	<!-- End - Tabela Imoveis -->

	<!-- Start - Tabela Interessados -->
	<div id="tableInteressados">

		<div class="col-12 text-center">
			<h3 class="heading">Consulta de Interessados</h3>
			<div class="heading-underline"></div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead class="thead-dark">
				    <tr>
				      <th scope="col"><label class="text-center">Id do Imóvel</label></th>	
				      <th scope="col"><label class="text-center">Nome</label></th>
				      <th scope="col"><label class="text-center">Email</label></th>
				      <th scope="col"><label class="text-center">Telefone</label></th>
				      <th scope="col"><label class="text-center">Descrição</label></th>
				    </tr>
				</thead>

				<tbody>
					<?php
						if ($arrayInteresses != null)
						{
							foreach ($arrayInteresses as $interessado)
							{       
								echo "
								<tr>
									<td>$interessado->idImovel</td>
									<td>$interessado->nomeInteressado</td>            
									<td>$interessado->emailInteressado</td>
									<td>$interessado->telefoneInteressado</td>
									<td>$interessado->descricaoProposta</td>
								</tr> 
								";
							}
						}
					?>
				</tbody>
			</table>
			<?php

			if ($msgErro != "")
				echo "<p class='text-danger'>A operação não pode ser realizada: $msgErro</p>";

			?>
		</div>
	</div>
	<!-- End - Tabela Interessados -->

</div>