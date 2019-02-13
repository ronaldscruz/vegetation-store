<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> 
	<style type="text/css">body{font-family: 'Rubik', sans-serif;}</style>
	<title>Vegetation</title>
</head>
<body>
	<!--div genérica para encobrir o conteudo e impedir o scroll horizontal-->
	<div style="overflow-x: hidden;">
		
	<?php require_once "index_menu.php" ?>

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
		<div class="container exibir-produtos">
			<p class="titulo-quadro" class="text-white"><img src="img/fire.png" id="fogo"> Em destaque</p>
			<div class="dropdown-divider" id="secionar"></div>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="card produto mx-auto">
						<a href="produto.php"><img class="card-img-top" src="img/produtos/machado.jpg"></a>
						<div class="card-body">
							<p class="card-title titulo-produto">MACHADINHA COM SERROTE SURVIVAL - GUEPARDO</p>
							<p class="card-text preco">R$ 239,62</p>
							<a href="produto.php" class="btn btn-success btn-block card-link">COMPRAR</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="card produto mx-auto">
						<a href="produto.php"><img class="card-img-top" src="img/produtos/faca.jpg"></a>
						<div class="card-body">
							<p class="card-title titulo-produto">CANIVETE INVICTUS PHANTON</p>
							<p class="card-text preco">R$ 75,00</p>
							<a href="produto.php" class="btn btn-success btn-block card-link">COMPRAR</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="card produto mx-auto">
						<a href="produto.php"><img class="card-img-top" src="img/produtos/afiador.jpg"></a>
						<div class="card-body">
							<p class="card-title titulo-produto">AFIADOR DUPLO DE BOLSO VICTORINOX</p>
							<p class="card-text preco">R$ 89,90</p>
							<a href="produto.php" class="btn btn-success btn-block card-link">COMPRAR</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- --------------------- FIM CONTEUDO CENTRAL --------------------- -->

		<?php require_once "footer.php" ?>
		
	</div>
	
	<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>