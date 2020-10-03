<?php
# Inicia a sessão.
#session_start();

include_once "../bd.php";

#Recebe parâmetros para inserção no banco:
$flag = 0;
$nomeFuncionario = $_POST['nomeFuncionario'];
$dataFuncionario = $_POST['dataFuncionario'];
$cpfFuncionario = $_POST['cpfFuncionario'];
$cepFuncionario = $_POST['cepFuncionario'];
$ruaFuncionario = $_POST['ruaFuncionario'];
$bairroFuncionario = $_POST['bairroFuncionario'];
$cidadeFuncionario = $_POST['cidadeFuncionario'];
$funcaoFuncionario = $_POST['funcaoFuncionario'];
$senhaFuncionario = $_POST['senhaFuncionario'];
$statusFuncionario = 1;


# Query de inserção:
$query = "INSERT INTO usuario
(data_nascimento, nome, cpf, rua, bairro, cidade, cep, status, senha, tipo) 
VALUES ('$dataFuncionario', '$nomeFuncionario', '$cpfFuncionario', '$ruaFuncionario', '$bairroFuncionario', '$cidadeFuncionario', '$cepFuncionario', '$statusFuncionario', '$senhaFuncionario', 'F')";
# print "<p>$query</p>";
$stm = $db->prepare($query);

if ($stm->execute()) {
    # Atributo cod_usuario eh autoincrement. Resgata-se ele na proxima query:
    $query = "SELECT cod_usuario FROM usuario WHERE cpf = '$cpfFuncionario'";
    # print "<p>query</p>";
    $stm = $db->prepare($query);
    if ($stm->execute()) {
        while ($row = $stm->fetch()) {
            $codUsuario = $row['cod_usuario'];
        }
        # Insercao na tabela cliente:
        $query = "INSERT INTO funcionario(funcao, cod_func) VALUES ('$funcaoFuncionario', '$codUsuario')";
        $stm = $db->prepare($query);
        if ($stm->execute()) {
            header("location:../index.php");
        }
        else {
            header("location:../funcionario/salvaFuncionario.php?error=salvaFuncionario");
        }
    }
    else {
        header("location:../funcionario/salvaFuncionario.php?error=salvaFuncionario");
    }


} else {
    #header("location:../funcionario/salvaFuncionario.php?error=salvaFuncionario");
}
