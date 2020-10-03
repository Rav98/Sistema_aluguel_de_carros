<?php
// Inicia a sessao.
session_start();


#Função JavaScript para alerta:
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

// Pegando os dados de login enviados.
$usuario = $_POST['cpf'];
$senha = $_POST['senha'];

/* Conectando com o banco de dados para cadastrar registros */
include_once "../bd.php";
	
$query = "SELECT * FROM usuario WHERE cpf=? AND senha=?";
$stm = $db->prepare($query);
$stm->bindParam(1, $usuario);
$stm->bindParam(2, $senha);
$stm->execute();

if ($row = $stm -> fetch()) {
	// Login efetuado com sucesso.

	// Armazenando usuario na sessao.
	$_SESSION['cod_usuario'] = $row['cod_usuario'];
	$_SESSION['data_nascimento'] = $row['data_nascimento'];
	$_SESSION['nome'] = $row['nome'];
	$_SESSION['cpf'] = $usuario;
	$_SESSION['rua'] = $row['rua'];
	$_SESSION['bairro'] = $row['bairro'];
	$_SESSION['cidade'] = $row['cidade'];
	$_SESSION['cep'] = $row['cep'];
	$_SESSION['status'] = $row['status'];
	$_SESSION['tipo'] = $row['tipo'];
	

	
	// Redirecionando para a pagina inicial.
	if($_SESSION['tipo'] == 'C'){
		header("location:../indexCliente.php");
	}
	if($_SESSION['tipo'] == 'F'){
		header ("location:../indexFuncionario.php");
	}
	
} else {
	phpAlert("Usuário ou senha incorretos. Tente novamente.");
	header("location:login.php");
}
