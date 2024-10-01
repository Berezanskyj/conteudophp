<?php

//Verifica se há conexao com o banco de dados
require_once("conexao.php");


// pega os dados fornecidos pelo usuario
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//criptografa a senha do usuario
$senha_crip = password_hash($senha,PASSWORD_DEFAULT, ['cost'=>10]);

$senha_correta = password_verify($senha, $senha_crip);

//Efetuando consulta no DB

$query = $pdo->prepare("SELECT * FROM usuarios where email=:email and senha_crip=:senha"); // cria a consulta

$query->bindValue(":email", "$usuario");
$query->bindValue(":senha", "$senha_correta");
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC); // se não tiver linhas retorna null ou 0

$linhas = @count($res); // Mostra a quantidade de linhas

//trabalhar tomada de decisão
if ($linhas > 0){

    if($res[0]['ativo'] != "sim"){
        echo "<script>window.alert('Inativo')</script>"; 
        echo '<script>window.location="../index.php"</script>';
    }

    $_SESSION['nome'] = $res[0]['nome'];
    $_SESSION['id'] = $res[0]['id'];
    $_SESSION['nivel'] = $res[0]['nivel'];
    echo '<script>window.location="painel"</script>';

}else{
    echo "<script>window.alert('Dados Incorretos')</script>"; 
    echo '<script>window.location="../index.php"</script>';
}