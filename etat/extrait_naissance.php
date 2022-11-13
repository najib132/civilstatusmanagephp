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


$idf=$_SESSION["idf"];
$idf_f=$_SESSION["idf_f"];
$section=$_SESSION["section"];
$section1=$_SESSION["section1"];


?>





 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<style type="text/css">
<!--
.style8 {font-size: 15px}
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
#Layer1 {
	position:absolute;
	left:1183px;
	top:28px;
	width:81px;
	height:58px;
	z-index:1;
}
.style5 {font-weight: bold; text-align: center; font-size: 24px; }
.style6 {font-size: 17px}
.style10 {font-size: 16px}
.style12 {font-size: 18px; font-weight: bold; }
.style13 {font-size: 18px}
.style15 {font-size: 17px; font-weight: bold; }
-->
</style>
</head>

<body style="font-size:16px">
<div align="right">
<table  width="100%" align="center">
      <tr>
        <td width="29%" align="center"><span class="style8">ROYAUME DU MAROC</span></td>
        <td width="40%"><div align="center">طبقا للقانون رقم  37.99  المتعلق بالحالة المدنية و الصادر  بتنفيذه</div></td>
        <td width="31%"><div align="center">المملكة المغربية</div></td>
      </tr><tr>
        <td width="29%" align="center"><span class="style8">MINISTERE DE L'INTERIEUR</span></td>
        <td width="40%"><div align="center">الظهير الشريف رقم   1.02.239</div></td>
        <td width="31%"><div align="center">وزارة الداخلية </div></td>
      </tr><tr>
        <td width="29%" align="center"><span class="style8">Province ou préfecture de
        <?php echo $province; ?></span></span></td>
        <td width="40%"><div align="center"><span dir="rtl">بتاريخ</span> 25 رجب 1423 - 3 اكتوبر 2002</div></td>
        <td width="31%"><div align="center">عمالة او اقليم
        :
            <?php echo $province_a; ?></span>
        </div></td>
      </tr><tr>
        <td width="29%" align="center"><span class="style8"><?php echo $r['region']  ?>  
        <?php 
		echo $r['section'];
		?> 
        </span></span> </td>
        <td width="40%"><div align="right"></div></td>
        <td width="31%"><div align="center">
        <?php echo $r['region1']; ?>  <?php 
		echo $r['section1']." ";
		?></span>    </div></td>
      </tr><tr>
        <td width="29%" align="center"><?php echo $bureau; ?></span></td>
        <td width="40%"><div align="right"><span class="style4"><?php echo $idf; ?></span></div></td>
        <td width="31%"><div align="center">
            <?php echo $bureau_a; ?></span>
        </div></td>
  </tr></table>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td width="16%"><div align="left"><strong>Acte N° </strong></div></td>
        <TD width="13%"><span class="gras"><?php echo $row['code']; ?></span></TD>
        <td width="45%" rowspan="3"><p style="font-size:24px" class="gras">نسخة موجزة من رسم الولادة</p><p class="style5">EXTRAIT D'ACTE DE NAISSANCE</p></td>
        <td width="16%"><div align="right"><strong>          <?php echo $row['code']; ?>
        </strong></div></td>
        <td width="10%" class="gras"><div align="right"><strong> 
      : عقد رقم</strong></div></td>
      </tr>
      <tr>
        <td><div align="left"><strong>Année Hégirienne </strong></div></td>
        <TD><span class="gras"><?php echo $row['annee_h']; ?></span></TD>
        <td><div align="right"><strong><?php echo $row['annee_h']; ?></strong></div></td>
        <td><div align="right"><strong> 
        السنة الهجرية</strong></div></td>
      </tr>
      <tr>
        <td><div align="left"><strong>Année Grégorienne </strong></div></td>
        <TD><span class="gras"><?php echo $row['annee_declaration']; ?></span></TD>
        <td><div align="right"><strong><?php echo $row['annee_declaration']; ?></strong></div></td>
        <td><div align="right"><strong> 
        السنة الميلادية</strong></div></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td width="55%"><div align="left" class="style15">Prénom&nbsp;<?php echo $row['prenom']; ?></div></td>
        <td width="0%"><span class="style13"></span></td>
        <td width="1%"><div align="right"><span class="style6"><span class="style10"><span class="style6"><span class="style13"><span class="style13"></span></span></span></span></span></div></td>
        <td width="44%"><div align="right" class="style12">&nbsp;&nbsp; الاسم الشخصي &nbsp;<?php echo $row['prenom_a']; ?></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style15">Nom&nbsp;<?php echo $row['nom']; ?></div></td>
        <td><span class="style13"></span></td>
        <td><div align="right"><span class="style6"><span class="style10"><span class="style6"><span class="style13"><span class="style13"></span></span></span></span></span></div></td>
        <td><div align="right" class="style12">&nbsp;&nbsp;الاسم العائلي <?php echo $row['nom_a']; ?></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style15">Lieu de naissance <?php echo $row['lieu']; ?></div></td>
        <td><span class="style13"></span></td>
        <td><div align="right"><span class="style6"><span class="style10"><span class="style6"><span class="style13"><span class="style13"></span></span></span></span></span></div></td>
        <td><div align="right" class="style12">مكان الازدياد&nbsp;&nbsp;<?php echo $row['lieu1']; ?></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style15">
          <?php  if ($row['sex'] == 'M') echo "Né "; else echo "Née ";
?>
        le&nbsp;&nbsp;<?php echo $row['date_hlf']; ?> Hijri</div></td>
        <td><span class="style13"></span></td>
        <td><div align="right"><span class="style6"><span class="style10"><span class="style6"><span class="style13"><span class="style13"></span></span></span></span></span></div></td>
        <td><div align="right" class="style12"> <?php  if ($row['sex'] == 'M') echo "ولد"; else echo "ولدت";
