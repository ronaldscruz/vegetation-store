<link rel="stylesheet" type="text/css" href="css/index_menu.css">
<script src="js/jquery.min.js"></script>
<script>
	$(function(){
	$('.dropdown').on('show.bs.dropdown', function() {
	  $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
	});

	$('.dropdown').on('hide.bs.dropdown', function() {
	  $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
	});
});
</script>
<div id="menuHeader">
	<nav class="navbar navbar-expand-xl navbar-dark bg-dark menu-fixo" id="menuHeader">
		<a href="index.php" class="navbar-brand font-weight-bold"><img src="img/logo.png" class="d-inline-block align-top" id="logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudo-menu" aria-expanded="false">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="conteudo-menu">
			<ul class="navbar-nav mr-auto">
				<div id="buscaMenu">
					<form class="form-inline">
						<div class="input-group" id="inputBuscar">
							<div class="input-group-prepend">
								<button class="btn btn-success"><ion-icon name="search"></ion-icon></button>
							</div>	
							<input type="text" name="txtBuscar" id="txtBuscar" class="form-control" placeholder="o que você procura?">
						</div>
					</form>
				</div>

				<div class="dropdown-divider"></div>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" id="drop-produtos" data-toggle="dropdown"><ion-icon name="cube"></ion-icon> produtos</a>
					<div class="dropdown-menu" aria-labelledby="drop-produtos">
						<a href="#" class="dropdown-item"><img src="img/menu/vestuario.png" width="18px"> vestuário</a>
						<a href="#" class="dropdown-item"><img src="img/menu/cutelaria.png" width="18px"> cutelaria</a>
						<a href="#" class="dropdown-item"><img src="img/menu/arma.png" width="18px"> armas de fogo</a>
						<a href="#" class="dropdown-item"><img src="img/menu/bushcraft.png" width="18px"> bushcraft</a>
						<a href="#" class="dropdown-item"><img src="img/menu/alimentos.png" width="18px"> alimentos</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><ion-icon name="people"></ion-icon> quem somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><ion-icon name="call"></ion-icon> contato</a>
				</li>
			</ul>
			<div class="dropdown-divider"></div>

				<li class="nav-item" id="sec-carrinho">
					<a href="#" class="btn btn-success text-white btn-sm"><img src="img/carrinho.png" width="26px"> Suas compras: <strong>R$0,00</strong></a>
				</li>

				<div class="dropdown-divider"></div>
			<form class="form-inline text-sm-center justify-content-center" id="sec-usuario">
				<a href="login.php" class="btn btn-light btnmenu"><ion-icon name="log-in"></ion-icon> Login</a>
				<a href="cadastro.php" class="btn btn-light btnmenu"><ion-icon name="person-add"></ion-icon> Cadastrar-se</a>
			</form>
		</div>
	</nav>

</div>
<div id="content-after-menu"></div>
	