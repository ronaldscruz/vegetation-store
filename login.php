<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/forms.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> 
	<style type="text/css">body{font-family: 'Rubik', sans-serif;}</style>
	<title>Vegetation</title>
</head>
<body>
	<!--div genérica para encobrir o conteudo e impedir o scroll horizontal-->
	<div style="overflow-x: hidden;">
		
	<?php require_once "index_menu.php" ?>
	
	<div class="container" id="container-form">
		<!-- <div id="window"> -->
			<div class="row justify-content-center">
				<div class="col-md-4 col-sm-12 justify-content-left" id="window">
					<p id="welcome">Bem-vindo! Entre com suas credenciais</p>
					<div class="dropdown-divider"></div>
					<form id="formLogin">
						<div class="form-group">
							<label for="txtLogin">Nome de usuário ou e-mail:</label>
							<input type="text" name="txtLogin" id="txtLogin" aria-describedby="xpLogin" class="form-control" placeholder="Digite aqui seu usuário ou e-mail" size="30px" required>
							<small id="xpLogin" class="form-text text-muted">O mesmo utilizado no cadastro. Caso você ainda não tenha um, <a href="cadastro.php">clique aqui.</a></small>
						</div>
						<div class="form-group">
							<label for="txtSenha">Senha:</label>
							<input type="password" name="txtSenha" id="txtSenha" aria-describedby="xpSenha" class="form-control" placeholder="••••••••••••" required>
							<small id="xpSenha" class="form-text text-muted">Caso tenha esquecido sua senha, <a href="">clique aqui</a>.</small>
						</div>
						<button class="btn btn-primary btn-block" type="submit" id="btnXL">Entrar</button>
						<button class="btn btn-success btn-block" type="submit" id="btnXS">Entrar</button>
					</form>
				</div>
			</div>
		<!-- </div> -->		
	</div>

	<?php require_once "footer.php" ?>
		
	</div>
	
	<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>