<?php
    # form_receber.php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == 'Jean' && $senha == '123') {
        // Autenticação OK
        session_start();
        $_SESSION['usuario'] = $usuario;

        header('location:boasvindas.php');
        die;
    } else {
        header('location:form.php?erro=1');
        die;
    }