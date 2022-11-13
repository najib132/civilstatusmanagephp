<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>




<?php 
error_reporting(E_ALL ^ E_NOTICE); 

$base = "mejji";

$_SERVER['HTTP_HOST']=="localhost";

 $serveur = "localhost";
 $login = "root";           $pass = "";


$id=@mysql_connect($serveur,$login,$pass) or die ("<br>Probl&egrave;me connexion au serveur <br>".mysql_error());

@mysql_select_db("$base") or die ("<br>Probl&egrave;me de selection de la base<br>".mysql_error());
/*

ALTER TABLE `deces`  ADD `heure_a_d` VARCHAR(80) NOT NULL AFTER `date_d_hlf`,  ADD `minute_a_d` VARCHAR(80) NOT NULL AFTER `heure_a_d`,  ADD `heure_f_d` VARCHAR(80) NOT NULL AFTER `minute_a_d`,  ADD `minute_f_d` VARCHAR(80) NOT NULL AFTER `heure_f_d`;

ALTER TABLE `origine_deces`  ADD `heure_a_d` VARCHAR(80) NOT NULL AFTER `date_d_hlf`,  ADD `minute_a_d` VARCHAR(80) NOT NULL AFTER `heure_a_d`,  ADD `heure_f_d` VARCHAR(80) NOT NULL AFTER `minute_a_d`,  ADD `minute_f_d` VARCHAR(80) NOT NULL AFTER `heure_f_d`;


ALTER TABLE `civil`.`deces` DROP PRIMARY KEY, ADD PRIMARY KEY (`code`, `annee_declaration`, `partie`);
ALTER TABLE `civil`.`origine_deces` DROP PRIMARY KEY, ADD PRIMARY KEY (`code`, `annee_declaration`, `partie`);
ALTER TABLE `civil`.`origine_naissance` DROP PRIMARY KEY, ADD PRIMARY KEY (`code`, `annee_declaration`, `partie`);
ALTER TABLE `civil`.`naissance` DROP PRIMARY KEY, ADD PRIMARY KEY (`code`, `annee_declaration`, `partie`);


DROP TABLE `registre`;

ALTER TABLE `mention_p`  ADD `partie` TINYINT(1) UNSIGNED NOT NULL;

UPDATE `mention_p` SET `partie` = '1';

ALTER TABLE `pj`  ADD `partie` TINYINT(1) UNSIGNED NOT NULL AFTER `code`;

UPDATE `pj` SET `partie` = '1' ;

ALTER TABLE `utilisateurs`  ADD `dir_date_h` VARCHAR(1) NOT NULL AFTER `dir_date`;


ALTER TABLE `naissance`  ADD `signature` TINYINT(1) UNSIGNED NOT NULL AFTER `officier_a`,  ADD `delegation_a` VARCHAR(60) NOT NULL AFTER `signature`,  ADD `delegation` VARCHAR(60) NOT NULL AFTER `delegation_a`;

ALTER TABLE `origine_naissance`  ADD `signature` TINYINT(1) UNSIGNED NOT NULL AFTER `officier_a`,  ADD `delegation_a` VARCHAR(60) NOT NULL AFTER `signature`,  ADD `delegation` VARCHAR(60) NOT NULL AFTER `delegation_a`;

ALTER TABLE `origine_deces`  ADD `signature` TINYINT(1) UNSIGNED NOT NULL AFTER `officier_a`,  ADD `delegation_a` VARCHAR(60) NOT NULL AFTER `signature`,  ADD `delegation` VARCHAR(60) NOT NULL AFTER `delegation_a`;

ALTER TABLE `deces`  ADD `signature` TINYINT(1) UNSIGNED NOT NULL AFTER `officier_a`,  ADD `delegation_a` VARCHAR(60) NOT NULL AFTER `signature`,  ADD `delegation` VARCHAR(60) NOT NULL AFTER `delegation_a`;

ALTER TABLE `utilisateurs`  ADD `delegation` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,  ADD `delegation_a` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ;
*/



