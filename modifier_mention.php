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
if ($valider!="تعديل") { ?>

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
.style1 {font-size: 18px}
-->
</style>
</head>


<p align="left">&nbsp;</p>
<p align="center">&nbsp;</p>
<div align="center">
  <form id="form1" name="form1" method="post" action="">
    <div align="center">
      <div id="Layer1">
        <div id="background" class="background" style="display: none;"></div>
        <div id="clv_arb" class="clv_arb" style="display: none;"></div>
      </div>
      <table width="70%" height="158" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td height="21" bgcolor="#EFEFEF"><div align="center">
                  <?php 
		
				  $N=$_GET["N"];

		  
	$Requete3 = "select * from mention where `id`='".$N."'    ";
	
	mysql_query("SET NAMES 'UTF8' ");

$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());


	$row = mysql_fetch_array($result3);
echo $row[bayane];
		
		?>
              </div></td>
              <td bgcolor="#EFEFEF"><div align="center">
                <?php  	echo $row[bayane1];
?>
              </div>        </td>
              <td bgcolor="#FFFFFF"><div align="center" class="style12 style1">
                  <div align="right">البيان الهامشي</div>
              </div></td>
            </tr>
            <tr>
              <td width="257" height="24" bgcolor="#EFEFEF"><div align="center">
                  <select name="decision" id="decision">
                    <option><?php echo $row[decision]; ?></option>
                    <option>----</option>
                    <option>Jugement</option>
                    <option>Décision préfectorale</option>
                    <option>Décision ministérielle</option>
                    <option>Avis</option>
                  </select>
              </div></td>
              <td width="372" bgcolor="#EFEFEF"><div align="center">
                  <label>
                  <select name="decision1" id="decision1">
                    <option><?php echo $row[decision1]; ?></option>
                    <option>----</option>
                    <option>حكم</option>
                    <option>قرار عاملي</option>
                    <option>مرسوم وزاري</option>
                    <option>إعلام</option>
                  </select>
                  </label>
              </div></td>
              <td width="212" bgcolor="#FFFFFF"><div align="center" class="style12 style1">
                  <div align="right">نوع القرار</div>
              </div></td>
            </tr>
            <tr>
              <td height="69" bgcolor="#EFEFEF"><div align="center">
                  <textarea name="texte" cols="40" rows="7" id="texte"><?php echo $row[texte]; ?></textarea>
                </div>
                  <div align="center"></div></td>
              <td bgcolor="#EFEFEF"><div align="center">
                  <label>
                  <textarea name="texte1" cols="40" rows="7" id="texte1" dir="rtl"><?php echo $row[texte1]; ?></textarea>
                  <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onclick="showArabicKey('texte1')" /> </label>
                </div>
                  <div align="center"></div></td>
              <td bgcolor="#FFFFFF"><div align="center" class="style12 style1">
                  <div align="right">النص الذي يكتب في الهامش</div>
              </div>
                  <div align="right" class="style1"></div></td>
            </tr>
            <tr>
              <td class="style12"><div align="right" class="style1"> لا
                <input name="variable" type="radio" id="radio" value="0" />
              </div></td>
              <td class="style12"><div align="right" class="style1">
                  <label> نعم
                    <input name="variable" type="radio" id="variable" value="1" checked="checked" />
                  </label>
              </div></td>
              <td><div align="right" class="style12 style1">بيان يغير مضمون النسخة الموجزة</div></td>
            </tr>
            <tr>
              <td colspan="3"><div align="center">
                  <input name="valider" type="submit" id="valider" value="تعديل" />
              </div></td>
            </tr>
      </table>
    </div>
      <p>&nbsp;</p>
  </form>
</div>
<p align="center">&nbsp;</p>
<p>
<?php }else
	
{


$texte=addslashes($_POST["texte"]);
$texte1=addslashes($_POST["texte1"]);

$decision=addslashes($_POST["decision"]);
$decision1=addslashes($_POST["decision1"]);

$N=$_GET["N"];

$texte=trim($texte);
$texte1=trim($texte1);

$variable=addslashes($_POST["variable"]);



$Requete="UPDATE `mention` SET  `texte`='$texte',`texte1`='$texte1', `decision`='$decision', `decision1`='$decision1', `variable`='$variable' where `id`='$N' ;"; 
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
