<?php

class editarusuariosModel
{
	
	
	public function set_usuarios()
	{
		//print_r($_POST);
		$sql="update usuarios "
			." set "
			." nombre='".strip_tags($_POST["nom"])."', "
			." correo='".strip_tags($_POST["correo"])."', "
			." telefono='".strip_tags($_POST["tel"])."', "
			." direccion='".strip_tags($_POST["dir"])."', "
			." pass='".strip_tags($_POST["pass"])."' "
			." where "
			." id_usuario='".strip_tags($_POST["id_usuario"])."' ";
		mysql_query($sql,Conectar::con());
		header("Location: ".Conectar::ruta()."c-listarusuarios/i-3/");	
	}
}

?>