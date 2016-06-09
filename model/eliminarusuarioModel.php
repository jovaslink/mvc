<?php

class eliminarusuarioModel 
{
	
	
	public function delete_usuario($id)
	{
		if ($id == $_SESSION["modulo_8"])
		{
			//echo "son iguales";
			header("Location: ".Conectar::ruta()."c-listarusuarios/i-2/");
			exit;
		}
		if (!is_numeric($id))
		{
			header("Location: ".Conectar::ruta()."c-listarusuarios/");
		}
		$sql="delete from usuarios where id_usuario=$id";
		mysql_query($sql,Conectar::con());
		header("Location: ".Conectar::ruta()."c-listarusuarios/i-1/");
	}
}

?>