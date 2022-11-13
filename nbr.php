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
$valider=$_GET["valider"];
$idf=$_GET["idf"];

?>
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
.style5 {font-size: 36px; font-weight: bold; }
.style6 {font-size: 22px}
.style7 {font-size: 22px; font-weight: bold; }
-->
</style>
</head>

<body>

  <h2 align="center">عدد الرسوم حسب المستعمل </h2>
  <form action="" method="get" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return Validerfrm()">
  <p align="center">
  <div align="center">
    <p>
      <select name="idf" id="idf">
        <?php   
			   	$Requete3 = "select nom,prenom,cin,id from utilisateurs  order by nom asc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
        <option value="<?php echo $row[id]; ?>"><?php echo " $row[cin]    $row[nom] $row[prenom] "; }?></option>
      </select>
      <input name="valider" type="submit" id="valider" value="---بحث---">
    </p>
  </div>
</form>
  
  
        <?php if($valider=="---بحث---") { ?>

  
<div align="center">
  <table width="52%" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td width="60%" class="style5"><div align="center" class="style6"><?php 
	  
	  $Requete31 = "select nom, prenom from utilisateurs where `id`='".$idf."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);
	
	echo " $rox[nom] $rox[prenom] ";

	  
	  ?>
      </div></td>
      <td width="40%" bgcolor="#EFEFEF"><div align="center" class="style7">
        <div align="center">المستعمل</div>
      </div></td>
    </tr>
    <tr>
      <td class="style5"><div align="center" class="style6"><?php 
	  
	  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `idf`='".$idf."' and `valider`='1'    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];
 
 echo $somme1;
	  
	  
	  ?></div></td>
      <td bgcolor="#EFEFEF"><div align="center" class="style7">
        <div align="center">عدد رسوم الولادات</div>
      </div></td>
    </tr>
    <tr>
      <td class="style5"><div align="center" class="style6">
        <?php 
	  
	  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `idf`='".$idf."'  and `valider`='1'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme2=$detail['nbr'];
	  
	   echo $somme2;

	  
	  ?>
      </div></td>
      <td bgcolor="#EFEFEF"><div align="center" class="style7">
        <div align="center">عدد رسوم الوفيات</div>
      </div></td>
    </tr>
    <tr>
      <td class="style5"><div align="center" class="style6">
        <?php 
	  
$somme=$somme1+ $somme2;

echo $somme;
	  
	  
	  ?>
      </div></td>
      <td bgcolor="#EFEFEF" class="style5"><div align="center" class="style6">المجموع</div></td>
    </tr>
    <tr>
      <td class="style5"><div align="center" class="style6">
        <?php 
	  
	  $Req =  "SELECT COUNT(code) as nbr  FROM `mention_p` WHERE `idf`='".$idf."'    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $sommef=$detail['nbr'];
 
 echo $sommef;
	  
	  
	  ?>
      </div></td>
      <td bgcolor="#EFEFEF"><div align="center" class="style7">
        <div align="center">عدد البينات الهامشية</div>
      </div></td>
    </tr>
  </table>
</div>



<?php }?>
</body>
</html>


</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>
