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
					<img src="img/cat-dog-1920x450.jpg" alt="Imagem promocional" class="img-responsive hidden-xs hidden-sm">
					<img src="img/cat-dog-993x600.jpg" alt="Imagem promocional" class="img-responsive hidden-md hidden-lg">
					<div class="force-vertical-align black-bg-filter width-100per">
						<div class="force-vertical-align">
							<h1 class="text-center font-1-8em text-uppercase font-700 color-fff mtop-0 mbottom-5 text-shadow font-1-3em-xs mbottom-30-xs">Doação de cachorros e gatos</h1>
							<p class="mbottom-30 text-center font-300 font-1-5em color-fff text-shadow hidden-xs">Veja todos os animais disponíveis para doação.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-f5f5f5 padver-50 padver-15-xs">
			<div class="">
				<div class="row">
					<div class="col-xs-12 col-md-3 col-sm-3 col-lg-2 mbottom-30">
						<form class="" action="animais-para-doacao.php" method="GET">
							<div class="padver-10 padhor-15 bg-gradient">
								<h2 class="margin-0 color-fff font-700 text-uppercase font-1em">Filtro</h2>
							</div>
							<div class="padding-15 bg-fff font-0-9em">
								<!-- tipo, porte, sexo, idade, castrado -->
								<div class="clearfix">
									<a class="mbottom-5 font-700 pull-left width-100per no-text-deco" role="button" data-toggle="collapse" href="#collapseAnimal" aria-expanded="true" aria-controls="collapseAnimal">Animal <i class="fa fa-caret-down pull-right caret-position"></i></a>
								</div>
								<div class="collapse in" id="collapseAnimal" aria-expanded="true">
									<div class="radio mtop-0">
										<label>
											<input type="radio" name="tipo" value="" checked="checked">
											Todos
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="tipo" value="Cachorro">
											Cachorro
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="tipo" value="Gato">
											Gato
										</label>
									</div>
								</div>
								<div class="clearfix mtop-15">
									<a class="mbottom-5 font-700 pull-left width-100per no-text-deco" role="button" data-toggle="collapse" href="#collapseSexo" aria-expanded="true" aria-controls="collapseSexo">Sexo <i class="fa fa-caret-down pull-right caret-position"></i></a>
								</div>
								<div class="collapse in" id="collapseSexo" aria-expanded="true">
									<div class="radio mtop-0">
										<label>
											<input type="radio" name="sexo" value="" checked="checked"> Todos
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="sexo" value="Feminino"> Feminino
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="sexo" value="Masculino"> Masculino
										</label>
									</div>
								</div>
								<div class="clearfix mtop-15">
									<a class="mbottom-5 font-700 pull-left width-100per no-text-deco" role="button" data-toggle="collapse" href="#collapsePorte" aria-expanded="true" aria-controls="collapsePorte">Porte <i class="fa fa-caret-down pull-right caret-position"></i></a>
								</div>
								<div class="collapse in" id="collapsePorte" aria-expanded="true">
									<div class="radio mtop-0">
										<label>
											<input type="radio" name="porte" value="" checked="checked"> Todos
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="porte" value="Pequeno"> Pequeno
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="porte" value="Médio"> Médio
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="porte" value="Grande"> Grande
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="porte" value="Gigante"> Gigante
										</label>
									</div>
								</div>
								<div class="clearfix mtop-15">
									<a class="mbottom-5 font-700 pull-left width-100per no-text-deco" role="button" data-toggle="collapse" href="#collapseIdade" aria-expanded="true" aria-controls="collapseIdade">Idade <i class="fa fa-caret-down pull-right caret-position"></i></a>
								</div>
								<div class="collapse in" id="collapseIdade" aria-expanded="true">
									<div class="radio mtop-0">
										<label>
											<input type="radio" name="idade" value="" checked="checked"> Todas
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="idade" value="Filhote (0 a 2 anos)"> Filhote (0 a 2 anos)
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="idade" value="Adulto (2 a 8 anos)"> Adulto (2 a 8 anos)
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="idade" value="Idoso (acima de 8 anos)"> Idoso (acima de 8 anos)
										</label>
									</div>
								</div>
								<div class="clearfix mtop-15">
									<a class="mbottom-5 font-700 pull-left width-100per no-text-deco" role="button" data-toggle="collapse" href="#collapseCastrado" aria-expanded="true" aria-controls="collapseCastrado">Castrado <i class="fa fa-caret-down pull-right caret-position"></i></a>
								</div>
								<div class="collapse in" id="collapseCastrado" aria-expanded="true">
									<div class="radio mtop-0">
										<label>
											<input type="radio" name="castrado" value="" checked="checked">
											Tanto faz
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="castrado" value="true">
											Sim
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="castrado" value="false">
											Não
										</label>
									</div>
								</div>
								<button type="submit" class="btn btn-gradient text-uppercase width-100per mtop-30">Filtrar</button>
							</div>
						</form>
					</div>
					<div class="col-xs-12 col-md-9 col-sm-9 col-lg-10">
						<div class="row" id="containerAnimais">
							<div class="col-xs-12 hidden" id="containerErro">
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
						<div class="row" id="rowPagination">
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

				// filtro: tipo, porte, sexo, idade, castrado
				<?php
				$urlGetDoacoes = 'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-doacoes';
				if (isset($_GET['tipo']) || isset($_GET['porte']) || isset($_GET['sexo']) || isset($_GET['idade']) || isset($_GET['castrado'])) {
					$tipo = ""; $porte = ""; $sexo = ""; $idade = ""; $castrado = "";
					if (isset($_GET['tipo']) && $_GET['tipo'] != '') {
						$tipo = $_GET['tipo']; ?>
						$("input[name=tipo][value='<?= $tipo ?>']").trigger("click");
					<?php }
					if (isset($_GET['porte']) && $_GET['porte'] != '') {
						$porte = $_GET['porte']; ?>
						$("input[name=porte][value='<?= $porte ?>']").trigger("click");
					<?php }
					if (isset($_GET['sexo']) && $_GET['sexo'] != '') {
						$sexo = $_GET['sexo']; ?>
						$("input[name=sexo][value='<?= $sexo ?>']").trigger("click");
					<?php }
					if (isset($_GET['idade']) && $_GET['idade'] != '') {
						$idade = $_GET['idade']; ?>
						$("input[name=idade][value='<?= $idade ?>']").trigger("click");
					<?php }
					if (isset($_GET['castrado']) && $_GET['castrado'] != '') {
						$castrado = $_GET['castrado']; ?>
						$("input[name=castrado][value='<?= $castrado ?>']").trigger("click");
					<?php }
					$params = '?tipo='.$tipo.'&porte='.$porte.'&sexo='.$sexo.'&idade='.$idade.'&castrado='.$castrado;
					$urlGetDoacoes = 'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-doacao-filtered' . $params;
				} ?>
				$.ajax({
					tryCount : 0,
    				retryLimit : 3,
				    type: 'GET',
				    crossOrigin: true,
					url: '<?= $urlGetDoacoes; ?>',
				    dataType: 'json',
				    success:function(x){
					    var html = '';
					    for (i = 0; i < x.length; i++) {
							html += '<div class="col-xs-12 col-lg-3 col-md-4 col-sm-6 col-xs-12 mbottom-30">';
							html += '	<a href="anuncio-animal.php?animalId=' + x[i].id + '" class="block card-home bg-fff unstyled-link relative">';
							html += '       <div class="img-todos-animais" style="background-image: url(\'http://31.220.53.123:8080/luckypets-servidor/api/file/doacao/' + x[i].id + '/' + x[i].animal.imagens[0] + '\');">';
							html += '       </div>';
							//html += '		<img src="http://31.220.53.123:8080/luckypets-servidor/api/file/doacao/' + x[i].id + '/' + x[i].animal.imagens[0] + '" alt="' + x[i].animal.nome + '" class="img-responsive center-block" style="max-height: 206px;">';
							html += '		<div class="absolute-pet-details">';
							html += '			<p class="pull-left mbottom-0">';
							html += '				Nome: ' + x[i].animal.nome + '<br>Raça: ' + x[i].animal.raca;
							html += '			</p>';
							html += '			<p class="pull-right text-right mbottom-0">';
							html += '				' + x[i].cidade + '<br>' + x[i].estado;
							html += '			</p>';
							html += '		</div>';
							html += '	</a>';
							html += '</div>';
					    }
					    $("#containerAnimais").append(html);
						if (x.length == 0) {
							console.log(x);
							$("#containerErro").removeClass("hidden");
							$("#rowPagination").addClass("hidden");
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
			});
		</script>
	</body>
</html>
