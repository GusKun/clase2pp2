<?php
	if (isset($_POST['precio']))
	{
		$precio = $_POST['precio'];
		$resultado = $precio*1.21;
		echo "<p>"$resultado;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio2</title>
</head>
<body>
	<form id="formulario" name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

		<p>Ingrese un precio sin iva</p>
		
		<input type="text" id="IDprecio" name="precio"/>

		<input type="button" id="IDenviar" name="enviar" onclick="resultado()" value="calcular"/>

		<input type="text" id="IDprecioMasIVA" name="precioMasIVA" value= "<?php echo $resultado ?>"/>
	</form>

</body>
</html>