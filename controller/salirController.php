<?php

//acá llamamos al modelo
  unset($_SESSION['modulo_8']);
  session_destroy();

//acá llamamos a la vista
require_once("view/index.phtml");

?>