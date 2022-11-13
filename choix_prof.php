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
   
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) { //include("div.php");  


$ch5 = $_GET["ch5"];
$domaine = $_GET["domaine"];


?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      



<SCRIPT language="javascript">
//D'autres scripts sur http://www.toutjavascript.com
//Si vous utilisez ce script, merci de m'avertir !  < <voir adresse mail sur site> >

function ok() {
	//var choix=l.options[l.options.selectedIndex].value;
	//window.opener.document.forms["origine"].elements["choix"].value=choix;
	window.opener.document.getElementById('<?php echo $_GET["modif5"]; ?>').value=document.getElementById('secteur').value;
	window.close();
}
</SCRIPT>


   <style type="text/css">
<!--
.style39 {font-size: 18px}
.style4 {font-size: 14px}
.style40 {font-size: 16px}
-->
   </style>
</head>
<body>




<p>


</p>
<p align="center">&nbsp;</p>
<div align="center">

	
	
	
  </p>
  <form name="form1" method="get" action="">
    <select name="domaine" size="7" id="domaine" dir="rtl">
      <option value="0"> القطاع المهني</option>
      <?php   
			   	$Requete3 = "select profession_a,id from profession where `cat`=0  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
      <option value="<?php echo $row[1]; ?>"><?php echo $row[0];  }?></option>
    </select>
    <p>
      <input name="modif5" type="hidden" id="modif5" value="<?php if($ch5=="") echo $_GET["modif5"]; else echo $ch5; ?>">
      <input name="valider" type="submit" id="valider" value="إضافة"/>
    </p>
    <p>
      <input name="secteur" type="text" id="secteur" value="<?php echo $domaine
	 	  ?>
      " size="20" maxlength="5">
      <input type="button" value="ok" onClick="ok()" />
    </p>
  </form>
  <p>&nbsp;</p>
</div>

  <?php    }else{ ?> 
  
  Vous n'avez pas le droit de voir cette page
  <?php } ?>
  
