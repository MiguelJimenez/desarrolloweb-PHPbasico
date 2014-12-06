<html>
	<head>
		<title>CURSO PHP BASICO</title>
		<meta charset="utf-8">
		<style>
			/* ESTILOS DE PLANTILLA */
			body { 	background: url('images/background.jpg'); 
					color: black; font-family: Arial; 
					font-size: 14px; font-weight: bold; margin: 120px 0px 0px 50px; }	
		</style>
	</head>
<body>

	<h3> EJERCICIOS DEL TEMA 3</h3>

	<?php
	
		//NOTA: el <br/> es para que salten las lineas y podais apreciar todo bien
		
		//DECLARACIÓN DE UNA VARIABLE
		
		$nombre = 'Carlos'; //Cadena o string
		$apellidos = 'Ruiz Ruso';
		$entero = 10;
		$real = 10.2;
		$booleano = true; //booleano puede ser true o false
		$x = 10;
		$y = 2;
		
		
		//DECLARACION DE ARRAYS
		
		$miarray = array(); //Array vacio
		$miarray1 = array('carlos',20,true,'otra'); //Array mixto con indice numeral
		$miarray2 = array('nombre' => 'Carlos', 'apellidos' => 'Ruiz Ruso'); //Array con indice personalizado
		$miarray3 = array(
							'entero' => $entero, 
							'real' => $real, 
							'booleano' => $booleano); //Array con variables
	
	?>
	
		//VARIABLES<br/><br/>
		
		VARIABLE: <?php echo $real; ?><br/>
		VARIABLE CONCATENADA: <?php echo $nombre.' '.$apellidos; ?><br/><br/>
		
		//ARITMETICA<br/><br/>
		
		SUMA: <?php echo $x + $y; ?><br/>
		RESTA: <?php echo $x + $y; ?><br/>
		DIVISION: <?php echo $x / $y; ?><br/>
		MODULO: <?php echo $x % $y; ?><br/><br/>
		
		//ARRAYS<br/><br/>
		
		ARRAY VACIO: <? print_r($miarray); ?><br/>
		ARRAY 1: <? print_r($miarray1); ?><br/>
		ARRAY 2: <? print_r($miarray2); ?><br/>
		ARRAY 3: <? print_r($miarray3); ?><br/><br/>
		
		//TRUCO DE ESQUEMA DE ARRAY
		<pre>
		<? print_r($miarray3); ?>
		</pre>
	
</body>
</html>