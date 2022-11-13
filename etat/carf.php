<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];
 include"../accesclient1.php";    
 
 if ($permission==securite2($tim2))
        { 
           $entreprise=$_SESSION["entreprise"];
		
$code=$_GET["code"];
$partie=$_GET["partie"];$anneeNais=$_GET["annee_declaration"];
$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);	

	




$table=$_GET["table"];
$partie=$_GET["partie"];
$prof=$_GET["prof"];
$convert=$_GET["convert"];

	
if($table=="naissance")
{
$Requete = "select * from naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

$adresse=$_GET["adresse"];
 $Requetex =  "UPDATE naissance SET  `adresse_personne`='$adresse', `prof`='".$prof."'  where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
									 mysql_query("SET NAMES 'UTF8' ");

$resultx = @mysql_query($Requetex,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


}


if($table=="attestation")
{

include"../conn/conversion.php";

 


$Requete = "select * from attestation where id = '".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

if($_GET["convert"]!="") {
///////////////////MISE A JOUR PROFESSION

$adresse=$_GET["adresse"];

 $Requetex =  "UPDATE attestation SET  `prof`='$prof', `adresse_personne`='$adresse'  WHERE `id`='$partie'  ;";
									 mysql_query("SET NAMES 'UTF8' ");

$resultx = @mysql_query($Requetex,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 


}

}






$off=$_SESSION["off"];
$off1=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];$mentionMD="Néant";
$mentionMD_a="لاشيء";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">          <title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/><link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/>


<style type="text/css">
<!--
.gras {
	font-weight: bold;
}
.gras {
	font-weight: bold;
	text-align: center;
}
.style4 {font-size: 10px}
-->
</style>
</head>

<body>

<div align="right">
  <table  width="100%" align="center">
    <tr>
      <td width="29%" align="center"><div align="left">ROYAUME DU MAROC</div></td>
      <td width="40%"><div align="center"></div></td>
    </tr>
    <tr>
      <td width="29%" align="center"><div align="left">MINISTERE DE L'INTERIEUR</div></td>
      <td width="40%"><div align="center"></div></td>
    </tr>
    <tr>
      <td width="29%" align="center"><div align="left">Province ou préfecture de <span class="gras"><?php echo $province; ?></span></div></td>
      <td width="40%"><div align="center"></div></td>
    </tr>
    <tr>
      <td width="29%" align="center"><div align="left"><?php echo $r['region']; ?> : <span class="gras">
          <?php 
		echo $r['section'];
		?>
      </span></div></td>
      <td width="40%"><div align="left"></div></td>
    </tr>
    <tr>
      <td width="29%" align="center"><div align="left"><span class="gras"><?php echo $bureau; ?></span></div></td>
      <td width="40%"><div align="left"></div></td>
    </tr>
  </table>
  <table  width="97%" align="center">
      <tr>
        <td width="55%"><div align="left" class="style4"></div></td>
        <td width="45%"><div align="right" class="gras"><span class="style4"><?php echo $_SESSION["idf"]; ?></span></div></td>
      </tr></table>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td width="48%"><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px"> Certificat administratif relatif au fiancé </span></p>          <p class="gras">&nbsp;</p></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr><td><span>Le président de la </span><?php echo $r['region']  ?>
          <?php 
		echo $r['section']." ";
		?></td>
    </tr>
      <tr>
        <td><span>Certifie selon l'enquête effectuée en l'objet, que le nommé    : </span> <span class="gras">
        <?php  echo $row['prenom']." ".$row['nom'] ; ?>
        </span></td>
      </tr>
      <tr>
        <td>Né le <span class="gras"><?php echo $row['date_hlf']; ?></span></td>
      </tr>
      <tr><td>Correspondant à <span class="gras"> <?php echo $row['date_mlf']; ?></span></td>
      </tr>
      <tr><td><span>A<span class="gras"> <?php echo $row['lieu']; ?></span></span></td>
      </tr>
      <tr>
        <td>Fils de <span class="gras"> <?php echo $row['nom_f_p']; ?></span></td>
      </tr>
      <tr><td>Et de <span class="gras"><?php echo $row['nom_f_m']; ?></span></td>
      </tr>
      <tr>
        <td>Domicilié à <span class="gras">
        <?php if($_GET["convert"]=="") echo $row['adresse_personne']; else echo $_GET["adresse"]; ?>
        </span></td>
      </tr>
      <tr>
        <td>Profession : <span class="gras">
          <?php if($_GET["convert"]=="") echo $row['prof']; else echo $_GET["prof"]; ?>
        </span></td>
      </tr></table>
       <table width="100%">
         <tr>
        <td width="49%"><div align="left">
               <p><span>
                 <?php  if($table=="naissance" || $table=="attestation") echo "Acte de naissance N°: ";  ?>
                 </span><span class="gras">
                 <?php
		  
		   echo $row['code'];
		   
		    ?>
                 </span></p>
           </div></td>
           <td width="49%"><div align="left"><span> Année de déclaration :<span class="gras"><?php echo $row["annee_declaration"]; ?></span> </span></div></td>
           <td width="2%"></td>
         </tr>
         <?php if($table!="attestation") { ?>
         <tr>
        <td><div align="left">
               <p>Inscrit au <?php echo  $bureau ?> <span class="gras"><?php echo $r['region']; ?></span>
                 <?php 
		echo $r['section']." ";
		?>
</p>
           </div></td>
           <td ><div align="left">
               <p>Province ou préfecture de <span class="gras"><?php echo $province; ?></span></p>
           </div></td>
           <td></td>
         </tr>
         <?php } ?>
       </table>
       <table width="100%">
      <tr>
        <td width="37%" >&nbsp;</td>
        <td width="34%">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center"><p>Célibataire --- Divorcé --- Veuf</p></td>
      </tr>
      <tr>
        <td>En foi de quoi la présente attestation est délivrée pour servir et valoir ce que de droit.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">Fait à :<?php echo $_SESSION["redaction"]; ?></td>
        <td><p align="left">le : <span class="gras"><?php echo date("d/m/Y"); ?></span></p></td>
        
      </tr>
      <tr>
        <td align="right"><?php echo $r['resp'] ." de ".$r['region']." ".$r['section']." ";
		?></td>
		<td>&nbsp;</td>
      </tr>
    </table><table width="100%">
      
    </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
