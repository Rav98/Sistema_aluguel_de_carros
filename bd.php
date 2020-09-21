<?php
// Inicia a sessão.
session_start();

/* Conectando com o banco de dados para cadastrar registros */

$datasource = 'pgsql:host= 177.44.64.105; port=1998 ;dbname=sis_car_aluguel';
$user = 'postgres';
$pass = 'bd123';
$db = new PDO($datasource, $user, $pass);
	
$query = "SELECT listarclientes()";
$stm = $db->prepare($query);
$stm->execute();


?>