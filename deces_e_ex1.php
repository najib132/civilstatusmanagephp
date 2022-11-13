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

include"conn/conversion.php";

$deces_naissance=0;
$sex=$_GET["sex"];


?>


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLiees.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>

<script type="text/javascript" src="js/listeLieesb.js"></script>

<?php 


$date_m=addslashes($_GET["date_m"]);
$date_mlf=	addslashes($_GET["date_mlf"]);
$date_mla=addslashes($_GET["date_mla"]);
$date_hlf=  addslashes($_GET["date_hlf"]);
$date_hla=  addslashes($_GET["date_hla"]);

$mention=addslashes($_GET["mention"]);
$mention_a=addslashes($_GET["mention_a"]);


$annee_declaration=addslashes($_GET["annee_declaration"]);
$code=addslashes($_GET["code"]);
$sex=addslashes($_GET["sex"]);
$cin=addslashes($_GET["cin"]);

$mois=date("m");

$date_m=convertDate($date_m);

/////////////////////////DENNES PARE

 /*
	$Requete3x = "select deces_naissance FROM naissance WHERE `code`='$code' and `annee_declaration`='$annee_declaration'   ";
	$result3x = @mysql_query($Requete3x,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3x = mysql_fetch_array($result3x);

$deces=$row3x[deces_naissance];

if($deces!=6)  {

  $Requete =  "UPDATE naissance SET    
								
									`date_n_d`='$date_m',
									`date_mlf_d`='$date_mlf',
									`date_mla_d`='$date_mla',
									`date_hlf_d`='$date_hlf',
									`date_hla_d`='$date_hla',
									`deces_naissance`=6,
									`mois`='$mois',
									`cin`='$cin'

									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

}


if($deces==6)  {

  $Requete =  "UPDATE naissance SET    
								
									`date_n_d`='$date_m',
									`date_mlf_d`='$date_mlf',
									`date_mla_d`='$date_mla',
									`date_hlf_d`='$date_hlf',
									`date_hla_d`='$date_hla',
									`mois`='$mois',
									`cin`='$cin'

									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

}

*/

  $Requete =  "UPDATE naissance SET    
								
									`date_n_d`='$date_m',
									`date_mlf_d`='$date_mlf',
									`date_mla_d`='$date_mla',
									`date_hlf_d`='$date_hlf',
									`date_hla_d`='$date_hla',
									`mort`=1,
									`cin`='$cin'

									  WHERE `code`='$code' and `annee_declaration`='$annee_declaration' ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


?>



<?php
$valider=$_POST["valider"];
if ($valider!="إضافة البيانات الهامشية") { ?>


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

var date_m = document.form1.date_m.value;

var long=form1.date_m.value.length;
var mois=date_m.substring(3,5);
var jour=date_m.substring(0,2);
var annee=date_m.substring(6,10);


if(region=="" || region=="----إختر البيان الهامشي----" || region==0) 
		{ 
        alert ('Vérifier le Champ année de déclaration'); 
        document.form1.region.focus(); 
        return false; 
    	} 



			
if(date_m == "" || long!=10 || date_m.substring(2,3)!="/" || date_m.substring(5,6)!="/" || mois>12 || jour>31 || isNaN(jour) || isNaN(mois) || isNaN(annee) ) 
		{ 
        alert ('Vérifier le Champ date'); 
		//alert(date_m.substring(5,7))
		//alert(date_m.substring(0,4))
        document.form1.date_m.focus(); 
        return false; 
    	} 
	
				
 }
		
		
