<page backtop="30mm" backbottom="14mm" backleft="10mm" backright="10mm" style="font-size: 12pt" backimgx="center" backimgy="bottom" backimgw="100%">
    <page_header>
        <table class="page_header" >
            <tr>
                <td style="width:15%;"><img style="width:250px;" src="../img/logo1.png"></td>
                <td style="width: 70%; color: #444444;"></td>
                <td style="width: 15%; color: #444444;"><img style="width:180px; margin-left:280px;;" src="../img/logon.png"></td>
            </tr>
        </table>
    </page_header>
    <page_footer> 
		<table>
		<tr><td>Fecha de impresion: <?php echo ED(date("Y-m-d"));?></td></tr>
		</table>  
    </page_footer>
      
  <?php
  function ED($fecha){
	$dia = substr($fecha,8,2);
	$mes = substr($fecha,5,2);
	$a = substr($fecha,0,4);
	$fecha = "$dia-$mes-$a";
	return $fecha;
	}   
?>
	<br><br><!--<p style="font-weigth:bold; size:18px;">INFORME DE VALUO INMUEBLE</p>-->
	<table style="width:100%; border:0.5px solid #000; text-aling:center; margin:auto; font-size:14px; font-family:arial;">
		<tr>
			<td style="width:95%; text-align:center;"><br><label for='propietario'><b>Propietario del Inmueble: </b></label></td>
		</tr>	
		<tr>
			<td style="width:95%; text-align:center;"><br><label type='text' name='propietario'>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</label></td>
		</tr>
		<tr>
			<td style="width:95%; text-align:center;"><br><label type='text' name=''>Banco xxxxxxxxxxxxx</label></td>
		</tr>
		<tr>
			<td style="width:95%; text-align:center;"><br><label for='valuador'>VALUADOR</label></td>
		</tr>	
		<tr>
			<td style="width:95%; text-align:center;"><br><label type='text'><u>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</u></label></td>
		</tr>
		<tr>
			<td style="width:95%; text-align:center;"><br><label type='text'>SSF PV-00000000</label></td>
		</tr>
		<tr>
			<td style="width:95%; text-align:center;"><br><label for='perito'><b>PERITO VALUADOR AUTORIZADO</b></label></td>
		</tr>	
		<tr>
			<td style="width:95%; text-align:center;"><br><label type='text'><b>INTENDENCIA DEL SISTEMA FINANCIERO</b></label></td>
		</tr>
		<tr>
			<td style="width:95%; text-align:center;"><br><label for='fecha'>FECHA DE VALUO:</label></td>
		</tr>	
		<tr>
			<td style="width:95%; text-align:center;"><br><br><label type='text'></label></td>
		</tr>
		<tr>
			<td style="width:95%; text-align:center;"><br><label name=''><u>Datos del Inmueble</u></label></td>
		</tr>
		<tr>
			<td style="width:95%; text-align:center;"><br><label for='ubicacion'>UBICACION:</label></td>
		</tr>	
		<tr>
			<td style="width:95%; text-align:center;"><br><label type='text' name='ubicacion'>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</label></td>
		</tr>
		<tr>
			<td style="width:95%; text-align:center;"><br><label for='valuador'>DEPARAMENTO:</label></td>
		</tr>
		<tr>
			<td style="width:95%; text-align:center;"><br><br><label>MUNICIPIO:</label></td>
		</tr>
		<tr>
			<td style="width:95%; text-align:center;"><br><br><label for='valuador'>TIPO DE PROPIEDAD:</label></td>
		</tr>
		<tr>
			<td style="width:95%; text-align:center;"><br><br><label>TIPO DE VALUO:</label><br><br><br><br><br><br><br><br></td>
		</tr>
	</table>
