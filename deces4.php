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

   $cercle=$_SESSION["cercle"];      
   $cercle1=$_SESSION["cercle1"];      
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) {   include"div2.php";


$cat=$_GET["cat"];
 $trans=$_GET["trans"];


?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLiees.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
 <!--
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>
	-->

<?php  ///////////////////////////MISE A JOUR DONNES PERE


 if($cat=="المولود") $table="naissance"; else if($cat=="المتوفى") $table="deces";



 $code = addslashes($_GET["code"]);
$prenom = addslashes($_GET["prenom"]);
$nom = addslashes($_GET["nom"]);

$prenom_a = addslashes($_GET["prenom_a"]);
$nom_a = addslashes($_GET["nom_a"]);

$lieu = addslashes($_GET["lieu"]);
$lieu1 = addslashes($_GET["lieu1"]);


$nationalite_a = addslashes($_GET["nationalite_a"]);
$nationalite = addslashes($_GET["nationalite"]);




 $annee_declaration = addslashes($_GET["annee_declaration"]);

$partie = addslashes($_GET["partie"]);
$code = addslashes($_GET["code"]);

$date_m = addslashes($_GET["date_m"]);
$date_mlf = addslashes($_GET["date_mlf"]);
$date_mla = addslashes($_GET["date_mla"]);

$date_hlf = addslashes($_GET["date_hlf"]);
$date_hla = addslashes($_GET["date_hla"]);

$niveau = addslashes($_GET["niveau"]);


$adresse = addslashes($_GET["adresse"]);
$adresse_a = addslashes($_GET["adresse_a"]);

$profession_a = addslashes($_GET["profession_a"]);
$profession = addslashes($_GET["profession"]);

$adresse_m_a = addslashes($_GET["adresse_m_a"]);
$adresse_m = addslashes($_GET["adresse_m"]);


////////////////CONVERSION DATE

include"conn/conversion.php";

$date_m=convertDate($date_m);

/////////////////////////DENNES PARE



 $Requete =  "UPDATE $table SET 
  									`prof_m`='$profession',
									`prof_m_a`='$profession_a',

									`adresse_m`='$adresse_m',
									`adresse_m_a`='$adresse_m_a',
									
									`nationalite_m`='$nationalite',
									`nationalite_ma`='$nationalite_a',
									`nom_f_m`='$nom',
									`nom_a_m`='$nom_a',
									`lieu_m`='$lieu',
									`lieu1_m`='$lieu1',
									`date_n_m`='$date_m',
									`date_mlf_m`='$date_mlf',
									`date_mla_m`='$date_mla',
									`date_hlf_m`='$date_hlf',
									`date_hla_m`='$date_hla'  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution 1de la requete d'identification<br>".mysql_error()); 


	
?>


<?php
$valider=$_POST["valider"];
if ($valider!="إضافة معلومات عن التصريح") { ?>

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
  top: 256px;
  left: 703px;
}


</style>

<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:420px;
	top:331px;
	width:172px;
	height:105px;
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
.style41 {font-size: 9}
-->
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

var date_d_hla = document.formulaire_envoi_fichier.date_d_hla.value;
var date_d_mla = document.formulaire_envoi_fichier.date_d_mla.value;


//var date_m = document.formulaire_envoi_fichier.date_m.value;
//var long=formulaire_envoi_fichier.date_m.value.length;
//var mois=date_m.substring(3,5);
//var jour=date_m.substring(0,2);
//var annee=date_m.substring(6,10);



var date_d = document.formulaire_envoi_fichier.date_d.value;
var long1=formulaire_envoi_fichier.date_d.value.length;
var mois1=date_d.substring(3,5);
var jour1=date_d.substring(0,2);
var annee1=date_d.substring(6,10);

		


if(date_d_hla=="" || date_d_hla=="تاريخ التصريح الهجري") 
		{ 
        alert ('Vérifier le Champ Date de déclaration hégérienne'); 
        document.formulaire_envoi_fichier.date_d_hla.focus(); 
        return false; 
    	} 


if(date_d_mla=="" || date_d_mla=="تاريخ التصريح الميلادي") 
		{ 
        alert ('Vérifier le Champ Date de déclararation grégorienne'); 
        document.formulaire_envoi_fichier.date_d_mla.focus(); 
        return false; 
    	} 


if(date_d == "" || long1!=10 || date_d.substring(2,3)!="/" || date_d.substring(5,6)!="/" || mois1>12 || jour1>31 || isNaN(jour1) || isNaN(mois1) || isNaN(annee1) ) 
		{ 
        alert ('Vérifier le Champ date'); 
		//alert(date_d.substring(5,7))
		//alert(date_d.substring(0,4))
        document.formulaire_envoi_fichier.date_d.focus(); 
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




<form name="formulaire_envoi_fichier" id="formulaire_envoi_fichier" enctype="multipart/form-data" method="post" action="" onSubmit="return Validerfrm()">
  <div align="center">
    <p>
      <label></label></p>


<div id="scan">

<a href="<?php 	
		 	  
$pj=$code;

		 	  
$acte="doc_$table/$annee_declaration/$partie/$pj";
echo $acte  ?>.jpg" target="_blank"><img src="<?php echo $acte ?>.jpg" width="692" height="780" /></a></div> 

<div id="formulaire">

		
		
		
		
				<fieldset style="width:380px">
          <legend class="style39" align="right">معلومات اضافية عن الوفاة</legend>
		  
	
	      <table width="360" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="374" bgcolor="#EFEFEF"><div align="center">
			  
<input name="secteur" type="text" id="secteur" size="10" maxlength="5">			  
			  
                <script type="text/javascript">
                <!--
                        function open_prof()
                        {
                                width = 620;
                                height = 300;
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
          window.open('choix_prof.php?ch5=secteur','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                                          </script>
              <a href="#null" onClick="javascript:open_prof();">
              <label>
              
              </label>
              القطاع المهني الذي ينتمي إليه المتوفى </a> 
			  
			  </div></td>
            </tr>
          </table>

          <table width="360">
            <tr>
              <td colspan="2" bgcolor="#EFEFEF" class="style39"><div align="center"> و قد كان المتوفى -- الحالة العائلية</div></td>
            </tr>
            <tr>
              <td width="168" bgcolor="#EFEFEF" class="style39"><label></label>
                  <label></label>
                  <label></label>
                  <div align="center">
                    <input name="etat" type="text" id="etat" value="marié" size="26">
              </div></td>
              <td width="180" bgcolor="#EFEFEF" class="style39"><div align="center">
                  <input name="etat_a" type="text" id="etat_a" dir="rtl" value="متزوجا" size="26">
				  
			  
		      </div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                  <input name="cin" type="text" id="cin" size="14" maxlength="14">
              </div></td>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style39">رقم البطاقة الوطنية</span></div></td>
            </tr>
              </table>

			  
	


              <div align="center"></div>
                </fieldset>
		  
		  

		  
	

	
	
	
	
		  
		  
		  
            <fieldset style="width:380px">
            <legend align="right"><span class="style19 style39">معلومات عن التصريح</span></legend>
              <table width="360" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="2" bgcolor="#EFEFEF"><div align="right">بناء ا على ما صرح به</div></td>
                </tr>
              <tr>
                <td width="120" bgcolor="#EFEFEF"><div align="center">
                    <input name="nom1" type="text" id="nom1" size="20">
                </div></td>
                <td width="234" bgcolor="#EFEFEF"><div align="center">
                  <div align="left">
                      <input name="nom_a1" type="text" id="nom_a1" dir="rtl">
      	  </div>
                </div></td>
              </tr>
              <tr>
                <td bgcolor="#EFEFEF"><div align="center">
                  <input name="lien1" type="text" id="lien1" value="<?php 
				  
				  				   $Requete3 = "select delegation,delegation_a,lien_a,lien, officier_a,officier from utilisateurs  where `id`='".$idf_m."'  ";
mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);  echo $row[lien];				

				  
				  ?>" size="20">
                </div></td>
                <td bgcolor="#EFEFEF"><input name="lien_a1" type="text" id="lien_a1" value="<?php 
				
 echo $row[lien_a];				
				
				?>" dir="rtl">
                  صلته
                <?php if($cat=="المولود") echo "بالمولود"; else echo "بالمتوفى"; ?></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#EFEFEF" class="style39"><label></label>
                    <div align="center">
                      <label></label>
                      <input name="nationalite_d" type="text" id="nationalite_d" value="marocaine" size="20">
                  </div></td>
                <td bgcolor="#EFEFEF" class="style39"><div align="center">
                    <input name="nationalite_d_a" type="text" id="nationalite_d_a" value="مغربية" dir="rtl">
                    جنسيته</div></td>
              </tr>
              <tr>
                <td bgcolor="#EFEFEF"><div align="center"><span class="style41"></span>
                  <input name="prof_lien" type="text" id="prof_lien" size="20">
                </div></td>
                <td bgcolor="#EFEFEF"><input name="prof_lien_a" type="text" id="prof_lien_a" dir="rtl">
مهنته</td>
              </tr>
              <tr>
                <td bgcolor="#EFEFEF"><div align="center">
                    <input name="age_f" type="text" id="age_f" value="   ans" size="20">
                  </div>
                    <div align="center" class="style39"></div></td>
                <td bgcolor="#EFEFEF"><input name="age" type="text" id="age" dir="rtl" value="  سنة">
                    <span class="style39">عمره</span></td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                  <input name="lieu1" type="text" id="lieu1" dir="rtl" value="<?php echo "جماعة $section1 دائرة $cercle اقليم $province1" ?>" size="37">
                الساكن ب</div></td>
                </tr>
              <tr>
                <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                  <input name="adresse_d" type="text" id="adresse_d" value="<?php echo "commune $section cercle $cercle1 province $province" ?>" size="35">
                </div></td>
                </tr>
              <tr>
                <td bgcolor="#EFEFEF"><div align="center"><strong>
                    <select name="type_jugement" id="type_jugement" onChange="getjugement()">

                      <?php if($cat=="المتوفى")  {  ?>
                      <option value="1"> عادي</option>
                      <option value="5">حكم</option>
                      <?php }  ?>
                    </select>
                </strong></div></td>
                <td bgcolor="#EFEFEF"><div align="center"><span class="style39">تصريح</span></div></td>
              </tr>
            </table>
              <p><span class="style40">
                <?php
	echo "
		<div id=champsjugement>


		</div>";
		?>
              </span>
                <label></label>
            </p>
              <table width="360" border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                      هجرية 
                          <input name="date_d_hla" type="text" id="date_d_hla" value="تاريخ التصريح الهجري"  dir="rtl" size="35">
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
    window.open('esss.php?convert=4&ch=date_d_hlf&ch1=date_d_hla&ch2=annee_h','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                  </script>
                  <a href="#null" onClick="javascript:open_infoss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> </div></td>
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
  window.open('esss.php?convert=4&ch=date_d_hlf&ch1=date_d_hla&ch2=annee_h','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                  </script>
                      <!--       <a href="#null" onClick="javascript:open_infossss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a>   -->
                    En français
                    <input name="date_d_hlf" type="text" id="date_d_hlf" size="30">
                    </div>
                      <div align="center"></div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                      ميلادية 
                          <input name="date_d_mla" type="text" id="date_d_mla" value="تاريخ التصريح الميلادي"  dir="rtl" size="35">
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
         window.open('esss.php?convert=1&ch=date_d_mlf&ch1=date_d_mla&ch2=date_d','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
                    <a href="#null" onClick="javascript:open_infos();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> </div>
                      <div align="center" class="style39"></div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                      <script type="text/javascript">
                <!--
                        function open_infosssg()
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
                                window.open('esss.php?convert=1&ch=date_d_mla','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
                      <!--
		          <a href="#null" onClick="javascript:open_infosssg();"><img src="icone/convertisseur.PNG" width="20" height="20"></a>
 -->
                    En français
                    <input name="date_d_mlf" type="text" id="date_d_mlf" size="30" maxlength="65">
                  </div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                    <input name="date_d" type="text" id="date_d" value="<?php echo date("d/m/Y");	?>" size="12" maxlength="10">
                  </div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF" class="style39"><label></label>
                      <div align="right">
                        <input name="heure_f" type="text" id="heure_f">
                        <input name="heure" type="text" id="heure" dir="rtl">
                        الساعة</div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF" class="style39"><label></label>
                      <div align="right">
                        <input name="minute_f" type="text" id="minute_f">
                        <input name="minute" type="text" id="minute" dir="rtl">
                        الدقيقة</div></td>
                </tr>
              </table>
            </fieldset>
			
			
	
    <fieldset style="width:380px">
    <legend align="right"><strong>التوقيع</strong></legend>
	
	<table width="360" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center">
          <div align="center">من طرفنا نحن</div>
          <textarea name="officier_a" cols="45" rows="1" id="officier_a" dir="rtl"><?php echo $row[officier_a];  ?></textarea>
          <textarea name="officier" cols="45" rows="1" id="officier"><?php echo $row[officier];  ?></textarea>
        </div></td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center">و بعد تلاوة الرسم على المصرح</div></td>
      </tr>
      <tr>
        <td width="204" bgcolor="#EFEFEF"><div align="center">ووقعناه وحدنا
          <input name="signature" type="radio" value="0" checked>
        </div></td>
        <td width="150" bgcolor="#EFEFEF"><div align="center">ووقعه معنا
          <label>
                <input name="signature" type="radio" value="1">
                </label>
        </div></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center">وضابط الحالة المدنية
            
          </div></td>
        </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
          <input name="delegation" type="text" id="delegation" value="<?php echo $row[delegation];  ?>" size="23">
        </div>          
        <div align="center">
            <div align="left"></div>
          </div></td>
        <td bgcolor="#EFEFEF"><div align="center">
          <input name="delegation_a" type="text" id="delegation_a" value="<?php echo $row[delegation_a];  ?>" dir="rtl" size="23">
        </div></td>
      </tr>
    </table>
    </fieldset>
	



    <p align="left">
                <input name="trans" type="hidden" id="trans" value="<?php echo $trans;?>">
                <input name="cat" type="hidden" id="cat" value="<?php echo $cat;?>">
              <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
              <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
              <input name="valider" type="submit" id="valider" value="إضافة معلومات عن التصريح"/>
      </p>
        <p align="left">&nbsp;</p>
        <p align="left">&nbsp;</p>
        <p align="left">&nbsp;</p>
        <p align="left">&nbsp;</p>
        <p align="left">&nbsp;</p>
        <p align="left">&nbsp;</p>
        <p align="left">&nbsp;</p>
        <p align="left">&nbsp;</p>
        <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></div> 

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
$age=addslashes($_POST["age"]);
$age_f=addslashes($_POST["age_f"]);
$jugement=addslashes($_POST["jugement"]);
$date_jugement=addslashes($_POST["date_jugement"]);
$lien1=addslashes($_POST["lien1"]);
$lien_a1=addslashes($_POST["lien_a1"]);


$prof_lien_a=addslashes($_POST["prof_lien_a"]);
$prof_lien=addslashes($_POST["prof_lien"]);


$type_jugement=addslashes($_POST["type_jugement"]);


$officier=addslashes($_POST["officier"]);
$officier_a=addslashes($_POST["officier_a"]);

$etat=addslashes($_POST["etat"]);
$etat_a=addslashes($_POST["etat_a"]);


$prof_personne=addslashes($_POST["prof_personne"]);
$prof_personne_a=addslashes($_POST["prof_personne_a"]);


$adresse_d=addslashes($_POST["adresse_d"]);
$lieu1=addslashes($_POST["lieu1"]);






									$ancien_ville=addslashes($_POST["ancien_ville"]);
									$ancien_officier=addslashes($_POST["ancien_officier"]);
									$ancien_code=addslashes($_POST["ancien_code"]);

									$ancien_ville_f=addslashes($_POST["ancien_ville_f"]);
									$ancien_officier_f=addslashes($_POST["ancien_officier_f"]);


$date_m=addslashes($_POST["date_m"]);
$date_mlf=	addslashes($_POST["date_mlf"]);
$date_mla=addslashes($_POST["date_mla"]);
$date_hlf=  addslashes($_POST["date_hlf"]);
$date_hla=  addslashes($_POST["date_hla"]);


$date_d_mlf=addslashes($_POST["date_d_mlf"]);
$date_d_mla=addslashes($_POST["date_d_mla"]);
$date_d_hlf=  addslashes($_POST["date_d_hlf"]);
$date_d_hla=  addslashes($_POST["date_d_hla"]);

$nationalite_d_a = addslashes($_POST["nationalite_d_a"]);
$nationalite_d = addslashes($_POST["nationalite_d"]);


$date_d=addslashes($_POST["date_d"]);

$cin=  addslashes($_POST["cin"]);
$secteur=  addslashes($_POST["secteur"]);

$date_j_mlf=addslashes($_POST["date_j_mlf"]);
$date_j_mla=addslashes($_POST["date_j_mla"]);
$date_j_hlf=  addslashes($_POST["date_j_hlf"]);
$date_j_hla=  addslashes($_POST["date_j_hla"]);


$tribunale=addslashes($_POST["tribunale"]);
$tribunale_a=addslashes($_POST["tribunale_a"]);


$heure=addslashes($_POST["heure"]);
$minute=addslashes($_POST["minute"]);

$heure_f=addslashes($_POST["heure_f"]);
$minute_f=addslashes($_POST["minute_f"]);
										
$signature=addslashes($_POST["signature"]);
$delegation=addslashes($_POST["delegation"]);
$delegation_a=addslashes($_POST["delegation_a"]);

$date_jugement=convertDate($date_jugement);
$date_m=convertDate($date_m);
$date_d=convertDate($date_d);

$annee_d=yearofdate($date_d);




	$Requete3 = "select date_n,sex from $table where `annee_declaration`='$annee_declaration' and `code`='$code' and `partie`='$partie'";
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
$date_naissance=$row['date_n'];
$sex=$row['sex'];

/////////////////////////DENNES PARE


 $table="deces";

$print=" 

<div align=center>

   <p><a href=bayane.php?annee_declaration=$annee_declaration&code=$code&deces_naissance=1&date_n=$date_naissance&sex=$sex&partie=$partie target=_blank>تابع إضافة البيانات الهامشية</a> </p>

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
									`delegation_a`='$delegation_a',
									`delegation`='$delegation',
									`officier`='$officier',
									`officier_a`='$officier_a',
									`resp_declaration`='$nom1',
									`resp_declaration_a`='$nom_a1',
									`age`='$age',
									`age_f`='$age_f',
									`lien`='$lien1',

									`etat`='$etat',
									`etat_a`='$etat_a',


									`cin`='$cin',
									`secteur`='$secteur',
									
									`date_d`='$date_d',
									`date_d_mlf`='$date_d_mlf',
									`date_d_mla`='$date_d_mla',
									`date_d_hlf`='$date_d_hlf',
									`date_d_hla`='$date_d_hla',
									`heure_a_d`='$heure',
									`minute_a_d`='$minute',
									`heure_f_d`='$heure_f',
									`minute_f_d`='$minute_f',

									`date_j_mlf`='$date_j_mlf',
									`date_j_mla`='$date_j_mla',
									`date_j_hlf`='$date_j_hlf',
									`date_j_hla`='$date_j_hla',
									
									
									`tribunale`='$tribunale',
									`tribunale_a`='$tribunale_a',
									`valider`='1',

									`nationalite_d`='$nationalite_d',
									`nationalite_d_a`='$nationalite_d_a',
									`adresse_d`='$adresse_d',
									`adresse_d_a`='$lieu1',

									`prof_lien`='$prof_lien',
									`prof_lien_a`='$prof_lien_a',
									`lien_a`='$lien_a1',
									`date_jugement`='$date_jugement',
									`num_jugement`='$jugement',
									`deces_naissance`='$type_jugement'

									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

if($annee_declaration!=$annee_d)
{
////////////// echo
echo "<style type=text/css>
<!--
.style1 {
	font-size: 24px;
	color: #FF0000;
}
-->
</style>
<div align=center>
  <p><img src=icone/AT.jpg width=67 height=62></p>
  <p class=style1>المرجو التأكد : المعلومات التي تم إدخالها غير موافقة مع الرسم الأصلي</p>
  <p class=style1>F5 قم بتحديث صورة الرسم باستعمال </p>
  
      <p><a href=modifier_deces.php?annee_declaration=$annee_declaration&code=$code&table=$table&cat=$cat&trans=$trans&partie=$partie>تعديل</a></p>

</div>
";
}

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
