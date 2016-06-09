<?php

//acá llamamos al modelo
require_once("model/genericoModel.php");
$u=new genericoModel();
$user=$u->get_user();
//****************************************
require_once("model/editarusuariosModel.php");
if (isset($_POST) and $_POST["grabar"]=="si")
{
	$editarusuarios=new editarusuariosModel();
	$editarusuarios->set_usuarios();
}

require_once("model/listarusuariosModel.php");
$u=new listarusuariosModel();
$datos=$u->get_usuarios_por_id($_GET["valor"]);


//acá llamamos a la vista
require_once("view/editarusuarios.phtml");

?>