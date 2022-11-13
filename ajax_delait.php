<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);      include"conn/connexion.php";


$province=$_SESSION["province"];      
$province1=$_SESSION["province1"];      



?>

<?php

if($_POST['idtype_jugement']==4 || $_POST['idtype_jugement']==5 || $_POST['idtype_jugement']==3)
{ 
 
 	 ?>


<style type="text/css">
<!--
.style39 {font-size: 18px}
.style40 {font-size: 18}
-->
</style>

<div align="center">
  <table width="360" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#EFEFEF"><div align="center">
        <input name="jugement" type="text" id="jugement" size="30" dir="rtl">
        <span class="style39">&#1581;&#1603;&#1605; &#1593;&#1583;&#1583;</span></div>        <div align="center" class="style39"></div></td>
    </tr>
    <tr>
      <td bgcolor="#EFEFEF"><div align="center">
        <input name="tribunale_a" type="text" id="tribunale_a" size="35" value="<?php echo "&#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577; &#1575;&#1604;&#1573;&#1576;&#1578;&#1583;&#1575;&#1574;&#1610;&#1577; &#1604;$province1"; ?>" dir="rtl" />
        <span class="style40"></span><img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('tribunale_a')" />&#1575;&#1604;&#1605;&#1589;&#1583;&#1585;</div></td>
    </tr>
    <tr>
      <td bgcolor="#EFEFEF"><div align="right"><span class="style39">
        <input name="date_jugement" type="text" id="date_jugement" value="<?php echo date("d/m/Y");	?>" size="15" maxlength="10" />
       &#1578;&#1575;&#1585;&#1610;&#1582; &#1573;&#1589;&#1583;&#1575;&#1585; &#1575;&#1604;&#1581;&#1603;&#1605;</span></div></td>
    </tr>
    <tr>
      <td bgcolor="#EFEFEF"><div align="center">
         &#1607;&#1580;&#1585;&#1610;&#1577; 
         <input name="date_j_hla" type="text" id="date_j_hla"  dir="rtl" size="35" />
      
	  	       <script type="text/javascript">
                <!--
                        function open_infossj()
                        {
                                width = 420;
                                height = 360;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
                                 window.open('datearabe.php?convert=2&ch=date_j_hlf&ch1=date_j_hla&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>&req=4','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                  </script>
     <a href="#null" onClick="javascript:open_infossj();"><img src="icone/convertisseur.PNG" width="20" height="20" /></a>
	  

	  
	  
	  </div>
        <div align="center" class="style39"></div></td>
    </tr>
    <tr>
      <td bgcolor="#EFEFEF"><div align="center">
        &#1605;&#1610;&#1604;&#1575;&#1583;&#1610;&#1577; 
        <input name="date_j_mla" type="text" id="date_j_mla"  dir="rtl" size="35" />
      
	  
	  
	  	     <script type="text/javascript">
                <!--
                        function open_infosj()
                        {
                                width = 420;
                                height = 360;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
 window.open('datearabe.php?convert=1&ch=date_j_mlf&ch1=date_j_mla&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>&req=4','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
   <a href="#null" onClick="javascript:open_infosj();"><img src="icone/convertisseur.PNG" width="20" height="20" /></a>
	  
	  
	  
	  </div></td>
    </tr>
  </table>
</div>


<?php }
 	 ?>
