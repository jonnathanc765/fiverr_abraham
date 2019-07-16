<?php
session_start();

// IDIOMA ========================================
if(isset($_GET['lang']) && $_GET['lang']!=""){
	if($_GET['lang']=="esp" || $_GET['lang']=="cat" || $_GET['lang']=="fra" || $_GET['lang']=="ita" || $_GET['lang']=="eng"){
		session_unset();
		$_SESSION['lang']=$_GET['lang'];
	}
}
if(!isset($_SESSION['lang']) || $_SESSION['lang']==""){ $_SESSION['lang']="esp"; }
$host = $_SERVER['HTTP_HOST'];


if ($host == "adcalendars.co.uk" || $host == "www.adcalendars.co.uk" || $host == "www2.adcalendars.co.uk"){
	$_SESSION['lang'] = "eng"; $analitic="UA-751289-9";
}else if ($host == "calendarifoto.it" || $host == "www.calendarifoto.it" || $host == "www2.calendarifoto.it"){
	$_SESSION['lang'] = "ita";	$analitic="UA-751289-8";
}else if ($host == "calendariosconimagen.com" || $host == "www.calendariosconimagen.com" || $host == "www2.calendariosconimagen.com"){
	$_SESSION['lang'] = "esp";	$analitic="UA-751289-5";
}else if ($host == "calendarisambimatge.com" || $host == "www.calendarisambimatge.com" || $host == "www2.calendarisambimatge.com"){
	$_SESSION['lang'] = "cat";	$analitic="UA-751289-6";
}else if ($host == "pubcalendriers.fr" || $host == "www.pubcalendriers.fr" || $host == "www.pubcalendriers.ch" || $host == "pubcalendriers.ch"){
	$_SESSION['lang'] = "fra";	$analitic="UA-751289-7";
}else if ($host == "ihre-werbekalender.de" || $host == "www.ihre-werbekalender.de" || $host == "www2.ihre-werbekalender.de"){
	$_SESSION['lang'] = "deu"; $analitic="UA-751289-11";
}

$lang=$_SESSION['lang'];
include('includes/locale/'.$lang.'/language.php');
// ===============================================

// PREUS =========================================
$PRECIO_SOBRES="25:2.75,50:1.60,75:1.40,100:1.05,150:0.95,200:0.85,250:0.75,300:0.65,400:0.60,500:0.55,600:0.50,800:0.45,1000:0.40,1500:0.34,2000:0.27";
$PRECIO_TARJETAS="25:5.25,50:2.95,75:2.30,100:1.40,150:1.05,200:0.85,250:0.80,300:0.75,400:0.70,500:0.50,600:0.45,800:0.40,1000:0.34,1500:0.32,2000:0.27";

$IVA_PERCENT=0.21;
$IRPF_PERCENT=0;

//ENG
$VALOR_LLIURA=0.91;
$GASTOS_ENG=0.05;
if($lang=="eng"){ $SIMBOL_MONEDA=""; }
else{ $SIMBOL_MONEDA=""; }

define('EURO_SIMBOL', chr(128));
$euro_ascii = EURO_SIMBOL;

$SIMBOL_MONEDA = "&euro;";
$SIMBOL_MONEDA2 = $euro_ascii;
// ===============================================

// DADES FTP =====================================
$FTP_USER="cinetic";
$FTP_PWD="conimagen";
$FTP_PATH="ftp.calendariosconimagen.com/httpdocs/desenvolupament/pedidos_calendarios";
// ===============================================

// DADES INICIO ==================================
if(!isset($_SESSION['CARPETA'])){ $_SESSION['CARPETA']=date('YmdHis'); }
$PEDIDO=$_SESSION['CARPETA'];

if(isset($_REQUEST['mod']) && $_REQUEST['mod']!=""){
	$mod=$_REQUEST['mod'];
	$_SESSION['mod']=$mod;
}else if(isset($_SESSION['mod']) && $_SESSION['mod']!=""){
	$mod=$_SESSION['mod'];
}
// ===============================================

// DADES FITXA 1 =================================

function getHEX($color){

	$color = str_replace("rgb(","",$color);
	$color = str_replace(")","",$color);
	$color = explode(",",$color);

	$hex = RGBToHex($color[0],$color[1],$color[2]);

	return $hex;
}

