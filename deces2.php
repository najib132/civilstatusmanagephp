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
   
   
   $cercle=$_SESSION["cercle"];      

   
 include"accesclient1.php";
if ($permission==securite2($tim2)) { include("div2.php");  

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

if($trans==1) $transo=2;
if($cat=="المتوفى") $transo=1;
if($cat=="المولود") $transo=0;

 if($cat=="المولود") $table="naissance"; else if($cat=="المتوفى") $table="deces";
 
 
$prenom = addslashes($_GET["prenom"]);
$nom = addslashes($_GET["nom"]);

$prenom_a = addslashes($_GET["prenom_a"]);
$nom_a = addslashes($_GET["nom_a"]);

$nom=trim($nom);
$nom_a=trim($nom_a);


$lieu = addslashes($_GET["lieu"]);
$lieu1 = addslashes($_GET["lieu1"]);

 $annee_h = addslashes($_GET["annee_h"]);


$niveau1 = addslashes($_GET["niveau1"]);



 $annee_declaration = addslashes($_GET["annee_declaration"]);
$code = addslashes($_GET["code"]);
$partie = addslashes($_GET["partie"]);

$date_m = addslashes($_GET["date_m"]);
$date_mlf = addslashes($_GET["date_mlf"]);
$date_mla = addslashes($_GET["date_mla"]);

$date_hlf = addslashes($_GET["date_hlf"]);
$date_hla = addslashes($_GET["date_hla"]);


$date_n_d = addslashes($_GET["date_n_d"]);
$date_d_mlf = addslashes($_GET["date_d_mlf"]);
$date_d_mla = addslashes($_GET["date_d_mla"]);

$date_d_hlf = addslashes($_GET["date_d_hlf"]);
$date_d_hla = addslashes($_GET["date_d_hla"]);



$heure = addslashes($_GET["heure"]);
$heure_f = addslashes($_GET["heure_f"]);

$minute = addslashes($_GET["minute"]);
$minute_f = addslashes($_GET["minute_f"]);

$sex = addslashes($_GET["sex"]);


$province_n = addslashes($_GET["province_n"]);


$nationalite_personne_a = addslashes($_GET["nationalite_personne_a"]);
$nationalite_personne = addslashes($_GET["nationalite_personne"]);


$prof_personne=addslashes($_GET["prof_personne"]);
$prof_personne_a=addslashes($_GET["prof_personne_a"]);


$adresse=addslashes($_GET["adresse"]);
$adresse_a=addslashes($_GET["adresse_a"]);

$bayane=addslashes($_GET["bayane"]);
$bayane1=addslashes($_GET["bayane1"]);



////////////////CONVERSION DATE

include"conn/conversion.php";

$date_m=convertDate($date_m);
$date_n_d=convertDate($date_n_d);

 $Requete =  "UPDATE $table SET 
									`nom`='$nom',
									`nom_a`='$nom_a',
									`prenom`='$prenom',
									`prenom_a`='$prenom_a',
									`annee_h`='$annee_h',
									
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
									`deces_naissance`='$transo',
									`nationalite_personne_a`='$nationalite_personne_a',
									`nationalite_personne`='$nationalite_personne',

									`prof_personne`='$prof_personne',
									`prof_personne_a`='$prof_personne_a',

                                    `province`='$province_n',									

									`adresse_personne`='$adresse',
									`adresse_personne_a`='$adresse_a',
									`ville_deces`='$bayane',
									`ville_deces_a`='$bayane1',
									`niveau_scolaire_a`='$niveau1',

                                    `date_n_d`='$date_n_d',
									`date_mlf_d`='$date_d_mlf',
									`date_mla_d`='$date_d_mla',
									`date_hlf_d`='$date_d_hlf',
									`date_hla_d`='$date_d_hla'								
									
									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie';";
									
									 mysql_query("SET NAMES 'UTF8' ");
$result = @mysql_query($Requete,$id) or die ("<br>Problme d'execution de la requete <br>".mysql_error()); 


?>
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
  top: 246px;
  left: 706px;
}


</style>



   <style type="text/css">
<!--
.style39 {font-size: 18px}
.style4 {font-size: 14px}
#Layer1 {	position:absolute;
	left:450px;
	top:284px;
	width:176px;
	height:147px;
	z-index:1;
}
-->
   </style>
</head>
<body>
<div align="center">


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


  <script type="text/javascript">

function Validerfrm()
{

var nom_a = document.form1.nom_a.value;

	
		
		
if(nom_a=="" || nom_a=="" || !isNaN(nom_a)) 
		{ 
		
        alert ('Vérifier le Champ nom'); 
        document.form1.nom_a.focus(); 
        return false; 
    	} 
		


				
 }
		
		
///////////////////////////////////

    </script>



  <form action="deces3.php" method="get" name="form1" id="form1" onSubmit="return Validerfrm()">
   <div id="scan">
<a href="<?php 	
		 	  
