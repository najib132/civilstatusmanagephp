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
.style4 {
	font-size: 20px;
	font-weight: bold;
}
.style5 {font-size: 10px}
-->
</style>
</head>

<body>

<div align="right">
<table  width="97%" align="center">
      <tr>
        <td width="55%"><div align="left" class="style5"><?php echo $_SESSION["idf"]; ?></div>
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
        <td width="48%"><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px"></span>شهادة عدم التسجيل في سجل الولادات</p>          
        <p class="gras">&nbsp;</p></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">
          <p>يشهد &nbsp;&nbsp;&nbsp;<span class="gras">الموقع اسفله</span></p>
        </div></td>
    </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">
          <p>ان 
            <?php  if ($row['sex'] == 'M') echo "السيد"; else echo "السيدة";
?>
          <span class="gras"> <?php echo $row['prenom_a']; ?></span></p>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">الاسم العائلي <span class="gras"><?php echo $row['nom_a']; ?></span></div></td>
      </tr>
      <tr>
        <td></td>
        <td><div align="right">
          <?php  if ($row['sex'] == 'M') echo "ولد"; else echo "ولدت";
?>
في يوم <span class="gras"><?php echo $row['date_hla']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">الموافق ل &nbsp;&nbsp;<span class="gras"><?php echo $row['date_mla']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">ب
        <span class="gras"><?php echo $row['lieu1']; ?></span> </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right"><span>
          <?php if ($row['sex'] == 'M') echo "والده"; else echo "والدها";
?>
&nbsp;&nbsp;          هو </span><span class="gras"> <?php echo $row['nom_a_p']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right"><span>
          <?php if ($row['sex'] == 'M') echo "والدته "; else echo "والدتها ";
?>
هي&nbsp;&nbsp;</span><span class="gras"> <?php echo $row['nom_a_m']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center"><span dir="rtl"><span class="style4">طبقا لرسم الولادة الذي اطلعنا عليه غير مسجل(ة) بسجلات الحالة المدنية لهذه الجماعة </span></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">و قد سلمت
          
          هذه الشهادة للإدلاء بها عند الحاجة</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
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
        <td width="44%"><div align="center"><span class="gras"><?php echo date("d/m/Y"); ?></span> : بتاريخ </div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td width="56%"><div align="right">حرر ب : <span class="gras"><?php echo $_SESSION["redaction_a"]; ?></span></div></td>
      </tr>
      <tr>
        <td width="44%"><div align="center">
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
