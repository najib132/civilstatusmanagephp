<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);      include"conn/connexion.php";


?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      




  <?php //MALE DASSN DELA
  /*
  $annee=1970;

while($annee < 2015)

{

$deces_naissance=4;
$secteur=7;
$sex="M";
$rang=1;
$province=27;
$date_n="$annee-03-28";


$i=2100;

while($i < 2500)

{

$Requete3 = "
INSERT INTO `naissance`(`annee_declaration`, `code`, `partie`, `annee_h`, `deces_naissance`, `idf`, `mois`, `sex`, `province`,`rang`,`date_n`) VALUES ('$annee','$i','1','1435','$deces_naissance','1','04','$sex','$province','$rang','$date_n');";
mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());


$i++;
}

$annee++;
} */


$Requete3 = " UPDATE naissance SET `nom`='nom', `nom_a`='الإسم العائلي', `prenom`='Prénom ', `prenom_a`='الإسم الشخصي ', `lieu`='Agadir Idaoutanane', `lieu1`='أكادير اداوتنان', `jumeau`='0', `heure`='13:49', `date_mlf`='dix-neuf mars deux mille quatorze', `date_mla`='تسعة عشر مارس ألفان وأربعة عشر ', `date_hlf`='huit Mouharram mille quatre cent trente cinq ', `date_hla`='ثمانية محرم ألف وأربعمائة وخمسة وثلاثون ',`nationalite_personne_a`='مغربية', `nationalite_personne`='marocaine', `prof_p`='Profession', `prof_p_a`='الحرفة', `nationalite_p`='marocaine', `nationalite_pa`='مغربية', `nom_f_p`='nom et prénom ', `nom_a_p`='الإسم الكامل ', `lieu_p`='Agadir Idaoutanane', `lieu1_p`='أكادير اداوتنان', `date_n_p`='1970-04-22', `date_plf_p`='En lettre français', `date_pla_p`='بالحروف العربية', `date_hlf_p`='En lettre français', `date_hla_p`='بالحروف العربية',`prof_m`='Profession', `prof_m_a`='الحرفة', `adresse`='Logement des parents', `adresse_a`='محل سكنى الأبوين بالعربية', `nationalite_m`='marocaine', `nationalite_ma`='مغربية', `nom_f_m`='nom et prénom ', `nom_a_m`='الإسم الكامل ', `lieu_m`='Agadir Idaoutanane', `lieu1_m`='أكادير اداوتنان', `date_n_m`='1980-04-22', `date_mlf_m`='En lettre français', `date_mla_m`='بالحروف العربية', `date_hlf_m`='En lettre français', `date_hla_m`='بالحروف العربية',  `officier`='Qiffar Mohamed', `officier_a`='قفار محمد', `ville_deces`='', `ville_deces_a`='', `resp_declaration`='nom et prénom', `resp_declaration_a`='إسم المصرح بالمولود', `age`='66', `lien`='Lien', `date_d`='2014-04-11', `date_d_mlf`='onze mai deux mille quatorze', `date_d_mla`='إحدى عشر أبريل ألفان وأربعة عشر ', `date_d_hlf`='En lettre français', `date_d_hla`='بالحروف العربية', `nationalite_d`='marocaine', `nationalite_d_a`='مغربية', `prof_lien`='Profession du déclarant', `prof_lien_a`='مهنة المصرح', `lien_a`='صلته بالمولود'   ;";
mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());






?>



</p>
<p align="center">&nbsp;</p>