function RGBToHex($r, $g, $b) {
		$hex = "#";
		$hex.= str_pad(dechex($r), 2, "0", STR_PAD_LEFT);
		$hex.= str_pad(dechex($g), 2, "0", STR_PAD_LEFT);
		$hex.= str_pad(dechex($b), 2, "0", STR_PAD_LEFT);

		return $hex;
}

if(isset($_REQUEST["nombres"]) && isset($_REQUEST["nom"])){
	$nombres = 1;
	$_SESSION["nombres"] = 1;

} elseif(!isset($_REQUEST["nombres"]) && isset($_REQUEST["nom"])){

	$nombres = 0;
	$_SESSION["nombres"] = "";
	unset($_SESSION["nombres"]);

} elseif(!isset($_REQUEST["nombres"]) && !isset($_REQUEST["nom"])){
		$nombres = $_SESSION["nombres"];
}

//echo $nombres."<br>".$_SESSION["nombres"];

if($nombres == 0){

	if(isset($_REQUEST['design']) && $_REQUEST['design']!=""){
		$design=$_REQUEST['design'];
		$_SESSION['design']=$design;
	}else if(isset($_SESSION['design']) && $_SESSION['design']!=""){
		$design=$_SESSION['design'];
	}

} elseif($nombres==1){

	if(isset($_REQUEST['design2']) && $_REQUEST['design2']!=""){
		$design=$_REQUEST['design2'];
		$_SESSION['design']=$design;
	}else if(isset($_SESSION['design']) && $_SESSION['design']!=""){
		$design=$_SESSION['design'];
	}
}

if($design=="147" || $design=="148"){
	$fondo="0";
	$_SESSION['fondo']=$fondo;

}else{

	if($nombres == 0){
		if(isset($_REQUEST['fondo']) && $_REQUEST['fondo']!=""){
			$fondo=$_REQUEST['fondo'];
			$_SESSION['fondo']=$fondo;
		}else if(isset($_SESSION['fondo']) && $_SESSION['fondo']!=""){
			$fondo=$_SESSION['fondo'];
		}else{ $fondo="0"; }

	} elseif($nombres == 1){

		if(isset($_REQUEST['fondo2']) && $_REQUEST['fondo2']!=""){
			$fondo=$_REQUEST['fondo2'];
			$_SESSION['fondo']=$fondo;
		}else if(isset($_SESSION['fondo']) && $_SESSION['fondo']!=""){
			$fondo=$_SESSION['fondo'];
		}else{ $fondo="0"; }

	}
}


if($nombres == 0){
	if($_REQUEST["setcolor"]){
			$_SESSION["marco"]="";
			$_SESSION["nombres"]="";
			$_SESSION["colorline"]= getHEX($_REQUEST["setcolor"]);
	} else {
		if($design=="130" || $design=="141" || $design=="147" || $design=="148" || $design=="150" || $design=="151" || $design=="128" || $design=="133"){
			$marco="-";
			$_SESSION['marco']=$marco;
			$_SESSION["nombres"] = "";
			$nombres ="0";
			$_SESSION["colorline"]="";

		}else{
			if(isset($_REQUEST['marco']) && $_REQUEST['marco']!=""){
				$marco=$_REQUEST['marco'];
				$_SESSION['marco']=$marco;
			}else if(isset($_SESSION['marco']) && $_SESSION['marco']!=""){
				$marco=$_SESSION['marco'];
			}else{ $marco="1"; }
		}
		}

} elseif($nombres==1){

	if($design=="130" || $design=="141" || $design=="147" || $design=="148" || $design=="150" || $design=="151" || $design=="128" || $design=="133"){
		$marco="-";
		$_SESSION['marco']=$marco;

	}else{

		if(isset($_REQUEST['marco2']) && $_REQUEST['marco2']!=""){
			$marco=$_REQUEST['marco2'];
			$_SESSION['marco']=$marco;
		}else if(isset($_SESSION['marco']) && $_SESSION['marco']!=""){
			$marco=$_SESSION['marco'];
		}else{ $marco="1"; }
	}

}


