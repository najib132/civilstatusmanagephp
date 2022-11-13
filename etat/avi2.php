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
$Requete = "select * from naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	
$date_r_ha="عاشر محرم الف ";
$date_r_ma="عشرون فبراير ";	
$date_r_h="dix moharam";
$date_r_m="veingt fevrier ";
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
$agPere =100;
$num = 10000;
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">          <title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/><link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/>


<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {color: #FFFFFF}
.style3 {color: #000000}
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

<div align="right">
<table  width="97%" align="center">
      <tr>
        <td width="55%"><div align="left" class="style4"><?php echo $_SESSION["idf"]; ?></div>
        <div align="center"></div></td>
        <td width="45%"><div align="center" class="gras">المملكة المغربية </div></td>
      </tr><tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center" class="gras">عمالة او اقليم
        
            <?php  ?>
        </div></td>
      </tr><tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center" class="gras">دائرة
        
            <?php  ?>
        </div></td>
      </tr><tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center" class="gras">قيادة 
            <?php  ?>
        </div></td>
      </tr><tr>
        <td width="55%"><div align="right"></div></td>
        <td width="45%"><div align="center" class="gras">
       مشيخة
            <?php  ?>
        </div></td>
      </tr><tr>
        <td width="55%"><div align="right"></div></td>
        <td width="45%"><div align="center" class="gras">
       رقم
            <?php  ?>
        </div></td>
      </tr></table>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td width="48%"><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px">شهادة الحياة الفردية</span></p>          <p class="gras">&nbsp;</p></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">
          <p><span dir="rtl">يشهد السيد</span></p>
        </div></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">
          <p><span dir="rtl">بصفته شيخ مشيخة  <?php ?>  بناء على البحث الذي اجراه انه يعرف معرفة تامة  </span></p>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">
          <p><span dir="rtl">السيد </span></p>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right"><span dir="rtl">من والده </span></div></td>
      </tr>
      <tr>
        <td></td>
        <td><div align="right"><span dir="rtl">ووالدته السيدة</span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right"><span dir="rtl">على قيد الحياة</span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">
          <p>و قد سلمت  هذه الشهادة للإدلاء بها عند الحاجة</p>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
      </tr>
      
  </table>

  <table width="100%">
      <tr>
        <td ><div align="center"><span dir="rtl">تاريخ و مكان الازدياد</span></div></td>
		
	
        <td ><div align="right">
          <p><span>الاسم العائلي </span></p></div></td><td><div align="right">
          <p><span>الاسم الشخصي</span></p></div></td>
      </tr>
      <tr>
        <td ><div align="center">
          <p>
            <?php ?>
          </p>
        </div></td><td><div align="center">
          <p>
            <?php ?>
          </p>
        </div></td>
		
		
        <td ><div align="center">
          <p>
            <?php ?>
          </p>
        </div></td>
      </tr>
      
  </table>
    <table width="100%">
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td ><p align="right">&nbsp;</p></td>
        <td><div align="right">حرر ب : <span class="gras"><?php echo $_SESSION["redaction_a"]; ?></span></div></td>
        <td ></td>
      </tr>
      <tr>
        <td align="center"><span>امضاء الشيخ</span> </td>
        <td></td>
		<td>&nbsp;</td>
      </tr>
    </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
