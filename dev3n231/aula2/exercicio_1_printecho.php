<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nt1 = 8;
        $nt2 = 7.5;
        $nt3 = 9;
        $nt4 = 10;
        $media = ($nt1 + $nt2 + $nt3 + $nt4) / 4;

        if($media >= 7.0){
            echo("Aprovado <br>");
        } else {
            echo("Recuperação <br>");
        };
        
        if($media >= 7.0){
            echo("Aprovado");
        } else if ($media >= 5.0) {
            echo("Recuperação");
        } else{
            echo("Reprovado");
        };
        
    ?>
</body>
</html>