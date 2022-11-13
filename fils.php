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
if ($permission==securite2($tim2)) { include("div.php");  

$partie = addslashes($_GET["partie"]);
$nbr = addslashes($_GET["nbr"]);
$certificat = addslashes($_GET["certificat"]);




?>


<?php
$valider=$_POST["valider"];
if ($valider!="OK") { ?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      


 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>
</head>
<body>


<p align="center">&nbsp;</p>
<div align="center">
  <fieldset style="width:900px">
          <div id="Layer1">
            <div id="background" class="background" style="display: none;"></div>
            <div id="clv_arb" class="clv_arb" style="display: none;"></div>
  </div>
          <legend class="style39" align="right"><span class="gras" style="font-size:25px"><strong>شهادة الحياة الجماعية</strong></span></legend>
 
  
<form action="" method="post" name="form1" id="form1">





  <table width="900" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td width="232" height="21" class="gras"><div align="center" class="style40">مكان الإزدياد</div></td>
      <td width="171" class="gras"><div align="center" class="style40">تاريخ الإزدياد</div></td>
      <td width="198" class="gras"><div align="center"><span class="style41">الإسم الشخصي</span></div></td>
      <td width="183" class="gras"><div align="center"><span class="style41">الإسم العائلي</span></div></td>
      <td width="104" rowspan="2" class="gras"><div align="right" class="style41">إضافة لائحة الأبناء</div>        <div align="center"><span class="style40"></span></div></td>
      </tr>
    <tr>
      <td class="gras"><div align="center"><span class="style40"></span>
	  
 

<img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lieu1')" />

        <input name="lieu1" type="text" id="lieu1" value="" size="25" dir="rtl">
		

		
	    </div></td>
      <td class="gras"><div align="center"><span class="style40"></span>
              <input name="date" type="text" id="date" value="<?php  echo date("d/m/Y");	?>" size="10">
              <button id="trigger1"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
        <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "date",
		        button            : "trigger1",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
      </div></td>
      <td class="gras"><div align="center">
          <input name="prenom_a" type="text" id="prenom_a" dir="rtl" value="" size="20" maxlength="25">
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prenom_a')" /> </div></td>
      <td class="gras"><div align="center">
        <input name="nom_a" type="text" id="nom_a" dir="rtl" value="" size="20" maxlength="25">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('nom_a')" /> </div></td>
    </tr>
  </table>
  


  
  <p>
    <label>
    <input name="valider" type="submit" id="valider" value="OK">
      </label>
    <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
    <input name="certificat" type="hidden" id="certificat" value="<?php echo $certificat;?>">
  </p>
</form>
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

  
  
    <span class="style21">
    <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">
    <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
    <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
    <input name="table" type="hidden" id="table" value="<?php echo $table;?>">
    <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
    <input name="Submit" type="submit" id="Submit" value="أنقر للإختيار ثم قم بالطباعة">
    </span><a href="javascript: chkall();" class="style42">أنقر الكل </a>
    <table width="835" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFFF">
        <td width="345" height="35" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
        <td width="134" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
        <td width="201" bgcolor="#EFEFEF"><div align="center">الإسم </div></td>
        <td width="47" bgcolor="#EFEFEF"><div align="center">تعديل</div></td>
        <td width="47" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
        <td width="47" bgcolor="#EFEFEF"><div align="center">أنقر للإختيار</div></td>
      </tr>
      <?php 	

 $Requete3 = "select  annee_declaration,code FROM attestation where `id`=$partie ";

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);

$annee_declaration=$rox['annee_declaration'];
$code=$rox['code'];

 include"conn/conversion.php";
 
 $Requete3 = "select  id,annee_declaration,code,nom_a,prenom_a,date_n,lieu1 FROM tmp where `attestation`='$certificat' and `id_attestation`='$partie'  ";
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

 <td><div align=\"center\"><a href=\"update_fils.php?table=tmp&N=$row3[id]&certificat=$certificat&partie=$partie\"><img src=\"icone/b_edit.PNG\" border=0></div></td>
 <td><div align=\"center\"><a href=\"supprimer.php?table=tmp&N=$row3[id]\"><img src=\"icone/b_drop.PNG\" border=0></div></td>

<td><div align=\"center\" class=\"Style9\"><input name=options[] type=checkbox id=options[] value=$row3[id]></div></td> 


        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
    </table>
  </form>
  </fieldset>


</div>




<?php }else
	
{

$now=date("Y-m-d");

$nom_a=trim($_POST["nom_a"]);
$prenom_a=trim($_POST["prenom_a"]);
$date=$_POST["date"];
$lieu1=$_POST["lieu1"];

include"conn/conversion.php";
 $date=convertDate($date);



 $Requete3 = "select  annee_declaration,code,nom_a_p,nom_a_m FROM attestation where `id`=$partie ";
mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);

$annee_declaration=$rox['annee_declaration'];
$code=$rox['code'];
$pere=$rox[nom_a_p];
$mere=$rox[nom_a_m];


 $Requete = "INSERT INTO `tmp`(`annee_declaration`,`code`,`nom_a`,`prenom_a`,`lieu1`,`date_n`,`nom`,`nom_a_p`,`nom_a_m`,`date`,`attestation`,`id_attestation`,`idf`)  VALUES ('$annee_declaration','$code','$nom_a','$prenom_a','$lieu1','$date','$nom','$pere','$mere','$now','$certificat','$partie','$idf_m') ; "; 

mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

	
	
include"aces1.php";
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";

		echo "<a href=\"fils.php?table=attestation&partie=$partie&certificat=$certificat\">رجوع</a>";

	
  }
  





?>


<?php   }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>
