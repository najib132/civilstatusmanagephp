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
   
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) { include("div.php");  

?>


<?php 
$Submit=$_POST["Submit"];
if ($Submit!="---تنفيذ الحذف---") { ?>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      



<body bgcolor="#FFFFFF">
<form name="form1" method="post">
  <div align="center">
    <div align="left"><a href="acces.php"></a> <font color="#00FFFF"><em><font size="5">___</font></em></font><font color="#00FFFF"><em><font size="5">_____</font></em></font>
      <div align="center"></div>
    </div>
    <div align="center"><a href="acces.php"></a></div>
    <input type="submit" name="Submit" value="---تنفيذ الحذف---">
    <div align="center">
      <p align="left"></p>
    </div>
  </div>
</form>
</body>
</html>

<?php }else
	
{

$code=$_GET["code"];
$annee_declaration=$_GET["annee_declaration"];
$table=$_GET["table"];
$N=$_GET["N"];
$partie=$_GET["partie"];

if($table=="naissance") $deces_naissance=0; else $deces_naissance=1;

if($table=="naissance" || $table=="deces")

{

$Requete =  "DELETE FROM `$table`  WHERE `annee_declaration`='".$annee_declaration."'  and `code`='".$code."'  and `partie`='".$partie."' "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 


$Requete =  "DELETE FROM `mention_p`  WHERE `annee_declaration`='".$annee_declaration."'  and `code`='".$code."' and `deces_naissance`='".$deces_naissance."' and `partie`='".$partie."' "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 


$Requete =  "DELETE FROM `origine_$table`  WHERE `annee_declaration`='".$annee_declaration."'  and `code`='".$code."' and `partie`='".$partie."'  "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 


/*
$mat="$code";

 $logo="doc_$table/$annee_declaration/$mat.jpg";

	/*
	if (file_exists($logo)) {

		unlink($logo);
}
	
	*/
	
$Requete =  " OPTIMIZE TABLE `$table`   "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
	
$Requete =  " OPTIMIZE TABLE `mention_p`   "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
	

		echo "<div align=\"center\"><center><font color=\"#000000\"><span class=\"style9\"><b></b></span><BR>";
		echo "<div align=\"center\"><center><font color=\"#000000\"><span class=\"style9\"><b>تم تنفيذ الحذف بنجاح</b></span><BR>";
 
 }
 
if($table!="naissance" && $table!="deces" && $table!="tmp")
{ 
 ////////////////////////////////////////////////////////////////////////////////////
 
$Requete =  "DELETE FROM `$table`  WHERE `id`='".$N."'    "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

$Requete =  " OPTIMIZE TABLE `$table`   "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 


		echo "<div align=\"center\"><center><font color=\"#000000\"><span class=\"style9\"><b></b></span><BR>";
		echo "<div align=\"center\"><center><font color=\"#000000\"><span class=\"style9\"><b>تم تنفيذ الحذف بنجاح</b></span><BR>";
		
		
 
 }

 
 
 
if($table=="tmp")

{

$Requete =  "DELETE FROM `tmp`  WHERE `id_attestation`='".$partie."'    "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

$Requete =  " OPTIMIZE TABLE `$table`   "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 


		echo "<div align=\"center\"><center><font color=\"#000000\"><span class=\"style9\"><b></b></span><BR>";
		echo "<div align=\"center\"><center><font color=\"#000000\"><span class=\"style9\"><b>تم تنفيذ الحذف بنجاح</b></span><BR>";


 }
 
 
 }
 



?>
</div>
</body>
</html>
<?php mysql_close();  }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

