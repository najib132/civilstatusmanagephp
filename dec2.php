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
if ($permission==securite2($tim2)) {    include("div2.php");

$cat=$_GET["cat"];
$trans=$_GET["trans"];



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
 $code = addslashes($_GET["code"]);  $partie = addslashes($_GET["partie"]);



if($trans==1) $transo=2;
if($cat=="المتوفى") $transo=1;

 
 
$prenom = addslashes($_GET["prenom"]);
$nom = addslashes($_GET["nom"]);

$prenom_a = addslashes($_GET["prenom_a"]);
$nom_a = addslashes($_GET["nom_a"]);

$nom=trim($nom);
$nom_a=trim($nom_a);


$prof_personne=addslashes($_GET["prof_personne"]);



$lieu = addslashes($_GET["lieu"]);




$date_mlf = addslashes($_GET["date_mlf"]);

$date_hlf = addslashes($_GET["date_hlf"]);


$heure_f = addslashes($_GET["heure_f"]);

$minute_f = addslashes($_GET["minute_f"]);





$nationalite_personne = addslashes($_GET["nationalite_personne"]);


$bayane=addslashes($_GET["bayane"]);

$adresse=addslashes($_GET["adresse"]);
$date_d_mlf = addslashes($_GET["date_d_mlf"]);

$date_d_hlf = addslashes($_GET["date_d_hlf"]);


////////////////CONVERSION DATE

include"conn/conversion.php";



 
 $Requete =  "UPDATE deces SET   
 
									`nom`='$nom',
									`nom_a`='$nom_a',
									`prenom`='$prenom',
									`prenom_a`='$prenom_a',
									`lieu`='$lieu',
									`heure_f`='$heure_f',
									`minute_f`='$minute_f',
									`date_mlf`='$date_mlf',
									`date_hlf`='$date_hlf',
									`idf_m`='$idf_m',
									`nationalite_personne`='$nationalite_personne',
									
									`ville_deces`='$bayane',
									`adresse_personne`='$adresse',
									`prof_personne`='$prof_personne',


									`date_mlf_d`='$date_d_mlf',
									`date_hlf_d`='$date_d_hlf'
									
									
									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


 
 $Requeteg =  "UPDATE origine_deces SET 
 
 
 
 

									`nom`='$nom',
									`nom_a`='$nom_a',
									`prenom`='$prenom',
									`prenom_a`='$prenom_a',
									`lieu`='$lieu',
									`heure_f`='$heure_f',
									`minute_f`='$minute_f',
									`date_mlf`='$date_mlf',
									`date_hlf`='$date_hlf',
									`idf_m`='$idf_m',
									`nationalite_personne`='$nationalite_personne',
									
									`ville_deces`='$bayane',
									`adresse_personne`='$adresse',
									`prof_personne`='$prof_personne',


									`date_mlf_d`='$date_d_mlf',
									`date_hlf_d`='$date_d_hlf'
									
									
									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$resultg= @mysql_query($Requeteg,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 






 $Req =  "SELECT *  FROM `deces` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `partie`='".$partie."'   ";

 mysql_query("SET NAMES 'UTF8' ");

$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

	$rox = mysql_fetch_array($res);


?>



   <style type="text/css">
<!--
.style39 {font-size: 18px}
-->
   </style>
   
      <style type="text/CSS">
#scan {
border-width:2px 0;
width:660px;
color:#000000;
background-color:#FFFFFF;
}


#formulaire {
border-width:2px 0;
width:400px;
color:#000000;
background-color:#FFFFFF;
}


#scan  {
float:left;
}

#formulaire  {
float:right;
}


#formulaire {
  position: absolute;
  top: 281px;
  left: 681px;
}
#Layer1 {	position:absolute;
	left:470px;
	top:347px;
	width:176px;
	height:147px;
	z-index:1;
}
      .style40 {font-size: 16px}
      </style>

   
</head>
<body>
<div align="center">


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">



  <script type="text/javascript">

