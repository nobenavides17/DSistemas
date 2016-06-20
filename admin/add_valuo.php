<?php require("header.php");  ?>
<?php
include("conexion.php");

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

$query25=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 25");//estado actual de la construccion
$query26=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 26");//estado de acabados
$query27=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 27");//mantenimiento de entornos
$query28=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 28");//clasificacion de la estructura
$query29=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 29");//delimitacion de lindero
$query30=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 30");//cielo falso
$query31=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 31");//puertas
$query32=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 32");//ventanas
$query33=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 33");//pisos
$query34=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 34");//defensas
$query35=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 35");//areas recubiertas
$query36=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 36");//pantri
$query37=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 37");//sistema hidraulico de ap
$query38=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 38");//sistema electrico
$query39=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 39");//pozo
$query40=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 40");//muros de contencion
$query41=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 41");//entorno ecologico
$query42=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 42");//riesgos naturales al entorno del inmueble valuado
$query43=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 43");//contaminacion ambiental orservada
$query44=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 44");//tipo de ubicacion
$query45_1=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 45");//equipamiento1
$query45_2=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 45");//equipamiento2
$query45_3=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 45");//equipamiento3
$query45_4=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 45");//equipamiento4
$query46_1=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 46");//riesgos fundamentados
$query46_2=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 46");//riesgos fundamentados

$query48=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 48");//tipo de medida
$query49=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 49");//tipo de medida

$query50=$conexion->query("SELECT * FROM terreno");//tipo de medida
$query51=$conexion->query("SELECT * FROM terreno");//tipo de medida
$query52=$conexion->query("SELECT * FROM terreno");//tipo de medida
?>

