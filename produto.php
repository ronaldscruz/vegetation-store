<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/produto.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> 
	<style type="text/css">body{font-family: 'Rubik', sans-serif;}</style>
	<title>Produto - Exemplo</title>
</head>
<body>
	<!--div genérica para encobrir o conteudo e impedir o scroll horizontal-->
	<div style="overflow-x: hidden;">
		
	<?php require_once "index_menu.php" ?>
	
		<div class="container-fluid">
			<div class="row justify-content-center" id="all">
				<div class="col-md-8 col-sm-12">
					<div class="card-group">
						<div class="card justify-content-center" id="imgproduto">
							<img src="img/produtos/1destroyer.jpg" class="card-img-top">
						</div>
						<div class="card text-white bg-dark text-justify" id="desc">
							<div class="card-body">
								<div class="card-header"><p>Machado Invictus Destroyer - Bainha sistema Molle</p></div>
								<p class="card-text">
									Aço inoxidável 440 num machado full tang com martelo e pé de cabra. É claro que estamos falando do INVICTUS Destroyer. Além dessas características que separam machados comuns de machados destruidores, o Destroyer possui cabo G10 de 28,5 cm, lâmina de 11,9 cm, espessura de 6 mm e quase meio metro de comprimento total. Para transportar o machado com segurança, a bainha oferece capa protetora de lâmina em ABS e sistema MOLLE de acoplagem.
								</p>
								<p id="preco">
									R$ 389,00
								</p>
								<button class="btn btn-success btn-lg">COMPRAR</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php require_once "footer.php" ?>
		
	</div>
	
	<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>