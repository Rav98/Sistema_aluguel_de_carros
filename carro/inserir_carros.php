<!DOCTYPE html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />

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
                        <div id="divtitulocadastra">Inserir Automovel</div>
                        <div id="wrapperlogin">
                            <form enctype="multipart/form-data" method="POST" action="salvaCarro.php">

                                <label id="textocadastra">Placa:</label>
                                <input type="text" id="campo" name="placaAutomovel" />
                                <br>

                                <label id="textocadastra">Cor:</label>
                                <input type="text" id="campo" name="corAutomovel" />
                                <br>

                                <label id="textocadastra">Chassis:</label>
                                <input type="text" id="campo" name="chassisAutomovel" />
                                <br>

                                <label id="textocadastra">Nro de Portas:</label>
                                <input type="text" id="campo" name="nro_de_portaAutomovel" />
                                <br>

                                <label id="textocadastra">Quilometragem:</label>
                                <input type="text" id="campo" name="quilometragemAutomovel" />
                                <br>

                                <label id="textocadastra">Trasmissão:</label>
                                <input type="text" id="campo" name="transmissaoAutomovel" />
                                <br>

                                <label id="textocadastra">Marca:</label>
                                <input type="text" id="campo" name="marcaAutomovel" />
                                <br>

                                <label id="textocadastra">Combustivel:</label>
                                <input type="text" id="campo" name="tipo_de_combustivelAutomovel" />
                                <br>

                                <label id="textocadastra">Renavam:</label>
                                <input type="text" id="campo" name="renavamAutomovel" />
                                <br>

                                <label id="textocadastra">Tipo:</label>
                                <input type="text" id="campo" name="tipoAutomovel" />
                                <br>

                                <label id="textocadastra">Valor por dia: </label>
                                <input type="text" id="campo" name="valorAutomovel"/>
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

                                <div id="wrapper1">
                                    <button type="submit" id="botaoCadastro" class="button">
                                        Confirmar cadastro no sistema
                                    </button>

                                    <button id="botaoCancelar" class="button" formaction="../indexFuncionario.php">
                                        Cancelar cadastro
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