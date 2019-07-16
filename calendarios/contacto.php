<?php
header('Content-Type: text/html; charset=UTF-8');
include('includes/global.php');
?>


<style>
/* -----------------------------
			CONTACTO
------------------------------- */
.clear { clear: both; }

form{
padding:0;
margin:0;
}

.height_15{
padding:0;
margin:0;
font-size:0px;
height:15px;
}

.content_indent{
border:0px solid red;
width:430px;
font-family:"Trebuchet MS" ,Arial, Helvetica, sans-serif;
font-size:12px;
color:#000000;
line-height:19px;
float:left;
}

.contacto_pop_titul{
font-size:24px; font-family:Trebuchet MS ,Arial, Helvetica, sans-serif; color:#ffaa00;
}

.fields_left{
width:192px;
border:0px solid red;
float:left;
padding-bottom:8px;
}
.fields_right{
width:192px;
border:0px solid red;
float:left;
margin-left:14px;
padding-bottom:8px;
}

.input_contacto{
width:192px;
border:1px solid #000000;
}
.input_contacto2{
width:100px;
border:1px solid #000000;
}

.textarea_contacto{
width:398px;
height:121px;
border:1px solid #000000;
}

.div_menu_right_contacto{
width:180px;
border:0px solid red;
position:absolute;
right:27px;
top:34px;
/*line-height:19px;*/
}

.barra_vertical_gris{
width:2px;
height:430px;
float:left;
background-color:#dadada;
position:relative;
top:50px;
}

.box_right_contacto{
width:250px;
border:0px solid red;
float:left;
position:relative;
/*top:38px;*/
top:30px;
left:10px;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
font-size:11px;
/*padding-bottom:50px;*/
}

.tiul_right_contacto{
font-size:17px; color:#ffaa00;
}

