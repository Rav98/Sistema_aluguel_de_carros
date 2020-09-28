<!DOCTYPE html>


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../icon.css" rel="stylesheet" type="text/css" media="all" />

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
						<ul>
							<li><a href="../index.php" accesskey="1" title="">Principal</a></li>
							<li><a href="../login/login.php" accesskey="2" title="">Login</a></li>
							<li><a href="economicos.php" accesskey="3" title="">Econômicos</a></li>
							<li class="current_page_item"><a href="utilitarios.php" accesskey="4" title="">Utilitários</a></li>
							<li><a href="suv.php" accesskey="5" title="">SUV</a></li>
							<li><a href="luxo.php" accesskey="6" title="">Luxo</a></li>
							<li><a href="../contato.php" accesskey="7" title="">Contato</a></li>
						</ul>
					</div>
				</div>
				<?php
				include_once "../bd.php";

				#SQL para listagem
				$query = "SELECT * FROM automovel WHERE tipo = 'Utilitario'";
				$stm = $db->prepare($query);

				#Executa o SQL
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

						echo "<div id='divcategoria'> 
						.....
						<div id='divdealhes'>
							 Marca: $marcaAutomovel
							<br>
							Placa: $placaAutomovel
							<br>
							Cor: $corAutomovel
							<br>
							Direção Assistida: $direcaoAutomovel
							<br>
							Ar condicionado: $ar_condicionadoAutomovel
							<br>
							Numero de portas: $nro_de_portaAutomovel
							<br>
							Quilometragem: $quilometragemAutomovel 
							<br>
							Trasmissão: $transmissaoAutomovel
							<br>
							Tipo de Combustivel: $tipo_de_combustivelAutomovel
							<br>
							</div>
							.....
							</div>";
					}
				}
				?>
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