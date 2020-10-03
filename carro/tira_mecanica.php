<?php
include_once "../bd.php";
$placaAutomovel = $_POST['placaAutomovel'];
$query = "SELECT * FROM automovel where placa = '$placaAutomovel'";
$stm = $db->prepare($query);
if ($stm->execute()) {
    while ($row = $stm->fetch()) {
        $placaAutomovel = $row['placa'];
        $corAutomovel = $row['cor'];
        $chassisAutomovel = $row['chassis'];
        $direcaoAutomovel = $row['direcao_assistida'];
        $ar_condicionadoAutomovel = $row['ar_condicionado'];
        $manutencaoAutomovel = $row['manutencao'];
        $nro_de_portaAutomovel = $row['nro_de_porta'];
        $quilometragemAutomovel = $row['quilometragem'];
        $transmissaoAutomovel = $row['transmissao'];
        $marcaAutomovel = $row['marca'];
        $tipo_de_combustivelAutomovel = $row['tipo_de_combustivel'];
        $renavamAutomovel = $row['renavam'];
        $statusAutomovel = $row['status'];
        $tipoAutomovel = $row['tipo'];
    }
}


# Query de inserção:
$query = "UPDATE automovel SET cor = manutencao = '0' WHERE placa = '$placaAutomovel'";
$stm = $db->prepare($query);

if ($stm->execute()) {
    header("location:todos_mecanica.php");
} else {
    print "<p>Faiô</p>";
    header("location:todos_mecanica.php?error=todos_mecanica.php");
}
?>