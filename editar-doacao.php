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
			require_once("functions.php");
			verifyLogin();
			// Verifica se tem o parâmetro animalId
			$animalId = $_GET["animalId"];
			if (!isset($animalId) || $animalId == "" || is_null($animalId)) {
				header('Location: ' . $GLOBALS['www'] . 'dashboard.php');
	    		exit;
			}
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
							<form action="" method="POST" enctype="multipart/form-data" id="formEditarDoacao">
								<h1 class="font-700 mbottom-30 mtop-0 text-uppercase text-center font-1-3em color-blue">Editar anúncio de animal para doação</h1>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<p class="mbottom-5"><strong>Tipo de animal</strong></p>
										<div class="form-group">
											<div class="list-group segmented-control">
								                <a href="#" class="list-group-item active">
								                    Cachorro
								                    <input type="radio" name="tipo" value="Cachorro"/>
								                </a>
								                <a href="#" class="list-group-item">
								                    Gato
								                    <input type="radio" name="tipo" value="Gato"/>
								                </a>
								            </div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<p class="mbottom-5"><strong>Sexo</strong></p>
										<div class="form-group">
											<div class="list-group segmented-control">
								                <a href="#" class="list-group-item active">
								                    Feminino
								                    <input type="radio" name="sexo" value="Feminino"/>
								                </a>
								                <a href="#" class="list-group-item">
								                    Masculino
								                    <input type="radio" name="sexo" value="Masculino"/>
								                </a>
								            </div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<p class="mbottom-5"><strong>Vacinado</strong></p>
										<div class="form-group">
											<div class="list-group segmented-control">
								                <a href="#" class="list-group-item active">
								                    Sim
								                    <input type="radio" name="vacinado" value="true"/>
								                </a>
								                <a href="#" class="list-group-item">
								                    Não
								                    <input type="radio" name="vacinado" value="false"/>
								                </a>
								            </div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<p class="mbottom-5"><strong>Castrado</strong></p>
										<div class="form-group">
											<div class="list-group segmented-control">
								                <a href="#" class="list-group-item active">
								                    Sim
								                    <input type="radio" name="castrado" value="true"/>
								                </a>
								                <a href="#" class="list-group-item">
								                    Não
								                    <input type="radio" name="castrado" value="false"/>
								                </a>
								            </div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="nome">Nome</label>
											<input type="text" class="form-control" name="nome" placeholder="Ex: João">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="raca">Raça</label>
											<input type="text" class="form-control" name="raca" placeholder="Ex: Vira-lata">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="cor">Cor</label>
											<input type="text" class="form-control" name="cor" placeholder="Ex: Caramelo">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="porte">Porte</label>
											<select name="porte" id="porte" class="form-control">
												<option value="Pequeno" selected="selected">Pequeno</option>
												<option value="Médio">Médio</option>
												<option value="Grande">Grande</option>
												<option value="Gigante">Gigante</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="idade">Idade</label>
											<select name="idade" id="idade" class="form-control">
												<option value="Filhote (0 a 2 anos)" selected="selected">Filhote (0 a 2 anos)</option>
												<option value="Adulto (2 a 8 anos)">Adulto (2 a 8 anos)</option>
												<option value="Idoso (acima de 8 anos)">Idoso (acima de 8 anos)</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12">
										<div class="form-group">
											<label for="descricao">Descrição</label>
											<textarea name="descricao" id="" cols="30" rows="5" class="form-control vertical-resize-forbidden"></textarea>
										</div>
									</div>
								</div>
								<div class="row fotos-ja-cadastradas">

								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label for="fotoDePerfil" class="mbottom-15">Fazer upload de fotos</label>
											<!-- <div>
												<img id="profilePicture" class="hidden img-responsive" style="height: 200px;">
												<a href="" id="removerFotoDePerfil" class="hidden block mbottom-15 link-red">Remover todas as fotos</a>
											</div> -->
											<input type="file" id="file" name="file" class="width-100per" multiple accept="image/*">
											<p class="help-block">Dê preferência a fotos com aspecto wide (fotos tiradas com o celular virado) e com extensão .jpg ou .png.<br>Ex: resolução 840x460.</p>
										</div>
									</div>
								</div>
								<input type="hidden" name="userId" value="<?= $_SESSION['id']; ?>">
								<input type="hidden" name="anuncioId" value="">
								<input type="hidden" name="cidade" value="<?= $_SESSION['cidade']; ?>">
								<input type="hidden" name="estado" value="<?= $_SESSION['estado']; ?>">
								<p class="text-center mbottom-0"><button class="btn btn-gradient text-uppercase padhor-30" id="btnEditarDoacao">Alterar cadastro</button></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "footer.php"; ?>
		<?php include "foot.php"; ?>
		<script>
			var formData;
			$("#formEditarDoacao").validate({
				rules: {
					tipo: "required",
					sexo: "required",
					vacinado: "required",
					castrado: "required",
					nome: "required",
					raca: "required",
					cor: "required",
					porte: "required",
					idade: "required",
					descricao: "required",
					userId: "required",
					cidade: "required",
					estado: "required"
				},
				highlight: function(element) {
					$(element).closest('.form-group').addClass('has-error');
				},
				unhighlight: function(element) {
					$(element).closest('.form-group').removeClass('has-error');
				},
				submitHandler: function(form) {
					$("#btnEditarDoacao").addClass("disabled");
					if ($("input[name=file]").val() == "") {
						$("input[name=file]").remove();
					}
					formData = new FormData($('#formEditarDoacao')[0]);
					formData.append("imgdelete", JSON.stringify(arrayRemoveImgs));
					console.log(formData);
					$.ajax({
						tryCount : 0,
	    				retryLimit : 3,
					    type: 'POST',
					    url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/edita-doacao',
						headers: {
							'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
						},
						// Método 1 - NÃO funciona com imagens (multipart/form-data)
						// data: { nome: $("input[name='nome']").val(), email: $("input[name='email']").val(), celular: $("input[name='celular']").val(), telefone: $("input[name='telefone']").val(), file: $("input[name='file']").val(), userId: $("input[name='userId']").val() },
						// Método 2 - Funciona com imagens (multipart/form-data) {
						data: formData,
						processData: false,
						contentType: false,
						// }
					    success:function(result){
							if (result.toLowerCase() == "salvo") {
								console.log("Anúncio alterado com sucesso.");
								location.href = "<?= $GLOBALS['www']; ?>?m=1";
							} else {
								alert("Aconteceu algum erro! Verifique os campos e tente novamente.");
								$("#btnEditarDoacao").removeClass("disabled");
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
							$("#btnEditarDoacao").removeClass("disabled");
					    },
						complete:function(){

							$("#btnEditarDoacao").removeClass("disabled");
						}
					});
				}
			});

			// $("#btnEditarDoacao").on("click", function(){
			// 	event.preventDefault();
			// 	$(this).addClass("disabled");
			// 	$.ajax({
			// 	    type: 'POST',
			// 	    url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/edita-doacao',
			// 		headers: {
			// 			'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
			// 		},
			// 		// Método 1 - NÃO funciona com imagens (multipart/form-data)
			// 		// data: { nome: $("input[name='nome']").val(), email: $("input[name='email']").val(), celular: $("input[name='celular']").val(), telefone: $("input[name='telefone']").val(), file: $("input[name='file']").val(), userId: $("input[name='userId']").val() },
			// 		// Método 2 - Funciona com imagens (multipart/form-data) {
			// 		data: new FormData($('#formEditarDoacao')[0]),
			// 		processData: false,
			// 		contentType: false,
			// 		// }
			// 	    success:function(result){
			// 		    console.log("Anúncio alterado com sucesso.");
			// 	    },
			// 	    error:function(e){
			// 			console.log(e.responseText);
			// 	    	console.log("Ops! Não foi possível fazer sua requisição.");
			// 	    },
			// 		complete:function(){
			// 			$("#btnEditarDoacao").removeClass("disabled");
			// 		}
			// 	});
			// });

			getAnunciosDoacao();

			function getAnunciosDoacao() {
				$.ajax({
					tryCount : 0,
    				retryLimit : 3,
					type: 'GET',
					crossOrigin: true,
					url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-doacao/<?= $animalId; ?>',
					dataType: 'json',
					success:function(x){
						if (x == undefined) {
							location.href = "<?= $GLOBALS['www']; ?>dashboard.php";
						}
						if (x.animal.tipo == "Cachorro") {
							$('#formEditarDoacao input[name="tipo"][value="Cachorro"]').trigger('click');
						} else if (x.animal.tipo == "Gato") {
							$('#formEditarDoacao input[name="tipo"][value="Gato"]').trigger('click');
						}
						if (x.animal.sexo == "Feminino") {
							$('#formEditarDoacao input[name="sexo"][value="Feminino"]').trigger('click');
						} else if (x.animal.sexo == "Masculino") {
							$('#formEditarDoacao input[name="sexo"][value="Masculino"]').trigger('click');
						}
						if (x.animal.vacinado == true) {
							$('#formEditarDoacao input[name="vacinado"][value="true"]').trigger('click');
						} else if (x.animal.vacinado == false) {
							$('#formEditarDoacao input[name="vacinado"][value="false"]').trigger('click');
						}
						if (x.animal.castrado == true) {
							$('#formEditarDoacao input[name="castrado"][value="true"]').trigger('click');
						} else if (x.animal.castrado == false) {
							$('#formEditarDoacao input[name="castrado"][value="false"]').trigger('click');
						}
						$('#formEditarDoacao input[name="anuncioId"]').val(x.id);
						$('#formEditarDoacao input[name="nome"]').val(x.animal.nome);
						$('#formEditarDoacao input[name="raca"]').val(x.animal.raca);
						$('#formEditarDoacao input[name="cor"]').val(x.animal.cor);
						$('#formEditarDoacao select[name="porte"] option[value="'+x.animal.porte+'"]').prop("selected", "selected");
						$('#formEditarDoacao select[name="idade"] option[value="'+x.animal.idade+'"]').prop("selected", "selected");
						$('#formEditarDoacao textarea[name="descricao"]').val(x.animal.descricao);

						var html = "";
						// remover img
						// <div class="div-red-remove-image"><p class="div-red-remove-image-text">Essa imagem será removida</p></div>
						for (i = 0; i < x.animal.imagens.length; i++) {
							html += '<div class="col-md-3 mbottom-15">'
							html += '<div class="edit-image-container">';
							html += '<img src="http://31.220.53.123:8080/luckypets-servidor/api/file/doacao/' + x.id + '/' + x.animal.imagens[i] + '" finalendereco="'+x.animal.imagens[i]+'" class="img-responsive">';
							html += '<div class="div-red-remove-image height-0"><p class="div-red-remove-image-text">Essa imagem será removida</p></div>';
							html += '</div>';
							html += '</div>';
							//console.log('http://31.220.53.123:8080/luckypets-servidor/api/file/doacao/' + x.id + '/' + x.animal.imagens[i]);
						}
						$(".fotos-ja-cadastradas").append(html);
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
						console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
					},
					complete:function() {
						bindImgRemover();
					}
				});
			}

			function bindImgRemover() {
				$(".edit-image-container img").on("click", function(){
					var img = $(this);
					$(this).siblings(".div-red-remove-image").removeClass("height-0");
					if (arrayRemoveImgs.indexOf(img.attr("finalendereco")) == -1) {
						arrayRemoveImgs.push(img.attr("finalendereco"));
					}
				});

				$(".div-red-remove-image").on("click", function(){
					var img = $(this).parent(".edit-image-container").find("img");
					var imgIndex = arrayRemoveImgs.indexOf(img.attr("finalendereco"));
					console.log(imgIndex);
					$(this).addClass("height-0", 300);
					if (arrayRemoveImgs.indexOf(img.attr("finalendereco")) != -1) {
						arrayRemoveImgs.splice(imgIndex, 1);
					}
				});
			}

			var arrayRemoveImgs = [];
		</script>
	</body>
</html>
