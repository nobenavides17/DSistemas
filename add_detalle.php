<?php 
require("header.php");
require("conexion.php");
if(isset($_GET["id"]))
{
	$id = $_GET["id"];
}
?>
<div>
	<h4>Nueva descripcion de parametro</h4>
	<table style="width:70%;">		
	<form method="POST">
	<tr>
		<td><label style="font-weight:bold; font-size:15px;">Parametro: <?php if(isset($_GET["nombre"])) echo $_GET["nombre"]; ?></label></td>
	</tr>
	<tr>
		<td>
			<input type="text" name="nombre" class="form-control" required  placeholder="Descripcion del parametro" style="width:90%;">
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
	$query=$conexion->query("INSERT INTO detalle_parametro(id, id_parametro, detalle) VALUES (NULL, '$id','$_POST[nombre]')");
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
