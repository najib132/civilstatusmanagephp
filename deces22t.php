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

$cercle=$_SESSION["cercle"];  
    

$annexe=$_SESSION["annexe"];      
$annexe1=$_SESSION["annexe1"];     $region=$_SESSION["region"];  $region1=$_SESSION["region1"];      

   $idf=$_SESSION["idf"];
   $idf_m=$_SESSION["idf_m"];
   
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) { include("div2.php");  

$cat=$_GET["cat"];
$trans=$_GET["trans"];


?>

<?php 

 $annee_declaration = addslashes($_GET["region"]);
$code = addslashes($_GET["code"]);

$partie = addslashes($_GET["partie"]);

		 if($cat=="المولود") $table="naissance"; else if($cat=="المتوفى") $table="deces";
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


#contenu1 {
margin-left:155px;
}
#menu2 {
float:right;
}
#contenu2 {
margin-right:155px;
}

#formulaire {
  position: absolute;
  top: 140px;
  left: 700px;
}


#Layer1 {
	position:absolute;
	left:463px;
	top:400px;
	width:176px;
	height:147px;
	z-index:1;
}
.style4 {font-size: 14px}
</style>
   
   
</head>
<body>
<div id="Layer1">   
  <div id="background" class="background" style="display: none;"></div>
          <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>
<div align="center">





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
var bayane1 = document.form1.bayane1.value;
var lieu = document.form1.lieu.value;
var bayane = document.form1.bayane.value;

var annee_h = document.form1.annee_h.value;
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


