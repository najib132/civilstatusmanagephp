<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"conn/connexion.php";

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
.style2 {font-size: 18px}
-->
</style>
<div align="center">
  <h2>تغيير كلمة سر رئيس المصلحة</h2>
  <form action="" method="POST">
    <table width="33%" border="0" align="center" ceallpadding="3" bgcolor="#FFFFFF" class="block">
      <tr bgcolor="#D7D769">
        <td colspan="2" bgcolor="#EFEFEF"><div align="center"></div></td>
      </tr>
      <tr >
        <td bgcolor="#FFFFFF"><input name="oldlogin" type="password" id="oldlogin" size="30" maxlength="20" /></td>
        <td height="29" align="right" bgcolor="#EFEFEF"><font color="#000000" class="style2">اسم المستعمل الحالي</font></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><input name="oldpassword" type="password" id="oldpassword5" size="30" maxlength="20" /></td>
        <td height="29" align="right" bgcolor="#EFEFEF"><span class="style2">كلمة السر الحالية</span></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><input name="newlogin" type="password" id="newlogin" size="30" maxlength="20" /></td>
        <td height="29" bgcolor="#EFEFEF"><div align="right" class="style2">اسم المستعمل الجديد</div></td>
      </tr>
      <tr bgcolor="#D7D769">
        <td width="51%" bgcolor="#FFFFFF"><input name="newpassword" type="password" id="newpassword3" size="30" maxlength="20"></td>
        <td width="49%" height="29" bgcolor="#EFEFEF"><div align="right"><span class="style2">كلمة السر الجديدة</span></div></td>
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

$oldlogin=htmlentities($_POST["oldlogin"]);
$newlogin=htmlentities($_POST["newlogin"]);

include"conn/conversion.php";

$oldpassword=crypter("*78|Jh#&g6+5",$oldpassword);
$newpassword=crypter("*78|Jh#&g6+5",$newpassword);


 $Requete =  "SELECT pays FROM administration WHERE `password`='$oldpassword' and `login`='$oldlogin' ;";
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete de changement de mot de passe<br>".mysql_error());
$lignes = mysql_num_rows($result);

if ($lignes<1)
{
 echo"<center><font color=\"#FF0000\"><b>Login et/ou mot de passe incorrect<br>Veuillez ressayer</b></font><br><br></center>";
}
else
{
$Requete1 =  "UPDATE administration SET `password`='$newpassword', `login`='$newlogin'  ;";
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
