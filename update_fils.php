<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);      include"conn/connexion.php";

$permission=$_SESSION["permission"];                                                                 $section=$_SESSION["section"];      
$section1=$_SESSION["section1"];  


$pays=$_SESSION["pays"];      
$pays1=$_SESSION["pays1"];  

$ministre=$_SESSION["ministre"];      
$ministre1=$_SESSION["ministre1"];      

$province=$_SESSION["province"];      
$province1=$_SESSION["province1"];      

$annexe=$_SESSION["annexe"];      
$annexe1=$_SESSION["annexe1"];     $region=$_SESSION["region"];  $region1=$_SESSION["region1"];      

   $idf=$_SESSION["idf"];
   $idf_m=$_SESSION["idf_m"];
   
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) { include("div.php");  

include"conn/conversion.php";

$N = addslashes($_GET["N"]);
$partie = addslashes($_GET["partie"]);
$nbr = addslashes($_GET["nbr"]);
$certificat = addslashes($_GET["certificat"]);

?>


<?php
$valider=$_POST["valider"];
if ($valider!="OK") { ?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      


 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>

   <style type="text/css">
<!--
.style39 {font-size: 18px}
#Layer1 {position:absolute;
	left:287px;
	top:158px;
	width:176px;
	height:147px;
	z-index:1;
}
.gras {	font-weight: bold;
}
.gras {	font-weight: bold;
	text-align: center;
}
.style40 {font-size: 16px}
.style41 {font-weight: bold; text-align: center; font-size: 16px; }
#Layer2 {
	position:absolute;
	left:263px;
	top:159px;
	width:153px;
	height:128px;
	z-index:1;
}
.style21 {font-size: 24px}
.style42 {font-size: 20px; }
-->
   </style>
</head>
<body>


<p align="center">&nbsp;</p>
<div align="center">
  <fieldset style="width:900px">
  <legend class="style39" align="right"><span class="gras" style="font-size:25px">شهادة الحياة الجماعية</span></legend>
 
  
<form action="" method="post" name="form1" id="form1">





  <table width="891" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td width="221" height="21" class="gras"><div align="center" class="style40">مكان الإزدياد</div></td>
      <td width="164" class="gras"><div align="center" class="style40">تاريخ الإزدياد</div></td>
      <td width="189" class="gras"><div align="center"><span class="style41">الإسم الشخصي</span></div></td>
      <td width="196" class="gras"><div align="center"><span class="style41">الإسم العائلي</span></div></td>
      <td width="109" rowspan="2" class="gras"><div align="right" class="style41">إضافة لائحة الأبناء</div>        <div align="center"><span class="style40"></span></div></td>
      </tr>
    <tr>
      <td class="gras"><div align="center"><span class="style40"></span>
	  
 <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lieu1')" />

        <input name="lieu1" type="text" id="lieu1" value="<?php 

	$Requete3x = "select prenom_a,date_n,nom_a,lieu1 from tmp where `id`='".$N."'    ";
	
	mysql_query("SET NAMES 'UTF8' ");

$result3x = @mysql_query($Requete3x,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result3x);

echo $rox[lieu1];		
		?>" size="25" dir="rtl">
		

		
	    </div></td>
      <td class="gras"><div align="center"><span class="style40"></span>
        <input name="date" type="text" id="date" value="<?php  echo ConvertDate_f($rox[date_n]);	?>" size="15">
		
              <button id="trigger1"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
              <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "date",
		        button            : "trigger1",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
		
      </div></td>
      <td class="gras"><div align="center">
          <input name="prenom_a" type="text" id="prenom_a" dir="rtl" value="<?php  echo $rox[prenom_a];		
 ?>" size="20" maxlength="25">
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prenom_a')" /> </div></td>
      <td class="gras"><div align="center">
        <input name="nom_a" type="text" id="nom_a" dir="rtl" value="<?php  echo $rox[nom_a];		
 ?>" maxlength="25">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('fils')" /> </div></td>
      </tr>
  </table>
  


  
  <p>
    <label>
    <input name="valider" type="submit" id="valider" value="OK">
      </label>
    <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
    <input name="certificat" type="hidden" id="certificat" value="<?php echo $certificat;?>">
  </p>
</form>
  </fieldset>


</div>




<?php }else
	
{

$now=date("Y-m-d");

$nom_a=$_POST["nom_a"];
$prenom_a=$_POST["prenom_a"];
$date=$_POST["date"];
$lieu1=$_POST["lieu1"];


 $date=convertDate($date);


 $Requete =  " UPDATE tmp SET `nom_a`='$nom_a',`prenom_a`='$prenom_a', `date_n`='$date', `lieu1`='$lieu1', `idf_m`='$idf_m' where `id`='$N' ; "; 

mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

	
	
include"aces1.php";
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";

		echo "<a href=\"fils.php?table=attestation&partie=$partie&certificat=$certificat\">رجوع</a>";

	
  }
  





?>


<?php   }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>
