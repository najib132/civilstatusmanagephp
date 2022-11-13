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
   
      $off=$_SESSION["off"];      
   $off1=$_SESSION["off1"];      

$type=$_GET["type"];
 include"accesclient1.php";
 
 if($type=="admin") 
 {
 $permet=securite4($tim4);
include"div_admin.php"; 
 } 
 else if($type=="root") $permet=securite2($tim2);
 
 
 if ($permission==$permet) {   



?>

<?php
$valider=$_POST["valider"];
if ($valider!="إضافة") { ?>



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
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:113px;
	top:202px;
	width:128px;
	height:108px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:20px;
	top:56px;
	width:227px;
	height:161px;
	z-index:2;
}
body {
	background-color: #FFFFFF;
}
#Layer4 {position:absolute;
	left:18px;
	top:16px;
	width:47px;
	height:30px;
	z-index:2;
}
#Layer3 {
	position:absolute;
	left:294px;
	top:14px;
	width:629px;
	height:66px;
	z-index:3;
}
-->
</style>
</head>


<p align="left">&nbsp;</p>
<p align="center"><h2 align="center"> إضافة عمالة أو إقليم</h2>
<div id="Layer1">
  <div id="background" class="background" style="display: none;"></div>
  <div id="clv_arb" class="clv_arb" style="display: none;"></div>
</div>
</p>
<div align="center">
  <form id="form1" name="form1" method="post" action="">
    <table width="45%" border="0">
      <tr>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><strong>عمالة أو إقليم</strong></div></td>
      </tr>
      <tr>
        <td height="21" bgcolor="#FFFFFF"><div align="center">
          <input name="niveau1" type="text" id="niveau1" style="" value=" عمالة أو إقليم" size="25" dir="rtl" />
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onclick="showArabicKey('niveau1')" /> </div></td>
      </tr>
      <tr>
        
        <td width="585" height="21" bgcolor="#FFFFFF">
	    		  
	      <div align="center">
	        <input name="niveau" type="text" id="niveau" style="" value="Préfécture ou province" size="25" />
        </div></td>
      </tr>
    </table>
    <input name="valider" type="submit" id="valider" value="إضافة"/>
    <p></label>
</p>
    <table width="75%" border="1" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">
      <tr>
        <td width="301" height="23" bgcolor="#CCCCCC"><div align="center">Préfécture ou province</div></td>
        <td width="282" bgcolor="#CCCCCC"><div align="center"> عمالة أو إقليم</div></td>
        <td width="44" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <?php 

		  
	$Requete3 = "select * from profession where `cat`=2   ";
	
	mysql_query("SET NAMES 'UTF8' ");

$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());


	$row = mysql_fetch_array($result3);
		  
	$table="profession";
		while($row!="")
	
	   {	
	   $N=$row[id];
	echo"
        <tr>
		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[profession]."</div></td>
		  
		  		  		  <td><div align=\"left\" class=\"Style9\">&nbsp;&nbsp;".$row[profession_a]."</div></td>

 <td><div align=\"center\"><a href=\"modifier_province.php?N=$N&table=$table&type=$type\"><img src=\"icone/b_edit.PNG\" border=0></div></td>
        </tr>";
	$row = mysql_fetch_array($result3);
	      }
?>
    </table>
    <p>&nbsp;</p>
  </form>
</div>
<p align="center">&nbsp;</p>
<p>
<?php }else
	
{

$niveau=addslashes($_POST["niveau"]);
$niveau1=$_POST["niveau1"];



 $Requete = "INSERT INTO `profession`(`profession`,`profession_a`,`cat`) VALUES ('$niveau','$niveau1','2') ; "; 

mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 
	
	
include"aces1.php";
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";

		echo "<a href=\"province.php?type=$type\">&#1585;&#1580;&#1608;&#1593;</a>";

	
  }
  





?>


<?php   }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>
