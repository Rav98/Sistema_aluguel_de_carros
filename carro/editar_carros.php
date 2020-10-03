<!DOCTYPE html>

<?php
include_once "../bd.php";
$placaAutomovel = $_POST['placaAutomovel'];
$query = "SELECT * FROM automovel where placa = '$placaAutomovel'";
$stm = $db->prepare($query);
if ($stm->execute()) {
    while ($row = $stm->fetch()) {
        $placaAutomovel = $row['placa'];
        $corAutomovel = $row['cor'];
        $chassisAutomovel = $row['chassis'];
        $direcaoAutomovel = $row['direcao_assistida'];
        $ar_condicionadoAutomovel = $row['ar_condicionado'];
        $manutencaoAutomovel = $row['manutencao'];
        $nro_de_portaAutomovel = $row['nro_de_porta'];
        $quilometragemAutomovel = $row['quilometragem'];
        $transmissaoAutomovel = $row['transmissao'];
        $marcaAutomovel = $row['marca'];
        $tipo_de_combustivelAutomovel = $row['tipo_de_combustivel'];
        $renavamAutomovel = $row['renavam'];
        $statusAutomovel = $row['status'];
        $tipoAutomovel = $row['tipo'];
        $valorAutomovel = $row['valor'];
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
                            <form enctype="multipart/form-data" method="POST" action="salvaEditaCarro.php">

                                <label id="textocadastra">Placa:</label>
                                <input readonly="true" type="text" id="campo" name="placaAutomovel" value="<?php print $placaAutomovel; ?>" />
                                <br>

                                <label id="textocadastra">Cor:</label>
                                <input type="text" id="campo" name="corAutomovel" value="<?php print $corAutomovel; ?>" />
                                <br>

                                <label id="textocadastra">Chassis:</label>
                                <input type="text" id="campo" name="chassisAutomovel" value="<?php print $chassisAutomovel; ?>" />
                                <br>

                                <label id="textocadastra">Nro de Portas:</label>
                                <input type="text" id="campo" name="nro_de_portaAutomovel" value="<?php print $nro_de_portaAutomovel; ?>" />
                                <br>

                                <label id="textocadastra">Quilometragem:</label>
                                <input type="text" id="campo" name="quilometragemAutomovel" value="<?php print $quilometragemAutomovel; ?>" />
                                <br>

                                <label id="textocadastra">Trasmissão:</label>
                                <input type="text" id="campo" name="transmissaoAutomovel" value="<?php print $transmissaoAutomovel; ?>" />
                                <br>

                                <label id="textocadastra">Marca:</label>
                                <input type="text" id="campo" name="marcaAutomovel" value="<?php print $marcaAutomovel; ?>" />
                                <br>

                                <label id="textocadastra">Combustivel:</label>
                                <input type="text" id="campo" name="tipo_de_combustivelAutomovel" value="<?php print $tipo_de_combustivelAutomovel; ?>" />
                                <br>

                                <label id="textocadastra">Renavam:</label>
                                <input type="text" id="campo" name="renavamAutomovel" value="<?php print $renavamAutomovel; ?>" />
                                <br>

                                <label id="textocadastra">Tipo:</label>
                                <input type="text" id="campo" name="tipoAutomovel" value="<?php print $tipoAutomovel; ?>" />
                                <br>

                                <label id="textocadastra">Valor por dia: </label>
                                <input type="text" id="campo" name="valorAutomovel" value="<?php print $valorAutomovel; ?>" />
                                <br>

                                <label id="textocadastracheck">Direção:</label>
                                <input type="checkbox" id="textocadastra" name="direcaoAutomovel" <?php if ($direcaoAutomovel) {
                                                                                                        echo "checked = 'checked'";
                                                                                                    } ?> />
                                <br>

                                <label id="textocadastracheck">Ar Condicionado: </label>
                                <input type="checkbox" id="textocadastra" name="ar_condicionadoAutomovel" <?php if ($ar_condicionadoAutomovel) {
                                                                                                                echo "checked = 'checked'";
                                                                                                            } ?> />
                                <br>

                                <label id="textocadastracheck">Manutenção: </label>
                                <input type="checkbox" id="textocadastra" name="manutencaoAutomovel" <?php if ($manutencaoAutomovel) {
                                                                                                            echo "checked = 'checked'";
                                                                                                        } ?> />
                                <br>

                                <label id="textocadastracheck">Status: </label>
                                <input type="checkbox" id="textocadastra" name="statusAutomovel" <?php if ($statusAutomovel) {
                                                                                                        echo "checked = 'checked'";
                                                                                                    } ?> />
                                <br>

                                <div id="wrapper1">
                                    <button type="submit" id="botaoCadastro" class="button">
                                        Confirmar edições no sistema
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