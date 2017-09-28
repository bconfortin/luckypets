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
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 padhor-0">
					<img src="img/1920x350.jpg" alt="Placeholder" class="img-responsive hidden-xs hidden-sm">
					<img src="http://placehold.it/993x600" alt="Placeholder" class="img-responsive hidden-md hidden-lg">
					<div class="force-vertical-align width-100per">
						<h1 class="text-center font-1-8em text-uppercase font-700 color-fff mtop-0 mbottom-5 text-shadow font-1-3em-xs mbottom-30-xs">Quem somos</h1>
						<p class="mbottom-30 text-center font-300 font-1-5em color-fff text-shadow hidden-xs">Descubra a equipe por trás do projeto</p>
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
					<div class="col-xs-12 col-sm-4">
						<div class="padding-30 bg-fff card-home">
							<img src="img/amanda-morais.jpg" alt="" class="img-circle img-responsive mbottom-20">
							<h2 class="text-center text-uppercase font-700 font-1em margin-0">Amanda Louise Acosta Morais</h2>
							<p class="marver-15 text-center">Analista de Sistemas<br>Backend</p>
							<p class="text-center mbottom-0">
								<a href="https://www.facebook.com/AmandaLouiseMorais" class="marhor-5 inline-block"><i class="fa color-facebook fa-facebook-square fa-2x"></i></a>
								<a href="https://github.com/amandaalouise" class="marhor-5 inline-block"><i class="fa color-github fa-github-square fa-2x"></i></a>	
								<a href="https://www.instagram.com/amandalouisemorais/" class="marhor-5 inline-block"><i class="fa color-instagram fa-instagram fa-2x"></i></a>
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="padding-30 bg-fff card-home">
							<img src="img/bruno-confortin.jpg" alt="" class="img-circle img-responsive mbottom-20">
							<h2 class="text-center text-uppercase font-700 font-1em margin-0">Bruno Goerck Confortin</h2>
							<p class="marver-15 text-center">Analista de Sistemas<br>Frontend</p>
							<p class="text-center mbottom-0">
								<a href="https://www.facebook.com/brunoconfortin" class="marhor-5 inline-block"><i class="fa color-facebook fa-facebook-square fa-2x"></i></a>
								<a href="https://github.com/bconfortin" class="marhor-5 inline-block"><i class="fa color-github fa-github-square fa-2x"></i></a>	
								<a href="https://www.instagram.com/bconfortin/" class="marhor-5 inline-block"><i class="fa color-instagram fa-instagram fa-2x"></i></a>
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="padding-30 bg-fff card-home">
							<img src="img/jade-mathias.jpg" alt="" class="img-circle img-responsive mbottom-20">
							<h2 class="text-center text-uppercase font-700 font-1em margin-0">Jade Mathias da Silva</h2>
							<p class="marver-15 text-center">Analista de Sistemas<br>Documentação</p>
							<p class="text-center mbottom-0">
								<a href="https://www.facebook.com/jadeemathias" class="marhor-5 inline-block"><i class="fa color-facebook fa-facebook-square fa-2x"></i></a>
								<!-- <a href="" class="marhor-5 inline-block"><i class="fa color-github fa-github-square fa-2x"></i></a> -->
								<a href="https://www.instagram.com/jademathias/" class="marhor-5 inline-block"><i class="fa color-instagram fa-instagram fa-2x"></i></a>
							</p>
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