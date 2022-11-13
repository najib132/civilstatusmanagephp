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
if ($permission==securite2($tim2)) { include("div2.php");  

$cat=$_GET["cat"];
 $trans=$_GET["trans"];
 


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

	 $origine=$_GET["origine"];
	 $origineb=$_GET["origineb"];
	 
	  $annee_declaration = addslashes($_GET["annee_declaration"]);
 $code = addslashes($_GET["code"]);  $partie = addslashes($_GET["partie"]);



$prenom = addslashes($_GET["prenom"]);
$nom = addslashes($_GET["nom"]);

$prenom_a = addslashes($_GET["prenom_a"]);
$nom_a = addslashes($_GET["nom_a"]);

$lieu = addslashes($_GET["lieu"]);
$lieu1 = addslashes($_GET["lieu1"]);


$nationalite_a = addslashes($_GET["nationalite_a"]);
$nationalite = addslashes($_GET["nationalite"]);


$date_m = addslashes($_GET["date_m"]);
$date_mlf = addslashes($_GET["date_mlf"]);
$date_mla = addslashes($_GET["date_mla"]);

$date_hlf = addslashes($_GET["date_hlf"]);
$date_hla = addslashes($_GET["date_hla"]);


$adresse = addslashes($_GET["adresse"]);
$adresse_a = addslashes($_GET["adresse_a"]);

$profession_a = addslashes($_GET["profession_a"]);
$profession = addslashes($_GET["profession"]);


$adresse_m_a = addslashes($_GET["adresse_m_a"]);
$adresse_m = addslashes($_GET["adresse_m"]);
$niveau = addslashes($_GET["niveau"]);


////////////////CONVERSION DATE

include"conn/conversion.php";

$date_m=convertDate($date_m);

/////////////////////////DENNES PARE

if($origine==1)

{

 $Requete =  "UPDATE deces SET 
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



 $Requete2 =  "UPDATE origine_deces SET 
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

$result2 = @mysql_query($Requete2,$id) or die ("<br>Probl&egrave;me d'execution 1de la requete d'identification<br>".mysql_error()); 

}



if($origine==2 || $origineb==2)

{


 $Requete =  "UPDATE deces SET 
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


}


if($origine==3)

{

 $Requete =  "UPDATE origine_deces SET 
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



}




 $Req =  "SELECT *  FROM `deces` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `partie`='".$partie."'   ";

 mysql_query("SET NAMES 'UTF8' ");

$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

	$rox = mysql_fetch_array($res);


//echo $Req;



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
  top: 345px;
  left: 696px;
}
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



      <div align="center">
	  
	  
	  
		
				<fieldset style="width:380px">
          <legend class="style39" align="right">معلومات اضافية عن الوفاة</legend>
		  
	
	      <table width="360" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="374" bgcolor="#EFEFEF"><div align="center">
			  
<input name="secteur" type="text" id="secteur" value="<?php echo $rox[secteur]; ?>" size="10" maxlength="5">			  
			  
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
              <td width="124" bgcolor="#EFEFEF" class="style39"><label></label>
                  <label></label>
                  <label></label>
                  <div align="center">
                    <input name="etat" type="text" id="etat" value="<?php echo $rox[etat]; ?>" size="17">
                </div></td>
              <td width="224" bgcolor="#EFEFEF" class="style39"><div align="center">
                  <input name="etat_a" type="text" id="etat_a" value="<?php echo $rox[etat_a]; ?>" size="17" dir="rtl">
                  <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('etat_a')" /> </div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                  <input name="cin" type="text" id="cin" value="<?php echo $rox[cin]; ?>" size="14" maxlength="14">
              </div></td>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style39">رقم البطاقة الوطنية</span></div></td>
            </tr>
              </table>

			  
	


              <div align="center"></div>
                </fieldset>
		  
	  
	  
	  
	  
	  
	  
	  </div>


			  
			  

              <fieldset style="width:322px">
              <legend class="style39" align="right">تحميل الرسم الأصلي
                <?php if($cat=="المولود") echo "للمولود"; else if($cat=="المتوفى") echo"للمتوفى"; ?>
                (SCAN) </legend>
                <table width="360">
                <tr>
                  <td height="80" class="style39"><div align="center">
                      <p>
                        <input name="fichier_choisi" type="file" id="fichier_choisi">
                      </p>
                    <p class="style40">4Mo و لايتعدى JPG : النوع</p>
                  </div>
                      <div align="right">
                        <label></label>
                    </div></td>
                </tr>
              </table>
              </fieldset>
              <fieldset style="width:322px">
              <legend align="right"><span class="style19 style39">معلومات عن التصريح</span></legend>
                <table width="360" border="1" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="2" bgcolor="#EFEFEF"><div align="center">
					
