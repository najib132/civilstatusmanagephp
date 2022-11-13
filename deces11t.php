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
if ($permission==securite2($tim2)) { include("div.php");  

$cat=$_GET["cat"];
 $trans=$_GET["trans"];

$annee_ancien=$_GET["annee_ancien"];
$code_ancien=$_GET["code_ancien"];

?>


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      


<?php  if($cat=="المولود") { ?>

<script type="text/javascript" src="js/listeLiees8.js"></script>

<?php }  if($cat=="المتوفى") { ?>

<script type="text/javascript" src="js/listeLiees7.js"></script>
<?php } ?>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>


<?php
$valider=$_POST["valider"];
if ($valider!="تابع إضافة معلومات و تحميل الرسم الأصلي") { ?>


<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:48px;
	top:102px;
	width:14px;
	height:38px;
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
.style41 {
	font-size: 20px;
	color: #707070;
}
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



var region = document.formulaire_envoi_fichier.region.value;
var partie = document.formulaire_envoi_fichier.partie.value;
var code = document.formulaire_envoi_fichier.code.value;



if(region=="" || region=="----إختر السنة----" || region==0) 
		{ 
        alert ('Vérifier le Champ année de déclaration'); 
        document.formulaire_envoi_fichier.region.focus(); 
        return false; 
    	} 
		
if(partie=="") 
		{ 
        alert ('Vérifier le Champ partie'); 
        document.formulaire_envoi_fichier.partie.focus(); 
        return false; 
    	} 
		

if(code=="" || isNaN(code)) 
		{ 
        alert ('Vérifier le Champ code'); 
        document.formulaire_envoi_fichier.code.focus(); 
        return false; 
    	} 

						
 }
		
		
///////////////////////////////////

    </script>




<form name="formulaire_envoi_fichier" id="formulaire_envoi_fichier" enctype="multipart/form-data" method="post" action="" onSubmit="return Validerfrm()">
  <div align="center">
    <p>
      <label></label>
      <span class="style41 style39"><?php echo $_GET["affiche"]; ?></span></p>
	  
	  
	  	
	
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
    <a href="#null" onClick="javascript:open_documentp();" style="text-decoration:none"> </a>

	  
	  
    <table width="60%">
      <tr>
        <td><div align="right"><a href="#null" onClick="javascript:open_documentp();" style="text-decoration:none">إعداد<img src="icone/samples.png" width="32" height="32"> </a></div></td>
      </tr>
    </table>
    <table width="200">
      <tr>
        <td>
		
	    <fieldset style="width:400px">
    <legend align="right"><span class="style19 style39">معلومات عن السجل</span></legend>
	
	
    <table width="380" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="176" bgcolor="#EFEFEF"><div align="center"><strong>
          <select name="region" id="region" onChange="getDpt()">
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
        <td width="198"><div align="center" class="style39">السنة الميلادية</div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center">
          <input name="partie" type="text" id="partie" size="14" maxlength="14" value="<?php 
					
 $Requete3 = "select partie from utilisateurs  where `id`='".$idf_m."'  ";
mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3); 
	
	echo $row[partie];
					
					?>" />
        </div></td>
        <td><div align="center" class="style39">الجزء</div></td>
      </tr>
      <tr>
        <td bgcolor="#EFEFEF"><div align="center"><span class="style4">
            <?php
	echo "
		<div id=champsDpt>
		  <input name=code type=text id=code size=14 maxlength=8 />
		</div>";
		?>
        </span></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><span class="style39">رقم</span></div></td>
      </tr>
    </table>
	    </fieldset>
	
			
	
		
		<fieldset style="width:400px">
          <legend class="style39" align="right">تحميل الرسم الأصلي <?php if($cat=="المولود") echo "للمولود"; else if($cat=="المتوفى") echo"للمتوفى"; ?> (SCAN) </legend>
          <table width="400">
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
		  
		  
		  
			
			
	
    <p align="center">
      <input name="valider" type="submit" id="valider" value="تابع إضافة معلومات و تحميل الرسم الأصلي"/>
          </p>
			
			
			
			
		</td>
      </tr>
    </table>
    <p><br>
      <br>
    </p>
  </div>
</form>
<?php }else
	
{


 $region = addslashes($_POST["region"]);
$code = addslashes($_POST["code"]);
$partie = addslashes($_POST["partie"]);
$cat = addslashes($_GET["cat"]);

 if($cat=="المولود")
 {
  $table="naissance"; 
  $valeur=0;
  }
  else if($cat=="المتوفى") { 
 
 $table="deces";
  $valeur=1; 
  
 }



$Req =  "SELECT code  FROM `$table` WHERE `annee_declaration`='".$region."' and `code`='".$code."' and `partie`='".$partie."'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

$nn=mysql_num_rows($res);

if($nn!=0) 
{
include"aces2.php";
}
else {


$dossier="doc_deces/$region/$partie";

if(file_exists($dossier)==FALSE) echo"<style type=text/css>
<!--
.style1 {
	font-size: 22px;
	color: #000000;
}
-->
</style>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div align=center class=style1>رقم السجل الذي تو إدخاله لا يوجد، يجب فتح السجل عند صفحة رئيس المصلحة</div>
"; else {




$mois=date("m");

if($trans==1) $valeur=2; 

$pj=$code;


 $Requete =  "INSERT INTO `$table`(`annee_declaration`,
                                    `code`,
									`partie`,
									`deces_naissance`,
									`idf`,
									`pj`
									
									) 
 VALUES ('$region','$code','$partie','$valeur','$idf_m','$pj');"; 
 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Problme d'execution de la requete <br>".mysql_error()); 



include"aces1.php";


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
echo "<font color=#FF0000><div align=\"center\"><span class=\"style9\"><b>يمكن تحميل الرسم فيما بعد </b></span><BR></font>";
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";

}

else
{




//on v&eacute;rifies que le champ est bien rempli:
	
	//chemin qui m&egrave;ne au dossier qui va contenir les fichiers uplaod:
//$chemin="../BTP/";
	//$chemin = "C:\Program Files\EasyPHP1-8\www/" ;
	
	if(copy($nomTemporaire, $chemin.$nomFichier))
{
   $y=".jpg";



 $voo="doc_deces/$region/$partie/$pj$y";
 

		if (file_exists($voo)==TRUE) unlink($voo);
		

      	   rename("$chemin"."$nomFichier", "$chemin"."$voo");
		   
		   /////////////////////////DENNES PARE



   
				}
		
		
		}
}//fin if




echo "<style type=text/css>
<!--
.style1 {font-size: 24px}
-->
</style>
<div align=center>
  <p><a href=deces22t.php?region=$region&code=$code&cat=$cat&trans=$trans&partie=$partie><img src=icone/suivant.jpg width=162 height=157 border=0></a></p>
  <p class=style1><a href=deces22t.php?region=$region&code=$code&cat=$cat&trans=$trans&partie=$partie>تابع إضافة المعلومات</a></p>
</div>
 ";

}
}
}



?>
</div>
</body>
</html>



<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>
