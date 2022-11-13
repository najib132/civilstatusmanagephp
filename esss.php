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
   
$ch = $_GET["ch"];   
$ch1 = $_GET["ch1"];
$ch2 = $_GET["ch2"];
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) { //include("div.php");  


 $Requete3 = "select annee,annee_h,partie,officier_a,lien_a,dir_date_h,prof_p_a,prof_m_a, mois,mois_a,dir_date from utilisateurs  where `id`='".$idf_m."'  ";
mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);

$dir_date=$row[dir_date];
$dir_date_h=$row[dir_date_h];


?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      



   <style type="text/css">
<!--
.style39 {font-size: 18px}
.style4 {font-size: 14px}
.style40 {font-size: 16px}
-->
   </style>
</head>
<body>




<p>

  <?php

function int2str($a){
	if ($a<0) return 'moins '.int2str(-$a);
	if ($a<17){
		switch ($a){
			case 0: return '';
			case 1: return 'un';
			case 2: return 'deux';
			case 3: return 'trois';
			case 4: return 'quatre';
			case 5: return 'cinq';
			case 6: return 'six';
			case 7: return 'sept';
			case 8: return 'huit';
			case 9: return 'neuf';
			case 10: return 'dix';
			case 11: return 'onze';
			case 12: return 'douze';
			case 13: return 'treize';
			case 14: return 'quatorze';
			case 15: return 'quinze';
			case 16: return 'seize';
		}
	} else if ($a<20){
		return 'dix-'.int2str($a-10);
	} else if ($a<100){
		if ($a%10==0){
			switch ($a){
				case 20: return 'vingt';
				case 30: return 'trente';
				case 40: return 'quarante';
				case 50: return 'cinquante';
				case 60: return 'soixante';
				case 70: return 'soixante-dix';
				case 80: return 'quatre-vingt';
				case 90: return 'quatre-vingt-dix';
			}
		} else if ($a<70){
			return int2str($a-$a%10).' '.int2str($a%10);
		} else if ($a<80){
			return int2str(60).' '.int2str($a%20);
		} else{
			return int2str(80).' '.int2str($a%20);
		}
	} else if ($a==100){
		return 'cent';
	} else if ($a<200){
		return int2str(100).' '.int2str($a%100);
	} else if ($a<1000){
		return int2str((int)($a/100)).' '.int2str(100).' '.int2str($a%100);
	} else if ($a==1000){
		return 'mille';
	} else if ($a<2000){
		return int2str(1000).' '.int2str($a%1000).' ';
	} else if ($a<1000000){
		return int2str((int)($a/1000)).' '.int2str(1000).' '.int2str($a%1000);
	}  
	//on pourrait pousser pour aller plus loin, mais c'est sans interret pour ce projet, et pas interessant, c'est pas non plus compliqué...
}
//echo int2str("999999"); // et voilà ce que ca donne

//echo int2str(1900);


function Arabe($a){
	if ($a<13){
		switch ($a){

			case 1: return 'واحد';
			case 2: return 'ثاني';
			case 3: return 'ثالث';
			case 4: return 'رابع';
			case 5: return 'خامس';
			case 6: return 'سادس';
			case 7: return 'سابع';
			case 8: return 'ثامن';
			case 9: return 'تاسع';
			case 10: return 'عاشر';
			case 11: return 'حادي عشر';
			case 12: return 'ثاني عشر';
		}
	} ////////////////FIN 13
	
	
 if (12 < $a && $a < 20){
 
		return Arabe($a%10).' '.'عشر' ;
	} ///////////////////////FIN 
	
	
 if (19 < $a && $a < 100 && $a%10==0){
 
		switch ($a){
			case 20: return 'عشرين';
			case 30: return 'ثلاثين';
			case 40: return 'أربعين';
			case 50: return 'خمسين';
			case 60: return 'ستين';
			case 70: return 'سبعين';
			case 80: return 'ثمانين';
			case 90: return 'تسعين';
		}
	} ///////////////////////FIN 
	


 if (20 < $a && $a < 100 && $a%10!=0){
 
		return Arabe($a%10).' و'.Arabe($a-$a%10) ;

	} ///////////////////////FIN 
	
	
 if (100 < $a && $a < 1000 && $a%100!=0){
 
 
 		return Arabe($a-$a%100).' و'.Arabe($a%100) ;
	
}

}






