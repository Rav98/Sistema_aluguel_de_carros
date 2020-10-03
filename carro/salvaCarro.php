<?php
# Inicia a sessão.
#session_start();

include_once "../bd.php";

#Recebe parâmetros para inserção no banco:
$flag = 0;
$placaAutomovel = $_POST['placaAutomovel'];
$corAutomovel = $_POST['corAutomovel'];
$chassisAutomovel = $_POST['chassisAutomovel'];
$direcaoAutomovel = $_POST['direcaoAutomovel'];
$ar_condicionadoAutomovel = $_POST['ar_condicionadoAutomovel'];
$manutencaoAutomovel = $_POST['manutencaoAutomovel'];
$nro_de_portaAutomovel = $_POST['nro_de_portaAutomovel'];
$quilometragemAutomovel = $_POST['quilometragemAutomovel'];
$marcaAutomovel = $_POST['marcaAutomovel'];
$tipo_de_combustivelAutomovel = $_POST['tipo_de_combustivelAutomovel'];
$renavamAutomovel = $_POST['renavamAutomovel'];
$tipoAutomovel = $_POST['tipoAutomovel'];
$transmissaoAutomovel = $_POST['transmissaoAutomovel'];
$valorAutomovel = $_POST['valorAutomovel'];

$statusAutomovel = 1;

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

# Query de inserção:
$query = "INSERT INTO automovel VALUES ('$placaAutomovel','$corAutomovel','$chassisAutomovel','$direcaoAutomovel','$ar_condicionadoAutomovel','$manutencaoAutomovel','$nro_de_portaAutomovel','$quilometragemAutomovel', '$transmissaoAutomovel', '$marcaAutomovel','$tipo_de_combustivelAutomovel','$renavamAutomovel','$statusAutomovel','$tipoAutomovel','$valorAutomovel')";
$stm = $db->prepare($query);


if ($stm->execute()) {
    header("location:../indexFuncionario.php");
} else {
    header("location:salvaCarro.php?error=salvaCarro");
}
