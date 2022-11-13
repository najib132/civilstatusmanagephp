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

$off=$_SESSION["off"];      
$off1=$_SESSION["off1"];      


 

   $idf=$_SESSION["idf"];
   $idf_m=$_SESSION["idf_m"];
   
   
 include"accesclient1.php";
if ($permission==securite3($tim3)) { include("div_root.php");  

?>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      



   <style type="text/css">
<!--
.style39 {
	font-size: 18px;
	color: #FFFFFF;
}

.gras {	font-weight: bold;
}
.gras {	font-weight: bold;
	text-align: center;
}
.style43 {font-weight: bold; text-align: center; font-size: 25px; }
#Layer1 {	position:absolute;
	left:347px;
	top:343px;
	width:176px;
	height:147px;
	z-index:1;
}
.style44 {color: #FFFFFF}
.style45 {color: #EFEFEF}
-->
   </style>


</head>
<body>
<div align="center">
  <div align="right">
   				  <table width="46%">
                    <tr>
                      <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2" bgcolor="#FFFFFF"><div align="right"><a href="messagerie.php?pag=2&acces=root" class="style28"><img src="icone/explorer.JPEG" width="48" height="48" border="0" /></a><span class="style38 style44">___</span><a href="messagerie.php?pag=2&acces=root" class="style28">علبة رسائل (
                        <?php 
	/*		
			
 $ip=$_SERVER['REMOTE_ADDR'];
 
 $Requete =  "DELETE FROM `tmp1`  WHERE `ip`='".$ip."'    "; 
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
*/

	
 $Requete3 = "select count(id) as nbr from message where `nom`='".$idf_m."' and `valider`=0 ";
$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$detail = mysql_fetch_assoc($result3); 

echo $ca=$detail['nbr'];

	
	?>
                        )</a><span class="style19 style39 style38">عن</span></div></td>
                    </tr>
                  </table>
			      </div>
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  


</div>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
  </div>
</div>

</body>
</html>


<?php    }else{ ?> 

Vous n'avez pas le droit de voir cette page
  <?php } ?>

