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
   

 include"accesclient1.php";
if ($permission==securite2($tim2)) { //include("div.php");  


?>

<?php 		  

$valider=$_POST["valider"];
if ($valider!="تأكيد") { ?>




<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      



   <style type="text/css">
<!--
.style39 {font-size: 18px}
.style41 {font-size: 16px; }
-->
   </style>
</head>
<body>




<p>



<?php 

 
$Requete3 = "select adresse_d_a,adresse_m_a,adresse_p_a,residant_a, delegation_a,annee,annee_h,partie,officier_a,lien_a,dir_date,prof_p_a,prof_m_a, mois, mois_a,dir_date_h from utilisateurs  where `id`='".$idf_m."'  ";
mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);




?>
</p>
<p align="center">&nbsp;</p>
<div align="center">

  <form name="form1" method="post" action="">
    <table width="90%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2"><div align="center" class="style39">
          <input name="annee" type="text" id="annee" maxlength="4" value="<?php echo $row[annee] ?>">
        </div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style41">السنة الميلادية</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center" class="style39">
          <label>
          <input name="annee_h" type="text" id="annee_h" maxlength="4" value="<?php echo $row[annee_h] ?>">
          </label>
        </div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style41">السنة الهجرية</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center" class="style39">
            <input name="partie" type="text" id="partie" maxlength="1" value="<?php echo $row[partie] ?>">
        </div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style41">الجزء -- رقم السجل </div></td>
      </tr>
      <tr>
        <td><div align="center">
          <select name="mois_a" id="mois_a">
		  


            <option value="<?php echo $row[mois] ?>"><?php 
			
			
			   	$Requete3 = "select mois,mois_arabe_a from mois where `mois`='".$row[mois]."' ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rof = mysql_fetch_array($result3);
			echo $rof[mois_arabe_a];
			
			 ?></option>


		  
            <?php   
			   	$Requete3 = "select mois,mois_arabe_a from mois  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$rowd = mysql_fetch_array($result3);
//echo $idr;
?>
            <option value="<?php echo $rowd[0]; ?>"><?php echo $rowd[1]; }?></option>
          </select>
        </div></td>
        <td><div align="center">
          <select name="mois" id="mois">
		  

            <option value="<?php echo $row[mois] ?>"><?php 
			
			
			   	$Requete3 = "select mois,mois_a from mois where `mois`='".$row[mois]."' ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rowff = mysql_fetch_array($result3);
			echo $rowff[mois_a];
			
			 ?></option>


            <?php   
			   	$Requete3 = "select mois,mois_a from mois  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$rowf = mysql_fetch_array($result3);
