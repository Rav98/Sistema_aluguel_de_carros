<!DOCTYPE html>
<?php
// Inicia a sessão.
session_start();

if (isset($_SESSION['cpf'])) {
	$cpf = $_SESSION['cpf'];
	$tipo = $_SESSION['tipo'];
}
else{
	$tipo = '';
}
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
                        <div id="divtitulocadastra">Pesquisar Cliente</div>
                        <div id="wrapperlogin">
                            <form enctype="multipart/form-data" method="POST" action="editar_cliente_via_funcionario.php">

                                <label id="textocadastra">CPF:</label>
                                <input type="text" id="campo" maxlength="14" onkeypress="formatar_mascara(this,'###.###.###-##')" name="cpfCliente" />
                                <br>
                                <div id="wrapper1">
                                    <button type="submit" id="botaoCadastro" class="button">
                                        Pesquisar
                                    </button>
                                    <button id="botaoCancelar" class="button" formaction="../indexFuncionario.php">
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