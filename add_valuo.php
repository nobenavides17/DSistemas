<?php require("header.php");?>
	<br>
	<div id='contenedor'>
		<fieldset>
		<legend>1) Informacion de caracater General</legend>
		<table class='informacion'>
		<tr>
			<td colspan='3'></td>
			<td>
				<select style='border: none; box-shadow:0px 1px;' name='finaciera'>
					<option value=''>Seleccione</option>
				</select>
				
			</td>
		</tr>
		<tr>
			<td><label for='propietario'>a) Propietario del Inmueble</label></td>
			<td colspan='3' style><input type='text' style='width:55%; border: none; box-shadow:0px 1px;' name='propietario' placeholder='Nombre del Propietario del Inmueble'></td>
		</tr>
		<tr>
			<td><label for='ndocuemnto'>Numero de Documento</label></td>
			<td><input type='text' name='ndocuemnto' style='border: none; box-shadow:0px 1px;'placeholder='Numero de Documento'></td>
			<td><label for='derecho' style='margin-left:35%;'>Derecho</label></td>
			<td>
				<select style='border: none; box-shadow:0px 1px;' name='derecho'>
					<option value=''>Seleccione</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for='tipo_propiedad'>Tipo de Propiedad</label></td>
			<td>
				<select style='border: none; box-shadow:0px 1px;' name='tipo_propiedad'>
					<option value=''>Seleccione</option>
				</select>
			</td>
			<td><label for='finalidad'  style='margin-left:35%;'>Finalidad <br>del Valuo</label></td>
			<td>
				<select style='border: none; box-shadow:0px 1px;' name='finalidad'>
					<option value=''>Seleccione</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for='fecha_valuo'>b) Fecha del Valuo</label></td>
			<td><input type='text' name='fecha valuo' placeholder='00/00/0000' style='border: none; box-shadow:0px 1px;'></td>
			<td><label for='ipc'>IPC</label></td>
			<td><input type='text' name='ipc' placeholder='0.0' style='border: none; box-shadow:0px 1px;'></td>
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
			<td colspan='3' style><input type='text' style='width:70%; zborder: none; box-shadow:0px 1px;' name='ubicacion' placeholder='Ubicacion del Inmueble'></td>
		</tr>
		<tr>
			<td style='width:10%;'><label for='departamento' style='margin-left:40%;'>Departamento</label></td>
			<td style='width:30%;'>
				<select style='border: none; box-shadow:0px 1px;' name='departamento'>
					<option value=''>Seleccione</option>
				</select>
			</td>
			<td style='width:10%;'><label for='municipio'>Municipio</label></td>
			<td style='width:50%;'>
				<select style='border: none; box-shadow:0px 1px;' name='municipio'>
					<option value=''>Seleccione</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>ii) Condiciones y factibilidad de las vias de acceso</label></td>
		</tr>
		<tr>
			<td colspan='4'>
				<label style='margin-left:10%;'>a) Recubrimiento que presenta la via de acceso</label>
				<select style='border: none; box-shadow:0px 1px;' name='condicion1' style='margin-left:12%; width:70%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='4'>
				<label style='margin-left:10%;'>a) Delimitacion de la via de acceso</label>
				<select style='border: none; box-shadow:0px 1px;' name='condicion2' style='margin-left:12%; width:70%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='4'>
				<label style='margin-left:10%;'>c) Acera peatonal</label><br>
				<select style='border: none; box-shadow:0px 1px;' name='condicion3' style='margin-left:12%; width:70%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>iii) Servicios basicos publicos y privados</label></td>
		</tr>
		<tr>
			<td colspan='2'>
				<label style='margin-left:18%;'>a) Agua potable</label>
				<select style='border: none; box-shadow:0px 1px;' name='servicios1' style='margin-left:18%; width:70%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
			<td colspan='2'>
				<label>c) Energia electrica</label>
				<select style='border: none; box-shadow:0px 1px;' name='servicios2' style='width:70%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<label style='margin-left:18%;'>b) Aguas negras</label>
				<select style='border: none; box-shadow:0px 1px;' name='servicios3' style='margin-left:18%; width:70%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
			<td colspan='2'>
				<label>d) Telefonia</label><br>
				<select style='border: none; box-shadow:0px 1px;' name='servicios4' style='width:70%;'>
					<option value=''>Seleccione</option>
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
				<select style='border: none; box-shadow:0px 1px;' name='ucontex1' style='margin-left:23%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
			<td colspan='2' style='width:50%;'>
				<label style='margin-left:6%;'>Topografia del Terreno</label>
				<select style='border: none; box-shadow:0px 1px;' name='ucontex2' style='margin-left:6%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2' style='width:50%;'>
				<label style='margin-left:23%;'>Tipo de via de acceso</label>
				<select style='border: none; box-shadow:0px 1px;' name='ucontex3' style='margin-left:23%;'>
					<option value=''>Seleccione</option>
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
				<select style='border: none; box-shadow:0px 1px;' name='ucontex4' style='margin-left:23%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
			<td>
				<label style='margin-left:15%;'>Areas Semiplanas
				</label><input type='text' name='areass' style='margin-left:5%; width:12%;' placeholder='0%'>
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
				<select style='border: none; box-shadow:0px 1px;' name='vocacion1' style='margin-left:23%; width:70%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
			<td colspan='2'>
				<label>Morfologia del Inmueble</label>
				<select style='border: none; box-shadow:0px 1px;' name='vacacion2' style='width:70%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<label style='margin-left:23%;'>Uso actual del inmueble</label>
				<select style='border: none; box-shadow:0px 1px;' name='vocacion3' style='margin-left:23%; width:70%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
			<td colspan='2'>
				<label>Seguridad del entorno</label>
				<select style='border: none; box-shadow:0px 1px;' name='vocacion4' style='width:70%;'>
					<option value=''>Seleccione</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>iii) Tipo de Suelo</label></td>
		</tr>
		<tr>
			<td colspan='3'>
				<select style='border: none; box-shadow:0px 1px;' name='tiposuelo' style='margin-left:15%; width:74%;'>
					<option value=''>Seleccione</option>
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
			<td><label>c) Descripcion de la Infraestructura Fisica del Inmueble: </label></td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>i) Areas Totales Comunes y Utiles</label></td>
		</tr>
		<tr>
			<td>
				<label for='AreaT'><b>Area Total:</b></label>
			
			</td>
			<td>
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
<td><textarea rows='1' cols='25'></textarea></td>
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

	<input type='button' value='Siguiente' class="boton" onClick="location.href='seccion2.html'" />



</td>
</tr>

		</table>
		</fieldset>
<?php require("footer.php");?>
