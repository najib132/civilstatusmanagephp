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

if($table=="naissance")
{
$Requete = "select * from naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

}


if($table=="attestation")
{

$Requete = "select * from attestation where id = '".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

}




$off=$_SESSION["off"];
$off1=$_SESSION["off1"];
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
.style9 {font-size: 22px; font-weight: bold; }
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
        : <?php echo $province_a; ?></div></td>
      </tr><tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center" class="gras"><?php echo $r['region1']; ?>
            <?php 
		echo $r['section1']." ";
		?>
        </div></td>
      </tr><tr>
        <td width="55%"><div align="right"></div></td>
        <td width="45%"><div align="center" class="gras"><?php echo $bureau_a; ?></div></td>
      </tr><tr>
        <td width="55%"><div align="right"></div></td>
        <td width="45%"><div align="center" class="gras"></div></td>
      </tr></table>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td width="48%"><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px">شهادة الحياة الفردية</span></p>          <p class="gras">&nbsp;</p></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="style9">
          <p>يشهد الموقع اسفله  <?php echo  $r['resp_a'] ." "; ?> <?php echo $_SESSION["section2"]." "; ?>
            <?php 
		echo $r['section1']." ";
		?>
          </p>
        </div></td>
    </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="style9">بناء ا على البحث الذى اجري من طرف عون السلطة المحلية </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="style9">
          <p>ان 
            <?php  if ($row['sex'] == 'M') echo "السيد"; else echo "السيدة";
?>
            <?php echo $row['prenom_a']; ?></p>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="style9">الاسم العائلي <?php echo $row['nom_a']; ?></div></td>
      </tr>
      <tr>
        <td></td>
        <td><div align="right" class="style9">
          <?php  if ($row['sex'] == 'M') echo " ولد "; else echo " ولدت ";
?>
في يوم <?php echo $row['date_hla']; ?></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="style9">الموافق ل &nbsp;&nbsp;<?php echo $row['date_mla']; ?></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="style9">ب          <?php echo $row['lieu1']; ?> </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="style9">
          <?php if ($row['sex'] == 'M') echo "والده"; else echo "والدها";
?>
&nbsp;&nbsp;          هو  <?php echo $row['nom_a_p']; ?></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="style9">
          <?php if ($row['sex'] == 'M') echo "والدته "; else echo "والدتها ";
?>
        هي&nbsp;&nbsp; <?php echo $row['nom_a_m']; ?></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="style9"><span dir="rtl">طبقا لرسم الولادة الذي اطلعنا عليه  
          <?php  if ($row['sex'] == 'M') echo "لازال"; else echo "لازالت";
?>
          على قيد الحياة و قد سلمت 
         <?php  if ($row['sex'] == 'M') echo "له"; else echo "لها";
?>
          هذه الشهادة للإدلاء بها عند الحاجة</span></div></td>
      </tr>
  </table>

  <table width="100%">
      
      
  </table>
    <table width="100%">
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="44%"><div align="center" class="style9"><?php echo date("Y/m/d"); ?> : بتاريخ </div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td width="56%"><div align="right" class="style9">حرر ب : <span class="gras"><?php echo $_SESSION["redaction_a"]; ?></span></div></td>
      </tr>
      <tr>
        <td width="44%"><div align="center" class="style9">
          <p>توقيع ضابط الحالة المدنية</p>
        </div></td>
		
		
        <td width="56%"><div align="right"></div></td>
      </tr>
    </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
