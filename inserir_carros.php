<!DOCTYPE html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
    <div id="wrapper1">
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <div id="wrapper1">
                        <div id="espaço_container" class="container">
                            <div id="logo_site">
                                <img src="images/carros_logo.png" alt="some text" width=940 height=200>
                            </div>
                        </div>
                    </div>
                    <h1><a href="#">Sistema de Gerenciamento de Aluguel de Carros</a></h1>
                    <div id="menu">
                        <li><a title="">Inserir Automovel</a></li>
                        <div id="wrapperlogin">
                            <form method="POST" action="salvaCarro.php">

                                <label id="textocadastra">Placa:</label>
                                <input type="text" name="placaAutomovel" />
                                <br>

                                <label id="textocadastra">Cor:</label>
                                <input type="text" name="corAutomovel" />
                                <br>

                                <label id="textocadastra">Chassis:</label>
                                <input type="text" name="chassisAutomovel" />
                                <br>

                                <label id="textocadastra">Número de Portas:</label>
                                <input type="text" name="nro_de_portaAutomovel" />
                                <br>

                                <label id="textocadastra">Quilometragem:</label>
                                <input type="text" name="quilometragemAutomovel" />
                                <br>

                                <label id="textocadastra">Trasmissão:</label>
                                <input type="text" name="transmissaoAutomovel" />
                                <br>

                                <label id="textocadastra">Marca:</label>
                                <input type="text" name="marcaAutomovel" />
                                <br>

                                <label id="textocadastra">Combustiv:</label>
                                <input type="text" name="tipo_de_combustivelAutomovel" />
                                <br>

                                <label id="textocadastra">Renavam:</label>
                                <input type="text" name="renavamAutomovel" />
                                <br>

                                <label id="textocadastra">Tipo:</label>
                                <input type="text" name="tipoAutomovel" />
                                <br>

                                <label id="textocadastracheck">Direção:</label>
                                <input type="checkbox" id="textocadastra" name="direcaoAutomovel" value="TRUE" />
                                <br>

                                <label id="textocadastracheck">Ar Condicionado: </label>
                                <input type="checkbox" id="textocadastra" name="ar_condicionadoAutomovel" value="TRUE" />
                                <br>

                                <label id="textocadastracheck">Manutenção: </label>
                                <input type="checkbox" id="textocadastra" name="manutencaoAutomovel" value="TRUE" />
                                <br>
                                <div>
                                <label id="textocadastra">Selecione uma foto do automovel:</label>
                                <input type="file" name="arquivos" accept="image/png, image/jpeg" multiple />
                                    <br>
                                </div>


                                <button type="submit" id="botaoCadastro" class="button">
                                    Confirmar cadastro no sistema
                                </button>

                                <button type="submit" id="botaoCancelar" class="button">
                                    Cancelar cadastro
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>