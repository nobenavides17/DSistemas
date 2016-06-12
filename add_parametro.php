<?php 
require("header.php");
require("conexion.php");
?>
<div>
	<h4>Nuevo Parametro</h4>
	<table style="width:70%;">		
	<form method="POST">
	<tr>
		<td>
			<input type="text" name="nombre" class="form-control" required  placeholder="Nombre del parametro" style="width:90%;">
		</td>
	</tr>
	<tr>
		<td>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</td>
	</tr>
</form>
</table>
</div>
<?php 
if($_POST)
{
	$query=$conexion->query("INSERT INTO parametro (id, nombre) VALUES (NULL, '$_POST[nombre]')");
	if($query)
	{
		echo "<script>location.replace('admin.php');</script>";
	}
	else
	{
		echo mysql_error();//"<script>alert('Error al insertar');</script>";
	}
}
require("fotter.php");
?>
