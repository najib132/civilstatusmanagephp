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
$Requete = "select * from deces where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
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
<link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/>
<link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/>


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
.style2 {color: #000000}
-->
</style>
</head>

<body>

<?php if($row[deces_naissance]==1) {  ?>

<div align="right">
<table  width="100%" cellspacing="0">
      <tr><td>&nbsp;</td>
        <td width="80%" align="right" ><span class="gras" style="font-size:21px; margin-top:50px;">?????????????? ???????????????? </span></td>
      </tr><tr><td ></td>
        <td width="80%" align="right" >
       <span class="gras" style="font-size:21px; margin-top:50px;"> ?????????? ????????????????</span></td>
        </tr>
      <tr><td ></td>
        <td width="80%" ><div align="center"></div></td>
      </tr>
      <tr><td ></td>
        <td width="80%" align="right"><span class="gras" style="font-size:21px; margin-top:50px;">???????? ?????????????? ??????????????</span></td>
      </tr>
    <tr><td></td>
        </tr>
        <tr class="bordureH">
          <td align="center" class="bordureH" ><span class="gras"> ?????? ???????????????? ????????????????</span></td>
        <td width="80%" class="bordureH"><div align="center"></div></td>
      </tr>
      <tr><td><img src="Image3.png" />
      </td>
        <td align="right" class="bordureV">?????????? ???? ??????????<span class="gras"> : <?php echo $province_a; ?>   <span class="style1">??</span> </span></td>
      </tr><tr><td> <table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td width="12.5%"><img src="Image2.png" /></td>
      </tr></table></td>
        <td align="right" class="bordureV">??????????&nbsp;&nbsp;: <span class="gras"> <?php echo $r['cercle']; ?> </span><span class="style1">??</span> </span></td>
      </tr><tr><td> <table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image2.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV"><?php echo $r['region1']; ?>    <span class="gras">&nbsp;&nbsp;: 
        <?php 
		echo $r['section1']." ";
		?>
        <span class="style1">??</span> </span>    </td>
        </tr><tr><td class="bordureH"><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image2.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureBL"> ????????&nbsp;: 
         <span class="gras"> <?php echo $bureau_a; ?>   <span class="style1">??</span> </span>        </td>
      </tr> <tr><td>
        <table cellspacing="0" width="98%" style="color:#FFF">
          <tr><td><img src="Image4.png" />
      </td>
        </tr></table>
        </td>
        <td align="right" class="bordureV">&nbsp;?????? ?????????????? : <span class="gras"> <?php echo $row['code']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?????? ?????? :<span class="gras"> <?php echo $row['partie']; ?>   <span class="style1">??</span> </span>&nbsp;</td>
      </tr><tr><td class="bordureH"> <table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image8.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureBL">?????????? ??????????????&nbsp;:&nbsp;</span><span class="gras"><?php echo convertDate_f($row['date_d']); ?><span class="style1">??</span> </span></td>
      </tr>
      
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">?????????? ???????????? : <span class="gras"> &nbsp;&nbsp;<?php echo $row['date_hla_d']; ?>   <span class="style1">??</span> </span> <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--></td>
      </tr><tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image8.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">?????????? ??   &nbsp;:&nbsp;</span>         <span class="gras"> <?php echo $row['date_mla_d']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="gras">  <?php echo $row['date_n_d']; ?>   <span class="style1">??</span> </span></td>
      </tr><tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image9.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"><span dir="rtl">?????? ???????????? <span class="gras"><?php echo $row['heure']; ?></span> ???? ??????????????&nbsp;&nbsp;??</span><span class="gras"><?php echo $row['minute']; ?></span></td>
        </tr><tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image7.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"> ??
         ???????? ???????????? :  <span class="gras"> <?php echo $row['ville_deces_a']; ?>   <span class="style1">??</span> </span>        </td>
      </tr><tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV"><div dir="ltr" style="width:50%; float:left">Pr??nom et nom : <span class="gras"> <?php echo $row['prenom']." ".$rowe[nom]; ?></span></div>
        <div style="text-align:right; width:50%; float:right" dir="rtl" >?????????? ???????????? ?? ?????????????? : <span class="gras"> <?php echo $row['prenom_a']." ".$rowe[nom_a]; ?>   <span class="style1">??</span> </span></div>        </td>
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
        <td width="12px" align="center">????????</td>
         <td width="12px"><?php 
		if ($row['sex'] == 'M') 
		echo "<img src='ImageChoix1.png' />"; 
		else
		echo "<img src='ImageChoix0.png' />"; 
		 ?></td>
          <td width="12px">??????</td>
          
          <td width="12px"></td>
          <td width="12px" align="right">????????</td>
      </tr></table>    </td>
        </tr>
        <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">???????????? : <span class="gras"> <?php echo $row['nationalite_personne_a']; ?>   <span class="style1">??</span> </span></td>
      </tr> 
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image7.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">???????????? ?? : <span class="gras"> <?php echo $row['adresse_personne_a']; ?>   <span class="style1">??</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">?????????? ?????????????? : <span class="gras"> &nbsp;&nbsp;<?php echo $row['date_hla']; ?></span><span class="gras"> <span class="style1">??</span> </span></td>
      </tr><tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image8.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">?????????? ??   &nbsp;:&nbsp;</span>         <span class="gras"> <?php echo $row['date_mla']; ?>   <span class="style1">??</span> </span><!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?????? :<span class="gras">  <?php //echo $row['annee_declaration']; ?></span>--></td>
      </tr>
      
      
      
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image7.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"> ??
          ???????? ?????????????? : <span class="gras"> <?php echo $row['lieu1']; ?>   <span class="style1">??</span> </span>        </td>
      </tr>
      
      
      
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"> ??
          ???????????? ???????????????? ?????????????? : <span class="gras"> <?php echo $row['etat_a']; ?>   <span class="style1">??</span> </span>        </td>
      </tr>
      
      
      
            <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"> ??
          ?????????????? ?????????????? ?????????????? : <span class="gras"> <?php echo $row['niveau_scolaire_a']; ?>   <span class="style1">??</span> </span>        </td>
      </tr>
      
      
        <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image4.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"> ??
          ????????  ?????????????? : <span class="gras"> <?php echo $row['prof_personne_a']; ?>   <span class="style1">??</span> </span>        </td>
      </tr>
      
      
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image9.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">
        <span><span>
        <?php if ($row['sex'] == 'M') echo "??????????"; else echo "????????????";
?>
&nbsp;&nbsp;:</span><span class="gras"> <?php echo $row['nom_a_p']; ?>   <span class="style1">??</span> </span></span></td>
      </tr><tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">?????????? ?????????? ????????<span class="gras"> :&nbsp;&nbsp;<?php echo $row['date_hla_p']; ?></span> <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;??????: --><?php echo ""; ?> <span class="gras"> <span class="style1">??</span> </span></td>
      </tr>
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image8.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">?????????? ??   :&nbsp;&nbsp;<span class="gras"><?php echo $row['date_pla_p']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ?????? :  <?php echo yearofdate($row['date_n_p']); ?> <span class="gras"> <span class="style1">??</span> </span></td>
      </tr>
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image7.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"><span><span class="style1">.</span>???????????? ??</span><span class="gras">
:    <?php echo $row['adresse_p_a']; ?>   <span class="style1">??</span> </span> </td>
      </tr>
     
     
     
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image4.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">??????????&nbsp;: &nbsp;<span class="gras"><?php echo $row['prof_p_a']; ?>   <span class="style1">??</span> </span></td>
      </tr>
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">???????????? : <span class="gras"> <?php echo $row['nationalite_pa']; ?>   <span class="style1">??</span> </span></td>
      </tr>
      
      
      
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image9.png" />
      </td>
      </tr></table></td>
        <td class="bordureV" align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php if ($row['sex'] == 'M') echo "????????????"; else echo "??????????????";
?> :  &nbsp;</span><span class="gras"> <?php echo $row['nom_a_m']; ?>   <span class="style1">??</span> </span> </td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">?????????? ?????????? ????????<span class="gras"> :&nbsp;&nbsp;<?php echo $row['date_hla_m']; ?></span><!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;??????: --><?php echo ""; ?> <span class="gras"> <span class="style1">??</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image8.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">?????????? ??   :&nbsp;&nbsp;<span class="gras"><?php echo $row['date_mla_m']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ??????:  <?php echo yearofdate($row['date_n_m']); ?> <span class="gras"> <span class="style1">??</span> </span></td>
      </tr>
        <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image7.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">&nbsp;<span>?????????????? ??&nbsp; :</span><span class="gras"> <?php echo $row['adresse_m_a']; ?> <span class="gras"> <span class="style1">??</span> </span></td>
      </tr>
      
       
      
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image4.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">????????????&nbsp;:&nbsp;<span class="gras"><?php echo $row['prof_m_a']; ?>   <span class="style1">??</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td height="32"><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right">??????????????&nbsp;&nbsp;:<span class="gras"> <?php echo $row['nationalite_ma']; ?> <span class="gras"> <span class="style1">??</span> </span></td>
      </tr>
      
      
      
      
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image9.png" />
      </td>
      </tr></table></td>
        <td  class="bordureV" align="right"><span>?????????? ??????????????&nbsp;:&nbsp; </span><span class="gras"><?php echo $row['date_d_hla']; ?>   <span class="style1">??</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" ><span>?????????? ?? :&nbsp;&nbsp;</span><span class="gras"><?php echo $row['date_d_mla']; ?>   <span class="style1">??</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" >?????????? ?????? ???? <span class="gras">: <?php echo $row['resp_declaration_a']; ?>   <span class="style1">??</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" >???????? : <span class="gras"><?php echo $row['age']." "; ?>   <span class="style1">??</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image4.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" >
         ?????????? : <span class="gras"><?php echo "". $row['prof_lien_a']
	?>   <span class="style1">??</span> </span> </td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" >
          ????????????  <span class="gras">: <?php	 echo "". $row['nationalite_d_a']; ?>   
        <span class="style1">??</span>        </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image1.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" >???????? ???????????????? : <span class="gras"><?php echo $row['lien_a']; ?>   <span class="style1">??</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" >???????????? :  <span class="gras"><?php echo $row['adresse_d_a']; ?>   <span class="style1">??</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td align="right" class="bordureV" ><span>???????? ?????? ?????????????? ???????? ?????????? ???????? : <span class="gras"><?php echo $row[officier_a]; ?>   <span class="style1">??</span> </span></span></td>
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
        <td align="right" class="bordureBL">???????? ???????????? ???????? ???? ???????? ?????????????? ???? ?????? ???? ???????? ???? ???????? ?????? ?????? ?????????? ???????? ???????? ?????????????? ???????? ?????????????? ?????? </td></tr>
      <tr><td align="center">?????????? ????????????</td>
        <td><div dir="ltr" style="width:49%; float:left ; border-left:#000 thin solid; height:100%; text-align:center">?????????? ?? ???????? ???????? ???????????? ??????????????</div>
        <div style="text-align:right; width:50%; float:right; border-left:#000 thin solid; height:100% text-align:center" dir="rtl" ></div> </td></tr>
     </table></td>
        <td align="right">&nbsp;</td></tr></table>
</div>


<?php } if($row[deces_naissance]==5) {  ?>




<table  width="100%" cellspacing="0">
      <tr><td width="264">&nbsp;</td>
        <td colspan="3" align="right" ><span class="gras" style="font-size:21px; margin-top:50px;">?????????????? ???????????????? </span></td>
      </tr><tr><td ></td>
        <td colspan="3" align="right" >
       <span class="gras" style="font-size:21px; margin-top:50px;"> ?????????? ????????????????</span></td>
        </tr>
      <tr><td ></td>
        <td colspan="3" ><div align="center"></div></td>
      </tr>
      <tr><td ></td>
        <td colspan="3" align="right"><span class="gras" style="font-size:21px; margin-top:50px;">???????? ?????????? ???????????????? ???????????????? ???? ????????????</span></td>
      </tr>
    <tr><td></td>
        </tr>
        <tr class="bordureH">
          <td align="center" class="bordureH" ><span class="gras"> ?????? ???????????????? ????????????????</span></td>
        <td colspan="3" class="bordureH"><div align="center"></div></td>
      </tr>
      <tr><td><img src="Image3.png" />
      </td>
        <td colspan="3" align="right" class="bordureV">?????????? ???? ??????????<span class="gras"> : <?php echo $province_a; ?></span></td>
      </tr><tr><td> <table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td width="12.5%"><img src="Image2.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right" class="bordureV">??????????&nbsp;&nbsp;:    <span class="gras"> <?php echo $r['cercle']; ?> </span><span class="style1">??</span> </td>
      </tr><tr><td> <table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image2.png" />
      </td>
      </tr></table></td>
        <td colspan="3" align="right" class="bordureV"><?php echo $r['region1']; ?>    <span class="gras">&nbsp;&nbsp;: 
        <?php 
		echo $r['section1']." ";
		?>  
        <span class="style1">??</span> </span>    </td>
        </tr><tr><td class="bordureH"><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image2.png" />
      </td>
      </tr></table></td>
        <td colspan="3" align="right" class="bordureBL"> ???????? : 
         <span class="gras"> <?php echo $bureau_a; ?> <span class="style1"> </span></span>        </td>
      </tr>
	  
	   <tr>
	   <td class="bordureH"><table width="98%" style="color:#FFF" cellspacing="0">
         <tr>
           <td><img src="Image0.png" /> <img src="Image1.png" width="260" height="24" /></td>
         </tr>
	     </table></td>
        <td colspan="3" align="right" class="bordureBL">
		
		<table width="60%">
          <tr>
            <td width="18%" height="30"><div align="right"><img src="ImageChoix1.png" width="50" height="28" /></div></td>
            <td width="18%"><div align="right">: ???????? ????????</div></td>
            <td width="15%"><div align="right"><img src="ImageChoix0.png" width="50" height="28" /></div></td>
            <td width="13%"><div align="right"> : ???????? ?????????? </div></td>
            <td width="28%"><div align="right"> : ?????? ?????????? </div></td>
          </tr>
        </table>??</td>
      </tr>
	   <tr>
	     <td><table width="98%" style="color:#FFF" cellspacing="0">
           <tr>
             <td><img src="Image4.png" width="260" height="25" /></td>
           </tr>
         </table></td>
	     <td width="439" align="right" class="bordureV">  ???????????? :  <?php echo convertDate_f($row[date_jugement]) ?></td>
         <td width="268" align="right">?????? ?????? : <?php echo $row[num_jugement] ?></td>
         <td width="319" align="right">  ?????????????? : <?php echo $row[tribunale_a] ?></td>
  </tr>
	   <tr>
         <td class="bordureH"><table cellspacing="0" width="98%" style="color:#FFF">
             <tr>
               <td><img src="Image8.png" width="260" height="25" /></td>
             </tr>
         </table></td>
	     <td colspan="3" align="right" class="bordureBL">  ?????????? ?????? ??????????  : <?php echo convertDate_f($row[date_d]) ?> </td>
	   </tr>
      
       <tr>
         <td>&nbsp;</td>
         <td colspan="3" align="right"  class="bordureV"><div align="center" class="style2"><strong><strong>?????????????? ???????? ???????????????? ???? ????????????</strong></div></td>
       </tr>
      <tr><td>&nbsp;</td>
        <td colspan="3" align="right"  class="bordureV"><span style="text-align:right; width:50%; float:right">?????????? ???????????? ?? ?????????????? : <span class="gras"> <?php echo $row['prenom_a']; echo $row[nom_a]; ?> </span></span></td>
      </tr><tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image0.png" />
      </td>
      </tr></table></td>
        <td colspan="3"  class="bordureV">&nbsp;</td>
        </tr><tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr>
        <td><img src="Image1.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right"  class="bordureV"><table align="right"  width="80%" cellspacing="0">
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
        <td width="12px" align="center">????????</td>
         <td width="12px"><?php 
		if ($row['sex'] == 'M') 
		echo "<img src='ImageChoix1.png' />"; 
		else
		echo "<img src='ImageChoix0.png' />"; 
		 ?></td>
          <td width="12px">??????</td>
          
          <td width="12px"></td>
          <td width="12px" align="right">????????</td>
      </tr></table>    </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="3" align="right"  class="bordureV">?????????? ?????????????? : <span class="gras"> &nbsp;&nbsp;<?php echo $row['date_hla']; ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;??????: <span class="gras"><?php echo $row['annee_h']; ?></span></td>
        </tr>
        <tr>
          <td><table width="98%" style="color:#FFF" cellspacing="0">
            <tr>
              <td><img src="Image8.png" width="260" height="25" /></td>
            </tr>
          </table></td>
          <td colspan="3" align="right"  class="bordureV">?????????? ??   &nbsp;:&nbsp; <span class="gras"> <?php echo $row['date_mla']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?????? :<span class="gras"> <?php echo $row['annee_declaration']; ?></span></td>
        </tr>
        <tr>
          <td><table width="98%" style="color:#FFF" cellspacing="0">
            <tr>
              <td><img src="Image7.png" width="260" height="25" /></td>
            </tr>
          </table></td>
          <td colspan="3" align="right"  class="bordureV">  ???????? ?????????????? :  <span class="gras"> <?php echo $row[lieu1] ?> </span> </td>
        </tr>
        <tr><td>&nbsp;</td>
        <td colspan="3" align="right"  class="bordureV">
        <span><span>
        <?php if ($row['sex'] == 'M') echo "??????????"; else echo "????????????";
?>
&nbsp;&nbsp;:</span><span class="gras"><span> <?php echo $row['nom_a_p']; ?></span><span class="style1">??</span> </span></span></td>
      </tr>
        
      <tr><td >&nbsp;</td>
        <td colspan="3" align="right"  class="bordureV">?????????? ?????????? ????????<span class="gras"> :&nbsp;&nbsp;<?php echo $row['date_hla_p']; ?></span> <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;??????: --><?php echo ""; ?> <span class="gras"> </span><span class="style1">??</span> </td>
      </tr>
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr>
        <td><img src="Image8.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right"  class="bordureV">?????????? ??   :&nbsp;&nbsp;<span class="gras"><?php echo $row['date_pla_p']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?????? : <?php echo yearofdate($row[date_n_p]) ?> <span class="gras"> </span><span class="style1">??</span> </td>
      </tr>
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td><img src="Image7.png" />
      </td>
      </tr></table></td>
        <td colspan="3" align="right"  class="bordureV"><span><span class="style1">.</span> ???????? ?????????? ????????</span><span class="gras">
:    <?php echo $row['lieu1_p']; ?>  <span class="style1">??</span> </span> </td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr>
        <td><img src="Image1.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right"  class="bordureV"><span><span class="style1">.</span>???????????? ??????????????</span><span class="gras">
    : <?php echo $row['niveau_scolaire_p'] ?>
    <span class="style1">??</span> </span> </td>
      </tr>
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr>
        <td><img src="Image4.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right"  class="bordureV">??????????&nbsp;: &nbsp;<span class="gras"><?php echo $row['prof_p_a']; ?>  <span class="style1">??</span> </span></td>
      </tr>
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr>
        <td><img src="Image1.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right"  class="bordureV">???????????? : <span class="gras"> <?php echo $row['nationalite_pa']; ?>  <span class="style1">??</span> </span></td>
      </tr>
      
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr><td>&nbsp;</td>
      </tr></table></td>
        <td colspan="3" align="right" class="bordureV">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php if ($row['sex'] == 'M') echo "????????????"; else echo "??????????????";
?> :  &nbsp;</span><span class="gras"> <?php echo $row['nom_a_m']; ?>  <span class="style1">??</span> </span> </td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr>
        <td><img src="Image0.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right"  class="bordureV">?????????? ?????????? ????????<span class="gras"> :&nbsp;&nbsp;<?php echo $row['date_hla_m']; ?></span> <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;??????:--> <?php echo ""; ?> <span class="gras"> </span><span class="style1">??</span> </td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr>
        <td><img src="Image8.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right"  class="bordureV">?????????? ??   :&nbsp;&nbsp;<span class="gras"><?php echo $row['date_mla_m']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ??????:  <?php echo yearofdate($row[date_n_m]) ?> <span class="gras"> </span><span class="style1">??</span> </td>
      </tr>
        <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr>
        <td><img src="Image7.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right"  class="bordureV">&nbsp;&nbsp;&nbsp;<span>???????????????? ??&nbsp;&nbsp; :</span><span class="gras"> <?php echo $row['lieu1_m']; ?> <span class="gras"> </span><span class="style1">??</span> </td>
      </tr>
      
       <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr>
        <td><img src="Image1.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right" class="bordureV"><span><span class="style1">.</span>?????????????? ?????????????? :</span><span class="gras">
          <?php echo $row['niveau_scolaire_m'] ?>
          <span class="style1">??</span> </span> </td>
      </tr>
      
      
      <tr><td><table width="98%" style="color:#FFF" cellspacing="0">
      <tr>
        <td><img src="Image4.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right"  class="bordureV">????????????&nbsp;:&nbsp;<span class="gras"><?php echo $row['prof_m_a']; ?>  <span class="style1">??</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr>
        <td height="32"><img src="Image1.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right"  class="bordureV">??????????????&nbsp;&nbsp;:<span class="gras"> <?php echo $row['nationalite_ma']; ?><span class="gras"> <span class="style1">??</span> </span></td>
      </tr>
      <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
        <tr>
          <td><img src="Image2.png" width="260" height="27" /></td>
        </tr>
      </table></td>
        <td colspan="3"  align="right" class="bordureV">???????? ?????? ?????????????? ?????????????? ?????? ?????????????? - ???? ?????????? ???????? ???????????????? ?????????????? ?????????????????? ?????????? - : <span class="gras"><?php if($row['rang']!=0) echo $row['rang']; ?>  
        <span class="style1">??</span> </span></td>
      </tr>
    <tr><td ><table width="98%" style="color:#FFF" cellspacing="0">
      <tr>
        <td><img src="Image8.png" /></td>
      </tr></table></td>
        <td colspan="3" align="right"  class="bordureV"><span>?????????? ????????????????&nbsp;:&nbsp; </span><span class="gras"> <?php echo $row['adresse_a']; ?>  <span class="style1">??</span> </span></td>
    </tr>
      
      <tr><td class="bordureH">&nbsp;</td>
        <td colspan="3" align="right" class="bordureBL">&nbsp;</td></tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td colspan="3" class="bordureV"><div align="center" class="style3">?????????????? ?????????????? ???????????? ?????????????? ??????</div></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td colspan="3" class="bordureV">&nbsp;</td>
      </tr> 
      <tr>
        <td align="center">&nbsp;</td>
        <td colspan="3" class="bordureV"><div align="right"> ?????????? ???????????? : <span class="gras"><?php echo $row['date_hla_d']; ?></span></div></td>
      </tr>
      <tr>
        <td align="center"><table width="98%" style="color:#FFF" cellspacing="0">
          <tr>
            <td><img src="Image8.png" /></td>
          </tr>
        </table></td>
        <td colspan="3" class="bordureV"><div align="right">?????????? ??   &nbsp;:&nbsp; <span class="gras"> <?php echo $row['date_mla_d']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="gras"> <?php echo convertDate_f($row['date_n_d']); ?> </span></div></td>
      </tr>
      <tr>
        <td align="center"><table width="98%" style="color:#FFF" cellspacing="0">
          <tr>
            <td><img src="Image7.png" width="260" height="25" /></td>
          </tr>
        </table></td>
        <td colspan="3" bgcolor="#FFFFFF" class="bordureV"><div align="right">??
       ???????? ???????????? : <span class="gras"> <?php echo $row['ville_deces_a']; ?></span> </div></td>
      </tr>
      <tr>
        <td align="center"><table width="98%" style="color:#FFF" cellspacing="0">
          <tr>
            <td><img src="Image7.png" width="260" height="25" /></td>
          </tr>
        </table></td>
        <td colspan="3" bgcolor="#FFFFFF" class="bordureV"><div align="right"><span><span class="style1"></span>???????????? ??</span><span class="gras"> :  <?php echo $row['adresse_p_a']; ?></span> </div></td>
      </tr>
      <tr>
        <td align="center"><table width="98%" style="color:#FFF" cellspacing="0">
          <tr>
            <td><img src="Image1.png" width="260" height="24" /></td>
          </tr>
        </table></td>
        <td colspan="3" class="bordureV"><div align="right">??
        ???????????? ???????????????? ?????????????? : <span class="gras"> <?php echo $row['etat_a']; ?> <span class="style1">??</span> </span></div></td>
      </tr>
      <tr>
        <td align="center"><table width="98%" style="color:#FFF" cellspacing="0">
          <tr>
            <td><img src="Image1.png" width="260" height="24" /></td>
          </tr>
        </table></td>
        <td colspan="3" class="bordureV"><div align="right">  ?????????????? ?????????????? ??????????????  <span class="gras">  : <?php echo $row['niveau_scolaire_a']; ?> <span class="style1">??</span> </span> </div></td>
      </tr>
      <tr>
        
		
	    <td class="bordureH"><table width="98%" style="color:#FFF" cellspacing="0">
          <tr>
            <td><img src="Image4.png" width="260" height="25" /></td>
          </tr>
        </table></td>
    <td colspan="3" align="right" class="bordureBL"> : ????????  ??????????????  <span class="gras"> <?php echo $row['prof_personne_a']; ?> <span class="style1"> </span> </span></td>
      </tr>
	  
      <tr>
        <td align="center">&nbsp;</td>
        <td colspan="3"><div align="center"><span style="width:49%; float:left ; border-left:#000 thin solid; height:100%; text-align:center">?????????? ?? ???????? ???????? ???????????? ??????????????</span></div></td>
      <tr>
        <td align="center">&nbsp;</td>
        <td colspan="3" class="bordureV">&nbsp;</td>
      <tr>
        <td align="center">&nbsp;</td>
        <td colspan="3" class="bordureV">&nbsp;</td>
      
	  	  
     </table>
</td>
        <td align="right">&nbsp;</td></tr></table>
</div>



<?php }   ?>



</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
