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
$Requete = "select * from naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	


$idf=$_SESSION["idf"];
$officier=$_SESSION["off"];
$officier_a=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];

include"../conn/conversion.php";

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>

<style>
.invisible{
	visibility:hidden;
	}
</style>

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
.bordureV{
	border-left:#000 thin solid; border-left-width:2px;}
.bordureH{
	border-bottom:#000 thin solid;
	border-bottom-width:3px;}
.bordureDGB{
	border-left:#000 thin solid;
	border-bottom:#000 thin solid;
	border-right:#000 thin solid;
	}
.bordureBL
{
	border-left:#000 thin solid; 
	border-left-width:2px;
	border-bottom:#000 thin solid;
	border-bottom-width:3px;
}
.bordureT{
	border-left:#000 thin solid 2px ;
	border-bottom:#000 thin solid;
	border-right:#000 thin solid;
	border-top:#000 thin solid;
	}
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<table  width="100%" cellspacing="0">
      <tr><td>&nbsp;</td>
        <td width="80%" align="right" ><span class="gras" style="font-size:21px; margin-top:50px;">المملكة المغربية </span></td>
      </tr><tr><td ></td>
        <td width="80%" align="right" >
       <span class="gras" style="font-size:21px; margin-top:50px;"> وزارة الداخلية</span></td>
        </tr>
      <tr><td ></td>
        <td width="80%" ><div align="center"></div></td>
      </tr>
      <tr><td ></td>
        <td width="80%" align="right"><span class="gras" style="font-size:21px; margin-top:50px;">ورقة الحكم التصريحي بالولادة أو الوفاة</span></td>
      </tr>
    <tr><td></td>
  </tr>
        <tr class="bordureH">
          <td align="center" class="bordureH" ><span class="gras"> خاص بالادارة المركزية</span></td>
        <td width="80%" class="bordureH"><div align="center"></div></td>
      </tr>
      <tr><td>&nbsp;</td>
        <td align="right" class="bordureV">&nbsp;</td>
      </tr>
      <tr>
        <td class="bordureH">&nbsp;</td>
        <td align="right" class="bordureBL">&nbsp;</td>
      </tr>
      <tr>
        <td class="bordureH">&nbsp;</td>
        <td align="right" class="bordureBL">&nbsp;</td>
      </tr> <tr><td>
        <table cellspacing="0" width="98%" style="color:#FFF">
          <tr><td><img src="Image1.png" width="260" height="24" />
              <img src="Image9.png" /></td>
        </tr></table>
        </td>
        <td align="right" class="bordureBL"><table width="60%">
          <tr>
            <td width="18%" height="30"><div align="right"><img src="ImageChoix0.png" width="50" height="28" /></div></td>
            <td width="18%"><div align="right">: ثبوت وفاة</div></td>
            <td width="15%"><div align="right"><img src="ImageChoix1.png" width="50" height="28" /></div></td>
            <td width="13%"><div align="right"> : ثبوت ولادة </div></td>
            <td width="28%"><div align="right"> : نوع الحكم </div></td>
          </tr>
        </table>                                    </td>
      </tr>
      
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image7.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">  
        <?php  if ($row['sex'] == 'M') echo "ولد"; else echo "ولدت";
?> ب <span class="gras"> <?php echo $row['lieu1']; ?>  <span class="style1">ا</span> </span>        </td>
      </tr><tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV"><div dir="ltr" style="width:50%; float:left">Prénom <span class="gras"> <?php echo $row['prenom']; ?></span></div>
        <div style="text-align:right; width:50%; float:right" dir="rtl" >الاسم الشخصي<span class="gras"> <?php echo $row['prenom_a']; ?>  <span class="style1">ا</span> </span></div>        </td>
        </tr><tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"><table align="right"  width="80%" cellspacing="0">
      <tr> <td width="12px" align="center">&nbsp;</td> 
      <td width="12px" ></td>
      <td width="12px">&nbsp;</td><td width="12px"></td>
          <td width="12px">&nbsp;</td>
          <td width="12px"></td>
          <td width="12px">&nbsp;</td>
       <td width="12px"><?php 
		if ($row['sex'] == 'M') 
		echo "<img src='ImageChoix0.png' />"; 
		else
		echo "<img src='ImageChoix1.png' />"; 
		 ?></td>
        <td width="12px" align="center">انثى</td>
         <td width="12px"><?php 
		if ($row['sex'] == 'M') 
		echo "<img src='ImageChoix1.png' />"; 
		else
		echo "<img src='ImageChoix0.png' />"; 
		 ?></td>
          <td width="12px">ذكر</td>
          
          <td width="12px"></td>
          <td width="12px" align="right">جنسه</td>
      </tr></table>    </td>
        </tr><tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image9.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">
        <span><span>
        <?php if ($row['sex'] == 'M') echo "والده"; else echo "والدها";
?>
&nbsp;&nbsp;:</span><span class="gras"> <?php echo $row['nom_a_p']; ?>  <span class="style1">ا</span> </span></span></td>
      </tr><tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">تاريخ ولادة الاب<span class="gras"> :&nbsp;&nbsp;<?php echo $row['date_hla_p']; ?></span> <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;عام: --><?php echo ""; ?> <span class="gras"> </span><span class="style1">ا</span> </td>
      </tr>
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image8.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">موافق ل   :&nbsp;&nbsp;<span class="gras"><?php echo $row['date_pla_p']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;سنة : <?php echo yearofdate($row[date_n_p]) ?> <span class="gras"> </span><span class="style1">ا</span> </td>
      </tr>
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image7.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"><span><span class="style1">.</span> مكان ولادة الاب</span><span class="gras">
:    <?php echo $row['lieu1_p']; ?>  <span class="style1">ا</span> </span> </td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"><span><span class="style1">.</span>مستواه الدراسي</span><span class="gras">
    : <?php echo $row['niveau_scolaire_p'] ?>
    <span class="style1">ا</span> </span> </td>
      </tr>
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image4.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">حرفته&nbsp;: &nbsp;<span class="gras"><?php echo $row['prof_p_a']; ?>  <span class="style1">ا</span> </span></td>
      </tr>
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">جنسيته : <span class="gras"> <?php echo $row['nationalite_pa']; ?>  <span class="style1">ا</span> </span></td>
      </tr>
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image9.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV"><div dir="ltr" style="width:50%; float:left">Nom<span class="gras">
          : <?php 
		
		
		if($numm==0)		echo $row['nom']; else echo  $rowe[nom];

		
		
		?>
        </span></div>
        <div style="text-align:right; width:50%; float:right" dir="rtl" >الذي اختار ان يكون اسمه العائلي<span class="gras">: <?php 
		echo $row['nom_a']; 
		
		 ?>  
          <span class="style1">ا</span>        </span></div>        </td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td class="bordureV" align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php if ($row['sex'] == 'M') echo "والدته"; else echo "والدتها";
?> :  &nbsp;</span><span class="gras"> <?php echo $row['nom_a_m']; ?>  <span class="style1">ا</span> </span> </td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">تاريخ ولادة الام<span class="gras"> :&nbsp;&nbsp;<?php echo $row['date_hla_m']; ?></span> <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;عام:--> <?php echo ""; ?> <span class="gras"> </span><span class="style1">ا</span> </td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image8.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">موافق ل   :&nbsp;&nbsp;<span class="gras"><?php echo $row['date_mla_m']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; سنة:  <?php echo yearofdate($row[date_n_m]) ?> <span class="gras"> </span><span class="style1">ا</span> </td>
      </tr>
        <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image7.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">&nbsp;&nbsp;&nbsp;<span>المولودة ب&nbsp;&nbsp; :</span><span class="gras"> <?php echo $row['lieu1_m']; ?> <span class="gras"> </span><span class="style1">ا</span> </td>
      </tr>
      
       <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td class="bordureV" align="right"><span><span class="style1">.</span>مستواها الدراسي :</span><span class="gras">
          <?php echo $row['niveau_scolaire_m'] ?>
          <span class="style1">ا</span> </span> </td>
      </tr>
      
      
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image4.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">حرفتها&nbsp;:&nbsp;<span class="gras"><?php echo $row['prof_m_a']; ?>  <span class="style1">ا</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td height="32"><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">جنسيتها&nbsp;&nbsp;:<span class="gras"> <?php echo $row['nationalite_ma']; ?><span class="gras"> <span class="style1">ا</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td class="bordureH"><img src="Image2.png" />
      </td>
      </tr></table></td>
        <td class="bordureV"  align="right">رتبة هذه الولادة بالنسبة لام المولود - مع الاخذ بعين الاعتبار الاطفال المولودين احياء - : <span class="gras"><?php if($row['rang']!=0) echo $row['rang']; ?>  
        <span class="style1">ا</span> </span></td>
      </tr>
    <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image8.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"><span>عنوان الوالدين&nbsp;:&nbsp; </span><span class="gras"> <?php echo $row['adresse_a']; ?>  <span class="style1">ا</span> </span></td>
    </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"><span>تاريخ التحرير&nbsp;:&nbsp; </span><span class="gras"><?php echo $row['date_d_hla']; ?>  <span class="style1">ا</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image9.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" ><span>موافق ل :&nbsp;&nbsp;</span><span class="gras"><?php echo $row['date_d_mla']; ?>  <span class="style1">ا</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" >حسبما صرح به <span class="gras">: <?php echo $row['resp_declaration_a']; ?>   <span class="style1">ا</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image2.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" >عمره : <span class="gras"><?php echo $row['age']." "; ?>  <span class="style1">ا</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image4.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" >
         مهنته : <span class="gras"><?php echo "". $row['prof_lien_a']
	?>  <span class="style1">ا</span> </span> </td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" >
          جنسيته  <span class="gras">: <?php	 echo "". $row['nationalite_d_a']; ?>  
        <span class="style1">ا</span>        </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" >صلته بالمولود : <span class="gras"><?php echo $row['lien_a']; ?>  <span class="style1">ا</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" >عنوانه :  <span class="gras"><?php echo $row['adresse_d_a']; ?>  <span class="style1">ا</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" ><span>الذي بعد الاطلاع عليه امضاه معنا نحن : <span class="gras"><?php echo $row[officier_a]; ?>   <span class="style1">ا</span> </span></span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV"><div align="right"></div></td>
      </tr>
      <tr><td class="bordureH"><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureBL">واكد المصرح بانه لا يعرف الامضاء او ليس في وسعه ان يوقع على هذا الرسم لعلة فبعد الاطلاع عليه امضيناه نحن </td></tr>
      <tr><td align="center">امضاء المصرح</td>
        <td><div dir="ltr" style="width:49%; float:left ; border-left:#000 thin solid; height:100%; text-align:center">امضاء و طابع ضابط الحالة المدنية</div>
        <div style="text-align:right; width:50%; float:right; border-left:#000 thin solid; height:100% text-align:center" dir="rtl" ></div> </td></tr>
</table>
</td>
        <td align="right">&nbsp;</td></tr></table>
</div>



</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