function Validerfrm()
{

var nom_a = document.form1.nom_a.value;
var date_hla = document.form1.date_hla.value;
var date_mla = document.form1.date_mla.value;

var date_m = document.form1.date_m.value;

var long=form1.date_m.value.length;
var mois=date_m.substring(3,5);
var jour=date_m.substring(0,2);
var annee=date_m.substring(6,10);
	
		
		
if(nom_a=="" || nom_a=="الإسم الكامل" || !isNaN(nom_a)) 
		{ 
		
        alert ('Vérifier le Champ nom'); 
        document.form1.nom_a.focus(); 
        return false; 
    	} 
		

if(date_hla=="" || date_hla=="تاريخ الإزدياد الهجري") 
		{ 
        alert ('Vérifier le Champ Date de naissance hégérienne'); 
        document.form1.date_hla.focus(); 
        return false; 
    	} 


if(date_mla=="" || date_mla=="تاريخ الإزدياد الميلادي") 
		{ 
        alert ('Vérifier le Champ Date de naissance grégorienne'); 
        document.form1.date_mla.focus(); 
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




  <form action="dec3.php" method="get" name="form1" id="form1" onSubmit="return Validerfrm()">

<div id="scan">


<a href="<?php 	 	  

	   if($cat=="المولود") $tablo="naissance"; 
 
  if($cat=="المتوفى") $tablo="deces";

	  
$acte="doc_$tablo/$annee_declaration/$partie/$rox[pj]";


echo $acte  ?>.jpg" target="_blank"><img src="<?php echo $acte ?>.jpg" width="650" height="780" /></a>

</div> 

<div id="formulaire">


      <fieldset style="width:380px">
            <legend align="right"><span class="style19 style39">معلومات عن الأب</span></legend>
              <table width="360" border="1" cellpadding="0" cellspacing="0">
              
              
              <tr>
                <td bgcolor="#EFEFEF" class="style39"><div align="center" class="style40">
                  nom père 
                      
                </div></td>
                <td bgcolor="#EFEFEF" class="style39"><div align="center"><span class="style40">
                  <input name="nom" type="text" id="nom" value="<?php echo $rox[nom_f_p]; ?>" size="27">
                </span></div></td>
              </tr>
              
              <tr>
                <td bgcolor="#EFEFEF" class="style40"><label></label>
                  <div align="center">
                      <label></label>
                Nationalité</div></td>
                <td bgcolor="#EFEFEF" class="style39"><div align="center" class="style40">
                  <input name="nationalite" type="text" id="nationalite" value="<?php echo $rox[nationalite_p]; ?>" size="27">
                </div></td>
              </tr>
              
              <tr>
                <td bgcolor="#EFEFEF" class="style40"><div align="center">Profession
                  </div>
                  <label></label>
                    <div align="center">
                      <label></label>
                  </div></td>
                <td bgcolor="#EFEFEF" class="style39"><div align="center" class="style40">
                  <input name="profession" type="text" id="profession" value="<?php echo $rox[prof_p]; ?>" size="27">
                </div></td>
              </tr>
              
              <tr>
                <td bgcolor="#EFEFEF" class="style40"><div align="center">Résidant à
                  </div>
                  <label></label>
                    <label></label>
                    <label></label>
                    <div align="center"></div></td>
                <td bgcolor="#EFEFEF" class="style39"><div align="center" class="style40">
                  <input name="adresse_p" type="text" id="adresse_p" value="<?php echo $rox[adresse_p]; ?>" size="27">
                </div></td>
              </tr>
      </table>
	  
	  
	  
	  
	  
	  
			
			
                </p>
<p>
              <input name="trans" type="hidden" id="trans" value="<?php echo $trans;?>">
              <input name="cat" type="hidden" id="cat" value="<?php echo $cat;?>">
              <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration ;?>">
              <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
              <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
              <input name="valider" type="submit" class="style39" id="valider" value="تابع إضافة  معلومات عن الأم"/>
      </p>
      </fieldset>
    </div>
          <p>&nbsp;</p>
</form>
</div>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
  </div>
</div>

<div id="Layer1">   <div id="background" class="background" style="display: none;"></div>
          <div id="clv_arb" class="clv_arb" style="display: none;"></div>
  </div>
</body>
</html>


<?php    }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>

