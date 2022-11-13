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
$nom_a = addslashes($_GET["nom_a"]);
 $annee_declaration = addslashes($_GET["annee_declaration"]);
$date_m = addslashes($_GET["date_m"]);

$table=$_GET["table"];


$affiche=$_GET["affiche"];


$nom_a=trim($nom_a);


	$Requete3 = "select supprimer from utilisateurs where `id`='".$idf_m."'   ";
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rowv = mysql_fetch_array($result3);

$droit=$rowv[supprimer];

if($droit==0) $supprimer="supprimer.php"; else $supprimer="#";
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
			  
			  
			  if($type==9 || $type==11 || $type==12) echo "تاريخ الوفاة";

			  
if($type==2 || $type==8 || $type==1 || $type==3 || $type==4 || $type==6 || $type==7 || $type==5 || $type==10 || $type==13)	echo "تاريخ الإزدياد";		  
			  
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

  <div align="center">
    <p class="style39">
      <?php if($type==1 && $valider=="---بحث---") { ?>
      
<?php echo $affiche; 
 ?>
	  
    </p>
</div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="100" height="35" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="72" rowspan="2" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="184" rowspan="2" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="103" rowspan="2" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
    <td width="104" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="111" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="78" rowspan="2" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
    <td width="52" rowspan="2" bgcolor="#EFEFEF"><div align="center">المسودة</div></td>
    <td width="45" rowspan="2" bgcolor="#EFEFEF"><div align="center">وثائق مرافقة</div></td>
    <td colspan="2" bgcolor="#EFEFEF"><div align="center">الرسم الأصلي</div>      
    <div align="center"></div></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="32" bgcolor="#EFEFEF"><div align="center">معاينة</div></td>
    <td width="70" bgcolor="#EFEFEF"><div align="center">تحميل رسم
        <?php if($table=="naissance") echo"الولادة"; else echo"الوفاة"; ?>
الأصلي</div></td>
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

if($annee_declaration!=0 && $date_m!="" && $code=="" && $nom_a!="")  $mm=" `annee_declaration`='".$annee_declaration."' and `date_n`='".$date_m."' and `nom_a`='".$nom_a."' "; 


if($annee_declaration==0 && $date_m=="" && $code=="" && $nom_a!="")  $mm=" `nom_a`='".$nom_a."' "; ////CAS2

////CAS2


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
echo"العدد الإجمالي"; echo" : $nb_total";

// Requete
$limite=mysql_query("$requete limit $debut,$limit");


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
 

 
	$Requete3 = "select partie, idf,idf_m,pj,annee_declaration,code,nom_a,prenom_a,date_n,lieu1 FROM $table where $mm order by annee_declaration,code desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);



$lien="doc_$table/$row3[annee_declaration]/$row3[partie]/$row3[pj].jpg";

if($row3[pj]!="") $image="<td><div align=\"center\"><a href=\"$lien\" target=_blank><img src=\"icone/a.PNG\" border=0 width=33 height=33></div></td>";

 else
 $image="<td><div align=\"center\"><img src=\"icone/blue-exclamation.PNG\" border=0 width=33 height=33></div></td>";

	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>
			  
			  			  <td><div align=\"center\"><a href=\"etat/fiche_declaration_$table.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/info.PNG\" border=0 width=33 height=33></div></td>


			  <td><div align=\"center\"><a href=\"telecharger_mention.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\"><img src=\"icone/index.JPG\" border=0 width=33 height=33></div></td>

						  

$image

			  <td><div align=\"center\"><a href=\"telecharger.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\"><img src=\"icone/k.PNG\" border=0 width=33 height=33></div></td>




        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php }  ?>
  
      <?php if($type==2 && $valider=="---بحث---") { ?>
      
      
<?php echo $affiche; ?></div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="58" height="35" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="55" rowspan="2" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="164" rowspan="2" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="75" rowspan="2" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
    <td width="92" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="87" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="80" rowspan="2" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>    
    <td width="32" rowspan="2" bgcolor="#EFEFEF"><div align="center">وثائق اخرى</div>
        <div align="center"></div>
    <div align="center"></div>
    <div align="center"></div>    <div align="center"></div></td>
    <td colspan="3" bgcolor="#EFEFEF"><div align="center">نسخة موجزة</div></td>
    <td width="34" rowspan="2" bgcolor="#EFEFEF"><div align="center">تحميل الرسم </div></td>
    <td width="26" rowspan="2" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
    <td width="27" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل</div></td>
    <td width="47" rowspan="2" bgcolor="#EFEFEF"><div align="center">معلومات عامة</div></td>
	
    <td width="42" rowspan="2" bgcolor="#EFEFEF"><div align="center">الرسم الأصلي    </div>
  <td width="15" rowspan="2" bgcolor="#EFEFEF"><div align="center"></div>  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="40" bgcolor="#EFEFEF"><div align="center">A/F</div></td>
    <td width="31" bgcolor="#EFEFEF"><div align="center">F</div></td>
    <td width="34" bgcolor="#EFEFEF"><div align="center">A</div></td>
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

if($row3[confirmer]=="1") $confirmer=" <td><div align=\"center\"><a href=\"confirmer.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&partie=$row3[partie]\" target=_blank><img src=\"icone/ok.JPG\" border=0 width=20 height=20></div></td>"; 
else $confirmer=" <td><div align=\"center\"><a href=\"confirmer.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&partie=$row3[partie]\" target=_blank><img src=\"icone/AT.JPG\" border=0 width=20 height=20></div></td>";

$lien="doc_$table/$row3[annee_declaration]/$row3[partie]/$row3[pj].jpg";

 
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
			  
			  <td><div align=\"center\"><a href=\"certificat.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&table=$table&partie=$row3[partie]\"><img src=\"icone/info.PNG\" border=0 width=25 height=25></div></td>
 
 
 <td><div align=\"center\"><a href=\"etat/extrait_$table.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
 
 <td><div align=\"center\"><a href=\"etat/extrait_$table-f.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
 
 <td><div align=\"center\"><a href=\"etat/extrait_$table-a.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
 
 
			  
			  
<td><div align=\"center\"><a href=\"telecharger.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\"><img src=\"icone/k.PNG\" border=0 width=25 height=25></div></td>
			  
 <td><div align=\"center\"><a href=\"$supprimer?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&partie=$row3[partie]\"><img src=\"icone/b_drop.PNG\" border=0></div></td>
 <td><div align=\"center\"><a href=\"modifier_naissance.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&cat=المولود&trans=$trans&partie=$row3[partie]\"><img src=\"icone/b_edit.PNG\" border=0></div></td>
 
 <td><div align=\"center\"><a href=\"etat/afficher_naissance.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&partie=$row3[partie]\" target=_blank><img src=\"icone/search.PNG\" border=0 width=20 height=20></div></td>

<td><div align=\"center\"><a href=\"$lien\" target=_blank><img src=\"icone/a.PNG\" border=0 width=20 height=20></div></td>

$confirmer
        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php } ?>
  
  
  
  
  
  
 
       <?php if($type==3 && $valider=="---بحث---") { ?>
      
      
<?php echo $affiche; 
 ?>


</div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="58" height="35" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="55" rowspan="2" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="164" rowspan="2" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="75" rowspan="2" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
    <td width="92" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="87" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="80" rowspan="2" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
    <td width="32" rowspan="2" bgcolor="#EFEFEF"><div align="center">وثائق اخرى</div>
        <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div>
      <div align="center"></div></td>
    <td colspan="2" bgcolor="#EFEFEF"><div align="center">نسخة كاملة</div></td>
    <td width="34" rowspan="2" bgcolor="#EFEFEF"><div align="center">تحميل الرسم </div></td>
    <td width="26" rowspan="2" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
    <td width="27" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل</div></td>
    <td width="47" rowspan="2" bgcolor="#EFEFEF"><div align="center">معلومات عامة</div></td>
    <td width="42" rowspan="2" bgcolor="#EFEFEF"><div align="center">الرسم الأصلي </div>
  <td width="15" rowspan="2" bgcolor="#EFEFEF"><div align="center"></div>  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="52" bgcolor="#EFEFEF"><div align="center">F</div></td>
    <td width="55" bgcolor="#EFEFEF"><div align="center">A</div></td>
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

if($row3[confirmer]=="1") $confirmer=" <td><div align=\"center\"><a href=\"confirmer.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&partie=$row3[partie]\" target=_blank><img src=\"icone/ok.JPG\" border=0 width=20 height=20></div></td>"; 
else $confirmer=" <td><div align=\"center\"><a href=\"confirmer.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&partie=$row3[partie]\" target=_blank><img src=\"icone/AT.JPG\" border=0 width=20 height=20></div></td>";

$lien="doc_$table/$row3[annee_declaration]/$row3[partie]/$row3[pj].jpg";

 
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
			  
			  <td><div align=\"center\"><a href=\"certificat.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&table=$table&partie=$row3[partie]\"><img src=\"icone/info.PNG\" border=0 width=25 height=25></div></td>
 
 

 <td><div align=\"center\"><a href=\"etat/integrale_naissance.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
 
 <td><div align=\"center\"><a href=\"etat/integrale_naissance-a.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
 
			  
			  
<td><div align=\"center\"><a href=\"telecharger.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\"><img src=\"icone/k.PNG\" border=0 width=25 height=25></div></td>
			  
 <td><div align=\"center\"><a href=\"$supprimer?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&partie=$row3[partie]\"><img src=\"icone/b_drop.PNG\" border=0></div></td>
 <td><div align=\"center\"><a href=\"modifier_naissance.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&cat=المولود&trans=$trans&partie=$row3[partie]\"><img src=\"icone/b_edit.PNG\" border=0></div></td>
 
 <td><div align=\"center\"><a href=\"etat/afficher_naissance.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&partie=$row3[partie]\" target=_blank><img src=\"icone/search.PNG\" border=0 width=20 height=20></div></td>

<td><div align=\"center\"><a href=\"$lien\" target=_blank><img src=\"icone/a.PNG\" border=0 width=20 height=20></div></td>

$confirmer
        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php } ?>
 
  
  





  
 
       <?php if($type==4 && $valider=="---بحث---") { ?>
      
      
<?php echo $affiche; 
 ?>


</div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="49" height="35" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="66" rowspan="2" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="169" rowspan="2" bgcolor="#EFEFEF"><div align="center">مكان الوفاة</div></td>
    <td width="80" rowspan="2" bgcolor="#EFEFEF"><div align="center">
      <p>تاريخ الوفاة</p>
    </div></td>
    <td width="88" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="76" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="87" rowspan="2" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
    <td width="40" rowspan="2" bgcolor="#EFEFEF"><div align="center">وثائق اخرى</div></td>
    <td colspan="2" bgcolor="#EFEFEF"><div align="center">نسخة كاملة</div></td>
    <td width="34" rowspan="2" bgcolor="#EFEFEF"><div align="center">تحميل الرسم </div></td>
    <td width="26" rowspan="2" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
    <td width="47" rowspan="2" bgcolor="#EFEFEF"><div align="center">معلومات عامة</div></td>
    <td width="27" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل</div></td>
    <td width="57" rowspan="2" bgcolor="#EFEFEF"><div align="center">معاينة الرسم الأصلي</div></td>
    <td width="14" rowspan="2" bgcolor="#EFEFEF">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="44" bgcolor="#EFEFEF"><div align="center">F</div></td>
    <td width="37" bgcolor="#EFEFEF"><div align="center">A</div></td>
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

if($annee_declaration!=0 && $date_m!="" && $code=="" && $nom_a!="")  $mm=" `annee_declaration`='".$annee_declaration."' and `date_n`='".$date_m."' and `nom_a`='".$nom_a."' "; ////CAS2
if($annee_declaration==0 && $date_m=="" && $code=="" && $nom_a!="")  $mm=" `nom_a`='".$nom_a."' "; ////CAS2


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
 

 $Requete3 = "select  confirmer,partie,idf,idf_m,pj,annee_declaration,code,nom_a,prenom_a,date_n_d,ville_deces_a FROM deces where $mm order by annee_declaration,code desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 


if($row3[confirmer]=="1") $confirmer=" <td><div align=\"center\"><a href=\"confirmer.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=deces&partie=$row3[partie]\" target=_blank><img src=\"icone/ok.JPG\" border=0 width=20 height=20></div></td>"; 
else $confirmer=" <td><div align=\"center\"><a href=\"confirmer.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=deces&partie=$row3[partie]\" target=_blank><img src=\"icone/AT.JPG\" border=0 width=20 height=20></div></td>";


$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);



