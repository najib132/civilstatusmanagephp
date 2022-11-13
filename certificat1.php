<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);      include"conn/connexion.php";

$permission=$_SESSION["permission"];

$pays=$_SESSION["pays"];      
$pays1=$_SESSION["pays1"];  

$ministre=$_SESSION["ministre"];      
$ministre1=$_SESSION["ministre1"];      

$province=$_SESSION["province"];      
$province1=$_SESSION["province1"];      

$annexe=$_SESSION["annexe"];      
$annexe1=$_SESSION["annexe1"];      

   $idf=$_SESSION["idf"];
   
        $section=$_SESSION["section"];      
$section1=$_SESSION["section1"];  
 $region=$_SESSION["region"];  $region1=$_SESSION["region1"];     
   

   
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) { include("div.php");  


?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير الحالة المدنية بروكرما سيفيل المؤلف : Sud Programa </title>      


 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>

   <style type="text/css">
<!--
.style39 {font-size: 18px}

.gras {	font-weight: bold;
}
.gras {	font-weight: bold;
	text-align: center;
}
.style40 {font-size: 16px}
.style41 {font-weight: bold; text-align: center; font-size: 16px; }

.style21 {font-size: 24px}
.style42 {font-size: 25px}
.style43 {font-weight: bold; text-align: center; font-size: 25px; }
.style44 {font-size: 20px; }
#Layer1 {	position:absolute;
	left:347px;
	top:343px;
	width:176px;
	height:147px;
	z-index:1;
}
.style45 {color: #FFFFFF}
-->
   </style>
</head>
<body>
<div align="right">
  <table width="20%">
    <tr>
      <td><div align="right">الرقم :
        <?php
	  
	  
	  
	   $valider=$_GET["valider"];
/* $jour=$_GET["jour"];
 $mois=$_GET["mois"];
 $annee=$_GET["annee"]; */
 $convert=$_GET["convert"];
 $table=$_GET["table"];
 
 
$annee_declaration = addslashes($_GET["annee_declaration"]);

$table = addslashes($_GET["table"]);
$code = addslashes($_GET["code"]);
$partie = addslashes($_GET["partie"]);

	  
	   echo $code; ?>
      </div></td>
      <td><div align="right">السنة : <?php echo $annee_declaration; ?></div></td>
    </tr>
  </table>
</div>
<p align="center">
  <?php 


include"conn/conversion.php";


if($table=="naissance" || $table=="deces")
{
 $Requete = "select * from $table where `code` = '".$code."' and `annee_declaration` ='".$annee_declaration."' and `partie`='".$partie."' ";

	mysql_query("SET NAMES 'UTF8' ");

		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors vvde la lecture de la table<br>".mysql_error());
$rox = mysql_fetch_array($result);	
	$nx=mysql_num_rows($result);




}

if($table=="attestation")
{


	  	$Requete3x = "select * from attestation where `id`='".$partie."'    ";
	
	mysql_query("SET NAMES 'UTF8' ");

$result3x = @mysql_query($Requete3x,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result3x);
	$nx=mysql_num_rows($result3x);

}
?>
  
  <?php
$valider=$_POST["valider"];
if ($valider!="OK") { ?>
  
  
  
</p>
<div align="center">



  
  <?php if($convert==1) { ?>
  
  <div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>

 
 				<fieldset style="width:75%">
          <legend align="right" class="gras style42">شهادة ادارية تتعلق بالمخطوبة</legend>
 
  
<form action="etat/aacf.php" method="get" name="form1" id="form1">
  <p>&nbsp;    </p>
  <table width="500">
    <tr>
      <td width="131">&nbsp;</td>
      <td width="353"><input name="prof" type="text" dir="rtl" id="prof" value="<?php if($nx!=0 && $rox[prof_a]!="")   echo $rox[prof_a]; else echo"مهنة المخطوبة";	?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prof')" />مهنة المخطوبة</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td> <input name="adresse" type="text" dir="rtl" id="adresse" value="<?php if($nx!=0 && $rox[adresse_personne_a]!="")   echo $rox[adresse_personne_a]; else echo"الساكنة ب";	?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('adresse')" /> الساكنة ب</td>
    </tr>
  </table>
  <p>
      <label>
      <input name="valider" type="submit" id="valider" value="OK">
      </label>
      <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">   
      <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">   
      <input name="code" type="hidden" id="code" value="<?php echo $code;?>">   
      <input name="table" type="hidden" id="table" value="<?php echo $table;?>">   
      <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
  </p>
</form>
  </fieldset>



<?php } ?>




  <?php if($convert==2) { ?>
  
  <div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>

 
 				<fieldset style="width:75%">
          <legend align="right" class="style43">شهادة ادارية تتعلق بالخاطب</legend>
 
  
<form action="etat/aacf_m.php" method="get" name="form1" id="form1">
  <p>&nbsp;    </p>
  <table width="500">
    <tr>
      <td width="131">&nbsp;</td>
      <td width="353"><input name="prof" type="text" dir="rtl" id="prof" value="<?php if($nx!=0 && $rox[prof_a]!="")   echo $rox[prof_a]; else echo"مهنة الخاطب";	?>">
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prof')" />مهنة الخاطب</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="adresse" type="text" dir="rtl" id="adresse" value="<?php if($nx!=0 && $rox[adresse_personne_a]!="")   echo $rox[adresse_personne_a]; else echo"الساكن ب";	?>">
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('adresse')" /> الساكن ب</td>
    </tr>
  </table>
  <p>
      <label>
    <input name="valider" type="submit" id="valider" value="OK">
      </label>
      <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">   
      <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">   
      <input name="code" type="hidden" id="code" value="<?php echo $code;?>">   
      <input name="table" type="hidden" id="table" value="<?php echo $table;?>">   
      <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
  </p>
</form>
  </fieldset>



<?php } ?>





  <?php if($convert==3) { ?>
 
 <div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>

 				<fieldset style="width:75%">
          <legend class="style39" align="right"><span class="gras" style="font-size:25px">شهادة القرابة</span></legend>
 
  
<form action="etat/lien.php" method="get" name="form1" id="form1">
  <table width="510">
    <tr>
      <td width="197" height="36"><div align="right" class="gras"> 
        <div align="right">مثال : عم ، أخ ، حفيد </div>
      </div></td>
      <td width="301"><input name="lien" type="text" dir="rtl" id="lien" value="<?php if($nx!=0) {  
	  
	
	echo $rox[lien_a];

	   } 
	   
	   else echo"صلة القرابة";
	   
	   
	    ?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien')" /> صلة القرابة</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="lien_nom" type="text" dir="rtl" id="lien_nom" value="<?php if($nx!=0)  	echo $rox[lien_nom_a];  else echo "الإسم الكامل";	  ?>
	  ">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien_nom')" /> الإسم الكامل</td>
      </tr>
	  
	   <tr>
      <td>&nbsp;</td>
      <td><input name="lien_date" type="text" id="lien_date" value="<?php if($nx!=0)  echo ConvertDate_f($rox[lien_date]);  else echo date("d/m/Y"); ?>">
         تاريخ الإزدياد</td>
      </tr>
  </table>
  <p>
    <label><br>
    <input name="valider" type="submit" id="valider" value="OK">
      </label>
    <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">   <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">   <input name="code" type="hidden" id="code" value="<?php echo $code;?>">   <input name="table" type="hidden" id="table" value="<?php echo $table;?>">   <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
  </p>
</form>

 				</fieldset>



<?php } ?>






  <?php if($convert==4) { ?>
  
 
  <fieldset style="width:75%">
          <legend class="style39" align="right"><span class="gras" style="font-size:25px">شهادة تعدد الزوجات</span></legend>
 
    <div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>


<form action="" method="post" name="form1" id="form1">
  <table width="99%" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td width="258" class="gras"><div align="center" class="style40">مكان الإزدياد</div></td>
      <td width="185" class="gras"><div align="center" class="style40">تاريخ الإزدياد</div></td>
      <td width="189" height="21" class="gras"><div align="right" class="style41">
        <div align="center">الإسم الشخصي</div>
      </div></td>
      <td width="220" class="gras"><div align="right" class="style41">الإسم العائلي</div></td>
      <td width="99" class="gras"><div align="center"><span class="style40"></span></div></td>
      </tr>
    <tr>
      <td class="gras"><div align="center"><span class="style40"></span>
	  
	          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lieu1')" />

        <input name="lieu1" type="text" dir="rtl" id="lieu1" value="" size="25">
		
		
		
	    </div></td>
      <td class="gras"><div align="center"><span class="style40"></span>
        <input name="date1" type="text" id="date1" value="<?php echo date("d/m/Y"); ?>" size="10">
		
              <button id="trigger1"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
              <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "date1",
		        button            : "trigger1",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
		
      </div></td>
      <td class="gras"><div align="center"><span class="style40"></span>
        <input name="prenom_a" type="text" id="prenom_a" dir="rtl" value="" size="17" maxlength="25">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prenom_a')" /> </div></td>
      <td class="gras"><input name="femme1" type="text" id="femme1" dir="rtl" value="" size="17">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('femme1')" /> </td>
      <td class="gras"><div align="center"><span class="style40"></span>إضافة الزوجات</div></td>
      </tr>
  </table>
  <p>
    <label>
    <input name="valider" type="submit" id="valider" value="OK">
      </label>
    <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">   <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">   <input name="code" type="hidden" id="code" value="<?php echo $code;?>">   <input name="table" type="hidden" id="table" value="<?php echo $table;?>">   <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
  </p>
</form>




  <form name="form2" method="get" action="etat/polygamie.php">
  
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
    </span>
    <a href="javascript: chkall();" class="style44">أنقر الكل </a>
    <table border="1" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFFF">
        <td width="326" height="35" bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
        <td width="118" bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد </div></td>
        <td width="199" bgcolor="#EFEFEF"><div align="center">الإسم </div></td>
        <td width="45" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
        <td width="42" bgcolor="#EFEFEF"><div align="center">أنقر للإختيار</div></td>
      </tr>
      <?php 	


 $date_m=convertDate($date_m);
$date=date("Y-m-d");
 
 $Requete3 = "select prenom_a,id,annee_declaration,code,nom_a,date_n,lieu1 FROM tmp where `attestation`=2 and `annee_declaration`='$annee_declaration' and `deces_naissance`=0 and `code`='$code' ";
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

 <td><div align=\"center\"><a href=\"supprimer.php?table=tmp&N=$row3[id]\"><img src=\"icone/b_drop.PNG\" border=0></div></td>

<td><div align=\"center\" class=\"Style9\"><input name=options[] type=checkbox id=options[] value=$row3[id]></div></td> 


        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
    </table>
  </form>
  </fieldset>



  <p>
    <?php } ?>
    
    
    
    
    
    
    
    
    
    
    
    <?php if($convert==5) { ?>
	
  <div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>

  </p>
  <p>&nbsp;</p>
  <fieldset style="width:75%">
  <legend class="style39" align="right"><span class="gras" style="font-size:25px">شهادة الزوجة الوحيدة</span></legend>
 
  
          <form action="etat/monogamie.php" method="get" name="form1" id="form1">
            <table width="95%" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td width="298" class="gras"><div align="center" class="style40">مكان الإزدياد</div></td>
      <td width="250" class="gras"><div align="center" class="style40">تاريخ الإزدياد</div></td>
      <td width="231" height="21" class="gras"><div align="right" class="style41">الإسم الكامل 
        </div></td>
      <td width="135" class="gras"><div align="center"><span class="style40"></span></div></td>
      </tr>
    <tr>
      <td class="gras"><div align="center"><span class="style40"></span>
	  
	          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lieu1')" />

        <input name="lieu1" type="text" dir="rtl" id="lieu1" value="<?php if($nx!=0) {  
	  
	
	echo $rox[lieu_epouse];

	   }?>" size="30">
		
		
		
	    </div></td>
      <td class="gras"><div align="center"><span class="style40"></span>
        <input name="date1" type="text" id="date1" value="<?php
		
 if($nx!=0) echo $rox[date_epouse]; else echo date("d/m/Y"); ?>">
		
              <button id="trigger1"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
              <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "date1",
		        button            : "trigger1",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
		
      </div></td>
      <td class="gras"><div align="center"><span class="style40"></span>
	  
	  <input name="femme1" type="text" dir="rtl" id="femme1" value="<?php if($nx!=0) {  
	  
	
	echo $rox[nom_epouse];

	   }?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('femme1')" /> 
	  </div></td>
      <td class="gras"><div align="center"><span class="style40"></span>الزوجة </div></td>
      </tr>
  </table>
  <p>
    <label>
    <input name="valider" type="submit" id="valider" value="OK">
      </label>
    <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">   <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">   <input name="code" type="hidden" id="code" value="<?php echo $code;?>">   <input name="table" type="hidden" id="table" value="<?php echo $table;?>">   <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
  </p>