if($_SESSION["nombres"]==1 && ($_SESSION["cantidad"]!="" || $_SESSION["otra_cant"]!="")){
	$checbox_nombres = "checked enabled";
} else if($_SESSION["nombres"]!=1 && ($_SESSION["cantidad"]!="" || $_SESSION["otra_cant"]!="")){
	$checbox_nombres = "enabled";
} else if($_SESSION["nombres"]!=1 && ($_SESSION["cantidad"]=="" || $_SESSION["otra_cant"]=="")){
	$checbox_nombres = "disabled";
}

if(isset($_REQUEST['cantidad']) && $_REQUEST['cantidad']!=""){
	$cantidad=$_REQUEST['cantidad'];
	$_SESSION['cantidad']=$cantidad;
}else if(isset($_SESSION['cantidad']) && $_SESSION['cantidad']!=""){
	$cantidad=$_SESSION['cantidad'];
}

if(isset($_REQUEST['otra_cant']) && $_REQUEST['otra_cant']!=""){
	$otra_cant=$_REQUEST['otra_cant'];
	$_SESSION['otra_cant']=$otra_cant;
}else if(isset($_SESSION['otra_cant']) && $_SESSION['otra_cant']!=""){
	$otra_cant=$_SESSION['otra_cant'];
}

if(isset($_REQUEST['fotografias']) && $_REQUEST['fotografias']!=""){
	if($nombres==1){
		$fotografias = 22;
		$_SESSION['fotografias'] = $fotografias;
	} else if($nombres==0){
		$fotografias=$_REQUEST['fotografias'];
		$_SESSION['fotografias']=$fotografias;
	}

}else if(isset($_SESSION['fotografias']) && $_SESSION['fotografias']!=""){
	$fotografias=$_SESSION['fotografias'];
}else{
	$fotografias="10";
}


if($fotografias=="10"){ $ColeccionPostVar="coleccion18"; }
else if($fotografias=="24"){ $ColeccionPostVar="coleccion16"; }
else if($fotografias=="23"){ $ColeccionPostVar="coleccion15"; }
else if($fotografias=="9"){ $ColeccionPostVar="coleccion14"; }
else if($fotografias=="8"){ $ColeccionPostVar="coleccion13"; }
else if($fotografias=="5"){ $ColeccionPostVar="coleccion12"; }
else if($fotografias=="7"){ $ColeccionPostVar="coleccion11"; }
else if($fotografias=="6"){ $ColeccionPostVar="coleccion10"; }
else if($fotografias=="4"){ $ColeccionPostVar="coleccion09"; }
else if($fotografias=="3"){ $ColeccionPostVar="coleccion08"; }
else{ $ColeccionPostVar=""; }

if(isset($_REQUEST['coleccion-'])){
	$ColeccionPostVar='coleccion-';
}

if($ColeccionPostVar!=""){
	if(isset($_REQUEST[$ColeccionPostVar]) && $_REQUEST[$ColeccionPostVar]!=""){
		$coleccion=$_REQUEST[$ColeccionPostVar];
		$_SESSION['coleccion']=$coleccion;
	}else if(isset($_SESSION['coleccion']) && $_SESSION['coleccion']!=""){
		$coleccion=$_SESSION['coleccion'];
	}
}

if($nombres==0){
	if($fotografias=="2"){
		if(isset($_REQUEST['coleccion'])){
			$coleccion=$_REQUEST['coleccion'];
			$_SESSION['coleccion']=$coleccion;
		}else if(isset($_SESSION['coleccion'])){
			$coleccion=$_SESSION['coleccion'];
		}

	}

} elseif($nombres==1){
	if($fotografias=="22"){
		if(isset($_REQUEST['coleccion_nombres'])){
			$coleccion=$_REQUEST['coleccion_nombres'];
			$_SESSION['coleccion']=$coleccion;
		}else if(isset($_SESSION['coleccion'])){
			$coleccion=$_SESSION['coleccion'];
		}

	}
}

if($fotografias=="1"){
	$coleccion=$_SESSION['CARPETA'];
}


