<?php

//acá llamamos al modelo
require_once("model/indexModel.php");
if (isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
	$index=new indexModel();
	$index->logueo();
}


//acá llamamos a la vista
require_once("view/index.phtml");

?>