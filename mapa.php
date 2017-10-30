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
		<div class="container-fluid bg-f5f5f5 padver-15-xs">
			<div class="row">
				<div class="col-xs-12 padhor-0">
					<div id="map">
					</div>
					<style>
						#map {
							height: 800px;
						}
					</style>
				</div>
			</div>
		</div>
		<?php include "footer.php"; ?>
		<?php include "foot.php"; ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkRBrkU6UVNZZclmB-oluPZ3L0ZeP5Cqs"></script>
		<script src="js/infobox.js"></script>
		<style>
			.div_infobox {
			    background-color: white;
			    font-family: 'Roboto';
			    font-size: 12px;
			    /*border: 1px solid #eee;*/
				border: 0;
			    border-radius: 0;
			    padding: 0;
			    color: #666;
				width: 320px;

				-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
				-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
				box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		    }
		</style>
		<script>
			//$(function(){
				var gatosEncontrados = [];
				var gatosPerdidos = [];
				var cachorrosEncontrados = [];
				var cachorrosPerdidos = [];
				var iconGatoEncontrado = '<?= $GLOBALS['www']; ?>' + 'img/icons/cat-64x52-green.png';
				var iconGatoPerdido = '<?= $GLOBALS['www']; ?>' + 'img/icons/cat-64x52-red.png';
				var iconCachorroEncontrado = '<?= $GLOBALS['www']; ?>' + 'img/icons/dog-64x59-green.png';
				var iconCachorroPerdido = '<?= $GLOBALS['www']; ?>' + 'img/icons/dog-64x59-red.png';

				var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 12,
					center: new google.maps.LatLng(-25.5172662, -54.6170038),
					mapTypeId: google.maps.MapTypeId.ROADMAP
				});

				var idInfoBox = 0;
				var markers = [];
				var arrayInfoBox = [];

				$.ajax({
				    type: 'GET',
				    crossOrigin: true,
				    url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-perdidos',
				    dataType: 'json',
					tryCount : 0,
    				retryLimit : 3,
					// headers: {
					// 	'Authorization': '<?php //echo $_SESSION['basicAuth']; ?>'
					// },
				    success:function(x){
						/*
						x[i].id
						x[i].animal.tipo
						x[i].animal.idade
						x[i].animal.imagens[0]
						x[i].animal.sexo
						x[i].animal.nome
						x[i].animal.descricao
						x[i].animal.raca
						x[i].animal.cor
						x[i].animal.porte
						x[i].lat
						x[i].lng
						*/
						for (i = 0; i < x.length; i++) {
							var id = x[i].id;

							var tipo = x[i].animal.tipo;
							var idade = x[i].animal.idade;
							var imagem = 'http://31.220.53.123:8080/luckypets-servidor/api/file/perdido/' + x[i].id + '/' + x[i].animal.imagens[0];
							var sexo = x[i].animal.sexo;
							var nome = x[i].animal.nome;
							var descricao = x[i].animal.descricao;
							var raca = x[i].animal.raca;
							var cor = x[i].animal.cor;
							var porte = x[i].animal.porte;

							var lat = x[i].lat;
							var lng = x[i].lng;
							var vetorAnimal;
							if (x[i].animal.tipo == "Gato") {
								vetorAnimal = [lat, lng, iconGatoPerdido, imagem, nome, tipo, sexo, raca, cor, idade, porte, id];
								gatosPerdidos.push(vetorAnimal);
							} else {
								vetorAnimal = [lat, lng, iconCachorroPerdido, imagem, nome, tipo, sexo, raca, cor, idade, porte, id];
								cachorrosPerdidos.push(vetorAnimal);
							}
						}

						console.log(gatosPerdidos);
						console.log(cachorrosPerdidos);

						var marker, i;

						for (i = 0; i < cachorrosPerdidos.length; i++) {
						    markers[idInfoBox] = new google.maps.Marker({
						        position: new google.maps.LatLng(cachorrosPerdidos[i][0], cachorrosPerdidos[i][1]),
						        map: map,
								icon: cachorrosPerdidos[i][2]
						    });

							var contentString = '<div class="div_infobox">' +
							'<img src="'+cachorrosPerdidos[i][3]+'" style="max-width: 100%; margin-top: 5px;">' +
							'<div class="padding-15">' +
							'<p>Nome: '+cachorrosPerdidos[i][4]+'</p>' +
							'<p>Tipo: '+cachorrosPerdidos[i][5]+'</p>' +
							'<p>Sexo: '+cachorrosPerdidos[i][6]+'</p>' +
							'<p>Raca: '+cachorrosPerdidos[i][7]+'</p>' +
							'<p>Cor: '+cachorrosPerdidos[i][8]+'</p>' +
							'<p>Idade: '+cachorrosPerdidos[i][9]+'</p>' +
							'<p>Porte: '+cachorrosPerdidos[i][10]+'</p>' +
							'<p style="text-align: center; margin-top: 30px;"><a href="http://localhost:81/luckypets/anuncio-animal-perdido.php?animalId='+cachorrosPerdidos[i][11]+'" style="padding: 6px 50px; background-color: #2861ae; color: #fff; text-transform: uppercase; font-weight: 700; text-decoration: none;">Saiba mais</a></p>' +
							'</div>' +
							'</div>';

							// Configuracao do InfoBox
							var ibOpcoes = {
							    content: contentString,
							    disableAutoPan: true,
							    pixelOffset: new google.maps.Size(-160, 0),
							    zIndex: null,
							    infoBoxClearance: new google.maps.Size(1, 1),
							    closeBoxMargin: "5px 5px 0px 0px",
							    isHidden: false,
							    pane: "floatPane",
							    enableEventPropagation: true
							};

							// Joga o InfoBox no mapa
							arrayInfoBox[idInfoBox] = new InfoBox(ibOpcoes);
							arrayInfoBox[idInfoBox].open(map, markers[idInfoBox]);

							// Abre o InfoBox no onlick
							// google.maps.event.addListener(markers[idInfoBox], "click", function (e) {
							//     arrayInfoBox[idInfoBox].open(map, markers[idInfoBox]);
							// });
							google.maps.event.addListener(markers[idInfoBox], 'click', (function(marker, i) {
							  return function() {
							    arrayInfoBox[i].open(map, markers[idInfoBox]);
							  }
						  })(markers[idInfoBox], idInfoBox));
							arrayInfoBox[idInfoBox].close();
							console.log(idInfoBox);
							idInfoBox++;
						}

						for (i = 0; i < gatosPerdidos.length; i++) {
						    markers[idInfoBox] = new google.maps.Marker({
						        position: new google.maps.LatLng(gatosPerdidos[i][0], gatosPerdidos[i][1]),
						        map: map,
								icon: gatosPerdidos[i][2]
						    });

							var contentString = '<div class="div_infobox">' +
							'<img src="'+gatosPerdidos[i][3]+'" style="max-width: 100%; margin-top: 5px;">' +
							'<div class="padding-15">' +
							'<p>Nome: '+gatosPerdidos[i][4]+'</p>' +
							'<p>Tipo: '+gatosPerdidos[i][5]+'</p>' +
							'<p>Sexo: '+gatosPerdidos[i][6]+'</p>' +
							'<p>Raca: '+gatosPerdidos[i][7]+'</p>' +
							'<p>Cor: '+gatosPerdidos[i][8]+'</p>' +
							'<p>Idade: '+gatosPerdidos[i][9]+'</p>' +
							'<p>Porte: '+gatosPerdidos[i][10]+'</p>' +
							'<p style="text-align: center; margin-top: 30px;"><a href="http://localhost:81/luckypets/anuncio-animal-perdido.php?animalId='+gatosPerdidos[i][11]+'" style="padding: 6px 50px; background-color: #2861ae; color: #fff; text-transform: uppercase; font-weight: 700; text-decoration: none;">Saiba mais</a></p>' +
							'</div>' +
							'</div>';

							// Configuracao do InfoBox
							var ibOpcoes = {
							    content: contentString,
							    disableAutoPan: true,
							    pixelOffset: new google.maps.Size(-160, 0),
							    zIndex: null,
							    infoBoxClearance: new google.maps.Size(1, 1),
							    closeBoxMargin: "5px 5px 0px 0px",
							    isHidden: false,
							    pane: "floatPane",
							    enableEventPropagation: true
							};

							// Joga o InfoBox no mapa
							arrayInfoBox[idInfoBox] = new InfoBox(ibOpcoes);
							arrayInfoBox[idInfoBox].open(map, markers[idInfoBox]);

							// Abre o InfoBox no onlick
							// google.maps.event.addListener(markers[idInfoBox], "click", function (e) {
							//     arrayInfoBox[idInfoBox].open(map, markers[idInfoBox]);
							// });
							google.maps.event.addListener(markers[idInfoBox], 'click', (function(marker, i) {
							  return function() {
							    arrayInfoBox[i].open(map, markers[idInfoBox]);
							  }
						  })(markers[idInfoBox], idInfoBox));
							arrayInfoBox[idInfoBox].close();
							console.log(idInfoBox);
							idInfoBox++;
						}
				    },
				    error:function(xhr, textStatus, errorThrown ) {
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

				$.ajax({
				    type: 'GET',
				    crossOrigin: true,
				    url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-encontrados',
				    dataType: 'json',
					tryCount : 0,
    				retryLimit : 3,
					// headers: {
					// 	'Authorization': '<?php //echo $_SESSION['basicAuth']; ?>'
					// },
				    success:function(x){
						/*
						x[i].id
						x[i].animal.tipo
						x[i].animal.idade
						x[i].animal.imagens[0]
						x[i].animal.sexo
						x[i].animal.nome
						x[i].animal.descricao
						x[i].animal.raca
						x[i].animal.cor
						x[i].animal.porte
						x[i].lat
						x[i].lng
						*/
						for (i = 0; i < x.length; i++) {
							var id = x[i].id;

							var tipo = x[i].animal.tipo;
							var idade = x[i].animal.idade;
							var imagem = 'http://31.220.53.123:8080/luckypets-servidor/api/file/encontrado/' + x[i].id + '/' + x[i].animal.imagens[0];
							var sexo = x[i].animal.sexo;
							var nome = x[i].animal.nome;
							var descricao = x[i].animal.descricao;
							var raca = x[i].animal.raca;
							var cor = x[i].animal.cor;
							var porte = x[i].animal.porte;

							var lat = x[i].lat;
							var lng = x[i].lng;
							var vetorAnimal;
							if (x[i].animal.tipo == "Gato") {
								vetorAnimal = [lat, lng, iconGatoEncontrado, imagem, nome, tipo, sexo, raca, cor, idade, porte, id];
								gatosEncontrados.push(vetorAnimal);
							} else {
								vetorAnimal = [lat, lng, iconCachorroEncontrado, imagem, nome, tipo, sexo, raca, cor, idade, porte, id];
								cachorrosEncontrados.push(vetorAnimal);
							}
						}

						console.log(gatosEncontrados);
						console.log(cachorrosEncontrados);

						var marker, i;

						for (i = 0; i < cachorrosEncontrados.length; i++) {
						    markers[idInfoBox] = new google.maps.Marker({
						        position: new google.maps.LatLng(cachorrosEncontrados[i][0], cachorrosEncontrados[i][1]),
						        map: map,
								icon: cachorrosEncontrados[i][2]
						    });

							var contentString = '<div class="div_infobox">' +
							'<img src="'+cachorrosEncontrados[i][3]+'" style="max-width: 100%; margin-top: 5px;">' +
							'<div class="padding-15">' +
							'<p>Nome: '+cachorrosEncontrados[i][4]+'</p>' +
							'<p>Tipo: '+cachorrosEncontrados[i][5]+'</p>' +
							'<p>Sexo: '+cachorrosEncontrados[i][6]+'</p>' +
							'<p>Raca: '+cachorrosEncontrados[i][7]+'</p>' +
							'<p>Cor: '+cachorrosEncontrados[i][8]+'</p>' +
							'<p>Idade: '+cachorrosEncontrados[i][9]+'</p>' +
							'<p>Porte: '+cachorrosEncontrados[i][10]+'</p>' +
							'<p style="text-align: center; margin-top: 30px;"><a href="http://localhost:81/luckypets/anuncio-animal-encontrado.php?animalId='+cachorrosEncontrados[i][11]+'" style="padding: 6px 50px; background-color: #2861ae; color: #fff; text-transform: uppercase; font-weight: 700; text-decoration: none;">Saiba mais</a></p>' +
							'</div>' +
							'</div>';

							// Configuracao do InfoBox
							var ibOpcoes = {
							    content: contentString,
							    disableAutoPan: true,
							    pixelOffset: new google.maps.Size(-160, 0),
							    zIndex: null,
							    infoBoxClearance: new google.maps.Size(1, 1),
							    closeBoxMargin: "5px 5px 0px 0px",
							    isHidden: false,
							    pane: "floatPane",
							    enableEventPropagation: true
							};

							// Joga o InfoBox no mapa
							arrayInfoBox[idInfoBox] = new InfoBox(ibOpcoes);
							arrayInfoBox[idInfoBox].open(map, markers[idInfoBox]);

							// Abre o InfoBox no onlick
							// google.maps.event.addListener(markers[idInfoBox], "click", function (e) {
							//     arrayInfoBox[idInfoBox].open(map, markers[idInfoBox]);
							// });
							google.maps.event.addListener(markers[idInfoBox], 'click', (function(marker, i) {
							  return function() {
							    arrayInfoBox[i].open(map, markers[idInfoBox]);
							  }
						  })(markers[idInfoBox], idInfoBox));
							arrayInfoBox[idInfoBox].close();
							console.log(idInfoBox);
							idInfoBox++;
						}

						for (i = 0; i < gatosEncontrados.length; i++) {
						    markers[idInfoBox] = new google.maps.Marker({
						        position: new google.maps.LatLng(gatosEncontrados[i][0], gatosEncontrados[i][1]),
						        map: map,
								icon: gatosEncontrados[i][2]
						    });

							var contentString = '<div class="div_infobox">' +
							'<img src="'+gatosEncontrados[i][3]+'" style="max-width: 100%; margin-top: 5px;">' +
							'<div class="padding-15">' +
							'<p>Nome: '+gatosEncontrados[i][4]+'</p>' +
							'<p>Tipo: '+gatosEncontrados[i][5]+'</p>' +
							'<p>Sexo: '+gatosEncontrados[i][6]+'</p>' +
							'<p>Raca: '+gatosEncontrados[i][7]+'</p>' +
							'<p>Cor: '+gatosEncontrados[i][8]+'</p>' +
							'<p>Idade: '+gatosEncontrados[i][9]+'</p>' +
							'<p>Porte: '+gatosEncontrados[i][10]+'</p>' +
							'<p style="text-align: center; margin-top: 30px;"><a href="http://localhost:81/luckypets/anuncio-animal-encontrado.php?animalId='+gatosEncontrados[i][11]+'" style="padding: 6px 50px; background-color: #2861ae; color: #fff; text-transform: uppercase; font-weight: 700; text-decoration: none;">Saiba mais</a></p>' +
							'</div>' +
							'</div>';

							// Configuracao do InfoBox
							var ibOpcoes = {
							    content: contentString,
							    disableAutoPan: true,
							    pixelOffset: new google.maps.Size(-160, 0),
							    zIndex: null,
							    infoBoxClearance: new google.maps.Size(1, 1),
							    closeBoxMargin: "5px 5px 0px 0px",
							    isHidden: false,
							    pane: "floatPane",
							    enableEventPropagation: true
							};

							// Joga o InfoBox no mapa
							arrayInfoBox[idInfoBox] = new InfoBox(ibOpcoes);
							arrayInfoBox[idInfoBox].open(map, markers[idInfoBox]);

							// Abre o InfoBox no onlick
							// google.maps.event.addListener(markers[idInfoBox], "click", function (e) {
							//     arrayInfoBox[idInfoBox].open(map, markers[idInfoBox]);
							// });
							google.maps.event.addListener(markers[idInfoBox], 'click', (function(marker, i) {
								return function() {
									arrayInfoBox[i].open(map, markers[idInfoBox]);
								}
							})(markers[idInfoBox], idInfoBox));
							arrayInfoBox[idInfoBox].close();
							console.log(idInfoBox);
							idInfoBox++;
						}
				    },
				    error:function(xhr, textStatus, errorThrown ) {
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
		   // });
		</script>
	</body>
</html>
