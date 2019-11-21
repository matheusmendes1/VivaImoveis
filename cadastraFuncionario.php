<?php

session_start();
if(! isset($_SESSION["nomeFuncionario"])){
   	session_destroy(); // Cancela/Exclui a sessão iniciada
	header('location: index.php');
}

require "conexaoMysql.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$nomeFuncionario = filtraEntrada($_POST["nomeFuncionario"]);
	$cpfFuncionario =  filtraEntrada($_POST["cpfFuncionario"]);
	$ruaFuncionario =  filtraEntrada($_POST["ruaFuncionario"]);
	$numeroRuaFuncionario =  filtraEntrada($_POST["numeroRuaFuncionario"]);
	$bairroFuncionario =  filtraEntrada($_POST["bairroFuncionario"]);
	$cidadeFuncionario =  filtraEntrada($_POST["cidadeFuncionario"]);
	$dataIngressoFuncionario =  filtraEntrada($_POST["dataIngressoFuncionario"]); 
	$telefoneFuncionario =  filtraEntrada($_POST["telefoneFuncionario"]);
	$celularFuncionario =  filtraEntrada($_POST["celularFuncionario"]);
	$cargoFuncionario =  filtraEntrada($_POST["cargoFuncionario"]);
	$salarioFuncionario =  filtraEntrada($_POST["salarioFuncionario"]);
	$emailFuncionario =  filtraEntrada($_POST["emailFuncionario"]);
	$senhaFuncionario =  filtraEntrada($_POST["senhaFuncionario"]);

	$conn = conectaAoMySQL();

	$result = cadastraFuncionario($conn,$nomeFuncionario,$cpfFuncionario,$ruaFuncionario,$numeroRuaFuncionario,
								  $bairroFuncionario,$cidadeFuncionario,$dataIngressoFuncionario,$telefoneFuncionario,
								  $celularFuncionario,$cargoFuncionario,$salarioFuncionario,$emailFuncionario,$senhaFuncionario);
	
	if($result == 'Email já cadastrado!'){
		?>
		<script type="text/javascript">
			alert("Email já cadastrado!");
			window.location.href = "restrict.php";
		</script>
		<?php
	}else if($result == 'Funcionario Cadastrado com Sucesso!'){
		?>
		<script type="text/javascript">
			alert("Funcionario Cadastrado com Sucesso!");
			window.location.href = "restrict.php";
		</script>
		<?php
	}else if($result == 'Falha ao cadastrar funcionario!'){
		?>
		<script type="text/javascript">
			alert("Falha ao cadastrar usuario!");
			window.location.href = "restrict.php";
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("Ocorreu um erro ao cadastrar o funcionario!");
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

function cadastraFuncionario($conn,$nomeFuncionario,$cpfFuncionario,$ruaFuncionario,$numeroRuaFuncionario,
							 $bairroFuncionario,$cidadeFuncionario,$dataIngressoFuncionario,$telefoneFuncionario,
							 $celularFuncionario,$cargoFuncionario,$salarioFuncionario,$emailFuncionario,$senhaFuncionario)
{
  $sucesso = false;

  $SQL = "
    SELECT Usuario
    FROM Funcionario
    WHERE Usuario = '$emailFuncionario'
  ";
  $msg = '';

  if (!$resultado = $conn->query($SQL)){
  	 $msg = 'Falha ao buscar funcionario!';
  	 return $msg;
  }
    

  if ($resultado->num_rows > 0){
  	 $msg = 'Email já cadastrado!';
  	 return $msg;
  }
    
  // Cria uma senha hash de 60 caracteres utilizando o algoritmo
  // padrão (atualmente, o bcrypt)
  $senhaHash = password_hash($senhaFuncionario, PASSWORD_DEFAULT);

  $ruaFuncionario = $ruaFuncionario.', Nº: '.$numeroRuaFuncionario.', '.$bairroFuncionario. ' - '.$cidadeFuncionario;

  $SQL = "
INSERT INTO Funcionario VALUES (null,'$nomeFuncionario','$telefoneFuncionario','$cpfFuncionario','$ruaFuncionario',											'$celularFuncionario', DATE '$dataIngressoFuncionario','$cargoFuncionario','$salarioFuncionario',
								'$emailFuncionario','$senhaHash');
  ";
  
  if (!$conn->query($SQL)){
  	$msg = 'Falha ao cadastrar funcionario!';
  }else{
  	$msg = 'Funcionario Cadastrado com Sucesso!';
  }
     
    return $msg; 
}
if ($conn != null)
		$conn->close();

?>