<?php

    $n1 = $_POST['n1']; 
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $nomes=array();

    $nomes[0]=$n1;
    $nomes[1]=$n2;
    $nomes[2]=$n3;

    var_dump($nomes);

    echo"<br>";

    foreach($nomes as $name){
        echo"O nome $name";
    };




?>