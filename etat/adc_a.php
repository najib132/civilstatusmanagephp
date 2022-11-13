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
$table=$_GET["table"];
$code=$_GET["code"];
$partie=$_GET["partie"];$anneeNais=$_GET["annee_declaration"];



$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);	

	
$Requete = "select * from $table where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

$off=$_SESSION["off"];
$off1=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
-$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];$mentionMD="Néant";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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

<div align="right">
<table  width="97%" align="center">
      <tr>
        <td width="55%"><div align="left" class="style4"><?php echo $_SESSION["idf"]; ?></div>
        <div align="center"></div></td>
        <td width="45%"><div align="center" class="gras">المملكة المغربية  </div></td>
      </tr><tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center" class="gras">وزارة الداخلية</div></td>
      </tr>
      <tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center" class="gras">عمالة او اقليم
        
        <?php echo $province_a; ?> </div></td>
      </tr>
    <tr>
      <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center" class="gras"><?php echo $r['region1']; ?>
            <?php 
		echo $r['section1']." ";
		?>
      </div></td>
    </tr><tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="right" class="gras"><?php echo $bureau_a; ?></div></td>
      </tr></table>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td width="48%"><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px"> شهادة المطابقة </span></p>          <p class="gras">&nbsp;</p></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td dir="rtl"><div align="right">
          <span>ان  <?php echo $_GET["solta"] ?></span>  و ضابط الحالة المدنية <?php echo $_SESSION["section2"]." "; ?>
            <?php 
		echo $r['section1']." ";
		?>
        </div></td>
        <td>&nbsp;</td>
    </tr>
      <tr>
        <td><div align="right">
          <span>يشهدان ان
          <?php if ($row["sex"] == 'M') echo "السيد"; else echo "السيدة";
?>
  <span class="gras">&nbsp;&nbsp;&nbsp;<?php echo $_GET["nom_a"]; ?>&nbsp;&nbsp;&nbsp;<?php echo $_GET["prenom_a"]; ?></span> </span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>
          <?php if ($row["sex"] == 'M') echo "المغربي"; else echo "المغربية";
?>
           الجنسية<span class="gras"></span></span>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">
          <span>
          <?php if ($row["sex"] == 'M') echo "المولود"; else echo "المولودة";
?>
           بتاريخ <span class="gras"><?php echo $_GET["daten"]; ?></span></span>
</div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>ب <span class="gras"><?php echo $_GET["lieun"]; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>جماعة / بلدية <span class="gras"><?php echo $_GET["coum"]; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span> عمالة او اقليم <span class="gras"><?php echo $_GET["province"]; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right"><span>
          <?php if ($row["sex"] == 'M') echo "والده"; else echo "والدها";
?>
&nbsp;&nbsp;          هو </span><span class="gras"><?php echo $_GET["nom_p"]; ?></span></div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>
          
          و
          <?php if ($row["sex"] == 'M') echo "والدته"; else echo "والدتها";
?>&nbsp;&nbsp;          هي <span class="gras"><?php echo $_GET["nom_m"]; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>قد 
          <?php if ($row['sex'] == 'M') echo "سجل"; else echo "سجلت";
?>
           طبق النصوص الجاري بها العمل و المنظمة للحالة المدنية في المغرب<span class="gras"></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>ب<?php echo $bureau_a ?> <span class="gras"><?php echo $_SESSION["section2"]; ?>
          <?php 
		echo $r['section1']." ";
		?>
          </span><span class="gras"></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">و 
          <?php if ($row['sex'] == 'M') echo "هو مقيد"; else echo "هي مقيدة";
?>
        الان في سجلات الحالة المدنية عقد رقم <span class="gras"> <?php echo $row['code']; ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  سنة <span class="gras"><?php echo $row['annee_declaration']; ?></span></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td dir="rtl"><div align="right">تحت الهوية التالية : </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">الاسم  الشخصي&nbsp;&nbsp;&nbsp;&nbsp;<span class="gras"><?php echo $row['prenom_a']; ?></span></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">الاسم العائلي&nbsp;&nbsp;&nbsp;&nbsp;<span class="gras"><?php echo $row['nom_a']; ?></span></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">
          <?php if ($row['sex'] == 'M') echo "المولود"; else echo "المولودة";
?> 
        يوم <span class="gras"> <?php echo $row['date_mla']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;  ب   <span class="gras"> <?php echo $row['lieu1']; ?></span> </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right"><span>
          <?php if ($row['sex'] == 'M') echo "والده"; else echo "والدها";
?>
&nbsp;&nbsp;          هو </span><span class="gras"> <?php echo $row['nom_a_p']; ?></span></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right"><span>
          <?php if ($row['sex'] == 'M') echo "والدته "; else echo "والدتها ";
?>
هي&nbsp;&nbsp;</span><span class="gras"> <?php echo $row['nom_a_m']; ?></span></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right"><?php echo $r['region1']." "; ?><span class="gras">
            <?php 
		echo $r['section1']." ";
		?></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          عمالة او اقليم
        <span class="gras">
        <?php echo $province_a; ?></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">و قد سلمت   
هذه الشهادة <?php  if ($row['sex'] == 'M') echo "للمعني"; else echo "للمعنية";
?> بالامر للإدلاء بها عند الحاجة</div></td>
        <td>&nbsp;</td>
      </tr>
  </table>
       <table width="100%">
      <tr>
        <td colspan="2"><div align="center"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td colspan="2"><div align="right"></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
        <span class="gras"><?php echo date("Y/m/d"); ?></span> : بتاريخ </div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td colspan="2"><div align="right">حرر ب : <span class="gras"><?php echo $_SESSION["redaction_a"]; ?></span></div></td>
      </tr>
      
      <tr>
        <td colspan="2"><div align="center"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td colspan="2"><div align="right"></div></td>
      </tr>
      <tr>
        <td colspan="2"><p align="center"> طابع و تأشيرة ضابط الحالة المدنية المختص</p></td>
        <td colspan="2"><div align="center">طابع و تأشيرة السلطة المحلية</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="37%"><div align="center"></div></td>
		
		
        <td colspan="2"><div align="center">تأشيرة القنصل</div></td>
        <td width="23%">&nbsp;</td>
      </tr>
    </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