function ConverLettre($a,$direction){
	if ($a<13){
		switch ($a){
			//case 0: return 'صفر';
			case 1: return 'واحد';
			case 2: return 'إثنين';
			case 3: return 'ثلاثة';
			case 4: return 'أربعة';
			case 5: return 'خمسة';
			case 6: return 'ستة';
			case 7: return 'سبعة';
			case 8: return 'ثمانية';
			case 9: return 'تسعة';
			case 10: return 'عشرة';
			case 11: return 'إحدى عشر';
			case 12: return 'إثناعشر';
		}
	} ////////////////FIN 13
	
	
 if (12 < $a && $a < 20){
 
		return ConverLettre($a%10,$direction).' '.'عشر' ;
	} ///////////////////////FIN 
	
	
 if (19 < $a && $a < 100 && $a%10==0){
 
		switch ($a){
			case 20: return 'عشرين';
			case 30: return 'ثلاثين';
			case 40: return 'أربعين';
			case 50: return 'خمسين';
			case 60: return 'ستين';
			case 70: return 'سبعين';
			case 80: return 'ثمانين';
			case 90: return 'تسعين';
		}
	} ///////////////////////FIN 
	


 if (20 < $a && $a < 100 && $a%10!=0){
 
		return ConverLettre($a%10,$direction).' و'.ConverLettre($a-$a%10,$direction) ;

	} ///////////////////////FIN 
	
 if (99 < $a && $a < 1000 && $a%100==0){
	
		switch ($a){
			case 100: return 'مائة';
			case 200: return 'مئتان';
			case 300: return 'ثلاثمائة';
			case 400: return 'أربعمائة';
			case 500: return 'خمسمائة';
			case 600: return 'ستمائة';
			case 700: return 'سبعمائة';
			case 800: return 'ثمنمائة';
			case 900: return 'تسعمائة';
		}
	}
	
 if (100 < $a && $a < 1000 && $a%100!=0){
 
 
 		return ConverLettre($a-$a%100,$direction).' و'.ConverLettre($a%100,$direction) ;
	
}


 if (999 < $a && $a <= 2000 && $a%1000==0){

		switch ($a){
			case 1000: return 'ألف';
			case 2000: return 'ألفين';
		}}
		
 if (2000 < $a && $a < 10000 && $a%1000==0){

		return ConverLettre($a/1000,$direction).' '.'آلاف' ;

}




///////////////////////////////////////////////// INVERSER LA DATE FRANCAIS///////////////////////////

if($direction=="f") {

 if (999 < $a && $a < 10000 && $a%1000!=0)   {
 
		
		return ConverLettre($a%100,$direction).' و'.ConverLettre($a%1000 - $a%100,$direction).' و'.ConverLettre($a-$a%1000,$direction) ;
		
}
}


///////////////////////////////////////////////// INVERSER LA DATE ARABE///////////////////////////
if($direction=="a" || $direction=="") {


 if (999 < $a && $a < 10000 && $a%1000!=0)   {
 
 		return ConverLettre($a-$a%1000,$direction).' و'.ConverLettre($a%1000,$direction) ;
}
}



}





?>



<?php 

 $valider=$_GET["valider"];
 $jour=$_GET["jour"];
 $mois=$_GET["mois"];
 $annee=$_GET["annee"];
 $convert=$_GET["convert"];


?>
</p>
<p align="center">&nbsp;</p>
<div align="center">


