<?php
    function verifyLogin() {
        if (!isset($_SESSION['basicAuth'])) {
    		header('Location: http://localhost:81/luckypets/?message=usuarioNaoLogado');
    		exit;
    	}
    }
?>
