<?php 
require("header.php");
require("conexion.php");
$query1=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 1");//financiera
$query2=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 2");//tipos de propiedades
$query3=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 3");//derechos
$query4=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 4");//finalidades del valuo
$query5=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 5");//departamentos
$query6=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 6");//municipios
$query7=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 7");//tipos de recubrimiento
$query8=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 8");//delimitaciones de los recubrimientos
$query9=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 9");//aguas negras
$query10=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 10");//Recubrimiento que presenta la via de acceso
$query11=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 11");//Delimitacion de la via de accesos
$query12=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 12");//Acera peatonal
$query13=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 13");//Agua potable
$query14=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 14");//Energia electrica
$query15=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 15");//Telefonia
$query16=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 16");//Topografia del sector
$query17=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 17");//Topografia del Terreno
$query18=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 18");//Tipo de via de acceso
$query19=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 19");//Ubicacion a escala regional
$query20=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 20");//Vocacion del Terreno
$query21=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 21");//Morfologia del Inmueble
$query22=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 22");//Uso actual del inmueble
$query23=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 23");//Seguridad del entorno
$query24=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 24");//Tipo de Suelo
?>

	<div id='contenedor'>
		<fieldset>
		<legend>1) Informacion de caracter General</legend>
		<table class='informacion'>
		<tr>
			<td colspan='3'></td>
			<td>
				<select name='finaciera' id='cero'>
					<option value=''>Seleccione</option>
					<?php while($res1 = $query1->fetch()){echo "<option>".$res1[2]."</option>";}?>						
				</select>
			</td>
		</tr>
		<tr>
			<td><label for='propietario'>a) Propietario del Inmueble</label></td>
			<td colspan='3' style><input type='text' style='width:60%;' name='propietario' placeholder='Propietario del Inmueble'></td>
		</tr>
		<tr>
			<td><label for='ndocuemnto'>Numero de Documento</label></td>
			<td><input type='text' name='ndocuemnto' placeholder='Numero de Documento'></td>
			<td><label for='derecho'>Derecho</label></td>
			<td>
				<select name='derecho'>
					<option value=''>Seleccione</option>
					<?php while($res3 = $query3->fetch()){echo "<option>".$res3[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for='tipo_propiedad'>Tipo de Propiedad</label></td>
			<td>
				<select name='tipo_propiedad'>
					<option value=''>Seleccione</option>
					<?php while($res2 = $query2->fetch()){echo "<option>".$res2[2]."</option>";}?>
				</select>
			</td>
			<td><label for='finalidad'>Finalidad del Valuo</label></td>
			<td>
				<select name='finalidad'>
					<option value=''>Seleccione</option>
					<?php while($res4 = $query4->fetch()){echo "<option>".$res4[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for='fecha_valuo'>b) Fecha del Valuo</label></td>
			<td><input type='date' name='fecha_valuo' placeholder='00/00/0000'></td>
			<td><label for='ipc'>IPC</label></td>
			<td><input type='text' name='ipc' placeholder='0.0'></td>
		</tr>
		</table>
		<table class='informacion'>
		<tr>
			<td style='width:75%;'><label>c) Valor del bien con base en las condiciones del mismo en la fecha del valuo</label></td>
			<td><label>$0.0</label></td>
		</tr>
		<tr>
			<td style='width:75%;'><label>d) Valor Comercial, Valuo por el metodo Comparativo de Mercado</label></td>
			<td><label>$0.0</label></td>
		</tr>
		<tr>
			<td style='width:75%;'><label>e) Valor de Reposicion a partir del metodo de costo</label></td>
			<td><label>$0.0</label></td>
		</tr>
		</table>
		<table class='informacion'>
		<tr>
			<td style='width:7%;'><label>f) Valor del Terreno</label></td>
			<td style='width:8%;'><label>$0.0</label></td>
			<td style='width:7%;'><label>Valor de la Construccion</label></td>
			<td style='width:8%;'><label>$0.0</label></td>
		</tr>
		</table>
		</fieldset>
		<fieldset>
		<legend>2) Informacion especifica para terrenos y construcciones</legend>
		<table class='informacion'>
		<tr>
			<td><label>a) Descripcion del entorno</label></td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>i) Direccion y Ubicacion exacta del Inmueble</label></td>
		</tr>
		<tr>
			<td style='width:25%;'><label for='ubicacion' style='margin-left:40%;'>Ubicacion</label></td>	
			<td colspan='3' style><input type='text' style='width:70%;' name='ubicacion' placeholder='Ubicacion del Inmueble'></td>
		</tr>
		<tr>
			<td style='width:10%;'><label for='departamento' style='margin-left:40%;'>Departamento</label></td>
			<td style='width:30%;'>
				<select name='departamento'>
					<option value=''>Seleccione</option>
					<?php while($res5 = $query5->fetch()){echo "<option>".$res5[2]."</option>";}?>
				</select>
			</td>
			<td style='width:10%;'><label for='municipio'>Municipio</label></td>
			<td style='width:50%;'>
				<select name='municipio'>
					<option value=''>Seleccione</option>
					<?php while($res6 = $query6->fetch()){echo "<option>".$res6[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>ii) Condiciones y factibilidad de las vias de acceso</label></td>
		</tr>
		<tr>
			<td colspan='4'>
				<label style='margin-left:10%;'>a) Recubrimiento que presenta la via de acceso</label>
				<select name='condicion1' style='margin-left:12%; width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res10 = $query10->fetch()){echo "<option>".$res10[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='4'>
				<label style='margin-left:10%;'>a) Delimitacion de la via de acceso</label>
				<select name='condicion2' style='margin-left:12%; width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res11 = $query11->fetch()){echo "<option>".$res11[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='4'>
				<label style='margin-left:10%;'>c) Acera peatonal</label><br>
				<select name='condicion3' style='margin-left:12%; width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res12 = $query12->fetch()){echo "<option>".$res12[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>iii) Servicios basicos publicos y privados</label></td>
		</tr>
		<tr>
			<td colspan='2'>
				<label style='margin-left:18%;'>a) Agua potable</label>
				<select name='servicios1' style='margin-left:18%; width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res13 = $query13->fetch()){echo "<option>".$res13[2]."</option>";}?>
				</select>
			</td>
			<td colspan='2'>
				<label>c) Energia electrica</label>
				<select name='servicios2' style='width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res14 = $query14->fetch()){echo "<option>".$res14[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<label style='margin-left:18%;'>b) Aguas negras</label>
				<select name='servicios3' style='margin-left:18%; width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res9 = $query9->fetch()){echo "<option>".$res9[2]."</option>";}?>
				</select>
			</td>
			<td colspan='2'>
				<label>d) Telefonia</label><br>
				<select name='servicios4' style='width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res15 = $query15->fetch()){echo "<option>".$res15[2]."</option>";}?>
				</select>
			</td>
		</tr>
		</table>
		<table class='informacion'>
		<tr>
			<td colspan='3'><label>b) Descripcion del terreno</label></td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:14%;'>i) Ubicacion Contextual</label></td>
		</tr>
		<tr>
			<td colspan='2' style='width:50%;'>
				<label style='margin-left:23%;'>Topografia del sector</label>
				<select name='ucontex1' style='margin-left:23%;'>
					<option value=''>Seleccione</option>
					<?php while($res16 = $query16->fetch()){echo "<option>".$res16[2]."</option>";}?>
				</select>
			</td>
			<td colspan='2' style='width:50%;'>
				<label style='margin-left:6%;'>Topografia del Terreno</label>
				<select name='ucontex2' style='margin-left:6%;'>
					<option value=''>Seleccione</option>
					<?php while($res17 = $query17->fetch()){echo "<option>".$res17[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2' style='width:50%;'>
				<label style='margin-left:23%;'>Tipo de via de acceso</label>
				<select name='ucontex3' style='margin-left:23%;'>
					<option value=''>Seleccione</option>
					<?php while($res18 = $query18->fetch()){echo "<option>".$res18[2]."</option>";}?>
				</select>
			</td>
			<td>
				<label style='margin-left:15%;'>Areas Planas</label>
				<input type='text' name='areasp' style='margin-left:21%; width:12%;' placeholder='0%'>
			</td>
			<td>
				<label>Areas Onduladas</label>
				<input type='text' name='areaso' style='margin-left:6%; width:12%;' placeholder='0%'>
			</td>
		</tr>
		<tr>
			<td colspan='2' style='width:50%;'>
				<label style='margin-left:23%;'>Ubicacion a escala regional</label>
				<select name='ucontex4' style='margin-left:23%;'>
					<option value=''>Seleccione</option>
					<?php while($res19 = $query19->fetch()){echo "<option>".$res19[2]."</option>";}?>
				</select>
			</td>
			<td>
				<label style='margin-left:15%;'>Areas Semiplanas
				</label><input type='text' name='areass' style='margin-left:22%; width:12%;' placeholder='0%'>
			</td>
			<td>
				<label>Areas Quebradas</label>
				<input type='text' name='areasq' style='margin-left:5%; width:12%;' placeholder='0%'>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>ii) Vocacion del Terreno</label></td>
		</tr>
				<tr>
			<td colspan='2'>
				<label style='margin-left:23%;'>Vocacion del Terreno</label>
				<select name='vocacion1' style='margin-left:23%; width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res20 = $query20->fetch()){echo "<option>".$res20[2]."</option>";}?>
				</select>
			</td>
			<td colspan='2'>
				<label>Morfologia del Inmueble</label>
				<select name='vacacion2' style='width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res21 = $query21->fetch()){echo "<option>".$res21[2]."</option>";}?></select>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<label style='margin-left:23%;'>Uso actual del inmueble</label>
				<select name='vocacion3' style='margin-left:23%; width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res22 = $query22->fetch()){echo "<option>".$res22[2]."</option>";}?>
				</select>
			</td>
			<td colspan='2'>
				<label>Seguridad del entorno</label>
				<select name='vocacion4' style='width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res23 = $query23->fetch()){echo "<option>".$res23[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>iii) Tipo de Suelo</label></td>
		</tr>
		<tr>
			<td colspan='3'>
				<select name='tiposuelo' style='margin-left:15%; width:74%;'>
					<option value=''>Seleccione</option>
					<?php while($res24 = $query24->fetch()){echo "<option>".$res24[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>iv) Descripcion de la vegetacion existente</label></td>
		</tr>
		<tr>
			<td colspan='4'>
				<textarea rows='2' cols='100' style='margin-left:11.5%;' name='vegetacion1'></textarea>
			</td>
		</tr>
		<tr>
			<td colspan='3'>
				<label style='margin-left:15%;'>Plagas y/o enfermedades de la vegetacion</label>
				<textarea rows='2' cols='100' style='margin-left:15%;' name='vegetacion2'></textarea>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>iv) Servidumbres y otros relevantes</label></td>
		</tr>
		<tr>
			<td colspan='4'>
				<textarea rows='2' cols='100' style='margin-left:11.5%;' name='otros'></textarea>
			</td>
		</tr>
		</table>
		</fieldset>
		<fieldset>
		<table class='informacion'>
		<tr>
			<td colspan='7'><label>c) Descripcion de la Infraestructura Fisica del Inmueble: </label></td>
		</tr>
		<tr>
			<td colspan='7'><label style='margin-left:5%;'>i) Areas Totales Comunes y Utiles</label></td>
		</tr>
		<tr>
			<td>
				<label for='AreaT'><b>Area Total:</b></label>
			
			</td>
			<td colspan='5'>
				<label for='DimT'><b>Dimensiones del Terreno(Mts):</b></label>
				
			</td>
			<td></td>
			<td></td>
			<td>
				<label for='ColindI'><b>Colindantes del Inmueble</b></label>
			</td>
		</tr>
		<tr>
			
			<td>
				<input type='text' style='width:60%;' name='area total'>
			</td>
			<td>
				<label for='sdp'>Segun documento de propiedad</label>
				</td>
				<td></td>
		</tr>
		<tr>
			<td></td>
