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
if ($permission==securite2($tim2)) {    include("div.php");




?>



<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLiees8.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>


<?php 

 
 
 $annee_declaration = addslashes($_GET["annee_declaration"]);
 $code = addslashes($_GET["code"]);
$prenom = addslashes($_GET["prenom"]);
$nom = addslashes($_GET["nom"]);

$prenom_a = addslashes($_GET["prenom_a"]);
$nom_a = addslashes($_GET["nom_a"]);

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

$heure = addslashes($_GET["heure"]);
$sex = addslashes($_GET["sex"]);
$jumeau = addslashes($_GET["jumeau"]);

$conach = addslashes($_GET["conach"]);

$mention_marginales = addslashes($_GET["mention_marginales"]);
$date_extrait = addslashes($_GET["date_extrait"]);
$ville_extrait = addslashes($_GET["ville_extrait"]);
$ville_conach = addslashes($_GET["ville_conach"]);


////////////////CONVERSION DATE

include"conn/conversion.php";

$date_m=convertDate($date_m);
 
 $Requete =  "UPDATE carnet SET  
									`nom`='$nom',
									`nom_a`='$nom_a',
									`prenom`='$prenom',
									`prenom_a`='$prenom_a',
									`lieu`='$lieu',
									`lieu1`='$lieu1',
									`sex`='$sex',
									`date_n`='$date_m',
									`date_mlf`='$date_mlf',
									`date_mla`='$date_mla',
									`date_hlf`='$date_hlf',
									`date_hla`='$date_hla',
									`idf_m`='$idf_m',
									`num_conach`='$conach',
									`mention_marginales`='$mention_marginales',
									`date_extrait`='$date_extrait',
									`ville_extrait`='$ville_extrait',
									`ville_conach`='$ville_conach'									  WHERE `id`='$partie'  ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


 $Req =  "SELECT *  FROM `carnet` WHERE `id`='".$partie."'    ";

 mysql_query("SET NAMES 'UTF8' ");

$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

	$rox = mysql_fetch_array($res);


?>


<?php
$valider=$_POST["valider"];
if ($valider!="تأكيد") { ?>


<style type="text/css">
<!--
.style2 {font-size: 18}
-->
</style>
</head>
<body>
<div align="center">


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


  <script type="text/javascript">

function Validerfrm()
{

var nom = document.form1.nom.value;

var nom_a = document.form1.nom_a.value;

var lieu = document.form1.lieu.value;
var lieu1 = document.form1.lieu1.value;


var date_m = document.form1.date_m.value;

var long=form1.date_m.value.length;
var mois=date_m.substring(3,5);
var jour=date_m.substring(0,2);
var annee=date_m.substring(6,10);

		



		
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
		

if(lieu1=="" || lieu1=="مكان الإزدياد") 
		{ 
        alert ('Vérifier le Champ Lieu de Naissance'); 
        document.form1.lieu1.focus(); 
        return false; 
    	} 

if(lieu=="" || lieu=="Lieu de naissance") 
		{ 
        alert ('Vérifier le Champ Lieu de Naissance'); 
        document.form1.lieu.focus(); 
        return false; 
    	} 
	
if(date_m == "" || long!=10 || date_m.substring(2,3)!="/" || date_m.substring(5,6)!="/" || mois>12 || jour>31 || isNaN(jour) || isNaN(mois) || isNaN(annee) ) 
		{ 
        alert ('Vérifier le Champ date de naissance'); 
		//alert(date_m.substring(5,7))
		//alert(date_m.substring(0,4))
        document.form1.date_m.focus(); 
        return false; 
    	} 
	
				
 }
		
		
///////////////////////////////////

    </script>



  <form action="" method="post" name="form1" id="form1" onSubmit="return Validerfrm()">
    <div align="center">
	
				
			
      <fieldset style="width:500px">
      <legend align="right"><span class="style19 style39 style2">معلومات عن الأب</span></legend>
			
<table width="380" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="177" bgcolor="#EFEFEF" class="style2"><div align="center">
          <input name="nom" type="text" id="nom" value="<?php echo $rox[nom_f_p]; ?>">
        </div></td>
        <td width="197" bgcolor="#EFEFEF" class="style2"><div align="center">
          <div align="left">
            <input name="nom_a" type="text" id="nom_a" value="<?php echo $rox[nom_a_p]; ?> " dir="rtl">
            
            
            
          
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" /></div>
		  
		  
		  </div>          </td>
      </tr>
    </table>


	  <table width="380">
          
        <tr>
          <td colspan="2" class="style39 style2"><div align="right">الجنسية</div></td>
        </tr>
        <tr>
          <td width="168" bgcolor="#EFEFEF" class="style39 style2"><label></label>              <div align="center">
            <label></label>
            <input name="nationalite" type="text" id="nationalite" value="<?php echo $rox[nationalite_p]; ?>">
          </div></td>
          <td width="200" bgcolor="#EFEFEF" class="style39 style2"><div align="center">
            <input name="nationalite_a" type="text" id="nationalite_a" value="<?php echo $rox[nationalite_pa]; ?>" dir="rtl">
			  
			  			  			
			            
          

     <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nationalite_a')" />
	 

			  
          </div></td>
        </tr>
      </table>
              </fieldset>
              <fieldset class="style2" style="width:500px">
            <legend class="style39" align="right"><span class="style19 style39">معلومات عن الأم</span></legend>
			<table width="380" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="177" bgcolor="#EFEFEF"><div align="center">
          <input name="nomm" type="text" id="nomm" value="<?php echo $rox[nom_f_m]; ?>">
        </div></td>
        <td width="197" bgcolor="#EFEFEF"><div align="center">
          <div align="left">
            <input name="nom_am" type="text" id="nom_am" value="<?php echo $rox[nom_a_m]; ?>">
            
            
            
          
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_am')" /></div>
		  
		  
		  </div>          </td>
      </tr>
    </table>
	
	
	        <div id="Layer1">
              <div id="background" class="background" style="display: none;"></div>
	          <div id="clv_arb" class="clv_arb" style="display: none;"></div>
	          </div>
	        <table width="380">
          
          <tr>
            <td colspan="2" class="style39"><div align="right">الجنسية</div></td>
          </tr>
          <tr>
            <td width="168" bgcolor="#EFEFEF" class="style39"><label></label>              <div align="center">
              <label></label>
              <input name="nationalitem" type="text" id="nationalitem" value="<?php echo $rox[nationalite_m]; ?>">
            </div></td>
            <td width="200" bgcolor="#EFEFEF" class="style39"><div align="center">
              <input name="nationalite_am" type="text" id="nationalite_am" value="<?php echo $rox[nationalite_ma]; ?>" dir="rtl">
			  
			  			  			
			            
          

     <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nationalite_am')" />
	 

			  
            </div></td>
          </tr>
        </table>
              </fieldset>
              <fieldset class="style2" style="width:500px">
            <legend class="style39" align="right"><span class="style19 style39">ضابط الحالة المدنية</span></legend>
			
			<table width="380" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="177" bgcolor="#EFEFEF"><div align="center">
            <input name="officier" type="text" id="officier" value="<?php echo $rox[officier]; ?>">
        </div></td>
        <td width="197" bgcolor="#EFEFEF"><div align="center">
            <div align="left">
              <input name="officier_a" type="text" id="officier_a" value="<?php echo $rox[officier_a]; ?>" dir="rtl">
			  
		 
          
			  
			  
              <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('officier_a')" /></div>
        </div></td>
      </tr>
    </table>
              <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
              <input name="valider" type="submit" class="style39" id="valider" value="تأكيد"/>
              </fieldset>
	</div>
</form>

  <div align="center" class="style2">
  
  
              </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
  </div>
</body>
</html>



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

      <p><a href=index_civil.php>الرجوع إلى القائمة</a></p>

</div>
<p>&nbsp;</p>


";



}
?>









<?php    }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>

