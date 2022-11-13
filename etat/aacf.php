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
 $Requetex =  "UPDATE naissance SET  `adresse_personne_a`='$adresse', `prof_a`='".$prof."'  where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
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

 $Requetex =  "UPDATE attestation SET  `prof_a`='$prof', `adresse_personne_a`='$adresse'  WHERE `id`='$partie'  ;";
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
        <td width="48%"><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px"> شهادة ادارية تتعلق بالمخطوبة </span></p>          <p class="gras">&nbsp;</p></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td><div align="right"><span>يشهد الموقع اسفله </span> <?php echo  $r['resp_a'] ." "; ?> <?php echo $_SESSION["section2"]." "; ?>
            <?php 
		echo $r['section1']." ";
		?>
        </div></td>
        <td>(1)</td>
    </tr>
      <tr>
        <td><div align="right">
          <span>بناء على البحث الذى اجري ب <?php echo $r['region1']; ?> <span class="gras">
          <?php 
		echo $r['section1']." ";
		?>
          </span> </span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>ان السيدة <span class="gras"><?php echo $row['prenom_a']." ".$row['nom_a'] ; ?></span></span>
        </div></td>
        <td>(2)</td>
      </tr>
      <tr>
        <td><div align="right">
          <span>المولودة في <span class="gras"><?php echo $row['date_hla']; ?></span></span>
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
        <td><div align="right">
          <span>من والدها<span class="gras"> <?php echo $row['nom_a_p']; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>و والدتها<span class="gras"> <?php echo $row['nom_a_m']; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>و الساكنة ب <span class="gras">
          <?php if($_GET["convert"]=="") echo $row['adresse_personne_a']; else echo $_GET["adresse"]; ?>
          </span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>مهنتها <span class="gras"><?php if($_GET["convert"]=="") echo $row['prof_a']; else echo $_GET["prof"]; ?></span></span>
        </div></td>
        <td>(3)</td>
      </tr></table>
       <table width="100%">
         <tr>
           <td width="30%" ><div align="center"><span> المؤرخ ب <span class="gras"><?php echo $row["annee_declaration"]; ?></span> </span></div></td>
           <td width="60%"><div align="right">
               <p><span>
                 <?php  if($table=="naissance" || $table=="attestation") echo "رسم ولادتها عدد"; else echo "رسم وفاته(ها) عدد"; ?>
                 </span><span class="gras">
                 <?php
		  
		   echo $row['code'];
		   
		    ?>
                 </span></p>
           </div></td>
           <td width="10%"></td>
         </tr>
         <?php if($table!="attestation") { ?>
         <tr>
           <td ><div align="center">
               <p> عمالة او اقليم <span class="gras"><?php echo $province_a; ?></span> </p>
           </div></td>
           <td ><div align="right">
               <p><span>المسجلة ب<?php echo $bureau_a ?> </span>ب<span class="gras"><?php echo $r['region1']; ?></span> <span class="gras"><?php echo $r[section1]; ?></span></p>
           </div></td>
           <td></td>
         </tr>
         <?php } ?>
       </table>
       <table width="100%">
      <tr>
        <td width="29%" >&nbsp;</td>
        <td width="37%" >&nbsp;</td>
        <td width="34%">&nbsp;</td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td ><span> (4)  عازبة- مطلقة- ارملة                         </span></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td ><p><span>وقد سلمت لها هذه الشهادة قصد ابرام عقد الزواج </span></p></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td ><p align="right">في<span class="gras"> <?php echo date("Y/m/d"); ?></span></p></td>
        <td align="center">حرر ب : <span class="gras"><?php echo $_SESSION["redaction_a"]; ?></span></td>
        <td ></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td>امضاء</td>
		<td>&nbsp;</td>
      </tr>
    </table><table width="100%">
      <tr>
        <td>&nbsp;</td>
      </tr><tr>
        <td>&nbsp;</td>
      </tr><tr>
        <td><hr /></td>
      </tr>
    </table>
  <table ><tr><td align="right"> الاسم الكامل لرئيس المجلس الجماعي و صفته
    </td><td>(1)</td></tr><tr><td align="right">الاسم الشخصي و العائلي  للخاطبة
    </td><td>(2)</td></tr><tr><td align="right">تحديد الحرفة بالتدقيق  وعدم العبارة موظف مثلا
    </td><td>(3)</td></tr><tr><td align="right"> يشطب على ما لا فائدة منه                                                  
    </td><td>(4)</td></tr></table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
