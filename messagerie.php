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




?>


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      


<?php 
$valider=$_POST["valider"];
if ($valider!="ارسل") { ?>



</head>
<body>
<div>
  <div align="center"><?php 
 
 $pag=$_GET["pag"];
 
 if($pag==1)
 {
 
 ?>
    </br>
    
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return Validerfrm()">
  <table width="45%" border="0" bgcolor="#FFFFFF">
      <tr><td colspan="2" align="center"><h2> رسالة جديدة</h2></td></tr>
      <tr>
        <td colspan="2" style="color:#000; font-weight:200" bgcolor="#FFFFFF" align="right"><p class="style34">انتباه : اسم الملف لا ينبغي ان يحتوي على رموز</p>
          <p> ........ المرجو الانتظار : الارسال قد يستغرق بضع دقائق </p>          
          </td>
      </tr>
      <tr>
        <td colspan="2"><p>&nbsp;</p>
        </td>
      </tr>
      
      <tr>
        <td align="right"><select name="nom" id="nom" >
          <?php  
					  
					  $Requete3t = "select nom,prenom,id  from utilisateurs where `id`!='".$idf_m."' ";
					  
					   mysql_query("SET NAMES 'UTF8' ");

					  
	$result3t = @mysql_query($Requete3t,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$nt=mysql_num_rows($result3t);

for($i=0;$i<$nt;$i++)
{
	$rowt = mysql_fetch_array($result3t);
//echo $idr;
?>
          <option value="<?php echo $rowt[id];  ?>"><?php echo $rowt[nom]; echo" "; echo $rowt[prenom]; } ?></option>
        </select></td>
        <td align="right" bgcolor="#EFEFEF"></span>المرسل اليه</td>
      </tr>
      <tr>
        <td align="right"><input name="objet" type="text" id="objet" size="40" maxlength="30" dir="rtl" /></td>
        <td  align="right" bgcolor="#EFEFEF">موضوع الرسالة*</td>
      </tr>
      <tr>
        <td align="right"><input type="file" name="fichier"  /></td>
        <td  align="right" bgcolor="#EFEFEF">الوثائق المرافقة</td>
      </tr>
      <tr>
        <td align="right"><textarea name="message" cols="50" rows="11" id="message" dir="rtl"></textarea></td>
        <td  align="right" bgcolor="#EFEFEF">الرسالة* </td>
      </tr>
      <tr>
        <td width="440"><div align="center"></div></td>
        <td width="153"><label>
          <input name="valider" type="submit" id="Envoyer" value="ارسل" />
        </label></td>
      </tr>
    </table>
    <p>
    <label>
    <div align="left">
    </label>
  </form>

     <?php  } 
   
 if($pag==2)
 {
   
   
   ?>
  <table width="748" border="0">
  <tr><td colspan="5" align="center"><h2> علبة الرسائل</h2></td></tr>
     <tr>
       <th width="57" height="21" bgcolor="#EFEFEF" scope="col">الوثائق المرافقة </th>
       <th width="49" bgcolor="#EFEFEF" scope="col">&nbsp;</th>
       <th width="220" bgcolor="#EFEFEF" scope="col"><div align="center">المرسل</div>         <div align="center"></div></th>
       <th width="210" bgcolor="#EFEFEF" scope="col">الرسالة</th>
       <th width="190" bgcolor="#EFEFEF" scope="col"><div align="center">تاريخ الرسالة</div></th>
      </tr>
     <?php 
	  $page = isset($_GET['page']) ? $_GET['page'] : ''; 

	  
	$Requete3 = "SELECT id from message where `nom`='".$idf_m."'   ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de lagg lecture de la table <br>".mysql_error());

$n=mysql_num_rows($result3);
// Variable nombre d'enreg par page
$limit=20;
if($debut==""){$debut=0;}
$debut=$page*$limit;
// Compte le nombre de champ
// Requete
$limite=mysql_query("$requete limit $debut,$limit");


// Affiche le page par page avec ses liens


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

$Requete3 = "SELECT * from message where `nom`='".$idf_m."' order by `id` desc $limit_str";

									 mysql_query("SET NAMES 'UTF8' ");

$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de lagg lecture de la table <br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

$table="message";
		while($row3!="")
	
	   {
	   
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	   
	   
	   $N=$_GET["N"];
$N=$row3[id];

if($row3[valider]==1) $color="#FFFFCC"; else $color="#FFFFFF";

	   $vo="doc/$row3[pj]";	

if($row3[pj]!="") $lien=" <td><div align=\"center\"><a href=\"$vo\"><img src=\"icone/44.PNG\" border=0 height=27></div></td>";

else $lien="<td><div align=\"center\"></div></td>";


	echo"
        <tr bgcolor=$color>
$lien		
<td><div align=\"left\" class=\"Style9\"><a href=\"detail_message.php?N=$N&acces=$acces\"><img src=\"icone/a.PNG\"></div></td>
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
    
     	  <td><div align=\"center\" class=\"Style9\">".$row3[objet]."</div></td>
	   <td><div align=\"center\" class=\"Style9\">".$row3['date']." ".$row3[h]."H</div></td>
 </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
   </table>
   <p>الصفحة
     <?php 
		  
		  	  if($n>$limit)
		  {
		$po=1;  
		  	echo"
 <a href=\"messagerie.php?pag=2&acces=$acces\">".$po."";

			  
			
	$pp=ceil($n/$limit)-1;
	  for($k=1;$k<$pp+1;$k++)
{
$oo=$k+1;
	echo"
 <a href=\"messagerie.php?pag=2&page=$k&acces=$acces\">".$oo."";

}
}
	

	
	
			  ?>
     
     
       <?php  }
   
   
 if($pag==3)
 
 {
 

   
    ?>
   </p>
   <table width="748" border="0"><tr><td colspan="5" align="center"><h2>  الرسائل المرسلة</h2></td></tr>
     <tr>
       <th width="54" bgcolor="#EFEFEF" scope="col">الوثائق المرافقة</th>
       <th width="53" bgcolor="#EFEFEF" scope="col"><div align="center"></div>
        <div align="center"></div></th>
       <th width="218" bgcolor="#EFEFEF" scope="col">المرسل اليه</th>
       <th width="216" bgcolor="#EFEFEF" scope="col">الرسالة</th>
       <th width="185" bgcolor="#EFEFEF" scope="col"><div align="center">تاريخ الرسالة</div></th>
     </tr>
     <?php 
	  $page = isset($_GET['page']) ? $_GET['page'] : ''; 

	  
	$Requete3 = "SELECT id from message where `idf`='".$idf_m."'  ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de lagg lecture de la table <br>".mysql_error());

$n=mysql_num_rows($result3);
// Variable nombre d'enreg par page
$limit=20;
if($debut==""){$debut=0;}
$debut=$page*$limit;
// Compte le nombre de champ
// Requete
$limite=mysql_query("$requete limit $debut,$limit");


// Affiche le page par page avec ses liens


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

$Requete3 = "SELECT * from message where `idf`='".$idf_m."' order by `id` desc $limit_str";

									 mysql_query("SET NAMES 'UTF8' ");

$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de lagg lecture de la table <br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

$table="message";
		while($row3!="")
	
	   {


$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[nom]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);


$N=$row3[id];

	   $vo="doc/$row3[pj]";	

if($row3[pj]!="") $lien=" <td><div align=\"center\"><a href=\"$vo\"><img src=\"icone/44.PNG\" border=0 height=27></div></td>";

else $lien="<td><div align=\"center\"></div></td>";

	echo"
        <tr>
$lien
<td><div align=\"left\" class=\"Style9\"><a href=\"detail_message.php?N=$N&envoi=1&acces=$acces\"><img src=\"icone/a.PNG\"></div></td>
     	  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
	     	  <td><div align=\"center\" class=\"Style9\">".$row3[objet]."</div></td>
	  
	   <td><div align=\"center\" class=\"Style9\">".$row3['date']." ".$row3[h]."H</div></td>
 </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
   </table>
   <p>الصفحة
     <?php 
		  
		  	  if($n>$limit)
		  {
		$po=1;  
		  	echo"
 <a href=\"messagerie.php?pag=3&acces=$acces\">".$po."";

			  
			
	$pp=ceil($n/$limit)-1;
	  for($k=1;$k<$pp+1;$k++)
{
$oo=$k+1;
	echo"
 <a href=\"messagerie.php?pag=3&page=$k&acces=$acces\">".$oo."";

}
}
	

	
	
			  ?> 
     <?php } ?>&nbsp;</p>
 </div>
 </div>
<?php }else
	
