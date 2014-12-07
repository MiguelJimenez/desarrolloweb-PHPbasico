<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>break</title>
</head>
<body>
	<?php 
	/*for ($i=0; $i <= 10; $i++) { 
		if ($i==5) {
			break;
		}
		echo $i."<br>";
	}*/
	for ($i=0; $i < 5; $i++) { 
		for ($j=0; $j < 5; $j++) { 
			echo $i."---".$j."<br>";
		}
	if ($i==2) {
		break;
	}
	}


	 ?>
	
</body>
</html>