if(is_uploaded_file($_FILES['excel_names']['tmp_name'])){
	$_SESSION['excel_names']=$_FILES['excel_names']['name'];
	$ext = strtolower(end(explode(".",$_FILES["excel_names"]["name"])));
	$file = "excel_nombres.".$ext;
	if(!is_dir("pedidos_calendarios/".$_SESSION['CARPETA'])){
		mkdir("pedidos_calendarios/".$_SESSION['CARPETA']);
		chmod("pedidos_calendarios/".$_SESSION['CARPETA'], 0777);
	}
	move_uploaded_file($_FILES['excel_names']['tmp_name'], "pedidos_calendarios/".$_SESSION['CARPETA']."/".$file);
	chmod("pedidos_calendarios/".$_SESSION['CARPETA']."/".$file , 0775);
}else if(isset($_SESSION['excel_names'])){
	$excelname=$_SESSION['excel_names'];
}


// ===============================================

// DADES FITXA 2 =================================
if(isset($_REQUEST['idioma']) && $_REQUEST['idioma']!=""){
	$idioma=$_REQUEST['idioma'];
	$_SESSION['idioma']=$idioma;
}else if(isset($_SESSION['idioma']) && $_SESSION['idioma']!=""){
	$idioma=$_SESSION['idioma'];
}else{ $idioma=$_SESSION['lang']; }

if(isset($_REQUEST['festivos']) && $_REQUEST['festivos']!=""){
	$festivos=$_REQUEST['festivos'];
	$_SESSION['festivos']=$festivos;
}else if(isset($_SESSION['festivos']) && $_SESSION['festivos']!=""){
	$festivos=$_SESSION['festivos'];
}else{ $festivos=$_SESSION['lang']; }

if(isset($_REQUEST['freeday'])){
	$freeday=$_REQUEST['freeday'];
	$_SESSION['freeday']=$freeday;
}else if(isset($_SESSION['freeday'])){
	$freeday=$_SESSION['freeday'];
}else{ $freeday="0"; }

if(isset($_REQUEST['infofestivos'])){
	$infofestivos=$_REQUEST['infofestivos'];
	$_SESSION['infofestivos']=$infofestivos;
}else if(isset($_SESSION['infofestivos'])){
	$infofestivos=$_SESSION['infofestivos'];
}

if(isset($_REQUEST['material'])){
	$material = $_REQUEST["material"];
	$_SESSION["material"] = $material;
}else if(isset($_SESSION['material'])){
	$material=$_SESSION['material'];
}


if(isset($_REQUEST['faselunar'])){
	$faselunar=$_REQUEST['faselunar'];
	$_SESSION['faselunar']=$faselunar;
}else if(isset($_SESSION['faselunar'])){
	$faselunar=$_SESSION['faselunar'];
}else{ $faselunar="1"; }


if(is_uploaded_file($_FILES['logotipo']['tmp_name'])){
	$_SESSION['logotipo']=$_FILES['logotipo']['name'];
	$ext = strtolower(end(explode(".",$_FILES["logotipo"]["name"])));
	$file = "logotipo.".$ext;
	if(!is_dir("pedidos_calendarios/".$_SESSION['CARPETA'])){
		mkdir("pedidos_calendarios/".$_SESSION['CARPETA']);
		chmod("pedidos_calendarios/".$_SESSION['CARPETA'], 0777);
	}
	move_uploaded_file($_FILES['logotipo']['tmp_name'], "pedidos_calendarios/".$_SESSION['CARPETA']."/".$file);
	chmod("pedidos_calendarios/".$_SESSION['CARPETA']."/".$file , 0775);
}else if(isset($_SESSION['logotipo'])){
	$logotipo=$_SESSION['logotipo'];
}

if(isset($_REQUEST['sobres'])){
	$sobres=$_REQUEST['sobres'];
	$_SESSION['sobres']=$sobres;
}else if(isset($_SESSION['sobres'])){
	$sobres=$_SESSION['sobres'];
}else{ $sobres="0"; }

if(isset($_REQUEST['sobres_medida'])){
	$sobres_medida=$_REQUEST['sobres_medida'];
	$_SESSION['sobres_medida']=$sobres_medida;
}else if(isset($_SESSION['sobres_medida'])){
	$sobres_medida=$_SESSION['sobres_medida'];
}

