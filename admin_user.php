 <?php
require("header.php");
require("conexion.php");
?>		
	    <div><br>
	    <form method="GET" id="formulario" >
	    	<table>
			    <tr>
			    	<td>
			    		<input id="q" name="q" class="form-control" placeholder="Ingrese consulta por nombre de usuario" style="width:470px" value="<?php if(isset($_GET["q"]))echo $_GET["q"];?>">
				    </td>
				    <td>
			    		<button type="submit" class="btn btn-primary " style="margin-left:25%;"> Buscar</button>
			    	</td>
				</tr>
				<tr>
					<td><a href="add_user.php" class="btn btn-primary" style="margin-top:5%;">Agregar Usuario</a></td>
				</tr>
			 </table></form>
			</div>
<?php

     if(isset($_GET["action"])){
	 if($_GET["action"]== "elimin"){
		$elim = $conexion->query("DELETE FROM usuario WHERE id ='$_GET[id]'");
	}
	}
	if(isset($_GET["q"])){
	$q = $_GET["q"];
	$query = $conexion->query("SELECT * FROM usuario WHERE nombre LIKE '%$q%' OR usuario LIKE '%$q%'");}
	else
	{
	$q="";
	$query = $conexion->query("SELECT * FROM usuario");
	}
	if(!@$query->rowCount()){
		echo "<br><div>
		       <strong></strong><br>
		       No se produjeron resultados.
		      </div>";
	}else{
		$nrows = $query->rowCount();
		
		if (isset($_GET["info"])){
			if ($_GET["info"] == "add")
			    echo "<br><div>
			     <strong>Exito</strong><br>
			    Registro agregado.
			   </div>";
				
			if ($_GET["info"] == "modificar")
				echo "<br><div>
			      <strong>Exito</strong><br>
			    Registro Modificado.
			   </div>";
			}
			else{
		       echo "<br><div>
                           Registros encontrados:
                       <span>$nrows</span>
                       </div>";
			
	echo "<p></p>
         <div>
		<table class=\"table table-bordered table-hover\">
			<tr class=\"success\">
			<td>Id Usuario</td>
			<td>Nombre</td>
			<td>Usuario</td>
			<td>Acciones</td>
		</tr>";	
		while($data = $query->fetch()){
			echo "<tr>
				<td>$data[0]</td>
				<td>$data[1]</td>
				<td>$data[2]</td>
				<td><a href='mod_user.php?id=$data[0]'>Modificar</a><br>
				<a onclick=\"javascript:if(window.confirm('¿Desea eliminar este usuario'))
				{location.replace('admin_user.php?action=elimin&id=$data[0]');}\">Eliminar</a>
				</td>
				</tr>
				";
			}
			echo "</table>";
		}
	}
echo"</div>";
require("footer.php");
?>
