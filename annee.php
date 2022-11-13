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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml" lang="fr"><head>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      


<?php 

$type=$_GET["type"]; 

if($type==0) {
?>

<?php
$valider=$_POST["valider"];
if ($valider!="إضافة الملف الجديد الموافق للسنة الجديدة") { ?>



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
#Layer1 {
	position:absolute;
	left:30px;
	top:63px;
	width:50px;
	height:31px;
	z-index:1;
}
body {
	background-color: #FFFFFF;
}
.style30 {
	color: #FF0000;
	font-size: 24px;
}
-->
</style>
</head>

<body>
<div align="center"> 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <script type="text/javascript">

function Validerfrm()
{

var annee = document.form1.annee.value;
		
		
			if(annee == "" || isNaN(annee)) 
		{ 
        alert ('Vérifier le Champs année'); 
        document.form1.annee.focus(); 
        return false; 
    	} 




	
				
 }
		
		
///////////////////////////////////

    </script>

  
  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return Validerfrm()">
    <p align="center"> </p>
    <table width="72%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">

      <tr bgcolor="#FFFF66">
        <td width="476" height="23" bgcolor="#CCCCCC"><div align="center">
          <label>
          <input name="annee" type="text" id="annee" maxlength="4" value="<?php echo date("Y");?>" />
          </label>
        </div></td>
        <td width="466" bgcolor="#CCCCCC"><input name="valider" type="submit" id="valider" value="إضافة الملف الجديد الموافق للسنة الجديدة"/></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="330" border="1" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">
      <tr>
        <td width="143" height="23" bgcolor="#CCCCCC"><div align="center">السنة</div>
            <div align="center"></div></td>
        <td width="160" bgcolor="#CCCCCC"><div align="center">فتح سجل الوفيات</div></td>
        <td width="122" bgcolor="#CCCCCC"><div align="center">فتح سجل الولادات</div></td>
      </tr>
      <?php 

		  
	$Requete3 = "select * from annee where `type`=0 order by annee desc    ";
	
	mysql_query("SET NAMES 'UTF8' ");

$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());


	$row = mysql_fetch_array($result3);
		  
	$table="annexe";
		while($row!="")
	
	   {	
	   $N=$row[id];
	echo"
        <tr>
		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[annee]."</div></td>
			  <td><div align=\"center\"><a href=\"registre.php?deces_naissance=1&annee=$row[annee]\"><img src=\"icone/k.PNG\" border=0 width=33 height=33></div></td>
			  <td><div align=\"center\"><a href=\"registre.php?deces_naissance=0&annee=$row[annee]\"><img src=\"icone/index.JPG\" border=0 width=33 height=33></div></td>
		  

        </tr>";
	$row = mysql_fetch_array($result3);
	      }
?>
    </table>
    <p>&nbsp;</p>

    <div align="center"></div>
  </form>
  </div>
</body>
</html>


<?php }else
	
{

$annee=$_POST["annee"];

while($annee<date("Y")+1)
{
 $partition=" $partition PARTITION P$annee VALUES LESS THAN($annee), ";
 
 /////////////////////////////////CREATIOn DOSSIER//////////////////////
 
 $fichier="doc_naissance/$annee"; //OUVRE LE FICHIER compteur.txt
 $fichier1="doc_deces/$annee"; //OUVRE LE FICHIER compteur.txt
 
if((file_exists($fichier)==FALSE))  $fp=mkdir("doc_naissance/$annee");
if((file_exists($fichier1)==FALSE))  $fp1=mkdir("doc_deces/$annee");


//////////////////////////////

 $Req =  "SELECT annee  FROM `annee` WHERE `annee`='".$annee."' and `type`=0   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$nn=mysql_num_rows($res);
if($nn==0) 
{

$Requete =  "INSERT INTO `annee`(`annee`) 
 VALUES ('$annee');"; 
$result = @mysql_query($Requete,$id) or die ("<br>Problme d'execution de la requete <br>".mysql_error()); 
}
 
$annee++;


}

$partition="$partition PARTITION P$annee VALUES LESS THAN MAXVALUE ";
//echo $partition;

//////////////////////////////COmmande externe////////////////

$Req="
ALTER TABLE naissance PARTITION BY RANGE(annee_declaration)
(
$partition
)
";

$result = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());


