<?php
    # form_receber.php
    require('pdo.inc.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Prepara a consulta
    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE username = ? AND active = 1');

    // Anexa a variável no parámetro 1
    $sql->bindParam(1, $usuario, PDO::PARAM_STR);

    //Roda a consulta no banco
    $sql->execute();

    // Busca os dados no banco
    $dados = $sql->fetch(PDO::FETCH_ASSOC);

    //
        if ($sql->rowCount() == 1
    &&
    password_verify($senha, $dados['password'])){ 
        // Autenticação OK
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['admin'] = $dados['admin'];

        header('location:boasvindas.php');
        die;
    } else {
        header('location:form.php?erro=1');
        die;
    }