<?php
// FUNCIONS INSERTS SUGAR CRM ################################################################
//funcio obtenir Data / Hora
function obteData(){
	$data = getdate();

	$any = $data['year'];
	$mes = $data['mon'];
	$dia = $data['mday'];
	
	$hora = $data['hours'];
	$min = $data['minutes'];
	$seg = $data['seconds'];
	
	$cadenaDataHora = "".$any."-".$mes."-".$dia." ".$hora.":".$min.":".$seg."";
	return($cadenaDataHora);	
}
//generar id
function create_guid(){
	$microTime = microtime();
	list($a_dec, $a_sec) = explode(" ", $microTime);

	$dec_hex = sprintf("%x", $a_dec* 1000000);
	$sec_hex = sprintf("%x", $a_sec);

	ensure_length($dec_hex, 5);
	ensure_length($sec_hex, 6);

	$guid = "";
	$guid .= $dec_hex;
	$guid .= create_guid_section(3);
	$guid .= '-';
	$guid .= create_guid_section(4);
	$guid .= '-';
	$guid .= create_guid_section(4);
	$guid .= '-';
	$guid .= create_guid_section(4);
	$guid .= '-';
	$guid .= $sec_hex;
	$guid .= create_guid_section(6);

	return $guid;
}
function ensure_length(&$string, $length){
	$strlen = strlen($string);
	if($strlen < $length){
		$string = str_pad($string,$length,"0");
	}else if($strlen > $length){
		$string = substr($string, 0, $length);
	}
}
function create_guid_section($characters){
	$return = "";
	for($i=0; $i<$characters; $i++){
		$return .= sprintf("%x", mt_rand(0,15));
	}
	return $return;
}
// ###########################################################################################

function precioMinimo($mod){
	global $lang;
	global $VALOR_LLIURA;
	global $GASTOS_ENG;

	$sql="SELECT precio FROM modelo_".$_SESSION['lang']." WHERE modeloid='$mod'";
	$PRECIO=mysql_result(mysql_query($sql),0,0);
	$arr_precios = explode(",", $PRECIO);
	$limit=count($arr_precios);
	$retorna=explode(":", $arr_precios[$limit-1]);
	$PRECIO=$retorna[1];

	if($lang=="eng"){
		$LIBRAS=$PRECIO*$VALOR_LLIURA;
		$GASTOS=$LIBRAS*$GASTOS_ENG;
		$PRECIO=$LIBRAS+$GASTOS;
	}
	return $PRECIO;
}

function precioCantidad($model,$cantidad) {
	global $lang;
	global $VALOR_LLIURA;
	global $GASTOS_ENG;

	$sql="SELECT precio FROM modelo_".$_SESSION['lang']." WHERE modeloid=$model";
	$DATOS_MODELO=mysql_fetch_array(mysql_query($sql));
	$PRECIO = $DATOS_MODELO['precio'];
	$arr_precio = explode(",", $PRECIO);
	$limit=count($arr_precio);
	for ($i=0; $i<$limit; $i++) {
		$matriz[$i] = explode(":", $arr_precio[$i]);
		if ($cantidad == $matriz[$i][0]) {
			$PRECIO=$matriz[$i][1];
			if($lang=="eng"){
				$LIBRAS=$PRECIO*$VALOR_LLIURA;
				$GASTOS=$LIBRAS*$GASTOS_ENG;
				$PRECIO=$LIBRAS+$GASTOS;
			}
			return $PRECIO;
		}
	}
}

function CalcularPrecioMinimo($Precios){
	global $lang;
	global $VALOR_LLIURA;
	global $GASTOS_ENG;

	$arr_precio = explode(",", $Precios);
	$limit=count($arr_precio);
	for($i=0; $i<$limit; $i++){
		$matriz[$i] = explode(":", $arr_precio[$i]);
		$ArrPrecios[$i] = $matriz[$i][1];
		$ArrCantidad[$i] = $matriz[$i][0];
	}
	$PRECIO=$ArrPrecios[$limit-1];

	if($lang=="eng"){
		$LIBRAS=$PRECIO*$VALOR_LLIURA;
		$GASTOS=$LIBRAS*$GASTOS_ENG;
		$PRECIO=$LIBRAS+$GASTOS;
	}
	return $PRECIO;
}


