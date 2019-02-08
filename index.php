<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> 
	<style type="text/css">body{font-family: 'Rubik', sans-serif;}</style>
	<title>Vegetation</title>
</head>
<body>
	<!--div genérica para encobrir o conteudo e impedir o scroll horizontal-->
	<div style="overflow-x: hidden;">
	<!-- --------------------- INI MENU --------------------- -->
	<?php require_once "index_menu.php" ?>
	<!-- --------------------- FIM MENU --------------------- -->

		<!-- --------------------- INI CARROSSEL --------------------- -->
		<div id="cslTrending" class="carousel slide d-none d-md-block" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#cslTrending" data-slide-to="0" class="active"></li>
				<li data-target="#cslTrending" data-slide-to="1"></li>
				<li data-target="#cslTrending" data-slide-to="2"></li>
				<li data-target="#cslTrending" data-slide-to="3"></li>
				<li data-target="#cslTrending" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100 trending" src="img/carousel/example01.jpg">
					<div class="carousel-caption md-block">
						<h5>Armamento Taurus</h5>
						<p>
							Excelência no mercado desde 1939. Clique aqui para conhecer os produtos mais populares
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 trending" src="img/carousel/example02.jpg">
					<div class="carousel-caption md-block">
						<h5>Cutelaria? É na Vegetation!</h5>
						<p>
							Estamos com oportunidades excelêntes de lâminas nos melhores preços do mercado. Confira!
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 trending" src="img/carousel/example03.jpg">
					<div class="carousel-caption md-block">
						<h5>Barracas Nautika em promoção!</h5>
						<p>Adquira até 30% de desconto nos itens de camping e aventura da Nautika para começar o ano com o pé direito!</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 trending" src="img/carousel/example04.jpg">
					<div class="carousel-caption md-block">
						<h5>Os itens de bushcraft mais acessíveis</h5>
						<p>Deixe de depender da tecnologia nas expedições. Bushcraft de primeira linha é na Vegetation Store ;)</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 trending" src="img/carousel/example05.jpg">
					<div class="carousel-caption md-block">
						<h5>Acesse nossas redes sociais!</h5>
						<p>Na aba contato, você pode nos contatar através de diversas mídias.</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#cslTrending" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#cslTrending" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>
		</div>
		<!-- --------------------- FIM CARROSSEL --------------------- -->

		<!-- --------------------- INI CONTEUDO CENTRAL --------------------- -->
		<div class="main">
			<div class="container">
				<div id="midcontent">
					<!-- --------------------- INI ROW 'TITULO' --------------------- -->
					<div class="row midtop">
						<p class="font-weight-bold center destaque"><img src="img/fire.png" width="32px" height="32px"> Produtos em destaque</p>
					</div>
					<!-- --------------------- FIM ROW 'TITULO' --------------------- -->

					<!-- --------------------- INI ROW EXIBIÇÃO DE PRODUTOS --------------------- -->
					<div class="row flex justify-content-center">
						<div class="col-sm-12 col-md-3 produto">
							<img src="img/produtos/machado.jpg" width="85%">
							<p class="font-weight-bold tit-produto">MACHADINHA COM SERROTE SURVIVAL - GUEPARDO</p>
							<p class="preco">R$ 239,62</p>
							<button class="btn btn-success btn-block comprar">COMPRAR</button>
						</div>
						<div class="col-sm-12 col-md-3 produto">
							<img src="img/produtos/faca.jpg" width="85%">
							<p class="font-weight-bold tit-produto">CANIVETE INVICTUS PHANTON</p>
							<p class="preco">R$ 75,00</p>
							<button class="btn btn-success btn-block comprar">COMPRAR</button>
						</div>
						<div class="col-sm-12 col-md-3 produto">
							<img src="img/produtos/afiador.jpg" width="85%">
							<p class="font-weight-bold tit-produto">AFIADOR DUPLO DE BOLSO VICTORINOX</p>
							<p class="preco">R$ 89,90</p>
							<button class="btn btn-success btn-block comprar">COMPRAR</button>
						</div>
					</div>
					<!-- --------------------- FIM ROW EXIBIÇÃO DE PRODUTOS --------------------- -->

				</div>
			</div>
		</div>
		<!-- --------------------- FIM CONTEUDO CENTRAL --------------------- -->

		<footer id="footer">
			<div class="row">
				<div class="col-md-6 col-sm-12" id="telefone">
					<p><ion-icon name="call"></ion-icon> Telefone: (11)2323-9878 / (13) 2392-2938</p>
				</div>
				<div class="col-md-6 col-sm-12" id="gp-midias">
					<p> 
						<img src="img/social/instagram.png" width="24px" id="midia">
						<img src="img/social/wpp.png" width="24px" id="midia">
						<img src="img/social/facebook.png" width="24px" id="midia">
					</p>
				</div>
			</div>
		</footer>
	</div>
	
	<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>