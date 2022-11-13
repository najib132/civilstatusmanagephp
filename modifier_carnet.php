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
if ($permission==securite2($tim2)) {    include("div.php");

$partie = addslashes($_GET["partie"]);


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
.style1 {font-size: 18px}
#Layer1 {	position:absolute;
	left:270px;
	top:316px;
	width:140px;
	height:111px;
	z-index:1;
}
-->
</style>
</head>
<body>
<div align="center">

  <p>
    <?php 


$Req =  "SELECT *  FROM `carnet` WHERE `id`='".$partie."'    ";

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

var lieu = document.form1.lieu.value;
var lieu1 = document.form1.lieu1.value;
var code = document.form1.code.value;
var region = document.form1.region.value;

var date_m = document.form1.date_m.value;

var long=form1.date_m.value.length;
var mois=date_m.substring(3,5);
var jour=date_m.substring(0,2);
var annee=date_m.substring(6,10);


		
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

if(lieu=="" || lieu=="Lieu de naissance") 
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
  </p>
  <form action="modifier_carnet2.php" method="get" name="form1" class="style1" id="form1" onSubmit="return Validerfrm()">
  



	
    <div align="center">
	
	
	
			
				
		    <fieldset style="width:400px">
    <legend align="right"><span class="style19 style39">معلومات عن السجل</span></legend>
	
	
    
    <table width="380" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="176" bgcolor="#EFEFEF"><div align="center"><strong>
          <select name="region" id="region" onChange="getDpt()">
            <option value="<?php echo $rox[annee_declaration]; ?>"><?php echo $rox[annee_declaration]; ?></option>
            <option value="0">----إختر السنة----</option>
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
        <td width="198"><div align="center" class="style39">السنة</div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
          <input name="code" type="text" id="code" value="<?php echo $rox[code]; ?>" size="17">
        </div></td>
        <td bgcolor="#FFFFFF"><div align="center" class="style39">رقم</div></td>
      </tr>
    </table>
    </fieldset>
	
	
	
	    <fieldset style="width:400px">
    <legend align="right"><span class="style19 style39">معلومات عن المعني بالأمر</span></legend>
    <div id="Layer1">
      <div id="background" class="background" style="display: none;"></div>
      <div id="clv_arb" class="clv_arb" style="display: none;"></div>
    </div>
    <table width="380" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="205" bgcolor="#EFEFEF"><div align="center">
          <input name="nom" type="text" id="nom" value="<?php echo $rox[nom]; ?>" size="17">
        </div></td>
        <td width="169" bgcolor="#EFEFEF"><div align="center">
          <div align="left">
            <input name="nom_a" type="text" id="nom_a" value="<?php echo $rox[nom_a]; ?>" size="17" dir="rtl">
            
            
            
          
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" /></div>
		  
		  
		  </div>          </td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
            <input name="prenom" type="text" id="prenom" value="<?php echo $rox[prenom]; ?>" size="17">
        </div></td>
        <td bgcolor="#EFEFEF"><div align="center">
            <div align="left">
              <input name="prenom_a" type="text" id="prenom_a" value="<?php echo $rox[prenom_a]; ?>" size="17" dir="rtl">
			  
			  
              
			  
              
              <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prenom_a')" /></div>
   
   
       </div></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center">
          <input name="lieu1" type="text" id="lieu1" value="<?php echo $rox[lieu1]; ?>" size="35" maxlength="45" dir="rtl">
        
		
		              
			  
              
              <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lieu1')" /></div>		</td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center">
          <input name="lieu" type="text" id="lieu" value="<?php echo $rox[lieu]; ?>" size="35" maxlength="45">
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
          <input name="conach" type="text" id="conach" value="<?php echo $rox[num_conach]; ?>" size="10" />
        </div></td>
        <td bgcolor="#EFEFEF"><div align="center"><span class="style39">رقم كناش الحالة المدنية</span></div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center"><strong>
            <input name="ville_conach" type="text" id="ville_conach" dir="rtl" value="<?php echo $rox[ville_conach]; ?>" />
        </strong> <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('ville_conach')" /> </div></td>
        <td bgcolor="#EFEFEF"><div align="center"><strong>المسلم ب</strong></div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
            <input name="date_extrait" type="text" id="date_extrait" value="<?php echo $rox[date_extrait]; ?>" size="20" maxlength="10">
            <button id="trigger2"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
          <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "date_extrait",
		        button            : "trigger2",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
        </div></td>
        <td bgcolor="#EFEFEF"><div align="center"><strong>تاريخ النسخة الموجزة</strong></div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center"><strong>
            <input name="ville_extrait" type="text" id="ville_extrait" dir="rtl" value="<?php echo $rox[ville_extrait]; ?>" />
        </strong> <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('ville_extrait')" /> </div></td>
        <td bgcolor="#EFEFEF"><div align="center">
            <p><strong>المسلمة ب</strong></p>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
            <label>
            <textarea name="mention_marginales" rows="4" id="mention_marginales" dir="rtl"><?php echo $rox[mention_marginales]; ?></textarea>
            </label>
            <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('mention_marginales')" /> </div></td>
        <td bgcolor="#EFEFEF"><div align="center" class="style39 style2">
            <div align="center">البيانات الهامشية</div>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center"></div></td>
        <td bgcolor="#EFEFEF"><div align="center" class="style39"></div></td>
      </tr>
    </table>

	    <fieldset style="width:390px">
        <legend align="right"><span class="style39"> تاريخ الإزدياد الميلادي</span></legend>


        <table width="380" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
                <input name="date_mlf" type="text" id="date_mlf" value="<?php echo $rox[date_mlf]; ?>" size="35" maxlength="65">
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
            <a href="#null" onClick="javascript:open_infos();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> </div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
                <input name="date_mla" type="text" id="date_mla" dir="rtl" value="<?php echo $rox[date_mla]; ?>" size="30" maxlength="65">
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
            </div></td>
          </tr>
          <tr>
            <td width="374" bgcolor="#EFEFEF"><div align="center">
              <label></label>
              <input name="date_m" type="text" id="date_m" value="<?php include"conn/conversion.php"; echo convertDate_f($rox[date_n]); ?>" size="30" maxlength="10">
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
            </div>              </td>
          </tr>
        </table>
	    </fieldset>

	
	
	
		    <fieldset style="width:390px">
        <legend class="style39" align="right">تاريخ الإزدياد الهجري</legend>


        <table width="380" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td width="374" bgcolor="#EFEFEF"><div align="center">
                <input name="date_hlf" type="text" id="date_hlf" value="<?php echo $rox[date_hlf]; ?>" size="35" maxlength="65">
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
            <a href="#null" onClick="javascript:open_infoss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a> </div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
                <input name="date_hla" type="text" id="date_hla" dir="rtl" value="<?php echo $rox[date_hla]; ?>" size="35" maxlength="65">
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
            </div></td>
          </tr>
        </table>
	    </fieldset>

	
	
		
		    <fieldset style="width:390px">
        <legend class="style39" align="right">الجنس</legend>


        <table width="380">
                <tr>
                  <td width="187" class="style39"><div align="right"> أنثى 
              <input name="sex" type="radio" value="F" <?php   if($rox[sex]=="F") echo'checked'; ?> >
            </div></td>
            <td width="187" class="style39"><div align="right">
              <label>
               ذكر
               <input name="sex" type="radio" value="M" <?php   if($rox[sex]=="M") echo'checked'; ?> >
              </label>
            </div></td>
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
	      <input name="valider" type="submit" class="style39" id="valider" value="تابع تعديل معلومات عن الأبوين"/>
	    </p>
	    </fieldset>
	</div>
    <p>
      <label></label>
    </p>
  </form>
</div>
   <p class="style1">&nbsp;</p>
   <p class="style1">&nbsp;</p>
   <p class="style1">&nbsp;</p>
   <p class="style1">&nbsp;</p>
   <p class="style1">&nbsp;</p>
  </div>
</div>
</body>
</html>


<?php    }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>

