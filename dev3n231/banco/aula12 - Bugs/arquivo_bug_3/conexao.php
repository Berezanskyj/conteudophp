<?php
$host = 'localhost';
$user = 'root';
$senha = '';
$banco = 'atividadebugs';

$conn = new mysqli($host, $user, $senha, $banco);

if ($conn->connect_error){
	
	die("Falha na conexão: " . $con->connect-error);	
	die("Falha na conexão: " . $con->connect-error);	
}
?>