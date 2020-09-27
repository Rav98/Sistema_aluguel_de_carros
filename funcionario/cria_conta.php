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
                        <div id="divtitulocadastra">Criar uma conta no sistema</div>
                        <div id="wrapperlogin">
                            <form enctype="multipart/form-data" method="POST" action="salvaConta.php">

                                <label id="textocliente">Nome:</label>
                                <input type="text" id="campo" name="nomeCliente" />
                                <br>

                                <label id="textocliente">Data de nascimento (DD-MM-AAAA):</label>
                                <input type="text" id="campo" name="dataCliente" />
                                <br>

                                <label id="textocliente">CPF:</label>
                                <input type="text" id="campo" name="cpfCliente" />
                                <br>

                                <label id="textocliente">CEP:</label>
                                <input type="text" id="campo" name="cepCliente" />
                                <br>

                                <label id="textocliente">Rua:</label>
                                <input type="text" id="campo" name="ruaCliente" />
                                <br>

                                <label id="textocliente">Bairro:</label>
                                <input type="text" id="campo" name="bairroCliente" />
                                <br>

                                <label id="textocliente">Cidade:</label>
                                <input type="text" id="campo" name="cidadeCliente" />
                                <br>

                                <label id="textocliente">Senha:</label>
                                <input type="text" id="campo" name="senhaCliente" />
                                <br>

                                <label id="textocliente">Confirme a senha:</label>
                                <input type="text" id="campo" name="senhaCliente" />
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