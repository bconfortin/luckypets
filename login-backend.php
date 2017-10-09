<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['administrador'] = "";
    $_SESSION['authToken'] = "";
    $_SESSION['celular'] = "";
    $_SESSION['email'] = "";
    $_SESSION['facebook'] = "";
    $_SESSION['id'] = "";
    $_SESSION['imagem'] = "";
    $_SESSION['caminhoCompletoImagem'] = "";
    $_SESSION['nome'] = "";
    $_SESSION['senha'] = "";
    $_SESSION['telefone'] = "";
    $_SESSION['basicAuth'] = "";

    if (isset($_POST['email'])) {
        $_SESSION['administrador'] = $_POST['administrador'];
        $_SESSION['authToken'] = $_POST['authToken'];
        $_SESSION['celular'] = $_POST['celular'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['facebook'] = $_POST['facebook'];
        $_SESSION['id'] = $_POST['id'];
        $_SESSION['imagem'] = $_POST['imagem'];
        $_SESSION['caminhoCompletoImagem'] = $_POST['caminhoCompletoImagem'];
        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['senha'] = $_POST['senha'];
        $_SESSION['telefone'] = $_POST['telefone'];
        $_SESSION['basicAuth'] = $_POST['basicAuth'];
    }
?>
