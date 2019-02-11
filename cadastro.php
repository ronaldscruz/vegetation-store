<!DOCTYPE html>
<html lang="pt-BR">
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
		<div class="row justify-content-center">
			<div class="col-md-7 col-sm-12 justify-content-left" id="window">
				<p id="welcome">Para efetuar seu cadastro na Vegetation, preencha os campos corretamente.</p>
				<div class="dropdown-divider"></div>
				<form id="formCadastro">
					<div class="form-row">
						<div class="form-group col-md-7 col-sm-12">
							<label for="txtNome">Nome completo:</label>
							<input type="text" name="txtNome" id="txtNome" class="form-control" placeholder="insira aqui seu nome completo" aria-describedby="xpNome" required>
							<small id="xpNome" class="form-text text-muted">Utilize apenas letras e espaços</small>
						</div>
						<div class="form-group col-md-5 col-sm-12">
							<label for="txtNascimento">Data de nascimento:</label>
							<input type="date" name="txtNascimento" id="txtNascimento" class="form-control data" required>						
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="txtEmail">Email: </label>
							<input type="email" id="txtEmail" class="form-control" placeholder="exemplo@email.com" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4 col-sm-12">
							<label for="txtCep">CEP:</label>
							<input type="number" name="txtCep" id="txtCep" class="form-control" placeholder="00000000" aria-describedby="xpCep"  pattern="[0-9]*" required>
							<small class="text-muted form-text" id="xpCep"><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCepEndereco.cfm">Não sabe o seu CEP?</a></small>
						</div>
						<div class="form-group col-md-4 col-sm-4">
							<label for="txtUf">UF:</label>
							<input id="txtUf" class="form-control" disabled="true" placeholder="Ex.: SC" required>
						</div>
						<div class="form-group col-md-4 col-sm-8">
							<label for="txtCidade">Cidade:</label>
							<input id="txtCidade" class="form-control" disabled="true" placeholder="Ex.: Vales" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="txtBairro">Bairro:</label>
							<input type="text" id="txtBairro" class="form-control" disabled="true" placeholder="Ex.: Jd Canadense" required>
						</div>
						<div class="form-group col-md-6 col-sm-10">
							<label for="txtEndereco">Endereço:</label>
							<input type="text" id="txtEndereco" class="form-control" disabled="true" placeholder="Ex.: Av. das Folhas" required>
						</div>
						<div class="form-group col-md-2 col-sm-10">
							<label for="txtNumero">Número:</label>
							<input type="text" id="txtNumero" class="form-control" pattern="[0-9]*" placeholder="Ex.: 000" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-sm-12">
							<label for="txtTelefone1">Telefone (1)</label>
							<input type="text" id="txtTelefone1" class="form-control telefone" placeholder="(00) 0000-0000" ^[1-9]{2}\-[2-9][0-9]{7,8}$ required>
						</div>
						<div class="form-group col-md-6 col-sm-12">
							<label for="txtTelefone2">Telefone (2)</label>
							<input type="text" id="txtTelefone2" class="form-control telefone" placeholder="(00) 0000-0000" ^[1-9]{2}\-[2-9][0-9]{7,8}$>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="newsletter">
								<label for="newsletter" class="form-check-label">Desejo ser avisado sobre novas promoções</label>
							</div>
						</div>	
					</div>
					<br>
					<button class="btn btn-primary btn-block" type="submit" id="btnXL">Cadastrar-se</button>
					<button class="btn btn-success btn-block" type="submit" id="btnXS">Cadastrar-se</button>
				</form>
			</div>
		</div>
	</div>

	<?php require_once "footer.php" ?>
		
	</div>
	
	<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/viacep.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/noscroll.js"></script>
	<script src="js/jmask.js"></script>
	<script>
		$(document).ready(function(){
			$(".telefone").mask('(00)0000-0000');
			$("#txtCep").mask('00000000');
		});
	</script>
</body>
</html>