//echo $idr;
?>
            <option value="<?php echo $rowf[0]; ?>"><?php echo $rowf[1]; }?></option>
          </select>
        </div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style41">الشهر</div></td>
      </tr>
      <tr>
        <td><div align="center" class="style39"> من اليمين إلى اليسار
          <input name="dir_date" type="radio" value="f" <?php if($row[dir_date]=="f") echo "checked" ?>>
        </div></td>
        <td><div align="center" class="style39">
            <label> من اليسار إلى اليمين
              <input name="dir_date" type="radio" value="a"  <?php if($row[dir_date]=="a") echo "checked" ?>>
            </label>
        </div></td>
        <td width="13%" bgcolor="#EFEFEF"><div align="center">الميلادي</div></td>
        <td width="20%" rowspan="2" bgcolor="#EFEFEF"><div align="center"><span class="style41">كتابة التاريخ بالحروف</span></div></td>
      </tr>
      <tr>
        <td width="33%"><div align="center" class="style39">
          من اليمين إلى اليسار 
              <input name="dir_date_h" type="radio" value="f" <?php if($row[dir_date_h]=="f") echo "checked" ?>>
        </div></td>
        <td width="34%"><div align="center" class="style39">
          <label>
          من اليسار إلى اليمين 
          <input name="dir_date_h" type="radio" value="a"  <?php if($row[dir_date_h]=="a") echo "checked" ?>>
          </label>
        </div></td>
        <td bgcolor="#EFEFEF"><div align="center" class="style41">الهجري</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center" class="style39">
          <input name="prof_p_a" type="text" id="prof_p_a" value="<?php echo $row[prof_p_a] ?>" dir="rtl">
        </div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style41">حرفة الأب</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center" class="style39">
            <input name="adresse_p_a" type="text" id="adresse_p_a" value="<?php echo $row[adresse_p_a] ?>" dir="rtl">
        </div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style41">مكان ازدياد الأب</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center" class="style39">
          <input name="prof_m_a" type="text" id="prof_m_a" value="<?php echo $row[prof_m_a] ?>" dir="rtl">
        </div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style41">حرفة الأم</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center" class="style39">
            <input name="adresse_m_a" type="text" id="adresse_m_a" value="<?php echo $row[adresse_m_a] ?>" dir="rtl">
        </div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style41">مكان ازدياد الأم</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center" class="style39">
            <input name="residant_a" type="text" id="residant_a" value="<?php echo $row[residant_a] ?>" dir="rtl">
        </div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style41">الساكنان ب</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><span class="style39">
          <input name="lien_a" type="text" id="lien_a" value="<?php echo $row[lien_a] ?>" dir="rtl">
        </span></div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style41">صلة المصرح بالمولود</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><span class="style39">
            <input name="adresse_d_a" type="text" id="adresse_d_a" value="<?php echo $row[adresse_d_a] ?>" dir="rtl">
        </span></div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style41">محل سكنى المصرح</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <textarea name="officier_a" cols="35" rows="4" id="officier_a" dir="rtl"><?php echo $row[officier_a] ;  ?></textarea>
        </div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center"><span class="style41"><span class="style19 ">من طرفنا نحن </span></span></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><span class="style39"></span><span class="style39">
          <input name="delegation" type="text" id="delegation" value="<?php echo $row[delegation_a] ?>" dir="rtl">
        </span></div></td>
        <td colspan="2" bgcolor="#EFEFEF"><div align="center" class="style41"><span class="style19 ">و ضابط الحالة المدنية</span></div></td>
      </tr>
    </table>
    <p>
      <label></label>
      <input name="valider" type="submit" id="valider" onClick="ok()" value="تأكيد" />
      <?php }else
	
{

 $annee=$_POST["annee"];
 $annee_h=$_POST["annee_h"];
  $dir_date=$_POST["dir_date"];
  $dir_date_h=$_POST["dir_date_h"];
 $prof_p_a=$_POST["prof_p_a"];
 $prof_m_a=$_POST["prof_m_a"];
 
  $lien_a=$_POST["lien_a"];
  $officier_a=$_POST["officier_a"];
  $mois=$_POST["mois"];
  $mois_a=$_POST["mois_a"];
 $partie=$_POST["partie"];
$delegation=addslashes($_POST["delegation"]);

  $adresse_p_a=$_POST["adresse_p_a"];
  $adresse_m_a=$_POST["adresse_m_a"];
  
    $adresse_d_a=$_POST["adresse_d_a"];
	
	  $residant_a=$_POST["residant_a"];



 $Requete =  " UPDATE utilisateurs SET `annee`='$annee', `annee_h`='$annee_h', `officier_a`='$officier_a', `lien_a`='$lien_a', `prof_p_a`='$prof_p_a', `prof_m_a`='$prof_m_a', `mois_a`='$mois_a', `mois`='$mois', `dir_date`='$dir_date', `partie`='$partie' , `dir_date_h`='$dir_date_h', `delegation_a`='$delegation', `adresse_p_a`='$adresse_p_a', `adresse_m_a`='$adresse_m_a', `adresse_d_a`='$adresse_d_a', `residant_a`='$residant_a' where `id`='$idf_m' ; "; 
mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 
	
include"aces1.php";
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";

		echo "<a href=\"prepare.php\">&#1585;&#1580;&#1608;&#1593;</a>";


}

?>
    </p>
  </form>
  
</div>

  <?php    }else{ ?> 
  
  Vous n'avez pas le droit de voir cette page
  <?php } ?>
  