<?php if($convert==1) { ?>


<SCRIPT language="javascript">
//D'autres scripts sur http://www.toutjavascript.com
//Si vous utilisez ce script, merci de m'avertir !  < <voir adresse mail sur site> >

function ok() {
	//var choix=l.options[l.options.selectedIndex].value;
	//window.opener.document.forms["origine"].elements["choix"].value=choix;
	window.opener.document.getElementById('<?php echo $_GET["modif"]; ?>').value=document.getElementById('date').value;
	window.opener.document.getElementById('<?php echo $_GET["modif1"]; ?>').value=document.getElementById('date1').value;
	window.opener.document.getElementById('<?php echo $_GET["modif2"]; ?>').value=document.getElementById('date_m').value;
	window.close();
}
</SCRIPT>


  <form name="form1" method="get" action="">
    <table width="363" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="42%" bgcolor="#EFEFEF"><div align="center">
          <input name="annee" type="text" id="annee" size="10" maxlength="4" value="<?php 
		  
		  
		  echo $row[annee];
		  
		  
		  ?>">
        </div></td>
        <td width="33%" bgcolor="#EFEFEF"><div align="center">
          <label>
          <select name="mois" id="mois">
            <option value="<?php echo $row[mois] ?>">
            <?php 
			
			
			   	$Requete3 = "select mois,mois_a from mois where `mois`='".$row[mois]."' ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rof = mysql_fetch_array($result3);
			echo $rof[mois_a];
			
			 ?>
            </option>
            <?php   
			   	$Requete3 = "select mois,mois_a from mois  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
          </select>
          </label>
        </div></td>
        <td width="25%" bgcolor="#EFEFEF"><div align="center">
          <label>
          <input name="jour" type="text" id="jour" size="5" maxlength="2">
          </label>
        </div></td>
      </tr>
    </table>
    
    <p>
      <input name="modif2" type="hidden" id="modif2" value="<?php if($ch2=="") echo $_GET["modif2"]; else echo $ch2; ?>">
      <input name="modif1" type="hidden" id="modif1" value="<?php if($ch1=="") echo $_GET["modif1"]; else echo $ch1; ?>">
      <input name="modif" type="hidden" id="modif" value="<?php if($ch=="") echo $_GET["modif"]; else echo $ch; ?>">
      <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">
      <input name="valider" type="submit" id="valider" value="تحويل التاريخ إلى حروف"/>
    </p>
    <p><?php echo $jour; ?> / <?php echo $mois ?> / &nbsp;<?php echo $annee; ?></p>
    <p>
      <input name="date_m" type="text" id="date_m" value="<?php echo"$jour/$mois/$annee"; ?>">
    </p>
    <p>
      <textarea name="date" cols="50" rows="2" id="date"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo int2str($jour); echo" ";

			   	$Requete3 = "select mois_f,mois_a from mois where `mois`='".$mois."'  ";
					mysql_query("SET NAMES 'UTF8' ");
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row = mysql_fetch_array($result3);

echo "$row[mois_f] ";

echo int2str($annee);
}

	  
	  ?></textarea>
    </p>
    <p> 
      <textarea name="date1" cols="50" rows="2" id="date1" dir="rtl"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo Arabe($jour); echo" ";

echo "$row[mois_a] ";

