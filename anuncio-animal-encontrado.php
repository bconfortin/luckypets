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
			$animalId = $_GET["animalId"];
			if (!isset($animalId) || $animalId == "" || is_null($animalId)) {
				if (!headers_sent()) {
					header('Location: ' . $GLOBALS['www'] . 'animais-encontrados.php');
		    		exit;
				}
			}
		?>
	</head>
	<body>
		<?php include "header.php"; ?>
		<div class="container-fluid bg-f5f5f5 padver-50 padver-15-xs">
			<div class="container custom-container-sm-xs">
				<div class="row">
					<div class="col-xs-12 col-sm-9 mbottom-15">
						<!-- <img src="http://placehold.it/1140x500" alt="Placeholder" class="img-responsive"> -->
						<div id="carousel-img" class="carousel slide" data-ride="carousel">
						    <!-- Indicators -->
						    <ol class="carousel-indicators">
						    </ol>
						    <!-- Wrapper for slides -->
						    <div class="carousel-inner" role="listbox">
						    </div>
						    <!-- Controls -->
						    <a class="left carousel-control" href="#carousel-img" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Anterior</span>
						    </a>
						    <a class="right carousel-control" href="#carousel-img" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Próximo</span>
						    </a>
						</div>
						<div class="padding-30 bg-fff anuncio-infos">
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Descrição</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxDescricao">Não especificado</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Nome</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxNome">Não especificado.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Tipo</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxTipo">Não especificado.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Sexo</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxSexo">Não especificado.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Raça</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxRaca">Não especificado.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Cor</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxCor">Não especificado.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Porte</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxPorte">Não especificado.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Idade</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxIdade">Não especificado.</p>
								</div>
							</div>
							<div class="row mtop-30" style="margin-bottom: 0;">
								<div class="col-xs-12">
									<div id="map"></div>
								</div>
							</div>
							<!-- <script>
						        function initMap() {
						        	var uluru = {lat: -25.5046389, lng: -54.576312};
						        	var map = new google.maps.Map(document.getElementById('map'), {
						            	zoom: 15,
						            	center: uluru
						        	});
						        	var marker = new google.maps.Marker({
						            	position: uluru,
						            	map: map
						        	});
						        }
						    </script>
						    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkRBrkU6UVNZZclmB-oluPZ3L0ZeP5Cqs&callback=initMap">
						    </script> -->
							<style>
								#map {
									height: 400px;
								}
							</style>
						</div>
						<div class="bg-fff comentarios">
							<h2>Dúvidas, perguntas e respostas sobre o animal</h2>
							<?php if (isset($_SESSION['basicAuth'])) { ?>
							<h3>Fazer uma pergunta</h3>
							<div class="perguntar mbottom-30">
								<form action="" class="formPerguntar">
									<div class="form-group">
										<textarea name="texto" cols="30" rows="3" class="form-control no-horizontal-resize" placeholder="Seja breve e certifique-se de que a sua dúvida ainda não tenha sido respondida no anúncio ou nos comentários abaixo."></textarea>
									</div>
									<input type="hidden" name="anuncio" value="<?= $animalId; ?>">
									<input type="hidden" name="usuario" value="<?= $_SESSION['id']; ?>">
									<button type="submit" class="btn btn-gradient padhor-30 text-uppercase">Enviar pergunta</button>
								</form>
							</div>
							<h3>Dúvidas</h3>
							<div class="duvidas">
							</div>
						<?php } else { ?>
							<p class="mbottom-15">Para ver as perguntas e respostas, você precisa estar logado(a).</p>
							<p class="mbottom-10"><button class="btn btn-green text-uppercase padhor-35" data-toggle="modal" data-target="#modalLogin">Logar</button></p>
							<p class="mbottom-0"><a href="formulario-de-cadastro.php" class="btn btn-gradient text-uppercase">Criar conta</a></p>
						<?php } ?>
						</div>
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="bg-purple padding-15">
							<p class="color-fff text-uppercase font-700 mbottom-0">Contato</p>
						</div>
						<div class="padding-15 bg-fff" id="listaDeContato">
						</div>
						<a href="" class="btn btn-red mtop-15 width-100per text-uppercase denuncia"><i class="fa fa-flag mright-10"></i>Denunciar anúncio</a>
					</div>
				</div>
			</div>
		</div>
		<?php include "footer.php"; ?>
		<?php include "foot.php"; ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkRBrkU6UVNZZclmB-oluPZ3L0ZeP5Cqs"></script>
		<script>
			var idDonoAnuncio;
			$(function(){
				getAnunciosDoacao();

				function getAnunciosDoacao() {
			        $.ajax({
						tryCount : 0,
	    				retryLimit : 3,
			            type: 'GET',
			            crossOrigin: true,
			            url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-encontrado/<?= $animalId; ?>',
			            dataType: 'json',
			            success:function(x){
							console.log(x);
			                if (x == undefined) {
			                    location.href = "<?= $GLOBALS['www']; ?>animais-para-doacao.php";
			                }
							idDonoAnuncio = x.animal.usuario.id;
							if (x.animal.descricao != null && x.animal.descricao != "") {
								$('#ajaxDescricao').text(x.animal.descricao);
							}
							if (x.animal.nome != null && x.animal.nome != "") {
								$('#ajaxNome').text(x.animal.nome);
							}
							if (x.animal.tipo != null && x.animal.tipo != "") {
								$('#ajaxTipo').text(x.animal.tipo);
							}
							if (x.animal.sexo != null && x.animal.sexo != "") {
								$('#ajaxSexo').text(x.animal.sexo);
							}
							if (x.animal.raca != null && x.animal.raca != "") {
								$('#ajaxRaca').text(x.animal.raca);
							}
							if (x.animal.cor != null && x.animal.cor != "") {
								$('#ajaxCor').text(x.animal.cor);
							}
							if (x.animal.porte != null && x.animal.porte != "") {
								$('#ajaxPorte').text(x.animal.porte);
							}
							if (x.animal.idade != null && x.animal.idade != "") {
								$('#ajaxIdade').text(x.animal.idade);
							}

							if (x.resgatado == true) {
								var htmlContato = '';
								htmlContato += '<p class="color-red text-uppercase font-700">Atenção!!!</p><p class="mbottom-20">O animal foi resgatado e encontra-se com o anunciante. Entre em contato pelos meios disponíveis abaixo.</p>'
								if (x.animal.usuario.celular != null && x.animal.usuario.celular != undefined && x.animal.usuario.celular != "") {
									htmlContato += '<a href="tel:' + x.animal.usuario.celular + '" class="block link-white border-ccc mbottom-5 link-contato">';
									htmlContato += '<span class="padding-15 inline-block bg-blue color-fff text-center width-50"><i class="fa fa-lg fa-whatsapp"></i></span>';
									htmlContato += '<span class="padding-15 inline-block link-666 font-700">WhatsApp</span>';
									htmlContato += '</a>';
								}
								if (x.animal.usuario.email != null && x.animal.usuario.email != undefined && x.animal.usuario.email != "") {
									htmlContato += '<a href="mailto:' + x.animal.usuario.email + '" class="block link-white border-ccc mbottom-5 link-contato">';
									htmlContato += '<span class="padding-15 inline-block bg-blue color-fff text-center width-50"><i class="fa fa-lg fa-envelope"></i></span>';
									htmlContato += '<span class="padding-15 inline-block link-666 font-700">E-mail</span>';
									htmlContato += '</a>';
								}
								if (x.animal.usuario.telefone != null && x.animal.usuario.telefone != undefined && x.animal.usuario.telefone != "") {
									htmlContato += '<a href="tel:' + x.animal.usuario.telefone + '" class="block link-white border-ccc mbottom-5 link-contato">';
									htmlContato += '<span class="padding-15 inline-block bg-blue color-fff text-center width-50"><i class="fa fa-lg fa-phone"></i></span>';
									htmlContato += '<span class="padding-15 inline-block link-666 font-700">Telefone</span>';
									htmlContato += '</a>';
								}
								if (x.animal.usuario.facebook != null && x.animal.usuario.facebook != undefined && x.animal.usuario.facebook != "") {
									htmlContato += '<a href="' + x.animal.usuario.facebook + '" class="block link-white border-ccc link-contato">';
									htmlContato += '<span class="padding-15 inline-block bg-blue color-fff text-center width-50"><i class="fa fa-lg fa-question"></i></span>';
									htmlContato += '<span class="padding-15 inline-block link-666 font-700">Faça uma pergunta</span>';
									htmlContato += '</a>';
								}
								$("#listaDeContato").append(htmlContato);
			                } else {
								var htmlContato = '';
								htmlContato += '<p class="color-red text-uppercase font-700">Atenção!!!</p><p>O animal não foi resgatado e pode ainda estar nas redondezas do local indicado.</p>'
			                    $("#listaDeContato").append(htmlContato);
			                }

							var uluru = {lat: x.lat, lng: x.lng};
							var map = new google.maps.Map(document.getElementById('map'), {
								zoom: 15,
								center: uluru
							});
							var marker = new google.maps.Marker({
								position: uluru,
								map: map
							});

			                // if (x.animal.vacinado == true) {
			                //     $('#ajaxVacinado').html('<span class="icon-width"><i class="fa fa-check color-green"></i></span>Sim');
			                // } else {
			                //     $('#ajaxVacinado').html('<span class="icon-width"><i class="fa fa-times color-red"></i></span>Não');
			                // }
			                // if (x.animal.castrado == true) {
			                //     $('#ajaxCastrado').html('<span class="icon-width"><i class="fa fa-check color-green"></i></span>Sim');
			                // } else {
			                //     $('#ajaxCastrado').html('<span class="icon-width"><i class="fa fa-times color-red"></i></span>Não');
			                // }
			                // //var imagens = x.animal.imagem;
			                var htmlCarouselIndicators = '';
			                var htmlCarouselInner = '';
			                for (i = 0; i < (x.animal.imagens).length; i++) {
			                    //console.log(x.animal.imagens[i]);
			                    var img = 'http://31.220.53.123:8080/luckypets-servidor/api/file/encontrado/' + x.id + '/' + x.animal.imagens[i];
			                    if (i != 0) {
			                        htmlCarouselIndicators += '<li data-target="#carousel-img" data-slide-to="' + i + '"></li>';
			                        htmlCarouselInner += '<div class="item"><img src="' + img + '" alt="" class="width-850"></div>';
			                    } else {
			                        htmlCarouselIndicators += '<li data-target="#carousel-img" data-slide-to="' + i + '" class="active"></li>';
			                        htmlCarouselInner += '<div class="item active"><img src="' + img + '" alt="" class="width-850"></div>';
			                    }
			                }
			                $(".carousel-indicators").append(htmlCarouselIndicators);
			                $(".carousel-inner").append(htmlCarouselInner);

			                if (!$(".item.active")) {
			                    $(".carousel-indicators").append('<li data-target="#carousel-img" data-slide-to="1" class="active"></li>');
			                    $(".carousel-inner").append('<div class="item active"><img src="http://placehold.it/860x460" alt=""></div>');
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

				<?php if (isset($_SESSION['basicAuth'])) { ?>
					$(".formPerguntar").on("submit", function(event){
						event.preventDefault();
						var form = $(this);
						form.find("button").addClass("disabled");
						//console.log(form.serialize());
						// {
						// 	texto: form.find("input[textarea='texto']").val(),
						// 	anuncio:  form.find("input[name='anuncio']").val(),
						// 	usuario:  form.find("input[name='usuario']").val()
						// }
						$.ajax({
							tryCount : 0,
							retryLimit : 3,
							url: 'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/comentar', // Get the action URL to send AJAX to
							type: 'POST',
							contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
							headers: {
								'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
							},
							data: {
								texto: form.find("textarea[name='texto']").val(),
								anuncio:  form.find("input[name='anuncio']").val(),
								usuario:  form.find("input[name='usuario']").val()
							},
							success:function(){
								form[0].reset();
								console.log("Deu.");
								form.find("button").removeClass("disabled");
								//getComentarios();
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
								console.log("Tente novamente mais tarde.");
								form.find("button").removeClass("disabled");
							}
						});
					});

					function getPerguntas() {
						var urlExtenso = 'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/mensagensAnuncio/' + '<?= $animalId; ?>';
						console.log(urlExtenso);
						$.ajax({
							tryCount : 0,
							retryLimit : 3,
							url: urlExtenso,
							type: 'GET',
							dataType: 'json',
							headers: {
								'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
							},
							success:function(result){
								console.log(result);
								for (i = 0; i < result.length; i++) {
									var timestamp = result[i].dataPergunta,
										date = new Date(timestamp),
										datevalues = ((date.getDate() < 10 ? "0" : "") + date.getDate()) + '/' + (((date.getMonth()+1) < 10 ? "0" : "") + (date.getMonth()+1)) + '/' + date.getFullYear() + ' ' +
													 ((date.getHours() < 10 ? "0" : "") + date.getHours()) + ':' + ((date.getMinutes() < 10 ? "0" : "") + date.getMinutes()) + ':' + ((date.getSeconds() < 10 ? "0" : "") + date.getSeconds());
									var html = '';
									html += '<div id="containerPergunta'+result[i].id+'">';
									html +=		'<div class="pergunta">';
									html +=			'<p class="pright-30 relative">' + result[i].texto + '<a href="" class="block" style="position: absolute; right: 0px; top: 0px"><i class="fa fa-trash"></i></a></p>';
									html +=			'<small>' + datevalues + '</small>';
									if (idDonoAnuncio == <?= $_SESSION['id']; ?>) {
										html +=			'<a href="" class="responder">Responder</a>';
										html +=			'<form action="" class="formResponder height-0" method="POST">';
										html +=				'<div class="form-group mtop-15">';
										html +=					'<textarea name="resposta" cols="30" rows="3" class="form-control no-horizontal-resize" placeholder="Tente responder a pergunta do jeito mais completo possível."></textarea>';
										html +=				'</div>';
										html +=				'<input type="hidden" name="mensagem" value="' + result[i].id + '">';
										html +=				'<button type="submit" class="btn btn-gradient padhor-30 text-uppercase">Responder</button>';
										html +=			'</form>';
									}
									html +=		'</div>';
									html += '</div>';
									$(".duvidas").append(html);
									getRespostas(result[i].id);
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
								console.log("Ops! Ocorreu algum erro, tente novamente mais tarde.");
							},
							complete: function(){
								adicionarResponder();
								bindFormResponder();
							}
						});
					}
					getPerguntas();

					function getRespostas(idPergunta) {
						var urlExtenso = 'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/respostas/' + idPergunta;
						console.log(urlExtenso);
						$.ajax({
							tryCount : 0,
							retryLimit : 3,
							url: urlExtenso,
							type: 'GET',
							dataType: 'json',
							headers: {
								'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
							},
							success:function(result){
								for (i = 0; i < result.length; i++) {
									var timestamp = result[i].data,
										date = new Date(timestamp),
										datevalues = ((date.getDate() < 10 ? "0" : "") + date.getDate()) + '/' + (((date.getMonth()+1) < 10 ? "0" : "") + (date.getMonth()+1)) + '/' + date.getFullYear() + ' ' +
													 ((date.getHours() < 10 ? "0" : "") + date.getHours()) + ':' + ((date.getMinutes() < 10 ? "0" : "") + date.getMinutes()) + ':' + ((date.getSeconds() < 10 ? "0" : "") + date.getSeconds());
									var html = '';
									html += '<div class="resposta">';
									html += 	'<p>' + result[i].texto + '</p>';
									html +=		'<small>' + datevalues + '</small>';
									html += '</div>';
									console.log("containerPergunta" + result[i].msg.id);
									$("#containerPergunta".concat(result[i].msg.id)).append(html);
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
								console.log("Ops! Ocorreu algum erro, tente novamente mais tarde.");
							},
							complete: function(){
								console.log("Deu tudo certo.");
							}
						});
					}

					function bindFormResponder() {
						$(".formResponder").on("submit", function(event){
							event.preventDefault();
							var form = $(this);
							$.ajax({
								tryCount : 0,
								retryLimit : 3,
								url: 'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/responder', // Get the action URL to send AJAX to
								type: 'POST',
								data: form.serialize(), // get all form variables
								headers: {
									'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
								},
								success:function(result){
									form[0].reset();
									//getComentarios();
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
									console.log("Tente novamente mais tarde.");
								}
							});
						});

					}

					function adicionarResponder() {
						$(".pergunta .responder").on("click", function(event){
							event.preventDefault();
							var container = $(this).parent(".pergunta");
							container.find(".formResponder").toggleClass("height-0", 300);
						});
					}


					$(".denuncia").on("click", function(event){
						event.preventDefault();
						var btn = $(this);
						btn.addClass("disabled");
						var confirma = confirm("Gostaria mesmo de denunciar esse anúncio? Essa ação não pode ser desfeita.");
						if (confirma == true) {
							console.log("Confirmou.");
							$.ajax({
								tryCount : 0,
								retryLimit : 3,
								url: 'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/denunciar', // Get the action URL to send AJAX to
								type: 'POST',
								data: {
									usuario: <?= $_SESSION['id']; ?>,
									anuncio: <?= $animalId; ?>
								},
								success:function(result){
									console.log("Deu.");
									if (result == true) {
										console.log("Denúncia registrada com sucesso.");
										btn.text("Anúncio denunciado");
									} else {
										console.log("Denúncia já registrada anteriormente.");
										btn.removeClass("disabled");
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
									console.log("Tente novamente mais tarde.");
									btn.removeClass("disabled");
								}
							});
						} else {
							console.log("Ação cancelada.");
							btn.removeClass("disabled");
						}
					});
				<?php } ?>

			});
		</script>
	</body>
</html>