{
		
$nom=$_POST["nom"];
$objet=addslashes($_POST["objet"]);
 $message=addslashes($_POST["message"]);
 
 
 
 $date=date("Y-m-d");
 $h=date("H");
	//nom du fichier choisi:	
	$nomFichier    = $_FILES["fichier"]["name"];
//nom temporaire sur le serveur:
	$nomTemporaire = $_FILES["fichier"]["tmp_name"];
	//type du fichier choisi:
	//poids en octets du fichier choisit:
	$poidsFichier  = $_FILES["fichier"]["size"];
	//code de l'erreur si jamais il y en a une:
	$codeErreur    = $_FILES["fichier"]["error"];

	 $typeFichier   = $_FILES["fichier"]["type"];
	 
	 	  	$Requete3 = "SELECT MAX(id) as nbr  FROM message ";
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());

$detail = mysql_fetch_assoc($result3); 

$vo=$detail['nbr']+1;
$vo=md5("$vo");
 $vo= "".$vo."_".$base."";

////////////////////
		$tmp=explode(".",$nomFichier);
		 $heure=$tmp[1];
   $y=".$heure";
  $voo="m$vo".$y."";

   

   include"conn/conversion.php"; 
/////////////////////////////////////////V&eacute;rifier L'existence////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////

$chemin = "doc/" ;


	if($nomFichier!="" &&  copy($nomTemporaire, $chemin.$nomFichier) && $heure!="php")
{
	   //echo $typeFichier;
      	  // rename("$chemin"."$nomFichier", "$chemin"."$voo".$y."");
      	   rename("$chemin"."$nomFichier", "$chemin"."$voo");
$date=date("Y-m-d H:i:s");

	$Requete =  "INSERT INTO `message` (`idf`,`nom`,`objet`,`message`,`date`,`h`,`pj`) 
	
VALUES ('$idf_m','$nom','$objet','$message','$date','$h','$voo');"; 

					   mysql_query("SET NAMES 'UTF8' ");

	$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'executionggg de la requete d'identification<br>".mysql_error()); 	

		echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";

		echo "<div align=\"center\"><span class=\"style9\"><b>تم إرسال الرسالة و الوثيقة المرافقة بنجاح</b></span><BR>";
		echo "<div align=\"center\"><span class=\"style9\"><b>_____________________________</b></span><BR>";
		echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";
   		echo "<div align=\"center\"><span class=\"style9\"><b>_____________________________</b></span><BR>";

		echo "<div align=\"center\"><span class=\"style9\"><b>وزن الوثيقة المرافقة</b></span><BR>";	
   echo rounder($poidsFichier/1000000); echo "Mo";
   
 				echo "<center><a href=\"messagerie.php?pag=1&acces=officier\">رجوع</a></center>";
}	

	if($nomFichier=="")
{

	$Requete =  "INSERT INTO `message` (`idf`,`nom`,`objet`,`message`,`date`,`h`) 
VALUES ('$idf','$nom','$objet','$message','$date','$h');"; 

					   mysql_query("SET NAMES 'UTF8' ");


	$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'executionggg de la requete d'identification<br>".mysql_error()); 	
		echo "<div align=\"center\"><span class=\"style9\"><b>Message envoy&eacute; avec succ&eacute;s</b></span><BR>";
 				echo "<center><a href=\"messagerie.php?pag=1&acces=officier\">retour</a></center>";
}		


}	


?>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

