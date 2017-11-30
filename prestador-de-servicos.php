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
		$prestadorId = $_GET["prestadorId"];
		if (!isset($prestadorId) || $prestadorId == "" || is_null($prestadorId)) {
			if (!headers_sent()) {
				header('Location: ' . $GLOBALS['www']);
				exit;
			}
		}
	?>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 padhor-0">
				<img src="img/pets-1920x350-22.jpg" alt="Placeholder" class="img-responsive hidden-xs hidden-sm">
				<img src="img/pets-993x600-22.jpg" alt="Placeholder" class="img-responsive hidden-md hidden-lg">
				<div class="force-vertical-align width-100per">
					<h1 class="text-center font-2em text-uppercase font-700 color-fff mtop-0 mbottom-5 text-shadow font-1-3em-xs mbottom-15-xs ajaxNome"></h1>
					<h2 class="text-center font-1-4em text-uppercase font-300 color-fff mtop-0 mbottom-5 text-shadow font-1-3em-xs mbottom-30-xs ajaxTipo"></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-f5f5f5 padver-50 padver-15-xs">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 dashboard-height-hack-2">
				<div class="padding-30 bg-fff anuncio-infos">
					<h2 class="mtop-0 mbottom-30 font-700 text-uppercase font-1-1em color-blue ajaxNome"></h2>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Tipo</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxTipo">Não especificado</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Responsavel</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxResponsavel">Não especificado</p>
						</div>
					</div>
					<h2 class="mtop-30 mbottom-30 font-700 text-uppercase font-1-1em color-blue">Contatos</h2>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Email</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxEmail">Não especificado</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Telefone</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxTelefone">Não especificado</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Celular</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxCelular">Não especificado</p>
						</div>
					</div>
					<h2 class="mtop-30 mbottom-30 font-700 text-uppercase font-1-1em color-blue">Endereço</h2>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Cidade</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxCidade">Não especificado</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Estado</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxEstado">Não especificado</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Cep</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxCep">Não especificado</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Logradouro</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxLogradouro">Não especificado</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Numero</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxNumero">Não especificado</p>
						</div>
					</div>
					<h2 class="mtop-30 mbottom-30 font-700 text-uppercase font-1-1em color-blue">Informações para doações de recursos financeiros</h2>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Conta</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxConta">Não especificado</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Agencia</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxAgencia">Não especificado</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							<h2 class="atributo">Banco</h2>
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<p class="atributo ajaxBanco">Não especificado</p>
						</div>
					</div>
					<div class="tabelaDoacao">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid padver-50 hidden">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					<h2 class="titulo">Gostaria de doar um animal?</h2>
					<p class="line-height-1-5 text-justify font-1-1em">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam voluptatem saepe perspiciatis ut tempore, aliquam vero non. Hic quia voluptatem laborum eum quam maiores atque non dicta! Iure, culpa, sed.</p>
					<p class="text-center mbottom-0 mtop-30">
						<a href="" class="btn btn-gradient force-radius-0 text-uppercase padhor-30" target="_blank">Saiba mais</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php include "footer.php"; ?>
	<?php include "foot.php"; ?>
	<script>
	$.ajax({
		tryCount : 0,
		retryLimit : 3,
		type: 'POST',
		url:'http://31.220.53.123:8080/luckypets-servidor/api/prestador/historico-metas',
		// Método 1 - NÃO funciona com imagens (multipart/form-data)
		// data: { nome: $("input[name='nome']").val(), email: $("input[name='email']").val(), celular: $("input[name='celular']").val(), telefone: $("input[name='telefone']").val(), file: $("input[name='file']").val(), userId: $("input[name='userId']").val() },
		// Método 2 - Funciona com imagens (multipart/form-data) {
		data: {
			prestadorId: <?= $prestadorId; ?>
		},
		// }
		success:function(result){
			if (result.length > 0) {
				console.log(result);
				var html = "";
				$(".ajaxNome").text(result[0].prestador.nome);
				$(".ajaxEmail").text(result[0].prestador.email);
				$(".ajaxResponsavel").text(result[0].prestador.responsavel);
				$(".ajaxTipo").text(result[0].prestador.tipo);
				$(".ajaxLogradouro").text(result[0].prestador.logradouro);
				$(".ajaxCep").text(result[0].prestador.cep);
				$(".ajaxNumero").text(result[0].prestador.numero);
				$(".ajaxCidade").text(result[0].prestador.cidade);
				$(".ajaxEstado").text(result[0].prestador.estado);
				$(".ajaxTelefone").text(result[0].prestador.telefone);
				$(".ajaxCelular").text(result[0].prestador.celular);
				if (result[0].prestador.conta != "" && result[0].prestador.agencia != "" && result[0].prestador.banco != "") {
					$(".ajaxConta").text(result[0].prestador.conta);
					$(".ajaxAgencia").text(result[0].prestador.agencia);
					$(".ajaxBanco").text(result[0].prestador.banco);
				}

				if (result[0].itens.length > 0) {
					html += '<h2 class="mtop-30 mbottom-30 font-700 text-uppercase font-1-1em color-blue">Metas de doação do mês atual</h2>';
					html += '<div class="table-responsive">';
					html +=				'<table class="table mbottom-0">';
					html +=					'<thead>';
					html +=						'<tr>';
					html +=							'<th class="hidden">ID</th>';
					html +=							'<th>Tipo</th>';
					html +=							'<th>Quantidade</th>';
					html +=							'<th>Progresso</th>';
					html +=						'</tr>';
					html +=					'</thead>';
					html +=					'<tbody>';
					for (i = 0; i < result[0].itens.length; i++) {
						html +=					'<tr>';
						html +=						'<td class="hidden">' + result[0].itens[i].id + '</td>';
						html +=						'<td>' + result[0].itens[i].tipo + '</td>';
						if (result[0].itens[i].unidade.toLowerCase() == "caixa" || result[0].itens[i].unidade.toLowerCase() == "cirurgia") {
							if (result[0].itens[i].quantidade > 1) {
								html +=						'<td>' + result[0].itens[i].quantidade + ' ' + result[0].itens[i].unidade.toLowerCase() + 's' + '</td>';
							} else {
								html +=						'<td>' + result[0].itens[i].quantidade + ' ' + result[0].itens[i].unidade.toLowerCase() + '</td>';
							}
						} else {
							html +=						'<td>' + result[0].itens[i].quantidade + ' ' + result[0].itens[i].unidade + '</td>';
						}
						html +=						'<td>' + result[0].itens[i].progresso + '/' + result[0].itens[i].quantidade + '</td>';
						html +=					'</tr>';
					}
					html +=					'</tbody>'	;
					html +=				'</table>';
					html += '</div>';
					$(".tabelaDoacao").append(html);
				} else {
					$(".tabelaDoacao").append("<h2 class='mtop-30 mbottom-30 font-700 text-uppercase font-1-1em color-blue'>Metas de doação</h2><p class='mbottom-0'>Nenhuma meta de doação foi cadastrada para o mês atual.</p>");
				}

			} else if (result.toLowerCase() === "erro") {
				location.href = "<?= $GLOBALS['www']; ?>?m=2";
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
			$("#btnCadastrarUsuario").removeClass("disabled");
			console.log("Ops! Não foi possível fazer sua requisição.");
		},
		complete:function(){
			$("#btnCadastrarUsuario").removeClass("disabled");
		}
	});

	</script>
</body>
</html>
