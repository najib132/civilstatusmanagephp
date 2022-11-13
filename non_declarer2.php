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

   
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) { include("div.php");  


 $certificat = addslashes($_GET["certificat"]);


?>

<?php
$valider=$_POST["valider"];
if ($valider!="تأكيد") { ?>



<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLiees8.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>


<?php 


 
 $code = addslashes($_GET["code"]);
$prenom_a = addslashes($_GET["prenom_a"]);
$nom_a = addslashes($_GET["nom_a"]);

$nom_a=trim($nom_a);
$prenom_a=trim($prenom_a);


$prenom = addslashes($_GET["prenom"]);
$nom = addslashes($_GET["nom"]);

$nom=trim($nom);
$prenom=trim($prenom);


$lieu1 = addslashes($_GET["lieu1"]);
$lieu = addslashes($_GET["lieu"]);


 $region = addslashes($_GET["region"]);
$partie = addslashes($_GET["partie"]);
$code = addslashes($_GET["code"]);

$date_m = addslashes($_GET["date_m"]);
$date_mlf = addslashes($_GET["date_mlf"]);
$date_mla = addslashes($_GET["date_mla"]);

$date_hlf = addslashes($_GET["date_hlf"]);
$date_hla = addslashes($_GET["date_hla"]);

$sex = addslashes($_GET["sex"]);


$adresse1 = addslashes($_GET["adresse1"]);
$adresse = addslashes($_GET["adresse"]);

$annee_h = addslashes($_GET["annee_h"]);
$nationalite_a = addslashes($_GET["nationalite_a"]);
$nationalite = addslashes($_GET["nationalite"]);

$cin = addslashes($_GET["cin"]);
$date_cin = addslashes($_GET["date_cin"]);

////////////////CONVERSION DATE

include"conn/conversion.php";

$date_m=convertDate($date_m);
$date_cin=convertDate($date_cin);

 $Req =  "SELECT MAX(id) as partie  FROM `attestation`     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

$detail = mysql_fetch_assoc($res); 

 $partie=$detail['partie']+1;

$date=date("Y-m-d");

if($region==0) $region="";
 $Requete =  "INSERT INTO `attestation`(`date`,
                                    `annee_declaration`,
                                    `code`,
                                    `attestation`,
									`id`,
									`annee_h`,
									`nom_a`,
									`prenom_a`,
									`nom`,
									`prenom`,
									`sex`,
									`date_n`,
									`date_mlf`,
									`date_mla`,
									`date_hlf`,
									`date_hla`,
									`idf`,
									`adresse_personne_a`,
									`adresse_personne`,
									`lieu1`,
									`lieu`,
						        	`nationalite_a`,
						        	`nationalite`,
									`cin`,
									`date_cin`
									
				
									) 
 VALUES ('$date','$region','$code','$certificat','$partie','$annee_h','$nom_a','$prenom_a','$nom','$prenom','$sex','$date_m','$date_mlf','$date_mla','$date_hlf','$date_hla','$idf_m','$adresse1','$adresse','$lieu1','$lieu','$nationalite_a','$nationalite','$cin','$date_cin');"; 
 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Problme d'execution de la requete <br>".mysql_error()); 
	

include"aces1.php";

?>



   <style type="text/css">
<!--
.style39 {font-size: 18px}
.style4 {font-size: 14px}
.style40 {font-size: 16px}
#Layer1 {
	position:absolute;
	left:422px;
	top:217px;
	width:126px;
	height:115px;
	z-index:1;
}
-->
   </style>
</head>
<body>
<div id="Layer1">

              <div id="background" class="background" style="display: none;"></div>
            <div id="clv_arb" class="clv_arb" style="display: none;"></div>
			


</div>
<div align="center">


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


  <script type="text/javascript">

function Validerfrm()
{

var nom = document.form1.nom.value;

var nom_a = document.form1.nom_a.value;

var nomm = document.form1.nomm.value;

var nom_am = document.form1.nom_am.value;

		


		
if(nom=="" || nom=="nom et prénom" || !isNaN(nom)) 
		{ 
		
        alert ('Vérifier le Champ NOM'); 
        document.form1.nom.focus(); 
        return false; 
    	} 
		
		
if(nom_a=="" || nom_a=="الإسم الكامل" || !isNaN(nom_a)) 
		{ 
		
        alert ('Vérifier le Champ nom'); 
        document.form1.nom_a.focus(); 
        return false; 
    	} 
		
	
				
 }
		
		
