<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo If</title>
</head>
<body>
	<?php 
	$numero = 18;
	$numero2 = 2;

	$resultado = $numero/$numero2;

	/*if ($resultado<=4) {
		echo "El resultado es menor o igual que 4";
	} else {
		echo "El resultado es mayor que 4";
	}	*/

	if ($resultado<=2) {
		echo "El resultado es menor o igual que 2";
	} elseif ($resultado>=10) {
		echo "El resultado es mayor o igual que 10";
	}else{
		echo "El resultado está entre 2 y 10";
	}
	

	?>
	
</body>
</html>