<?php
    function verifyLogin() {
        if (!isset($_SESSION['basicAuth'])) {
    		header('Location: http://localhost/luckypets/?message=usuarioNaoLogado');
    		exit;
    	}
    }
?>
