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


$mois=$_GET["mois"];

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
        <td width="23%" bgcolor="#EFEFEF"><div align="right"><span class="style1">العدد الإجمالي</span></div></td>
        <td width="23%" bgcolor="#EFEFEF"><div align="right"><span class="style1">الجنس   </span></div></td>
        <td width="19%" bgcolor="#EFEFEF"><div align="right"><span class="style1">نوع التصريح</span></div></td>
        <td width="15%" bgcolor="#EFEFEF"><div align="right"><strong>النصف</strong></div></td>
        <td width="10%" bgcolor="#EFEFEF"><div align="right"><span class="style5">الشهر</span></div></td>
        <td width="10%" bgcolor="#EFEFEF"><div align="right"><span class="style1">السنة</span></div></td>
      </tr>
      <tr>
        <td bgcolor="#D9FFFF"><div align="right"><span class="style1">
          <?php 
	
	include"../conn/conversion.php";
	
	 $annee=$_GET["annee"];
	 
 $mois=$_GET["mois"];
 $demi=$_GET["demi"];
 
 $sex=$_GET["sex"];
 $ordre=$_GET["ordre"];
 $sens=$_GET["sens"];
 
 		if($demi==1) {
		
$d=date("$annee-$mois-01");
$f=date("$annee-$mois-15");

		
		}
		
		if($demi==2) {
		
$d=date("$annee-$mois-16");
$f=date("$annee-$mois-31");

		
		}

 
 $declaration=$_GET["declaration"];
 
 if($sex!="on") $req2=" and `sex`='".$sex."' "; 

	
 $Req =  " SELECT COUNT(code) as nbr  FROM `naissance` WHERE `deces_naissance` $declaration and  `annee_declaration`= '".$annee."'  and `date_d` BETWEEN '".$d."' and  '".$f."'  $req2  ";
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
        <td bgcolor="#D9FFFF"><div align="right"><span class="style1">
          <?php 
		
		if($demi==1) echo "  الأول ";
		
		if($demi==2) echo " الثاني  ";
		?>
        </span></div></td>
        <td bgcolor="#D9FFFF"><div align="right"><strong>
            <?php 
	
				$Requete3 = "select mois_a from mois where `mois`='".$mois."'  ";
						mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$ro = mysql_fetch_array($result3);
	echo $ro[mois_a];
	
	
	  ?>
        </strong></div></td>
        <td bgcolor="#D9FFFF"><div align="right"><span class="style1"><?php echo $annee; ?></span></div></td>
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
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&mois=$mois&annee=$annee&nn=$nn&table=$table&mois=$mois&sex=$sex&declaration=$declaration&ordre=$ordre&sens=$sens&demi=$demi\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&mois=$mois&annee=$annee&nn=$nn&table=$table&mois=$mois&sex=$sex&declaration=$declaration&ordre=$ordre&sens=$sens&demi=$demi\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

 
 /**********Affichage*******/
 

 
  $Requete3 = "select partie, pj,annee_declaration,code,nom_a,prenom_a,nom_a_p,nom_a_m,date_n,lieu1,sex FROM `naissance` WHERE `deces_naissance` $declaration  and  `annee_declaration`= '".$annee."'   and `date_d` BETWEEN '".$d."' and  '".$f."'  $req2 ORDER BY $ordre $sens  $limit_str  ";
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
           <td width="17%" bgcolor="#EFEFEF"><div align="right"><span class="style1">العدد الإجمالي</span></div></td>
           <td colspan="2" bgcolor="#EFEFEF" class="style1"><div align="center">العمر</div>
           <div align="right"></div></td>
           <td width="12%" bgcolor="#EFEFEF"><div align="right"><span class="style1">الجنس </span></div></td>
           <td width="15%" bgcolor="#EFEFEF"><div align="right"><span class="style1">نوع التصريح</span></div></td>
           <td width="15%" bgcolor="#EFEFEF"><div align="right"><strong>النصف</strong></div></td>
           <td width="10%" bgcolor="#EFEFEF"><div align="right"><span class="style5">الشهر</span></div></td>
           <td width="10%" bgcolor="#EFEFEF"><div align="right"><span class="style1">السنة</span></div></td>
         </tr>
         <tr>
           <td bgcolor="#D9FFFF"><div align="right"><span class="style1">
             <?php 
	
	include"../conn/conversion.php";
	


	 $annee=$_GET["annee"];
 $mois=$_GET["mois"];
 $sex=$_GET["sex"];
 $age1=$_GET["age1"];
 $age2=$_GET["age2"];
  $declaration=$_GET["declaration"];
  
  	 $annee=$_GET["annee"];
	 
 $ordre=$_GET["ordre"];
 $sens=$_GET["sens"];
 $demi=$_GET["demi"];
 
 		if($demi==1) {
		
$d=date("$annee-$mois-01");
$f=date("$annee-$mois-15");

		
		}
		
		if($demi==2) {
		
$d=date("$annee-$mois-16");
$f=date("$annee-$mois-31");

		
		}


  

