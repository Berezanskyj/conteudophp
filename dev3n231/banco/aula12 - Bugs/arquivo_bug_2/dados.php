<?php

	include_once 'aluno.class.php';
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	
	$a = new Aluno();
	$a->getNome($nome);
	$a->getIdade($idade);
	echo 'Dados do aluno: <br/>Nome: ' . $a->setNome() . '<br/>
	Idade:' . $a->setIdade();
	
	

?>