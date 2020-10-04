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
                    <br>
                    <form enctype="multipart/form-data" method="POST" action="../indexCliente.php">
                        <button type="submit" id="botaovoltar" class="button">
                            Voltar para o menu principal
                        </button>
                    </form>
                    <?php
                include_once "../bd.php";

                #SQL para listagem
                $query = "SELECT c.cod_cliente FROM cliente c, usuario u WHERE u.cpf = '$cpf'";
                $stm = $db->prepare($query);
                if ($stm->execute()) {
                    while ($row = $stm->fetch()) {
                        $codCliente = $row[0];

                        $query2 = "SELECT * FROM reserva WHERE cod_cliente = '$codCliente'";
                        $stm2 = $db->prepare($query2);
                        if ($stm2->execute()) {
                            while ($row = $stm2->fetch()) {
                                $codautomovel = $row['cod_automovel'];
                                $status = $row['status'];
                                $codlocacao = $row['cod_locacao'];
                                $codreserva=$row['cod_reserva'];

                                $query3 = " SELECT * FROM locacao WHERE cod_locacao = '$codlocacao' ";
                                $stm3 = $db->prepare($query3);
                                if ($stm3->execute()) {
                                    while ($row = $stm3->fetch()) {
                                        $valortotal = $row['valor_total'];
                                        $datadevolucao = $row['data_devolucao'];
                                        $datalocacao = $row['data_alocacao'];

                                        $query4 = " SELECT * FROM automovel WHERE placa = '$codautomovel' ";
                                        $stm4 = $db->prepare($query4);
                                        if ($stm4->execute()) {
                                            while ($row = $stm4->fetch()) {
                                                $modelocarro = $row['marca'];
                                                $tipocarro = $row['tipo'];
                                                
                                                echo " 
                                                            <div id='wrapper_carros'>
                                                            <div id='portfolio' class='container_carros'>
                                                                <div class='column10'>
                                                                    <div class='boxcar'>
                                                                        <span class='icon icon-shopping-cart'></span>
                                                                        <form enctype='multipart/form-data' method='POST' action='cancelar_reserva.php' >							
                                                                        <h33><strong>Carro: </strong>$modelocarro</h33>							
                                                                        <h33><strong>Tipo do carro: </strong>$tipocarro</h33>
                                                                        <h33><strong>Data locação: </strong>$datalocacao</h33>
                                                                        <h33><strong>Data Devolução: </strong>$datadevolucao</h33>
                                                                        <h33><strong>Valor total:  </strong> $valortotal</h33>
                                                                        <h33><strong>reserva:  </strong> <input readonly='true' type='text' id='camposemborda' name='codreserva' value='$codreserva' /></h33>
                                                                        <h33><strong>locação:  </strong> <input readonly='true' type='text' id='camposemborda' name='codlocacao' value='$codlocacao' /></h33>
                                                                        <button type='submit' id='botaofun1' class='button'>
                                                                            Cancelar reserva
                                                                        </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>";
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                ?>
                </div>
               

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