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
				header('Location: ' . $GLOBALS['www'] . 'animais-para-doacao.php');
	    		exit;
			}
		?>
	</head>
	<body>
		<?php include "header.php"; ?>
		<div class="container-fluid bg-f5f5f5 padver-50 padver-15-xs">
			<div class="container custom-container-sm-xs">
				<div class="row">
					<div class="col-xs-12 col-md-9 col-sm-8 mbottom-15">
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
						<div class="padding-30 mbottom-15 bg-fff anuncio-infos">
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Descrição</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxDescricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus dolore molestiae atque saepe cumque voluptatem a quo mollitia eos inventore illum fugit, minus, odio, ipsum reiciendis id numquam vel voluptates? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore laborum ut quidem delectus ipsa, inventore provident asperiores facere, adipisci ipsum ab voluptatum obcaecati cum aut voluptas repellat vitae nobis unde.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Nome</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxNome">Lúcifer</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Tipo</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxTipo">Gato</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Sexo</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxSexo">Macho</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Raça</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxRaca">Hell Kitten</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Cor</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxCor">Ginger</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Porte</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxPorte">Médio</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Idade</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxIdade">Filhote (0 a 2 anos)</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Vacinado</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxVacinado"><span class="icon-width"><i class="fa fa-check color-green"></i></span>Sim</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Castrado</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo" id="ajaxCastrado"><span class="icon-width"><i class="fa fa-times color-red"></i></span>Não</p>
								</div>
							</div>
						</div>
						<div class="bg-fff comentarios">
							<h2>Dúvidas, perguntas e respostas sobre o animal</h2>
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
							<div class="pergunta">
								<p>Ele é bom com crianças?</p>
								<small>13/11/2017 11:03</small>
								<a href="" class="responder">Responder</a>
								<form action="" class="formResponder height-0" method="POST">
									<div class="form-group mtop-15">
										<textarea name="pergunta" id="" cols="30" rows="3" class="form-control no-horizontal-resize" placeholder="Tente responder a pergunta do jeito mais completo possível."></textarea>
									</div>
									<input type="hidden" name="idPergunta" value="">
									<input type="hidden" name="anuncioId" value="<?= $animalId; ?>">
									<button type="submit" class="btn btn-gradient padhor-30 text-uppercase">Responder</button>
								</form>
							</div>
							<div class="resposta">
								<p>Sim! Muito. Temos 2 crianças e ele adora brincar com elas.</p>
							</div>
							<div class="pergunta">
								<p>Ele pega a bolinha?</p>
								<small>13/11/2017 11:03</small>
								<a href="" class="responder">Responder</a>
							</div>
							<div class="resposta">
								<p>Ele é louco por qualquer tipo de brinquedo :D</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-3 col-sm-4">
						<div class="bg-purple padding-15">
							<p class="color-fff text-uppercase font-700 mbottom-0">Sobre o doador</p>
						</div>
						<div class="padding-15 bg-fff">
							<img id="ajaxPerfilImagem" src="http://placehold.it/768x768" alt="" class="img-responsive img-circle center-block" style="width: 200px;">
							<h3 id="ajaxPerfilNome" class="text-center font-700 font-1-1em text-uppercase mtop-15 mbottom-0">Nome do doador</h3>
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
		<script>
			$(function(){
				getAnunciosDoacao();

				function getAnunciosDoacao() {
			        $.ajax({
			            type: 'GET',
			            crossOrigin: true,
			            url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-doacao/<?= $animalId; ?>',
			            dataType: 'json',
			            success:function(x){
			                if (x == undefined) {
			                    location.href = "<?= $GLOBALS['www']; ?>animais-para-doacao.php";
			                }
							$('#ajaxPerfilNome').text(x.animal.usuario.nome);
							$('#ajaxPerfilImagem').attr("src", "http://31.220.53.123:8080/luckypets-servidor/api/file/" + x.animal.usuario.id + "/" + x.animal.usuario.imagem);
			                $('#ajaxDescricao').text(x.animal.descricao);
			                $('#ajaxNome').text(x.animal.nome);
			                $('#ajaxTipo').text(x.animal.tipo);
			                $('#ajaxSexo').text(x.animal.sexo);
			                $('#ajaxRaca').text(x.animal.raca);
			                $('#ajaxCor').text(x.animal.cor);
			                $('#ajaxPorte').text(x.animal.porte);
			                $('#ajaxIdade').text(x.animal.idade);
			                if (x.animal.vacinado == true) {
			                    $('#ajaxVacinado').html('<span class="icon-width"><i class="fa fa-check color-green"></i></span>Sim');
			                } else {
			                    $('#ajaxVacinado').html('<span class="icon-width"><i class="fa fa-times color-red"></i></span>Não');
			                }
			                if (x.animal.castrado == true) {
			                    $('#ajaxCastrado').html('<span class="icon-width"><i class="fa fa-check color-green"></i></span>Sim');
			                } else {
			                    $('#ajaxCastrado').html('<span class="icon-width"><i class="fa fa-times color-red"></i></span>Não');
			                }
			                //var imagens = x.animal.imagem;
			                var htmlCarouselIndicators = '';
			                var htmlCarouselInner = '';
			                for (i = 0; i < (x.animal.imagens).length; i++) {
			                    //console.log(x.animal.imagens[i]);
			                    var img = 'http://31.220.53.123:8080/luckypets-servidor/api/file/doacao/' + x.id + '/' + x.animal.imagens[i];

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

							var htmlContato = '';
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
			            },
			            error:function(){
			                console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
			            }
			        });
			    }

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
			            success: function(){
							form[0].reset();
							console.log("Deu.");
							form.find("button").removeClass("disabled");
			                //getComentarios();
			            },
						error: function(){
							console.log("Tente novamente mais tarde.");
							form.find("button").removeClass("disabled");
						}
			        });
				});

				//getComentarios();
				function getComentarios() {
					$.ajax({
			            url: 'http://etc', // Get the action URL to send AJAX to
			            type: 'POST',
			            data: form.serialize(), // get all form variables
			            success: function(result){
			                // ... do your AJAX post result
			            },
						error: function(){

						}
			        });
				}

				$(".formResponder").on("submit", function(event){
					event.preventDefault();
					var form = $(this);
					$.ajax({
			            url: 'http://etc', // Get the action URL to send AJAX to
			            type: 'POST',
			            data: form.serialize(), // get all form variables
			            success: function(result){
							form[0].reset();
			                getComentarios();
			            },
						error: function(){
							console.log("Tente novamente mais tarde.");
						}
			        });
				});

				$(".pergunta .responder").on("click", function(event){
					event.preventDefault();
					var container = $(this).parent(".pergunta");
					container.find(".formResponder").toggleClass("height-0", 300);
				});

				$(".denuncia").on("click", function(event){
					event.preventDefault();
					var btn = $(this);
					btn.addClass("disabled");
					var confirma = confirm("Gostaria mesmo de denunciar esse anúncio? Essa ação não pode ser desfeita.");
					if (confirma == true) {
						console.log("Confirmou.");
						$.ajax({
				            url: 'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/denunciar', // Get the action URL to send AJAX to
				            type: 'POST',
				            data: {
								usuario: <?= $_SESSION['id']; ?>,
								anuncio: <?= $animalId; ?>
							},
				            success: function(result){
								console.log("Deu.");
								if (result == true) {
									console.log("Denúncia registrada com sucesso.");
									btn.text("Anúncio denunciado");
								} else {
									console.log("Denúncia já registrada anteriormente.");
								}
				            },
							error: function(){
								console.log("Tente novamente mais tarde.");
								btn.removeClass("disabled");
							}
				        });
					} else {
						console.log("Ação cancelada.");
					}
				});
			});
		</script>
	</body>
</html>
