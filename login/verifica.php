<?php
	//Inicia a sessão
	session_start();
 
	//Verifica se há dados ativos na sessão
	if(empty($_SESSION["user"]))
	{
		//Caso não exista dados registrados, exige login
		header("Location:login.php");
	}
?>