function CalcularPrecioUnidad($Precios, $Cantidad){
	global $lang;
	global $VALOR_LLIURA;
	global $GASTOS_ENG;

	$arr_precio = explode(",", $Precios);
	$limit=count($arr_precio);
	for($i=0; $i<$limit; $i++){
		$matriz[$i] = explode(":", $arr_precio[$i]);
		$ArrPrecios[$i] = $matriz[$i][1];
		$ArrCantidad[$i] = $matriz[$i][0];
	}

	if($Cantidad >= $ArrCantidad[0]){
		for($i=0; $i<$limit; $i++){
			if($Cantidad == $ArrCantidad[$i]){ $PRECIO=$ArrPrecios[$i]; }
			else if($Cantidad > $ArrCantidad[$i] && $Cantidad < $ArrCantidad[$i+1]){ $PRECIO=$ArrPrecios[$i]; }
			else if($Cantidad > $ArrCantidad[$i] && $Cantidad > $ArrCantidad[$i+1]){ $PRECIO=$ArrPrecios[$limit-1]; }
		}

		if($lang=="eng"){
			$LIBRAS=$PRECIO*$VALOR_LLIURA;
			$GASTOS=$LIBRAS*$GASTOS_ENG;
			$PRECIO=$LIBRAS+$GASTOS;
		}
		return $PRECIO;
	}
}

function CalcularPrecioSuplementoUnidad($Cantidad, $Fotos){
	global $lang;
	global $VALOR_LLIURA;
	global $GASTOS_ENG;

	$preciofoto=0.18;
	$preciofijo=100;
	
	$PRECIO = ((($Fotos*$preciofoto)*$Cantidad)+$preciofijo) / $Cantidad;

		if($lang=="eng"){
			$LIBRAS=$PRECIO*$VALOR_LLIURA;
			$GASTOS=$LIBRAS*$GASTOS_ENG;
			$PRECIO=$LIBRAS+$GASTOS;
		}
	
	return $PRECIO;
	
}

function CalcularPrecioSuplemento($Cantidad, $Fotos){
	global $lang;
	global $VALOR_LLIURA;
	global $GASTOS_ENG;

	$preciofoto=0.18;
	$preciofijo=100;
	
	$PRECIO = (($Fotos*$preciofoto)*$Cantidad)+$preciofijo;

		if($lang=="eng"){
			$LIBRAS=$PRECIO*$VALOR_LLIURA;
			$GASTOS=$LIBRAS*$GASTOS_ENG;
			$PRECIO=$LIBRAS+$GASTOS;
		}
	
	return $PRECIO;
	
}

function CalcularPrecioTotal($Precios, $Cantidad){
	global $lang;
	global $VALOR_LLIURA;
	global $GASTOS_ENG;

	$arr_precio = explode(",", $Precios);
	$limit=count($arr_precio);
	for($i=0; $i<$limit; $i++){
		$matriz[$i] = explode(":", $arr_precio[$i]);
		$ArrPrecios[$i] = $matriz[$i][1];
		$ArrCantidad[$i] = $matriz[$i][0];
	}

	if($Cantidad >= $ArrCantidad[0]){
		for($i=0; $i<$limit; $i++){
			if($Cantidad == $ArrCantidad[$i]){ $Pvp=$ArrPrecios[$i]; }
			else if($Cantidad > $ArrCantidad[$i] && $Cantidad < $ArrCantidad[$i+1]){ $Pvp=$ArrPrecios[$i]; }
			else if($Cantidad > $ArrCantidad[$i] && $Cantidad > $ArrCantidad[$i+1]){ $Pvp=$ArrPrecios[$limit-1]; }
		}
		$PRECIO=$Pvp*$Cantidad;

		if($lang=="eng"){
			$LIBRAS=$PRECIO*$VALOR_LLIURA;
			$GASTOS=$LIBRAS*$GASTOS_ENG;
			$PRECIO=$LIBRAS+$GASTOS;
		}
		return $PRECIO;
	}
}

