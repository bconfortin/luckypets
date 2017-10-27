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
					<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-12">
									<div id="map"></div>
								</div>
							</div>
							<!-- <script>
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
						    </script> -->
							<style>
								#map {
									height: 400px;
								}
							</style>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "footer.php"; ?>
		<?php include "foot.php"; ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkRBrkU6UVNZZclmB-oluPZ3L0ZeP5Cqs"></script>
		<script>
			$(function(){
				var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 15
				});
				$.ajax({

				    type: 'GET',
				    crossOrigin: true,
				    url:'http://31.220.53.123:8080/luckypets-servidor/api/anuncio/get-perdidos',
				    dataType: 'json',
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

						var animaisPerdidos = [];

						for (i = 0; i < x.length; i++) {
							var nome = x[i].animal.nome;
							var lat = x[i].lat;
							var lng = x[i].lng;
							var vetorAnimal = [nome, lat, lng];
							animaisPerdidos.push(vetorAnimal);
						}

						console.log(animaisPerdidos);

						var map = new google.maps.Map(document.getElementById('map'), {
						    zoom: 13,
						    center: new google.maps.LatLng(-25.5172662, -54.6170038),
						    mapTypeId: google.maps.MapTypeId.ROADMAP
						});

						var infowindow = new google.maps.InfoWindow();

						var marker, i;

						for (i = 0; i < animaisPerdidos.length; i++) {
						    marker = new google.maps.Marker({
						        position: new google.maps.LatLng(animaisPerdidos[i][1], animaisPerdidos[i][2]),
						        map: map
						    });

						    google.maps.event.addListener(marker, 'click', (function(marker, i) {
						        return function() {
						            infowindow.setContent(animaisPerdidos[i][0]);
						            infowindow.open(map, marker);
						        }
						    })(marker, i));
						}

						// console.log(x.length);
						// console.log("olha: " + x[0]);
						// console.log(x[0]);
						// console.log(x[0].lat);
						// console.log(x[0].lng);
					    // for (i = 0; i < x.length; i++) {
						// 	console.log(x[i]);
						// 	console.log("deu");
						// 	var uluru = {lat: x[i].lat, lng: x[i].lng};
						// 	var marker = new google.maps.Marker({
						// 		position: uluru,
						// 		map: map
						// 	});
						// }
				    },
				    error:function(){
				    	console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
				    }
				});
		    });
		</script>
	</body>
</html>