</form>
  </fieldset>



<?php } ?>







    
    
    <?php if($convert==6) { ?>
	
	<div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>

  </p>
  <p>&nbsp;</p>
  <fieldset style="width:75%">
  <legend class="style39" align="right"><span class="gras" style="font-size:25px"><span class="gras" style="font-size:25px">شهادة العزوبة</span></span></legend>
 
  
          <form action="etat/celibat.php" method="get" name="form1" id="form1">
            <table width="95%" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td width="268" class="gras"><div align="center" class="style40">مهنة المعني بالأمر</div></td>
      <td width="249" class="gras"><div align="center" class="style40">الساكن ب</div></td>
      <td width="207" class="gras"><span class="style40">بتاريخ</span></td>
      <td width="190" height="21" class="gras"><div align="right" class="style41">رقم البطاقة الوطنية</div></td>
      </tr>
    <tr>
      <td class="gras"><div align="center"><span class="style40"></span>
	  
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prof')" />
        <input name="prof" type="text" dir="rtl" id="prof" value="<?php 
		
		if($nx!=0 && $rox[prof_a]!="")   echo $rox[prof_a]; else echo"الحرفة ";	
		
		
		?>">
      </div></td>
      <td class="gras"><div align="center"><span class="style40"></span>
        <input name="adresse" type="text" dir="rtl" id="adresse" value="<?php if($nx!=0 && $rox[adresse_personne_a]!="")   echo $rox[adresse_personne_a]; else echo "الساكن ب";	?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('adresse')" /></div></td>
      <td class="gras"><input name="date" type="text" id="date" dir="rtl" value="<?php if($nx!=0)  echo $rox[date_cin];  else echo date("d/m/Y");	 ?>" size="10">
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
		    	</script></td>
      <td class="gras"><div align="center"><span class="style40"></span>
	  
	  <input name="cin" type="text" id="cin" value="<?php if($nx!=0)  	echo $rox[cin];  	  ?>" size="10">
      </div></td>
      </tr>
  </table>
  <p>
    <label>
    <input name="valider" type="submit" id="valider" value="OK">
      </label>
    <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">   <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">   <input name="code" type="hidden" id="code" value="<?php echo $code;?>">   <input name="table" type="hidden" id="table" value="<?php echo $table;?>">   <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
  </p>
</form>
  </fieldset>



<?php } ?>





    <?php if($convert==9) { ?>
	
	
	<div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>

  </p>
  <p>&nbsp;</p>
  <fieldset style="width:75%">
  <legend class="style39" align="right"><span class="gras" style="font-size:25px"><span class="gras" style="font-size:25px">شهادة عدم الزواج</span></span></legend>
 
  
          <form action="etat/non_marie.php" method="get" name="form1" id="form1">
            <table width="95%" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td width="263" class="gras"><div align="center" class="style40">مهنة المعني بالأمر</div></td>
                <td width="266" class="gras"><div align="center" class="style40">الساكن ب</div></td>
                <td width="204" class="gras"><span class="style40">بتاريخ</span></td>
                <td width="181" height="21" class="gras"><div align="right" class="style41">رقم البطاقة الوطنية</div></td>
              </tr>
              <tr>
                <td class="gras"><div align="center"><span class="style40"></span> <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prof')" />
                        <input name="prof" type="text" dir="rtl" id="prof" value="<?php if($nx!=0) echo $rox[prof_a];  ?>" size="20">
                </div></td>
                <td class="gras"><div align="center"><span class="style40"></span>
                        <input name="adresse" type="text" dir="rtl" id="adresse" value="<?php if($nx!=0 && $rox[adresse_personne_a]!="")   echo $rox[adresse_personne_a]; else echo"الساكن ب";	?>">
                        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('adresse')" /></div></td>
                <td class="gras"><input name="date" type="text" id="date" dir="rtl" value="<?php if($nx!=0)  echo $rox[date_cin];  else echo date("d/m/Y");	 ?>" size="14">
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
		    	  </script></td>
                <td class="gras"><div align="center"><span class="style40"></span>
                        <input name="cin" type="text" id="cin" value="<?php if($nx!=0)  	echo $rox[cin];  	  ?>" size="10">
                </div></td>
              </tr>
            </table>
            <p>
    <label>
    <input name="valider" type="submit" id="valider" value="OK">
      </label>
    <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">   <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">   <input name="code" type="hidden" id="code" value="<?php echo $code;?>">   <input name="table" type="hidden" id="table" value="<?php echo $table;?>">   <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
            </p>
</form>
  </fieldset>



<?php } ?>








    <?php if($convert==10) { ?>
	
	
	<div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>

  </p>
  <p>&nbsp;</p>
  <fieldset style="width:75%">
  <legend class="style39" align="right"><span class="gras" style="font-size:25px"><span class="gras" style="font-size:25px">شهادة عدم الطلاق</span></span></legend>
 
  
          <form action="etat/non_divorce.php" method="get" name="form1" id="form1">
            <table width="95%" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td width="243" class="gras"><div align="center" class="style40">مهنة المعني بالأمر</div></td>
                <td width="289" class="gras"><div align="center" class="style40">الساكن ب</div></td>
                <td width="200" class="gras"><span class="style40">بتاريخ</span></td>
                <td width="182" height="21" class="gras"><div align="right" class="style41">رقم البطاقة الوطنية</div></td>
              </tr>
              <tr>
                <td class="gras"><div align="center"><span class="style40"></span> <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('prof')" />
                        <input name="prof" type="text" dir="rtl" id="prof" value="<?php if($nx!=0) echo $rox[prof_a];  ?>" size="20">
                </div></td>
                <td class="gras"><div align="center"><span class="style40"></span>
                        <input name="adresse" type="text" dir="rtl" id="adresse" value="<?php if($nx!=0 && $rox[adresse_personne_a]!="")   echo $rox[adresse_personne_a]; else echo"الساكن ب";	?>">
                        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('adresse')" /></div></td>
                <td class="gras"><input name="date" type="text" id="date" dir="rtl" value="<?php if($nx!=0)  echo $rox[date_cin];  else echo date("d/m/Y");	 ?>" size="14">
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
		    	  </script></td>
                <td class="gras"><div align="center"><span class="style40"></span>
                        <input name="cin" type="text" id="cin" value="<?php if($nx!=0)  	echo $rox[cin];  	  ?>" size="10">
                </div></td>
              </tr>
            </table>
            <p>
    <label>
    <input name="valider" type="submit" id="valider" value="OK">
      </label>
    <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>"> 
	  <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">  
	   <input name="code" type="hidden" id="code" value="<?php echo $code;?>">  
	    <input name="table" type="hidden" id="table" value="<?php echo $table;?>">  
		 <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
  </p>
</form>
  </fieldset>



<?php } ?>







  <?php if($convert==11) { ?>
 
 <div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>

 				<fieldset style="width:75%">
          <legend class="style39" align="right"><span class="gras" style="font-size:25px">شهادة استمرارية العلاقة الزوجية </span></legend>
 
  
<form action="etat/ccrm.php" method="get" name="form1" id="form1">
  <table width="510">
    <tr>
      <td width="197" height="36"><div align="right" class="gras"> 
        <div align="right"></div>
      </div></td>
      <td width="301"><input name="adresse" type="text" dir="rtl" id="adresse" value="<?php if($nx!=0) {  
	  
	
	echo $rox[adresse_a];

	   } 
	   
	   else echo "العنوان";
	   
	   
	    ?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien')" /> العنوان</td>
      </tr>
      <tr>
      <td>&nbsp;</td>
      <td><input name="cin" type="text" id="cin" value="<?php if($nx!=0)  echo $rox[cin];  else echo date("d/m/Y"); ?>">
         رقم البطاقة الوطنية</td>
      </tr>
      <td>&nbsp;</td>
      <td align="right"><span class="gras"> معلومات الطرف الاخر</span></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="nom" type="text" dir="rtl" id="nom" value="<?php if($nx!=0)  	echo $rox[nom_a];  else echo "الإسم الكامل";	  ?>
	  ">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien_nom')" /> الإسم الكامل</td>
      </tr>
	  
	   <tr>
      <td>&nbsp;</td>
      <td><input name="daten" type="text" id="daten" value="<?php if($nx!=0)  echo ConvertDate_f($rox[date]);  else echo date("d/m/Y"); ?>">
         تاريخ الإزدياد</td>
      </tr>
      <tr>
      <td width="197" height="36"><div align="right" class="gras"> 
        <div align="right"></div>
      </div></td>
      <td width="301"><input name="lieun" type="text" dir="rtl" id="lieun" value="<?php if($nx!=0) {  
	  
	
	echo $rox[lieu_a];

	   } 
	   
	   else echo "مكان الازدياد";
	   
	   
	    ?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien')" /> مكان الازدياد</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="cin2" type="text" dir="rtl" id="cin2" value="<?php if($nx!=0)  	echo $rox[cin];  else echo "رقم البطاقة الوطنية";	  ?>
	  ">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien_nom')" /> رقم البطاقة الوطنية</td>
      </tr>
  </table>
  <p>
    <label><br>
    <input name="valider" type="submit" id="valider" value="OK">
      </label>
    <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">   <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">   <input name="code" type="hidden" id="code" value="<?php echo $code;?>">   <input name="table" type="hidden" id="table" value="<?php echo $table;?>">   <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
  </p>
