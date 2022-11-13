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
    <p>
      <input type="submit" name="Submit" value="---تنفيذ الحذف---">
    </p>
    <p>&nbsp;</p>
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


$acte0="doc_$table/$annee_declaration/0$code.jpg";

  		if (file_exists($acte0)==TRUE) unlink($acte0);

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

