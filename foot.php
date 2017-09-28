        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script defer src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script defer src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

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
        </script>
