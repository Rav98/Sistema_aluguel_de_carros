<!DOCTYPE html>

<?php
// Inicia a sessão.
session_start();
if (isset($_SESSION['cpf'])) {
    $cpf = $_SESSION['cpf'];
    $tipo = $_SESSION['tipo'];
} else {
    $tipo = '';
}

include_once "../bd.php";

#Recebe parâmetros para inserção no banco:
$flag = 0;
$codreserva = $_POST['codreserva'];
$codlocacao = $_POST['codlocacao'];



# Query de inserção:
$query = "DELETE FROM locacao WHERE cod_locacao = '$codlocacao'";
$stm = $db->prepare($query);
$stm->execute();

$query2 = "DELETE FROM reserva WHERE cod_reserva = '$codreserva'";
$stm2 = $db->prepare($query2);
if ($stm2->execute()) {
    header("location:../indexCliente.php");
}
else {
    header("location:../cliente/cancelar_reserva.php?error=cancelar_reserva");
}