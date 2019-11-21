<?php
require "conexaoMysql.php";

function filtraEntrada($dado)
{
    $dado = trim($dado);               // remove espaços no inicio e no final da string
    $dado = stripslashes($dado);       // remove contra barras: "cobra d\'agua" vira "cobra d'agua"
    $dado = htmlspecialchars($dado);   // caracteres especiais do HTML (como < e >) são codificados

    return $dado;
}

$proposito = "";

if (isset($_GET["proposito"]))
        $proposito = filtraEntrada($_GET["proposito"]);

$arrayBairros = null;
try
	{    
		// Função definida no arquivo conexaoMysql.php
		$conn = conectaAoMySQL();
		
		$SQL = "
		SELECT DISTINCT Bairro FROM Imovel WHERE Proposito = ?
		";
		
		$result = $conn->prepare($SQL);
		$result->bind_param('s', $proposito);
		$result->execute();
		$result->store_result();

		$result->bind_result($bairro);

		if(!$result)
		throw new Exception('Falha ao recuperar os Bairros: ' . $conn->error);

		if ($result->num_rows > 0)
		{
			while ($result->fetch())
			{

				$arrayBairros[] = $bairro;
			}
		}

		if(!$bairrosJSON = json_encode($arrayBairros))
			throw new Exception("Falha na funcao json_encode do PHP");

		echo $bairrosJSON;
		
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