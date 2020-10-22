<!DOCTYPE html>

<?php
// Inicia a sessão.
session_start();


include_once "../bd.php";
$cpfCliente = $_SESSION['cpf'];
$query = "SELECT * FROM usuario where cpf = '$cpfCliente'";
$stm = $db->prepare($query);
if ($stm->execute()){
    while ($row = $stm->fetch()){
        $dataUsuario = $row['data_nascimento'];
        $nomeUsuario = $row['nome'];
        $cpfUsuario = $row['cpf'];
        $cepUsuario = $row['cep'];
        $ruaUsuario = $row['rua'];
        $bairroUsuario = $row['bairro'];
        $cidadeUsuario = $row['cidade'];
        $senhaUsuario = $row['senha'];
        $statusUsuario = $row['status'];
        $codUsuario = $row['cod_usuario'];
    }
    $query = "SELECT * FROM funcionario where cod_func = '$codUsuario'";
        $stm = $db->prepare($query);
        if ($stm->execute()) {
            while ($row = $stm->fetch()) {
                $funcaoFuncionario = $row['funcao'];
            }
        }
}
?>

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
                        <div id="divtitulocadastra">Altera dados Funcionário</div>
                        <div id="wrapperlogin">
                            <form enctype="multipart/form-data" method="POST" action="salvaEditaFuncionario.php">
                                
                                
                                <label id="textocadastra">Código de Usuário:</label>
                                <input readonly="true" type="text" id="campo" name="codUsuario" value="<?php print $codUsuario; ?>" />
                                <br>
                                <br>

                                <label id="textocadastra">Nome:</label>
                                <input type="text" id="campo" name="nomeFunc" value="<?php print $nomeUsuario; ?>" />
                                <br>

                                <label id="textocadastra">Data de nascimento (A-D-M):</label>
                                <input type="text" id="campo" name="dataFunc" value="<?php print $dataUsuario; ?>"/>
                                <br>
                                <br>

                                <label id="textocadastra">CPF:</label>
                                <input readonly="true" type="text" id="campo" name="cpfFunc" value="<?php print $cpfCliente; ?>" />
                                <br>

                                <label id="textocadastra">CEP:</label>
                                <input type="text" id="campo" name="cepFunc" value="<?php print $cepUsuario; ?>"/>
                                <br>

                                <label id="textocadastra">Rua:</label>
                                <input type="text" id="campo" name="ruaFunc" value="<?php print $ruaUsuario; ?>"/>
                                <br>

                                <label id="textocadastra">Bairro:</label>
                                <input type="text" id="campo" name="bairroFunc" value="<?php print $bairroUsuario; ?>" />
                                <br>

                                <label id="textocadastra">Cidade:</label>
                                <input type="text" id="campo" name="cidadeFunc" value="<?php print $cidadeUsuario; ?>"/>
                                <br>

                                <label id="textocadastra">Função:</label>
                                <input type="text" id="campo" name="funcaoFuncionario" value="<?php print $funcaoFuncionario; ?>"/>
                                <br>

                                <label id="textocadastra">Senha:</label>
                                <input type="text" id="campo" name="senhaFunc" value="<?php print $senhaUsuario; ?>"/>
                                <br>

                                <label id="textocadastra">Status:</label>
                                <input type="checkbox" id="campo" name="statusFunc" <?php if ($statusUsuario) {
                                                                                                        echo "checked = 'checked'";
                                                                                                    } ?> />
                                <br>
                                <br>

                                <div id="wrapper1">
                                    <button type="submit" id="botaoCadastro" class="button">
                                        Confirmar edição
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