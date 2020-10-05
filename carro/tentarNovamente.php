<!DOCTYPE html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sistema de Gerenciamento de Aluguel de Automóveis</title>
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
                        <div id="divtitulocadastra"></div>
                        <div id="wrapperlogin">
                            <form enctype="multipart/form-data" method="POST" action="../categorias/interface_economicos.php">
                                <br>
                                <h2 id="textoproblema"><br>O veículo já se encontra alugado neste período. Por favor, troque o veículo ou a data.</h2>
                                <br>
                                <div id="wrapper1">
                                    <button type="submit" id="botaoCadastro" class="button">
                                        Tentar Novamente
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