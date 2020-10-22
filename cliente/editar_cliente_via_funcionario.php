<!DOCTYPE html>
<?php
// Inicia a sessão.
session_start();

if (isset($_SESSION['cpf'])) {
    $_SESSION['cpf'];
	$tipo = $_SESSION['tipo'];
}
else{
	$tipo = '';
}
?>
<?php
include_once "../bd.php";
$cpfCliente = $_POST['cpfCliente'];
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
    $query = "SELECT * FROM cliente where cod_cliente = '$codUsuario'";
        $stm = $db->prepare($query);
        if ($stm->execute()) {
            while ($row = $stm->fetch()) {
                $carteiraCliente = $row['carteira_de_motorista'];
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
                        <div id="divtitulocadastra">Altera dados Cliente</div>
                        <div id="wrapperlogin">
                            <form enctype="multipart/form-data" method="POST" action="salvaEditaCliente.php">
                               
                                <label id="textocadastra">Código de Usuário:</label>
                                <input readonly="true" type="text" id="campo" name="codUsuario" value="<?php print $codUsuario; ?>" />
                                <br>
                                <br>

                                <label id="textocadastra">Nome:</label>
                                <input type="text" id="campo" name="nomeCliente" value="<?php print $nomeUsuario; ?>" />
                                <br>

                                <label id="textocadastra">Data de nascimento (A-M-D):</label>
                                <input type="text" id="campo" name="dataCliente" value="<?php print $dataUsuario; ?>"/>
                                <br>
                                <br>

                                <label id="textocadastra">CPF:</label>
                                <input readonly="true" type="text" id="campo" name="cpfCliente" value="<?php print $cpfCliente; ?>" />
                                <br>

                                <label id="textocadastra">CEP:</label>
                                <input type="text" id="campo" name="cepCliente" value="<?php print $cepUsuario; ?>"/>
                                <br>

                                <label id="textocadastra">Rua:</label>
                                <input type="text" id="campo" name="ruaCliente" value="<?php print $ruaUsuario; ?>"/>
                                <br>

                                <label id="textocadastra">Bairro:</label>
                                <input type="text" id="campo" name="bairroCliente" value="<?php print $bairroUsuario; ?>" />
                                <br>

                                <label id="textocadastra">Cidade:</label>
                                <input type="text" id="campo" name="cidadeCliente" value="<?php print $cidadeUsuario; ?>"/>
                                <br>

                                <label id="textocadastra">Carteira de Motorista:</label>
                                <input type="text" id="campo" name="carteiraCliente" value="<?php print $carteiraCliente; ?>"/>
                                <br>
                                <br>

                                <label id="textocadastra">Senha:</label>
                                <input type="password" id="campo" name="senhaCliente" value="<?php print $senhaUsuario; ?>"/>
                                <br>
                                

                                <label id="textocadastra">Status:</label>
                                <input type="checkbox" id="campo" name="statusCliente" <?php if ($statusUsuario) {
                                                                                                        echo "checked = 'checked'";
                                                                                                    } ?> />
                                <br>
                                <br>

                                <div id="wrapper1">
                                    <button type="submit" id="botaoCadastro" class="button">
                                        Confirmar edição
                                    </button>
                                    
                                    <?php if ($tipo=='C') {
                                            echo "<button id='botaoCancelar' class='button' formaction='../indexCliente.php'>
                                            Cancelar cadastro
                                        </button>";
                                    }
                                        else{
                                            echo "<button id='botaoCancelar' class='button' formaction='../indexFuncionario.php'>
                                            Cancelar cadastro
                                        </button>";
                                        
                                            } ?> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>