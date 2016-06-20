//funcion de conversion de metros a varas
function metro_a_vara(mts, Var){
	var num_var;
	var num_metro=document.getElementById(mts).value
	if(num_metro == ''){num_metro='0';}
	num_metro=parseFloat(num_metro);

	num_var=num_metro*1.4308;
	num_var=Math.round(num_var*10000)/10000;
	num_var=num_var+'';
	document.getElementById(Var).value=num_var;
	}
	
	
//funcion para sacar area de terreno
function area_terreno(){
	var medida= parseInt(document.getElementById('medidas_segun').value);
    if(document.getElementById('area_valuar_mts').value){
			
		}
	else {
    
	if(medida==1){
		
		document.getElementById('area_util_mts').value=document.getElementById('area_total_mts').value;
		document.getElementById('area_util_var').value=document.getElementById('area_total_var').value;
		}

	else if(medida==2){
				
				var tipo_terreno= document.getElementById('morfologia_terreno').value;
				if(tipo_terreno==''){alert('Especifique la Morfologia del Inmueble')
					}
		
				tipo_terreno=parseFloat(tipo_terreno);
				
				//se recojen los valores de los tramos
				var tramo1= document.getElementById('tramo1').value;
				if(tramo1==''){tramo1='0';}
				tramo1=parseFloat(tramo1);
				
				var tramo2= document.getElementById('tramo2').value;
				if(tramo2==''){tramo2='0';}
				tramo2=parseFloat(tramo2);
				
				var tramo3= document.getElementById('tramo3').value;
				if(tramo3==''){tramo3='0';}
				tramo3=parseFloat(tramo3);
				
				var tramo4= document.getElementById('tramo4').value;
				if(tramo4==''){tramo4='0';}
				tramo4=parseFloat(tramo4);
				
				var area;
				 //se escoge el tipo de terreno
				if (tipo_terreno==1){
						area=((tramo1+tramo2)/2)*((tramo3+tramo4)/2);
					}
				else if(tipo_terreno==2){
						area=((tramo1+tramo2+tramo3+tramo4)*3.1416);
					}
					area=Math.round(area*10000)/10000;//redondeo a cuatro decimales
					area=area+'';//se pasa a String
				document.getElementById('area_inspeccion_mts').value=area;//presentacion del area calculada
				document.getElementById('area_util_mts').value=area;//presentacion del area calculada	
				metro_a_vara('area_inspeccion_mts', 'area_inspeccion_var');//convecion de area en varas cuadradas
				metro_a_vara('area_util_mts', 'area_util_var');//convecion de area en varas cuadradas
						
		}
		
	}
	}
function copiar_valores(){
	//copiado del tamaño de tramos 
	document.getElementById('tramo1_2').value=document.getElementById('tramo1').value;
	document.getElementById('tramo2_2').value=document.getElementById('tramo2').value;
	document.getElementById('tramo3_2').value=document.getElementById('tramo3').value;
	document.getElementById('tramo4_2').value=document.getElementById('tramo4').value;
	
	//copiado de la cantidad de tramos
	document.getElementById('num_tramo1_1').value=document.getElementById('num_tramo1').value;
	document.getElementById('num_tramo2_1').value=document.getElementById('num_tramo2').value;
	document.getElementById('num_tramo3_1').value=document.getElementById('num_tramo3').value;
	document.getElementById('num_tramo4_1').value=document.getElementById('num_tramo4').value;
	
	//copiado de descripcion de tramo
	document.getElementById('descrip_tramo1_1').value=document.getElementById('descrip_tramo1').value;
	document.getElementById('descrip_tramo2_1').value=document.getElementById('descrip_tramo2').value;
	document.getElementById('descrip_tramo_3_1').value=document.getElementById('descrip_tramo3').value;
	document.getElementById('descrip_tramo4_1').value=document.getElementById('descrip_tramo4').value;
		
	}
	
function establecer_area(){
	
	document.getElementById('area_inspeccion_mts').value=document.getElementById('area_valuar_mts').value;//presentacion del area calculada
	document.getElementById('area_util_mts').value=document.getElementById('area_valuar_mts').value;//presentacion del area calculada
	metro_a_vara('area_valuar_mts', 'area_valuar_var');
	document.getElementById('area_inspeccion_var').value=document.getElementById('area_valuar_var').value;//presentacion del area calculada
	document.getElementById('area_util_var').value=document.getElementById('area_valuar_var').value;//presentacion del area calculada
	
	}
		
