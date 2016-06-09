<?php

//acá llamamos al modelo
require_once("model/genericoModel.php");
$u=new genericoModel();
$user=$u->get_user();
//****************************************
require_once("model/listarusuariosModel.php");
/*if (isset($_POST) and $_POST["grabar"]=="si")
{
	$registrousuarios=new registrousuariosModel();
	$registrousuarios->registro();
}*/

$u=new listarusuariosModel();
$datos=$u->get_usuarios();


//acá llamamos a la vista
require_once("view/listarusuarios.phtml");

?>