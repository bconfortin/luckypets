<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Lucky Pets</title>
		<meta name="description" content=""/>
		<!-- <link rel="alternate" hreflang="pt" href="">
		<link rel="alternate" hreflang="en" href=""> -->
		<?php include "head.php"; ?>
	</head>
	<body>
		<?php include "header.php"; ?>
		<div class="container-fluid hidden">
			<div class="row">
				<div class="col-xs-12 padhor-0">
					<img src="http://placehold.it/1920x350" alt="Placeholder" class="img-responsive hidden-xs hidden-sm">
					<img src="http://placehold.it/993x600" alt="Placeholder" class="img-responsive hidden-md hidden-lg">
					<div class="force-vertical-align width-100per">
						<h1 class="text-center font-1-8em text-uppercase font-700 color-fff mtop-0 mbottom-5 text-shadow font-1-3em-xs mbottom-30-xs">Cadastro de conta</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-f5f5f5 padver-50">
			<div class="">
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
						<div class="padding-30 bg-fff">
							<!-- http://localhost:8084/luckypets-servidor/api/usuario/novo-usuario
								 http://31.220.53.123:8080/luckypets-servidor/api/usuario/novo-usuario
							-->
							<form action="" method="POST" enctype="multipart/form-data" id="formulario">
								<h1 class="font-700 mbottom-30 mtop-0 text-uppercase text-center font-1-3em color-blue">Formulário de cadastro de conta</h1>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="nome">Nome</label>
											<input type="text" class="form-control" name="nome" placeholder="Ex: João das Neves">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="email">E-mail</label>
											<input type="text" class="form-control" name="email" placeholder="Ex: joao@dasneves.com">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="celular">Celular</label>
											<input type="text" class="form-control" name="celular" placeholder="Ex: 45988776655">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="telefone">Telefone</label>
											<input type="text" class="form-control" name="telefone" placeholder="Ex: 4535001122">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="senha">Senha</label>
											<input type="password" class="form-control" name="senha" placeholder="******">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="senhaNovamente">Digite a senha novamente</label>
											<input type="password" class="form-control" name="senhaNovamente" placeholder="******">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label for="file">Fazer upload de foto</label>
											<input type="file" id="file" name="file" class="width-100per" accept="image/png, image/jpeg">
											<p class="help-block">Dê preferência a fotos com aspecto quadrado e com extensão .jpg ou .png. Ex: resolução 200x200.</p>
										</div>
									</div>
								</div>
								<p class="text-center mbottom-0"><button class="btn btn-gradient text-uppercase padhor-30" id="btnCadastrar">Cadastrar</button></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid padver-50">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						<h2 class="titulo">Gostaria de doar um animal?</h2>
						<p class="line-height-1-5 text-justify font-1-1em">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam voluptatem saepe perspiciatis ut tempore, aliquam vero non. Hic quia voluptatem laborum eum quam maiores atque non dicta! Iure, culpa, sed.</p>
						<p class="text-center mbottom-0 mtop-30">
							<a href="" class="btn btn-gradient force-radius-0 text-uppercase padhor-30" target="_blank">Saiba mais</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php include "footer.php"; ?>
		<?php include "foot.php"; ?>
		<script>
			$("#btnCadastrar").on("click", function(event){
				event.preventDefault();
				if ($("input[name=file]").val() == "") {
					$("input[name=file]").remove();
				}
				$.ajax({
					type: 'POST',
					url:'http://31.220.53.123:8080/luckypets-servidor/api/usuario/novo-usuario',
					// Método 1 - NÃO funciona com imagens (multipart/form-data)
					// data: { nome: $("input[name='nome']").val(), email: $("input[name='email']").val(), celular: $("input[name='celular']").val(), telefone: $("input[name='telefone']").val(), file: $("input[name='file']").val(), userId: $("input[name='userId']").val() },
					// Método 2 - Funciona com imagens (multipart/form-data) {
					data: new FormData($('#formulario')[0]),
					processData: false,
					contentType: false,
					// }
					success:function(result){
						if (result.toLowerCase() === "sucesso!") {
							console.log("Usuário cadastrado com sucesso.");
							location.href = "http://localhost/luckypets/?message=usuarioCriadoComSucesso";
						} else if (result.toLowerCase() === "erro") {
							console.log("E-mail já existente.");
						}
					},
					error:function(){
						console.log("Ops! Não foi possível fazer sua requisição.");
					}
				});
			});
		</script>
	</body>
</html>
