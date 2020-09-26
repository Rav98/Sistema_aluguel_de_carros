<?php
// Inicia a sessão.
session_start();

if (isset($_SESSION['user'])) {
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
    $marcaAutomovel = $_POST['marcaAutomovel'];
    $tipo_de_combustivelAutomovel = $_POST['tipo_de_combustivelAutomovel'];
    $renavamAutomovel = $_POST['renavamAutomovel'];
    $statusAutomovel = $_POST['statusAutomovel'];
    $tipoAutomovel = $_POST['tipoAutomovel'];
    $transmissaoAutomovel = $_POST['transmissaoAutomovel'];

	/* Conectando com o banco de dados para cadastrar registros */

	# O banco de dados possui uma funcao para realizar as inserções:
	$query = "SELECT inserirautomovel(%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)";

    $stm = $db -> prepare($query); 
    $stm -> bindParam(1, $placaAutomovel);
    $stm -> bindParam(2, $corAutomovel);
    $stm -> bindParam(3, $chassisAutomovel);
    $stm -> bindParam(4, $direcaoAutomovel);
    $stm -> bindParam(5, $ar_condicionadoAutomovel);
    $stm -> bindParam(6, $manutencaoAutomovel);
    $stm -> bindParam(7, $nro_de_portaAutomovel);
    $stm -> bindParam(8, $quilometragemAutomovel);
    $stm -> bindParam(9, $marcaAutomovel);
    $stm -> bindParam(10, $tipo_de_combustivelAutomovel);
    $stm -> bindParam(11, $renavamAutomovel);
    $stm -> bindParam(12, $statusAutomovel);
    $stm -> bindParam(13, $tipoAutomovel);
    $stm -> bindParam(14, $transmissaoAutomovel);

    
	$flag = 0;
	
	if ($stm -> execute()) {

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

		/* Verificar se deu tudo certo
		 *
		 */

        # Se flag não vale zero, sinal que funcionou a inserção		
		if ($flag > 0) {
			header("location:../index.php");
		} else {
			header("location:cadastrarProduto.php?error=cadastroProduto");

		}
	} else {
		 header("location:cadastrarProduto.php?error=cadastroProduto");

	}

}
?>
