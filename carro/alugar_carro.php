<!DOCTYPE html>
<?php
$placaAutomovel = $_POST['placaAutomovel'];
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sistema de Gerenciamento de Aluguel de Automóveis</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />


    <!--- Esta funcao formata mascara dos inputs-->
    <script type="text/javascript">
		function formatar_mascara(src, mascara) {
 			var campo = src.value.length;
 			var saida = mascara.substring(0,1);
 			var texto = mascara.substring(campo);
 			if(texto.substring(0,1) != saida) {
 			src.value += texto.substring(0,1);
 			}
		}
    </script>

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
                        <div id="divtitulocadastra">Alocar Carro</div>
                        <div id="wrapperlogin">
                            <form enctype="multipart/form-data" method="POST" action="salvaAluguel.php">
                                <br>
                                <label id="textocadastra">Placa:</label>
                                <input type="text" id="campo" name="placa" readonly="true" <?php print "value='$placaAutomovel'" ?> />
                                <br>

                                <label id="textocadastra" >Data Locação:(A-M-D)</label>
                                <input type="text" id="campo" name="dataLocacao" maxlength="10" onkeypress="formatar_mascara(this,'####-##-##')"/>
                                <br>

                                <label id="textocadastra" >Data Devolução: (A-M-D)</label>
                                <input type="text" id="campo" name="dataDevolucao" maxlength="10" onkeypress="formatar_mascara(this,'####-##-##')"/>
                                <br>
                                <br>
                                <br>

                            
                                <div id="wrapper1">
                                    <button type="submit" id="botaoCadastro" class="button">
                                        Alugar
                                    </button>
                                    <button id="botaoCancelar" class="button" formaction="../indexCliente.php">
                                        Cancelar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>