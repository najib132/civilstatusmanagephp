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
if ($permission==securite2($tim2)) {

$type=$_GET["type"];

if($type==1) include("div.php");  



?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLiees.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>


<?php  ///////////////////////////MISE A JOUR DONNES PERE

 $partie = addslashes($_GET["partie"]);
 $code = addslashes($_GET["code"]);
 $annee_declaration = addslashes($_GET["annee_declaration"]);
$type = addslashes($_GET["type"]);

$table = addslashes($_GET["table"]);

if($table=="deces") $deces_naissance=1; else $deces_naissance=0;


?>



<?php
$valider=$_POST["valider"];
if ($valider!="تحميل") { ?>



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
.style2 {font-size: 16px}
.style3 {font-size: 16}
-->
</style>
</head>

<body> 
<p align="center">&nbsp;</p>
<form name="formulaire_envoi_fichier" enctype="multipart/form-data" method="post" action="">
  <div align="center">
    <p>
      <label></label></p>

		
	<fieldset style="width:550px">
          <legend align="right" class="style39 style2"> تحميل  وثائق متعلقة برسم 
          <?php if($table=="naissance") echo"الولادة"; else echo"الوفاة"; ?>
          </legend>

          <p>
                    <input name="fichier_choisi" type="file" id="fichier_choisi">
                    <span class="style40">4Mo  لايتعدى   </span></p>
					
					
                <p class="style40">
                  <input name="titre" type="text" id="titre" dir="rtl" size="30">
                  </label>
                عنوان الوثيقة</p>
<div align="right">
                    <label></label>
                    <div align="center">
                      <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
                      <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
                      <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
                      <input name="valider" type="submit" id="valider" value="تحميل"/>
                    </div>
    </div>
    </fieldset>
		</td>

        <table width="580" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="19%" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
            <td width="67%" bgcolor="#EFEFEF"><div align="center"><span class="style40">عنوان الوثيقة</span></div></td>
            <td width="9%" bgcolor="#EFEFEF"><div align="center"></div></td>
            <td width="5%" bgcolor="#EFEFEF"><div align="center">معاينة</div></td>
          </tr>
		  
		  
		  
  <?php 
  

$Requete3 = "select * from pj WHERE  `code`='".$code."' and `partie`='".$partie."' and `annee_declaration`='".$annee_declaration."' and  `deces_naissance`='".$deces_naissance."' order by `date` desc  ";

		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	
	$row3 = mysql_fetch_array($result3);

  
		while($row3!="")
	
	   {
	   $vo="$row3[pj]";	

$N=$row3[id];		  
		$tmp=explode(".",$row3[pj]);
		
		$hhh=$tmp[1];
		$mm=$row3[pj];
		
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);

	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\" size =22>".$row3[titre]."</div></td>
  <td><div align=\"center\"><a href=\"crypt.php?N=$N&mm=$mm&type=$type\"><img src=\"icone/b_drop.PNG\" border=0></div></td>
 <td><div align=\"center\"><a href=\"$vo\"><img src=\"icone/44.PNG\" border=0 height=27></div></td>

        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
    </table>
    <p><br>
      <br>
    </p>
  </div>
</form>
<?php }else
	
{


if(!empty($_FILES["fichier_choisi"]["name"]))
{
	//nom du fichier choisi:	
	$nomFichier    = $_FILES["fichier_choisi"]["name"];
//nom temporaire sur le serveur:
	$nomTemporaire = $_FILES["fichier_choisi"]["tmp_name"];
	//type du fichier choisi:
	//poids en octets du fichier choisit:
	$poidsFichier  = $_FILES["fichier_choisi"]["size"];
	//code de l'erreur si jamais il y en a une:
	$codeErreur    = $_FILES["fichier_choisi"]["error"];


 $typeFichier   = $_FILES["fichier_choisi"]["type"];

if($poidsFichier > 7000000)
{

echo "<font color=#FF0000><div align=\"center\"><span class=\"style9\"><b>هناك خطأ أثناء تحميل الرسم تأكد من نوعية الصورة ووزنها </b></span><BR></font>";

}

else
{

if($table=="deces") $deces_naissance=1; else $deces_naissance=0;


	 	  	$Requete3 = "select id from pj where `deces_naissance`='".$deces_naissance."' order by id desc ";
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);
$vo=$row3[id]+1;



//on v&eacute;rifies que le champ est bien rempli:
	
	//chemin qui m&egrave;ne au dossier qui va contenir les fichiers uplaod:
//$chemin="../BTP/";
	//$chemin = "C:\Program Files\EasyPHP1-8\www/" ;
	
	if(copy($nomTemporaire, $chemin.$nomFichier))
{

		$tmp=explode(".",$nomFichier);
		$heure=$tmp[1];
   $y=".$heure";


 $voo="doc_$table/$annee_declaration/$code-$vo$y";
		if (file_exists($voo)==TRUE) unlink($voo);
		

      	   rename("$chemin"."$nomFichier", "$chemin"."$voo");
		   
		   		   $pj="$code";
				   
$titre=$_POST["titre"];
$date=date("Y-m-d");

		   
$Requete =  "INSERT INTO `pj` (`code`,`idf`,`pj`,`annee_declaration`,`date`,`titre`,`deces_naissance`,`partie`) 
VALUES ('$code','$idf_m','$voo','$annee_declaration','$date','$titre','$deces_naissance','$partie');"; 
		mysql_query("SET NAMES 'UTF8' ");

	$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 	


   include"aces1.php";
   
	//	echo "<div align=\"center\"><a href=\"recherche.php?type=$type\">retour</a>";

				}
		
		
		}
}//fin if



}
?>
</div>
</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

