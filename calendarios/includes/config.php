<?php /*echo '<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />';*/
///////////////////CONEXIO AMB LA BASE DE DADES/////////////////////////////
$conn = mysql_connect("localhost", "roignet_kalenda2008_B","enda5656_B")or die("No pudo conectarse: " . mysql_error());
mysql_select_db("roignet_pixmigo_", $conn)or die("No pudo seleccionarse la BD.");
mysql_query("SET NAMES 'utf8mb4'"); 
mysql_set_charset('utf8mb4');
//mysql_set_charset('latin1');
//mysql_query("SET NAMES 'UTF8'"); 
//mysql_query("SET NAMES 'latin1 '");
////////////////////////////////////////////////////////////////////////////
?>