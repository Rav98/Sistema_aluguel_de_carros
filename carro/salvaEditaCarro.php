<?php
# Inicia a sessão.
#session_start();

include_once "../bd.php";

#Recebe parâmetros para inserção no banco:
$placaAutomovel = $_POST['placaAutomovel'];
$corAutomovel = $_POST['corAutomovel'];
$chassisAutomovel = $_POST['chassisAutomovel'];
$direcaoAutomovel = $_POST['direcaoAutomovel'];
$ar_condicionadoAutomovel = $_POST['ar_condicionadoAutomovel'];
$manutencaoAutomovel = $_POST['manutencaoAutomovel'];
$nro_de_portaAutomovel = $_POST['nro_de_portaAutomovel'];
$quilometragemAutomovel = $_POST['quilometragemAutomovel'];
$transmissaoAutomovel = $_POST['transmissaoAutomovel'];
$marcaAutomovel = $_POST['marcaAutomovel'];
$tipo_de_combustivelAutomovel = $_POST['tipo_de_combustivelAutomovel'];
$renavamAutomovel = $_POST['renavamAutomovel'];
$statusAutomovel = $_POST['statusAutomovel'];
$tipoAutomovel = $_POST['tipoAutomovel'];
$valorAutomovel = $_POST['valorAutomovel'];


if (isset($ar_condicionadoAutomovel)) {
    $ar_condicionadoAutomovel = 1;
} else {
    $ar_condicionadoAutomovel = 0;
}

if (isset($direcaoAutomovel)) {
    $direcaoAutomovel = 1;
} else {
    $direcaoAutomovel = 0;
}

if (isset($manutencaoAutomovel)) {
    $manutencaoAutomovel = 1;
} else {
    $manutencaoAutomovel = 0;
}

if (isset($statusAutomovel)) {
    $statusAutomovel = 1;
} else {
    $statusAutomovel = 0;
}




# Query de inserção:
$query = "UPDATE automovel SET cor = '$corAutomovel', chassis = '$chassisAutomovel', direcao_assistida = '$direcaoAutomovel', ar_condicionado = '$ar_condicionadoAutomovel', manutencao = '$manutencaoAutomovel', nro_de_porta = '$nro_de_portaAutomovel', quilometragem = '$quilometragemAutomovel', transmissao = '$transmissaoAutomovel', marca = '$marcaAutomovel', tipo_de_combustivel = '$tipo_de_combustivelAutomovel', renavam = '$renavamAutomovel', status = '$statusAutomovel', tipo = '$tipoAutomovel', valor = '$valorAutomovel' WHERE placa = '$placaAutomovel'";
$stm = $db->prepare($query);

if ($stm->execute()) {
    header("location:../indexFuncionario.php");
} else {
    print "<p>Faiô</p>";
    header("location:salvaEditaCarro.php?error=salvaEdiaCarro");
}
