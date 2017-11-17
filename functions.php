<?php
    function verifyLogin() {
        if (!isset($_SESSION['basicAuth']) && !headers_sent()) {
    		header('Location: ' . $GLOBALS['www'] . '?m=2');
    		exit;
    	}
    }
?>