$lien="doc_deces/$row3[annee_declaration]/$row3[partie]/$row3[pj].jpg";



	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[ville_deces_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n_d])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>


<td><div align=\"center\"><a href=\"certificat.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/info.PNG\" border=0 width=20 height=20></div></td>



 <td><div align=\"center\"><a href=\"etat/integrale_deces.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
 
 <td><div align=\"center\"><a href=\"etat/integrale_deces-a.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>



			  <td><div align=\"center\"><a href=\"telecharger.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=deces&partie=$row3[partie]\" target=_blank><img src=\"icone/k.PNG\" border=0 width=20 height=20></div></td>
			  
 <td><div align=\"center\"><a href=\"$supprimer?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=deces&partie=$row3[partie]\"><img src=\"icone/b_drop.PNG\" border=0></div></td>
	
	
 <td><div align=\"center\"><a href=\"etat/afficher_deces.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=deces&partie=$row3[partie]\" target=_blank><img src=\"icone/search.PNG\" border=0 width=20 height=20 ></div></td>
	
			  
 <td><div align=\"center\"><a href=\"modifier_deces.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=deces&cat=المتوفى&trans=&partie=$row3[partie]\"><img src=\"icone/b_edit.PNG\" border=0></div></td>

<td><div align=\"center\"><a href=\"$lien\" target=_blank><img src=\"icone/a.PNG\" border=0 width=20 height=20></div></td>

