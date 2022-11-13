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
if ($permission==securite2($tim2)) { include("div.php");  


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
#Layer1 {
	position:absolute;
	left:280px;
	top:418px;
	width:188px;
	height:159px;
	z-index:1;
}
-->
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


var prenom_a = document.form1.prenom_a.value;
var nom_a = document.form1.nom_a.value;

var lieu1 = document.form1.lieu1.value;


var region = document.form1.region.value;
var code = document.form1.code.value;
var certificat = document.form1.certificat.value;




var date_m = document.form1.date_m.value;

var long=form1.date_m.value.length;
var mois=date_m.substring(3,5);
var jour=date_m.substring(0,2);
var annee=date_m.substring(6,10);





if(certificat=="" || certificat=="----------------------------------نوع الشهادة--------------------------------" || certificat==0) 
		{ 
        alert ('Vérifier le Champ Certificat'); 
        document.form1.certificat.focus(); 
        return false; 
    	} 

if(region=="" || region=="----إختر السنة----" || region==0) 
		{ 
        alert ('Vérifier le Champ année de déclaration'); 
        document.form1.region.focus(); 
        return false; 
    	} 
		

if(code=="" || isNaN(code)) 
		{ 
        alert ('Vérifier le Champ code'); 
        document.form1.code.focus(); 
        return false; 
    	} 
		
	

if(nom_a=="" || nom_a=="الإسم العائلي" || !isNaN(nom_a)) 
		{ 
		
        alert ('Vérifier le Champ nom'); 
        document.form1.nom_a.focus(); 
        return false; 
    	} 
		
if(prenom_a=="" || prenom_a=="الإسم الشخصي" || !isNaN(prenom_a)) 
		{ 
        alert ('Vérifier le Champ PREnom'); 
        document.form1.prenom_a.focus(); 
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



  <form action="modifier_certificat2.php" method="get" name="form1" id="form1" onSubmit="return Validerfrm()">
    <p class="style40">صفحة إضافة شواهد تتعلق بغير المسجلين</p>
	
<div align="center">
    <fieldset style="width:400px">
    <legend align="right"><span class="style19 style39">نوع الشهادة</span></legend>
	
    <select name="certificat" id="certificat">
  <option value="<?php 
  
  		  $partie=$_GET["partie"];
		  
	$Requete3 = "select * from attestation where `id`='".$partie."'    ";
	
	mysql_query("SET NAMES 'UTF8' ");

$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result3);
	
	echo $rox[attestation];
  
  ?>"><?php 
  
  
  			   	$Req = "select profession_a,id from profession where `id`=$rox[attestation]  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$ro = mysql_fetch_array($res);
echo $ro[profession_a];
  
  ?></option>
  <?php   
			   	$Requete3 = "select profession_a,id from profession where `cat`=1  ";
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
    </fieldset>
	


	
    <fieldset style="width:400px">
    <legend align="right"><span class="style19 style39">معلومات عن رسم الولادة</span></legend>
	
	
    <table width="380" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="176" bgcolor="#EFEFEF"><div align="center"><strong>
            <select name="region" id="region" onChange="getDpt()">
              <option value="<?php echo $rox[annee_declaration] ?>"><?php echo $rox[annee_declaration] ?></option>
              <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
              <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
            </select>
        </strong></div></td>
        <td width="198"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
            <input name="code" type="text" id="code" size="14" maxlength="14" value="<?php echo $rox[code]; ?>" />
        </div></td>
        <td><div align="center" class="style39">&#1585;&#1602;&#1605;</div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
          <select name="annee_h" id="annee_h">
            <option value="<?php echo $rox[annee_h] ?>"><?php echo $rox[annee_h]; ?></option>
            <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=1 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
            <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
          </select>
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center" class="style39">السنة الهجرية</div></td>
      </tr>
    </table>


    </fieldset>
	
	
	
	    <fieldset style="width:400px">
    <legend align="right"><span class="style19 style39">معلومات عن المعني بالأمر</span></legend>
    <table width="396" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="125" bgcolor="#EFEFEF"><div align="center">
            <input name="nom" type="text" id="nom" value="<?php 

echo $rox[nom]
  ?>" size="17">
        </div></td>
        <td width="112" bgcolor="#EFEFEF"><input name="nom_a" type="text" id="nom_a" value="<?php 

echo $rox[nom_a]
		  ?>" dir="rtl"></td>
        <td width="151" bgcolor="#EFEFEF">
          <div align="center"><img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" />الإسم العائلي</div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
            <input name="prenom" type="text" id="prenom" value="<?php 

echo $rox[prenom]
  ?>" size="17">
        </div></td>
        <td bgcolor="#EFEFEF"><input name="prenom_a" type="text" id="prenom_a" value="<?php 