<td><label>    </label>
<label><b>Lindero Norte</b></label></td>
<td><label>1</label>
<label>Tramo</label></td>
<td><label>0.0</label>
<label>ml</label></td>
<td><input type='text' style='width:60%;'></td>
</tr>

<tr>
			<td><b>Area S/Inspecion:</b>   </td>
<td><label></label>
<label><b>Lindero Sur</b></label></td>
<td><label>1</label>
<label>Tramo</label></td>
<td><label>0.0</label>
<label>ml</label></td>
<td><textarea rows='1' cols='25'></textarea></td>
</tr>

<tr>
			<td><input type='text' style='width:60%;' name='area total'></td>
<td><label>  </label>
<label><b>Lindero Oriente</b></label></td>
<td><label>1</label>
<label>Tramo</label></td>
<td><label>0.0</label>
<label>ml</label></td>
<td><textarea rows='1' cols='25'></textarea></td>
</tr>

<tr>
			<td></td>
<td><label>    </label>
<label><b>Lindero Poniente</b></label></td>
<td><label>1</label>
<label>Tramo</label></td>
<td><label>0.0</label>
<label>ml</label></td>
<td><textarea rows='1' cols='25'></textarea></td>
</tr>

<tr>
			
			<td>
				<label><b>Area Util:</b></label>
			</td>
			<td>
				<label for='sdp'>Segun Inspeccion:</label>
				</td>
				<td></td>
		</tr>
		<tr>
			<td><input type='text' style='width:60%;' name='area total'></td>
