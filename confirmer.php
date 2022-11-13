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
if ($permission==securite2($tim2)) {    


 $annee_declaration = addslashes($_GET["annee_declaration"]);

$code = addslashes($_GET["code"]);
$partie = addslashes($_GET["partie"]);
$table = addslashes($_GET["table"]);


?>


<html>
<head>

  

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>    


<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
</head>

<body bgcolor="#FFFFFF">
</body>
</html>

<?php


$Requete =  "UPDATE  `$table` set `confirmer`=1, `valider`=1  WHERE `code` = '".$code."' and `annee_declaration` ='".$annee_declaration."' and `partie`='".$partie."'   "; 
	$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

		echo "<style type=text/css>
<!--
.style1 {font-size: 36px}
-->
</style>
<div align=center><span class=style1>تم تأكيد البيانات بنجاح</span></div>
";






?>
</div>
</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