$confirmer

        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php } ?>
 
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
   
       <?php if($type==5 && $valider=="---بحث---") { ?>
      
      
<?php echo $affiche; 
 ?>


</div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">

    <td width="102" height="35" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="102" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="145" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="117" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
    <td width="139" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="119" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="72" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
	    <td width="46" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
	    <td width="48" bgcolor="#EFEFEF"><div align="center">تعديل</div></td>
	    <td width="63" bgcolor="#EFEFEF"><div align="center">معاينة</div></td>
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


 $Requete3 = "select annee_declaration FROM naissance where $mm and `deces_naissance` IN(2,3)";
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
 

 
	$Requete3 = "select partie,  idf,idf_m,pj,annee_declaration,code,nom_a,prenom_a,date_n,lieu1 FROM  naissance where $mm and `deces_naissance` IN(2,3) order by annee_declaration,code desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 


$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);

	echo"
        <tr>
		

		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>
 <td><div align=\"center\"><a href=\"$supprimer?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance\"><img src=\"icone/b_drop.PNG\" border=0></div></td>
 <td><div align=\"center\"><a href=\"modifier_naissance.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&trans=1&cat=المولود\"><img src=\"icone/b_edit.PNG\" border=0></div></td>
 <td><div align=\"center\"><a href=\"etat/afficher_naissance.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]\" target=_blank><img src=\"icone/a.PNG\" border=0></div></td>



        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php } ?>
 

  
  
  
  
  
  
     
       <?php if($type==6 && $valider=="---بحث---") { ?>
	   
<?php echo $affiche; 
 ?>
	   
	   
</div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">

    <td width="94" height="35" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="95" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="134" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="109" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
    <td width="129" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="151" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="77" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
    <td width="31" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
    <td width="37" bgcolor="#EFEFEF"><div align="center">تعديل</div></td>
    <td width="49" bgcolor="#EFEFEF"><div align="center">طباعة</div></td>
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


 $Requete3 = "select id FROM carnet where $mm ";
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
 

 
	$Requete3 = "select  id,idf,idf_m,annee_declaration,code,nom_a,prenom_a,date_n,lieu1 FROM carnet where $mm order by annee_declaration,code desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 


$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);

	echo"
        <tr>
		

		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>
 <td><div align=\"center\"><a href=\"$supprimer?N=$row3[id]&table=carnet\"><img src=\"icone/b_drop.PNG\" border=0></div></td>
 <td><div align=\"center\"><a href=\"modifier_carnet.php?partie=$row3[id]\"><img src=\"icone/b_edit.PNG\" border=0></div></td>
 <td><div align=\"center\"><a href=\"etat/extrait_carnet.php?partie=$row3[id]\" target=_blank><img src=\"icone/print.GIF\" border=0 height=30 width=30></div></td>



        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php } ?>

  
  


      <?php if($type==7 && $valider=="---بحث---") { 
	  
	  echo $affiche;
	  ?>
      

</div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="95" height="35" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="96" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="134" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="110" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
    <td width="131" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="111" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="85" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
    <td width="44" bgcolor="#EFEFEF"><div align="center">حذف النسخة</div></td>
    <td width="66" bgcolor="#EFEFEF"><div align="center">تحميل النسخة الأصلية</div></td>
    <td width="81" bgcolor="#EFEFEF"><div align="center">إضافة البيانات الهامشية</div></td>
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

 $Requete3 = "select annee_declaration FROM naissance where $mm  ";
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
 

 
	$Requete3 = "select  partie,sex,date_n,idf,idf_m,annee_declaration,code,nom_a,prenom_a,date_n,lieu1 FROM naissance where $mm  order by annee_declaration,code desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);






	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>
			  

			  <td><div align=\"center\"><a href=\"supp_bayane.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&table=naissance&partie=$row3[partie]\"><img src=\"icone/b_drop.PNG\" border=0 target=_blank></div></td>


			  <td><div align=\"center\"><a href=\"telecharger_bayane.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&table=naissance&partie=$row3[partie]\"><img src=\"icone/pj.PNG\" border=0 width=23 height=23></div></td>


			  <td><div align=\"center\"><a href=\"bayane.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=naissance&date_n=$row3[date_n]&deces_naissance=0&sex=$row3[sex]&partie=$row3[partie]\"><img src=\"icone/info.PNG\" border=0 width=30 height=30></div></td>



        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php }  ?>
 
 
 
 
      <?php if($type==8 && $valider=="---بحث---") {   ?>
	  
<?php echo $affiche; 
 ?>

</div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="101" height="35" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="101" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="193" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="106" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
    <td width="100" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="140" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="80" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
    <td width="38" bgcolor="#EFEFEF"><div align="center">الرسم الأصلي</div>
    <div align="center"></div>
    <div align="center"></div>    <div align="center"></div></td>
    <td width="45" bgcolor="#EFEFEF"><div align="center">نسخة كاملة  </div>
    <div align="center"></div>      <div align="center"></div></td>
    <td width="49" bgcolor="#EFEFEF"><div align="center">نسخة موجزة </div></td>
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
 

 
$Requete3 = "select  mort,deces_naissance,idf,idf_m,pj,annee_declaration,code,nom_a,prenom_a,date_n,lieu1 FROM $table where $mm order by annee_declaration,code desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

$lien="doc_$table/$row3[annee_declaration]/$row3[partie]/$row3[pj].jpg";

if($row3[pj]!="") $image="<td><div align=\"center\"><a href=\"$lien\" target=_blank><img src=\"icone/a.PNG\" border=0 width=25 height=25></div></td>";

 else
 $image="<td><div align=\"center\"><img src=\"icone/blue-exclamation.PNG\" border=0 width=25 height=25></div></td>";


 if($row3[mort]==1) $color="#FFFFCE"; else $color="#FFFFFF";


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
$image

<td><div align=\"center\"><a href=\"test1.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=$table\" target=_blank><img src=\"icone/print.GIF\" border=0 width=25 height=25></div></td>
 
 
 <td><div align=\"center\"><a href=\"etat/extrait_$table.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=25 height=25></div></td>



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
    <td width="49" height="35" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="66" rowspan="2" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="169" rowspan="2" bgcolor="#EFEFEF"><div align="center">مكان الوفاة</div></td>
    <td width="80" rowspan="2" bgcolor="#EFEFEF"><div align="center">
      <p>تاريخ الوفاة</p>
    </div></td>
    <td width="88" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="76" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="87" rowspan="2" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
    <td width="40" rowspan="2" bgcolor="#EFEFEF"><div align="center">وثائق اخرى</div></td>
    <td colspan="3" bgcolor="#EFEFEF"><div align="center">نسخة موجزة</div></td>
    <td width="34" rowspan="2" bgcolor="#EFEFEF"><div align="center">تحميل الرسم </div></td>
    <td width="26" rowspan="2" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
    <td width="47" rowspan="2" bgcolor="#EFEFEF"><div align="center">معلومات عامة</div></td>
    <td width="27" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل</div></td>
    <td width="57" rowspan="2" bgcolor="#EFEFEF"><div align="center">معاينة الرسم الأصلي</div></td>
    <td width="14" rowspan="2" bgcolor="#EFEFEF">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="29" bgcolor="#EFEFEF"><div align="center">A/F</div></td>
    <td width="27" bgcolor="#EFEFEF"><div align="center">F</div></td>
    <td width="23" bgcolor="#EFEFEF"><div align="center">A</div></td>
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

if($annee_declaration!=0 && $date_m!="" && $code=="" && $nom_a!="")  $mm=" `annee_declaration`='".$annee_declaration."' and `date_n`='".$date_m."' and `nom_a`='".$nom_a."' "; ////CAS2
if($annee_declaration==0 && $date_m=="" && $code=="" && $nom_a!="")  $mm=" `nom_a`='".$nom_a."' "; ////CAS2


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
 

 $Requete3 = "select  confirmer,partie,idf,idf_m,pj,annee_declaration,code,nom_a,prenom_a,date_n_d,ville_deces_a FROM deces where $mm order by annee_declaration,code desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 


if($row3[confirmer]=="1") $confirmer=" <td><div align=\"center\"><a href=\"confirmer.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=deces&partie=$row3[partie]\" target=_blank><img src=\"icone/ok.JPG\" border=0 width=20 height=20></div></td>"; 
else $confirmer=" <td><div align=\"center\"><a href=\"confirmer.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=deces&partie=$row3[partie]\" target=_blank><img src=\"icone/AT.JPG\" border=0 width=20 height=20></div></td>";


$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);



