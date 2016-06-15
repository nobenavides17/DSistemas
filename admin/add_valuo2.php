<?php require("header.php");
include("conexion.php");
$query0=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 25");//estado actual de la construccion
$query1=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 26");//estado de acabados
$query2=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 27");//mantenimiento de entornos
$query3=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 28");//clasificacion de la estructura
$query4=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 29");//delimitacion de lindero
$query5=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 30");//cielo falso
$query6=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 31");//puertas
$query7=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 32");//ventanas
$query8=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 33");//pisos
$query9=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 34");//defensas
$query10=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 35");//areas recubiertas
$query11=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 36");//pantri
$query12=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 37");//sistema hidraulico de ap
$query13=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 38");//sistema electrico
$query14=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 39");//pozo
$query15=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 40");//muros de contencion
$query16=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 41");//entorno ecologico
$query17=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 42");//riesgos naturales al entorno del inmueble valuado
$query18=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 43");//contaminacion ambiental orservada
$query19=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 44");//tipo de ubicacion
$query20_1=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 45");//equipamiento1
$query20_2=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 45");//equipamiento2
$query20_3=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 45");//equipamiento3
$query20_4=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 45");//equipamiento4
$query21_1=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 46");//riesgos fundamentados
$query21_2=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 46");//riesgos fundamentados
?>

	<div id='contenedor'>
		<fieldset>
			<legend>Estado de Conservacion</legend>
			<table class='informacion'>
				<tr>
					<td> <label style='margin-left:1%;' for='NumNC'>Numero de Niveles de Construccion:</label><br></td>
				</tr>
				<tr>
					<td>
					<label for='EstadoActual' style='margin-left:2%;'>a)Estado Actual de la Construccion:</label>
					</td>
				</tr>
				<tr>
					<td style=' width:80%;'>
						<select name='NumNC1' style='margin-left:3%; width:60%;'>
							<option>seleccione</option>
							<?php while($res = $query0->fetch()){echo "<option>".$res[2]."</option>";}?>
						</select><br><br>
					</td>
				</tr>
				<tr>
					<td>
					<label for='EstadoA' style='margin-left:2%;'>b)Estado de Acabados:</label>
					</td>
				</tr>
				<tr>
					<td style=' width:80%;'><select name='NumNC2'  style='margin-left:3%; width:60%;'>
						<option>seleccione</option>
						<?php while($res1 = $query1->fetch()){echo "<option>".$res1[2]."</option>";}?>
					</select><br><br></td>
				</tr>
				<tr>
					<td>
						<label for='Mantenimiento' style='margin-left:2%;'>c)Mantenimiento del Entorno:</label>
					</td>	
				</tr>
				<tr>
					<td style=' width:80%;'>
						<select name='NumNC3' style='margin-left:3%; width:60%;'>
							<option>seleccione</option>
							<?php while($res2 = $query2->fetch()){echo "<option>".$res2[2]."</option>";}?>
						</select><br><br>
					</td>
				</tr>
				<tr>
					<td><label for='clasificacion' style='margin-left:2%;'>d)Clasificacion de la Infraestructura:</label></td>	
				</tr>
				<tr>
					<td style=' width:80%;'>
						<select name='NumNC4' style='margin-left:3%; width:60%;'>
							<option>seleccione</option>
							<?php while($res3 = $query3->fetch()){echo "<option>".$res3[2]."</option>";}?>
						</select><br><br>
					</td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>Ambientes de la Edificacion</legend>
				<table class='informacion' style='width:100%;'>
					<tr>
						<td><textarea rows='5' style='width:80%;' name='AmbienteE'></textarea></td></tr>
					<tr>
				</table>
		</fieldset>
		 <fieldset>
			<legend>Accesorios Exixtentes</legend>
				<table class='informacion'>
					<tr>
						<td style='width:50%;'>
							<select name='AccesoriosE1'style='width:100%;'>
								<option>seleccione</option>
								<?php while($res4 = $query4->fetch()){echo "<option>".$res4[2]."</option>";}?>
							</select><br><br>
						</td>
						<td style=' width:50%;'>
							<select name='AccesoriosE2' style='width:100%;'>
							<option>seleccione</option>
							<?php while($res5 = $query5->fetch()){echo "<option>".$res5[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:50%;'>
							<select name='AccesoriosE3' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res6 = $query6->fetch()){echo "<option>".$res6[2]."</option>";}?>
							</select><br><br>
						</td>
						<td style='width:50%;'>
							<select name='AccesoriosE4' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res7 = $query7->fetch()){echo "<option>".$res7[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:50%;'>
							<select name='AccesoriosE5' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res8 = $query8->fetch()){echo "<option>".$res8[2]."</option>";}?>
							</select><br><br>
						</td>
						<td style='width:50%;'>
							<select name='AccesoriosE6' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res9 = $query9->fetch()){echo "<option>".$res9[2]."</option>";}?>		
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:50%;'>
							<select name='AccesoriosE7' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res10 = $query10->fetch()){echo "<option>".$res10[2]."</option>";}?>
							</select><br><br>
						</td>
						<td style='width:50%;'>
							<select name='AccesoriosE8' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res11 = $query11->fetch()){echo "<option>".$res11[2]."</option>";}?>	
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:50%;'>
							<select name='AccesoriosE9' style='width:100%;'>				
								<option>seleccione</option>
								<?php while($res12 = $query12->fetch()){echo "<option>".$res12[2]."</option>";}?>
							</select><br><br>
						</td>
						<td style='width:50%;'>
							<select name='AccesoriosE10' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res13 = $query13->fetch()){echo "<option>".$res13[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:50%;'>
							<select name='AccesoriosE11' style='width:100%;'>				
								<option>seleccione</option>
								<?php while($res14 = $query14->fetch()){echo "<option>".$res14[2]."</option>";}?>
							</select><br><br>
						</td>
						<td style='width:50%;'>
							<select name='AccesoriosE12' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res15 = $query15->fetch()){echo "<option>".$res15[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
				</table>
		</fieldset>
		<fieldset>
			<legend>iii)Condiciones de descarga y tratamiento de aguas negras, sevidas, pluviales o residuos industriales:</legend>
				<table class='informacion' style='width:100%;'>
					<tr>
						<td><textarea rows='5'style='width:80%;' name='condicionesDesc'></textarea></td></tr>
					<tr>
				</table>
		</fieldset>
		<fieldset>
			<legend>d)Descripcion del Entorno Ecologico:</legend>
				<table class='informacion'>
					<tr>
						<td style='width:100%;' colspan='9'>
							<select name='DescEntE1' style='width:70%;'>
								<option>Seleccione</option>
								<?php while($res16 = $query16->fetch()){echo "<option>".$res16[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:100%;' colspan='9'>
							<select id="opciones"  style='width:70%;'>
								<option>Seleccione</option>
								<?php while($res17 = $query17->fetch()){echo "<option>".$res17[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:100%;' colspan='9'>
							<select id="opciones"  style='width:70%;'>
								<option>Seleccione</option>
								<?php while($res18 = $query18->fetch()){echo "<option>".$res18[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:100%;' colspan='9'>
							<select id="opciones"  style='width:70%;'>
								<option>seleccione</option>
								<?php while($res19 = $query19->fetch()){echo "<option>".$res19[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:40px;' colspan='9' > 
							<label for='Equipamento'>Equipamiento: </label>
						</td>
					</tr>
					<tr rowspan='2'>
						
						<td style='width:30%;'>
							<select id='equipamento1'  style='width:100%;'>
								<option>Seleccione</option>
								<?php while($res20_1 = $query20_1->fetch()){echo "<option>".$res20_1[2]."</option>";}?>
							</select>
						</td>
						<td >
							<label style='padding-right:10px;padding-left:10px'>a</label>
						</td>
						<td style='width:8%;'>
							<input type='text' style='width:40px;'>
						</td>
						<td style='width:10%;'>
							<label>kms</label>
						</td>
						
						<td style='width:30%;'>
							<select id='equipamento2'  style='width:100%;'>
								<option>Seleccione</option>
								<?php while($res20_2 = $query20_2->fetch()){echo "<option>".$res20_2[2]."</option>";}?>
							</select>
						</td>
						<td >
							<label style='padding-right:10px;padding-left:10px'>a</label>
						</td>
						<td style='width:8%;'>
							<input type='text' style='width:40px;'>
						</td>
						<td style='width:10%;'>
							<label>kms</label>
						</td>
					</tr>
                    <tr rowspan='2'>
						
						<td style='width:30%;'>
							<select id='equipamento3'  style='width:100%;'>
								<option>Seleccione</option>
								<?php while($res20_3 = $query20_3->fetch()){echo "<option>".$res20_3[2]."</option>";}?>
							</select>
						</td>
						<td >
							<label style='padding-right:10px;padding-left:10px'>a</label>
						</td>
						<td style='width:8%;'>
							<input type='text' style='width:40px;'>
						</td>
						<td style='width:10%;'>
							<label>kms</label>
						</td>
						
						<td style='width:30%;'>
							<select id='equipamento4'  style='width:100%;'>
								<option>Seleccione</option>
								<?php while($res20_4 = $query20_4->fetch()){echo "<option>".$res20_4[2]."</option>";}?>
							</select>
						</td>
						<td >
							<label style='padding-right:10px;padding-left:10px'>a</label>
						</td>
						<td style='width:8%;'>
							<input type='text' style='width:40px;'>
						</td>
						<td style='width:10%;'>
							<label>kms</label>
						</td>
					</tr>
				</table>
		</fieldset>
		<fieldset>
			<legend>e) Riesgos Fundamentados:</legend>
				<table style='width:100%;'>
					<tr>
						<td>
							<select id="opciones"  style='width:80%;'>
								<option>Seleccione</option>
								<?php while($res21_1 = $query21_1->fetch()){echo "<option>".$res21_1[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td>
							<select id="opciones" style='width:80%;'>
								<option>Seleccione</option>
								<?php while($res21_2 = $query21_2->fetch()){echo "<option>".$res21_2[2]."</option>";}?>
							</select><br><br>	
						</td>
					</tr>
					<tr>
						<td>
							<textarea rows="7" style='width:80%;'> </textarea><br><br>
						</td>
					</tr>
					<tr>
						<td>
							<input type='button' value='Siguiente' class="boton" onClick="location.href='comparativo.html'" />
						</td>
					</tr>
				</table>
		</fieldset>
	</div>
<?php require("footer.php");  ?>
