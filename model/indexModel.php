<?php

class indexModel
{
	
	
	public function logueo()
	{
		$sql="select id_usuario, user, pass from usuarios "
			." where "
			." user='".strip_tags($_POST["login"])."' "
			." and "
			." pass='".strip_tags($_POST["pass"])."' ";	
		$res=mysql_query($sql,Conectar::con());	
		if (mysql_num_rows($res)==0)
		{
			//echo "los datos ingresados no existen";
			Conectar::warning("Usted no tiene acceso al sistema. P&oacute;ngase en contacto con el administrador yo@cesarcancino.com");
		}else
		{
			if ($reg=mysql_fetch_array($res))
			{
				$_SESSION["modulo_8"] = $reg["id_usuario"];
				//echo "usted se ha logueado exitosamente";
				//require_once("view/home.phtml");
				header("Location: ".Conectar::ruta()."c-home/");
			}
			
		}
		
	}
}
?>