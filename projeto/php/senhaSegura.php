<?php

$senha = '1231';
$senhaMD5 = md5($senha);
$senhaSHA = sha1($senha);

$senhaSegura1 = password_hash($senha, PASSWORD_DEFAULT, ['cost'=>10]);
$senhaSegura2 = password_hash($senha, PASSWORD_DEFAULT, ['cost'=>10]);
$senhaSegura3 = password_hash($senha, PASSWORD_DEFAULT, ['cost'=>10]);

$senhaCorreta = password_verify('1231', $senhaSegura1);

if($senhaCorreta == $senha){
    echo "OK";
} else{
    echo "NOK";
}

var_dump(($senhaCorreta));

echo '<br>';

var_dump(($senha));
var_dump(($senhaMD5));
var_dump(($senhaSHA));
echo '<br>';
var_dump(($senhaSegura1));
echo '<br>';
var_dump(($senhaSegura2));
echo '<br>';
var_dump(($senhaSegura3));