echo $rox[prenom_a]
		  ?>" dir="rtl"></td>
        <td bgcolor="#EFEFEF">
        <div align="center">
		
		<img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prenom_a')" />الإسم الشخصي</div></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#EFEFEF"><div align="center">
          <input name="lieu1" type="text" id="lieu1" value="<?php 

echo $rox[lieu1]
		  ?>" dir="rtl" size="35">
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lieu1')" /></div></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#EFEFEF"><div align="center">
          <input name="lieu" type="text" id="lieu" value="<?php 

echo $rox[lieu]
		  ?>" dir="rtl" size="35">
        </div>		</td>
      </tr>
    </table>
	    <fieldset style="width:380px">
        <legend align="right"><span class="style39"> تاريخ الإزدياد الميلادي</span></legend>


        <table width="380" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="374" bgcolor="#EFEFEF"><div align="center">
              <label></label>
              <input name="date_m" type="text" id="date_m" value="<?php
			  include"conn/conversion.php";
			   echo ConvertDate_f($rox[date_n]);	?>" size="35" maxlength="10">
			  
              <button id="trigger2"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
              <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "date_m",
		        button            : "trigger2",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
				
				
				
            </div>              </td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
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
            <a href="#null" onClick="javascript:open_infos();">
            <input name="date_mla" type="text" id="date_mla" dir="rtl" value="<?php echo $rox[date_mla]; ?>" size="30" maxlength="65">
            <img src="icone/convertisseur.PNG" width="20" height="20"></a> </div></td>
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
                <input name="date_mlf" type="text" id="date_mlf" value="<?php echo $rox[date_mlf]; ?>" size="35" maxlength="65">
            </div></td>
          </tr>
        </table>
	    </fieldset>

	
	
	
		    <fieldset style="width:380px">
        <legend class="style39" align="right">تاريخ الإزدياد الهجري</legend>


        <table width="380" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="374" bgcolor="#EFEFEF"><div align="center">
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
            <a href="#null" onClick="javascript:open_infoss();">
            <input name="date_hla" type="text" id="date_hla" dir="rtl" value="<?php echo $rox[date_hla]; ?>" size="35" maxlength="65">
            <img src="icone/convertisseur.PNG" width="20" height="20"></a> </div></td>
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
                <input name="date_hlf" type="text" id="date_hlf" value="<?php echo $rox[date_hlf]; ?>" size="35" maxlength="65">
            </div></td>
          </tr>
        </table>
	    </fieldset>

	
	
			    <fieldset style="width:380px">
        <legend class="style39" align="right">العنوان</legend>


        <table width="380" border="1" cellpadding="0" cellspacing="0">
          
          <tr>
            <td bgcolor="#EFEFEF" class="style39"><div align="center">
              <input name="adresse1" type="text" id="adresse1" value="<?php 

echo $rox[adresse_personne_a]
		  ?>" dir="rtl" size="45" maxlength="45">
              <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('adresse1')" /></div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF" class="style39"><label></label>              <div align="center">
              <label></label>
              <input name="adresse" type="text" id="adresse" value="<?php 

echo $rox[adresse_personne]
		  ?>" dir="rtl" size="45" maxlength="45">
            </div>              
              <div align="center"></div></td>
          </tr>
        </table>
	    </fieldset>

<fieldset style="width:380px">
        <legend class="style39" align="right">الجنس</legend>


        <table width="380" cellpadding="0" cellspacing="0">
          <tr>
            <td width="187" class="style39"><div align="right"> أنثى
              <input name="sex" type="radio" value="F" <?php   if($rox[sex]=="F") echo'checked'; ?> >
            </div></td>
            <td width="187" class="style39"><div align="right">
                <label> ذكر
                  <input name="sex" type="radio" value="M" <?php   if($rox[sex]=="M") echo'checked'; ?> >
                </label>
            </div></td>
          </tr>
        </table>
</fieldset>


			    <fieldset style="width:380px">
        <legend class="style39" align="right">جنسية المعني بالأمر</legend>


        <table width="380">
          
          <tr>
            <td class="style39"><label></label>              <div align="center">
              <label></label>
              <input name="nationalite" type="text" id="nationalite" value="<?php echo $rox[nationalite] ?>" dir="rtl">
              <input name="nationalite_a" type="text" id="nationalite_a" value="<?php echo $rox[nationalite_a] ?>" dir="rtl">
 <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nationalite_a')" /> </div>              <div align="center"></div></td>
          </tr>
        </table>
	    </fieldset>



<!--

		    <fieldset style="width:380px">
        <legend class="style39" align="right">تحميل الرسم الأصلي للمولود (SCAN) </legend>


        <table width="380">
          
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
	      <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
	      <input name="valider" type="submit" class="style39" id="valider" value="تابع إضافة معلومات الأبوين"/>
	    </p>
	    </fieldset>



	
    <p>
    <label></label>    
</div>
  </form>
</div>
</body>
</html>


<?php    }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>

