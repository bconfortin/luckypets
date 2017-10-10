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
						<h1 class="text-center font-1-8em text-uppercase font-700 color-fff mtop-0 mbottom-5 text-shadow font-1-3em-xs mbottom-30-xs">Doação de cachorros e gatos</h1>
						<p class="mbottom-30 text-center font-300 font-1-5em color-fff text-shadow hidden-xs">Veja todos os animais disponíveis para doação.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-f5f5f5 padver-50">
			<div class="">
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
						<div class="padding-30 bg-fff">
							<form action="" method="POST" id="formulario">
								<h1 class="font-700 mbottom-30 mtop-0 text-uppercase text-center font-1-3em color-blue">Formulário de cadastro de animal para doação</h1>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<p class="mbottom-5"><strong>Tipo de animal</strong></p>
										<div class="form-group">
											<div class="list-group segmented-control">
								                <a href="#" class="list-group-item active">
								                    Cachorro
								                    <input type="radio" checked name="items" value="cachorro"/>
								                </a>
								                <a href="#" class="list-group-item">
								                    Gato
								                    <input type="radio" name="items" value="gato"/>
								                </a>
								            </div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<p class="mbottom-5"><strong>Sexo</strong></p>
										<div class="form-group">
											<div class="list-group segmented-control">
								                <a href="#" class="list-group-item active">
								                    Fêmea
								                    <input type="radio" checked name="items" value="femea"/>
								                </a>
								                <a href="#" class="list-group-item">
								                    Macho
								                    <input type="radio" name="items" value="macho"/>
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
								                    <input type="radio" checked name="items" value="true"/>
								                </a>
								                <a href="#" class="list-group-item">
								                    Não
								                    <input type="radio" name="items" value="false"/>
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
								                    <input type="radio" checked name="items" value="true"/>
								                </a>
								                <a href="#" class="list-group-item">
								                    Não
								                    <input type="radio" name="items" value="false"/>
								                </a>
								            </div>
										</div>
									</div>
								</div>
								<style>
									.segmented-control {
											border: 1px solid #eee;
									}
									.segmented-control input[type="radio"] {
									    display: none;
									}
									.segmented-control .list-group-item {
									    display: inline-block;
										margin-bottom: 0;
										margin-left:-1px;
										margin-right: -1px;
										width: 50%;
									}
									.segmented-control .list-group-item:first-child {
										border-radius:0;
									}
									.segmented-control .list-group-item:last-child {
										border-radius:0;
									}
									.segmented-control .list-group-item.active,
									.segmented-control .list-group-item.active:focus,
									.segmented-control .list-group-item.active:hover {
									    background-color: #6452a2;
									}
								</style>

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
											<label for="nome">Cor</label>
											<input type="text" class="form-control" name="nome" placeholder="Ex: Caramelo">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="porte">Porte</label>
											<select name="porte" id="porte" class="form-control">
												<option value="" selected="selected" disabled="disabled">Selecione o porte</option>
												<option value="portePequeno">Pequeno</option>
												<option value="porteMedio">Médio</option>
												<option value="porteGrande">Grande</option>
												<option value="porteGigante">Gigante</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label for="idade">Idade</label>
											<select name="idade" id="idade" class="form-control">
												<option value="" selected="selected" disabled="disabled">Selecione a idade</option>
												<option value="idadeFilhote">Filhote (0 a 2 anos)</option>
												<option value="idadeAdulto">Adulto (2 a 8 anos)</option>
												<option value="idadeIdoso">Idoso (acima de 8 anos)</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12">
										<div class="form-group">
											<label for="sobrenome">Descrição</label>
											<textarea name="" id="" cols="30" rows="5" class="form-control vertical-resize-forbidden"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label for="fotoDePerfil">Fazer upload de foto</label>
											<input type="file" id="fotosDoAnimal" class="width-100per" multiple accept="image/*">
											<style>
												/*
												Input file language workaround
												https://stackoverflow.com/questions/1944267/how-to-change-the-button-text-of-input-type-file

												#fotoDePerfil::-webkit-file-upload-button {
													visibility: hidden;
												}
												#fotoDePerfil::before {
													content: 'Upe uma foto';
													display: inline-block;
													background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
													border: 1px solid #999;
													border-radius: 3px;
													padding: 5px 8px;
													outline: none;
													white-space: nowrap;
													-webkit-user-select: none;
													cursor: pointer;
													text-shadow: 1px 1px #fff;
													font-weight: 700;
													font-size: 10pt;
												}
												#fotoDePerfil:hover::before {
													border-color: black;
												}
												#fotoDePerfil:active::before {
													background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
												}
												*/
											</style>
											<p class="help-block">Dê preferência a fotos com aspecto wide (fotos tiradas com o celular virado) e com extensão .jpg ou .png.<br>Ex: resolução 840x460.</p>
										</div>
									</div>
								</div>
								<p class="text-center mbottom-0"><button class="btn btn-gradient text-uppercase padhor-30">Enviar</button></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "footer.php"; ?>
		<?php include "foot.php"; ?>
		<script>
			$(function(){
				// Baseado e modificado a partir de:
				// Bootstrap 3.3.0 Snippet by renswijnmalen
				// https://bootsnipp.com/snippets/vOk57
			    $('div.segmented-control a').on('click', function(){
			        $(this).siblings().each(function(i,e){
			            $(e).removeClass('active');
			        });
			        $(this).addClass('active');
			        $(this).find('input').prop('checked',true);
			        return false;
			    });

				/*
				userId
				file
				nome
				tipo
				sexo
				raca
				cor
				porte
				descrição
				castrado
				vacinado
				cidade
				estado
				*/
			});
		</script>
	</body>
</html>
