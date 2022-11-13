<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];
 include"../accesclient1.php";    
 if ($permission==securite3($tim3))
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
$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];
$mentionMD="Néant";
$mentionMD_a="لاشيء";

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
.style7 {font-size: 8px}
-->
</style>
</head>

<body>

<div align="right">
<table  width="97%" align="center">
      <tr>
        <td width="56%"><div align="center">طبقا للقانون رقم  37.99  المتعلق بالحالة المدنية و الصادر  بتنفيذه</div></td>
        <td width="44%" class="gras"><div align="center">المملكة المغربية</div></td>
      </tr><tr>
        <td width="56%"><div align="center">الظهير الشريف رقم   1.02.239</div></td>
        <td width="44%" class="gras"><div align="center">وزارة الداخلية </div></td>
      </tr><tr>
        <td width="56%"><div align="center"><span dir="rtl">بتاريخ</span> 25 رجب 1423 - 3 اكتوبر 2002</div></td>
        <td width="44%" class="gras"><div align="center">عمالة او اقليم
        :
            <span class="gras"><?php echo $province_a; ?></span>
        </div></td>
      </tr><tr>
        <td width="56%" class="gras"><div align="right"></div></td>
        <td width="44%" class="gras"><div align="center">
          <?php echo $r['region1']; ?>    <span class="gras"><?php 
		echo $r['section1']." ";
		?></span>    </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center"><?php echo $bureau_a; ?></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center"><span class="style7"><?php echo $idf; ?></span></div></td>
      </tr>
      <tr>
        <td width="56%" class="gras"><div align="right"></div></td>
        <td width="44%" class="gras"><div align="center"></div></td>
      </tr></table>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td colspan="5"><p style="font-size:25px" class="gras">نسخة موجزة من رسم الولادة</p></td>
      </tr>
      <tr>
        <td width="8%">&nbsp;</td><TD width="1%">&nbsp;</TD>
        <td width="59%">&nbsp;</td>
        <td width="17%" class="gras"><div align="right">
          <span class="gras"><?php echo $row['code']; ?></span>
        </div></td>
        <td width="15%" class="gras"><div align="right"> 
      : عقد رقم</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td><TD>&nbsp;</TD>
        <td width="59%">&nbsp;</td>
        <td><div align="right"><span class="gras"><?php echo $row['annee_h']; ?></span></div></td>
        <td><div align="right"> 
        السنة الهجرية</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td><TD>&nbsp;</TD>
        <td width="59%">&nbsp;</td>
        <td><div align="right"><span class="gras"><?php echo $row['annee_declaration']; ?></span></div></td>
        <td><div align="right"> 
        السنة الميلادية</div></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"><strong><?php echo $row['prenom']; ?></strong></div></td>
        <td><div align="right">الاسم الشخصي &nbsp;<span class="gras">&nbsp;<?php echo $row['prenom_a']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"><strong><?php echo $row['nom']; ?></strong></div>
            <div align="left"></div></td>
        <td><div align="right">الاسم العائلي&nbsp;<span class="gras">&nbsp; <?php echo $row['nom_a']; ?></span></div></td>
      </tr>
      
      <tr>
        <td><div align="right"></div></td>
        <td colspan="2"><div align="right">مكان الازدياد&nbsp;&nbsp;<span class="gras"><?php echo $row['lieu1']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td colspan="2"> <div align="right">
          <?php  if ($row['sex'] == 'M') echo "ولد"; else echo "ولدت";
?> 
في يوم <span class="gras"><?php echo $row['date_hla']; ?> </span>هجرية</div></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td colspan="2"><div align="right">الموافق ل<span class="gras"><?php echo $row['date_mla']; ?> </span>ميلادية</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="right">
          <div align="right"><span dir="rtl"> 
          <?php if ($row['sex'] == 'M') echo " جنسه  "; else echo "جنسها "; ?>
          &nbsp;&nbsp;</span><span class="gras">
          <?php if ($row['sex'] == 'M') echo " ذكر "; else echo "انثى"; ?>
              </span><span dir="rtl">  &nbsp;  
              <?php if ($row['sex'] == 'M') echo "  جنسيته "; else echo "جنسيتها"; ?>
        </span><span class="gras">&nbsp;&nbsp;<?php echo $row['nationalite_personne_a'] ; ?></div></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td colspan="2" align="right"><div align="right"><span> 
          <?php if ($row['sex'] == 'M') echo "والده"; else echo "والدها";
?>
            هو </span><span class="gras"> <?php echo $row['nom_a_p']; ?> </span></div></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td colspan="2" align="right"><div align="right"><span>
          <?php if ($row['sex'] == 'M') echo "والدته"; else echo "والدتها";
?>
        هي&nbsp;&nbsp;</span><span class="gras"> <?php echo $row['nom_a_m']; ?></span> </div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="right">بيان (الوفاة) المشار اليه في طرة الرسم&nbsp;<span class="gras">
          <?php 
		

	  $now=date("Y-m-d");
	  $date_n=$row[date_n];

 $Req = "select  remarque,remarque_f FROM mention_p where `annee_declaration`='".$anneeNais."' and `code`='".$code."' and `date` between '".$date_n."' and '".$now."' and `deces_naissance`=0 and `jugement` IN(12,24)    ";

	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($res);
		$non=mysql_num_rows($res);

if($non==0)	echo "لا شيء"; else echo $rox[remarque];	
		
		
		
		
?>
        </span></div></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td colspan="2"><div align="right">نشهد بصفتنا ضابطا الحالة المدنية نحن &nbsp;&nbsp;&nbsp;&nbsp;<span class="gras"> الموقع اسفله </span></div></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td colspan="2">
        <div align="right">بمطابقة هذه النسخة لما هو مضمن في سجلات الحالة المدنية ب<?php echo $bureau_a; ?> </div></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td colspan="2"><div align="right"></div></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td colspan="2"><div align="right"></div></td>
      </tr>
  </table>

    <table width="100%">
      <tr>
        <td width="36%">&nbsp;</td>
        <td width="34%" class="gras"><div align="right"><span class="gras"><?php echo date("Y/m/d"); ?></span>: بتاريخ </div></td>
		
        <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td width="30%" class="gras"><div align="right">حرر ب : <?php echo $_SESSION["redaction_a"]; ?></div></td>
      </tr>
      <tr>
        <td align="center"><span class="gras" dir="rtl">ضابط الحالة المدنية</span></td>
        <td><div align="center">طابع الحالة المدنية  </div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td><div align="center"></div>          <div></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
      </tr>
    </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
