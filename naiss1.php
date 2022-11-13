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


$cercle=$_SESSION["cercle"];  
$cercle1=$_SESSION["cercle1"];  



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
.style40 {font-size: 16px}
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
  top: 133px;
  left: 690px;
}
#Layer1 {	position:absolute;
	left:455px;
	top:490px;
	width:176px;
	height:147px;
	z-index:1;
}
   </style>

   
</head>
<body>

  <p>
    <?php 
	

$Req =  "SELECT *  FROM `$table` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `partie`='".$partie."'   ";

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

var lieu1 = document.form1.lieu1.value;

var date_hlf = document.form1.date_hlf.value;
var date_mlf = document.form1.date_mlf.value;



		

		
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
		
		
		if(date_hlf=="") 
		{ 
        alert ('Vérifier le Champ Date de naissance hégérienne'); 
        document.form1.date_hlf.focus(); 
        return false; 
    	} 


if(date_mlf=="") 
		{ 
        alert ('Vérifier le Champ Date de naissance grégorienne'); 
        document.form1.date_mlf.focus(); 
        return false; 
    	} 

	
	
				
 }
		
		
///////////////////////////////////

    </script>
  </p>
  <form action="naiss2.php" method="get" name="form1" id="form1" onSubmit="return Validerfrm()">

<div id="scan">


<a href="<?php 	
 	  
 $acte="doc_naissance/$annee_declaration/$partie/$rox[pj]";

echo $acte  ?>.jpg" target="_blank"><img src="<?php echo $acte ?>.jpg" width="650" height="780"></a>

	</div> 

<div id="formulaire">
		

	
	
	    <fieldset style="width:380px">
    <legend align="right"><span class="style19 style39">معلومات عن <?php  echo $cat ?></span></legend>
	
	<tr>
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


<a href="#null" onClick="javascript:open_documentp();" style="text-decoration:none">إعداد </a>				
				
				</div></td>
                </tr>
	
	<fieldset style="width:310px">
        <legend class="style39" align="right"> تاريخ الإزدياد</legend>

	
	

        <table width="360" border="1" cellpadding="0" cellspacing="0">
          
          <tr>
            <td bgcolor="#EFEFEF"><div align="center">
              <input name="date_hlf" type="text" id="date_hlf" value="<?php echo $rox[date_hlf]; ?>" size="40">
			  
			  
   


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
                                 window.open('datef.php?convert=1&ch=date_hlf','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
				
           <a href="#null" onClick="javascript:open_naiss();"> <img src="icone/convertisseur.PNG" width="20" height="20"></a>

		   
		   Héjire</div></td>
          </tr>
          <tr>
            <td width="374" bgcolor="#EFEFEF"><div align="center">

	  
              <input name="date_mlf" type="text" id="date_mlf" value="<?php echo $rox[date_mlf]; ?>" size="40">
              
			  
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
                                 window.open('datef.php?convert=2&ch=date_mlf','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                </script>
				
           <a href="#null" onClick="javascript:open_naissm();"> <img src="icone/convertisseur.PNG" width="20" height="20"></a>
			  
			  
			  Grégo</div></td>
          </tr>
        </table>

	
	    </fieldset>

	
<fieldset style="width:310px">
        <legend class="style39" align="right">الساعة و الدقيقة</legend>


        <table width="360">
          <tr>
            <td bgcolor="#EFEFEF" class="style39"><label></label>
              
                <div align="center">
                    Heure
                       <input name="heure_f" type="text" id="heure_f" value="<?php echo $rox[heure_f]; ?>">
                  </div></td>
          </tr>
          <tr>
            <td bgcolor="#EFEFEF" class="style39"><label></label>
              
                <div align="center">
                    Minute 
                       <input name="minute_f" type="text" id="minute_f" value="<?php echo $rox[minute_f]; ?>">
                  </div></td>
          </tr>
        </table>
    </fieldset>
	
	
	
	
	
	
	
	
	
	
    <table width="379" border="1" cellpadding="0" cellspacing="0">
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
        <td width="161" bgcolor="#EFEFEF"><div align="center">
          <input name="nom" type="text" id="nom" value="<?php echo $rox[nom]; ?>" size="17">
        </div></td>
        <td width="212" bgcolor="#EFEFEF"><div align="center">
          <div align="left">
            <input name="nom_a" type="text" id="nom_a" dir="rtl" value="<?php echo $rox[nom_a]; ?>" size="22">
            
            
            
          
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" /></div>
		  
		  
	    </div>          </td>
      </tr>
      
      <tr>
        <td colspan="2" bgcolor="#EFEFEF">Lieu de Naissance </td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center">
          <input name="lieu" type="text" id="lieu" value="<?php echo "commune $section cercle $cercle1 province $province" ?>" size="47">
        </div></td>
      </tr>
    </table>
	

			    <fieldset style="width:310px">
        <legend class="style39" align="right">جنسية <?php echo $cat ?></legend>


        <table width="360" border="1" cellpadding="0" cellspacing="0">
          
          <tr>
            <td bgcolor="#EFEFEF" class="style39"><label></label>              <div align="center">
              <label></label>
              <input name="nationalite_personne" type="text" id="nationalite_personne" value="marocaine">
            </div>              <div align="center"></div></td>
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
	      <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
	      <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
	      <input name="table" type="hidden" id="table" value="<?php echo $table;?>">
	      <input name="trans" type="hidden" id="trans" value="<?php echo $trans;?>">
	      <input name="cat" type="hidden" id="cat" value="<?php echo $cat;?>">
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