function CalcularPrecioIVA($Precios, $Cantidad){
	global $IVA_PERCENT;
	global $lang;
	global $VALOR_LLIURA;
	global $GASTOS_ENG;

	$arr_precio = explode(",", $Precios);
	$limit=count($arr_precio);
	for($i=0; $i<$limit; $i++){
		$matriz[$i] = explode(":", $arr_precio[$i]);
		$ArrPrecios[$i] = $matriz[$i][1];
		$ArrCantidad[$i] = $matriz[$i][0];
	}

	if($Cantidad >= $ArrCantidad[0]){
		for($i=0; $i<$limit; $i++){
			if($Cantidad == $ArrCantidad[$i]){ $Pvp=$ArrPrecios[$i]; }
			else if($Cantidad > $ArrCantidad[$i]){ $Pvp=$ArrPrecios[$i+1]; }
		}
		$PRECIO=$Pvp*$Cantidad;
		$IVA=$PRECIO*$IVA_PERCENT;
		$TOTAL=$PRECIO+$IVA;

		if($lang=="eng"){
			$LIBRAS=$TOTAL*$VALOR_LLIURA;
			$GASTOS=$LIBRAS*$GASTOS_ENG;
			$TOTAL=$LIBRAS+$GASTOS;
		}
		return $TOTAL;
	}
}

function QueEmail($valor){
	if ($valor=="cat") $txt="info@calendarisambimatge.com";
	else if ($valor=="fra") $txt="info@pubcalendriers.fr";
	else if ($valor=="ita") $txt="info@calendarifoto.it";
	else if ($valor=="eng") $txt="info@adcalendars.co.uk";
	else if ($valor=="deu") $txt="info@ihre-werbekalender.de";
	else $txt="info@calendariosconimagen.com";
	return $txt;
}

function QueUrl($valor){
	if ($valor=="cat") $txt="www.calendarisambimatge.com";
	else if ($valor=="fra") $txt="www.pubcalendriers.fr";
	else if ($valor=="ita") $txt="www.calendarifoto.it";
	else if ($valor=="eng") $txt="www.adcalendars.co.uk";
	else $txt="www.calendariosconimagen.com";
	return $txt;
}

function QueDatosCalendario($valor){
	global $msg;
	if ($valor=="0") $txt=$msg[4][31];
	else if ($valor=="1") $txt=$msg[4][85];
	else if ($valor=="2") $txt=$msg[4][86];
	return $txt;
}

function QueTipoFotos($valor){
	global $msg;
	if ($valor=="1") $txt=$msg[5][2];
	else if ($valor=="2") $txt="Shutterstock";
	else if ($valor=="3") $txt=$msg[5][1]." 2008";
	else if ($valor=="4") $txt=$msg[5][1]." 2009";
	else if ($valor=="6") $txt=$msg[5][1]." 2010";
	else if ($valor=="7") $txt=$msg[5][1]." 2011";
	else if ($valor=="5") $txt=$msg[5][1]." 2012";
	else if ($valor=="8") $txt=$msg[5][1]." 2013";
	else if ($valor=="9") $txt=$msg[5][1]." 2014";
	else if ($valor=="23") $txt=$msg[5][1]." 2015";
	else if ($valor=="24") $txt=$msg[5][1]." 2016";
	else if ($valor=="10") $txt=$msg[5][1]." 2017";
	return $txt;
}

function QueTipoFotosFicha($valor){
	global $msg;
	if ($valor=="1") $txt=$msg[5][2];
	else if ($valor=="2") $txt="Shutterstock";
	else if ($valor=="3") $txt="Col. 2008";
	else if ($valor=="4") $txt="Col. 2009";
	else if ($valor=="6") $txt="Col. 2010";
	else if ($valor=="7") $txt="Col. 2011";
	else if ($valor=="5") $txt="Col. 2012";
	else if ($valor=="8") $txt="Col. 2013";
	else if ($valor=="9") $txt="Col. 2014";
    else if ($valor=="23") $txt="Col. 2015";
    else if ($valor=="24") $txt="Col. 2016";
	else if ($valor=="10")$txt="Col. 2017";
	return $txt;
}


