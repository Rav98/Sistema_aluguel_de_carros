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
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="icon.css" rel="stylesheet" type="text/css" media="all" />

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
						<ul>
							<?php
								if($tipo == 'F'){
									echo "<li><a href='indexFuncionario.php' accesskey='1' title='Principal1'>Principal</a></li>";
								}
								if ($tipo == 'C'){
									echo "<li><a href='indexCliente.php' accesskey='1' title='Principal2'>Principal</a></li>";
								}
								if ($tipo == ''){
									echo "<li><a href='index.php' accesskey='1' title='Principal3'>Principal</a></li>";
								}
								
							?>
							<?php 
								if (isset($_SESSION['cpf'])) {
									print "<li><a href='login/logout.php' accesskey='2' title=''>Logout</a></li>";
								}
								else {
									print "<li><a href='login/login.php' accesskey='2' title=''>Login</a></li>";
								}
							?>
							<li><a href="categorias/economicos.php" accesskey="3" title="">Econômicos</a></li>
							<li><a href="categorias/utilitarios.php" accesskey="4" title="">Utilitários</a></li>
							<li><a href="categorias/suv.php" accesskey="5" title="">SUV</a></li>
							<li><a href="categorias/luxo.php" accesskey="6" title="">Luxo</a></li>
							<li class="current_page_item"><a href="contato.php" accesskey="7" title="">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="wrapper2">
				<div id="welcome" class="container">
					<div class="title">
						<h2>Entre em contato conosco!</h2>
					</div>
					<h1>Envie um e-mail para <strong>sigacarro@gmail.com</strong></h1>
					<h1>Ligue para: <strong>4002 8922</strong></h1>
				</div>
			</div>
		</div>
		<div id="wrapper1">
			<div id="espaço_container" class="container">
				<div class="title">
					<h2>Temos todos os tipos de automóveis!</h2>
					<img src="images/veiculos.png" alt="some text" width=800 height=280>
				</div>
			</div>
		</div>
		<div id="espaço_container" class="container">
			<div class="title">
				<h2>Acesse nossas redes sociais!</h2>
				<span class="byline">Estamos sempre a disposição de nossos clientes!</span>
			</div>
			<ul class="contact">
				<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
				<li><a href="#" class="icon icon-facebook"><span></span></a></li>
				<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
				<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
				<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
			</ul>
			<div id="espaço_container" class="container">
			</div>
		</div>
</body>

</html>