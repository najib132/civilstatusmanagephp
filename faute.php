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
 $annee1 = addslashes($_GET["annee1"]);
 $annee2 = addslashes($_GET["annee2"]);
$idf = addslashes($_GET["idf"]);

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

var annee_declaration = document.form1.annee_declaration.value;


	if(annee_declaration==0) 
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
                  <select name="annee1" id="annee1" onChange="getDpt()">

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
              <td width="88"><div align="center" class="style39 style1">من</div></td>
              <td width="89" rowspan="2"><div align="center"><span class="style39 style1">&#1575;&#1604;&#1587;&#1606;&#1577;</span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="annee2" id="annee2" onChange="getDpt()">
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
              <td><div align="center">إلى</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <select name="idf" id="idf">
				
				                  <option value=""></option>

                  <?php   
			   	$Requete3 = "select nom,prenom,cin,id from utilisateurs  order by nom asc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[id]; ?>"><?php echo " $row[cin]    $row[nom] $row[prenom] "; }?></option>
                </select>
              </div></td>
              <td colspan="2"><div align="center">المستعمل</div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="center">
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

    <td width="102" height="35" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
    <td width="102" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
    <td width="145" bgcolor="#EFEFEF"><div align="center"><?php if($table=="naissance") echo "مكان الإزدياد"; else echo "مكان الوفاة";  ?></div></td>
    <td width="117" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
    <td width="139" bgcolor="#EFEFEF"><div align="center">الإسم الشخصي</div></td>
    <td width="119" bgcolor="#EFEFEF"><div align="center">الإسم العائلي</div></td>
    <td width="72" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
	    <td width="46" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
	    <td width="48" bgcolor="#EFEFEF"><div align="center">تعديل</div></td>
	    <td width="63" bgcolor="#EFEFEF"><div align="center">معاينة</div></td>
  </tr>
  <?php 	

include"conn/conversion.php";

if($idf=="") $req=""; else $req=" and `idf`='".$idf."' ";
 
if($table=="naissance")	$Requete3 = "select partie, idf,idf_m,pj,annee_declaration,code,nom_a,prenom_a,date_n,lieu1 FROM  naissance where `annee_declaration` between '".$annee1."' and '".$annee2."' $req and `valider`='' order by annee_declaration,code desc   ";


if($table=="deces")	$Requete3 = "select partie, idf,idf_m,pj,annee_declaration,code,nom_a,prenom_a,date_n,ville_deces_a FROM  deces where  `annee_declaration` between '".$annee1."' and '".$annee2."' $req and `valider`='' order by annee_declaration,code desc   ";


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
	

if($table=="naissance") $lieu=$row3[lieu1];	else $lieu=$row3[ville_deces_a];

	echo"
        <tr>
		

		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$rox[prenom]." ".$rox[nom]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$lieu."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]."</div></td>
			  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>
 <td><div align=\"center\"><a href=\"supprimer.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=$table&partie=$row3[partie]\"><img src=\"icone/b_drop.PNG\" border=0></div></td>
 <td><div align=\"center\"><a href=\"modifier_$table.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=$table&trans=1&cat=المولود&partie=$row3[partie]\"><img src=\"icone/b_edit.PNG\" border=0></div></td>
 <td><div align=\"center\"><a href=\"etat/afficher_$table.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&partie=$row3[partie]\" target=_blank><img src=\"icone/a.PNG\" border=0></div></td>



        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
</table>
<div align="center"></div>


<?php } ?>


</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

