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
 $Requetex =  "UPDATE naissance SET  `adresse_personne_a`='$adresse', `prof_a`='".$prof."', `cin`='".$cin."', `date_cin`='".$date."'  where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
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


 $Requetex =  "UPDATE attestation SET  `prof_a`='$prof', `cin`='$cin', `date_cin`='$date', `adresse_personne_a`='$adresse'  WHERE `id`='$partie'  ;";
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
.style2 {font-weight: bold; text-align: center; font-size: 24px; }
.style4 {font-size: 10px}
.style6 {font-size: 36px}
-->
</style>
</head>

<body>

<div align="right">
<table  width="97%" align="center">
      <tr>
        <td width="55%"><div align="left" class="style4"><?php echo $_SESSION["idf"]; ?></div>
        <div align="center"></div></td>
        <td width="45%"><div align="center" class="gras">المملكة المغربية</div></td>
      </tr><tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center" class="gras">وزارة الداخلية </div></td>
      </tr><tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center" class="gras">عمالة او اقليم
        :
        <?php echo $province_a; ?> </div></td>
      </tr><tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center">
          <?php echo $r['region1']; ?>    <span class="gras"><?php 
		echo $r['section1']." ";
		?></span>    </div></td>
      </tr><tr>
        <td width="55%"><div align="right"></div></td>
        <td width="45%"><div align="center" class="gras"><?php echo $bureau_a; ?></div></td>
      </tr></table>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td ><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px">شهادة عدم الطلاق</span></p>          <p class="gras">&nbsp;</p></td>
        
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000"><tr>
        <td width="3%">&nbsp;</td>
        <td colspan="2"><div align="right"><span>يشهد الموقع اسفله </span> <?php echo  $r['resp_a'] ." "; ?> <?php echo $_SESSION["section2"]." "; ?>
            <?php 
		echo $r['section1']." ";
		?>
        </div></td>
    </tr><tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right">بناء ا على البحث الذى اجري من طرف عون السلطة المحلية ان 
      <?php  if ($row['sex'] == 'M') echo "السيد"; else echo "السيدة";
?>
      </div></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right">  الاسم الشخصي 
        <span class="gras"><?php echo $row['prenom_a']; ?></span></div></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right">  الاسم العائلي 
        <span class="gras"><?php echo $row['nom_a']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right">
          <?php  if ($row['sex'] == 'M') echo "ولد"; else echo "ولدت";
?> في يوم <span class="gras"><?php echo $row['date_hla']; ?></span></div></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="2"><div align="right">الموافق ل &nbsp;&nbsp;<span class="gras"><?php echo $row['date_mla']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right">ب
        <span class="gras"><?php echo $row['lieu1']; ?></span> </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right"><span>
          <?php if ($row['sex'] == 'M') echo "والده"; else echo "والدها";
?>
&nbsp;&nbsp;          هو </span><span class="gras"> <?php echo $row['nom_a_p']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right"><span>
          <?php if ($row['sex'] == 'M') echo "والدته "; else echo "والدتها ";
?>
هي&nbsp;&nbsp;</span><span class="gras"> <?php echo $row['nom_a_m']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right"><span>و 
          <?php if ($row['sex'] == 'M') echo "الساكن "; else echo "الساكنة ";
?>
        &nbsp;&nbsp;ب<span class="gras">
        <?php if($_GET["convert"]=="") echo $row[adresse_personne_a]; else echo $adresse; ?>
        </span></span></div></td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right">
          <?php if ($row['sex'] == 'M') echo "مهنته "; else echo "مهنتها ";
?>
          <span class="gras">
          <?php if($_GET["convert"]=="") echo $row[prof_a]; else echo $prof; ?>
          </span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="59%"><div align="right">بتاريخ <span class="gras">
          <?php if($_GET["convert"]=="") echo $row[date_cin]; else echo $date; ?>
        </span></div></td>
        <td width="38%"><div align="right"><span> &nbsp;<span><span class="gras">
          <?php if($_GET["convert"]=="") echo $row[cin]; else echo $cin; ?>
        </span></span>رقم البطاقة الوطنية&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2" align="center"><span class="style2 style6"><?php  if ($row['sex'] == 'M') echo "غير مطلق"; else echo "غير مطلقة";
?></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right">و قد سلمت  هذه الشهادة للإدلاء بها عند الحاجة</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right"></div></td>
      </tr>
  </table>

    <table width="100%">
      <tr>
        <td width="51%"><div align="center"><span class="gras"><?php echo date("Y/m/d"); ?></span>: بتاريخ </div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td width="49%"><div align="right">حرر ب : <span class="gras"><?php echo $_SESSION["redaction_a"]; ?></span></div></td>
      </tr>
      <tr>
        <td width="51%"><div align="right">
          <p><?php echo $r['resp_a'] ." ".$_SESSION["section2"]." ".$r['section1']." ";
		?>
          </p>
        </div></td>
		
		
        <td width="49%"><div align="right"></div></td>
      </tr>
      
    </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
