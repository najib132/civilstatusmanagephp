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
$prenom = addslashes($_GET["prenom"]);
$nom = addslashes($_GET["nom"]);

$prenom_a = addslashes($_GET["prenom_a"]);
$nom_a = addslashes($_GET["nom_a"]);

$nom=trim($nom);
$nom_a=trim($nom_a);


$lieu = addslashes($_GET["lieu"]);
$lieu1 = addslashes($_GET["lieu1"]);


 $region = addslashes($_GET["region"]);
$partie = addslashes($_GET["partie"]);
$code = addslashes($_GET["code"]);

$date_m = addslashes($_GET["date_m"]);
$date_mlf = addslashes($_GET["date_mlf"]);
$date_mla = addslashes($_GET["date_mla"]);

$date_hlf = addslashes($_GET["date_hlf"]);
$date_hla = addslashes($_GET["date_hla"]);

$sex = addslashes($_GET["sex"]);
$jumeau = addslashes($_GET["jumeau"]);

$conach = addslashes($_GET["conach"]);

$adresse = addslashes($_GET["adresse"]);
$adresse1 = addslashes($_GET["adresse1"]);

$annee_h = addslashes($_GET["annee_h"]);
$nationalite_personne_a = addslashes($_GET["nationalite_personne_a"]);
$nationalite_personne = addslashes($_GET["nationalite_personne"]);



$mention_marginales = addslashes($_GET["mention_marginales"]);
$date_extrait = addslashes($_GET["date_extrait"]);
$ville_extrait = addslashes($_GET["ville_extrait"]);
$ville_conach = addslashes($_GET["ville_conach"]);



////////////////CONVERSION DATE

include"conn/conversion.php";

$date_m=convertDate($date_m);

 $Req =  "SELECT id  FROM `carnet` WHERE `id`='".$partie."'    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

$nn=mysql_num_rows($res);

