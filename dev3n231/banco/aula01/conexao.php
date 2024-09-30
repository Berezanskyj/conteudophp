<?php

    // $host = "localhost";
    // $database = "agenda";
    // $user = "root";
    // $password = "";
    // $conn = new PDO("mysql: ${host}=localhost;dbname=${database}, $user, $password");


    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "agenda";

    $conn = new mysqli($host, $user, $senha, $banco);


    if($conn->connect_error){
        die("Falha na conexão. <br>" . $conn->connect_error);
    }

?>