        <div id="fb-root"></div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <script src="js/jquery.validate.min.js"></script>
        <script src="js/messages_pt_BR.min.js"></script>

        <script>
        /**
         * Transition bar do carrocel (barra de progresso)
         * Por betul
         * https://codepen.io/bsngr/pen/rbyas
         **/
		$(function(){
			if ($(".transition-timer-carousel-progress-bar").length > 0) {
			    var percent = 0,
			    	bar = $(".transition-timer-carousel-progress-bar"),
			    	crsl = $("#carousel-home");
				function progressBarCarousel() {
				    bar.css({width:percent+"%"});
				    percent = percent +0.5;
				    if (percent>100) {
				        percent=0;
				        crsl.carousel("next");
				    }
				}
				crsl.carousel({
				    interval: false,
				    pause: true
				}).on("slid.bs.carousel", function () {});var barInterval = setInterval(progressBarCarousel, 30);
				crsl.hover(
				    function(){
				        clearInterval(barInterval);
				    },
				    function(){
				        barInterval = setInterval(progressBarCarousel, 30);
	        		}
	        	)
			}
	    });

	    /**
	     * Menu mobile / hamburguer
	     * Por Bruno Confortin
	     */
	    $(function(){
		    $(".destino-x, .destino-menu-overlay").on("click", function(e){
		    	e.preventDefault();
	    		$(".destino-menu-overlay").addClass("hidden");
	    		$(".lucky-right-menu").addClass("closed");
	    		$("body").removeClass("overflow-hidden");
		    });
		    $(".destino-hamburguer").on("click", function(e){
		    	e.preventDefault();
	    		$(".destino-menu-overlay").removeClass("hidden");
	    		$(".lucky-right-menu").removeClass("closed");
	    		$("body").addClass("overflow-hidden");
		    });

    	    /**
    	     * Função pra remover a classe container quando a tela ser redimensionada entre 993px e 768px
    	     * Por Bruno Confortin
    	     */
    	    function containerFluidSm() {
    	    	var varWindow = $(window).width();
    	    	if (varWindow < 992 && varWindow > 767) {
    	    		$(".container-fluid-sm").removeClass("container");
    	    	} else {
    	    		$(".container-fluid-sm").addClass("container");
    	    	}
    	    }
    	    $(window).resize(function() {
      			containerFluidSm();
    		});

            $("#btnLogin").on("click", function(){
                $("#btnLogin").addClass("disabled");
                var email = $("input[name='formLoginEmail']").val();
                var senha = $("input[name='formLoginSenha']").val();
                if (email !== "" && senha !== "") {
                    $.post("http://31.220.53.123:8080/luckypets-servidor/api/usuario/login", {
                        "email": email,
                        "senha": senha
                    }).done(function(data) {
                        console.log("Data Loaded: ");
                        console.log(data);
                        if (data != undefined) {
                            $("#modalLoginX").trigger("click");
                            var basicAuth = make_base_auth(email, senha);
                            $.post("<?= $GLOBALS['www']; ?>login-backend.php", {
                                "administrador": data.administrador,
                                "authToken": data.authToken,
                                "celular": data.celular,
                                "email": data.email,
                                "facebook": data.facebook,
                                "id": data.id,
                                "imagem": data.imagem,
                                "caminhoCompletoImagem": "http://31.220.53.123:8080/luckypets-servidor/api/file/" + data.id + "/" + data.imagem,
                                "nome": data.nome,
                                "senha": data.senha,
                                "telefone": data.telefone,
                                "basicAuth": basicAuth
                            }).done(function(data) {
                                location.href = "<?= $GLOBALS['www']; ?>";
                            });
                        } else {
                            $("#formLogin .error").removeClass("height-0", 300);
                            $("#btnLogin").removeClass("disabled");
                        }
                    }).fail(function() {
                        alert("Ops! Parece que temos algum problema de conexão. Tente novamente mais tarde.");
                        $("#btnLogin").removeClass("disabled");
                    });
                }
            });

            $("#btnLoginPrestador").on("click", function(){
                $("#btnLoginPrestador").addClass("disabled");
                var email = $("input[name='formLoginPrestadorEmail']").val();
                var senha = $("input[name='formLoginPrestadorSenha']").val();
                if (email !== "" && senha !== "") {
                    $.post("http://31.220.53.123:8080/luckypets-servidor/api/prestador/login", {
                        "email": email,
                        "senha": senha
                    }).done(function(data) {
                        console.log("Data Loaded: ");
                        console.log(data);
                        if (data != undefined) {
                            $("#modalLoginX").trigger("click");
                            var basicAuth = make_base_auth(email, senha);
                            $.post("<?= $GLOBALS['www']; ?>login-prestador-backend.php", {
                                "id": data.id,
                                "nome": data.nome,
                                "email": data.email,
                                "senha": data.senha,
                                "imagem": data.imagem,
                                "caminhoCompletoImagem": "http://31.220.53.123:8080/luckypets-servidor/api/file/prestador/" + data.id + "/" + data.imagem,
                                "telefone": data.telefone,
                                "celular": data.celular,
                                "authToken": data.authToken,
                                "facebook": data.facebook,
                                "administrador": data.administrador,
                                "ativo": data.ativo,
                                "codConfirmacao": data.codConfirmacao,
                                "responsavel": data.responsavel,
                                "cpfResposavel": data.cpfResposavel,
                                "tipo": data.tipo,
                                "cep": data.cep,
                                "logradouro": data.logradouro,
                                "numero": data.numero,
                                "cidade": data.cidade,
                                "estado": data.estado,
                                "basicAuth": basicAuth
                            }).done(function(data) {
                                location.href = "<?= $GLOBALS['www']; ?>";
                            });
                        } else {
                            alert("E-mail ou senha incorretos.");
                            $("#btnLoginPrestador").removeClass("disabled");
                        }
                    }).fail(function() {
                        alert("Ops! Parece que temos algum problema de conexão. Tente novamente mais tarde.");
                        $("#btnLoginPrestador").removeClass("disabled");
                    });
                }
            });
        });

        </script>
        <script>
            $.ajax({
				tryCount : 0,
				retryLimit : 3,
			    type: 'GET',
			    crossOrigin: true,
			    url:'http://www.geonames.org/childrenJSON?geonameId=3469034',
			    dataType: 'json',
			    success:function(x){
                    console.log(x);
				    var html = '';
                    html += '<option value="" disabled="disabled" selected="selected">Escolha um estado</option>';
				    for (i = 0; i < x.geonames.length; i++) {
			    		html += '<option idestado="' + x.geonames[i].geonameId + '" value="' + x.geonames[i].toponymName + '">' + x.geonames[i].toponymName + '</option>';
				    }
				    $("#estado").html(html);
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
			    },
                complete:function() {
                    bindEstadoSelector();
                }
			});

            function bindEstadoSelector() {
                $("#estado").change(function() {
                    ajaxCidade($(this).find("option:selected").attr("idestado"));
                    $('#cidade').html('<option value="" disabled="disabled" selected="selected">Carregando...</option>');
                });
            }

            function ajaxCidade(id) {
                $.ajax({
    				tryCount : 0,
    				retryLimit : 3,
    			    type: 'GET',
    			    crossOrigin: true,
    			    url:'http://www.geonames.org/childrenJSON?geonameId=' + id,
    			    dataType: 'json',
    			    success:function(x){
                        console.log(x);
    				    var html = '';
                        html += '<option value="" disabled="disabled" selected="selected">Escolha uma cidade</option>';
    				    for (i = 0; i < x.geonames.length; i++) {
    			    		html += '<option idcidade="' + x.geonames[i].geonameId + '" value="' + x.geonames[i].toponymName + '">' + x.geonames[i].toponymName + '</option>';
    				    }
    				    $("#cidade").html(html);
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
    			    },
                    complete:function() {
                        console.log("Requisição completada com sucesso.");
                    }
    			});
            }

            $("#formLocalizacaoLandingPage").validate({
                rules: {
				    estado: "required",
                    cidade: "required"
                }
            });

            $("#formEsqueciSenha").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                },
                highlight: function(element) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                submitHandler: function(form) {
                    $("#btnEsqueciSenha").addClass("disabled");
                    var formEmail = $("#formEsqueciSenha").find("input[name='email']").val();
                    $.ajax({
                        tryCount : 0,
                        retryLimit : 3,
                        type: 'POST',
                        url:'http://31.220.53.123:8080/luckypets-servidor/api/usuario/esqueci-senha',
                        // Método 1 - NÃO funciona com imagens (multipart/form-data)
                        // data: { nome: $("input[name='nome']").val(), email: $("input[name='email']").val(), celular: $("input[name='celular']").val(), telefone: $("input[name='telefone']").val(), file: $("input[name='file']").val(), userId: $("input[name='userId']").val() },
                        // Método 2 - Funciona com imagens (multipart/form-data) {
                        data: {
                            email: formEmail
                        },
                        // }
                        success:function(result){
                            console.log("Senha enviada para o e-mail.");
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
                            console.log("Ops! Não foi possível fazer sua requisição.");
                            $("#btnEsqueciSenha").removeClass("disabled");
                        },
                        complete:function() {
                            location.href = "<?= $GLOBALS['www']; ?>?m=1";
                        }
                    });
                }
            });
        </script>
        <script src="js/functions.js"></script>
