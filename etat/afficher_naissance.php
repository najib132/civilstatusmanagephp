<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];                                                                 $section=$_SESSION["section"];      
$section1=$_SESSION["section1"];  

 include"../accesclient1.php";    


$code=$_GET["code"];
$partie=$_GET["partie"];$anneeNais=$_GET["annee_declaration"];

$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);		

$Requete = "select * from naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	



$off=$_SESSION["off"];
$off1=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];

$section=$_SESSION["section"];
$section1=$_SESSION["section1"];   

     $bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];

if ($permission==securite2($tim2)) { 

?>



<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">



<style type="text/CSS">
#scan {
border-width:2px 0;
width:660px;
color:#000000;
background-color:#FFFFFF;
}


#formulaire {
border-width:2px 0;
width:440px;
color:#000000;
background-color:#FFFFFF;
}


#scan  {
float:left;
}

#formulaire  {
float:right;
}


#contenu1 {
margin-left:155px;
}
#menu2 {
float:right;
}
#contenu2 {
margin-right:155px;
}

#formulaire {
  position: absolute;
  top: 67px;
  left: 710px;
}


</style>



   <style type="text/css">
<!--
#Layer1 {	position:absolute;
	left:450px;
	top:284px;
	width:176px;
	height:147px;
	z-index:1;
}
.gras {	font-weight: bold;
}
.gras {	font-weight: bold;
	text-align: center;
}
.style1 {color: #FFFFFF}
.style41 {font-weight: bold; text-align: center; font-size: 24px; }
#Layer2 {
	position:absolute;
	left:713px;
	top:937px;
	width:440px;
	height:74px;
	z-index:1;
}
#Layer3 {
	position:absolute;
	left:232px;
	top:18px;
	width:919px;
	height:31px;
	z-index:2;
}
.style42 {font-size: 18px}
-->
   </style>
</head>
<body>
<div id="Layer2">
  <div align="center">
    <table width="94%" border="1" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="393"><div align="left">Acte de naissance N° <span class="gras"> <?php echo $row['code']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Année Hégirienne <span class="gras"><?php echo $row['annee_h']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Année Grégorienne <span class="gras"><?php echo $row['annee_declaration']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Le &nbsp;&nbsp; <span class="gras"><?php echo $row['date_hlf']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Correspondant au  &nbsp;&nbsp; <span class="gras"><?php echo $row['date_mlf']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Heure <span class="gras"><?php echo $row['heure_f']; ?></span> et minute<span class="gras"> &nbsp;&nbsp;<?php echo $row['minute_f']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">
            <?php if ($row['sex'] == 'M') echo "Né à"; else echo "Née à";
?>
          &nbsp;&nbsp;<span class="gras"><?php echo $row['lieu']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Prénom <span class="gras"> <?php echo $row['prenom']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Sexe&nbsp;&nbsp; <span class="gras">
            <?php if ($row['sex'] == 'M') echo "Masculin"; else echo "Féminin"; ?>
        </span> &nbsp;&nbsp; Nationalité <span class="gras"><?php echo $row['nationalite_personne']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Nom de famille&nbsp;&nbsp; <span class="gras"><?php echo $row['nom']; ?></span></div></td>
      </tr>
      <tr>
        <td>Profession : <span class="gras"><?php echo $row['prof']; ?></span></td>
      </tr>
      <tr>
        <td>Adresse : <span class="gras"><?php echo $row['adresse_personne']; ?></span></td>
      </tr>
      <tr>
        <td><div align="left">CIN : <span class="gras"><?php echo $row['cin']; ?></span> date : <?php echo $row[date_cin]; ?></div></td>
      </tr>
      <tr>
        <td><div align="left">
            <?php if ($row['sex'] == 'M') echo "Fils"; else echo "Fille";
