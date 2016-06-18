<?php
require("header.php");
require("conexion.php");
?>		
<div>
<br>
<script type="text/javascript">
function llenar(serc)
{
	var td = document.getElementById("boton");
	var td2 = document.getElementById("boton2");
	var boton = "";
	var boton2 = "";
	if(serc != "0" || parseInt(serc) != 0)
	{
		var boton = "<a  href='mod_parametro.php?id="+serc+"' class=\"btn btn-primary\" style=\"margin-top:2%; margin-bottom:2%; margin-left:-200%;\"> Modificar Parametro</a>";
		var boton2 = "<a onclick=\"javascript:if(window.confirm('¿Desea eliminar este parametro')){location.replace('admin.php?action=del&id="+serc+"');}\" class=\"btn btn-primary\" style=\"margin-top:2%; margin-bottom:2%; margin-left:-200%;\">Eliminar Parametro</a>";
		
	}
	if (serc == "")
	{
	}
	else
	{
		if (window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();
		}
		else 
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function()
		{
			if (xmlhttp.readyState ==4 & xmlhttp.status == 200)
			{
				document.getElementById("append").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET", "cargar_parametros.php?id="+serc,true);
		xmlhttp.send();
		td.innerHTML = boton;
		td2.innerHTML = boton2;
	
	}
}
</script>
	    <form method="GET" id="formulario" >
	    	<table>
			    <tr>
			    	<td colsapn="4">
						<label>Parametro a Gestionar</label>
			    		<select name="q" class="form-control"  style="width:470px" onchange="llenar(this.value)">
						<option value='0'>Seleccione</option>
						<?php
						$query = $conexion->query("SELECT * FROM parametro");
						while($sel = $query->fetch())
						{
							echo "<option value='".$sel[0]."'>".$sel[1]."</option>";
						}
						?>
						</select>
				    </td>
				</tr>
				<tr>
					<td><a href="add_parametro.php" class="btn btn-primary" style="margin-top:2%; margin-bottom:2%;">Nuevo Parametro</a></td>
					<td id="boton"></td>
					<td id="boton2"></td>
				</tr>
			 </table>
			 </form>
		</div>
<?php

     if(isset($_GET["action"]))
     {
		if($_GET["action"]== "elimin")
		{
			$slect = $conexion->query("SELECT * FROM detalle_parametro WHERE id='$_GET[id]'");
			$nomb = $slect->fetch();
			$log->backup($user, $pass, $db);
			$elim = $conexion->query("DELETE FROM detalle_parametro WHERE id='$_GET[id]'");
			if($elim)
			{
			    $log->insert("Usuario ".$_SESSION["log"]." elimino el detalle  ".$nomb["detalle"]."", false, false, false);	
		
				}
			
		}
		if($_GET["action"]== "del")
		{
			$slect = $conexion->query("SELECT * FROM parametro WHERE id='$_GET[id]'");
			$nomb = $slect->fetch();
			$log->backup($user, $pass, $db);
			$elim = $conexion->query("DELETE FROM parametro WHERE id='$_GET[id]'");
			if($elim)
			{
				$log->insert("Usuario ".$_SESSION["log"]." elimino el parametro  ".$nomb["nombre"]."", false, false, false);
				echo "<script>location.replace('admin.php');</script>";
		}
		}
	}
echo"<div id=\"append\">
	
	</div></div>";
require("footer.php");
?>
