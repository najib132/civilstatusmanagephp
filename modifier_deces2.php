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

	 $origine=$_GET["origine"];
	 $origineb=$_GET["origineb"];

 
 
$prenom = addslashes($_GET["prenom"]);
$nom = addslashes($_GET["nom"]);

$prenom_a = addslashes($_GET["prenom_a"]);
$nom_a = addslashes($_GET["nom_a"]);

$nom=trim($nom);
$nom_a=trim($nom_a);


$prof_personne=addslashes($_GET["prof_personne"]);
$prof_personne_a=addslashes($_GET["prof_personne_a"]);



$lieu = addslashes($_GET["lieu"]);
$lieu1 = addslashes($_GET["lieu1"]);


 $region = addslashes($_GET["region"]);
$partie = addslashes($_GET["partie"]);
$code = addslashes($_GET["code"]);  $partie = addslashes($_GET["partie"]);


$date_m = addslashes($_GET["date_m"]);
$date_mlf = addslashes($_GET["date_mlf"]);
$date_mla = addslashes($_GET["date_mla"]);

$date_hlf = addslashes($_GET["date_hlf"]);
$date_hla = addslashes($_GET["date_hla"]);


$heure = addslashes($_GET["heure"]);
$heure_f = addslashes($_GET["heure_f"]);

$minute = addslashes($_GET["minute"]);
$minute_f = addslashes($_GET["minute_f"]);



$sex = addslashes($_GET["sex"]);
$jumeau = addslashes($_GET["jumeau"]);

$conach = addslashes($_GET["conach"]);
$niveau1 = addslashes($_GET["niveau1"]);

$annee_h = addslashes($_GET["annee_h"]);

$nationalite_personne_a = addslashes($_GET["nationalite_personne_a"]);
$nationalite_personne = addslashes($_GET["nationalite_personne"]);


$rang = addslashes($_GET["rang"]);
$province_n = addslashes($_GET["province_n"]);


$etat_a = addslashes($_GET["etat_a"]);
$etat = addslashes($_GET["etat"]);

$bayane=addslashes($_GET["bayane"]);
$bayane1=addslashes($_GET["bayane1"]);

$adresse=addslashes($_GET["adresse"]);
$adresse_a=addslashes($_GET["adresse_a"]);

$date_n_d = addslashes($_GET["date_n_d"]);
$date_d_mlf = addslashes($_GET["date_d_mlf"]);
$date_d_mla = addslashes($_GET["date_d_mla"]);

$date_d_hlf = addslashes($_GET["date_d_hlf"]);
$date_d_hla = addslashes($_GET["date_d_hla"]);


////////////////CONVERSION DATE

include"conn/conversion.php";

$date_m=convertDate($date_m);
$date_n_d=convertDate($date_n_d);



if($origine==1)

