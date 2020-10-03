<?php
// Inicia a sessão.
session_start();

#Função JavaScript para alerta:
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

// Verificando se a variável user existe na sessão.
if (isset($_SESSION['cpf'])) {
	// Caso exista ela é removida da sessão.
	unset($_SESSION['cpf']);
}
phpAlert("Você foi deslogado(a) do sistema.");
header("location:../index.php");
?>