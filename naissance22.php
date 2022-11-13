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
$cercle1=$_SESSION["cercle1"];  
    

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
.style4 {font-size: 14px}
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
var annee_h = document.form1.annee_h.value;

var prenom_a = document.form1.prenom_a.value;
var nom_a = document.form1.nom_a.value;

var date_hla = document.form1.date_hla.value;
var date_mla = document.form1.date_mla.value;

var lieu1 = document.form1.lieu1.value;


var date_m = document.form1.date_m.value;

var long=form1.date_m.value.length;
var mois=date_m.substring(3,5);
var jour=date_m.substring(0,2);
var annee=date_m.substring(6,10);


if(date_hla=="" || date_hla=="بالحروف العربية") 
		{ 
        alert ('Vérifier le Champ Date de naissance hégérienne'); 
        document.form1.date_hla.focus(); 
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


if(date_mla=="" || date_mla=="بالحروف العربية") 
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
	


if(nom=="" || nom=="nom") 
		{ 
		
        alert ('Vérifier le Champ NOM'); 
        document.form1.nom.focus(); 
        return false; 
    	} 
		
if(prenom=="" || prenom=="Prénom") 
		{ 
        alert ('Vérifier le Champ PRENOM'); 
        document.form1.prenom.focus(); 
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


	
				
 }
		
		
///////////////////////////////////

    </script>




  <form action="naissance2.php" method="get" name="form1" id="form1" onSubmit="return Validerfrm()">


<div id="scan">

<a href="<?php 	
		 	  
		 	  


		 	  
$acte="doc_$table/$annee_declaration/$partie/$code";

echo $acte  ?>.jpg" target="_blank"><img src="<?php echo $acte ?>.jpg" width="692" height="780" /></a>

</div> 

<div id="formulaire">


                <fieldset style="width:322px">
              <legend class="style39" align="right"></legend>
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
    window.open('telecharger_mention.php?type=2&table=<?php echo $table ?>&annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&partie=<?php echo $partie ?>','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
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
                    في يوم 
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
                                window.open('esss.php?convert=5&ch=date_hlf&ch1=date_hla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
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
                                 window.open('esss.php?convert=5&ch=date_hlf&ch1=date_hla&ch2=annee_h','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
                    <a href="#null" onClick="javascript:open_infoss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> هجرية</div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                    <input name="date_hlf" type="text" id="date_hlf" size="40" >
                  hégirienne</div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                    <label>
                    <input name="annee_h" type="text" id="annee_h" size="10" maxlength="4" value="<?php 
					
					
$Requete3 = "select  annee_h from utilisateurs  where `id`='".$idf_m."'  ";
mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3); 	echo $row[annee_h];
	
	?>">
                    </label>
السنة الهجرية * </div></td>
                </tr>
              </table>
              </fieldset>
			  
			  
                <fieldset style="width:322px">
              <legend align="right"><span class="style39"> تاريخ الإزدياد الميلادي</span></legend>
                  <table width="360" border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="374" bgcolor="#EFEFEF"><div align="center">
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
                                window.open('esss.php?convert=5&ch=date_mlf&ch1=date_mla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
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
         window.open('esss.php?convert=6&ch=date_mlf&ch1=date_mla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
                    <a href="#null" onClick="javascript:open_infos();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> ميلادية </div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                    <input name="date_mlf" type="text" id="date_mlf" size="35">
                    Grégorienne</div></td>
                </tr>
                <tr>
                  <td bgcolor="#EFEFEF"><div align="center">
                    <input name="date_m" type="text" id="date_m" value="<?php echo date("d/m/Y");	?>" size="20" maxlength="10">
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
              </fieldset>
			  
                <fieldset style="width:322px">
              <legend class="style39" align="right">الساعة و الدقيقة</legend>
                  <table width="360">
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
              <legend align="right"><span class="style19 style39">معلومات عن
                <?php  echo $cat ?>
                </span></legend>
                <table width="360" border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="324" colspan="2" bgcolor="#EFEFEF"><div align="center">
                      <input name="lieu1" type="text" id="lieu1" dir="rtl" size="36" value="<?php echo "جماعة $section1 دائرة $cercle اقليم $province1" ?>">
                      
                    
                    <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lieu1')" /> ولد ب  </div></td>
                </tr>
                <tr>
                  <td colspan="2" bgcolor="#EFEFEF"><div align="center"><span class="style4">Lieu de naissance</span>
                    <input name="lieu" type="text" id="lieu" size="35" value="<?php echo "commune $section cercle $cercle1 province $province" ?>">
                  </div></td>
                </tr>
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
                  <td bgcolor="#EFEFEF"><div align="center">
                      <input name="nom" type="text" id="nom" value="nom">
                  </div></td>
                  <td bgcolor="#EFEFEF"><div align="center">
                      <div align="left">
                        <input name="nom_a" type="text" id="nom_a" value="الإسم العائلي" dir="rtl">
                        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" /></div>
                  </div></td>
                </tr>
              </table>
			  
			  
			  
                
				
              <fieldset style="width:322px">
              <legend class="style39" align="right">توأم أم لا</legend>
                <table width="360">
                <tr>
                  <td width="187" bgcolor="#EFEFEF" class="style39"><div align="right"> نعم
                    <input name="jumeau" type="radio" value="1">
                  </div></td>
                  <td width="187" bgcolor="#EFEFEF" class="style39"><div align="right">
                      <label> لا
                        <input name="jumeau" type="radio" value="0" checked>
                      </label>
                  </div></td>
                </tr>
              </table>
              </fieldset>
			  

              <fieldset style="width:322px">
              <legend class="style39" align="right">رتبة الولادة</legend>
                <table width="360">
                <tr>
                  <td bgcolor="#EFEFEF" class="style39"><div align="center">
                    <label>
                    <select name="rang" id="rang">
                      <option value="0">رتبة الولادة</option>
<?php for($i=1; $i<10; $i++) { ?>

                      <option value="<?php  echo $i; ?>"><?php echo $i; } ?></option>
                      <option value="10">+10</option>

                    </select>
                    </label>
                  </div>
                    <div align="right">
                      <label></label>
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
                <fieldset style="width:322px">
              <legend class="style39" align="right">جنسية <?php echo $cat ?></legend>
                  <table width="360">
                <tr>
                  <td width="107" bgcolor="#EFEFEF" class="style39"><label></label>
                      <div align="center">
                        <label></label>
                        <input name="nationalite_personne" type="text" id="nationalite_personne" value="marocaine" size="17">
                  </div></td>
                  <td width="181" bgcolor="#EFEFEF" class="style39"><div align="center">
                      <input name="nationalite_personne_a" type="text" id="nationalite_personne_a" value="مغربية" size="17" dir="rtl">
                      
                    
                  <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nationalite_personne_a')" /> </div></td>
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

