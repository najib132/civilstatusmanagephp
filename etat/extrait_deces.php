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
$section=$_SESSION["section"];
$section1=$_SESSION["section1"];        $bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];



$region=$_SESSION["region"];
$region1=$_SESSION["region1"];


?>





 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<style type="text/css">
<!--
.style5 {font-size: 15px}
-->
</style>
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
.style6 {
	font-size: 17px;
	font-weight: bold;
}
.style7 {font-size: 18px}
.style9 {font-size: 18; font-weight: bold; }
.style10 {font-weight: bold; text-align: center; font-size: 24px; }
-->
</style>
</head>

<body>
<div align="right">
<table  width="90%" align="center">
      <tr>
        <td width="29%" align="center"><span class="style5">ROYAUME DU MAROC</span></td>
        <td width="40%"><div align="center">طبقا للقانون رقم  37.99  المتعلق بالحالة المدنية و الصادر  بتنفيذه</div></td>
        <td width="31%"><div align="center">المملكة المغربية</div></td>
      </tr><tr>
        <td width="29%" align="center"><span class="style5">MINISTERE DE L'INTERIEUR</span></td>
        <td width="40%"><div align="center">الظهير الشريف رقم   1.02.239</div></td>
        <td width="31%"><div align="center">وزارة الداخلية </div></td>
      </tr><tr>
        <td width="29%" align="center"><span class="style5">Province ou préfecture de
        <?php echo $province; ?></span></span></td>
        <td width="40%"><div align="center"><span dir="rtl">بتاريخ</span> 25 رجب 1423 - 3 اكتوبر 2002</div></td>
        <td width="31%"><div align="center">عمالة او اقليم
        :
            <?php echo $province_a; ?></span>
        </div></td>
      </tr><tr>
        <td width="29%" align="center"><span class="style5"><?php echo $r['region']  ?>  
        <?php 
		echo $r['section'];
		?> 
        </span> </span></td>
        <td width="40%"><div align="right"></div></td>
        <td width="31%"><div align="center">
        <?php echo $r['region1']; ?>   <?php 
		echo $r['section1']." ";
		?></span>    </div></td>
      </tr><tr>
        <td width="29%" align="center"><span class="style5"><?php echo $bureau; ?></span></span></td>
        <td width="40%"><div align="right"><span class="style4"><?php echo $idf; ?></span></div></td>
        <td width="31%"><div align="center">
          <?php echo $bureau_a; ?></span>
        </div></td>
  </tr></table>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td width="19%" class="gras"><div align="left" class="style7"><strong>Acte N° </strong></div></td>
        <TD width="13%" class="gras"><div align="left" class="style7"><strong><?php echo $row['code']; ?></strong></div></TD>
        <td width="42%" rowspan="3"><p style="font-size:24px" class="gras">نسخة موجزة من رسم الوفاة</p><p class="style10">EXTRAIT D'ACTE DE DECES</span></p></td>
        <td width="16%"><div align="right" class="style9">          <?php echo $row['code']; ?>
        </div></td>
        <td width="10%" class="gras"><div align="right" class="style9"> 
       عقد رقم</div></td>
      </tr>
      <tr>
        <td><div align="left" class="style7"><strong>Année Hégirienne </strong></div></td>
        <td><div align="left" class="style7"><strong><?php echo $row['annee_h']; ?></strong></div></TD>
        <td><div align="right" class="style9"><?php echo $row['annee_h']; ?></div></td>
        <td><div align="right" class="style9"> 
        السنة الهجرية</div></td>
      </tr>
      <tr>
        <td><div align="left" class="style7"><strong>Année Grégorienne </strong></div></td>
        <td><div align="left" class="style7"><strong><?php echo $row['annee_declaration']; ?></strong></div></TD>
        <td><div align="right" class="style9"><?php echo $row['annee_declaration']; ?></div></td>
        <td><div align="right" class="style9"> 
        السنة الميلادية</div></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td width="56%"><div align="left" class="style6">
          <?php if ($row['sex'] == 'M') echo "Décédé à "; else echo "Décédée à ";
?>
        &nbsp;<?php echo $row['ville_deces']; ?></div></td>
        <td width="1%"><span class="style7"></span></td>
        <td width="2%"><div align="right"><span class="style7"></span></div></td>
        <td width="41%">
          <div align="right" class="style7"><strong>
  <?php if ($row['sex'] == 'M') echo "توفي في"; else echo "توفيت في";
