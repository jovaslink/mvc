<?php

class genericoModel
{
	private $user;
	
	public function __construct()
	{
		$this->user=array();
	}
	public function get_user()
	{
		$sql="select user from usuarios where id_usuario=".$_SESSION["modulo_8"];
		$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->user[]=$reg;
		}
			return $this->user;
	}
}
?>