function llenar_comparativo(terreno, nivel)
{
	if (terreno == "")
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
				nivel.innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET", "comparativo.php?id="+terreno,true);
		xmlhttp.send();
	}
}
function definir_servicios(){
	
	var electricidad=document.getElementById('electricidad').value;
	var telefono=document.getElementById('telefono').value;
	var agua_neg=document.getElementById('agua_neg').value;
	var agua_pot=document.getElementById('agua_pot').value;
	
	var binario=electricidad+telefono+agua_neg+agua_pot;
	var valor;
	switch(binario){
		case '1111': valor=1;break;
		case '1101': valor=2;break;
		case '0011': valor=3;break;
		case '0001': valor=4;break;
		case '1010': valor=5;break;
		case '1001': valor=6;break;
		case '1100': valor=7;break;
		case '0110': valor=8;break;
		case '0101': valor=9;break;
		case '1000': valor=10;break;
		case '0100': valor=10;break;
		case '0000': valor=11;break;
		default :valor=0;break;
		}
		return valor;
	}
	
function calcular_precio(){
    //condiciones
	var tipo_homologacios=document.getElementById('homologacion').value;
	var ipc=parseFloat(document.getElementById('ipc').value);
    
	//variables de seguridad
	var seguridad_actual=parseFloat(document.getElementById('seguridad').value);
	var seguridad_ref1=parseFloat(document.getElementsByName('val_fac_seg')[0].value);
	var seguridad_ref2=parseFloat(document.getElementsByName('val_fac_seg')[1].value);
	var seguridad_ref3=parseFloat(document.getElementsByName('val_fac_seg')[2].value);
	
	//variables ubicacion
	var ubicacion_actual=parseFloat(document.getElementById('ubicacion').value);
	var ubicacion_ref1=parseFloat(document.getElementsByName('val_tip_ubic')[0].value);
	var ubicacion_ref2=parseFloat(document.getElementsByName('val_tip_ubic')[1].value);
	var ubicacion_ref3=parseFloat(document.getElementsByName('val_tip_ubic')[2].value);
	//Acceso
	var acceso_actual=parseFloat(document.getElementById('acceso').value);
	var acceso_ref1=parseFloat(document.getElementsByName('val_tip_accs')[0].value);
	var acceso_ref2=parseFloat(document.getElementsByName('val_tip_accs')[1].value);
	var acceso_ref3=parseFloat(document.getElementsByName('val_tip_accs')[2].value);
	//servicios
	var servicios_actual=parseFloat(definir_servicios());
	var servicios_ref1=parseFloat(document.getElementsByName('val_serb_basic')[0].value);
	var servicios_ref2=parseFloat(document.getElementsByName('val_serb_basic')[1].value);
	var servicios_ref3=parseFloat(document.getElementsByName('val_serb_basic')[2].value);
	//tamaño
	var tamaño_actual=parseFloat(document.getElementById('area_util_mts').value);	
	var tamaño_ref1=parseFloat(document.getElementsByName('aream')[0].innerHTML);
	var tamaño_ref2=parseFloat(document.getElementsByName('aream')[1].innerHTML);
	var tamaño_ref3=parseFloat(document.getElementsByName('aream')[2].innerHTML);
	
	//precio
	var precio_actual;
	var precio_ref1=parseFloat(document.getElementsByName('aprecm')[0].innerHTML);
	var precio_ref2=parseFloat(document.getElementsByName('aprecm')[1].innerHTML);
	var precio_ref3=parseFloat(document.getElementsByName('aprecm')[2].innerHTML);
	
	
	//calculo seguridad
	var factor_seguridad1;
	factor_seguridad1=(1+(0.1*(seguridad_ref1-seguridad_actual)));
	var factor_seguridad2;
	factor_seguridad2=(1+(0.1*(seguridad_ref2-seguridad_actual)));
	var factor_seguridad3;
	factor_seguridad3=(1+(0.1*(seguridad_ref3-seguridad_actual)));
	
	//calculo acceso
	var factor_acceso1;
	factor_acceso1=(1+(0.0646*(acceso_ref1-acceso_actual)));
	var factor_acceso2;
	factor_acceso2=(1+(0.0646*(acceso_ref2-acceso_actual)));
	var factor_acceso3;
	factor_acceso3=(1+(0.0646*(acceso_ref3-acceso_actual)));
	
	//factor ubicacion
	var ubicacion_actual1;
	ubicacion_actual1=(1+(0.11*(ubicacion_ref1-ubicacion_actual)));
	var ubicacion_actual2;
	ubicacion_actual2=(1+(0.11*(ubicacion_ref2-ubicacion_actual)));
	var ubicacion_actual3;
	ubicacion_actual3=(1+(0.11*(ubicacion_ref3-ubicacion_actual)));
	
	//factor tamaño
	var factor_tamaño1;
	factor_tamaño1=((0.25*(tamaño_ref1/tamaño_actual))+0.75);
	var factor_tamaño2;
	factor_tamaño2=((0.25*(tamaño_ref2/tamaño_actual))+0.75);
	var factor_tamaño3;
	factor_tamaño3=((0.25*(tamaño_ref3/tamaño_actual))+0.75);
	
	//factor servicios
	var factor_servicios1;
	factor_servicios1=(1+(0.025*(servicios_ref1-servicios_actual)));
	var factor_servicios2;
	factor_servicios2=(1+(0.025*(servicios_ref2-servicios_actual)));
	var factor_servicios3;
	factor_servicios3=(1+(0.025*(servicios_ref3-servicios_actual)));
	
	//totales de comparacion
	var total1=(precio_ref1*factor_seguridad1*factor_acceso1*ubicacion_actual1*factor_tamaño1*factor_servicios1);
	var total2=(precio_ref2*factor_seguridad2*factor_acceso2*ubicacion_actual2*factor_tamaño2*factor_servicios2);
	var total3=(precio_ref3*factor_seguridad3*factor_acceso3*ubicacion_actual3*factor_tamaño3*factor_servicios3);
	
	//promedios de precios
	var precio_prom= ((precio_ref1+precio_ref2+precio_ref3)/3);
	var total_prom=((total1+total2+total3)/3);
	
	//areas promedio
	var areamts_prom=(tamaño_ref1+tamaño_ref2+tamaño_ref3)/3;
	var areavar_prom=(areamts_prom*1.4308);


	//desviacion estandar promedio
	var desviacion_estandar=Math.sqrt((0.5)*( (Math.pow((total1-total_prom),2))+(Math.pow((total2-total_prom),2))+(Math.pow((total3-total_prom),2)) ));
	//desviacion estandar normal
	var desviacion_estandar_normal=Math.sqrt((0.5)*( (Math.pow((precio_ref1-precio_prom),2))+(Math.pow((precio_ref2-precio_prom),2))+(Math.pow((precio_ref3-precio_prom),2)) ));
	
	//coeficiente de variacion promedio
	var coeficiente=(desviacion_estandar/total_prom)*100;
	//coeficiente de variacion normal
	var coeficiente_normal=(desviacion_estandar_normal/precio_prom)*100;

	//costo lote promedio total
	var costo_lote=areavar_prom*total_prom;

	//acceso tipo
	var acceso_actuals;
	switch(acceso_actual.toString()){//tipo de acceso
			 case '1': acceso_actuals='Principal/Comercial'; break;
			 case '2': acceso_actuals='Comercio Secundario'; break;
			 case '3': acceso_actuals='Transicion'; break;
			 case '4': acceso_actuals='Secundaria'; break;
			 case '5': acceso_actuals='De Tierra'; break;
			 case '6': acceso_actuals='Tipo Pasaje/Servidumbre'; break;
			 case '7': acceso_actuals='No Accesible'; break;
		}


	//redondeo de valores a cuatro decimales
	costo_lote=Math.round(costo_lote * 100) / 100;
	precio_prom=Math.round(precio_prom * 100) / 100;
	total_prom=Math.round(total_prom * 100) / 100;
	coeficiente=Math.round(coeficiente * 100) / 100;
	coeficiente_normal=Math.round(coeficiente_normal * 100) / 100;
	desviacion_estandar=Math.round(desviacion_estandar * 100) / 100;
	desviacion_estandar_normal=Math.round(desviacion_estandar_normal * 100) / 100;
	tamaño_actual=Math.round(tamaño_actual * 100) / 100;
	areamts_prom=Math.round(areamts_prom * 100) / 100;
	areavar_prom=Math.round(areavar_prom * 10000) / 10000;
	
	factor_seguridad1=Math.round(factor_seguridad1 * 10000) / 10000;
	factor_seguridad2=Math.round(factor_seguridad2 * 10000) / 10000;
	factor_seguridad3=Math.round(factor_seguridad3 * 10000) / 10000;
	factor_servicios1=Math.round(factor_servicios1 * 10000) / 10000;
	factor_servicios2=Math.round(factor_servicios2 * 10000) / 10000;
	factor_servicios3=Math.round(factor_servicios3 * 10000) / 10000;
	factor_tamaño1=Math.round(factor_tamaño1 * 10000) / 10000;
	factor_tamaño2=Math.round(factor_tamaño2 * 10000) / 10000;
	factor_tamaño3=Math.round(factor_tamaño3 * 10000) / 10000;
	ubicacion_actual1=Math.round(ubicacion_actual1 * 10000) / 10000;
	ubicacion_actual2=Math.round(ubicacion_actual2 * 10000) / 10000;
	ubicacion_actual3=Math.round(ubicacion_actual3 * 10000) / 10000;
	factor_acceso1=Math.round(factor_acceso1 * 10000) / 10000;
	factor_acceso2=Math.round(factor_acceso2 * 10000) / 10000;
	factor_acceso3=Math.round(factor_acceso3 * 10000) / 10000;
	total1=Math.round(total1 * 10000) / 10000;
	total2=Math.round(total2 * 10000) / 10000;
	total3=Math.round(total3 * 10000) / 10000;
	
	//asignacion de valores para mostrarlos
	
	$("#inmueble1").empty().text(precio_ref1.toString());
	$("#inmueble2").empty().text(precio_ref2.toString());
	$("#inmueble3").empty().text(precio_ref3.toString());

	$("#seguridad1").empty().text(factor_seguridad1.toString());
	$("#seguridad2").empty().text(factor_seguridad2.toString());
	$("#seguridad3").empty().text(factor_seguridad3.toString());
	
	$("#servicios1").empty().text(factor_servicios1.toString());
	$("#servicios2").empty().text(factor_servicios2.toString());
	$("#servicios3").empty().text(factor_servicios3.toString());
	
	$("#tamaño1").empty().text(factor_tamaño1.toString());
	$("#tamaño2").empty().text(factor_tamaño2.toString());
	$("#tamaño3").empty().text(factor_tamaño3.toString());
	
	$("#ubicacion1").empty().text(ubicacion_actual1.toString());
	$("#ubicacion2").empty().text(ubicacion_actual2.toString());
	$("#ubicacion3").empty().text(ubicacion_actual3.toString());
	
	$("#acceso1").empty().text(factor_acceso1.toString());
	$("#acceso2").empty().text(factor_acceso2.toString());
	$("#acceso3").empty().text(factor_acceso3.toString());
	
	$("#total1").empty().text(total1.toString());
	$("#total2").empty().text(total2.toString());
	$("#total3").empty().text(total3.toString());
	
	$("#promedioN").empty().text(precio_prom.toString());
	$("#PromedioC").empty().text(total_prom.toString());
	
	$("#desv_N").empty().text(desviacion_estandar_normal.toString());
	$("#desv_C").empty().text(desviacion_estandar.toString());
	
	$("#coef_N").empty().text(coeficiente_normal.toString());
	$("#coef_C").empty().text(coeficiente.toString());
	
	$("#lote_promedio").empty().text(areamts_prom.toString()+' mts  '+areavar_prom.toString()+' Vr');
	$("#costo_vara2").empty().text(total_prom.toString());
	$("#costo_lote").empty().text(costo_lote.toString());
	$("#area_valuada").empty().text(tamaño_actual.toString());
	$("#tipo_area").empty().text(acceso_actuals);
	}
