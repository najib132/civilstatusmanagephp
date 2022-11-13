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
if ($permission==securite3($tim3)) { include("div_root.php");  

$type=$_GET["type"];

$valider=$_GET["valider"];
 $code = addslashes($_GET["code"]);
$nom_a = addslashes($_GET["nom_a"]);
 $annee_declaration = addslashes($_GET["annee_declaration"]);
$date_m = addslashes($_GET["date_m"]);

$table=$_GET["table"];


$affiche=$_GET["affiche"];


$nom_a=trim($nom_a);

?>


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLiees.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>






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
<style type="text/css">
<!--
.style1 {font-size: 18px}
.style2 {font-size: 20px}
-->
</style>
</head>

<body> 
<div id="Layer3">

		 <div id="background" class="background" style="display: none;"></div>
          <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>
<p align="center">
  <label></label>
</p>

  <script type="text/javascript">

function Validerfrm()
{

var code = document.form1.code.value;
var nom_a = document.form1.nom_a.value;
var date_m = document.form1.date_m.value;
var annee_declaration = document.form1.annee_declaration.value;

if(isNaN(code)) 
		{ 
        alert ('Vérifier le Champ code'); 
        document.form1.code.focus(); 
        return false; 
    	} 

	
	
	if(code=="" && annee_declaration==0 && nom_a=="" && date_m=="") 
		{ 
        alert ('Vérifier les données SVP'); 
        document.form1.annee_declaration.focus(); 
        return false; 
    	} 


	if(code!="" && annee_declaration==0 && nom_a=="" && date_m=="") 
		{ 
        alert ('Vérifier les données SVP'); 
        document.form1.annee_declaration.focus(); 
        return false; 
    	} 


	if(code!="" && annee_declaration==0 && nom_a=="" && date_m!="") 
		{ 
        alert ('Vérifier les données SVP'); 
        document.form1.annee_declaration.focus(); 
        return false; 
    	} 

	
	
		if(code=="" && annee_declaration==0 && nom_a=="" && date_m!="") 
		{ 
        alert ('Vérifier les données SVP'); 
        document.form1.annee_declaration.focus(); 
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
          <legend align="right" class="style39 style2">معايير البحث          </legend>
          <table width="380" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="197" bgcolor="#EFEFEF"><div align="center"><strong>
                  <select name="annee_declaration" id="annee_declaration" onChange="getDpt()">
                    <option value="0">-------إختر السنة-------</option>
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
              <td width="177"><div align="center" class="style39 style1">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>

            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="code" type="text" id="code" maxlength="20">
                </label>
              </div></td>
              <td bgcolor="#FFFFFF"><div align="center" class="style1"><span class="style39">&#1585;&#1602;&#1605;</span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <input name="nom_a" type="text" id="nom_a" maxlength="25" dir="rtl">
				

 <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" />

				
				
              </div></td>
              <td bgcolor="#FFFFFF"><div align="center" class="style39 style1">الإسم العائلي</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                  <input name="date_m" type="text" id="date_m" size="13" maxlength="10">
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
              <td bgcolor="#FFFFFF"><div align="center" class="style39 style1"><?php 
			  
			  
			  if($type==9) echo "تاريخ الوفاة";
			  
if($type==8)	echo "تاريخ الإزدياد";		  
			  
			  ?></div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="affiche" type="hidden" id="affiche" value="<?php echo $affiche; ?>">
                <input name="table" type="hidden" id="table" value="<?php echo $table; ?>">
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
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




 
      <?php if($type==8 && $valider=="---بحث---") {   ?>
	  
<?php echo $affiche; 
 ?>

</div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="68" height="35" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="65" rowspan="2" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="186" rowspan="2" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="87" rowspan="2" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
    <td width="106" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="80" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="87" rowspan="2" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
    <td colspan="2" bgcolor="#EFEFEF"><div align="center">نسخة كاملة </div>
        <div align="center"></div>
      <div align="center"></div></td>
    <td colspan="3" bgcolor="#EFEFEF"><div align="center">نسخة موجزة</div></td>
    <td width="42" rowspan="2" bgcolor="#EFEFEF"><div align="center">الرسم الأصلي </div>
  <td width="9" rowspan="2" bgcolor="#EFEFEF"><div align="center"></div>  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="30" bgcolor="#EFEFEF"><div align="center">F</div></td>
    <td width="55" bgcolor="#EFEFEF"><div align="center">A</div></td>
    <td width="45" bgcolor="#EFEFEF"><div align="center">A/F</div></td>
    <td width="43" bgcolor="#EFEFEF"><div align="center">F</div></td>
    <td width="42" bgcolor="#EFEFEF"><div align="center">A</div></td>
  </tr>
  <?php 	
		$page = isset($_GET['page']) ? $_GET['page'] : ''; 

include"conn/conversion.php";

 $date_m=convertDate($date_m);

if($annee_declaration!=0 && $code!="")  $mm=" `annee_declaration`='".$annee_declaration."' and `code`='".$code."' "; ////CAS1

if($annee_declaration!=0 && $nom_a!="" && $code=="" && $date_m=="")  $mm=" `annee_declaration`='".$annee_declaration."' and `nom_a`='".$nom_a."' "; ////CAS2

if($date_m!="" && $nom_a!="" && $annee_declaration==0 && $code=="")  $mm=" `date_n`='".$date_m."' and `nom_a`='".$nom_a."' "; ////CAS2


if($nom_a!=0 && $code!="" && $annee_declaration==0 && $date_m=="")  $mm=" `nom_a`='".$nom_a."' and `code`='".$code."' "; ////CAS1


if($annee_declaration!=0 && $date_m!="" && $code=="" && $nom_a=="")  $mm=" `annee_declaration`='".$annee_declaration."' and `date_n`='".$date_m."' "; ////CAS2

if($annee_declaration!=0 && $code=="" && $date_m=="" && $nom_a=="")  $mm=" `annee_declaration`='".$annee_declaration."' "; ////CAS1


if($annee_declaration!=0 && $date_m!="" && $code=="" && $nom_a!="")  $mm=" `annee_declaration`='".$annee_declaration."' and `date_n`='".$date_m."' and `nom_a`='".$nom_a."' "; ////CAS2

if($annee_declaration==0 && $date_m=="" && $code=="" && $nom_a!="")  $mm=" `nom_a`='".$nom_a."' "; ////CAS2


 $Requete3 = "select annee_declaration FROM $table where $mm ";
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
echo"العدد الإجمالي"; echo" : $nb_total";;
// Requete
$limite=mysql_query("$requete limit $debut,$limit");


 $date_m=convertDate_f($date_m);


// Affiche le page par page avec ses liens
if ($page>0) {
$precedent=$page-1;
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&code=$code&nom_a=$nom_a&date_m=$date_m&valider=$valider&annee_declaration=$annee_declaration&affiche=$affiche&type=$type&table=$table\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&code=$code&nom_a=$nom_a&date_m=$date_m&valider=$valider&annee_declaration=$annee_declaration&affiche=$affiche&type=$type&table=$table\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

 
 /**********Affichage*******/
 

 
$Requete3 = "select  confirmer,partie,mort,deces_naissance,idf,idf_m,pj,annee_declaration,code,nom_a,prenom_a,date_n,lieu1 FROM $table where $mm order by annee_declaration,code desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

$table="naissance";
$lien="doc_$table/$row3[annee_declaration]/$row3[partie]/$row3[pj].jpg";


if($row3[confirmer]=="1") $confirmer=" <td><div align=\"center\"><img src=\"icone/ok.JPG\" border=0 width=20 height=20></div></td>"; 
else $confirmer=" <td><div align=\"center\"><img src=\"icone/AT.JPG\" border=0 width=20 height=20></div></td>";


 
 if($row3[mort]==1) $color="#FFFFCE"; else $color="#FFFFFF";
 
  if($row3[deces_naissance]==2 || $row3[deces_naissance]==3) $trans=1; else $trans="";


$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);

	echo"
        <tr bgcolor=$color>
		
		
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>
			  
<td><div align=\"center\"><a href=\"etat/integrale1_naissance.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>

<td><div align=\"center\"><a href=\"etat/integrale_naissance-a1.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
 
 <td><div align=\"center\"><a href=\"etat/extrait_naissance1.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
 
 <td><div align=\"center\"><a href=\"etat/extrait_$table-f1.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
 
 <td><div align=\"center\"><a href=\"etat/extrait_$table-a1.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
 			  
			  

<td><div align=\"center\"><a href=\"$lien\" target=_blank><img src=\"icone/a.PNG\" border=0 width=20 height=20></div></td>

$confirmer

        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php }  ?>
 
  









      <?php if($type==9 && $valider=="---بحث---") { 
	  
	 echo $affiche; 
	  ?>
      
    </p>
</div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="59" height="35" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="79" rowspan="2" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="175" rowspan="2" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="105" rowspan="2" bgcolor="#EFEFEF"><div align="center">
      <p>تاريخ الوفاة</p>
    </div></td>
    <td width="79" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="116" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="83" rowspan="2" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
    <td colspan="2" bgcolor="#EFEFEF"><div align="center">نسخة كاملة </div>
        <div align="center"></div>
      <div align="center"></div></td>
    <td colspan="3" bgcolor="#EFEFEF"><div align="center">نسخة موجزة</div></td>
    <td width="63" rowspan="2" bgcolor="#EFEFEF"><div align="center">معاينة الرسم الأصلي</div></td>
    <td width="17" rowspan="2" bgcolor="#EFEFEF">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="40" bgcolor="#EFEFEF"><div align="center">F</div></td>
    <td width="35" bgcolor="#EFEFEF"><div align="center">A</div></td>
    <td width="42" bgcolor="#EFEFEF"><div align="center">A/F</div></td>
    <td width="28" bgcolor="#EFEFEF"><div align="center">F</div></td>
    <td width="24" bgcolor="#EFEFEF"><div align="center">A</div></td>
  </tr>
  
  <?php 	
		$page = isset($_GET['page']) ? $_GET['page'] : ''; 

include"conn/conversion.php";

 $date_m=convertDate($date_m);

if($annee_declaration!=0 && $code!="")  $mm=" `annee_declaration`='".$annee_declaration."' and `code`='".$code."' "; ////CAS1

if($annee_declaration!=0 && $nom_a!="" && $code=="" && $date_m=="")  $mm=" `annee_declaration`='".$annee_declaration."' and `nom_a`='".$nom_a."' "; ////CAS2

if($date_m!="" && $nom_a!="" && $annee_declaration==0 && $code=="")  $mm=" `date_n_d`='".$date_m."' and `nom_a`='".$nom_a."' "; ////CAS2


if($nom_a!=0 && $code!="" && $annee_declaration==0 && $date_m=="")  $mm=" `nom_a`='".$nom_a."' and `code`='".$code."' "; ////CAS1


if($annee_declaration!=0 && $date_m!="" && $code=="" && $nom_a=="")  $mm=" `annee_declaration`='".$annee_declaration."' and `date_n_d`='".$date_m."' "; ////CAS2

if($annee_declaration!=0 && $code=="" && $date_m=="" && $nom_a=="")  $mm=" `annee_declaration`='".$annee_declaration."' "; ////CAS1

if($annee_declaration!=0 && $date_m!="" && $code=="" && $nom_a!="")  $mm=" `annee_declaration`='".$annee_declaration."' and `date_n`='".$date_m."' and `nom_a`='".$nom_a."' "; ////CAS2                if($annee_declaration==0 && $date_m=="" && $code=="" && $nom_a!="")  $mm=" `nom_a`='".$nom_a."' "; ////CAS2


 $Requete3 = "select annee_declaration FROM deces where $mm  ";
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
echo"العدد الإجمالي"; echo" : $nb_total";;
// Requete
$limite=mysql_query("$requete limit $debut,$limit");

 $date_m=convertDate_f($date_m);


// Affiche le page par page avec ses liens
if ($page>0) {
$precedent=$page-1;
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&code=$code&nom_a=$nom_a&date_m=$date_m&valider=$valider&annee_declaration=$annee_declaration&affiche=$affiche&type=$type&table=$table\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&code=$code&nom_a=$nom_a&date_m=$date_m&valider=$valider&annee_declaration=$annee_declaration&affiche=$affiche&type=$type&table=$table\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

 
 /**********Affichage*******/
 

 $Requete3 = "select  confirmer,partie,idf,idf_m,pj,annee_declaration,code,nom_a,prenom_a,date_n_d,lieu1 FROM deces where $mm order by annee_declaration,code desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

if($row3[confirmer]=="1") $confirmer=" <td><div align=\"center\"><img src=\"icone/ok.JPG\" border=0 width=20 height=20></div></td>"; 
else $confirmer=" <td><div align=\"center\"><img src=\"icone/AT.JPG\" border=0 width=20 height=20></div></td>";


$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);



$lien="doc_deces/$row3[annee_declaration]/$row3[partie]/$row3[pj].jpg";

if($row3[pj]!="") $image="<td><div align=\"center\"><a href=\"$lien\" target=_blank><img src=\"icone/a.PNG\" border=0 width=20 height=20></div></td>";

 else
 $image="<td><div align=\"center\"><img src=\"icone/blue-exclamation.PNG\" border=0 width=20 height=20></div></td>";

	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n_d])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>


<td><div align=\"center\"><a href=\"etat/integrale1_$table.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>

<td><div align=\"center\"><a href=\"etat/integrale_$table-a1.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>

<td><div align=\"center\"><a href=\"etat/extrait_deces1.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>


 <td><div align=\"center\"><a href=\"etat/extrait_$table-f1.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
 
 <td><div align=\"center\"><a href=\"etat/extrait_$table-a1.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
  				  
$image
$confirmer

        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php }  ?>
  



</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

