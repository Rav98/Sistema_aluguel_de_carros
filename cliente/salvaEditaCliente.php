<?php
# Inicia a sessão.
#session_start();

include_once "../bd.php";

#Recebe parâmetros para inserção no banco:
$codCliente = $_POST['codUsuario'];
$nomeCliente = $_POST['nomeCliente'];
$dataCliente = $_POST['dataCliente'];
$cpfCliente = $_POST['cpfCliente'];
$cepCliente = $_POST['cepCliente'];
$ruaCliente = $_POST['ruaCliente'];
$bairroCliente = $_POST['bairroCliente'];
$cidadeCliente = $_POST['cidadeCliente'];
$carteiraMotoraCliente = $_POST['carteiraCliente'];
$senhaCliente = $_POST['senhaCliente'];
$statusCliente = $_POST['statusCliente'];


if (isset($statusCliente)) {
    $statusCliente = 1;
} else {
    $statusCliente = 0;
}


# Query de update cliente:
$query = "UPDATE cliente SET carteira_de_motorista = '$carteiraMotoraCliente' WHERE cod_cliente = '$codCliente'";
$stm = $db->prepare($query);
if ($stm->execute()) {
    $query = "UPDATE usuario SET data_nascimento = '$dataCliente', nome = '$nomeCliente', rua = '$ruaCliente', bairro = '$bairroCliente', cidade = '$cidadeCliente', cep = '$cepCliente', status = '$statusCliente', senha = '$senhaCliente' WHERE cod_usuario = '$codCliente'";
    $stm = $db->prepare($query);
    if($stm->execute()){
        header("location:../index.php");
    }
    else{
        header("location:salvaEditaCliente.php?error=salvaEditaCliente");
    }
} else {
    header("location:salvaEditaCliente.php?error=salvaEditaCliente");
}
