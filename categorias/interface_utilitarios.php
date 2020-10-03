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

?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../icon.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../icon.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
    <div id="wrapper1">
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <div id="wrapper1">
                        <div id="espaço_container" class="container">
                            <div id="logo_site">
                                <img src="../images/carros_logo.png" alt="some text" width=940 height=200>
                            </div>
                        </div>
                    </div>
                    <h1><a href="#">Sistema de Gerenciamento de Aluguel de Carros</a></h1>
                    <div id="menu">
                        <li><a href="interface_economicos.php" accesskey="1" title="">Econômicos</a></li>
                        <li><a href="interface_suv.php" accesskey="2" title="">SUV</a></li>
                        <li class="current_page_item"><a href="interface_utilitarios.php" accesskey="3" title="">Utilitários</a></li>
                        <li><a href="interface_luxo.php" accesskey="4" title="">Luxo</a></li>
                        </ul>
                        <br>
                        <form enctype="multipart/form-data" method="POST" action="../indexCliente.php">
                            <button type="submit" id="botaovoltar" class="button">
                                Voltar para o menu
                            </button>
                        </form>
                    </div>
                    <?php
                    include_once "../bd.php";

                    #SQL para listagem
                    $query = "SELECT * FROM automovel WHERE tipo = 'Utilitario'";
                    $stm = $db->prepare($query);

                    #Executa o SQL
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

                            if ($direcaoAutomovel == 1) {
                                $direcaoAutomovel = "Sim";
                            } else {
                                $direcaoAutomovel = "Não";
                            }

                            if ($ar_condicionadoAutomovel == 1) {
                                $ar_condicionadoAutomovel = "Sim";
                            } else {
                                $ar_condicionadoAutomovel = "Não";
                            }
                            echo " 
								<div id='wrapper_carros'>
								<div id='portfolio' class='container_carros'>
									<div class='column10'>
										<div class='boxcar'>
											<span class='icon icon-shopping-cart'></span>
											<form enctype='multipart/form-data' method='POST' action='../carro/alugar_carro.php' >							
											<h33><strong>Modelo  </strong>$marcaAutomovel</h33>							
											<h33><strong>Placa:  </strong> <input type='text' id='camposemborda' readonly = 'true' name='placaAutomovel' value='$placaAutomovel' />  </h33>							
											<h33><strong>Cor:  </strong>$corAutomovel</h33>							
											<h33><strong>Direção assistida:  </strong>$direcaoAutomovel</h33>							
											<h33><strong>Ar condicionado:  </strong>$ar_condicionadoAutomovel</h33>						
											<h33><strong>Numero de porta:  </strong>$nro_de_portaAutomovel</h33>
											<h33><strong>Combustivel:  </strong>$tipo_de_combustivelAutomovel</h33>						
											<h33><strong>Quilometragem:  </strong>$quilometragemAutomovel</h33>						
											<h33><strong>Transmissão:  </strong>$transmissaoAutomovel</h33>
											<button type='submit' id='botaofun1' class='button'>
												Alugar 
											</button>
											</form>
										</div>
									</div>
								</div>
                            </div>";
                        }
                    }
                    ?>
                </div>
                <div id="espaço_container" class="container">
                    <div class="title">
                        <h2>Acesse nossas redes sociais!</h2>
                        <span class="byline">Estamos sempre a disposição de nossos clientes!</span>
                    </div>
                    <ul class="contact">
                        <li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
                        <li><a href="#" class="icon icon-facebook"><span></span></a></li>
                        <li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
                        <li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
                        <li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
                    </ul>
                    <div id="espaço_container" class="container">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>