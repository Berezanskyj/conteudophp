<?php

$senha = '1231';
$senhaMD5 = md5($senha);
$senhaSHA = sha1($senha);

$senhaSegura1 = password_hash($senha, PASSWORD_DEFAULT);
$senhaSegura2 = password_hash($senha, PASSWORD_DEFAULT);
$senhaSegura3 = password_hash($senha, PASSWORD_DEFAULT);

$senhaCorreta = password_verify('1231', $senhaSegura1);

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