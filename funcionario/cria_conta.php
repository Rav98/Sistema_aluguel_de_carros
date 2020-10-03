<!DOCTYPE html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
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
                        <div id="divtitulocadastra">Criar uma conta no sistema</div>
                        <div id="wrapperlogin">
                            <form enctype="multipart/form-data" method="POST" action="salvaFuncionario.php">

                                <label id="textocadastra">Nome:</label>
                                <input type="text" id="campo" name="nomeFuncionario" />
                                <br>

                                <label id="textocadastra">Data de nascimento (AAAA-MM-DD):</label>
                                <input type="text" id="campo" maxlength="10" onkeypress="formatar_mascara(this,'####-##-##')" name="dataFuncionario" />
                                <br>
                                <br>

                                <label id="textocadastra">CPF:</label>
                                <input type="text" id="campo" maxlength="14" onkeypress="formatar_mascara(this,'###.###.###-##')" name="cpfFuncionario" />
                                <br>

                                <label id="textocadastra">CEP:</label>
                                <input type="text" id="campo" maxlength="10" onkeypress="formatar_mascara(this,'##.###-###')" name="cepFuncionario" />
                                <br>

                                <label id="textocadastra">Rua:</label>
                                <input type="text" id="campo" name="ruaFuncionario" />
                                <br>

                                <label id="textocadastra">Bairro:</label>
                                <input type="text" id="campo" name="bairroFuncionario" />
                                <br>

                                <label id="textocadastra">Cidade:</label>
                                <input type="text" id="campo" name="cidadeFuncionario" />
                                <br>

                                <label id="textocadastra">Função:</label>
                                <input type="text" id="campo" name="funcaoFuncionario" />
                                <br>

                                <label id="textocadastra">Senha:</label>
                                <input type="password" id="campo" name="senhaFuncionario" />
                                <br>

                                <label id="textocadastra">Confirme a senha:</label>
                                <input type="password" id="campo" />
                                <br>
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