<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];
 include"../accesclient1.php";    
 if ($permission==securite2($tim2))
        { 
           $entreprise=$_SESSION["entreprise"];


$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);



$off=$_SESSION["off"];
$off1=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];

$section=$_SESSION["section"];
$section1=$_SESSION["section1"];   

     $bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">          <title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/><link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/>


<style type="text/css">
<!--
.gras {
	font-weight: bold;
}
.gras {
	font-weight: bold;
	text-align: center;
}
.style4 {font-size: 10px}
-->
</style>
</head>

<body>

<div align="right">
<table  width="97%" align="center">
      <tr>
        <td width="55%"><div align="center" class="style4">
          <div align="left"><?php echo $_SESSION["idf"]; ?></div>
        </div>
        <div align="center"></div></td>
        <td width="45%"><div align="center" class="gras">
          <div align="right">المملكة المغربية </div>
        </div></td>
      </tr><tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center" class="gras">
          <div align="right">وزارة الداخلية </div>
        </div></td>
      </tr><tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center" class="gras">
          <div align="right">عمالة او اقليم
            : <?php echo $province_a; ?></div>
        </div></td>
      </tr><tr>
        <td width="55%">&nbsp;</td>
        <td width="45%"><div align="center" class="gras">
          <div align="right"><?php echo $r['region1']; ?>
            <?php 
		echo $r['section1']." ";
		?>
            </div>
        </div></td>
      </tr><tr>
        <td width="55%"><div align="right"></div></td>
        <td width="45%"><div align="right"><span class="gras"><?php echo $bureau_a; ?></span></div></td>
      </tr><tr>
        <td width="55%"><div align="right"></div></td>
        <td width="45%"><div align="center" class="gras"></div></td>
      </tr></table>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td width="48%"><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px">شهادة الحياة <span dir="rtl">الجماعية </span></span></p>          
        </td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">
          <p>يشهد &nbsp;&nbsp;&nbsp;<span class="gras">الموقع اسفله</span></p>
        </div></td>
    </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">
          <p>ان ابناء السيد <span class="gras"> <?php  
		  
		  	   $options=$_GET["options"];
		  
if($options!="") {		  
		  

	$Requete3 = "select nom_a_p, nom_a_m FROM tmp where `id`=$options[0] ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$ro = mysql_fetch_array($result3);
	
	echo $ro[nom_a_p];

}


$table=$_GET["table"];
$partie=$_GET["partie"];
$annee_declaration=$_GET["annee_declaration"];
$code=$_GET["code"];
$partie=$_GET["partie"];
if($table=="attestation") {


	$Requete3 = "select nom_a_p, nom_a_m FROM attestation where `id`=$partie ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$ro = mysql_fetch_array($result3);
	
	echo $ro[nom_a_p];


}


if($table=="externe") {

$N=$_GET["N"];

	$Requete3 = "select nom_a_p, nom_a_m FROM tmp where `id`=$N ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$ro = mysql_fetch_array($result3);
	
	echo $ro[nom_a_p];


}


		  
		   ?></span></p>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">و السيدة <span class="gras"> <?php  
			
	echo $ro[nom_a_m];
	
		
		 ?></span></div></td>
      </tr>
      <tr>
        <td></td>
        <td><div align="right">
          <p><span dir="rtl"> الاتية اسماؤهم لازالوا على قيد الحياة </span></p>
        </div></td>
      </tr></table>
       <table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="29%" bgcolor="#EFEFEF" ><div align="center">مكان الازدياد</div></td>
		
        <td width="30%" bgcolor="#EFEFEF" ><div align="center"><span dir="rtl">تاريخ  الازدياد</span></div></td>
        <td width="41%" bgcolor="#EFEFEF"><div align="right">
          <p align="center"><span dir="rtl">الاسم العائلي و الشخصي</span></p>
        </div></td>
      </tr>
	  
	
	
	  <?php 	


include"../conn/conversion.php";

 $date_m=convertDate($date_m);
 
  $ip=$_SERVER['REMOTE_ADDR'];
  
  
  if($options!="") {		  


	$k=0;
	while($options[$k]!="")
	{

 
$Requete3 = "select prenom_a,nom_a,date_n,lieu1 FROM tmp where `id`='$options[$k]'   ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);


	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>

		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]." ".$row3[prenom_a]."</div></td>

        </tr>";
		$k++;

			}
	
		}
		
if($table=="attestation" || $table=="externe") {



$Requete3 = "select prenom_a,nom_a,date_n,lieu1 FROM tmp where `id_attestation`='$partie'   ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

while($row3!="") {
	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>

		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]." ".$row3[prenom_a]."</div></td>

        </tr>";
	$row3 = mysql_fetch_array($result3);
}



}		
		
		
	?>
    </table>
      <table width="588">
      <tr>
        <td>&nbsp;</td>
        <td><div align="right">و قد سلمت  هذه الشهادة للإدلاء بها عند الحاجة</div></td>
      </tr>
      
  </table>

    <table width="100%">
      <tr>
        <td width="44%"><div align="center">
        <span class="gras"><?php echo date("Y/m/d"); ?></span> : بتاريخ </div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td width="56%"><div align="right">حرر ب : <span class="gras"><?php echo $_SESSION["redaction_a"]; ?></span></div></td>
      </tr>
      <tr>
        <td width="44%"><div align="center">
          <p>توقيع ضابط الحالة المدنية</p>
        </div></td>
		
		
        <td width="56%"><div align="right"></div></td>
      </tr>
    </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
