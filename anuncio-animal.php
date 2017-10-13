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
				header('Location: ' . $GLOBALS['www'] . 'todos-os-pets.php');
	    		exit;
			}
		?>
	</head>
	<body>
		<?php include "header.php"; ?>
		<div class="container-fluid bg-f5f5f5 padver-50 padver-15-xs">
			<div class="container custom-container-sm-xs">
				<div class="row">
					<div class="col-xs-12 col-sm-9">
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
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="bg-purple padding-15">
							<p class="color-fff text-uppercase font-700 mbottom-0">Contato</p>
						</div>
						<div class="padding-15 bg-fff">
							<a href="" class="block link-white border-ccc mbottom-5 link-contato">
								<span class="padding-15 inline-block bg-blue color-fff text-center width-50"><i class="fa fa-lg fa-whatsapp"></i></span>
								<span class="padding-15 inline-block link-666 font-700">WhatsApp</span>
							</a>
							<a href="" class="block link-white border-ccc mbottom-5 link-contato">
								<span class="padding-15 inline-block bg-blue color-fff text-center width-50"><i class="fa fa-lg fa-phone"></i></span>
								<span class="padding-15 inline-block link-666 font-700">Telefone</span>
							</a>
							<a href="" class="block link-white border-ccc mbottom-5 link-contato">
								<span class="padding-15 inline-block bg-blue color-fff text-center width-50"><i class="fa fa-lg fa-envelope"></i></span>
								<span class="padding-15 inline-block link-666 font-700">E-mail</span>
							</a>
							<a href="" class="block link-white border-ccc mbottom-5 link-contato">
								<span class="padding-15 inline-block bg-blue color-fff text-center width-50"><i class="fa fa-lg fa-comments-o"></i></span>
								<span class="padding-15 inline-block link-666 font-700">Chat</span>
							</a>
							<a href="" class="block link-white border-ccc link-contato">
								<span class="padding-15 inline-block bg-blue color-fff text-center width-50"><i class="fa fa-lg fa-question"></i></span>
								<span class="padding-15 inline-block link-666 font-700">Faça uma pergunta</span>
							</a>
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

			    // Remover a classe container nas resoluções abaixo de 993
			    // Por Bruno Confortin
			    doTheContainerThingy();

		    	$(window).resize(function() {
		    		doTheContainerThingy();
		    	});

		    	function decontainerization() {
		    		$(".custom-container-sm-xs").removeClass("container");
		    	}

		    	function containerization() {
		    		$(".custom-container-sm-xs").addClass("container");
		    	}

		    	function doTheContainerThingy() {
		    		var resizedWindowSize = $(window).width();
		    		if (resizedWindowSize < 993) {
		    			decontainerization();
		    		} else {
		    			containerization();
		    		}
		    	}

				$.ajax({
				    type: 'GET',
				    crossOrigin: true,
				    url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-doacao/<?= $animalId; ?>',
				    dataType: 'json',
				    success:function(x){
						if (x == undefined) {
							location.href = "<?= $GLOBALS['www']; ?>todos-os-pets.php";
						}
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
								htmlCarouselInner += '<div class="item"><img src="' + img + '" alt=""></div>';
							} else {
								htmlCarouselIndicators += '<li data-target="#carousel-img" data-slide-to="' + i + '" class="active"></li>';
								htmlCarouselInner += '<div class="item active"><img src="' + img + '" alt=""></div>';
							}
						}
						$(".carousel-indicators").append(htmlCarouselIndicators);
						$(".carousel-inner").append(htmlCarouselInner);

						if (!$(".item.active")) {
							$(".carousel-indicators").append('<li data-target="#carousel-img" data-slide-to="1" class="active"></li>');
							$(".carousel-inner").append('<div class="item active"><img src="http://placehold.it/860x460" alt=""></div>');
						}
				    },
				    error:function(){
				    	console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
				    }
				});
			});
		</script>
	</body>
</html>
