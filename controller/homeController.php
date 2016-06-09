<?php

//acá llamamos al modelo
require_once("model/genericoModel.php");
$u=new genericoModel();
$user=$u->get_user();


//acá llamamos a la vista
require_once("view/home.phtml");

?>