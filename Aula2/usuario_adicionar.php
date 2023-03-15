<?php

$usuario = $_POST['username'];
$senha = $_POST['password'];
$admin = isset($_POST['admin']);

echo $usuario;
echo $senha;

$senha = password_hash($senha, PASSWORD_BCRYPT);

require('pdo.inc.php');

// Prepara a consulta
$sql = $pdo->prepare('INSERT INTO usuarios (username, password, admin) VALUES (?, ?, ?)');

// Anexa a variável no parámetro 1
$sql->bindParam(1, $usuario);
$sql->bindParam(2, $senha);
$sql->bindParam(3, $admin);

$sql->execute();