if(annee_h == "" || isNaN(annee_h)) 
		{ 
        alert ('Vérifier le Champ Année hégerienne'); 
		//alert(date_m.substring(5,7))
		//alert(date_m.substring(0,4))
        document.form1.annee_h.focus(); 
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



if(bayane1=="" || bayane1=="<?php echo "جماعة $section1 دائرة $cercle اقليم $province1" ?>") 
		{ 
        alert ('Vérifier le Champ Lieu de décés'); 
        document.form1.bayane1.focus(); 
        return false; 
    	} 


if(bayane=="" || bayane=="<?php echo "commune $section1 cercle $cercle province $province1" ?>") 
		{ 
        alert ('Vérifier le Champ Lieu de décés'); 
        document.form1.bayane.focus(); 
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

if(lieu1=="" || lieu1=="مكان الإزدياد" || lieu1=="<?php echo "جماعة $section1 دائرة $cercle اقليم $province1" ?>") 
		{ 
        alert ('Vérifier le Champ Lieu de Naissance'); 
        document.form1.lieu1.focus(); 
        return false; 
    	} 


if(lieu=="" || lieu=="<?php echo "commune $section1 cercle $cercle province $province1" ?>") 
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




  <form action="deces2t.php" method="get" name="form1" id="form1" onSubmit="return Validerfrm()">


<div id="scan">

<a href="<?php 	
		 	  
$pj=$code;

		 	  
$acte="doc_$table/$annee_declaration/$partie/$pj";
echo $acte  ?>.jpg" target="_blank"><img src="<?php echo $acte ?>.jpg" width="692" height="780" /></a>

</div> 

<div id="formulaire">


              <fieldset style="width:380px">
              <legend align="right"><span class="style19 style39">معلومات عن
                <?php  echo $cat ?>
                </span></legend>
				


        <table width="360" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="309" bgcolor="#EFEFEF"><div align="center">
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
    window.open('telecharger_mention.php?type=2&partie=<?php echo $partie ?>&table=<?php echo $table ?>&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
            <a href="#null" onClick="javascript:open_document();" style="text-decoration:none">وثائق أخرى متعلقة بالرسم </a> </div></td>
            <td width="45" bgcolor="#EFEFEF"><div align="center">
			
			
			
							  
				                      <script type="text/javascript">
                <!--
                        function open_documentp()
                        {
                                width = 520;
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
    window.open('prepare.php','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
                    <a href="#null" onClick="javascript:open_documentp();" style="text-decoration:none"> إعداد </a>

			
			
			</div></td>
          </tr>
          
          <tr>
            <td colspan="2" bgcolor="#EFEFEF"><div align="center">
              <strong>في يوم</strong>
              <input name="date_d_hla" type="text" id="date_d_hla"  dir="rtl" size="35" >
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
                                window.open('datearabe_fils.php?convert=2&ch=date_d_hlf&ch1=date_d_hla&ch2=date_n_d','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
              <!--        <a href="#null" onClick="javascript:open_infossss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> -->
              <script type="text/javascript">
                <!--
                        function open_infoss2()
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
                                 window.open('datearabe_fils.php?convert=4&ch=date_d_hlf&ch1=date_d_hla&ch2=annee_h&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>&req=4','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
              <a href="#null" onClick="javascript:open_infoss2();"><img src="icone/convertisseur.PNG" width="20" height="20"></a>هجرية</div></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#EFEFEF"><label></label>
              <div align="center">
                <input name="annee_h" type="text" id="annee_h" size="10" maxlength="4" value="<?php 
					
					
$Requete3 = "select lien_a, officier_a, annee_h from utilisateurs  where `id`='".$idf_m."'  ";
mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3); 	echo $row[annee_h];
	
	?>">
              السنة الهجرية * </div></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#EFEFEF"><div align="center">
              <strong>موافق</strong>
              <input name="date_d_mla" type="text" id="date_d_mla"  dir="rtl" size="35" >
              <script type="text/javascript">
                <!--
                        function open_infosmss()
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
                                window.open('datearabe_fils.php?convert=1&ch=date_d_mlf&ch1=date_d_mla&ch2=date_n_d','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
              <!--  <a href="#null" onClick="javascript:open_infosmss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a>
 -->
              <script type="text/javascript">
                <!--
                        function open_infosm2()
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
         window.open('datearabe_fils.php?convert=1&ch=date_d_mlf&ch1=date_d_mla&ch2=date_n_d&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>&req=4','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
            <a href="#null" onClick="javascript:open_infosm2();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> ميلادية</div></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#EFEFEF"><div align="center">
              <input name="date_n_d" type="text" id="date_n_d" value="<?php echo date("d/m/Y");	?>" size="25" maxlength="10">
            </div></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#EFEFEF" class="style39"><label></label>
                <div align="center">
                  <input name="heure" type="text" id="heure" dir="rtl" size="40">
                  على الساعة</div></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#EFEFEF" class="style39"><div align="center">
              <input name="minute" type="text" id="minute" dir="rtl" size="40">
            و الدقيقة</div></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#EFEFEF" class="style39"><div align="center">
              <input name="bayane1" type="text" id="bayane1" value="<?php echo "جماعة $section1 دائرة $cercle اقليم $province1" ?>" size="35" dir="rtl">
              <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('bayane1')" /> <strong>توفي ب</strong></div></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#EFEFEF" class="style39"><div align="center">
              <input name="bayane" type="text" id="bayane" value="<?php echo "commune $section cercle $cercle1 province $province" ?>" size="35">
            </div></td>
          </tr>
        </table>
		
		
		
		
	
				
				
                <table width="360" border="1" cellpadding="0" cellspacing="0">
                  <tr>
                    <td bgcolor="#EFEFEF"><div align="center">
                        <input name="prenom" type="text" id="prenom" value="Prénom">
                    </div></td>
                    <td bgcolor="#EFEFEF"><div align="center">
                        <div align="left">
                          <input name="prenom_a" type="text" id="prenom_a" value="الإسم الشخصي" dir="rtl">
                          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prenom_a')" /></div>
                    </div></td>
                  </tr>
                <tr>
                  <td width="151" bgcolor="#EFEFEF"><div align="center">
                      <input name="nom" type="text" id="nom" value="nom">
                  </div></td>
                  <td width="203" bgcolor="#EFEFEF"><div align="center">
                      <div align="left">
                        <input name="nom_a" type="text" id="nom_a" value="الإسم العائلي" dir="rtl">
                        
                        
                        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" /></div>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF" class="style39"><label></label>
                    <div align="center">
                      <input name="nationalite_personne_a" type="text" id="nationalite_personne_a" value="مغربية" size="17" dir="rtl">
                    <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nationalite_personne_a')" /> جنسيته</div></td>
                  </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                      <input name="lieu1" type="text" id="lieu1" dir="rtl" size="36" value="<?php echo "جماعة $section1 دائرة $cercle اقليم $province1" ?>">
                      
                    
                    <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lieu1')" />المولود ب </div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><span class="style4">Lieu de naissance</span>
                    <input name="lieu" type="text" id="lieu" value="<?php echo "commune $section cercle $cercle1 province $province" ?>" size="35"></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                     في 
                    <input name="date_hla" type="text" id="date_hla"  dir="rtl" size="35">
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
                                window.open('datearabe.php?convert=2&ch1=date_hla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
                    <!--
		          <a href="#null" onClick="javascript:open_infossss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a>
	-->
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
                                 window.open('datearabe.php?convert=2&ch1=date_hla&ch2=date_m&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>&req=6','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
                  <a href="#null" onClick="javascript:open_infoss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> هجرية</div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                     <strong>موافق</strong> 
                    <input name="date_mla" type="text" id="date_mla"  dir="rtl" size="35">
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
                                window.open('datearabe.php?convert=1&ch=date_mlf&ch1=date_mla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
                    <!--
		          <a href="#null" onClick="javascript:open_infosss();"><img src="icone/convertisseur.PNG" width="20" height="47"></a>

    -->
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
         window.open('datearabe.php?convert=1&ch=date_mlf&ch1=date_mla&ch2=date_m&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>&req=6','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
                    <a href="#null" onClick="javascript:open_infos();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> ميلادية</div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                    <input name="date_m" type="text" id="date_m" value="<?php echo date("d/m/Y");	?>" size="20" maxlength="10">
                    <button id="trigger1"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
                  </div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                    <input name="prof_personne_a" type="text" id="prof_personne_a" size="30" dir="rtl">
                  <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prof_personne_a')" /> حرفته </div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                    <input name="adresse_a" type="text" id="adresse_a" dir="rtl" value="<?php echo "جماعة $section1 دائرة $cercle اقليم $province1" ?>" size="30">
                  <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('adresse_a')" /> الساكن ب</div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center"></div></td>
                </tr>
              </table>
			  
                  <fieldset style="width:322px">
        <legend class="style39" align="right">مستواه الدراسي</legend>


        <table width="360" border="1" cellpadding="0" cellspacing="0">
          
          <tr>
            <td bgcolor="#EFEFEF" class="style39"><label></label>
              <div align="center">
              <input name="niveau1" type="text" id="niveau1" dir="rtl" size="30">
			  
			  			  			
			            
          

     <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('niveau1')" />
	 

			  
              </div></td>
          </tr>
        </table>
	    </fieldset>
		  
			  
                
				


              <fieldset style="width:322px">
              <legend class="style39" align="right">مكان الإقامة --- العمالة أو الإقليم</legend>
                <table width="360">
                <tr>
                  <td bgcolor="#EFEFEF" class="style39"><div align="center">
                    <label>
                    <select name="province_n" id="province_n">
                      <?php   
			   	$Requete3 = "select profession_a,id from profession where `cat`=2 order by id asc ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                      <option value="<?php echo $row[1]; ?>"><?php echo $row[0]; }?></option>
                    </select>
                    <script type="text/javascript">
                <!--
                        function open_prof()
                        {
                                width = 620;
                                height = 500;
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
                                window.open('province.php?type=root','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                                          </script>
                    <a href="#null" onClick="javascript:open_prof();"><img src="icone/blue_circle.png" width="30" height="30" title="إضغط هنا لإضافة قطاع"></a> </label>
                  </div>
                    <div align="right">
                      <label></label>
                  </div></td>
                  </tr>
              </table>
              </fieldset>


				
              <fieldset style="width:322px">
              <legend class="style39" align="right">الجنس</legend>
                <table width="360">
                <tr>
                  <td width="187" bgcolor="#EFEFEF" class="style39"><div align="right"> أنثى
                    <input name="sex" type="radio" value="F">
                  </div></td>
                  <td width="187" bgcolor="#EFEFEF" class="style39"><div align="right">
                      <label> ذكر
                        <input name="sex" type="radio" value="M" checked>
                      </label>
                  </div></td>
                </tr>
              </table>
              </fieldset>

                <!--

		    <fieldset style="width:322px">
        <legend class="style39" align="right">تحميل الرسم الأصلي للمولود (SCAN) </legend>


        <table width="360">
          
          <tr>
            <td class="style39"><div align="center">
              <p>
                <input type="file" name="titre">
              </p>
              <p class="style40"> 1Mo و لايتعدى JPG : النوع</p>
            </div>
              <div align="right">
              <label></label>
              </div></td>
          </tr>
        </table>
	    </fieldset>


		//-->
              </p>
              <p>
                <input name="trans" type="hidden" id="trans" value="<?php echo $trans;?>">
                <input name="cat" type="hidden" id="cat" value="<?php echo $cat;?>">
                <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
                <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
                <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
                <input name="valider" type="submit" class="style39" id="valider" value="تابع إضافة معلومات عن الأب"/>
              </p>
              </fieldset>
    </div>
		  
<p>&nbsp;    </p>
	
	


	
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
</div>

</body>
</html>


<?php    }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>

