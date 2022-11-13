<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];
 include"../accesclient1.php";    
 if ($permission==securite2($tim2))
        { 
           $entreprise=$_SESSION["entreprise"];

$table=$_GET["table"];
$partie=$_GET["partie"];
$code=$_GET["code"];
$partie=$_GET["partie"];$anneeNais=$_GET["annee_declaration"];

$prof=$_GET["prof"];



$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);	


$officier=$_SESSION["off"];
$officier_a=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
$section=$_SESSION["section"];
$section1=$_SESSION["section1"];        $bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];




if($table=="naissance")
{
$Requete = "select * from naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

$adresse=$_GET["adresse"];
 $Requetex =  "UPDATE naissance SET  `adresse_personne`='$adresse', `prof`='".$prof."'  where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
									 mysql_query("SET NAMES 'UTF8' ");

$resultx = @mysql_query($Requetex,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


}


if($table=="attestation")
{

include"../conn/conversion.php";

 


 $Requete = "select * from attestation where id = '".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

if($_GET["convert"]!="") {
///////////////////MISE A JOUR PROFESSION

$adresse=$_GET["adresse"];

 $Requetex =  "UPDATE attestation SET  `prof`='$prof', `adresse_personne`='$adresse'  WHERE `id`='$partie'  ;";
									 mysql_query("SET NAMES 'UTF8' ");

$resultx = @mysql_query($Requetex,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


}

}


//echo  $Requetex;

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">          <title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/><link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/>


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
-->
</style>
</head>

<body>

<div align="left">
  <table  width="100%" align="center">
      <tr>
        <td width="29%" align="center"><div align="left">ROYAUME DU MAROC</div></td>
        <td width="40%"><div align="center"></div></td>
      </tr><tr>
        <td width="29%" align="center"><div align="left">MINISTERE DE L'INTERIEUR</div></td>
        <td width="40%"><div align="center"></div></td>
        </tr><tr>
        <td width="29%" align="center"><div align="left">Province ou préfecture de
          <span class="gras"><?php echo $province; ?></span></div></td>
        <td width="40%"><div align="center"></div></td>
        </tr><tr>
        <td width="29%" align="center"><div align="left"><?php echo $r['region']; ?> 
          : <span class="gras"> 
          <?php 
		echo $r['section'];
		?>
          </span></div></td>
        <td width="40%"><div align="left"></div></td>
        </tr><tr>
        <td width="29%" align="center"><div align="left"><span class="gras"><?php echo $bureau; ?></span></div></td>
        <td width="40%"><div align="left"></div></td>
      </tr></table>
      <table  width="97%" align="center">
  <tr>
    <td width="55%" rowspan="4"><div align="right"><span class="style4"><?php echo $_SESSION["idf"]; ?></span></div></td>
  </tr>
  </table>
  <table width="100%" bordercolor="#000000">
    <tr>
        <td ><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px">Certificat de vie individuelle</span></p>          <p class="gras">&nbsp;</p></td>
        
    </tr>
  </table>
  <table  width="100%" bordercolor="#000000"><tr>
        <td>&nbsp;</td>
        <td><div align="left"><span>Le président de la  </span><?php echo $r['region']." de : "; ?>
        <span class="gras">    <?php 
		echo $r['section']." ";
		?></span>
      </div></td>
    </tr><tr>
        <td>&nbsp;</td>
        <td><div align="left">Certifie selon l'enquête efféctuée en l'objet, que le(la) nommé(e) :  <span class="gras"><?php echo $row['prenom']; ?> <?php echo " ".$row['nom']; ?></span></div></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left">
        Né(e) le : <span class="gras"> <?php echo $row['date_mlf']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left">A <span class="gras"><?php echo $row['lieu']; ?></span></div></td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"><span>
          Fils (Fille) de </span><span class="gras"> <?php echo $row['nom_f_p']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"><span>
        Et de&nbsp;&nbsp;</span><span class="gras"><?php echo $row['nom_f_m']; ?></span></div></td>
      </tr><tr><td></td>
        <td >Résidant à<span class="gras"> <?php echo $_GET["adresse"]; ?></span></td>
      </tr>
      <tr><td></td>
        <td>Profession&nbsp;&nbsp;<span class="gras"><?php echo $_GET["prof"]; ?></span></td>
        
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td><div align="left">
        Acte de naissance n° : <span class="gras"><?php echo $row['code']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; année <span class="gras"><?php echo $row['annee_declaration']; ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; délivré à <span class="gras"><?php echo $_GET["ville"]; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left">
          Province <span class="gras"><?php echo $_GET["province"]; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
      </tr><tr>
        <td>&nbsp;</td>
        <td><div align="center">EST EN VIE</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"><span dir="ltr">En foi de quoi la présente attestation est délivrée à l'intéressé(e) pour servir et valoir ce que de droit.</span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"></div></td>
      </tr>
  </table>

    <table width="100%">
      <tr>
        <td width="51%"><div align="center">Fait à :<span class="gras"><?php echo $_SESSION["redaction"]; ?></span></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td width="49%"><div align="left">le : <span class="gras"><?php echo date("d/m/Y"); ?></span></div></td>
      </tr>
      <tr>
        <td width="51%"><div align="center">
          <p><?php echo $r['resp'] ;
		?>
          </p>
        </div></td>
		
		
        <td width="49%"><div align="left"></div></td>
      </tr>
      
  </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