if(isset($_REQUEST['sobres_cantidad'])){
	$sobres_cantidad=$_REQUEST['sobres_cantidad'];
	$_SESSION['sobres_cantidad']=$sobres_cantidad;
}else if(isset($_SESSION['sobres_cantidad'])){
	$sobres_cantidad=$_SESSION['sobres_cantidad'];
}else{ $sobres_cantidad=$cantidad; }

if(isset($_REQUEST['tarjetas'])){
	$tarjetas=$_REQUEST['tarjetas'];
	$_SESSION['tarjetas']=$tarjetas;
}else if(isset($_SESSION['tarjetas'])){
	$tarjetas=$_SESSION['tarjetas'];
}else{ $tarjetas="0"; }

if(isset($_REQUEST['tarjetas_medida'])){
	$tarjetas_medida=$_REQUEST['tarjetas_medida'];
	$_SESSION['tarjetas_medida']=$tarjetas_medida;
}else if(isset($_SESSION['tarjetas_medida'])){
	$tarjetas_medida=$_SESSION['tarjetas_medida'];
}else{ $tarjetas_medida="21x10"; }

if(isset($_REQUEST['tarjetas_design'])){
	$tarjetas_design=$_REQUEST['tarjetas_design'];
	$_SESSION['tarjetas_design']=$tarjetas_design;
}else if(isset($_SESSION['tarjetas_design'])){
	$tarjetas_design=$_SESSION['tarjetas_design'];
}

if(isset($_REQUEST['tarjetas_cantidad'])){
	$tarjetas_cantidad=$_REQUEST['tarjetas_cantidad'];
	$_SESSION['tarjetas_cantidad']=$tarjetas_cantidad;
}else if(isset($_SESSION['tarjetas_cantidad'])){
	$tarjetas_cantidad=$_SESSION['tarjetas_cantidad'];
}else{ $tarjetas_cantidad=$cantidad; }

if(isset($_REQUEST['tarjetas_dorso'])){
	$tarjetas_dorso=$_REQUEST['tarjetas_dorso'];
	$_SESSION['tarjetas_dorso']=$tarjetas_dorso;
}else if(isset($_SESSION['tarjetas_dorso'])){
	$tarjetas_dorso=$_SESSION['tarjetas_dorso'];
}
// ===============================================

// DADES FITXA 3 =================================
if(isset($_REQUEST['tipo_cliente']) && $_REQUEST['tipo_cliente']!=""){
	$tipo_cliente=$_REQUEST['tipo_cliente'];
	$_SESSION['tipo_cliente']=$tipo_cliente;
}else if(isset($_SESSION['tipo_cliente']) && $_SESSION['tipo_cliente']!=""){
	$tipo_cliente=$_SESSION['tipo_cliente'];
}else{ $tipo_cliente="1"; }

if($tipo_cliente=="3"){
	if(isset($_REQUEST['F_NumDist']) && $_REQUEST['F_NumDist']!=""){
		$F_NumDist=$_REQUEST['F_NumDist'];
		$_SESSION['F_NumDist']=$F_NumDist;
	}else if(isset($_SESSION['F_NumDist']) && $_SESSION['F_NumDist']!=""){
		$F_NumDist=$_SESSION['F_NumDist'];
	}

	$sqlDist="SELECT * FROM distribuidor WHERE Codigo='$F_NumDist'";
	$DISTRIBUIDOR=mysql_fetch_array(mysql_query($sqlDist));
	$_SESSION['F_Empresa']=$DISTRIBUIDOR['Empresa'];
	$_SESSION['F_Nombre']=$DISTRIBUIDOR['Contacto'];
	$_SESSION['F_DniCifNif']=$DISTRIBUIDOR['Cif'];
	$_SESSION['F_Direccion']=$DISTRIBUIDOR['Direccion'];
	$_SESSION['F_Cp']=$DISTRIBUIDOR['Codigo_Postal'];
	$_SESSION['F_Poblacion']=$DISTRIBUIDOR['Poblacion'];
	$_SESSION['F_Provincia']=$DISTRIBUIDOR['Provincia'];
	$_SESSION['F_Telefono']=$DISTRIBUIDOR['Telefono'];
	$_SESSION['F_Fax']=$DISTRIBUIDOR['Fax'];
	$_SESSION['F_Email']=$DISTRIBUIDOR['Email'];
	$_SESSION['Desc_Percent']=$DISTRIBUIDOR['Descuento'];
}

