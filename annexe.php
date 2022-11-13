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


<p align="left">&nbsp;</p>
<p align="center"><h2 align="center">اضافة ملحقة أو مكتب</h2>

</p>
<div align="center">
  <form id="form1" name="form1" method="post" action="">
    <div id="Layer1">
      <div id="background" class="background" style="display: none;"></div>
      <div id="clv_arb" class="clv_arb" style="display: none;"></div>
    </div>
    <table width="75%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        
        <td width="330" bgcolor="#FFFFFF"><div align="center">
          <input name="niveau" type="text" id="niveau" style="" value="Bureau ou annexe" size="35" />
        </div></td>
        <td width="384" bgcolor="#FFFFFF">
	    		  
	    <div align="center">
	      <input name="niveau1" type="text" id="niveau1" style="" value="ملحقة أو مكتب" size="35" dir="rtl" />
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('niveau1')" />				</div></td>
        <td width="253" height="21" bgcolor="#EFEFEF"> <div align="center">اضافة ملحقة أو مكتب</div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">
            <input name="officier" type="text" id="officier" style="" value="officier de l'état civil" size="35" />
        </div></td>
        <td bgcolor="#FFFFFF">
            
          <div align="center">
              <input name="officier1" type="text" id="officier1" style="" value="ضابط الحالة المدنية و صفته" size="35" dir="rtl" />
			  
			  
              <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onclick="showArabicKey('officier1')" /> 
			  
		  </div></td>
        <td height="26" bgcolor="#EFEFEF"><div align="center">ضابط الحالة المدنية و صفته</div></td>
      </tr>
    </table>
    <input name="valider" type="submit" id="valider" value="إضافة"/>
    <p></label>
</p>
    <table width="75%" border="1" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">
      <tr>
        <td width="239" height="23" bgcolor="#CCCCCC"><div align="center">officier de l'état civil</div></td>
        <td width="229" bgcolor="#CCCCCC"><div align="center">Annexe</div></td>
        <td width="261" bgcolor="#CCCCCC"><div align="center"><span class="style19 style39">ضابط الحالة المدنية</span></div></td>
        <td width="200" bgcolor="#CCCCCC"><div align="center">الملحقة</div></td>
        <td width="34" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <?php 

		  
	$Requete3 = "select * from annexe    ";
	
	mysql_query("SET NAMES 'UTF8' ");

$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());


	$row = mysql_fetch_array($result3);
		  
	$table="annexe";
		while($row!="")
	
	   {	
	   $N=$row[id];
	echo"
        <tr>
		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[officier]."</div></td>
		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[annexe]."</div></td>
		  
		  		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[officier_a]."</div></td>

		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[annexe1]."</div></td>
 <td><div align=\"center\"><a href=\"modifier_annexe.php?N=$N&table=$table\"><img src=\"icone/b_edit.PNG\" border=0></div></td>
        </tr>";
	$row = mysql_fetch_array($result3);
	      }
?>
    </table>
    <p>&nbsp;</p>
  </form>
</div>
<p align="center">&nbsp;</p>
<p>
<?php }else
	
{

$niveau=addslashes($_POST["niveau"]);
$niveau1=$_POST["niveau1"];


$officier=addslashes($_POST["officier"]);
$officier1=$_POST["officier1"];


 $Requete = "INSERT INTO `annexe`(`annexe`,`annexe1`,`officier`,`officier_a`) VALUES ('$niveau','$niveau1','$officier','$officier1') ; "; 

mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 
	
	
include"aces1.php";
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";

		echo "<a href=\"annexe.php\">رجوع</a>";

	
  }
  





?>


<?php   }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>
