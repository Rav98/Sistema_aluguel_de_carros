<?php
include_once "../bd.php";
$placaAutomovel = $_POST['placaAutomovel'];


# Query de inserção:
$query = "UPDATE automovel SET manutencao = '0' WHERE placa = '$placaAutomovel'";
print "<p>$query</p>";
$stm = $db->prepare($query);

if ($stm->execute()) {
    header("location:todos_mecanica.php");
} else {
    print "<p>Faiô</p>";
    header("location:todos_mecanica.php?error=todos_mecanica.php");
}
?>