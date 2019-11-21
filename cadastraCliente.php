<?php 

session_start();
if(! isset($_SESSION["nomeFuncionario"])){
   	session_destroy(); // Cancela/Exclui a sessão iniciada
	header('location: index.php');
}

require "conexaoMysql.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$nomeCliente = filtraEntrada($_POST["nomeCliente"]);
	$cpfCliente =  filtraEntrada($_POST["cpfCliente"]);
	$cepCliente =  filtraEntrada($_POST["cepCliente"]);
	$cidadeCliente =  filtraEntrada($_POST["cidadeCliente"]);
	$bairroCliente =  filtraEntrada($_POST["bairroCliente"]);
	$ruaCliente =  filtraEntrada($_POST["ruaCliente"]);
	$numeroRuaCliente =  filtraEntrada($_POST["numeroRuaCliente"]);
	$emailCliente =  filtraEntrada($_POST["emailCliente"]);
	$telefoneCliente =  filtraEntrada($_POST["telefoneCliente"]);
	$celularCliente =  filtraEntrada($_POST["celularCliente"]);
	$sexoCliente =  filtraEntrada($_POST["sexoCliente"]);
	$estadoCivilCliente =  filtraEntrada($_POST["estadoCivilCliente"]);
	$profissaoCliente =  filtraEntrada($_POST["profissaoCliente"]);


	if($sexoCliente == 'Selecione...'){
		?>
		<script type="text/javascript">
			alert("Informe o Sexo do Cliente!");
			window.location.href = "restrict.php#formClientes";
		</script>
		<?php
	}

	if($estadoCivilCliente == 'Selecione...'){
		?>
		<script type="text/javascript">
			alert("Informe o Estado Civil do Cliente!");
			window.location.href = "restrict.php#formClientes";
		</script>
		<?php
	}

	$conn = conectaAoMySQL();

	$result = cadastraCliente($conn,$nomeCliente,$cpfCliente,$cepCliente,$cidadeCliente,
							  $bairroCliente,$ruaCliente,$numeroRuaCliente,$emailCliente,$telefoneCliente,
							  $celularCliente,$sexoCliente,$estadoCivilCliente,$profissaoCliente);

	if($result == 'Este CPF já está cadastrado no sistema!'){
		?>
		<script type="text/javascript">
			alert("Este CPF já está cadastrado no sistema!");
			window.location.href = "restrict.php";
		</script>
		<?php
	}else if($result == 'Cliente Cadastrado com Sucesso!'){
		?>
		<script type="text/javascript">
			alert("Cliente Cadastrado com Sucesso!");
			window.location.href = "restrict.php";
		</script>
		<?php
	}else if($result == 'Falha ao cadastrar o cliente!'){
		?>
		<script type="text/javascript">
			alert("Falha ao cadastrar o cliente!");
			//window.location.href = "restrict.php";
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("Ocorreu um erro ao cadastrar o Cliente!");
			window.location.href = "restrict.php";
		</script>
		<?php
	}
}

function filtraEntrada($dado)
{
    $dado = trim($dado);               // remove espaços no inicio e no final da string
    $dado = stripslashes($dado);       // remove contra barras: "cobra d\'agua" vira "cobra d'agua"
    $dado = htmlspecialchars($dado);   // caracteres especiais do HTML (como < e >) são codificados

    return $dado;
}


function cadastraCliente($conn,$nomeCliente,$cpfCliente,$cepCliente,$cidadeCliente,
					     $bairroCliente,$ruaCliente,$numeroRuaCliente,$emailCliente,$telefoneCliente,
					     $celularCliente,$sexoCliente,$estadoCivilCliente,$profissaoCliente)
{

$SQL = "
    SELECT CPF
    FROM Cliente_Proprietario
    WHERE CPF = '$cpfCliente'
  ";

  $msg = '';

  if (!$resultado = $conn->query($SQL)){
  	 $msg = 'Falha ao buscar cliente!';
  	 return $msg;
  }
    
  if ($resultado->num_rows > 0){
  	 $msg = 'Este CPF já está cadastrado no sistema!';
  	 return $msg;
  }

  $enderecoCliente = $ruaCliente.', Nº '.$numeroRuaCliente;


  $SQL = " INSERT INTO Cliente_Proprietario VALUES ('$cpfCliente','$nomeCliente','$enderecoCliente',
  													'$bairroCliente','$cidadeCliente','$telefoneCliente','$celularCliente',
  													'$emailCliente','$sexoCliente','$estadoCivilCliente','$profissaoCliente');
  	";
  
  if (!$conn->query($SQL)){
  	//throw new Exception("Falha no cadastro do cliente: " . $stmt->error);
  	$msg = 'Falha ao cadastrar o cliente!';
  }else{
  	$msg = 'Cliente Cadastrado com Sucesso!';
  }

  return $msg;
}

if ($conn != null)
		$conn->close();
 ?>
