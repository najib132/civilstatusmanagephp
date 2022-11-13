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
      <td width="56%"><div align="right" class="style5">
        <div align="center" class="style4">
          <div align="left"><?php echo $_SESSION["idf"]; ?></div>
        </div>
      </div></td>
      <td width="44%"><div align="center" class="gras">
        <div align="right">المملكة المغربية </div>
      </div></td>
    </tr>
    <tr>
      <td width="56%">&nbsp;</td>
      <td width="44%"><div align="center" class="gras">
        <div align="right">وزارة الداخلية </div>
      </div></td>
    </tr>
    <tr>
      <td width="56%"><div align="right"></div></td>
      <td width="44%"><div align="center" class="gras">
        <div align="right">عمالة او اقليم
          : <?php echo $province_a; ?></div>
      </div></td>
    </tr>
    <tr>
      <td width="56%"><div align="right"><span class="style39">الولادات حسب سن الام</span> : <?php echo $affiche=$_GET["affiche"]; ?></div></td>
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
      <td width="56%">&nbsp;</td>
      <td width="44%" height="20"><div align="center" class="gras">
        
        <div align="right"><?php echo $bureau_a; ?></div>
      </div></td>
    </tr>
  </table>
  <div align="center"></div>
  <div align="center">
    <table width="95%">
      <tr>
        <td width="19%" bgcolor="#EFEFEF"><div align="right"><span class="style1">العدد الإجمالي: 
          <?php 
	
	include"../conn/conversion.php";
	
	 $annee=$_GET["annee"];
 $d=$_GET["d"];
 
 $f=$_GET["f"];
 $champs=$_GET["champs"];
 $max=$_GET["max"];
 $min=$_GET["min"];
	
 $Req =  " SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration` = '".$annee."'  and `date_d` BETWEEN '".$d."' and  '".$f."'  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= '".$min."'  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= '".$max."' order by date_n_m asc ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $enfant=$detail['nbr'];

			  	echo number_format($enfant, 0, '', ' ');

	
	?>
        </span></div></td>
        <td bgcolor="#EFEFEF"><div align="center" class="style5">إلى  :
          <?php 
					
					


			   	$Requete3 = "select mois_a from mois where `mois`='".$mois2."'  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
					
					echo $row[mois_a];
					
					?>
        </div></td>
        <td bgcolor="#EFEFEF"><div align="center" class="style5">من :
          <?php 
					
					

			   	$Requete3 = "select mois_a from mois where `mois`='".$mois1."'  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
					
					echo $row[mois_a];
					
					
					
					 ?>
        </div></td>
        <td bgcolor="#EFEFEF"><div align="center" class="style5">الشهر </div></td>
        <td bgcolor="#EFEFEF"><div align="center" class="style5">السنة :
          <?php 
		
		echo $annee;
		
		 ?>
        </div></td>
      </tr>
    </table>
    <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFFF">
        <td width="129" height="35" bgcolor="#EFEFEF"><div align="center" class="style1">الجنس</div></td>
        <td width="351" bgcolor="#EFEFEF"><div align="center" class="style1">محل الإزدياد </div></td>
        <td width="156" bgcolor="#EFEFEF"><div align="center" class="style1">تاريخ الإزدياد </div></td>
        <td width="177" bgcolor="#EFEFEF"><div align="center" class="style1">إسم الأم</div></td>
        <td width="194" bgcolor="#EFEFEF"><div align="center" class="style1">إسم الأب</div></td>
        <td width="151" bgcolor="#EFEFEF"><div align="center" class="style1">الإسم الكامل</div></td>
        <td width="77" bgcolor="#EFEFEF"><div align="center" class="style1">رقم العقد</div></td>
      </tr>
      <?php 	
		$page = isset($_GET['page']) ? $_GET['page'] : ''; 



	//echo $Requete3;

// Variable codebre d'enreg par page
$limit=10;
if($debut==""){$debut=0;}
$debut=$page*$limit;
// Compte le codebre de champ
$nb_total=$enfant;
// Requete
$limite=mysql_query("$requete limit $debut,$limit");


// Affiche le page par page avec ses liens
if ($page>0) {
$precedent=$page-1;
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&mois1=$mois1&mois2=$mois2&annee=$annee&d=$d&f=$f&champs=$champs&max=$max&min=$min&affiche=$affiche\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&mois1=$mois1&mois2=$mois2&annee=$annee&d=$d&f=$f&champs=$champs&max=$max&min=$min&affiche=$affiche\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

 
 /**********Affichage*******/
 

 
 $Requete3 = "select partie,pj,annee_declaration,code,nom_a,prenom_a,nom_a_p,nom_a_m,date_n,lieu1,sex FROM `naissance` WHERE `annee_declaration` = '".$annee."'  and `date_d` BETWEEN '".$d."' and  '".$f."'  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) >= '".$min."'  and  TIMESTAMPDIFF(YEAR,date_n_m,now()) <= '".$max."' order by date_n desc  $limit_str  ";
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

	
	 <div align="right">الصفحة : <?php echo $page+1; ?></div>
     </p>


  <?php   }else{ ?>
vous n'avez pas le droit de voir cette page
<?php } ?>
