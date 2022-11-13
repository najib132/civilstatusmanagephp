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


 $Requete3 = "select annee,annee_h, mois,mois_a from utilisateurs  where `id`='".$idf_m."'  ";
mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result3);

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
	window.close();
}
</SCRIPT>


  <form name="form1" method="get" action="">
    <table width="363" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="42%" bgcolor="#EFEFEF"><div align="center">
          <input name="jour" type="text" id="jour" size="4" maxlength="2">
          </div></td>
        <td width="33%" bgcolor="#EFEFEF"><div align="center">
          <label>
          <select name="mois" id="mois">
            <option value="<?php echo $rox[mois_a] ?>">
            <?php 
			
			
			   	$Requete3 = "select mois_arabe from mois where `mois`='".$rox[mois_a]."' ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rof = mysql_fetch_array($result3);
			echo $rof[mois_arabe];
			
			 ?>
            </option>
            <?php   
			   	$Requete3 = "select mois,mois_arabe from mois  ";
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
          <label></label>
          <input name="annee" type="text" id="annee" value="<?php 
   echo $rox[annee_h];	  
		  ?>" size="7" maxlength="4">
        </div></td>
      </tr>
    </table>
    
    <p>
      <input name="modif" type="hidden" id="modif" value="<?php if($ch=="") echo $_GET["modif"]; else echo $ch; ?>">
      <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">
      <input name="valider" type="submit" id="valider" value="تحويل التاريخ إلى حروف"/>
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

	  ?></textarea>
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
	window.close();
}
</SCRIPT>

	
	
	
  </p>
  <form name="form1" method="get" action="">
<table width="363" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="42%" bgcolor="#EFEFEF"><div align="center">
      <input name="jour" type="text" id="jour" size="5" maxlength="2">
    </div></td>
    <td width="33%" bgcolor="#EFEFEF"><div align="center">
      <label>
        <select name="mois" id="mois">
          <option value="<?php echo $rox[mois] ?>">
            <?php 
			
			
			   	$Requete3 = "select mois,mois_f from mois where `mois`='".$rox[mois]."' ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rof = mysql_fetch_array($result3);
			echo $rof[mois_f];
			
			 ?>
            </option>
          <?php   
			   	$Requete3 = "select mois,mois_f from mois  ";
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
      <label></label>
      <input name="annee" type="text" id="annee" size="10" maxlength="4" value="<?php 
		  
		  
		  echo $rox[annee];
		  
		  
		  ?>">
    </div></td>
  </tr>
</table>
<p>
      <input name="modif" type="hidden" id="modif" value="<?php if($ch=="") echo $_GET["modif"]; else echo $ch; ?>">
      <input name="convert" type="hidden" id="convert" value="<?php echo $convert; ?>">
      <input name="valider" type="submit" id="valider" value="تحويل التاريخ إلى حروف"/>
    </p>
    <p>
      <textarea name="date" cols="50" rows="2" id="date" dir="rtl"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo int2str($jour); echo" ";

			   	$Requete3 = "select mois_f from mois where `mois`='".$mois."'  ";
					mysql_query("SET NAMES 'UTF8' ");
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row = mysql_fetch_array($result3);


echo "$row[mois_f] ";

echo int2str($annee);
}
	  
	  ?></textarea>
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
          <label></label>
          <input name="jour" type="text" id="jour" size="4" maxlength="2">
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
      <textarea name="date1" cols="50" rows="2" id="date1" dir="rtl"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo Arabe($jour); echo" ";


			   	$Requete3 = "select mois_a from mois where `mois`='".$mois."'  ";
					mysql_query("SET NAMES 'UTF8' ");
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row = mysql_fetch_array($result3);



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
	
	window.opener.document.getElementById('<?php echo $_GET["modif1"]; ?>').value=document.getElementById('date1').value;
	window.opener.document.getElementById('<?php echo $_GET["modif2"]; ?>').value=document.getElementById('annee_h').value;
	window.close();
}
</SCRIPT>


  <form name="form1" method="get" action="">
    <table width="363" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="42%" bgcolor="#EFEFEF"><div align="center">
            <select name="annee" id="annee">
              <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=1 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
              <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
              <?php 
$debut=$row[0]-1;
$fin=$row[0]-70;
$i=$debut;
while($i > $fin) {
?>
              <option value="<?php echo $i; ?>"><?php echo $i; $i=$i-1; } ?></option>
            </select>
        </div></td>
        <td width="33%" bgcolor="#EFEFEF"><div align="center">
            <label>
            <select name="mois" id="select2">
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
            <select name="jour" id="select4">
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04</option>
              <option>05</option>
              <option>06</option>
              <option>07</option>
              <option>08</option>
              <option>09</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
            </select>
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
    </p>
    <p><?php echo $jour; ?> / <?php echo $mois ?> / &nbsp;<?php echo $annee; ?></p>
    <p>
      <label>
      <input name="annee_h" type="text" id="annee_h" size="10" maxlength="4" value="<?php echo $annee ?>">
      </label>
    </p>
    <p>
      <textarea name="date1" cols="50" rows="2" id="date1" dir="rtl"><?php 
	  
if ($valider=="تحويل التاريخ إلى حروف")

{

echo Arabe($jour); echo" ";


			   	$Requete3 = "select mois_arabe_a from mois where `mois`='".$mois."'  ";
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
      <label></label>
      <input type="button" value="ok" onClick="ok()" />
    </p>
  </form>
  
 <?php } ?>
  


  
  
  </p>
</div>

  <?php    }else{ ?> 
  
  Vous n'avez pas le droit de voir cette page
  <?php } ?>
  