echo ConverLettre($annee,$dir_date);
}

	  
	  ?>
      </textarea>
    </p>
    <p>
      <label></label>
      <input type="button" value="ok" onClick="ok()" />
    </p>
  </form>
  

    <?php } if($convert==2) { ?>
	
	  
  
  <SCRIPT language="javascript">
//D'autres scripts sur http://www.toutjavascript.com
//Si vous utilisez ce script, merci de m'avertir !  < <voir adresse mail sur site> >

function ok() {
	//var choix=l.options[l.options.selectedIndex].value;
	//window.opener.document.forms["origine"].elements["choix"].value=choix;
	window.opener.document.getElementById('<?php echo $_GET["modif"]; ?>').value=document.getElementById('date').value;
	window.opener.document.getElementById('<?php echo $_GET["modif1"]; ?>').value=document.getElementById('date1').value;
	window.close();
}
</SCRIPT>

	
	
	
  </p>
  <form name="form1" method="get" action="">
    <table width="363" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="42%" bgcolor="#EFEFEF"><div align="center">
          <label>
          <input name="annee" type="text" id="annee" size="10" maxlength="4" value="<?php 
		  
		  
		  echo $row[annee_h];
		  
		  
		  ?>">
          </label>
        </div></td>
        <td width="33%" bgcolor="#EFEFEF"><div align="center">
            <label>
            <select name="mois" id="mois">
              <option value="<?php echo $row[mois] ?>">
              <?php 
			
			
			   	$Requete3 = "select mois,mois_arabe_a from mois where `mois`='".$row[mois]."' ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rof = mysql_fetch_array($result3);
			echo $rof[mois_arabe_a];
			
			 ?>
              </option>
              <?php   
			   	$Requete3 = "select mois,mois_arabe_a from mois  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
              <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
            </select>
            </label>
        </div></td>
        <td width="25%" bgcolor="#EFEFEF"><div align="center">
            <label>
            <input name="jour" type="text" id="jour" size="5" maxlength="2">
            </label>
        </div></td>
      </tr>
       
      <tr><td></td></tr>
    </table>
    <p>
      <input name="modif2" type="hidden" id="modif2" value="<?php if($ch2=="") echo $_GET["modif2"]; else echo $ch2; ?>">
      <input name="modif1" type="hidden" id="modif1" value="<?php if($ch1=="") echo $_GET["modif1"]; else echo $ch1; ?>">
      <input name="modif" type="hidden" id="modif" value="<?php if($ch=="") echo $_GET["modif"]; else echo $ch; ?>">
      <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">
      <input name="valider" type="submit" id="valider" value="تحويل التاريخ إلى حروف"/>
    </p>
    <p>
      <textarea name="date1" cols="50" rows="2" id="date1" dir="rtl"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo Arabe($jour); echo" ";


			   	$Requete3 = "select mois_arabe,mois_arabe_a from mois where `mois`='".$mois."'  ";
					mysql_query("SET NAMES 'UTF8' ");
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row = mysql_fetch_array($result3);


echo "$row[mois_arabe_a] ";

echo ConverLettre($annee,$dir_date_h);
}
	  
	  ?>
          </textarea>
    </p>
    <p>
	
	
	<textarea name="date" cols="50" rows="2" id="date"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo int2str($jour); echo" ";

echo "$row[mois_arabe] ";


echo int2str($annee);
}

	  
	  ?>
      </textarea>
	
	</p>
    <p>
      <input type="button" value="ok" onClick="ok()" />
    </p>
  </form>
  <p>&nbsp;</p>
  <p><?php } ?>
 
  
  
  
 
<?php if($convert==3) {  ?>


<SCRIPT language="javascript">
//D'autres scripts sur http://www.toutjavascript.com
//Si vous utilisez ce script, merci de m'avertir !  < <voir adresse mail sur site> >

function ok() {
	//var choix=l.options[l.options.selectedIndex].value;
	//window.opener.document.forms["origine"].elements["choix"].value=choix;
	window.opener.document.getElementById('<?php echo $_GET["modif"]; ?>').value=document.getElementById('date').value;
	window.opener.document.getElementById('<?php echo $_GET["modif1"]; ?>').value=document.getElementById('date1').value;
	window.close();
}
</SCRIPT>


  <form name="form1" method="get" action="">
    <table width="363" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="42%" bgcolor="#EFEFEF"><div align="center">
            <input name="annee" type="text" id="annee" size="10" maxlength="4" value="<?php 
		  
		  
		  echo $row[annee];
		  
		  
		  ?>">
        </div></td>
        <td width="33%" bgcolor="#EFEFEF"><div align="center">
            <label>
            <select name="mois" id="mois">
              <option value="<?php echo $row[mois] ?>">
              <?php 
			
			
			   	$Requete3 = "select mois,mois_a from mois where `mois`='".$row[mois]."' ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rof = mysql_fetch_array($result3);
			echo $rof[mois_a];
			
			 ?>
              </option>
              <?php   
			   	$Requete3 = "select mois,mois_a from mois  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
              <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
            </select>
            </label>
        </div></td>
        <td width="25%" bgcolor="#EFEFEF"><div align="center">
            <label>
            <input name="jour" type="text" id="jour" size="5" maxlength="2">
            </label>
        </div></td>
      </tr>
    </table>
    <p>
      <input name="modif2" type="hidden" id="modif2" value="<?php if($ch2=="") echo $_GET["modif2"]; else echo $ch2; ?>">
      <input name="modif1" type="hidden" id="modif1" value="<?php if($ch1=="") echo $_GET["modif1"]; else echo $ch1; ?>">
      <input name="modif" type="hidden" id="modif" value="<?php if($ch=="") echo $_GET["modif"]; else echo $ch; ?>">
      <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">
      <input name="valider" type="submit" id="valider" value="تحويل التاريخ إلى حروف"/>
    </p>
    <p><?php echo $jour; ?> / <?php echo $mois ?> / &nbsp;<?php echo $annee; ?></p>
    <p>
      <textarea name="date" cols="50" rows="2" id="date"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo int2str($jour); echo" ";

			   	$Requete3 = "select mois_f,mois_a from mois where `mois`='".$mois."'  ";
					mysql_query("SET NAMES 'UTF8' ");
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row = mysql_fetch_array($result3);

echo "$row[mois_f] ";

echo int2str($annee);
}

	  
	  ?>
      </textarea>
    </p>
    <p> 
      <textarea name="date1" cols="50" rows="2" id="date1" dir="rtl"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo Arabe($jour); echo" ";

