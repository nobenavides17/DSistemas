<!DOCTYPE html>
<html lang="es">
	<head>
		<meta name="description" content="descripcion de mi web">
		<meta name="keyswords" content="HTML,CSS.XML,JavaScript">
		<meta name="author" content="Norma Martinez">
		<meta charset="utf-8">
		<meta http.equiv="contet.type" content="text/html; charset=UTF8">
		<link rel="StyleSheet" href="css/estilo.css" type="text/css">
		<title>GAMEZ S.A. de C.V.</title>

	</head>
	<body >
		
		<div id="baner">
			<img class="logo" src="img/baner2.png">
			
		</div>
	
		

		<div id="menu">
			<ul id="main-nav" class="clearfix">
				<li><a href="index.php">INICIO</a></li>
				<li><a href="Quienes_somos.php">QUIENES SOMOS</a></li>
				<li><a href="Servicios.php">SERVICIOS</a></li>
				<li><a href="admin/login.php" class="iniciar">[ INICIAR SESION ]</a></li>		
			</ul>
		</div>	<form>
	 <table align="center" class="reg">
	  <tr>
		  <td>
<fieldset class="registrar">
	<legend>Formulario de Registro</legend>
<table class="informacion">
	<tr>
<td> <label for="grado">Grado Academico</label></td>
<td><select id="grado">
		      <option value="arq">Arq.</option>
              <option value="ing">Ing.</option>
              <option value="lic">Lic.</option>
                <option value="tec">Tec.</option>
          </select> <br><br></td>
</tr>
<td> <label for="postgrado">Post-grado Academico</label></td>
<td><select id="grado">
		      <option value="mae">MAE</option>
              <option value="mbe">MBE</option>
              <option value="med">MEd</option>
               <option value="">-</option>
                
              
              <br><br> </td></select>
</tr>
<tr>
	
<td> <label for="nombre">Nombre</label></td>
<td><input type="text" id="nombre"></td>
</tr>

<tr>
<td><label for="apellido">Apellido</label></td>
<td><input type="text" id="apellido"></td>
</tr>
<tr>
<td><label for="NAutorizacion">Nº de Autorizacion SSP</label></td>
<td><input type="text" id="NAutorizacion"></td>
</tr>

<tr>
<td><label for="correo">Correo Electronico</label></td>
<td><input type="text" id="correo"></td>
</tr>
<tr>
<td><label for="clave">Clave</label></td>
<td><input type="password" size="30" id="clave"></td>
</tr>
<tr>
<td><label for="fecha nac">Fecha de Nacimiento</label></td>
<td><input type="date" id="fecha nac"></td>
</tr>
<tr>
<td> <label for="Sexo">Sexo</label></td>
<td><select id="Sexo">
		      <option value="mujer">mujer</option>
              <option value="hombre">hombre</option></td></select>
</tr>
<tr>
<td>
<input type="submit" value="Registrar" class="boton" id="botton1">
</td>
</tr>

</table>
</fieldset>
</form>

</body>
</html>