?>
          &nbsp;&nbsp;de <span class="gras"><?php echo $row['nom_f_p']; ?></span>&nbsp;</div></td>
      </tr>
      <tr>
        <td><div align="left">Né à&nbsp;&nbsp; <span class="gras"><?php echo $row['lieu_p']; ?>&nbsp;</span>Nationalité <span class="gras"> <?php echo $row['nationalite_p']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Le <span class="gras">&nbsp;&nbsp;<?php echo $row['date_hlf_p']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Correspondant au&nbsp;&nbsp; <span class="gras"><?php echo $row['date_plf_p']; ?> </span>Profession&nbsp;&nbsp; <span class="gras"><?php echo $row['prof_p']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Et de<span class="gras">&nbsp;&nbsp;<?php echo $row['nom_f_m']; ?>&nbsp;&nbsp;&nbsp;</span></div></td>
      </tr>
      <tr>
        <td><div align="left">Nationalité <span class="gras"><?php echo $row['nationalite_m']; ?> </span>Née à  &nbsp;&nbsp;<span class="gras"><?php echo $row['lieu_m']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Le <span class="gras">&nbsp;&nbsp;<?php echo $row['date_hlf_m']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Correspondant au &nbsp;&nbsp;<span class="gras"><?php echo $row['date_mlf_m']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Profession&nbsp;&nbsp; <span class="gras"><?php echo $row['prof_m']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Domiciliés&nbsp;&nbsp; <span class="gras"><?php echo $row['adresse']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Déclaration faite par&nbsp;&nbsp;<span class="gras">
            <?php

		 echo " ".$row['lien'].", ".$row['resp_declaration']." agé(e) de ".$row['age_f'] ."  sa profession ".$row['prof_lien'] ." sa nationalité ".$row['nationalite_d'] ."  résidant à ".$row['adresse_d'] ." ";
		 ?>
        </span></div></td>
      </tr>
    </table>
    <span class="style41"> Mentions marginales </span>
    <?php
  $now=date("Y-m-d");
  
$Requete3 = "select mention_p.id as AI,mention_p.bayane as mb, mention_p.bayane as mb1, mention.bayane as mb2, date from mention_p, mention where mention.id = mention_p.jugement and `deces_naissance`=0 and `date` between '".$row[date_n]."' and '".$now."' and `partie`='".$partie."' and code = ".$code ." and annee_declaration =".$anneeNais ;
$result3 = @mysql_query($Requete3) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row3 = mysql_fetch_array($result3);	


  ?>
    <table width="94%" border="1px; #000; " align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="21" bgcolor="#EFEFEF"><div align="center"></div></th>
        <th width="70" bgcolor="#EFEFEF">Date</th>
        <th width="109" bgcolor="#EFEFEF"><div align="center">Mention</div></th>
        <th width="204" bgcolor="#EFEFEF"><div align="center">Texte</div></th>
      </tr>
      <?php
  while($row3!="")
  { 
  
  echo "
					<tr>
					
<td><div align=\"center\"><a href=\"../modifier_bayane.php?N=$row3[AI]&annee_declaration=$row[annee_declaration]&code=$row[code]&deces_naissance=0&date_n=$row[date_n]&sex=$row[sex]&partie=$row[partie]\"><img src=\"../icone/b_edit.PNG\" border=0></div></td>
					
					<td ><div align='center'>".$row3['date']."</div></td>
					<td ><div align='center'>".$row3['mb2']."</div></td>
  					<td ><div align='center'>".$row3['mb1']."</div></td>
					</tr>
					";
					
					
  $row3 = mysql_fetch_array($result3);
  }
  ?>
    </table>
    <span class="style41">Détail jugement </span>
    <table width="94%" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="103" bgcolor="#EFEFEF"><div align="center">Date</div></th>
        <th width="126" bgcolor="#EFEFEF">N°</th>
        <th width="177" bgcolor="#EFEFEF"><div align="center">Origine</div></th>
      </tr>
      <tr>
        <td ><div align='center'>
          <?php if($row['date_jugement'] == "0000-00-00") echo ""; else echo $row['date_jugement']; ?>
        </div></td>
        <td ><div align="center"><?php echo $row['num_jugement']; ?></div></td>
        <td ><div align='center'><?php echo $row['tribunale']; ?></div></td>
      </tr>
    </table>
  </div>
</div>
<div id="Layer3">
  <table width="100%">
    <tr>
      <td width="30%"><div align="center" class="style42"><a href="../confirmer.php?annee_declaration=<?php echo $anneeNais; ?>&code=<?php echo $code; ?>&partie=<?php echo $partie; ?>&table=naissance">تأكيد البيانات (المراقبة النهائية)</a><span class="style1">كي</span> </div></td>
      <td width="31%" class="style42"><div align="center"><a href="../bayane.php?code=<?php echo $row[code] ?>&annee_declaration=<?php echo $row[annee_declaration] ?>&table=naissance&date_n=<?php echo $row[date_n] ?>&deces_naissance=0&sex=<?php echo $row[sex] ?>&partie=<?php echo $row[partie] ?>">اضافة بيان هامشي</a></div></td>
      <td width="39%" class="style42"><div align="center"><a href="../modifier_naissance.php?annee_declaration=<?php echo $anneeNais ?>&code=<?php echo $code ?>&table=naissance&cat=المولود&trans=<?php 
	  
  if($row[deces_naissance]==2 || $row[deces_naissance]==3) $trans=1; else $trans="";

	  echo $trans 
	  
	  
	  ?>&partie=<?php echo $partie ?>">تعديل</a></div></td>
    </tr>
  </table>