if(isset($_REQUEST['F_Empresa']) && $_REQUEST['F_Empresa']!=""){
	$F_Empresa=$_REQUEST['F_Empresa'];
	$_SESSION['F_Empresa']=$F_Empresa;
}else if(isset($_SESSION['F_Empresa']) && $_SESSION['F_Empresa']!=""){
	$F_Empresa=$_SESSION['F_Empresa'];
}
if(isset($_REQUEST['F_Nombre']) && $_REQUEST['F_Nombre']!=""){
	$F_Nombre=$_REQUEST['F_Nombre'];
	$_SESSION['F_Nombre']=$F_Nombre;
}else if(isset($_SESSION['F_Nombre']) && $_SESSION['F_Nombre']!=""){
	$F_Nombre=$_SESSION['F_Nombre'];
}
if(isset($_REQUEST['F_DniCifNif']) && $_REQUEST['F_DniCifNif']!=""){
	$F_DniCifNif=$_REQUEST['F_DniCifNif'];
	$_SESSION['F_DniCifNif']=$F_DniCifNif;
}else if(isset($_SESSION['F_DniCifNif']) && $_SESSION['F_DniCifNif']!=""){
	$F_DniCifNif=$_SESSION['F_DniCifNif'];
}
if(isset($_REQUEST['F_VATx']) && $_REQUEST['F_VATx']!=""){
	$F_VATx=$_REQUEST['F_VATx'];
	$_SESSION['F_VATx']=$F_VATx;
}else if(isset($_SESSION['F_VATx']) && $_SESSION['F_VATx']!=""){
	$F_VATx=$_SESSION['F_VATx'];
}
if(isset($_REQUEST['F_Direccion']) && $_REQUEST['F_Direccion']!=""){
	$F_Direccion=$_REQUEST['F_Direccion'];
	$_SESSION['F_Direccion']=$F_Direccion;
}else if(isset($_SESSION['F_Direccion']) && $_SESSION['F_Direccion']!=""){
	$F_Direccion=$_SESSION['F_Direccion'];
}
if(isset($_REQUEST['F_Cp']) && $_REQUEST['F_Cp']!=""){
	$F_Cp=$_REQUEST['F_Cp'];
	$_SESSION['F_Cp']=$F_Cp;
}else if(isset($_SESSION['F_Cp']) && $_SESSION['F_Cp']!=""){
	$F_Cp=$_SESSION['F_Cp'];
}
if(isset($_REQUEST['F_Poblacion']) && $_REQUEST['F_Poblacion']!=""){
	$F_Poblacion=$_REQUEST['F_Poblacion'];
	$_SESSION['F_Poblacion']=$F_Poblacion;
}else if(isset($_SESSION['F_Poblacion']) && $_SESSION['F_Poblacion']!=""){
	$F_Poblacion=$_SESSION['F_Poblacion'];
}
if(isset($_REQUEST['F_Provincia']) && $_REQUEST['F_Provincia']!=""){
	$F_Provincia=$_REQUEST['F_Provincia'];
	$_SESSION['F_Provincia']=$F_Provincia;
}else if(isset($_SESSION['F_Provincia']) && $_SESSION['F_Provincia']!=""){
	$F_Provincia=$_SESSION['F_Provincia'];
}
if(isset($_REQUEST['F_Pais']) && $_REQUEST['F_Pais']!=""){
	$F_Pais=$_REQUEST['F_Pais'];
	$_SESSION['F_Pais']=$F_Pais;
}else if(isset($_SESSION['F_Pais']) && $_SESSION['F_Pais']!=""){
	$F_Pais=$_SESSION['F_Pais'];
}

