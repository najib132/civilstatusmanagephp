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

$type=$_GET["type"];

$valider=$_GET["valider"];
 $code = addslashes($_GET["code"]);
$f = addslashes($_GET["f"]);
 $annee_declaration = addslashes($_GET["annee_declaration"]);
$d = addslashes($_GET["d"]);

$table=$_GET["table"];


$affiche=$_GET["affiche"];
$certificat=$_GET["certificat"];


?>


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLiees.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>




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
#Layer3 {
	position:absolute;
	left:326px;
	top:93px;
	width:108px;
	height:136px;
	z-index:1;
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
<div id="Layer3">              		 <div id="background" class="background" style="display: none;"></div>
          <div id="clv_arb" class="clv_arb" style="display: none;"></div>
</div>
<p align="center">
  <label></label>
</p>

  <script type="text/javascript">

function Validerfrm()
{

var f = document.form1.f.value;
var d = document.form1.d.value;


	if(f=="" || d=="") 
		{ 
        alert ('Vérifier les données SVP'); 
        document.form1.d.focus(); 
        return false; 
    	} 



	
				
 }
		
		
///////////////////////////////////

    </script>



  <form action="" method="get" name="form1" id="form1" onSubmit="return Validerfrm()">


  <div align="center">
  <table width="200">
      <tr>
        <td><fieldset style="width:400px">
          <legend class="style39" align="right">معايير البحث          </legend>
          <table width="380" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <input name="d" type="text" id="d" size="13" maxlength="10" value="<?php echo date("01/m/Y"); ?>">
                <button id="trigger1"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
                <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "d",
		        button            : "trigger1",

		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
</div></td>
              <td class="style39"><div align="center">بداية الفترة</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <input name="f" type="text" id="f" size="13" maxlength="10" value="<?php echo date("d/m/Y"); ?>">
                <button id="trigger2"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
                <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "f",
		        button            : "trigger2",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
</div></td>
              <td class="style39"><div align="center">نهاية الفترة</div></td>
            </tr>
            <tr>
              <td width="220" bgcolor="#EFEFEF"><div align="center">
                <input name="nom_a" type="text" id="nom_a" size="25" maxlength="25" dir="rtl">

 <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" />
</div></td>
              <td width="154"><div align="center" class="style39">الإسم العائلي</div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="affiche" type="hidden" id="affiche" value="<?php echo $affiche; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
          </fieldset>
        </td>
      </tr>
    </table>
    </div>
</form>

  <div align="center">
    <p class="style39">
      <?php if($valider=="---بحث---") { ?>
      
<?php echo $affiche; 
 ?>
	  
    </p>
</div>
<table width="50%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="446" height="35" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="195" bgcolor="#EFEFEF"><div align="center">تاريخ الإعداد</div></td>
    <td width="81" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
    <td width="82" bgcolor="#EFEFEF"><div align="center">طباعة</div></td>
  </tr>
  <?php 	
		$page = isset($_GET['page']) ? $_GET['page'] : ''; 

include"conn/conversion.php";

 $d=convertDate($d);
 $f=convertDate($f);
 
 $nom_a=$_GET["nom_a"];
 $nom_a=trim($nom_a);



if($d!="" && $f!="" && $nom_a=="")  $mm=" `date` between '".$d."' and '".$f."' "; ////CAS2

if($d!="" && $f!="" && $nom_a!="")  $mm=" `date` between '".$d."' and '".$f."' and `nom_a`='$nom_a' "; ////CAS2




 $Requete3 = "select distinct(id_attestation) FROM tmp where `attestation`='1' and $mm ";
 	mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

	//echo $Requete3;

// Variable codebre d'enreg par page
$limit=30;
if($debut==""){$debut=0;}
$debut=$page*$limit;
// Compte le codebre de champ
$nb_total=mysql_num_rows($result3);
// Requete
$limite=mysql_query("$requete limit $debut,$limit");


// Affiche le page par page avec ses liens
if ($page>0) {
$precedent=$page-1;
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&code=$code&f=$f&d=$d&valider=$valider&annee_declaration=$annee_declaration&affiche=$affiche&type=$type&table=$table&certificat=$certificat&nom_a=$nom_a\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&code=$code&f=$f&d=$d&valider=$valider&annee_declaration=$annee_declaration&affiche=$affiche&type=$type&table=$table&certificat=$certificat&nom_a=$nom_a\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

 
 /**********Affichage*******/
 

 
	$Requete3 = "select  distinct(id_attestation) FROM tmp where `attestation`='1' and $mm order by date desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 


 $Requete31 = "select id,date,nom_a,code,annee_declaration from tmp where `attestation`='1' and `id_attestation`='$row3[id_attestation]' LIMIT 0,1 ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);



	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$rox[nom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($rox['date'])."</div></td>
		  

 <td><div align=\"center\"><a href=\"supprimer.php?partie=$row3[id_attestation]&table=tmp\"><img src=icone/b_drop.PNG ></div></td>
 
 <td><div align=\"center\"><a href=\"etat/avic.php?code=$rox[code]&annee_declaration=$rox[annee_declaration]&type=$type&table=externe&partie=$row3[id_attestation]&N=$rox[id]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=33 height=33></div></td>




        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php }  ?>
</div>
</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