if($declaration=="on") $declara="";
if($declaration==1) $declara="and `deces_naissance`=1 ";
if($declaration==5) $declara="and `deces_naissance`=5 ";
 
 if($sex!="on") $req2=" and `sex`='".$sex."' "; 
 


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

 
 

	
$Req =  " SELECT COUNT(code) as nbr  FROM `deces` WHERE  `annee_declaration` = '".$annee."'  and `date_d` BETWEEN '".$d."' and  '".$f."'  $declara  $req2 $req3 $req4 ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $enfant=$detail['nbr'];

			  	echo number_format($enfant, 0, '', ' ');

	
	?>
           </span></div></td>
           <td width="15%" bgcolor="#D9FFFF" class="style1"><div align="right">إلى : <?php echo $age2; ?> <?php 
		   
		   if($age2=="") echo "";
		  if($age2==0 || $age2==1)	echo"سنة ";	   
if($age2==2)	echo"سنتين";	   
if($age2 > 2)	echo"سنوات";	   
 
		   
		   ?></div></td>
           <td width="12%" bgcolor="#D9FFFF" class="style1"><div align="right"> من : <?php echo $age1; ?>  <?php 
		   		   if($age1=="") echo "";

if($age1==0 || $age1==1)	echo"سنة ";	   
if($age1==2)	echo"سنتين";	   
if($age1 > 2)	echo"سنوات";	   

		   
		   ?></div></td>
           <td bgcolor="#D9FFFF"><div align="right"><span class="style1">
             <?php if ($sex == 'M') echo "صنف الذكور "; else if($sex=="F") echo "صنف الإناث"; ?>
           </span></div></td>
           <td bgcolor="#D9FFFF"><div align="right" class="style1">
             <?php 
		
		if($declaration==1) echo "  عادي ";
		if($declaration==5) echo " بحكم  ";
		?>
           </div></td>
           <td bgcolor="#D9FFFF"><div align="right"><span class="style1">
               <?php 
		
		if($demi==1) echo "  الأول ";
		
		if($demi==2) echo " الثاني  ";
		?>
           </span></div></td>
           <td bgcolor="#D9FFFF"><div align="right"><strong>
               <?php 
	
				$Requete3 = "select mois_a from mois where `mois`='".$mois."'  ";
						mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$ro = mysql_fetch_array($result3);
	echo $ro[mois_a];
	
	
	  ?>
           </strong></div></td>
           <td bgcolor="#D9FFFF"><div align="right"><span class="style1"><?php echo $annee; ?></span></div></td>
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
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&mois=$mois&annee=$annee&ordre=$ordre&sens=$sens&nn=$nn&table=$table&mois=$mois&sex=$sex&age1=$age1&age2=$age2&declaration=$declaration&demi=$demi\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&mois=$mois&annee=$annee&ordre=$ordre&sens=$sens&nn=$nn&table=$table&mois=$mois&sex=$sex&age1=$age1&age2=$age2&declaration=$declaration&demi=$demi\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

 
 /**********Affichage*******/
 

 
 $Requete3 = "select partie,pj,annee_declaration,nom_a,prenom_a,date_n_d,ville_deces_a,code,adresse_personne_a,cin FROM `deces` WHERE `annee_declaration` = '".$annee."'  and `date_d` BETWEEN '".$d."' and  '".$f."' $declara $req2 $req3 $req4  order by $ordre $sens $limit_str  ";
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
  
  
  



       <?php   }else{ ?>
	   vous n'avez pas le droit de voir cette page
       <?php } ?>

  