if(isset($_REQUEST['F_Telefono']) && $_REQUEST['F_Telefono']!=""){
	$F_Telefono=$_REQUEST['F_Telefono'];
	$_SESSION['F_Telefono']=$F_Telefono;
}else if(isset($_SESSION['F_Telefono']) && $_SESSION['F_Telefono']!=""){
	$F_Telefono=$_SESSION['F_Telefono'];
}
if(isset($_REQUEST['F_Fax']) && $_REQUEST['F_Fax']!=""){
	$F_Fax=$_REQUEST['F_Fax'];
	$_SESSION['F_Fax']=$F_Fax;
}else if(isset($_SESSION['F_Fax']) && $_SESSION['F_Fax']!=""){
	$F_Fax=$_SESSION['F_Fax'];
}
if(isset($_REQUEST['F_Email']) && $_REQUEST['F_Email']!=""){
	$F_Email=$_REQUEST['F_Email'];
	$_SESSION['F_Email']=$F_Email;
}else if(isset($_SESSION['F_Email']) && $_SESSION['F_Email']!=""){
	$F_Email=$_SESSION['F_Email'];
}
/*=========================Agregar Campo Clave==========================*/
if(isset($_REQUEST['F_Clave']) && $_REQUEST['F_Clave']!=""){
	$F_Clave=$_REQUEST['F_Clave'];
	$_SESSION['F_Clave'] = $F_Clave;
}else if(isset($_SESSION['F_Clave']) && $_SESSION['F_Clave']!=""){
	$F_Clave=$_SESSION['F_Clave'];
}
/*=====================================================================*/

/*=========================Agregar Campo IVA==========================*/
if(isset($_REQUEST['F_IVA']) && $_REQUEST['F_IVA']!=""){
	$F_IVA=$_REQUEST['F_IVA'];
	$_SESSION['F_IVA'] = $F_IVA;
}else if(isset($_SESSION['F_IVA']) && $_SESSION['F_IVA']!=""){
	$F_IVA=$_SESSION['F_IVA'];
}
/*=====================================================================*/


if(isset($_REQUEST['F_Web']) && $_REQUEST['F_Web']!=""){
	$F_Web=$_REQUEST['F_Web'];
	$_SESSION['F_Web']=$F_Web;
}else if(isset($_SESSION['F_Web']) && $_SESSION['F_Web']!=""){
	$F_Web=$_SESSION['F_Web'];
}
if(isset($_REQUEST['F_Conociste']) && $_REQUEST['F_Conociste']!=""){
	$F_Conociste=$_REQUEST['F_Conociste'];
	$_SESSION['F_Conociste']=$F_Conociste;
}else if(isset($_SESSION['F_Conociste']) && $_SESSION['F_Conociste']!=""){
	$F_Conociste=$_SESSION['F_Conociste'];
}
if(isset($_REQUEST['F_Comentarios']) && $_REQUEST['F_Comentarios']!=""){
	$F_Comentarios=$_REQUEST['F_Comentarios'];
	$_SESSION['F_Comentarios']=$F_Comentarios;
}else if(isset($_SESSION['F_Comentarios']) && $_SESSION['F_Comentarios']!=""){
	$F_Comentarios=$_SESSION['F_Comentarios'];
}

if(isset($_REQUEST['datos_entrega'])){
	$datos_entrega=$_REQUEST['datos_entrega'];
	$_SESSION['datos_entrega']=$_REQUEST['datos_entrega'];
}else if(isset($_SESSION['datos_entrega'])){
	$datos_entrega=$_SESSION['datos_entrega'];
}else{ $datos_entrega="0"; }

