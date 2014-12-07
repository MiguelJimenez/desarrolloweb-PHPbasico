<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>foreach</title>
</head>
<body>
	<?php 
	$matriz=array('Uno','Dos','Tres');	

	foreach ($matriz as $clave => $valor) {
		echo $clave."=".$valor."<br>";
	}

	$matriz2=array(
		"Luis" => "Hombre",
		"Marta" => "Mujer",
		"Gaia" => "Perrita",
		);

	foreach ($matriz2 as $clave => $valor) {
		echo $clave." es ".$valor."<br>";
	}


	?>
</body>
</html>