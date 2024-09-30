<?php
    $valor = $_POST['valor'];
    $dias_atraso = $_POST['atraso'];

    $cinco = ($valor * (5/100) * $dias_atraso) + $valor;
    $dez = ($valor * (10/100) * $dias_atraso) + $valor;
    $quinze = ($valor * (15/100) * $dias_atraso) + $valor;

    if($dias_atraso >= 1 && $dias_atraso <= 3){
        echo "Com $dias_atraso dias de atraso o valor da parcela com juros fica: $cinco";
    } else if ($dias_atraso >= 4 && $dias_atraso <= 9){
        echo "Com $dias_atraso dias de atraso o valor da parcela com juros fica: $dez";
    } else {
        echo "Com $dias_atraso dias de atraso o valor da parcela com juros fica: $quinze";
    };

?>