<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];                                                                 $section=$_SESSION["section"];      
$section1=$_SESSION["section1"];  

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
$bureau=$_SESSION["annexe"];
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
-->
</style>
</head>

<body>

<div align="right">
<table  width="97%" align="center">
      <tr>
        <td width="40%"><div align="center">طبقا للقانون رقم  37.99  المتعلق بالحالة المدنية و الصادر  بتنفيذه</div></td>
        <td width="31%"><div align="right">المملكة المغربية</div></td>
      </tr><tr>
        <td width="40%"><div align="center">الظهير الشريف رقم   1.02.239</div></td>
        <td width="31%"><div align="right">وزارة الداخلية </div></td>
      </tr><tr>
        <td width="40%"><div align="center"><span dir="rtl">بتاريخ</span> 25 رجب 1423 - 3 اكتوبر 2002</div></td>
        <td width="31%"><div align="right">عمالة او اقليم
          :
          <span class="gras"><?php echo $province_a; ?></span>
        </div></td>
      </tr><tr>
        <td width="40%"><div align="right"></div></td>
        <td width="31%">
          <div align="right"><?php echo $r['region1']; ?>    <span class="gras">
          <?php 
		echo $r['section1']." ";
		?>
          </span> </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right"><span class="gras"><?php echo $bureau_a; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right"><span class="style4"><?php echo $idf; ?></span></div></td>
      </tr>
      <tr>
        <td width="40%"><div align="right"></div></td>
        <td width="31%">
        <div align="right"></div></td>
      </tr></table>
  <table width="100%" bordercolor="#000000">
      <tr>
        <td colspan="5"><div align="center"><span class="gras" style="font-size:25px">نسخة موجزة من رسم الوفاة</span></div></td>
      </tr>
      <tr>
        <td width="13%">&nbsp; </td>
        <TD width="13%">&nbsp;</TD>
        <td width="43%" class="gras"><p style="font-size:25px" class="gras">&nbsp;</p></td>
        <td width="15%" class="gras"><div align="right">
          <span class="gras"><?php echo $row['code']; ?></span>
        </div></td>
        <td width="16%"><div align="right"> 
      : عقد رقم</div></td>
      </tr>
      <tr>
        <td>&nbsp; </td>
        <TD>&nbsp;</TD>
        <td width="43%" class="gras">&nbsp;</td>
        <td><div align="right"><span class="gras"><?php echo $row['annee_h']; ?></span></div></td>
        <td><div align="right"> 
        السنة الهجرية</div></td>
      </tr>
      <tr>
        <td>&nbsp;  </td>
        <TD>&nbsp;</TD>
        <td width="43%" class="gras">&nbsp;</td>
        <td><div align="right"><span class="gras"><?php echo $row['annee_declaration']; ?></span></div></td>
        <td><div align="right"> 
        السنة الميلادية</div></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td width="3%">&nbsp;</td>
        <td width="3%">&nbsp;</td>
        <td width="14%"><div align="right"></div></td>
        <td width="80%" class="gras">
          <div align="right">
  <?php if ($row['sex'] == 'M') echo "توفي في"; else echo "توفيت في";
?>
  &nbsp;&nbsp;&nbsp;&nbsp;<span class="gras"><?php echo $row['ville_deces_a']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">يوم&nbsp;&nbsp; <span class="gras">
          <?php echo $row['date_hla_d']; ?> هجرية</span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">الموافق ل<span class="gras"><?php echo $row['date_mla_d']; ?> ميلادية</span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"><span class="gras"><?php echo $row['prenom']; ?></span></div></td>
        <td><div align="right">الاسم الشخصي <span class="gras"><?php echo $row['prenom_a']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td><td></td>
        <td><div align="right"><span class="gras"><?php echo $row['nom']; ?></span></div></td>
        <td><div align="right">الاسم العائلي&nbsp;&nbsp;<span class="gras"><?php echo $row['nom_a']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right">
          <?php if ($row['sex'] == 'M') echo "ازداد"; else echo"ازدادت"; ?>
          في يوم<span class="gras">&nbsp;&nbsp;<?php echo $row['date_hla']; ?> هجرية</span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td align="right" class="gras"><div align="right">الموافق ل <span class="gras"><?php echo $row['date_mla']; ?> ميلادية</span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td align="right" class="gras"><div align="right"><span>ب&nbsp;&nbsp;</span><span class="gras"><?php echo $row['lieu1']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right"><span>
          <?php if ($row['sex'] == 'M') echo "والده"; else echo "والدها";
?>
  &nbsp;&nbsp;          هو </span><span class="gras"> <?php echo $row['nom_a_p']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right"><span>
          <?php if ($row['sex'] == 'M') echo "والدته"; else echo "والدتها";
?>
        هي &nbsp;&nbsp;</span><span class="gras"> <?php echo $row['nom_a_m']; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">نشهد بصفتنا ضابطا للحالة المدنية نحن<span class="gras">&nbsp;&nbsp;</span> <span class="gras"><?php echo " الموقع  اسفله "; ?></span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">بمطابقة هذه النسخة لما هو مضمن في سجلات الحالة المدنية ب<?php echo $bureau_a; ?></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      <td><div align="right"></div></td></tr>
  </table>

    <table width="100%">
      <tr>
        <td width="20%">&nbsp;</td>
        <td width="14%"><div align="left"></div></td>
        <td><div align="right"><span class="gras"><?php echo date("d/m/Y"); ?></span>: بتاريخ </div></td>
        <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
        <td><div align="right">حرر ب : <?php echo $_SESSION["redaction_a"]; ?></div></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><span dir="rtl">ضابط الحالة المدنية</span></td>
        <td><div align="center"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td align="center" colspan="2">&nbsp;</td>
        <td><div align="center" class="style4"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td align="center"><div></div></td>
      </tr>
    </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