$pj=$code;

		 	  
$acte="doc_$table/$annee_declaration/$partie/$pj";
echo $acte  ?>.jpg" target="_blank"><img src="<?php echo $acte ?>.jpg" width="692" height="780" /></a>
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
    window.open('telecharger_mention.php?type=2&partie=<?php echo $partie ?>&table=<?php echo $table ?>&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
        <a href="#null" onClick="javascript:open_document();" style="text-decoration:none">وثائق أخرى متعلقة بالرسم </a> </div></td>
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
    window.open('prepare_f.php','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
                      <a href="#null" onClick="javascript:open_documentp();" style="text-decoration:none"> إعداد </a> 

		
		
		</div></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center">
            
            <div align="center">
              <input name="nom_a" type="text" id="nom_a" dir="rtl" value="" size="35">
                
                
                
                
              <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" />من والده</div>
        </div></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center">
          nom père
              <input name="nom" type="text" id="nom" size="33">
        </div></td>
      </tr>
    </table>
	


        <table width="360" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="374" bgcolor="#EFEFEF"><div align="center">
                في 
                    <input name="date_hla" type="text" id="date_hla" value=""  dir="rtl" size="35">
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
            <a href="#null" onClick="javascript:open_infoss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> <strong>هجرية</strong></div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">en français
              <input name="date_hlf" type="text" id="date_hlf" size="35" >
            </div></td>
          </tr>
        </table>




        <table width="360" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="354" bgcolor="#EFEFEF"><div align="center">
               موافق 
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
                                window.open('esss.php?convert=1&ch=date_mlf&ch1=date_mla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
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
         window.open('esss.php?convert=1&ch=date_mlf&ch1=date_mla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
              <a href="#null" onClick="javascript:open_infos();"><img src="icone/convertisseur.PNG" width="20" height="20"></a>  ميلادية </div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">en français
              <input name="date_mlf" type="text" id="date_mlf" size="35">
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
<input name="date_m" type="text" id="date_m" value="dd/mm/yyyy" size="10" maxlength="10">
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

	
			    <fieldset style="width:322px">
        <legend class="style39" align="right">جنسيته</legend>


      <tr>
        <td bgcolor="#EFEFEF"><table width="360" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="125" bgcolor="#EFEFEF" class="style39"><label></label>
                <div align="center">
                  <label></label>
                  <input name="nationalite" type="text" id="nationalite" value="marocaine" size="17">
              </div></td>
            <td width="199" bgcolor="#EFEFEF" class="style39"><div align="center">
                <input name="nationalite_a" type="text" id="nationalite_a" value="مغربية" dir="rtl" size="20">
                <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nationalite_a')" /></div></td>
          </tr>
        </table></td>
      </tr>
				
	    </fieldset>







			    <fieldset style="width:322px">
        <legend class="style39" align="right">الحرفة</legend>


        <table width="360" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="118" bgcolor="#EFEFEF" class="style39"><label></label>
                <div align="center">
                  <label></label>
                  <input name="profession" type="text" id="profession" size="17" value="<?php 					
$Requete3 = "select prof_p_a,prof_p from utilisateurs  where `id`='".$idf_m."'  ";
mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
	echo $row[prof_p];
	
?>">
              </div></td>
            <td width="200" bgcolor="#EFEFEF" class="style39"><div align="center"><strong>
                <input name="profession_a" type="text" id="profession_a" size="17" dir="rtl" value="<?php
					
	
	 echo $row[prof_p_a];
					
					 ?>">
            </strong><img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('profession_a')" /> </div></td>
          </tr>
        </table>
			    </fieldset>






              <fieldset style="width:322px">
              <legend class="style39" align="right">الساكن ب</legend>
          <table width="360" border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="129" bgcolor="#EFEFEF" class="style39">
                    <label></label>
                    <label></label>                    <label></label>                    <div align="center">
                      <input name="adresse_p" type="text" id="adresse_p" size="17">
                  </div></td>
                  <td width="225" bgcolor="#EFEFEF" class="style39"><div align="center">
                    <input name="adresse_p_a" type="text" id="adresse_p_a" size="24" dir="rtl">
                  <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('adresse_p_a')" /> </div></td>
                </tr>
              </table>
              </fieldset>
			  

	
	
	

	


		</p>
	    

	    <p>
	      <input name="trans" type="hidden" id="trans" value="<?php echo $trans;?>">
	      <input name="cat" type="hidden" id="cat" value="<?php echo $cat;?>">
	      <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
	      <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
	      <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
	      <input name="valider" type="submit" class="style39" id="valider" value="تابع إضافة  معلومات عن الأم"/>
	    </p>
	    </fieldset>


</div>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <div id="Layer1">   <div id="background" class="background" style="display: none;"></div>
          <div id="clv_arb" class="clv_arb" style="display: none;"></div>
    </div>
    <p>&nbsp;</p>
	
	

	
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

