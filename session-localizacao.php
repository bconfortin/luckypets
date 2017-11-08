<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['estado'] = "";
    $_SESSION['cidade'] = "";

    if (isset($_POST['estado']) && isset($_POST['cidade'])) {
        $_SESSION['estado'] = $_POST['estado'];
        $_SESSION['cidade'] = $_POST['cidade'];
        return "Estade e cidado selecionados com sucesso! Estado: " . $_SESSION['estado'] . " | Cidade: " . $_SESSION['cidade'];
    } else {
        return "Você não selecionou nada.";
    }
?>
