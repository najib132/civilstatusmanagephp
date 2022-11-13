<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);      include"conn/connexion.php";

$permission=$_SESSION["permission"];                                                                 $section=$_SESSION["section"];      
$section1=$_SESSION["section1"];  


$pays=$_SESSION["pays"];      
$pays1=$_SESSION["pays1"];  

$ministre=$_SESSION["ministre"];      
$ministre1=$_SESSION["ministre1"];      

$province=$_SESSION["province"];      
$province1=$_SESSION["province1"];      

$annexe=$_SESSION["annexe"];      
$annexe1=$_SESSION["annexe1"];     $region=$_SESSION["region"];  $region1=$_SESSION["region1"];      

   $idf=$_SESSION["idf"];
   $idf_m=$_SESSION["idf_m"];
   
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) { include"div.php";

$type=$_GET["type"];
$naissance=$_GET["naissance"];
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
-->
  </style>
  <p><span id="result_box" lang="ar" xml:lang="ar"><?php /*
  
  		$page = isset($_GET['page']) ? $_GET['page'] : ''; 
		
$page=$page+1;
  
$precedent=$page-1;
echo "<div align=\"left\"><span class=\"style9\"><b><a href=\"$PHP_SELF?page=$precedent&type=$type\"><---</a>";
    
  */
    
  
  ?></span></p>
  <div align="center">
  
  
  <?php 
  

if($type==1) 
{
  
  ?>
    <table width="900">
      <tr>
        <td width="438"><div align="center">
            <?php 



$naissance=date("Y");


//////////////////CALCUl		
  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance1d=$detail['nbr'];


$naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance2d=$detail['nbr'];


 $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance3d=$detail['nbr'];
 

 
  $naissance=$naissance-1;

 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance4d=$detail['nbr'];
 
 
   $naissance=$naissance-1;

 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance5d=$detail['nbr'];
 

 
    $naissance=$naissance-1;

 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance6d=$detail['nbr'];


		
	
		
		
		?>
            <fieldset style="width:450px">
            <legend class="style39" align="right"> إحصائيات الوفيات لسنة <?php echo date("Y");
		  		  
		   ?> و خلال خمس سنوات الماضية</legend>
              <table width="440" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><?php echo number_format($naissance6d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance5d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance4d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance3d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance2d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance1d, 0, '', ' '); ?></div></td>
                </tr>
              <tr>
                <td><div align="center"><?php echo date("Y")-5;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-4;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-3;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-2;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-1;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y");
                 ?></div></td>
                </tr>
            </table>
          </fieldset>
        </div></td>
        <td width="450"><div align="center">
            <?php 
		$naissance=date("Y");
		
		$naissance6=0;$naissance5=0;$naissance4=0;$naissance3=0;$naissance2=0;$naissance1=0;

		
//////////////////CALCUl		
  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance1=$detail['nbr'];
		

$naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance2=$detail['nbr'];
 
 $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance3=$detail['nbr'];
 
  $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance4=$detail['nbr'];
 
 
   $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance5=$detail['nbr'];
 
 
    $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance6=$detail['nbr'];
		
		
		
		
		?>
            <fieldset style="width:450px">
            <legend class="style39" align="right"> إحصائيات الولادات لسنة <?php echo date("Y");
		  		  
		   ?> و خلال خمس سنوات الماضية</legend>
              <table width="440" border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="center"><?php echo number_format($naissance6, 0, '', ' '); ?></div></td>
                  <td><div align="center"><?php echo number_format($naissance5, 0, '', ' '); ?></div></td>
                  <td><div align="center"><?php echo number_format($naissance4, 0, '', ' '); ?></div></td>
                  <td><div align="center"><?php echo number_format($naissance3, 0, '', ' '); ?></div></td>
                  <td><div align="center"><?php echo number_format($naissance2, 0, '', ' '); ?></div></td>
                  <td><div align="center"><?php echo number_format($naissance1, 0, '', ' '); ?></div></td>
                </tr>
                <tr>
                  <td><div align="center"><?php echo date("Y")-5;
                 ?></div></td>
                  <td><div align="center"><?php echo date("Y")-4;
                 ?></div></td>
                  <td><div align="center"><?php echo date("Y")-3;
                 ?></div></td>
                  <td><div align="center"><?php echo date("Y")-2;
                 ?></div></td>
                  <td><div align="center"><?php echo date("Y")-1;
                 ?></div></td>
                  <td><div align="center"><?php echo date("Y");
                 ?></div></td>
                </tr>
              </table>
            </fieldset>
        </div></td>
      </tr>
    </table>
    <table width="900">
      <tr>
        <td width="438"><div align="center">
          <fieldset style="width:450px">
          <legend class="style39" align="right"> إحصائيات الوفيات لسنة  <?php echo date("Y");
		  		  
		   ?> و خلال خمس سنوات الماضية</legend>
		  <table width="370" border="1" cellpadding="0" cellspacing="0">

            <tr>
              <td><div align="center">
                <?php 
	  
	 $values=array($naissance6d,$naissance5d,$naissance4d,$naissance3d,$naissance2d,$naissance1d);
	 

		 $tab=implode(",",$values);
echo "<img src='Artichow-php4+5/examples/bar-005.php?tab=".urlencode($tab)."' width=\"400\" / >";

	  
	  ?>
              </div></td>
            </tr>
          </table>
          </fieldset>


		
		
		
		
		
		</div></td>
        <td width="450"><div align="center">
          <fieldset style="width:450px">
          <legend class="style39" align="right"> إحصائيات الولادات لسنة <?php echo date("Y");
		  		  
		   ?> و خلال خمس سنوات الماضية</legend>
		  <table width="370" border="1" cellpadding="0" cellspacing="0">

            <tr>
              <td><div align="center">
                <?php 
	  
	  
	 $values=array($naissance6,$naissance5,$naissance4,$naissance3,$naissance2,$naissance1);

		 $tab=implode(",",$values);
echo "<img src='Artichow-php4+5/examples/bar-005.php?tab=".urlencode($tab)." ' width=\"400\" / >";


	  
	  ?>
              </div></td>
            </tr>
          </table>
          </fieldset>

		
		</div></td>
      </tr>
    </table>
	
	
	<?php } if($type==2) { ?>
	<table width="900">
      <tr>
        <td width="438"><div align="center">
          <?php /////////////////////////DIVORCE

$naissance=date("Y");
$d=date("$naissance-01-01");
$f=date("$naissance-12-31");

//////////////////CALCUl		
 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1hd'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance1t=$detail['nbr'];


$naissance=$naissance-1;
$d=date("$naissance-01-01");
$f=date("$naissance-12-31");


  $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance2t=$detail['nbr'];


 $naissance=$naissance-1;
 $d=date("$naissance-01-01");
$f=date("$naissance-12-31");


  $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance3t=$detail['nbr'];
 

 
  $naissance=$naissance-1;
  $d=date("$naissance-01-01");
$f=date("$naissance-12-31");


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance4t=$detail['nbr'];
 
 
   $naissance=$naissance-1;
   $d=date("$naissance-01-01");
$f=date("$naissance-12-31");


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance5t=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	$d=date("$naissance-01-01");
$f=date("$naissance-12-31");


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance6t=$detail['nbr'];

		
		?>
          <fieldset style="width:450px">
            <legend class="style39" align="right">إحصائيات الطلاق لسنة <?php echo date("Y");
		  		  
		   ?> و خلال خمس سنوات الماضية</legend>
              <table width="440" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><?php echo number_format($naissance6t, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance5t, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance4t, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance3t, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance2t, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance1t, 0, '', ' '); ?></div></td>
              </tr>
              <tr>
                <td><div align="center"><?php echo date("Y")-5;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-4;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-3;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-2;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-1;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y");
                 ?></div></td>
              </tr>
            </table>
          </fieldset>
        </div></td>
        <td width="450"><div align="center">
          <?php 

$naissance=date("Y");
$d=date("$naissance-01-01");
$f=date("$naissance-12-31");

//////////////////CALCUl		
 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me 1hd'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance1=$detail['nbr'];


$naissance=$naissance-1;
$d=date("$naissance-01-01");
$f=date("$naissance-12-31");


  $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance2=$detail['nbr'];


 $naissance=$naissance-1;
 $d=date("$naissance-01-01");
$f=date("$naissance-12-31");


  $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance3=$detail['nbr'];
 

 
  $naissance=$naissance-1;
  $d=date("$naissance-01-01");
$f=date("$naissance-12-31");


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance4=$detail['nbr'];
 
 
   $naissance=$naissance-1;
   $d=date("$naissance-01-01");
$f=date("$naissance-12-31");


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance5=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	$d=date("$naissance-01-01");
$f=date("$naissance-12-31");


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance6=$detail['nbr'];

		
		
		
		?>
          <fieldset style="width:450px">
            <legend class="style39" align="right">إحصائيات الزواج لسنة <?php echo date("Y");
		  		  
		   ?> و خلال خمس سنوات الماضية</legend>
              <table width="440" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><?php echo number_format($naissance6, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance5, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance4, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance3, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance2, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance1, 0, '', ' '); ?></div></td>
              </tr>
              <tr>
                <td><div align="center"><?php echo date("Y")-5;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-4;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-3;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-2;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-1;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y");
                 ?></div></td>
              </tr>
            </table>
          </fieldset>
        </div></td>
      </tr>
    </table>
	<table width="900">
      <tr>
        <td width="438"><div align="center">
          <fieldset style="width:450px">
            <legend class="style39" align="right"> إحصائيات الطلاق لسنة  <?php echo date("Y");
		  		  
		   ?> و خلال خمس سنوات الماضية</legend>
              <table width="370" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center">
                    <?php 
	  
	 $values=array($naissance6t,$naissance5t,$naissance4t,$naissance3t,$naissance2t,$naissance1t);
	 

		 $tab=implode(",",$values);
echo "<img src='Artichow-php4+5/examples/bar-005.php?tab=".urlencode($tab)." ' width=\"400\" / >";
	  
	  ?>
                </div></td>
              </tr>
            </table>
          </fieldset>
        </div></td>
        <td width="450"><div align="center">
          <fieldset style="width:450px">
            <legend class="style39" align="right">  إحصائيات الزواج لسنة <?php echo date("Y");
		  		  
		   ?> و خلال خمس سنوات الماضية</legend>
              <table width="370" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center">
                    <?php 
	  
	  
	 $values=array($naissance6,$naissance5,$naissance4,$naissance3,$naissance2,$naissance1);

		 $tab=implode(",",$values);
echo "<img src='Artichow-php4+5/examples/bar-005.php?tab=".urlencode($tab)." ' width=\"400\" / >";

	  
	  ?>
                </div></td>
              </tr>
            </table>
          </fieldset>
        </div></td>
      </tr>
    </table>
	<?php }?>
	
	

  <?php 
  

if($type==3) 
{
  
  ?>
    <table width="900">
      <tr>
        <td width="438"><div align="center">
          <?php 






		$naissance=date("Y");
//////////////////CALCUl		
  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance1a=$detail['nbr'];


$naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance2a=$detail['nbr'];


 $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance3a=$detail['nbr'];
 

 
  $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance4a=$detail['nbr'];
 
 
   $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance5a=$detail['nbr'];
 

 
    $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance6a=$detail['nbr'];


		
	
		
		
		?>
          <fieldset style="width:450px">
            <legend class="style39" align="right">إحصائيات أحكام الوفيات لسنة <?php echo date("Y");
		  		  
		   ?> و خلال خمس سنوات الماضية</legend>
              <table width="440" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><?php echo number_format($naissance6a, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance5a, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance4a, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance3a, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance2a, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance1a, 0, '', ' '); ?></div></td>
              </tr>
              <tr>
                <td><div align="center"><?php echo date("Y")-5;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-4;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-3;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-2;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-1;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y");
                 ?></div></td>
              </tr>
            </table>
          </fieldset>
        </div></td>
        <td width="450"><div align="center">
          <?php 
		$naissance=date("Y");
		
		$naissance6=0;$naissance5=0;$naissance4=0;$naissance3=0;$naissance2=0;$naissance1=0;

		
//////////////////CALCUl		
  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance1=$detail['nbr'];
		

$naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance2=$detail['nbr'];
 
 $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance3=$detail['nbr'];
 
  $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance4=$detail['nbr'];
 
 
   $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance5=$detail['nbr'];
 
 
    $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)    ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance6=$detail['nbr'];





		
		
		
		
		
		?>
          <fieldset style="width:450px">
            <legend class="style39" align="right">إحصائيات أحكام الولادات لسنة <?php echo date("Y");
		  		  
		   ?> و خلال خمس سنوات الماضية</legend>
              <table width="440" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><?php echo number_format($naissance6, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance5, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance4, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance3, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance2, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance1, 0, '', ' '); ?></div></td>
              </tr>
              <tr>
                <td><div align="center"><?php echo date("Y")-5;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-4;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-3;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-2;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y")-1;
                 ?></div></td>
                <td><div align="center"><?php echo date("Y");
                 ?></div></td>
              </tr>
            </table>
          </fieldset>
        </div></td>
      </tr>
    </table>
    <table width="900">
      <tr>
        <td width="438"><div align="center">
          <fieldset style="width:450px">
          <legend class="style39" align="right"> إحصائيات أحكام الوفيات لسنة  <?php echo date("Y");
		  		  
		   ?> و خلال خمس سنوات الماضية</legend>
		  <table width="370" border="1" cellpadding="0" cellspacing="0">

            <tr>
              <td><div align="center">
                <?php 
	  
	 $values=array($naissance6a,$naissance5a,$naissance4a,$naissance3a,$naissance2a,$naissance1a);
	 

		 $tab=implode(",",$values);
echo "<img src='Artichow-php4+5/examples/bar-005.php?tab=".urlencode($tab)." ' width=\"400\" / >";

	  
	  ?>
              </div></td>
            </tr>
          </table>
          </fieldset>


		
		
		
		
		
		</div></td>
        <td width="450"><div align="center">
          <fieldset style="width:450px">
          <legend class="style39" align="right"> إحصائيات أحكام الولادات لسنة <?php echo date("Y");
		  		  
		   ?> و خلال خمس سنوات الماضية</legend>
		  <table width="370" border="1" cellpadding="0" cellspacing="0">

            <tr>
              <td><div align="center">
                <?php 
	  
	  
	 $values=array($naissance6,$naissance5,$naissance4,$naissance3,$naissance2,$naissance1);


		 $tab=implode(",",$values);
echo "<img src='Artichow-php4+5/examples/bar-005.php?tab=".urlencode($tab)." ' width=\"400\" / >";


	  
	  ?>
              </div></td>
            </tr>
          </table>
          </fieldset>

		
		</div></td>
      </tr>
    </table>
	
	<?php } ?>
	
  </div>
  <p>&nbsp; </p>
  
  
  
  
  <?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

  