</div>
<div align="center">



  
  
   <p>&nbsp;</p>
   <div id="scan">
     <p><a href="<?php 	
		 	  
$acte="../doc_naissance/$anneeNais/$partie/$row[pj]";
echo $acte  ?>.jpg" target="_blank"><img src="<?php echo $acte ?>.jpg" width="692" height="780" /></a></p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
  </div> 


   <div id="scan">
<a href="<?php 	
		 	  
$acte="../doc_naissance/$anneeNais/$row[pj]";
echo $acte  ?>.jpg" target="_blank"><img src="<?php echo $acte ?>.jpg" width="692" height="780" /></a>
</div> 

		
<div id="formulaire">
  <table width="94%" border="1" align="center" cellpadding="0" cellspacing="0" >
    <tr>
      <td align="right"><div align="right"><span class="gras"><?php echo $row['code']; ?></span> عقد رقم</div></td>
    </tr>
    <tr>
      <td align="right"><div align="right"><span class="gras"><?php echo $row['annee_h']; ?> </span>السنة الهجرية </span></div></td>
    </tr>
    <tr>
      <td align="right"><div align="right"><span class="gras"><?php echo $row['annee_declaration']; ?></span> السنة  الميلادية</span></div></td>
    </tr>
    <tr>
      <td align="right">في يوم<span class="gras"> &nbsp;&nbsp;<?php echo $row['date_hla']; ?></span></td>
    </tr>
    <tr>
      <td align="right"><span dir="rtl">موافق &nbsp;&nbsp;</span> <span class="gras"> <?php echo $row['date_mla']; ?></span></td>
    </tr>
    <tr>
      <td align="right"><span dir="rtl">على الساعة <span class="gras"><?php echo $row['heure']; ?></span>  و الدقيقة&nbsp;&nbsp; </span><span class="gras"><?php echo $row['minute']; ?></span> </td>
    </tr>
    <tr>
      <td align="right">  
        <?php  if ($row['sex'] == 'M') echo "ولد"; else echo "ولدت";
?>
        ب <span class="gras"> <?php echo $row['lieu1']; ?></span> </td>
    </tr>
    <tr>
      <td align="right"><span dir="rtl">الاسم الشخصي</span> &nbsp;&nbsp;<span class="gras"> <?php echo $row['prenom_a']; ?></span> </td>
    </tr>
    <tr>
      <td align="right"> من جنس</span><span class="gras">
        <?php if ($row['sex'] == 'M') echo " ذكر "; else echo "انثى"; ?>
        <span class="style1"></span> </span>
          <?php if ($row['sex'] == 'M') echo "  جنسيته "; else echo "جنسيتها"; ?>
          </span><span class="gras"><?php echo $row['nationalite_personne_a'] ; ?></span></td>
    </tr>
    <tr>
      <td align="right"><span>الاسم العائلي &nbsp;&nbsp;</span><span class="gras"><?php echo $row['nom_a']; ?></span></td>
    </tr>
    <tr>
      <td align="right">حرفته(ها) <span class="style1">ب&nbsp;</span> <span class="gras"> <?php echo $row['prof_a']; ?></span></td>
    </tr>
    <tr>
      <td align="right">الساكن(ة) ب.&nbsp; <span class="gras"> <?php echo $row['adresse_personne_a']; ?></span></td>
    </tr>
    <tr>
      <td align="right">
        <?php  echo $row['cin'];  ?>
:      رقم البطاقة الوطنية</td>
      </tr>
    <tr>
      <td align="right"><span>
        <?php if ($row['sex'] == 'M') echo "والده"; else echo "والدها";
?>
        &nbsp;&nbsp;          هو </span><span class="gras"> <?php echo $row['nom_a_p']; ?> </span></td>
    </tr>
    <tr>
      <td align="right">جنسيته</span> <span class="gras"> <?php echo $row['nationalite_pa']; ?></span><span> <span class="style1"></span> المولود ب </span><span class="gras"> <?php echo $row['lieu1_p']; ?></span></td>
    </tr>
    <tr>
      <td align="right">في عام&nbsp;&nbsp; </span> <span class="gras"> <?php echo $row['date_hla_p']; ?></span> </td>
    </tr>
    <tr>
      <td align="right"><span dir="rtl">موافق ل</span><span class="gras">&nbsp;&nbsp; <?php echo  $row['date_pla_p'];; ?></span>&nbsp;&nbsp;حرفته&nbsp;&nbsp; <span class="gras"> <?php echo $row['prof_p_a']; ?></span></td>
    </tr>
    <tr>
      <td align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>
        <?php if ($row['sex'] == 'M') echo "والدته"; else echo "والدتها";
