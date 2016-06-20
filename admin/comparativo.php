 <?php
require("conexion.php");
include("conexion.php");
$id = $_GET["id"];
$tipo_inmueble;
$uso_suelo;
$tipo_acceso;
$tipo_ubicacion;
$servicios_basicos;
$factor_seguridad;
$areamts;
$areavar;
$preciomts;
$preciovar;
$ipc;
$vnr;
$valor_inmueble;

$query48=$conexion->query("SELECT * FROM detalle_parametro WHERE id_parametro = 48");//tipo de medida
$comparador=$conexion->query("SELECT * FROM terreno WHERE id_terreno = $id");

while($comp = $comparador->fetch()){
	$areas=explode('/',$comp[8]);//separacion de las dos areas
	$areamts=$areas[0];//area en metros
	$areavar=$areas[1];//area en varas
	
	$precios=explode('/',$comp[9]);//separacion de las dos areas
	$preciomts=$precios[0];//area en metros
	$preciovar=$precios[1];//area en varas
	$ipc=$comp[10];
	$valor_inmueble=$comp[11];	 
	
	switch($comp[2]){//tipo de inmueble
			 case '1': $tipo_inmueble='Comercio';
			 case '2': $tipo_inmueble='Habitacional';
			 case '3': $tipo_inmueble='Industrial';
			 case '4': $tipo_inmueble='Agricola';
			 case '5': $tipo_inmueble='Comercio/Vivienda';
			 case '6': $tipo_inmueble='Lote Urbanizado';
			 case '7': $tipo_inmueble='Lote Semiurbanizado';
			 case '8': $tipo_inmueble='Lote Rustico';
			 case '9': $tipo_inmueble='Baldio';
			 case '10': $tipo_inmueble='Mixto';
			 case '11': $tipo_inmueble='Industria Ligera';
			 case '12': $tipo_inmueble='Rustico';
			 }
	$val_tip_inmueble=$comp[2];
		 
		 switch($comp[3]){//uso de suelo
			 case '1': $uso_suelo='Comercio';
			 case '2': $uso_suelo='Habitacional';
			 case '3': $uso_suelo='Industrial';
			 case '4': $uso_suelo='Agricola';
			 case '5': $uso_suelo='Comercio/Vivienda';
			 case '6': $uso_suelo='Lote Urbanizado';
			 case '7': $uso_suelo='lote Semiurbanizado';
			 case '8': $uso_suelo='Lote Rustico';
			 case '9': $uso_suelo='Baldio';
			 case '10': $uso_suelo='Urbano';
			 case '11': $uso_suelo='Semiurbano';
			 case '12': $uso_suelo='Uso Mixto';
			 }
	$val_uso_suelo=$comp[3];
		 
		 switch($comp[4]){//tipo de acceso
			 case '1': $tipo_acceso='Principal/Comercial'; break;
			 case '2': $tipo_acceso='Comercio Secundario'; break;
			 case '3': $tipo_acceso='Transicion'; break;
			 case '4': $tipo_acceso='Secundaria'; break;
			 case '5': $tipo_acceso='De Tierra'; break;
			 case '6': $tipo_acceso='Tipo Pasaje/Servidumbre'; break;
			 case '7': $tipo_acceso='No Accesible'; break;
			 }
	$val_tip_accs=$comp[4];
		 
		 switch($comp[5]){//tipo Ubicacion
			 case '1': $tipo_ubicacion='Manzanero'; break;
			 case '2': $tipo_ubicacion='Cabecero'; break;
			 case '3': $tipo_ubicacion='Esquinero'; break;
			 case '4': $tipo_ubicacion='2 Frentes'; break;
			 case '5': $tipo_ubicacion='Calle Lateral'; break;
			 case '6': $tipo_ubicacion='Calle Fondo'; break;
			 case '7': $tipo_ubicacion='Servidumbre'; break;
			 }
	$val_tip_ubic=$comp[5];
	
	     switch($comp[6]){//servicios basicos
			 case '1': $servicios_basicos='Todos los Servicios';
			 case '2': $servicios_basicos='AP, Elect, Tel';
			 case '3': $servicios_basicos='AP y AN';
			 case '4': $servicios_basicos='AP';
			 case '5': $servicios_basicos='AN y Elect';
			 case '6': $servicios_basicos='AP y Elect';
			 case '7': $servicios_basicos='Elect y Tel';
			 case '8': $servicios_basicos='AN y Tel';
			 case '9': $servicios_basicos='AP y Tel';
			 case '10': $servicios_basicos='Elect o Tel';
			 case '11': $servicios_basicos='Sin Servicios';
			 }
	$val_serb_basic=$comp[6];
	
		 switch($comp[7]){//Factor Seguridad
			 case '1': $factor_seguridad='Optimo/Privada';
			 case '2': $factor_seguridad='Buena';
			 case '3': $factor_seguridad='Promedio';
			 case '4': $factor_seguridad='Regular';
			 case '5': $factor_seguridad='No Deseable';
			 }
	$val_fac_seg=$comp[7];
		
	}
