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


 $acces=$_GET["acces"];
 $type=$_GET["type"];
 
 if($acces=="officier") 
 {
 $permet=securite2($tim2);
include"div.php"; 
 } 
 else if($acces=="root") 
 {
 $permet=securite3($tim3);
 include"div_root.php"; 

 }
 
 
 if ($permission==$permet) {   


$N=$_GET["N"];

?>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      




</head>
<body>
<div>
  <div id="contenu1">
  <div align="center">
   <table width="658" height="247">
     <tr>
       <td height="23" colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
     </tr>
     <tr>
       <td height="23" colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
       </tr>
     <tr>
       <td height="21" colspan="2" bgcolor="#EFEFEF"><div align="right">
         <?php 
   if($_GET["envoi"]!=1)
   { 
  $Requete =  "UPDATE message SET `valider`=1 WHERE `id`='$N' ;";
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution kkkkkkkde la requete d'identification<br>".mysql_error()); 
}
  	
	$Requete =  "SELECT * FROM  message WHERE  `id`='".$N."' ;";
	
						   mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$lignes = mysql_num_rows($result);

	$ro = mysql_fetch_array($result);
	

 if($_GET["envoi"]==1) 
 
{ 

$Requete31 = "select nom, prenom from utilisateurs where `id`='".$ro[nom]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);

 echo $rox[prenom]; echo " "; echo $rox[nom];
 }
 
 
  else 
  
  {

$Requete31 = "select nom, prenom from utilisateurs where `id`='".$ro[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);

 echo $rox[prenom]; echo " "; echo $rox[nom];

  
  }
  
  ?>
         : <?php 
	   
	   if($_GET["envoi"]==1) echo "المرسل اليه"; else echo "المرسل"; 
	   
	   ?>
       </div></td>
     </tr>
     <tr>
       <td height="21" colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
       </tr>
     <tr>
       <td height="21" colspan="2" bgcolor="#EFEFEF"><div align="right"><?php 
	   
	   include"conn/conversion.php";
	   echo convertDate_f($ro['date']); echo" "; echo $ro[h]; ?> H: تاريخ </div></td>
     </tr>
     <tr>
       <td height="21" colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
     </tr>
     <tr>
       <td width="128" height="24" bgcolor="#EFEFEF"><div align="right">PJ : <a href="<?php  echo $vo="doc/$ro[pj]"; ?>"><img src="icone/34.PNG" width="53" height="40" border="0" /></a></div></td>
   <?php if($ro[pj]!="") {	 ?>    
	   <td width="518" bgcolor="#EFEFEF"><div align="right">موضوع الرسالة : <?php echo $ro[objet]; ?> </div></td>
     
	 <?php } ?>
	 </tr>
     <tr>
       <td height="24" colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
     </tr>
     <tr>
       <td height="24" colspan="2" bgcolor="#EFEFEF"><div align="right">الرسالة  : <?php echo   $ro[message];   
 ?></div></td>
     </tr>
     <tr>
       <td height="21" colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
     </tr>
   </table>
 </div>
 <p align="center">&nbsp;</p>
 <p>&nbsp;</p>
</div>
</div>


	 	 



</body></html>
<?php }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>
