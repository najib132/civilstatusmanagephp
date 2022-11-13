<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];                                                                 $section=$_SESSION["section"];      
$section1=$_SESSION["section1"];  

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


		
$Requete = "select * from deces where `code` = '".$code."' and `annee_declaration` = '".$anneeNais."' and `partie`='".$partie."' " ;
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors fffde la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	


$idf=$_SESSION["idf"];
$idf_f=$_SESSION["idf_f"];


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
.style4 {font-size: 10px}
.style5 {font-weight: bold; text-align: center; font-size: 20px; }
-->
</style>
</head>

<body>

<div align="right">
<table  width="100%" align="center">
      <tr>
        <td width="29%" align="center"><div align="left">ROYAUME DU MAROC</div></td>
        <td width="40%">&nbsp;</td>
      </tr><tr>
        <td width="29%" align="center"><div align="left">MINISTERE DE L'INTERIEUR</div></td>
        <td width="40%">&nbsp;</td>
      </tr><tr>
        <td width="29%" align="center"><div align="left">Province ou préfecture de
          <span class="gras"><?php echo $province; ?></span></div></td>
        <td width="40%">&nbsp;</td>
      </tr><tr>
        <td width="29%" align="center"><div align="left"><?php echo $r['region']  ?>   <span class="gras">
          <?php 
		echo $r['section'];
		?> 
        </span> </div></td>
        <td width="40%">&nbsp;</td>
      </tr>
        <tr>
          <td align="center"><div align="left"><span class="gras"><?php echo $bureau; ?></span></div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center"><div align="left"><span class="style4"><?php echo $idf; ?></span></div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
        <td width="29%" align="center"><div align="left"></div></td>
        <td width="40%"><div align="right"></div></td>
      </tr></table>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td colspan="5" class="gras"><p class="style5">EXTRAIT D'ACTE DE DECES</span></p></td>
      </tr>
      <tr>
        <td width="25%" class="gras"><div align="left">Acte N° </div></td>
        <td width="16%"><div align="left"><span class="gras"><?php echo $row['code']; ?></span></div></TD>
        <td width="33%">&nbsp;</td>
        <td width="16%"><div align="right"></div></td>
        <td width="10%"><div align="right"></div></td>
      </tr>
      <tr>
        <td><div align="left">Année Hégirienne </div></td>
        <td><div align="left"><span class="gras"><?php echo $row['annee_h']; ?></span></div></TD>
        <td width="33%">&nbsp;</td>
        <td><div align="right"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="left">Année Grégorienne </div></td>
        <td><div align="left"><span class="gras"><?php echo $row['annee_declaration']; ?></span></div></TD>
        <td width="33%">&nbsp;</td>
        <td><div align="right"></div></td>
        <td>&nbsp;</td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td><div align="left">
          <?php if ($row['sex'] == 'M') echo "Décédé à "; else echo "Décédée à ";
?>
        <span class="gras">&nbsp;&nbsp;<?php echo $row['ville_deces']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Le<span class="gras">&nbsp;&nbsp;<?php echo $row['date_hlf_d']; ?></span> Hijri </div></td>
      </tr>
      <tr>
        <td><div align="left">Corespondant au<span class="gras">&nbsp;&nbsp;<?php echo $row['date_mlf_d']; ?></span> Grégo </div></td>
      </tr>
      <tr>
        <td><div align="left">Prénom<span class="gras">&nbsp;&nbsp;<?php echo $row['prenom']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Nom<span class="gras">&nbsp;&nbsp;<?php echo $row['nom']; ?></span></div></td>
      </tr>
      <tr>
        <td>
          <div align="left">
           <?php  if ($row['sex'] == 'M') echo "Né "; else echo "Née ";
?>
         le<span class="gras">&nbsp;&nbsp;<?php echo $row['date_hlf']; ?> Hijri</span></div></td>
      </tr>
      <tr>
        <td><div align="left">Corespondant au&nbsp;&nbsp;<span class="gras"><?php echo $row['date_mlf']; ?> Grégo</span></div></td>
      </tr>
      <tr>
        <td><div align="left">A<span class="gras">&nbsp;&nbsp;<?php echo $row['lieu']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">
          <?php if ($row['sex'] == 'M') echo "Fils de "; else echo "Fille de ";
?>
               <span class="gras"><?php echo $row['nom_f_p']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Et de
        <span class="gras"><?php echo $row['nom_f_m']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Extrait certifié conforme au registre de l'Etat civil par nous<span class="gras">&nbsp;&nbsp;</span> <span class="gras" > Sous Signé</span></div></td>
      </tr><tr>
        <td><div align="left">Officier de l'Etat civil de <span class="gras"><?php echo $_SESSION["redaction"]; ?></span></div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
  </table>

    <table width="100%">
      <tr>
        <td width="33%">Fait à :<span class="gras"><?php echo $_SESSION["redaction"]; ?></span></td>
        <td colspan="2"><div align="center">Le :<span class="gras"><?php echo date('d/m/Y'); ?></span></div></td>
        <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
        <td width="20%"><div align="right"></div></td>
        <td width="19%"><div align="right"></div></td>
      </tr>
      <tr>
        <td colspan="2" align="center">&nbsp;</td>
        <td><div align="center"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td colspan="2"><div align="center"></div></td>
      </tr>
      <tr>
        <td align="center" colspan="2">L'Officier de l'état civil</td>
        <td></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td align="center" colspan="2"><div align="center" class="style4"></div> 
        </td>
      </tr>
    </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
