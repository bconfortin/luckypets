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
		<div class="container-fluid bg-f5f5f5 padver-50 padver-15-xs">
			<div class="container custom-container-sm-xs">
				<div class="row">
					<div class="col-xs-12 col-sm-9">
						<!-- <img src="http://placehold.it/1140x500" alt="Placeholder" class="img-responsive"> -->
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						    <!-- Indicators -->
						    <ol class="carousel-indicators">
						        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						    </ol>
						    <!-- Wrapper for slides -->
						    <div class="carousel-inner" role="listbox">
						        <div class="item active">
						            <img src="http://placehold.it/1140x700" alt="">
						        </div>
						        <div class="item">
						            <img src="http://placehold.it/1140x700" alt="">
						        </div>
						        <div class="item">
						            <img src="http://placehold.it/1140x700" alt="">
						        </div>
						    </div>
						    <!-- Controls -->
						    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Anterior</span>
						    </a>
						    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Próximo</span>
						    </a>
						</div>
						<div class="padding-30 bg-fff anuncio-infos">
							<h1 class="titulo mtop-0 mbottom-30 text-center">Filhote dócil de vira lata</h1>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Descrição</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus dolore molestiae atque saepe cumque voluptatem a quo mollitia eos inventore illum fugit, minus, odio, ipsum reiciendis id numquam vel voluptates? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore laborum ut quidem delectus ipsa, inventore provident asperiores facere, adipisci ipsum ab voluptatum obcaecati cum aut voluptas repellat vitae nobis unde.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Nome</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo">Lúcifer</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Tipo de animal</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo">Gato</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Sexo</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo">Macho</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Raça</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo">Hell Kitten</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Cor</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo">Ginger</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Porte</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo">Médio</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Idade</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo">Filhote (0 a 2 anos)</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Vacinado</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo"><span class="icon-width"><i class="fa fa-check color-green"></i></span>Sim</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-3 col-md-2">
									<h2 class="atributo">Castrado</h2>
								</div>
								<div class="col-xs-12 col-sm-9 col-md-10">
									<p class="atributo"><span class="icon-width"><i class="fa fa-times color-red"></i></span>Não</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div id="map"></div>
								</div>
							</div>
						</div>
						<script>
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
					    </script>
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
		<style>
			#map {
				height: 400px;
			}
		</style>
	</body>
</html>
