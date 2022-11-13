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
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<?php 

// $_SERVER['DOCUMENT_ROOT'];
$web=$_GET["web"];
 $tariq=$_SERVER['SCRIPT_FILENAME'];

$findme="sauvegarde.php";

 $pos = strpos($tariq, $findme);

if($pos > 26) echo'

<style type=text/css>
<!--
.style1 {font-size: 18px}
-->
</style>
<p align=center class=style1>لايمكن تحميل قاعدة البيانات لأن الملفات غير موضوعة بشكل صحيح</p>
<p align=center class=style1> C:/  في wamp قم بتثبيت برنامج </p>
<div align=center></div>
';

else  {

?>

   <style type="text/css">
<!--
.style10 {font-size: 18px}
.style12 {font-size: 18px; color: #000000; }
-->
   </style>

    <p align="center" class="style10">إذا وجدت صعوبات أثناء التحميل قم بتحميل قاعدة البيانات الموجودة في</p>
    <p align="center" class="style10"> C:\wamp\bin\mysql\mysql5.5.8\data\civil</p>
    <p align="center" class="style10"> (SCAN ) وكذا  الملفات الآتية التي يوجد بها الرسوم الآصلية</p>
    <p align="center" class="style10">C:\wamp\www\doc_naissance</p>
    <p align="center" class="style10">و</p>
    <p align="center" class="style10">C:\wamp\www\doc_deces</p>
 <p align="center">&nbsp;</p>

 
 
 
 
 
 <form id="form1" name="form1" method="post" action="">
  <div align="center"> 
    <p align="center" class="style10">
      إبدأ التحميل 

 
        <?php
  
$submit=htmlentities($_POST["submit"]);

 if($submit=="----------OK----------")
 {

function copy_dir($dir2copy,$dir_paste) 
{    
	if (is_dir($dir2copy)) 
	{   
           if ($dh = opendir($dir2copy)) 
	   {                     
             while(($file = readdir($dh)) !== false) 
	     {                          
                if (!is_dir($dir_paste)) mkdir($dir_paste,777);                           
		if(is_dir($dir2copy.$file) && $file != '..'  && $file != '.') 
                copy_dir ( $dir2copy.$file.'/' , $dir_paste.$file.'/');                                     
		                elseif($file != '..'  && $file != '.') copy ( $dir2copy.$file , $dir_paste.$file );
		            }
					closedir($dh);
		        }               
		    }    
		}

include"conn/conversion.php";
  if(file_exists("sauvegarde")) advancedRmdir("sauvegarde");
   if(file_exists("sauvegarde.zip")) unlink("sauvegarde.zip");
   $fp=mkdir("sauvegarde"); //OUVRE LE FICHIER compteur.txt


$dir1copy="../../bin/mysql/mysql5.5.8/data/$base/";
$dir_paste1="sauvegarde/$base/";

copy_dir($dir1copy,$dir_paste1);

require_once("../../apps/phpmyadmin3.3.9/libraries/zip.lib.php");       // librairie zip.lib, que l'on trouve avec phpmyadmin

$fichier_zip = "sauvegarde.zip";         // nom du fichier zip que l'on veut
$zip= new zipfile;
$path = "sauvegarde";            // repertoire que l'on veut zipper

set_time_limit (1000);            // a parametrer selon vos souhaits

function zipDir($path,&$zip)
{
   
   if (!is_dir($path)) return;
   
   if (!($dh = @opendir($path))) {
      echo("<b>ERREUR: Une erreur s'est produite sur ".$path."</b><br />");
      return;
   }
   while ($file = readdir($dh)) {
      
      if ($file == "." || $file == "..") continue; // Throw the . and .. folders
      if (is_dir($path."/".$file)) { // Recursive call
         zipDir($path."/".$file,$zip,$i);   
      } elseif (is_file($path."/".$file)) { // If this is a file then add to the zip file
         
         $zip->addFile(file_get_contents($path."/".$file),$path."/".$file);
         //echo('fichier '.$path.'/'.$file.' ajout&eacute;<br>');
      }
      }
}

zipDir($path,$zip);
$filezipped=$zip->file();       // On recupere le contenu du zip dans la variable $filezipped
$open = fopen($fichier_zip, "w");    // On la sauvegarde dans le meme repertoire que les fichiers a zipper
fwrite($open, $filezipped);
fclose($open);



			echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";
		echo "<div align=\"center\"><a href=\"sauvegarde.zip\">انقرهنا لتحميل قاعدة البيانات</a>";
 

}
?>
      
<input name="submit" type="submit" id="submit" value="----------OK----------" />
    </p>
    <p align="center" class="style12">ملاحظة : التحميل لايضم الرسوم الأصلية نظرا لحجمها : قم بتحميلها بطريقة كلاسيكية</p>
  </div>
  </label>
</form>
 <p>

 <?php } ?>
 
 
 
    <?php }else{ ?>
   Vous n'avez pas le droit de voir cette page
   <?php } ?>
