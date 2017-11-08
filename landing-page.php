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
        <div class="container-fluid">
            <div class="container">
        		<div class="row">
        			<div class="col-xs-12">
                        <form action="" method="POST">
                            <div class="form-group">
								<label for="formEstado">Estado</label>
								<select name="formEstado" id="formEstado" class="form-control force-radius-0">
									<option value="" disabled="disabled" selected="selected">Escolha o estado</option>
									<option value="Paraná">Paraná</option>
								</select>
			                </div>
			                <div class="form-group">
								<label for="formCidade">Cidade</label>
								<select name="formCidade" id="formCidade" class="form-control force-radius-0">
									<option value="" disabled="disabled" selected="selected">Escolha a cidade</option>
									<option value="Foz do Iguaçu">Foz do Iguaçu</option>
								</select>
			                </div>
			                <button id="btnLocalizacao" class="btn btn-gradient text-uppercase force-radius-0 width-100per">Salvar</button>
                        </form>
        			</div>
        		</div>
            </div>
    	</div>
    	<?php include "footer.php"; ?>
    	<?php include "foot.php"; ?>
        <script>
        $("#btnLocalizacao").on("click", function(event){
            event.preventDefault();
            $("#btnLocalizacao").addClass("disabled");
            var estado = $("select[name='formEstado']").val();
            var cidade = $("select[name='formCidade']").val();
            if (estado !== "" && cidade !== "") {
                $.post("<?= $GLOBALS['www']; ?>session-localizacao.php", {
                    "estado": estado,
                    "cidade": cidade
                }).done(function(data) {
                    console.log("Data Loaded: ");
                    console.log(data);
                }).fail(function() {
                    alert("Ops! Parece que temos algum problema de conexão. Tente novamente mais tarde.");
                    $("#btnLocalizacao").removeClass("disabled");
                });
            }
        });
        </script>
    </body>
</html>
