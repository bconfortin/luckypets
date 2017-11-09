<?php
    function verifyLogin() {
        if (!isset($_SESSION['basicAuth'])) {
    		header('Location: ' . $GLOBALS['www'] . '?m=2');
    		exit;
    	}
    }
?>