$Req="
ALTER TABLE deces PARTITION BY RANGE(annee_declaration)
(
$partition
)
";

$result = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());



$Req="
ALTER TABLE mention_p PARTITION BY RANGE (YEAR(date))
(
$partition
)
";

$result = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution vvvvde la requete <br>".mysql_error());










/*

$annee=$_POST["annee"];


while($annee<date("Y"))
{
 $partitiony=" $partitiony PARTITION P$annee VALUES LESS THAN($annee), ";
 /////////////////////////////////CREATIOn DOSSIER//////////////////////
  
$annee=$annee+4;

}


$partitiony="$partitiony PARTITION P$annee VALUES LESS THAN MAXVALUE ";


 $Req="
ALTER TABLE attestation PARTITION BY RANGE (YEAR(date))
(
$partitiony
)
";

$result = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution 123de la requete <br>".mysql_error());


*/




include"aces1.php";


}


?>

<?php }

if($type==1) {
?>












<?php
$valider=$_POST["valider"];
if ($valider!="إضافة السنة الهجرية") { ?>





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
#Layer1 {
	position:absolute;
	left:30px;
	top:63px;
	width:50px;
	height:31px;
	z-index:1;
}
body {
	background-color: #FFFFFF;
}
.style30 {
	color: #FF0000;
	font-size: 24px;
}
-->
</style>
</head>

<body>
<div align="center"> 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <script type="text/javascript">

function Validerfrm()
{

var annee = document.form1.annee.value;
		
		
			if(annee == "" || isNaN(annee)) 
		{ 
        alert ('Vérifier le Champs année'); 
        document.form1.annee.focus(); 
        return false; 
    	} 




	
				
 }
		
		
///////////////////////////////////

    </script>

  
  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return Validerfrm()">
    <p align="center"> </p>
    <table width="72%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">

      <tr bgcolor="#FFFF66">
        <td width="476" height="23" bgcolor="#CCCCCC"><div align="center">
          <label>
          <input name="annee" type="text" id="annee" maxlength="4" value="" />
          </label>
        </div></td>
        <td width="466" bgcolor="#CCCCCC"><input name="valider" type="submit" id="valider" value="إضافة السنة الهجرية"/></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="370" border="1" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">
      <tr>
        <td height="23" bgcolor="#CCCCCC"><div align="center">السنة الهجرية  </div>          <div align="center"></div></td>
      </tr>
      <?php 

		  
		  		$page = isset($_GET['page']) ? $_GET['page'] : ''; 

	$Requete3 = "select annee from annee where `type`='".$type."'    ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());


// Variable codebre d'enreg par page
$limit=30;
if($debut==""){$debut=0;}
$debut=$page*$limit;
// Compte le codebre de champ
$nb_total=mysql_num_rows($result3);

$limite=mysql_query("$requete limit $debut,$limit");



// Affiche le page par page avec ses liens
if ($page>0) {
$precedent=$page-1;
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&type=$type\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&type=$type\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

	$Requete3 = "select annee from annee where `type`='".$type."' order by annee desc  $limit_str  ";
	
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());


	$row = mysql_fetch_array($result3);
		  
		while($row!="")
	
	   {	

	echo"
        <tr>
		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[annee]."</div></td>

		  

        </tr>";
	$row = mysql_fetch_array($result3);
	      }




?>
    </table>
    <p>&nbsp;</p>

    <div align="center"></div>
  </form>
  </div>
</body>
</html>


<?php }else
	
{

$annee=$_POST["annee"];


//////////////////////////////

 $Req =  "SELECT annee  FROM `annee` WHERE `annee`='".$annee."' and `type`=1   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$nn=mysql_num_rows($res);
if($nn==0) 
{

$Requete =  "INSERT INTO `annee`(`annee`, `type`) 
 VALUES ('$annee','1');"; 
$result = @mysql_query($Requete,$id) or die ("<br>Problme d'execution de la requete <br>".mysql_error()); 

include"aces1.php";

}
 


}

?>

<?php } ?>





</div>
</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>