function QueTipoCliente($valor){
	global $msg;
	if ($valor=="1") $txt=$msg[4][64];
	else if ($valor=="2") $txt=$msg[4][65];
	else if ($valor=="3") $txt=$msg[4][66];
	return $txt;
}

function QueTipoPago($valor){
	global $msg;
	if ($valor=="1") $txt=$msg[4][52];
	else if ($valor=="3") $txt=$msg[4][54];
	else if ($valor=="2") $txt=$msg[4][56];
	else if ($valor=="4") $txt=$msg[4][52];
	return $txt;
}

function Si_No($valor){
	global $msg;
	if ($valor=="0") $txt=$msg[3][59];
	else if ($valor=="1") $txt=$msg[3][58];
	return $txt;
}

function QueIdioma($valor){
	if ($valor=="esp") $txt="Espa&ntilde;ol";
	else if ($valor=="cat") $txt="Catal&agrave;";
	else if ($valor=="fra") $txt="Fran&ccedil;ais";
	else if ($valor=="ita") $txt="Italiano";
	else if ($valor=="eng") $txt="English";
	return $txt;
}

function QueIdioma_pdf($valor){
	if ($valor=="esp") $txt="Español";
	else if ($valor=="cat") $txt="Català";
	else if ($valor=="fra") $txt="Français";
	else if ($valor=="ita") $txt="Italiano";
	else if ($valor=="eng") $txt="English";
	return $txt;
}

function QueFestivos($valor){
	if ($valor=="esp") $txt="Estatales (ESP)";
	else if ($valor=="cat") $txt="Catalunya";
	else if ($valor=="fra") $txt="France";
	else if ($valor=="ita") $txt="Italia";
	else if ($valor=="eng") $txt="England";
	else $txt=$valor;
	return $txt;
}

function QueColor($valor){
	global $msg;
	if ($valor=="0") $txt=$msg[2][15];
	else if ($valor=="1") $txt=$msg[2][16];
	return $txt;
}

function QuePais($valor){
	global $msg;
	switch($valor){
		case "ESP" : $txt = "Espa&ntilde;a"; break;
		case "AND" : $txt = "Andorra"; break;
		case "POR" : $txt = "Portugal"; break;
		case "FRA" : $txt = "France"; break;
		case "SUI" : $txt = "Suisse"; break;
		case "GER" : $txt = "Allemagne"; break;
		case "BEL" : $txt = "Belgique"; break;
		case "LUX" : $txt = "Luxembourg"; break;
		case "MON" : $txt = "Monaco"; break;
		case "ITA" : $txt = "Italia"; break;
		case "GBR" : $txt = "United Kingdom"; break;
		case "IRL" : $txt = "Ireland "; break;
	}
	return $txt;
}

function QueMarco($valor){
	global $msg;
	if ($valor=="0") $txt=$msg[2][53];
	else if ($valor=="1") $txt=$msg[2][52];
	else $txt=$valor;
	return $txt;
}

function QueModelo_Esp($modelo){
	$sql="SELECT nombre_modelo FROM modelo_esp WHERE modeloid='$modelo'";
	$res=mysql_query($sql);
	if (mysql_num_rows($res)>0){ $nombremodelo=mysql_result($res, 0, 0); }
	return $nombremodelo;
}

function QueDiseno_Esp($diseno){
	$sql="SELECT nombre_diseno FROM tipo_diseno_esp WHERE tipo_disenoid='$diseno'";
	$res=mysql_query($sql);
	if (mysql_num_rows($res)>0){ $nombrediseno=mysql_result($res, 0, 0); }
	return $nombrediseno;
}

function QueDiseno($diseno){
	$sql="SELECT nombre_diseno FROM tipo_diseno_".$_SESSION['lang']." WHERE tipo_disenoid='$diseno'";
	$res=mysql_query($sql);
	if (mysql_num_rows($res)>0){ $nombrediseno=mysql_result($res, 0, 0); }
	return $nombrediseno;
}

