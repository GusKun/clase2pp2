<?php

$numero=rand(1,100);

if(esoNoEsPrimo($numero))
{
	echo "el numermo ".$numero." es primo";
}else{
	echo "el numermo ".$numero." no es primo";
}

function esoNoEsPrimo($num){

	if($num == 1 || $num == 2 || $num == 3 || $num == 5 || $num == 7)
	{
		return true;
	}

	if($num >= 8 )
	{
		if ($num%2==0 || $num%3==0 || $num%5==0) 
		{
			return false;
		}
	}

	if($num >= 8 )
	{
		if ($num%2>=1 || $num%3>=1 || $num%5>=1)
		{
			return true;
		}
	}
}

?>