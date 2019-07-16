<?php
session_start();

if(substr($_GET["cantidad"], 0,1)=="O"){ $_REQUEST['cantidad'] = "otra"; $_REQUEST['otra_cant'] = substr($_GET["cantidad"],1); }

include('includes/config.php');
include('includes/global.php');
include('includes/funcions.php');

include('admin/bbdd/configuration.php');
include('admin/bbdd/objects/class.database.php');
include('admin/bbdd/objects/class.modelo.php');
include('admin/bbdd/objects/class.tipo_diseno.php');
include('admin/bbdd/objects/class.pedido.php');
include('admin/bbdd/objects/class.fotos.php');
include('admin/bbdd/objects/class.datos.php');
include('admin/bbdd/objects/class.pedido_temp.php');
include('admin/bbdd/objects/class.distribuidores.php');

/* Comprovem que estiguem en algun modul */
if(!isset($_GET["module"])){ $module="inicio"; }else{ $module=$_GET["module"]; }

/* pels titols */
switch ($module){
	case "inicio2": $pos=1; break;
	case "fitxa_1":
		if($mod=="106" || $mod=="107" || $mod=="108" || $mod=="110" || $mod=="111"){ $pos=2; } //Pared
		else{ $pos=0; } //Mesa
	break;
	case "fitxa_1_2":
		if($mod=="106" || $mod=="107" || $mod=="108" || $mod=="110" || $mod=="111"){ $pos=2; } //Pared
		else{ $pos=0; } //Mesa
	break;
	case "fitxa_2": $pos=3; break;
	case "fitxa_3": $pos=4; break;
	case "fitxa_4": $pos=5; break;
	case "fin_pedido": $pos=6; break;
	case "galeria_2007": $pos=7; break;
	case "testimonios": $pos=8; break;
	case "galeria": $pos=9; break;
	default: $pos=1; break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- MODELO <?=$mod?> --> 

<?php /*?><?php
//CODIGO PARA OPTIMIZER (CABECERA)
switch ($module){
	case "inicio":?>
		<!-- Google Website Optimizer Control Script -->
		<script>
		function utmx_section(){}function utmx(){}(function(){var k='4063609163',d=document,l=d.location,c=d.cookie;function f(n){
		if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.indexOf(';',i);
		return c.substring(i+n.length+1,j<0?c.length:j)}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;
		d.write('<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':'://www')+'.google-analytics.com'+'/siteopt.js?v=1&utmxkey='+k+'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+'" type="text/javascript" charset="utf-8"></sc'+'ript>')})();
		</script>
		<script>utmx("url",'A/B');</script>
		<!-- End of Google Website Optimizer Control Script -->
<?	break;
}
?><?php */?>

<head>


<base href="https://<?=$_SERVER["SERVER_NAME"]?>/" />

<? if($module!="fitxa_3"){?>


 
	<? } ?>

	<title><?=$seo[0][$pos];?></title>
	<?php echo str_replace(">"," />",$seo[1][$pos]);?>
	<?php echo str_replace(">"," />",$seo[2][$pos]);?>
	<?php echo str_replace(">"," />",$seo[3][0]);?>
	<?php
	switch($lang){
		case "esp": ?>
			<meta name="verify-v1" content="BGb1ND+QMSCxTR7EfbSjjL61GiwB0Z4eaQ1VKRIJftk=" />
		<?php
		break;
		case "cat":
		?>
			<meta name="verify-v1" content="rnWzIMgCXBU+pgLPLevbTUc7viwCQ1IhYQMdrcOaPuk=" />
		<?php
		break;
		case "eng":?>
			<meta name="verify-v1" content="1ncf/SugfdzWiXaZW/r23RMuGNLZPs39Q0I5RqwxfcM=" />
		<?php
		break;
		case "fra": ?>
			<meta name="verify-v1" content="h2eh8OjIAVgaqFkUp1Yg5KTwPraTkKL+u3Q0D691YTc=" />
		<?php
		break;
		case "ita":  ?>
			<meta name="verify-v1" content="3br8mPi0ys659h/gxQGk/O9XjqYlcRO6RrAXUNCFZbQ=" />
		<?php break;

	} ?>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Language" content="es" />
	<link rel="apple-touch-icon" href="/img/apple-touch-icon.png" />
	<meta name="DC.title" content="Tres Webs, desarrollo y diseño web profesional" /> 
	
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/lightview.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />
	<!--<link rel="stylesheet" title="Standard" href="css/contentflow.css" type="text/css" media="screen" />
	
	<script language="JavaScript" type="text/javascript" src="js/contentflow.js" load="fancyScrollbar"></script>
	
	<script tyle="text/javascript">
        var cf = new ContentFlow('contentFlow', { scaleFactor : 2.4, visibleItems : 7, startItem: 0, scrollInFrom: 1
        	
        	/*onclickInactiveItem: function (item) {
					
					var nextItem = item.index +1;
					
					var url = $(".flow #item" + nextItem + " .caption").html();
					
					$("#flowCaption").html(url);
				
				} */
		});
 </script>-->
    
    <link rel="stylesheet" href="js/nivo-slider.css" type="text/css" media="screen" />
    
	<script type='text/javascript' src='js/functions.js'></script>
	<script type='text/javascript' src='js/calendarios.js'></script>
	<? if($module!="fitxa_3"){?>
	<script type='text/javascript' src='js/prototype.js'></script>
	<script type='text/javascript' src='js/scriptaculous.js?load=effects'></script>
	<script type='text/javascript' src='js/lightview.js'></script>
	<? } ?>
	<script type='text/javascript' src='js/formexp.js'></script>
	
	<?if($module != "fitxa_1"){ ?> <script type='text/javascript' src='js/imagelink.js'></script> <? } ?>

	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript">
		jQuery.noConflict();
	</script>
	<?if($module == "fitxa_1_material"){ ?>
	<script src='js/jquery.zoom.js'></script>
	<? } ?>
	<? if($module!="fitxa_3"){?>
	<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <script type="text/javascript">
		jQuery(window).load(function() {
		    jQuery('#slider').nivoSlider({
		        effect: 'sliceUpDown', 
		        slices: 5, 
		        boxCols: 10, 
		        boxRows: 10, 
		        animSpeed: 1500, 
		        pauseTime: 2000,
		        startSlide: 0, 
		        directionNav: true,
		        controlNav: false, 
		        controlNavThumbs: false, 
		        pauseOnHover: false, 
		        manualAdvance: false, 
		        prevText: '', 
		        nextText: '',
		        randomStart: false 
	//			
//sliceDown
//sliceDownLeft
//sliceUp
//sliceUpLeft
//sliceUpDown
//sliceUpDownLeft
//fold
//fade
//random
//slideInRight
//slideInLeft
//boxRandom
//boxRain
//boxRainReverse
//boxRainGrow
//boxRainGrowReverse
		       
		    });
		});
		</script>
<? } ?>
	<script type="text/javascript">
		function changeLocation(menuObj){
			var i = menuObj.selectedIndex;
			if(i > 0){ window.location = menuObj.options[i].value; }
		}
		
		jQuery(document).ready(function(){
 
	        jQuery(".divClass .deleteDiv").click(function(){
				jQuery(this).parents(".divClass").animate({ opacity: 'hide' }, "slow");
			});
			
			<?if(($module == "fitxa_1" || $module == "fitxa_colors" || $module == "fitxa_1_2" || $module == "fitxa_1_alt" || $module == "fitxa_1_material")){ ?>
				jQuery('#acpresupuesto').click(function(){
				    if(jQuery('#acpresupuesto').is(':checked')) {
				        jQuery('#presupuestar').fadeIn('slow');
				        jQuery('.box-presupuesto').fadeIn('slow');
				    } else {
				        jQuery('#presupuestar').fadeOut('slow');  
				        jQuery('.box-presupuesto').fadeOut('slow');  
				    }
				});

			jQuery('#send_message').click(function(e){
			           
			            //Stop form submission & check the validation
			            e.preventDefault();
			           
			            // Variable declaration
			            var error = false;
			            var name = document.getElementById('name1').value;
			            var email = document.getElementById('email1').value;
			            var phone = document.getElementById('phone1').value;
			            var cantidad = document.getElementById("cantidad").value;
			            
			            document.getElementById('HiddenEmail').value = email;
			            document.getElementById('HiddenName').value = name;
			            document.getElementById('HiddenPhone').value = phone;
			            document.getElementById('HiddenCantidad').value = cantidad;
			            
			      
			         	// Form field validation
			            if(name.length == 0){
			                var error = true;
			                jQuery('#name_error').fadeIn(500);
			            }else{
			                jQuery('#name_error').fadeOut(500);
			            }
			            if(email.length == 0 || email.indexOf('@') == '-1'){
			                var error = true;
			                jQuery('#email_error').fadeIn(500);
			            }else{
			                jQuery('#email_error').fadeOut(500);
			            }
			            
			            if(cantidad.length == 0 || cantidad==0){
			            	var error = true;
			            	alert("<?=$msg[2][64]?>");
			            }
			           
			            if(phone.length == 0){
			                var error = true;
			                jQuery('#phone_error').fadeIn(500);
			            }else{
			                jQuery('#phone_error').fadeOut(500);
			            }
			            
			            
			            if(error == false){
			               
			                jQuery('#send_message').attr({'disabled' : 'true', 'value' : 'Sending...' });
			                jQuery.post("includes/presupuesto.php", jQuery("#presupuesto").serialize(),function(result){
			                    
			                    if(result == 'sent'){
			                    	//alert(email);
			                       jQuery('#mail_success').fadeIn(500);
			                    
			                    }else{
			                        jQuery('#mail_fail').fadeIn(500);
			                       	jQuery('#send_message').removeAttr('disabled').attr('value', 'Send The Message');
			                    }
			                });
			            }
			        });
			        <? if($module == "fitxa_1_material"){ ?>
			        	jQuery('#ex1').zoom();
			        	jQuery('#ex2').zoom();
			        	jQuery('#ex3').zoom();
			  		<?php } ?>
			  	
			   <?php } ?>
		 
		});

	</script>

	
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("<?php echo $analitic;?>");
			pageTracker._trackPageview();
		} catch(err) {}
	</script> 
    
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22241289-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>
<?php if($lang=="esp" or $lang=="cat"){
?>
	<script src="js/cookiechoices.js"></script>
	<script>
	document.addEventListener('DOMContentLoaded', function(event) {
	cookieChoices.showCookieConsentBar('Este sitio emplea cookies como ayuda para prestar servicios. Al utilizar este sitio, estás aceptando el uso de cookies.',
	'Acepto', 'Leer más', 'cookies.php');
	});
	</script>
<?php
}
?>
<? if($module == "inicio"){
		echo "<div id='mainContainerhome'>";
	} else { 
		echo "<div id='mainContainer'>";
	} ?>

		<div class="lang_links_top">

			<div class="div_content_lang_links">

				<!--<div class="idiomas" style="left:-20px;">
					<?php if($lang=="esp" or $lang=="cat"){ $menu="menu_esp";}else{ $menu="menu_noesp";} ?>
					<object classid="clsid:D27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="115" height="100" id="menu_idiomes" align="middle">
					<param name="allowScriptAccess" value="sameDomain" />
					<param name="wmode" value="transparent" />
					<param name="movie" value="/<?php echo $menu?>.swf?lang=<?php echo $lang?>" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#2C2C2C" />
					<embed src="/<?php echo $menu?>.swf?lang=<?php echo $lang?>" wmode="transparent" quality="high" bgcolor="#2C2C2C" width="115" height="100" name="menu_idiomes" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
					</object>
				</div>-->
				<div class="links_top">| <a href="/<?php echo $pagines_seo[0][1]?>" title='<?php echo $link[0][1]?>'><?php echo $msg[0][22]?></a> |</div>

				<div class="div_select_links_top">

					<select class="select_links_top" onchange="changeLocation(this)">
						<option value="#" selected="selected"><?php echo $msg[0][23]?></option>
						<option value="#">--------------------------------------</option>
						<option value="#"><?php echo $msg[0][24]?></option>
						<option value="#">--------------------------------------</option>
					    <option value="<?=$link[0]?>"><?php echo QueModelo('113');?></option> 
						<option value="<?=$link[1]?>"><?php echo QueModelo('115');?></option>
						<option value="<?=$link[2]?>"><?php echo QueModelo('116');?></option>
                        <option value="<?=$link[3]?>"><?php echo QueModelo('123');?></option>
						<option value="<?=$link[4]?>"><?php echo QueModelo('117');?></option>
                        <option value="<?=$link[5]?>"><?php echo QueModelo('112');?></option>
                        <option value="<?=$link[6]?>"><?php echo QueModelo('114');?></option>
						<option value="<?=$link[7]?>"><?php echo QueModelo('122');?></option>
						<option value="<?=$link[23]?>"><?php echo QueModelo('143');?></option>
						<option value="<?=$link[22]?>"><?php echo QueModelo('142');?></option>
						<option value="<?=$link[21]?>"><?php echo QueModelo('141');?></option>
						<option value="<?=$link[16]?>"><?php echo QueModelo('136');?></option>
						<option value="<?=$link[17]?>"><?php echo QueModelo('137');?></option>
						<option value="<?=$link[18]?>"><?php echo QueModelo('138');?></option>
						<option value="<?=$link[19]?>"><?php echo QueModelo('139');?></option>
						
						<option value="#">--------------------------------------</option>
						<option value="#"><?php echo $msg[0][25]?></option>
						<option value="#">--------------------------------------</option>
						<option value="<?=$link[12]?>"><?php echo QueModelo('118');?></option>
                        <option value="<?=$link[8]?>"><?php echo QueModelo('119');?></option>
                        <option value="<?=$link[9]?>"><?php echo QueModelo('125');?></option>
                        <option value="<?=$link[10]?>"><?php echo QueModelo('120');?></option>
                        <option value="<?=$link[11]?>"><?php echo QueModelo('124');?></option>
						
                        <option value="<?=$link[13]?>"><?php echo QueModelo('126');?></option>
                        <option value="<?=$link[14]?>"><?php echo QueModelo('127');?></option>
						<option value="#">--------------------------------------</option>
						<option value="#"><?php echo $msg[0][26]?></option>
						<option value="#">--------------------------------------</option>
						<option value="<?=$link[15]?>"><?php echo QueModelo('121');?></option>
					</select>
                    
				</div>

				<div class="div_links_center_top"><!--
					| <a href='/empresa.php' class='lightview' rel="iframe"  ><?php echo $msg[0][18]?></a>
					| <a href='/contacto.php' class='lightview' rel="iframe"  ><?php echo $msg[0][19]?></a>
					| <a href='/condiciones.php' class='lightview' rel="iframe"  ><?php echo $msg[0][20]?></a>
					<?php if($lang=="esp" or $lang=="cat"){ ?>| <a target="_blank" href="http://calendarios.roig.net/faq/" rel="iframe, noindex, nofollow"><?php echo $msg[0][21]?></a><?php } ?>
					| --> 


                    <a href='<?=$pagines_seo[0][9]?>'><?php echo $msg[0][9]?></a>
					| <a href='<?=$pagines_seo[0][7]?>'><?php echo $msg[0][5]?></a>
					| <a href='<?=$pagines_seo[0][8]?>'><?php echo $msg[0][7]?></a>
                    | <a href='/contacto.php' class='lightview' rel="iframe"  ><?php echo $msg[1][60]?></a> |
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <? if($lang == "esp"){ ?>
	                    <div class="gplus-esp">
	                    <div class="socialico"><img src="img/flag-esp.png"></a></div>
	                    	<div class="socialico"><a href="http://pubcalendriers.fr" rel="nofollow" target="_blank"><img src="img/flag-fra.png"></a></div>
	                    	<div class="socialico"><a href="http://adcalendars.co.uk" rel="nofollow" target="_blank"><img src="img/flag-eng.png"></a></div>
	                    	<div class="socialico"><a href="http://calendarifoto.it" rel="nofollow" target="_blank"><img src="img/flag-ita.png"></a></div>
	                    	
							<div class="socialico2">
								<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="80"></div>
							</div>
						</div>
					<? } ?>
					<? if($lang == "fra"){ ?>
	                    <div class="gplus-esp">
	                    	<div class="socialico"><img src="img/flag-fra.png"></a></div>
	                    	<div class="socialico"><a href="http://adcalendars.co.uk" rel="nofollow" target="_blank"><img src="img/flag-eng.png"></a></div>
	                    	<div class="socialico"><a href="http://calendarifoto.it" rel="nofollow" target="_blank"><img src="img/flag-ita.png"></a></div>
	                    	<div class="socialico"><a href="http://calendariosconimagen.com" target="_blank"><img src="img/flag-esp.png"></a></div>
							<div class="socialico2">
								<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="80"></div>
							</div>
						</div>
					<? } ?>
					<? if($lang == "ita"){ ?>
	                    <div class="gplus-esp">
	                    <div class="socialico"><img src="img/flag-ita.png"></a></div>
	                    	<div class="socialico"><a href="http://pubcalendriers.fr" rel="nofollow" target="_blank"><img src="img/flag-fra.png"></a></div>
	                    	<div class="socialico"><a href="http://adcalendars.co.uk" rel="nofollow" target="_blank"><img src="img/flag-eng.png"></a></div>
	                    
	                    	<div class="socialico"><a href="http://calendariosconimagen.com" target="_blank"><img src="img/flag-esp.png"></a></div>
							<div class="socialico2">
								<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="80"></div>
							</div>
						</div>
					<? } ?>
					<? if($lang == "eng"){ ?>
	                    <div class="gplus-esp">
	                    <div class="socialico"><img src="img/flag-eng.png"></a></div>
	                    	<div class="socialico"><a href="http://pubcalendriers.fr" rel="nofollow" target="_blank"><img src="img/flag-fra.png"></a></div>
	                    	
	                    	<div class="socialico"><a href="http://calendarifoto.it" rel="nofollow" target="_blank"><img src="img/flag-ita.png"></a></div>
	                    	<div class="socialico"><a href="http://calendariosconimagen.com" target="_blank"><img src="img/flag-esp.png"></a></div>
							<div class="socialico2">
								<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="80"></div>
							</div>
						</div>
					<? } ?>
				</div>
				<? if($_SESSION["lang"] == "esp"){ ?>
				<div class="logo_roig"><a href="https://www.roig.net" style="background-image:url(/images/logo_roig.gif); background-repeat:no-repeat; display:block; width:108px; height:22px;" target="_blank"></a></div>
				<? } ?>
				<div class="clear"></div>

			</div>

	  </div>

		<div class="header">

			<div class="titul_web">
				<h1><a href='https://<? echo $_SERVER['HTTP_HOST']; ?>'><?php echo $msg[0][1]?> 
					<? if($_SESSION["lang"] == "esp"){ 
						echo'<img src="img/common/con.gif" class="conimg" alt="calendarios personalizados" align="middle" title="Calendarios personalizados"/> '. $msg[0][3].'<span style="color:#ffaa00; padding-left:0px;">'; } ?>
						<?php echo $msg[0][4]?></span></a></h1>
			</div>

		<? if($lang == "non-existent"){ ?>
			<div class="confianzahead">Empresa<br />Adherida a:
				<div style="clear: both; height: 5px"></div>
				<a href="https://www.confianzaonline.es/empresas/estudiroig.htm" target="_blank"><img src="https://www.calendariosconimagen.com/images/sellopequeno.gif" border="0"/></a>
			</div>
			
			<div class="atencionalcliente2" align="center">
				<?php echo $msg[0][11]?> <span style="font-size:22px;"><?php echo $msg[0][12]?></span><br />
				<span style="font-size:11px;"><?php echo $msg[0][13]?></span>
			</div>
		<? } else { ?>
			<div class="atencionalcliente" align="center">
				<?php echo $msg[0][11]?> <span style="font-size:22px;"><?php echo $msg[0][12]?></span><br />
				<span style="font-size:11px;"><?php echo $msg[0][13] ?></span>

			</div>

		<? } ?>
			
			
			
		<div class="subtitulo_web"><?=$msg[1][63]?></div>
		</div>
		
		<!-- <CONTENT> -->
		<?php
		
		switch ($module){
			case "inicio": include("inicio.php"); break;
			case "privacy": include("privacidad.php"); break;
			case "inicio2": include("home2.php"); break;
			case "testimonios": include("testimonios.php"); break;
			case "testimonios_2008": include("testimonios_2008.php"); break;
			case "testimonios_cat": include("testimonios_cat.php"); break;
			case "testimonios_cat_2008": include("testimonios_cat_2008.php"); break;
			case "testimonios_eng": include("testimonios_eng.php"); break;
			case "testimonios_eng_2008": include("testimonios_eng_2008.php"); break;
			case "testimonios_fra": include("testimonios_fra.php"); break;
			case "testimonios_fra_2008": include("testimonios_fra_2008.php"); break;
			case "testimonios_ita": include("testimonios_ita.php"); break;
			case "testimonios_ita_2008": include("testimonios_ita_2008.php"); break;
			case "galeria": include("galeria.php"); break;
			case "galeria_2007": include("galeria_2007.php"); break;
			case "galeria_2008": include("galeria_2008.php"); break;
			case "galeria_2009": include("galeria_2009.php"); break;
			case "galeria_2010": include("galeria_2010.php"); break;
			case "galeria_2011": include("galeria_2011.php"); break;
			case "galeria_2012": include("galeria_2012.php"); break;
			case "galeria_2013": include("galeria_2013.php"); break;
			case "galeria_2014": include("galeria_2014.php"); break;
			case "fitxa_1": include("fitxa_1.php"); break;
			
			case "fitxa_1_2": include("fitxa_1_2.php"); break;
			case "fitxa_1_past": include("fitxa_1_past.php"); break;
			case "fitxa_1_alt": include("fitxa_1_alt.php"); break;
			case "fitxa_1_material": include("fitxa_1_material.php"); break;
			case "fitxa_2": include("fitxa_2.php"); break;
			case "fitxa_3": include("fitxa_3.php"); break;
			case "fitxa_4": include("fitxa_4.php"); break;
			case "fin_pedido": include("fin_pedido.php"); break;
			case "gracias-compra": include("gracias-compra.php"); break;
			case "correcciones": include("correcciones.php"); break;
			case "comentarios": include("comentarios.php"); break;
			case "noavisos": include("noavisos.php"); break;
			case "sobres_postales": include("sobres_postales.php"); break;
			case "sobres_postales_resumen": include("sobres_postales_resumen.php"); break;
			case "sobres_postales_fin": include("sobres_postales_fin.php"); break;
			case "tarifa-precios": include("tarifa_precios.php"); break;
			case "pagos": include("pagos.php"); break;
			case "addtestimonio": include("addtestimonio.php"); break;
			case "fitxa_nombres": include("fitxa_nombres.php"); break;
			case "fitxa_colors": include("fitxa_1_color.php"); break;
			case "iman-troquelado": include("iman-troquelado.php"); break;
			default:  include("inicio.php"); break;
		}
		?>
		<!-- </CONTENT> -->

	</div>

	<div id="footer">
     <div class="intro_text">
		<h6>
		<span style="color:#F9AA00; font-size:15px;"><?=$msg[1][1]?></span> <span style="color:#F9AA00;"><?=$msg[1][2]?></span>
		<?php echo $msg[1][3]?>
		<span style="color:#F9AA00;"><?php echo $msg[1][4]?></span><?php echo $msg[1][5]?><span style="color:#F9AA00;"><?php echo $msg[1][6]?></span>
	    <?php echo $msg[1][7]?>
	    <span style="color:#F9AA00;"><?php echo $msg[1][8]?></span>
		<?php echo $msg[1][9]?><span style="color:#F9AA00;"><?php echo $msg[1][10]?></span>
		<?php echo $msg[1][11]?><span style="color:#F9AA00;"><?php echo $msg[1][12]?></span><?php echo $msg[1][13]?><span style="color:#F9AA00;"><?php echo $msg[1][14]?></span>.
		<?php echo $msg[1][15]?><span style="color:#F9AA00;"><?php echo $msg[1][16]?></span>
		</h6>
	</div>
    <div class="menu_foot"><br />| <a href="empresa.php" class='lightview' rel="iframe"  ><?=$msg[1][64]?></a> | <a href="contacto.php" class='lightview' rel="iframe"  ><?=$msg[1][65]?></a> | <a href="condiciones.php" class='lightview' rel="iframe"  ><?=$msg[1][66]?></a> | <a href="privacidad.php" class='lightview' rel="iframe"  ><?=$msg[1][67]?></a> | </div>
    
    <div class="iconos_foot"><div style="padding-top:8px;"><img src="images/visa_cards.gif" alt="<?php echo $tit[0][7]?>" title="<?php echo $tit[0][7]?>" border="0" /></div></div>
    
    <div class="foot_foot"><?php echo $msg[0][14]?><a href='/contacto.php' class='lightview' rel="iframe"  ><font color="#F9AB24"><?php echo $msg[0][15]?></font></a> - <a target="_blank" href="https://www.roig.net"><font color="#F9AB24"><?php echo $msg[0][16]?></font></a><?php echo $msg[0][17]?></div>
	</div>
