<?php

$num1=rand(0, 10);
$num2=rand(0, 10);
$num3=rand(0, 10);

if($num1>$num2 && $num1>$num3)
{
	echo "El numero 1 es el mayor con el valor: ".$num1;
}else{
	if($num2>$num1 && $num2>$num3)
	{
		echo "El numero 2 es el mayor con el valor: ".$num2;
	}else{
		if($num3>$num1 && $num3>$num2)
		{
			echo "El numero 3 es el mayor con el valor: ".$num3;
		}else{
			if($num3<$num1 && $num3<$num2)
			{
				echo "Los tres son iguales o dos son iguales y uno diferente";
			}
		}	
	}
 }

	echo "<br>";
	echo "El numero 1 tiene el valor: ".$num1;
	echo "<br>";
	echo "El numero 2 tiene el valor: ".$num2;
	echo "<br>";
	echo "El numero 3 tiene el valor: ".$num3;
?>