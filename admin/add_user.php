<?php 
require("header.php");
require("conexion.php");
?>
<div>
	<h4>Nuevo Usuario</h4>
	<table>		
	<form method="POST">
	<tr>
		<td>
			<input type="text" name="nombre" class="form-control" required  placeholder="Nombre" >
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="usuario" class="form-control" required  placeholder="Usuario" >
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
	$query=$conexion->query("INSERT INTO usuario(id, nombre,usuario,password) VALUES (NULL, '$_POST[nombre]',
		'$_POST[usuario]', '$_POST[clave]')");
	if($query)
	{
		$log->insert("Usuario ".$_SESSION["log"]." ingreso un nuevo usuario: ".$_POST['nombre']." -> ".$_POST['usuario']."", false, false, false);	
		echo "<script>location.replace('admin_user.php');</script>";
	}
	else
	{
		echo mysql_error();//"<script>alert('Error al insertar');</script>";
	}
}
require("footer.php");
?>
