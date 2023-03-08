<?php

require('verificaAutenticacao.php');
//ola
echo 'Login efetuado com sucesso';

$senha_cripto = password_hash(123, PASSWORD_BCRYPT, [
    'cost' => 11,
]);
echo $senha_cripto;
die();

?>
<P>
    <a href="logout.php">Sair</a>
</P>