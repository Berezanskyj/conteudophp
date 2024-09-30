<?php
    require('conexao.php');

    try {
        // Recebe os dados do formulário
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO usuario (nome, sobrenome, email, telefone, endereco, senha) 
                VALUES (:nome, :sobrenome, :email, :telefone, :endereco, :senha)";
        
        $conn = $pdo->prepare($sql);

        // Vincula os parâmetros
        $conn->bindParam(':nome', $nome);
        $conn->bindParam(':sobrenome', $sobrenome);
        $conn->bindParam(':email', $email);
        $conn->bindParam(':telefone', $telefone);
        $conn->bindParam(':endereco', $endereco);
        $conn->bindParam(':senha', $senha);

        if($conn->execute()){
            echo "<script language='javascript' type='text/javascript' >
                    alert('Cadastrado com sucesso!');
                    window.location.href='../views/registrar.html'; 
                    </script>";
        } else {
            echo "Erro ao cadastrar usuário.";
        }

    } catch (PDOException $e) {
        // Captura e exibe o erro caso algo dê errado
        echo "Erro: " . $e->getMessage();
    }
?>