</div>

<? if($module=="fitxa_colors"){ ?>

<script>
	jQuery(".chang").click(function () {
	  var color = jQuery(this).css("background-color");
	  jQuery("#result").html("<div class='imagen' style='background-color:" + color + ";'><img src='images/modelos/<?=$lang?>/Color_<?=$MODELO_PREFIJO;?>_<?=$DISENO_PREFIJO;?>.png' width='250'></div>");
	  jQuery('input[id=setcolor]').val(color);
	});
</script>	
<? } ?>
<!-- CODI CONVERSIONS -->

<?php if($module=="testimonios"){
	switch($lang){
		case "esp":
		case "cat":
		?>
		<!-- Google Code for testimonios Conversion Page -->
		<script language="JavaScript" type="text/javascript">
		<!--
		var google_conversion_id = 1072474429;
		var google_conversion_language = "es";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "bHsgCKKUYxC90rL_Aw";
		//-->
	
		<?php
		break;

		case "eng":?>
		<!-- Google Code for TESTIMONIOS UK Conversion Page -->
		<script language="JavaScript" type="text/javascript">
		<!--
		var google_conversion_id = 1072474429;
		var google_conversion_language = "en_GB";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "6kc9CPyUYxC90rL_Aw";
		//-->
		</script>
		<script language="JavaScript" src="https://www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<img height="1" width="1" border="0" src="https://www.googleadservices.com/pagead/conversion/1072474429/?label=6kc9CPyUYxC90rL_Aw&amp;script=0"/>
		</noscript>
		<?php
		break;

		case "fra": ?>
		<!-- Google Code for TESTIMONIOS FR Conversion Page -->
		<script language="JavaScript" type="text/javascript">
		<!--
		var google_conversion_id = 1072474429;
		var google_conversion_language = "fr";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "LK5VCNaVYxC90rL_Aw";
		//-->
		</script>
		<script language="JavaScript" src="https://www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<img height="1" width="1" border="0" src="https://www.googleadservices.com/pagead/conversion/1072474429/?label=LK5VCNaVYxC90rL_Aw&amp;script=0"/>
		</noscript>

		<?php
		break;

		case "ita":  ?>
		<!-- Google Code for TESTIMONIOS IT Conversion Page -->
		<script language="JavaScript" type="text/javascript">
		<!--
		var google_conversion_id = 1072474429;
		var google_conversion_language = "it";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "F3W4CLCWYxC90rL_Aw";
		//-->
		</script>
		<script language="JavaScript" src="https://www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<img height="1" width="1" border="0"
		src="https://www.googleadservices.com/pagead/conversion/1072474429/?label=F3W4CLCWYxC90rL_Aw&amp;script=0"/>
		</noscript>
		<?php break;

	}

} ?>
<?php /*?><?php
//CODIGO PARA OPTIMIZER (PIE)
switch ($module){
	case "inicio":?>
		<!-- Google Website Optimizer Tracking Script -->
		<script type="text/javascript">
			if(typeof(_gat)!='object')document.write('<sc'+'ript src="http'+(document.location.protocol=='https:'?'s://ssl':'://www')+'.google-analytics.com/ga.js"></sc'+'ript>')
		</script>
		<script type="text/javascript">
			try {
			var gwoTracker=_gat._getTracker("UA-2266996-4");
			gwoTracker._trackPageview("/4063609163/test");
			}catch(err){}
		</script>
		<!-- End of Google Website Optimizer Tracking Script -->
<?	break;
	case "fitxa_1":?>
		<!-- Google Website Optimizer Conversion Script -->
		<script type="text/javascript">
		if(typeof(_gat)!='object')document.write('<sc'+'ript src="http'+(document.location.protocol=='https:'?'s://ssl':'://www')+'.google-analytics.com/ga.js"></sc'+'ript>')
		</script>
		<script type="text/javascript">
		try {
		var gwoTracker=_gat._getTracker("UA-2266996-4");
		gwoTracker._trackPageview("/4063609163/goal");
		}catch(err){}
		</script>
		<!-- End of Google Website Optimizer Conversion Script -->
<?	break;
}
?><?php */?>
	<!-- Google Code for Etiqueta de remarketing: -->
	<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 1072474429;
	var google_conversion_label = "gOSyCPzJygMQvdKy_wM";
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/1072474429/?value=0&amp;label=gOSyCPzJygMQvdKy_wM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
	
	
	
</body>
</html>
