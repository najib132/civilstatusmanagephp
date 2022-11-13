<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);      include"conn/connexion.php";


?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      




  <?php //MALE DASSN DELA

$deces_naissance=5;
$secteur=7;
$annee=2014;
$sex="F";
$date_n="1979-05-11";

/*
$i=1;

while($i < 3000)

{
$Requete3 = "

INSERT INTO `deces`(`annee_declaration`, `code`, `partie`, `annee_h`, `cin`, `mois`, `secteur`, `nom`, `nom_a`, `prenom`, `prenom_a`, `lieu`, `lieu1`, `sex`, `jumeau`, `heure`, `date_n`, `date_mlf`, `date_mla`, `date_hlf`, `date_hla`, `idf`, `num_conach`, `nationalite_p`, `nationalite_pa`, `nom_f_p`, `nom_a_p`, `lieu_p`, `lieu1_p`, `date_n_p`, `date_plf_p`, `date_pla_p`, `date_hlf_p`, `date_hla_p`, `adresse`, `adresse_a`, `adresse_personne`, `adresse_personne_a`, `nationalite_m`, `nationalite_ma`, `nationalite_personne`, `nationalite_personne_a`, `nom_f_m`, `nom_a_m`, `lieu_m`, `lieu1_m`, `date_n_m`, `date_mlf_m`, `date_mla_m`, `date_hlf_m`, `date_hla_m`, `officier`, `officier_a`, `prof_personne`, `prof_personne_a`, `prof_p`, `prof_p_a`, `prof_m`, `prof_m_a`, `resp_declaration`, `resp_declaration_a`, `age`, `lien`, `lien_a`, `date_jugement`, `num_jugement`, `date_n_d`, `date_mlf_d`, `date_mla_d`, `date_hlf_d`, `date_hla_d`, `deces_naissance`, `ville_deces`, `ville_deces_a`,`province`,`rang`) 

VALUES ('$annee', '$i', '1', '1435', 'PA 80026', '04', '$secteur', 'nom', 'الإسم العائلي', 'Prénom ', 'الإسم الشخصي ', 'Tinghir', 'تنغير', '$sex', '0', '11:41', '$date_n', 'treize janvier mille neuf cent quatre-vingt dix-sept ', 'أربعة عشر يناير ألف وتسعمائة وستة وتسعون ', 'En lettre français', 'بالحروف العربية', '1', '', 'marocaine', 'مغربية', 'nom et prénom ', 'الإسم الكامل ', 'Tinghir', ' تنغير', '1995-03-07', 'En lettre français', 'بالحروف العربية', 'En lettre français', 'بالحروف العربية', 'Logement des parents', 'محل سكنى الأبوين بالعربية', 'Adresse de décédé', 'عنوان المتوفى', 'marocaine', 'مغربية', 'marocaine', 'مغربية', 'nom et prénom ', 'الإسم الكامل ', 'Tinghir', 'تنغير', '1993-03-02', 'En lettre français', 'بالحروف العربية', 'En lettre français', 'بالحروف العربية', 'Qiffar Mohamed', 'قفار محمد', 'Profession du décécé', 'مهنة المتوفى', 'Profession', 'الحرفة', 'Profession', 'الحرفة', 'nom et prénom', 'إسم المصرح ', '45', 'Lien', 'صلته ', '', '', '2014-03-11', 'onze mars deux mille quatorze', 'إحدى عشر مارس ألفان وأربعة عشر ', 'douze Rabia al awal mille quatre cent trente cinq ', 'إحدى عشر ربيع الأول ألف وأربعمائة وخمسة وثلاثون ', '$deces_naissance', 'Agadir Idaoutanane', 'أكادير اداوتنان','26','2')  ;  ";
									 
									 
mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());



$i++;
}

*/


$i=1;

while($i < 3000)

