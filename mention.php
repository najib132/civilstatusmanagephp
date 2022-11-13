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

$bayane=$_SESSION["bayane"];      
$bayane1=$_SESSION["bayane1"];   

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

<style type="text/css">
<!--
.style2 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>


<p align="center" class="style2">اضافة البيانات الهامشية </p>
<div align="center">
  <form id="form1" name="form1" method="post" action="">
    <table width="70%" height="158" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
      <tr>
        <td height="21" bgcolor="#EFEFEF"><div align="center">
          <input name="bayane" type="text" id="bayane" />
        </div></td>
        <td bgcolor="#EFEFEF">
           
			
			     <div align="center">
              <input name="bayane1" type="text" id="bayane1" dir="rtl" />
			  
		 
          
 <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onclick="showArabicKey('bayane1')" />  </div></td>
        <td bgcolor="#FFFFFF"><div align="center" class="style12">
          <div align="right">البيان الهامشي</div>
        </div></td>
      </tr>
      <tr>
        <td width="257" height="24" bgcolor="#EFEFEF"><div align="center">
          <select name="decision" id="decision">
	            <option>----</option>
	  
            <option>Décision judiciaire</option>
            <option>Décision préfectorale</option>
            <option>Décision ministérielle</option>
			            <option>Avis</option>
            </select>
        </div></td>
        <td width="371" bgcolor="#EFEFEF"><div align="center">
          <label>
          <select name="decision1" id="decision1">
            <option>----</option>
            <option>حكم</option>
            <option>قرار عاملي</option>
            <option>مرسوم وزاري</option>
<option>إعلام</option>
          </select>
          </label>
        </div></td>
        <td width="274" bgcolor="#FFFFFF"><div align="center" class="style12">
          <div align="right">نوع القرار</div>
        </div></td>
      </tr>
      <tr>
        <td height="69" bgcolor="#EFEFEF"><div align="center">
            <textarea name="texte" cols="30" rows="4" id="texte"></textarea>
          </div>
            <div align="center"></div></td>
        <td bgcolor="#EFEFEF"><div align="center">
            <label>
            <textarea name="texte1" cols="30" rows="4" id="texte1" dir="rtl"></textarea>
			
		 
          
 <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onclick="showArabicKey('texte1')" />            </label>
          </div>
            <div align="center"></div></td>
        <td bgcolor="#FFFFFF"><div align="center" class="style12">
            <div align="right">النص الذي يكتب في الهامش</div>
        </div>
            <div align="right"></div></td>
      </tr>
      <tr>
        <td class="style12"><div align="right">
          لا
            <input name="variable" type="radio" id="radio" value="0" />
        </div></td>
        <td class="style12"><div align="right">
          <label>
          نعم
          <input name="variable" type="radio" id="variable" value="1" checked="checked" />
          </label>
        </div></td>
        <td><div align="right" class="style12">بيان يغير مضمون النسخة الموجزة</div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <div id="Layer1">
            <div id="background" class="background" style="display: none;"></div>
            <div id="clv_arb" class="clv_arb" style="display: none;"></div>
          </div>
          <input name="valider" type="submit" id="valider" value="إضافة"/>
        </div></td>
      </tr>
    </table>
    <p>
      </label>
    </p>
    <table width="70%" border="1" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">
      <tr>
        <td width="349" height="23" bgcolor="#CCCCCC"><div align="center" class="style12">النص الذي يكتب في الهامش</div></td>
        <td width="181" bgcolor="#CCCCCC"><div align="center" class="style12">نوع القرار</div></td>
        <td width="200" bgcolor="#CCCCCC"><div align="center" class="style12">البيان الهامشي</div></td>
        <td width="35" bgcolor="#CCCCCC"><div align="center" class="style12">تعديل</div></td>
      </tr>
      <?php 

		  
	$Requete3 = "select * from mention order by id asc    ";
	
	mysql_query("SET NAMES 'UTF8' ");

$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());


	$row = mysql_fetch_array($result3);
		  
	$table="bayane";
		while($row!="")
	
	   {	
	   $N=$row[id];
	echo"
        <tr>
 		  <td><div align=\"left\" class=\"Style9\">".$row[texte1]."</div></td>

		  <td><div align=\"left\" class=\"Style9\">".$row[decision1]."</div></td>
		  		  <td><div align=\"left\" class=\"Style9\">".$row[bayane1]."</div></td>
				  
				   <td><div align=\"center\"><a href=\"modifier_mention.php?N=$N&table=$table\"><img src=\"icone/b_edit.PNG\" border=0></div></td>



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

$bayane=addslashes($_POST["bayane"]);
$bayane1=addslashes($_POST["bayane1"]);


$variable=addslashes($_POST["variable"]);
$texte=addslashes($_POST["texte"]);
$texte1=addslashes($_POST["texte1"]);

$decision=addslashes($_POST["decision"]);
$decision1=addslashes($_POST["decision1"]);


$texte=trim($texte);
$texte1=trim($texte1);

 $Requete = "INSERT INTO `mention`(`bayane`,`bayane1`,`texte`,`texte1`,`decision`,`decision1`,`variable`) VALUES ('$bayane','$bayane1','$texte','$texte1','$decision','$decision1','$variable') ; "; 

mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 
	
	
include"aces1.php";
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";

		echo "<a href=\"mention.php\">رجوع</a>";

	
  }
  





?>


<?php   }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>