$lien="doc_deces/$row3[annee_declaration]/$row3[pj].jpg";



	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[ville_deces_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n_d])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>


<td><div align=\"center\"><a href=\"certificat.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/info.PNG\" border=0 width=20 height=20></div></td>



<td><div align=\"center\"><a href=\"etat/extrait_deces.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>


 <td><div align=\"center\"><a href=\"etat/extrait_$table-f.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>
 
 <td><div align=\"center\"><a href=\"etat/extrait_$table-a.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=$table&partie=$row3[partie]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=20 height=20></div></td>



			  <td><div align=\"center\"><a href=\"telecharger.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=deces&partie=$row3[partie]\" target=_blank><img src=\"icone/k.PNG\" border=0 width=20 height=20></div></td>
			  
 <td><div align=\"center\"><a href=\"$supprimer?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=deces&partie=$row3[partie]\"><img src=\"icone/b_drop.PNG\" border=0></div></td>
	
	
 <td><div align=\"center\"><a href=\"etat/afficher_deces.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=deces&partie=$row3[partie]\" target=_blank><img src=\"icone/search.PNG\" border=0 width=20 height=20 ></div></td>
	
			  
 <td><div align=\"center\"><a href=\"modifier_deces.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=deces&cat=المتوفى&trans=&partie=$row3[partie]\"><img src=\"icone/b_edit.PNG\" border=0></div></td>