{

$Requete3 = "
INSERT INTO `naissance`(`annee_declaration`,
                                    `code`,
									`partie`,
									`annee_h`,
									`cin`,
									`mois`,
									`nom`,
									`nom_a`,
									`prenom`,
									`prenom_a`,
									`lieu`,
									`lieu1`,
									`sex`,
									`jumeau`,
									`heure`,
									`date_n`,
									`date_mlf`,
									`date_mla`,
									`date_hlf`,
									`date_hla`,
									`idf`,
						            `num_conach`,
						            `nationalite_p`,
									`nationalite_pa`,
									`nom_f_p`,
									`nom_a_p`,
									`lieu_p`,
									`lieu1_p`,
									`date_n_p`,
									`date_plf_p`,
									`date_pla_p`,
									`date_hlf_p`,
									`date_hla_p`,
								    `adresse`,
									`adresse_a`,
								
									`nationalite_m`,
									`nationalite_ma`,
									`nationalite_personne`,
									`nationalite_personne_a`,
									`nom_f_m`,
									`nom_a_m`,
									`lieu_m`,
									`lieu1_m`,
									`date_n_m`,
									`date_mlf_m`,
									`date_mla_m`,
									`date_hlf_m`,
									`date_hla_m`, 
					                `officier`,
									`officier_a`,
									`prof_p`,
									`prof_p_a`,
									`prof_m`,
									`prof_m_a`,
									`resp_declaration`,
									`resp_declaration_a`,
									`age`,
									`lien`,
									`lien_a`,
									 `deces_naissance`)                                                                                                                                                                                  VALUES ('2000', '$i', '2', '1434', 'PA 52145', '04', 'nom', 'الإسم العائلي', 'Prénom ', 'الإسم الشخصي ', 'Tinghir', 'تنغير', 'M', '0', '11:41', '2014-03-31', 'treize janvier mille neuf cent quatre-vingt dix-sept ', 'أربعة عشر يناير ألف وتسعمائة وستة وتسعون ', 'En lettre français', 'بالحروف العربية', '1', '', 'marocaine', 'مغربية', 'nom et prénom ', 'الإسم الكامل ', 'Tinghir', ' تنغير', '1995-03-07', 'En lettre français', 'بالحروف العربية', 'En lettre français', 'بالحروف العربية', 'Logement des parents', 'محل سكنى الأبوين بالعربية', 'marocaine', 'مغربية', 'marocaine', 'مغربية', 'nom et prénom ', 'الإسم الكامل ', 'Tinghir', 'تنغير', '1993-03-02', 'En lettre français', 'بالحروف العربية', 'En lettre français', 'بالحروف العربية', 'Qiffar Mohamed', 'قفار محمد', 'Profession', 'الحرفة', 'Profession', 'الحرفة', 'nom et prénom', 'إسم المصرح ', '34', 'Lien', 'صلته ','0');  ";
mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());



$i++;
}










////////////MALE HORS DELAI



$i=7000;

while($i < 9855)

