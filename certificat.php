<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);      include"conn/connexion.php";

$permission=$_SESSION["permission"];

$pays=$_SESSION["pays"];      
$pays1=$_SESSION["pays1"];  

$ministre=$_SESSION["ministre"];      
$ministre1=$_SESSION["ministre1"];      

$province=$_SESSION["province"];      
$province1=$_SESSION["province1"];      

$annexe=$_SESSION["annexe"];      
$annexe1=$_SESSION["annexe1"];      

   $idf=$_SESSION["idf"];
   
     $section=$_SESSION["section"];      
$section1=$_SESSION["section1"];  
 $region=$_SESSION["region"];  $region1=$_SESSION["region1"];     
   
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) { include("div.php");  


 $annee_declaration = addslashes($_GET["annee_declaration"]);

$code = addslashes($_GET["code"]);
$partie = addslashes($_GET["partie"]);
$table = addslashes($_GET["table"]);


?>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>
<style type="text/css">
<!--
.style1 {font-size: 18px}
.style2 {color: #CCCCCC}
.gras {	font-weight: bold;
}
.gras {	font-weight: bold;
	text-align: center;
}
-->
</style>
      
  <div align="right">
    <table width="20%">
      <tr>
        <td><div align="right">الرقم : <?php echo $code; ?></div></td>
        <td><div align="right">السنة : <?php echo $annee_declaration; ?></div></td>
      </tr>
    </table>
  </div>
  <p></p>

<div align="center">

<?php 


   $Req =  "SELECT date_n,pj,deces_naissance,sex, mort,partie  FROM `$table` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."'  and `partie`='".$partie."'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

	$rox = mysql_fetch_array($res);
	
$deces_naissance=$rox[deces_naissance];
$sex=$rox[sex];
$mort=$rox[mort];

if($sex=="M" && $table=="naissance" && $mort==0 && ($deces_naissance==0 || $deces_naissance==4 || $deces_naissance==2 || $deces_naissance==3)) {

?>






				<fieldset style="width:75%">
				
				          <legend align="right">الوثائق</legend>



  <table width="600" height="456" border="1" cellpadding="0" cellspacing="0">

    <tr><td></td>
      <td><div align="center" class="style1"></div></td>
    </tr>
    <tr><td bgcolor="#CCCCCC" width="50%" align="center">شواهد بالفرنسية</td>
      <td bgcolor="#CCCCCC" width="50%" align="center">شواهد بالعربية </td>
    </tr>
  <tr>
      <td colspan="2" align="center"><div align="center" class="style1"><a href="etat/extrait_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" >A / F نسخة موجزة من رسم الولادة </a>
      </div></td>
    </tr>
      <tr>
      <td align="center"><div align="center" class="style1"><a href="etat/extrait_naissance-f.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > Extrait d'acte de naissance </a> </div></td>
      <td align="center"><span class="style1"><a href="etat/extrait_naissance-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > نسخة موجزة من رسم الولادة </a> </span></td>
    </tr>
      <tr>
	  
      <td align="center"><div align="center" class="style1"><a href="etat/integrale_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">Copie intégrale de l'acte de naissance </a></div></td>
	  
	  
      <td align="center"><span class="style1"><a href="etat/integrale_naissance-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">نسخة كاملة من رسم الولادة </a> </span></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style1"><a href="etat/fiche_declaration_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">المسودة : ورقة التصريح</a></div></td>
    </tr>
    <tr><td></td>
      <td></td>
    </tr>
	<?php if($rox[pj]!="") { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1"><a href="<?php 
	  
	  
	  
	  echo "doc_naissance/$annee_declaration/$rox[partie]/$rox[pj]";
	  
	   ?>.jpg" target="_blank" style="text-decoration:none">الرسم الأصلي(SCAN)</a>
      </div></td>
    </tr>
	
	<?php } else { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1">الرسم الأصلي(SCAN)
      </div></td>
    </tr>
<?php }?>	
	
	
	
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=0" target="_blank" style="text-decoration:none">Certificat de vie individuelle</a></div>
    </div></td>
      <td><div align="center" class="style1"><a href="etat/avi.php?annee_declaration=<?php echo $annee_declaration; ?>&amp;code=<?php echo $code; ?>&amp;partie=<?php echo $partie; ?>&amp;table=<?php echo $table; ?>&amp;convert=0" target="_blank" style="text-decoration:none">شهادة الحياة الفردية</a></div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=2" target="_blank" style="text-decoration:none">Certificat administratif relatif au fiancé</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=2" target="_blank" style="text-decoration:none">شهادة ادارية تتعلق بالخاطب</a></div>
      </div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de parenté</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة القرابة</a></div>
      </div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=6" target="_blank" style="text-decoration:none">Certificat de celibat</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=6" target="_blank" style="text-decoration:none">شهادة العزوبة</a></div>
      </div></td>
    </tr>
    <tr>
      <td><div align="center" class="style1"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">Attestation de Concordance </a></div></td>
      <td><div align="center"><span class="style1" style="font-size:18px"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">شهادة المطابقة </a></span></div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=11&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de continuité de mariage</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=11&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة استمرارية العلاقة الزوجية </a></div>
      </div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=5&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Attestation de monogamie</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=5&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة الزوجة الوحيدة</a></div>
      </div></td>
    </tr>
    <tr><td><div align="center"><span class="style1"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=4&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Attestation de polygamie</a></span></div></td>
      <td><div align="center"><span class="style1"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=4&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة تعدد الزوجات</a></span></div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=9&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de non-mariage</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=9&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة عدم الزواج</a></div>
      </div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=10&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de non-divorce</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=10&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة عدم الطلاق</a></div>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><div align="center" class="style1">
        <div align="right"></div>
      </div></td>
      <td bgcolor="#FFFFFF"><div align="center" class="gras"><a href="bayane.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&sex=<?php echo $rox[sex] ?>&date_n=<?php echo $rox[date_n]; ?>&deces_naissance=0" target="_blank" style="text-decoration:none">البينات الهامشية</a></div></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" colspan="2"><div align="center"><span class="style2">b</span></div></td>
    </tr>
  </table>
  
  <?php } 
  
  if($sex=="F" && $table=="naissance" && $mort==0 && ($deces_naissance==0 || $deces_naissance==4 || $deces_naissance==2 || $deces_naissance==3)) {

  ?>
  
<table width="600" height="456" border="1" cellpadding="0" cellspacing="0">

    <tr><td></td>
      <td><div align="center" class="style1"></div></td>
    </tr>
    <tr><td bgcolor="#CCCCCC" width="50%" align="center">شواهد بالفرنسية</td>
      <td bgcolor="#CCCCCC" width="50%" align="center">شواهد بالعربية </td>
    </tr>
    <tr>
      <td colspan="2" align="center"><div align="center" class="style1"><a href="etat/extrait_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" >A / F نسخة موجزة من رسم الولادة </a> </div></td>
    </tr>
    <tr>
      <td align="center"><div align="center" class="style1"><a href="etat/extrait_naissance-f.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > Extrait d'acte de naissance </a> </div></td>
      <td align="center"><span class="style1"><a href="etat/extrait_naissance-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > نسخة موجزة من رسم الولادة </a> </span></td>
    </tr>
    <tr>
      <td align="center"><div align="center" class="style1"><a href="etat/integrale_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">Copie intégrale de l'acte de naissance </a></div></td>
      <td align="center"><span class="style1"><a href="etat/integrale_naissance-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">نسخة كاملة من رسم الولادة </a> </span></td>
    </tr>
    <tr><td></td>
      <td></td>
    </tr>
	
	
	
	<?php if($rox[pj]!="") { ?>
	
    <tr>
      <td colspan="2" ><div align="center"><span class="style1"><a href="etat/fiche_declaration_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">المسودة : ورقة التصريح</a></span></div></td>
    </tr>
    <tr>
      <td colspan="2" ><div align="center" class="style1"><a href="<?php 
	  
	  
	  
	  echo "doc_naissance/$annee_declaration/$rox[partie]/$rox[pj]";
	  
	   ?>.jpg" target="_blank" style="text-decoration:none">الرسم الأصلي(SCAN)</a>
      </div></td>
    </tr>
	
	<?php } else { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1">الرسم الأصلي(SCAN)
      </div></td>
    </tr>
<?php }?>	
	
	
	
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=0" target="_blank" style="text-decoration:none">Certificat de vie individuelle</a></div>
    </div></td>
      <td><div align="center"><a href="etat/avi.php?annee_declaration=<?php echo $annee_declaration; ?>&amp;code=<?php echo $code; ?>&amp;partie=<?php echo $partie; ?>&amp;table=<?php echo $table; ?>&amp;convert=0" target="_blank" style="text-decoration:none" class="style1">شهادة الحياة الفردية</a></div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=1" target="_blank" style="text-decoration:none">Certificat administratif relatif à la fiancée</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=1" target="_blank" style="text-decoration:none">شهادة ادارية تتعلق بالمخطوبة</a></div>
      </div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de parenté</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة القرابة</a></div>
      </div></td>
    </tr>
    <tr>
      <td><div align="center" class="style1"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">Attestation de Concordance </a></div></td>
      <td><div align="center"><span class="style1" style="font-size:18px"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">شهادة المطابقة </a></span></div></td>
    </tr>
    <tr>
      <td><div align="center" class="style1">
          <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=11&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de continuité de mariage</a></div>
      </div></td>
      <td><div align="center" class="style1">
          <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=11&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة استمرارية العلاقة الزوجية </a></div>
      </div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=6" target="_blank" style="text-decoration:none">Certificat de celibat</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=6" target="_blank" style="text-decoration:none">شهادة العزوبة</a></div>
      </div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=9&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de non-mariage</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=9&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة عدم الزواج</a></div>
      </div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=10&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de non-divorce</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=10&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة عدم الطلاق</a></div>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center"><span class="gras"><a href="bayane.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&sex=<?php echo $rox[sex] ?>&date_n=<?php echo $rox[date_n]; ?>&deces_naissance=0" target="_blank" style="text-decoration:none">البينات الهامشية</a></span></div></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" colspan="2"><div align="center"><span class="style2">b</span></div></td>
    </tr>
  </table>  
  <?php }
  
  
    if($table=="naissance" && $deces_naissance==6 && $sex=="M") {

  ?>
  
  
  
  
<table width="600" height="456" border="1" cellpadding="0" cellspacing="0">

    <tr><td></td>
      <td><div align="center" class="style1"></div></td>
    </tr>
    <tr><td bgcolor="#CCCCCC" width="50%" align="center">شواهد بالفرنسية</td>
      <td bgcolor="#CCCCCC" width="50%" align="center">شواهد بالعربية </td>
    </tr>
    <tr>
      <td colspan="2" align="center"><div align="center" class="style1"><a href="etat/extrait_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" >A / F نسخة موجزة من رسم الولادة </a> </div></td>
    </tr>
    <tr>
      <td align="center"><div align="center" class="style1"><a href="etat/extrait_naissance-f.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > Extrait d'acte de naissance </a> </div></td>
      <td align="center"><span class="style1"><a href="etat/extrait_naissance-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > نسخة موجزة من رسم الولادة </a> </span></td>
    </tr>
    <tr>
      <td align="center"><div align="center" class="style1"><a href="etat/integrale_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">Copie intégrale de l'acte de naissance </a></div></td>
      <td align="center"><span class="style1"><a href="etat/integrale_naissance-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">نسخة كاملة من رسم الولادة </a> </span></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style1"><a href="etat/fiche_declaration_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">المسودة : ورقة التصريح</a></div></td>
    </tr>
    <tr><td></td>
      <td></td>
    </tr>
	
	
	<?php if($rox[pj]!="") { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1">
	  
	  <a href="<?php 
	  
	  
	  
	  echo "doc_naissance/$annee_declaration/$rox[partie]/$rox[pj]";
	  
	   ?>.jpg" target="_blank" style="text-decoration:none">الرسم الأصلي(SCAN)</a>
	  
      </div></td>
    </tr>
	
	<?php } else { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1">الرسم الأصلي(SCAN)
      </div></td>
    </tr>
<?php }?>	
	
	
	
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de parenté</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة القرابة</a></div>
      </div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=6" target="_blank" style="text-decoration:none">Certificat de celibat</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=6" target="_blank" style="text-decoration:none">شهادة العزوبة</a></div>
      </div></td>
    </tr>
    <tr>
      <td><div align="center" class="style1"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">Attestation de Concordance </a></div></td>
      <td><div align="center"><span class="style1" style="font-size:18px"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">شهادة المطابقة </a></span></div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=5&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Attestation de monogamie</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=5&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة الزوجة الوحيدة</a></div>
      </div></td>
    </tr>
    <tr><td><div align="center"><span class="style1"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=4&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Attestation de polygamie</a></span></div></td>
      <td><div align="center"><span class="style1"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=4&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة تعدد الزوجات</a></span></div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=9&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de non-mariage</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=9&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة عدم الزواج</a></div>
      </div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=10&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de non-divorce</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=10&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة عدم الطلاق</a></div>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center"><span class="gras"><a href="bayane.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&sex=<?php echo $rox[sex] ?>&date_n=<?php echo $rox[date_n]; ?>&deces_naissance=0" target="_blank" style="text-decoration:none">البينات الهامشية</a></span></div></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" colspan="2"><div align="center"><span class="style2">b</span></div></td>
    </tr>
  </table>  
    
  

  <?php }
  
  
    if($table=="naissance"  && $sex=="F" && ($deces_naissance==6 || $mort==1)) {

  ?>
  
  
  
  
<table width="600" height="391" border="1" cellpadding="0" cellspacing="0">

    <tr><td></td>
      <td><div align="center" class="style1"></div></td>
    </tr>
    <tr><td bgcolor="#CCCCCC" width="50%" align="center">شواهد بالفرنسية</td>
      <td bgcolor="#CCCCCC" width="50%" align="center">شواهد بالعربية </td>
    </tr>
    <tr>
      <td colspan="2" align="center"><div align="center" class="style1"><a href="etat/extrait_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" >A / F نسخة موجزة من رسم الولادة </a> </div></td>
    </tr>
    <tr>
      <td align="center"><div align="center" class="style1"><a href="etat/extrait_naissance-f.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > Extrait d'acte de naissance </a> </div></td>
      <td align="center"><span class="style1"><a href="etat/extrait_naissance-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > نسخة موجزة من رسم الولادة </a> </span></td>
    </tr>
    <tr>
      <td align="center"><div align="center" class="style1"><a href="etat/integrale_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">Copie intégrale de l'acte de naissance </a></div></td>
      <td align="center"><span class="style1"><a href="etat/integrale_naissance-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">نسخة كاملة من رسم الولادة </a> </span></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style1"><a href="etat/fiche_declaration_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">المسودة : ورقة التصريح</a></div></td>
    </tr>
    <tr><td></td>
      <td></td>
    </tr>
	
	
	<?php if($rox[pj]!="") { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1">
	  
	  <a href="<?php 
	  
	  
	  
	  echo "doc_naissance/$annee_declaration/$rox[partie]/$rox[pj]";
	  
	   ?>.jpg" target="_blank" style="text-decoration:none">الرسم الأصلي(SCAN)</a>
      </div></td>
    </tr>
	
	<?php } else { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1">الرسم الأصلي(SCAN)
      </div></td>
    </tr>
<?php }?>	
	
	
	
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de parenté</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة القرابة</a></div>
      </div></td>
    </tr>
    <tr>
      <td><div align="center" class="style1"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">Attestation de Concordance </a></div></td>
      <td><div align="center"><span class="style1" style="font-size:18px"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">شهادة المطابقة </a></span></div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=6" target="_blank" style="text-decoration:none">Certificat de celibat</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=6" target="_blank" style="text-decoration:none">شهادة العزوبة</a></div>
      </div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=9&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de non-mariage</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=9&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة عدم الزواج</a></div>
      </div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=10&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de non-divorce</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=10&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة عدم الطلاق</a></div>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center"><span class="gras"><a href="bayane.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&sex=<?php echo $rox[sex] ?>&date_n=<?php echo $rox[date_n]; ?>&deces_naissance=0" target="_blank" style="text-decoration:none">البينات الهامشية</a></span></div></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" colspan="2"><div align="center"><span class="style2">b</span></div></td>
    </tr>
  </table>  
  
  
  
<?php }
  
  
    if($table=="naissance"  && $sex=="M" && $deces_naissance==6 && $mort==1) {

  ?>
<table width="600" height="456" border="1" cellpadding="0" cellspacing="0">	
  <tr>
    <td></td>
    <td><div align="center" class="style1"></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC" width="50%" align="center">شواهد بالفرنسية</td>
    <td bgcolor="#CCCCCC" width="50%" align="center">شواهد بالعربية </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><div align="center" class="style1"><a href="etat/extrait_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" >A / F نسخة موجزة من رسم الولادة </a> </div></td>
  </tr>
  <tr>
    <td align="center"><div align="center" class="style1"><a href="etat/extrait_naissance-f.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > Extrait d'acte de naissance </a> </div></td>
    <td align="center"><span class="style1"><a href="etat/extrait_naissance-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > نسخة موجزة من رسم الولادة </a> </span></td>
  </tr>
  <tr>
    <td align="center"><div align="center" class="style1"><a href="etat/integrale_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">Copie intégrale de l'acte de naissance </a></div></td>
    <td align="center"><span class="style1"><a href="etat/integrale_naissance-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">نسخة كاملة من رسم الولادة </a> </span></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center" class="style1"><a href="etat/fiche_declaration_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">المسودة : ورقة التصريح</a></div></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  
  
  
	<?php if($rox[pj]!="") { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1"><a href="<?php 
	  
	  
	  
	  echo "doc_naissance/$annee_declaration/$rox[partie]/$rox[pj]";
	  
	   ?>.jpg" target="_blank" style="text-decoration:none">الرسم الأصلي(SCAN)</a>
      </div></td>
    </tr>
	
	<?php } else { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1">الرسم الأصلي(SCAN)
      </div></td>
    </tr>
<?php }?>	
	
  
  
  
  
  <tr>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de parenté</a></div>
    </div></td>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة القرابة</a></div>
    </div></td>
  </tr>
  <tr>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=6" target="_blank" style="text-decoration:none">Certificat de celibat</a></div>
    </div></td>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=6" target="_blank" style="text-decoration:none">شهادة العزوبة</a></div>
    </div></td>
  </tr>
  <tr>
    <td><div align="center" class="style1"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">Attestation de Concordance </a></div></td>
    <td><div align="center"><span class="style1" style="font-size:18px"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">شهادة المطابقة </a></span></div></td>
  </tr>
  <tr>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=5&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Attestation de monogamie</a></div>
    </div></td>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=5&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة الزوجة الوحيدة</a></div>
    </div></td>
  </tr>
  <tr>
    <td><div align="center"><span class="style1"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=4&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Attestation de polygamie</a></span></div></td>
    <td><div align="center"><span class="style1"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=4&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة تعدد الزوجات</a></span></div></td>
  </tr>
  <tr>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=9&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de non-mariage</a></div>
    </div></td>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=9&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة عدم الزواج</a></div>
    </div></td>
  </tr>
  <tr>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=10&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de non-divorce</a></div>
    </div></td>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=10&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة عدم الطلاق</a></div>
    </div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"><span class="gras"><a href="bayane.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&sex=<?php echo $rox[sex] ?>&date_n=<?php echo $rox[date_n]; ?>&deces_naissance=0" target="_blank" style="text-decoration:none">البينات الهامشية</a></span></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC" colspan="2"><div align="center"><span class="style2">b</span></div></td>
  </tr>
</table>

<?php }
  
  
    if($table=="naissance"  && $sex=="M" && $mort==1) {

  ?>
<table width="600" height="456" border="1" cellpadding="0" cellspacing="0">	
  <tr>
    <td></td>
    <td><div align="center" class="style1"></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC" width="50%" align="center">شواهد بالفرنسية</td>
    <td bgcolor="#CCCCCC" width="50%" align="center">شواهد بالعربية </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><div align="center" class="style1"><a href="etat/extrait_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" >A / F نسخة موجزة من رسم الولادة </a> </div></td>
  </tr>
  <tr>
    <td align="center"><div align="center" class="style1"><a href="etat/extrait_naissance-f.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > Extrait d'acte de naissance </a> </div></td>
    <td align="center"><span class="style1"><a href="etat/extrait_naissance-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > نسخة موجزة من رسم الولادة </a> </span></td>
  </tr>
  <tr>
    <td align="center"><div align="center" class="style1"><a href="etat/integrale_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">Copie intégrale de l'acte de naissance </a></div></td>
    <td align="center"><span class="style1"><a href="etat/integrale_naissance-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">نسخة كاملة من رسم الولادة </a> </span></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center" class="style1"><a href="etat/fiche_declaration_naissance.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">المسودة : ورقة التصريح</a></div></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  
  
  
	<?php if($rox[pj]!="") { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1"><a href="<?php 
	  
	  
	  
	  echo "doc_naissance/$annee_declaration/$rox[partie]/$rox[pj]";
	  
	   ?>.jpg" target="_blank" style="text-decoration:none">الرسم الأصلي(SCAN)</a>
      </div></td>
    </tr>
	
	<?php } else { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1">الرسم الأصلي(SCAN)
      </div></td>
    </tr>
<?php }?>	
	
  
  
  
  
  <tr>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de parenté</a></div>
    </div></td>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة القرابة</a></div>
    </div></td>
  </tr>
  <tr>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">Attestation de Concordance </a></div>
    </div></td>
    <td><div align="center"><span class="style1" style="font-size:18px"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">شهادة المطابقة </a></span></div></td>
  </tr>
  <tr>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=6" target="_blank" style="text-decoration:none">Certificat de celibat</a></div>
    </div></td>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=6" target="_blank" style="text-decoration:none">شهادة العزوبة</a></div>
    </div></td>
  </tr>
  <tr>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=5&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Attestation de monogamie</a></div>
    </div></td>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=5&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة الزوجة الوحيدة</a></div>
    </div></td>
  </tr>
  <tr>
    <td><div align="center"><span class="style1"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=4&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Attestation de polygamie</a></span></div></td>
    <td><div align="center"><span class="style1"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=4&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة تعدد الزوجات</a></span></div></td>
  </tr>
  <tr>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=9&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de non-mariage</a></div>
    </div></td>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=9&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة عدم الزواج</a></div>
    </div></td>
  </tr>
  <tr>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=10&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de non-divorce</a></div>
    </div></td>
    <td><div align="center" class="style1">
      <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=10&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة عدم الطلاق</a></div>
    </div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"><span class="gras"><a href="bayane.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&sex=<?php echo $rox[sex] ?>&date_n=<?php echo $rox[date_n]; ?>&deces_naissance=0" target="_blank" style="text-decoration:none">البينات الهامشية</a></span></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC" colspan="2"><div align="center"><span class="style2">b</span></div></td>
  </tr>
</table>


<?php  } if($table=="deces") { ?>
		
		
		<table width="600" height="345" border="1" cellpadding="0" cellspacing="0">

    <tr><td></td>
      <td><div align="center" class="style1"></div></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><div align="center" class="style1"><a href="etat/extrait_deces.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" >A / F نسخة موجزة من رسم الوفاة</a> </div></td>
    </tr>
    <tr>
      <td align="center"><div align="center" class="style1"><a href="etat/extrait_deces-f.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > Extrait d'acte de décès </a> </div></td>
      <td align="center"><span class="style1"><a href="etat/extrait_deces-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none" > نسخة موجزة من رسم الوفاة</a> </span></td>
    </tr>
    <tr>
      <td align="center"><div align="center" class="style1"><a href="etat/integrale_deces.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">Copie intégrale de l'acte de décès </a></div></td>
      <td align="center"><span class="style1"><a href="etat/integrale_deces-a.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=3" target="_blank" style="text-decoration:none">نسخة كاملة من رسم الوفاة</a> </span></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style1"><a href="etat/fiche_declaration_deces.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">المسودة : ورقة التصريح</a></div></td>
    </tr>
    <tr><td></td>
      <td></td>
    </tr>
	
	
	
	<?php if($rox[pj]!="") { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1"><a href="<?php 
	  
	  
	  
	  echo "doc_deces/$annee_declaration/$rox[partie]/$rox[pj]";
	  
	   ?>.jpg" target="_blank" style="text-decoration:none">الرسم الأصلي(SCAN)</a>
      </div></td>
    </tr>
	
	<?php } else { ?>
	
    <tr>
      <td colspan="2" ><div align="center" class="style1">الرسم الأصلي(SCAN)
      </div></td>
    </tr>
<?php }?>	
	
	
	
	
	
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Certificat de parenté </a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=3&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة القرابة</a></div>
      </div></td>
    </tr>
    <tr>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">Attestation de Concordance </a></div>
      </div></td>
      <td><div align="center"><span class="style1" style="font-size:18px"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&convert=12&table=<?php echo $table; ?>" style="text-decoration:none">شهادة المطابقة </a></span></div></td>
    </tr>
    <tr><td><div align="center" class="style1">
        <div align="center"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=5&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Attestation de monogamie</a></div>
    </div></td>
      <td><div align="center" class="style1">
        <div align="center"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=5&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة الزوجة الوحيدة</a></div>
      </div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style1"><a href="certificat2.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=4&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">Attestation de polygamie</a></span></div></td>
      <td><div align="center"><span class="style1"><a href="certificat1.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&convert=4&table=<?php echo $table; ?>" target="_blank" style="text-decoration:none">شهادة تعدد الزوجات</a></span></div></td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center"><span class="gras"><a href="bayane.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=<?php echo $table; ?>&sex=<?php echo $rox[sex] ?>&date_n=<?php echo $rox[date_n]; ?>&deces_naissance=1" target="_blank" style="text-decoration:none">البينات الهامشية</a></span></div></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" colspan="2"><div align="center"><span class="style2">b</span></div></td>
    </tr>
  </table>
  
  <?php } ?>

  
  	    </fieldset>
		
		
</div>


  <?php    }else{ ?>
  Vous n'avez pas le droit de voir cette page
  <?php } ?>
  