<td><div align=\"center\"><a href=\"$lien\" target=_blank><img src=\"icone/a.PNG\" border=0 width=20 height=20></div></td>

$confirmer

        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php }  ?>
  
 
 
 
 
 
 

      <?php if($type==10 && $valider=="---بحث---") { echo $affiche; ?>
      
    </p>
</div>

<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="114" height="35" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="114" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="162" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="125" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
    <td width="161" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="134" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="81" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
    <td width="66" bgcolor="#EFEFEF"><div align="center">دخول إلى الوثائق</div></td>
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
 

 
$Requete3 = "select  mort,deces_naissance,idf,idf_m,pj,annee_declaration,code,nom_a,prenom_a,date_n,lieu1,partie FROM $table where $mm order by annee_declaration,code desc $limit_str  ";
mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);


 if($row3[mort]==1) $color="#FFFFCE"; else $color="#FFFFFF";


	echo"
        <tr bgcolor=$color>
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>
			  <td><div align=\"center\"><a href=\"certificat.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&table=$table&partie=$row3[partie]\"><img src=\"icone/k.PNG\" border=0 width=33 height=33></div></td>



        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>

<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php }  ?>
  
  
 
  


      <?php if($type==11 && $valider=="---بحث---") {
	  echo $affiche;
	   ?>
      

</div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="96" height="35" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="97" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="136" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="109" bgcolor="#EFEFEF"><div align="center">تاريخ الوفاة</div></td>
    <td width="132" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="112" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="87" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
    <td width="44" bgcolor="#EFEFEF"><div align="center">حذف النسخة</div></td>
    <td width="65" bgcolor="#EFEFEF"><div align="center">تحميل النسخة الأصلية</div></td>
    <td width="75" bgcolor="#EFEFEF"><div align="center">إضافة البيانات الهامشية</div></td>
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

if($annee_declaration!=0 && $date_m!="" && $code=="" && $nom_a!="")  $mm=" `annee_declaration`='".$annee_declaration."' and `date_n`='".$date_m."' and `nom_a`='".$nom_a."' "; ////CAS2
if($annee_declaration==0 && $date_m=="" && $code=="" && $nom_a!="")  $mm=" `nom_a`='".$nom_a."' "; ////CAS2


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
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&code=$code&nom_a=$nom_a&date_m=$date_m&valider=$valider&annee_declaration=$annee_declaration&affiche=$affiche&type=$type&table=$table&deces_naissance=$deces_naissance\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&code=$code&nom_a=$nom_a&date_m=$date_m&valider=$valider&annee_declaration=$annee_declaration&affiche=$affiche&type=$type&table=$table&deces_naissance=$deces_naissance\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

 
 /**********Affichage*******/
 

 
	$Requete3 = "select partie,date_n,sex,idf,idf_m,annee_declaration,code,nom_a,prenom_a,date_n_d,lieu1 FROM deces where $mm  order by annee_declaration,code desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);






	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n_d])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>


			  <td><div align=\"center\"><a href=\"supp_bayane.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&table=deces&partie=$row3[partie]\"><img src=\"icone/b_drop.PNG\" border=0 target=_blank></div></td>


			  <td><div align=\"center\"><a href=\"telecharger_bayane.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&table=deces&partie=$row3[partie]\"><img src=\"icone/pj.PNG\" border=0 width=23 height=23></div></td>


			  <td><div align=\"center\"><a href=\"bayane.php?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=deces&date_n=$row3[date_n]&deces_naissance=1&sex=$row3[sex]&partie=$row3[partie]\"><img src=\"icone/info.PNG\" border=0 width=30 height=30></div></td>



        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php }  ?>
 







      <?php if($type==12 && $valider=="---بحث---") { ?>
      
      
<?php echo $affiche; ?></div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="114" height="35" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="115" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="184" bgcolor="#EFEFEF"><div align="center">مكان الوفاة</div></td>
    <td width="110" bgcolor="#EFEFEF"><div align="center">تاريخ الوفاة</div></td>
    <td width="165" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="127" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="79" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>    

    <td width="63" bgcolor="#EFEFEF"><div align="center">معلومات عامة</div></td>
    <td width="63" bgcolor="#EFEFEF"><div align="center">ترجمة تصريح</div></td>
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


if($annee_declaration!=0 && $date_m!="" && $code=="" && $nom_a!="")  $mm=" `annee_declaration`='".$annee_declaration."' and `date_n_d`='".$date_m."' and `nom_a`='".$nom_a."' "; ////CAS2

if($annee_declaration==0 && $date_m=="" && $code=="" && $nom_a!="")  $mm=" `nom_a`='".$nom_a."' "; ////CAS2


 $Requete3 = "select annee_declaration FROM deces where $mm ";
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
 

 
$Requete3 = "select  partie,idf,idf_m,pj,annee_declaration,code,nom_a,prenom_a,date_n_d,ville_deces_a FROM deces where $mm order by annee_declaration,code desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

 

$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);

	echo"
        <tr>
		
		
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[ville_deces_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n_d])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>
			  			  

 <td><div align=\"center\"><a href=\"etat/afficher_deces.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&partie=$row3[partie]\" target=_blank><img src=\"icone/search.PNG\" border=0 width=20 height=20></div></td>

			  			  
 <td><div align=\"center\"><a href=\"dec1.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&partie=$row3[partie]&cat=المتوفى\"><img src=\"icone/convertisseur.PNG\" border=0></div></td>


        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php } ?>
  
  









      <?php if($type==13 && $valider=="---بحث---") { ?>
      
      
<?php echo $affiche; ?></div>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="114" height="35" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="115" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="184" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="110" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
    <td width="165" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="127" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="79" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>    

    <td width="63" bgcolor="#EFEFEF"><div align="center">معلومات عامة</div></td>
    <td width="63" bgcolor="#EFEFEF"><div align="center">ترجمة تصريح</div></td>
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
 

 
$Requete3 = "select  partie,idf,idf_m,pj,annee_declaration,code,nom_a,prenom_a,date_n,lieu1 FROM $table where $mm order by annee_declaration,code desc $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

 
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);

	echo"
        <tr>
		
		
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>
			  			  

 <td><div align=\"center\"><a href=\"etat/afficher_naissance.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&partie=$row3[partie]\" target=_blank><img src=\"icone/search.PNG\" border=0 width=20 height=20></div></td>

			  			  
 <td><div align=\"center\"><a href=\"naiss1.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance&partie=$row3[partie]&cat=المولود\"><img src=\"icone/convertisseur.PNG\" border=0></div></td>


        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center">الصفحة : <?php echo $page+1; ?>
  <?php } ?>
  
  




  
  
  
</div>
</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

