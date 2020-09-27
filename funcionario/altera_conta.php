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
                        <div id="divtitulocadastra">Alterar conta funcionario</div>
                        <div id="wrapperlogin">
                            <form enctype="multipart/form-data" method="POST" action="salvaConta.php">

                                <label id="textocadastra">Nome:</label>
                                <input readonly="true" type="text" id="campo" name="nomeFuncionario" />
                                <br>

                                <label id="textodata">Data de nascimento (DD-MM-AAAA):</label>
                                <input readonly="true" type="text" id="campodata" name="dataFuncionario" />
                                <br>

                                <label id="textocadastra">CPF:</label>
                                <input readonly="true" type="text" id="campo" name="cpfFuncionario" />
                                <br>

                                <label id="textocadastra">CEP:</label>
                                <input readonly="true" type="text" id="campo" name="cepFuncionario" />
                                <br>

                                <label id="textocadastra">Rua:</label>
                                <input readonly="true" type="text" id="campo" name="ruaFuncionario" />
                                <br>

                                <label id="textocadastra">Bairro:</label>
                                <input readonly="true" type="text" id="campo" name="bairroFuncionario" />
                                <br>

                                <label id="textocadastra">Cidade:</label>
                                <input readonly="true" type="text" id="campo" name="cidadeFuncionario" />
                                <br>

                                <label id="textocadastra">Função:</label>
                                <input readonly="true" type="text" id="campo" name="funcaoFuncionario" />
                                <br>

                                <label id="textocadastra">Senha:</label>
                                <input readonly="true" type="text" id="campo" name="senhaFuncionario" />
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