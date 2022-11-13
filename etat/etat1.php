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

$table=$_GET["table"];
$type=$_GET["type"];
$annee=$_GET["annee"];
$nn=$_GET["nn"];

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
.style2 {font-size: 18}
.gras {	font-weight: bold;
}
.gras {	font-weight: bold;
	text-align: center;
}
.style4 {font-size: 10px}
-->
  </style>
  <table  width="97%" align="center">
    <tr>
      <td width="55%"><div align="center" class="style4">
        <div align="left"><?php echo $_SESSION["idf"]; ?></div>
      </div>
      <div align="center"></div></td>
      <td width="45%"><div align="center" class="gras">
        <div align="right">المملكة المغربية </div>
      </div></td>
    </tr>
    <tr>
      <td width="55%">&nbsp;</td>
      <td width="45%"><div align="center" class="gras">
        <div align="right">وزارة الداخلية </div>
      </div></td>
    </tr>
    <tr>
      <td width="55%">&nbsp;</td>
      <td width="45%"><div align="center" class="gras">
        <div align="right">عمالة او اقليم
          : <?php echo $province_a; ?></div>
      </div></td>
    </tr>
    <tr>
      <td width="55%">&nbsp;</td>
      <td><div align="right" class="gras">
        
        <div align="right">
          <?php 
	  
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
      <td width="55%">&nbsp;</td>
      <td width="45%"><div align="center" class="gras">
        
        <div align="right"><?php echo $bureau_a; ?></div>
      </div></td>
    </tr>
  </table>
  <p>
  