إسم المصرح <?php if($cat=="المولود") echo "بالمولود"; else if($cat=="بالمتوفى")  ?>					
					</div></td>
                  </tr>
                  <tr>
                  <td width="184" bgcolor="#EFEFEF"><div align="center">
                      <input name="nom1" type="text" id="nom1" value="<?php echo $rox[resp_declaration]; ?>" size="15">
                  </div></td>
                  <td width="190" bgcolor="#EFEFEF"><div align="center">
                      <div align="left">
                        <input name="nom_a1" type="text" id="nom_a1" value="<?php echo $rox[resp_declaration_a]; ?>" size="20" dir="rtl">
                        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a1')" /></div>
                  </div></td>
                </tr>
                  <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center"><span class="style39">صلته
                  <?php if($cat=="المولود") echo "بالمولود"; else echo "بالمتوفى"; ?>
                  </span></div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                      <input name="lien1" type="text" id="lien1" value="<?php echo $rox[lien]; ?>" size="20">
                  </div></td>
                  <td bgcolor="#EFEFEF"><div align="center">
                    <input name="lien_a1" type="text" id="lien_a1" value="<?php echo $rox[lien_a]; ?>" size="20" dir="rtl">
                  <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien_a1')" /></div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center"><span class="style41"></span>
                          <span class="style39">مهنة المصرح</span></div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                      <input name="prof_lien" type="text" id="prof_lien" value="<?php echo $rox[prof_lien]; ?>" size="20">
                  </div></td>
                  <td bgcolor="#EFEFEF"><div align="center">
                    <input name="prof_lien_a" type="text" id="prof_lien_a" value="<?php echo $rox[prof_lien_a]; ?>" size="20" dir="rtl">
                    <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prof_lien_a')" /></div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center"><span class="style39">عمره</span></div></td>
                  </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                    <input name="age_f" type="text" id="age_f" value="<?php echo $rox[age_f]; ?>" size="20">
                  </div>                    <div align="center" class="style39"></div></td>
                  <td bgcolor="#EFEFEF"><input name="age" type="text" id="age" value="<?php echo $rox[age]; ?>" size="20" dir="rtl"></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style39">جنسية المصرح</div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF" class="style39"><label></label>
                      <div align="center">
                        <label></label>
                        <input name="nationalite_d" type="text" id="nationalite_d" value="<?php echo $rox[nationalite_d] ?>" size="17">
                    </div></td>
                  <td bgcolor="#EFEFEF" class="style39"><div align="center">
                      <input name="nationalite_d_a" type="text" id="nationalite_d_a" value="<?php echo $rox[nationalite_d_a] ?>" dir="rtl" size="17">
                      <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nationalite_d_a')" /> </div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style39">محل سكنى المصرح</div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                      <input name="adresse_d_a" type="text" id="adresse_d_a" value="<?php echo $rox[adresse_d_a]; ?>" size="45" dir="rtl">
                      <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('adresse_d_a')" /> </div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                      <input name="adresse_d" type="text" id="adresse_d" value="<?php echo $rox[adresse_d]; ?>" size="40">
                  </div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center"><strong>
                    <select name="type_jugement" id="type_jugement" onChange="getjugement()">
					
                      <?php if($rox[deces_naissance]==0 || $rox[deces_naissance]==1 || $rox[deces_naissance]==2 )  {  ?>
                      <option value="<?php echo $rox[deces_naissance] ?>"> عادي</option>
                      <?php }?>
					  
					  
                      <?php if($rox[deces_naissance]==3 || $rox[deces_naissance]==4 || $rox[deces_naissance]==5 )  {  ?>
                      <option value="<?php echo $rox[deces_naissance] ?>">حكم</option>
                      <?php }?>
					  
					  
                      <?php if($cat=="المتوفى")  {  ?>
                      <option value="1"> عادي</option>
                      <option value="5">حكم</option>
                      <?php }  ?>
                    </select>
                  </strong></div></td>
                  <td bgcolor="#EFEFEF"><div align="center"><span class="style39">داخل أو خارج الآجل</span></div></td>
                </tr>
              </table>
                <span class="style40">
                <?php
	echo "
		<div id=champsjugement>


		</div>";
		?>
                <?php if($rox[deces_naissance]==3 || $rox[deces_naissance]==4 || $rox[deces_naissance]==5 )  {  ?>
				
				
				
<table width="360" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="187" bgcolor="#EFEFEF"><div align="center">
      <input name="jugement" type="text" id="jugement" value="<?php echo $rox[num_jugement]; ?>" size="25" />
    </div></td>
    <td width="187" bgcolor="#EFEFEF"><div align="center" class="style39">حكم عدد</div></td>
  </tr>
  <tr>
    <td bgcolor="#EFEFEF"><div align="center">
        <input name="date_jugement" type="text" id="date_jugement" value="<?php echo  convertDate_f($rox[date_jugement]); ?>" size="15" maxlength="10" />
        <button id="trigger5"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
      <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "date_jugement",
		        button            : "trigger5",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
    </div></td>
    <td bgcolor="#EFEFEF"><div align="center" class="style39">تاريخ إصدار الحكم </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#EFEFEF"><div align="center">
        <input name="tribunale_a" type="text" id="tribunale_a" size="35" value="<?php echo $rox[tribunale_a]; ?>" dir="rtl" />
        <span class="style40"></span><img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('tribunale_a')" /></div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#EFEFEF"><div align="center">
        <input name="tribunale" type="text" id="tribunale" size="35" value="<?php echo $rox[tribunale]; ?>" />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#EFEFEF"><div align="right" class="style39">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1581;&#1603;&#1605; &#1575;&#1604;&#1605;&#1610;&#1604;&#1575;&#1583;&#1610;</div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#EFEFEF"><div align="center">
        <input name="date_j_mlf" type="text" id="date_j_mlf" value="<?php echo $rox[date_j_mlf]; ?>" size="35" maxlength="65" />
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
      <a href="#null" onClick="javascript:open_infosj();"><img src="icone/convertisseur.PNG" width="20" height="20" /></a> </div>
        <div align="center" class="style39"></div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#EFEFEF"><div align="center">
        <input name="date_j_mla" type="text" id="date_j_mla" value="<?php echo $rox[date_j_mla]; ?>"  dir="rtl" size="35" />
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
                                window.open('esss.php?convert=3&ch=date_j_mla','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
 <!--   <a href="#null" onClick="javascript:open_infosssj();"><img src="icone/convertisseur.PNG" width="20" height="20" /></a> --> </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#EFEFEF"><div align="right" class="style39">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1581;&#1603;&#1605; &#1575;&#1604;&#1607;&#1580;&#1585;&#1610;</div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#EFEFEF"><div align="center">
        <input name="date_j_hlf" type="text" id="date_j_hlf" value="<?php echo $rox[date_j_hlf]; ?>" size="35" />
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
    <a href="#null" onClick="javascript:open_infossj();"><img src="icone/convertisseur.PNG" width="20" height="20" /></a> </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#EFEFEF"><div align="center">
        <input name="date_j_hla" type="text" id="date_j_hla" value="<?php echo $rox[date_j_hla]; ?>"  dir="rtl" size="35" />
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
  <!--    <a href="#null" onClick="javascript:open_infossssj();"><img src="icone/convertisseur.PNG" width="20" height="20" /></a> --> </div>
        <div align="center"></div></td>
  </tr>
</table>
<?php } ?>
							
                </span>
                  <label></label>
              </p>
              <table width="360" border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong>تاريخ التصريح الهجري</strong></div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
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
                                 window.open('esss.php?convert=2&ch=date_d_hlf&ch1=date_d_hla','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                  </script>
                      <input name="date_d_hla" type="text" id="date_d_hla" value="<?php echo $rox[date_d_hla]; ?>"  dir="rtl" size="45">
                  <a href="#null" onClick="javascript:open_infoss2();"> <img src="icone/convertisseur.PNG" width="20" height="20"></a> </div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                      <script type="text/javascript">
                <!--
                        function open_infossssg()
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
                                window.open('esss.php?convert=2&ch=date_d_hla','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                  </script>
                      <!--               <a href="#null" onClick="javascript:open_infossssg();"><img src="icone/convertisseur.PNG" width="20" height="39"></a> -->
                      <input name="date_d_hlf" type="text" id="date_d_hlf" value="<?php echo $rox[date_d_hlf]; ?>" size="40">
                    </div>
                      <div align="center"></div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
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
         window.open('esss.php?convert=1&ch=date_d_mlf&ch1=date_d_mla&ch2=date_d','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                  </script>
                    تاريخ التصريح الميلادي
                    <input name="date_d_mla" type="text" id="date_d_mla" value="<?php echo $rox[date_d_mla]; ?>"  dir="rtl" size="35">
                    <a href="#null" onClick="javascript:open_infos2();"> <img src="icone/convertisseur.PNG" width="20" height="20"></a> </div>
                      <div align="center" class="style39"></div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
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
                      <!--                <a href="#null" onClick="javascript:open_infosssg();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> -->
                    En fraçais
                    <input name="date_d_mlf" type="text" id="date_d_mlf" value="<?php echo $rox[date_d_mlf]; ?>" size="40">
                  </div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                    <input name="date_d" type="text" id="date_d" value="<?php echo convertDate_f($rox[date_d]);	?>" size="10" maxlength="10">
                    <button id="trigger2"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
                    <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "date_d",
		        button            : "trigger2",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	      </script>
</div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                    <table width="360">
                      <tr>
                        <td bgcolor="#EFEFEF" class="style39"><label></label>
                            <div align="right">
                              <input name="heure_f" type="text" id="heure_f" value="<?php echo $rox[heure_f_d]; ?>">
                              <input name="heure" type="text" id="heure" value="<?php echo $rox[heure_a_d]; ?>" dir="rtl">
                              الساعة</div></td>
                      </tr>
                      <tr>
                        <td bgcolor="#EFEFEF" class="style39"><label></label>
                            <div align="right">
                              <input name="minute_f" type="text" id="minute_f" value="<?php echo $rox[minute_f_d]; ?>">
                              <input name="minute" type="text" id="minute" value="<?php echo $rox[minute_a_d]; ?>" dir="rtl">
                              الدقيقة</div></td>
                      </tr>
                    </table>
                  </div></td>
                </tr>
              </table>
              </fieldset>
			  
			  
			  
			  
			  
              <fieldset style="width:322px">
              <legend align="right"><strong>التوقيع</strong></legend>
                <table width="360" border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                    من طرفنا نحن
                    <textarea name="officier_a" cols="45" rows="1" id="officier_a" dir="rtl"><?php echo $rox[officier_a]; ?></textarea>
                  </div></td>
                  </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                    <textarea name="officier" cols="45" rows="1" id="officier"><?php echo $rox[officier]; ?></textarea>
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
                      <input name="delegation" type="text" id="delegation" value="<?php echo $rox[delegation];  ?>" size="23">
                    </div>
                      <div align="center">
                        <div align="left"></div>
                      </div></td>
                  <td bgcolor="#EFEFEF"><div align="center">
                      <input name="delegation_a" type="text" id="delegation_a" value="<?php echo $rox[delegation_a];  ?>" dir="rtl" size="23">
                  </div></td>
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

include("div_menu.php");

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

$nationalite_d_a = addslashes($_POST["nationalite_d_a"]);
$nationalite_d = addslashes($_POST["nationalite_d"]);



									$ancien_ville=addslashes($_POST["ancien_ville"]);
									$ancien_codet=addslashes($_POST["ancien_codet"]);
									$ancien_officier=addslashes($_POST["ancien_officier"]);

									$ancien_ville_f=addslashes($_POST["ancien_ville_f"]);
									$ancien_officier_f=addslashes($_POST["ancien_officier_f"]);


$date_m=addslashes($_POST["date_m"]);
$date_mlf=	addslashes($_POST["date_mlf"]);
$date_mla=addslashes($_POST["date_mla"]);
$date_hlf=  addslashes($_POST["date_hlf"]);
$date_hla=  addslashes($_POST["date_hla"]);

$date_d=addslashes($_POST["date_d"]);
$date_d_mlf=addslashes($_POST["date_d_mlf"]);
$date_d_mla=addslashes($_POST["date_d_mla"]);
$date_d_hlf=  addslashes($_POST["date_d_hlf"]);
$date_d_hla=  addslashes($_POST["date_d_hla"]);

$date_j_mlf=addslashes($_POST["date_j_mlf"]);
$date_j_mla=addslashes($_POST["date_j_mla"]);
$date_j_hlf=  addslashes($_POST["date_j_hlf"]);
$date_j_hla=  addslashes($_POST["date_j_hla"]);

$tribunale=addslashes($_POST["tribunale"]);
$tribunale_a=addslashes($_POST["tribunale_a"]);



	$cin=  addslashes($_POST["cin"]);
	$secteur=  addslashes($_POST["secteur"]);
	
	
	$adresse_d=addslashes($_POST["adresse_d"]);
$adresse_d_a=addslashes($_POST["adresse_d_a"]);

$etat=addslashes($_POST["etat"]);
$etat_a=addslashes($_POST["etat_a"]);


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
							 


	$Requete3 = "select date_n,sex,deces_naissance from deces where `annee_declaration`='$annee_declaration' and `code`='$code' and `partie`='$partie' ";
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
$date_naissance=$row['date_n'];
$sex=$row['sex'];

/////////////////////////DENNES PARE



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
  
    <p><a href=modifier_deces.php?annee_declaration=$annee_declaration&code=$code&table=deces&cat=$cat&trans=$trans&partie=$partie>تعديل</a></p>

      <p><a href=index_civil.php>الرجوع إلى القائمة</a></p>

  
</div>
<p>&nbsp;</p>


";
 


if($origine==1) {
		 
									 
 $Requete =  "UPDATE deces SET    
									`signature`='$signature',
																		`valider`='1',

									`delegation_a`='$delegation_a',
									`delegation`='$delegation',
									`officier`='$officier',
									`officier_a`='$officier_a',
									`resp_declaration`='$nom1',
									`resp_declaration_a`='$nom_a1',
									`age`='$age',
									`age_f`='$age_f',
									`lien`='$lien1',
									`lien_a`='$lien_a1',
									`prof_lien`='$prof_lien',
									`prof_lien_a`='$prof_lien_a',
									`date_d`='$date_d',
									`date_d_mlf`='$date_d_mlf',
									`date_d_mla`='$date_d_mla',
									`date_d_hlf`='$date_d_hlf',
									`date_d_hla`='$date_d_hla',
									`nationalite_d`='$nationalite_d',
									`nationalite_d_a`='$nationalite_d_a',
									`adresse_d`='$adresse_d',
									`adresse_d_a`='$adresse_d_a',
									`heure_a_d`='$heure',
									`minute_a_d`='$minute',
									`heure_f_d`='$heure_f',
									`minute_f_d`='$minute_f',
									
									`cin`='$cin',
									`secteur`='$secteur',

									`etat`='$etat',
									`etat_a`='$etat_a',
									
									`date_jugement`='$date_jugement',
									`num_jugement`='$jugement',

									`date_j_mlf`='$date_j_mlf',
									`date_j_mla`='$date_j_mla',
									`date_j_hlf`='$date_j_hlf',
									`date_j_hla`='$date_j_hla',
									
									`tribunale`='$tribunale',
									`tribunale_a`='$tribunale_a',
									
									`deces_naissance`='$type_jugement'

									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


 $Requete2 =  "UPDATE origine_deces SET    
									`signature`='$signature',
																		`valider`='1',

									`delegation_a`='$delegation_a',
									`delegation`='$delegation',
									`officier`='$officier',
									`officier_a`='$officier_a',
									`resp_declaration`='$nom1',
									`resp_declaration_a`='$nom_a1',
									`age`='$age',
									`age_f`='$age_f',
									`lien`='$lien1',
									`lien_a`='$lien_a1',
									`prof_lien`='$prof_lien',
									`prof_lien_a`='$prof_lien_a',
									`date_d`='$date_d',
									`date_d_mlf`='$date_d_mlf',
									`date_d_mla`='$date_d_mla',
									`date_d_hlf`='$date_d_hlf',
									`date_d_hla`='$date_d_hla',
									`nationalite_d`='$nationalite_d',
									`nationalite_d_a`='$nationalite_d_a',
									`adresse_d`='$adresse_d',
									`adresse_d_a`='$adresse_d_a',
									
									`cin`='$cin',
									`secteur`='$secteur',

									`etat`='$etat',
									`etat_a`='$etat_a',
									
									`date_jugement`='$date_jugement',
									`num_jugement`='$jugement',

									`date_j_mlf`='$date_j_mlf',
									`date_j_mla`='$date_j_mla',
									`date_j_hlf`='$date_j_hlf',
									`date_j_hla`='$date_j_hla',
									
									`tribunale`='$tribunale',
									`tribunale_a`='$tribunale_a',
									
									`deces_naissance`='$type_jugement'

									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result2 = @mysql_query($Requete2,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


}


if($origine==2 || $origineb==2) {

 $Requete =  "UPDATE deces SET    
									`signature`='$signature',
																		`valider`='1',

									`delegation_a`='$delegation_a',
									`delegation`='$delegation',
									`officier`='$officier',
									`officier_a`='$officier_a',
									`resp_declaration`='$nom1',
									`resp_declaration_a`='$nom_a1',
									`age`='$age',
									`age_f`='$age_f',
									`lien`='$lien1',
									`lien_a`='$lien_a1',
									`prof_lien`='$prof_lien',
									`prof_lien_a`='$prof_lien_a',
									`date_d`='$date_d',
									`date_d_mlf`='$date_d_mlf',
									`date_d_mla`='$date_d_mla',
									`date_d_hlf`='$date_d_hlf',
									`date_d_hla`='$date_d_hla',
									`nationalite_d`='$nationalite_d',
									`nationalite_d_a`='$nationalite_d_a',
									`adresse_d`='$adresse_d',
									`adresse_d_a`='$adresse_d_a',
									
									`cin`='$cin',
									`secteur`='$secteur',

									`etat`='$etat',
									`etat_a`='$etat_a',
									
									`date_jugement`='$date_jugement',
									`num_jugement`='$jugement',

									`date_j_mlf`='$date_j_mlf',
									`date_j_mla`='$date_j_mla',
									`date_j_hlf`='$date_j_hlf',
									`date_j_hla`='$date_j_hla',
									
									`tribunale`='$tribunale',
									`tribunale_a`='$tribunale_a',
									
									`deces_naissance`='$type_jugement'

									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


}


if($origine==3) {

 $Requete =  "UPDATE origine_deces SET    
									`signature`='$signature',
																		`valider`='1',

									`delegation_a`='$delegation_a',
									`delegation`='$delegation',
									`officier`='$officier',
									`officier_a`='$officier_a',
									`resp_declaration`='$nom1',
									`resp_declaration_a`='$nom_a1',
									`age`='$age',
									`age_f`='$age_f',
									`lien`='$lien1',
									`lien_a`='$lien_a1',
									`prof_lien`='$prof_lien',
									`prof_lien_a`='$prof_lien_a',
									`date_d`='$date_d',
									`date_d_mlf`='$date_d_mlf',
									`date_d_mla`='$date_d_mla',
									`date_d_hlf`='$date_d_hlf',
									`date_d_hla`='$date_d_hla',
									`nationalite_d`='$nationalite_d',
									`nationalite_d_a`='$nationalite_d_a',
									`adresse_d`='$adresse_d',
									`adresse_d_a`='$adresse_d_a',
									
									`cin`='$cin',
									`secteur`='$secteur',

									`etat`='$etat',
									`etat_a`='$etat_a',
									
									`date_jugement`='$date_jugement',
									`num_jugement`='$jugement',

									`date_j_mlf`='$date_j_mlf',
									`date_j_mla`='$date_j_mla',
									`date_j_hlf`='$date_j_hlf',
									`date_j_hla`='$date_j_hla',
									
									`tribunale`='$tribunale',
									`tribunale_a`='$tribunale_a',
									
									`deces_naissance`='$type_jugement'

									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


}


echo "$print";

if(!empty($_FILES["fichier_choisi"]["name"]))
{
	//nom du fichier choisi:	
	$nomFichier    = $_FILES["fichier_choisi"]["name"];
//nom temporaire sur le serveur:
	$nomTemporaire = $_FILES["fichier_choisi"]["tmp_name"];
	//type du fichier choisi:
	//poids en octets du fichier choisit:
	$poidsFichier  = $_FILES["fichier_choisi"]["size"];
	//code de l'erreur si jamais il y en a une:
	$codeErreur    = $_FILES["fichier_choisi"]["error"];


 $typeFichier   = $_FILES["fichier_choisi"]["type"];

if($typeFichier!="image/jpeg" || $poidsFichier > 7000000)
{

echo "<font color=#FF0000><div align=\"center\"><span class=\"style9\"><b>هناك خطأ أثناء تحميل الرسم تأكد من نوعية الصورة ووزنها </b></span><BR></font>";
echo "<div align=\"center\"><span class=\"style9\"><b><a href=telecharger.php?code=$code&annee_declaration=$annee_declaration&table=$table&partie=$partie> Réessayer à nouveau</b></span><BR>";

}

else
{

$pj=$code;

	
	if(copy($nomTemporaire, $chemin.$nomFichier))
{
   $y=".jpg";

 $voo="doc_deces/$annee_declaration/$pj$y";
 

		if (file_exists($voo)==TRUE) unlink($voo);
 

      	   rename("$chemin"."$nomFichier", "$chemin"."$voo");
		   
		   /////////////////////////DENNES PARE



   
				}
		
		
		}
}//fin if



}
?>
</div>
</body>
</html>
















<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>
