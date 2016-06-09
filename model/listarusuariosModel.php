<?php

class listarusuariosModel 
{
	private $u;
	
	public function __construct()
	{
		$this->u=array();
	}
	
	public function get_usuarios()
	{
		$sql="select * from usuarios order by id_usuario desc;";
		$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->u[]=$reg;
		}
			return $this->u;
	}
	public function get_usuarios_por_id($id)
	{
		$sql="select * from usuarios where id_usuario=$id";
		//echo $sql."<br>";
		$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->u[]=$reg;
		}
			return $this->u;
	}
}

?>