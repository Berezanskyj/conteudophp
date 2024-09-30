<?php

$host = 'localhost';
$user = 'root';
$senha = '';
$banco = 'adventure';

try {
    $pdo = new PDO("mysql:dbname=$banco;host=$host;charset=utf8", "$user", "$senha");
} catch (Exception $e) {
    echo 'Erro ao conectar ao banco de dados <br>';
    echo $e;
}
