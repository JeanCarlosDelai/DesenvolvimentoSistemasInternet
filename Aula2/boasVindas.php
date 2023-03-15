<?php

require('verificaAutenticacao.php');

//ola
echo 'Login efetuado com sucesso';
?>

<P>
    <?php
        if ($_SESSION['admin']) {
            ?>
            <a href="usuarios.php">Usuários</a>
            <?php
        }
    ?>
    <a href="logout.php">Sair</a>
</P>