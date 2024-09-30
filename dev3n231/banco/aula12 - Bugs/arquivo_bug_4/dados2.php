<?php
	include_once ("calcular2.class.php");
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$operacao = $_POST['operacao'];
	
	$calc = new Calcular();
	$calc->setValor1($valor1);
	$calc->setValor2($valor2);
	$calc->setOperacao($operacao);
	
	switch($operacao){
		case '+';
		echo "Soma dos valores: ";
		+$calc->subtracao();
		break;
		case '-';
		echo "Sub dos valores: ";
		+$calc->soma();
		break;
		case '*';
		echo "Multi dos valores: ";
		+$calc->div();
		break;
		case '/';
		echo "Div dos valores: ";
		+$calc->multi();
		break;
		default;
		echo "Erro na matrix!";
		break;
	}
	echo "<br>";
	echo "##########################";
	echo "<br>";
	echo "Resultado: " . $calc->matematicas();

?>