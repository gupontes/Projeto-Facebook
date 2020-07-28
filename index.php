<!DOCTYPE html>
<html>
	<head>
		<title>Facebook</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
			
	</head>
	<body>
		<header>
			<div class="center">
				<div class="logo">
					<h2> facebook </h2>	
				</div><!--logo-->
				<form method="post" class="form-login">
					<div class="form-element">
						<p>Email ou telefone</p>
						<input type="email" name="email">
						</div><!--form-element-->
					<div class="form-element">
						<p>Senha:</p>
						<input type="password" name="Senha">
						
					</div><!--form-element-->
					<div class="form-element">
						<input type="submit" name="acao" value="Enviar">
					</div><!--form-element-->
					<div class="h5">
						<h5>Esqueceu a conta?</h5>
					</div><!--h5-->
				</form><!--form-login-->
				<div class="clear"></div>
			</div><!--center-->
		</header>
		
		<section class="main">
			<div class="center">
				<p>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</p>
				<div class="img-pessoas">
					<img src="imagens/png1.png">
				</div><!--img-pessoas-->
				<div class="abrir-conta">
					<h2>Abra uma conta</h2>
					<h3>É rápido e fácil.</h3>

					<form class="criar-conta">

						<div class="w50">
							<input placeholder="Nome" type="text" name="nome">
						</div><!--w50-->

						<div class="w50">
							<input placeholder="Sobrenome" type="text" name="sobrenome">
						</div><!--w50-->

						<div class="w100">
							<input placeholder="Celular ou email" type="email" name="email">
						</div><!--w100-->	

						<div class="w100">
							<input placeholder="Senha" type="password" name="senha">
						</div><!--w100-->

						<div class="w100">
							<h2 class="data">Data de Nascimento</h2>
							<select name="nascimento-dia" class="nascimento">
								<?php
									for($i = 1; $i <= 31; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option><?php } ?>
							</select>
							<select name="nascimento-mes"class="nascimento">
								<option value="0">Janeiro</option>
								<option value="1">Fevereiro</option>
								<option value="2">Março</option>
								<option value="3">Abril</option>
								<option value="4">Maio</option>
								<option value="5">Junho</option>
								<option value="6">Julho</option>
								<option value="7">Agosto</option>
								<option value="8">Setembro</option>
								<option value="9">Outubro</option>
								<option value="10">Novembro</option>
								<option value="11">Dezembro</option>
							</select>
							<select name="nascimento-ano"class="nascimento">
								<?php
									for($i = 1900; $i <= 2020; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option><?php } ?>
							</select>
							<div class="clear"></div><!--clear-->
						</div><!--w100-->

						<div class="w100">
							<h2 class="data">Gênero</h2>
							<div class="input-radio"> 
								<input type="radio" name="sexo" value="feminino">
									<h2>Feminino</h2>
							</div><!--input-radio-->

							<div class="input-radio"> 
								<input type="radio" name="sexo" value="masculino">
									<h2>Masculino</h2>
							</div><!--input-radio-->

							<div class="input-radio"> 
								<input type="radio" name="sexo" value="personalizado">
									<h2>Personalizado</h2>
							</div><!--input-radio-->

								<h4>Ao clicar em Cadastre-se, você concorda com nossos Termos, Política de Dados e Política de Cookies. Você pode receber notificações por SMS e pode cancelar isso quando quiser.
							
							<div class="clear"></div><!--clear-->
						</div><!--w100-->	

						<div class="w100">
							<input type="submit" name="acao" value="Cadastre-se">

						</div><!--w100-->


						<div class="clear"></div><!--clear-->
					</form><!--criar-conta-->

				</div><!--abrir-conta-->

				<div class="clear"></div>	
			</div><!--center-->
		</section><!--main-->
		<section class="linguas">
			<div class="center">
				<a class="selected-lingua" href="#">Português (BR)</a>
				<a href="#">English (US)</a>
				<a href="#">Español</a>
				<a href="#">Français (France)</a>
				<a href="#">Italiano</a>
				<a href="#">العربية</a>
				<a href="#">Deutsch</a>
				<a href="#">हिन्दी</a>
				<a href="#">中文(简体)</a>
				<a href="#">日本語</a>
			</div><!--center-->
		</section><!--linguas-->

		<section class="linguas">
			<div style="border:0;" class="center">
				<a href="#">Lorem Ipsum</a>
				<a href="#">Lorem Ipsum</a>			
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>
				<a href="#">Lorem Ipsum</a>
				<a href="#">Lorem Ipsum</a>			
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>
				<a href="#">Lorem Ipsum</a>
				<a href="#">Lorem Ipsum</a>			
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>
				<a href="#">Lorem Ipsum</a>				
				<a href="#">Lorem Ipsum</a>
				<a href="#">Lorem Ipsum</a>
				<a href="#">Lorem Ipsum</a>			
							
								
			</div><!--center-->
		</section><!--linguas-->

	</body>
</html>