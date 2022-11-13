 <script type="text/javascript" src="js/arabic.js"></script>

<?php 
 error_reporting(E_ALL ^ E_NOTICE);
 
 include"conn/connexion.php";


  	$Requete3 = "SELECT texte1,texte FROM mention WHERE  `id` = '".$_POST['idRegion']."'   ";
	
						mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table <br>".mysql_error());

	 			  	$rowx = mysql_fetch_array($result3);

	 ?>
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>



<div id="Layer1">
    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>
  </div>

 

<div align="center">

  <table width="95%" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#EFEFEF"><div align="center" class="style1">
        <input name="date_m" type="text" id="date_m" value="<?php echo date("d/m/Y");	?>" maxlength="10" />
        &#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606;</div></td>
    </tr>
    <tr>
      <td width="1224" bgcolor="#EFEFEF"><div align="center">
        <div align="center">
          <textarea name="bayane1" cols="40" rows="9" id="bayane1" dir="rtl"><?php echo $rowx[texte1]; ?></textarea>
          
          
      <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('bayane1')" /><strong>&#1606;&#1589; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606;</strong></div></td>
    </tr>
	
	
	
	<?php if($_POST['idRegion']==1 || $_POST['idRegion']==2) {  ?>
	
	
	
	<tr>
      <td bgcolor="#EFEFEF"><div align="center"><strong><strong>
        <input name="intersse" type="text" id="intersse" dir="rtl" size="40" value="<?php 
		
		session_start();

$num=$_SESSION["num"];      
$annee=$_SESSION["annee"];      
		
				   	$Requete3 = "select nom_a,prenom_a from naissance where `code`='".$num."' and `annee_declaration`='".$annee."'  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
	
		echo $row[nom_a];
		echo "  $row[prenom_a] &#1608; ";
		
		?>" />
        &#1575;&#1604;&#1605;&#1593;&#1606;&#1610;&#1610;&#1606; &#1576;&#1575;&#1604;&#1593;&#1602;&#1583;</strong></strong></div></td>
    <tr>
      <td bgcolor="#EFEFEF"><div align="center"><strong>
        <input name="numero" type="text" id="numero" size="40" dir="rtl" />
      &#1585;&#1602;&#1605; &#1575;&#1604;&#1589;&#1581;&#1610;&#1601;&#1577;</strong></div></td>
	  
	  <?php } ?>
    <tr>
      <td bgcolor="#EFEFEF"><div align="center"><strong>
        <input name="date_r" type="text" id="date_r" value="<?php echo date("d/m/Y");	?>" maxlength="10" />
      &#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1578;&#1608;&#1589;&#1604;</strong></div></td>
    <tr>
      <td bgcolor="#EFEFEF"><div align="center"><strong>
        <input name="source" type="text" id="source" size="40" dir="rtl" value="<?php if($_POST['idRegion']==1 || $_POST['idRegion']==2) { echo "&#1602;&#1575;&#1590;&#1610; &#1575;&#1604;&#1578;&#1608;&#1579;&#1610;&#1602; &#1576;&#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577; &#1575;&#1604;&#1573;&#1576;&#1578;&#1583;&#1575;&#1574;&#1610;&#1577;" ;
		  
		  session_start();

		  echo " $_SESSION[province1]"; }
		    ?>
" />
      &#1575;&#1604;&#1580;&#1607;&#1577; &#1575;&#1604;&#1605;&#1585;&#1587;&#1604;&#1577;</strong></div></td>
    <tr>
      <td bgcolor="#EFEFEF"><div align="center"><strong>
	  
	  
        <input name="remarque" type="text" id="remarque" dir="rtl" size="40" 
		
		value="<?php if($_POST['idRegion']==12 || $_POST['idRegion']==24) echo "&#1578;&#1608;&#1601;&#1610; &#1576; .... &#1576;&#1578;&#1575;&#1585;&#1610;&#1582; ...."; ?>" />
         <?php if($_POST['idRegion']!=12 && $_POST['idRegion']!=24) echo "&#1605;&#1604;&#1575;&#1581;&#1592;&#1575;&#1578;"; ?>
		
		
        <?php if($_POST['idRegion']==12 || $_POST['idRegion']==24) { echo "&#1606;&#1589; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606; &#1575;&#1604;&#1605;&#1608;&#1580;&#1586; &#1575;&#1604;&#1584;&#1610; &#1610;&#1592;&#1607;&#1585; &#1601;&#1610; &#1575;&#1604;&#1606;&#1587;&#1582;&#1577; &#1575;&#1604;&#1605;&#1608;&#1580;&#1586;&#1577; &#1604;&#1604;&#1608;&#1604;&#1575;&#1583;&#1577;";  ?>
		
		<?php echo "   &#1605;&#1579;&#1575;&#1604;: &#1578;&#1608;&#1601;&#1610; &#1576;&#1583;&#1608;&#1575;&#1585; &#1578;&#1586;&#1603;&#1610; &#1576;&#1578;&#1575;&#1585;&#1610;&#1582; 12/12/2008
";  } ?>
      </strong></div></td>
    <tr>
      <td bgcolor="#EFEFEF"><div align="center"></div></td>
  </table>
</div>