<td><label>    </label>
<label><b>Lindero Norte</b></label></td>
<td><label>1</label>
<label>Tramo</label></td>
<td><label>0.0</label>
<label>ml</label></td>
<td><textarea rows='1' cols='25'></textarea></td>
</tr>

<tr>
			<td></td>
<td><label>    </label>
<label><b>Lindero Sur</b></label></td>
<td><label>1</label>
<label>Tramo</label></td>
<td><label>0.0</label>
<label>ml</label></td>
<td><textarea rows='1' cols='25'></textarea></td>
</tr>

<tr>
			<td></td>
<td><label>    </label>
<label><b>Lindero Oriente</b></label></td>
<td><label>1</label>
<label>Tramo</label></td>
<td><label></label>
<label>0.0</label>
<label>ml</label>
</td>
<td><textarea rows='1' cols='25'></textarea></td>
</tr>

<tr>
			<td></td>
<td><label>    </label>
<label><b>Lindero Poniente</b></label></td>
<td><label>1</label>
<label>Tramo</label></td>
<td><label>0.0</label>
<label>ml</label></td>
<td><textarea rows='1' cols='25'></textarea><br><br></td>
</tr>
<tr>
<td>

	<input type='button' value='Siguiente' class="boton" onClick="location.href='formulario2.php'" />



</td>
</tr>

		</table>
		</fieldset>
		
	</div>
<?php require("footer.php");  ?>
