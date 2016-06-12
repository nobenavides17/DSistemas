<?php 
require("header.php");
require("conexion.php");
if(isset($_GET["id"]))
{
$query0 = $conexion->query("SELECT detalle FROM detalle_parametro WHERE id = '$_GET[id]'");
$query00 = $query0->fetch();
$id = $_GET["id2"];
}
?>
<div>
	<h4>Modificar Descripcion de parametro</h4>
	<table style="width:70%;">		
	<form method="POST">
	<tr>
	<tr>
		<td><label style="font-weight:bold; font-size:15px;">Parametro: <?php if(isset($_GET["nombre"])) echo $_GET["nombre"]; ?></label></td>
	</tr>
		<td>
			<input type="text" name="nombre" class="form-control" required  <?php echo "value='$query00[0]'"?> style="width:90%;">
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
	$query=$conexion->query("UPDATE detalle_parametro SET detalle = '$_POST[nombre]' WHERE id = '$id'");
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