if($nn!=0) 
{
include"aces2.php";
}
else {



$Requete =  "INSERT INTO `carnet`(`annee_declaration`,
                                    `code`,
									`id`,
									`annee_h`,
									`nom`,
									`nom_a`,
									`prenom`,
									`prenom_a`,
									`sex`,
									`date_n`,
									`date_mlf`,
									`date_mla`,
									`date_hlf`,
									`date_hla`,
									`idf`,
									`num_conach`,
									`ville_conach`,
									`adresse`,
									`adresse_a`,
									`lieu`,
									`lieu1`,
						        	`nationalite_personne_a`,
									`nationalite_personne`,
									`mention_marginales`,
									`date_extrait`,
									`ville_extrait`
				
									) 
 VALUES ('$region','$code','$partie','$annee_h','$nom','$nom_a','$prenom','$prenom_a','$sex','$date_m','$date_mlf','$date_mla','$date_hlf','$date_hla','$idf_m','$conach','$ville_conach','$adresse','$adresse1','$lieu','$lieu1','$nationalite_personne_a','$nationalite_personne','$mention_marginales','$date_extrait','$ville_extrait');"; 
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
	left:325px;
	top:97px;
	width:118px;
	height:136px;
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
        <td width="177" bgcolor="#EFEFEF"><div align="center">
          <input name="nom" type="text" id="nom" value="nom et prénom">
        </div></td>
        <td width="197" bgcolor="#EFEFEF"><div align="center">
          <div align="left">
            <input name="nom_a" type="text" id="nom_a" value="الإسم الكامل" dir="rtl">
            
            
            
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" /></div>
		  
		  
		  </div>          </td>
      </tr>
    </table>
	


        <table width="380">
          
          <tr>
            <td colspan="2" class="style39"><div align="right">الجنسية</div></td>
          </tr>
          <tr>
            <td width="168" bgcolor="#EFEFEF" class="style39"><label></label>              <div align="center">
              <label></label>
              <input name="nationalite" type="text" id="nationalite" value="marocaine">
            </div></td>
            <td width="200" bgcolor="#EFEFEF" class="style39"><div align="center">
              <input name="nationalite_a" type="text" id="nationalite_a" value="مغربية" dir="rtl">
			  
			  			  			
			            

     <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nationalite_a')" />
	 

			  
            </div></td>
          </tr>
        </table>


    </fieldset>









	    <fieldset style="width:400px">
    <legend align="right"><span class="style19 style39">معلومات عن الأم</span></legend>
    <table width="380" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="177" bgcolor="#EFEFEF"><div align="center">
          <input name="nomm" type="text" id="nomm" value="nom et prénom">
        </div></td>
        <td width="197" bgcolor="#EFEFEF"><div align="center">
          <div align="left">
            <input name="nom_am" type="text" id="nom_am" value="الإسم الكامل" dir="rtl">
            
            
            
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_am')" /></div>
		  
		  
		  </div>          </td>
      </tr>
    </table>
	
	


        <table width="380">
          
          <tr>
            <td colspan="2" class="style39"><div align="right">الجنسية</div></td>
          </tr>
          <tr>
            <td width="168" bgcolor="#EFEFEF" class="style39"><label></label>              <div align="center">
              <label></label>
              <input name="nationalitem" type="text" id="nationalitem" value="marocaine">
            </div></td>
            <td width="200" bgcolor="#EFEFEF" class="style39"><div align="center">
              <input name="nationalite_am" type="text" id="nationalite_am" value="مغربية" dir="rtl">
			  
			  			  			
			            

     <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nationalite_am')" />
	 

			  
            </div></td>
          </tr>
        </table>




    </fieldset>


    <fieldset style="width:400px">
    <legend align="right"><span class="style19 style39">ضابط الحالة المدنية</span></legend>
	
	<table width="380" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="173" bgcolor="#EFEFEF"><div align="center">
            <input name="officier" type="text" id="officier" value="<?php echo $off;  ?>" size="17">
        </div></td>
        <td width="201" bgcolor="#EFEFEF"><div align="center">
            <div align="left">

		 

              <div align="center">
                <input name="officier_a" type="text" id="officier_a" value="<?php echo $off1;  ?>" size="17" dir="rtl">
                <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('officier_a')" /></div>
            </div>
        </div></td>
      </tr>
    </table>
    </fieldset>
	




	
		</p>
	    <p>
	      <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
	      <input name="valider" type="submit" class="style39" id="valider" value="تأكيد"/>
	    </p>


  </form>
</div>
   <p>&nbsp;</p>
</body>
</html>

<?php    } ?> 


<?php } else
	
{


$partie = addslashes($_POST["partie"]);
$nom = addslashes($_POST["nom"]);
$nom_a = addslashes($_POST["nom_a"]);

$nomm = addslashes($_POST["nomm"]);
$nomm1 = addslashes($_POST["nomm1"]);
$nom_am = addslashes($_POST["nom_am"]);


$nationalite_a = addslashes($_POST["nationalite_a"]);
$nationalite = addslashes($_POST["nationalite"]);

$nationalite_am = addslashes($_POST["nationalite_am"]);
$nationalitem = addslashes($_POST["nationalitem"]);

$officier = addslashes($_POST["officier"]);
$officier_a = addslashes($_POST["officier_a"]);


 $Requete =  "UPDATE carnet SET 
									`nationalite_p`='$nationalite',
									`nationalite_pa`='$nationalite_a',
									`nationalite_m`='$nationalitem',
									`nationalite_ma`='$nationalite_am',
									`nom_f_p`='$nom',
									`nom_a_p`='$nom_a',
									`nom_f_m`='$nomm',
									`nom_a_m`='$nom_am',
									`officier`='$officier',
									`officier_a`='$officier_a'
			  WHERE `id`='$partie'  ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

include"aces1.php";

echo"

<div align=center>
  <p><img src=icone/print.GIF border=0></p>
  <p><a href=etat/extrait_carnet.php?partie=$partie target=_blank>البطاقة شخصية للمعني بالأمر</a></p>

  
  <p><a href=modifier_carnet.php?partie=$partie>تعديل</a></p>

      <p><a href=index_civil.php>الرجوع إلى القائمة</a></p>

</div>
<p>&nbsp;</p>


";



}
?>









<?php    }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>

