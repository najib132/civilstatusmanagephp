<?php ob_start();
 error_reporting(E_ALL ^ E_NOTICE);
 
 include"conn/connexion.php";


  	$Requete3 = "SELECT MAX(code) as ht FROM naissance WHERE  `annee_declaration` = '".$_POST['idRegion']."'   ";
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table <br>".mysql_error());


$detail = mysql_fetch_assoc($result3); 

$ca=$detail['ht'];
	
	 ?>

<div align="center">
  <input name="code" type="text" id="code" value="<?php echo $ca+1; ?>" size="14" maxlength="4" />
</div>
<?php ob_end_flush();?>
