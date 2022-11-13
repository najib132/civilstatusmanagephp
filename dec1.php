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
   
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) {     include("div2.php"); 

$table=$_GET["table"];
$cat=$_GET["cat"];
$trans=$_GET["trans"];

$code = addslashes($_GET["code"]);  $partie = addslashes($_GET["partie"]);

$annee_declaration = addslashes($_GET["annee_declaration"]);





?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      


 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>


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
  top: 140px;
  left: 700px;
}
#Layer1 {	position:absolute;
	left:455px;
	top:490px;
	width:176px;
	height:147px;
	z-index:1;
}
   .style41 {font-size: 16px}
   </style>

   
</head>
<body>

  <p>
    <?php 
	

$origine=$_GET["origine"];
	 $origineb=$_GET["origineb"];

$Req =  "SELECT *  FROM `deces` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `partie`='".$partie."'   ";

 mysql_query("SET NAMES 'UTF8' ");

$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

	$rox = mysql_fetch_array($res);
	




?>
  </p>
  <p>
    
    







    <script type="text/javascript">

function Validerfrm()
{

var prenom = document.form1.prenom.value;
var nom = document.form1.nom.value;

var prenom_a = document.form1.prenom_a.value;
var nom_a = document.form1.nom_a.value;

var date_hla = document.form1.date_hla.value;
var date_mla = document.form1.date_mla.value;


var date_d_hla = document.form1.date_d_hla.value;
var date_d_mla = document.form1.date_d_mla.value;


var lieu1 = document.form1.lieu1.value;


var date_m = document.form1.date_m.value;

var long=form1.date_m.value.length;
var mois=date_m.substring(3,5);
var jour=date_m.substring(0,2);
var annee=date_m.substring(6,10);


var date_n_d = document.form1.date_n_d.value;

var long1=form1.date_n_d.value.length;
var mois1=date_n_d.substring(3,5);
var jour1=date_n_d.substring(0,2);
var annee1=date_n_d.substring(6,10);



if(date_d_hla=="" || date_d_hla=="تاريخ الوفاة الهجري") 
		{ 
        alert ('Vérifier le Champ Date de Décés hégérienne'); 
        document.form1.date_d_hla.focus(); 
        return false; 
    	} 


if(date_d_mla=="" || date_d_mla=="تاريخ الوفاة الميلادي") 
		{ 
        alert ('Vérifier le Champ Date de Décés grégorienne'); 
        document.form1.date_d_mla.focus(); 
        return false; 
    	} 


if(date_n_d == "" || long1!=10 || date_n_d.substring(2,3)!="/" || date_n_d.substring(5,6)!="/" || mois1>12 || jour1>31 || isNaN(jour1) || isNaN(mois1) || isNaN(annee1) ) 
		{ 
        alert ('Vérifier le Champ date de décés'); 
		//alert(date_n_d.substring(5,7))
		//alert(date_n_d.substring(0,4))
        document.form1.date_n_d.focus(); 
        return false; 
    	} 


		
if(prenom=="" || prenom=="Prénom") 
		{ 
        alert ('Vérifier le Champ PRENOM'); 
        document.form1.prenom.focus(); 
        return false; 
    	} 


		
if(nom=="" || nom=="nom") 
		{ 
		
        alert ('Vérifier le Champ NOM'); 
        document.form1.nom.focus(); 
        return false; 
    	} 

		
if(prenom_a=="" || prenom_a=="الإسم الشخصي" || !isNaN(prenom_a)) 
		{ 
        alert ('Vérifier le Champ PREnom'); 
        document.form1.prenom_a.focus(); 
        return false; 
    	} 

		
if(nom_a=="" || nom_a=="الإسم العائلي" || !isNaN(nom_a)) 
		{ 
		
        alert ('Vérifier le Champ nom'); 
        document.form1.nom_a.focus(); 
        return false; 
    	} 


if(date_hla=="" || date_hla=="بالحروف العربية") 
		{ 
        alert ('Vérifier le Champ Date de naissance hégérienne'); 
        document.form1.date_hla.focus(); 
        return false; 
    	} 


if(date_mla=="" || date_mla=="بالحروف العربية") 
		{ 
        alert ('Vérifier le Champ Date de naissance grégorienne'); 
        document.form1.date_mla.focus(); 
        return false; 
    	} 

if(lieu1=="" || lieu1=="مكان الإزدياد") 
		{ 
        alert ('Vérifier le Champ Lieu de Naissance'); 
        document.form1.lieu1.focus(); 
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











  </p>
  <form action="dec2.php" method="get" name="form1" id="form1" onSubmit="return Validerfrm()">

<div id="scan">


<a href="<?php 	
 	  

 $acte="doc_deces/$annee_declaration/$partie/$rox[pj]";

echo $acte  ?>.jpg" target="_blank"><img src="<?php echo $acte ?>.jpg" width="650" height="780"></a>

	</div> 

<div id="formulaire">

	
	
	
	    <fieldset style="width:380px">
    <legend align="right"><span class="style19 style39">معلومات عن <?php  echo $cat ?></span></legend>
	
		    <fieldset style="width:320px">
    <legend align="right"><span class="style19 style39"></span>تاريخ الوفاة</legend>

	
	<table width="360" border="1" cellpadding="0" cellspacing="0">
          
          <tr>
            <td width="374" bgcolor="#EFEFEF"><div align="center">
              <input name="date_d_hlf" type="text" id="date_d_hlf" value="<?php echo $rox[date_hlf_d]; ?>" size="37" >
			  
			  
			  
			  
			  
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
			  
			  
			  
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
              <input name="date_d_mlf" type="text" id="date_d_mlf" value="<?php echo $rox[date_mlf_d]; ?>" size="37">
            
			
			
			
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
	    </fieldset>

		
		        <table width="360">
          <tr>
            <td width="108" bgcolor="#EFEFEF" class="style41"><label></label>
              
                <div align="left">Heure</div></td>
            <td width="240" bgcolor="#EFEFEF" class="style39"><input name="heure_f" type="text" id="heure_f" value="<?php echo $rox[heure_f]; ?>" size="27"></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF" class="style41">Minute</td>
            <td bgcolor="#EFEFEF" class="style39"><input name="minute_f" type="text" id="minute_f" value="<?php echo $rox[minute_f]; ?>" size="27"></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF" class="style41">Lieu de décés </td>
            <td bgcolor="#EFEFEF" class="style39"><input name="bayane" type="text" id="bayane" value="<?php echo $rox[ville_deces]; ?>" size="27"></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
                <input name="prenom" type="text" id="prenom" value="<?php echo $rox[prenom]; ?>" size="17">
            </div></td>
            <td bgcolor="#EFEFEF"><div align="center">
                <div align="left">
                  <input name="prenom_a" type="text" id="prenom_a" dir="rtl" value="<?php echo $rox[prenom_a]; ?>" size="22">
                  <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prenom_a')" /></div>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
                <input name="nom" type="text" id="nom" value="<?php echo $rox[nom]; ?>" size="17">
            </div></td>
            <td bgcolor="#EFEFEF"><div align="center">
                <div align="left">
                  <input name="nom_a" type="text" id="nom_a" dir="rtl" value="<?php echo $rox[nom_a]; ?>" size="22">
                  <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" /></div>
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF">de nationalité</td>
            <td bgcolor="#EFEFEF"><input name="nationalite_personne" type="text" id="nationalite_personne" value="<?php echo $rox[nationalite_personne]; ?>" size="22" /></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF">Lieu de naissance </td>
            <td bgcolor="#EFEFEF"><input name="lieu" type="text" id="lieu" value="<?php echo $rox[lieu]; ?>" size="30"></td>
          </tr>
        </table>
		
		
		
		
	    <fieldset style="width:320px">
    <legend align="right"><span class="style19 style39"></span> تاريخ الإزدياد</legend>

	
	<table width="360" border="1" cellpadding="0" cellspacing="0">
          
          <tr>
            <td width="374" bgcolor="#EFEFEF"><div align="center">
              <input name="date_hlf" type="text" id="date_hlf" value="<?php echo $rox[date_hlf]; ?>" size="37" >
			  
			  
			  
			  
			  
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
                                 window.open('datef.php?convert=1&ch=date_hlf','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
				
           <a href="#null" onClick="javascript:open_naisss();"> <img src="icone/convertisseur.PNG" width="20" height="20"></a>

		   
		   Héjire
			  
			  
			  
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
              <input name="date_mlf" type="text" id="date_mlf" value="<?php echo $rox[date_mlf]; ?>" size="37">
            
			
			
			
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
                                 window.open('datef.php?convert=2&ch=date_mlf','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
				
           <a href="#null" onClick="javascript:open_naissmm();"> <img src="icone/convertisseur.PNG" width="20" height="20"></a>
			  
			  
			  Grégo
			
			
			</div></td>
          </tr>
        </table>
	    </fieldset>


				
				<table width="360" border="1" cellpadding="0" cellspacing="0">
                    <tr>
            <td colspan="2" bgcolor="#EFEFEF"><div align="center"></div></td>
          </tr>
          <tr>
            <td width="141" bgcolor="#EFEFEF"><div align="center">Profession </div>              
            <div align="center"></div></td>
            <td width="213" bgcolor="#EFEFEF"><input name="prof_personne" type="text" id="prof_personne" value="<?php echo $rox[prof_personne]; ?>"></td>
          </tr>

          <tr>
            <td bgcolor="#EFEFEF"><div align="center">Résidant à </div></td>
            <td bgcolor="#EFEFEF"><input name="adresse" type="text" id="adresse" value="<?php echo "commune $section cercle $cercle1 province $province" ?>"></td>
          </tr>
    </table>

			  


		
		</p>
	    <p>
	      <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
	      <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
	      <input name="table" type="hidden" id="table" value="<?php echo $table;?>">
	      <input name="trans" type="hidden" id="trans" value="<?php echo $trans;?>">
	      <input name="cat" type="hidden" id="cat" value="<?php echo $cat;?>">
	      <input name="origineb" type="hidden" id="origineb" value="<?php echo $origineb;?>">
	      <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
	      <input name="valider" type="submit" class="style39" id="valider" value="تابع تعديل معلومات عن الأب"/>
	    </p>
	    </fieldset>



		
	</div>
		</div>
		
		


	
    <p>
      <label></label>
    </p>
</form>
</div>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
  </div>

  <div id="Layer1">   
    <div id="background" class="background" style="display: none;"></div>
          <div id="clv_arb" class="clv_arb" style="display: none;"></div>
</div>
</body>
</html>


<?php    }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>

