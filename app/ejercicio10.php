<?php

include_once "ejercicio10Function.php";

for($i=1000; $i>0; $i--)
{	
	if(mostrarPrimo($i)){
		echo "El numero ".$i." es primo <br>";
	}
}

?>