function QueDimg($diseno){
	$sql="SELECT *FROM tipo_diseno_".$_SESSION['lang']." WHERE tipo_disenoid='$diseno'";
	$res=mysql_query($sql);
	$fretch=mysql_fetch_array($res);
	$nimage=$fretch['prefijo'];
	$nimage=str_replace("1C0", "", $nimage);
	$nimage=str_replace("2C0", "", $nimage);
	return $nimage;
}


function QueDisenoFicha($diseno,$lang){
	$sql="SELECT nombre_diseno FROM tipo_diseno_".$lang." WHERE tipo_disenoid='$diseno'";
	$res=mysql_query($sql);
	if (mysql_num_rows($res)>0){ $nombrediseno=mysql_result($res, 0, 0); }
	return $nombrediseno;
}

function QueModelo($modelo){
	$sql="SELECT nombre_modelo FROM modelo_".$_SESSION['lang']." WHERE modeloid='$modelo'";
	$res=mysql_query($sql);
	if (mysql_num_rows($res)>0){ $nombremodelo=mysql_result($res, 0, 0); }
	return $nombremodelo;
}

function QueModeloFicha($modelo,$lang){
	$sql="SELECT nombre_modelo FROM modelo_".$lang." WHERE modeloid='$modelo'";
	$res=mysql_query($sql);
	if (mysql_num_rows($res)>0){ $nombremodelo=mysql_result($res, 0, 0); }
	return $nombremodelo;
}

function QuePrefijoModelo($modelo){
	$sql="SELECT prefijo FROM modelo_".$_SESSION['lang']." WHERE modeloid='$modelo'";
	$res=mysql_query($sql);
	if (mysql_num_rows($res)>0){ $prefijo=mysql_result($res, 0, 0); }
	return $prefijo;
}

function QuePrefijoDiseno($diseno){
	$sql="SELECT prefijo FROM tipo_diseno_".$_SESSION['lang']." WHERE tipo_disenoid='$diseno'";
	$res=mysql_query($sql);
	if (mysql_num_rows($res)>0){ $prefijo=mysql_result($res, 0, 0); }
	return $prefijo;
}

function QueCaracteristicasDiseno($diseno){
	$sql="SELECT caracteristicas FROM tipo_diseno_".$_SESSION['lang']." WHERE tipo_disenoid='$diseno'";
	$res=mysql_query($sql);
	if (mysql_num_rows($res)>0){ $prefijo=mysql_result($res, 0, 0); }
	return $prefijo;
}

function tipoCalendario($modelo){
	$sql="SELECT tipo FROM modelo_".$_SESSION['lang']." WHERE modeloid=$modelo";
	$DATOS_MODELO=mysql_fetch_array(mysql_query($sql));
	$tipocalendario = $DATOS_MODELO['tipo'];
	return $tipocalendario;
}

function buscar_disenos($mod){
	
	if($_SESSION["design"]==""){
		$sql="SELECT tipo_disenoid, nombre_diseno, caracteristicas, prefijo FROM tipo_diseno_".$_SESSION['lang']." WHERE extra_field='$mod' LIMIT 0,1";
		$rs = mysql_query($sql);
		$ns = mysql_fetch_array($rs);
		$_SESSION["design"] = $ns["tipo_disenoid"];
		$_SESSION["marco"] = 1;
	}
	
	$datos= "";
	$sql="SELECT tipo_disenoid, nombre_diseno, caracteristicas, prefijo FROM tipo_diseno_".$_SESSION['lang']." WHERE extra_field='$mod'";
	$res=mysql_query($sql);
	while ($fila = mysql_fetch_array($res)){ $datos[] = $fila; }
	return $datos;
}

function validaVAT($numero,$pais){
	$url_web = fopen ("https://isvat.appspot.com/". $pais ."/". $numero ."/", "r");
	if (!$url_web) { echo "<p>Error obteniendo codigo url.\n"; exit; }
	
	while (!feof ($url_web)){
		$contenido = fgets ($url_web);
	}
	fclose($url_web);
	
	return $contenido;
}

function showThumbs($modelo){
	$sql=mysql_query("SELECT * FROM tipo_diseno_".$_SESSION['lang']." WHERE extra_field='$modelo'");
	$mod=mysql_fetch_assoc($sql);
	return $mod;
	
}



?>