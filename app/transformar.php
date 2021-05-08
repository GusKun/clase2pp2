<?php

include_once "transformarFunctions.php";

$temperatura = rand(-100, 212);
$nTipo = rand(0, 1);
$tipoTemperatura;

if($nTipo==0)
{
	$tipoTemperatura = 'F';
}else
{
	$tipoTemperatura = 'C';
}

transformar ($temperatura, $tipoTemperatura);

?>