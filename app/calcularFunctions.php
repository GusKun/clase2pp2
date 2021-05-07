<?php

function suma($num1, $num2)
{

	return $num1+$num2;
}

function dividir($num1, $num2)
{

	if(retornarSiEsCero($num2)==true)
	{
		echo "<br>";
		echo "¡ERROR! No se puede dividir entre cero";
		return "infinito";
	}else
	{

		return $num1/$num2;
	}
}

function retornarSiEsCero($nIngresado)
{

	if($nIngresado==0)
	{

		return true;
	}else
	{

		return  false;
	}
}

function calcular($num1, $operador, $num2)
{

	switch ($operador) 
	{
		case '+':

			echo "Realizando la suma de num1 = ".$num1." y num2 = ".$num2;
			mostrarResultado(suma($num1, $num2));
			break;

		case '/':

			echo "Realizando la divicion de num1 = ".$num1." y num2 = ".$num2;
			mostrarResultado(dividir($num1, $num2));
			break;
		
		default:

			echo "Lo siento, no reconosco ese operador";
			break;
	}
}

function mostrarResultado($nResultado)
{
	if($nResultado != "infinito")
	{
	echo "<br>";
	echo "El resultado es ".$nResultado;
	}
}

?>