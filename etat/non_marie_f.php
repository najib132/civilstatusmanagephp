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




$table=$_GET["table"];
$partie=$_GET["partie"];


$prof=$_GET["prof"];
$cin=$_GET["cin"];
$date=$_GET["date"];
	
if($table=="naissance")
{
$Requete = "select * from naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

$adresse=$_GET["adresse"];
 $Requetex =  "UPDATE naissance SET  `adresse_personne`='$adresse', `prof`='".$prof."', `cin`='".$cin."', `date_cin`='".$date."'  where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
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

 $Requetex =  "UPDATE attestation SET  `prof`='$prof', `cin`='$cin', `date_cin`='$date', `adresse_personne`='$adresse'  WHERE `id`='$partie'  ;";
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
$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];
$mentionMD="Néant";
$mentionMD_a="لاشيء";

$section=$_SESSION["section"];
$section1=$_SESSION["section1"];



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
.style2 {font-weight: bold; text-align: center; font-size: 24px; }
.style4 {font-size: 10px}
-->
</style>
</head>

<body>

<div align="right">

<table  width="90%" align="center">
      <tr>
        <td width="63%" align="center"><div align="left">ROYAUME DU MAROC</div></td>
        <td width="37%"><div align="center"></div></td>
      </tr><tr>
        <td width="63%" align="center"><div align="left">MINISTERE DE L'INTERIEUR</div></td>
        <td width="37%"><div align="center"></div></td>
        </tr><tr>
        <td width="63%" align="center"><div align="left">Province ou préfecture de
          <span class="gras"><?php echo $province; ?></span></div></td>
        <td width="37%"><div align="center"></div></td>
        </tr><tr>
        <td width="63%" align="center"><div align="left"><?php echo $r['region']; ?> 
          : <span class="gras"> 
          <?php 
		echo $r['section'];
		?>
          </span></div></td>
        <td width="37%"><div align="left"></div></td>
        </tr><tr>
        <td width="63%" align="center"><div align="left"><span class="gras"><?php echo $bureau; ?></span></div></td>
        <td width="37%"><div align="left"></div></td>
      </tr></table>
<table  width="97%" align="center">
      <tr>
        <td width="55%"><div align="left" class="style4"></div></td>
        <td width="45%"><div align="right" class="gras"></div></td>
  </tr></table>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td ><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px">Certificat de non-mariage</span></p>          <p class="gras">&nbsp;</p></td>
        
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000"><tr>
        <td width="47%"><div align="left">Le président de la<span> </span><?php echo $r['region']  ?>
          <?php 
		echo $r['section']." ";
		?>
      </div></td>
        </tr><tr>
        <td><div align="left"><span>Certifie selon l'enquête effectuée en l'objet, que le(la) nommé(e)    : </span></div></td>
        </tr>
      <tr>
        <td><div align="left">Nom : <span class="gras">
          <?php  echo $row['nom'] ; ?>
        </span></div></td>
    </tr>
      <tr>
        <td><div align="left">Prénom : <span class="gras">
          <?php  echo $row['prenom'] ; ?>
        </span></div></td>
      </tr>
      <tr>
        <td><div align="left">Né(e) le :<span class="gras"><?php echo $row['date_hlf']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Correspondant à <span class="gras"> : <?php echo $row['date_mlf']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">A : <span class="gras"><?php echo $row['lieu']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Fils (Fille) de :<span class="gras"> <?php echo $row['nom_f_p']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Et de : <span class="gras"><?php echo $row['nom_f_m']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Domicilié(e) à<span class="gras"> : 
            <?php if($_GET["convert"]=="") echo $row[adresse_personne]; else echo $adresse; ?>
        </span></div></td>
      </tr>
      
      <tr>
        <td><div align="left">Profession :<span class="gras">
          <?php if($_GET["convert"]=="") echo $row[prof]; else echo $prof; ?>
        </span></div></td>
      </tr>
      <tr>
        <td></span>
          <div align="left">CIN :<span class="gras">
            <?php if($_GET["convert"]=="") echo $row[cin]; else echo $cin; ?>
            <span>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Date : <span class="gras">
            <?php if($_GET["convert"]=="") echo $row[date_cin]; else echo $date; ?>
            </span></span></div></td>
      </tr>
      <tr>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td align="center"><div align="center"><span class="style2">
          <?php  if ($row['sex'] == 'M') echo "N'est pas marié"; else echo "N'est pas mariée";
?>
        </span></div></td>
      </tr>
      <tr>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
  </table>

    <table width="100%">
      <tr>
        <td width="49%" align="center">Fait à :<span class="gras"><?php echo $_SESSION["redaction"]; ?></span></td>
        <td width="51%"><p align="left">Le : <span class="gras"><?php echo date("d/m/Y"); ?></span></p></td>
        
      </tr>
      <tr>
        <td align="right"><?php echo $r['resp'] ." de ".$r['region']."  ".$r['section']." ";
		?></td>
		<td>&nbsp;</td>
      </tr>
      
    </table>
    <span class="style4"><?php echo $_SESSION["idf"]; ?></span></div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
