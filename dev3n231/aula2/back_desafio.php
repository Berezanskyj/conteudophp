<?php
$operacao = $_POST['operacao'];
$p_num = $_POST['p_num'];
$s_num = $_POST['s_num'];

$soma = $p_num + $s_num;
$sub = $p_num - $s_num;
$div = $p_num / $s_num;
$mult = $p_num * $s_num;


if($operacao == "+"){
    echo "$soma";
} else if ($operacao == "-"){
    echo "$sub";
} else if ($operacao == "/"){
    echo "$div";
} else {
    echo "$mult";
};





?>