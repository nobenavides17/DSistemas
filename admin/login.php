<!DOCTYPE html>
<html lang="es">
	<head>
		<meta name="description" content="descripcion de mi web">
		<meta name="keyswords" content="HTML,CSS.XML,JavaScript">
		<meta charset="utf-8">
		<link rel="StyleSheet" href="../css/estilo.css" type="text/css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<title>GAMEZ S.A. de C.V.</title>

	</head>
	<body style='background:#3D4048;'>
		<div id="baner" style="margin-top:1%;">
			<img class="logo" src="../img/baner2.png">
			
		</div>
		<div id="menu" style="margin-top:1.5%;">
			<ul id="main-nav" class="clearfix">
				<li><a href="../index.php" style="color:#FFF;">INICIO</a></li>
				<li><a href="../Quienes_somos.php" style="color:#FFF;">QUIENES SOMOS</a></li>
				<li><a href="../Servicios.php" style="color:#FFF;">SERVICIOS</a></li>
			</ul>
		</div>				
<div style="margin-left:40%; margin-top:8%;">
<h3 style="margin-left:-60%; color:#fff;">Iniciar Sesion</h3>
<form method="POST">
	<input type="text" name="user" style="width:40%; height:2%;" class="form-control" placeholder="Nombre de Usuario" required=""><br>
	<input type="password" name="clave" style="width:40%; height:2%;" class="form-control" placeholder="Clave de acceso" required=""><br>
	<button type="submit" class="btn btn-primary" style="width:20%; height:2%; font-weight:bold;">Iniciar Sesion</button>
	<a href="../registro.php" class="btn btn-primary" style="width:20%; height:2%;">Registarse</a>
</form>
</div>
</body>
</html>
<?php
if($_POST)
{
	require("conexion.php");
	include("log.php");
	$log = new Log("log", "log/");
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
			$_SESSION["log"] = $query[2];
		    $log->insert("Usuario ".$query[2]." inicio sesion", false, false, false);
			echo "<script>location.replace('index.php');</script>";
		}
		else
		{
			echo "<script>alert('La clave de acceso es incorrecta');</script>";
		}
	}
}
?>
