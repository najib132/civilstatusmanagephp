<?php 

error_reporting(E_ALL ^ E_NOTICE); 
$type=$_GET["type"];
?>
<p align="center">&nbsp;</p>
<p align="center"><a href="trigger.php?type=3">Conversion des dates en Fran&ccedil;ais (Naissance) </a></p>
<p align="center">&nbsp;</p>
<p align="center"><a href="trigger.php?type=4">Conversion des dates en Fran&ccedil;ais (D&eacute;c&eacute;s) </a></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><a href="trigger.php?type=1">Assemblage Base de donn&eacute;es </a></p>
<p align="center">
  <?php 

$base = "agouim2";

$_SERVER['HTTP_HOST']=="localhost";

 $serveur = "localhost";
 $login = "root";           $pass = "";


$id=@mysql_connect($serveur,$login,$pass) or die ("<br>Probl&egrave;me connexion au serveur <br>".mysql_error());

@mysql_select_db("$base") or die ("<br>Probl&egrave;me de selection de la base<br>".mysql_error());
?>
</p>
<p>
  
  <?php 
if($type==1) {


		$Requete3 = "select id from utilisateurs order by id desc   ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);
	
	$max=$row3[id]+1;

while($row3!="") {


$Requete =  "UPDATE utilisateurs SET  `id`='$max'  WHERE `id`='$row3[id]' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 




$Requete =  "UPDATE naissance SET  `idf`='$max'  WHERE `idf`='$row3[id]' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

$Requete =  "UPDATE naissance SET  `idf_m`='$max'  WHERE `idf_m`='$row3[id]' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 




$Requete =  "UPDATE origine_naissance SET  `idf`='$max'  WHERE `idf`='$row3[id]' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

$Requete =  "UPDATE origine_naissance SET  `idf_m`='$max'  WHERE `idf_m`='$row3[id]' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 



$Requete =  "UPDATE deces SET  `idf`='$max'  WHERE `idf`='$row3[id]' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

$Requete =  "UPDATE deces SET  `idf_m`='$max'  WHERE `idf_m`='$row3[id]' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 




$Requete =  "UPDATE origine_deces SET  `idf`='$max'  WHERE `idf`='$row3[id]' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

$Requete =  "UPDATE origine_deces SET  `idf_m`='$max'  WHERE `idf_m`='$row3[id]' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


$Requete =  "UPDATE mention_p SET  `idf`='$max'  WHERE `idf`='$row3[id]' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

$Requete =  "UPDATE mention_p SET  `idf_m`='$max'  WHERE `idf_m`='$row3[id]' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 




$max=$max+1;

	$row3 = mysql_fetch_array($result3);
}


}

?>
  
  
  
    <?php 
if($type==3) {

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
	
$jour1=int2str(jourofdate($rox[date_n]));
$mois1=moisofdate($rox[date_n]);  
$annee1=int2str(yearofdate($rox[date_n]));

			   	$Req = "select mois_f from mois where `mois`='".$mois1."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof1 = mysql_fetch_array($res);
	

 $date_d_conv="$jour $rof[mois_f] $annee";
 $date_mlf="$jour1 $rof1[mois_f] $annee1";


$Requete = "UPDATE naissance SET `date_d_mlf`='$date_d_conv', `date_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


$Requete = "UPDATE origine_naissance SET `date_d_mlf`='$date_d_conv', `date_mlf`='$date_mlf' where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 




  	$rox = mysql_fetch_array($result3);

}

}  
 ?>
 
 
 
 
 
 
 
 
 
 
 
 
     <?php 
if($type==4) {

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
  
		$Requete3 = "select annee_declaration,code,partie,date_d,date_n,date_n_d from deces    ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);
	

while($rox!="") {





$jour=int2str(jourofdate($rox[date_d]));
$mois=moisofdate($rox[date_d]);  
$annee=int2str(yearofdate($rox[date_d]));

			   	$Req = "select mois_f from mois where `mois`='".$mois."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof = mysql_fetch_array($res);
	
	
	
	
	
	
	
	
$jour1=int2str(jourofdate($rox[date_n]));
$mois1=moisofdate($rox[date_n]);  
$annee1=int2str(yearofdate($rox[date_n]));

			   	$Req = "select mois_f from mois where `mois`='".$mois1."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof1 = mysql_fetch_array($res);
	


$jour2=int2str(jourofdate($rox[date_n_d]));
$mois2=moisofdate($rox[date_n_d]);  
$annee2=int2str(yearofdate($rox[date_n_d]));

			   	$Req = "select mois_f from mois where `mois`='".$mois2."' ";
	$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rof2 = mysql_fetch_array($res);



 $date_d_conv="$jour $rof[mois_f] $annee";
 $date_mlf="$jour1 $rof1[mois_f] $annee1";
 $date_nd="$jour2 $rof2[mois_f] $annee2";


$Requete = "UPDATE deces SET `date_d_mlf`='$date_d_conv', `date_mlf`='$date_mlf', `date_mlf_d`='$date_nd'  where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


$Requete = "UPDATE origine_deces SET `date_d_mlf`='$date_d_conv', `date_mlf`='$date_mlf', `date_mlf_d`='$date_nd'  where `annee_declaration`='".$rox[annee_declaration]."' and `code`='".$rox[code]."' and `partie`='".$rox[partie]."' ; "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 




  	$rox = mysql_fetch_array($result3);

}

}  
 ?>

  
</p>
