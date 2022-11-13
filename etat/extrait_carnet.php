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

$partie=$_GET["partie"];
$anneeNais=$_GET["annee_declaration"];
$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);		
$Requete = "select * from carnet where id = ".$partie;
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	

$idf=$_SESSION["idf"];
$idf_f=$_SESSION["idf_f"];


$off=$_SESSION["off"];
$off1=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];


$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];


$mentionMD="Néant";
$mentionMD_a="لاشيء";
$agPere =100;
$commune_a="لجماع";
$numConach="9898";
$Commune2_a="للجماع";
$Num_act="";
$annee_act="";
$Commune3_a="لللجماع";
$date="10/08/2012";
$fi="في ";
?>





 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<head>


<script language="JavaScript" type="text/JavaScript">

 window.print()

</script>


<style type="text/css">
<!--
.gras {
	font-weight: bold;
}
.gras {
	font-weight: bold;
	text-align: center;
}
.style4 {font-size: 9px}
-->
</style>
</head>

<body>

<div align="right">
<table  width="80%" align="center">
      <tr>
        <td width="29%" align="center">ROYAUME DU MAROC</td>
        <td width="40%"><div align="center">طبقا للقانون رقم  37.99  المتعلق بالحالة المدنية و الصادر  بتنفيذه</div></td>
        <td width="31%"><div align="center">المملكة المغربية</div></td>
      </tr><tr>
        <td width="29%" align="center">MINISTERE DE L'INTERIEUR</td>
        <td width="40%"><div align="center">الظهير الشريف رقم   1.02.239</div></td>
        <td width="31%"><div align="center">وزارة الداخلية </div></td>
      </tr><tr>
        <td width="29%" align="center">Province ou préfecture de
        <span class="gras"><?php echo $province; ?></span></td>
        <td width="40%"><div align="center"><span dir="rtl">بتاريخ</span> 25 رجب 1423 - 3 اكتوبر 2002</div></td>
        <td width="31%"><div align="center">عمالة او اقليم
        :
            <span class="gras"><?php echo $province_a; ?></span>
        </div></td>
      </tr><tr>
        <td width="29%" align="center"><?php echo $r['region']; ?> 
        : <span class="gras"> <?php 
		echo $r['section'];
		?></span></td>
        <td width="40%"><div align="right"></div></td>
        <td width="31%"><div align="center">
          <?php echo $r['region1']; ?>
          : <span class="gras"> <?php 
		echo $r['section1']." ";
		?></span>
        </div></td>
      </tr><tr>
        <td width="29%" align="center"><span class="gras"><?php echo $bureau; ?></span></td>
        <td width="40%"><div align="right"></div></td>
        <td width="31%"><div align="center">
            <span class="gras"><?php echo $bureau_a; ?></span>
        </div></td>
      </tr></table>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td width="13%" height="51">&nbsp;</td>
        <TD width="13%">&nbsp;</TD>
        <td width="48%"><p style="font-size:25px" class="gras">بطاقة شخصية للحالة المدنية</p>
        </td>
        <td width="16%"><div align="right"></div></td>
        <td width="10%"><div align="right"></div></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td width="44%" class="gras"><div align="left">Prénom<span class="gras">&nbsp;&nbsp;<?php echo $row['prenom']; ?></span></div></td>
        <td width="6%">&nbsp;</td>
        <td width="6%"><div align="right"></div></td>
        <td width="44%" class="gras"><div align="right">الاسم الشخصي &nbsp;&nbsp;<span class="gras"><?php echo $row['prenom_a']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Nom<span class="gras">&nbsp;&nbsp;<?php echo $row['nom']; ?></span></div></td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">الاسم العائلي&nbsp;&nbsp; <span class="gras"><?php echo $row['nom_a']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">
          <?php  if ($row['sex'] == 'M') echo "Né "; else echo "Née ";
?>
          <span class="gras">          </span> le<span class="gras">&nbsp;&nbsp;
          <?php 		
		include"../conn/conversion.php";

echo convertDate_f($row['date_n']); 

?>
        </span></div></td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">تاريخ الولادة <span class="gras"><?php echo convertDate_f($row['date_n']); ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left">Lieu de naissance<span class="gras">&nbsp;&nbsp;<?php echo $row['lieu']; ?></span></div></td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">مكان الولادة <span class="gras"><?php echo $row['lieu1']; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="left"></div></td><td></td>
        <td><div align="right"></div></td>
        <td><div align="right"></div></td>
      </tr>
      <tr>
        <td><div align="left">
          <?php if ($row['sex'] == 'M') echo "Fils"; else echo "Fille";
