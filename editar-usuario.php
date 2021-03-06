<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Lucky Pets</title>
		<meta name="description" content=""/>
		<?php include "head.php"; ?>
		<?php include "functions.php"; ?>
		<?php verifyLogin(); ?>
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
			<div class="container">
				<div class="row">
					<div class="col-xs-12"><!--  col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 -->
						<div class="padding-30 bg-fff">
							<form action="" method="POST" enctype="multipart/form-data" id="formulario">
								<h1 class="font-700 mbottom-30 mtop-0 text-uppercase text-center font-1-3em color-blue">Alterar dados cadastrais</h1>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="nome">Nome</label>
											<input type="text" class="form-control" name="nome" placeholder="Ex: João das Neves" value="<?= $_SESSION['nome'] ?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="email">E-mail</label>
											<input type="text" class="form-control" name="email" placeholder="Ex: joao@dasneves.com" value="<?= $_SESSION['email'] ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="celular">Celular</label>
											<input type="text" class="form-control" name="celular" placeholder="Ex: 45988776655" value="<?= $_SESSION['celular'] ?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="telefone">Telefone</label>
											<input type="text" class="form-control" name="telefone" placeholder="Ex: 4535001122" value="<?= $_SESSION['telefone'] ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label for="file">Fazer upload de foto</label>
											<input type="file" id="file" name="file" class="width-100per">
											<p class="help-block">Dê preferência a fotos com aspecto quadrado e com extensão .jpg ou .png. Ex: resolução 200x200.</p>
										</div>
									</div>
								</div>
								<input type="hidden" name="userId" value="<?php echo $_SESSION['id']; ?>">
								<p class="text-center mbottom-0"><button type="button" class="btn btn-gradient text-uppercase padhor-30" id="btnEditar">Enviar</button></p>
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
						<p class="line-height-1-5 text-justify font-1-1em">Precisa de um lar para um animal que você tem? Faça a vida de alguém muito feliz doando seu cachorro ou gato!</p>
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
			$("#formulario").validate({
				rules: {
					tipo: "required",
					sexo: "required",
					nome: "required",
					raca: "required",
					cor: "required",
					porte: "required",
					idade: "required",
					resgatado: "required",
					descricao: "required",
					userId: "required",
					latitude: "required",
					longitude: "required"
				},
				highlight: function(element) {
					$(element).closest('.form-group').addClass('has-error');
				},
				unhighlight: function(element) {
					$(element).closest('.form-group').removeClass('has-error');
				},
				submitHandler: function(form) {
					$("#btnEditar").addClass("disabled");
					if ($("input[name=file]").val() == "") {
						$("input[name=file]").remove();
					}
					$.ajax({
						tryCount : 0,
	    				retryLimit : 3,
					    type: 'POST',
					    url:'http://31.220.53.123:8080/luckypets-servidor/api/usuario/edita-usuario',
						headers: {
							'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
						},
						// Método 1 - NÃO funciona com imagens (multipart/form-data)
						// data: { nome: $("input[name='nome']").val(), email: $("input[name='email']").val(), celular: $("input[name='celular']").val(), telefone: $("input[name='telefone']").val(), file: $("input[name='file']").val(), userId: $("input[name='userId']").val() },
						// Método 2 - Funciona com imagens (multipart/form-data) {
						data: new FormData($('#formulario')[0]),
						processData: false,
						contentType: false,
						// }
					    success:function(result){
						    console.log("Usuário alterado com sucesso.");
							if (result.toLowerCase() == "sucesso!") {
								refreshSession();
								location.href = "<?= $GLOBALS['www']; ?>?m=1";
							} else {
								alert("Aconteceu algum erro! Verifique os campos e tente novamente.");
								$("#btnEditar").removeClass("disabled");
							}
					    },
					    error:function(xhr, textStatus, errorThrown) {
					        if (textStatus == 'timeout' || xhr.status == 500 || xhr.status == 400) {
					            this.tryCount++;
					            if (this.tryCount <= this.retryLimit) {
					                //try again
					                $.ajax(this);
					                return;
					            }
					            return;
					        }
					    	console.log("Ops! Não foi possível fazer sua requisição.");
							$("#btnEditar").removeClass("disabled");
					    },
						complete:function(){
							$("#btnEditar").removeClass("disabled");
						}
					});
				}
			});

			// $("#btnEditar").on("click", function(){
			// 	$.ajax({
			// 	    type: 'POST',
			// 	    url:'http://31.220.53.123:8080/luckypets-servidor/api/usuario/edita-usuario',
			// 		headers: {
			// 			'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
			// 		},
			// 		// Método 1 - NÃO funciona com imagens (multipart/form-data)
			// 		// data: { nome: $("input[name='nome']").val(), email: $("input[name='email']").val(), celular: $("input[name='celular']").val(), telefone: $("input[name='telefone']").val(), file: $("input[name='file']").val(), userId: $("input[name='userId']").val() },
			// 		// Método 2 - Funciona com imagens (multipart/form-data) {
			// 		data: new FormData($('#formulario')[0]),
			// 		processData: false,
			// 		contentType: false,
			// 		// }
			// 	    success:function(result){
			// 		    console.log("Usuário alterado com sucesso.");
			// 			refreshSession();
			// 	    },
			// 	    error:function(){
			// 	    	console.log("Ops! Não foi possível fazer sua requisição.");
			// 	    }
			// 	});
			// });

			function refreshSession() {
				$.ajax({
					tryCount : 0,
    				retryLimit : 3,
					type: 'GET',
					url:'http://31.220.53.123:8080/luckypets-servidor/api/usuario/getuserdata/<?= $_SESSION['email']; ?>',
					dataType: 'json',
					headers: {
						'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
					},
					success:function(data){
						$.post("<?= $GLOBALS['www']; ?>login-backend.php", {
							"administrador": data.administrador,
							"authToken": data.authToken,
							"celular": data.celular,
							"email": data.email,
							"facebook": data.facebook,
							"id": data.id,
							"imagem": data.imagem,
							"caminhoCompletoImagem": "http://31.220.53.123:8080/luckypets-servidor/api/file/" + data.id + "/" + data.imagem,
							"nome": data.nome,
							"senha": data.senha,
							"telefone": data.telefone,
							"basicAuth": "<?php echo $_SESSION['basicAuth']; ?>"
						}).done(function(data) {
							location.href = "<?= $GLOBALS['www']; ?>?m=1";
						});
					},
					error:function(xhr, textStatus, errorThrown) {
				        if (textStatus == 'timeout' || xhr.status == 500 || xhr.status == 400) {
				            this.tryCount++;
				            if (this.tryCount <= this.retryLimit) {
				                //try again
				                $.ajax(this);
				                return;
				            }
				            return;
				        }
						console.log("Ops! Não foi possível fazer sua requisição.");
					}
				});
			}
		</script>
	</body>
</html>
