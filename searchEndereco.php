<?php
require "conexaoMysql.php";


session_start();
if(! isset($_SESSION["nomeFuncionario"])){
   	session_destroy(); // Cancela/Exclui a sessão iniciada
	header('location: index.php');
}
	

$cep = "";

if (isset($_GET["cep"]))
        $cep = $_GET["cep"];


class Endereco{
	public $logradouro;
	public $bairro;
	public $cidade;
}

$address = new Endereco();

try
	{    
		// Função definida no arquivo conexaoMysql.php
		$conn = conectaAoMySQL();
		
		$SQL = "
		SELECT Logradouro, Bairro, Cidade FROM Endereco WHERE CEP = ? LIMIT 1
		";
		
		$result = $conn->prepare($SQL);
		$result->bind_param('s', $cep);
		$result->execute();
		$result->store_result();

		$result->bind_result($logradouro,$bairro,$cidade);
		$result->fetch();

		if(!$result)
		throw new Exception('Falha ao recuperar o endereço: ' . $conn->error);

		if ($result->num_rows == 1)
		{
	
			$address->logradouro = $logradouro;
			$address->bairro = $bairro;
			$address->cidade = $cidade;
	 
		}

		if(!$addressJSON = json_encode($address))
			throw new Exception("Falha na funcao json_encode do PHP");

		echo $addressJSON;
		
	}
	catch (Exception $e)
	{
		// altera o código de retorno de status para '500 Internal Server Error'.
    	// A função http_response_code deve ser chamada antes do script enviar qualquer
    	// texto para a saída padrão
    	http_response_code(500);

    	$msgErro = $e->getMessage();
    	echo $msgErro;
	}

	if ($conn != null)
		$conn->close();
?>