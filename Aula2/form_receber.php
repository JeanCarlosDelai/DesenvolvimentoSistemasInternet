<?php
    # form_receber.php

$senha_cripto = '$2y$11$IZ.KvE2HfwZEr6UxfpSWGOvhoYqychUBmLneTkWx/1oiC/hlJmABm';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == 'Jean'
    &&
    password_verify($senha, $senha_cripto)){ 
        // Autenticação OK
        session_start();
        $_SESSION['usuario'] = $usuario;

        header('location:boasvindas.php');
        die;
    } else {
        header('location:form.php?erro=1');
        die;
    }