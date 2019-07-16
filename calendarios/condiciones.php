
<style>
/* -----------------------------
			POPUPS
----------------------------- */
.empresa_pop{
text-align:left;
width:710px;
color: #fff;
margin-left:auto; margin-right:auto;
border:0px solid red;
font-family:Trebuchet MS ,Arial, Helvetica, sans-serif;
font-size:12px;
line-height:19px;
position:relative;
}
.empresa_pop_titul{
font-size:24px; line-height:30px; font-family:Trebuchet MS ,Arial, Helvetica, sans-serif; color:#ffaa00;
}

.logo_roig_pop{
position:absolute;
width:250px;
top:0px;
right:0px;
}

.boto_print a{
display:block;
width:200px;
border:1px solid #666666;
text-align:center;
background-color:#CCCCCC;
color:#333333;
text-decoration:none;
}
.boto_print a:hover{
display:block;
width:200px;
border:1px solid #CCCCCC;
text-align:center;
background-color:#666666;
color:#CCCCCC;
text-decoration:none;
}

.continuar_boto_big a{
display:block;
color:#ffffff;
text-align:center; text-decoration:none;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
font-size:16px;
width:300px; height:21px;
background-image:url(./images/bot_imprimir.gif);
background-repeat:no-repeat;
position:relative;
padding-top:3px;
padding-bottom:3px;
}
.continuar_boto_big a:hover{
display:block;
color:#ffaa00; text-align:center;
text-decoration:none;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
font-size:16px;
width:300px; height:21px;
background-image:url(./images/bot_imprimir.gif);
background-repeat:no-repeat;
position:relative;
padding-top:3px;
padding-bottom:3px;
}

</style>


<div class="empresa_pop">
	<div class="logo_roig_pop"><img align="top" src="images/logo_roig_pop.gif" alt='<?=$tit[9][1]?>' title='<?=$tit[9][1]?>' />
	<?php if($lang=="esp" or $lang=="cat"){ ?><!-- &nbsp;<a href="http://www.confianzaonline.org/empresas/estudiroig.htm" target="_blank"><img src="/images/confianza.gif" border="0" alt="empresa adherida" title="empresa adherida"></a>--> <?php } ?>
	</div>
	<div>&nbsp;</div>
	<div class="empresa_pop_titul"><?=$msg[9][1]?></div>
	<div>&nbsp;</div>
	<!--<div class="boto_print"><a onclick="window.print()" href=""><?=$msg[20][1]?></a></div>-->
	<div class="continuar_boto_big"><a onclick="window.print()" href=""><?=$msg[20][1]?></a></div>
	<div>&nbsp;</div>
	<?=$msg[9][2]?>
</div>