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
$Submit=$_POST["Submit"];
if ($Submit!="Suppression Multiple") { 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      
  


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
.style21 {font-size: 24px}
.style24 {font-size: 17px}
.style34 {font-size: 16px}
.style35 {font-size: 24px; font-weight: bold; }
-->
</style>
</head>

<body> 
<form name="form1" method="post" action="">

<script language="javascript"> 
<!-- 



function chkall()
{ 
   var taille = document.forms['form1'].elements.length; 
   var element = null; 
   for(i=0; i < taille; i++)
    { 
      element = document.forms['form1'].elements[i]; 
      if(element.type == "checkbox") 
       {
        if(!element.checked)
        {
        element.checked = true; 
        }else{
        element.checked = false; 
        }
       }
    } 
       
} 
//--> 
</script> 

  <p align="center" class="style35">تشغيل او اقفال عنوان</p>
  <p align="center"><span class="style21"><a href="javascript: chkall();" class="style24">Tout Cocher / Tout D&eacute;cocher</a>
    <input name="Submit" type="submit" id="Submit" value="Suppression Multiple">
  </span></p>
  <div align="center">
    <table width="68%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="269" bgcolor="#EFEFEF"><div align="center">المجال</div></td>
        <td width="166" bgcolor="#EFEFEF"><div align="center" class="style34">العنوان</div></td>
        <td width="178" bgcolor="#EFEFEF"><div align="center">آخر تاريخ الربط</div></td>
        <td width="151" bgcolor="#EFEFEF"><div align="center"><span class="style34">تشغيل او اقفال حساب <a href='ip.php'>&nbsp; </a></span></div></td>
        <td width="120" height="23" bgcolor="#EFEFEF"><div align="center">&#1571;&#1606;&#1602;&#1585; &#1604;&#1604;&#1581;&#1584;&#1601;</div></td>
      </tr>
      <?php 
	  	  	$page = isset($_GET['page']) ? $_GET['page'] : ''; 


	
	$Requete3 = "select count(data) as n from ip   ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

$detail = mysql_fetch_assoc($result3); 

$n=$detail['n'];
// Variable nombre d'enreg par page
$limit=60;
if($debut==""){$debut=0;}
$debut=$page*$limit;
// Compte le nombre de champ
// Requete
$limite=mysql_query("$requete limit $debut,$limit");


// Affiche le page par page avec ses liens


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

	$Requete3 = "select * from ip order by date desc $limit_str  ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

mysql_close();

	$row = mysql_fetch_array($result3);


		  
	while($row!="")
	   {
	if($row[data]==2) $hh="رئيس المصلحة";  
	if($row[data]==1) $hh="ضابط";  
	if($row[data]==0) $hh="عون أو مساعد ";  

	   
	   $table="ip";
	   		$N=$row[ip];
	   		$NN=$row[id];
	   		$dat=$row[data];
			$nn=$row[nombre];
			if($nn>1)
			{

	echo"
	        <tr bgcolor=red>
					  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$hh."</div></td>
		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[ip]."</div></td>
 		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row['date']."</div></td>
		  
 <td><div align=\"center\"><a href=\"debloquer.php?N=$N&dat=$dat\"><img src=\"icone/cle.PNG\"border=0 height=30 width=30></div></td>	
<td><div align=\"center\" class=\"Style9\"><input name=options[] type=checkbox id=options[] value=$NN></div></td> 

	

        </tr>";
	$row = mysql_fetch_array($result3);
	      }
		  else {
		  
		echo"
        <tr>


					  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$hh."</div></td>
		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[ip]."</div></td>
 		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row['date']."</div></td>
		  
 <td><div align=\"center\"><a href=\"debloquer.php?N=$N&dat=$dat\"><img src=\"icone/cle.PNG\"border=0 height=30 width=30></div></td>	
<td><div align=\"center\" class=\"Style9\"><input name=options[] type=checkbox id=options[] value=$NN></div></td> 
        </tr>";
	$row = mysql_fetch_array($result3);
	  
		  
		  }}
		  
?>
    </table>
  </div>
</form>

    <?php 
		  
		  	  if($n>$limit)
		  {
		$po=1;  
		  	echo"
 <a href=\"ip.php\">".$po."";

			  
			
	$pp=ceil($n/$limit)-1;
	  for($k=1;$k<$pp+1;$k++)
{
$oo=$k+1;
	echo"
 <a href=\"ip.php?page=$k\">".$oo."";

}
}
	

	
	
			  ?>
			  
			  
			  
    <?php }else
	
{
	    	

 $options=$_POST["options"];
$table="ip";

	$k=0;
	while($options[$k]!="")
	{

$Requete =  "DELETE FROM `$table`  WHERE `id`='".$options[$k]."'   limit 1 "; 
	$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
echo "<div align=\"center\"><center><font color=\"#FF0000\"><span class=\"style9\"><b></b></span><BR>";
		
echo "<div align=\"center\"><center><font color=\"#FF0000\"><span class=\"style9\"><b>تم تنفيذ حذف $options[$k] بنجاح  </b></span><BR>";

	$k++;

}}
	  ?>
  </div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
<?php    }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>
