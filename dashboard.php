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
		?>
	</head>
	<body>
		<?php include "header.php"; ?>
		<div class="container-fluid bg-gray-666">
			<div class="">
				<div class="row">
					<div class="col-xs-12 col-md-3 col-sm-3 col-lg-2 padhor-0 dashboard-height-hack">
						<div class="dashboard padhor-15">
							<div class="padver-50 padver-15-xs">
								<h1>Dashboard</h1>
								<ul id="dashboardTabs">
									<h2>Inicial</h2>
									<li><a href="#tabHome">Anúncios do sistema</a></li>
									<h2>Meus anúncios</h2>
									<li><a href="#tabDoacao">Doação</a></li>
									<li><a href="#tabPerdido">Animal perdido</a></li>
									<li><a href="#tabEncontrado">Animal encontrado</a></li>
									<h2>Meus perfil</h2>
									<li><a href="#tabAlterarCadastro">Alterar dados cadastrais</a></li>
									<li><a href="#tabAlterarSenha">Alterar senha</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-9 col-sm-9 col-lg-10 bg-f5f5f5 dashboard-height-hack">
						<div class="row">
							<div class="col-xs-12">
								<div class="padding-30">
									<!-- Tab panes -->
									<div class="tab-content bg-transparent">
										<div role="tabpanel" class="tab-pane active" id="tabHome">
											<div class="row">
												<div class="col-xs-12">
													<h2 class="font-2em text-uppercase font-700 mtop-0">Bem vindo ao seu perfil</h2>
													<p class="font-1-2em font-300 mbottom-0">Aqui você pode gerenciar os seus anúncios, seus dados pessoais e alterar sua senha cadastrada.</p>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="tabDoacao">
											<div class="row">
												<div class="col-xs-12">
													<h2 class="font-2em text-uppercase font-700 mtop-0">Meus anúncios de doação</h2>
													<p class="font-1-2em font-300 mbottom-30">Aqui você pode gerenciar os seus anúncios, seus dados pessoais e alterar sua senha cadastrada.</p>
													<div class="row" id="rowAjaxDoacao">
														<div class="col-xs-12 hidden containerErro">
															<div class="bg-fff padding-30">
																<div class="row padver-50">
																	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
																		<h2 class="text-center font-2em text-uppercase font-700 mtop-0">Ops!</h2>
																		<p class="font-1-2em text-center font-300 mbottom-0">Parece que a sua busca não retornou nenhum resultado.<br>Mude os filtros ou <a href="animais-para-doacao.php" class="font-700">clique aqui para ver todos os animais cadastrados</a>.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="tabPerdido">
											<div class="row">
												<div class="col-xs-12">
													<h2 class="font-2em text-uppercase font-700 mtop-0">Meus anúncios de animal perdido</h2>
													<p class="font-1-2em font-300 mbottom-30">Aqui você pode gerenciar os seus anúncios, seus dados pessoais e alterar sua senha cadastrada.</p>
													<div class="row" id="rowAjaxPerdido">
														<div class="col-xs-12 hidden containerErro">
															<div class="bg-fff padding-30">
																<div class="row padver-50">
																	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
																		<h2 class="text-center font-2em text-uppercase font-700 mtop-0">Ops!</h2>
																		<p class="font-1-2em text-center font-300 mbottom-0">Parece que a sua busca não retornou nenhum resultado.<br>Mude os filtros ou <a href="animais-para-doacao.php" class="font-700">clique aqui para ver todos os animais cadastrados</a>.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="tabEncontrado">
											<div class="row">
												<div class="col-xs-12">
													<h2 class="font-2em text-uppercase font-700 mtop-0">Meus anúncios de animal encontrado</h2>
													<p class="font-1-2em font-300 mbottom-30">Aqui você pode gerenciar os seus anúncios, seus dados pessoais e alterar sua senha cadastrada.</p>
													<div class="row" id="rowAjaxEncontrado">
														<div class="col-xs-12 hidden containerErro">
															<div class="bg-fff padding-30">
																<div class="row padver-50">
																	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
																		<h2 class="text-center font-2em text-uppercase font-700 mtop-0">Ops!</h2>
																		<p class="font-1-2em text-center font-300 mbottom-0">Parece que a sua busca não retornou nenhum resultado.<br>Mude os filtros ou <a href="animais-para-doacao.php" class="font-700">clique aqui para ver todos os animais cadastrados</a>.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="tabAlterarCadastro">
											<div class="row">
												<div class="col-xs-12">
													<h2 class="font-2em text-uppercase font-700 mtop-0">Alterar meu cadastro</h2>
													<p class="font-1-2em font-300 mbottom-30">Aqui você pode gerenciar os seus anúncios, seus dados pessoais e alterar sua senha cadastrada.</p>
													<div class="row">
														<div class="col-xs-12 col-sm-6 col-md-6">
															<form action="" method="POST" enctype="multipart/form-data" id="formAlterarCadastro">
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
																<p class="mbottom-0"><button type="button" class="btn btn-gradient text-uppercase padhor-30" id="btnAlterarCadastro">Enviar</button></p>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="tabAlterarSenha">
											<div class="row">
												<div class="col-xs-12">
													<h2 class="font-2em text-uppercase font-700 mtop-0">Alterar minha senha</h2>
													<p class="font-1-2em font-300 mbottom-30">Aqui você pode gerenciar os seus anúncios, seus dados pessoais e alterar sua senha cadastrada.</p>
													<div class="row">
														<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
															<form method="POST" id="formAlterarSenha">
																<div class="form-group">
																	<label for="senhaAntiga">Senha antiga</label>
																	<input type="password" name="senhaAntiga" value="" class="form-control" placeholder="******">
																</div>
																<div class="form-group">
																	<label for="senhaNova">Senha nova</label>
																	<input type="password" name="senhaNova" value="" class="form-control" placeholder="******">
																</div>
																<input type="hidden" name="email" value="<?= $_SESSION['email']; ?>">
																<button id="btnAlterarSenha" class="btn btn-gradient padhor-30 text-uppercase mtop-10">Alterar senha</button>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="container-fluid padver-50">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						<h2 class="titulo">Gostaria de doar um animal?</h2>
						<p class="line-height-1-5 text-justify font-1-1em">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam voluptatem saepe perspiciatis ut tempore, aliquam vero non. Hic quia voluptatem laborum eum quam maiores atque non dicta! Iure, culpa, sed.</p>
						<p class="text-center mbottom-0 mtop-30">
							<a href="http://www.loumarturismo.com.br/" class="btn btn-gradient force-radius-0 text-uppercase padhor-30" target="_blank">Saiba mais</a>
						</p>
					</div>
				</div>
			</div>
		</div> -->
		<?php include "footer.php"; ?>
		<?php include "foot.php"; ?>
		<script>
		function deletarDoacao(idDoacao) {
			var parentCard = $(this).parent().parent();
			parentCard.css("backgroundColor", "red");
			console.log(parentCard);
			var confirmacao = confirm("Essa operação não pode ser desfeita. Deletar doação?");
			if (confirmacao == true) {
				$.ajax({
					type: 'GET',
					crossOrigin: true,
					url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/delete-doacao/' + idDoacao,
					headers: {
						'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
					},
					success:function(){
						console.log("Doação deletada com sucesso.");
						parentCard.remove();
					},
					error:function(){
						console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
					}
				});
			} else {
				console.log("Operação cancelada.");
				return false;
			}
		}

		$(function(){
			var jaCarregouDoacoes = false;
			var jaCarregouPerdidos = false;
			var jaCarregouEncontrados = false;

			$('#dashboardTabs a[href="#tabHome"]').click(function(e){
				e.preventDefault();
  				$(this).tab('show');
			});
			$('#dashboardTabs a[href="#tabDoacao"]').click(function(e){
				e.preventDefault();
				if (jaCarregouDoacoes == false) {
					ajaxDoacoes();
					jaCarregouDoacoes = true;
				}
  				$(this).tab('show');
			});
			$('#dashboardTabs a[href="#tabPerdido"]').click(function(e){
				e.preventDefault();
				if (jaCarregouPerdidos == false) {
					ajaxPerdidos();
					jaCarregouPerdidos = true;
				}
  				$(this).tab('show');
			});
			$('#dashboardTabs a[href="#tabEncontrado"]').click(function(e){
				e.preventDefault();
				if (jaCarregouEncontrados == false) {
					ajaxEncontrados();
					jaCarregouEncontrados = true;
				}
  				$(this).tab('show');
			});
			$('#dashboardTabs a[href="#tabAlterarCadastro"]').click(function(e){
				e.preventDefault();
  				$(this).tab('show');
			});
			$('#dashboardTabs a[href="#tabAlterarSenha"]').click(function(e){
				e.preventDefault();
  				$(this).tab('show');
			});

			function ajaxDoacoes() {
				$.ajax({
				    type: 'GET',
				    crossOrigin: true,
					url: 'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-doacoes-usuario/<?= $_SESSION["id"]; ?>',
				    dataType: 'json',
				    success:function(x){
						if (x.length == 0) {
							console.log(x);
							$("#rowAjaxDoacao .containerErro").removeClass("hidden");
						} else {
						    var html = '';
						    for (i = 0; i < x.length; i++) {
								html += '<div class="col-xs-12 col-lg-3 col-md-4 col-sm-6 mbottom-30 cardDoacao">';
								html += '	<a href="anuncio-animal.php?animalId=' + x[i].id + '" class="block card-home bg-fff unstyled-link relative">';
								html += '       <div class="img-todos-animais" style="background-image: url(\'http://31.220.53.123:8080/luckypets-servidor/api/file/doacao/' + x[i].id + '/' + x[i].animal.imagens[0] + '\');">';
								html += '       </div>';
								html += '		<div class="absolute-pet-details">';
								html += '			<p class="pull-left mbottom-0">';
								html += '				Nome: ' + x[i].animal.nome + '<br>Raça: ' + x[i].animal.raca;
								html += '			</p>';
								html += '			<p class="pull-right text-right mbottom-0">';
								html += '				' + x[i].cidade + '<br>' + x[i].estado;
								html += '			</p>';
								html += '		</div>';
								html += '	</a>';
								html += '	<div class="bg-fff padding-15">';
								html += '		<a href="editar-doacao.php?animalId='+x[i].id+'" class="btn btn-blue text-uppercase width-100per block mbottom-10">Editar doação</a>';
								html += '		<button onclick="deletarDoacao('+x[i].id+');" class="btn btn-red text-uppercase width-100per block">Deletar doação</button>';
								html += '	</div>';
								html += '</div>';
						    }
						    $("#rowAjaxDoacao").append(html);
						}
				    },
				    error:function(){
				    	console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
				    }
				});
			}

			function ajaxPerdidos() {
				$.ajax({
				    type: 'GET',
				    crossOrigin: true,
					url: 'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-perdidos-usuario/<?= $_SESSION["id"]; ?>',
				    dataType: 'json',
				    success:function(x){
					    var html = '';
					    for (i = 0; i < x.length; i++) {
							html += '<div class="col-xs-12 col-lg-3 col-md-4 col-sm-6 mbottom-30">';
							html += '	<a href="anuncio-animal-perdido.php?animalId=' + x[i].id + '" class="block card-home bg-fff unstyled-link relative">';
							html += '       <div class="img-todos-animais" style="background-image: url(\'http://31.220.53.123:8080/luckypets-servidor/api/file/perdido/' + x[i].id + '/' + x[i].animal.imagens[0] + '\');">';
							html += '       </div>';
							html += '		<div class="absolute-pet-details">';
							html += '			<p class="pull-left mbottom-0">';
							html += '				Nome: ' + x[i].animal.nome + '<br>Raça: ' + x[i].animal.raca;
							html += '			</p>';
							html += '			<p class="pull-right text-right mbottom-0">';
							html += '				Sexo: ' + x[i].animal.sexo + '<br>Porte: ' + x[i].animal.porte;
							html += '			</p>';
							html += '		</div>';
							html += '	</a>';
							html += '</div>';
					    }
					    $("#rowAjaxPerdido").append(html);
						if (x.length == 0) {
							console.log(x);
							$("#rowAjaxPerdido .containerErro").removeClass("hidden");
						}
				    },
				    error:function(){
				    	console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
				    }
				});
			}

			function ajaxEncontrados() {
				$.ajax({
				    type: 'GET',
				    crossOrigin: true,
					url: 'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-encontrados-usuario/<?= $_SESSION["id"]; ?>',
				    dataType: 'json',
				    success:function(x){
					    var html = '';
					    for (i = 0; i < x.length; i++) {
							html += '<div class="col-xs-12 col-lg-3 col-md-4 col-sm-6 mbottom-30">';
							html += '	<a href="anuncio-animal-encontrado.php?animalId=' + x[i].id + '" class="block card-home bg-fff unstyled-link relative">';
							html += '       <div class="img-todos-animais" style="background-image: url(\'http://31.220.53.123:8080/luckypets-servidor/api/file/encontrado/' + x[i].id + '/' + x[i].animal.imagens[0] + '\');">';
							html += '       </div>';
							html += '		<div class="absolute-pet-details">';
							html += '			<p class="text-center mbottom-0">';
							html += '				' + x[i].animal.nome;
							html += '			</p>';
							html += '		</div>';
							html += '	</a>';
							html += '</div>';
					    }
					    $("#rowAjaxEncontrado").append(html);
						if (x.length == 0) {
							console.log(x);
							$("#rowAjaxEncontrado .containerErro").removeClass("hidden");
						}
				    },
				    error:function(){
				    	console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
				    }
				});
			}

			function ajaxTrocarSenha(){
				// senhaAntiga = $("#formAlterarSenha input[name='senhaAntiga']").val();
				// senhaNova = $("#formAlterarSenha input[name='senhaNova']").val();
				// email = $("#formAlterarSenha input[name='email']").val();
				$.ajax({
					type: 'POST',
					url:'http://31.220.53.123:8080/luckypets-servidor/api/usuario/alterar-senha',
					// url:'http://31.220.53.123:8080/luckypets-servidor/api/usuario/changepass/'+email+'/'+senhaAntiga+'/'+senhaNova,
					// Método 1 - NÃO funciona com imagens (multipart/form-data)
					data: {
						senhaAntiga: $("#formAlterarSenha input[name='senhaAntiga']").val(),
						senhaNova: $("#formAlterarSenha input[name='senhaNova']").val(),
						email: $("#formAlterarSenha input[name='email']").val()
					},
					headers: {
						'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
					},
					// Método 2 - Funciona com imagens (multipart/form-data) {
					// data: new FormData($('#formulario')[0]),
					// processData: false,
					// contentType: false,
					// }
					success:function(result){
						console.log("deu");
						if (result.toLowerCase() === "Ok".toLowerCase()) {
							console.log("Senha alterada com sucesso.");
							location.href = "<?= $GLOBALS['www']; ?>?message=senhaAlteradaComSucesso";
						} else {
							console.log("A senha não foi alterada pois algum campo estava errado.");
						}
					},
					error:function(){
						console.log("Ops! Não foi possível fazer sua requisição.");
					}
				});
			}

			$("#btnAlterarSenha").on("click", function(event){
				event.preventDefault();
				ajaxTrocarSenha();
			});

			$("#btnAlterarCadastro").on("click", function(event){
				event.preventDefault();
				ajaxAlterarCadastro();
			});

			function ajaxAlterarCadastro(){
				$.ajax({
					type: 'POST',
					url:'http://31.220.53.123:8080/luckypets-servidor/api/usuario/edita-usuario',
					headers: {
						'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
					},
					// Método 1 - NÃO funciona com imagens (multipart/form-data)
					// data: { nome: $("input[name='nome']").val(), email: $("input[name='email']").val(), celular: $("input[name='celular']").val(), telefone: $("input[name='telefone']").val(), file: $("input[name='file']").val(), userId: $("input[name='userId']").val() },
					// Método 2 - Funciona com imagens (multipart/form-data) {
					data: new FormData($('#formAlterarCadastro')[0]),
					processData: false,
					contentType: false,
					// }
					success:function(result){
						console.log("Usuário alterado com sucesso.");
						refreshSession();
					},
					error:function(){
						console.log("Ops! Não foi possível fazer sua requisição.");
					}
				});
			}

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
							location.href = "<?= $GLOBALS['www']; ?>?message=usuarioAlteradoComSucesso";
						});
					},
					error:function(){
						console.log("Ops! Não foi possível fazer sua requisição.");
					}
				});
			}
		});
		</script>
	</body>
</html>
