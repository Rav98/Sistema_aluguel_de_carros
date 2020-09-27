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
                        <div id="divtitulocadastra">Altera dados Cliente</div>
                        <div id="wrapperlogin">
                            <form enctype="multipart/form-data" method="POST" action="salvaConta.php">

                                <label id="textocadastra">Nome:</label>
                                <input readonly="true" type="text" id="campo" name="nomeCliente" />
                                <br>

                                <label id="textodata">Data de nascimento (DD-MM-AAAA):</label>
                                <input readonly="true" type="text" id="campodata" name="dataCliente" />
                                <br>

                                <label id="textocadastra">CPF:</label>
                                <input readonly="true" type="text" id="campo" name="cpfCliente" />
                                <br>

                                <label id="textocadastra">CEP:</label>
                                <input readonly="true" type="text" id="campo" name="cepCliente" />
                                <br>

                                <label id="textocadastra">Rua:</label>
                                <input readonly="true" type="text" id="campo" name="ruaCliente" />
                                <br>

                                <label id="textocadastra">Bairro:</label>
                                <input readonly="true" type="text" id="campo" name="bairroCliente" />
                                <br>

                                <label id="textocadastra">Cidade:</label>
                                <input readonly="true" type="text" id="campo" name="cidadeCliente" />
                                <br>

                                <label id="textomotoristacleinte">Carteira de Motorista:</label>
                                <input readonly="true" type="text" id="campomotoristacleinte" name="carteiraMotoraCliente" />
                                <br>

                                <label id="textocadastra">Senha:</label>
                                <input readonly="true" type="text" id="campo" name="senhaCliente" />
                                <br>

                                <label id="textocadastra">Confirme a senha:</label>
                                <input readonly="true" type="text" id="campo" />
                                <br>

                                <div id="wrapper1">
                                    <button type="submit" id="botaoCadastro" class="button">
                                        Confirmar cadastro no sistema
                                    </button>

                                    <button id="botaoCancelar" class="button" formaction="../index.php">
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