<div class="container">
  		<div id='informacion_valores_terreno'>
  		<table class='informacion'>
		<tr>
			<td><label>Valor del bien con base en las condiciones del mismo en la fecha del valuo</label></td>
			<td><label>$0.0</label></td>
		</tr>
		<tr>
			<td><label>Valor Comercial, Valuo por el metodo Comparativo de Mercado</label></td>
			<td><label>$0.0</label></td>
		</tr>
		<tr>
			<td>
				<input type='submit' value='Guardar Valuo' class="boton" onClick="location.href='comparativo.html'" />
			</td>
		</tr>
		</table>
		</div>
		<br>
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#menu1">Informacion General Acceso y Servicios</a></li>
    <li><a data-toggle="pill" href="#menu2">Topografia Suelo y Vegetacion</a></li>
    <li><a data-toggle="pill" href="#menu3">Infraestructura Fisica</a></li>
    <li><a data-toggle="pill" href="#menu4">Estado de Conservacion</a></li>
    <li><a data-toggle="pill" href="#menu5">Accesorios Existentes</a></li>
    <li><a data-toggle="pill" href="#menu6">Entorno Ecologico</a></li>
  </ul>
  
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal"  data-target="#myModal" id='comparativo' style='background:green; margin-left:80%'>Comparativo</button>
  
  <div class="tab-content" style='margin-top:10px;'>

  <!--Primera parte (Seccion 1) -->
 
    <div id="menu1" class="tab-pane fade in active">
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
			<td><label for='propietario'>Propietario del Inmueble</label></td>
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
			<td><label for='fecha_valuo'>Fecha del Valuo</label></td>
			<td><input type='date' name='fecha_valuo' placeholder='00/00/0000'></td>
			<td><label for='ipc' >IPC</label></td>
			<td><input type='text' id='ipc' placeholder='0.0'></td>
		</tr>
		</table>
		
		<fieldset>
		<legend>Informacion especifica para terrenos y construcciones</legend>
		<table class='informacion'>
		<tr>
			<td><label>Descripcion del entorno</label></td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>Direccion y Ubicacion exacta del Inmueble</label></td>
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
			<td colspan='2'><label style='margin-left:10%;'>Condiciones y factibilidad de las vias de acceso</label></td>
		</tr>
		<tr>
			<td colspan='4'>
				<label style='margin-left:10%;'>Recubrimiento que presenta la via de acceso</label>
				<select name='condicion1' style='margin-left:12%; width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res10 = $query10->fetch()){echo "<option>".$res10[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='4'>
				<label style='margin-left:10%;'>Delimitacion de la via de acceso</label>
				<select name='condicion2' style='margin-left:12%; width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res11 = $query11->fetch()){echo "<option>".$res11[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='4'>
				<label style='margin-left:10%;'>Acera peatonal</label><br>
				<select name='condicion3' style='margin-left:12%; width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res12 = $query12->fetch()){echo "<option>".$res12[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>Servicios basicos publicos y privados</label></td>
		</tr>
		<tr>
			<td colspan='2'>
				<label style='margin-left:18%;'>Agua potable</label>
				<select name='servicios1' id='agua_pot' style='margin-left:18%; width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res13 = $query13->fetch()){echo "<option value='".$res13[3]."'>".$res13[2]."</option>";}?>
				</select>
			</td>
			<td colspan='2'>
				<label>Energia electrica</label>
				<select name='servicios2' id='electricidad' style='width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res14 = $query14->fetch()){echo "<option value='".$res14[3]."'>".$res14[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<label style='margin-left:18%;'>Aguas negras</label>
				<select name='servicios3' id='agua_neg' style='margin-left:18%; width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res9 = $query9->fetch()){echo "<option value='".$res9[3]."'>".$res9[2]."</option>";}?>
				</select>
			</td>
			<td colspan='2'>
				<label>Telefonia</label>
				<select name='servicios4' id='telefono'  style='width:70%;'>
					<option value=''>Seleccione</option>
					<?php while($res15 = $query15->fetch()){echo "<option value='".$res15[3]."'>".$res15[2]."</option>";}?>
				</select>
			</td>
		</tr>
		</table>		
    </div>
    
 <!-- Descripcion del terreno -->
    
    <div id="menu2" class="tab-pane fade">
   
      <table class='informacion'>
		<tr>
			<td colspan='3'><label>Descripcion del terreno</label></td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:14%;'>Ubicacion Contextual</label></td>
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
				<select name='ucontex3' style='margin-left:23%;' id='acceso'>
					<option value=''>Seleccione</option>
					<?php while($res18 = $query18->fetch()){echo "<option value='".$res18[3]."'>".$res18[2]."</option>";}?>
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
				</label><input type='text' name='areass' style='margin-left:21%; width:12%;' placeholder='0%'>
			</td>
			<td>
				<label>Areas Quebradas</label>
				<input type='text' name='areasq' style='margin-left:6%; width:12%;' placeholder='0%'>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>Vocacion del Terreno</label></td>
		</tr>
				<tr>
			<td colspan='2'>
				<label style='margin-left:23%;'>Vocacion del Terreno</label>
				<select name='vocacion1' style='margin-left:23%; width:70%;' id='vocacion_terreno'>
					<option value=''>Seleccione</option>
					<?php while($res20 = $query20->fetch()){echo "<option>".$res20[2]."</option>";}?>
				</select>
			</td>
			<td colspan='2'>
				<label>Morfologia del Inmueble</label>
				<select name='vacacion2' style='width:70%;' id='morfologia_terreno'  onchange='area_terreno();'>
					<option value=''>Seleccione</option>
					<?php while($res21 = $query21->fetch()){echo "<option value='$res21[3]'>".$res21[2]."</option>";}?>
				</select>
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
				<select name='vocacion4' style='width:70%;' id='seguridad'>
					<option value=''>Seleccione</option>
					<?php while($res23 = $query23->fetch()){echo "<option value='".$res23[3]."'>".$res23[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>Tipo de Suelo</label></td>
		</tr>
		<tr>
			<td colspan='3'>
				<select name='tiposuelo' style='margin-left:15%; width:74%;'>
					<option value=''>Seleccione</option>
					<?php while($res24 = $query24->fetch()){echo "<option value='$res24[3]'>".$res24[2]."</option>";}?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'><label style='margin-left:10%;'>Descripcion de la vegetacion existente</label></td>
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
			<td colspan='2'><label style='margin-left:10%;'>Servidumbres y otros relevantes</label></td>
		</tr>
		<tr>
			<td colspan='4'>
				<textarea rows='2' cols='100' style='margin-left:11.5%;' name='otros'></textarea><br>
			</td>
		</tr>
		</table>
		</fieldset>
    </div>
    
 <!-- Descripcion del terreno -->
       
    
    
    <div id="menu3" class="tab-pane fade">
      
      <div id='areas_de_infraestructura'>
		<fieldset>	
		<table>
			<tr>
				<td><label>Descripcion de la Infraestructura Fisica del Inmueble: </label></td>
			</tr>
			<tr>
				<td><label style='margin-left:5%;'>Areas Totales Comunes y Utiles</label></td>
			</tr>
		</table>
		<br>
		<table id='areas' style='width:30%; float:left; margin-right:10px;'>
			<tr>
				<td>
					<label for='AreaT'><b>Area Total:</b></label>
				</td>
			</tr>
			<tr>
				<td>
					<input type='text' id='area_total_mts' onkeyup='metro_a_vara("area_total_mts", "area_total_var");'>
				</td>
				<td>
					<label>Mts Cuad</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type='text' id='area_total_var' disabled>
				</td>
				<td>
					<label>Var Cuad</label>
				</td>
			</tr>
			<tr>
				<td>
					<label for='AreaT'><b>Area S/Inspeccion:</b></label>
				</td>
			</tr>
			<tr>
				<td>
					<input type='text' id='area_inspeccion_mts' disabled >
				</td>
				<td>
					<label>Mts Cuad</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type='text' id='area_inspeccion_var' disabled>
				</td>
				<td>
					<label>Var Cuad</label>
				</td>
			</tr>
			<tr>
				<td>
					<label for='AreaT'><b>Area Util:</b></label>
				</td>
			</tr>
			<tr>
				<td>
					<input type='text' id='area_util_mts' disabled>
				</td>
				<td>
					<label>Mts Cuad</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type='text' id='area_util_var' disabled>
				</td>
				<td>
					<label>Var Cuad</label>
				</td>
			</tr>
			<tr>
				<td>
					<label for='AreaT'><b>Area a Valuar:</b></label>
				</td>
			</tr>
			<tr>
				<td>
					<input type='text' id='area_valuar_mts' onkeyup='establecer_area()' >
				</td>
				<td>
					<label>Mts Cuad</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type='text' id='area_valuar_var' disabled>
				</td>
				<td>
					<label>Var Cuad</label>
				</td>
			</tr>
		</table>
		<table id='dimenciones' style='width:55%; float:right; margin-right:10%; margin-top:40px;'>
			<tr>
				<td colspan='5'></td>
				<td>
					<select id='medidas_segun' onchange='area_terreno();'>
						<option>seleccione</option>
						<?php while($res49 = $query49->fetch()){echo "<option value='$res49[3]'>".$res49[2]."</option>";}?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan='5'>
					<label for='AreaT'><b>Dimenciones del Terreno(Mts):</b></label>
				</td>
				<td>
					<label for='AreaT'><b>Colindantes del Inmueble:</b></label>
				</td>
			</tr>
			<tr> 
				<td colspan='7' >
					<label for='AreaT'>Segun Documento de Propietario:</label>
				</td>
			</tr>
			<tr>
				<td>
					<label for='AreaT'><b>Lindero Norte:</b></label>
				</td>
				<td style='width:6%;'>
					<input type='text' style='width:50%;' id='num_tramo1' onkeyup='copiar_valores();'>
				</td>
				<td>
					<label for='AreaT'>Tramo</label>
				</td>
				<td style='width:15%;'>
					<input type='text' id='tramo1' style='width:80%;' onkeyup='area_terreno();copiar_valores();'>
				</td>
				<td>
					<label for='AreaT'>ml</label>
				</td>
				<td>
					<input type='text' id='descrip_tramo1' onkeyup='copiar_valores();'>
				</td>
			</tr>
			<tr>
				<td>
					<label for='AreaT'><b>Lindero Sur:</b></label>
				</td>
				<td style='width:6%;'>
					<input type='text' style='width:50%;' id='num_tramo2'>
				</td>
				<td>
					<label for='AreaT'>Tramo</label>
				</td>
				<td style='width:15%;'>
					<input type='text' id='tramo2' style='width:80%;' onkeyup='area_terreno();copiar_valores()'>
				</td>
				<td>
					<label for='AreaT'>ml</label>
				</td>
				<td>
					<input type='text' id='descrip_tramo2' onkeyup='copiar_valores();'>
				</td>
			</tr>
			<tr>
				<td>
					<label for='AreaT'><b>Lindero Oriente:</b></label>
				</td>
				<td style='width:6%;'>
					<input type='text' style='width:50%;' id='num_tramo3' onkeyup='copiar_valores();'>
				</td>
				<td>
					<label for='AreaT'>Tramo</label>
				</td>
				<td style='width:15%;'>
					<input type='text' id='tramo3' style='width:80%;' onkeyup='area_terreno();copiar_valores();'>
				</td>
				<td>
					<label for='AreaT'>ml</label>
				</td>
				<td>
					<input type='text' id='descrip_tramo3' onkeyup='copiar_valores();'>
				</td>
			</tr>
			<tr>
				<td>
					<label for='AreaT'><b>Lindero Poniente:</b></label>
				</td>
				<td style='width:6%;'>
					<input type='text' style='width:50%;' id='num_tramo4' onkeyup='copiar_valores();'>
				</td>
				<td>
					<label for='AreaT'>Tramo</label>
				</td>
				<td style='width:15%;'>
					<input type='text' id='tramo4' style='width:80%;' onkeyup='area_terreno();copiar_valores();'>
				</td>
				<td>
					<label for='AreaT'>ml</label>
				</td>
				<td>
					<input type='text' id='descrip_tramo4' onkeyup='copiar_valores();'>
				</td>
			</tr>
			<tr> 
				<td colspan='7'>
					<label for='AreaT'>Segun Documento de Inspeccion:</label>
				</td>
			</tr>
			<tr>
				<td>
					<label for='AreaT'><b>Lindero Norte:</b></label>
				</td>
				<td style='width:6%;'>
					<input type='text' style='width:50%;' id='num_tramo1_1' disabled>
				</td>
				<td>
					<label for='AreaT'>Tramo</label>
				</td>
				<td style='width:15%;'>
					<input type='text' id='tramo1_2' style='width:80%;' disabled>
				</td>
				<td>
					<label for='AreaT'>ml</label>
				</td>
				<td>
					<input type='text' id='descrip_tramo1_1' disabled>
				</td>
			</tr>
			<tr>
				<td>
					<label for='AreaT'><b>Lindero Sur:</b></label>
				</td>
				<td style='width:6%;'>
					<input type='text' style='width:50%;' id='num_tramo2_1' disabled>
				</td>
				<td>
					<label for='AreaT'>Tramo</label>
				</td>
				<td style='width:15%;'>
					<input type='text' id='tramo2_2' style='width:80%;' disabled>
				</td>
				<td>
					<label for='AreaT'>ml</label>
				</td>
				<td>
					<input type='text' id='descrip_tramo2_1' disabled>
				</td>
			</tr>
			<tr>
				<td>
					<label for='AreaT'><b>Lindero Oriente:</b></label>
				</td>
				<td style='width:6%;'>
					<input type='text' style='width:50%;' id='num_tramo3_1' disabled>
				</td>
				<td>
					<label for='AreaT'>Tramo</label>
				</td>
				<td style='width:15%;'>
					<input type='text' id='tramo3_2' style='width:80%;' disabled>
				</td>
				<td>
					<label for='AreaT'>ml</label>
				</td>
				<td>
					<input type='text' id='descrip_tramo_3_1' disabled>
				</td>
			</tr>
			<tr>
				<td>
					<label for='AreaT'><b>Lindero Poniente:</b></label>
				</td>
				<td style='width:6%;'>
					<input type='text' style='width:50%;' id='num_tramo4_1' disabled>
				</td>
				<td>
					<label for='AreaT'>Tramo</label>
				</td>
				<td style='width:15%;'>
					<input type='text' id='tramo4_2' style='width:80%;' disabled>
				</td>
				<td>	
					<label for='AreaT'>ml</label>
				</td>
				<td>
					<input type='text' id='descrip_tramo4_1' disabled>
				</td>
			</tr>
		</table>
		</fieldset>
    </div>
  </div>  
  
  <!--Primera parte (Seccion 2) -->
  
  <div id="menu4" class="tab-pane fade">
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
							<?php while($res25 = $query25->fetch()){echo "<option value='$res25[3]'>".$res25[2]."</option>";}?>
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
						<?php while($res26 = $query26->fetch()){echo "<option value='$res26[3]'>".$res26[2]."</option>";}?>
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
							<?php while($res27 = $query27->fetch()){echo "<option value='$res27[3]'>".$res27[2]."</option>";}?>
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
							<?php while($res28 = $query28->fetch()){echo "<option value='$res28[3]'>".$res28[2]."</option>";}?>
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
  </div>
  
  <!--Segunda parte (Seccion 2) -->
  
  <div id="menu5" class="tab-pane fade">
	  <fieldset>
			<legend>Accesorios Exixtentes</legend>
				<table class='informacion'>
					<tr>
						<td style='width:50%;'>
							<select name='AccesoriosE1'style='width:100%;'>
								<option>seleccione</option>
								<?php while($res29 = $query29->fetch()){echo "<option value='$res29[3]'>".$res29[2]."</option>";}?>
							</select><br><br>
						</td>
						<td style=' width:50%;'>
							<select name='AccesoriosE2' style='width:100%;'>
							<option>seleccione</option>
							<?php while($res30 = $query30->fetch()){echo "<option value='$res30[3]'>".$res30[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:50%;'>
							<select name='AccesoriosE3' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res31 = $query31->fetch()){echo "<option value='$res31[3]'>".$res31[2]."</option>";}?>
							</select><br><br>
						</td>
						<td style='width:50%;'>
							<select name='AccesoriosE4' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res32 = $query32->fetch()){echo "<option value='$res32[3]'>".$res32[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:50%;'>
							<select name='AccesoriosE5' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res33 = $query33->fetch()){echo "<option value='$res33[3]'>".$res33[2]."</option>";}?>
							</select><br><br>
						</td>
						<td style='width:50%;'>
							<select name='AccesoriosE6' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res34 = $query34->fetch()){echo "<option value='$res28[3]'>".$res34[2]."</option>";}?>		
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:50%;'>
							<select name='AccesoriosE7' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res35 = $query35->fetch()){echo "<option value='$res35[3]'>".$res35[2]."</option>";}?>
							</select><br><br>
						</td>
						<td style='width:50%;'>
							<select name='AccesoriosE8' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res36 = $query36->fetch()){echo "<option value='$res36[3]'>".$res36[2]."</option>";}?>	
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:50%;'>
							<select name='AccesoriosE9' style='width:100%;'>				
								<option>seleccione</option>
								<?php while($res37 = $query37->fetch()){echo "<option value='$res37[3]'>".$res37[2]."</option>";}?>
							</select><br><br>
						</td>
						<td style='width:50%;'>
							<select name='AccesoriosE10' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res38 = $query38->fetch()){echo "<option value='$res38[3]'>".$res38[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:50%;'>
							<select name='AccesoriosE11' style='width:100%;'>				
								<option>seleccione</option>
								<?php while($res39 = $query39->fetch()){echo "<option value='$res39[3]'>".$res39[2]."</option>";}?>
							</select><br><br>
						</td>
						<td style='width:50%;'>
							<select name='AccesoriosE12' style='width:100%;'>
								<option>seleccione</option>
								<?php while($res40 = $query40->fetch()){echo "<option value='$res40[3]'>".$res40[2]."</option>";}?>
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
  </div>
  
  <!--Tercera parte (Seccion 2) -->
  
  <div id="menu6" class="tab-pane fade">
	  <fieldset>
			<legend>Descripcion del Entorno Ecologico:</legend>
				<table class='informacion'>
					<tr>
						<td style='width:100%;' colspan='9'>
							<select name='DescEntE1' style='width:70%;'>
								<option>Seleccione</option>
								<?php while($res41 = $query41->fetch()){echo "<option value='$res41[3]'>".$res41[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:100%;' colspan='9'>
							<select  style='width:70%;'>
								<option>Seleccione</option>
								<?php while($res42 = $query42->fetch()){echo "<option value='$res42[3]'>".$res42[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:100%;' colspan='9'>
							<select   style='width:70%;'>
								<option>Seleccione</option>
								<?php while($res43 = $query43->fetch()){echo "<option value='$res43[3]'>".$res43[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td style='width:100%;' colspan='9'>
							<select  style='width:70%;'  id='ubicacion'>
								<option>seleccione</option>
								<?php while($res44 = $query44->fetch()){echo "<option value='$res44[3]'>".$res44[2]."</option>";}?>
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
								<?php while($res45_1 = $query45_1->fetch()){echo "<option value='$res45_1[3]'>".$res45_1[2]."</option>";}?>
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
								<?php while($res45_2 = $query45_2->fetch()){echo "<option value='$res45_2[3]'>".$res45_2[2]."</option>";}?>
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
								<?php while($res45_3 = $query45_3->fetch()){echo "<option value='$res45_3[3]'>".$res45_3[2]."</option>";}?>
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
								<?php while($res45_4 = $query45_4->fetch()){echo "<option value='$res45_4[3]'>".$res45_4[2]."</option>";}?>
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
								<?php while($res46_1 = $query46_1->fetch()){echo "<option value='$res46_1[3]'>".$res46_1[2]."</option>";}?>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td>
							<select id="opciones" style='width:80%;'>
								<option>Seleccione</option>
								<?php while($res46_2 = $query46_2->fetch()){echo "<option value='$res46_2[3]'>".$res46_2[2]."</option>";}?>
							</select><br><br>	
						</td>
					</tr>
					<tr>
						<td>
							<textarea rows="7" style='width:80%;'> </textarea><br><br>
						</td>
					</tr>
				</table>
		</fieldset>
	  
  </div>
</div>


<!-- Modal -->
 
			  <div class="modal fade" id="myModal" style='width:50%;' role="dialog" >
			<div class="modal-dialog" >
			
			  <!-- Modal content-->
			  <div class="modal-content"  style='width:100%;'>
				<div class="modal-header" style='width:95%;'>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Metodo Comparativo</h4>
				</div>
				<div class="modal-body" style='width:92%;'>
					<select name='hm' id='homologacion'>
							<option>seleccione</option>
							<?php while($res48 = $query48->fetch()){echo "<option value='$res48[3]'>".$res48[2]."</option>";}?>
					</select>
					<label><b>Referente 1: </b></label>
					<select name="q" class="form-control"  style="width:470px" onchange='llenar_comparativo(this.value,comp1);'>
								<option value='0'>Seleccione</option>
								<?php while($res50 = $query50->fetch()){echo "<option value='$res50[0]'>".$res50[1]."</option>";}?>
					</select>
					<div id='comp1'>
					</div>
					
					<label><b>Referente 2: </b></label>
					<select name="q" class="form-control"  style="width:470px" onchange='llenar_comparativo(this.value,comp2)'>
								<option value='0'>Seleccione</option>
								<?php while($res51 = $query51->fetch()){echo "<option value='$res51[0]'>".$res51[1]."</option>";}?>
					</select>
					<div id='comp2'>
					</div>
					<label><b>Referente 3: </b></label>
					<select name="q" class="form-control"  style="width:470px" onchange='llenar_comparativo(this.value,comp3)'>
								<option value='0'>Seleccione</option>
								<?php while($res52 = $query52->fetch()){echo "<option value='$res52[0]'>".$res52[1]."</option>";}?>
					</select>
					<div id='comp3'>
					</div>
					<hr>
					<div id='tabla respuesta'>
						<table>
							<tr>
								<td colspan='8'><h4>Comparadores</h4></td>
							</tr>
							<tr>
								<td></td>
								<td style='border:solid black;'><label>Inmueble($)</label></td>
								<td style='border:solid black;'><label>Seguridad</label></td>
								<td style='border:solid black;'><label>Serv. Basic</label></td>
								<td style='border:solid black;'><label>Tamaño(Mts)</label></td>
								<td style='border:solid black;'><label>Ubicacion</label></td>
								<td style='border:solid black;'><label>Acceso</label></td>
								<td style='border:solid black;'><label>Total($)</label></td>
							</tr>
							<tr>
								<td><b>Comparador 1: </b></td>
								<td style='border:solid black;padding:5px;'><label id='inmueble1'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='seguridad1'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='servicios1'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='tamaño1'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='ubicacion1'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='acceso1'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='total1'>-</label></td>
							</tr>
							<tr>
								<td><b>Comparador 2: </b></td>
								<td style='border:solid black;padding:5px;'><label id='inmueble2'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='seguridad2'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='servicios2'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='tamaño2'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='ubicacion2'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='acceso2'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='total2'>-</label></td>
							</tr>
							<tr>
								<td><b>Comparador 3: </b></td>
								<td style='border:solid black; padding:5px;'><label id='inmueble3'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='seguridad3'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='servicios3'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='tamaño3'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='ubicacion3'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='acceso3'>-</label></td>
								<td style='border:solid black;padding:5px;'><label id='total3'>-</label></td>
							</tr>
						</table>
						<table style='width:100%;'>
							<tr>
								<td><label><b>Promedio: </b>$</label></td>
								<td><label id='promedioN'></label></td>
								<td><label><b>Lote Promedio: </b></label></td>
								<td><label id='lote_promedio'></label></td>
								<td><label><b>Promedio: </b>$</label></td>
								<td><label id='PromedioC'></label></td>
							</tr>
							<tr>
								<td colspan='2'></td>
								<td><label><b>Cts Var: </b>$</label></td>
								<td><label id='costo_vara2'></label></td>
								<td colspan='2'></td>
							</tr>
							<tr>
								<td><label><b>Desv Estand: </b>$</label></td>
								<td><label id='desv_N'></label></td>
								<td><label><b>Cts Lote Prom: </b>$</label></td>
								<td><label id='costo_lote'></label></td>
								<td><label><b>Desv Estand: </b>$</label></td>
								<td><label id='desv_C'></label></td>
							</tr>
							<tr>
								<td colspan='2'></td>
								<td><label><b>Area Valuada: </b></label></td>
								<td><label id='area_valuada'></label></td>
								<td colspan='2'></td>
							</tr>
							<tr>
								<td><label><b>Coef Var: </b>%</label></td>
								<td><label id='coef_N'></label></td>
								<td><label><b>Tipo Via: </b></label></td>
								<td><label id='tipo_area'></label></td>
								<td><label><b>Coef Var: </b>%</label></td>
								<td><label id='coef_C'></label></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" onclick='calcular_precio();'>Valuar</button>
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			  </div>
			  
			</div>
		  </div>	




<?php require("footer.php");  ?>
