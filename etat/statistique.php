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

?>


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      




  <style type="text/css">
<!--
.style1 {font-size: 18px}
.style2 {font-size: 18}
.gras {font-weight: bold;
}
.gras {font-weight: bold;
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
  <p><span id="result_box" lang="ar" xml:lang="ar"><?php 
  $annee=$_GET["annee"];  
	session_start();

$_SESSION['annee'] = $annee;
  
  ?></span></p>
  <div align="center">
  
  
  <?php 
  

if($type==5) 
{

  ?>
    <table width="900">
      <tr>
        <td><div align="center">
            <?php 



$naissance=$annee;


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
 
     $naissance=$naissance-1;



 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance7d=$detail['nbr'];
 

 
    $naissance=$naissance-1;


 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance8d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
		
	
	 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance9d=$detail['nbr'];
 

 
    $naissance=$naissance-1;



 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance10d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	
	
	 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance11d=$detail['nbr'];
 
		
		?>
            <fieldset style="width:900px">
            <legend class="style39" align="right">إحصائيات الوفيات لسنة <?php echo $annee;
		  		  
		   ?> و خلال 10 سنوات الماضية</legend>
              <table width="887" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><?php echo number_format($naissance11d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance10d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance9d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance8d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance7d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance6d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance5d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance4d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance3d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance2d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance1d, 0, '', ' '); ?></div></td>
                </tr>
              <tr>
			  
			  <td><div align="center"><?php echo $annee-10;
                 ?></div></td>
			  <td><div align="center"><?php echo $annee-9;
                 ?></div></td>
			  <td><div align="center"><?php echo $annee-8;
                 ?></div></td>
			  <td><div align="center"><?php echo $annee-7;
                 ?></div></td>
			  <td><div align="center"><?php echo $annee-6;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-5;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-4;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-3;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-2;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-1;
                 ?></div></td>
                <td><div align="center"><?php echo $annee;
                 ?></div></td>
                </tr>
            </table>
          </fieldset>
        </div>          <div align="center">
            
          </div></td>
      </tr>
    </table>
    <table width="900">
      <tr>
        <td><div align="center">
          <fieldset style="width:900px">
          <legend class="style39" align="right"> إحصائيات الوفيات لسنة  <?php echo $annee;
		  		  
		   ?> و خلال 10 سنوات الماضية</legend>
		  <table width="75%" border="1" cellpadding="0" cellspacing="0">

            <tr>
              <td><div align="center">
                <?php 
	  
	 $values=array($naissance11d,$naissance10d,$naissance9d,$naissance8d,$naissance7d,$naissance6d,$naissance5d,$naissance4d,$naissance3d,$naissance2d,$naissance1d);
	 

		 $tab=implode(",",$values);
echo "<img src='../Artichow-php4+5/examples/bar-005.php?tab=".urlencode($tab)."' width=\"800\" / >";

	  
	  ?>
              </div></td>
            </tr>
          </table>
          </fieldset>


		
		
		
		
		
		</div>		</td>
      </tr>
    </table>
	
	
	<?php } if($type==4) { ?>
	<table width="900">
      <tr>
        <td><div align="center">
            <?php 



$naissance=$annee;


//////////////////CALCUl		
  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance1d=$detail['nbr'];


$naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance2d=$detail['nbr'];


 $naissance=$naissance-1;

  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance3d=$detail['nbr'];
 

 
  $naissance=$naissance-1;

 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance4d=$detail['nbr'];
 
 
   $naissance=$naissance-1;

 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance5d=$detail['nbr'];
 

 
    $naissance=$naissance-1;

 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance6d=$detail['nbr'];
 
     $naissance=$naissance-1;



 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance7d=$detail['nbr'];
 

 
    $naissance=$naissance-1;


 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance8d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
		
	
	 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance9d=$detail['nbr'];
 

 
    $naissance=$naissance-1;



 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance10d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	
	
	 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(0,2,3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance11d=$detail['nbr'];
 
		
		?>
            <fieldset style="width:900px">
            <legend class="style39" align="right">إحصائيات  الولادات لسنة <?php echo $annee;
		  		  
		   ?> و خلال 10 سنوات الماضية</legend>
              <table width="887" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><?php echo number_format($naissance11d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance10d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance9d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance8d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance7d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance6d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance5d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance4d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance3d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance2d, 0, '', ' '); ?></div></td>
                <td><div align="center"><?php echo number_format($naissance1d, 0, '', ' '); ?></div></td>
              </tr>
              <tr>
                <td><div align="center"><?php echo $annee-10;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-9;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-8;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-7;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-6;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-5;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-4;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-3;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-2;
                 ?></div></td>
                <td><div align="center"><?php echo $annee-1;
                 ?></div></td>
                <td><div align="center"><?php echo $annee;
                 ?></div></td>
              </tr>
            </table>
          </fieldset>
        </div>
            <div align="center"> </div></td>
      </tr>
    </table>
	<table width="900">
      <tr>
        <td><div align="center">
            <fieldset style="width:900px">
            <legend class="style39" align="right"> إحصائيات  الولادات لسنة <?php echo $annee;
		  		  
		   ?> و خلال 10 سنوات الماضية</legend>
              <table width="75%" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center">
                    <?php 
	  
	 $values=array($naissance11d,$naissance10d,$naissance9d,$naissance8d,$naissance7d,$naissance6d,$naissance5d,$naissance4d,$naissance3d,$naissance2d,$naissance1d);
	 

		 $tab=implode(",",$values);
echo "<img src='../Artichow-php4+5/examples/bar-005.php?tab=".urlencode($tab)."' width=\"800\" / >";

	  
	  ?>
                </div></td>
              </tr>
            </table>
          </fieldset>
        </div></td>
      </tr>
    </table>
	<?php } ?>
	


    <?php 

if($type==6) 
{
  
  ?>
  
  
  <table width="900">
   <tr>
     <td><div align="center">
         <?php 


$naissance=$annee;
$d=date("$naissance-01-01");
$f=date("$naissance-12-31");


//////////////////CALCUl		
  $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me  d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance1d=$detail['nbr'];


$naissance=$naissance-1;
$d=date("$naissance-01-01");
$f=date("$naissance-12-31");


  $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance2d=$detail['nbr'];


 $naissance=$naissance-1;
 $d=date("$naissance-01-01");
$f=date("$naissance-12-31");


  $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance3d=$detail['nbr'];
 

 
  $naissance=$naissance-1;
  $d=date("$naissance-01-01");
$f=date("$naissance-12-31");


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance4d=$detail['nbr'];
 
 
   $naissance=$naissance-1;
   $d=date("$naissance-01-01");
$f=date("$naissance-12-31");


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance5d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	$d=date("$naissance-01-01");
$f=date("$naissance-12-31");


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance6d=$detail['nbr'];
 
     $naissance=$naissance-1;
	 $d=date("$naissance-01-01");
$f=date("$naissance-12-31");




 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance7d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	$d=date("$naissance-01-01");
$f=date("$naissance-12-31");



 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance8d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	$d=date("$naissance-01-01");
$f=date("$naissance-12-31");

		
	
	 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance9d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	$d=date("$naissance-01-01");
$f=date("$naissance-12-31");




 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance10d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	$d=date("$naissance-01-01");
$f=date("$naissance-12-31");

	
	
	 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=1     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance11d=$detail['nbr'];
 


		
		
		?>
         <fieldset style="width:900px">
         <legend class="style39" align="right">إحصائيات   الزواج  لسنة <?php echo $annee;
		  		  
		   ?> و خلال 10 سنوات الماضية</legend>
           <table width="887" border="1" cellpadding="0" cellspacing="0">
           <tr>
             <td><div align="center"><?php echo number_format($naissance11d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance10d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance9d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance8d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance7d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance6d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance5d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance4d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance3d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance2d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance1d, 0, '', ' '); ?></div></td>
           </tr>
           <tr>
             <td><div align="center"><?php echo $annee-10;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-9;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-8;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-7;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-6;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-5;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-4;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-3;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-2;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-1;
                 ?></div></td>
             <td><div align="center"><?php echo $annee;
                 ?></div></td>
           </tr>
         </table>
          </fieldset>
     </div>
         <div align="center"> </div></td>
   </tr>
 </table>
 <table width="900">
   <tr>
     <td><div align="center">
         <fieldset style="width:900px">
         <legend class="style39" align="right"> إحصائيات   الزواج لسنة <?php echo $annee;
		  		  
		   ?> و خلال 10 سنوات الماضية</legend>
           <table width="75%" border="1" cellpadding="0" cellspacing="0">
           <tr>
             <td><div align="center">
                 <?php 
	  
	 $values=array($naissance11d,$naissance10d,$naissance9d,$naissance8d,$naissance7d,$naissance6d,$naissance5d,$naissance4d,$naissance3d,$naissance2d,$naissance1d);
	 

		 $tab=implode(",",$values);
echo "<img src='../Artichow-php4+5/examples/bar-005.php?tab=".urlencode($tab)."' width=\"800\" / >";

	  
	  ?>
             </div></td>
           </tr>
         </table>
          </fieldset>
     </div></td>
   </tr>
 </table>
 

	<?php } ?>
	
	
	
	










    <?php 

if($type==7) 
{
  
  ?>
  
  
  <table width="900">
   <tr>
     <td><div align="center">
         <?php 



$naissance=$annee;
$d=date("$naissance-01-01");
$f=date("$naissance-12-31");


//////////////////CALCUl		
  $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance1d=$detail['nbr'];


$naissance=$naissance-1;
$d=date("$naissance-01-01");
$f=date("$naissance-12-31");


  $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance2d=$detail['nbr'];


 $naissance=$naissance-1;
 $d=date("$naissance-01-01");
$f=date("$naissance-12-31");


  $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance3d=$detail['nbr'];
 

 
  $naissance=$naissance-1;
  $d=date("$naissance-01-01");
$f=date("$naissance-12-31");


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance4d=$detail['nbr'];
 
 
   $naissance=$naissance-1;
   $d=date("$naissance-01-01");
$f=date("$naissance-12-31");


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance5d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	$d=date("$naissance-01-01");
$f=date("$naissance-12-31");


 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance6d=$detail['nbr'];
 
     $naissance=$naissance-1;
	 $d=date("$naissance-01-01");
$f=date("$naissance-12-31");




 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance7d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	$d=date("$naissance-01-01");
$f=date("$naissance-12-31");



 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance8d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	$d=date("$naissance-01-01");
$f=date("$naissance-12-31");

		
	
	 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance9d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	$d=date("$naissance-01-01");
$f=date("$naissance-12-31");




 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance10d=$detail['nbr'];
 

 
    $naissance=$naissance-1;
	$d=date("$naissance-01-01");
$f=date("$naissance-12-31");

	
	
	 $Req =  "SELECT COUNT(id) as nbr  FROM `mention_p` WHERE `date` BETWEEN '".$d."' and '".$f."' and `jugement`=2     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance11d=$detail['nbr'];
 


		
		
		?>
         <fieldset style="width:900px">
         <legend class="style39" align="right">إحصائيات الطلاق  لسنة <?php echo $annee;
		  		  
		   ?> و خلال 10 سنوات الماضية</legend>
           <table width="887" border="1" cellpadding="0" cellspacing="0">
           <tr>
             <td><div align="center"><?php echo number_format($naissance11d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance10d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance9d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance8d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance7d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance6d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance5d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance4d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance3d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance2d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance1d, 0, '', ' '); ?></div></td>
           </tr>
           <tr>
             <td><div align="center"><?php echo $annee-10;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-9;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-8;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-7;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-6;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-5;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-4;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-3;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-2;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-1;
                 ?></div></td>
             <td><div align="center"><?php echo $annee;
                 ?></div></td>
           </tr>
         </table>
          </fieldset>
     </div>
         <div align="center"> </div></td>
   </tr>
 </table>
 <table width="900">
   <tr>
     <td><div align="center">
         <fieldset style="width:900px">
         <legend class="style39" align="right"> إحصائيات   الطلاق  لسنة <?php echo $annee;
		  		  
		   ?> و خلال 10 سنوات الماضية</legend>
           <table width="75%" border="1" cellpadding="0" cellspacing="0">
           <tr>
             <td><div align="center">
                 <?php 
	  
	 $values=array($naissance11d,$naissance10d,$naissance9d,$naissance8d,$naissance7d,$naissance6d,$naissance5d,$naissance4d,$naissance3d,$naissance2d,$naissance1d);
	 

		 $tab=implode(",",$values);
echo "<img src='../Artichow-php4+5/examples/bar-005.php?tab=".urlencode($tab)."' width=\"800\" / >";

	  
	  ?>
             </div></td>
           </tr>
         </table>
          </fieldset>
     </div></td>
   </tr>
 </table>
 

	<?php } ?>















    <?php 

if($type==8) 
{
  
  ?>
  
  
  <table width="900">
   <tr>
     <td><div align="center">
         <?php 



$naissance=$annee;


//////////////////CALCUl		
  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance1d=$detail['nbr'];


$naissance=$naissance-1;


  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance2d=$detail['nbr'];


 $naissance=$naissance-1;


  $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance3d=$detail['nbr'];
 

 
  $naissance=$naissance-1;


 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance4d=$detail['nbr'];
 
 
   $naissance=$naissance-1;


 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance5d=$detail['nbr'];
 

 
    $naissance=$naissance-1;


 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance6d=$detail['nbr'];
 
     $naissance=$naissance-1;




 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance7d=$detail['nbr'];
 

 
    $naissance=$naissance-1;



 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance8d=$detail['nbr'];
 

 
    $naissance=$naissance-1;

		
	
	 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance9d=$detail['nbr'];
 

 
    $naissance=$naissance-1;




 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance10d=$detail['nbr'];
 

 
    $naissance=$naissance-1;

	
	
	 $Req =  "SELECT COUNT(code) as nbr  FROM `naissance` WHERE `annee_declaration`='".$naissance."' and `deces_naissance` IN(3,4)     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance11d=$detail['nbr'];
 



		
		
		?>
         <fieldset style="width:900px">
         <legend class="style39" align="right">إحصائيات  أحكام الولادات  لسنة <?php echo $annee;
		  		  
		   ?> و خلال 10 سنوات الماضية</legend>
           <table width="887" border="1" cellpadding="0" cellspacing="0">
           <tr>
             <td><div align="center"><?php echo number_format($naissance11d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance10d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance9d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance8d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance7d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance6d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance5d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance4d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance3d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance2d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance1d, 0, '', ' '); ?></div></td>
           </tr>
           <tr>
             <td><div align="center"><?php echo $annee-10;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-9;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-8;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-7;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-6;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-5;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-4;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-3;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-2;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-1;
                 ?></div></td>
             <td><div align="center"><?php echo $annee;
                 ?></div></td>
           </tr>
         </table>
          </fieldset>
     </div>
         <div align="center"> </div></td>
   </tr>
 </table>
 <table width="900">
   <tr>
     <td><div align="center">
         <fieldset style="width:900px">
         <legend class="style39" align="right"> إحصائيات    أحكام الولادات  لسنة <?php echo $annee;
		  		  
		   ?> و خلال 10 سنوات الماضية</legend>
           <table width="75%" border="1" cellpadding="0" cellspacing="0">
           <tr>
             <td><div align="center">
                 <?php 
	  
	 $values=array($naissance11d,$naissance10d,$naissance9d,$naissance8d,$naissance7d,$naissance6d,$naissance5d,$naissance4d,$naissance3d,$naissance2d,$naissance1d);
	 

		 $tab=implode(",",$values);
echo "<img src='../Artichow-php4+5/examples/bar-005.php?tab=".urlencode($tab)."' width=\"800\" / >";

	  
	  ?>
             </div></td>
           </tr>
         </table>
          </fieldset>
     </div></td>
   </tr>
 </table>
 

	<?php } ?>












    <?php 

if($type==9) 
{
  
  ?>
  
  
  <table width="900">
   <tr>
     <td><div align="center">
         <?php 




$naissance=$annee;


//////////////////CALCUl		
  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance1d=$detail['nbr'];


$naissance=$naissance-1;


  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance2d=$detail['nbr'];


 $naissance=$naissance-1;


  $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5      ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance3d=$detail['nbr'];
 

 
  $naissance=$naissance-1;


 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance4d=$detail['nbr'];
 
 
   $naissance=$naissance-1;


 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance5d=$detail['nbr'];
 

 
    $naissance=$naissance-1;


 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance6d=$detail['nbr'];
 
     $naissance=$naissance-1;




 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance7d=$detail['nbr'];
 

 
    $naissance=$naissance-1;



 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance8d=$detail['nbr'];
 

 
    $naissance=$naissance-1;

		
	
	 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance9d=$detail['nbr'];
 

 
    $naissance=$naissance-1;




 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance10d=$detail['nbr'];
 

 
    $naissance=$naissance-1;

	
	
	 $Req =  "SELECT COUNT(code) as nbr  FROM `deces` WHERE `annee_declaration`='".$naissance."'  and `deces_naissance`=5     ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res); 
 $naissance11d=$detail['nbr'];
 



		
		
		?>
         <fieldset style="width:900px">
         <legend class="style39" align="right">إحصائيات  أحكام الوفيات  لسنة <?php echo $annee;
		  		  
		   ?> و خلال 10 سنوات الماضية</legend>
           <table width="887" border="1" cellpadding="0" cellspacing="0">
           <tr>
             <td><div align="center"><?php echo number_format($naissance11d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance10d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance9d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance8d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance7d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance6d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance5d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance4d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance3d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance2d, 0, '', ' '); ?></div></td>
             <td><div align="center"><?php echo number_format($naissance1d, 0, '', ' '); ?></div></td>
           </tr>
           <tr>
             <td><div align="center"><?php echo $annee-10;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-9;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-8;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-7;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-6;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-5;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-4;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-3;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-2;
                 ?></div></td>
             <td><div align="center"><?php echo $annee-1;
                 ?></div></td>
             <td><div align="center"><?php echo $annee;
                 ?></div></td>
           </tr>
         </table>
          </fieldset>
     </div>
         <div align="center"> </div></td>
   </tr>
 </table>
 <table width="900">
   <tr>
     <td><div align="center">
         <fieldset style="width:900px">
         <legend class="style39" align="right"> إحصائيات    أحكام الوفيات لسنة <?php echo $annee;
		  		  
		   ?> و خلال 10 سنوات الماضية</legend>
           <table width="75%" border="1" cellpadding="0" cellspacing="0">
           <tr>
             <td><div align="center">
                 <?php 
	  
	 $values=array($naissance11d,$naissance10d,$naissance9d,$naissance8d,$naissance7d,$naissance6d,$naissance5d,$naissance4d,$naissance3d,$naissance2d,$naissance1d);
	 

		 $tab=implode(",",$values);
echo "<img src='../Artichow-php4+5/examples/bar-005.php?tab=".urlencode($tab)."' width=\"800\" / >";

	  
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
      <td width="30%"><div align="right">حرر ب : <span class="gras"><?php echo $bureau_a; ?></span></div></td>
    </tr>
  </table>
  <p>&nbsp; </p>
  
  
  
  
  <?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

  