echo "$row[mois_a] ";

echo ConverLettre($annee,$dir_date);
}

	  
	  ?>
      </textarea>
    </p>
    <p>
      <label></label>
      <input type="button" value="ok" onClick="ok()" />
    </p>
  </form>
  
 <?php } ?>




  
 
<?php if($convert==4) {  ?>


<SCRIPT language="javascript">
//D'autres scripts sur http://www.toutjavascript.com
//Si vous utilisez ce script, merci de m'avertir !  < <voir adresse mail sur site> >

function ok() {
	//var choix=l.options[l.options.selectedIndex].value;
	//window.opener.document.forms["origine"].elements["choix"].value=choix;
	window.opener.document.getElementById('<?php echo $_GET["modif"]; ?>').value=document.getElementById('date').value;
	window.opener.document.getElementById('<?php echo $_GET["modif1"]; ?>').value=document.getElementById('date1').value;
	window.close();
}
</SCRIPT>


  <form name="form1" method="get" action="">
    <table width="363" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="42%" bgcolor="#EFEFEF"><div align="center">
          <input name="annee" type="text" id="annee" size="10" maxlength="4" value="<?php 
		  
		  
		  echo $row[annee_h];
		  
		  
		  ?>">
        </div></td>
        <td width="33%" bgcolor="#EFEFEF"><div align="center">
            <label>
            <select name="mois" id="mois">
              <option value="<?php echo $row[mois] ?>">
              <?php 
			
			
			   	$Requete3 = "select mois,mois_arabe_a from mois where `mois`='".$row[mois]."' ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rof = mysql_fetch_array($result3);
			echo $rof[mois_arabe_a];
			
			 ?>
              </option>
              <?php   
			   	$Requete3 = "select mois,mois_arabe_a from mois  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
              <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
            </select>
            </label>
        </div></td>
        <td width="25%" bgcolor="#EFEFEF"><div align="center">
            <label>
            <input name="jour" type="text" id="jour" size="5" maxlength="5">
            </label>
        </div></td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </table>
    <p>
      <input name="modif2" type="hidden" id="modif2" value="<?php if($ch2=="") echo $_GET["modif2"]; else echo $ch2; ?>">
      <input name="modif1" type="hidden" id="modif1" value="<?php if($ch1=="") echo $_GET["modif1"]; else echo $ch1; ?>">
      <input name="modif" type="hidden" id="modif" value="<?php if($ch=="") echo $_GET["modif"]; else echo $ch; ?>">
      <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">
      <input name="valider" type="submit" id="valider" value="تحويل التاريخ إلى حروف"/>
      <label></label>
    </p>
    <p>
      <textarea name="date" cols="50" rows="2" id="date"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo int2str($jour); echo" ";

			   	$Requete3 = "select mois_arabe_a,mois_arabe from mois where `mois`='".$mois."'  ";
					mysql_query("SET NAMES 'UTF8' ");
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row = mysql_fetch_array($result3);

echo "$row[mois_arabe] ";

echo int2str($annee);
}

	  
	  ?>
      </textarea>
    </p>
    <p> 
      <textarea name="date1" cols="50" rows="2" id="date1" dir="rtl"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo Arabe($jour); echo" ";