{
 
 $Requete =  "UPDATE deces SET      `annee_h`='$annee_h',
									`nom`='$nom',
									`nom_a`='$nom_a',
									`prenom`='$prenom',
									`prenom_a`='$prenom_a',
									`lieu`='$lieu',
									`lieu1`='$lieu1',
									`sex`='$sex',
									`heure`='$heure',
									`heure_f`='$heure_f',
									`minute`='$minute',
									`minute_f`='$minute_f',
									`date_n`='$date_m',
									`date_mlf`='$date_mlf',
									`date_mla`='$date_mla',
									`date_hlf`='$date_hlf',
									`date_hla`='$date_hla',
									`idf_m`='$idf_m',
									`nationalite_personne_a`='$nationalite_personne_a',
									`nationalite_personne`='$nationalite_personne',
									
									
									`etat_a`='$etat_a',
									`etat`='$etat',
									`ville_deces`='$bayane',
									`ville_deces_a`='$bayane1',
									`adresse_personne`='$adresse',
									`adresse_personne_a`='$adresse_a',
									`province`='$province_n',
									`niveau_scolaire_a`='$niveau1',
									
									`prof_personne`='$prof_personne',
									`prof_personne_a`='$prof_personne_a',


                                    `date_n_d`='$date_n_d',
									`date_mlf_d`='$date_d_mlf',
									`date_mla_d`='$date_d_mla',
									`date_hlf_d`='$date_d_hlf',
									`date_hla_d`='$date_d_hla'								
									
									
									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


 
 $Requeteg =  "UPDATE origine_deces SET  `annee_h`='$annee_h',
									`nom`='$nom',
									`nom_a`='$nom_a',
									`prenom`='$prenom',
									`prenom_a`='$prenom_a',
									`lieu`='$lieu',
									`lieu1`='$lieu1',
									`sex`='$sex',
									`heure`='$heure',
									`heure_f`='$heure_f',
									`minute`='$minute',
									`minute_f`='$minute_f',
									`date_n`='$date_m',
									`date_mlf`='$date_mlf',
									`date_mla`='$date_mla',
									`date_hlf`='$date_hlf',
									`date_hla`='$date_hla',
									`idf_m`='$idf_m',
									`nationalite_personne_a`='$nationalite_personne_a',
									`nationalite_personne`='$nationalite_personne',
									
									
									`etat_a`='$etat_a',
									`etat`='$etat',
									`ville_deces`='$bayane',
									`ville_deces_a`='$bayane1',
									`adresse_personne`='$adresse',
									`adresse_personne_a`='$adresse_a',
									`province`='$province_n',
									`niveau_scolaire_a`='$niveau1',
									
									`prof_personne`='$prof_personne',
									`prof_personne_a`='$prof_personne_a',


                                    `date_n_d`='$date_n_d',
									`date_mlf_d`='$date_d_mlf',
									`date_mla_d`='$date_d_mla',
									`date_hlf_d`='$date_d_hlf',
									`date_hla_d`='$date_d_hla'								
									
									
									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$resultg= @mysql_query($Requeteg,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


}



if($origine==2 || $origineb==2)

{

 $Requete =  "UPDATE deces SET 
									`annee_h`='$annee_h',
									`nom`='$nom',
									`nom_a`='$nom_a',
									`prenom`='$prenom',
									`prenom_a`='$prenom_a',
									`lieu`='$lieu',
									`lieu1`='$lieu1',
									`sex`='$sex',
									`heure`='$heure',
									`heure_f`='$heure_f',
									`minute`='$minute',
									`minute_f`='$minute_f',
									`date_n`='$date_m',
									`date_mlf`='$date_mlf',
									`date_mla`='$date_mla',
									`date_hlf`='$date_hlf',
									`date_hla`='$date_hla',
									`idf_m`='$idf_m',
									`nationalite_personne_a`='$nationalite_personne_a',
									`nationalite_personne`='$nationalite_personne',
									
									
									`etat_a`='$etat_a',
									`etat`='$etat',
									`ville_deces`='$bayane',
									`ville_deces_a`='$bayane1',
									`adresse_personne`='$adresse',
									`adresse_personne_a`='$adresse_a',
									`province`='$province_n',
									`niveau_scolaire_a`='$niveau1',
									
									`prof_personne`='$prof_personne',
									`prof_personne_a`='$prof_personne_a',


                                    `date_n_d`='$date_n_d',
									`date_mlf_d`='$date_d_mlf',
									`date_mla_d`='$date_d_mla',
									`date_hlf_d`='$date_d_hlf',
									`date_hla_d`='$date_d_hla'								
									
									
									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

}


if($origine==3)

{

 $Requete =  "UPDATE origine_deces SET 
									`annee_h`='$annee_h',
									`nom`='$nom',
									`nom_a`='$nom_a',
									`prenom`='$prenom',
									`prenom_a`='$prenom_a',
									`lieu`='$lieu',
									`lieu1`='$lieu1',
									`sex`='$sex',
									`heure`='$heure',
									`heure_f`='$heure_f',
									`minute`='$minute',
									`minute_f`='$minute_f',
									`date_n`='$date_m',
									`date_mlf`='$date_mlf',
									`date_mla`='$date_mla',
									`date_hlf`='$date_hlf',
									`date_hla`='$date_hla',
									`idf_m`='$idf_m',
									`nationalite_personne_a`='$nationalite_personne_a',
									`nationalite_personne`='$nationalite_personne',
									
									
									`etat_a`='$etat_a',
									`etat`='$etat',
									`ville_deces`='$bayane',
									`ville_deces_a`='$bayane1',
									`adresse_personne`='$adresse',
									`adresse_personne_a`='$adresse_a',
									`province`='$province_n',
									`niveau_scolaire_a`='$niveau1',
									
									`prof_personne`='$prof_personne',
									`prof_personne_a`='$prof_personne_a',


                                    `date_n_d`='$date_n_d',
									`date_mlf_d`='$date_d_mlf',
									`date_mla_d`='$date_d_mla',
									`date_hlf_d`='$date_d_hlf',
									`date_hla_d`='$date_d_hla'								
									
									
									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 



}



 $Req =  "SELECT *  FROM `deces` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `partie`='".$partie."'   ";

 mysql_query("SET NAMES 'UTF8' ");

$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

	$rox = mysql_fetch_array($res);


?>



   <style type="text/css">
<!--
.style39 {font-size: 18px}
.style4 {font-size: 14px}
.style40 {font-size: 16px}
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




  <form action="modifier_deces3.php" method="get" name="form1" id="form1" onSubmit="return Validerfrm()">

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
                <td bgcolor="#EFEFEF"><div align="center">
				
				
				                          <script type="text/javascript">
                <!--
                        function open_document()
                        {
                                width = 620;
                                height = 580;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
    window.open('telecharger_mention.php?type=2&table=deces&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
                      <a href="#null" onClick="javascript:open_document();" style="text-decoration:none">وثائق أخرى متعلقة بالرسم </a> 
                    
				
				
				</div></td>
                <td bgcolor="#EFEFEF"><div align="center">
				
										
		
				                          <script type="text/javascript">
                <!--
                        function confirmer()
                        {
                                width = 620;
                                height = 580;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
    window.open('confirmer.php?type=2&table=deces&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
              <a href="#null" onClick="javascript:confirmer();" style="text-decoration:none"> <img src="icone/blue-ok.png" width="20" height="20" title="تأكيد البيانات"> </a> 


				
				
				</div></td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                    
                  <div align="center">
                    <input name="nom_a" type="text" id="nom_a" value="<?php echo $rox[nom_a_p]; ?>" size="33" dir="rtl">
                        
                        
                    <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" /></div>
                </div></td>
                </tr>
              <tr>
                <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                  nom et prénom 
                      <input name="nom" type="text" id="nom" value="<?php echo $rox[nom_f_p]; ?>" size="30">
                </div></td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#EFEFEF" class="style39"><div align="center">الجنسية</div></td>
                </tr>
              <tr>
                <td bgcolor="#EFEFEF" class="style39"><label></label>
                    <div align="center">
                      <label></label>
                      <input name="nationalite" type="text" id="nationalite" value="<?php echo $rox[nationalite_p]; ?>" size="17">
                  </div></td>
                <td bgcolor="#EFEFEF" class="style39"><div align="center">
                    <input name="nationalite_a" type="text" id="nationalite_a" size="17" dir="rtl" value="<?php echo $rox[nationalite_pa]; ?>">
                    <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nationalite_a')" /> </div></td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#EFEFEF" class="style39"><div align="center">الحرفة</div></td>
                </tr>
              <tr>
                <td bgcolor="#EFEFEF" class="style39"><label></label>
                    <div align="center">
                      <label></label>
                      <input name="profession" type="text" id="profession" value="<?php echo $rox[prof_p]; ?>" size="16">
                  </div></td>
                <td bgcolor="#EFEFEF" class="style39"><div align="center">
                    <input name="profession_a" type="text" id="profession_a" value="<?php echo $rox[prof_p_a]; ?>" size="16" dir="rtl">
                    <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('profession_a')" /> </div></td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#EFEFEF"><div align="center"><span class="style39">الساكن ب</span></div></td>
              </tr>
              <tr>
                <td bgcolor="#EFEFEF" class="style39"><label></label>
                    <label></label>
                    <label></label>
                    <div align="center">
                      <input name="adresse_p" type="text" id="adresse_p" value="<?php echo $rox[adresse_p]; ?>" size="17">
                  </div></td>
                <td bgcolor="#EFEFEF" class="style39"><div align="center">
                    <input name="adresse_p_a" type="text" id="adresse_p_a" value="<?php echo $rox[adresse_p_a]; ?>" size="17" dir="rtl">
                    <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('adresse_p_a')" /> </div></td>
              </tr>
      </table>
	  
	  
	  
	  
	  
	  
			
			
                <table width="360" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td bgcolor="#EFEFEF"><div align="center"><span class="style39">تاريخ الإزدياد الهجري</span></div></td>
              </tr>
              <tr>
                <td width="344" bgcolor="#EFEFEF"><div align="center">
                  <script type="text/javascript">
                <!--
                        function open_infoss()
                        {
                                width = 520;
                                height = 450;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
                                 window.open('esss.php?convert=2&ch=date_hlf&ch1=date_hla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>

				  <input name="date_hla" type="text" id="date_hla" dir="rtl" size="45" value="<?php echo $rox[date_hla_p]; ?>">			  
		          <a href="#null" onClick="javascript:open_infoss();">
		          
		          <img src="icone/convertisseur.PNG" width="20" height="20"></a>	
				  

                </div></td>
              </tr>
              <tr>
                <td bgcolor="#EFEFEF"><div align="center">
                  <script type="text/javascript">
                <!--
                        function open_infossss()
                        {
                                width = 520;
                                height = 450;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
                                window.open('esss.php?convert=2&ch=date_hlf&ch1=date_hla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>

<!--
		          <a href="#null" onClick="javascript:open_infossss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a>
	-->			  
				  
				  
				  En français
				  <input name="date_hlf" type="text" id="date_hlf" value="<?php echo $rox[date_hlf_p]; ?>" size="40">
                </div></td>
              </tr>
      </table>

			
			
			
			
			
			

                <table width="360" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td bgcolor="#EFEFEF"><div align="right"><span class="style39">تاريخ الإزدياد الميلادي</span></div></td>
              </tr>
              <tr>
                <td width="354" bgcolor="#EFEFEF"><div align="center">
                  <script type="text/javascript">
                <!--
                        function open_infos()
                        {
                                width = 520;
                                height = 450;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
         window.open('esss.php?convert=1&ch=date_mlf&ch1=date_mla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>

<input name="date_mla" type="text" id="date_mla" dir="rtl" value="<?php echo $rox[date_pla_p]; ?>" size="45">		          <a href="#null" onClick="javascript:open_infos();">
		          
		          <img src="icone/convertisseur.PNG" width="20" height="20"></a>

                </div></td>
              </tr>
              <tr>
                <td bgcolor="#EFEFEF"><div align="center">En français
                  <input name="date_mlf" type="text" id="date_mlf" value="<?php echo $rox[date_plf_p]; ?>" size="40">
                </div></td>
              </tr>
              <tr>
                <td bgcolor="#EFEFEF"><div align="center">
                  <script type="text/javascript">
                <!--
                        function open_infosss()
                        {
                                width = 520;
                                height = 450;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
                                window.open('esss.php?convert=1&ch=date_mlf&ch1=date_mla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>

<!--
		          <a href="#null" onClick="javascript:open_infosss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a>
	-->
                <input name="date_m" type="text" id="date_m" value="<?php echo convertDate_f($rox[date_n_p]); ?>" size="10" maxlength="10">
                <button id="trigger1"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
                <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "date_m",
		        button            : "trigger1",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
</div></td>
              </tr>
      </table>

			
			
			
			
			
			
			
			


			
			
              </p>
            <p>
              <input name="trans" type="hidden" id="trans" value="<?php echo $trans;?>">
              <input name="cat" type="hidden" id="cat" value="<?php echo $cat;?>">
              <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration ;?>">
              <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
              <input name="origine" type="hidden" id="origine" value="<?php echo $origine;?>">
              <input name="origineb" type="hidden" id="origineb" value="<?php echo $origineb;?>">
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