<?php if($type==1) { ?>  
  
  <?php 
  
  
  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `deces_naissance` IN(0,2,3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 

 $somme=$detail['nbr'];
  
  
  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$annee."' and `deces_naissance` IN(0,2,3,4) and `sex`='F'   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 

$femelle=$detail['nbr'];



  ?>&nbsp;</p>
  <div align="center">
    <table width="75%">
      <tr>
        <td><div align="center">
		
		
				<fieldset style="width:600px">
          <legend class="style39" align="right"> إحصائيات الولادات لسنة <?php echo $annee; ?> </legend>
		  <table width="400" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="278" bgcolor="#EFEFEF"><div align="center" class="style1">المجموع</div></td>
              <td width="278" bgcolor="#EFEFEF"><div align="center" class="style1">إناث</div></td>
              <td width="314" bgcolor="#EFEFEF"><div align="center" class="style1">ذكور</div></td>
            </tr>
            <tr>
              <td><div align="center"><?php
			  
			  	echo number_format($somme, 0, '', ' ');
			   
			   
			   ?></div></td>
              <td><div align="center"><span class="style2"></span>
                <?php 
			  

			  	echo number_format($femelle, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center"><span class="style2"></span><?php 
			  
$male=$somme-$femelle;

			  	echo number_format($male, 0, '', ' ');

			  ?></div></td>
            </tr>
            <tr>
              <td><div align="center"></div></td>
              <td><div align="center">
                  <?php 
			  
			  if($somme!=0) { 
			  
			  $pm=100*$femelle/$somme;

	  	echo number_format(($pm),2,","," ");
}

			  ?>
                % </div></td>
              <td><div align="center">
                <?php 
			  
			  if($somme!=0) { 
			  
			  $pm=100*$male/$somme;

	  	echo number_format(($pm),2,","," ");
}

			  ?>
                % </div></td>
            </tr>
            <tr>
              <td colspan="3"><div align="center"><span class="style2"></span>
                <?php
			
		//$values=array(1522.18,980.00,1066.00,2000.00,4333.29,1300.00);
	 $values=array($male,$femelle);


	if(array($male,$femelle)!=array(0,0))
		{
		 $tab=implode(",",$values);
echo "<img src='../Artichow-php4+5/examples/pie-009.php?tab=".urlencode($tab)." ' width=\"400\" / >";
	
     } 
	

?>
              </div>                <div align="center"><span class="style2"></span></div>                <div align="center"><span class="style2"></span></div></td>
            </tr>
          </table>
				</fieldset>

		
		</div></td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
  <div align="center">
  
  
  <?php } ?>
 
 
 
 
 
 



<?php if($type==2) { ?>  
  
  <?php 
  
  $Req =  "SELECT count(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."'    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 

 $somme=$detail['nbr'];
  
  
  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and `sex`='F'   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 

$femelle=$detail['nbr'];




  ?>&nbsp;</p>
  <div align="center">
    <table width="75%">
      <tr>
        <td><div align="center">
		
		
				<fieldset style="width:600px">
          <legend class="style39" align="right"> إحصائيات الوفيات لسنة <?php echo $annee; ?> </legend>
		  <table width="400" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="278" bgcolor="#EFEFEF"><div align="center" class="style1">المجموع</div></td>
              <td width="278" bgcolor="#EFEFEF"><div align="center" class="style1">إناث</div></td>
              <td width="314" bgcolor="#EFEFEF"><div align="center" class="style1">ذكور</div></td>
            </tr>
            <tr>
              <td><div align="center"><?php
			  
			  	echo number_format($somme, 0, '', ' ');
			   
			   
			   ?></div></td>
              <td><div align="center"><span class="style2"></span>
                <?php 
			  

			  	echo number_format($femelle, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center"><span class="style2"></span><?php 
			  
			  $male=$somme-$femelle;

			  	echo number_format($male, 0, '', ' ');

			  ?></div></td>
            </tr>
            <tr>
              <td><div align="center"></div></td>
              <td><div align="center">
                  <?php 
			  
			  if($somme!=0) { 
			  
			  $pm=100*$femelle/$somme;

	  	echo number_format(($pm),2,","," ");
}

			  ?>
                % </div></td>
              <td><div align="center">
                <?php 
			  
			  if($somme!=0) { 
			  
			  $pm=100*$male/$somme;

	  	echo number_format(($pm),2,","," ");
}

			  ?>
                % </div></td>
            </tr>
            <tr>
              <td colspan="3"><div align="center"><span class="style2"></span>
                <?php
			
		//$values=array(1522.18,980.00,1066.00,2000.00,4333.29,1300.00);
	 $values=array($male,$femelle);


	if(array($male,$femelle)!=array(0,0))
		{
		 $tab=implode(",",$values);
echo "<img src='../Artichow-php4+5/examples/pie-009.php?tab=".urlencode($tab)." ' width=\"400\" / >";
	
     } 
	

?>
              </div>                <div align="center"><span class="style2"></span></div>                <div align="center"><span class="style2"></span></div></td>
            </tr>
          </table>
				</fieldset>





		
				<fieldset style="width:600px">
          <legend class="style39" align="right"> نسبة الوفيات لسنة  <?php echo $annee; ?> حسب العمر و الجنس</legend>
		  <table width="75%" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="114" bgcolor="#EFEFEF"><div align="center" class="style1">المجموع</div></td>
              <td width="79" bgcolor="#EFEFEF"><div align="center" class="style1">إناث</div></td>
              <td width="78" bgcolor="#EFEFEF"><div align="center" class="style1">ذكور</div></td>
              <td width="168" bgcolor="#EFEFEF"><div align="center"></div></td>
            </tr>
            <tr>
              <td><div align="center"><?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and  TIMESTAMPDIFF(YEAR,date_n,date_n_d) <= 5   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and  TIMESTAMPDIFF(YEAR,date_n,date_n_d) <= 5 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?></div></td>
              <td><div align="center">
                <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">أقل من5 سنوات</div></td>
            </tr>
            <tr>
              <td><div align="center">
                <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and  TIMESTAMPDIFF(YEAR,date_n,date_n_d) >= 6 and TIMESTAMPDIFF(YEAR,date_n,date_n_d) <= 12  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and  TIMESTAMPDIFF(YEAR,date_n,date_n_d) >= 6 and TIMESTAMPDIFF(YEAR,date_n,date_n_d) <= 12 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">من 6 سنوات إلى 12 سنة</div></td>
            </tr>
            <tr>
              <td><div align="center">
                  <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and  TIMESTAMPDIFF(YEAR,date_n,date_n_d) >= 13 and TIMESTAMPDIFF(YEAR,date_n,date_n_d) <= 18  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and  TIMESTAMPDIFF(YEAR,date_n,date_n_d) >= 13 and TIMESTAMPDIFF(YEAR,date_n,date_n_d) <= 18 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">من 13 سنة إلى 18 سنة</div></td>
            </tr>
            <tr>
              <td><div align="center">
                  <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and  TIMESTAMPDIFF(YEAR,date_n,date_n_d) >= 19 and TIMESTAMPDIFF(YEAR,date_n,date_n_d) <= 60  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and  TIMESTAMPDIFF(YEAR,date_n,date_n_d) >= 19 and TIMESTAMPDIFF(YEAR,date_n,date_n_d) <= 60 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">من 19 سنة إلى 60 سنة</div></td>
            </tr>
            <tr>
              <td><div align="center">
                  <?php 
			  
			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and  TIMESTAMPDIFF(YEAR,date_n,date_n_d) >= 61  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $somme1=$detail['nbr'];


			    $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$annee."' and TIMESTAMPDIFF(YEAR,date_n,date_n_d) >= 61 and `sex`='F'  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $femelle1=$detail['nbr'];

			  	echo number_format($somme1, 0, '', ' ');

			  
			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  

			  	echo number_format($femelle1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">
                  <?php 
			  
			  $male1=$somme1-$femelle1;

			  	echo number_format($male1, 0, '', ' ');

			  ?>
              </div></td>
              <td><div align="center">فوق   60 سنة</div></td>
            </tr>
          </table>
				</fieldset>




		
		</div></td>
      </tr>
    </table>
  </div>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <div align="center">
  
  
    <p>
  <?php } ?>
      
      
      
      
      
      
      
      
      
  <?php if($type==3) {
  
 $d=$_GET["d"];
 $f=$_GET["f"];
 
  $d1=$_GET["d"];
 $f1=$_GET["f"];

 
 	include"../conn/conversion.php";

$d=convertDate($d);
$f=convertDate($f);

  
   ?>  
    </p>
    <p align="center" class="style1">  <?php 
	


$year=yearofdate($d);
$now=date("Y");
	
 $Req =  " SELECT COUNT(code) as nbr  FROM `naissance` WHERE `deces_naissance` IN(0,2,3,4) and `date_n` between '".$d."' and '".$f."' and `annee_declaration` between '".$year."' and '".$now."' ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());
$detail = mysql_fetch_assoc($res); 

 $enfant=$detail['nbr'];

			  	echo number_format($enfant, 0, '', ' ');

	
	?>
    : الأطفال البالغين سن التمدرس  (تاريخ الإزدياد من <?php echo $d1 ?> إلى <?php echo $f1 ?>) العدد الإجمالي</p>
    <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFFF">
        <td width="171" height="35" bgcolor="#EFEFEF"><div align="center" class="style1">الجنس</div></td>
        <td width="232" bgcolor="#EFEFEF"><div align="center" class="style1">محل الإزدياد </div></td>
        <td width="189" bgcolor="#EFEFEF"><div align="center" class="style1">تاريخ الإزدياد </div></td>
        <td width="189" bgcolor="#EFEFEF"><div align="center" class="style1">إسم الأم</div></td>
        <td width="245" bgcolor="#EFEFEF"><div align="center" class="style1">إسم الأب</div></td>
        <td width="195" bgcolor="#EFEFEF"><div align="center" class="style1">الإسم الكامل</div></td>
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

$d=convertDate_f($d);
$f=convertDate_f($f);


// Affiche le page par page avec ses liens
if ($page>0) {
$precedent=$page-1;
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&code=$code&nom_a=$nom_a&date_m=$date_m&valider=$valider&annee_declaration=$annee_declaration&type=$type&table=$table&nn=$nn&d=$d&f=$f&year=$year\"><---</a>";
}


if($debut+$limit<$nb_total) {
$suivant=$page+1;
echo "<div align=\"right\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$suivant&code=$code&nom_a=$nom_a&date_m=$date_m&valider=$valider&annee_declaration=$annee_declaration&type=$type&table=$table&nn=$nn&d=$d&f=$f&year=$year\">---></a>";
}


//Affichage le contenu de votre table
//avec une limite, dans l'exemple $limit est &agrave; 4

$limit_str = "LIMIT ". $page * $limit .",$limit";

 
 /**********Affichage*******/
 
$d=convertDate($d);
$f=convertDate($f);

 
 $Requete3 = "select nom_a,prenom_a,nom_a_p,nom_a_m,date_n,lieu1,sex FROM `naissance` WHERE `deces_naissance` IN(0,2,3,4) and `date_n` between '".$d."' and '".$f."' and `annee_declaration` between '".$year."' and '".$now."' $limit_str  ";
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



        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
			

	
		
	?>
    </table>
    <p>&nbsp;</p>
    <p>الصفحة : <?php echo $page+1; ?> 
      <?php 
	  
	  
	  } ?>
    </p>
    <p>
      <?php   }else{ ?>
      vous n'avez pas le droit de voir cette page
      <?php } ?>
    </p>
  </div>
  