<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Switch</title>
</head>
<body>
	<?php 
 	$dia = 23;

	switch ($dia) {
		case '1':
		echo "Hoy es lunes";
		break;
		case '2':
		echo "Hoy es martes";
		break;
		case '3':
		echo "Hoy es miercoles";
		break;
		case '4':
		echo "Hoy es jueves";
		break;
		case '5':
		echo "Hoy es viernes";
		break;
		case '6':
		echo "Hoy es sábado";
		break;
		case '7':
		echo "Hoy es domingo";
		break;
		
		default:
		echo "No existe ese día de la semana";
		break;
	}


	?>
	
</body>
</html>