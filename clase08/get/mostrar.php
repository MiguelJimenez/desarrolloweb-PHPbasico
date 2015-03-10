<?php 
include "includes/plantilla.php";
escribe_cabecera("Datos del producto");

if($_GET)
{
	if(isset($_GET['id']))
	{
		echo "todo correcto";
	}
	else
	{
		echo "Me estás intentando engañar";
	}

	print_r($_GET);
}

escribe_pie();
?>