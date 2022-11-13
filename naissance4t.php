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
if ($permission==securite2($tim2)) {  include"div2.php";

$cat=$_GET["cat"];
 $trans=$_GET["trans"];
$transc=$_GET["transc"];

      $cercle=$_SESSION["cercle"];      

?>


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLiees2.js"></script>

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


 $Requete =  "UPDATE $table SET 
  									`prof_m`='$profession',
									`prof_m_a`='$profession_a',


									`adresse`='$adresse',
									`adresse_a`='$adresse_a',
									
									`nationalite_m`='$nationalite',
									`nationalite_ma`='$nationalite_a',
									`nom_f_m`='$nom',
									`nom_a_m`='$nom_a',
									`lieu_m`='$lieu',
									`lieu1_m`='$lieu1',
									`date_n_m`='$date_m',
									`date_mla_m`='$date_mla',
									`date_hla_m`='$date_hla',
									`niveau_scolaire_m`='$niveau' WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
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
  top: 410px;
  left: 714px;
}


</style>

<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:420px;
	top:571px;
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
        alert ('Vérifier le Champ Date de déclaration grégorienne'); 
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
         window.open('datearabe.php?convert=3&ch=date_j_mlf&ch1=date_j_mla','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
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
                                window.open('datearabe.php?convert=1&ch=date_j_mla','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
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
                                 window.open('datearabe.php?convert=2&ch=date_j_hlf&ch1=date_j_hla','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
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
                                window.open('datearabe.php?convert=2&ch=date_j_hla','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                  </script>




<form name="formulaire_envoi_fichier" id="formulaire_envoi_fichier" enctype="multipart/form-data" method="post" action="" onSubmit="return Validerfrm()">
  <div align="center">
    <p>
      <label></label></p>


<div id="scan">

<a href="<?php 	
		 	  


		 	  
$acte="doc_$table/$annee_declaration/$partie/$code";
echo $acte  ?>.jpg" target="_blank"><img src="<?php echo $acte ?>.jpg" width="692" height="780" /></a></div> 

<div id="formulaire">

		
		
	
	
			<?php 
			

			
			 if($trans==1 || $transc==1) { ?>
		
				<fieldset style="width:380px">
          <legend class="style39" align="right">معلومات عن النقل</legend>
		  
		  <table width="360" border="1" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="199"><div align="center">
                      <input name="ancien_code" type="text" id="ancien_code">
                    </div></td>
                    <td><div align="center"><span class="style39">رقم النقل</span></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#EFEFEF"><div align="center">
                      <input name="ancien_officier" type="text" id="ancien_officier" dir="rtl">
                      <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('ancien_officier')" /> </div></td>
                    <td width="115"><div align="center" class="style39">من طرف
                    </div></td>
                  </tr>
                </table>
				
				
				
				
	
	
		    <fieldset style="width:322px">
        <legend class="style39" align="right">تاريخ النقل الهجري</legend>


        <table width="360" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="374" bgcolor="#EFEFEF"><div align="center">
                هجرية 
                    <input name="date_hla" type="text" id="date_hla"  dir="rtl" size="35" >
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
                                 window.open('datearabe.php?convert=2&ch1=date_hla&ch2=date_m&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>&req=5','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
            <a href="#null" onClick="javascript:open_infoss2();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> </div></td>
          </tr>
        </table>
            </fieldset>
                </fieldset>
				
				
				
				
				
				
				
						  	    <fieldset style="width:322px">
        <legend align="right"><span class="style39"> تاريخ النقل الميلادي</span></legend>


        <table width="360" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="374" bgcolor="#EFEFEF"><div align="center">
              ميلادية 
                  <input name="date_mla" type="text" id="date_mla"  dir="rtl" size="35" >
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
                <!--  <a href="#null" onClick="javascript:open_infosss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a>
 -->
                <script type="text/javascript">
                <!--
                        function open_infos2()
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
         window.open('datearabe.php?convert=1&ch=date_mlf&ch1=date_mla&ch2=date_m&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>&req=5','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
            <a href="#null" onClick="javascript:open_infos2();"><img src="icone/convertisseur.PNG" width="20" height="20"></a></div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
              <input name="date_m" type="text" id="date_m" value="<?php echo date("d/m/Y");	?>" size="25" maxlength="10">
			  
			   <!--
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
				
				
				
				-->
</div></td>
          </tr>
        </table>
                </fieldset>

	

		  
		  
		  		<?php  } ?>


	
	
	
	
		  
		  
		  
      <fieldset style="width:380px">
            <legend align="right"><span class="style19 style39">معلومات عن التصريح</span></legend>
              <table width="360" border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center"><a href="#null" onClick="javascript:open_documentp();" style="text-decoration:none">إعداد </a></div></td>
                  <td bgcolor="#EFEFEF"><div align="center">
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
    window.open('telecharger_mention.php?type=2&table=<?php echo $table ?>&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                      </script>
                      <a href="#null" onClick="javascript:open_document();" style="text-decoration:none">وثائق أخرى متعلقة بالرسم </a> </div></td>
                </tr>			  
			  
			  
              <tr>
                <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                    
                  <div align="center">
                    <input name="nom_a1" type="text" id="nom_a1" size="20" dir="rtl" value="<?php 
					
 $Req =  "SELECT nom_a, nom_a_p  FROM `naissance` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."'   ";

 mysql_query("SET NAMES 'UTF8' ");

$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

	$rox = mysql_fetch_array($res);

		$tmp=explode(" ",$rox[nom_a_p]);
		$heure=$tmp[0];

					echo "$heure $rox[nom_a]"; 
					
					
					
					?>">
                        
                        
                        
                        
                    <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a1')" />	  بناء ا على ما صرح به</div>
                </div></td>
                </tr>
              <tr>
                <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                  <input name="lien_a1" type="text" id="lien_a1" size="20" dir="rtl" value="<?php 	
				  
 $Requete3 = "select adresse_d_a, delegation_a,lien_a, officier_a from utilisateurs  where `id`='".$idf_m."'  ";
mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3); 
	
	echo $row[lien_a];
				  			  
?>				  
				  
				  
				  ">
                <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien_a1')" />
				
				صلته <?php if($cat=="المولود") echo "بالمولود"; else echo "بالمتوفى"; ?>
				
				</div></td>
                </tr>
              <tr>
                <td colspan="2" bgcolor="#EFEFEF" class="style39"><div align="center">
                    <input name="nationalite_d_a" type="text" id="nationalite_d_a" value="مغربية" dir="rtl" size="12">
                <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nationalite_d_a')" /> جنسيته</div></td>
                </tr>
              <tr>
                <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                  <input name="prof_lien_a" type="text" id="prof_lien_a" size="20" dir="rtl">
                <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prof_lien_a')" /> مهنته</div></td>
                </tr>
              <tr>
                <td width="85" bgcolor="#EFEFEF">&nbsp;</td>
                <td width="229" bgcolor="#EFEFEF"><input name="age" type="text" id="age" dir="rtl" value="....................سنة" size="19">
                    <span class="style39">عمره</span></td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                  <input name="lieu1" type="text" id="lieu1" dir="rtl" value="<?php 
				  
				  	echo $row[adresse_d_a];

				  
				   ?>" size="30">
                  <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('adresse_d_a')" /> الساكن ب </div></td>
                </tr>
              <tr>
                <td bgcolor="#EFEFEF"><div align="center"><strong>
                    <select name="type_jugement" id="type_jugement" onChange="getjugement()">
					
					
                      <?php if($trans=="" && $transc==0)  {  ?>
                      <option value="0"> عادي</option>
                      <option value="4">حكم</option>
                      <?php }  ?>
					  
					  
                      <?php if($trans==1 || $transc==1) {  ?>
                      <option value="2"> عادي</option>
                      <option value="3">حكم</option>
                      <?php }  ?>
                    </select>
                </strong></div></td>
                <td bgcolor="#EFEFEF"><div align="center"><span class="style39">تصريح</span></div></td>
              </tr>
            </table>
              <span class="style40">
              <?php
	echo "
		<div id=champsjugement>


		</div>";
		?>
              </span>
              <table width="360" border="1" cellpadding="1" cellspacing="0" bordercolor="#000000">
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">تاريخ التصريح</div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                      هجرية 
                          <input name="date_d_hla" type="text" id="date_d_hla"  dir="rtl" size="35">
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
    window.open('datearabe_fils.php?convert=2&ch=date_d_hlf&ch1=date_d_hla&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>&req=3','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                  </script>
                  <a href="#null" onClick="javascript:open_infoss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> </div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                      ميلادية 
                          <input name="date_d_mla" type="text" id="date_d_mla"  dir="rtl" size="35">
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
         window.open('datearabe_fils.php?convert=1&ch=date_d_mlf&ch1=date_d_mla&ch2=date_d&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>&req=3','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
                    <a href="#null" onClick="javascript:open_infos();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> </div>
                      <div align="center" class="style39"></div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                      <input name="date_d" type="text" id="date_d" value="<?php echo date("d/m/Y");	?>" size="12" maxlength="10">
                  </div></td>
                </tr>
              </table>
        <p>
          <label></label>
        </p>
          </fieldset>
			
			
	
    <fieldset style="width:380px">
    <legend align="right"><strong>التوقيع</strong></legend>
	
	<table width="360" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center">من طرفنا نحن</div></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center">
          <textarea name="officier_a" cols="45" rows="1" id="officier_a" dir="rtl"><?php echo $row[officier_a];  ?></textarea>
        </div></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center">و بعد تلاوة الرسم على المصرح</div></td>
      </tr>
      <tr>
        <td width="197" bgcolor="#EFEFEF"><div align="center">ووقعناه وحدنا 
          <input name="signature" type="radio" value="0" checked>
        </div></td>
        <td width="157" bgcolor="#EFEFEF"><div align="center">ووقعه معنا 
            <label>
          <input name="signature" type="radio" value="1">
          </label>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
          <label>
          <input name="delegation" type="text" id="delegation" value="<?php echo $row[delegation_a];  ?>" dir="rtl" size="27">
          </label>
        </div></td>
        <td bgcolor="#EFEFEF"><div align="center">وضابط الحالة المدنية</div></td>
      </tr>
    </table>
    </fieldset>
	

			
              <p align="left">
                <input name="trans" type="hidden" id="trans" value="<?php echo $trans;?>">
                <input name="transc" type="hidden" id="transc" value="<?php echo $transc;?>">
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

$signature=addslashes($_POST["signature"]);
$delegation=addslashes($_POST["delegation"]);

$date_jugement=convertDate($date_jugement);
$date_m=convertDate($date_m);
$date_d=convertDate($date_d);



	$Requete3 = "select date_n,sex from $table where `annee_declaration`='$annee_declaration' and `code`='$code' and `partie`='$partie' ";
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
$date_naissance=$row['date_n'];
$sex=$row['sex'];

/////////////////////////DENNES PARE


$fichier="doc_naissance/$annee_declaration/$partie/0$code.jpg"; //OUVRE LE FICHIER compteur.txt
if((file_exists($fichier)==TRUE)) $mention="<a href=bayane.php?annee_declaration=$annee_declaration&code=$code&deces_naissance=0&date_n=$date_naissance&sex=$sex&partie=$partie target=_blank><img src=$fichier width=692 height=780/></a>";


if($cat=="المولود") $table="naissance";


if($trans==1 || $transc==1) $reqo="	,`date_n_d1`='$date_m',
									`date_mlf_d1`='$date_mlf',
									`date_mla_d1`='$date_mla',
									`date_hlf_d1`='$date_hlf',
									`date_hla_d1`='$date_hla',
									`ancien_code`='$ancien_code',
									`ancien_ville`='$ancien_ville',
									`ancien_ville_f`='$ancien_ville_f',
									`ancien_officier_f`='$ancien_officier_f',
									`ancien_officier`='$ancien_officier'
									
									 ";
									 
	
if($cat=="المولود" || $trans==1 || $transc==1) 	
$print=" 

<div align=center>


   <p><a href=bayane.php?annee_declaration=$annee_declaration&code=$code&deces_naissance=0&date_n=$date_naissance&sex=$sex&partie=$partie target=_blank>تابع إضافة البيانات الهامشية</a> </p>
   
   $mention

  <p><img src=icone/print.GIF border=0></p>
  <p>طباعة</p> 
  
  
   <p><a href=etat/fiche_declaration_naissance.php?annee_declaration=$annee_declaration&code=$code&partie=$partie target=_blank> ورقة التصريح -- المسودة </a>
   <p><a href=etat/extrait_naissance.php?annee_declaration=$annee_declaration&code=$code&partie=$partie target=_blank> A/F نسخة موجزة من رسم الولادة</a>
   <p><a href=etat/extrait_naissance-a.php?annee_declaration=$annee_declaration&code=$code&partie=$partie target=_blank> Arabe نسخة موجزة من رسم الولادة</a>
   <p><a href=etat/extrait_naissance-f.php?annee_declaration=$annee_declaration&code=$code&partie=$partie target=_blank> Français نسخة موجزة من رسم الولادة</a>
  
  <p><a href=etat/integrale_naissance-a.php?annee_declaration=$annee_declaration&code=$code&table=$table&partie=$partie target=_blank>Arabe نسخة كاملة من رسم الولادة</a></p>
  <p><a href=etat/integrale_naissance.php?annee_declaration=$annee_declaration&code=$code&table=$table&partie=$partie target=_blank>Français نسخة كاملة من رسم الولادة</a></p>
  
  
  <p><a href=etat/afficher_naissance.php?annee_declaration=$annee_declaration&code=$code&partie=$partie target=_blank>إطلاع عن المعلومات</a></p>
  <p><a href=modifier_naissance.php?annee_declaration=$annee_declaration&code=$code&table=$table&cat=$cat&trans=$trans&partie=$partie>تعديل</a></p>
  <p><a href=index_civil.php?annee_declaration=$annee_declaration&code=$code&partie=$partie>الرجوع إلى القائمة</a></p>


</div>
<p>&nbsp;</p>


";

									 
 $Requete =  "UPDATE $table SET    
 
									`signature`='$signature',
									`delegation_a`='$delegation',
									`officier`='$officier',
									`officier_a`='$officier_a',
									`resp_declaration`='$nom1',
									`resp_declaration_a`='$nom_a1',
									`age`='$age',
									`age_f`='$age_f',
									`lien`='$lien1',
									
									`date_d`='$date_d',
									`date_d_mla`='$date_d_mla',
									`date_d_hla`='$date_d_hla',


									`date_j_mlf`='$date_j_mlf',
									`date_j_mla`='$date_j_mla',
									`date_j_hlf`='$date_j_hlf',
									`date_j_hla`='$date_j_hla',
									
									
									`tribunale`='$tribunale',
									`tribunale_a`='$tribunale_a',
									

									`nationalite_d`='$nationalite_d',
									`nationalite_d_a`='$nationalite_d_a',
									`adresse_d`='$adresse_d',
									`adresse_d_a`='$lieu1',

									`prof_lien`='$prof_lien',
									`prof_lien_a`='$prof_lien_a',
									`lien_a`='$lien_a1',
									
									`valider`='1',
									`date_jugement`='$date_jugement',
									`num_jugement`='$jugement',
									`deces_naissance`='$type_jugement'
									 $reqo

									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

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
