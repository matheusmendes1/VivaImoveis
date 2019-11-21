<?php

require "conexaoMysql.php";

class Clientes{

	public $nomeCliente;
	public $cpfCliente;

}

function getCliente(){

	$arrayClientes = null;

	$conn = conectaAoMySQL();

	$SQL = "SELECT CPF,Nome
    		FROM Cliente_Proprietario
  	   ";

	$result = $conn->query($SQL);
	if (! $result)
		throw new Exception('Ocorreu um erro ao recuperar os clientes: ' . $conn->error);

	if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$cliente = new Clientes();  		
			$cliente->nomeCliente = $row["Nome"];
			$cliente->cpfCliente = $row["CPF"]; 
			$arrayClientes[] = $cliente;
		}
	}

	if ($conn != null)
		$conn->close();

	return $arrayClientes;
}
?>