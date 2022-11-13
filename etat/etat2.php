<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);      include"../conn/connexion.php";

$permission=$_SESSION["permission"];                                                                 $section=$_SESSION["section"];      
$section1=$_SESSION["section1"];  


$pays=$_SESSION["pays"];      
$pays1=$_SESSION["pays1"];  

$ministre=$_SESSION["ministre"];      
$ministre1=$_SESSION["ministre1"];      


$off=$_SESSION["off"];
$off1=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];

   $idf=$_SESSION["idf"];
   $idf_m=$_SESSION["idf_m"];
   
   
 include"../accesclient1.php";
if ($permission==securite2($tim2)) { //include"div.php";

$type=$_GET["type"];
$annee=$_GET["annee"];
$nn=$_GET["nn"];
$table=$_GET["table"];
$secteur=$_GET["secteur"];


$mois1=$_GET["mois1"];
$mois2=$_GET["mois2"];

?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLiees.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>



  <style type="text/css">
<!--
.style1 {font-size: 18px}
.gras {	font-weight: bold;
}
.gras {	font-weight: bold;
	text-align: center;
}
.style5 {font-size: 20px}
.style6 {font-size: 24px}
.style4 {font-size: 10px}
.style7 {color: #EFEFEF}
.style8 {font-size: 14px}
-->
  </style>
  <table  width="95%" align="center">
    <tr>
      <td width="50%"><div align="right" class="style5">
        <div align="center" class="style4">
          <div align="left"><?php echo $_SESSION["idf"]; ?></div>
        </div>
      </div></td>
      <td width="50%"><div align="center" class="gras">
        <div align="right">المملكة المغربية </div>
      </div></td>
    </tr>
    <tr>
      <td width="50%">&nbsp;</td>
      <td width="50%"><div align="center" class="gras">
        <div align="right">وزارة الداخلية </div>
      </div></td>
    </tr>
    <tr>
      <td width="50%">&nbsp;</td>
      <td width="50%"><div align="center" class="gras">
        <div align="right">عمالة او اقليم
          : <?php echo $province_a; ?></div>
      </div></td>
    </tr>
    <tr>
      <td width="50%"><div align="right"><span class="style5">
        <?php if($table=="naissance") echo "لائحة المواليد المسجلين";
	  
	   if($table=="deces") echo "لائحة الوفيات المصرح بهم"; 
	   if($table=="mention_p") echo "اللائحة بحسب البيانات الهامشية"; 
	   
	   
	   ?>
      </span></div></td>
      <td><div align="right" class="gras">
        <div align="right"><?php 
	  
	  $Req = "select region1,section1 from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);

	  echo $r['region1']; ?>
          <?php 
		echo $r['section1']." ";
		?>
        </div>
      </div></td>
    </tr>
    <tr>
      <td width="50%">&nbsp;</td>
      <td width="50%" height="20"><div align="center" class="gras">
        
        <div align="right"><?php echo $bureau_a; ?></div>
      </div></td>
    </tr>
  </table>
  <div align="center"></div>
  <div align="center">
  
 <?php if($table=="naissance") { ?>
 <table width="95%">
      <tr>
        <td width="19%" bgcolor="#EFEFEF"><div align="right"><span class="style1">العدد الإجمالي</span></div></td>
        <td width="19%" bgcolor="#EFEFEF"><div align="right"><span class="style1">الجنس   </span></div></td>
        <td width="20%" bgcolor="#EFEFEF"><div align="right"><span class="style1">نوع التصريح</span></div></td>
        <td width="12%" bgcolor="#EFEFEF"><div align="right"></div></td>
        <td width="11%" bgcolor="#EFEFEF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#D9FFFF"><div align="right"><span class="style1">
          <?php 
	
	include"../conn/conversion.php";
	
	 $annee1=$_GET["annee1"];
	 $annee2=$_GET["annee2"];
 $mois=$_GET["mois"];
 
 $sex=$_GET["sex"];
 $ordre=$_GET["ordre"];
 $sens=$_GET["sens"];
 
 $declaration=$_GET["declaration"];
 
 if($sex!="on") $req2=" and `sex`='".$sex."' "; 

$d=date("$annee1-$mois1-01");
$f=date("$annee2-$mois2-31");
	
 $Req =  " SELECT COUNT(code) as nbr  FROM `naissance` WHERE `deces_naissance` $declaration and  `annee_declaration` between '".$annee1."' and  '".$annee2."' and `date_d` BETWEEN '".$d."' and  '".$f."'  $req2  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $enfant=$detail['nbr'];

			  	echo number_format($enfant, 0, '', ' ');

	
	?>
        </span></div></td>
        <td bgcolor="#D9FFFF"><div align="right"><span class="style1"><?php if ($sex == 'M') echo "صنف الذكور "; else if($sex=="F") echo "صنف الإناث"; ?>
        </span></div></td>
        <td bgcolor="#D9FFFF"><div align="right" class="style1"><?php 
		
		if($declaration=="IN(0,2)") echo "  عادي ";
		if($declaration=="IN(3,4)") echo " بحكم  ";
		?>
        </div></td>
        <td bgcolor="#D9FFFF"><div align="right"><span class="style1"> <strong>إلى</strong><strong>
           <?php 
	
				$Requete3 = "select mois_a from mois where `mois`='".$mois2."'  ";
						mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$ro = mysql_fetch_array($result3);
	echo $ro[mois_a];
	
	
	  ?>
        <?php echo $annee2; ?>        </strong></span></div></td>
        <td bgcolor="#D9FFFF"><div align="right"><strong> من <?php 
	
				$Requete3 = "select mois_a from mois where `mois`='".$mois1."'  ";
						mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$ro = mysql_fetch_array($result3);
	echo $ro[mois_a];
	
	
	  ?>
        <span class="style1"><?php echo $annee1; ?></span>        </strong></div></td>
      </tr>
    </table>
    <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFFF">
        <td width="170" height="35" bgcolor="#EFEFEF"><div align="center" class="style1">الجنس</div></td>
        <td width="231" bgcolor="#EFEFEF"><div align="center" class="style1">محل الإزدياد </div></td>
        <td width="188" bgcolor="#EFEFEF"><div align="center" class="style1">تاريخ الإزدياد </div></td>
        <td width="159" bgcolor="#EFEFEF"><div align="center" class="style1">إسم الأم</div></td>
        <td width="202" bgcolor="#EFEFEF"><div align="center" class="style1">إسم الأب</div></td>
        <td width="195" bgcolor="#EFEFEF"><div align="center" class="style1">الإسم الكامل</div></td>
        <td width="74" bgcolor="#EFEFEF"><div align="center" class="style1">رقم العقد</div></td>
      </tr>
      <?php 	
		$page = isset($_GET['page']) ? $_GET['page'] : ''; 



	//echo $Requete3;

// Variable codebre d'enreg par page
$limit=$nn;
if($debut==""){$debut=0;}
$debut=$page*$limit;
// Compte le codebre de champ
$nb_total=$enfant;
// Requete
$limite=mysql_query("$requete limit $debut,$limit");


// Affiche le page par page avec ses liens
if ($page>0) {
$precedent=$page-1;
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&mois1=$mois1&mois2=$mois2&annee1=$annee1&annee2=$annee2&nn=$nn&table=$table&mois=$mois&sex=$sex&declaration=$declaration&ordre=$ordre&sens=$sens\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&mois1=$mois1&mois2=$mois2&annee1=$annee1&annee2=$annee2&nn=$nn&table=$table&mois=$mois&sex=$sex&declaration=$declaration&ordre=$ordre&sens=$sens\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

 
 /**********Affichage*******/
 

 
 $Requete3 = "select partie,pj,annee_declaration,code,nom_a,prenom_a,nom_a_p,nom_a_m,date_n,lieu1,sex FROM `naissance` WHERE `deces_naissance` $declaration  and  `annee_declaration` between '".$annee1."' and  '".$annee2."'  and `date_d` BETWEEN '".$d."' and  '".$f."'  $req2 ORDER BY $ordre $sens  $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me nnnnnlors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

if($row3[sex]=="F") $sex="أنثى "; else $sex="ذكر";


	echo"
        <tr>
		  		  <td><div align=\"center\" class=\"Style9\">".$sex."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu1]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a_m]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a_p]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]." ".$row3[prenom_a]."</div></td>
  <td><div align=\"center\" class=\"Style9\"><a href=\"../doc_naissance/$row3[annee_declaration]/$row3[partie]/$row3[pj].jpg\" style=text-decoration:none target=_blank>".$row3[annee_declaration]."-$row3[code] </div></td>


        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
    </table>
	    </p>
  </div>

	
	 <div align="right">الصفحة : <?php echo $page+1; ?>
	   <?php } ?> 














       <?php if($table=="deces") { ?>
	 </div>
     <div align="center">
       <table width="95%">

         <tr>
           <td colspan="8">&nbsp;</td>
         </tr>
         <tr>
           <td width="18%" bgcolor="#EFEFEF"><div align="right" class="style8">القطاع المهني الذي ينتمي إليه المتوفون</div></td>
           <td width="13%" bgcolor="#EFEFEF"><div align="right"><span class="style8">العدد الإجمالي</span></div></td>
           <td colspan="2" bgcolor="#EFEFEF" class="style8"><div align="center">العمر</div>
           <div align="right"></div></td>
           <td width="11%" bgcolor="#EFEFEF"><div align="right" class="style8">الجنس </div></td>
           <td width="12%" bgcolor="#EFEFEF"><div align="right" class="style8">نوع التصريح</div></td>
           <td width="11%" bgcolor="#EFEFEF"><span class="style8"></span></td>
           <td width="10%" bgcolor="#EFEFEF"><span class="style8"></span></td>
         </tr>
         <tr>
           <td bgcolor="#D9FFFF"><div align="right" class="style8"><strong>
             <?php 
	
				$Requete3 = "select profession_a from profession where `id`='".$secteur."'  ";
						mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rov = mysql_fetch_array($result3);
	echo $rov[profession_a];
	
	
	  ?>
           </strong></div></td>
           <td bgcolor="#D9FFFF"><div align="right"><span class="style8">
             <?php 
	
	include"../conn/conversion.php";
	


	 $annee=$_GET["annee"];
 $mois=$_GET["mois"];
 $sex=$_GET["sex"];
 $age1=$_GET["age1"];
 $age2=$_GET["age2"];
  $declaration=$_GET["declaration"];
  
  	 $annee1=$_GET["annee1"];
	 $annee2=$_GET["annee2"];
 $ordre=$_GET["ordre"];
 $sens=$_GET["sens"];
 
$d=date("$annee1-$mois1-01");
$f=date("$annee2-$mois2-31");

  

if($declaration=="on") $declara="";
if($declaration==1) $declara="and `deces_naissance`=1 ";
if($declaration==5) $declara="and `deces_naissance`=5 ";
 
 if($sex!="on") $req2=" and `sex`='".$sex."' "; 

 if($secteur!="") $deces="and `secteur`='".$secteur."' ";

 
 
if($age2==1 && ($age1=="" || $age1==0)) 
{

 if($age1!="") $req3=" AND TIMESTAMPDIFF(DAY,date_n,date_n_d) > 0 ";
 if($age2!="") $req4=" and  TIMESTAMPDIFF(DAY,date_n,date_n_d) < 365 ";

}


if($age2==1 && $age1==1) 
{

 if($age1!="") $req3="";
 if($age2!="") $req4=" and  TIMESTAMPDIFF(MONTH,date_n,date_n_d) =12";

}



if($age2 > 1) 
{

 if($age1!="") $req3=" and  TIMESTAMPDIFF(YEAR,date_n,date_n_d) >= '".$age1."' ";
 if($age2!="") $req4=" and  TIMESTAMPDIFF(YEAR,date_n,date_n_d) <= '".$age2."' ";

}


if(($age2==0 && $age1==0) || ($age2=="" && $age1=="")) 
{

 if($age1!="") $req3="";
 if($age2!="") $req4=" and  TIMESTAMPDIFF(DAY,date_n,date_n_d) =0 ";

}



$Req =  " SELECT COUNT(code) as nbr  FROM `deces` WHERE  `annee_declaration` BETWEEN '".$annee1."' AND '".$annee2."' and `date_d` BETWEEN '".$d."' and  '".$f."'  $declara  $req2 $req3 $req4 $deces ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $enfant=$detail['nbr'];

			  	echo number_format($enfant, 0, '', ' ');

	
	?>
           </span></div></td>
           <td width="13%" bgcolor="#D9FFFF" class="style1"><div align="right" class="style8">إلى : <?php echo $age2; ?> <?php 
		   
		   if($age2=="") echo "";
		  if($age2==0 || $age2==1)	echo"سنة ";	   
if($age2==2)	echo"سنتين";	   
if($age2 > 2)	echo"سنوات";	   
 
		   
		   ?></div></td>
           <td width="12%" bgcolor="#D9FFFF" class="style1"><div align="right" class="style8"> من : <?php echo $age1; ?>  <?php 
		   		   if($age1=="") echo "";

if($age1==0 || $age1==1)	echo"سنة ";	   
if($age1==2)	echo"سنتين";	   
if($age1 > 2)	echo"سنوات";	   

		   
		   ?></div></td>
           <td bgcolor="#D9FFFF"><div align="right" class="style8">
             <?php if ($sex == 'M') echo "صنف الذكور "; else if($sex=="F") echo "صنف الإناث"; ?>
           </div></td>
           <td bgcolor="#D9FFFF"><div align="right" class="style8">
             <?php 
		
		if($declaration==1) echo "  عادي ";
		if($declaration==5) echo " بحكم  ";
		?>
           </div></td>
           <td bgcolor="#D9FFFF"><div align="right" class="style8"> <strong>إلى
               <?php 
	
				$Requete3 = "select mois_a from mois where `mois`='".$mois2."'  ";
						mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$ro = mysql_fetch_array($result3);
	echo $ro[mois_a];
	
	
	  ?>
               <?php echo $annee2; ?> </strong></div></td>
           <td bgcolor="#D9FFFF"><div align="right" class="style8"><strong> من
             <?php 
	
				$Requete3 = "select mois_a from mois where `mois`='".$mois1."'  ";
						mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$ro = mysql_fetch_array($result3);
	echo $ro[mois_a];
	
	
	  ?>
           <?php echo $annee1; ?> </strong></div></td>
         </tr>
       </table>
     </div>
     <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFFF">
        <td width="138" height="35" bgcolor="#EFEFEF"><div align="center" class="style1">رقم البطاقة الوطنية</div></td>
        <td width="323" bgcolor="#EFEFEF"><div align="center" class="style1">محل السكنى</div></td>
        <td width="236" bgcolor="#EFEFEF"><div align="center" class="style1">محل الوفاة</div></td>
        <td width="215" bgcolor="#EFEFEF"><div align="center" class="style1">تاريخ الوفاة</div></td>
        <td width="212" bgcolor="#EFEFEF"><div align="center" class="style1">الإسم الكامل</div></td>
        <td width="97" bgcolor="#EFEFEF"><div align="center" class="style1">رقم رسم الوفاة</div></td>
      </tr>
      <?php 	
		$page = isset($_GET['page']) ? $_GET['page'] : ''; 



	//echo $Requete3;

// Variable codebre d'enreg par page
$limit=$nn;
if($debut==""){$debut=0;}
$debut=$page*$limit;
// Compte le codebre de champ
$nb_total=$enfant;
// Requete
$limite=mysql_query("$requete limit $debut,$limit");


// Affiche le page par page avec ses liens
if ($page>0) {
$precedent=$page-1;
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&mois1=$mois1&mois2=$mois2&annee1=$annee1&annee2=$annee2&ordre=$ordre&sens=$sens&nn=$nn&table=$table&mois=$mois&sex=$sex&age1=$age1&age2=$age2&declaration=$declaration&secteur=$secteur\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&mois1=$mois1&mois2=$mois2&annee1=$annee1&annee2=$annee2&ordre=$ordre&sens=$sens&nn=$nn&table=$table&mois=$mois&sex=$sex&age1=$age1&age2=$age2&declaration=$declaration&secteur=$secteur\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

 
 /**********Affichage*******/
 

 
 $Requete3 = "select partie,pj,annee_declaration,nom_a,prenom_a,date_n_d,ville_deces_a,code,adresse_personne_a,cin FROM `deces` WHERE `annee_declaration` BETWEEN '".$annee1."' AND '".$annee2."' and `date_d` BETWEEN '".$d."' and  '".$f."' $declara $req2 $req3 $req4 $deces  order by $ordre $sens $limit_str  ";
mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me nnnnnlors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 



	echo"
        <tr>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[cin]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[adresse_personne_a]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row3[ville_deces_a]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n_d])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[nom_a]." ".$row3[prenom_a]."</div></td>
  <td><div align=\"center\" class=\"Style9\"><a href=\"../doc_deces/$row3[annee_declaration]/$row3[partie]/$row3[pj].jpg\" style=text-decoration:none target=_blank>".$row3[annee_declaration]."-$row3[code] </div></td>


        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
    </table>
	    </p>
  </div>
	
	 <p align="right">
  الصفحة : <?php echo $page+1; ?>
  <?php } ?> 
  
  
  
  
   <?php if($table=="mention_p") { ?>
<table width="95%">
      <tr>
        <td width="19%" bgcolor="#EFEFEF"><div align="right"><span class="style1">العدد الإجمالي</span></div></td>
        <td width="45%" bgcolor="#EFEFEF"><div align="right" class="gras">
          <div align="right">نوع البيان</div>
        </div></td>
        <td width="10%" bgcolor="#EFEFEF"><div align="right"><span class="style1">الجنس</span></div></td>
        <td colspan="2" bgcolor="#EFEFEF"> <div align="center"><span class="style5">
        الشهر </span></div></td>
        <td width="10%" bgcolor="#EFEFEF"><div align="right"><span class="style1">السنة</span></div></td>
      </tr>
      <tr>
        <td bgcolor="#D9FFFF"><div align="right"><span class="style1">
          <?php 
	
	include"../conn/conversion.php";
	
	 $annee=$_GET["annee"];
 $sex=$_GET["sex"];
 $bayane=$_GET["bayane"];
 
 $req1=" and `date` between '".date("$annee-$mois1-01")."' and '".date("$annee-$mois2-31")."' ";  
 if($sex!="on") $req2=" and `sex`='".$sex."' "; 


	
$Req =  " SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `jugement`=$bayane $req1 $req2  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $enfant=$detail['nbr'];

			  	echo number_format($enfant, 0, '', ' ');

	
	?>
        </span></div></td>
        <td bgcolor="#D9FFFF"><div align="right" class="gras">
          <div align="right"><?php 
		
		
			   	$Requete3 = "select bayane1 from mention where `id`=$bayane  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);
		
		echo $rox[bayane1];
		
		
		?>
          </div>
        </div></td>
        <td bgcolor="#D9FFFF"><div align="right"><span class="style1">
          <?php if ($sex == 'M') echo "صنف الذكور "; else if($sex=="F") echo "صنف الإناث"; ?>
        </span></div></td>
        <td width="7%" bgcolor="#D9FFFF"><div align="right">
         <strong> إلى : 
         <?php 
	
				$Requete3 = "select mois_a from mois where `mois`='".$mois2."'  ";
						mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$ro = mysql_fetch_array($result3);
	echo $ro[mois_a];
	
	
	  ?>
        </strong></div></td>
        <td width="9%" bgcolor="#D9FFFF"><div align="right"><strong> من : 
          <?php 
	
				$Requete3 = "select mois_a from mois where `mois`='".$mois1."'  ";
						mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$ro = mysql_fetch_array($result3);
	echo $ro[mois_a];
	
	
	  ?> 
        </strong> </div></td>
        <td bgcolor="#D9FFFF"><div align="right"><span class="style1"><?php echo $annee; ?></span></div></td>
      </tr>
  </table>
    <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFFF">
        <td width="130" height="35" bgcolor="#EFEFEF" class="style1"><div align="center" class="style1">&#1605;&#1604;&#1575;&#1581;&#1592;&#1575;&#1578;</div></td>
        <td width="172" bgcolor="#EFEFEF" class="style1"><div align="center">&#1575;&#1604;&#1580;&#1607;&#1577; &#1575;&#1604;&#1605;&#1585;&#1587;&#1604;&#1577;</div></td>
        <td width="129" bgcolor="#EFEFEF" class="style1"> <div align="center">تاريخ التوصل</div></td>
		
		
<?php 	if($bayane==1 || $bayane==2){	?>		
        <td width="166" bgcolor="#EFEFEF" class="style1"><div align="center">
          <p>رقم الصحيفة</p>
          </div></td>
        <td width="149" bgcolor="#EFEFEF" class="style1"><div align="center" class="style1">المعنيين بالعقد</div></td>
		
		<?php } ?>
		
        <td width="146" bgcolor="#EFEFEF" class="style1"><div align="center" class="style1">محل الإزدياد </div></td>
        <td width="153" bgcolor="#EFEFEF" class="style1"><div align="center" class="style1">تاريخ الإزدياد </div></td>
        <td width="172" bgcolor="#EFEFEF" class="style1"><div align="center" class="style1">الإسم الكامل</div></td>
      </tr>
      <?php 	
		$page = isset($_GET['page']) ? $_GET['page'] : ''; 



	//echo $Requete3;

// Variable codebre d'enreg par page
$limit=$nn;
if($debut==""){$debut=0;}
$debut=$page*$limit;
// Compte le codebre de champ
$nb_total=$enfant;
// Requete
$limite=mysql_query("$requete limit $debut,$limit");


// Affiche le page par page avec ses liens
if ($page>0) {
$precedent=$page-1;
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&mois1=$mois1&mois2=$mois2&annee=$annee&nn=$nn&table=$table&mois=$mois&sex=$sex&bayane=$bayane\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&mois1=$mois1&mois2=$mois2&annee=$annee&nn=$nn&table=$table&mois=$mois&sex=$sex&bayane=$bayane\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

 
 /**********Affichage*******/
 

 
 $Requete3 = "select remarque,source,date_reception,numero,intersse,bayane1,date,code,annee_declaration,sex FROM `mention_p` WHERE `jugement`=$bayane $req1 $req2  $limit_str  ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me nnnnnlors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 



$Requete31 = "select lieu1,date_n,nom_a, prenom_a from naissance where `code`='".$row3[code]."' and `annee_declaration`='".$row3[annee_declaration]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
if($bayane==1 || $bayane==2)
{

$ligne1= "<td><div align=\"center\" class=\"Style9\">".$row3[numero]."</div></td>";
$ligne2="<td><div align=\"center\" class=\"Style9\">".$row3[intersse]."</div></td>";
}

	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$row3[remarque]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[source]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_reception])."</div></td>

$ligne1
$ligne2
		  		  <td><div align=\"center\" class=\"Style9\">".$ro[lieu1]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($ro[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$ro[nom_a]." ".$ro[prenom_a]."</div></td>


        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
		
	?>
    </table>
	    </p>
  </div>

	
	 <div align="center">
	   <p>الصفحة : <?php echo $page+1; ?>
	     <?php } ?> 



  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
         <?php if($table=="deces_prof") { 
		 		$annee=$_GET['annee_declaration'];
		$mois1=$_GET['mois1'];
		$mois2=$_GET['mois2'];

		 
		 
		 ?>
	   </p>
	   <table width="75%">
         <tr>
           <td colspan="4" bgcolor="#EFEFEF"><div align="center" class="style6"><a href="fiche_dep3.php?annee_declaration=<?php echo $annee ?>&mois1=<?php echo $mois1 ?>&mois2=<?php echo $mois2 ?>&type=16&table=deces_prof" style="text-decoration:none">جذاذة الفرز (4/5) <span class="style7">ا لفرز</span></a></div></td>
         </tr>
         <tr>
           <td width="26%" bgcolor="#EFEFEF"><div align="center" class="style1">إلى  :
             <?php 
					
					


			   	$Requete3 = "select mois_a from mois where `mois`='".$mois2."'  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
					
					echo $row[mois_a];
					
					?>
           </div></td>
           <td width="21%" bgcolor="#EFEFEF"><div align="center" class="style1">من :
             <?php 
					
					

			   	$Requete3 = "select mois_a from mois where `mois`='".$mois1."'  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
					
					echo $row[mois_a];
					
					
					
					 ?>
           </div></td>
           <td width="19%" bgcolor="#EFEFEF"><div align="center" class="style1">الشهر </div></td>
           <td width="34%" bgcolor="#EFEFEF"><div align="center" class="style1">السنة :
             <?php 
		
		echo $annee;
		
		 ?>
           </div></td>
         </tr>
       </table>
	   <p>&nbsp;</p>
	 </div>
  <div align="center">
  
  
  			<fieldset style="width:800px">
          <legend class="style39" align="right">  الوفيات حسب الحرفة  </legend>

	   <table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
	     <tr bgcolor="#FFFFFF">
	       <td height="17" colspan="2" bgcolor="#EFEFEF"><div align="center"><span class="style1">الجنس</span></div></td>
          <td width="778" bgcolor="#EFEFEF"><div align="center"><span class="style1">القطاع المهني</span></div></td>
        </tr>
	     <tr bgcolor="#FFFFFF">
	       <td width="136" height="18" bgcolor="#EFEFEF"><div align="center">الإناث</div></td>
          <td width="118" bgcolor="#EFEFEF"><div align="center">الذكور</div></td>
          <td width="778" bgcolor="#EFEFEF">&nbsp;</td>
        </tr>
	     <?php 	

$d=date("$annee-$mois1-01");
$f=date("$annee-$mois2-31");

	$Requete3 = "select profession_a,id from profession where `cat`=0    ";
	mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
		  
	$table="profession";
		while($row!="")
	
	   {	
	   
//////////////////CALCUl		
  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and `secteur`=$row[id] and `sex`='M'    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 

 $male=$detail['nbr'];
	   


  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and `secteur`=$row[id] and `sex`='F'    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 

 $femelle=$detail['nbr'];



	echo"
        <tr>
		          <td><div align=\"center\" class=\"Style9\">".number_format($femelle, 0, '', ' ')."</div></td>
		          <td><div align=\"center\" class=\"Style9\">".number_format($male, 0, '', ' ')."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$row[profession_a]."</div></td>
        </tr>";
	   
	   
	$row = mysql_fetch_array($result3);
	   }

		
	?>
       </table>
     </p>
	   </fieldset>

  </div>
  

	 <table width="100%">
       <tr>
         <td colspan="5">&nbsp;</td>
       </tr>
       <tr>
         <td width="32%">Fait à : <span class="gras"><?php echo $bureau; ?></span></td>
         <td colspan="2"><div align="left">Le :<span class="gras"><?php echo date('d/m/Y'); ?></span></div>
             <div align="center"></div></td>
         <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
         <td width="17%"><div align="right"> بتاريخ : <span class="gras"><?php echo date("d/m/Y"); ?></span></div></td>
         <td width="30%"><div align="right">حرر ب :<span class="gras"><?php echo $bureau_a; ?></span></div></td>
       </tr>
     </table>
	 <?php } ?> 













  
         <?php if($type==17) { 
		 
		 		$annee=$_GET['annee_declaration'];
		$mois1=$_GET['mois1'];
		$mois2=$_GET['mois2'];
					

		 
		 
		 
		 ?>
	   </p>
  <div align="center">
	     <table width="47%">
           <tr>
             <td colspan="4" bgcolor="#EFEFEF"><div align="center" class="style6"><a href="etat2.php?annee_declaration=<?php echo $annee ?>&mois1=<?php echo $mois1 ?>&mois2=<?php echo $mois2 ?>&type=13&table=deces_prof" style="text-decoration:none">جذاذة الفرز (3/5) <span class="style7">ا لفرز</span></a></div></td>
           </tr>
           <tr>
             <td width="26%" bgcolor="#EFEFEF"><div align="center" class="style1">إلى  :
               <?php 
					


			   	$Requete3 = "select mois_a from mois where `mois`='".$mois2."'  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
					
					echo $row[mois_a];
					
					?>
             </div></td>
             <td width="21%" bgcolor="#EFEFEF"><div align="center" class="style1">من :
               <?php 
					
					

			   	$Requete3 = "select mois_a from mois where `mois`='".$mois1."'  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
					
					echo $row[mois_a];
					
					
					
					 ?>
             </div></td>
             <td width="19%" bgcolor="#EFEFEF"><div align="center" class="style1">الشهر </div></td>
             <td width="34%" bgcolor="#EFEFEF"><div align="center" class="style1">السنة :
               <?php 
		
		echo $annee;
		
		 ?>
             </div></td>
           </tr>
         </table>
       </div>
	   <p>&nbsp;</p>
	 </div>
  <div align="center">
  
  
  			<fieldset style="width:800px">
          <legend align="right" class="style39 style6"> رتبة الولادة </legend>

	   <table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
	     <tr bgcolor="#FFFFFF">
	       <td height="17" colspan="2" bgcolor="#EFEFEF"><div align="center"><span class="style1">الجنس</span></div></td>
          <td width="778" bgcolor="#EFEFEF"><div align="center"><span class="style1">رتبة الولادة</span></div></td>
        </tr>
	     <tr bgcolor="#FFFFFF">
	       <td width="136" height="18" bgcolor="#EFEFEF"><div align="center">الإناث</div></td>
          <td width="118" bgcolor="#EFEFEF"><div align="center">الذكور</div></td>
          <td width="778" bgcolor="#EFEFEF">&nbsp;</td>
        </tr>
	     <?php 	


$i=1;

$d=date("$annee-$mois1-01");
$f=date("$annee-$mois2-31");


		while($i<10)
	
	   {	
	   
//////////////////CALCUl		
  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and `rang`='".$i."' and `sex`='M'    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 

 $male=$detail['nbr'];
	   


  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and `rang`='".$i."' and `sex`='F'    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 

 $femelle=$detail['nbr'];



	echo"
        <tr>
		          <td><div align=\"center\" class=\"Style9\">".number_format($femelle, 0, '', ' ')."</div></td>
		          <td><div align=\"center\" class=\"Style9\">".number_format($male, 0, '', ' ')."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$i."</div></td>
        </tr>";
	   
	   
$i++;
	   }
	   
	   
	   
	   
	   
  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and `rang`=10 and `sex`='M'    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 

 $male=$detail['nbr'];
	   


  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and `rang`=10 and `sex`='F'    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 

 $femelle=$detail['nbr'];



	echo"
        <tr>
		          <td><div align=\"center\" class=\"Style9\">".number_format($femelle, 0, '', ' ')."</div></td>
		          <td><div align=\"center\" class=\"Style9\">".number_format($male, 0, '', ' ')."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">+ 10</div></td>
        </tr>";
	   
	   
$i++;
	   

		
	?>
       </table>
     </p>
	   </fieldset>

  </div>
  

	 <table width="100%">
       <tr>
         <td colspan="5">&nbsp;</td>
       </tr>
       <tr>
         <td width="32%">Fait à : <span class="gras"><?php echo $bureau; ?></span></td>
         <td colspan="2"><div align="left">Le :<span class="gras"><?php echo date('d/m/Y'); ?></span></div>
             <div align="center"></div></td>
         <?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
         <td width="17%"><div align="right"> بتاريخ : <span class="gras"><?php echo date("d/m/Y"); ?></span></div></td>
         <td width="30%"><div align="right">حرر ب :<span class="gras"><?php echo $bureau_a; ?></span></div></td>
       </tr>
     </table>
	 <?php } ?> 






       <?php   }else{ ?>
	   vous n'avez pas le droit de voir cette page
       <?php } ?>

  