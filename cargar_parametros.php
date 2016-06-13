<?php
include("conexion.php");
$id = $_GET["id"];
$count = 1;
$query0=$conexion->query("SELECT * FROM parametro WHERE id = '$id'");
$titulo=$query0->fetch();
$tabla ="<p style=\"font-weight:bold; size:25px; text-aling:center;margin:auto;\">$titulo[1]</p>
<a href=\"add_detalle.php?id=$id&nombre=$titulo[1]\" class=\"btn btn-primary\" style=\"margin-top:2%; margin-bottom:2%;\">Nuevo</a>";
$tabla = $tabla."<table class=\"table table-bordered table-hover\">
<tr class=\"success\">
<td>No</td>
<td>Elementos</td>
<td>Acciones</td>
</tr>";
$query=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = '$id'");
while($res = $query->fetch())
{
	$tabla = $tabla."<tr>
	<td style='width:10%;'>".$count."</td>
	<td style='width:50%;'>".$res[2]."</td>
	<td style='width:15%;'>
	<a href='mod_detalle.php?id=$res[0]&nombre=$titulo[1]'>Modificar</a><br>
	<a onclick=\"javascript:if(window.confirm('¿Desea eliminar este parametro'))
	{location.replace('admin.php?action=elimin&id=$res[0]');}\">Eliminar</a>
	</td>
	</tr>";
	$count++;
}
$tabla = $tabla." </table>";
echo $tabla;
?>
