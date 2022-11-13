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


$deces_naissance=$_GET["deces_naissance"];
$annee=$_GET["annee"];
$partie=$_GET["partie"];

?>



<?php    

   function count_files($dir)
    {
    $num = 0;
     
    $dir_handle = opendir($dir);
    while($entry = readdir($dir_handle))
    if(is_file($dir.'/'.$entry))
    $num++;
    closedir($dir_handle);
     
    return $num;
    }
    ?>

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
<h2 align="center">&nbsp;</h2>

<div align="center">
  <table width="73%">
  <?php 
if($deces_naissance==0)  $fichier="doc_naissance/$annee/$partie"; else  $fichier="doc_deces/$annee/$partie";

  $tableau = scandir($fichier);
  $nbr=count_files($fichier);

  $i=2;
//On boucle
for($i=0 ; $j < ceil($nbr/6) ; $j++ ) { 
  ?>
  
    <tr>
      <td><div align="center"><img src="<?php echo "$fichier/$tableau[$i]" ?>"  width="140" height="170" /></div></td>
      <td><div align="center"><img src="<?php echo "$fichier/".$tableau[$i+1]."" ?>"  width="140" height="170" /></div></td>
      <td><div align="center"><img src="<?php echo "$fichier/".$tableau[$i+2]."" ?>"  width="140" height="170" /></div></td>
      <td><div align="center"><img src="<?php echo "$fichier/".$tableau[$i+3]."" ?>"  width="140" height="170" /></div></td>
      <td><div align="center"><img src="<?php echo "$fichier/".$tableau[$i+4]."" ?>"  width="140" height="170" /></div></td>
      <td><div align="center"><img src="<?php echo "$fichier/".$tableau[$i+5]."" ?>"  width="140" height="170" /></div></td>
    </tr>
<?php $i=$i+6; }	?>  
</table>
</div>
<p>



<?php   }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>
