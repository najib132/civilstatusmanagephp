<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];                                                                 $section=$_SESSION["section"];      
$section1=$_SESSION["section1"];  

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

	
$Req2 =  "SELECT count(code) as kayn  FROM `origine_deces` WHERE `annee_declaration`='".$anneeNais."' and `code`='".$code."' and `partie`='".$partie."'  ";
$res2 = @mysql_query($Req2,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res2); 
$kayn_n=$detail['kayn'];

if($kayn_n==0) {
	
$Requete = "select * from deces where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	
}

else {


$Requete = "select * from origine_deces where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	


$Requetee = "select nom,prenom,nom_a,prenom_a from deces where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$resulte = @mysql_query($Requetee) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$rowe = mysql_fetch_array($resulte);	

}


$officier=$_SESSION["off"];
$officier_a=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">          <title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>



<style type="text/css">
<!--
.gras {
	font-weight: bold;
}
.gras {
	font-weight: bold;
	text-align: center;
}
.style1 {color: #FFFFFF}
.style2 {font-weight: bold; text-align: center; color: #FFFFFF; }
.style6 {font-size: 9px}
-->
</style>
</head>

<body>


<div align="right">
<table  width="97%" align="center">
      <tr>
        <td colspan="2"><div align="center">طبقا للقانون رقم  37.99  المتعلق بالحالة المدنية و الصادر  بتنفيذه</div></td>
        <td width="33%"><div align="center" class="gras">المملكة المغربية  </div></td>
      </tr><tr>
      <td colspan="2"><div align="center">الظهير الشريف رقم   1.02.239</div></td>
        <td width="33%"><div align="center" class="gras">وزارة الداخلية</div></td>
      </tr>
      <tr>
      <td colspan="2"><div align="center">بتاريخ 25 رجب 1423 / 3 اكتوبر 2002 </div></td>
        <td width="33%"><div align="center" class="gras">عمالة او اقليم
        
        <?php echo $province_a; ?> </div></td>
      </tr>
    <tr>
    <td colspan="2" rowspan="2" align="center"><span class="gras" style="font-size:25px">نسخة كاملة من رسم الوفاة</span></td>
        <td width="33%"><div align="center">
          <?php echo $r['region1']; ?>    <span class="gras"><?php 
		echo $r['section1']." ";
		?></span>    </div></td>
    </tr><tr>
        <td width="33%"><div align="center" class="gras"><?php echo $bureau_a; ?></div></td>
      </tr><tr><td colspan="2">&nbsp;</td><td>&nbsp;</td>
      </tr><tr>
        <td colspan="2" align="right">في يوم<span class="gras"> <?php echo $row['date_hla_d']; ?> </span>هجرية</td>
        <td align="right">عقد رقم <span class="gras"> : <?php echo $row['code']; ?></span></td>
      </tr><tr>
        <td colspan="2" align="right">موافق </span><span class="gras"><?php echo $row['date_mla_d']; ?> ميلادية</span></td>
        <td align="right"><div align="right"><span class="gras"><?php echo $row['annee_h']; ?></span> : السنة الهجرية</div></td>
      </tr><tr>
        <td colspan="2" align="right">على الساعة 
        <span class="gras"><?php echo $row['heure']; ?></span>  و الدقيقة</span><span class="gras"> <?php echo $row['minute']; ?></span></td>
        <td align="right"><div align="right"><span class="gras"><?php echo $row['annee_declaration']; ?> : </span>السنة  الميلادية</span></div></td>
      </tr><tr>
        <td colspan="2" align="right"><span dir="rtl">   
            <?php if ($row['sex'] == 'M') echo "توفي "; else echo "توفيت ";
?>
  ب <span class="gras"><?php echo $row['ville_deces_a']; ?></span></span>        </td>
      <td align="right">&nbsp;</td>
      </tr><tr>
        <td colspan="2" align="right">الاسم الشخصي</span> <span class="gras"> <?php echo $row['prenom_a']; ?></span> </td>
      <td align="right"><span class="gras"><?php
	  
	  
	if($kayn_n==0)   echo $row['prenom_a']; else echo $rowe['prenom_a'];
	   
	   
	    ?></span></td>
      </tr><tr>
        <td colspan="2" align="left">Prénom <span class="gras"><?php echo $row['prenom']; ?></span></td>
      <td align="right"><span class="gras"><?php 
	  
	if($kayn_n==0)   echo $row['nom_a']; else echo $rowe['nom_a'];

	   ?></span></td>
      </tr><tr>
        <td colspan="2" align="right"><span><span class="gras"></span>الاسم العائلي</span><span class="gras"> <?php echo $row['nom_a']; ?></span></td>
      <td align="center"><span dir="rtl"></span><span class="gras"><?php 
	  
	  
	if($kayn_n==0)   echo $row['prenom']; else echo $rowe['prenom'];

	   ?></span></td>
      </tr><tr>
        <td colspan="2" align="right"> من جنس</span><span class="gras">
          <?php if ($row['sex'] == 'M') echo " ذكر "; else echo "انثى"; ?><span class="style1">.</span> </span>
          <?php if ($row['sex'] == 'M') echo "  جنسيته "; else echo "جنسيتها"; ?>
        </span><span class="gras"><?php echo $row['nationalite_personne_a'] ; ?></span> </td>
      <td align="center"><span class="gras"><?php 
	  
	  
	if($kayn_n==0)   echo $row['nom']; else echo $rowe['nom'];
	  
	   ?></span></td>
      </tr><tr>
        <td colspan="2" align="left">Nom <span class="gras"><?php echo $row['nom']; ?></span></td>
      <td align="left" rowspan="27"><div style="margin:20px; font-size:12px">
        <div align="right"><span style="text-align:right" dir="rtl"> 
          <?php
$Requete3 = "select mention_p.bayane as mb, mention_p.bayane1 as mb1, mention.bayane1 as mb2, date from mention_p, mention where mention.id = mention_p.jugement and deces_naissance = 1 and `partie`='".$partie."' and code = ".$code ." and annee_declaration =".$anneeNais ;
$result3 = @mysql_query($Requete3) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row3 = mysql_fetch_array($result3);	 
  while($row3!=""){ 
  
  echo"- ";

  echo  $row3['mb1']."<br />";
  $row3 = mysql_fetch_array($result3);
  }?>
        </span></div>
      </div></td>
      </tr>
      <tr>
        <td colspan="2" align="right"><?php if ($row['sex'] == 'M') echo "المولود ب"; else echo "المولودة ب";
?>
    &nbsp;<span class="gras"><?php echo $row['lieu1']; ?></span></td></tr>
      <tr>
        <td colspan="2" align="right">في عام </span><span class="gras"><?php echo $row['date_hla']; ?> هجرية</span></td>
      </tr>
      <tr>
        <td colspan="2" align="right">
    موافق ل </span><span class="gras"><?php echo $row['date_mla']; ?> ميلادية</span></td>
      </tr>
      <tr>
        <td colspan="2" align="right"><span>
        <?php if ($row['sex'] == 'M') echo "حرفته"; else echo "حرفتها";
?>
    </span><span class="gras"><?php echo $row['prof_personne_a']; ?></span><span> 
    <?php if ($row['sex'] == 'M') echo "الساكن ب"; else echo "الساكنة ب";
?>
    </span><span class="gras"><?php echo $row['adresse_personne_a']; ?></span></td></tr>
      <tr>
        <td colspan="2" align="right"><?php if ($row['sex'] == 'M') echo "والده هو"; else echo "والدها هو";
?>
    <span class="gras"><?php echo $row['nom_a_p']; ?>  </span>جنسيته <span class="style2"></span><?php echo $row['nationalite_pa']; ?> </span> </td>
    </tr>
      
      <tr>
        <td colspan="2" align="right">في عام<span class="style1"></span> <span class="gras"> <?php echo $row['date_hla_p']; ?> هجرية</span> </td>
      </tr>
      
      <tr>
        <td colspan="2" align="right">موافق ل<span class="gras"><span class="style1"></span> <?php echo $row['date_pla_p'];; ?> ميلادية</span> </td>
      </tr>
      <tr>
        <td colspan="2" align="right">حرفته<span class="style1">.</span><span class="gras"> <?php echo $row['prof_p_a']; ?></span> الساكن ب <span class="gras"> <?php echo $row['adresse_p_a']; ?> </span></td>
    </tr>
      <tr>
        <td colspan="2" align="right"><span><span>
          <?php if ($row['sex'] == 'M') echo "والدته"; else echo "والدتها";
?> هي &nbsp;</span><span class="gras"> <?php echo $row['nom_a_m']; ?></span> جنسيتها&nbsp; </span><span class="gras"> <?php echo $row['nationalite_ma']; ?></span></td>
      </tr>
      
      <tr>
        <td colspan="2" align="right"><span>في عام </span><span class="gras"> <?php echo $row['date_hla_m']; ?> هجرية</span></td>
      </tr>
      <tr>
        <td colspan="2" align="right"><span>موافق ل&nbsp; </span><span class="gras"> <?php echo $row['date_mla_m']; ?> ميلادية</span> </td>
      </tr>
      <tr>
        <td colspan="2" align="right"><span>حرفتها</span><span class="gras">&nbsp;&nbsp; <?php echo $row['prof_m_a']; ?></span> الساكنة ب <span class="gras"> <?php echo $row['adresse_m_a']; ?></span></td>
      </tr>
      <tr>
        <td colspan="2" align="right"><?php if ($row['sex'] == 'M') echo "وقد كان المتوفى "; else echo "وقد كانت المتوفية";
?>
          <span class="gras"><?php echo $row['etat_a']; ?></span></td>
      </tr>
      <tr>
        <td colspan="2" align="right"><span class="gras">
		
		
		
		
		
	<?php  if($row[deces_naissance]==1)  { ?>
	
		
		
		حسبما صرح(ت) به <?php echo $row['resp_declaration_a']; ?> <?php echo $row['lien_a']; ?> عمره(ها) <?php echo $row['age']; echo ""; ?> <?php echo " مهنته(ها) ". $row['prof_lien_a']; ?> <?php echo " جنسيته(ها) ". $row['nationalite_d_a']; ?> <?php echo " الساكن(ة) ب ". $row['adresse_d_a']; ?></span></td>
     
	 <?php } ?>
	 
	<?php  if($row[deces_naissance]==5)  { ?>


		بناء ا على ما جاء في الحكم عدد <?php echo $row['num_jugement']; ?>  الصادر عن <?php echo $row['tribunale_a']; ?>  <?php echo " بتاريخ ". $row['date_jugement']; ?>  <?php echo " $row[date_j_hla] هجرية موافق $row[date_j_mla] ميلادية" ; ?>
		</span></td>
     
	 <?php } ?>
     
	 
		
		
		
		
		</span></td>
      </tr>
      <tr><td colspan="2" align="right">&nbsp;</td></tr>
      <tr>
        <td colspan="2" align="right"><span>
          <?php 
		
		 if($row[deces_naissance]==2) echo"حرر";
			 if($row[deces_naissance]==3) echo "نقل";
?> 
        في يوم&nbsp;&nbsp; </span><span class="gras">
          <?php 
	  
	  
echo $row[date_d_hla];	  
	  
	  ?>
         هجرية        </span> </td>
      </tr>
      <tr>
        <td colspan="2" align="right">موافق ل</span><span class="gras">
        <?php 
	  
	  
echo $row[date_d_mla];	  
	  
	  ?>
        </span>ميلادية على الساعة<span class="gras"><span> <?php echo $row['heure_a_d']; ?>  </span></span>و الدقيقة <span class="gras"><?php echo $row['minute_a_d']; ?></span></td>
      </tr>
      
      <tr>
        <td colspan="2" align="right"><div align="right"><span>من طرفنا نحن</span><span><span class="gras"> <?php echo $row[officier_a]; ?></span></span></div></td>
      </tr>
      <tr>
        <td colspan="2" align="right"><div align="right">و بعد تلاوة الرسم على المصرح <span class="gras">
          <?php if ($row['signature']==0) echo " ووقعناه وحدنا "; else echo " ووقعه معنا ";
?>
        </span> وضابط الحالة المدنية <span class="gras"> <?php echo $row[delegation_a]; ?></span></div></td>
      </tr>
      <tr><td colspan="2" align="right"><span></span></td></tr>
      <tr><td colspan="2" align="right"><hr /></td></tr>
      <tr>
        <td width="10%" align="right">&nbsp;</td>
        <td width="57%" align="right"><span dir="rtl">نشهد نحن</span><span class="gras"> <?php echo $off1; ?></span> الموقع اسفله له </td>
      </tr>
      <tr><td colspan="2" align="right"><span>بصفتنا ضابط الحالة المدنية ب مطابقة هذه النسخة لما هو مضمن في سجلات الحالة المدنية </span></td></tr>
      <tr>
        <td colspan="2" align="right"><span>حرر ب<span class="gras"><?php echo $bureau_a; ?></span><span class="gras">
        <?php 
		echo $_SESSION["section2"];
		?>
        </span> <span class="gras">
        <?php 
		echo $r['section1']." ";
		?>
        </span>&nbsp;في</span><span class="gras">&nbsp; <?php echo date("d/m/Y"); ?></span></td>
      </tr>
      <tr><td colspan="2" align="right">ضابط الحالة المدنية </td></tr>
  <tr><td colspan="2" align="right">&nbsp;</td></tr></table>
    
<span class="style6"><?php echo $_SESSION["idf"]; ?></span></div>






</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
