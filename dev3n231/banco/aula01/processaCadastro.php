<?php

    require('conexao.php');


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $data = $_POST['data'];


    $sql = "INSERT INTO contato(nome, email, fone, dataNascimento) VALUES('$nome', '$email', '$fone', '$data')";

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