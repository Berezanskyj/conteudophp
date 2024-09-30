<?php

$formNome = $_POST['nome']; 
$formSobrenome = $_POST['sobrenome']; 
$formIdade = $_POST['idade']; 
$formDataNascimento = $_POST['datanascimento']; 
$formEndereco = $_POST['endereco']; 
$formBairro = $_POST['bairro']; 
$formCidade = $_POST['cidade']; 
$formCpf = $_POST['cpf']; 
$formRg = $_POST['rg'];

include 'OOPhp.php';

$pessoa = new Pessoa();

$pessoa->setNome($formNome);
$pessoa->setSobrenome($formSobrenome);
$pessoa->setIdade($formIdade);
$pessoa->setDataNascimento($formDataNascimento);
$pessoa->setEndereco($formEndereco);
$pessoa->setBairro($formBairro);
$pessoa->setCidade($formCidade);
$pessoa->setCpf($formCpf);
$pessoa->setRg($formRg);

echo "Os dados digitados foram: <br>";
echo "Nome: " . $pessoa->getNome() . "<br>";
echo "Sobrenome: " . $pessoa->getSobrenome() . "<br>";
echo "Idade: " . $pessoa->getIdade() . "<br>";
echo "Data de Nascimento: " . $pessoa->getDataNascimento() . "<br>";
echo "Endereço: " . $pessoa->getEndereco() . "<br>";
echo "Bairro: " . $pessoa->getBairro() . "<br>";
echo "Cidade: " . $pessoa->getCidade() . "<br>";
echo "Cpf: " . $pessoa->getCpf() . "<br>";
echo "RG: " . $pessoa->getRg() . "<br>";
?>
