<?php
// Inicia a sessão.
session_start();

// Verificando se a variável user existe na sessão.
if (isset($_SESSION['user'])) {
	// Caso exista ela é removida da sessão.
	unset($_SESSION['user']);
}
header("location:../index.php");
?>