<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    echo '<pre>' . print_r($_SESSION, TRUE) . "Session ID: " . session_id() . " ||| Session Status: " . session_status() .'</pre>';
 ?>