echo "$row[mois_arabe_a] ";

echo ConverLettre($annee,$dir_date_h);
}

	  
	  ?>
      </textarea>
    </p>
    <p>
      <label></label>
      <input type="button" value="ok" onClick="ok()" />
    </p>
  </form>
  
 <?php } ?>
  




    <?php  if($convert==5) { ?>
	
	  
  
  <SCRIPT language="javascript">
//D'autres scripts sur http://www.toutjavascript.com
//Si vous utilisez ce script, merci de m'avertir !  < <voir adresse mail sur site> >

function ok() {
	//var choix=l.options[l.options.selectedIndex].value;
	//window.opener.document.forms["origine"].elements["choix"].value=choix;
	window.opener.document.getElementById('<?php echo $_GET["modif"]; ?>').value=document.getElementById('date').value;
	window.opener.document.getElementById('<?php echo $_GET["modif1"]; ?>').value=document.getElementById('date1').value;
	window.opener.document.getElementById('<?php echo $_GET["modif2"]; ?>').value=document.getElementById('annee_h').value;
	window.close();
}
</SCRIPT>






<form name="form1" method="get" action="">
    <table width="363" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="42%" bgcolor="#EFEFEF"><div align="center">
          <input name="annee" type="text" id="annee" size="10" maxlength="4" value="<?php 
  echo $row[annee_h];
   ?>">
        </div></td>
        <td width="33%" bgcolor="#EFEFEF"><div align="center">
            <label>
            <select name="mois" id="mois">
              <option value="<?php echo $row[mois] ?>">
                <?php 
			
			
			   	$Requete3 = "select mois,mois_arabe_a from mois where `mois`='".$row[mois_a]."' ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rof = mysql_fetch_array($result3);
			echo $rof[mois_arabe_a];
			
			 ?>
              </option>
              <?php   
			   	$Requete3 = "select mois,mois_arabe_a from mois  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
              <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
            </select>
            </label>
        </div></td>
        <td width="25%" bgcolor="#EFEFEF"><div align="center">
            <label>
            <input name="jour" type="text" id="jour" size="4" maxlength="2">
            </label>
        </div></td>
      </tr>
       
      <tr><td></td></tr>
    </table>
    <p>
      <input name="modif2" type="hidden" id="modif2" value="<?php if($ch2=="") echo $_GET["modif2"]; else echo $ch2; ?>">
      <input name="modif1" type="hidden" id="modif1" value="<?php if($ch1=="") echo $_GET["modif1"]; else echo $ch1; ?>">
      <input name="modif" type="hidden" id="modif" value="<?php if($ch=="") echo $_GET["modif"]; else echo $ch; ?>">
      <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">
      <input name="valider" type="submit" id="valider" value="تحويل التاريخ إلى حروف"/>
    </p>
    <p>
      <label>
      <input name="annee_h" type="text" id="annee_h" size="10" maxlength="4" value="<?php echo $annee ?>">
      </label>
    </p>
    <p>
      <textarea name="date" cols="50" rows="2" id="date"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo int2str($jour); echo" ";

			   	$Requete3 = "select mois_arabe,mois_arabe_a from mois where `mois`='".$mois."'  ";
					mysql_query("SET NAMES 'UTF8' ");
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row = mysql_fetch_array($result3);

echo "$row[mois_arabe] ";


echo int2str($annee);
}

	  
	  ?>
      </textarea>
    </p>
    <p>
      <textarea name="date1" cols="50" rows="2" id="date1" dir="rtl"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo Arabe($jour); echo" ";

