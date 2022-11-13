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

   
 include"accesclient1.php";
if ($permission==securite4($tim4)) { include("div_admin.php");  

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

  <p align="center">&nbsp;</p>
<div align="center">










				  
   				<fieldset style="width:40%px">
          <legend align="right" class="gras style42"><span class="style43">العدد الإجمالي</span></legend>

          <table width="60%">
            <tr>
              <td bgcolor="#FFFFFF"><span class="style44">ff</span></td>
              <td bgcolor="#FFFFFF"><span class="style44">ff</span></td>
            </tr>
            <tr>
              <td width="27%" bgcolor="#EFEFEF"><div align="center"><span class="style44"></span></div></td>
              <td width="73%" bgcolor="#EFEFEF"><div align="center"><span class="style44"></span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style43">
                <?php 
	  

$Req =  " SELECT n_d,n_hors_d,t_d,t_hors_d,d_d,d_hors_d,d_etrange  FROM `administration`  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());

	$row3 = mysql_fetch_array($res);

			  	echo number_format($row3[n_d], 0, '', ' ');
	
	  
	  ?>
              </span></div></td>
              <td bgcolor="#EFEFEF"><div align="center" class="style43">تصاريح الولادات داخل الاجل القانوني</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF">&nbsp;</td>
              <td bgcolor="#EFEFEF"><span class="style45">ff</span></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style43">
                  <?php 
	  


			  	echo number_format($row3[n_hors_d], 0, '', ' ');
	
	  
	  ?>
              </span></div></td>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style43">أحكام الولادات</span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"></div></td>
              <td bgcolor="#EFEFEF"><div align="center" class="style45">ff</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style43">
                  <?php 
	  

			  	echo number_format($row3[d_d], 0, '', ' ');
	
	  
	  ?>
              </span></div></td>
              <td bgcolor="#EFEFEF"><div align="center" class="style43">تصاريح الوفيات داخل الاجل القانوني</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"></div></td>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style45">ff</span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style43">
                  <?php 
	  


			  	echo number_format($row3[d_hors_d], 0, '', ' ');
	
	  
	  ?>
              </span></div></td>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style43">أحكام الوفيات</span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"></div></td>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style45">ff</span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style43">
                  <?php 
	  
$trans=$row3[t_hors_d]+$row3[t_d];

			  	echo number_format($trans, 0, '', ' ');
	
	  
	  ?>
              </span></div></td>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style43"></span><span class="style43">نقل الرسوم </span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF">&nbsp;</td>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style45">ff</span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style43">
                  <?php 
	  

			  	echo number_format($row3[d_etrange], 0, '', ' ');
	
	  
	  ?>
              </span></div></td>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style43"></span><span class="style43"> وفيات غير محلية</span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF">&nbsp;</td>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style45">ff</span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style43">
                  <?php 
	  
$Req =  " SELECT MAX(id) as ht  FROM `carnet`  ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error());

$detail = mysql_fetch_assoc($res); 

$ca=$detail['ht'];



			  	echo number_format($ca, 0, '', ' ');
	
	  
	  ?>
              </span></div></td>
              <td bgcolor="#EFEFEF"><div align="center"><span class="style43"></span><span class="style43"> البطائق الشخصية </span></div></td>
            </tr>
          </table>
   				</fieldset>




</div>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
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

