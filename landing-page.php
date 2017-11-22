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
        <div class="container-fluid bg-f5f5f5 bg-landing-page">
            <div class="container">
        		<div class="row">
        			<div class="col-xs-12 height-hack-lading-page">
                        <div style="height: 320px;">&nbsp;</div>
                        <form action="" id="formLocalizacaoLandingPage" method="POST" class="width-290 force-vertical-align bg-fff bg-fff-transparent padding-15 mbottom-30 mbottom-0-xs">
                            <h1 class="mtop-0 mbottom-15 font-700 font-1-2em text-uppercase text-center"><img src="img/logo/lucky-pets-logo-336x98.png" alt="" class="img-responsive max-height-30 center-block"></h1>
                            <h2 class="mtop-0 mbottom-15 font-300 font-0-9em text-center">Para continuar, selecione sua localização</h2>
                            <div class="form-group">
								<label for="estado">Estado</label>
								<select name="estado" id="estado" class="form-control force-radius-0" required>

								</select>
			                </div>
			                <div class="form-group">
								<label for="cidade">Cidade</label>
								<select name="cidade" id="cidade" class="form-control force-radius-0" required>
									<option value="" disabled="disabled" selected="selected">Escolha um estado</option>
								</select>
			                </div>
			                <button class="btnLocalizacao btn btn-gradient text-uppercase force-radius-0 width-100per">Salvar</button>
                        </form>
        			</div>
        		</div>
            </div>
    	</div>
        <div class="container-fluid bg-333 padver-10">
    		<div class="container">
    			<div class="row">
    				<div class="col-xs-12">
		    			<div class="row">
		    				<div class="col-xs-12">
								<p class="mbottom-0 color-fff text-center font-0-8em">Copyright©2017 - Lucky Pets & Insituto Federal do Paraná (Campus Foz do Iguaçu). Todos os direitos reservados.</p>
		    				</div>
		    			</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<?php include "foot.php"; ?>
    </body>
</html>
