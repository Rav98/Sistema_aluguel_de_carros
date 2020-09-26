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
                            <form method="post" action="salvaCarro.php">

                                <label id="textologin">Placa:</label>
                                <input type="text" name="placaAutomovel" />
                                <br>

                                <label id="textologin">Cor:</label>
                                <input type="text" name="corAutomovel" />
                                <br>

                                <label id="textologin">Chassis:</label>
                                <input type="text" name="chassisAutomovel" />
                                <br>

                                <label id="textologin">Direção:</label>
                                <input type="text" name="direcaoAutomovel" />
                                <br>

                                <label id="textologin">Ar Cond: </label>
                                <input type="text" name="ar_condicionadoAutomovel" />
                                <br>

                                <label id="textologin">Manuten: </label>
                                <input type="text" name="manutencaoAutomovel" />
                                <br>

                                <label id="textologin">Nro Portas:</label>
                                <input type="text" name="nro_de_portasAutomovel" />
                                <br>

                                <label id="textologin">KM:</label>
                                <input type="text" name="quilometragemAutomovel" />
                                <br>

                                <label id="textologin">Trasmissão:</label>
                                <input type="text" name="transmissaoAutomovel" />
                                <br>

                                <label id="textologin">Marca:</label>
                                <input type="text" name="marcaAutomovel" />
                                <br>

                                <label id="textologin">Combustiv:</label>
                                <input type="text" name="tipo_de_combustivelAutomovel" />
                                <br>

                                <label id="textologin">Renavam:</label>
                                <input type="text" name="renavamAutomovel" />
                                <br>

                                <label id="textologin">Tipo:</label>
                                <input type="text" name="tipoAutomovel" />
                                <br>

                                <button type="submit" id="botaoCadastro" class="button">
                                    Confirmar cadastro no sistema
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>