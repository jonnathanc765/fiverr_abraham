<?php
include('includes/global.php');
?>
<style>
/* -----------------------------
			POPUPS
------------------------------- */
.empresa_pop{
text-align:left;
width:710px;
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
width:181px;
top:0px;
right:0px;
}

</style>

<div class="empresa_pop">
	<div class="logo_roig_pop"><img src="images/logo_roig_pop.gif" alt='<?=$tit[11][1]?>' title='<?=$tit[11][1]?>' /></div>
	<div>&nbsp;</div>
	<div class="empresa_pop_titul"><?=$msg[11][1]?></div>
	<div>&nbsp;</div>
	<?=$msg[11][2]?>
	<?php if($lang=="esp" or $lang=="cat"){ ?> <!--<div align="center"><br/><a href="http://www.confianzaonline.org/empresas/estudiroig.htm" target="_blank"><img src="/images/confianza.gif" border="0" alt="empresa adherida" title="empresa adherida"></a></div>--> <?php } ?>

</div>