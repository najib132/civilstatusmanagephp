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
$partie=$_GET["partie"]; $table=$_GET["table"];



$anneeNais=$_GET["annee_declaration"];
$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);


		

$table=$_GET["table"];
$partie=$_GET["partie"];


$lien_nom=$_GET["lien_nom"];
$lien_date=$_GET["lien_date"];
$lien=$_GET["lien"];

include"../conn/conversion.php";

 $lien_date=convertDate($lien_date);

	
	
if($table=="naissance" || $table=="deces")
{
$Requete = "select * from $table where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

}


if($table=="attestation")
{

$Requete = "select * from attestation where id = '".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	


///////////////////MISE A JOUR PROFESSION

if($_GET["convert"]!="") {


 $Requetex =  "UPDATE attestation SET   `lien`='$lien', `lien_nom`='$lien_nom', `lien_date_f`='$lien_date'  WHERE `id`='$partie'  ;";
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
.style1 {font-size: 24px}
.style2 {color: #FFFFFF}
.style3 {color: #000000}
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
        <td width="48%"><p style="font-size:25px" class="gras">Attestation de parenté</p>          
        <p class="gras">&nbsp;</p></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td><div align="left">Le président de la<span> </span><?php echo $r['region']  ?>
          <?php 
		echo $r['section']." ";
		?>
        </div></td>
    </tr>
      <tr>
        <td><div align="left"><span>Certifie selon l'enquête effectuée en l'objet, que le(la) nommé(e)    : </span> <span class="gras">
          <?php  echo $row['prenom']." ".$row['nom'] ; ?>
        </span></div></td>
      </tr>
      <tr>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td><div align="left">Né(e) le :<span class="gras"><?php echo $row['date_hlf']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Correspondant à <span class="gras"> : <?php echo $row['date_mlf']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">A : <span class="gras"><?php echo $row['lieu']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Fils (Fille) de :<span class="gras"> <?php echo $row['nom_f_p']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Et de : <span class="gras"><?php echo $row['nom_f_m']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">
          <?php if ($table=="deces") echo "Décédé(e) le : "; ?>
        <span class="gras"><?php echo $row['date_mlf_d']; ?></span></div></td>
      </tr></table>
       <table width="100%">
      <tr><td width="46%"><div align="left">
          <p><span><?php  if($table=="naissance" || $table=="attestation") echo "Acte de naissance N° : "; else echo "Acte de décés N° : "; ?> </span><span class="gras"> <?php
		  
		   echo $row['code'];
		   
		    ?></span></p>
        </div></td>
        <td width="51%" ><div align="left"><span> Année de déclaration : 
          <span class="gras"><?php echo $row["annee_declaration"]; ?></span> </span></div></td>
		
        <td width="3%"></td>
      </tr>
	  
	  
<?php if($table!="attestation") { ?>	  
	  
	  
      <tr>
        <td><div align="left">
               <p>Inscrit(e) au <?php echo  $bureau ?> <span class="gras"><?php echo $r['region']; ?></span>
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
        <td><div align="left">Est <span class="gras"><?php if($_GET["convert"]=="") echo $row[lien]; else echo $lien; ?> </span> de <span class="gras"><?php if($_GET["convert"]=="") echo $row[lien_nom]; else echo $lien_nom; ?></span> Né(e) le <span class="gras"><?php 
		
	if($_GET["convert"]=="") echo convertDate_f($row[lien_date]);	else echo convertDate_f($lien_date); 
		?></span> </div></td>
      </tr><tr>
        <td>&nbsp;</td>
      </tr><tr>
        <td><hr /></td>
      </tr>
    </table>
       <table width="100%">
         <tr>
        <td colspan="2">En foi de quoi la présente attestation est délivrée pour servir et valoir ce que de droit.</td>
        
      </tr>
         <tr>
           <td width="45%">&nbsp;</td>
           <td width="55%">&nbsp;</td>
         </tr>
         <tr>
        <td align="center">Fait à :<?php echo $_SESSION["redaction"]; ?></td>
        <td><p align="left">Le : <span class="gras"><?php echo date("d/m/Y"); ?></span></p></td>
        
      </tr>
      <tr>
        <td align="right"><?php echo $r['resp'] ." de ".$r['region']."  ".$r['section']." ";
		?></td>
		<td>&nbsp;</td>
      </tr>
       </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
