<?php

if (!function_exists('conectaAoMySQL')){

define("HOST", "localhost");
define("USER", "id11333895_imoveluser");
define("PASSWORD", "imovelUser123");
define("DATABASE", "id11333895_vivaimoveis");
	
	function conectaAoMySQL()
	{
	    $conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
	    if ($conn->connect_error)
	        throw new Exception('Falha na conexão com o MySQL: ' . $conn->connect_error);

	    return $conn;
	}
}
?>