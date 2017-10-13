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
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 padhor-0">
					<img src="img/cat-1920x450.jpg" alt="Imagem de um gato cor caramelo." class="img-responsive hidden-xs hidden-sm">
					<img src="img/cat-993x600.jpg" alt="Imagem de um gato cor caramelo." class="img-responsive hidden-md hidden-lg">
					<div class="force-vertical-align black-bg-filter width-100per">
						<div class="force-vertical-align">
							<h1 class="text-center font-1-8em text-uppercase font-700 color-fff mtop-0 mbottom-5 text-shadow font-1-3em-xs mbottom-30-xs">Quem somos</h1>
							<p class="mbottom-30 text-center font-300 font-1-5em color-fff text-shadow hidden-xs">Descubra a equipe por trás do projeto</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-f5f5f5 padver-50">
			<div class="container">
				<div class="row mbottom-30">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
						<h1 class="titulo text-center mtop-0 mbottom-30">A equipe por trás do projeto</h1>
						<p class="text-center font-1-1em line-height-1-7">O site Lucky Pets foi desenvolvido por três alunos do curso de tecnólogo em Análise e Desenvolvimento de Sistemas do Instituto Federal do Paraná (IFPR). O perfil dos alunos se encontra abaixo:</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="bg-fff card-home">
									<img src="img/amanda-morais.jpg" alt="" class="img-responsive">
									<div class="padding-15">
										<h2 class="text-uppercase font-700 font-1em margin-0">Amanda Louise Acosta Morais</h2>
										<p class="mtop-5 mbottom-15 font-300">Analista de Sistemas - Backend</p>
										<div class="sobre-nos-icons relative text-center">
											<a href="https://www.facebook.com/AmandaLouiseMorais" class="white-link inline-block force-vertical-align"><i class="fa fa-facebook"></i></a>
										</div>
										<div class="sobre-nos-icons relative text-center">
											<a href="https://github.com/amandaalouise" class="white-link inline-block force-vertical-align"><i class="fa fa-github"></i></a>
										</div>
										<div class="sobre-nos-icons relative text-center">
											<a href="https://www.instagram.com/amandalouisemorais/" class="white-link inline-block force-vertical-align"><i class="fa fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="bg-fff card-home">
									<img src="img/bruno-confortin.jpg" alt="" class="img-responsive">
									<div class="padding-15">
										<h2 class="text-uppercase font-700 font-1em margin-0">Bruno Goerck Confortin</h2>
										<p class="mtop-5 mbottom-15 font-300">Analista de Sistemas - Frontend</p>
										<div class="sobre-nos-icons relative text-center">
											<a href="https://www.facebook.com/brunoconfortin" class="white-link inline-block force-vertical-align"><i class="fa fa-facebook"></i></a>
										</div>
										<div class="sobre-nos-icons relative text-center">
											<a href="https://github.com/bconfortin" class="white-link inline-block force-vertical-align"><i class="fa fa-github"></i></a>
										</div>
										<div class="sobre-nos-icons relative text-center">
											<a href="https://www.instagram.com/bconfortin" class="white-link inline-block force-vertical-align"><i class="fa fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="bg-fff card-home">
									<img src="img/jade-mathias.jpg" alt="" class="img-responsive">
									<div class="padding-15">
										<h2 class="text-uppercase font-700 font-1em margin-0">Jade Mathias da Silva</h2>
										<p class="mtop-5 mbottom-15 font-300">Analista de Sistemas - Documentação</p>
										<div class="sobre-nos-icons relative text-center">
											<a href="https://www.facebook.com/jadeemathias" class="white-link inline-block force-vertical-align"><i class="fa fa-facebook"></i></a>
										</div>
										<div class="sobre-nos-icons relative text-center">
											<a href="https://www.instagram.com/jademathias/" class="white-link inline-block force-vertical-align"><i class="fa fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
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
			});
		</script>
	</body>
</html>
