<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];
 include"../accesclient1.php";    
 if ($permission==securite2($tim2))
        { 
           $entreprise=$_SESSION["entreprise"];




$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);	



$table=$_GET["table"];
$code=$_GET["code"];
$partie=$_GET["partie"];$anneeNais=$_GET["annee_declaration"];

$partie=$_GET["partie"];


$lieu1=$_GET["lieu1"];
$femme1=$_GET["femme1"];
$date1=$_GET["date1"];
	
if($table=="naissance")
{
$Requete = "select * from naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

}

if($table=="deces")
{
$Requete = "select * from deces where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

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

 $Requetex =  "UPDATE attestation SET  `nom_epouse_f`='$femme1', `lieu_epouse_f`='$lieu1', `date_epouse`='$date1'  WHERE `id`='$partie'  ;";
									 mysql_query("SET NAMES 'UTF8' ");

$resultx = @mysql_query($Requetex,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 
}

}






$officier=$_SESSION["off"];
$officier_a=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
$section=$_SESSION["section"];
$section1=$_SESSION["section1"];        $bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];

$mentionMD="Néant";
$mentionMD_a="لاشيء";


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
  <table  width="90%" align="center">
      <tr>
        <td width="73%" align="center"><div align="left">ROYAUME DU MAROC</div></td>
        <td width="27%"><div align="center"></div></td>
      </tr><tr>
        <td width="73%" align="center"><div align="left">MINISTERE DE L'INTERIEUR</div></td>
        <td width="27%"><div align="center"></div></td>
        </tr><tr>
        <td width="73%" align="center"><div align="left">Province ou préfecture de
          <span class="gras"><?php echo $province; ?></span></div></td>
        <td width="27%"><div align="center"></div></td>
        </tr><tr>
        <td width="73%" align="center"><div align="left"><?php echo $r['region']; ?> 
          : <span class="gras"> 
          <?php 
		echo $r['section'];
		?>
          </span></div></td>
        <td width="27%"><div align="left"></div></td>
        </tr><tr>
        <td width="73%" align="center"><div align="left"><span class="gras"><?php echo $bureau; ?></span></div></td>
        <td width="27%"><div align="left"></div></td>
      </tr></table>
      <table  width="97%" align="center">
  <tr>
    <td width="55%" rowspan="4"><div align="right"><span class="style4"><?php echo $_SESSION["idf"]; ?></span></div></td>
  </tr>
  </table>
  <table width="100%" bordercolor="#000000">
    <tr>
        <td ><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px">Attestation de monogamie</span></p>          <p class="gras">&nbsp;</p></td>
        
    </tr>
  </table>
  <table  width="100%" bordercolor="#000000"><tr>
        <td>&nbsp;</td>
        <td><div align="left"><span>Le président de la  </span><?php echo $r['region']  ?>
            <?php 
		echo $r['section']." ";
		?>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Certifie selon l'enquête efféctuée en l'objet </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><div align="left">que le nommé :  <span class="gras"><?php echo $row['prenom']; ?> <?php echo " ".$row['nom']; ?></span></div></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left">
        Né le : <span class="gras"> <?php echo $row['date_mlf']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"><?php if($row['date_mlf_d'] != "") echo "Décédé le "; ?> <span class="gras">&nbsp;<?php echo $row['date_mlf_d']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php if($row['date_mlf_d'] != "") echo " à ".$row['lieu']; ?></div></td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"><span>
          Fils de </span><span class="gras"> <?php echo $row['nom_f_p']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"><span>
        Et de&nbsp;&nbsp;</span><span class="gras"><?php echo $row['nom_f_m']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"><span>Est monogame et a comme épouse : Mme<span class="gras">
          <?php if($_GET["convert"]=="") echo $row[nom_epouse_f]; else echo $_GET["femme1"]; ?>
        </span><span class="gras"></span></span></div></td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td><div align="left">
          Née le :<span class="gras">
          <?php if($_GET["convert"]=="") echo $row[date_epouse]; else echo $_GET["date1"]; ?>
          </span>à<span class="gras">
          <?php if($_GET["convert"]=="") echo $row[lieu_epouse_f]; else echo $_GET["lieu1"]; ?>
          </span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"><span >En foi de quoi la présente attestation est délivrée pour servir et valoir ce que de droit.</span></div></td>
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
		
        <td width="49%"><div align="left">Le : <span class="gras"><?php echo date("d/m/Y"); ?></span></div></td>
      </tr>
      <tr>
        <td width="51%"><div align="center">
          <p><?php echo $r['resp'] ." de ".$r['region']."  ".$r['section']." ";
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
