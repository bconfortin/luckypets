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
			//require("functions.php");
			//verifyLogin();
		?>
	</head>
	<body>
		<?php include "header.php"; ?>
		<div class="container-fluid hidden">
			<div class="row">
				<div class="col-xs-12 padhor-0">
					<img src="http://placehold.it/1920x350" alt="Placeholder" class="img-responsive hidden-xs hidden-sm">
					<img src="http://placehold.it/993x600" alt="Placeholder" class="img-responsive hidden-md hidden-lg">
					<div class="force-vertical-align width-100per">
						<h1 class="text-center font-1-8em text-uppercase font-700 color-fff mtop-0 mbottom-5 text-shadow font-1-3em-xs mbottom-30-xs">Cadastro de conta</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-f5f5f5 padver-15">
			<div class="">
				<div class="row">
					<div class="col-xs-12"><!--  col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 -->
						<div class="padding-30 bg-fff">
							<h1 class="font-700 mbottom-30 mtop-0 text-uppercase text-center font-1-3em color-blue">Lista de Animais para Doação</h1>
							<div class="table-responsive">
								<table class="table middle table-hover" id="tabelaUsuarios">
									<thead>
										<tr>
											<th>ID</th>
											<th>Tipo</th>
											<th>Idade</th>
											<th>Imagens</th>
											<th>Imagem 1</th>
											<th>Sexo</th>
											<th>Nome</th>
											<th style="min-width: 300px;">Descrição</th>
											<th>Raça</th>
											<th>Cor</th>
											<th>Porte</th>
											<th>Vacinado</th>
											<th>Castrado</th>
											<th>Cidade</th>
											<th>Estado</th>
											<?php if (isset($_SESSION['basicAuth'])) { ?>
												<th>Deletar</th>
											<?php } ?>
										</tr>
									</thead>
									<tbody>

									</tbody>
								</table>
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
			$.ajax({
			    type: 'GET',
			    crossOrigin: true,
			    url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-doacoes',
			    dataType: 'json',
				// headers: {
				// 	'Authorization': '<?php //echo $_SESSION['basicAuth']; ?>'
				// },
			    success:function(x){
				    var html = '';
				    for (i = 0; i < x.length; i++) {
			    		html += '<tr>';
							html += '<td>' + x[i].id + '</td>';
							html += '<td class="text-capitalize">' + x[i].animal.tipo + '</td>';
							html += '<td>' + x[i].animal.idade + '</td>';
							html += '<td>' + x[i].animal.imagens[0] + '</td>';
							html += '<td><img src="http://31.220.53.123:8080/luckypets-servidor/api/file/doacao/' + x[i].id + '/' + x[i].animal.imagens[0] + '" class="img-responsive" style="max-height: 90px;"></td>';
							html += '<td>' + x[i].animal.sexo + '</td>';
							html += '<td>' + x[i].animal.nome + '</td>';
							html += '<td>' + x[i].animal.descricao + '</td>';
							html += '<td>' + x[i].animal.raca + '</td>';
							html += '<td>' + x[i].animal.cor + '</td>';
							html += '<td>' + x[i].animal.porte + '</td>';
							html += '<td>' + x[i].animal.vacinado + '</td>';
							html += '<td>' + x[i].animal.castrado + '</td>';
							html += '<td>' + x[i].cidade + '</td>';
							html += '<td>' + x[i].estado + '</td>';
							//html += '<td><a href="http://31.220.53.123:8080/luckypets-servidor/api/file/' + x[i].id + '/' + x[i].imagem + '"><img src="http://31.220.53.123:8080/luckypets-servidor/api/file/' + x[i].id + '/' + x[i].imagem + '" class="img-responsive" style="max-height: 90px;"></a></td>';
							<?php if (isset($_SESSION['basicAuth'])) { ?>
								html += '<td><button class="btn btn-red deletarDoacao"><input type="hidden" value="' + x[i].id + '"><i class="fa fa-times"></i></button></td>';
							<?php } ?>
						html += '</tr>';
				    }
				    $("#tabelaUsuarios").append(html);
					<?php if (isset($_SESSION['basicAuth'])) { ?>
						addDeleteKey();
					<?php } ?>

			    },
			    error:function(){
			    	console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
			    }
			});

			function addDeleteKey() {
				$(".deletarDoacao").each(function(){
					$(this).on("click", function(){
						<?php if (isset($_SESSION['basicAuth'])) { ?>
						var tr = $(this).parent("td").parent("tr");
						var id = $(this).find("input").val();
						var confirmacao = confirm("Essa operação não pode ser desfeita. Deletar doação?");
						if (confirmacao == true) {
							$.ajax({
							    type: 'GET',
							    crossOrigin: true,
							    url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/delete-doacao/' + id,
								headers: {
									'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
								},
							    success:function(){
									console.log("Usuário deletado com sucesso.");
								},
								error:function(){
									console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
								}
							});
							tr.remove();
							// if (id == <?= $_SESSION['id'] ?>) {
							// 	$.get("clear-session.php");
				            //     location.href = "<?= $GLOBALS['www']; ?>";
							// }
						} else {
							console.log("Operação cancelada.");
							return false;
						}
						<?php } ?>
					});
				});
			};
		</script>
	</body>
</html>
