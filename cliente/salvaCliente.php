<?php
# Inicia a sessão.
#session_start();

include_once "../bd.php";

#Recebe parâmetros para inserção no banco:
$flag = 0;
$nomeCliente = $_POST['nomeCliente'];
$dataCliente = $_POST['dataCliente'];
$cpfCliente = $_POST['cpfCliente'];
$cepCliente = $_POST['cepCliente'];
$ruaCliente = $_POST['ruaCliente'];
$bairroCliente = $_POST['bairroCliente'];
$cidadeCliente = $_POST['cidadeCliente'];
$carteiraMotoraCliente = $_POST['carteiraMotoraCliente'];
$senhaCliente = $_POST['senhaCliente'];
$statusCliente = 1;


# Query de inserção:
$query = "INSERT INTO usuario VALUES ('$dataCliente', '$nomeCliente', '$cpfCliente', '$ruaCliente', '$bairroCliente', '$cidadeCliente', '$cepCliente', '$statusCliente', '$senhaCliente')";
$stm = $db->prepare($query);


if ($stm->execute()) {
    # Atributo cod_usuario eh autoincrement. Resgata-se ele na proxima query:
    $query = "SELECT cod_usuario FROM usuario WHERE cpf = '$cpfCliente'";
    $stm = $db->prepare($query);
    if ($stm->execute()) {
        while ($row = $stm->fetch()) {
            $codUsuario = $row['cod_usuario'];
        }
        # Insercao na tabela cliente:
        $query = "INSERT INTO cliente(carteira_de_motorista, cod_cliente) VALUES ('$carteiraMotoraCliente', '$codUsuario')";
        $stm = $db->prepare($query);
        if ($stm->execute()) {
            header("location:../index.php");
        }
        else {
            header("location:../cliente/salvaCliente.php?error=salvaCarro");
        }
    }
    else {
        echo "<p>Faiô</p>";
        header("location:../cliente/salvaCliente.php?error=salvaCarro");
    }


} else {
    echo "<p>Faiô</p>";
    # header("location:../cliente/salvaCliente.php?error=salvaCarro");
}