{

$Requete3 = "
INSERT INTO `naissance`(`annee_declaration`,
                                    `code`,
									`partie`,
									`annee_h`,
									`cin`,
									`mois`,
									`nom`,
									`nom_a`,
									`prenom`,
									`prenom_a`,
									`lieu`,
									`lieu1`,
									`sex`,
									`jumeau`,
									`heure`,
									`date_n`,
									`date_mlf`,
									`date_mla`,
									`date_hlf`,
									`date_hla`,
									`idf`,
						            `num_conach`,
						            `nationalite_p`,
									`nationalite_pa`,
									`nom_f_p`,
									`nom_a_p`,
									`lieu_p`,
									`lieu1_p`,
									`date_n_p`,
									`date_plf_p`,
									`date_pla_p`,
									`date_hlf_p`,
									`date_hla_p`,
								    `adresse`,
									`adresse_a`,
								
									`nationalite_m`,
									`nationalite_ma`,
									`nationalite_personne`,
									`nationalite_personne_a`,
									`nom_f_m`,
									`nom_a_m`,
									`lieu_m`,
									`lieu1_m`,
									`date_n_m`,
									`date_mlf_m`,
									`date_mla_m`,
									`date_hlf_m`,
									`date_hla_m`, 
					                `officier`,
									`officier_a`,
									`prof_p`,
									`prof_p_a`,
									`prof_m`,
									`prof_m_a`,
									`resp_declaration`,
									`resp_declaration_a`,
									`age`,
									`lien`,
									`lien_a`,
									 `deces_naissance`)                                                                                                                                                                                  VALUES ('2000', '$i', '2', '1435', 'PA 52145', '04', 'nom', 'الإسم العائلي', 'Prénom ', 'الإسم الشخصي ', 'Tinghir', 'تنغير', 'M', '0', '11:41', '2014-03-31', 'treize janvier mille neuf cent quatre-vingt dix-sept ', 'أربعة عشر يناير ألف وتسعمائة وستة وتسعون ', 'En lettre français', 'بالحروف العربية', '1', '', 'marocaine', 'مغربية', 'nom et prénom ', 'الإسم الكامل ', 'Tinghir', ' تنغير', '1995-03-07', 'En lettre français', 'بالحروف العربية', 'En lettre français', 'بالحروف العربية', 'Logement des parents', 'محل سكنى الأبوين بالعربية', 'marocaine', 'مغربية', 'marocaine', 'مغربية', 'nom et prénom ', 'الإسم الكامل ', 'Tinghir', 'تنغير', '1993-03-02', 'En lettre français', 'بالحروف العربية', 'En lettre français', 'بالحروف العربية', 'Qiffar Mohamed', 'قفار محمد', 'Profession', 'الحرفة', 'Profession', 'الحرفة', 'nom et prénom', 'إسم المصرح ', '34', 'Lien', 'صلته ','4');  ";
mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());



$i++;
}











/////////////////////FEMME EN DALAI




$i=9855;

while($i < 15000)

{

$Requete3 = "
INSERT INTO `naissance`(`annee_declaration`,
                                    `code`,
									`partie`,
									`annee_h`,
									`cin`,
									`mois`,
									`nom`,
									`nom_a`,
									`prenom`,
									`prenom_a`,
									`lieu`,
									`lieu1`,
									`sex`,
									`jumeau`,
									`heure`,
									`date_n`,
									`date_mlf`,
									`date_mla`,
									`date_hlf`,
									`date_hla`,
									`idf`,
						            `num_conach`,
						            `nationalite_p`,
									`nationalite_pa`,
									`nom_f_p`,
									`nom_a_p`,
									`lieu_p`,
									`lieu1_p`,
									`date_n_p`,
									`date_plf_p`,
									`date_pla_p`,
									`date_hlf_p`,
									`date_hla_p`,
								    `adresse`,
									`adresse_a`,
								
									`nationalite_m`,
									`nationalite_ma`,
									`nationalite_personne`,
									`nationalite_personne_a`,
									`nom_f_m`,
									`nom_a_m`,
									`lieu_m`,
									`lieu1_m`,
									`date_n_m`,
									`date_mlf_m`,
									`date_mla_m`,
									`date_hlf_m`,
									`date_hla_m`, 
					                `officier`,
									`officier_a`,
									`prof_p`,
									`prof_p_a`,
									`prof_m`,
									`prof_m_a`,
									`resp_declaration`,
									`resp_declaration_a`,
									`age`,
									`lien`,
									`lien_a`,
									 `deces_naissance`)                                                                                                                                                                                  VALUES ('2000', '$i', '2', '1435', 'PA 52145', '04', 'nom', 'الإسم العائلي', 'Prénom ', 'الإسم الشخصي ', 'Tinghir', 'تنغير', 'F', '0', '11:41', '2014-03-31', 'treize janvier mille neuf cent quatre-vingt dix-sept ', 'أربعة عشر يناير ألف وتسعمائة وستة وتسعون ', 'En lettre français', 'بالحروف العربية', '1', '', 'marocaine', 'مغربية', 'nom et prénom ', 'الإسم الكامل ', 'Tinghir', ' تنغير', '1995-03-07', 'En lettre français', 'بالحروف العربية', 'En lettre français', 'بالحروف العربية', 'Logement des parents', 'محل سكنى الأبوين بالعربية', 'marocaine', 'مغربية', 'marocaine', 'مغربية', 'nom et prénom ', 'الإسم الكامل ', 'Tinghir', 'تنغير', '1993-03-02', 'En lettre français', 'بالحروف العربية', 'En lettre français', 'بالحروف العربية', 'Qiffar Mohamed', 'قفار محمد', 'Profession', 'الحرفة', 'Profession', 'الحرفة', 'nom et prénom', 'إسم المصرح ', '34', 'Lien', 'صلته ','0');  ";
mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());



