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
      <td><div align="right">الرقم : <?php
	  
	  
	  
	   $valider=$_GET["valider"];
/* $jour=$_GET["jour"];
 $mois=$_GET["mois"];
 $annee=$_GET["annee"]; */
 $convert=$_GET["convert"];
 $table=$_GET["table"];
 $type=$_GET["type"];
 
 
$annee_declaration = addslashes($_GET["annee_declaration"]);

$table = addslashes($_GET["table"]);
$code = addslashes($_GET["code"]);
$partie = addslashes($_GET["partie"]);

	  
	   echo $code; ?></div></td>
      <td><div align="right">السنة : <?php echo $annee_declaration; ?></div></td>
    </tr>
  </table>
</div>
<p align="center">
  <?php 


include"conn/conversion.php";


if($table=="naissance" || $table=="deces")
{
 $Requete = "select * from $table where code = ".$code ." and annee_declaration =".$annee_declaration;

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




  
  <?php if($convert==0) { ?>
  
  <div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>

 
 				<fieldset style="width:700px">
          <legend align="left" class="gras style42"><span class="style42">Certificat de vie individuelle</span></legend>
 
  
<form action="etat/cvi_f.php" method="get" name="form1" id="form1">
  <p>&nbsp;    </p>
  <table width="500">
    <tr>
      <td width="131">Profession</td>
      <td width="353"><input name="prof" type="text"  id="prof" value="<?php if($nx!=0 && $rox[prof]!="")   echo $rox[prof]; else echo "Profession";	?>"></td>
    </tr>
    <tr>
      <td>Adresse</td>
      <td> <input name="adresse" type="text"  id="adresse" value="<?php if($nx!=0 && $rox[adresse_personne]!="")   echo $rox[adresse_personne]; else echo "Adresse";	?>"></td>
    </tr>
    <tr>
      <td width="131">Ville de naissance</td>
      <td width="353"><input name="ville" type="text"  id="ville" value="<?php if($nx!=0 && $rox[lieu]!="")   echo $rox[lieu]; else echo "Ville";	?>"></td>
    </tr>
    <tr>
      <td width="131">Province</td>
      <td width="353"><input name="province" type="text"  id="province" value="<?php if($nx!=0 && $rox[lieu]!="")   echo $rox[lieu]; else echo "Province";	?>"></td>
    </tr>
	
<?php 	if($rox[num_attestation]=="") {
?>	
	              
			  
			  <?php } ?>
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
      <input name="type" type="hidden" id="type" value="<?php echo $type;?>">
  </p>
</form>
  </fieldset>



<?php } ?>




  
  <?php if($convert==1) { ?>
  
  <div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>

 
 				<fieldset style="width:700px">
          <legend align="left" class="gras style42"><span class="style42">Certificat administratif relatif à la fiancée</span></legend>
 
  
<form action="etat/carfe.php" method="get" name="form1" id="form1">
  <p>&nbsp;    </p>
  <table width="500">
    <tr>
      <td width="131">Profession</td>
      <td width="353"><input name="prof" type="text"  id="prof" value="<?php if($nx!=0 && $rox[prof]!="")   echo $rox[prof]; else echo "Profession";	?>"></td>
    </tr>
    <tr>
      <td>Adresse</td>
      <td> <input name="adresse" type="text"  id="adresse" value="<?php if($nx!=0 && $rox[adresse_personne]!="")   echo $rox[adresse_personne]; else echo "Adresse";	?>"></td>
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

 
 				<fieldset style="width:700px">
          <legend align="left" class="style43">Certificat administratif relatif au fiancé</legend>
 
  
<form action="etat/carf.php" method="get" name="form1" id="form1">
  <p>&nbsp;    </p>
  <table width="500">
    <tr>
      <td width="131">Profession</td>
      <td width="353"><input name="prof" type="text"  id="prof" value="<?php if($nx!=0 && $rox[prof]!="")   echo $rox[prof]; else echo "Profession";	?>"></td>
    </tr>
    <tr>
      <td>Adresse</td>
      <td><input name="adresse" type="text"  id="adresse" value="<?php if($nx!=0 && $rox[adresse_personne]!="")   echo $rox[adresse_personne]; else echo "Adresse";	?>"></td>
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

 				<fieldset style="width:700px">
          <legend class="style39" align="left"><span class="gras" style="font-size:25px">Certificat de parenté</span></legend>
 
  
<form action="etat/cdp.php" method="get" name="form1" id="form1">
  <table width="510">
    <tr>
      <td width="197" height="36">Lien de parenté</td>
      <td width="301"><input name="lien" type="text"  id="lien" value="<?php if($nx!=0) {  
	  
	
	echo $rox[lien];

	   } 
	   
	   else echo "Lien";
	   
	   
	    ?>"></td>
      </tr>
    <tr>
      <td>Nom et prénom</td>
      <td><input name="lien_nom" type="text"  id="lien_nom" value="<?php if($nx!=0)  echo $rox[lien_nom];  else echo "Nom et prénom";	  ?>
	  "></td>
      </tr>
	  
	   <tr>
      <td>Date de naissance</td>
      <td><input name="lien_date" type="text" id="lien_date" value="<?php if($nx!=0)  echo ConvertDate_f($rox[lien_date_f]);  else echo date("d/m/Y"); ?>"></td>
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
  
 
  <fieldset style="width:900px">
          <legend class="style39" align="left"><span class="gras" style="font-size:25px">Attestation de polygamie</span></legend>
 
    <div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>


<form action="" method="post" name="form1" id="form1">
  <table width="900" border="1" cellpadding="0" cellspacing="0">
    <tr><td width="114"></td>
      <td width="248" class="gras"><div align="center" class="style40">Nom</div></td>
      <td width="116" class="gras"><div align="center" class="style40">Prénom</div></td>
      <td width="155" class="gras"><div align="center" class="style40">Date de naissance</div></td>
      <td width="171" height="21" class="gras"><div align="right" class="style41">
        <div align="center">Lieu de naissance</div>
      </div></td>
      </tr>
    <tr><td>Ajout épouse</td>
      <td class="gras"><div align="center"><span class="style40"></span>
        
		
		
		
	    <input name="femme1" type="text" id="femme1"  value="" size="17">
      </div></td><td><input name="prenom" type="text" id="prenom"  value="" size="17" maxlength="25"></td>
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
      <td class="gras"><div align="center"><span class="style40"></span><input name="lieu1" type="text"  id="lieu1" value="" size="25"></div></td>
      
      </tr>
  </table>
  <p>
    <label>
    <input name="valider" type="submit" id="valider" value="OK">
      </label>
    <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">   <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">   <input name="code" type="hidden" id="code" value="<?php echo $code;?>">   <input name="table" type="hidden" id="table" value="<?php echo $table;?>">   <input name="partie" type="hidden" id="partie" value="<?php echo $partie;?>">
  </p>
</form>




  <form name="form2" method="get" action="etat/polygamie_f.php">
  
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

    <input name="Submit" type="submit" id="Submit" value="Séléctionner puis imprimer">
    </span>
    <a href="javascript: chkall();" class="style44">Séléctionner tout </a>
    <table border="1" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFFF">
        <td width="326" height="35" bgcolor="#EFEFEF"><div align="center">Nom et prénom</div></td>
        <td width="118" bgcolor="#EFEFEF"><div align="center">Date de naissance</div></td>
        <td width="199" bgcolor="#EFEFEF"><div align="center">Lieu de naissance </div></td>
        <td width="45" bgcolor="#EFEFEF"><div align="center">Supprimer</div></td>
        <td width="42" bgcolor="#EFEFEF"><div align="center">Séléctionner</div></td>
      </tr>
      <?php 	


 $date_m=convertDate($date_m);
$date=date("Y-m-d");
 
 $Requete3 = "select prenom,id,annee_declaration,code,nom,date_n,lieu FROM tmp where `attestation`=2 and `annee_declaration`='$annee_declaration' and `deces_naissance`=0 and `code`='$code' ";
mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

	echo"
        <tr>
		 <td><div align=\"center\" class=\"Style9\">".$row3[nom]." ".$row3[prenom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu]."</div></td>

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
  <fieldset style="width:800px">
  <legend class="style39" align="left"><span class="gras" style="font-size:25px">Attestation de monogamie</span></legend>
 
  
          <form action="etat/monogamie_f.php" method="get" name="form1" id="form1">
<p>&nbsp;</p>
<table width="744" border="1" cellpadding="0" cellspacing="0">
    <tr><td width="105" rowspan="2"><div align="center">Ajout Epouse</div></td>
      <td width="207" class="gras"><div align="center" class="style40">Nom et prénom</div></td>
      <td width="193" class="gras"><div align="center" class="style40">Date de naissance</div></td>
      <td width="229" height="21" class="gras"><div align="right" class="style41">Lieu de naissance</div></td>
      </tr>
    <tr><td class="gras"><div align="center"><span class="style40"></span>
        
		 <input name="femme1" type="text"  id="femme1" value="<?php if($nx!=0) {  
	  
	
	echo $rox[nom_epouse];

	   }?>">
		
		
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
	  
	 <input name="lieu1" type="text"  id="lieu1" value="<?php if($nx!=0) {  
	  
	
	echo $rox[lieu_epouse];

	   }?>" size="30">
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







    
    
    <?php if($convert==6) { ?>
	
	<div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>

  </p>
  <p>&nbsp;</p>
  <fieldset style="width:800px">
  <legend class="style39" align="left"><span class="gras" style="font-size:25px"><span class="gras" style="font-size:25px">Certificat de celibat</span></span></legend>
 
  
          <form action="etat/celibat_f.php" method="get" name="form1" id="form1">
            <table width="733" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td width="217" class="gras"><div align="center" class="style40">CIN</div></td>
      <td width="193" class="gras"><div align="center" class="style40">Date</div></td>
      <td width="164" class="gras"><span class="style40">Adresse</span></td>
      <td width="149" height="21" class="gras"><div align="right" class="style41">Profession</div></td>
      </tr>
    <tr>
      <td class="gras"><div align="center"><span class="style40"></span>
	  
      <input name="cin" type="text" id="cin" value="<?php if($nx!=0)  	echo $rox[cin];  	  ?>" size="10">  
        
      </div></td>
      <td class="gras"><input name="date" type="text" id="date"  value="<?php if($nx!=0)  echo $rox[date_cin];  else echo date("d/m/Y");	 ?>" size="10">
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
        <input name="adresse" type="text"  id="adresse" value="<?php if($nx!=0 && $rox[adresse_personne]!="")   echo $rox[adresse_personne]; else echo "Adresse";	?>">
      </div></td>
      <td class="gras"><div align="center"><span class="style40"></span>
	  
	  
     <input name="prof" type="text"  id="prof" value="<?php 
		
		if($nx!=0 && $rox[prof]!="")   echo $rox[prof]; else echo "Profession";	
		
		
		?>"> </div></td>
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
  <fieldset style="width:800px">
  <legend class="style39" align="left"><span class="gras" style="font-size:25px"><span class="gras" style="font-size:25px">Certificat de non-mariage</span></span></legend>
 
  
          <form action="etat/non_marie_f.php" method="get" name="form1" id="form1">
            <table width="733" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td width="213" class="gras"><div align="center" class="style40">Profession</div></td>
                <td width="206" class="gras"><div align="center" class="style40">CIN</div></td>
                <td width="162" class="gras"><span class="style40">Date</span></td>
                <td width="142" height="21" class="gras"><div align="right" class="style41">Adresse</div></td>
              </tr>
              <tr>
                <td class="gras"><div align="center"><span class="style40"></span> 
                        <input name="prof" type="text"  id="prof" value="<?php if($nx!=0) echo $rox[prof];  ?>" size="20">
                </div></td>
                <td class="gras"><div align="center"><span class="style40"></span>
                  <input name="cin" type="text" id="cin" value="<?php if($nx!=0)  	echo $rox[cin];  	  ?>" size="10">
                </div></td>
                <td class="gras"><input name="date" type="text" id="date"  value="<?php if($nx!=0)  echo $rox[date_cin];  else echo date("d/m/Y");	 ?>" size="14">
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
                        <input name="adresse" type="text"  id="adresse" value="<?php if($nx!=0 && $rox[adresse_personne]!="")   echo $rox[adresse_personne]; else echo "Adresse";	?>">
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
  <fieldset style="width:800px">
  <legend class="style39" align="left"><span class="gras" style="font-size:25px"><span class="gras" style="font-size:25px">Certificat de non-divorce</span></span></legend>
 
  
          <form action="etat/non_divorce_f.php" method="get" name="form1" id="form1">
            <table width="735" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td width="209" class="gras"><div align="center" class="style40">Profession</div></td>
                <td width="214" class="gras"><div align="center" class="style40">CIN</div></td>
                <td width="159" class="gras"><span class="style40">Date</span></td>
                <td width="143" height="21" class="gras"><div align="right" class="style41">Adresse</div></td>
              </tr>
              <tr>
                <td class="gras"><div align="center"><span class="style40"></span> 
                        <input name="prof" type="text"  id="prof" value="<?php if($nx!=0) echo $rox[prof];  ?>" size="20">
                </div></td>
                <td class="gras"><div align="center"><span class="style40"></span><input name="cin" type="text" id="cin" value="<?php if($nx!=0)  	echo $rox[cin];  	  ?>" size="10">
                        
                </div></td>
                <td class="gras"><input name="date" type="text" id="date"  value="<?php if($nx!=0)  echo $rox[date_cin];  else echo date("d/m/Y");	 ?>" size="14">
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
                    <input name="adresse" type="text" id="adresse" value="<?php if($nx!=0 && $rox[adresse_personne]!="")   echo $rox[adresse_personne]; else echo"Adresse";	?>">    
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

 
 				<fieldset style="width:700px">
          <legend align="left" class="gras style42"><span class="style42">Certificat de continuité de mariage</span>    </legend><form action="etat/ccrm_f.php" method="get" name="form1" id="form1">
  <table width="500">
    
    <tr>
      <td>Adresse</td>
      <td> <input name="adresse" type="text"  id="adresse" value="<?php if($nx!=0 && $rox[adresse_personne]!="")   echo $rox[adresse_personne]; else echo "Adresse";	?>"></td>
    </tr>
    <tr>
      <td width="131">CIN</td>
      <td width="353"><input name="cin" type="text"  id="cin" value="<?php if($nx!=0 && $rox[cin]!="")   echo $rox[cin]; else echo "cin";	?>"></td>
    </tr><tr>
      <td colspan="2" width="353"><span class="gras"> Informations (époux/épouse)</span></td>
    </tr>
    <tr>
      <td width="131">Nom et prénom</td>
      <td width="353"><input name="nom" type="text"  id="nom" value="<?php if($nx!=0 && $rox[nom]!="")   echo $rox[nom]; else echo "Nom";	?>"></td>
    </tr>
    <tr>
      <td width="131">Date de naissance</td>
      <td width="353"><input name="date" type="text"  id="date" value="<?php if($nx!=0 && $rox[date]!="")   echo $rox[date]; else echo "date";	?>"></td>
    </tr>
    <tr>
      <td width="131">Lieu de naissance</td>
      <td width="353"><input name="lieu" type="text"  id="lieu" value="<?php if($nx!=0 && $rox[lieu]!="")   echo $rox[lieu]; else echo "lieu";	?>"></td>
    </tr>
    <tr>
      <td width="131">CIN</td>
      <td width="353"><input name="cin2" type="text"  id="cin2" value="<?php if($nx!=0 && $rox[cin2]!="")   echo $rox[cin2]; else echo "cin";	?>"></td>
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




<?php if($convert==12) { ?>
  
  <div id="Layer2">

    <div id="background" class="background" style="display: none;"></div>
    <div id="clv_arb" class="clv_arb" style="display: none;"></div>

</div>

 
 				<fieldset style="width:700px">
          <legend align="left" class="gras style42"><span class="style42">Attestation de Concordance </span>    </legend>
          <form action="etat/adc_f.php" method="get" name="form1" id="form1">
  <table width="500">
    
    <tr>
      <td>Nom</td>
      <td> <input name="nom" type="text"  id="nom" value="<?php echo $rox[nom]; ?>"></td>
    </tr><tr>
      <td>Prénom</td>
      <td> <input name="prenom" type="text"  id="prenom" value="<?php echo $rox[prenom]; ?>"></td>
    </tr>
    <tr>
      <td width="202">Date de naissance</td>
      <td width="286"><input name="date" type="text"  id="date" value="<?php echo convertDate_f($rox[date_n]); ?>"></td>
    </tr>
    <tr>
      <td width="202">Lieu de naissance</td>
      <td width="286"><input name="lieu" type="text"  id="lieu" value="<?php echo $rox[lieu]; ?>"></td>
    </tr><tr>
      <td width="202">Commune / Municipalité</td>
      <td width="286"><input name="com" type="text"  id="com" value="<?php echo $section; ?>"></td>
    </tr>
    <tr>
      <td width="202">Province</td>
      <td width="286"><input name="province" type="text"  id="province" value="<?php echo $province ?>"></td>
    </tr>
    <tr>
      <td>Nom et prénom du père</td>
      <td> <input name="pere" type="text"  id="pere" value="<?php echo $rox[nom_f_p] ?>"></td>
    </tr><tr>
      <td>Nom et prénom de la mère</td>
      <td> <input name="mere" type="text"  id="mere" value="<?php echo $rox[nom_f_m] ?>"></td>
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


</div>




<?php }else
	
{

 $prenom = addslashes($_POST["prenom"]);
 $femme = addslashes($_POST["femme1"]);
 $date1 = addslashes($_POST["date1"]);
 $lieu = addslashes($_POST["lieu1"]);
 
 $femme=trim($femme);
 $prenom=trim($prenom);

$date=date("Y-m-d");

 $date1=convertDate($date1);

 $Requete = "INSERT INTO `tmp`(`annee_declaration`,`code`,`nom`,`prenom`,`lieu`,`date_n`,`date`,`attestation`)  VALUES ('$annee_declaration','$code','$femme','$prenom','$lieu','$date1','$date','2') ; "; 

mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

include"aces1.php";
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";

		echo "<a href=\"certificat2.php?annee_declaration=$annee_declaration&code=$code&table=$table&convert=$convert\">رجوع</a>";


}


?>




<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>


