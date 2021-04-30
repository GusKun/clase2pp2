<?php

$mes = rand(1,12);

if($mes >= 3 && $mes <= 5)
{
    echo "El mes " .$mes. " es otoño.";
}
else
{
    if($mes >= 6 && $mes <= 8)
    {
        echo "El mes " .$mes. " es invierno.";
    }
    else
    {
        if($mes >= 9 && $mes <= 11)
        {
            echo "El mes " .$mes. " es primavera.";
        }
        else
        {
            echo "El mes " .$mes. " es verano.";
        }
    }
}

?>