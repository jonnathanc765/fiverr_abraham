<div class="outer">

	<div class="intro_text">
		
       	<div class="contenedor_pasos">

       	<?php 
		if($_SESSION['lang']== "deu"){
       	?>
        
                <div class="contenedor_paso"><img src="images/1.gif" alt="calendarios personalizados paso 1" /></div>
                <div class="contenedor_paso_text"><span class="title_pasos"><? echo $msg[1][18]; ?></span><br /><? echo $msg[1][17]; ?></div>
                <div class="contenedor_paso"><img src="images/2.gif" alt="calendarios personalizados paso 2" /></div>
                <div class="contenedor_paso_text"><span class="title_pasos"><? echo $msg[1][19]; ?></span><br /><? echo $msg[1][20]; ?></div>
                <div class="contenedor_paso"><img src="images/3.gif" alt="calendarios personalizados paso 3" /></div>
                <div class="contenedor_paso_text2"><span class="title_pasos"><? echo $msg[1][57]; ?></span><br /><? echo $msg[1][58]; ?></div>

       <?php 
   				} 
       ?>


     	<?php 
		if($_SESSION['lang']== "esp"){
       	?>
        
              
       <?php 
   				} 
       ?>


	<?php 
		if($_SESSION['lang']== "fra"){
       	?>
        
              
       <?php 
   				} 
       ?>








       <?php 

			if($_SESSION['lang'] =='esp'){
				echo '<a href="https://new.calendariosconimagen.com/" target="_blank" ><img style="width:902px;height:280px" src="novedades2018.jpg" alt="Calendarios"></a>';
			}

       ?>



       <?php 

			if($_SESSION['lang'] =='fra'){
				echo '<a href="https://new.calendariosconimagen.com/fr/" target="_blank" ><img style="width:902px;height:280px" src="franhome.jpg" alt="Calendarios"></a>';
			}

       ?>

        </div> 
	</div>


       <?php 

			if($_SESSION['lang'] =='esp'){
				echo '<br><br><br><br>	<br><br><br><br> 	<br><br><br><br>';
			}

       ?>

       <?php 

			if($_SESSION['lang'] =='fra'){
				echo '<br><br><br><br>	<br><br><br><br> 	<br><br><br><br>';
			}

       ?>
	  
	 
	<? if($lang == "deu"){
			$txt_style = "nomproduct_fila_inicio_deu";
	   } else {
			$txt_style = "nomproduct_fila_inicio";
	   }

	 if($_GET["tab"] == 1 || $_GET["tab"] == ""){ ?>
        <div class="cont_pesta_izq"><img src="images/pestana_mesa_1_<?=$_SESSION['lang']?>.gif" alt="1" /></div>
        <? if($_SESSION['lang'] != "fra"){ ?>
       		<div class="cont_pesta_centro_2">
       			
       				<a href="<?=$home[1]?>"><img src="images/pestana_pared_1_<?=$_SESSION['lang']?>.gif" alt="2" /></a></div>
        <? }else{ ?>
        	<div class="cont_pesta_centro_2">
        		
       				<a href="<?=$home[1]?>"><img src="images/pestana_pared_1_<?=$_SESSION['lang']?>.gif" alt="3" /></a></div>
        <? } ?>
        
        <div class="cont_pesta_der"><a href="<?=$home[2]?>"><img src="images/pestana_bolsillo_1_<?=$_SESSION['lang']?>.gif" alt="3" /></a></div>
    
    <? }elseif($_GET["tab"] == 2){ ?>
        <div class="cont_pesta_izq2">
        	
       				<a href="<?=$home[1]?>"><a href="<?=$home[0]?>"><img src="images/pestana_mesa_2_<?=$_SESSION['lang']?>.gif" /></a></div>
         
         <? if($_SESSION['lang'] != "fra"){ ?>
       		<div class="cont_pesta_centro_2_2"><img src="images/pestana_pared_2_<?=$_SESSION['lang']?>.gif" alt="1" /></a></div>
        <? }else{ ?>
        	<div class="cont_pesta_centro_2_2"><img src="images/pestana_pared_2_<?=$_SESSION['lang']?>.gif" alt="2" /></a></div>
        <? } ?>
       
        <div class="cont_pesta_der2"><a href="<?=$home[2]?>"><img src="images/pestana_bolsillo_2_<?=$_SESSION['lang']?>.gif" alt="4" /></a></div>
   
    <? }elseif($_GET["tab"] == 3){ ?>
        <div class="cont_pesta_izq3"><a href="<?=$home[0]?>"><img src="images/pestana_mesa_3_<?=$_SESSION['lang']?>.gif" alt="5" /></a></div>
        <? if($_SESSION['lang'] != "fra"){ ?>
       		<div class="cont_pesta_centro_2">
       			<a href="<?=$home[1]?>"><img src="images/pestana_pared_3_<?=$_SESSION['lang']?>.gif" /></a></div>
        <? }else{ ?>
        	<div class="cont_pesta_centro_2"><a href="<?=$home[1]?>"><img src="images/pestana_pared_3_<?=$_SESSION['lang']?>.gif" /></a></div>
        <? } ?>
        <div class="cont_pesta_der3"><img src="images/pestana_bolsillo_3_<?=$_SESSION['lang']?>.gif" /></div>
    
    <? }elseif($_GET["tab"] == 4){ ?>
    	<div class="cont_pesta_izq"><img src="images/pestana_mesa_1_<?=$_SESSION['lang']?>.gif" /></div>
        <? if($_SESSION['lang'] != "fra"){ ?>
       		<div class="cont_pesta_centro_2"><a href="<?=$home[1]?>"><img src="images/pestana_pared_1_<?=$_SESSION['lang']?>.gif" /></a></div>
        <? }else{ ?>
        	<div class="cont_pesta_centro_2"><a href="<?=$home[1]?>"><img src="images/pestana_pared_1_<?=$_SESSION['lang']?>.gif" /></a></div>
        <? } ?>
        <div class="cont_pesta_der"><img src="images/pestana_bolsillo_1_<?=$_SESSION['lang']?>.gif" /></div>
       
       <? if($_SESSION['lang'] != "fra"){ ?>
       		<div class="cont_pesta_top_fr">
       <? }else{ ?> 
       		<div class="cont_pesta_top_fr">
       <? } ?>
       <div align="center"><br />| <a href="<?=$home[3]?>" class="enlace_mas_info"><?=$msg[1][61]?></a> |<br/> <a href="/precios" class="enlace_mas_info"><?=$msg[1][62]?></a> |</div></div>
    	<div class="div_content_center">
                <!-- Modelo 9x9 cm con espiral MOD: 113 -->
        
            <div class="box_fila_fons">
			<div class="box_fila_1"></div>
         
			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[0]?>" title="<?=tipoCalendario('113');?> <?=QueModelo('113');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('113');?>.jpg" title="<?=tipoCalendario('113');?> <?=QueModelo('113');?>" alt="<?=tipoCalendario('113');?> <?=QueModelo('113');?>" border="0"/></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('113');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('113');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(113),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[0]?>" title="<?=QueModelo('113');?>"><?=$msg[1][59]?></a></div>
                
			</div>

	<!-- Modelo 15x14 cm con espiral MOD: 115 --> 

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[1]?>" title="<?=tipoCalendario('115');?> <?=QueModelo('115');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('115');?>.jpg" title="<?=tipoCalendario('115');?> <?=QueModelo('115');?>" alt="<?=tipoCalendario('115');?> <?=QueModelo('115');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('115');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('115');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(115),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[1]?>" title="<?=QueModelo('115');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 15x21 cm con espiral MOD: 116 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[2]?>" title="<?=tipoCalendario('116');?> <?=QueModelo('116');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('116');?>.jpg" title="<?=tipoCalendario('116');?> <?=QueModelo('116');?>" alt="<?=tipoCalendario('116');?> <?=QueModelo('116');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('116');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('116');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(116),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[2]?>" title="<?=QueModelo('116');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo 21x10 cm con espiral MOD: 123 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[3]?>" title="<?=tipoCalendario('123');?> <?=QueModelo('123');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('123');?>.jpg" title="<?=tipoCalendario('123');?> <?=QueModelo('123');?>" alt="<?=tipoCalendario('123');?> <?=QueModelo('123');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('123');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('123');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(123),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[3]?>" title="<?=QueModelo('123');?>"><?=$msg[1][59]?></a></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

		
	<!-- Modelo 21x10 cm con espiral MOD: 117 -->

		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
			<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[4]?>" title="<?=tipoCalendario('117');?> <?=QueModelo('117');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('117');?>.jpg" title="<?=tipoCalendario('117');?> <?=QueModelo('117');?>" alt="<?=tipoCalendario('117');?> <?=QueModelo('117');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('117');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('117');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(117),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[4]?>" title="<?=QueModelo('117');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo Caja Disquete 9X9 MOD: 112 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[5]?>" title="<?=tipoCalendario('112');?> <?=QueModelo('112');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('112');?>.jpg" title="<?=tipoCalendario('112');?> <?=QueModelo('112');?>" alt="<?=tipoCalendario('112');?> <?=QueModelo('112');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('112');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('112');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(112),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[5]?>" title="<?=QueModelo('112');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo Caja CD 11x13 cm MOD: 114 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[6]?>" title="<?=tipoCalendario('114');?> <?=QueModelo('114');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('114');?>.jpg" title="<?=tipoCalendario('114');?> <?=QueModelo('114');?>" alt="<?=tipoCalendario('114');?> <?=QueModelo('114');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('114');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('114');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(114),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[6]?>" title="<?=QueModelo('114');?>"><?=$msg[1][59]?></a></div>
			</div>
            
    <!-- Modelo 21x10 cm Mesa en PVC + Reglas MOD: 122 -->


			<div class="bloc_fila_inicio">
				<div align="left"><a href="/<?=$link[4]?>-pvc" title="<?=tipoCalendario('122');?> <?=QueModelo('122');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('122');?>.jpg" title="<?=tipoCalendario('122');?> <?=QueModelo('122');?>" alt="<?=tipoCalendario('122');?> <?=QueModelo('122');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('122');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('122');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(122),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[4]?>-pvc" title="<?=QueModelo('122');?>"><?=$msg[1][59]?></a></div>
			</div>
            
			<div class="clear"></div>
		 </div>
    
    <!-- PVC 21x7,7 cm  -->
		
		
		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
			<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[23]?>" title="<?=tipoCalendario('143');?> <?=QueModelo('143');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('143');?>.jpg" title="<?=tipoCalendario('143');?> <?=QueModelo('143');?>" alt="<?=QueModelo('143');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('143');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('143');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(143),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[23]?>" title="<?=QueModelo('143');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- PVC 15x10 cm -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[22]?>" title="<?=tipoCalendario('142');?> <?=QueModelo('142');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('142');?>.jpg" title="<?=tipoCalendario('142');?> <?=QueModelo('142');?>" alt="<?=QueModelo('142');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('142');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('142');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(142),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[22]?>" title="<?=QueModelo('142');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- PVC 21x11 cm + 2 reglas -->

			<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[21]?>" title="<?=tipoCalendario('141');?> <?=QueModelo('141');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('141');?>.jpg" title="<?=tipoCalendario('141');?> <?=QueModelo('141');?>" alt="<?=QueModelo('141');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('141');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('141');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(141),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[21]?>" title="<?=QueModelo('141');?>"><?=$msg[1][59]?></a></div>
			</div>
            
    <!-- Colour Line PVC 21x11 cm + 2 reglas  -->


			<!--<div class="bloc_fila_inicio">
				<div align="left"><a href="/<?=$link[20]?>" title="<?=tipoCalendario('140');?> <?=QueModelo('140');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('140');?>.jpg" title="<?=tipoCalendario('140');?> <?=QueModelo('140');?>" alt="<?=QueModelo('140');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('140');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('140');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(140),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[20]?>" title="<?=QueModelo('140');?>"><?=$msg[1][59]?></a></div>
			</div>-->
			
			     
			<div class="clear"></div>
		</div>

    <!-- COLOR LINE 136 -->
		
		
		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
			<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[16]?>" title="<?=tipoCalendario('136');?> <?=QueModelo('136');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('136');?>.jpg" title="<?=tipoCalendario('136');?> <?=QueModelo('136');?>" alt="<?=QueModelo('136');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('136');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('136');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(136),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[16]?>" title="<?=QueModelo('136');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- COLOR LINE 137 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[17]?>" title="<?=tipoCalendario('137');?> <?=QueModelo('137');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('137');?>.jpg" title="<?=tipoCalendario('137');?> <?=QueModelo('137');?>" alt="<?=QueModelo('137');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('137');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('137');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(137),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[17]?>" title="<?=QueModelo('137');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- COLOR LINE 138 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[18]?>" title="<?=tipoCalendario('138');?> <?=QueModelo('138');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('138');?>.jpg" title="<?=tipoCalendario('138');?> <?=QueModelo('138');?>" alt="<?=QueModelo('138');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('138');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('138');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(138),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[18]?>" title="<?=QueModelo('138');?>"><?=$msg[1][59]?></a></div>
			</div>
            
    <!-- COLOR LINE 139 -->


			<div class="bloc_fila_inicio">
				<div align="left"><a href="/<?=$link[19]?>" title="<?=tipoCalendario('139');?> <?=QueModelo('139');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('139');?>.jpg" title="<?=tipoCalendario('139');?> <?=QueModelo('139');?>" alt="<?=QueModelo('139');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('139');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('139');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(139),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[19]?>" title="<?=QueModelo('139');?>"><?=$msg[1][59]?></a></div>
			</div>
			
			     
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	
        <div class="div_content_bottom"></div>

		<div class="clear"></div>


	</div>

        
        <br /><br /> 
                
        
        
        <div class="cont_pesta_izq2"><img src="images/pestana_mesa_2_<?=$_SESSION['lang']?>.gif" /></div>
        <? if($_SESSION['lang'] != "fra"){ ?>
       		<div class="cont_pesta_centro_2_2"><img src="images/pestana_pared_2_<?=$_SESSION['lang']?>.gif" /></a></div>
        <? }else{ ?>
        	<div class="cont_pesta_centro_2_2"><img src="images/pestana_pared_2_<?=$_SESSION['lang']?>.gif" /></a></div>
        <? } ?>
        <div class="cont_pesta_der2"><img src="images/pestana_bolsillo_2_<?=$_SESSION['lang']?>.gif" /></div>
        
         <? if($_SESSION['lang'] != "fra"){ ?>
       		<div class="cont_pesta_top">
       <? }else{ ?> 
       		<div class="cont_pesta_top_fr">
       <? } ?></div>
        <div class="div_content_center">
                
            
         
         
         <? if($lang=="fra"){ ?>
		<!-- Modelo 21x10 cm con espiral MOD: 118 -->
		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
            <div class="clear_raro3"></div>
			<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[28]?>" title="<?=tipoCalendario('148');?> <?=QueModelo('148');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('148');?>.jpg" title="<?=tipoCalendario('148');?> <?=QueModelo('148');?>" alt="<?=tipoCalendario('148');?> <?=QueModelo('148');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="nomproduct_fila_inicio_fra"><? if($lang=="fra"){ echo "Grand Calendrier Bancaire<br>Impression Recto / Verso<br><small>Rembordé, Contrecollé ou Souple<small>"; } else { echo QueModelo('146'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[3][1]?> <?=number_format(precioMinimo(148),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[28]?>" title="<?=QueModelo('148');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 30x42 MOD: 126 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="<?=$link[30]?>" title="<?=tipoCalendario('150');?> <?=QueModelo('150');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('150');?>.jpg" title="<?=tipoCalendario('150');?> <?=QueModelo('150');?>" alt="<?=tipoCalendario('150');?> <?=QueModelo('150');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="nomproduct_fila_inicio_fra"><? if($lang=="fra"){ echo "Moyen Calendrier Bancaire<br>Impression Recto / Verso<br><small>Rembordé, Contrecollé ou Souple<small>"; } else { echo QueModelo('150'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[3][1]?> <?=number_format(precioMinimo(151),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[30]?>" title="<?=QueModelo('150');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo Caja CD 11x13 cm MOD: 127 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="<?=$link[14]?>" title="<?=tipoCalendario('127');?> <?=QueModelo('127');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('127');?>.jpg" title="<?=tipoCalendario('127');?> <?=QueModelo('127');?>" alt="<?=tipoCalendario('127');?> <?=QueModelo('127');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="nomproduct_fila_inicio_fra"><? if($lang=="fra"){ echo "Petit Calendrier Bancaire<br>Impression Recto / Verso<br><small>Rembordé, Contrecollé ou Souple<small>"; } else { echo QueModelo('127'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[3][1]?> <?=number_format(precioMinimo(145),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[14]?>" title="<?=QueModelo('127');?>"><?=$msg[1][59]?></a></div>
			</div>
          
            
			<div class="clear"></div>
		</div>
		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
            <div class="clear_raro3"></div>


			<div class="bloc_fila_inicio">
				<div align="center"><a href="<?=$link[27]?>" title="<?=tipoCalendario('146');?> <?=QueModelo('146');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('146');?>.jpg" title="<?=tipoCalendario('146');?> <?=QueModelo('146');?>" alt="<?=tipoCalendario('146');?> <?=QueModelo('146');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="nomproduct_fila_inicio_fra"><? if($lang=="fra"){ echo "Grand Calendrier Bancaire<br>Impression Recto<br><small>Rembordé, Contrecollé ou Souple<small>"; } else { echo QueModelo('146'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[3][1]?> <?=number_format(precioMinimo(147),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[27]?>" title="<?=QueModelo('146');?>"><?=$msg[1][59]?></a></div>
			</div>


			<div class="bloc_fila_inicio">
				<div align="center"><a href="<?=$link[13]?>" title="<?=tipoCalendario('126');?> <?=QueModelo('126');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('126');?>.jpg" title="<?=tipoCalendario('126');?> <?=QueModelo('126');?>" alt="<?=tipoCalendario('126');?> <?=QueModelo('126');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="nomproduct_fila_inicio_fra"><? if($lang=="fra"){ echo "Moyen Calendrier Bancaire<br>Impression Recto<br><small>Rembordé, Contrecollé ou Souple<small>"; } else { echo QueModelo('126'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[3][1]?> <?=number_format(precioMinimo(144),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[13]?>" title="<?=QueModelo('126');?>"><?=$msg[1][59]?></a></div>
			</div>
          
          	<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[12]?>" title="<?=tipoCalendario('118');?> <?=QueModelo('118');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('118');?>.jpg" title="<?=tipoCalendario('118');?> <?=QueModelo('118');?>" alt="<?=tipoCalendario('118');?> <?=QueModelo('118');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="<?=$txt_style?>"><?=QueModelo('118');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(118),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[12]?>" title="<?=QueModelo('118');?>"><?=$msg[1][59]?></a></div>
			</div>

            
			<div class="clear"></div>
		</div>
		
		<? } ?>	
		
		<!-- Modelo 9x9 cm con espiral MOD: 113 -->
		<? if($lang=="fra"){ ?>
		<div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>     	
			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[8]?>" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('119');?>.jpg" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>" alt="<?=tipoCalendario('119');?> <?=QueModelo('119');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('119');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('119');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(119),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[8]?>" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>"><?=$msg[1][59]?></a></div>
                
			</div>

	<!-- Modelo 15x14 cm con espiral MOD: 115 --> 

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[9]?>" title="<?=tipoCalendario('125');?> <?=QueModelo('125');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('125');?>.jpg" title="<?=tipoCalendario('125');?> <?=QueModelo('125');?>" alt="<?=tipoCalendario('125');?> <?=QueModelo('125');?>" border="0" align='left' /></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('125');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('125');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(125),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[9]?>" title="<?=QueModelo('125');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 15x21 cm con espiral MOD: 116 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[10]?>" title="<?=tipoCalendario('120');?> <?=QueModelo('120');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('120');?>.jpg" title="<?=tipoCalendario('120');?> <?=QueModelo('120');?>" alt="<?=tipoCalendario('120');?> <?=QueModelo('120');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('120');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('120');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(120),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[10]?>" title="<?=QueModelo('120');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo 21x10 cm con espiral MOD: 123 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[11]?>" title="<?=tipoCalendario('124');?> <?=QueModelo('124');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('124');?>.jpg" title="<?=tipoCalendario('124');?> <?=QueModelo('124');?>" alt="<?=tipoCalendario('124');?> <?=QueModelo('124');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('124');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('124');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(124),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[11]?>" title="<?=QueModelo('124');?>"><?=$msg[1][59]?></a></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>
	<? } ?>	

	<? if($lang == "esp"){ ?>
		<div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>     	
			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[8]?>" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('119');?>.jpg" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>" alt="<?=tipoCalendario('119');?> <?=QueModelo('119');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('119');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('119');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(119),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[8]?>" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>"><?=$msg[1][59]?></a></div>
                
			</div>

	<!-- Modelo 15x14 cm con espiral MOD: 115 --> 

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[9]?>" title="<?=tipoCalendario('125');?> <?=QueModelo('125');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('125');?>.jpg" title="<?=tipoCalendario('125');?> <?=QueModelo('125');?>" alt="<?=tipoCalendario('125');?> <?=QueModelo('125');?>" border="0" align='left' /></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('125');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('125');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(125),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[9]?>" title="<?=QueModelo('125');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 15x21 cm con espiral MOD: 116 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[10]?>" title="<?=tipoCalendario('120');?> <?=QueModelo('120');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('120');?>.jpg" title="<?=tipoCalendario('120');?> <?=QueModelo('120');?>" alt="<?=tipoCalendario('120');?> <?=QueModelo('120');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('120');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('120');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(120),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[10]?>" title="<?=QueModelo('120');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo 21x10 cm con espiral MOD: 123 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[11]?>" title="<?=tipoCalendario('124');?> <?=QueModelo('124');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('124');?>.jpg" title="<?=tipoCalendario('124');?> <?=QueModelo('124');?>" alt="<?=tipoCalendario('124');?> <?=QueModelo('124');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('124');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('124');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(124),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[11]?>" title="<?=QueModelo('124');?>"><?=$msg[1][59]?></a></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>
		
		<div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>     	
			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-23cm-bimensual-esp" title="<?=tipoCalendario('128');?> <?=QueModelo('128');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-23cm-bimensual-esp-p.jpg" title="<?=tipoCalendario('128');?> <?=QueModelo('128');?>" alt="<?=tipoCalendario('128');?> <?=QueModelo('128');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('128');?></div>
				<div class="<?=$txt_style?>">23,5 cm. Bimensual.<div class="clear10"></div>Espa&ntilde;ol</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(128),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-23cm-bimensual-esp" title=" <?=QueModelo('128');?>"><?=$msg[1][59]?></a></div>
                
			</div>

	<!-- Modelo 15x14 cm con espiral MOD: 115 --> 

			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-23cm-bimensual-cat" title="<?=tipoCalendario('129');?> <?=QueModelo('129');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-23cm-bimensual-cat-p.jpg" title="<?=tipoCalendario('129');?> <?=QueModelo('129');?>" alt="<?=tipoCalendario('129');?> <?=QueModelo('129');?>" border="0" align='left' /></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('129');?></div>
				<div class="<?=$txt_style?>">23,5 cm. Bimensual. <div class="clear10"></div>Catal&agrave;</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(129),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-23cm-bimensual-cat" title="<?=QueModelo('129');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 15x21 cm con espiral MOD: 116 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-33cm-bimensual-esp" title="<?=tipoCalendario('130');?> <?=QueModelo('130');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-23cm-mensual-esp-p.jpg" title="<?=tipoCalendario('130');?> <?=QueModelo('130');?>" alt="<?=tipoCalendario('130');?> <?=QueModelo('130');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('130');?></div>
				<div class="<?=$txt_style?>">23,5 cm. Mensual. <div class="clear10"></div>Espa&ntilde;ol</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(130),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-33cm-bimensual-esp" title="<?=QueModelo('130');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo 21x10 cm con espiral MOD: 123 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-33cm-bimensual-cat" title="<?=tipoCalendario('131');?> <?=QueModelo('131');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-33cm-bimensual-esp-p.jpg" title="<?=tipoCalendario('131');?> <?=QueModelo('131');?>" alt="<?=tipoCalendario('131');?> <?=QueModelo('131');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('131');?></div>
				<div class="<?=$txt_style?>">33,5 cm. Bimensual. <div class="clear10"></div>Espa&ntilde;ol</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(131),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-33cm-bimensual-cat" title="<?=QueModelo('131');?>"><?=$msg[1][59]?></a></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>
		
		
		
		
		
		<div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>     	
			<div class="bloc_fila_inicio">																																			
				<div align="center"><a href="calendarios-personalizados-faldilla-23cm-mensual-esp" title="<?=tipoCalendario('132');?> <?=QueModelo('132');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-33cm-bimensual-cat-p.jpg" title="<?=tipoCalendario('132');?> <?=QueModelo('132');?>" alt="<?=tipoCalendario('132');?> <?=QueModelo('132');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('132');?></div>
				<div class="<?=$txt_style?>">33,5 cm. Bimensual. <div class="clear10"></div>Catal&agrave;</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(132),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-23cm-mensual-esp" title="<?=QueModelo('132');?>"><?=$msg[1][59]?></a></div>
                
			</div>

			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-33cm-mensual-esp" title="<?=tipoCalendario('135');?> <?=QueModelo('135');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-33cm-mensual-esp-p.jpg" title="<?=tipoCalendario('135');?> <?=QueModelo('135');?>" alt="<?=tipoCalendario('135');?> <?=QueModelo('135');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('135');?></div>
				<div class="<?=$txt_style?>">33,5 cm. Mensual. <div class="clear10"></div>Espa&ntilde;ol</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(135),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-33cm-mensual-esp" title="<?=QueModelo('135');?>"><?=$msg[1][59]?></a></div>
			</div>
			

			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-43cm-mensual-esp" title="<?=tipoCalendario('133');?> <?=QueModelo('133');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-43cm-mensual-esp-p.jpg" title="<?=tipoCalendario('133');?> <?=QueModelo('133');?>" alt="<?=tipoCalendario('133');?> <?=QueModelo('133');?>" border="0" align='left' /></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('133');?></div>
				<div class="<?=$txt_style?>">43,5 cm. Mensual. <div class="clear10"></div>Espa&ntilde;ol</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(133),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-43cm-mensual-esp" title="<?=QueModelo('133');?>"><?=$msg[1][59]?></a></div>
			</div>


	

			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-43cm-mensual-cat" title="<?=tipoCalendario('134');?> <?=QueModelo('134');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-43cm-mensual-cat-p.jpg" title="<?=tipoCalendario('134');?> <?=QueModelo('134');?>" alt="<?=tipoCalendario('134');?> <?=QueModelo('134');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('134');?></div>
				<div class="<?=$txt_style?>">43,5 cm. Mensual. <div class="clear10"></div>Catal&agrave;</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(134),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-43cm-mensual-cat" title="<?=QueModelo('134');?>"><?=$msg[1][59]?></a></div>
			</div>


			
			<div class="clear"></div>
		</div>

	<? } ?>
	
	
	<? if($lang!="fra"){ ?>
	<!-- Modelo 21x10 cm con espiral MOD: 118 -->

	<?	if($lang=="eng" || $lang=="ita"){ ?>
	<div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>     	
			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[8]?>" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('119');?>.jpg" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>" alt="<?=tipoCalendario('119');?> <?=QueModelo('119');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('119');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('119');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(119),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[8]?>" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>"><?=$msg[1][59]?></a></div>
                
			</div>

	<!-- Modelo 15x14 cm con espiral MOD: 115 --> 

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[9]?>" title="<?=tipoCalendario('125');?> <?=QueModelo('125');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('125');?>.jpg" title="<?=tipoCalendario('125');?> <?=QueModelo('125');?>" alt="<?=tipoCalendario('125');?> <?=QueModelo('125');?>" border="0" align='left' /></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('125');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('125');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(125),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[9]?>" title="<?=QueModelo('125');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 15x21 cm con espiral MOD: 116 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[10]?>" title="<?=tipoCalendario('120');?> <?=QueModelo('120');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('120');?>.jpg" title="<?=tipoCalendario('120');?> <?=QueModelo('120');?>" alt="<?=tipoCalendario('120');?> <?=QueModelo('120');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('120');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('120');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(120),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[10]?>" title="<?=QueModelo('120');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo 21x10 cm con espiral MOD: 123 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[11]?>" title="<?=tipoCalendario('124');?> <?=QueModelo('124');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('124');?>.jpg" title="<?=tipoCalendario('124');?> <?=QueModelo('124');?>" alt="<?=tipoCalendario('124');?> <?=QueModelo('124');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('124');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('124');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(124),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[11]?>" title="<?=QueModelo('124');?>"><?=$msg[1][59]?></a></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>
		
		<? } ?>
		
		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
            <div class="clear_raro3"></div>  
			<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[12]?>" title="<?=tipoCalendario('118');?> <?=QueModelo('118');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('118');?>.jpg" title="<?=tipoCalendario('118');?> <?=QueModelo('118');?>" alt="<?=tipoCalendario('118');?> <?=QueModelo('118');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('118');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('118');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(118),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[12]?>" title=" <?=QueModelo('118');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 30x42 MOD: 126 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="<?=$link[13]?>" title="<?=tipoCalendario('126');?> <?=QueModelo('126');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('126');?>.jpg" title="<?=tipoCalendario('126');?> <?=QueModelo('126');?>" alt="<?=tipoCalendario('126');?> <?=QueModelo('126');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('126');?></div>
				<div class="<?=$txt_style?>"><? if($lang=="fra"){ echo "Moyen Calendrier Bancaire"; } else { echo QueModelo('126'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][68]?> <?=number_format(precioMinimo(126),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[13]?>" title="<?=QueModelo('126');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo Caja CD 11x13 cm MOD: 127 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="<?=$link[14]?>" title="<?=tipoCalendario('127');?> <?=QueModelo('127');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('127');?>.jpg" title="<?=tipoCalendario('127');?> <?=QueModelo('127');?>" alt="<?=tipoCalendario('127');?> <?=QueModelo('127');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('127');?></div>
				<div class="<?=$txt_style?>"><? if($lang=="fra"){ echo "Petit Calendrier Bancaire"; } else { echo QueModelo('127'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(127),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[14]?>" title="<?=QueModelo('127');?>"><?=$msg[1][59]?></a></div>
			</div>
          
            
			<div class="clear"></div>
		</div>
	<? } ?>

		<div class="clear"></div>

	
        <div class="div_content_bottom"></div>

		<div class="clear"></div>


	</div>

        <br /><br /> 
        
        
        <div class="cont_pesta_izq3"><img src="images/pestana_mesa_3_<?=$_SESSION['lang']?>.gif" /></div>
         <? if($_SESSION['lang'] != "fra"){ ?>
       		<div class="cont_pesta_centro_2"><a href="<?=$home[1]?>"><img src="images/pestana_pared_3_<?=$_SESSION['lang']?>.gif" /></a></div>
        <? }else{ ?>
        	<div class="cont_pesta_centro_2"><a href="<?=$home[1]?>"><img src="images/pestana_pared_3_<?=$_SESSION['lang']?>.gif" /></a></div>
        <? } ?>
        <div class="cont_pesta_der3"><img src="images/pestana_bolsillo_3_<?=$_SESSION['lang']?>.gif" /></div>
        
        <? if($_SESSION['lang'] != "fra"){ ?>
       		<div class="cont_pesta_top">
       <? }else{ ?> 
       		<div class="cont_pesta_top_fr">
       <? } ?></div>
        
        <div class="div_content_center">
        
        	<!-- BOLSILLO OLD -->
	<!--<div class="box_fila_fons">
		<div class="box_fila_1"></div>
       
        <div class="bloc_fila_inicio2">
				<div align="center"><a href="<?=$link[15]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('121');?>.jpg" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>" alt="<?=tipoCalendario('121');?> <?=QueModelo('121');?>" border="0"/></a></div>
		</div>	
        
        <div class="bloc_fila_inicio3">	
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('121');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('121');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(121),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[15]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><?=$msg[1][59]?></a></div>
			</div>
        </div>
            
            <div class="clear"></div>-->
     <!-- END BOLSILLO OLD -->       
            
     <!-- BOLSILL NEW -->    
       <? if($lang == "esp"){ ?>
       	<div class="clear"></div>
        <div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>  
            
				<div class="bloc_fila_inicio4">
					<div align="center"><a href="/<?=$link[36]?>" title="<?=tipoCalendario('156');?> <?=QueModelo('156');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('156');?>.jpg" title="<?=tipoCalendario('156');?> <?=QueModelo('156');?>" alt="<?=tipoCalendario('156');?> <?=QueModelo('156');?>" border="0"/></a></div>
					
					<div class="clear_raro"></div>
					<div class="titul_petit_fila_inicio"><?=tipoCalendario('156');?></div>
					<div class="<?=$txt_style?>"><?=QueModelo('156');?></div>
					<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(156),2);?> <?=$SIMBOL_MONEDA;?></div>
	                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[36]?>" title="<?=QueModelo('156');?>"><?=$msg[1][59]?></a></div>
				</div>
		


			<div class="bloc_fila_inicio4">
				<div align="center"><a href="/<?=$link[35]?>" title="<?=tipoCalendario('155');?> <?=QueModelo('155');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('155');?>.jpg" title="<?=tipoCalendario('155');?> <?=QueModelo('155');?>" alt="<?=tipoCalendario('155');?> <?=QueModelo('155');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('155');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('155');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(155),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[35]?>" title="<?=QueModelo('155');?>"><?=$msg[1][59]?></a></div>
			</div>
			
			
   			<div class="bloc_fila_inicio4">
				<div align="center"><a href="/<?=$link[34]?>" title="<?=tipoCalendario('154');?> <?=QueModelo('154');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('154');?>.jpg" title="<?=tipoCalendario('154');?> <?=QueModelo('154');?>" alt="<?=tipoCalendario('154');?> <?=QueModelo('154');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('154');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('154');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(154),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[34]?>" title="<?=QueModelo('154');?>"><?=$msg[1][59]?></a></div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="box_fila_fons">	
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>  
			<div class="bloc_fila_inicio5">
				<div align="center"><a href="/<?=$link[32]?>" title="<?=tipoCalendario('152');?> <?=QueModelo('152');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('152');?>.jpg" title="<?=tipoCalendario('152');?> <?=QueModelo('152');?>" alt="<?=tipoCalendario('152');?> <?=QueModelo('152');?>" border="0" /></a><div class="clear"></div></div>
				<div class="clear"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('152');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('152');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(152),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[32]?>" title="<?=QueModelo('152');?>"><?=$msg[1][59]?></a></div>
			</div>
			
	
			<div class="bloc_fila_inicio5">
				<div align="center"><a href="/<?=$link[33]?>" title="<?=tipoCalendario('153');?> <?=QueModelo('153');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('153');?>.jpg" title="<?=tipoCalendario('153');?> <?=QueModelo('153');?>" alt="<?=tipoCalendario('153');?> <?=QueModelo('153');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('153');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('153');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(153),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[33]?>" title="<?=QueModelo('153');?>"><?=$msg[1][59]?></a></div>
			</div>

			<div class="bloc_fila_inicio5">
				<div align="center"><a href="/<?=$link[37]?>" title="<?=tipoCalendario('153'); ?> Iman troquelado"><img class="lupa" src="images/muestra_home/<?=$lang?>/I_TROQUEL.jpg" title="<?=tipoCalendario('153');?> Iman troquelado" alt="<?=tipoCalendario('153');?> Iman troquelado" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('153');?></div>
				<div class="<?=$txt_style?>">Iman troquelado</div>
				<div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[37]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><?=$msg[1][59]?></a></div>
                
			</div>
			
			<div class="bloc_fila_inicio5">
				<div align="center"><br><a href="/<?=$link[15]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('121');?>.jpg" width="234" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>" alt="<?=tipoCalendario('121');?> <?=QueModelo('121');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><br><?=tipoCalendario('121');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('121');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(121),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[15]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><?=$msg[1][59]?></a></div>
                
			</div>
			
			<div class="clear"></div>
			
		
		</div>
		<? } else { ?>
			
			
			<div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>  
            
			
			<div class="bloc_fila_inicio6">
				<div align="center"><a href="/<?=$link[35]?>" title="<?=tipoCalendario('155');?> <?=QueModelo('155');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('155');?>.jpg" title="<?=tipoCalendario('155');?> <?=QueModelo('155');?>" alt="<?=tipoCalendario('155');?> <?=QueModelo('155');?>" border="0"/></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('155');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('155');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(155),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[35]?>" title="<?=QueModelo('155');?>"><?=$msg[1][59]?></a></div>
			</div>
			
			
   			<div class="bloc_fila_inicio6">
				<div align="center"><a href="/<?=$link[34]?>" title="<?=tipoCalendario('154');?> <?=QueModelo('154');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('154');?>.jpg" title="<?=tipoCalendario('154');?> <?=QueModelo('154');?>" alt="<?=tipoCalendario('154');?> <?=QueModelo('154');?>" border="0"/></a></div>
				
				<div class="clear"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('154');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('154');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(154),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[34]?>" title="<?=QueModelo('154');?>"><?=$msg[1][59]?></a></div>
			</div>
			
			<div class="bloc_fila_inicio6">
				<div align="center"><a href="/<?=$link[32]?>" title="<?=tipoCalendario('152');?> <?=QueModelo('152');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('152');?>.jpg" title="<?=tipoCalendario('152');?> <?=QueModelo('152');?>" alt="<?=tipoCalendario('152');?> <?=QueModelo('152');?>" border="0" /></a><div class="clear"></div></div>
				<div class="clear"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('152');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('152');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(152),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[32]?>" title="<?=QueModelo('152');?>"><?=$msg[1][59]?></a></div>
			</div>
			
			<div class="clear"></div>
		</div>
		
		<div class="box_fila_fons">	
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div> 
			
	
			<div class="bloc_fila_inicio6">
				<div align="center"><a href="/<?=$link[33]?>" title="<?=tipoCalendario('153');?> <?=QueModelo('153');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('153');?>.jpg" title="<?=tipoCalendario('153');?> <?=QueModelo('153');?>" alt="<?=tipoCalendario('153');?> <?=QueModelo('153');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('153');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('153');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(153),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[33]?>" title="<?=QueModelo('153');?>"><?=$msg[1][59]?></a></div>
			</div>

			<div class="bloc_fila_inicio6">
				<div align="center"><a href="/<?=$link[37]?>" title="<?=tipoCalendario('153'); ?> Iman troquelado"><img class="lupa" src="images/muestra_home/<?=$lang?>/I_TROQUEL.jpg" title="<?=tipoCalendario('153');?> Iman troquelado" alt="<?=tipoCalendario('153');?> Iman troquelado" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('153');?></div>
				<div class="<?=$txt_style?>">Iman troquelado</div>
				<div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[37]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><?=$msg[1][59]?></a></div>
                
			</div>
			
			<div class="bloc_fila_inicio6">
				<div align="center"><br><a href="/<?=$link[15]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('121');?>.jpg" width="234" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>" alt="<?=tipoCalendario('121');?> <?=QueModelo('121');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><br><?=tipoCalendario('121');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('121');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(121),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[15]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><?=$msg[1][59]?></a></div>
                
			</div>
			
			<div class="clear"></div>
			
		
		</div>
		
		
			
		<? } ?>
		<!-- END BOLSILLO NEW -->
    		

	
        

		


	
    <? } ?>
    

<!-- INICIO PESTAÑA 1 DE MESA -->

<?

if($_GET["tab"] == 1 || $_GET["tab"] == ""){
?>

  <? if($_SESSION['lang'] != "fra"){ ?>
       		<div class="cont_pesta_top">
       <? }else{ ?> 
       		<div class="cont_pesta_top_fr">
       <? } ?>
       
     <div align="center"><br />| <a href="<?=$home[3]?>" class="enlace_mas_info"><?=$msg[1][61]?></a> | <a href="/precios" class="enlace_mas_info"><?=$msg[1][62]?></a> |</div></div>   
	<div class="div_content_center">
    
<!-- Modelo 9x9 cm con espiral MOD: 113 -->

		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
         
			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[0]?>" title="<?=tipoCalendario('113');?> <?=QueModelo('113');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('113');?>.jpg" title="<?=tipoCalendario('113');?> <?=QueModelo('113');?>" alt="<?=QueModelo('113');?>" border="0"/></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('113');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('113');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(113),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[0]?>" title="<?=QueModelo('113');?>"><?=$msg[1][59]?></a></div>
                
			</div>

	<!-- Modelo 15x14 cm con espiral MOD: 115 --> 

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[1]?>" title="<?=tipoCalendario('115');?> <?=QueModelo('115');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('115');?>.jpg" title="<?=tipoCalendario('115');?> <?=QueModelo('115');?>" alt="<?=QueModelo('115');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('115');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('115');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(115),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[1]?>" title="<?=QueModelo('115');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 15x21 cm con espiral MOD: 116 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[2]?>" title="<?=tipoCalendario('116');?> <?=QueModelo('116');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('116');?>.jpg" title="<?=tipoCalendario('116');?> <?=QueModelo('116');?>" alt="<?=QueModelo('116');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('116');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('116');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(116),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[2]?>" title="<?=QueModelo('116');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo 21x10 cm con espiral MOD: 123 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[3]?>" title="<?=tipoCalendario('123');?> <?=QueModelo('123');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('123');?>.jpg" title="<?=tipoCalendario('123');?> <?=QueModelo('123');?>" alt="<?=QueModelo('123');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('123');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('123');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(123),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[3]?>" title="<?=QueModelo('123');?>"><?=$msg[1][59]?></a></div>
			</div>
			
		</div>

		<div class="clear"></div>

		
	<!-- Modelo 21x10 cm con espiral MOD: 117 -->

		<!-- Modelo 21x10 cm con espiral MOD: 117 -->

		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
			<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[4]?>" title="<?=tipoCalendario('117');?> <?=QueModelo('117');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('117');?>.jpg" title="<?=tipoCalendario('117');?> <?=QueModelo('117');?>" alt="<?=tipoCalendario('117');?> <?=QueModelo('117');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('117');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('117');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(117),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[4]?>" title="<?=QueModelo('117');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo Caja Disquete 9X9 MOD: 112 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[5]?>" title="<?=tipoCalendario('112');?> <?=QueModelo('112');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('112');?>.jpg" title="<?=tipoCalendario('112');?> <?=QueModelo('112');?>" alt="<?=tipoCalendario('112');?> <?=QueModelo('112');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('112');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('112');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(112),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[5]?>" title="<?=QueModelo('112');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo Caja CD 11x13 cm MOD: 114 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[6]?>" title="<?=tipoCalendario('114');?> <?=QueModelo('114');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('114');?>.jpg" title="<?=tipoCalendario('114');?> <?=QueModelo('114');?>" alt="<?=tipoCalendario('114');?> <?=QueModelo('114');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('114');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('114');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(114),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[6]?>" title="<?=QueModelo('114');?>"><?=$msg[1][59]?></a></div>
			</div>
            
    <!-- Modelo 21x10 cm Mesa en PVC + Reglas MOD: 122 -->


			<div class="bloc_fila_inicio">
				<div align="left"><a href="/<?=$link[4]?>-pvc" title="<?=tipoCalendario('122');?> <?=QueModelo('122');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('122');?>.jpg" title="<?=tipoCalendario('122');?> <?=QueModelo('122');?>" alt="<?=tipoCalendario('122');?> <?=QueModelo('122');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('122');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('122');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(122),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[4]?>-pvc" title="<?=QueModelo('122');?>"><?=$msg[1][59]?></a></div>
			</div>
            
			<div class="clear"></div>
		 </div>
     
     <!-- PVC 21x7,7 cm  -->
		
		
		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
			<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[23]?>" title="<?=tipoCalendario('143');?> <?=QueModelo('143');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('143');?>.jpg" title="<?=tipoCalendario('143');?> <?=QueModelo('143');?>" alt="<?=QueModelo('143');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('143');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('143');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(143),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[23]?>" title="<?=QueModelo('143');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- PVC 15x10 cm -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[22]?>" title="<?=tipoCalendario('142');?> <?=QueModelo('142');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('142');?>.jpg" title="<?=tipoCalendario('142');?> <?=QueModelo('142');?>" alt="<?=QueModelo('142');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('142');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('142');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(142),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[22]?>" title="<?=QueModelo('142');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- PVC 21x11 cm + 2 reglas -->

			<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[21]?>" title="<?=tipoCalendario('141');?> <?=QueModelo('141');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('141');?>.jpg" title="<?=tipoCalendario('141');?> <?=QueModelo('141');?>" alt="<?=QueModelo('141');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('141');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('141');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(141),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[21]?>" title="<?=QueModelo('141');?>"><?=$msg[1][59]?></a></div>
			</div>
            
    <!-- Colour Line PVC 21x11 cm + 2 reglas  -->


			<!--<div class="bloc_fila_inicio">
				<div align="left"><a href="/<?=$link[20]?>" title="<?=tipoCalendario('140');?> <?=QueModelo('140');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('140');?>.jpg" title="<?=tipoCalendario('140');?> <?=QueModelo('140');?>" alt="<?=QueModelo('140');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('140');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('140');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(140),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[20]?>" title="<?=QueModelo('140');?>"><?=$msg[1][59]?></a></div>
			</div>-->
			
			     
			<div class="clear"></div>
		</div>

    <!-- COLOR LINE 136 -->
		
		
		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
			<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[16]?>" title="<?=tipoCalendario('136');?> <?=QueModelo('136');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('136');?>.jpg" title="<?=tipoCalendario('136');?> <?=QueModelo('136');?>" alt="<?=QueModelo('136');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('136');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('136');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(136),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[16]?>" title="<?=QueModelo('136');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- COLOR LINE 137 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[17]?>" title="<?=tipoCalendario('137');?> <?=QueModelo('137');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('137');?>.jpg" title="<?=tipoCalendario('137');?> <?=QueModelo('137');?>" alt="<?=QueModelo('137');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('137');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('137');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(137),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[17]?>" title="<?=QueModelo('137');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- COLOR LINE 138 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[18]?>" title="<?=tipoCalendario('138');?> <?=QueModelo('138');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('138');?>.jpg" title="<?=tipoCalendario('138');?> <?=QueModelo('138');?>" alt="<?=QueModelo('138');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('138');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('138');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][39]?> <?=number_format(precioMinimo(138),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[18]?>" title="<?=QueModelo('138');?>"><?=$msg[1][59]?></a></div>
			</div>
            
    <!-- COLOR LINE 139 -->


			<div class="bloc_fila_inicio">
				<div align="left"><a href="/<?=$link[19]?>" title="<?=tipoCalendario('139');?> <?=QueModelo('139');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('139');?>.jpg" title="<?=tipoCalendario('139');?> <?=QueModelo('139');?>" alt="<?=QueModelo('139');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('139');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('139');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(139),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[19]?>" title="<?=QueModelo('139');?>"><?=$msg[1][59]?></a></div>
			</div>
			
			     
			<div class="clear"></div>
		</div>


<!--INCIO PESTAÑA 2 DE PARED-->

<? }elseif($_GET["tab"] == 2){ ?>
	
     <? if($_SESSION['lang'] != "fra"){ ?>
       		<div class="cont_pesta_top">
       <? }else{ ?> 
       		<div class="cont_pesta_top_fr">
       <? } ?>
       <div align="center"><br />| <a href="<?=$home[3]?>" class="enlace_mas_info"><?=$msg[1][61]?></a> | <a href="/precios" class="enlace_mas_info"><?=$msg[1][62]?></a> |</div></div>   
	   <div class="div_content_center">

		
	<? if($lang=="fra"){ ?>
		<!-- Modelo 21x10 cm con espiral MOD: 118 -->

	<!--

		AQUI -->
		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
            <div class="clear_raro3"></div>
			<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[267]?>" title="<?=tipoCalendario('148');?> <?=QueModelo('148');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('148');?>.jpg" title="<?=tipoCalendario('148');?> <?=QueModelo('148');?>" alt="<?=tipoCalendario('148');?> <?=QueModelo('148');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="nomproduct_fila_inicio_fra"><? if($lang=="fra"){ echo "Grand Calendrier Bancaire<br>Impression Recto / Verso<br><small>Rembordé, Contrecollé ou Souple<small>"; } else { echo QueModelo('146'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[3][1]?> <?=number_format(precioMinimo(148),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[267]?>" title="<?=QueModelo('148');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 30x42 MOD: 126 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="<?=$link[269]?>" title="<?=tipoCalendario('150');?> <?=QueModelo('150');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('150');?>.jpg" title="<?=tipoCalendario('150');?> <?=QueModelo('150');?>" alt="<?=tipoCalendario('150');?> <?=QueModelo('150');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="nomproduct_fila_inicio_fra"><? if($lang=="fra"){ echo "Moyen Calendrier Bancaire<br>Impression Recto / Verso<br><small>Rembordé, Contrecollé ou Souple<small>"; } else { echo QueModelo('150'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[3][1]?> <?=number_format(precioMinimo(151),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[269]?>" title="<?=QueModelo('150');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo Caja CD 11x13 cm MOD: 127 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="<?=$link[270]?>" title="<?=tipoCalendario('127');?> <?=QueModelo('127');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('127');?>.jpg" title="<?=tipoCalendario('127');?> <?=QueModelo('127');?>" alt="<?=tipoCalendario('127');?> <?=QueModelo('127');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="nomproduct_fila_inicio_fra"><? if($lang=="fra"){ echo "Petit Calendrier Bancaire<br>Impression Recto / Verso<br><small>Rembordé, Contrecollé ou Souple<small>"; } else { echo QueModelo('127'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[3][1]?> <?=number_format(precioMinimo(145),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[270]?>" title="<?=QueModelo('127');?>"><?=$msg[1][59]?></a></div>
			</div>
          
            
			<div class="clear"></div>
		</div>
		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
            <div class="clear_raro3"></div>
		

			<div class="bloc_fila_inicio">
				<div align="center"><a href="<?=$link[266]?>" title="<?=tipoCalendario('146');?> <?=QueModelo('146');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('146');?>.jpg" title="<?=tipoCalendario('146');?> <?=QueModelo('146');?>" alt="<?=tipoCalendario('146');?> <?=QueModelo('146');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="nomproduct_fila_inicio_fra"><? if($lang=="fra"){ echo "Grand Calendrier Bancaire<br>Impression Recto<br><small>Rembordé, Contrecollé ou Souple<small>"; } else { echo QueModelo('146'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[3][1]?> <?=number_format(precioMinimo(147),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[266]?>" title="<?=QueModelo('146');?>"><?=$msg[1][59]?></a></div>
			</div>


			<div class="bloc_fila_inicio">
				<div align="center"><a href="<?=$link[268]?>" title="<?=tipoCalendario('126');?> <?=QueModelo('126');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('126');?>.jpg" title="<?=tipoCalendario('126');?> <?=QueModelo('126');?>" alt="<?=tipoCalendario('126');?> <?=QueModelo('126');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="nomproduct_fila_inicio_fra"><? if($lang=="fra"){ echo "Moyen Calendrier Bancaire<br>Impression Recto<br><small>Rembordé, Contrecollé ou Souple<small>"; } else { echo QueModelo('126'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[3][1]?> <?=number_format(precioMinimo(144),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[268]?>" title="<?=QueModelo('126');?>"><?=$msg[1][59]?></a></div>
			</div>
          
          	<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[12]?>" title="<?=tipoCalendario('118');?> <?=QueModelo('118');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('118');?>.jpg" title="<?=tipoCalendario('118');?> <?=QueModelo('118');?>" alt="<?=tipoCalendario('118');?> <?=QueModelo('118');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="<?=$txt_style?>"><?=QueModelo('118');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(118),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[12]?>" title="<?=QueModelo('118');?>"><?=$msg[1][59]?></a></div>
			</div>

            
			<div class="clear"></div>
		</div>
		
		<? } ?>	
		
		<!-- Modelo 9x9 cm con espiral MOD: 113 -->
		<? if($lang=="fra"){ ?>
		<div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>     	
			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[8]?>" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('119');?>.jpg" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>" alt="<?=tipoCalendario('119');?> <?=QueModelo('119');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('119');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('119');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(119),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[8]?>" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>"><?=$msg[1][59]?></a></div>
                
			</div>

	<!-- Modelo 15x14 cm con espiral MOD: 115 --> 

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[9]?>" title="<?=tipoCalendario('125');?> <?=QueModelo('125');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('125');?>.jpg" title="<?=tipoCalendario('125');?> <?=QueModelo('125');?>" alt="<?=tipoCalendario('125');?> <?=QueModelo('125');?>" border="0" align='left' /></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('125');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('125');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(125),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[9]?>" title="<?=QueModelo('125');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 15x21 cm con espiral MOD: 116 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[10]?>" title="<?=tipoCalendario('120');?> <?=QueModelo('120');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('120');?>.jpg" title="<?=tipoCalendario('120');?> <?=QueModelo('120');?>" alt="<?=tipoCalendario('120');?> <?=QueModelo('120');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('120');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('120');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(120),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[10]?>" title="<?=QueModelo('120');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo 21x10 cm con espiral MOD: 123 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[11]?>" title="<?=tipoCalendario('124');?> <?=QueModelo('124');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('124');?>.jpg" title="<?=tipoCalendario('124');?> <?=QueModelo('124');?>" alt="<?=tipoCalendario('124');?> <?=QueModelo('124');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('124');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('124');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(124),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[11]?>" title="<?=QueModelo('124');?>"><?=$msg[1][59]?></a></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>
	<? } ?>	

	<? if($lang == "esp"){ ?>
		<div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>     	
			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[8]?>" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('119');?>.jpg" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>" alt="<?=tipoCalendario('119');?> <?=QueModelo('119');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('119');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('119');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(119),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[8]?>" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>"><?=$msg[1][59]?></a></div>
                
			</div>

	<!-- Modelo 15x14 cm con espiral MOD: 115 --> 

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[9]?>" title="<?=tipoCalendario('125');?> <?=QueModelo('125');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('125');?>.jpg" title="<?=tipoCalendario('125');?> <?=QueModelo('125');?>" alt="<?=tipoCalendario('125');?> <?=QueModelo('125');?>" border="0" align='left' /></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('125');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('125');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(125),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[9]?>" title="<?=QueModelo('125');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 15x21 cm con espiral MOD: 116 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[10]?>" title="<?=tipoCalendario('120');?> <?=QueModelo('120');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('120');?>.jpg" title="<?=tipoCalendario('120');?> <?=QueModelo('120');?>" alt="<?=tipoCalendario('120');?> <?=QueModelo('120');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('120');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('120');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(120),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[10]?>" title="<?=QueModelo('120');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo 21x10 cm con espiral MOD: 123 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[11]?>" title="<?=tipoCalendario('124');?> <?=QueModelo('124');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('124');?>.jpg" title="<?=tipoCalendario('124');?> <?=QueModelo('124');?>" alt="<?=tipoCalendario('124');?> <?=QueModelo('124');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('124');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('124');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(124),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[11]?>" title="<?=QueModelo('124');?>"><?=$msg[1][59]?></a></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>
		
		<div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>     	
			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-23cm-bimensual-esp" title="<?=tipoCalendario('128');?> <?=QueModelo('128');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-23cm-bimensual-esp-p.jpg" title="<?=tipoCalendario('128');?> <?=QueModelo('128');?>" alt="<?=tipoCalendario('128');?> <?=QueModelo('128');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('128');?></div>
				<div class="<?=$txt_style?>">23,5 cm. Bimensual.<div class="clear10"></div>Espa&ntilde;ol</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(128),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-23cm-bimensual-esp" title=" <?=QueModelo('128');?>"><?=$msg[1][59]?></a></div>
                
			</div>

	<!-- Modelo 15x14 cm con espiral MOD: 115 --> 

			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-23cm-bimensual-cat" title="<?=tipoCalendario('129');?> <?=QueModelo('129');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-23cm-bimensual-cat-p.jpg" title="<?=tipoCalendario('129');?> <?=QueModelo('129');?>" alt="<?=tipoCalendario('129');?> <?=QueModelo('129');?>" border="0" align='left' /></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('129');?></div>
				<div class="<?=$txt_style?>">23,5 cm. Bimensual. <div class="clear10"></div>Catal&agrave;</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(129),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-23cm-bimensual-cat" title="<?=QueModelo('129');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 15x21 cm con espiral MOD: 116 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-33cm-bimensual-esp" title="<?=tipoCalendario('130');?> <?=QueModelo('130');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-23cm-mensual-esp-p.jpg" title="<?=tipoCalendario('130');?> <?=QueModelo('130');?>" alt="<?=tipoCalendario('130');?> <?=QueModelo('130');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('130');?></div>
				<div class="<?=$txt_style?>">23,5 cm. Mensual. <div class="clear10"></div>Espa&ntilde;ol</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(130),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-33cm-bimensual-esp" title="<?=QueModelo('130');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo 21x10 cm con espiral MOD: 123 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-33cm-bimensual-cat" title="<?=tipoCalendario('131');?> <?=QueModelo('131');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-33cm-bimensual-esp-p.jpg" title="<?=tipoCalendario('131');?> <?=QueModelo('131');?>" alt="<?=tipoCalendario('131');?> <?=QueModelo('131');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('131');?></div>
				<div class="<?=$txt_style?>">33,5 cm. Bimensual. <div class="clear10"></div>Espa&ntilde;ol</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(131),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-33cm-bimensual-cat" title="<?=QueModelo('131');?>"><?=$msg[1][59]?></a></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>
		
		
		
		
		
		<div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>     	
			<div class="bloc_fila_inicio">																																			
				<div align="center"><a href="calendarios-personalizados-faldilla-23cm-mensual-esp" title="<?=tipoCalendario('132');?> <?=QueModelo('132');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-33cm-bimensual-cat-p.jpg" title="<?=tipoCalendario('132');?> <?=QueModelo('132');?>" alt="<?=tipoCalendario('132');?> <?=QueModelo('132');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('132');?></div>
				<div class="<?=$txt_style?>">33,5 cm. Bimensual. <div class="clear10"></div>Catal&agrave;</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(132),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-23cm-mensual-esp" title="<?=QueModelo('132');?>"><?=$msg[1][59]?></a></div>
                
			</div>

			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-33cm-mensual-esp" title="<?=tipoCalendario('135');?> <?=QueModelo('135');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-33cm-mensual-esp-p.jpg" title="<?=tipoCalendario('135');?> <?=QueModelo('135');?>" alt="<?=tipoCalendario('135');?> <?=QueModelo('135');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('135');?></div>
				<div class="<?=$txt_style?>">33,5 cm. Mensual. <div class="clear10"></div>Espa&ntilde;ol</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(135),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-33cm-mensual-esp" title="<?=QueModelo('135');?>"><?=$msg[1][59]?></a></div>
			</div>
			

			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-43cm-mensual-esp" title="<?=tipoCalendario('133');?> <?=QueModelo('133');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-43cm-mensual-esp-p.jpg" title="<?=tipoCalendario('133');?> <?=QueModelo('133');?>" alt="<?=tipoCalendario('133');?> <?=QueModelo('133');?>" border="0" align='left' /></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('133');?></div>
				<div class="<?=$txt_style?>">43,5 cm. Mensual. <div class="clear10"></div>Espa&ntilde;ol</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(133),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-43cm-mensual-esp" title="<?=QueModelo('133');?>"><?=$msg[1][59]?></a></div>
			</div>


	

			<div class="bloc_fila_inicio">
				<div align="center"><a href="calendarios-personalizados-faldilla-43cm-mensual-cat" title="<?=tipoCalendario('134');?> <?=QueModelo('134');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/calendarios-personalizados-faldilla-43cm-mensual-cat-p.jpg" title="<?=tipoCalendario('134');?> <?=QueModelo('134');?>" alt="<?=tipoCalendario('134');?> <?=QueModelo('134');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('134');?></div>
				<div class="<?=$txt_style?>">43,5 cm. Mensual. <div class="clear10"></div>Catal&agrave;</div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(134),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="calendarios-personalizados-faldilla-43cm-mensual-cat" title="<?=QueModelo('134');?>"><?=$msg[1][59]?></a></div>
			</div>


			
			<div class="clear"></div>
		</div>

	<? } ?>
	
	
	<? if($lang!="fra"){ 
		
	if($lang=="eng" || $lang=="ita"){ ?>
	<div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>     	
			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[8]?>" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('119');?>.jpg" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>" alt="<?=tipoCalendario('119');?> <?=QueModelo('119');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('119');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('119');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(119),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[8]?>" title="<?=tipoCalendario('119');?> <?=QueModelo('119');?>"><?=$msg[1][59]?></a></div>
                
			</div>

	<!-- Modelo 15x14 cm con espiral MOD: 115 --> 

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[9]?>" title="<?=tipoCalendario('125');?> <?=QueModelo('125');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('125');?>.jpg" title="<?=tipoCalendario('125');?> <?=QueModelo('125');?>" alt="<?=tipoCalendario('125');?> <?=QueModelo('125');?>" border="0" align='left' /></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('125');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('125');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(125),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[9]?>" title="<?=QueModelo('125');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 15x21 cm con espiral MOD: 116 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[10]?>" title="<?=tipoCalendario('120');?> <?=QueModelo('120');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('120');?>.jpg" title="<?=tipoCalendario('120');?> <?=QueModelo('120');?>" alt="<?=tipoCalendario('120');?> <?=QueModelo('120');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('120');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('120');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(120),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[10]?>" title="<?=QueModelo('120');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo 21x10 cm con espiral MOD: 123 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="/<?=$link[11]?>" title="<?=tipoCalendario('124');?> <?=QueModelo('124');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('124');?>.jpg" title="<?=tipoCalendario('124');?> <?=QueModelo('124');?>" alt="<?=tipoCalendario('124');?> <?=QueModelo('124');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('124');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('124');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(124),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[11]?>" title="<?=QueModelo('124');?>"><?=$msg[1][59]?></a></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>
		
		<? } ?>
	<!-- Modelo 21x10 cm con espiral MOD: 118 -->

		<div class="box_fila_fons">
			<div class="box_fila_1"></div>
            <div class="clear_raro3"></div>  
			<div class="bloc_fila_inicio">
				<div align="right"><a href="/<?=$link[12]?>" title="<?=tipoCalendario('118');?> <?=QueModelo('118');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('118');?>.jpg" title="<?=tipoCalendario('118');?> <?=QueModelo('118');?>" alt="<?=tipoCalendario('118');?> <?=QueModelo('118');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('118');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('118');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(118),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[12]?>" title=" <?=QueModelo('118');?>"><?=$msg[1][59]?></a></div>
			</div>


	<!-- Modelo 30x42 MOD: 126 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="<?=$link[13]?>" title="<?=tipoCalendario('126');?> <?=QueModelo('126');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('126');?>.jpg" title="<?=tipoCalendario('126');?> <?=QueModelo('126');?>" alt="<?=tipoCalendario('126');?> <?=QueModelo('126');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('126');?></div>
				<div class="<?=$txt_style?>"><? if($lang=="fra"){ echo "Moyen Calendrier Bancaire"; } else { echo QueModelo('126'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][68]?> <?=number_format(precioMinimo(126),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[13]?>" title="<?=QueModelo('126');?>"><?=$msg[1][59]?></a></div>
			</div>

	<!-- Modelo Caja CD 11x13 cm MOD: 127 -->

			<div class="bloc_fila_inicio">
				<div align="center"><a href="<?=$link[14]?>" title="<?=tipoCalendario('127');?> <?=QueModelo('127');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('127');?>.jpg" title="<?=tipoCalendario('127');?> <?=QueModelo('127');?>" alt="<?=tipoCalendario('127');?> <?=QueModelo('127');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('127');?></div>
				<div class="<?=$txt_style?>"><? if($lang=="fra"){ echo "Petit Calendrier Bancaire"; } else { echo QueModelo('127'); } ?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(127),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[14]?>" title="<?=QueModelo('127');?>"><?=$msg[1][59]?></a></div>
			</div>
          
            
			<div class="clear"></div>
		</div>
	<? } ?>


<!-- INICIO PESTAÑA 3 DE BOLSILLO -->

<? }elseif($_GET["tab"] == 3){ ?>

	 <? if($_SESSION['lang'] != "fra"){ ?>
       		<div class="cont_pesta_top">
       <? }else{ ?> 
       		<div class="cont_pesta_top_fr">
       <? } ?>
       <div align="center"><br />| <a href="<?=$home[3]?>" class="enlace_mas_info"><?=$msg[1][61]?></a> | <a href="/precios" class="enlace_mas_info"><?=$msg[1][62]?></a> |</div></div>   
	<div class="div_content_center">
    
	<!-- BOLSILLO OLD -->
	<!--<div class="box_fila_fons">
		<div class="box_fila_1"></div>
       
        <div class="bloc_fila_inicio2">
				<div align="center"><a href="<?=$link[15]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('121');?>.jpg" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>" alt="<?=tipoCalendario('121');?> <?=QueModelo('121');?>" border="0"/></a></div>
		</div>	
        
        <div class="bloc_fila_inicio3">	
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('121');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('121');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][54]?> <?=number_format(precioMinimo(121),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="<?=$link[15]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><?=$msg[1][59]?></a></div>
			</div>
        </div>
            
            <div class="clear"></div>-->
     <!-- END BOLSILLO OLD -->       
            
     <!-- BOLSILL NEW -->    
       <? if($lang == "esp"){ ?>
       	<div class="clear"></div>
        <div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>  
            
				<div class="bloc_fila_inicio7">
					<div align="center"><a href="/<?=$link[36]?>" title="<?=tipoCalendario('156');?> <?=QueModelo('156');?>">
						<img src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('156');?>.jpg" title="<?=tipoCalendario('156');?> <?=QueModelo('156');?>" alt="<?=tipoCalendario('156');?> <?=QueModelo('156');?>" border="0"/>
						
					</a></div>
					
					<div class="titul_petit_fila_inicio"><?=tipoCalendario('156');?></div>
					<div class="clear"></div>
					<div class="<?=$txt_style?>"><?=QueModelo('156');?></div>
					<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(156),2);?> <?=$SIMBOL_MONEDA;?></div>
	                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[36]?>" title="<?=QueModelo('156');?>"><?=$msg[1][59]?></a></div>
				</div>
		


			<div class="bloc_fila_inicio7">
				<div align="center"><a href="/<?=$link[35]?>" title="<?=tipoCalendario('155');?> <?=QueModelo('155');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('155');?>.jpg" title="<?=tipoCalendario('155');?> <?=QueModelo('155');?>" alt="<?=tipoCalendario('155');?> <?=QueModelo('155');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('155');?></div>
				<div class="clear"></div>
				<div class="<?=$txt_style?>"><?=QueModelo('155');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(155),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[35]?>" title="<?=QueModelo('155');?>"><?=$msg[1][59]?></a></div>
			</div>
			
			
   			<div class="bloc_fila_inicio7">
				<div align="center"><a href="/<?=$link[34]?>" title="<?=tipoCalendario('154');?> <?=QueModelo('154');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('154');?>.jpg" title="<?=tipoCalendario('154');?> <?=QueModelo('154');?>" alt="<?=tipoCalendario('154');?> <?=QueModelo('154');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('154');?></div>
				<div class="clear"></div>
				<div class="<?=$txt_style?>"><?=QueModelo('154');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(154),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[34]?>" title="<?=QueModelo('154');?>"><?=$msg[1][59]?></a></div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="box_fila_fons">	
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>  
			<div class="bloc_fila_inicio5">
				<div align="center"><a href="/<?=$link[32]?>" title="<?=tipoCalendario('152');?> <?=QueModelo('152');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('152');?>.jpg" title="<?=tipoCalendario('152');?> <?=QueModelo('152');?>" alt="<?=tipoCalendario('152');?> <?=QueModelo('152');?>" border="0" /></a><div class="clear"></div></div>
				<div class="clear"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('152');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('152');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(152),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[32]?>" title="<?=QueModelo('152');?>"><?=$msg[1][59]?></a></div>
			</div>
			
	
			<div class="bloc_fila_inicio5">
				<div align="center"><a href="/<?=$link[33]?>" title="<?=tipoCalendario('153');?> <?=QueModelo('153');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('153');?>.jpg" title="<?=tipoCalendario('153');?> <?=QueModelo('153');?>" alt="<?=tipoCalendario('153');?> <?=QueModelo('153');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('153');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('153');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(153),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[33]?>" title="<?=QueModelo('153');?>"><?=$msg[1][59]?></a></div>
			</div>

			<div class="bloc_fila_inicio5">
				<div align="center"><a href="/<?=$link[37]?>" title="<?=tipoCalendario('153'); ?> Iman troquelado"><img class="lupa" src="images/muestra_home/<?=$lang?>/I_TROQUEL.jpg" title="<?=tipoCalendario('153');?> Iman troquelado" alt="<?=tipoCalendario('153');?> Iman troquelado" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('153');?></div>
				<div class="<?=$txt_style?>">Iman troquelado</div>
				<div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[37]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><?=$msg[1][59]?></a></div>
                
			</div>
			
			<div class="bloc_fila_inicio5">
				<div align="center"><br><a href="/<?=$link[15]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('121');?>.jpg" width="234" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>" alt="<?=tipoCalendario('121');?> <?=QueModelo('121');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><br><?=tipoCalendario('121');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('121');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(121),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[15]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><?=$msg[1][59]?></a></div>
                
			</div>
			
			<div class="clear"></div>
			
		
		</div>
		<? } else { ?>
			
			
			<div class="box_fila_fons">
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div>  
            
			
			<div class="bloc_fila_inicio6">
				<div align="center"><a href="/<?=$link[35]?>" title="<?=tipoCalendario('155');?> <?=QueModelo('155');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('155');?>.jpg" title="<?=tipoCalendario('155');?> <?=QueModelo('155');?>" alt="<?=tipoCalendario('155');?> <?=QueModelo('155');?>" border="0"/></a></div>
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('155');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('155');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(155),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[35]?>" title="<?=QueModelo('155');?>"><?=$msg[1][59]?></a></div>
			</div>
			
			
   			<div class="bloc_fila_inicio6">
				<div align="center"><a href="/<?=$link[34]?>" title="<?=tipoCalendario('154');?> <?=QueModelo('154');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('154');?>.jpg" title="<?=tipoCalendario('154');?> <?=QueModelo('154');?>" alt="<?=tipoCalendario('154');?> <?=QueModelo('154');?>" border="0"/></a></div>
				
				<div class="clear"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('154');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('154');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(154),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[34]?>" title="<?=QueModelo('154');?>"><?=$msg[1][59]?></a></div>
			</div>
			
			<div class="bloc_fila_inicio6">
				<div align="center"><a href="/<?=$link[32]?>" title="<?=tipoCalendario('152');?> <?=QueModelo('152');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('152');?>.jpg" title="<?=tipoCalendario('152');?> <?=QueModelo('152');?>" alt="<?=tipoCalendario('152');?> <?=QueModelo('152');?>" border="0" /></a><div class="clear"></div></div>
				<div class="clear"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('152');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('152');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(152),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[32]?>" title="<?=QueModelo('152');?>"><?=$msg[1][59]?></a></div>
			</div>
			
			<div class="clear"></div>
		</div>
		
		<div class="box_fila_fons">	
			<div class="clear_raro2"></div> 
            <div class="clear_raro3"></div> 
			
	
			<div class="bloc_fila_inicio6">
				<div align="center"><a href="/<?=$link[33]?>" title="<?=tipoCalendario('153');?> <?=QueModelo('153');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('153');?>.jpg" title="<?=tipoCalendario('153');?> <?=QueModelo('153');?>" alt="<?=tipoCalendario('153');?> <?=QueModelo('153');?>" border="0"/></a></div>
				
				<div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('153');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('153');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][41]?> <?=number_format(precioMinimo(153),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[33]?>" title="<?=QueModelo('153');?>"><?=$msg[1][59]?></a></div>
			</div>

			<div class="bloc_fila_inicio6">
				<div align="center"><a href="/<?=$link[37]?>" title="<?=tipoCalendario('153'); ?> Iman troquelado"><img class="lupa" src="images/muestra_home/<?=$lang?>/I_TROQUEL.jpg" title="<?=tipoCalendario('153');?> Iman troquelado" alt="<?=tipoCalendario('153');?> Iman troquelado" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><?=tipoCalendario('153');?></div>
				<div class="<?=$txt_style?>">Iman troquelado</div>
				<div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[37]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><?=$msg[1][59]?></a></div>
                
			</div>
			
			<div class="bloc_fila_inicio6">
				<div align="center"><br><a href="/<?=$link[15]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><img class="lupa" src="images/muestra_home/<?=$lang?>/<?=QuePrefijoModelo('121');?>.jpg" width="234" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>" alt="<?=tipoCalendario('121');?> <?=QueModelo('121');?>" border="0"/></a></div>
                <div class="clear_raro"></div>
				<div class="titul_petit_fila_inicio"><br><?=tipoCalendario('121');?></div>
				<div class="<?=$txt_style?>"><?=QueModelo('121');?></div>
				<div class="info_petit_fila_inicio"><?=$msg[1][40]?> <?=number_format(precioMinimo(121),2);?> <?=$SIMBOL_MONEDA;?></div>
                <div class="enlace_mas_info"><a class="enlace_mas_info" href="/<?=$link[15]?>" title="<?=tipoCalendario('121');?> <?=QueModelo('121');?>"><?=$msg[1][59]?></a></div>
                
			</div>
			
			<div class="clear"></div>
			
		
		</div>
		
		
			
		<? } ?>
		<!-- END BOLSILLO NEW -->
    		
    		

<? } ?>
		<div class="clear"></div>

			<div class="div_content_bottom"></div>
         
		

		<div class="clear"></div>


	</div>

	<? if($lang == "esp" || $lang == "fra"){ ?>
		
		<div class="clear10"></div>
		<div class="clear10"></div>
		<div class="clear10"></div>
		<div class="intro_text">
			<div class="divClass">
				<div class="clear"></div>
				<div class="star-new"><img src="img/starnew.png" height="95" width="99" alt="nuevo calendario personalizado"/></div>
				<div class="content">
					<span class="title"><?=$banner[0]?></span>
					<div class="clear10"></div>
					<p><?=$banner[1]?></p>
					<div class="bt_info"><a href="calendarios-nombre-info.php" class="lightview" rel="iframe" title=' ::  :: width: 880, height: 440'><img src="img/bt-banner-masinfo-<?=$lang?>.png" border="none" alt="mas info calendarios personalizados" /></a></div>
					<!--<div class="bt_info"><a href='contacto.php' class='lightview' rel="iframe" id='demo_ajaxpost'><img src="img/bt-banner-masinfo-<?=$lang?>.png" border="none" /></a></div>-->
				</div>
				<div class="animGif">
					
					<div class="slider-wrapper">
    					<div id="slider" class="nivoSlider">
			                <img src="images/sliderbanner/home-01.png" alt="<?=$home[4]?>" />
			                <img src="images/sliderbanner/home-02.png" alt="<?=$home[5]?>" />
			                <img src="images/sliderbanner/home-03.png" alt="<?=$home[6]?>" />
			                <img src="images/sliderbanner/home-04.png" alt="<?=$home[7]?>" />
			                <img src="images/sliderbanner/home-05.png" alt="<?=$home[8]?>" />
			                <img src="images/sliderbanner/home-06.png" alt="<?=$home[9]?>" />
			                <img src="images/sliderbanner/home-07.png" alt="<?=$home[10]?>" />
			                <img src="images/sliderbanner/home-08.png" alt="<?=$home[11]?>" />
			                <img src="images/sliderbanner/home-09.png" alt="<?=$home[12]?>" />
			                <img src="images/sliderbanner/home-10.png" alt="<?=$home[13]?>" />
			            
			               
			                
			            </div>
			         </div>
			    </div>
				<img src="img/close-banner-<?=$lang?>.png" alt="delete" class="deleteDiv" />
			</div>
			<div class="clear"></div>
		</div>
		
	<? } ?>