////////////////////////////////////////////////// وضابط//////////////////////////////////////


		$Requete3 = "select officier_a,annee_declaration,code,partie from naissance   ";
		
		mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

while($row3!="") {

$chaine= strstr ($row3[officier_a],"وضابط");

if($chaine!="") {
$result_string = substr("$row3[officier_a]",0,strpos($row3[officier_a],"وضابط"));

//وضابط الحالة المدنية    و ضابط الحالة المدنية
 $delegation=str_replace("وضابط الحالة المدنية","",$chaine);

$Requete =  "UPDATE naissance SET  `delegation_a`='$delegation', `officier_a`='$result_string' WHERE `code`='$row3[code]' and `annee_declaration`='$row3[annee_declaration]' and `partie`='$row3[partie]' ; "; 

mysql_query("SET NAMES 'UTF8' ");
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

}
	$row3 = mysql_fetch_array($result3);
}






///////////////////////////////////////////

////////////////////////////////////////////////// ضابط//////////////////////////////////////


		$Requete3 = "select officier_a,annee_declaration,code,partie from naissance   ";
		
		mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

while($row3!="") {

$chaine= strstr ($row3[officier_a],"ضابط");

if($chaine!="") {

$result_string = substr("$row3[officier_a]",0,strpos($row3[officier_a],"ضابط"));

//وضابط الحالة المدنية    و ضابط الحالة المدنية
 $delegation=str_replace("ضابط الحالة المدنية","",$chaine);

$Requete =  "UPDATE naissance SET  `delegation_a`='$delegation', `officier_a`='$result_string' WHERE `code`='$row3[code]' and `annee_declaration`='$row3[annee_declaration]' and `partie`='$row3[partie]' ; "; 

mysql_query("SET NAMES 'UTF8' ");
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 
}

	$row3 = mysql_fetch_array($result3);
}



///////////////////////////////////////////////////////Francais

		$Requete3 = "select officier,annee_declaration,code,partie from naissance   ";
		
		mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

while($row3!="") {

$chaine= strstr (addslashes($row3[officier]),"officier");

if($chaine!="") {
$result_string = substr(addslashes($row3[officier]),0,strpos(addslashes($row3[officier]),"officier"));

//وضابط الحالة المدنية    و ضابط الحالة المدنية
 $delegation=str_replace("officier de l'etat civil","",$chaine);

$Requete =  "UPDATE naissance SET  `delegation`='$delegation', `officier`='$result_string' WHERE `code`='$row3[code]' and `annee_declaration`='$row3[annee_declaration]' and `partie`='$row3[partie]' ; "; 

mysql_query("SET NAMES 'UTF8' ");
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

}
	$row3 = mysql_fetch_array($result3);
}






///////////////////////////////////////////

////////////////////////////////////////////////// ضابط//////////////////////////////////////

/*
		$Requete3 = "select officier_a,annee_declaration,code,partie from naissance   ";
		
		mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

while($row3!="") {

$chaine= strstr ($row3[officier_a],"ضابط");

if($chaine!="") {

$result_string = substr("$row3[officier_a]",0,strpos($row3[officier_a],"ضابط"));

//وضابط الحالة المدنية    و ضابط الحالة المدنية
 $delegation=str_replace("ضابط الحالة المدنية","",$chaine);

$Requete =  "UPDATE naissance SET  `delegation_a`='$delegation', `officier_a`='$result_string' WHERE `code`='$row3[code]' and `annee_declaration`='$row3[annee_declaration]' and `partie`='$row3[partie]' ; "; 

mysql_query("SET NAMES 'UTF8' ");
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 
}

	$row3 = mysql_fetch_array($result3);
}

*/


