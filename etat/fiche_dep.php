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


		$annee=$_GET['annee_declaration'];
		$mois1=$_GET['mois1'];
		$mois2=$_GET['mois2'];


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
.gras {
	font-weight: bold;
}
.gras {
	font-weight: bold;
	text-align: center;
}
.style4 {font-size: 10px}
.style5 {font-size: 18px}
-->
</style>
</head>

<body>

<div align="right">
<table  width="100%" align="center">
      <tr>
        <td width="40%"><div align="center">
          <div align="center" class="style4">
            <div align="left"><?php echo $_SESSION["idf"]; ?></div>
          </div>
        </div></td>
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
          </span> </div></td></tr><tr>
        <td width="40%"><div align="right"></div></td>
        <td width="31%" class="gras">
          <div align="right"><span class="gras"><?php echo $bureau_a; ?></span>              </div></td></tr></table>
   
   <div align="center">
    <table width="75%">
      <tr>
        <td><div align="center">
          <table width="75%">
                  <tr>
                    <td colspan="4" bgcolor="#EFEFEF"><div align="center" class="style1"><a href="fiche_dep2.php?annee_declaration=<?php echo $annee ?>&mois1=<?php echo $mois1 ?>&mois2=<?php echo $mois2 ?>&type=15" style="text-decoration:none">جذاذة الفرز (1/5) <span class="style6">ا لفرز</span></a></div></td>
                  </tr>
                  <tr>
                    <td width="26%" bgcolor="#EFEFEF"><div align="center" class="style5">إلى  : <?php 
					
					


			   	$Requete3 = "select mois_a from mois where `mois`='".$mois2."'  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
					
					echo $row[mois_a];
					
					?></div></td>
                    <td width="21%" bgcolor="#EFEFEF"><div align="center" class="style5">من : <?php 
					
					

			   	$Requete3 = "select mois_a from mois where `mois`='".$mois1."'  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
					
					echo $row[mois_a];
					
					
					
					 ?></div></td>
                    <td width="19%" bgcolor="#EFEFEF"><div align="center" class="style5">الشهر </div></td>
                    <td width="34%" bgcolor="#EFEFEF"><div align="center" class="style5">السنة : 
                        <?php 
		
		echo $annee;
		
		 ?>
                    </div></td>
                  </tr>
            </table>
			<p>&nbsp;</p>
			<fieldset style="width:800px">
          <legend class="style39" align="right">الولادات		  </legend>
          <table width="700" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="147" bgcolor="#EFEFEF"><div align="center" class="style1">المجموع</div></td>
              <td width="121" bgcolor="#EFEFEF"><div align="center" class="style1">إناث</div></td>
              <td width="146" bgcolor="#EFEFEF"><div align="center" class="style1">ذكور</div></td>
              <td width="276" bgcolor="#EFEFEF"><div align="center"></div></td>
            </tr>
            <tr>
              <td><div align="center"><?php 
			  
			  $d=date("$annee-$mois1-01");
			  $f=date("$annee-$mois2-31");
			  
			  
 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  `deces_naissance` IN (0,2) ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  `deces_naissance` in (0,2) and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?></div></td>
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
              <td><div align="center">تصاريح الولادات داخل الاجل القانوني</div></td>
            </tr>
            <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and `deces_naissance` in (4,3)  "	;
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme2=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  `deces_naissance` in (4,3) and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle2=$detail['nbr'];

			  	echo number_format($somme2, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle2, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male2=$somme2-$femelle2;

			  	echo number_format($male2, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">احكام الولادات للسنة الحالية</div></td>
            </tr>
            <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and `deces_naissance` in (4,3) and year(date_n) < ".$annee	;
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme3=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  `deces_naissance` in (4,3)  and year(date_n) < ".$annee." and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle3=$detail['nbr'];

			  	echo number_format($somme3, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle3, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male3=$somme3-$femelle3;

			  	echo number_format($male3, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">احكام الولادات للسنوات الماضية</div></td>
            </tr>
            <tr>
              <td><div align="center">
                <?php 
				$s = $somme1+$somme2+$somme3;
echo number_format($s, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php
	 $f = $femelle1+$femelle2+$femelle3; 
echo number_format($f, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $m=$s-$f;
	echo number_format($m, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">المجموع</div></td>
            </tr>
            
          </table>
</fieldset>
<fieldset  style="width:800px">
<legend align="right" class="style39">  الوفيات		  </legend>
<table width="700" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="145" bgcolor="#EFEFEF"><div align="center" class="style1">المجموع</div></td>
              <td width="124" bgcolor="#EFEFEF"><div align="center" class="style1">إناث</div></td>
              <td width="149" bgcolor="#EFEFEF"><div align="center" class="style1">ذكور</div></td>
              <td width="272" bgcolor="#EFEFEF"><div align="center"></div></td>
            </tr>
            <tr>
              <td><div align="center">
                <?php 
				
				  $d=date("$annee-$mois1-01");
			  $f=date("$annee-$mois2-31");

			  
  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  `deces_naissance` = 1 ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  `deces_naissance` = 1 and `sex`='F'  ";
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
              <td><div align="center">تصاريح الوفيات داخل الاجل القانوني</div></td>
            </tr>
            <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and `deces_naissance` = 5 and year(date_n_d) ='".$annee."'"	;
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme2=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  `deces_naissance` = 5  and year(date_n_d) ='".$annee."' and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle2=$detail['nbr'];

			  	echo number_format($somme2, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                <?php 
			  

			  	echo number_format($femelle2, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                <?php 
			  
			  $male2=$somme2-$femelle2;

			  	echo number_format($male2, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">احكام الوفيات للسنة الحالية</div></td>
            </tr>
            <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and `deces_naissance` = 5 and year(date_n_d) < ".$annee	;
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme3=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  `deces_naissance` = 5  and year(date_n_d) < ".$annee." and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle3=$detail['nbr'];

			  	echo number_format($somme3, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                <?php 
			  

			  	echo number_format($femelle3, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                <?php 
			  
			  $male3=$somme3-$femelle3;

			  	echo number_format($male3, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">احكام الوفيات للسنوات الماضية</div></td>
            </tr>
            <tr>
              <td><div align="center">
                <?php 
				$s = $somme1+$somme2+$somme3;
echo number_format($s, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                <?php
	 $f = $femelle1+$femelle2+$femelle3; 
echo number_format($f, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                <?php 
			  
			  $m=$s-$f;
	echo number_format($m, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">المجموع</div></td>
            </tr>
            
          </table>
			</fieldset>


<fieldset  style="width:800px">
<legend align="right" class="style39">  الزواج و الطلاق
		  </legend>
<table width="700" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="138" bgcolor="#EFEFEF"><div align="center" class="style1">المجموع</div></td>
              <td width="125" bgcolor="#EFEFEF"><div align="center" class="style1">إناث</div></td>
              <td width="160" bgcolor="#EFEFEF"><div align="center" class="style1">ذكور</div></td>
              <td width="267" bgcolor="#EFEFEF"><div align="center"></div></td>
            </tr>
            <tr>
              <td><div align="center"><?php 
$d=date("$annee-01-01");
$f=date("$annee-12-31");		  
 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1 ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $nb=$detail['nbr'];


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1 and sex = 'F'";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res);  

 $femelle1=$detail['nbr'];

echo number_format($nb, 0, '', ' ');

			  
			  ?></div></td>
              <td><div align="center">
                <?php 
			  

	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                <?php 
			  
			  $male1=$nb-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">الزواج</div></td>
            </tr>
            <tr>
              <td><div align="center">
                <?php 
	$d=date("$annee-01-01");
$f=date("$annee-12-31");		  
 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2 ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $nb=$detail['nbr'];


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2 and sex = 'F'";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res);  

 $femelle1=$detail['nbr'];

echo number_format($nb, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$nb-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">الطلاق</div></td>
            </tr>
            
            
            
          </table>
			</fieldset>
		
 <fieldset  style="width:800px">       
<legend align="right" class="style39"> الولادات حسب سن الام</legend>
<table width="700" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="278" bgcolor="#EFEFEF"><div align="center" class="style1">المجموع</div></td>
              <td width="278" bgcolor="#EFEFEF"><div align="center" class="style1">إناث</div></td>
              <td width="314" bgcolor="#EFEFEF"><div align="center" class="style1">ذكور</div></td>
              <td width="314" bgcolor="#EFEFEF"><div align="center">سن الام</div></td>
            </tr>
            <tr>
              <td><div align="center"><?php 
			  
$Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) < 18   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) < 18 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?></div></td>
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
              <td><div align="center">اقل من 18 سنة</div></td>
            </tr>
            <tr>
              <td><div align="center">
                <?php 
			  
$Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 18  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 19   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 18  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 19 and `sex`='F'  ";
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
              <td><div align="center" dir="rtl">18 - 19 سنة </div></td>
            </tr>
            
             <tr>
              <td><div align="center">
                <?php 
			  
$Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 20  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 24   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 20  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 24 and `sex`='F'  ";
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
              <td><div align="center" dir="rtl">20 - 24 سنة </div></td>
            </tr>
            
             <tr>
              <td><div align="center">
                <?php 
			  
$Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 25  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 29   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 25  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 29 and `sex`='F'  ";
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
			  
$Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 30  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 34   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 30  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 34 and `sex`='F'  ";
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
			  
$Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 35  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 39   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 35  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 39 and `sex`='F'  ";
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
			  
$Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 40  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 44   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 40  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 44 and `sex`='F'  ";
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
            </tr> <tr>
              <td><div align="center">
                <?php 
			  
$Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 45  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 49   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 45  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= 49 and `sex`='F'  ";
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
            </tr> <tr>
              <td><div align="center">
                <?php 
			  
$Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 50 ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 50  and `sex`='F'  ";
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
              <td><div align="center" dir="rtl">اكثر من 50 سنة </div></td>
            </tr> <tr>
              <td><div align="center">
                <?php 
			  
$Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 0 ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= 0  and `sex`='F'  ";
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
        <td colspan="2"><div align="left">Le :<span class="gras"><?php echo date('d/m/Y'); ?></span></div>          <div align="center"></div></td>
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
