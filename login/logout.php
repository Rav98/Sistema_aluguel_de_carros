<?php
// Inicia a sessão.
session_start();

// Verificando se a variável user existe na sessão.
if (isset($_SESSION['cpf'])) {
	// Caso exista ela é removida da sessão.
	unset($_SESSION['cpf']);
}
header("location:../index.php");
?>