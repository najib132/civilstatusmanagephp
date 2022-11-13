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
   
   
 include"accesclient1.php";
if ($permission==securite2($tim2)) { include("div.php");  


?>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      


 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>


   <style type="text/css">
<!--
.style39 {font-size: 18px}
.style40 {
	font-size: 20px;
	color: #707070;
}
#Layer1 {	position:absolute;
	left:414px;
	top:362px;
	width:172px;
	height:105px;
	z-index:1;
}
.style41 {font-weight: bold; text-align: center; font-size: 16px; }
-->
   </style>
</head>
<body>
<div align="center">




  <script type="text/javascript">

function Validerfrm()
{


var partie = document.form1.partie.value;




if(partie=="" || isNaN(partie)) 
		{ 
        alert ('Vérifier le Champ partie'); 
        document.form1.partie.focus(); 
        return false; 
    	} 
		

		
	



	
				
 }
		
		
///////////////////////////////////

    </script>



  <form action="test2.php" method="get" name="form1" id="form1" onSubmit="return Validerfrm()">
    <p class="style40">&nbsp;</p>
    <p class="style40">&nbsp;</p>
    <p class="style40">
      <?php 
	
	$affiche=$_GET["affiche"];
	$partie=$_GET["partie"];
	echo $affiche;
	
	 ?>
    </p>
    <div align="center">


	
	
	
    <p>&nbsp;</p>
    <table width="464" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="228" bgcolor="#EFEFEF"><div align="center">
          <input name="date" type="text" id="date" value="<?php echo date("d/m/Y"); ?>" size="14" maxlength="14" />
        </div></td>
        <td width="230" bgcolor="#FFFFFF"><div align="center"><span class="style39">تاريخ التحرير</span></div></td>
      </tr>
    </table>


	
    <p>
    <label></label>    
    <label>
    <input name="partie" type="hidden" id="partie" value="<?php 
	
	
				   	$Requete3 = "select MAX(id_attestation) as ht from tmp  ";
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

$detail = mysql_fetch_assoc($result3); 

$ca=$detail['ht'];
echo $ca+1;

	
	?>">
    <input name="Submit" type="submit" class="style41" value="تابع">
    </label>
    <p><a href="recherche_attestation.php?attestation=1&deces_naissance=0" class="style39" style="text-decoration:none">البحث عن شواهد الحياة الجماعية السابقة</a>
    </div>
  </form>
</div>
   </body>
</html>


<?php    }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>