</page>
<page backtop="30mm" backbottom="14mm" backleft="10mm" backright="10mm" style="font-size: 12pt" backimgx="center" backimgy="bottom" backimgw="100%">
    <page_header>   
    </page_header>
    <page_footer>   
    </page_footer>
		<h5>1) Informacion de caracter General</h5>
		<table style="width:100%; border:0.5px solid #000; text-aling:center; margin:auto; font-size:14px; font-family:arial;">
		<tr>
			<td  style="width:60%;"><br><label>a) Propietario del Inmueble</label></td>
			<td  style="width:40%;"></td>
		</tr>
		<tr>
			<td><br><label>Numero de Documento:</label></td>
			<td><label>Derecho:</label></td>
		</tr>
		<tr>
			<td><br><label>Tipo de Propiedad:</label></td>
			<td><label>Finalidad del Valuo:</label></td>
		</tr>
		<tr>
			<td><br><label>b) Fecha del Valuo:</label></td>
			<td><br><label>IPC: </label></td>
		</tr>
		<tr>
			<td><br><label>c) Valor del bien con base en las condiciones del mismo<br> en la fecha del valuo</label></td>
			<td><br><label>$0.0</label></td>
		</tr>
		<tr>
			<td><br><label>d) Valor Comercial, Valuo por el metodo Comparativo de <br>Mercado</label></td>
			<td><br><label>$0.0</label></td>
		</tr>
		<tr>
			<td><br><label>e) Valor de Reposicion a partir del metodo de costo</label></td>
			<td><br><label>$0.0</label></td>
		</tr>
		<tr>
			<td><br><label>f) Valor del Terreno:</label></td>
			<td><br><label>Valor de la Construccion:</label></td>
		</tr>
		</table>
		<h5>2) Informacion especifica para terrenos y construcciones</h5>
		<table style="width:100%; border:0.5px solid #000; text-aling:center; margin:auto; font-size:14px; font-family:arial;">
		<tr>
			<td style="width:50%;"><label><br><b>a) Descripcion del entorno</b></label></td>
			<td style="width:50%;"></td>
		</tr>
		<tr>
			<td colspan="2"><br><label>i) Direccion y Ubicacion exacta del Inmueble</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label for='ubicacion'>Ubicacion:</label></td>	
		</tr>
		<tr>
			<td><br><label>Departamento:</label></td>
			<td><br><label>Municipio:</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label>ii) Condiciones y factibilidad de las vias de acceso</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label >a) Recubrimiento que presenta la via de acceso</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label>b) Delimitacion de la via de acceso</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label>c) Acera peatonal:</label></td>
		</tr>
		<tr>
			<td colspan="2" ><br><label>iii) Servicios basicos publicos y privados</label></td>
		</tr>
		<tr>
			<td><br><label>a) Agua potable:</label></td>
			<td><br><label>c) Energia electrica:</label></td>
		</tr>
		<tr>
			<td><br><label>b) Aguas negras:</label></td>
			<td><br><label>d) Telefonia</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label><b>b) Descripcion del terreno:</b></label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label>i) Ubicacion Contextual:</label></td>
		</tr>
		<tr>
			<td style='width:50%;'><br><label>Topografia del sector:</label></td>
			<td style='width:50%;'><br><label>Topografia del Terreno:</label></td>
		</tr>
		<tr>
			<td><br><label>Tipo de via de acceso:</label></td>
			<td><br><label>Ubicacion a escala regional</label></td>
		</tr>
		<tr>
			<td><br><label>Areas Planas</label></td>
			<td><br><label>Areas Onduladas</label></td>
		</tr>
		<tr>
			<td><br><label>Areas Semiplanas</label></td>
			<td><br><label>Areas Quebradas</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label>ii) Vocacion del Terreno</label></td>
		</tr>
		<tr>
			<td><br><label>Vocacion del Terreno:</label></td>
			<td><br><label>Morfologia del Inmueble:</label></td>
		</tr>
		<tr>
			<td><br><label>Uso actual del inmueble:</label></td>
			<td><br><label>Seguridad del entorno</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label>iii) Tipo de Suelo:</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label>iv) Descripcion de la vegetacion existente</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label>HOl</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label>Plagas y/o enfermedades de la vegetacion</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label>iv) Servidumbres y otros relevantes</label></td>
		</tr>
		<tr>
			<td colspan="2"><br><label>HOasd</label></td>
		</tr>
		</table>
		<br>
		<table style="width:100%; border:0.5px solid #000; text-aling:center; margin:auto; font-size:14px; font-family:arial;">
		<tr>
			<td style="width:50%;" colspan="4"><br><label>c) Descripcion de la Infraestructura Fisica del Inmueble: </label></td>
			<td style=""></td>
		</tr>
		<tr>
			<td style="width:50%;" colspan="5" ><br><label>i) Areas Totales Comunes y Utiles</label></td>
		</tr>
		<tr>
			<td style="width:20%;"><br><label><b>Area Total:</b></label></td>
			<td style="width:40%;" colspan="2"><br><label><b>Dimensiones del Terreno(Mts)</b></label></td>
			<td style="width:40%;" colspan="2"><br><label><b>Colindantes del Inmueble</b></label></td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"><br><label>Segun documento de propiedad</label></td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td></td>
			<td><br><label><b>Lindero Norte</b></label></td>
			<td><br><label>0</label><label>Tramo</label></td>
			<td><br><label>0.0</label><label>ml</label></td>
			<td></td>
		</tr>
		<tr>
			<td><br><b>Area S/Inspecion:</b></td>
			<td><br><label></label><label><b>Lindero Sur</b></label></td>
			<td><br><label>0</label><label>Tramo</label></td>
			<td><br><label>0.0</label><label>ml</label></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><br><label> </label><label><b>Lindero Oriente</b></label></td>
			<td><br><label>0</label><label>Tramo</label></td>
			<td><br><label>0.0</label><label>ml</label></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><br><label></label><label><b>Lindero Poniente</b></label></td>
			<td><br><label>0</label><label>Tramo</label></td>
			<td><br><label>0.0</label><label>ml</label></td>
			<td></td>
		</tr>
		<tr>	
			<td><br><label><b>Area Util:</b></label></td>
			<td colspan="2"><br><label>Segun Inspeccion:</label></td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td></td>
			<td><br><label></label><label><b>Lindero Norte</b></label></td>
			<td><br><label>0</label><label>Tramo</label></td>
			<td><br><label>0.0</label><label>ml</label></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><br><label></label><label><b>Lindero Sur</b></label></td>
			<td><br><label>0</label><label>Tramo</label></td>
			<td><br><label>0.0</label><label>ml</label></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><br><label></label><label><b>Lindero Oriente</b></label></td>
			<td><br><label>0</label><label>Tramo</label></td>
			<td><br><label>0.0</label><label>ml</label></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><br><label></label><label><b>Lindero Poniente</b></label></td>
			<td><br><label>0</label><label>Tramo</label></td>
			<td><br><label>0.0</label><label>ml</label></td>
			<td></td>
		</tr>
	</table>
