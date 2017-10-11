<?php
    function verifyLogin() {
        if (!isset($_SESSION['basicAuth'])) {
    		header('Location: ' . $GLOBALS['www'] . '?message=usuarioNaoLogado');
    		exit;
    	}
    }
?>
