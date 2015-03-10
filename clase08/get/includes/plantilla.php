<?php 
function escribe_cabecera($titulo="Página", $nombre="Listado")
{
	echo '<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>'.$titulo.'</title>
</head>
<body>
	<header>
		<h1>'.$nombre.'</h1>
	</header>';
}

function escribe_pie()
{
	echo '<footer>
	Pie de nuestra página
</footer>
</body>
</html>';
}