/*
DROP TRIGGER IF EXISTS `update_naissance`//
CREATE TRIGGER `update_naissance` BEFORE UPDATE ON `naissance`
 FOR EACH ROW BEGIN


DECLARE n_d1 INT; DECLARE n_hors_d1 INT; DECLARE t_d1 INT; DECLARE t_hors_d1 INT; DECLARE d_etrange1 INT;


IF NEW.deces_naissance=0 AND OLD.deces_naissance=4 THEN

SET @n_hors_d1 :=(SELECT n_hors_d from administration); 
SET @n_d1 :=(SELECT n_d from administration); 

UPDATE  `administration` SET `n_d` = 1+@n_d1, `n_hors_d`=-1+@n_hors_d1 ;

END IF;


IF NEW.deces_naissance=4 AND OLD.deces_naissance=0 THEN

SET @n_hors_d1 :=(SELECT n_hors_d from administration); 
SET @n_d1 :=(SELECT n_d from administration); 

UPDATE  `administration` SET `n_d` = -1+@n_d1, `n_hors_d`=1+@n_hors_d1 ;

END IF;



IF NEW.deces_naissance=2 AND OLD.deces_naissance=3 THEN

SET @t_hors_d1 :=(SELECT t_hors_d from administration); 
SET @t_d1 :=(SELECT t_d from administration); 

UPDATE  `administration` SET `t_d` = 1+@t_d1, `t_hors_d`=-1+@t_hors_d1 ;

END IF;


IF NEW.deces_naissance=3 AND OLD.deces_naissance=2 THEN

SET @t_hors_d1 :=(SELECT t_hors_d from administration); 
SET @t_d1 :=(SELECT t_d from administration); 

UPDATE  `administration` SET `t_d` = -1+@t_d1, `t_hors_d`=1+@t_hors_d1 ;

END IF;


IF NEW.deces_naissance=2 AND OLD.deces_naissance=0 THEN

SET @n_d1 :=(SELECT n_d from administration); 
SET @t_d1 :=(SELECT t_d from administration); 

UPDATE  `administration` SET `t_d` = 1+@t_d1, `n_d`=-1+@n_d1 ;

END IF;



IF NEW.deces_naissance=3 AND OLD.deces_naissance=0 THEN

SET @n_d1 :=(SELECT n_d from administration); 
SET @t_hors_d1 :=(SELECT t_hors_d from administration); 

UPDATE  `administration` SET `t_hors_d` = 1+@t_hors_d1, `n_d`=-1+@n_d1 ;

END IF;


IF NEW.sex!=OLD.sex THEN

UPDATE  `mention_p` SET `sex` = NEW.sex WHERE `annee_declaration`=OLD.annee_declaration AND `code`=OLD.code and `deces_naissance`=0 

and `date` >= NEW.date_n ;
END IF;


END
//


ALTER TABLE `deces` CHANGE `partie` `partie` CHAR(1) NOT NULL;
ALTER TABLE `origine_deces` CHANGE `partie` `partie` CHAR(1) NOT NULL;
ALTER TABLE `origine_naissance` CHANGE `partie` `partie` CHAR(1) NOT NULL;
ALTER TABLE `naissance` CHANGE `partie` `partie` CHAR(1) NOT NULL;
ALTER TABLE `mention_p` CHANGE `partie` `partie` CHAR(1) NOT NULL;
ALTER TABLE `pj` CHANGE `partie` `partie` CHAR(1) NOT NULL;


///////////////// TOUS

ALTER TABLE `utilisateurs`  ADD `adresse_p` VARCHAR(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,  ADD `adresse_p_a` VARCHAR(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,  ADD `adresse_m` VARCHAR(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,  ADD `adresse_m_a` VARCHAR(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,  ADD `adresse_d` VARCHAR(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,  ADD `adresse_d_a` VARCHAR(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,  ADD `residant` VARCHAR(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,  ADD `residant_a` VARCHAR(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

*/
echo "<div align=\"center\"><span class=\"style9\">La mise &agrave; jour est r&eacute;ussi</a>"; 



?>


<body>
</body>
</html>
