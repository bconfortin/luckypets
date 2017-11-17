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
		<?php
			// require_once("functions.php");
			// verifyLogin();
		?>
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
											<input type="text" class="form-control" name="nome" placeholder="Ex: João das Neves" value="<?= $_SESSION['nome']; ?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="email">E-mail</label>
											<input type="text" class="form-control" name="email" placeholder="Ex: joao@dasneves.com" value="<?= $_SESSION['email']; ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="celular">Celular</label>
											<input type="text" class="form-control" name="celular" placeholder="Ex: 45988776655" value="<?= $_SESSION['celular']; ?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="telefone">Telefone</label>
											<input type="text" class="form-control" name="telefone" placeholder="Ex: 4535001122" value="<?= $_SESSION['telefone']; ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="responsavel">Responsável</label>
											<input type="text" class="form-control" name="responsavel" placeholder="Ex: Nome da pessoa física" value="<?= $_SESSION['responsavel']; ?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="cpfResponsavel">CPF do Responsavel</label>
											<input type="text" class="form-control" name="cpfResponsavel" placeholder="Ex: 00011122244" value="<?= $_SESSION['cpfResponsavel']; ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label for="tipo">Tipo</label>
											<select name="tipo" class="form-control">
												<option value="" disabled="disabled" selected="selected">Escolha a área de atuação</option>
												<option value="Protetor de animais">Protetor de animais</option>
												<option value="Veterinário">Veterinário</option>
												<option value="ONG - Organização não governamental">ONG - Organização não governamental</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label for="cep">CEP <small><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCepEndereco.cfm" target="_blank">Não lembra do CEP?</a></small></label>
											<input type="text" class="form-control" id="cep" name="cep" placeholder="Digite para habilitar o preenchimento automático" value="<?= $_SESSION['cep']; ?>">
										</div>
									</div>
								</div>
								<div class="row rowEndereco hidden">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="logradouro">Logradouro</label>
											<input type="text" class="form-control" name="logradouro" placeholder="Ex: Seu endereço" value="<?= $_SESSION['logradouro']; ?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="numero">Número</label>
											<input type="text" class="form-control" name="numero" placeholder="Ex: 1000" value="<?= $_SESSION['numero']; ?>">
										</div>
									</div>
								</div>
								<div class="row rowEndereco hidden">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="estado">Estado</label>
											<input type="text" class="form-control" name="estado" placeholder="Ex: Paraná" value="<?= $_SESSION['estado']; ?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="cidade">Cidade</label>
											<input type="text" class="form-control" name="cidade" placeholder="Ex: Foz do Iguaçu" value="<?= $_SESSION['cidade']; ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label for="file">Fazer upload de foto</label>
											<div>
												<img id="profilePicture" class="hidden img-responsive" style="height: 200px;">
												<a href="" id="removerFotoDePerfil" class="hidden block mbottom-15 link-red">Remover foto</a>
											</div>
											<input type="file" id="file" name="file" class="width-100per" accept="image/png, image/jpeg">
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
		<?php include "footer.php"; ?>
		<?php include "foot.php"; ?>
		<script>
			$("#formulario").validate({
				rules: {
					nome: "required",
					email: "required",
					celular: "required",
					telefone: "required",
					responsavel: "required",
					cpfResponsavel: "required",
					tipo: "required",
					cep: "required",
					logradouro: "required",
					numero: "required",
					estado: "required",
					cidade: "required",
					senha: "required",
					senhaNovamente: "required"
				},
				highlight: function(element) {
					$(element).closest('.form-group').addClass('has-error');
				},
				unhighlight: function(element) {
					$(element).closest('.form-group').removeClass('has-error');
				},
				submitHandler: function(form) {
					$("#btnEditar").addClass("disabled");
					$.ajax({
						type: 'POST',
						url:'http://31.220.53.123:8080/luckypets-servidor/api/prestador/edita-prestador',
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
							console.log("Prestador alterado com sucesso.");
							refreshSession();
						},
						error:function(){
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
			// 	$("#btnEditar").addClass("disabled");
			// 	$.ajax({
			// 	    type: 'POST',
			// 	    url:'http://31.220.53.123:8080/luckypets-servidor/api/prestador/edita-prestador',
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
			// 		    console.log("Prestador alterado com sucesso.");
			// 			refreshSession();
			// 	    },
			// 	    error:function(){
			// 	    	console.log("Ops! Não foi possível fazer sua requisição.");
			// 			$("#btnEditar").removeClass("disabled");
			// 	    },
			// 		complete:function(){
			// 			$("#btnEditar").removeClass("disabled");
			// 		}
			// 	});
			// });

			function refreshSession() {
				$.ajax({
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
					error:function(){
						console.log("Ops! Não foi possível fazer sua requisição.");
					}
				});
			}

			$("input[name=file]").on("change", function(){
				$("#profilePicture").removeClass("hidden");
				$("#removerFotoDePerfil").removeClass("hidden");
				onFileSelected(event);
			});

			$("#removerFotoDePerfil").on("click", function(e){
				e.preventDefault();
				$("input[name=file]").val("");
				$("#removerFotoDePerfil").addClass("hidden");
				$("#profilePicture").addClass("hidden");
			})

			// https://stackoverflow.com/questions/3814231/loading-an-image-to-a-img-from-input-file
			function onFileSelected(event) {
				var selectedFile = event.target.files[0];
				var reader = new FileReader();

				var imgtag = document.getElementById("profilePicture");
				imgtag.title = selectedFile.name;

				reader.onload = function(event) {
					imgtag.src = event.target.result;
				};

				reader.readAsDataURL(selectedFile);
			}
		</script>
	</body>
</html>
