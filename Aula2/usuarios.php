<?php

require('pdo.inc.php');

// Prepara a consulta
$sql = $pdo->query('SELECT * FROM usuarios');

//Listagem usando fetch
while ($usuario = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo "<p>{$usuario['username']}</p>";
}

//Listagem com fetchall
// $tudo = $sql->fetchAll(PDO::FETCH_ASSOC);
// foreach ($tudo as $usuario) {
//     echo "<p>{$usuario['username']}</p>"; 
// }