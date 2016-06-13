<?php 
require("header.php");
require("conexion.php");
if(isset($_GET["id"]))
{
$id=$_GET["id"];
$query0 = $conexion->query("SELECT * FROM parametro WHERE id='$id'");
$valor = $query0->fetch();
}
?>
<div>
	<h4>Modificar Parametro</h4>
	<table style="width:70%;">		
	<form method="POST">
	<tr>
		<td>
			<input type="text" name="nombre" class="form-control" required  <?php echo "value='$valor[1]'";?> style="width:90%;">
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
	$query=$conexion->query("UPDATE parametro SET nombre = '$_POST[nombre]' WHERE id='$id'");
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
