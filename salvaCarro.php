<?php
// Inicia a sessão.
#session_start();

include_once "bd.php";

#Recebe parâmetros para inserção no banco:

$placaAutomovel = $_POST['placaAutomovel'];
$corAutomovel = $_POST['corAutomovel'];
$chassisAutomovel = $_POST['chassisAutomovel'];
$direcaoAutomovel = 1; #$_POST['direcaoAutomovel'];
$ar_condicionadoAutomovel = 1;# $_POST['ar_condicionadoAutomovel'];
$manutencaoAutomovel = 1; # $_POST['manutencaoAutomovel'];
$nro_de_portaAutomovel = 1; #$_POST['nro_de_portaAutomovel'];
$quilometragemAutomovel = $_POST['quilometragemAutomovel'];
$marcaAutomovel = $_POST['marcaAutomovel'];
$tipo_de_combustivelAutomovel = $_POST['tipo_de_combustivelAutomovel'];
$renavamAutomovel = $_POST['renavamAutomovel'];
$tipoAutomovel = $_POST['tipoAutomovel'];
$transmissaoAutomovel = $_POST['transmissaoAutomovel'];
$statusAutomovel = 1;

# O banco de dados possui uma funcao para realizar as inserções:
$query = "INSERT INTO automovel VALUES ('$placaAutomovel','$corAutomovel','$chassisAutomovel','$direcaoAutomovel','$ar_condicionadoAutomovel','$manutencaoAutomovel','$nro_de_portaAutomovel','$quilometragemAutomovel', '$transmissaoAutomovel', '$marcaAutomovel','$tipo_de_combustivelAutomovel','$renavamAutomovel','$statusAutomovel','$tipoAutomovel')";
$cod = 1;
$stm = $db->prepare($query); 

if ($stm->execute()) {
    $flag = 1;
    
    /*
    $lastIdProduto = $db -> lastInsertId();
    
    # Insercao da imagem:
    if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0) {

        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        $nome = $_FILES['arquivo']['name'];

        // Pega a extensão
        $extensao = pathinfo($nome, PATHINFO_EXTENSION);

        // Converte a extensão para minúsculo
        $extensao = strtolower($extensao);

        // Somente imagens, .jpg;.jpeg;.gif;.png
        // Aqui eu enfileiro as extensões permitidas e separo por ';'
        // Isso serve apenas para eu poder pesquisar dentro desta String
        if (strstr('.jpg;.jpeg;.gif;.png;.jfif', $extensao)) {
            // Cria um nome único para esta imagem
            // Evita que duplique as imagens no servidor.
            // Evita nomes com acentos, espaços e caracteres não alfanuméricos
            $novoNome1 = uniqid(time()) . '.' . $extensao;

            // Concatena a pasta com o nome
            $destino = 'fotos/' . $novoNome1;

            // tenta mover o arquivo para o destino
            if (@move_uploaded_file($arquivo_tmp, $destino)) {
                $query = "UPDATE automovel SET fotos= %s WHERE placa = %s";
                $stm = $db -> prepare($query);
                $stm -> bindParam(1, $novoNome1);
                $stm -> bindParam(2, $lastIdProduto);
                if ($stm -> execute()) {
                    $flag = $flag + 1;
                }
            }
        }
    }
    
    */
    # Verificar se deu tudo certo

    # Se flag não vale zero, sinal que funcionou a inserção		
    if ($flag > 0) {
        header("location:index.php");
    } else {
        echo "<p>não inseriu</p>";
        #header("location:salvaCarro.php?error=salvaCarro");

    }
} 
else {
    print "<p>Faiô</p>";
    #header("location:salvaCarro.php?error=salvaCarro");
}


?>