?>
        هي&nbsp;&nbsp;</span><span class="gras"> <?php echo $row['nom_a_m']; ?></span> </td>
    </tr>
    <tr>
      <td align="right"><span>جنسيتها&nbsp;&nbsp; </span><span class="gras"> <?php echo $row['nationalite_ma']; ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>المولودة ب&nbsp;&nbsp; </span><span class="gras"> <?php echo $row['lieu1_m']; ?></span> </td>
    </tr>
    <tr>
      <td align="right"><span>في عام&nbsp;&nbsp; </span><span class="gras"> <?php echo $row['date_hla_m']; ?></span> </td>
    </tr>
    <tr>
      <td align="right"><span>موافق ل&nbsp;&nbsp; </span><span class="gras"> <?php echo $row['date_mla_m']; ?></span> </td>
    </tr>
    <tr>
      <td align="right"><span>حرفتها</span><span class="gras">&nbsp;&nbsp; <?php echo $row[prof_m_a]; ?></span> </td>
    </tr>
    <tr>
      <td align="right"><span>الساكنان ب&nbsp;&nbsp; </span><span class="gras"> <?php echo $row['adresse_a']; ?></span> </td>
    </tr>
    <tr>
      <td align="right" class="gras">حسبما صرح(ت) به <?php echo $row['lien_a']; ?> <?php echo $row['resp_declaration_a']; ?> عمره(ها) <?php echo $row['age']; echo ""; ?> <?php echo " مهنته(ها) ". $row['prof_lien_a']; ?> <?php echo " جنسيته(ها) ". $row['nationalite_d_a']; ?> <?php echo " الساكن(ة) ب ". $row['adresse_d_a']; ?></td>
    </tr>
  </table>
  <span class="style41">بيانات هامشية</span>
  <?php
  $now=date("Y-m-d");
  
$Requete3 = "select mention_p.id as AI,mention_p.bayane as mb, mention_p.bayane1 as mb1, mention.bayane1 as mb2, date from mention_p, mention where mention.id = mention_p.jugement and `deces_naissance`=0 and `date` between '".$row[date_n]."' and '".$now."' and `partie`='".$partie."' and code = ".$code ." and annee_declaration =".$anneeNais ;
$result3 = @mysql_query($Requete3) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row3 = mysql_fetch_array($result3);	


  ?>

<table width="94%" border="1px; #000; " align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="181" bgcolor="#EFEFEF"><div align="center">نص البيان بالعربية</div></th>
    <th width="126" bgcolor="#EFEFEF"><div align="center">نوع البيان</div></th>
    <th width="78" bgcolor="#EFEFEF"><div align="center">تاريخ البيان</div></th>
    <th width="19" bgcolor="#EFEFEF">&nbsp;</th>
  </tr>
  <?php
  while($row3!="")
  { 
  
  echo "
  
  					<td ><div align='center'>".$row3['mb1']."</div></td>
					<td ><div align='center'>".$row3['mb2']."</div></td>
					<td ><div align='center'>".$row3['date']."</div></td>

<td><div align=\"center\"><a href=\"../modifier_bayane.php?N=$row3[AI]&annee_declaration=$row[annee_declaration]&code=$row[code]&deces_naissance=0&date_n=$row[date_n]&sex=$row[sex]&partie=$row[partie]\"><img src=\"../icone/b_edit.PNG\" border=0></div></td>

					
					</tr>";
  $row3 = mysql_fetch_array($result3);
  }
  ?>
</table>
<span class="style41">تفاصيل الحكم </span>
<table width="94%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="172" bgcolor="#EFEFEF"><div align="center">المصدر</div></th>
    <th width="113" bgcolor="#EFEFEF">رقم الحكم </th>
    <th width="121" bgcolor="#EFEFEF"><div align="center">تاريخ الحكم</div></th>
  </tr>
  <tr>
    <td ><div align='center'><?php echo $row['tribunale_a']; ?></div></td>
    <td ><div align="center"><?php echo $row['num_jugement']; ?></div></td>
    <td ><div align='center'>
      <?php if($row['date_jugement'] == "0000-00-00") echo ""; else echo $row['date_jugement']; ?>
    </div></td>
  </tr>
</table>
</div>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
	
	

	
    <p>
      <label></label>
    </p>

</div>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
  </div>
</div>








<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>


<?php    }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>

