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

   
 include"accesclient1.php";
if ($permission==securite4($tim4)) { include("div_admin.php");  


$deces_naissance=$_GET["deces_naissance"];
$annee=$_GET["annee"];

?>

<?php
$valider=$_POST["valider"];
if ($valider!="إضافة") { ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml" lang="fr"><head>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/arabic.js"></script>



<script language="JavaScript" type="text/JavaScript">

<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>


</head>
<h2 align="center">فتح سجل <?php if($deces_naissance==0) echo " الولادات" ; else echo "  الوفيات"; ?></h2>

<div align="center">
  <form id="form1" name="form1" method="post" action="">
    <div id="Layer1">
      <div id="background" class="background" style="display: none;"></div>
      <div id="clv_arb" class="clv_arb" style="display: none;"></div>
    </div>
    <table width="48%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="539" bgcolor="#FFFFFF"><div align="center">
          <input name="num" type="text" id="num" style="" dir="rtl" />
        </div></td>
        <td width="430" height="21" bgcolor="#EFEFEF"><div align="center">رقم السجل</div></td>
      </tr>
    </table>
    <p>
      <input name="valider" type="submit" id="valider" value="إضافة"/>
    </p>
    <p>
      <?php

if($deces_naissance==0)  $fichier="doc_naissance/$annee"; else  $fichier="doc_deces/$annee";


//scandir — Liste les fichiers et dossiers dans un dossier
$tableau = scandir($fichier);
//On boucle
$i=2;
while($tableau[$i]!="")
{
echo "سجل $tableau[$i]";

// echo "<p><a href=scan.php?annee=$annee&deces_naissance=$deces_naissance&partie=$tableau[$i]><img src=icone/dossier.jpg width=50 height=50/></a></p>";


echo "<p><a href=$fichier/$tableau[$i]><img src=icone/dossier.jpg width=50 height=50/></a></p>";

$i++;
}


?>
    </p>
  </form>
  
  
</div>
<p>
<?php }else
	
{

$num=addslashes($_POST["num"]);

if($deces_naissance==0)  $fichier="doc_naissance/$annee/$num"; else  $fichier="doc_deces/$annee/$num";
 //OUVRE LE FICHIER compteur.txt

if((file_exists($fichier)==FALSE))  $fp=mkdir("$fichier");
	
	
include"aces1.php";
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";

		echo "<a href=\"registre.php?annee=$annee&deces_naissance=$deces_naissance\">رجوع</a>";

	
  }
  





?>


<?php   }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>