?>	

		<fieldset>
					<legend>Estado General</legend>
				<table class='informacion'>
				<tr>
					<td><label for='TipoInmb'><b>Tipo de Inmueble: </b></label></td>
					<?php echo"<td style='width:25%;'><label for='TInmb' name='tipo_inmueble'>".$tipo_inmueble."</label><input type='hidden' name='val_tip_inmueble' value='".$val_tip_inmueble."'></td>";?>
					<td><label for='UsoSuelo' ><b>Uso de Suelo: </b></label></td>
					<?php echo"<td style='width:25%;'><label for='UsoSu' name='uso_suelo'>".$uso_suelo."</label><input type='hidden' name='val_uso_suelo' value='".$val_uso_suelo."'></td>";?>
				</tr>
				<tr>
					<td><label for='TipoAcc'><b>Tipo de Acceso: </b></label></td>
					<?php echo"<td style='width:25%;'><label for='TipoA' name='tipo_acceso'>".$tipo_acceso."</label><input type='hidden' name='val_tip_accs' value='".$val_tip_accs."'></td>";?>
					
					<td><label for='TipoUbi'><b>Tipo de Ubicacion: </b></label></td>
					<?php echo"<td style='width:25%;'><label for='TipoU' name='tipo_ubicacion'>".$tipo_ubicacion."</label><input type='hidden' name='val_tip_ubic' value='".$val_tip_ubic."'></td>";?>
				</tr>
				<tr>
					<td><label for='ServBas'><b>Serv. Basicos: </b></label></td>
					<?php echo"<td style='width:25%;'><label for='SB' name='servicios_basicos'>".$servicios_basicos."</label><input type='hidden' name='val_serb_basic' value='".$val_serb_basic."'></td>";?>
					
					<td><label for='FactSeg'><b>Factor Seguridad: </b></label></td>
					<?php echo"<td style='width:25%;'><label for='FS' name='factor_seguridad'>".$factor_seguridad."</label><input type='hidden' name='val_fac_seg' value='".$val_fac_seg."'></td>";?>	
				</tr>
				</table>
		</fieldset>
		<fieldset>
			<legend>Dimenciones del Terreno</legend>
				<table>
				<tr>
					<td><label for='Precio'><b>Area M²: </b></label></td>
					<?php echo"<td style='width:25%;'><label for='AreaM' name='aream'>".$areamts."</label></td>";?>

					<td><label for='Const'><b>Area Vr²: </b></label></td>
					<?php echo"<td style='width:25%;'><label for='AreaV' name='areav'>".$areavar."</label></td>";?>
				</tr>
				<tr>
					<td><label for='Precio'><b>Precio M²: </b>$</label></td>
					<?php echo"<td style='width:25%;'><label for='PreM' name='aprecm'>".$preciomts."</label></td>";?>

					<td><label for='Const'><b>Precio Vr²: </b>$</label></td>
					<?php echo"<td style='width:25%;'><label for='PreV' name='aprecv'>".$preciovar."</label></td>";?>
				</tr>
				<tr>	
					<td><label for='ipc'><b>IPC:</b></label></td>
					<?php echo"<td style='width:25%;'><label for='ipc' name='ipc'>".$ipc."</label></td>";?>

					<td><label for='ValorInmb'><b>Valor del Inmueble: </b>$</label></td>
					<?php echo"<td style='width:25%;'><label for='ValIn'>".$valor_inmueble."</label></td>";?>
				</tr>
				</table>
		</fieldset>
