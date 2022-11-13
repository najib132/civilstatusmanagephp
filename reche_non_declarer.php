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
<p align="center">
  <label></label>
</p>

  <script type="text/javascript">

function Validerfrm()
{

var code = document.form1.code.value;
var f = document.form1.f.value;
var d = document.form1.d.value;
var annee_declaration = document.form1.annee_declaration.value;


	if(f=="" || d=="") 
		{ 
        alert ('Vérifier les données SVP'); 
        document.form1.d.focus(); 
        return false; 
    	} 

if(isNaN(code)) 
		{ 
        alert ('Vérifier le Champ code'); 
        document.form1.code.focus(); 
        return false; 
    	} 


	if(annee_declaration==0 && code!="") 
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
              <td width="177"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>

            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="code" type="text" id="code" maxlength="20">
                </label>
              </div></td>
              <td bgcolor="#FFFFFF"><div align="center"><span class="style39">&#1585;&#1602;&#1605;</span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <select name="certificat" id="certificat">

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
              </div></td>
              <td><div align="center" class="style39">نوع الشهادة</div></td>
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
<table width="76%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td width="111" height="35" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="111" rowspan="2" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="159" rowspan="2" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
    <td width="128" rowspan="2" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
    <td width="178" rowspan="2" bgcolor="#EFEFEF"><div align="center">الإسم الكامل</div></td>
    <td width="93" rowspan="2" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
    <td width="96" rowspan="2" bgcolor="#EFEFEF"><div align="center">نوع الشهادة</div></td>
    <td width="32" rowspan="2" bgcolor="#EFEFEF"><div align="center">تعديل</div></td>
    <td width="38" rowspan="2" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
    <td width="33" colspan="2" bgcolor="#EFEFEF"><div align="center">طباعة</div></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td bgcolor="#EFEFEF"><div align="center">F</div></td>
    <td bgcolor="#EFEFEF"><div align="center">A</div></td>
  </tr>
  <?php 	
		$page = isset($_GET['page']) ? $_GET['page'] : ''; 

include"conn/conversion.php";

 $d=convertDate($d);
 $f=convertDate($f);

if($annee_declaration!=0 && $code!="")  $mm=" `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `date` between '".$d."' and '".$f."' "; ////CAS1


if($d!="" && $f!="" && $annee_declaration==0 && $code=="")  $mm=" `date` between '".$d."' and '".$f."' "; ////CAS2

if($d!="" && $f!="" && $annee_declaration!=0 && $code=="")  $mm=" `annee_declaration`='".$annee_declaration."' and `date` between '".$d."' and '".$f."' "; ////CAS2




 $Requete3 = "select id FROM attestation where `attestation`='$certificat' and $mm ";
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
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&code=$code&f=$f&d=$d&valider=$valider&annee_declaration=$annee_declaration&affiche=$affiche&type=$type&table=$table&certificat=$certificat\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&code=$code&f=$f&d=$d&valider=$valider&annee_declaration=$annee_declaration&affiche=$affiche&type=$type&table=$table&certificat=$certificat\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

 
 /**********Affichage*******/
 

 
	$Requete3 = "select  attestation,id,nom_a,prenom_a,idf,idf_m,annee_declaration,code,date_n,lieu1,date FROM attestation where `attestation`='$certificat' and $mm order by date desc $limit_str  ";
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



 $Requete31x = "select profession_a,attestation, attestation_f from profession where `id`='".$row3[attestation]."'  ";
	$resultx = @mysql_query($Requete31x,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$roxx = mysql_fetch_array($resultx);

if($row3[attestation]!=18) $supprimer=" <td><div align=\"center\"><a href=\"supprimer.php?N=$row3[id]&table=attestation\"><img src=icone/b_drop.PNG ></div></td>";
if($row3[attestation]==18) $supprimer=" <td><div align=\"center\"><a href=\"supprimer2.php?N=$row3[id]&table=attestation\"><img src=icone/b_drop.PNG ></div></td>";

	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]." ".$row3[prenom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$roxx[profession_a]."</div></td>
		
<td><div align=\"center\"><a href=\"modifier_certificat.php?partie=$row3[id]&table=attestation\"><img src=icone/b_edit.PNG ></div></td>		  
$supprimer		  
		  
 <td><div align=\"center\"><a href=\"etat/$roxx[attestation_f]?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=attestation&partie=$row3[id]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=33 height=33></div></td>
 <td><div align=\"center\"><a href=\"etat/$roxx[attestation]?code=$row3[code]&annee_declaration=$row3[annee_declaration]&type=$type&table=attestation&partie=$row3[id]\" target=_blank><img src=\"icone/print.GIF\" border=0 width=33 height=33></div></td>




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

