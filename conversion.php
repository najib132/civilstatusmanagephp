<?php 

error_reporting(E_ALL ^ E_NOTICE); 
$type=$_GET["type"];
?>
<?php 

$base = "beni_razine";

$_SERVER['HTTP_HOST']=="localhost";

 $serveur = "localhost";
 $login = "root";           $pass = "";


$id=@mysql_connect($serveur,$login,$pass) or die ("<br>Probl&egrave;me connexion au serveur <br>".mysql_error());

@mysql_select_db("$base") or die ("<br>Probl&egrave;me de selection de la base<br>".mysql_error());
?>


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

include"conn/conversion.php";

if($type==1)
{
  
		$Requete3 = "select annee_declaration,code,partie,date_d,date_n,date_n_p,date_n_m from naissance    ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);
	

while($rox!="") {

$jour=int2str(jourofdate($rox[date_d]));
$mois=moisofdate($rox[date_d]);  
$annee=int2str(yearofdate($rox[date_d]));

			   	$Req = "select mois_f from mois where `mois`='".$mois."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof = mysql_fetch_array($res);
	
	
 $date_mlf="$jour $rof[mois_f] $annee";


$Requete = "UPDATE naissance SET `date_d_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_d_mlf`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


$Requete = "UPDATE origine_naissance SET `date_d_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_d_mlf`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

  	$rox = mysql_fetch_array($result3);
}

} 


if($type==2)
{
  
		$Requete3 = "select annee_declaration,code,partie,date_d,date_n,date_n_p,date_n_m from naissance    ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);
	

while($rox!="") {

$jour=int2str(jourofdate($rox[date_n]));
$mois=moisofdate($rox[date_n]);  
$annee=int2str(yearofdate($rox[date_n]));

			   	$Req = "select mois_f from mois where `mois`='".$mois."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof = mysql_fetch_array($res);
	
	
 $date_mlf="$jour $rof[mois_f] $annee";


$Requete = "UPDATE naissance SET `date_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_mlf`=''; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


$Requete = "UPDATE origine_naissance SET `date_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_mlf`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

  	$rox = mysql_fetch_array($result3);
}

} 



if($type==3)
{
  
		$Requete3 = "select annee_declaration,code,partie,date_d,date_n,date_n_p,date_n_m from naissance    ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);
	

while($rox!="") {

$jour=int2str(jourofdate($rox[date_n_p]));
$mois=moisofdate($rox[date_n_p]);  
$annee=int2str(yearofdate($rox[date_n_p]));

			   	$Req = "select mois_f from mois where `mois`='".$mois."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof = mysql_fetch_array($res);
	
	
 $date_mlf="$jour $rof[mois_f] $annee";


$Requete = "UPDATE naissance SET `date_plf_p`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_plf_p`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


$Requete = "UPDATE origine_naissance SET `date_plf_p`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_plf_p`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

  	$rox = mysql_fetch_array($result3);
}

} 





if($type==4)
{
  
		$Requete3 = "select annee_declaration,code,partie,date_d,date_n,date_n_p,date_n_m from naissance    ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);
	

while($rox!="") {

$jour=int2str(jourofdate($rox[date_n_m]));
$mois=moisofdate($rox[date_n_m]);  
$annee=int2str(yearofdate($rox[date_n_m]));

			   	$Req = "select mois_f from mois where `mois`='".$mois."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof = mysql_fetch_array($res);
	
	
 $date_mlf="$jour $rof[mois_f] $annee";


$Requete = "UPDATE naissance SET `date_mlf_m`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_mlf_m`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


$Requete = "UPDATE origine_naissance SET `date_mlf_m`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_mlf_m`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

  	$rox = mysql_fetch_array($result3);
}

} 




if($type==5)
{
  
		$Requete3 = "select annee_declaration,code,partie,date_jugement from naissance    ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);
	

while($rox!="") {

$jour=int2str(jourofdate($rox[date_jugement]));
$mois=moisofdate($rox[date_jugement]);  
$annee=int2str(yearofdate($rox[date_jugement]));

			   	$Req = "select mois_f from mois where `mois`='".$mois."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof = mysql_fetch_array($res);
	
	
 $date_mlf="$jour $rof[mois_f] $annee";


$Requete = "UPDATE naissance SET `date_j_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_j_mlf`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


$Requete = "UPDATE origine_naissance SET `date_j_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_j_mlf`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

  	$rox = mysql_fetch_array($result3);
}

} 



