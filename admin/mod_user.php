<?php 
require("header.php");
require("conexion.php");
if(isset($_GET["id"]))
{
$id=$_GET["id"];
$query0 = $conexion->query("SELECT * FROM usuario WHERE id='$id'");
$valor = $query0->fetch();
}
?>
<div>
	<h4>Modificar Usuario</h4>
	<table>		
	<form method="POST">
	<tr>
		<td>
			<input type="text" name="nombre" class="form-control" required  <?php echo "value='$valor[1]'";?> >
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="usuario" class="form-control" required  <?php echo "value='$valor[2]'";?> >
		</td>
	</tr>
	<tr>
		<td>
			<input type="password" name="clave" class="form-control" required  placeholder="Clave" >
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
	$query=$conexion->query("UPDATE usuario SET nombre =  '$_POST[nombre]', usuario = '$_POST[usuario]', password= '$_POST[clave]'
	WHERE id = '$id'");
	if($query)
	{
		echo $log->insert("Usuario ".$_SESSION["log"]." modifico los datos del  usuario ".$valor[2]." a ".$_POST['usuario']."", false, false, false);	
		echo "<script>location.replace('admin_user.php');</script>";
	}
	else
	{
		echo mysql_error();//"<script>alert('Error al insertar');</script>";
	}
}
require("footer.php");
?>
