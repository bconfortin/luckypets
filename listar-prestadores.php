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
		<?php include "functions.php"; ?>
		<?php verifyLogin(); ?>
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
							<h1 class="font-700 mbottom-30 mtop-0 text-uppercase text-center font-1-3em color-blue">Lista de Prestadores</h1>
							<div class="table-responsive">
								<table class="table middle table-hover" id="tabelaUsuarios">
									<thead>
										<tr>
											<td>ID</td>
											<td>Nome</td>
											<td>E-mail</td>
											<td>Telefone</td>
											<td>Celular</td>
											<td>Responsável</td>
											<td>CPF do Responsável</td>
											<td>Tipo</td>
											<td>Cep</td>
											<td>Logradouro</td>
											<td>Numero</td>
											<td>Cidade</td>
											<td>Estado</td>
											<td>Senha</td>
											<td>Imagem</td>
											<td>Deletar?</td>
											<!-- @FormDataParam("file") InputStream file,
											@FormDataParam("file") FormDataContentDisposition fileDisposition,
											@FormDataParam("nome") String nome,
											@FormDataParam("email") String email,
											@FormDataParam("senha") String senha,
											@FormDataParam("telefone") String telefone,
											@FormDataParam("celular") String celular,
											@FormDataParam("responsavel") String responsavel,
											@FormDataParam("cpfResponsavel") String cpfResponsavel,
											@FormDataParam("tipo") String tipo,
											@FormDataParam("cep") String cep,
											@FormDataParam("logradouro") String logradouro,
											@FormDataParam("numero") String numero,
											@FormDataParam("cidade") String cidade,
											@FormDataParam("estado") String estado) -->
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
				tryCount : 0,
				retryLimit : 3,
			    type: 'GET',
			    crossOrigin: true,
			    url:'http://31.220.53.123:8080/luckypets-servidor/api/prestador',
			    dataType: 'json',
				headers: {
					'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
				},
			    success:function(x){
					console.log(x);
				    var html = '';
				    for (i = 0; i < x.length; i++) {
			    		html += '<tr>';
							html += '<td>' + x[i].id + '</td>';
							html += '<td>' + x[i].nome + '</td>';
							html += '<td>' + x[i].email + '</td>';
							html += '<td>' + x[i].telefone + '</td>';
							html += '<td>' + x[i].celular + '</td>';
							html += '<td>' + x[i].responsavel + '</td>';
							html += '<td>' + x[i].cpfResponsavel + '</td>';
							html += '<td>' + x[i].tipo + '</td>';
							html += '<td>' + x[i].cep + '</td>';
							html += '<td>' + x[i].logradouro + '</td>';
							html += '<td>' + x[i].numero + '</td>';
							html += '<td>' + x[i].cidade + '</td>';
							html += '<td>' + x[i].estado + '</td>';
							html += '<td>' + x[i].senha + '</td>';
							html += '<td><a href="http://31.220.53.123:8080/luckypets-servidor/api/file/prestador/' + x[i].id + '/' + x[i].imagem + '"><img src="http://31.220.53.123:8080/luckypets-servidor/api/file/prestador/' + x[i].id + '/' + x[i].imagem + '" class="img-responsive" style="max-height: 90px;"></a></td>';
							html += '<td><button class="btn btn-red deletarPrestador"><input type="hidden" value="' + x[i].id + '"><i class="fa fa-times"></i></button></td>';
						html += '</tr>';
				    }
				    $("#tabelaUsuarios").append(html);
					addDeleteKey();
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

			function addDeleteKey() {
				$(".deletarPrestador").each(function(){
					$(this).on("click", function(){
						var tr = $(this).parent("td").parent("tr");
						var id = $(this).find("input").val();
						var confirmacao = confirm("Essa operação não pode ser desfeita. Deletar usuário?");
						if (confirmacao == true) {
							$.ajax({
								tryCount : 0,
			    				retryLimit : 3,
							    type: 'GET',
							    crossOrigin: true,
							    url:'http://31.220.53.123:8080/luckypets-servidor/api/prestador/exclui-prestador/' + id,
								headers: {
									'Authorization': '<?php echo $_SESSION['basicAuth']; ?>'
								},
							    success:function(){
									console.log("Prestador deletado com sucesso.");
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
							tr.remove();
							if (id == <?= $_SESSION['id'] ?>) {
								$.get("clear-session.php");
				                location.href = "<?= $GLOBALS['www']; ?>";
							}
						} else {
							console.log("Operação cancelada.");
							return false;
						}
					});
				});
			};
		</script>
	</body>
</html>