echo "$row[mois_arabe_a] ";

echo ConverLettre($annee,$dir_date_h);
}
	  
	  ?>
          </textarea>
    </p>
    <p>
      <input type="button" value="ok" onClick="ok()" />
    </p>
  </form>



<?php } ?>












<?php if($convert==6) { ?>


<SCRIPT language="javascript">
//D'autres scripts sur http://www.toutjavascript.com
//Si vous utilisez ce script, merci de m'avertir !  < <voir adresse mail sur site> >

function ok() {
	//var choix=l.options[l.options.selectedIndex].value;
	//window.opener.document.forms["origine"].elements["choix"].value=choix;
	window.opener.document.getElementById('<?php echo $_GET["modif"]; ?>').value=document.getElementById('date').value;
	window.opener.document.getElementById('<?php echo $_GET["modif1"]; ?>').value=document.getElementById('date1').value;
	window.opener.document.getElementById('<?php echo $_GET["modif2"]; ?>').value=document.getElementById('date_m').value;
	window.close();
}
</SCRIPT>


  <form name="form1" method="get" action="">
    <table width="363" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="42%" bgcolor="#EFEFEF"><div align="center">
          <input name="annee" type="text" id="annee" size="10" maxlength="4" value="<?php 
		  
		  
		  echo $row[annee];
		  
		  
		  ?>">
        </div></td>
        <td width="33%" bgcolor="#EFEFEF"><div align="center">
          <label>
          <select name="mois" id="mois">
            <option value="<?php echo $row[mois] ?>">
              <?php 
			
			
			   	$Requete3 = "select mois,mois_a from mois where `mois`='".$row[mois]."' ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rof = mysql_fetch_array($result3);
			echo $rof[mois_a];
			
			 ?>
              </option>
            <?php   
			   	$Requete3 = "select mois,mois_a from mois  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
          </select>
          </label>
        </div></td>
        <td width="25%" bgcolor="#EFEFEF"><div align="center">
          <label>
          <input name="jour" type="text" id="jour" size="4" maxlength="2">
          </label>
        </div></td>
      </tr>
    </table>
    
    <p>
      <input name="modif2" type="hidden" id="modif2" value="<?php if($ch2=="") echo $_GET["modif2"]; else echo $ch2; ?>">
      <input name="modif1" type="hidden" id="modif1" value="<?php if($ch1=="") echo $_GET["modif1"]; else echo $ch1; ?>">
      <input name="modif" type="hidden" id="modif" value="<?php if($ch=="") echo $_GET["modif"]; else echo $ch; ?>">
      <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">
      <input name="valider" type="submit" id="valider" value="تحويل التاريخ إلى حروف"/>

    </p>
    <p><?php echo $jour; ?> / <?php echo $mois ?> / &nbsp;<?php echo $annee; ?></p>
    <p>
      <input name="date_m" type="text" id="date_m" value="<?php echo"$jour/$mois/$annee"; ?>">
    </p>
    <p>
      <textarea name="date" cols="50" rows="2" id="date"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo int2str($jour); echo" ";

			   	$Requete3 = "select mois_f,mois_a from mois where `mois`='".$mois."'  ";
					mysql_query("SET NAMES 'UTF8' ");
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row = mysql_fetch_array($result3);

echo "$row[mois_f] ";

echo int2str($annee);
}

	  
	  ?></textarea>
    </p>
    <p> 
      <textarea name="date1" cols="50" rows="2" id="date1" dir="rtl"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo Arabe($jour); echo" ";

echo "$row[mois_a] ";

echo ConverLettre($annee,$dir_date);
}

	  
	  ?>
      </textarea>
      </p>
    <p>
      <label></label>
      <input type="button" value="ok" onClick="ok()" />
    </p>
  </form>
  

    <?php }  ?>
	







  
  
  </p>
</div>

  <?php    }else{ ?> 
  
  Vous n'avez pas le droit de voir cette page
  <?php } ?>
  