.dades_roig_pop a{ color:#ffa700; text-decoration:none; font-weight:bold;}

.dades_roig_pop a:hover{ color:#ffa700; text-decoration:underline;  font-weight:bold;}

</style>

<script>
//Recomendar
function comprovacamps() {
	var nom;
	var empresa;
	var mail;
	var telf;
	var poblacion;
	var pais;
	var consulta;
	var error="OK";
	
	nom=document.getElementById('nom').value;
	empresa=document.getElementById('empresa').value;
	telf=document.getElementById('telf').value;
	mail=document.getElementById('mail').value;
	poblacion=document.getElementById('poblacion').value;
	pais=document.getElementById('pais').value;
	consulta=document.getElementById('consulta').value;
	
		
	if(document.getElementById("mail").value==""){
		error="KO";
	}else{
		var mail = document.getElementById("mail").value
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
		  } else {
				error="KO";
		  }
	}
	
		
	if(nom=="" || empresa=="" || telf=="" || error=="KO" || poblacion=="" || pais=="" || consulta==""  ){
		alert("<?=$alert[0][34]?>");
	}else{
		document.contacto.submit();
	}
}
</script>

<div class="content_indent">
	<div class="contacto_pop_titul"><?=$msg[10][1]?></div>
	<div class="height_15"></div>

 	<?=$msg[10][2]?>
	<div class="height_15"></div>
	<form name="contacto" id="contacto" method="post" action="contacto_send.php">
	<div class="fields_left">
		<div><?=$msg[10][3]?></div>
		<div><input name="nom" id="nom" class="input_contacto" type="text" /></div>
	</div>

	<div class="fields_right">
		<div><?=$msg[10][4]?></div>
		<div><input name="empresa" id="empresa" class="input_contacto" type="text" /></div>
	</div>

	<div class="fields_left">
		<div><?=$msg[10][5]?></div>
		<div><input name="mail" id="mail" class="input_contacto" type="text" /></div>
	</div>

	<div class="fields_right">
		<div><?=$msg[10][6]?></div>
		<div><input name="telf" id="telf" class="input_contacto" type="text" /></div>
	</div>

	<div class="fields_left">
		<div><?=$msg[10][7]?></div>
		<div><input name="poblacion" id="poblacion" class="input_contacto" type="text" /></div>
	</div>

	<div class="fields_right">
		<div><?=$msg[10][8]?></div>
		<div><input name="pais" id="pais" class="input_contacto" type="text" /></div>
	</div>

	<div class="clear"></div>

	<div>
		<div><?=$msg[10][9]?></div>
		<div><textarea  name="consulta" id="consulta" class="textarea_contacto"></textarea></div>
	</div>

	<input type="hidden" name="recaptcha_response_contacto" id="recaptchaResponseContacto">

	<div style="margin-top:8px; margin-bottom:8px;">
		<!--<div align="center"><a style="color:#000000;" href='privacidad.php' class='lightview' rel='ajax' id='demo_ajaxpost'><?=$msg[10][10]?></a></div>-->
		<div align="center"><a style="color:#000000;" href='privacidad.php' onclick="window.open(this.href, this.target, 'width=600,height=500,left=450,top=200,resizable=no'); return false;" ><?=$msg[10][10]?></a></div>
	</div>

	<div>
		<div align="center"><a href="javascript:comprovacamps();"><?=$msg[10][13]?></a></div>
	</div>
	</form>

</div>

<div class="barra_vertical_gris"></div>

<?php
	
	switch($lang){
	
		case "cat":
		case "esp": 
			$bloque1_titol="CalendariosConImagen.com";
			$bloque1_subtitol="Atención al cliente (España)";
			$bloque1_telefon="934 329 822";
			$bloque1_horari="L-J 10-15 / 16-18 h. V 9-14 h.";
			
			$bloque2_titol="PubCalendriers.fr";
			$bloque2_subtitol="Besoin d'aide (France)";
			$bloque2_telefon="01 82 88 32 39";
			$bloque2_horari="L-V 9-18 h.";
			
			$bloque3_titol="AdCalendars.co.uk";
			$bloque3_subtitol="Cutomer service (UK)";
			$bloque3_telefon="info@adcalendars.co.uk";
			$bloque3_horari="";
			
			$bloque4_titol="CalendariFoto.it";
			$bloque4_subtitol="Attenzione al cliente (Italia)";
			$bloque4_telefon="info@calendarifoto.it";
			$bloque4_horari="";
			
			$bloque5_direccion="C / Navarra, 5 - 08014 Barcelona<br />";
			$bloque5_city="Barcelona - Spain<br />";
			$bloque5_telefon="T. +34 934 329 822 - F. +34 934 329 821<br />";
		
			break;
		case "eng": 
			
			$bloque1_titol="AdCalendars.co.uk";
			$bloque1_subtitol="Cutomer service (UK)";
			$bloque1_telefon="info@adcalendars.co.uk";
			$bloque1_horari="";
			
			$bloque2_titol="";
			$bloque2_subtitol="";
			$bloque2_telefon="";
			$bloque2_horari="";
			
			$bloque3_titol="";
			$bloque3_subtitol="";
			$bloque3_telefon="";
			$bloque3_horari="";
						
			$bloque4_titol="";
			$bloque4_subtitol="";
			$bloque4_telefon="";
			$bloque4_horari="";
			
			$bloque5_direccion="";
			$bloque5_city="";
			$bloque5_telefon="";
		
		
			break;
		case "fra": 
			
			$bloque1_titol="PubCalendriers.fr";
			$bloque1_subtitol="Besoin d'aide";
			$bloque1_telefon="01 82 88 32 39";
			$bloque1_horari="L-J 10-18 / V 10-14h.";
			
			$bloque2_titol="";
			$bloque2_subtitol="";
			$bloque2_telefon="";
			$bloque2_horari="";
			
			$bloque3_titol="";
			$bloque3_subtitol="";
			$bloque3_telefon="";
			$bloque3_horari="";
			
			$bloque4_titol="";
			$bloque4_subtitol="";
			$bloque4_telefon="";
			$bloque4_horari="";
			
			$bloque5_direccion="";
			$bloque5_city="";
			$bloque5_telefon="";
		
		
			break;
		case "ita": 
			
			$bloque1_titol="CalendariFoto.it";
			$bloque1_subtitol="Attenzione cliente (Italia)";
			$bloque1_telefon="info@calendarifoto.it";
			$bloque1_horari="";
			
			$bloque2_titol="CalendariosConImagen.com";
			$bloque2_subtitol="Atenci�n al cliente (Espa�a)";
			$bloque2_telefon="934 329 822";
			$bloque2_horari="10-15 / 16-18 h. V 9-14 h.";
			
			$bloque3_titol="AdCalendars.co.uk";
			$bloque3_subtitol="Cutomer service (UK)";
			$bloque3_telefon="info@adcalendars.co.uk";
			$bloque3_horari="";
			
			$bloque4_titol="PubCalendriers.fr";
			$bloque4_subtitol="Besoin d'aide (France)";
			$bloque4_telefon="01 82 88 32 39";
			$bloque4_horari="L-V 9-18 h. S 9-12 h.";
			
			$bloque5_direccion="C / Navarra, 5 - 08014 Barcelona<br />";
			$bloque5_city="Barcelona - Spain<br />";
			$bloque5_telefon="";
			
			break;
		default: break;
	
	
	
	}
	
		
		


?>

<div class="box_right_contacto">
	<div class="tiul_right_contacto"><?=$bloque1_titol?></div>
	<div>
	<?=$bloque1_subtitol?><br />
		<span style="font-size:18px;"><?=$bloque1_telefon?></span><br />
		<span style="font-size:11px;"><?=$bloque1_horari?></span>
</div>

	<div style="height:10px; padding:0; margin:0; font-size:0px;"></div>
	
	
	<div class="tiul_right_contacto"><?=$bloque2_titol?></div>
	<div>
	<?=$bloque2_subtitol?><br />
		<span style="font-size:18px;"><?=$bloque2_telefon?></span><br />
		<span style="font-size:11px;"><?=$bloque2_horari?></span>
	</div>

	<div style="height:10px; padding:0; margin:0; font-size:0px;"></div>
	
	<div class="tiul_right_contacto"><?=$bloque3_titol?></div>
	<div>
	<?=$bloque3_subtitol?><br />
		<span style="font-size:18px;"><?=$bloque3_telefon?></span><br />
		<span style="font-size:11px;"><?=$bloque3_horari?></span>
	</div>

	<div style="height:10px; padding:0; margin:0; font-size:0px;"></div>
	
	<div class="tiul_right_contacto"><?=$bloque4_titol?></div>
	<div>
	<?=$bloque4_subtitol?><br />
		<span style="font-size:18px;"><?=$bloque4_telefon?></span><br />
		<span style="font-size:11px;"><?=$bloque4_horari?></span>
	</div>

	<div style="height:18px; padding:0; margin:0; font-size:0px;"></div>
	
	
	<div class="tiul_right_contacto"></div>
	<div class="dades_roig_pop" style="padding-top:0px;">
		<?=$bloque5_direccion?>
		<?=$bloque5_city?>
		<?=$bloque5_telefon?>
</div>
	<div style="margin:5px 0;">
	<?php if($lang=="esp" or $lang=="cat"){ ?>
		<!--<a href="http://www.confianzaonline.org/empresas/estudiroig.htm" target="_blank">
			<img src="images/sellopequeno.gif" border="0" alt="empresa adherida" title="empresa adherida">
		</a>-->
	<?php } ?>
	</div>
</div>

<div class="clear"></div>
<script src="https://www.google.com/recaptcha/api.js?render=6LeeV6AUAAAAAPM1IRmDgvOy4DXwHdJ3ZYLfhVpk"></script>
 <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LeeV6AUAAAAAPM1IRmDgvOy4DXwHdJ3ZYLfhVpk', { action: 'homepage' }).then(function (token) {
            	
                var recaptchaResponse = document.getElementById('recaptchaResponseContacto');
                recaptchaResponse.value = token;
                // alert(token);
            });
        });
    </script>