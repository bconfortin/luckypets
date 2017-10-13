<!DOCTYPE html>
<html>
    <?php
        if (isset($_GET["message"])) {
            if ($_GET["message"] === "usuarioNaoLogado") { ?>
        <script>
            alert("Você precisa estar logado para acessar essa página.");
        </script>
    <?php } else if ($_GET["message"] === "usuarioAlteradoComSucesso") { ?>
        <script>
            alert("Usuário alterado com sucesso.");
        </script>
    <?php } } ?>
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
    				<img src="img/topo-index-1920x450.jpg" alt="Imagem promocional" class="img-responsive hidden-xs hidden-sm">
    				<img src="img/topo-index-993x600.jpg" alt="Imagem promocional" class="img-responsive hidden-md hidden-lg">
                    <div class="force-vertical-align black-bg-filter width-100per">
						<div class="force-vertical-align">
                            <h1 class="text-center font-1-8em text-uppercase font-700 color-fff mtop-0 mbottom-5 text-shadow font-1-3em-xs mbottom-30-xs">Adoção de animais</h1>
        					<p class="mbottom-30 text-center font-300 font-1-5em color-fff text-shadow hidden-xs">Tem um animal e gostaria de colocá-lo para adoção? Você veio ao lugar certo!</p>
        					<p class="mbottom-0 text-center"><a href="formulario-de-cadastro.php" class="btn btn-gradient force-radius-0 text-uppercase padhor-30">Se cadastrar</a></p>
						</div>
					</div>
    			</div>
    		</div>
    	</div>
        <div class="container-fluid padver-50">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="titulo mbottom-0">Buscar animais para doação</h2>
                        <div class="text-center mtop-30">
                            <div class="btn-group index-busca inline-block" role="group" aria-label="">
                                <button type="button" class="btn btn-default">Cachorro</button>
                                <button type="button" class="btn btn-blue selected">Tanto faz</button>
                                <button type="button" class="btn btn-default padhor-25">Gato</button>
                            </div>
                        </div>
                        <form action="todos-os-pets.php" method="GET" id="form-busca">
                            <input type="hidden" name="tipo" value="">
                            <p class="text-center mtop-30"><button type="submit" class="btn btn-gradient text-uppercase" id="index-busca">Buscar</button></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    	<div class="container-fluid padver-50 hidden">
    		<div class="container">
    			<div class="row">
    				<div class="col-xs-12">
    					<div class="padding-30 bg-f5f5f5">
							<h2 class="titulo mbottom-0">Busca</h2>
							<p class="line-height-1-5 text-center font-1-1em mbottom-15">Não é necessário preencher todos os campos</p>
							<form action="todos-os-pets.php" method="POST">
								<div class="row">
									<div class="col-xs-12 col-sm-3">
										<div class="form-group">
											<label for="estado">Estado</label>
											<select name="estado" id="estado" class="form-control force-radius-0">
												<option value="" selected="selected">Escolha o estado</option>
												<option value="">Paraná</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-3">
										<div class="form-group">
											<label for="estado">Cidade</label>
											<select name="estado" id="estado" class="form-control force-radius-0">
												<option value="" selected="selected">Escolha a cidade</option>
												<option value="">Foz do Iguaçu</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-3">
										<div class="form-group">
											<label for="estado">Raça</label>
											<select name="estado" id="estado" class="form-control force-radius-0">
												<option value="" selected="selected">Escolha a raça</option>
												<option value="">Vira-lata</option>
												<option value="">Pastor Alemão</option>
												<option value="">Golden Retriever</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-3">
										<div class="form-group">
											<label for="estado">Sexo</label>
											<select name="estado" id="estado" class="form-control force-radius-0">
												<option value="" selected="selected">Escolha o sexo</option>
												<option value="">Fêmea</option>
												<option value="">Macho</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-3">
										<div class="form-group">
											<label for="estado">Idade</label>
											<select name="estado" id="estado" class="form-control force-radius-0">
												<option value="" selected="selected">Escolha a idade</option>
												<option value="">Filhote (0 a 2 anos)</option>
												<option value="">Adulto (2 a 8 anos)</option>
												<option value="">Idoso (acima de 8 anos)</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-3">
										<div class="form-group">
											<label for="estado">Porte</label>
											<select name="estado" id="estado" class="form-control force-radius-0">
												<option value="" selected="selected">Escolha o porte</option>
												<option value="">Paraná</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-3">
										<div class="form-group">
											<label for="estado">Cor</label>
											<select name="estado" id="estado" class="form-control force-radius-0">
												<option value="" selected="selected">Escolha a cor</option>
												<option value="">Preto</option>
												<option value="">Cinza</option>
												<option value="">Castanho</option>
												<option value="">Bege/Loiro</option>
												<option value="">Branco</option>
												<option value="">Misto/Mesclado</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-3">
										<div class="form-group">
											<label for="estado">Vacinado</label>
											<select name="estado" id="estado" class="form-control force-radius-0">
												<option value="" selected="selected">Escolha uma opção</option>
												<option value="">Sim</option>
												<option value="">Não</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<p class="text-center mbottom-0">
											<button class="btn btn-green force-radius-0 padhor-30 mtop-15 text-uppercase" type="submit">Buscar</button>
										</p>
									</div>
								</div>
							</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- <div class="container-fluid padver-50">
    		<div class="container">
    			<div class="row">
    				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						<h1 class="titulo">Adoção de animais</h1>
						<p class="line-height-1-5 text-justify font-1-1em">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quidem facere quam animi delectus, tempore quos optio eaque. Eveniet dolor officiis repellendus reiciendis porro odit, optio quisquam soluta dolorum libero.</p>
    				</div>
    			</div>
    		</div>
    	</div> -->
    	<div class="container-fluid bg-f5f5f5 padver-50">
    		<div class="container container-fluid-sm">
    			<div class="row">
    				<div class="col-xs-12">
						<h2 class="titulo">Animais para doação<br><span class="font-300 font-0-7em text-normal">Últimos 3 cadastrados</span></h2>
						<div class="row" id="containerAnimais">

						</div>
						<div class="row">
							<div class="col-xs-12">
								<p class="mbottom-0 text-center">
									<a href="todos-os-pets.php" class="btn btn-green force-radius-0 text-uppercase padhor-30">Ver todos pets</a>
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
						<h2 class="titulo">Quem somos</h2>
						<p class="line-height-1-5 text-justify font-1-1em">O site Lucky Pets foi desenvolvido por três alunos do curso de tecnólogo em Análise e Desenvolvimento de Sistemas do Instituto Federal do Paraná (IFPR) e tem como objetivo promover a adoção de animais para que haja uma redução no número de animais de rua.</p>
						<p class="text-center mbottom-0 mtop-30">
							<a href="quem-somos.php" class="btn btn-blue force-radius-0 text-uppercase padhor-30" target="_blank">Saiba mais</a>
						</p>
    				</div>
    			</div>
    		</div>
    	</div>
    	<?php include "footer.php"; ?>
    	<?php include "foot.php"; ?>
        <script>
            $(function(){
                $.ajax({
				    type: 'GET',
				    crossOrigin: true,
				    url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-doacoes',
				    dataType: 'json',
				    success:function(x){
					    var html = '';
					    for (i = x.length - 1; i > (x.length - 4); i--) {
							html += '<div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 col-xs-12 mbottom-30">';
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
				    },
				    error:function(){
				    	console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
				    }
				});

                $(".index-busca button").on("click", function(){
                    $(".index-busca button").removeClass("btn-blue selected").addClass("btn-default");
                    $(this).addClass("btn-blue selected").removeClass("btn-default");
                    if ($(this).text() == "Cachorro") {
                        $("#form-busca input[name=tipo]").val("Cachorro");
                    } else if ($(this).text() == "Gato") {
                        $("#form-busca input[name=tipo]").val("Gato");
                    } else {
                        $("#form-busca input[name=tipo]").val("");
                    }
                });

                $("#index-busca").on("click", function(event){

                });
            });
        </script>
    </body>
</html>
