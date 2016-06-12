 <?php
require("header.php");
require("conexion.php");
?>		
<div>
<br>
<script type="text/javascript">
function llenar(serc)
{
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
	}
}
</script>
	    <form method="GET" id="formulario" >
	    	<table>
			    <tr>
			    	<td>
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
				</tr>
			 </table>
			 </form>
		</div>
<?php

     if(isset($_GET["action"]))
     {
		if($_GET["action"]== "elimin")
		{
			$elim = $conexion->query("DELETE FROM detalle_parametro WHERE id='$_GET[id]'");
		}
	}
echo"<div id=\"append\">
	
	</div></div>";
require("fotter.php");
?>