?>
  &nbsp;&nbsp;<?php echo $row['ville_deces_a']; ?></strong></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style6">Le&nbsp;&nbsp;<?php echo $row['date_hlf_d']; ?> Hijri</div></td>
        <td><span class="style7"></span></td>
        <td><div align="right"><span class="style7"></span></div></td>
        <td><div align="right" class="style7"><strong>يوم 
          <?php echo $row['date_hla_d']; ?> هجرية</strong></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style6">Corespondant au&nbsp;&nbsp;<?php echo $row['date_mlf_d']; ?> Grégo </div></td>
        <td><span class="style7"></span></td>
        <td><div align="right"><span class="style7"></span></div></td>
        <td><div align="right" class="style7"><strong>الموافق ل<?php echo $row['date_mla_d']; ?> ميلادية</strong></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style6">Prénom&nbsp;&nbsp;<?php echo $row['prenom']; ?></div></td>
        <td><span class="style7"></span></td>
        <td><div align="right"><span class="style7"></span></div></td>
        <td><div align="right" class="style7"><strong>الاسم الشخصي <?php echo $row['prenom_a']; ?></strong></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style6">Nom&nbsp;&nbsp;<?php echo $row['nom']; ?></div></td>
        <td><span class="style7"></span></td>
        <td><div align="right"><span class="style7"></span></div></td>
        <td><div align="right" class="style7"><strong>الاسم العائلي&nbsp;&nbsp;<?php echo $row['nom_a']; ?></strong></div></td>
      </tr>
      <tr>
        <td>
          <div align="left" class="style6">
          <?php  if ($row['sex'] == 'M') echo "Né "; else echo "Née ";
?>
        le&nbsp;&nbsp;<?php echo $row['date_hlf']; ?> Hijri</div></td>
        <td><span class="style7"></span></td>
        <td><span class="style7"></span></td>
        <td><div align="right" class="style7"><strong>
          <?php if ($row['sex'] == 'M') echo "ازداد"; else echo"ازدادت"; ?>
        في يوم&nbsp;&nbsp;<?php echo $row['date_hla']; ?> هجرية</strong></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style6">Corespondant au&nbsp;&nbsp;<?php echo $row['date_mlf']; ?> Grégo</div></td>
        <td><span class="style7"></span></td>
        <td><div align="right"><span class="style7"></span></div></td>
        <td align="right" class="gras"><div align="right" class="style7"><strong>الموافق ل <?php echo $row['date_mla']; ?> ميلادية</strong></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style6">A&nbsp;&nbsp;<?php echo $row['lieu']; ?></div></td>
        <td><span class="style7"></span></td>
        <td><div align="right"><span class="style7"></span></div></td>
        <td align="right" class="gras"><div align="right" class="style7"><strong>ب&nbsp;&nbsp;<?php echo $row['lieu1']; ?></strong></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style6">
          <?php if ($row['sex'] == 'M') echo "Fils de "; else echo "Fille de ";
?>
          <?php echo $row['nom_f_p']; ?></div></td>
        <td><span class="style7"></span></td>
        <td><div align="right"><span class="style7"></span></div></td>
        <td><div align="right" class="style7"><strong>
          <?php if ($row['sex'] == 'M') echo "والده"; else echo "والدها"; ?>
&nbsp;&nbsp;          هو  <?php echo $row['nom_a_p']; ?></strong></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style6">Et de          <?php echo $row['nom_f_m']; ?></div></td>
        <td><span class="style7"></span></td>
        <td><div align="right"><span class="style7"></span></div></td>
        <td><div align="right" class="style7"><strong>
          <?php if ($row['sex'] == 'M') echo "والدته"; else echo "والدتها";
?>
          هي &nbsp;&nbsp; <?php echo $row['nom_a_m']; ?></strong></div></td>
      </tr>
      <tr>
        <td><div align="left">Extrait certifié conforme au registre de l'Etat civil par nous<span class="gras">&nbsp;&nbsp;</span> <span class="gras" > Sous Signé</span></div></td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">نشهد بصفتنا ضابطا للحالة المدنية نحن<span class="gras">&nbsp;</span><span class="gras"><?php echo " الموقع  اسفله "; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Officier de l'Etat civil de <span class="gras"><?php echo $_SESSION["redaction"]; ?></span></div></td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right"><span dir="rtl">بمطابقة هذه النسخة لما هو مضمن في سجلات الحالة المدنية ب<?php echo $bureau_a; ?> </span></div></td>
      </tr>
  </table>

    <table width="100%">
      <tr>
        <td width="23%" class="gras"><div align="left">Fait à :<?php echo $_SESSION["redaction"]; ?></div></td>
        <td width="18%" class="gras"><div align="left">Le :<span class="gras"><?php echo date('d/m/Y'); ?></span></div></td>
        <td width="13%" class="gras"><div align="left"></div>          <div align="right"></div></td>
        <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
        <td width="24%" class="gras"><div align="right"><span class="gras"><?php echo date("d/m/Y"); ?></span>: بتاريخ </div></td>
        <td width="22%" class="gras"><div align="right">حرر ب : <?php echo $_SESSION["redaction_a"]; ?></div></td>
      </tr>
      <tr>
        <td colspan="2" align="center" class="gras"><span dir="rtl">ضابط الحالة المدنية</span></td>
        <td class="gras"><div align="center"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td colspan="2" class="gras"><div align="center">طابع الحالة المدنية  </div></td>
      </tr>
      <tr>
        <td colspan="2" align="center" class="gras">L'Officier de l'état civil</td>
        <td class="gras"><div align="center" class="style4"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td colspan="2" align="center" class="gras"><div>Seau du bureau de l'Etat civil</div></td>
      </tr>
  </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
