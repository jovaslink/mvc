<?php
require_once("config.php");

//validamos la existencia de la sessión
if (!empty($_SESSION["modulo_8"]))
{
	$accionpredefinida="home";

	if (!empty($_GET["accion"]))
	{
		$accion=$_GET["accion"];
	}else
	{
		$accion=$accionpredefinida;
	}
	
	if (is_file("controller/".$accion."Controller.php"))
	{
		require_once("controller/".$accion."Controller.php");
	}else
	{
		require_once("controller/errorController.php");
	}
}else
{
	require_once("controller/indexController.php");
}





?>