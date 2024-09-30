<?php

    include 'class.php'; 
    $aluno = new Aluno();


    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $pnota = $_POST['pnota'];
    $snota = $_POST['snota'];
    $tnota = $_POST['tnota'];
    $qnota = $_POST['qnota'];


    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setPnota($pnota);
    $aluno->setSnota($snota);
    $aluno->setTnota($tnota);
    $aluno->setQnota($qnota);


    echo "Nome: " . $aluno->getNome() . "<br>";
    echo "Idade: " . $aluno->getIdade() . "<br>";

    $media = calcularMedia($aluno);


?>