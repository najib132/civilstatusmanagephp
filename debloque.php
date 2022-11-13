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

<form name="form1" method="post">
  <div align="center">
    <div align="left"><a href="acces.php"></a>
      <div align="center"></div>
    </div>
    <div align="center"></div>
    <p class="style1">تشغيل او اقفال حساب &nbsp; </p>
    <table width="428" height="205">
      <tr>
        <td><div align="center">
          <input name="Submit" type="submit" class="style1" value="فتح">
        </div></td>
      </tr>

      <tr>
        <td><div align="center">
            <input name="Submit2" type="submit" class="style1" value="إغلاق">
          </div></td>
      </tr>
    </table>
    <div align="center">
      <p align="left"></p>
    </div>
  </div>
</form>
</body>
</html>

<?php
$Submit=$_POST["Submit"];
$Submit2=$_POST["Submit2"];


$N=$_GET["N"];




if ($Submit=="فتح") 
{

$Requete =  "UPDATE  `utilisateurs` set `actif`=0  WHERE `id`='".$N."'  "; 
	$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

		echo "<div align=\"center\"><center><font color=\"#000000\"><span class=\"style9\"><b>تم تشغيل الحساب</b></span><BR>";

				echo "<div align=\"center\"><a href=\"compte.php\">رجوع</a>"; 


 }
  




if ($Submit2=="إغلاق") 
{

$Requete =  "UPDATE  `utilisateurs` set `actif`=1  WHERE `id`='".$N."'  "; 
	$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

		echo "<div align=\"center\"><center><font color=\"#000000\"><span class=\"style9\"><b></b></span><BR>";
		echo "<div align=\"center\"><center><font color=\"#000000\"><span class=\"style9\"><b>تم إغلاق الحساب</b></span><BR>";
				echo "<div align=\"center\"><a href=\"compte.php\">رجوع</a>"; 


 }


?>
</div>
</body>
</html>
<?php mysql_close();  }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

