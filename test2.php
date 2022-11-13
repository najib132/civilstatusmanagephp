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




$affiche=$_GET["affiche"];
$partie=$_GET["partie"];
$date=$_GET["date"];



?>


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLiees.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>


<?php
$valider=$_POST["valider"];
if ($valider!="إضافة إلى المعنيين بالأمر") { ?>


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
.style40 {color: #FF0000}
.style21 {font-size: 24px}
#Layer3 {
	position:absolute;
	left:816px;
	top:176px;
	width:333px;
	height:47px;
	z-index:1;
}
.style41 {
	font-size: 18;
	color: #FFFFFF;
}
.style42 {font-size: 20px; }
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
  <a href="recherche_attestation.php?attestation=1&deces_naissance=0" target="_blank" class="style39" style="text-decoration:none">البحث عن شواهد الحياة الجماعية السابقة</a></p>

  <script type="text/javascript">

function Validerfrm()
{

var code = document.form1.code.value;
var annee_declaration = document.form1.annee_declaration.value;


	if(annee_declaration==0) 
		{ 
        alert ('Vérifier les données SVP'); 
        document.form1.annee_declaration.focus(); 
        return false; 
    	} 


if(code=="" || isNaN(code)) 
		{ 
        alert ('Vérifier le Champ code'); 
        document.form1.code.focus(); 
        return false; 
    	} 

				
 }
		
		
///////////////////////////////////

    </script>


  <form action="" method="post" name="form1" id="form1" onSubmit="return Validerfrm()">


  <div align="center">
  <table width="200">
      <tr>
        <td><fieldset style="width:400px">
          <legend class="style39" align="right">البحث عن الأبناء في سجل الولادات</legend>
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
              <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="date" type="hidden" id="date" value="<?php include"conn/conversion.php"; echo ConvertDate($date);  ?>">
                <input name="partie" type="hidden" id="partie" value="<?php echo $partie; ?>">
                <input name="affiche" type="hidden" id="affiche" value="<?php echo $affiche; ?>">
                <input name="valider" type="submit" id="valider" value="إضافة إلى المعنيين بالأمر">
                </label>
              </div></td>
            </tr>
          </table>
          </fieldset>        </td>
      </tr>
    </table>
    </div>
</form>

  <div align="center">
    <p class="style39">إعداد شهادة الحياة الجماعية </p>
</div>


  <form name="form2" method="get" action="etat/avic.php">
  
  
    
  
  <script language="javascript"> 
<!-- 



function chkall()
{ 
   var taille = document.forms['form2'].elements.length; 
   var element = null; 
   for(i=0; i < taille; i++)
    { 
      element = document.forms['form2'].elements[i]; 
      if(element.type == "checkbox") 
       {
        if(!element.checked)
        {
        element.checked = true; 
        }else{
        element.checked = false; 
        }
       }
    } 
       
} 
//--> 
</script> 

    <div align="center">
      <table width="65%">
        <tr>
          <td><div align="center"><span class="style21">
            <input name="Submit" type="submit" id="Submit" value="أنقر للإختيار ثم قم بالطباعة">
            <a href="javascript: chkall();" class="style42">أنقر الكل </a> </span></div></td>
        </tr>
      </table>
      <table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#FFFFFF">
          <td width="326" height="35" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
          <td width="118" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
          <td width="202" bgcolor="#EFEFEF"><div align="center">الإسم </div></td>
          <td width="152" bgcolor="#EFEFEF"><div align="center">رقم الرسم</div></td>
          <td width="42" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
          <td width="42" bgcolor="#EFEFEF"><div align="center">أنقر للإختيار</div></td>
          <td width="121" bgcolor="#EFEFEF"><div align="center">معاينة معلومات المعني بالأمر</div></td>
        </tr>
        <?php 	

 
$Requete3 = "select  prenom_a,id,annee_declaration,code,nom_a,date_n,lieu1 FROM tmp where `id_attestation`='$partie' and `attestation`=1 order by date_n asc  ";
mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

	echo"
        <tr>
		 <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]." ".$row3[prenom_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[annee_declaration]."-".$row3[code]."</div></td>

 <td><div align=\"center\"><a href=\"supprimer.php?table=tmp&N=$row3[id]\"><img src=\"icone/b_drop.PNG\" border=0></div></td>

<td><div align=\"center\" class=\"Style9\"><input name=options[] type=checkbox id=options[] value=$row3[id]></div></td> 


 <td><div align=\"center\"><a href=\"etat/afficher_naissance.php?annee_declaration=$row3[annee_declaration]&code=$row3[code]&table=naissance\" target=_blank><img src=\"icone/loupe.PNG\" border=0 width=35 height=35></div></td>


        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
      </table>
    </div>
</form>
  <div align="center" class="style39">
    <p><a href="etat/avic.php" target="_blank"></a>
  
  
  
  
    <?php } else {
	
	
	 $date = addslashes($_POST["date"]);
$code = addslashes($_POST["code"]);
 $annee_declaration = addslashes($_POST["annee_declaration"]);



 $Requete3 = "select nom_f_m, nom_a_m, nom_f_p, nom_a_p, nom,prenom,lieu, nom_a,prenom_a,date_n,lieu1 FROM naissance where `annee_declaration`='".$annee_declaration."' and `code`='".$code."'  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row = mysql_fetch_array($result3);
	
	$n=mysql_num_rows($result3);
	
	if($n==0) 	 echo"<center><font color=\"#FF0000\"><b>هناك خطأ في السنة او في الرقم</b></font><br><br></center>"; else {
	
	//معاينة لائحة المعنيين بشهادة الحياة الجماعية
	

	
// echo"<center><font color=\"#000000\"><b><a href=test2.php?affiche=\"إعداد شهادة الحياة الجماعية معاينة لائحة المعنيين بشهادة الحياة الجماعية\"></a></b></font><br><br></center>";


//echo $row[date_n];

 $ip=$_SERVER['REMOTE_ADDR'];
 
 $pere=$row[nom_f_p];
 $pere_a=$row[nom_a_p];
 
 
  $mere=$row[nom_f_m];
 $mere_a=$row[nom_a_m];

 
 		 $ip=$_SERVER['REMOTE_ADDR'];


 $Requete = "INSERT INTO `tmp`(`annee_declaration`,`code`,`nom_a`,`prenom_a`,`lieu1`,`date_n`,`lieu`,`nom_a_p`,`nom_a_m`,`date`,`attestation`,`idf`,`id_attestation`)  VALUES ('$annee_declaration','$code','$row[nom_a]','$row[prenom_a]','$row[lieu1]','$row[date_n]','$row[lieu]','$pere_a','$mere_a','$date','1','$idf_m','$partie') ; "; 

mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


				include"conn/conversion.php";
$date= ConvertDate_f($date);


	include"aces1.php";

	
echo "<center><font color=\"#000000\"><b><a href=\"test2.php?partie=$partie&date=$date&affiche=معاينة لائحة المعنيين بشهادة الحياة الجماعية\">رجوع</a></b></font><br><br></center>";

	
}


}

?>
  </p>
</div>
</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

