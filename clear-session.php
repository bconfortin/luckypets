<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    session_unset();
    session_destroy();
    $_SESSION = array();

    $GLOBALS['www'] = 'http://localhost:81/luckypets/';
    header('Location: ' . $GLOBALS['www'] . "landing-page.php");
    exit;
?>
