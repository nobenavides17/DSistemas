<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body style="background-color: #C0C0C0">

<div style="margin-left:40%; margin-top: 6%; width: 600px; height: 500px;">
<h3>Iniciar Sesion</h3>
<form method="POST">
	<input type="text" name="user" class="form-control" placeholder="Nombre de Usuario" required=""><br>
	<input type="password" name="clave" class="form-control" placeholder="Clave de acceso" required=""><br>
	<button type="submit" class="btn btn-primary">Iniciar Sesion</button>
</form>
</div>
</body>
</html>
<?php
if($_POST)
{
	require("conexion.php");
	session_start();	
	$quer0 = $conexion->query("SELECT * FROM usuario WHERE usuario ='$_POST[user]'");
	$query=$quer0->fetch();
	if($query[0] == "")
	{
		echo "<script>alert('No existe el usuario ingresado');</script>";
	}
	else
	{
		if($_POST["clave"] == $query[3])
		{
			if($_POST["user"]==$query[2])
			{
				$es="si";
			}
			else
			{
				$es="";
			}
			$_SESSION["user"] = $query[1];
			echo "<script>location.replace('index.php');</script>";
		}
		else
		{
			echo "<script>alert('La clave de acceso es incorrecta');</script>";
		}
	}
}
?>
