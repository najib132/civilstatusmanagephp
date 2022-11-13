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
if ($permission==securite2($tim2)) { include("div.php");  

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

 $code = addslashes($_GET["code"]);
 $annee_declaration = addslashes($_GET["annee_declaration"]);
$type = addslashes($_GET["type"]);

$table = addslashes($_GET["table"]);
$partie = addslashes($_GET["partie"]);


?>



<?php
$valider=$_POST["valider"];
if ($valider!="تحميل الرسم الأصلي") { ?>



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

<body> 
<p align="center">&nbsp;</p>
<form name="formulaire_envoi_fichier" enctype="multipart/form-data" method="post" action="">
  <div align="center">
    <p>
      <label></label></p>
    <table width="468">
      <tr>
        <td><fieldset style="width:400px">
          <legend class="style39" align="right">تحميل رسم 
          <?php if($table=="naissance") echo"الولادة"; else echo"الوفاة"; ?>
الأصلي (SCAN) </legend>
          <table width="400">
            <tr>
              <td height="80" class="style39"><div align="center">
                  <p>
                    <input name="fichier_choisi" type="file" id="fichier_choisi">
                  </p>
                <p class="style40">4Mo و لايتعدى JPG : النوع</p>
              </div>
                  <div align="right">
                    <label></label>
                </div></td>
            </tr>
          </table>
              <p align="center">
              <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
              <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
              <input name="valider" type="submit" id="valider" value="تحميل الرسم الأصلي"/>
            </p>
            </fieldset></td>
      </tr>
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

if($typeFichier!="image/jpeg" || $poidsFichier > 7000000)
{
echo "<font color=#FF0000><div align=\"center\"><span class=\"style9\"><b>هناك خطأ أثناء تحميل الرسم تأكد من نوعية الصورة ووزنها </b></span><BR></font>";

}

else
{




//on v&eacute;rifies que le champ est bien rempli:
	
	//chemin qui m&egrave;ne au dossier qui va contenir les fichiers uplaod:
//$chemin="../BTP/";
	//$chemin = "C:\Program Files\EasyPHP1-8\www/" ;
	
	if(copy($nomTemporaire, $chemin.$nomFichier))
{
   $y=".jpg";
   
  $pj=$code; 


 $voo="doc_$table/$annee_declaration/$partie/$pj$y";
		if (file_exists($voo)==TRUE) unlink($voo);
		

      	   rename("$chemin"."$nomFichier", "$chemin"."$voo");
		   

		   
		   $Requete =  "UPDATE $table SET `pj`='$pj' WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


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

