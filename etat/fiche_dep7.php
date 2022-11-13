<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];                                                                 $section=$_SESSION["section"];      
$section1=$_SESSION["section1"];  

 include"../accesclient1.php";    
 if ($permission==securite2($tim2))
        { 
           $entreprise=$_SESSION["entreprise"];



$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);		

$officier=$_SESSION["off"];
$officier_a=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];


		$annee1=$_GET['annee1'];
		$annee2=$_GET['annee2'];


?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">          <title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<style type="text/css">
<!--
.style6 {color: #EFEFEF}
-->
</style>
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/><link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/>


<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {color: #FFFFFF}
.style3 {color: #000000}
.gras {
	font-weight: bold;
}
.gras {
	font-weight: bold;
	text-align: center;
}
@page{
	
	size:A5 landscape;}
.style4 {font-size: 10px}
.style5 {font-size: 18px}
-->
</style>
</head>

<body>

<div align="right">
<table  width="100%" align="center">
      <tr>
        <td width="40%"><div align="center" class="style4">
          <div align="left"><?php echo $_SESSION["idf"]; ?></div>
        </div>
        <div align="center"></div></td>
        <td width="31%" class="gras"><div align="right">المملكة المغربية</div></td>
      </tr><tr>
        <td width="40%"><div align="center"></div></td>
        <td width="31%" class="gras"><div align="right">وزارة الداخلية </div></td>
      </tr><tr>
        <td width="40%"><div align="center"></div></td>
        <td width="31%" class="gras"><div align="right">عمالة او اقليم
          :
          <span class="gras"><?php echo $province_a; ?></span>
        </div></td>
      </tr><tr>
        <td width="40%"><div align="right"></div></td>
        <td width="31%" class="gras">
          <div align="right"><?php echo $r['region1']; ?>    <span class="gras">
          <?php 
		echo $r['section1']." ";
		?>
        </span> </div></td>
      </tr><tr>
        <td width="40%"><div align="right"></div></td>
        <td width="31%" class="gras">
        <div align="right"><span class="gras"><?php echo $bureau_a; ?></span>            </div></td>
  </tr></table>
   
   <div align="center">
    <table width="75%">
      <tr>
        <td><div align="center">
		<table width="75%">
          <tr>
            <td width="26%" bgcolor="#EFEFEF"><div align="center" class="style5">إلى  :
              
                <?php 
		
		echo $annee2;
		
		 ?>
            </div></td>
            <td width="21%" bgcolor="#EFEFEF"><div align="center" class="style5">من :
              
                <?php 
		
		echo $annee1;
		
		 ?>
            </div></td>
            <td width="19%" bgcolor="#EFEFEF"><div align="center" class="style5"></div></td>
            <td width="34%" bgcolor="#EFEFEF"><div align="center" class="style5">السنة </div></td>
          </tr>
        </table>
		<p align="center" style="font-size:22px">&nbsp;</p>	
		

		
 <fieldset  style="width:800px">       
<legend align="right" class="style1"> المسجلين الأحياء حسب العمر</legend>
<table width="700" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="278" bgcolor="#EFEFEF"><div align="center" class="style1">المجموع</div></td>
              <td width="278" bgcolor="#EFEFEF"><div align="center" class="style1">عدد الإناث</div></td>
              <td width="314" bgcolor="#EFEFEF"><div align="center" class="style1">عدد الذكور</div></td>
              <td width="314" bgcolor="#EFEFEF"><div align="center" class="style1">العمر</div></td>
            </tr>
            <tr>
              <td><div align="center">
                <?php 
				
			  
 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''   AND TIMESTAMPDIFF(DAY,date_n,CURDATE())   < 365 AND TIMESTAMPDIFF(DAY,date_n,CURDATE())   > 0 ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  AND TIMESTAMPDIFF(DAY,date_n,CURDATE())   < 365 AND TIMESTAMPDIFF(DAY,date_n,CURDATE())   > 0  and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">اقل من سنة </div></td>
            </tr>
            
             <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 1 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 4  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`='' and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 1 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 4 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">1 - 4 سنة </div></td>
            </tr>
            
             <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`='' and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 5 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 9  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 5 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 9 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">5 - 9 سنة </div></td>
            </tr>
            
             <tr>
              <td><div align="center">
                <?php 
			  
  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 10 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 14  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 10 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 14 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">10 - 14 سنة </div></td>
            </tr>
            
             <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 15 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 17  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 15 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 17 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">15 - 17 سنة </div></td>
            </tr>
             <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 18 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 24  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 18 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 24 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">18 - 24 سنة </div></td>
            </tr> <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 25 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 29  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 25 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 29 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">25 - 29 سنة </div></td>
            </tr> 
            
            
            <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 30 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 34  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 30 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 34 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">30 - 34 سنة </div></td>
            </tr>
            
             <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 35 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 39  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 35 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 39 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">35 - 39 سنة </div></td>
            </tr>
            
             <tr>
              <td><div align="center">
                <?php 
				
			  $d=date("$annee-$mois1-01");
			  $f=date("$annee-$mois2-31");

			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 40 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 44  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 40 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 44 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">40 - 44 سنة </div></td>
            </tr>
            
             <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 45 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 49  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 45 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 49 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">45 - 49 سنة </div></td>
            </tr>
            
             <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 50 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 54  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 50 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 54 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">50 - 54 سنة </div></td>
            </tr>
             <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 55 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 59  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 55 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 59 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">55 - 59 سنة </div></td>
            </tr> <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 60 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 64  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 60 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 64 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">60 - 64 سنة </div></td>
            </tr>
            
            
            
            
            
            <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 65 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 69  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 65 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 69  and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">65 - 69 سنة </div></td>
            </tr>
             <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 70 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 74   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 70 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 74 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">70 - 74 سنة </div></td>
            </tr> <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 75 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 79  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 75 and TIMESTAMPDIFF(YEAR,date_n,CURDATE()) <= 79 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">75 - 79 سنة </div></td>
            </tr>
            
            
            
            
            
            <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 80";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and  TIMESTAMPDIFF(YEAR,date_n,CURDATE()) >= 80  and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">اكثر من 80 سنة </div></td>
            </tr> <tr>
              <td><div align="center">
                <?php 
			  
 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` BETWEEN '".$annee1."' AND  '".$annee2."' AND `mort`=''  and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center" dir="rtl">المجموع</div></td>
            </tr>
          </table>
			</fieldset>
            
            
            
		</div></td>
      </tr>
    </table>
  </div>
 
   <table width="100%">
     <tr>
       <td colspan="5">&nbsp;</td>
     </tr>
     <tr>
       <td width="32%">Fait à : <span class="gras"><?php echo $bureau; ?></span></td>
       <td colspan="2"><div align="left">Le :<span class="gras"><?php echo date('d/m/Y'); ?></span></div>
           <div align="center"></div></td>
       <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
       <td width="17%"><div align="right"> بتاريخ : <span class="gras"><?php echo date("d/m/Y"); ?></span></div></td>
       <td width="30%"><div align="right">حرر ب :<span class="gras"><?php echo $bureau_a; ?></span></div></td>
     </tr>
   </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
