<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];
 include"../accesclient1.php";    
 if ($permission==securite2($tim2))
        { 
           $entreprise=$_SESSION["entreprise"];

$code=$_GET["code"];
$partie=$_GET["partie"];$anneeNais=$_GET["annee_declaration"];
$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);		
$Requete = "select * from naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

$officier=$_SESSION["off"];
$officier_a=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
$section=$_SESSION["section"];
$section1=$_SESSION["section1"];        $bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];



$region=$_SESSION["region"];
$region1=$_SESSION["region1"];




$idf=$_SESSION["idf"];
$idf_f=$_SESSION["idf_f"];


?>





 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>
<head>
<script language="JavaScript" type="text/JavaScript">

 window.print()

</script>


<style type="text/css">
<!--
.gras {
	font-weight: bold;
}
.gras {
	font-weight: bold;
	text-align: center;
}
.style5 {font-size: 8px}
.style6 {font-weight: bold; text-align: center; font-size: 19px; }
-->
</style>
</head>

<body>

<div align="right">
<table  width="100%" align="center">
      <tr>
        <td width="29%" align="center" class="gras"><div align="left">ROYAUME DU MAROC</div></td>
        <td width="40%">&nbsp;</td>
      </tr><tr>
        <td width="29%" align="center" class="gras"><div align="left">MINISTERE DE L'INTERIEUR</div></td>
        <td width="40%">&nbsp;</td>
      </tr><tr>
        <td width="29%" align="center" class="gras"><div align="left">Province ou préfecture :
          <span class="gras"><?php echo $province; ?></span></div></td>
        <td width="40%">&nbsp;</td>
      </tr><tr>
        <td width="29%" align="center" class="gras"><div align="left"><?php echo $r['region']  ?>   <span class="gras">
          <?php 
		echo $r['section'];
		?> 
        </span> </div></td>
        <td width="40%">&nbsp;</td>
      </tr><tr>
        <td width="29%" align="center" class="gras"><div align="left"><span class="gras"><?php echo $bureau; ?></span></div></td>
        <td width="40%" class="gras"><div align="right"><span class="style5"><?php echo $idf; ?></span></div></td>
  </tr></table>
  <p>&nbsp;</p>
  <table width="100%" bordercolor="#000000">
      <tr>
        <td colspan="5"><p class="style6">EXTRAIT D'ACTE DE NAISSANCE</p></td>
      </tr>
      <tr>
        <td width="27%" class="gras"><div align="left">Acte N° </div></td><TD width="14%" class="gras"><div align="left"><span class="gras"><?php echo $row['code']; ?></span></div></TD>
        <td width="33%">&nbsp;</td>
        <td width="16%"><div align="right"></div></td>
        <td width="10%"><div align="right"></div></td>
      </tr>
      <tr>
        <td><div align="left">Année Hégirienne </div></td><td><div align="left"><span class="gras"><?php echo $row['annee_h']; ?></span></div></TD>
        <td width="33%">&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right"></div></td>
      </tr>
      <tr>
        <td><div align="left">Année Grégorienne </div></td><td><div align="left"><span class="gras"><?php echo $row['annee_declaration']; ?></span></div></TD>
        <td width="33%">&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right"></div></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td colspan="2"><div align="left">Prénom<span class="gras">&nbsp;&nbsp;<?php echo $row['prenom']; ?></span></div>          <div align="right"></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="left">Nom<span class="gras">&nbsp;&nbsp;<?php echo $row['nom']; ?></span></div>          <div align="right"></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="left">Lieu de naissance<span class="gras">&nbsp;&nbsp;<?php echo $row['lieu']; ?></span></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="left"><span>
          <?php  if ($row['sex'] == 'M') echo "Né "; else echo "Née ";
?>
        </span> le<span class="gras">&nbsp;&nbsp;<?php echo $row['date_hlf']; ?> </span>Hijri</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="left">Corespondant au&nbsp;&nbsp;<span class="gras"><?php echo $row['date_mlf']; ?> </span>Grégo</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="left">Sexe <span class="gras">
          <?php if ($row['sex'] == 'M') echo " Masculin "; else echo "Féminin"; ?>
        </span>&nbsp;&nbsp;Nationalité <span class="gras"><?php echo $row['nationalite_personne']; ?></span></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="left">
          <?php if ($row['sex'] == 'M') echo "Fils"; else echo "Fille";
?>
        de <span class="gras"><?php echo $row['nom_f_p']; ?></span></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="left">Et de  <span class="gras"><?php echo $row['nom_f_m']; ?></span></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="left">Mention marginale de décès<span class="gras">
          <?php 

	  $now=date("Y-m-d");
	  $date_n=$row[date_n];

 $Req = "select  remarque,remarque_f FROM mention_p where `annee_declaration`='".$anneeNais."' and `code`='".$code."' and `date` between '".$date_n."' and '".$now."' and `deces_naissance`=0 and `jugement` IN(12,24)    ";

	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($res);
		$non=mysql_num_rows($res);

	
	if($non==0) echo "Néant"; else echo $rox[remarque_f];	
		  
		  
		  
		  
?>
        </span></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="left">Extrait certifié conforme au registre de l'Etat civil par nous <span class="gras" > Sous Signé</span></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="left">Officier de l'Etat civil de  <span class="gras"><?php echo $_SESSION["redaction"]; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
  </table>

    <table width="100%">
      <tr>
        <td><div align="left">Fait à :<span class="gras"><?php echo $_SESSION["redaction"]; ?></span></div>
          <div align="left"></div>          <div align="left"></div></td>
        <td width="26%" class="gras"><div align="left">Le : <span class="gras"> <?php echo date('d/m/Y'); ?></span></div>          <div align="right"></div></td>
		
        <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td width="15%" class="gras"><div align="left"></div></td>
        <td width="17%" class="gras"><div align="right"></div></td>
      </tr>
      <tr>
        <td align="center" class="gras">&nbsp;</td>
        <td><div align="center"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td colspan="2" class="gras"><div align="center"></div></td>
      </tr>
      <tr>
        <td align="center" class="gras">L'Offier de l'état civil</td>
        <td><div align="center"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td colspan="2" align="center" class="gras"><div>Seau du bureau de l'Etat civil</div></td>
      </tr>
  </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
