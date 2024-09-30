<?php

date_default_timezone_set('America/Sao_Paulo');

$servidor = 'localhost';
$banco = 'condominio';
$usuario = 'root';
$senha = '';

try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} catch (Exception $e) {
    echo 'Erro ao conectar ao banco de dados <br>';
    echo $e;
}
