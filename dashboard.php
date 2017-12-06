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
		<div class="container-fluid bg-gray-f5f5f5">
			<div class="">
				<div class="row">
					<div class="col-xs-12 col-md-3 col-sm-3 col-lg-2 padhor-0 dashboard-height-hack bg-gray-666">
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
									<?php if ($_SESSION["tipo"] != "Usuário") { ?>
									<h2>Minhas metas</h2>
									<li><a href="#tabMinhasMetas">Minhas metas</a></li>
									<li><a href="#tabCriarMeta">Criar meta</a></li>
									<?php } ?>
									<!-- INICIO FORMULARIO BOTAO PAGSEGURO
									<form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
									<input type="hidden" name="currency" value="BRL" />
									<input type="hidden" name="receiverEmail" value="brunoconfortin@gmail.com" />
									<input type="hidden" name="iot" value="button" />
									<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/209x48-doar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
									</form>
									FINAL FORMULARIO BOTAO PAGSEGURO -->
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-9 col-sm-9 col-lg-10 bg-f5f5f5 dashboard-height-hack">
						<div class="row">
							<div class="col-xs-12 padver-15-xs">
								<div class="padding-30 padding-0-xs padding-0-sm">
									<!-- Tab panes -->
									<div class="tab-content bg-transparent padding-0-xs">
										<div role="tabpanel" class="tab-pane active" id="tabHome">
											<div class="row">
												<div class="col-xs-12">
													<h2 class="font-2em text-uppercase font-700 mtop-15 font-1-3em-xs">Bem vindo ao seu perfil</h2>
													<p class="font-1-2em font-300 mbottom-30">Aqui você pode gerenciar os seus anúncios, seus dados pessoais e alterar sua senha cadastrada.</p>
													<div class="row">
														<div class="col-xs-12">
															<div class="bg-fff padding-30">
																<div class="row padver-50">
																	<div class="col-xs-12">
																		<h2 class="font-2em text-uppercase font-700 mtop-0">Atenção!</h2>
																		<p class="font-1-2em font-300 mbottom-0">Hoje é dia da apresentação do seu <strong class="color-blue">Projeto Integrador</strong>. Tomara que dê tudo certo e que a equipe consiga <strong class="color-blue">conceito A</strong>!</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="tabDoacao">
											<div class="row">
												<div class="col-xs-12">
													<h2 class="font-2em text-uppercase font-700 mtop-15 font-1-3em-xs">Meus anúncios de doação</h2>
													<p class="font-1-2em font-300 mbottom-30">Aqui você pode gerenciar os seus anúncios, seus dados pessoais e alterar sua senha cadastrada.</p>
													<div class="row" id="rowAjaxDoacao">
														<div class="col-xs-12 hidden containerErro">
															<div class="bg-fff padding-30">
																<div class="row padver-50">
																	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
																		<h2 class="text-center font-2em text-uppercase font-700 mtop-0">Ops!</h2>
																		<p class="font-1-2em text-center font-300 mbottom-0">Parece que a sua busca não retornou nenhum resultado.</p>
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
													<h2 class="font-2em text-uppercase font-700 mtop-15 font-1-3em-xs">Meus anúncios de animal perdido</h2>
													<p class="font-1-2em font-300 mbottom-30">Aqui você pode gerenciar os seus anúncios, seus dados pessoais e alterar sua senha cadastrada.</p>
													<div class="row" id="rowAjaxPerdido">
														<div class="col-xs-12 hidden containerErro">
															<div class="bg-fff padding-30">
																<div class="row padver-50">
																	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
																		<h2 class="text-center font-2em text-uppercase font-700 mtop-0">Ops!</h2>
																		<p class="font-1-2em text-center font-300 mbottom-0">Parece que a sua busca não retornou nenhum resultado.</p>
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
													<h2 class="font-2em text-uppercase font-700 mtop-15 font-1-3em-xs">Meus anúncios de animal encontrado</h2>
													<p class="font-1-2em font-300 mbottom-30">Aqui você pode gerenciar os seus anúncios, seus dados pessoais e alterar sua senha cadastrada.</p>
													<div class="row" id="rowAjaxEncontrado">
														<div class="col-xs-12 hidden containerErro">
															<div class="bg-fff padding-30">
																<div class="row padver-50">
																	<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
																		<h2 class="text-center font-2em text-uppercase font-700 mtop-0">Ops!</h2>
																		<p class="font-1-2em text-center font-300 mbottom-0">Parece que a sua busca não retornou nenhum resultado.</p>
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
													<h2 class="font-2em text-uppercase font-700 mtop-15 font-1-3em-xs">Alterar dados cadastrais</h2>
													<p class="font-1-2em font-300 mbottom-30">Aqui você pode gerenciar os seus anúncios, seus dados pessoais e alterar sua senha cadastrada.</p>
													<div class="row">
														<div class="col-xs-12 col-sm-6 col-md-6">
															<?php if ($_SESSION["tipo"] == "Usuário") { ?>
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
																				<input type="text" class="form-control" name="email" placeholder="Ex: joao@dasneves.com" value="<?= $_SESSION['email'] ?>" readonly disabled>
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
															<?php } else { ?>
																<form action="" method="POST" enctype="multipart/form-data" id="formularioEditarPrestador">
																	<div class="row">
																		<div class="col-xs-12 col-sm-12">
																			<div class="form-group">
																				<label for="nome">Nome</label>
																				<input type="text" class="form-control" name="nome" placeholder="Ex: João das Neves" value="<?= $_SESSION['nome']; ?>">
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
																				<select name="tipo" class="form-control" id="tipoPrestador">
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
																	<div class="row rowEndereco">
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
																			<h2 class="font-700 font-1-1em">Cadastro de banco para doações</h2>
																			<hr class="marver-5">
																			<p class="font-300">A opção de cadastramento de banco serve caso o prestador de serviços queira abrir seu perfil para que os usuários façam doações de recursos financeiros, rações e outros.</p>
																			<div class="form-group">
																				<label for="banco">Banco</label>
																				<input type="text" class="form-control" name="banco" placeholder="Ex: Banco Santander" value="<?= $_SESSION['banco'] ?>">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-12 col-sm-6">
																			<div class="form-group">
																				<label for="conta">Conta</label>
																				<input type="text" class="form-control" name="conta" placeholder="Ex: 1-2223-442" value="<?= $_SESSION['conta'] ?>">
																			</div>
																		</div>
																		<div class="col-xs-12 col-sm-6">
																			<div class="form-group">
																				<label for="agencia">Agência</label>
																				<input type="text" class="form-control" name="agencia" placeholder="Ex: 4292" value="<?= $_SESSION['agencia'] ?>">
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
																	<p class="text-center mbottom-0"><button type="submit" class="btn btn-gradient text-uppercase padhor-30" id="btnEditarPrestador">Enviar</button></p>
																</form>
															<?php } ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="tabAlterarSenha">
											<div class="row">
												<div class="col-xs-12">
													<h2 class="font-2em text-uppercase font-700 mtop-15 font-1-3em-xs">Alterar senha</h2>
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

										<div role="tabpanel" class="tab-pane" id="tabMinhasMetas">
											<div class="row">
												<div class="col-xs-12">
													<h2 class="font-2em text-uppercase font-700 mtop-15 font-1-3em-xs">Minhas metas</h2>
													<p class="font-1-2em font-300 mbottom-30">Aqui você pode ver todas as suas metas cadastradas.</p>
													<div class="row">
														<div class="col-xs-12">
															<div class="bg-fff padding-15">
																<style>
																.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
																	vertical-align: middle;
																}
																</style>
																<div class="table-responsive">
																	<table class="table table-hover mbottom-0">
																		<thead>
																			<tr>
																				<th>Tipo</th>
																				<th>Quantidade necessária</th>
																				<th>Quantidade alcançada</th>
																				<th>Mês</th>
																				<th>Ano</th>
																				<th>Ativa/Inativa</th>
																				<th colspan="2">Ações</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>Ração</td>
																				<td>100</td>
																				<td>120</td>
																				<td>11</td>
																				<td>2017</td>
																				<td>TRUE</td>
																				<td><button class="btn btn-blue text-uppercase">Editar</button></td>
																				<td><button class="btn btn-red text-uppercase">Desativar</button></td>
																			</tr>
																			<tr>
																				<td>Financeiro</td>
																				<td>2000</td>
																				<td>1700</td>
																				<td>11</td>
																				<td>2017</td>
																				<td>TRUE</td>
																				<td><button class="btn btn-blue text-uppercase">Editar</button></td>
																				<td><button class="btn btn-red text-uppercase">Desativar</button></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="tabCriarMeta">
											<div class="row">
												<div class="col-xs-12">
													<h2 class="font-2em text-uppercase font-700 mtop-15 font-1-3em-xs">Criar meta</h2>
													<p class="font-1-2em font-300 mbottom-30">Crie uma meta para que as pessoas possam doar.</p>
													<div class="row">
														<div class="col-xs-12" id="containerMeta">

														</div>
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="tabCadastroBanco">
											<div class="row">
												<div class="col-xs-12">
													<h2 class="font-2em text-uppercase font-700 mtop-15 font-1-3em-xs">Cadastro de banco</h2>
													<p class="font-1-2em font-300 mbottom-30">Aqui você pode cadastrar o seu banco.</p>
													<div class="row">
														<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
															<form method="POST" id="formCadastrarBanco">
																<div class="form-group">
																	<label for="banco">Banco</label>
																	<input type="text" name="banco" value="" class="form-control" placeholder="******">
																</div>
																<div class="form-group">
																	<label for="agencia">Agência</label>
																	<input type="text" name="agencia" value="" class="form-control" placeholder="******">
																</div>
																<div class="form-group">
																	<label for="contacorrente">Conta corrente</label>
																	<input type="text" name="contacorrente" value="" class="form-control" placeholder="******">
																</div>
																<div class="form-group">
																	<label for="responsavel">Responsável (nome ou empresa)</label>
																	<input type="text" name="responsavel" value="" class="form-control" placeholder="******">
																</div>
																<div class="form-group">
																	<label for="cpfOuCnpj">CPF/CNPJ</label>
																	<input type="text" name="cpfOuCnpj" value="" class="form-control" placeholder="******">
																</div>
																<button id="btnCriarBanco" class="btn btn-gradient padhor-30 text-uppercase mtop-10">Alterar senha</button>
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
						<p class="line-height-1-5 text-justify font-1-1em">Precisa de um lar para um animal que você tem? Faça a vida de alguém muito feliz doando seu cachorro ou gato!</p>
						<p class="text-center mbottom-0 mtop-30">
							<a href="formulario-de-anuncio-animal.php" class="btn btn-gradient force-radius-0 text-uppercase padhor-30" target="_blank">Saiba mais</a>
						</p>
					</div>
				</div>
			</div>
		</div> -->
		<?php include "footer.php"; ?>
		<?php include "foot.php"; ?>
		<script>
		function deletarDoacao(idDoacao) {
			var confirmacao = confirm("Essa operação não pode ser desfeita. Deletar doação?");
			if (confirmacao == true) {
				$.ajax({
					tryCount : 0,
    				retryLimit : 3,
					type: 'GET',
					crossOrigin: true,
					url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/delete-doacao/' + idDoacao,
					headers: {
						'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
					},
					success:function(){
						console.log("Anúncio deletado com sucesso.");
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
					complete:function(){
						location.href = "<?= $GLOBALS['www']; ?>dashboard.php";
					}
				});
			} else {
				console.log("Operação cancelada.");
				return false;
			}
		}

		function deletarPerdido(idPerdido) {
			var confirmacao = confirm("Essa operação não pode ser desfeita. Deletar doação?");
			if (confirmacao == true) {
				$.ajax({
					tryCount : 0,
    				retryLimit : 3,
					type: 'GET',
					crossOrigin: true,
					url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/delete-perdido/' + idPerdido,
					headers: {
						'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
					},
					success:function(){
						console.log("Anúncio deletado com sucesso.");
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
					complete:function(){
						location.href = "<?= $GLOBALS['www']; ?>dashboard.php";
					}
				});
			} else {
				console.log("Operação cancelada.");
				return false;
			}
		}

		function deletarEncontrado(idEncontrado) {
			var confirmacao = confirm("Essa operação não pode ser desfeita. Deletar doação?");
			if (confirmacao == true) {
				$.ajax({
					tryCount : 0,
    				retryLimit : 3,
					type: 'GET',
					crossOrigin: true,
					url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/delete-encontrado/' + idEncontrado,
					headers: {
						'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
					},
					success:function(){
						console.log("Anúncio deletado com sucesso.");
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
					complete:function(){
						location.href = "<?= $GLOBALS['www']; ?>dashboard.php";
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
			$('#dashboardTabs a[href="#tabMinhasMetas"]').click(function(e){
				e.preventDefault();
  				$(this).tab('show');
			});
			$('#dashboardTabs a[href="#tabCriarMeta"]').click(function(e){
				e.preventDefault();
  				$(this).tab('show');
				<?php if ($_SESSION["tipo"] != "Usuário") { ?>
					verificaMeta();
				<?php } ?>
			});
			$('#dashboardTabs a[href="#tabCadastroBanco"]').click(function(e){
				e.preventDefault();
  				$(this).tab('show');
			});

			function ajaxDoacoes() {
				$.ajax({
					tryCount : 0,
    				retryLimit : 3,
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
				    }
				});
			}

			function ajaxPerdidos() {
				$.ajax({
					tryCount : 0,
    				retryLimit : 3,
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
							html += '	<div class="bg-fff padding-15">';
							html += '		<a href="editar-perdido.php?animalId='+x[i].id+'" class="btn btn-blue text-uppercase width-100per block mbottom-10">Editar anúncio</a>';
							html += '		<button onclick="deletarPerdido('+x[i].id+');" class="btn btn-red text-uppercase width-100per block">Deletar anúncio</button>';
							html += '	</div>';
							html += '</div>';
					    }
					    $("#rowAjaxPerdido").append(html);
						if (x.length == 0) {
							console.log(x);
							$("#rowAjaxPerdido .containerErro").removeClass("hidden");
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
				    	console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
				    }
				});
			}

			function ajaxEncontrados() {
				$.ajax({
					tryCount : 0,
    				retryLimit : 3,
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
							html += '	<div class="bg-fff padding-15">';
							html += '		<a href="editar-encontrado.php?animalId='+x[i].id+'" class="btn btn-blue text-uppercase width-100per block mbottom-10">Editar anúncio</a>';
							html += '		<button onclick="deletarEncontrado('+x[i].id+');" class="btn btn-red text-uppercase width-100per block">Deletar anúncio</button>';
							html += '	</div>';
							html += '</div>';
					    }
					    $("#rowAjaxEncontrado").append(html);
						if (x.length == 0) {
							console.log(x);
							$("#rowAjaxEncontrado .containerErro").removeClass("hidden");
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
				    	console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
				    }
				});
			}

			function ajaxTrocarSenha(){
				// senhaAntiga = $("#formAlterarSenha input[name='senhaAntiga']").val();
				// senhaNova = $("#formAlterarSenha input[name='senhaNova']").val();
				// email = $("#formAlterarSenha input[name='email']").val();
				$.ajax({
					tryCount : 0,
    				retryLimit : 3,
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
						if (result.toLowerCase() === "Ok".toLowerCase()) {
							console.log("Senha alterada com sucesso.");
							location.href = "<?= $GLOBALS['www']; ?>?m=1";
						} else {
							console.log("A senha não foi alterada pois algum campo estava errado.");
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
					data: new FormData($('#formAlterarCadastro')[0]),
					processData: false,
					contentType: false,
					// }
					success:function(result){
						console.log("Usuário alterado com sucesso.");
						refreshSession();
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

			$("#formularioEditarPrestador").validate({
				rules: {
					file: "required",
					nome: "required",
					telefone: "required",
					celular: "required",
					responsavel: "required",
					cpfResponsavel: "required",
					tipo: "required",
					cep: "required",
					logradouro: "required",
					numero: "required",
					cidade: "required",
					estado: "required",
					banco: "required",
					conta: "required",
					agencia: "required"
				},
				highlight: function(element) {
					$(element).closest('.form-group').addClass('has-error');
				},
				unhighlight: function(element) {
					$(element).closest('.form-group').removeClass('has-error');
				},
				submitHandler: function(form) {
					$("#btnEditarPrestador").addClass("disabled");
					if ($("formularioEditarPrestador input[name=file]").val() == "") {
						$("formularioEditarPrestador input[name=file]").remove();
					}
					$.ajax({
						tryCount : 0,
	    				retryLimit : 3,
						type: 'POST',
						url:'http://31.220.53.123:8080/luckypets-servidor/api/prestador/edita-prestador',
						headers: {
							'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
						},
						// Método 1 - NÃO funciona com imagens (multipart/form-data)
						// data: { nome: $("input[name='nome']").val(), email: $("input[name='email']").val(), celular: $("input[name='celular']").val(), telefone: $("input[name='telefone']").val(), file: $("input[name='file']").val(), userId: $("input[name='userId']").val() },
						// Método 2 - Funciona com imagens (multipart/form-data) {
						data: new FormData($('#formularioEditarPrestador')[0]),
						processData: false,
						contentType: false,
						// }
						success:function(result) {
							if (result.toLowerCase() == "sucesso!") {
								refreshSession();
								location.href = "<?= $GLOBALS['www']; ?>?m=1";
							} else {
								alert("Aconteceu algum erro! Verifique os campos e tente novamente.");
								$("#btnEditarPrestador").removeClass("disabled");
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
							$("#btnEditarPrestador").removeClass("disabled");
						},
						complete:function(){
							$("#btnEditarPrestador").removeClass("disabled");
						}
					});
				}
			});

			<?php if ($_SESSION['tipo'] != "Usuário") { ?>

			function verificaMeta() {
				$.ajax({
					tryCount : 0,
    				retryLimit : 3,
				    type: 'GET',
				    crossOrigin: true,
					url: 'http://31.220.53.123:8080/luckypets-servidor/api/prestador/verifica-meta/<?= date('m'); ?>/<?= date('Y'); ?>/<?= $_SESSION['id']; ?>',
				    dataType: 'json',
					headers: {
						'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
					},
				    success:function(x, status, xhr){
						if (x == null || x == "") {
							console.log("Meta mensal ainda não cadastrada.");
							html = "";
							html += '<div class="row">'
							html += 	'<div class="col-xs-12">'
							html += 		'<button id="btnMeta" class="btn btn-gradient text-uppercase padhor-30">Criar meta mensal</button>'
							html += 	'</div>'
							html += '</div>'
							$("#containerMeta").append(html);
							bindBtnMeta();
						} else {
							console.log(x);
							html = "";
							html += '<div class="row">';
							html += 	'<div class="col-xs-12">';
							html +=			'<div class="table-responsive">';
							html +=				'<table class="table">';
							html +=					'<thead>';
							html +=						'<tr>';
							html +=							'<th>ID</th>';
							html +=							'<th>Mês</th>';
							html +=							'<th>Ano</th>';
							html +=							'<th>Prestador</th>';
							html +=						'</tr>';
							html +=					'</thead>';
							html +=					'<tbody>';
							html +=						'<tr>';
							html +=							'<td>' + x.id + '</td>';
							html +=							'<td>' + x.mes + '</td>';
							html +=							'<td>' + x.ano + '</td>';
							html +=							'<td>' + x.prestador.nome + '</td>';
							html +=						'</tr>';
							html +=					'</tbody>'	;
							html +=				'</table>';
							html +=			'</div>';
							html += 	'</div>';
							html += '</div>';
							if (x.itens.length > 0) {
								html += '<div class="row">';
								html += 	'<div class="col-xs-12">'
								html +=			'<div class="table-responsive">';
								html +=				'<table class="table">';
								html +=					'<thead>';
								html +=						'<tr>';
								html +=							'<th>ID da Meta Mensal</th>';
								html +=							'<th>Tipo</th>';
								html +=							'<th>Quantidade</th>';
								html +=							'<th>Progresso</th>';
								html +=						'</tr>';
								html +=					'</thead>';
								html +=					'<tbody>';
								for (i = 0; i < x.itens.length; i++) {
									html +=					'<tr>';
									html +=						'<td>' + x.itens[i].id + '</td>';
									html +=						'<td>' + x.itens[i].tipo + '</td>';
									if (x.itens[i].unidade.toLowerCase() == "caixa" || x.itens[i].unidade.toLowerCase() == "cirurgia") {
										if (x.itens[i].quantidade > 1) {
											html +=						'<td>' + x.itens[i].quantidade + ' ' + x.itens[i].unidade.toLowerCase() + 's' + '</td>';
										} else {
											html +=						'<td>' + x.itens[i].quantidade + ' ' + x.itens[i].unidade.toLowerCase() + '</td>';
										}
									} else {
										html +=						'<td>' + x.itens[i].quantidade + ' ' + x.itens[i].unidade + '</td>';
									}
									html +=						'<td>' + x.itens[i].progresso + '/' + x.itens[i].quantidade + '</td>';
									html +=					'</tr>';
								}
								html +=					'</tbody>'	;
								html +=				'</table>';
								html +=			'</div>';
								html += 	'</div>';
								html += '</div>';

							}
							// form de criar meta
							html += '<div class="row">';
							html += 	'<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">';
							html +=			'<div class="bg-fff padding-15">';
							html += 			'<h2 class="text-center font-700 font-1-1em mtop-0">Criar nova doação</h2>'
							html += 			'<form action="" id="formItemDeMeta">';
							html += 				'<div class="form-group">';
							html += 					'<label for="tipo">Tipo de doação</label>';
							html += 					'<select name="tipo" id="" class="form-control">';
							html += 						'<option value="Recurso financeiro" selected="selected">Recurso financeiro</option>';
							html += 						'<option value="Ração">Ração</option>';
							html += 						'<option value="Medicamento">Medicamento</option>';
							html += 						'<option value="Castração">Castração</option>';
							html += 					'</select>';
							html += 				'</div>';
							html += 				'<div class="form-group">';
							html += 					'<label for="unidade">Unidade</label>';
							html += 					'<select name="unidade" id="" class="form-control">';
							html += 						'<option value="kg" selected="selected">Quilogramas (kg)</option>';
							html += 						'<option value="R$">Real (R$)</option>';
							html += 						'<option value="Caixa">Caixas</option>';
							html += 						'<option value="Cirurgia">Cirurgia</option>';
							html += 					'</select>';
							html += 				'</div>';
							html += 				'<div class="form-group">';
							html += 					'<label for="quantidade">Quantidade</label>';
							html += 					'<input type="text" name="quantidade" class="form-control" placeholder="Qual a quantidade necessária?">';
							html += 				'</div>';
							html += 				'<div class="form-group">';
							html += 					'<label for="progresso">Progresso</label>';
							html += 					'<input type="text" name="progresso" class="form-control" value="0">';
							html += 				'</div>';
							html += 				'<input type="hidden" name="idMetaMensal" class="form-control" value="' + x.id + '">';
							html += 				'<button type="submit" id="btnCriarItemDeMeta" class="btn btn-gradient text-uppercase width-100per">Adicionar item de meta</button>';
							html += 			'</form>';
							html += 		'</div>';
							html += 	'</div>';
							html += '</div>';
							$("#containerMeta").prepend(html);
							bindFormItemMeta();
						    // var html = '';
						    // for (i = 0; i < x.length; i++) {
                            //
						    // }
						    // $("#rowAjaxDoacao").append(html);
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
				    	console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
				    }
				});
			}

			function bindBtnMeta() {
				$("#btnMeta").on("click", function(){
					criarMeta();
				});
			}

			function criarMeta() {
				$.ajax({
					tryCount : 0,
    				retryLimit : 3,
				    type: 'POST',
				    crossOrigin: true,
					url: 'http://31.220.53.123:8080/luckypets-servidor/api/prestador/cadastra-metamensal/',
				    dataType: 'json',
					data: {
						mes: <?= date('m'); ?>,
						ano: <?= date('Y'); ?>,
						prestadorId: <?= $_SESSION['id']; ?>
					},
					headers: {
						'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
					},
				    success:function(x, status, xhr){
						if (xhr.status == 200) {
							alert("Meta mensal cadastrada com sucesso!");
							location.href = "<?= $GLOBALS['www']; ?>dashboard.php";
						} else {
							alert("Ocorreu algum erro. Tente novamente mais tarde.");
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
				    	console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
				    }
				});
			}

			function bindFormItemMeta() {
				$("#formItemDeMeta").validate({
					rules: {
					},
					highlight: function(element) {
						$(element).closest('.form-group').addClass('has-error');
					},
					unhighlight: function(element) {
						$(element).closest('.form-group').removeClass('has-error');
					},
					submitHandler: function(form) {
						$("#btnCriarItemDeMeta").addClass("disabled");
						$.ajax({
							tryCount : 0,
		    				retryLimit : 3,
							type: 'POST',
							url:'http://31.220.53.123:8080/luckypets-servidor/api/prestador/cadastra-item',
							headers: {
								'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
							},
							// Método 1 - NÃO funciona com imagens (multipart/form-data)
							// data: { nome: $("input[name='nome']").val(), email: $("input[name='email']").val(), celular: $("input[name='celular']").val(), telefone: $("input[name='telefone']").val(), file: $("input[name='file']").val(), userId: $("input[name='userId']").val() },
							// Método 2 - Funciona com imagens (multipart/form-data) {
							data: {
								quantidade: $("#formItemDeMeta input[name='quantidade']").val(),
								progresso: $("#formItemDeMeta input[name='progresso']").val(),
								idMetaMensal: $("#formItemDeMeta input[name='idMetaMensal']").val(),
								tipo: $("#formItemDeMeta select[name='tipo']").val(),
								unidade: $("#formItemDeMeta select[name='unidade']").val()
							},
							// }
							success:function(result, status, xhr) {
								if (xhr.status == 200 || result.toLowerCase() == "cadastrado com sucesso") {
									location.href = "<?= $GLOBALS['www']; ?>dashboard.php";
								} else {
									alert("Aconteceu algum erro! Verifique os campos e tente novamente.");
									$("#btnCriarItemDeMeta").removeClass("disabled");
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
								$("#btnCriarItemDeMeta").removeClass("disabled");
							},
							complete:function(){
								$("#btnCriarItemDeMeta").removeClass("disabled");
							}
						});
					}
				});
			}

			<?php } ?>

		});
		</script>

		<?php if ($_SESSION['tipo'] != "Usuário") { $tipo = $_SESSION['tipo']; ?>
			<script>
				$('#tipoPrestador option[value="<?= $tipo ?>"]').prop('selected', true);
			</script>
		<?php } ?>
	</body>
</html>
