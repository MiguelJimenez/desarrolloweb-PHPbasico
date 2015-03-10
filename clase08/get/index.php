<?php 
include "includes/plantilla.php";
$titulo = "Listado";
$nombre = "nombre";
escribe_cabecera($titulo,$nombre);
?>
<section>
	<ol>
		<li><a href="mostrar.php">Enlace 1</a></li>
		<li><a href="mostrar.php?id=2">Enlace 2</a></li>
	</ol>
</section>
<?php 
escribe_pie();
?>