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
					<div class="col-xs-12 col-md-3 col-sm-3 col-lg-2 mbottom-30">
						<div class="padver-10 padhor-15 bg-gradient">
							<h2 class="margin-0 color-fff font-700 text-uppercase font-1em">Filtro</h2>
						</div>
						<div class="padding-15 bg-fff font-0-9em">
							<div class="clearfix">
								<a class="mbottom-5 font-700 pull-left width-100per no-text-deco" role="button" data-toggle="collapse" href="#collapseAnimal" aria-expanded="true" aria-controls="collapseAnimal">Animal <i class="fa fa-caret-down pull-right caret-position"></i></a>
							</div>
							<div class="collapse in" id="collapseAnimal" aria-expanded="true">
								<div class="radio mtop-0">
									<label>
										<input type="radio" name="optionsAnimal" id="optionsRadios1" value="option1" checked>
										Todos
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsAnimal" id="optionsRadios1" value="option2">
										Cachorro
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsAnimal" id="optionsRadios1" value="option3">
										Gato
									</label>
								</div>
							</div>
							<div class="clearfix mtop-15">
								<a class="mbottom-5 font-700 pull-left width-100per no-text-deco" role="button" data-toggle="collapse" href="#collapsePorte" aria-expanded="true" aria-controls="collapsePorte">Porte <i class="fa fa-caret-down pull-right caret-position"></i></a>
							</div>
							<div class="collapse in" id="collapsePorte" aria-expanded="true">
								<div class="checkbox mtop-0">
									<label>
										<input type="checkbox" checked> Todos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Pequeno
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Médio
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Grande
									</label>
								</div>
							</div>
							<div class="clearfix mtop-15">
								<a class="mbottom-5 font-700 pull-left width-100per no-text-deco" role="button" data-toggle="collapse" href="#collapseIdade" aria-expanded="true" aria-controls="collapseIdade">Idade <i class="fa fa-caret-down pull-right caret-position"></i></a>
							</div>
							<div class="collapse in" id="collapseIdade" aria-expanded="true">
								<div class="checkbox mtop-0">
									<label>
										<input type="checkbox" checked> Todas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Filhote (0 a 2 anos)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Adulto (2 a 8 anos)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Idoso (acima de 8 anos)
									</label>
								</div>
							</div>
							<div class="clearfix mtop-15">
								<a class="mbottom-5 font-700 pull-left width-100per no-text-deco" role="button" data-toggle="collapse" href="#collapseVacinado" aria-expanded="true" aria-controls="collapseVacinado">Vacinado <i class="fa fa-caret-down pull-right caret-position"></i></a>
							</div>
							<div class="collapse in" id="collapseVacinado" aria-expanded="true">
								<div class="radio mtop-0">
									<label>
										<input type="radio" name="optionsVacinado" id="optionsRadios1" value="option1" checked>
										Tanto faz
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsVacinado" id="optionsRadios1" value="option2">
										Sim
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsVacinado" id="optionsRadios1" value="option3">
										Não
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-9 col-sm-9 col-lg-10">
						<div class="row" id="containerAnimais">
							<div class="col-xs-12 col-lg-3 col-md-4 col-sm-6 col-xs-12 mbottom-30 hidden">
								<a href="anuncio-animal.php" class="block card-home bg-fff unstyled-link relative">
									<img src="http://placehold.it/768x460" alt="Vans" class="img-responsive">
									<div class="absolute-pet-details">
										<p class="pull-left mbottom-0">
											Nome: Lúcifer<br>Raça: Hell Kitten
										</p>
										<p class="pull-right text-right mbottom-0">
											Foz do Iguaçu<br>Paraná
										</p>
									</div>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p class="mbottom-0 text-center">
									<a href="" class="btn btn-blue force-radius-0 text-uppercase padhor-15 disabled"><i class="fa fa-angle-left"></i><span class="hidden-xs mleft-5">Anterior</span></a>
									<a href="" class="btn btn-blue force-radius-0 text-uppercase padhor-15">1</a>
									<a href="" class="btn btn-blue force-radius-0 text-uppercase padhor-15">2</a>
									<a href="" class="btn btn-blue force-radius-0 text-uppercase padhor-15">3</a>
									<a href="" class="btn btn-blue force-radius-0 text-uppercase padhor-15"><span class="hidden-xs mright-5">Próxima</span><i class="fa fa-angle-right"></i></a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid padver-50">
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
		</div>
		<?php include "footer.php"; ?>
		<?php include "foot.php"; ?>
		<script>
			$(function(){
				if ($(window).width() < 768) {
					$(".collapse.in").removeClass("in");
					$(".collapse.in").siblings("a.no-text-deco").addClass("collapsed");
					$("div[aria-expanded='true']").attr("aria-expanded", "false");
				}

				$.ajax({
				    type: 'GET',
				    crossOrigin: true,
				    url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-doacoes',
				    dataType: 'json',
				    success:function(x){
					    var html = '';
					    for (i = 0; i < x.length; i++) {
							html += '<div class="col-xs-12 col-lg-3 col-md-4 col-sm-6 col-xs-12 mbottom-30">';
							html += '	<a href="anuncio-animal.php" class="block card-home bg-fff unstyled-link relative">';
							html += '       <div class="img-todos-animais" style="background-image: url(\'http://31.220.53.123:8080/luckypets-servidor/api/file/doacao/' + x[i].id + '/' + x[i].animal.imagens[0] + '\');">';
							html += '       </div>';
							//html += '		<img src="http://31.220.53.123:8080/luckypets-servidor/api/file/doacao/' + x[i].id + '/' + x[i].animal.imagens[0] + '" alt="' + x[i].animal.nome + '" class="img-responsive center-block" style="max-height: 206px;">';
							html += '		<div class="absolute-pet-details">';
							html += '			<p class="pull-left mbottom-0">';
							html += '				Nome: ' + x[i].animal.nome + '<br>Raça: ' + x[i].animal.nome;
							html += '			</p>';
							html += '			<p class="pull-right text-right mbottom-0">';
							html += '				' + x[i].cidade + '<br>' + x[i].estado;
							html += '			</p>';
							html += '		</div>';
							html += '	</a>';
							html += '</div>';
					    }
					    $("#containerAnimais").append(html);
				    },
				    error:function(){
				    	console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
				    }
				});
			});
		</script>


	</body>
</html>
