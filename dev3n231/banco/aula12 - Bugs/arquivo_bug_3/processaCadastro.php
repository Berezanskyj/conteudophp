<?php

require('conexao.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

$sql = "INSERT INTO contato(nome, endereco, numero, telefone, email, cpf, rg)
VALUES('$nome', '$endereco', '$numero', '$fone', '$email', '$cpf', '$rg')";

if($conn->query($sql) === TRUE){
    echo "Cadastrado com sucesso!";
    die();
} else {
	
    echo "Erro: " . $sql . "<br>" . $conn->error;
};

$conn->close();



?>