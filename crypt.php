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
if ($permission==securite2($tim2)) {

$type=$_GET["type"];

if($type==1) include("div.php");  



?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      




<?php
$valider=$_POST["valider"];
if ($valider!="حذف") { ?>



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
<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
</head>

<body> 
<p align="center">&nbsp;</p>
<form name="formulaire_envoi_fichier" enctype="multipart/form-data" method="post" action="">
  <div align="center">
    <p>
      <label></label></p>

		
          <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
          <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
          <input name="valider" type="submit" id="valider" value="حذف"/>

    <div align="right"><br>
  </div>
		</div>
</form>
<?php }else
	
{

$N=$_GET["N"];

 $code = addslashes($_GET["code"]);
 $annee_declaration = addslashes($_GET["annee_declaration"]);
$mm = addslashes($_GET["mm"]);



$Requete =  "DELETE FROM `pj`  WHERE `id`='".$N."'   limit 1 "; 
	$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 



  		if (file_exists($mm)==TRUE) unlink($mm);


		echo "<div align=\"center\"><center><font color=\"#000000\"><span class=\"style9\"><b></b></span><BR>";
		echo "<div align=\"center\"><center><font color=\"#000000\"><span class=\"style9\"><b>تم تنفيذ الحذف بنجاح</b></span><BR>";
  
}

?>
</div>
</body>
</html>
<?php  }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

