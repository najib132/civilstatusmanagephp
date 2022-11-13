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

<script type="text/javascript" src="js/listeLiees8.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>


<?php  ///////////////////////////MISE A JOUR DONNES PERE

	 
	  $annee_declaration = addslashes($_GET["annee_declaration"]);
 $code = addslashes($_GET["code"]);  $partie = addslashes($_GET["partie"]);





$prenom = addslashes($_GET["prenom"]);
$nom = addslashes($_GET["nom"]);


$lieu = addslashes($_GET["lieu"]);


$nationalite = addslashes($_GET["nationalite"]);



$date_mlf = addslashes($_GET["date_mlf"]);

$date_hlf = addslashes($_GET["date_hlf"]);

$profession = addslashes($_GET["profession"]);


////////////////CONVERSION DATE

include"conn/conversion.php";



 
 $Requete =  "UPDATE naissance SET 
  									`prof_p`='$profession',
									`nationalite_p`='$nationalite',
									`nom_f_p`='$nom',
									`lieu_p`='$lieu',
									`date_plf_p`='$date_mlf',
									`date_hlf_p`='$date_hlf'
																		
									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 



 $Requete2 =  "UPDATE origine_naissance SET 


  									`prof_p`='$profession',
									`nationalite_p`='$nationalite',
									`nom_f_p`='$nom',
									`lieu_p`='$lieu',
									`date_plf_p`='$date_mlf',
									`date_hlf_p`='$date_hlf'
									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' and `partie`='$partie' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result2 = @mysql_query($Requete2,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 




 $Req =  "SELECT *  FROM `naissance` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `partie`='".$partie."'   ";

 mysql_query("SET NAMES 'UTF8' ");

$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

	$rox = mysql_fetch_array($res);



?>



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
  top: 371px;
  left: 707px;
}



#Layer1 {position:absolute;
	left:450px;
	top:284px;
	width:176px;
	height:147px;
	z-index:1;
}
   .style41 {font-size: 15px}
   </style>

   
</head>
<body>
<div align="center">




  <script type="text/javascript">

function Validerfrm()
{


var nom_a = document.form1.nom_a.value;

var lieu = document.form1.lieu.value;
var lieu1 = document.form1.lieu1.value;
var date_hla = document.form1.date_hla.value;
var date_mla = document.form1.date_mla.value;

var date_m = document.form1.date_m.value;

var long=form1.date_m.value.length;
var mois=date_m.substring(3,5);
var jour=date_m.substring(0,2);
var annee=date_m.substring(6,10);

		
		
if(nom_a=="" || nom_a=="الإسم الكامل" || !isNaN(nom_a)) 
		{ 
		
        alert ('Vérifier le Champ nom'); 
        document.form1.nom_a.focus(); 
        return false; 
    	} 
		

if(lieu1=="" || lieu1=="مكان الإزدياد") 
		{ 
        alert ('Vérifier le Champ Lieu de Naissance'); 
        document.form1.lieu1.focus(); 
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



  <div id="Layer1">
    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>
  </div>
  <form action="naiss4.php" method="get" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return Validerfrm()">
    <p>&nbsp;    </p>
	
	
	
  <div id="scan">

  
  <a href="<?php 	 
  
  	  
	   if($cat=="المولود") $tablo="naissance"; 
 
  if($cat=="المتوفى") $tablo="deces";

	  
$acte="doc_$tablo/$annee_declaration/$partie/$rox[pj]";


echo $acte  ?>.jpg" target="_blank"><img src="<?php echo $acte ?>.jpg" width="650" height="780" /></a>

</div> 

<div id="formulaire">



            <fieldset style="width:380px">
            <legend align="right"><span class="style19 style39">معلومات عن الأم</span></legend>
              <table width="335" border="1" cellpadding="0" cellspacing="0">
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
              <tr>
                <td bgcolor="#EFEFEF"><div align="center">
                  nom et prénom 
                      <input name="nom" type="text" id="nom" value="<?php echo $rox[nom_f_m]; ?>" size="30">
                </div></td>
              </tr>
              <tr>
                <td bgcolor="#EFEFEF" class="style39"><div align="center"><span class="style41">Nationalité</span> 
                  <input name="nationalite" type="text" id="nationalite" value="marocaine">
                </div></td>
                </tr>
              <tr>
                <td bgcolor="#EFEFEF"><div align="center">Lieu de naissance
                  </div>
                <div align="center"></div></td>
              </tr>
              <tr>
                <td bgcolor="#EFEFEF"><div align="center">
                    <input name="lieu" type="text" id="lieu" value="<?php echo $rox[lieu_m]; ?>" size="40">
                </div></td>
              </tr>
            </table>
			
			
			
			
			
			
			
			
			
              <fieldset style="width:310px">
            <legend class="style39" align="right">تاريخ الإزدياد </legend>
                <table width="360" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td width="374" bgcolor="#EFEFEF"><div align="center">


                  <input name="date_hlf" type="text" id="date_hlf" value="<?php echo $rox[date_hlf_m]; ?>" size="40"> 
                  
				  
				  
				  
				  
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

		   
		   Héjire
				  
				  
				  
				  
				   
</div></td>
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
                <input name="date_mlf" type="text" id="date_mlf" value="<?php echo $rox[date_mlf_m]; ?>" size="40">
                
				
				
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
			  
			  
			  Grégo
				
				
				
				</div></td>
              </tr>
            </table>
            </fieldset>
			
			
			  
			  
			  
			  
			  
			  
			  
			  
			  			
			    <fieldset style="width:322px">
        <legend class="style39" align="right">الحرفة</legend>


        <table width="360" border="1" cellpadding="0" cellspacing="0">
          
          <tr>
            <td bgcolor="#EFEFEF" class="style39"><label></label>              <div align="center">
              <label></label>
              <input name="profession" type="text" id="profession" value="<?php
			  
			   $Requete3 = "select prof_m_a,prof_m from utilisateurs  where `id`='".$idf_m."'  ";
mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3); 
	
	echo $row[prof_m];
?>">
            </div>              <div align="center"></div></td>
          </tr>
        </table>
	    </fieldset>



		
					





			  
			  
              <fieldset style="width:322px">
            <legend class="style39" align="right">محل سكنى الأبوين</legend>
                <table width="360" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td bgcolor="#EFEFEF" class="style39"><label></label>
                    <div align="center">
                      <label></label>
                      <input name="adresse" type="text" id="adresse" value="<?php echo $rox[adresse]; ?>" size="35" maxlength="100">
                    </div>
                <div align="center"> </div></td>
              </tr>
            </table>
            </fieldset>
			


              </p>
              <table width="360" border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="87" bgcolor="#EFEFEF" class="style39"><div align="right">نعم
                    <input name="transc" type="radio" value="1">
                  </div></td>
                  <td width="82" bgcolor="#EFEFEF" class="style39"><div align="right">
                    <input name="transc" type="radio" value="0" checked>
                  لا </div></td>
                  <td width="183" bgcolor="#EFEFEF" class="style39"><div align="right">يتعلق الأمر بالنقل</div></td>
                </tr>
              </table>
            <p>
              <input name="trans" type="hidden" id="trans" value="<?php echo $trans;?>">
              <input name="cat" type="hidden" id="cat" value="<?php echo $cat;?>">
              <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
              <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
              <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
              <input name="valider" type="submit" class="style39" id="valider" value="تابع إضافة المعلومات"/>
            </p>
          </fieldset>
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
		  
		  
</div>
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

