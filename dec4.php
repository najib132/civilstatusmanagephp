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
if ($permission==securite2($tim2)) { 

$cat=$_GET["cat"];

 
  include("div2.php");


?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLiees.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>


<?php  ///////////////////////////MISE A JOUR DONNES PERE

	  $annee_declaration = addslashes($_GET["annee_declaration"]);
 $code = addslashes($_GET["code"]);  $partie = addslashes($_GET["partie"]);



$nationalite = addslashes($_GET["nationalite"]);
$nom = addslashes($_GET["nom"]);
$profession = addslashes($_GET["profession"]);
$adresse_p = addslashes($_GET["adresse_p"]);



////////////////CONVERSION DATE

include"conn/conversion.php";


 $Requete =  "UPDATE deces SET 
 
  									`prof_m`='$profession',
									`nationalite_m`='$nationalite',
									`nom_f_m`='$nom',
									`adresse_m`='$adresse_p'
									
									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


 $Requete2 =  "UPDATE origine_deces SET 


 
  									`prof_m`='$profession',
									`nationalite_m`='$nationalite',
									`nom_f_m`='$nom',
									`adresse_m`='$adresse_p'
									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result2 = @mysql_query($Requete2,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 




 $Req =  "SELECT *  FROM `deces` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `partie`='".$partie."'   ";

 mysql_query("SET NAMES 'UTF8' ");

$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

	$rox = mysql_fetch_array($res);




?>


<?php
$valider=$_POST["valider"];
if ($valider!="إضافة معلومات عن التصريح") { ?>


<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:464px;
	top:638px;
	width:194px;
	height:128px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:546px;
	top:583px;
	width:202px;
	height:24px;
	z-index:2;
}
body {
	background-color: #FFFFFF;
}
.style39 {font-size: 18px}
.style40 {font-size: 14px}
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
  top: 547px;
  left: 694px;
}
.style41 {font-size: 16px}
   </style>



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
</head>

<body>





  <script type="text/javascript">

function Validerfrm()
{

var date_m = document.formulaire_envoi_fichier.date_m.value;

var long=formulaire_envoi_fichier.date_m.value.length;
var mois=date_m.substring(3,5);
var jour=date_m.substring(0,2);
var annee=date_m.substring(6,10);

	

if(date_m == "" || long!=10 || date_m.substring(2,3)!="/" || date_m.substring(5,6)!="/" || mois>12 || jour>31 || isNaN(jour) || isNaN(mois) || isNaN(annee) ) 
		{ 
        alert ('Vérifier le Champ date'); 
		//alert(date_m.substring(5,7))
		//alert(date_m.substring(0,4))
        document.formulaire_envoi_fichier.date_m.focus(); 
        return false; 
    	} 
	
				
 }
		
		
///////////////////////////////////

    </script>


          <script type="text/javascript">
                <!--
                        function open_infosj()
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
         window.open('esss.php?convert=3&ch=date_j_mlf&ch1=date_j_mla','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>


          <script type="text/javascript">
                <!--
                        function open_infosssj()
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
                                window.open('esss.php?convert=1&ch=date_j_mla','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>


          <script type="text/javascript">
                <!--
                        function open_infossj()
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
                                 window.open('esss.php?convert=2&ch=date_j_hlf&ch1=date_j_hla','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                  </script>


          <script type="text/javascript">
                <!--
                        function open_infossssj()
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
                                window.open('esss.php?convert=2&ch=date_j_hla','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                  </script>






  <div id="Layer1">
    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>
</div>
  <form name="formulaire_envoi_fichier" id="formulaire_envoi_fichier" enctype="multipart/form-data" method="post" action="" onSubmit="return Validerfrm()">
  <div align="center">
    <p>
      <label></label></p>

<div id="scan">



<a href="<?php 	 	  
	   if($cat=="المولود") $tablo="naissance"; 
 
  if($cat=="المتوفى") $tablo="deces";

	  
$acte="doc_$tablo/$annee_declaration/$partie/$rox[pj]";
echo $acte  ?>.jpg" target="_blank"><img src="<?php echo $acte ?>.jpg" width="650" height="780" /></a>

</div> 

<div id="formulaire">
  <table width="360">
                  <tr>
                    <td bgcolor="#EFEFEF" class="style39"><div align="center"> 
                      <input name="etat" type="text" id="etat" value="<?php echo $rox[etat]; ?>" size="33">
                      و قد كان المتوفى 
                      
                    </div></td>
                  </tr>
                </table>
      <fieldset style="width:322px">
              <legend align="right"><span class="style19 style39">معلومات عن التصريح</span></legend>
                <table width="360" border="1" cellpadding="0" cellspacing="0">
                  
                  <tr>
                  <td width="184" bgcolor="#EFEFEF"><div align="center">
                      <input name="nom1" type="text" id="nom1" value="<?php 
					
 $Req =  "SELECT nom_a, nom_a_p,nom, nom_f_p  FROM `deces` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `partie`='".$partie."'   ";

 mysql_query("SET NAMES 'UTF8' ");

$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

	$roxx = mysql_fetch_array($res);

		$tmp=explode(" ",$roxx[nom_f_p]);
		$heure=$tmp[0];

					echo "$heure $roxx[nom]"; 
					?>" size="20">
                  </div></td>
                  <td width="190" bgcolor="#EFEFEF">
                      <div align="center" class="style41">إسم المصرح
                        <?php if($cat=="المولود") echo "بالمولود"; else if($cat=="بالمتوفى")  ?>                    
                    </div></td>
                </tr>
                  
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                    <input name="lien1" type="text" id="lien1" size="20" value="<?php 
				  
 $Requete3 = "select delegation,delegation_a,lien_a, officier_a, lien, officier from utilisateurs  where `id`='".$idf_m."'  ";
mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3); 
	
	echo $row[lien];
				  			  

				  ?>">
                  </div></td>
                  <td bgcolor="#EFEFEF"><div align="center" class="style41">صلته
                      <?php if($cat=="المولود") echo "بالمولود"; else echo "بالمتوفى"; ?>
                  </div></td>
                </tr>
                
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                      <input name="prof_lien" type="text" id="prof_lien" value="<?php echo $row[prof_lien]; ?>" size="20">
                  </div></td>
                  <td bgcolor="#EFEFEF">
                    <div align="center" class="style41">مهنة المصرح</div></td>
                </tr>
                
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                    <input name="age_f" type="text" id="age_f" value=".....ans" size="20">
                  </div>                    <div align="center" class="style39"></div></td>
                  <td bgcolor="#EFEFEF"><div align="center" class="style41">عمره</div></td>
                </tr>
                
                <tr>
                  <td bgcolor="#EFEFEF" class="style39"><label></label>
                      <div align="center">
                        <label></label>
                        <input name="nationalite_d" type="text" id="nationalite_d" value="marocaine" size="20">
                    </div></td>
                  <td bgcolor="#EFEFEF"><div align="center" class="style41">جنسية المصرح</div></td>
                </tr>
                
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                    <input name="adresse_d" type="text" id="adresse_d" value="<?php echo $rox[adresse_d]; ?>" size="20">
                  </div></td>
                  <td bgcolor="#EFEFEF"><div align="center">الساكن ب</div></td>
                </tr>
              </table>
                <span class="style40">
                
                <?php if($rox[deces_naissance]==3 || $rox[deces_naissance]==4 || $rox[deces_naissance]==5 )  {  ?>
				
				
				
<table width="360" border="1" cellpadding="0" cellspacing="0">
  
  <tr>
    <td width="374" bgcolor="#EFEFEF"><div align="center">source 
        <input name="tribunale" type="text" id="tribunale" size="35" value="<?php echo $rox[tribunale]; ?>" />
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#EFEFEF"><div align="right" class="style39">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1581;&#1603;&#1605;</div></td>
  </tr>
  
  <tr>
    <td bgcolor="#EFEFEF"><div align="center"><!--   <a href="#null" onClick="javascript:open_infosssj();"><img src="icone/convertisseur.PNG" width="20" height="20" /></a> --> 
      <input name="date_j_hlf" type="text" id="date_j_hlf" value="<?php echo $rox[date_j_hlf]; ?>"  dir="rtl" size="35" />
	  
	  
	  
	  					
				  
				  
				                <script type="text/javascript">
                <!--
                        function open_naisss()
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
                                 window.open('datef.php?convert=1&ch=date_j_hlf','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
				
           <a href="#null" onClick="javascript:open_naisss();"> <img src="icone/convertisseur.PNG" width="20" height="20"></a>

		   
		   Héjire

	  
	  
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#EFEFEF"><div align="right" class="style39">
      <div align="center">
        <input name="date_j_mlf" type="text" id="date_j_mlf" value="<?php echo $rox[date_j_mlf]; ?>"  dir="rtl" size="35" />
		
		
		
						  
				              <script type="text/javascript">
                <!--
                        function open_naissmm()
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
                                 window.open('datef.php?convert=2&ch=date_j_mlf','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
				
           <a href="#null" onClick="javascript:open_naissmm();"> <img src="icone/convertisseur.PNG" width="20" height="20"></a>
			  
			  
			  Grégo

		
		
        </div>
    </div></td>
  </tr>
</table>
<?php } ?>
							
                </span>
                  <label></label>
              </p>
              <table width="360" border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong>تاريخ التصريح </strong></div></td>
                </tr>
                
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">

                      <!--               <a href="#null" onClick="javascript:open_infossssg();"><img src="icone/convertisseur.PNG" width="20" height="39"></a> -->
                      <input name="date_d_hlf" type="text" id="date_d_hlf" value="<?php echo $rox[date_d_hlf]; ?>" size="40">
                    
					
					
				  
				  
				                <script type="text/javascript">
                <!--
                        function open_naiss()
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
                                 window.open('datef.php?convert=1&ch=date_d_hlf','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
				
           <a href="#null" onClick="javascript:open_naiss();"> <img src="icone/convertisseur.PNG" width="20" height="20"></a>

		   
		   Héjire
				  
					
					
					
					
					</div>
                      <div align="center"></div></td>
                </tr>
                
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">

                      <!--                <a href="#null" onClick="javascript:open_infosssg();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> -->
                    <input name="date_d_mlf" type="text" id="date_d_mlf" value="<?php echo $rox[date_d_mlf]; ?>" size="40">
                  
				  
				  
				              <script type="text/javascript">
                <!--
                        function open_naissm()
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
                                 window.open('datef.php?convert=2&ch=date_d_mlf','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
				
           <a href="#null" onClick="javascript:open_naissm();"> <img src="icone/convertisseur.PNG" width="20" height="20"></a>
			  
			  
			  Grégo
				
				  
				  
				  
				  
				  </div></td>
                </tr>
              </table>
			  
			  
			  <table width="360">
                <tr>
                  <td width="127" bgcolor="#EFEFEF" class="style39 style41"><label></label>
                    <div align="center">Heure</div></td>
                  <td width="221" bgcolor="#EFEFEF" class="style39"><input name="heure_f" type="text" class="style41" id="heure_f" value="<?php echo $rox[heure_f_d]; ?>"></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF" class="style39 style41"><label></label>
                    <div align="center">Minute</div></td>
                  <td bgcolor="#EFEFEF" class="style39"><input name="minute_f" type="text" class="style41" id="minute_f" value="<?php echo $rox[minute_f_d]; ?>"></td>
                </tr>
              </table>
	  </fieldset>
			  
			  
			  
			  
              <fieldset style="width:322px">
              <legend align="right"><strong>التوقيع</strong></legend>
                <table width="360" border="1" cellpadding="0" cellspacing="0">
                
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                    <textarea name="officier" cols="45" rows="3" id="officier"><?php echo $row[officier];  ?></textarea>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">و بعد تلاوة الرسم على المصرح</div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">ووقعناه وحدنا
                    <input name="signature" type="radio" value="0" <?php   if($rox[signature]==0) echo'checked'; ?>>
                  </div></td>
                  <td bgcolor="#EFEFEF"><div align="center">ووقعه معنا
                    <label>
                          <input name="signature" type="radio" value="1" <?php   if($rox[signature]==1) echo'checked'; ?>>
                    </label>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">وضابط الحالة المدنية </div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                      <input name="delegation" type="text" id="delegation" value="<?php echo $row[delegation];  ?>" size="23">
                    </div>
                      <div align="center">
                        <div align="left"></div>
                      </div></td>
                  <td bgcolor="#EFEFEF"><div align="center"></div></td>

                </tr>
              </table>
              </fieldset>
			  







			  
			  
              <p align="center">
                <input name="trans" type="hidden" id="trans" value="<?php echo $trans;?>">
                <input name="cat" type="hidden" id="cat" value="<?php echo $cat;?>">
                <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
                <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
                <input name="origine" type="hidden" id="origine" value="<?php echo $origine;?>">
                <input name="origineb" type="hidden" id="origineb" value="<?php echo $origineb;?>">
                <input name="valider" type="submit" id="valider" value="إضافة معلومات عن التصريح"/>
              </p>
              <p align="center">&nbsp;</p>
              <p align="center">&nbsp;</p>
              <p align="center">&nbsp;</p>
              <p align="center">&nbsp;</p>
              <p align="center">&nbsp;</p>
              <p align="center">&nbsp;</p>
              <p align="center">&nbsp;</p>
              <p align="center">&nbsp;</p>
    </div>
    </div>
			
			
    <p><br>
      <br>
    </p>
  </div>
</form>






<?php }else
	
{


 include"div_menu.php";
 
 
$nom1=addslashes($_POST["nom1"]);
$nom_a1=addslashes($_POST["nom_a1"]);
$age_f=addslashes($_POST["age_f"]);
$jugement=addslashes($_POST["jugement"]);
$date_jugement=addslashes($_POST["date_jugement"]);
$lien1=addslashes($_POST["lien1"]);
$lien_a1=addslashes($_POST["lien_a1"]);


$prof_lien=addslashes($_POST["prof_lien"]);


$officier=addslashes($_POST["officier"]);


$prof_personne=addslashes($_POST["prof_personne"]);


$adresse_d=addslashes($_POST["adresse_d"]);
$lieu1=addslashes($_POST["lieu1"]);


									$ancien_ville_f=addslashes($_POST["ancien_ville_f"]);
									$ancien_officier_f=addslashes($_POST["ancien_officier_f"]);


$date_mlf=	addslashes($_POST["date_mlf"]);
$date_hlf=  addslashes($_POST["date_hlf"]);


$date_d_mlf=addslashes($_POST["date_d_mlf"]);
$date_d_hlf=  addslashes($_POST["date_d_hlf"]);

$nationalite_d = addslashes($_POST["nationalite_d"]);




$date_j_mlf=addslashes($_POST["date_j_mlf"]);
$date_j_hlf=  addslashes($_POST["date_j_hlf"]);


$tribunale=addslashes($_POST["tribunale"]);

$signature=addslashes($_POST["signature"]);
$delegation=addslashes($_POST["delegation"]);

$etat=addslashes($_POST["etat"]);


$heure_f=addslashes($_POST["heure_f"]);
$minute_f=addslashes($_POST["minute_f"]);


$table="deces";

	$Requete3 = "select date_n,sex from $table where `annee_declaration`='$annee_declaration' and `code`='$code' and `partie`='$partie' ";
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de60 la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
$date_naissance=$row['date_n'];
$sex=$row['sex'];

/////////////////////////DENNES PARE


$fichier="doc_deces/$annee_declaration/0$code.jpg"; //OUVRE LE FICHIER compteur.txt
if((file_exists($fichier)==TRUE)) $mention="<a href=bayane.php?annee_declaration=$annee_declaration&code=$code&deces_naissance=0&date_n=$date_naissance&sex=$sex&partie=$partie target=_blank><img src=$fichier width=692 height=780/></a>";



									 
	
$print=" 

<div align=center>


   <p><a href=bayane.php?annee_declaration=$annee_declaration&code=$code&deces_naissance=1&date_n=$date_naissance&sex=$sex&partie=$partie target=_blank>تابع إضافة البيانات الهامشية</a> </p>
   
   $mention

  <p><img src=icone/print.GIF border=0></p>
  <p>طباعة</p> 
  
  
     <p><a href=etat/fiche_declaration_deces.php?annee_declaration=$annee_declaration&code=$code&partie=$partie target=_blank> ورقة التصريح -- المسودة </a>

   <p><a href=etat/extrait_deces.php?annee_declaration=$annee_declaration&code=$code&partie=$partie target=_blank> A/F نسخة موجزة من رسم الوفاة </a></p>
   <p><a href=etat/extrait_deces-a.php?annee_declaration=$annee_declaration&code=$code&partie=$partie target=_blank> Arabe نسخة موجزة من رسم الوفاة </a></p>
   <p><a href=etat/extrait_deces-f.php?annee_declaration=$annee_declaration&code=$code&partie=$partie target=_blank> Français نسخة موجزة من رسم الوفاة </a></p>



  <p><a href=etat/integrale_deces-a.php?annee_declaration=$annee_declaration&code=$code&table=$table&partie=$partie target=_blank>Arabe نسخة كاملة من رسم الوفاة</a></p>
  <p><a href=etat/integrale_deces.php?annee_declaration=$annee_declaration&code=$code&table=$table&partie=$partie target=_blank>Français نسخة كاملة من رسم الوفاة</a></p>

  <p><a href=etat/afficher_deces.php?annee_declaration=$annee_declaration&code=$code&partie=$partie target=_blank>إطلاع عن المعلومات</a></p>
  
    <p><a href=modifier_deces.php?annee_declaration=$annee_declaration&code=$code&table=$table&cat=$cat&trans=$trans&partie=$partie>تعديل</a></p>

      <p><a href=index_civil.php>الرجوع إلى القائمة</a></p>


</div>
<p>&nbsp;</p>


";

									 
 $Requete =  "UPDATE deces SET    
									`signature`='$signature',
									`delegation`='$delegation',
									`officier`='$officier',
									`resp_declaration`='$nom1',
									`age_f`='$age_f',
									`lien`='$lien1',
									
									`date_d_mlf`='$date_d_mlf',
									`date_d_hlf`='$date_d_hlf',


									`date_j_mlf`='$date_j_mlf',
									`date_j_hlf`='$date_j_hlf',
									
									
									`tribunale`='$tribunale',
									

									`nationalite_d`='$nationalite_d',
									`adresse_d`='$adresse_d',

									`prof_lien`='$prof_lien',

									`heure_f_d`='$heure_f',
									`minute_f_d`='$minute_f',
									`etat`='$etat'  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la 5m requete d'identification<br>".mysql_error()); 



 $Requete5 =  "UPDATE origine_deces SET    

									`signature`='$signature',
									`delegation`='$delegation',
									`officier`='$officier',
									`resp_declaration`='$nom1',
									`age_f`='$age_f',
									`lien`='$lien1',
									
									`date_d_mlf`='$date_d_mlf',
									`date_d_hlf`='$date_d_hlf',


									`date_j_mlf`='$date_j_mlf',
									`date_j_hlf`='$date_j_hlf',
									
									
									`tribunale`='$tribunale',
									

									`nationalite_d`='$nationalite_d',
									`adresse_d`='$adresse_d',

									`prof_lien`='$prof_lien',

									`heure_f_d`='$heure_f',
									`minute_f_d`='$minute_f',
									`etat`='$etat'  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result5 = @mysql_query($Requete5,$id) or die ("<br>Probl&egrave;me d'execution de la 55 requete d'identification<br>".mysql_error()); 




echo "$print";





}
?>
</div>
<div id="Layer1">   
  <div id="background" class="background" style="display: none;"></div>
          <div id="clv_arb" class="clv_arb" style="display: none;"></div>
</div>
</body>
</html>
















<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>
