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
		<div class="container-fluid bg-f5f5f5 padver-50 padver-15-xs">
			<div class="">
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
						<div class="padding-30 bg-fff">
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
											<label for="responsavel">Responsável</label>
											<input type="text" class="form-control" name="responsavel" placeholder="Ex: Nome da pessoa física">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="cpfResponsavel">CPF do Responsavel</label>
											<input type="text" class="form-control" name="cpfResponsavel" placeholder="Ex: 00011122244">
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
											<input type="text" class="form-control" id="cep" name="cep" placeholder="Digite para habilitar o preenchimento automático">
										</div>
									</div>
								</div>
								<div class="row rowEndereco hidden">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="logradouro">Logradouro</label>
											<input type="text" class="form-control" name="logradouro" placeholder="Ex: Seu endereço">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="numero">Número</label>
											<input type="text" class="form-control" name="numero" placeholder="Ex: 1000">
										</div>
									</div>
								</div>
								<div class="row rowEndereco hidden">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="estado">Estado</label>
											<input type="text" class="form-control" name="estado" placeholder="Ex: Paraná">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="cidade">Cidade</label>
											<input type="text" class="form-control" name="cidade" placeholder="Ex: Foz do Iguaçu">
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
											<div>
												<img id="profilePicture" class="hidden img-responsive" style="height: 200px;">
												<a href="" id="removerFotoDePerfil" class="hidden block mbottom-15 link-red">Remover foto</a>
											</div>
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
			$("#cep").focusout(function(){
				var cep = $("#cep").val();
				if (cep != "" && cep != null && cep != undefined) {
					$.ajax({
						tryCount : 0,
	    				retryLimit : 3,
						type: 'GET',
						url: 'http://viacep.com.br/ws/'+ cep +'/json/',
						dataType: 'json',
						success:function(data){
							console.log(data);
							$("input[name='logradouro']").val(data.logradouro + " - " + data.bairro);
							$("input[name='estado']").val(data.uf);
							$("input[name='cidade']").val(data.localidade);
							$(".rowEndereco").removeClass("hidden");
							$("input[name='numero']").focus();
							/*
							{
								"cep": "01001-000",
								"logradouro": "Praça da Sé",
								"complemento": "lado ímpar",
								"bairro": "Sé",
								"localidade": "São Paulo",
								"uf": "SP",
								"unidade": "",
								"ibge": "3550308",
								"gia": "1004"
							}
							*/
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
							console.log("Ops! Aconteceu algo de errado. Tente novamente mais tarde.");
						}
					});
				} else {
					console.log("CEP inválido");
				}
			});

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
					$("#btnCadastrar").addClass("disabled");
					if ($("input[name=file]").val() == "") {
						$("input[name=file]").remove();
					}
					$.ajax({
						tryCount : 0,
	    				retryLimit : 3,
						type: 'POST',
						url:'http://31.220.53.123:8080/luckypets-servidor/api/prestador/cadastro-prestador',
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
								location.href = "<?= $GLOBALS['www']; ?>?m=1";
							} else if (result.toLowerCase() === "erro") {
								console.log("E-mail já existente.");
								$("#btnCadastrar").removeClass("disabled");
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
							$("#btnCadastrar").removeClass("disabled");
						}
					});
				}
			});

			/*
			$("#btnCadastrar").on("click", function(event){
				$(this).addClass("disabled");
				event.preventDefault();
				if ($("input[name=file]").val() == "") {
					$("input[name=file]").remove();
				}
				$.ajax({
					type: 'POST',
					url:'http://31.220.53.123:8080/luckypets-servidor/api/prestador/cadastro-prestador',
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
							location.href = "<?= $GLOBALS['www']; ?>?m=1";
						} else if (result.toLowerCase() === "erro") {
							console.log("E-mail já existente.");
							$(this).removeClass("disabled");
						}
					},
					error:function(){
						console.log("Ops! Não foi possível fazer sua requisição.");
						$(this).removeClass("disabled");
					}
				});
			});
			*/

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