if($type==6)
{
  
		$Requete3 = "select annee_declaration,code,partie,date_d from deces    ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);
	

while($rox!="") {

$jour=int2str(jourofdate($rox[date_d]));
$mois=moisofdate($rox[date_d]);  
$annee=int2str(yearofdate($rox[date_d]));

			   	$Req = "select mois_f from mois where `mois`='".$mois."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof = mysql_fetch_array($res);
	
	
 $date_mlf="$jour $rof[mois_f] $annee";


$Requete = "UPDATE deces SET `date_d_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_d_mlf`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


$Requete = "UPDATE origine_deces SET `date_d_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_d_mlf`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

  	$rox = mysql_fetch_array($result3);
}

} 




if($type==7)
{
  
		$Requete3 = "select annee_declaration,code,partie,date_n from deces    ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);
	

while($rox!="") {

$jour=int2str(jourofdate($rox[date_n]));
$mois=moisofdate($rox[date_n]);  
$annee=int2str(yearofdate($rox[date_n]));

			   	$Req = "select mois_f from mois where `mois`='".$mois."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof = mysql_fetch_array($res);
	
	
 $date_mlf="$jour $rof[mois_f] $annee";


$Requete = "UPDATE deces SET `date_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_mlf`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


$Requete = "UPDATE origine_deces SET `date_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_mlf`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

  	$rox = mysql_fetch_array($result3);
}

} 



if($type==8)
{
  
		$Requete3 = "select annee_declaration,code,partie,date_n_d from deces    ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);
	

while($rox!="") {

$jour=int2str(jourofdate($rox[date_n_d]));
$mois=moisofdate($rox[date_n_d]);  
$annee=int2str(yearofdate($rox[date_n_d]));

			   	$Req = "select mois_f from mois where `mois`='".$mois."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof = mysql_fetch_array($res);
	
	
 $date_mlf="$jour $rof[mois_f] $annee";


$Requete = "UPDATE deces SET `date_mlf_d`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_mlf_d`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


$Requete = "UPDATE origine_deces SET `date_mlf_d`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_mlf_d`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

  	$rox = mysql_fetch_array($result3);
}

} 

 
if($type==9)
{
  
		$Requete3 = "select annee_declaration,code,partie,date_jugement from deces    ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);
	

while($rox!="") {

$jour=int2str(jourofdate($rox[date_jugement]));
$mois=moisofdate($rox[date_jugement]);  
$annee=int2str(yearofdate($rox[date_jugement]));

			   	$Req = "select mois_f from mois where `mois`='".$mois."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof = mysql_fetch_array($res);
	
	
 $date_mlf="$jour $rof[mois_f] $annee";


$Requete = "UPDATE deces SET `date_j_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_j_mlf`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


$Requete = "UPDATE origine_deces SET `date_j_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' and `date_j_mlf`='' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

  	$rox = mysql_fetch_array($result3);
}

} 


 
 
 ?>


<div align="center">


            <fieldset style="width:322px">
            <legend class="style39" align="left"> Naissance </legend>


<p align="center"><a href="conversion.php?type=1">Date D&eacute;claration </a></p>
<p align="center"><a href="conversion.php?type=2">Date naissance  </a></p>
<p align="center"><a href="conversion.php?type=3">Date naissance p&egrave;re  </a></p>
<p align="center"><a href="conversion.php?type=4">Date naissance m&egrave;re  </a></p>
<p align="center"><a href="conversion.php?type=5">Date jugement</a></p>
</fieldset>

 
 </div>




<div align="center">


            <fieldset style="width:322px">
            <legend class="style39" align="left"> Décés </legend>


<p align="center"><a href="conversion.php?type=6">Date D&eacute;claration </a></p>
<p align="center"><a href="conversion.php?type=7">Date naissance  </a></p>
<p align="center"><a href="conversion.php?type=8">Date d&eacute;c&eacute;s</a></p>
<p align="center"><a href="conversion.php?type=9">Date jugement</a></p>
</fieldset>

 
 </div>
