<?php
class registrousuariosModel
{

	
	public function registro()
	{
		//print_r($_POST);
		$query="select user from usuarios where user ='".strip_tags($_POST["login"])."'";
		$res=mysql_query($query,Conectar::con());
		
		if (mysql_num_rows($res)==0)
		{
			$sql="insert into usuarios  "
			." values "
			."(null,'".strip_tags($_POST["nom"])."','".strip_tags($_POST["correo"])."','".strip_tags($_POST["tel"])."','".strip_tags($_POST["dir"])."','".strip_tags($_POST["login"])."','".strip_tags($_POST["pass"])."');";
		//echo $sql;
		//exit;
			mysql_query($sql,Conectar::con());
			header("Location: ".Conectar::ruta()."c-registrousuarios/i-1/");
		
		}else
		{
			Conectar::warning("El login <b>".$_POST["login"]."</b> ya está siendo usado por otro usuario");
		}
		
		
		
		
			
	}
	
}
?>