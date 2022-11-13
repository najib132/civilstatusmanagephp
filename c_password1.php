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
 
 $acces=$_GET["acces"];
 $type=$_GET["type"];
 
 if($acces=="officier") 
 {
 $permet=securite2($tim2);
include"div.php"; 
 } 
 else if($acces=="root") 
 {
 $permet=securite3($tim3);
 include"div_root.php"; 

 }
 
 
 if ($permission==$permet) {   




?>

<html>
<?php
$valider=$_POST["valider"];
if ($valider!="تعديل") { ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml" lang="fr"><head>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/arabic.js"></script>
  



<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {font-size: 18px}
-->
</style>
<div align="center">
  <p class="style15 style1">تغيير كلمة السر</p>
  <form action="" method="POST">
    <table width="43%" border="0" align="center" ceallpadding="3" bgcolor="#FFFFFF" class="block">
      <tr bgcolor="#D7D769">
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr bgcolor="#D7D769">
        <td height="24" bgcolor="#EFEFEF"><div align="center">
          <input name="oldpassword" type="password" id="oldpassword5" size="20" />
        </div></td>
        <td bgcolor="#EFEFEF"><div align="center" class="style2"> كلمة السر الحالية</div></td>
      </tr>
      <tr bgcolor="#D7D769">
        <td width="52%" height="29" bgcolor="#EFEFEF"><div align="center">
          <input name="newpassword" type="password" id="newpassword3" size="20">
        </div></td>
        <td width="52%" bgcolor="#EFEFEF"><div align="center" class="style2"> كلمة السر الجديدة</div></td>
      </tr>
    </table>
    <div align="left">
      <div align="center"><br>
        <input name="valider" type="submit" id="valider" value="&#1578;&#1593;&#1583;&#1610;&#1604;" />
      </div>
    </div>
  </form>
  <p>&nbsp;</p>
</div>
<div align="center"></div>
</body>
</html>

<?php }else {





$oldpassword=htmlentities($_POST["oldpassword"]);
$newpassword=htmlentities($_POST["newpassword"]);

include"conn/conversion.php";

$oldpassword=crypter("*78|Jh#&g6+5",$oldpassword);
$newpassword=crypter("*78|Jh#&g6+5",$newpassword);


$Requete31 = "select cin from utilisateurs where `id`='".$idf_m."' and `type`='".$type."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
$cin=$ro[cin];


 $Requete =  "SELECT id FROM utilisateurs WHERE `password`='$oldpassword' and `cin`='$cin' and `type`='".$type."' ;";
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete de changement de mot de passe<br>".mysql_error());
$lignes = mysql_num_rows($result);

if ($lignes<1)
{
 echo"<center><font color=\"#FF0000\"><b>هناك خطأ في كلمة المرور<br>حاول مرة أخرى</b></font><br><br></center>";
}
else
{
$Requete1 =  "UPDATE utilisateurs SET `password`='$newpassword' where `id`='".$idf_m."'  ;";
$result1 = @mysql_query($Requete1,$id) or die ("<br>Probl&egrave;me d'execution de la requete de changement de passe<br>".mysql_error());
 echo"<center><font color=\"#FF0000\"><b> <br></b></font><br><br></center>";

include"aces.php";
 echo"<center><font color=\"#FF0000\"><b> <br></b></font><br><br></center>";

		//echo "<a href=\"c_password.php\">retour</a>"; 

}}


     ?>
	 	 

<?php   }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>
