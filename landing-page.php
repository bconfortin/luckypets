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
        <div class="container-fluid bg-f5f5f5">
            <div class="container">
        		<div class="row">
        			<div class="col-xs-12 height-hack">
                        <div style="height: 320px;">&nbsp;</div>
                        <form action="" id="formLocalizacaoLandingPage" method="POST" class="width-290 force-vertical-align bg-fff padding-15 mbottom-30 mbottom-0-xs">
                            <h1 class="mtop-0 mbottom-15 font-700 font-1-2em text-uppercase text-center"><img src="img/logo/lucky-pets-logo-336x98.png" alt="" class="img-responsive max-height-30 center-block"></h1>
                            <h2 class="mtop-0 mbottom-15 font-300 font-0-9em text-center">Para continuar, selecione sua localização</h2>
                            <div class="form-group">
								<label for="estado">Estado</label>
								<select name="estado" class="form-control force-radius-0">
									<option value="" disabled="disabled" selected="selected">Escolha o estado</option>
									<option value="Paraná">Paraná</option>
								</select>
			                </div>
			                <div class="form-group">
								<label for="cidade">Cidade</label>
								<select name="cidade" class="form-control force-radius-0">
									<option value="" disabled="disabled" selected="selected">Escolha a cidade</option>
									<option value="Foz do Iguaçu">Foz do Iguaçu</option>
								</select>
			                </div>
			                <button class="btnLocalizacao btn btn-gradient text-uppercase force-radius-0 width-100per">Salvar</button>
                        </form>
        			</div>
        		</div>
            </div>
    	</div>
    	<?php include "footer.php"; ?>
    	<?php include "foot.php"; ?>
    </body>
</html>