</page>
<page backtop="30mm" backbottom="14mm" backleft="10mm" backright="10mm" style="font-size: 12pt" backimgx="center" backimgy="bottom" backimgw="100%">
    <page_footer>   
    </page_footer>
				<h5>Estado de Conservacion</h5>
				<table style="width:100%; border:0.5px solid #000; text-aling:center; margin:auto; font-size:14px; font-family:arial;">
				<tr>
					<td style="width:100%"><label><b>Numero de Niveles de Construccion:</b></label><br></td>
				</tr>
				<tr>
					<td><br><label>a)Estado Actual de la Construccion:</label></td>
				</tr>
				<tr>
					<td><br><label>b)Estado de Acabados:</label></td>
				</tr>
				<tr>
					<td><br><label>c)Mantenimiento del Entorno:</label></td>	
				</tr>
				<tr>
					<td><br><label>d)Clasificacion de la Infraestructura:</label></td>	
				</tr>
			    </table>
				<h5>Ambientes de la Edificacion</h5>
				<table style="width:100%; border:0.5px solid #000; text-aling:center; margin:auto; font-size:14px; font-family:arial;">
					<tr>
						<td style="width:100%; height:20px;" ></td>
					</tr>
				</table>
				<h5>Accesorios existentes</h5>
				<table style="width:100%; border:0.5px solid #000; text-aling:center; margin:auto; font-size:14px; font-family:arial;">
					<tr>
						<td style="width:50%;"><label>Delimitacion de Lindero:</label></td>
						<td style="width:50%;"><label>Tipo de cielo:</label></td>
					</tr>
					<tr>
						<td><br><label>Tipo de puertas:</label></td>
						<td><br><label>Ventanas:</label></td>
					</tr>
					<tr>
						<td><br><label>Tipo de piso:</label></td>
						<td><br><label>Defensas</label></td>
					</tr>
					<tr>
						<td><br><label>Areas Recubierta:</label></td>
						<td><br><label>Pantri:</label></td>
					</tr>
					<tr>
						<td><br><label>Sistema Hidraulico:</label></td>
						<td><br><label>Sistema Hidraulico:</label></td>
					</tr>
					<tr>
						<td><br><label>Pozos:</label></td>
						<td><br><label>Muro de Contension:</label></td>
					</tr>
				</table>
				<h5>iii)Condiciones de descarga y tratamiento de aguas negras, sevidas, pluviales o residuos industriales:</h5>
				<table style="width:100%; border:0.5px solid #000; text-aling:center; margin:auto; font-size:14px; font-family:arial;">
					<tr>
						<td style="width:100%; height:20px;" ></td>
					</tr>
				</table>
				<h5>Descripcion del entorno geologico</h5>
				<table style="width:100%; border:0.5px solid #000; text-aling:center; margin:auto; font-size:14px; font-family:arial;">
					<tr>
						<td style="width:50%;"><label>Entorno Ecologico</label></td>
						<td style="width:50%;"></td>
					</tr>
					<tr>
						<td><br><label>Riesgos Naturales:</label></td>
						<td></td>
					</tr>
					<tr>
						<td><br><label>Contaminacion ambiental observada:</label></td>
						<td></td>
					</tr>
					<tr>
						<td><br><label>Tipo de Ubicacion:</label></td>
						<td></td>
					</tr>
					<tr>
						<td><br><label>Equipamiento: </label></td>
						<td></td>
					</tr>
					<tr>
						<td><label>Equipamento 1:</label></td>
						<td><label>Eqipamento 2:</label></td>
					</tr>
					<tr>
						<td><label>Equipamento 3:</label></td>
						<td><label>Eqipamento 4:</label></td>
					</tr>
				</table>
				<h5>Riesgos fundamentados</h5>
				<table style="width:100%; border:0.5px solid #000; text-aling:center; margin:auto; font-size:14px; font-family:arial;">
					<tr>
						<td style="width:100%; height:20px;"></td>
					</tr>
				</table>
</page>

