<?php

session_start();
if(! isset($_SESSION["nomeFuncionario"])){
   	session_destroy(); // Cancela/Exclui a sessão iniciada
	header('location: index.php');
}

require "conexaoMysql.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$tipoImovel = filtraEntrada($_POST["tipoImovel"]);
	$propositoImovel =  filtraEntrada($_POST["propositoImovel"]);
	$proprietarioImovel =  filtraEntrada($_POST["proprietarioImovel"]);

	$valorImovel =  filtraEntrada($_POST["valorImovel"]);
	$bairroImovel =  filtraEntrada($_POST["bairroImovel"]);

	// $imagemImovel =  filtraEntrada($_POST["cidadeFuncionario"]);

	$qtdQuartosImovel =  filtraEntrada($_POST["qtdQuartosImovel"]); 
	$qtdSuitesImovel =  filtraEntrada($_POST["qtdSuitesImovel"]);
	$descricaoImovel =  filtraEntrada($_POST["descricaoImovel"]);
	$areaCasa =  filtraEntrada($_POST["areaCasa"]);
	$possuiPiscina =  filtraEntrada($_POST["possuiPiscina"]);
	$numApartamento =  filtraEntrada($_POST["numApartamento"]);
	$andarApartamento =  filtraEntrada($_POST["andarApartamento"]);
	$valorCondominio =  filtraEntrada($_POST["valorCondominio"]);


	if($proprietarioImovel == 'Selecione...'){
		?>
		<script type="text/javascript">
			alert("Informe o Proprietário do Imóvel!");
			window.location.href = "restrict.php#formImoveis";
		</script>
		<?php
	}

	$conn = conectaAoMySQL();

	$result = cadastraImovel($conn,$tipoImovel,$propositoImovel,$proprietarioImovel,$valorImovel,
								  $bairroImovel,$qtdQuartosImovel,$qtdSuitesImovel,$descricaoImovel,
								  $areaCasa,$possuiPiscina,$numApartamento,$andarApartamento,$valorCondominio);
	
	if($result == ''){
		?>
		<script type="text/javascript">
			alert("Imóvel Cadastrado com sucesso!");
			window.location.href = "restrict.php";
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("Ocorreu algum erro no cadastro do Imóvel. Nenhuma operação foi Salva!");
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

function cadastraImovel($conn,$tipoImovel,$propositoImovel,$proprietarioImovel,$valorImovel,
							  $bairroImovel,$qtdQuartosImovel,$qtdSuitesImovel,$descricaoImovel,
							  $areaCasa,$possuiPiscina,$numApartamento,$andarApartamento,$valorCondominio)
{   
	$msg = '';
  
	try{
		
		$conn->begin_transaction();

		$SQLImovel = "
		INSERT INTO Imovel 
		VALUES (null,'$proprietarioImovel','$tipoImovel','$propositoImovel', $qtdQuartosImovel,	$qtdSuitesImovel,'$descricaoImovel',
		'$bairroImovel','$valorImovel','Imagem',null);
		";

		if (!$conn->query($SQLImovel)){
			throw new Exception('Falha ao cadastrar Imóvel: '.$conn->error);
		}

		if($tipoImovel == 'Casa'){
			if(!$conn->query("INSERT INTO Imovel_Casa VALUES( LAST_INSERT_ID(),'$areaCasa','$possuiPiscina')")){
				throw new Exception('Falha ao inserir na tabela Imovel_Casa: '.$conn->error);
			}	
		}else{
			if(!$conn->query("INSERT INTO Imovel_Apartamento VALUES(LAST_INSERT_ID(), $andarApartamento, $numApartamento,'$valorCondominio')"))
			{
				throw new Exception('Falha ao inserir na tabela Imovel_Apartamento: '.$conn->error);
			}
		}

		
		if(!$conn->query("INSERT INTO Possui VALUES( LAST_INSERT_ID(),'$proprietarioImovel')")){
			throw new Exception('Falha ao inserir na tabela Possui: '.$conn->error);
		}


		$conn->commit();

	}catch(Exception $e){
		
		$conn->rollback();
		$msg = $e->getMessage();
		return $msg;
	}
  
	if ($conn != null)
		 $conn->close();
	}

	return $msg;
?>