?> في يوم <?php echo $row['date_hla']; ?> هجرية</div></td>
      </tr>
      <tr>
        <td><div align="left" class="style15">Corespondant au&nbsp;&nbsp;<?php echo $row['date_mlf']; ?> Grégo</div></td>
        <td><span class="style13"></span></td>
        <td><div align="right"><span class="style6"><span class="style10"><span class="style6"><span class="style13"><span class="style13"></span></span></span></span></span></div></td>
        <td><div align="right" class="style12">الموافق ل<?php echo $row['date_mla']; ?> ميلادية</div></td>
      </tr>
      <tr>
        <td><div align="left" class="style15">Sexe 
          <?php if ($row['sex'] == 'M') echo " Masculin "; else echo "Féminin"; ?> 
          Nationalité <?php echo $row['nationalite_personne']; ?></div></td>
        <td><span class="style13"></span></td>
        <td><span class="style13"></span></td>
        <td><div align="right" class="style12"><span dir="rtl"> <?php if ($row['sex'] == 'M') echo " جنسه  "; else echo "جنسها "; ?>&nbsp;&nbsp;</span>
          <?php if ($row['sex'] == 'M') echo " ذكر "; else echo "انثى"; ?>
          <span dir="rtl"> <?php if ($row['sex'] == 'M') echo "  جنسيته "; else echo "جنسيتها"; ?></span>&nbsp;<?php echo $row['nationalite_personne_a'] ; ?></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style15">
          <?php if ($row['sex'] == 'M') echo "Fils"; else echo "Fille";
?>
        de <?php echo $row['nom_f_p']; ?></div></td>
        <td><span class="style13"></span></td>
        <td><div align="right"><span class="style6"><span class="style10"><span class="style6"><span class="style13"><span class="style13"></span></span></span></span></span></div></td>
        <td align="right" class="gras"><div align="right" class="style12"> 
          <?php if ($row['sex'] == 'M') echo "والده"; else echo "والدها";
?>
          &nbsp;          هو  <?php echo $row['nom_a_p']; ?> </div></td>
      </tr>
      <tr>
        <td><div align="left" class="style15">Et de  <?php echo $row['nom_f_m']; ?></div></td>
        <td><span class="style13"></span></td>
        <td><div align="right"><span class="style6"><span class="style10"><span class="style6"><span class="style13"><span class="style13"></span></span></span></span></span></div></td>
        <td align="right" class="gras"><div align="right" class="style12">
          <?php if ($row['sex'] == 'M') echo "والدته"; else echo "والدتها";
?>
          هي&nbsp; <?php echo $row['nom_a_m']; ?> </div></td>
      </tr>
      <tr>
        <td><div align="left" class="style15">Mention marginale de décès
          <?php 

	  $now=date("Y-m-d");
	  $date_n=$row[date_n];

 $Req = "select  remarque,remarque_f FROM mention_p where `annee_declaration`='".$anneeNais."' and `code`='".$code."' and `date` between '".$date_n."' and '".$now."' and `deces_naissance`=0 and `jugement` IN(12,24)    ";

	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($res);
		$non=mysql_num_rows($res);

	
	if($non==0) echo "Néant"; else echo $rox[remarque_f];	
		  
		  
		  
		  
?>
        </div></td>
        <td><span class="style13"></span></td>
        <td><div align="right"><span class="style6"><span class="style10"><span class="style6"><span class="style13"><span class="style13"></span></span></span></span></span></div></td>
        <td><div align="right" class="style12">بيان (الوفاة) المشار اليه في طرة الرسم&nbsp;
          <?php 
		


if($non==0)	echo "لا شيء"; else echo $rox[remarque];	
		
		
		
		
?>
        </div></td>
      </tr>
      <tr>
        <td><div align="left">Extrait certifié conforme au registre de l'Etat civil par nous  Sous Signé </div></td>
        <td><span class="style6"></span></td>
        <td><div align="right"><span class="style6"></span></div></td>
        <td><div align="right"> 
        نشهد بصفتنا ضابطا الحالة المدنية نحن&nbsp; الموقع اسفله </div></td>
      </tr>
      <tr>
        <td><div align="left">Officier de l'Etat civil de <span class="gras"><?php echo $_SESSION["redaction"]; ?></span></div></td>
        <td><span class="style6"></span></td>
        <td><div align="right"><span class="style6"></span></div></td>
        <td><div align="right">بمطابقة هذه النسخة لما هو مضمن في سجلات الحالة المدنية ب<?php echo $bureau_a; ?> </div></td>
      </tr>
  </table>

    <table width="100%">
      <tr>
        <td width="27%"><div align="left"><strong>Fait à :<?php echo $_SESSION["redaction"]; ?></strong></div>
        <div align="left"></div></td>
        <td width="6%" class="gras">Le :</td>
        <td width="20%" class="gras"><div align="left"><strong><?php echo date('d/m/Y'); ?></strong></div></td>
        <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td width="27%" class="gras"><div align="right"><strong><?php echo date("d/m/Y"); ?>: بتاريخ </strong></div></td>
        <td width="20%" class="gras"><div align="right">حرر ب : <?php echo $_SESSION["redaction_a"]; ?></div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" class="gras"><span dir="rtl"><strong>ضابط الحالة المدنية</strong></span></td>
        <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td colspan="2" class="gras"><div align="center"><strong>طابع الحالة المدنية  </strong></div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" class="gras">L'Officier de l'état civil</td>
        <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td colspan="2" align="center" class="gras"><div><strong>Seau du bureau de l'Etat civil</strong></div></td>
      </tr>
  </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