</form>

 				</fieldset>



<?php } ?>


<?php if($convert==12) { ?>
 
    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>


 				<fieldset style="width:75%">
          <legend class="style39" align="right"><span class="gras" style="font-size:25px">شهادة المطابقة </span></legend>
 
  
<form action="etat/adc_a.php" method="get" name="form1" id="form1">
  <table width="510">
    <tr>
      <td width="143" rowspan="9"><div align="right" class="gras"> 
        <div align="center">
		
		
		
		    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>
		</div>
      </div>        <div align="right" class="gras"> 
          <div align="right"></div>
        </div>      <div align="right" class="gras"> 
        <div align="right"></div>
      </div>        <div align="right" class="gras"> 
          <div align="right"></div>
        </div>      <div align="right" class="gras"> 
        <div align="right"></div>
      </div>        <div align="right" class="gras"> 
          <div align="right"></div>
        </div>      <div align="right" class="gras"> 
        <div align="right"></div>
      </div></td>
      <td width="355" height="36"><input name="nom_a" type="text" dir="rtl" id="nom_a" value="<?php echo $rox[nom_a]; ?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien')" /> الاسم العائلي</td>
      </tr>
      <tr>
      <td width="355" height="36"><input name="prenom_a" type="text" dir="rtl" id="prenom_a" value="<?php echo $rox[prenom_a]; ?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien')" />  الإسم الشخصي</td>
      </tr>
	  
	   <tr>
	     <td><input name="daten" type="text" id="daten" value="<?php echo convertDate_f($rox[date_n]); ?>">
          تاريخ الإزدياد</td>
      </tr>
      <tr>
      <td width="355" height="36"><input name="lieun" type="text" dir="rtl" id="lieun" value="<?php echo $rox[lieu1]; ?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien')" /> مكان الازدياد</td>
      </tr><tr>
      <td width="355" height="36"><input name="coum" type="text" dir="rtl" id="coum" value="<?php echo $section1; ?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien')" /> جماعة / بلدية</td>
      </tr>
	  <tr>
      <td width="355" height="36"><input name="province" type="text" dir="rtl" id="province" value="<?php echo $province1; ?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien')" /> عمالة او اقليم</td>
      </tr><tr>
      <td width="355" height="36"><input name="nom_p" type="text" dir="rtl" id="nom_p" value="<?php echo $rox[nom_a_p] ?>">
        <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien')" /> اسم الاب</td>
      </tr>
      <tr>
        <td height="36"><input name="nom_m" type="text" dir="rtl" id="nom_m" value="<?php echo $rox[nom_a_m] ?>">
          <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('lien')" /> اسم الام</td>
      </tr>
      <tr>
      <td width="355" height="36"><label>
        <input name="solta" type="text" id="solta" dir="rtl" value="<?php  echo "قائد ".$region1." ل".$section1." "; ?>" size="30">
      ممثل السلطة المحلية</label></td>
      </tr>
  </table>
  <p>
    <label><br>
    <input name="valider" type="submit" id="valider" value="OK">
      </label>
    <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">   <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">   <input name="code" type="hidden" id="code" value="<?php echo $code;?>">   <input name="table" type="hidden" id="table" value="<?php echo $table;?>">   <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
  </p>
</form>



 				</fieldset>



<?php } ?>





</div>




<?php }else
	
{

 $prenom_a = addslashes($_POST["prenom_a"]);
 $femme1 = addslashes($_POST["femme1"]);
 $date1 = addslashes($_POST["date1"]);
 $lieu1 = addslashes($_POST["lieu1"]);
 
 $femme1=trim($femme1);
 $prenom_a=trim($prenom_a);

$date=date("Y-m-d");

 $date1=convertDate($date1);

 $Requete = "INSERT INTO `tmp`(`annee_declaration`,`code`,`nom_a`,`prenom_a`,`lieu1`,`date_n`,`date`,`attestation`)  VALUES ('$annee_declaration','$code','$femme1','$prenom_a','$lieu1','$date1','$date','2') ; "; 

mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

include"aces1.php";
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";

		echo "<a href=\"certificat1.php?annee_declaration=$annee_declaration&code=$code&table=$table&convert=$convert&partie=$partie\">رجوع</a>";


}


?>




<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>