if($datos_entrega=="1"){
	if(isset($_REQUEST['E_Nombre']) && $_REQUEST['E_Nombre']!=""){
		$E_Nombre=$_REQUEST['E_Nombre'];
		$_SESSION['E_Nombre']=$E_Nombre;
	}else if(isset($_SESSION['E_Nombre']) && $_SESSION['E_Nombre']!=""){
		$E_Nombre=$_SESSION['E_Nombre'];
	}
	if(isset($_REQUEST['E_Direccion']) && $_REQUEST['E_Direccion']!=""){
		$E_Direccion=$_REQUEST['E_Direccion'];
		$_SESSION['E_Direccion']=$E_Direccion;
	}else if(isset($_SESSION['E_Direccion']) && $_SESSION['E_Direccion']!=""){
		$E_Direccion=$_SESSION['E_Direccion'];
	}
	if(isset($_REQUEST['E_Cp']) && $_REQUEST['E_Cp']!=""){
		$E_Cp=$_REQUEST['E_Cp'];
		$_SESSION['E_Cp']=$E_Cp;
	}else if(isset($_SESSION['E_Cp']) && $_SESSION['E_Cp']!=""){
		$E_Cp=$_SESSION['E_Cp'];
	}
	if(isset($_REQUEST['E_Poblacion']) && $_REQUEST['E_Poblacion']!=""){
		$E_Poblacion=$_REQUEST['E_Poblacion'];
		$_SESSION['E_Poblacion']=$E_Poblacion;
	}else if(isset($_SESSION['E_Poblacion']) && $_SESSION['E_Poblacion']!=""){
		$E_Poblacion=$_SESSION['E_Poblacion'];
	}
	if(isset($_REQUEST['E_Provincia']) && $_REQUEST['E_Provincia']!=""){
		$E_Provincia=$_REQUEST['E_Provincia'];
		$_SESSION['E_Provincia']=$E_Provincia;
	}else if(isset($_SESSION['E_Provincia']) && $_SESSION['E_Provincia']!=""){
		$E_Provincia=$_SESSION['E_Provincia'];
	}
	if(isset($_REQUEST['E_Telefono']) && $_REQUEST['E_Telefono']!=""){
		$E_Telefono=$_REQUEST['E_Telefono'];
		$_SESSION['E_Telefono']=$E_Telefono;
	}else if(isset($_SESSION['E_Telefono']) && $_SESSION['E_Telefono']!=""){
		$E_Telefono=$_SESSION['E_Telefono'];
	}
}

if(isset($_REQUEST['C_Datos']) && $_REQUEST['C_Datos']!=""){
	$C_Datos=$_REQUEST['C_Datos'];
	$_SESSION['C_Datos']=$C_Datos;
}else if(isset($_SESSION['C_Datos']) && $_SESSION['C_Datos']!=""){
	$C_Datos=$_SESSION['C_Datos'];
}

// ===============================================

// DADES FITXA 4 =================================
if(isset($_REQUEST['pago']) && $_REQUEST['pago']!=""){
	$pago=$_REQUEST['pago'];
	$_SESSION['pago']=$pago;
}else if(isset($_SESSION['pago']) && $_SESSION['pago']!=""){
	$pago=$_SESSION['pago'];
}else{ $pago="1"; }

if(isset($_REQUEST['condiciones'])){
	$condiciones=$_REQUEST['condiciones'];
	$_SESSION['condiciones']=$condiciones;
}else if(isset($_SESSION['condiciones'])){
	$condiciones=$_SESSION['condiciones'];
}
// ===============================================

// DADES FIN PEDIDO ==============================
if(isset($_SESSION['idPedido'])){
	$idPedido=$_SESSION['idPedido'];
}

if(isset($_SESSION['idExtra'])){
	$idExtra=$_SESSION['idExtra'];
}

if(isset($_SESSION['Fact_Proforma'])){
	$Fact_Proforma=$_SESSION['Fact_Proforma'];
}

if(isset($_SESSION['Desc_Percent'])){
	$DESC_PERCENT=$_SESSION['Desc_Percent'];
}else{ $DESC_PERCENT=0; }
// ===============================================

// DADES EXTRA =================================
if(isset($_REQUEST['key'])){
	$Keychars=$_REQUEST['key'];
	$_SESSION['Keychars']=$Keychars;
}else if(isset($_SESSION['Keychars'])){
	$Keychars=$_SESSION['Keychars'];
}
// ===============================================

/*
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	echo "<br><pre>";
	print_r($_REQUEST);
	echo "</pre>";
*/
//echo $fotografias;

function cmp($a, $b){ $t=strcasecmp($a[3], $b[3]);  return ($t==0)? 0 : $t/abs($t);  }
function colec($temp){
	if($temp=='18'){ return '10'; }
	if($temp=='17'){ return '24'; }
	if($temp=='15' || $temp=='16'){ return '23'; }
	if($temp=='14'){ return '9' ; }
	if($temp=='13'){ return '8' ; }
	if($temp=='12'){ return '5' ; }
	if($temp=='11'){ return '7' ; }
	if($temp=='10'){ return '6' ; }
	if($temp=='09'){ return '4' ; }
	if($temp=='08'){ return '3' ; }
	return '10';
}
?>