///////////////////////////////////

    </script>



  <form action="" method="post" name="form1" id="form1" onSubmit="return Validerfrm()">
  <div align="center">
      <table width="400">
        <tr>
          <td><div align="center">
		  
		
	
	    <fieldset style="width:400px">
    <legend align="right"><span class="style19 style39">معلومات عن الأب</span></legend>
    <table width="380" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
		
			
			
            <div align="center">
              <input name="nom_f_p" type="text" id="nom_f_p" value="nom et prénom">
              <input name="nom_a" type="text" id="nom_a" value="الإسم الكامل" dir="rtl">
              <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" /></div>
            </div>
		        </table>
	


        </fieldset>









	    <fieldset style="width:400px">
    <legend align="right"><span class="style19 style39">معلومات عن الأم</span></legend>
    <table width="380" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
            <div align="left">
              <div id="background" class="background" style="display: none;"></div>
            <div id="clv_arb" class="clv_arb" style="display: none;"></div>
            <div align="center">
              <input name="nom_f_m" type="text" id="nom_f_m" value="nom et prénom">
              <input name="nom_am" type="text" id="nom_am" value="الإسم الكامل" dir="rtl">
              <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_am')" /></div>
            </div>
		    
		  
		    </div></td>
      </tr>
    </table>
	
	


        </fieldset>
        <p>
		  <input name="certificat" type="hidden" id="certificat" value="<?php echo $certificat;?>">
	      <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
	      <input name="valider" type="submit" class="style39" id="valider" value="تأكيد"/>
	    </p>


  </form>
</div>
   <p>&nbsp;</p>
</body>
</html>



<?php } else
	
{


$partie = addslashes($_POST["partie"]);
$nom_a = addslashes($_POST["nom_a"]);
$nom_f_p = addslashes($_POST["nom_f_p"]);
$nom_f_m = addslashes($_POST["nom_f_m"]);

$nom_am = addslashes($_POST["nom_am"]);
$nbr = addslashes($_POST["nbr"]);



 $Requete =  "UPDATE attestation SET 
									`nom_a_p`='$nom_a',
									`nom_a_m`='$nom_am',
									`nom_f_m`='$nom_f_m',
									`nom_f_p`='$nom_f_p'

			  WHERE `id`='$partie'  ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

include"aces1.php";


	$Requete3 = "select profession,profession_f from profession where `id`='$certificat'  ";

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me 123lors de la lecture de la table<br>".mysql_error());

$row = mysql_fetch_array($result3);

//echo $row[profession];

if($certificat==15 || $certificat==23 || $certificat==24) {
echo"

<div align=center>
  <p><img src=icone/print.GIF border=0></p>
  <p><a href=etat/$row[profession]?partie=$partie&table=attestation target=_blank>شهادة المعني بالأمر بالعربية</a></p>
  <p><a href=etat/$row[profession_f]?partie=$partie&table=attestation target=_blank>شهادة المعني بالأمر بالفرنسية</a></p>
  
  <p><a href=modifier_certificat.php?partie=$partie>تعديل</a></p>
  <p><a href=reche_non_declarer.php>البحث في الأرشيف</a></p>

      <p><a href=index_civil.php>الرجوع إلى القائمة</a></p>

</div>
<p>&nbsp;</p> ";
}




if($certificat==18) {

echo "<style type=text/css>
<!--
.style1 {font-size: 24px}
-->
</style>
<div align=center>
  <p><a href=fils.php?partie=$partie&certificat=$certificat><img src=icone/suivant.jpg width=162 height=157 border=0></a></p>
  <p class=style1><a href=fils.php?partie=$partie&certificat=$certificat>تابع إضافة لائحة الأبناء</a></p>
</div>
 ";

}




if($certificat!=18 && $certificat!=15 && $certificat!=23 && $certificat!=24) {

echo"

<div align=center>
  <p><img src=icone/print.GIF border=0></p>
  <p><a href=$row[profession]&partie=$partie&table=attestation target=_blank>شهادة المعني بالأمر بالعربية</a></p>
  <p><a href=$row[profession_f]&partie=$partie&table=attestation target=_blank>شهادة المعني بالأمر بالفرنسية</a></p>
  
  <p><a href=modifier_certificat.php?partie=$partie>تعديل</a></p>
  <p><a href=reche_non_declarer.php>البحث في الأرشيف</a></p>

      <p><a href=index_civil.php>الرجوع إلى القائمة</a></p>

</div>
<p>&nbsp;</p> ";

}



}
?>









<?php    }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>

