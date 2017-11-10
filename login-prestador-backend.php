<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['id'] = "";
    $_SESSION['nome'] = "";
    $_SESSION['email'] = "";
    $_SESSION['senha'] = "";
    $_SESSION['imagem'] = "";
    $_SESSION['caminhoCompletoImagem'] = "";
    $_SESSION['telefone'] = "";
    $_SESSION['celular'] = "";
    $_SESSION['authToken'] = "";
    $_SESSION['facebook'] = "";
    $_SESSION['administrador'] = "";
    $_SESSION['ativo'] = "";
    $_SESSION['codConfirmacao'] = "";
    $_SESSION['responsavel'] = "";
    $_SESSION['cpfResposavel'] = "";
    $_SESSION['tipo'] = "";
    $_SESSION['cep'] = "";
    $_SESSION['logradouro'] = "";
    $_SESSION['numero'] = "";
    $_SESSION['cidade'] = "";
    $_SESSION['estado'] = "";
    $_SESSION['basicAuth'] = "";

    if (isset($_POST['email'])) {
        $_SESSION['id'] = $_POST['id'];
        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['senha'] = $_POST['senha'];
        $_SESSION['imagem'] = $_POST['imagem'];
        if ($_POST['imagem'] == "") {
            $_SESSION['caminhoCompletoImagem'] = 'http://31.220.53.123/luckypets/img/nophoto-placeholder.png';
        } else {
            $_SESSION['caminhoCompletoImagem'] = $_POST['caminhoCompletoImagem'];
        }
        $_SESSION['telefone'] = $_POST['telefone'];
        $_SESSION['celular'] = $_POST['celular'];
        $_SESSION['authToken'] = $_POST['authToken'];
        $_SESSION['facebook'] = $_POST['facebook'];
        $_SESSION['administrador'] = $_POST['administrador'];
        $_SESSION['ativo'] = $_POST['ativo'];
        $_SESSION['codConfirmacao'] = $_POST['codConfirmacao'];
        $_SESSION['responsavel'] = $_POST['responsavel'];
        $_SESSION['cpfResposavel'] = $_POST['cpfResposavel'];
        $_SESSION['tipo'] = $_POST['tipo'];
        $_SESSION['cep'] = $_POST['cep'];
        $_SESSION['logradouro'] = $_POST['logradouro'];
        $_SESSION['numero'] = $_POST['numero'];
        $_SESSION['cidade'] = $_POST['cidade'];
        $_SESSION['estado'] = $_POST['estado'];
        $_SESSION['basicAuth'] = $_POST['basicAuth'];
    }
?>
