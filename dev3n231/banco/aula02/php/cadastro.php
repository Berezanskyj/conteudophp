<?php

    require('conexao.php');


    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $endereco = $_POST['endereco']; 
    $numero = $_POST['numero']; 
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $dataNascimento = $_POST['dataNascimento'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];


    $sql = "INSERT INTO cliente(nome, sobrenome, endereco, numero, complemento, bairro, cidade, estado, data_nascimento, cpf, rg, telefone, email) VALUES('$nome', '$sobrenome', '$endereco', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$dataNascimento', '$cpf', '$rg', '$telefone', '$email')";

    if($conn->query($sql) === TRUE){
        // sleep(5);
        // header('location:./cadastro.php');
        echo "<script language='javascript' type='text/javascript' >
                alert('Cadastrado');
                window.location.href='conexao.php'; </script>";
                die();
    } else{
        echo "Erro" . $sql . "<br>" . $conn->error;
    }

    $conn->close();