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
.style7 {font-size: 24}
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

  <div align="center">
    <table width="75%">
      <tr>
        <td colspan="4" bgcolor="#EFEFEF"><div align="center" class="style6"></div></td>
      </tr>
      <tr>
        <td width="26%" bgcolor="#EFEFEF"><div align="center" class="style1">إلى  :
          <?php 
					
		$annee=$_GET['annee_declaration'];
		$mois1=$_GET['mois1'];
		$mois2=$_GET['mois2'];
					


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
  <div align="center">
    <p>&nbsp;	</p>
	
	
	
	 <fieldset  style="width:800px">       
<legend align="right" class="style39"> 	الوفيات حسب مكان الإقامة</legend>

	
    <table width="75%" border="1" align="center" cellpadding="0" cellspacing="0">
	     <tr bgcolor="#FFFFFF">
	       <td height="17" colspan="2" bgcolor="#EFEFEF"><div align="center"><span class="style1">الجنس</span></div></td>
          <td width="782" bgcolor="#EFEFEF"><div align="center"><span class="style1">مكان الإقامة  العمالة أو الإقليم</span></div></td>
        </tr>
	     <tr bgcolor="#FFFFFF">
	       <td width="137" height="18" bgcolor="#EFEFEF"><div align="center">الإناث</div></td>
          <td width="127" bgcolor="#EFEFEF"><div align="center">الذكور</div></td>
          <td width="782" bgcolor="#EFEFEF">&nbsp;</td>
        </tr>
	     <?php 	
		 
		 	  $d=date("$annee-$mois1-01");
			  $f=date("$annee-$mois2-31");

		$page = isset($_GET['page']) ? $_GET['page'] : ''; 


	$Requete3 = "select id from profession where `cat`=2    ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());


$limit=30;
if($debut==""){$debut=0;}
$debut=$page*$limit;
// Compte le codebre de champ
$nb_total=mysql_num_rows($result3);
// Requete
$limite=mysql_query("$requete limit $debut,$limit");


// Affiche le page par page avec ses liens
if ($page>0) {
$precedent=$page-1;
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&annee=$annee&mois1=$mois1&mois2=$mois2\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&annee=$annee&mois1=$mois1&mois2=$mois2\">---></a>";
}

//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";




	$Requete3 = "select profession_a,id from profession where `cat`=2   $limit_str ";
	mysql_query("SET NAMES 'UTF8' ");
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$row = mysql_fetch_array($result3);
	
		  
	$table="profession";
		while($row!="")
	
	   {	
	   
//////////////////CALCUl		
  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and `province`=$row[id] and `sex`='M'    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 

 $male=$detail['nbr'];
	   


  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and `date_d` BETWEEN '".$d."' and  '".$f."' and `province`=$row[id] and `sex`='F'    ";
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
       <?php   }else{ ?>
	   vous n'avez pas le droit de voir cette page
       <?php } ?>

  