?>
        de <span class="gras"><?php echo $row['nom_f_p']; ?></span></div></td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td align="right" class="gras"><div align="right"><span> 
          <?php if ($row['sex'] == 'M') echo "والده"; else echo "والدها";
?>
  &nbsp;&nbsp;          هو </span><span class="gras"> <?php echo $row['nom_a_p']; ?> </span></div></td>
      </tr>
      <tr>
        <td><div align="left">Et de  <span class="gras"><?php echo $row['nom_f_m']; ?></span></div></td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td align="right" class="gras"><div align="right"><span>
          <?php if ($row['sex'] == 'M') echo "والدته"; else echo "والدتها";
?>
        هي&nbsp;&nbsp;</span><span class="gras"> <?php echo $row['nom_a_m']; ?></span> </div></td>
      </tr>
      <tr>
        <td colspan="4"><div align="right" class="gras">
          
          <div align="right">
            <?php if ($row['sex'] == 'M') echo "الساكن "; else echo "الساكنة";
?>
            حاليا ب&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['adresse_a']; ?></div>
        </div></td>
      </tr>
      <tr>
        <td colspan="4"><div align="right">
          البيانات الهامشية :&nbsp;&nbsp;&nbsp;&nbsp;<span class="gras"><?php if($row[mention_marginales]=="") echo "لاشيء"; else echo $row[mention_marginales];?></span></div></td>
      </tr>
      <tr>
        <td colspan="4"><br/>        </td>
      </tr>
      <tr>
        <td align="right">انا الموقع (ة) اسفله</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right"> 
        يشهد ضابط الحالة المدنية ل
          <?php
		  
$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);		
		   echo $r[region1];
		   
		    ?>&nbsp;<span class="gras"><?php echo $r[section1]; ?></span>&nbsp;&nbsp;&nbsp;</div></td>
      </tr>
      <tr>
        <td align="right">السيد (ة)  <span class="gras"><?php echo $row['prenom_a']; ?> <?php echo $row['nom_a']; ?> </span>  </td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td align="left"><span class="gras"> الموقع اسفله</span></td>
      </tr>
      <tr>
        <td align="right"><?php if ($row['sex'] == 'M') echo "الساكن "; else echo "الساكنة";
?> 
        حاليا ب<span class="gras"> <?php echo $row['adresse_a']; ?></span></td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">
          <div align="right"><?php echo $row[num_conach]; ?> بمطابقة المعلومات الواردة في هذه البطاقة للدفتر العائلي رقم </div>
        </div></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">المسلم بمكتب الحالة المدنية لجماعة  <?php echo $row[ville_conach]; ?></div></td>
      </tr>
      <tr>
        <td align="right">اشهد بصحة المعلومات الواردة في هذه البطاقة <br/> امضاء او بصمة صاحب (ة) الطلب</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">لموجز عقد الولادة رقم <?php echo $row[code]; ?> لسنة <?php echo $row[annee_declaration]; ?> المسلم من مكتب الحالة المدنية  لجماعة  <?php echo $row[ville_conach]; ?></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">بتاريخ <?php echo $row[date_extrait]; ?></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"></div></td>
        <td><div align="right">في <?php echo $row[ville_extrait]; ?></div></td>
      </tr>
  </table>

    <table width="100%">
      <tr>
        <td width="44%" align="center">يعاقب  بناء على  الفصل 366 من  القانون  الجنائي  بالحبس من 6  أشهر إلى  عامين  وبغرامة من 120  إلى 1000 درهم أو  بإحدى هاتين  العقوبتين  فقط  من  صنع عن علم  شهادة تتضمن  وقائع غير  صحيحة   أو زور أو  عدل بأي وسيلة  كانت شهادة صحيحة  الأصل ما لم  يكن الفعل  جريمة أشد</span></td>
        <td width="12%"><div align="center"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td width="44%"><div align="right">ضابط الحالة المدنية</div></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td width="12%"><div align="center"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td align="right"><div>توقيع</div></td>
      </tr>
    </table>
    <table width="100%">
      <tr>
        <td width="20%">Fait à :<span class="gras"><?php echo $_SESSION["redaction"]; ?></span></td>
        <td><div align="left">Le :<span class="gras"><?php echo date('d/m/Y'); ?></span></div>          <div align="left"></div></td>
        <td><div align="right"><span class="gras"><?php echo date("d/m/Y"); ?></span>: بتاريخ </div></td>
        <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
        <td width="19%"><div align="right">حرر ب : <?php echo $_SESSION["redaction_a"]; ?></div></td>
      </tr>
    </table>
    <span class="style4"><?php echo $idf; ?></span></div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
