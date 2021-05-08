<?php

$resultado;

function celciusAFahrenheit($temperatura)
{

	return ($temperatura*9/5)+32;
}

function fahrenheitACelcius($temperatura)
{

	return ($temperatura-32)*5/9;
	
}

function transformar($temperatura, $tipoTemperatura)
{

	switch ($tipoTemperatura) 
	{
		case 'C':

			$resultado=fahrenheitACelcius($temperatura);
			break;

		case 'F':

			$resultado=celciusAFahrenheit($temperatura);
			break;
		
		default:

			$tipoTemperatura = "K";
			$resultado = 0; 
			break;
	}

	mostrarTemperatura($resultado, $tipoTemperatura, $temperatura);
}

function mostrarTemperatura($resultado, $tipoTemperatura, $temperatura)
{	
	switch ($tipoTemperatura)
	{
		case 'C':

			echo "Se convertira ".$temperatura."°F a °C.";
			echo "<br>";
			echo "El resultado es ".$resultado."°C.";
			break;

		case 'F':

			echo "Se convertira ".$temperatura."°C a °F.";
			echo "<br>";
			echo "El resultado es ".$resultado."°F.";
			break;
		
		default:

			echo "No se indico bien a que tipo de temperatura se quiere convertir.";
			break;
	}
}

?>