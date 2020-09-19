<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Embellished 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140207

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
<link href="../default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="wrapper1">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo"> <span class="icon icon-cogs"></span>
				<h1><a href="#">Sistema de Gerenciamento de Aluguel de Carros</a></h1>
				<!--<span>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a></span> </div>-->
			<div id="menu">
				<ul>
					<li><a href="../index.php" accesskey="1" title="">Home</a></li>
					<li class="current_page_item"><a href="current_page_item" accesskey="2" title="">Login</a></li>
					<li><a href="../economicos.php" accesskey="3" title="">Econômicos</a></li>
					<li><a href="../utilitarios.php" accesskey="4" title="">Utilitários</a></li>
					<li><a href="../suv.php" accesskey="5" title="">SUV</a></li>
					<li><a href="../luxo.php" accesskey="6" title="">Luxo</a></li>
					<li><a href="../contato.php" accesskey="7" title="">Contato</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="divlogin" class="container" >
		<form method="post" action="confirmalogin.php">
			<label text-align="center" style="width: 90px; height: 2px; display: inline-block;
			color: black; font-family: 'Open Sans', Arial, Helvetica, sans-serif; size: 15px;">CPF:</label>
			<input type="text" name="cpf" />
			<br>
			<label style="width: 90px; height: 2px; display: inline-block;
			color: black; font-family: 'Open Sans', Arial, Helvetica, sans-serif; size: 15px;">Senha</label>
			<input type="password" name="senha" />
			<br>
			<button type="submit" id="botaoEntrar" class="button fit">
				Entrar
			</button>
		</form>

		<form method="post" action="../criarconta.php">
			<button type="submit" id="botaoCriarConta" class="button fit">
				Criar conta
			</button>
		</form>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Todos os direitos reservados. | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
