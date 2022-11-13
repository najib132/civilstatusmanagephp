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


 $Requetex =  "UPDATE attestation SET   `lien_a`='$lien', `lien_nom_a`='$lien_nom', `lien_date`='$lien_date'  WHERE `id`='$partie'  ;";
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

$section=$_SESSION["section"];
$section1=$_SESSION["section1"];   

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
  <table  width="97%" align="center">
    <tr>
      <td width="55%"><div align="left" class="style4"><?php echo $_SESSION["idf"]; ?></div>
          <div align="center"></div></td>
      <td width="45%"><div align="center" class="gras">المملكة المغربية</div></td>
    </tr>
    <tr>
      <td width="55%">&nbsp;</td>
      <td width="45%"><div align="center" class="gras">وزارة الداخلية </div></td>
    </tr>
    <tr>
      <td width="55%">&nbsp;</td>
      <td width="45%"><div align="center" class="gras">عمالة او اقليم
        : <?php echo $province_a; ?></div></td>
    </tr>
    <tr>
      <td width="55%">&nbsp;</td>
      <td width="45%"><div align="center" class="gras"><?php echo $r['region1']; ?>
              <?php 
		echo $r['section1']." ";
		?>
      </div></td>
    </tr>
    <tr>
      <td width="55%"><div align="right"></div></td>
      <td width="45%"><div align="center" class="gras"><?php echo $bureau_a; ?></div></td>
    </tr>
    <tr>
      <td width="55%"><div align="right"></div></td>
      <td width="45%"><div align="center" class="gras"></div></td>
    </tr>
  </table>
  <table width="100%" bordercolor="#000000">
      <tr>
        <td width="48%"><p style="font-size:25px" class="gras">شهادة القرابة</p>          
        <p class="gras">&nbsp;</p></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td><div align="right"><span>يشهد الموقع اسفله </span> <?php echo  $r['resp_a'] ." "; ?> <?php echo $_SESSION["section2"]." "; ?>
            <?php 
		echo $r['section1']." ";
		?>
        </div></td>
        <td>&nbsp;</td>
    </tr>
      <tr>
        <td><div align="right">بناء ا على البحث الذى اجري من طرف عون السلطة المحلية </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>ان السيد(ة) <span class="gras"><?php  echo $row['prenom_a']." ".$row['nom_a'] ; ?></span></span>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">
          <span>المولود(ة) في <span class="gras"><?php echo $row['date_hla']; ?></span></span>
</div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>الموافق ل<span class="gras"> <?php echo $row['date_mla']; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>ب<span class="gras"> <?php echo $row['lieu1']; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right"><span>من والده(ها) <span class="gras"> <?php echo $row['nom_a_p']; ?></span></span></div></td>
        <td></td>
      </tr>
      <tr>
        <td><div align="right"><span>و والدته(ها) <span class="gras"><?php echo $row['nom_a_m']; ?></span></span></div></td><td></td>
      </tr>
      <tr>
        <td><div align="right"><?php if ($row['date_mla_d']!="") echo "توفي يوم"; ?><span class="gras">&nbsp;<?php echo $row['date_mla_d']; ?></span></div></td><td></td>
      </tr></table>
       <table width="100%">
      <tr>
        <td ><div align="center"><span> المؤرخ ب 
        <span class="gras"><?php echo $row["annee_declaration"]; ?></span> </span></div></td>
		
        <td><div align="right">
          <p><span><?php  if($table=="naissance" || $table=="attestation") echo "رسم ولادته(ها) عدد"; else echo "رسم وفاته(ها) عدد"; ?> </span><span class="gras"> <?php
		  
		   echo $row['code'];
		   
		    ?></span></p>
        </div></td><td></td>
      </tr>
	  
	  
<?php if($table!="attestation") { ?>	  
	  
	  
      <tr>
        <td ><div align="center">
          <p> عمالة او اقليم     
          <span class="gras"><?php echo $province_a; ?></span> </p>
        </div></td>
		
		
        <td ><div align="right">
          <p><span>المسجل(ة)  ب<?php echo $bureau_a ?> </span>ب<span class="gras"><?php echo $r['region1']; ?></span> <span class="gras"><?php echo $r[section1]; ?></span></p>
        </div></td><td></td>
      </tr>
	  
	  
	<?php } ?>	  
  
	  
	  
	  
      
    </table>

       <table width="100%">
      <tr>
        <td><div align="right">أنه <span class="gras"><?php if($_GET["convert"]=="") echo $row[lien_a]; else echo $lien; ?></span> <span class="gras"><?php if($_GET["convert"]=="") echo $row[lien_nom_a]; else echo $lien_nom; ?></span> المزداد يوم <span class="gras"><?php 
		
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
           <td>&nbsp;</td>
           <td><div align="right">و قد سلمت  هذه الشهادة للإدلاء بها عند الحاجة</div></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td width="51%"><div align="center"><span class="gras"><?php echo date("Y/m/d"); ?></span> : بتاريخ </div></td>
           <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
           <td width="49%"><div align="right">حرر ب : <span class="gras"><?php echo $_SESSION["redaction_a"]; ?></span></div></td>
         </tr>
         <tr>
           <td width="51%"><div align="right">
               <p><?php echo $r['resp_a'] ." ".$_SESSION["section2"]." ".$r['section1']." ";
		?> </p>
           </div></td>
           <td width="49%"><div align="right"></div></td>
         </tr>
       </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