///////////////////////////////////

    </script>


  <form action="" method="POST" name="form1" id="form1" onSubmit="return Validerfrm()">
  <div align="center">
    <p>
      <label></label></p>

		<fieldset style="width:75%">
          <legend class="style39" align="right">إضافة البيانات الهامشية</legend>
          <table width="75%">
            <tr>
              <td width="732" height="24" bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="region" id="region" onChange="getDpt()">
                  <option value="0">----إختر البيان الهامشي----</option>
                  <?php   
			   	$Requete3 = "select bayane1,id from mention where `id`=12  ";
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
              </strong></div>                <div align="center"></div></td>
            </tr>
        </table>
          <p align="center"><span class="style40">
            <?php
	echo "
		<div id=champsDpt>

		</div>";
		?>
          </span><span class="style39"><a href="modifier_bayane.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>"></a></span></p>
          <p align="center">
            <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
            <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
            <input name="valider" type="submit" id="valider" value="إضافة البيانات الهامشية"/>
            <br>
    </p>
    </fieldset>
    </div>
</form>
  <div align="center">
    <table width="75%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="116" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
        <td width="121" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
        <td width="215" bgcolor="#EFEFEF"><div align="center">نص البيان</div></td>
        <td width="274" bgcolor="#EFEFEF"><div align="center">نص البيان</div></td>
        <td width="74" bgcolor="#EFEFEF"><div align="center">نوع البيان</div></td>
        <td width="94" bgcolor="#EFEFEF"><div align="center">تاريخ البيان</div></td>
        <td width="29" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
        <td width="47" bgcolor="#EFEFEF"><div align="center">تعديل</div></td>
      </tr>
	<?php  
	
 $Requete = "select  date_n FROM naissance where `annee_declaration`='".$annee_declaration."' and `code`='".$code."'    ";
	$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row = mysql_fetch_array($result);
	$date_n=$row[date_n];
	
	
	
	  $now=date("Y-m-d");
	
		  
 $Requete3 = "select  * FROM mention_p where `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `date` between '".$date_n."' and '".$now."' and `deces_naissance`=0 order by date desc    ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

$Requete31 = "select bayane1 from mention where `id`='".$row3[jugement]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);
	
	
	
	$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$roxx = mysql_fetch_array($result);




	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$roxx[prenom]." ".$roxx[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[bayane]."</div></td>
		
		  <td><div align=\"center\" class=\"Style9\">".$row3[bayane1]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$rox[bayane1]."</div></td>

		  		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3['date'])."</div></td>
					  <td><div align=\"center\"><a href=\"supprimer.php?N=$row3[id]&table=mention_p\"><img src=\"icone/b_drop.PNG\" border=0></div></td>

					  <td><div align=\"center\"><a href=\"modifier_bayane.php?N=$row3[id]&annee_declaration=$row3[annee_declaration]&code=$row3[code]&deces_naissance=$deces_naissance&sex=$row3[sex]\"><img src=\"icone/b_edit.PNG\" border=0></div></td>
        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
?>
    </table>
  <?php }else
	
{

$bayane=addslashes($_POST["bayane"]);
$bayane1=addslashes($_POST["bayane1"]);
$region=addslashes($_POST["region"]);
$date_m=addslashes($_POST["date_m"]);

$bayane=trim($bayane);
$bayane1=trim($bayane1);


$date_m=convertDate($date_m);


$Req =  "SELECT jugement  FROM `mention_p` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `date`='".$date_m."' and `jugement`='".$region."'   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

$nn=mysql_num_rows($res);

if($nn!=0) 
{
include"aces2.php";
}
else {




$Requete =  "INSERT INTO `mention_p`(`annee_declaration`,
                                    `code`,
									`jugement`,
									`date`,
									`bayane`,
									`bayane1`,
									`deces_naissance`,
									`idf`,
									`sex`
									
									) 
 VALUES ('$annee_declaration','$code','$region','$date_m','$bayane','$bayane1','0','$idf_m','$sex');"; 
 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Problme d'execution de la requete <br>".mysql_error()); 
	


	
//echo $Requete;

include"aces1.php";
echo "
<div align=center>
  
      <p><a href=etat/afficher_naissance.php?annee_declaration=$annee_declaration&code=$code&deces_naissance=$deces_naissance&table=naissance&sex=$sex target=_blank>معاينة</a></p>
      <p><a href=index_civil.php>رجوع إلى القائمة</a></p>

</div>
<p>&nbsp;</p>";


}

}
?>
  </div>
  </div>
</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

