<?php

include_once "calcularFunctions.php";

$num1 = rand(0, 10);
$num2 = rand(0, 10);
$nOperador = rand(0, 1);
$signoOperador;

if($nOperador==0)
{
	$signoOperador = '+';
}else
{
	$signoOperador = '/';
}

calcular($num1, $signoOperador, $num2);

?>