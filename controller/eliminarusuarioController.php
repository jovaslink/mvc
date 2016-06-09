<?php


require_once("model/eliminarusuarioModel.php");

$e=new eliminarusuarioModel();
$e->delete_usuario($_GET["valor"]);


//cargar la vista

//require_once("view/eliminarusuario.phtml");
?>

