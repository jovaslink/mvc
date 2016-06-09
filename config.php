<?php
session_start();
class Conectar
{
	public static function con()
	{
		$con=mysql_connect("216.144.242.154","devcomx_mvc","G.z16LCpEL.2");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("devcomx_mvc");
		return $con;
	}
	public static function ruta()
	{
		return "http://localhost/mvc/";
	}
	public static function warning($texto)
		{
			?>
				<table align="center" width="500" style="border: #000099; border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; font-family:Verdana; font-size:13px">
			<tr>
			<td valign="top" align="center">
			<img src="<?php echo Conectar::ruta();?>images/warn.png" />
			</td>
			</tr>
			<tr>
			<td valign="top" align="center">
			<font color="#FF0000"><?=$texto?></font>
			<br />
			<br />
			<input type="button" value="Volver" title="Volver" onClick="history.back();" />
			</td>
			</tr>
			</table>
			<?php
			exit;
		}   
}

?>