<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];
 include"../accesclient1.php";    
 if ($permission==securite2($tim2))
        { 
           $entreprise=$_SESSION["entreprise"];

$table=$_GET["table"];
$code=$_GET["code"];
$partie=$_GET["partie"];$anneeNais=$_GET["annee_declaration"];


$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);	

	

$off=$_SESSION["off"];
$off1=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];
$section=$_SESSION["section"];
$section1=$_SESSION["section1"];



$code=$_GET["code"];
$partie=$_GET["partie"];$anneeNais=$_GET["annee_declaration"];

if($table=="naissance") {
$Requete = "select * from naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	
}


if($table=="deces") {
$Requete = "select * from deces where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	
}



?>

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
        <td width="48%"><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px">شهادة تعدد الزوجات</span></p>          
        </td>
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
        <td><div align="right">
          <span>بناء ا على البحث الذى اجري من طرف عون السلطة المحلية  </span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <span>ان السيد  <span class="gras"><?php  echo $row['prenom_a']." ".$row['nom_a'] ; ?></span></span>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">
          <span>المولود في <span class="gras"><?php echo $row['date_hla']; ?></span></span>
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
          <div align="right"><span>من والده <span class="gras"> <?php echo $row['nom_a_p']; ?></span></span> </div>
        </div></td>
        <td></td>
      </tr>
      <tr>
        <td><div align="right"><span>و والدته ا<span class="gras"><?php echo $row['nom_a_m']; ?></span></span></div></td><td></td>
      </tr>
      <tr>
        <td><div align="right"><?php if($row['date_mla_d'] != "") echo "توفي يوم"; ?><span class="gras">&nbsp;<?php echo $row['date_mla_d']; ?></span></div></td><td></td>
      </tr></table>
       <table width="100%">
      <tr>
        <td width="53%" ><div align="center"><span> المؤرخ ب 
        <span class="gras"><?php echo $_GET["annee_declaration"]; ?></span> </span></div></td>
		
        <td width="45%"><div align="right">
          <p>
            <?php  if($table=="naissance") echo "رسم ولادته عدد"; else echo "رسم وفاته عدد"; ?> 
          <span class="gras"> <?php echo $row['code']; ?></span></p>
        </div></td><td width="2%"></td>
      </tr>
      <tr>
        <td ><div align="center">
            <p> عمالة او اقليم <span class="gras"><?php echo $province_a; ?></span> </p>
        </div></td>
        <td ><div align="right">
            <p><span></span><span>المسجل ب<?php echo $bureau_a ?> </span>ب<span class="gras"><?php echo $r['region1']; ?></span> <span class="gras"><?php echo $r[section1]; ?></span><span class="gras"></span></p>
        </div></td>
        <td></td>
      </tr>
      <tr>
        <td ><div align="center">
          <blockquote>
            <p>&nbsp;</p>
          </blockquote>
        </div></td>
		
		
        <td ><div align="right"><?php if($table=="naissance") echo "أن بذمته الزوجات الآتية "; 
		
		
		if($table=="deces") echo "أنه كانت بذمته الزوجات الآتية";
		
		?></div></td><td></td>
      </tr>
    </table>

       <table width="100%" border="1" cellpadding="0" cellspacing="0">
         <tr>
           <td bgcolor="#EFEFEF"><div align="center">مكان الإزدياد</div></td>
           <td bgcolor="#EFEFEF"><div align="center">تاريخ الإزدياد</div></td>
           <td bgcolor="#EFEFEF"><div align="center">الإسم الكامل </div></td>
         </tr>
		 
		 
		 <?php 
		 
		 include"../conn/conversion.php";
		  	   $options=$_GET["options"];

		 		 
	$k=0;
	while($options[$k]!="")
	{

$Requete3 = "select prenom_a,nom_a,date_n,lieu1 FROM tmp where `id`='$options[$k]'   ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);


	echo"
        <tr>
		
				  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>

		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]." ".$row3[prenom_a]."</div></td>

        </tr>";
		$k++;
		
		}
			
?>
		 
  </table>
       <table width="100%">
      <tr>
        <td><div align="right"></div></td>
      </tr><tr>
        <td><hr /></td>
      </tr>
    </table>
       <table width="100%">
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><div align="right"> و قد سلمت لها هذه الشهادة للإدلاء بها عند الحاجة</div></td>
         </tr>
         <tr>
           <td width="44%"><div align="center"><span class="gras"><?php echo date("Y/m/d"); ?></span> : بتاريخ </div></td>

           <td width="56%"><div align="right">حرر ب : <span class="gras"><?php echo $_SESSION["redaction_a"]; ?></span></div></td>
         </tr>
         <tr>
           <td width="44%"><div align="center">
               <p>توقيع ضابط الحالة المدنية</p>
           </div></td>
           <td width="56%"><div align="right"></div></td>
         </tr>
       </table>
  <p>&nbsp;</p>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