$i++;
}










//////////FEMME HORS DELAI



$i=17999;

while($i < 19999)

{

$Requete3 = "
INSERT INTO `naissance`(`annee_declaration`,
                                    `code`,
									`partie`,
									`annee_h`,
									`cin`,
									`mois`,
									`nom`,
									`nom_a`,
									`prenom`,
									`prenom_a`,
									`lieu`,
									`lieu1`,
									`sex`,
									`jumeau`,
									`heure`,
									`date_n`,
									`date_mlf`,
									`date_mla`,
									`date_hlf`,
									`date_hla`,
									`idf`,
						            `num_conach`,
						            `nationalite_p`,
									`nationalite_pa`,
									`nom_f_p`,
									`nom_a_p`,
									`lieu_p`,
									`lieu1_p`,
									`date_n_p`,
									`date_plf_p`,
									`date_pla_p`,
									`date_hlf_p`,
									`date_hla_p`,
								    `adresse`,
									`adresse_a`,
								
									`nationalite_m`,
									`nationalite_ma`,
									`nationalite_personne`,
									`nationalite_personne_a`,
									`nom_f_m`,
									`nom_a_m`,
									`lieu_m`,
									`lieu1_m`,
									`date_n_m`,
									`date_mlf_m`,
									`date_mla_m`,
									`date_hlf_m`,
									`date_hla_m`, 
					                `officier`,
									`officier_a`,
									`prof_p`,
									`prof_p_a`,
									`prof_m`,
									`prof_m_a`,
									`resp_declaration`,
									`resp_declaration_a`,
									`age`,
									`lien`,
									`lien_a`,
									 `deces_naissance`)                                                                                                                                                                                  VALUES ('2000', '$i', '2', '1435', 'PA 52145', '04', 'nom', 'الإسم العائلي', 'Prénom ', 'الإسم الشخصي ', 'Tinghir', 'تنغير', 'F', '0', '11:41', '2014-03-31', 'treize janvier mille neuf cent quatre-vingt dix-sept ', 'أربعة عشر يناير ألف وتسعمائة وستة وتسعون ', 'En lettre français', 'بالحروف العربية', '1', '', 'marocaine', 'مغربية', 'nom et prénom ', 'الإسم الكامل ', 'Tinghir', ' تنغير', '1995-03-07', 'En lettre français', 'بالحروف العربية', 'En lettre français', 'بالحروف العربية', 'Logement des parents', 'محل سكنى الأبوين بالعربية', 'marocaine', 'مغربية', 'marocaine', 'مغربية', 'nom et prénom ', 'الإسم الكامل ', 'Tinghir', 'تنغير', '1993-03-02', 'En lettre français', 'بالحروف العربية', 'En lettre français', 'بالحروف العربية', 'Qiffar Mohamed', 'قفار محمد', 'Profession', 'الحرفة', 'Profession', 'الحرفة', 'nom et prénom', 'إسم المصرح ', '34', 'Lien', 'صلته ','4');  ";
mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());



$i++;
}





?>



</p>
<p align="center">&nbsp;</p>

