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
if ($permission==securite2($tim2)) { include("div.php");  

$type=$_GET["type"];

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
#Layer1 {
	position:absolute;
	left:48px;
	top:102px;
	width:14px;
	height:38px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:546px;
	top:583px;
	width:202px;
	height:24px;
	z-index:2;
}
body {
	background-color: #FFFFFF;
}
.style39 {font-size: 18px}
.style43 {font-size: 16px}
.style44 {font-size: 16px; font-weight: bold; }
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body> 
<p align="center">
  <label></label>
</p>


  <form action="<?php if($type==1 || $type==2 || $type==3)  echo "etat/etat1.php"; else echo "etat/statistique.php"; ?>" method="get" name="form1" target="_blank" id="form1" onSubmit="return Validerfrm()">


  <div align="center">
  <table width="200">
      <tr>
        <td>
				<?php if($type==1 || $type==2) { ?>  

		<fieldset style="width:75%">
          <legend class="style39" align="right">الإحصائيات</legend>
		  
		  
          <table width="380" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="197" bgcolor="#EFEFEF"><div align="center"><strong>
                  <select name="annee" id="annee" onChange="getDpt()">

                    <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                    <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                  </select>
              </strong></div></td>
              <td width="177"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
          </fieldset>
        </td>
      </tr>
    </table>
	
	
	
					<?php }
					
					
					if($type==4 || $type==5 || $type==6 || $type==7 || $type==8 || $type==9) { ?>  

		<fieldset style="width:75%">
          <legend class="style39" align="right">الإحصائيات</legend>
		  
		  
          <table width="380" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="197" bgcolor="#EFEFEF"><div align="center"><strong>
                  <select name="annee" id="annee" onChange="getDpt()">

                    <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                    <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                  </select>
              </strong></div></td>
              <td width="177"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
    </fieldset>
        </td>
      </tr>
    </table>
	
	
	
<?php }

if($type==3)
{

?>	

	
<table width="200">
      <tr>
        <td>
		
		<fieldset style="width:75%">
          <legend class="style39" align="right">الأطفال البالغين سن التمدرس</legend>
		  
		  
		  
          <table width="380" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center"></div></td>
              <td><div align="center"><span class="style39">تاريخ الإزدياد </span></div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <input name="d" type="text" id="d" size="13" maxlength="10" value="<?php echo date("d/m/Y"); ?>">
                <button id="trigger1"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
                <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "d",
		        button            : "trigger1",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
</div></td>
              <td><div align="center">من</div></td>
            </tr>
            <tr>
              <td width="197" bgcolor="#EFEFEF"><div align="center">
                <input name="f" type="text" id="f" size="13" maxlength="10" value="<?php echo date("d/m/Y"); ?>">
                <button id="trigger2"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
                <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "f",
		        button            : "trigger2",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
</div></td>
              <td width="177"><div align="center" class="style39">إلى</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <input name="nn" type="text" id="nn" size="18" maxlength="3" value="30">
              </div></td>
              <td><div align="center" class="style39">عدد البيانات الصفحة</div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
          </fieldset>
        </td>
      </tr>
    </table>
	
	<?php } ?>
	
	
	
	
    </div>
</form>

		<?php if($type==10) { ?>  

<form action="etat/etat2.php" method="get" name="form1" target="_blank" id="form1">


	
	<div align="center">
	

		<fieldset style="width:75%">
          <legend class="style39" align="right">لائحة المواليد  المسجلين </legend>
		  
		  
          <table width="580" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="5" bgcolor="#EFEFEF"><div align="right" class="style44">
                <select name="annee2" id="annee2">
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select> 
                من 
                <select name="annee1" id="annee1">
                  
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
               إلى</div></td>
              <td width="208"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
              <td colspan="5" bgcolor="#EFEFEF"><div align="right" class="style44">
                  <select name="mois2" id="mois2">
                    <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                    <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
                  </select>
                من
                <select name="mois1" id="mois1">
                  <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
                </select>
                إلى </div></td>
              <td><div align="center" class="style39">الشهر</div></td>
            </tr>
            <tr>
              <td width="139" bgcolor="#EFEFEF"><div align="right" class="style44">إناث
                <input name="sex" type="radio" value="F">
              </div></td>
              <td width="111" colspan="2" bgcolor="#EFEFEF"><div align="right" class="style44">
                ذكور
                <input name="sex" type="radio" value="M">
              </div></td>
              <td width="112" colspan="2" bgcolor="#EFEFEF"><div align="right" class="style44">
                <label></label>
                الكل
                <input name="sex" type="radio" checked>
              </div></td>
              <td><div align="center" class="style39">الجنس</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="right" class="style44">بحكم 
                      <input name="declaration" type="radio" value="IN(3,4)">
              </div></td>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right" class="style44">  عادي
                      <input name="declaration" type="radio" value="IN(0,2)">
              </div></td>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right" class="style44">
                  <label></label>
                الكل
                <input name="declaration" type="radio" value="IN(0,2,3,4)" checked>
              </div></td>
              <td><div align="center" class="style39">نوع التصريح</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="right" class="style44">السنة و الرقم  
                <input name="ordre" type="radio" value="annee_declaration,code">
              </div></td>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right" class="style44">  تاريخ الإزدياد
                      <input name="ordre" type="radio" value="date_n">
              </div></td>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right" class="style44">
                  <label></label>
                الإسم العائلي
                <input name="ordre" type="radio" value="nom_a" checked>
              </div></td>
              <td><div align="center"><strong>الترتيب حسب</strong></div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong><span class="style43">تناقصي
                <input name="sens" type="radio" value="desc">
              </span></strong></div></td>
              <td colspan="3" bgcolor="#EFEFEF"><div align="right"><strong><span class="style43">
                تصاعدي
                <input name="sens" type="radio" value="asc" checked>
              </span></strong></div></td>
              <td><div align="center"><strong>وفق منحى</strong></div></td>
            </tr>
            <tr>
              <td colspan="5" bgcolor="#EFEFEF"><div align="center">
                  <input name="nn" type="text" id="nn" size="18" maxlength="3" value="30">
              </div></td>
              <td><div align="center" class="style39">عدد البيانات الصفحة</div></td>
            </tr>
            <tr>
              <td colspan="6" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="table" type="hidden" id="table" value="naissance">
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
    </fieldset>
        </td>
      </tr>
    </table>
  </div>
</form>



<form action="etat/etat3.php" method="get" name="form2" target="_blank" id="form1">


	
	<div align="center">
	

		<fieldset style="width:75%">
          <legend class="style39" align="right">لائحة المواليد المسجلين : تقرير لمدة 15 يوم </legend>
		  
		  
          <table width="580" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="5" bgcolor="#EFEFEF"><div align="right" class="style44">
                <select name="annee" id="annee">
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
              </div></td>
              <td width="208"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
              <td colspan="5" bgcolor="#EFEFEF"><div align="right" class="style44">
                  <select name="mois" id="mois">
                    <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                    <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
                </select>
              </div></td>
              <td><div align="center" class="style39">الشهر</div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong><span class="style43">الثاني
                <input name="demi" type="radio" value="2">
              </span></strong></div></td>
              <td colspan="3" bgcolor="#EFEFEF"><div align="right"><strong><span class="style43"> الأول
                <input name="demi" type="radio" value="1" checked>
              </span></strong></div></td>
              <td><div align="center"><strong>النصف</strong></div></td>
            </tr>
            <tr>
              <td width="139" bgcolor="#EFEFEF"><div align="right" class="style44">إناث
                <input name="sex" type="radio" value="F">
              </div></td>
              <td width="111" colspan="2" bgcolor="#EFEFEF"><div align="right" class="style44">
                ذكور
                <input name="sex" type="radio" value="M">
              </div></td>
              <td width="112" colspan="2" bgcolor="#EFEFEF"><div align="right" class="style44">
                <label></label>
                الكل
                <input name="sex" type="radio" checked>
              </div></td>
              <td><div align="center" class="style39">الجنس</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="right" class="style44">بحكم 
                      <input name="declaration" type="radio" value="IN(3,4)">
              </div></td>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right" class="style44">  عادي
                      <input name="declaration" type="radio" value="IN(0,2)">

              </div></td>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right" class="style44">
                  <label></label>
                الكل
                <input name="declaration" type="radio" value="IN(0,2,3,4)" checked>
              </div></td>
              <td><div align="center" class="style39">نوع التصريح</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="right" class="style44">السنة و الرقم  
                <input name="ordre" type="radio" value="annee_declaration,code">
              </div></td>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right" class="style44">  تاريخ الإزدياد
                      <input name="ordre" type="radio" value="date_n">
              </div></td>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right" class="style44">
                  <label></label>
                الإسم العائلي
                <input name="ordre" type="radio" value="nom_a" checked>
              </div></td>
              <td><div align="center"><strong>الترتيب حسب</strong></div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong><span class="style43">تناقصي
                <input name="sens" type="radio" value="desc">
              </span></strong></div></td>
              <td colspan="3" bgcolor="#EFEFEF"><div align="right"><strong><span class="style43">
                تصاعدي
                <input name="sens" type="radio" value="asc" checked>
              </span></strong></div></td>
              <td><div align="center"><strong>وفق منحى</strong></div></td>
            </tr>
            <tr>
              <td colspan="5" bgcolor="#EFEFEF"><div align="center">
                  <input name="nn" type="text" id="nn" size="18" maxlength="3" value="30">
              </div></td>
              <td><div align="center" class="style39">عدد البيانات الصفحة</div></td>
            </tr>
            <tr>
              <td colspan="6" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="table" type="hidden" id="table" value="naissance">
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
    </fieldset>
        </td>
      </tr>
    </table>

	</div>
	<p>
	</p>
	<p align="center">&nbsp;</p>
</form>


	  <?php } ?>

	
	
			<?php if($type==11) { ?>  

<form action="etat/etat2.php" method="get" name="form1" target="_blank" id="form1">


	
	<div align="center">
	

		<fieldset style="width:600">
          <legend class="style39" align="right">لائحة الوفيات المصرح بهم </legend>
		  
		  
          <table width="569" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="center">
                <div align="right" class="style44">
                  <select name="annee2" id="annee2">
                    <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                    <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                  </select>
                  من
  <select name="annee1" id="select2">
    <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
    <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
  </select>
                  إلى</div>
              </div></td>
              <td width="150"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="right"><strong>
                  <select name="mois2" id="mois2">
                    <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                    <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
                  </select>
                من
                <select name="mois1" id="mois1">
                  <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
                </select>
                إلى </strong></div></td>
              <td><div align="center" class="style39">الشهر</div></td>
            </tr>
            <tr>
              <td width="147" bgcolor="#EFEFEF"><div align="right"><span class="style39">إناث</span>
                      <input name="sex" type="radio" value="F">
              </div></td>
              <td width="109" bgcolor="#EFEFEF"><div align="right"> <span class="style39">ذكور</span>
                      <input name="sex" type="radio" value="M">
              </div></td>
              <td width="153" bgcolor="#EFEFEF"><div align="right" class="style39">
                  <label></label>
                الكل
                <input name="sex" type="radio" checked>
              </div></td>
              <td><div align="center" class="style39">الجنس</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="right"><span class="style39">بحكم </span>
                      <input name="declaration" type="radio" value="5">
              </div></td>
              <td bgcolor="#EFEFEF"><div align="right"> <span class="style39"> عادي</span>
                      <input name="declaration" type="radio" value="1">
              </div></td>
              <td bgcolor="#EFEFEF"><div align="right" class="style39">
                  <label></label>
                الكل
                <input name="declaration" type="radio" checked>
              </div></td>
              <td><div align="center" class="style39">نوع التصريح</div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF">
                <div align="right">
                  <input name="age1" type="text" id="age1" size="6" maxlength="2">
                </div></td>
              <td bgcolor="#EFEFEF"><div align="right" class="style39">
                <div align="center">من</div>
              </div></td>
              <td rowspan="2"><div align="center"><span class="style39">العمر</span></div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF">
                <div align="right">
                  <input name="age2" type="text" id="age2" size="6" maxlength="2">
                </div></td>
              <td bgcolor="#EFEFEF"><div align="right" class="style39">
                <div align="center">إلى</div>
              </div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                <script type="text/javascript">
                <!--
                        function open_prof()
                        {
                                width = 620;
                                height = 300;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }
          window.open('choix_prof.php?ch5=secteur','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                                          </script>
              <a href="#null" onClick="javascript:open_prof();">
              <label>              </label>
              <div align="right">
                <input name="secteur" type="text" id="secteur" size="6" maxlength="2">
              </div>
              </a></div></td>
              <td colspan="2"><a href="#null" onClick="javascript:open_prof();">
                <div align="right"> القطاع المهني الذي ينتمي إليه المتوفى </div>
              </a> </td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="right" class="style44">
                <div align="right">السنة و الرقم
                  <input name="ordre" type="radio" value="annee_declaration,code">
                </div>
              </div></td>
              <td bgcolor="#EFEFEF"><div align="right"><span class="style44">تاريخ الوفاة
              <input name="ordre" type="radio" value="date_n_d">
              </span></div></td>
              <td bgcolor="#EFEFEF"><div align="right"><span class="style44">الإسم العائلي
                <input name="ordre" type="radio" value="nom_a" checked>
              </span></div></td>
              <td><div align="center"><strong>الترتيب حسب</strong></div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong><span class="style43">تناقصي
                <input name="sens" type="radio" value="desc">
              </span></strong></div></td>
              <td bgcolor="#EFEFEF"><div align="right"><strong><span class="style43">تصاعدي
                <input name="sens" type="radio" value="asc" checked>
              </span></strong></div></td>
              <td><div align="center"><strong>وفق منحى</strong></div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="center">
                  <input name="nn" type="text" id="nn" size="18" maxlength="3" value="30">
              </div></td>
              <td><div align="center" class="style39">عدد البيانات الصفحة</div></td>
            </tr>
            <tr>
              <td colspan="4" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="table" type="hidden" id="table" value="deces">
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
        </table>
    </fieldset>
        </td>
      </tr>
    </table>
  </div>
</form>





<form action="etat/etat3.php" method="get" name="form1" target="_blank" id="form1">


	
	<div align="center">
	

		<fieldset style="width:600">
          <legend class="style39" align="right">لائحة الوفيات المصرح بهم : تقرير لمدة 15 يوم </legend>
		  
		  
          <table width="569" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="right"><span class="style44">
                <select name="annee" id="annee">
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
              </span></div></td>
              <td width="189"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="right"><span class="style44">
                <select name="mois" id="mois">
                  <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
                </select>
              </span></div></td>
              <td><div align="center" class="style39">الشهر</div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong><span class="style43">الثاني
                <input name="demi" type="radio" value="2">
              </span></strong></div></td>
              <td bgcolor="#EFEFEF"><div align="right"><strong><span class="style43">الأول
                <input name="demi" type="radio" value="1" checked>
              </span></strong></div></td>
              <td><div align="center"><strong>النصف</strong></div></td>
            </tr>
            <tr>
              <td width="132" bgcolor="#EFEFEF"><div align="right"><span class="style39">إناث</span>
                      <input name="sex" type="radio" value="F">
              </div></td>
              <td width="121" bgcolor="#EFEFEF"><div align="right"> <span class="style39">ذكور</span>
                      <input name="sex" type="radio" value="M">
              </div></td>
              <td width="117" bgcolor="#EFEFEF"><div align="right" class="style39">
                  <label></label>
                الكل
                <input name="sex" type="radio" checked>
              </div></td>
              <td width="189"><div align="center" class="style39">الجنس</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="right"><span class="style39">بحكم </span>
                      <input name="declaration" type="radio" value="5">
              </div></td>
              <td bgcolor="#EFEFEF"><div align="right"> <span class="style39"> عادي</span>
                      <input name="declaration" type="radio" value="1">
              </div></td>
              <td bgcolor="#EFEFEF"><div align="right" class="style39">
                  <label></label>
                الكل
                <input name="declaration" type="radio" checked>
              </div></td>
              <td><div align="center" class="style39">نوع التصريح</div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF">
                <div align="right">
                  <input name="age1" type="text" id="age1" size="6" maxlength="2">
                </div></td>
              <td bgcolor="#EFEFEF"><div align="right" class="style39">
                <div align="right">من</div>
              </div></td>
              <td rowspan="2"><div align="center"><span class="style39">العمر</span></div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF">
                <div align="right">
                  <input name="age2" type="text" id="age2" size="6" maxlength="2">
                </div></td>
              <td bgcolor="#EFEFEF"><div align="right" class="style39">
                <div align="right">إلى</div>
              </div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="right" class="style44">
                <div align="right">السنة و الرقم
                  <input name="ordre" type="radio" value="annee_declaration,code">
                </div>
              </div></td>
              <td bgcolor="#EFEFEF"><div align="right"><span class="style44">تاريخ الوفاة
              <input name="ordre" type="radio" value="date_n_d">
              </span></div></td>
              <td bgcolor="#EFEFEF"><div align="right"><span class="style44">الإسم العائلي
                <input name="ordre" type="radio" value="nom_a" checked>
              </span></div></td>
              <td><div align="center"><strong>الترتيب حسب</strong></div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong><span class="style43">تناقصي
                <input name="sens" type="radio" value="desc">
              </span></strong></div></td>
              <td bgcolor="#EFEFEF"><div align="right"><strong><span class="style43">تصاعدي
                <input name="sens" type="radio" value="asc" checked>
              </span></strong></div></td>
              <td><div align="center"><strong>وفق منحى</strong></div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="center">
                  <input name="nn" type="text" id="nn" size="18" maxlength="3" value="30">
              </div></td>
              <td><div align="center" class="style39">عدد البيانات الصفحة</div></td>
            </tr>
            <tr>
              <td colspan="4" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="table" type="hidden" id="table" value="deces">
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
        </table>
    </fieldset>
        </td>
      </tr>
    </table>

	</div>
	<p>
	</p>
	<p align="center">&nbsp;</p>
</form>




	  <?php } ?>


	
	
	
	
	
	
	
	
	
	
	
	
				<?php if($type==12) { ?>  

  <form action="etat/etat2.php" method="get" name="form1" target="_blank" id="form1">


	
	<div align="center">
	

		<fieldset style="width:600px">
          <legend class="style39" align="right">لائحة بحسب البيانات الهامشية</legend>
		  
		  
          <table width="100%" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="right"><strong>
                <select name="annee" id="annee">
                  
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
              </strong></div></td>
              <td width="197"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="right"><strong>
                <select name="mois2" id="mois2">
                   <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                   <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
              </select>
                  من  
                  <select name="mois1" id="mois1">
                  <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; }?></option>
                </select>
                  إلى               </strong></div></td>
              <td><div align="center" class="style39">الشهر</div></td>
            </tr>
            <tr>
              <td width="106" bgcolor="#EFEFEF"><div align="right"><span class="style39">إناث</span>
                      <input name="sex" type="radio" value="F">
              </div></td>
              <td width="167" bgcolor="#EFEFEF"><div align="right"> <span class="style39">ذكور</span>
                      <input name="sex" type="radio" value="M">
              </div></td>
              <td width="118" bgcolor="#EFEFEF"><div align="right" class="style39">
                  <label></label>
                الكل
                <input name="sex" type="radio" checked>
              </div></td>
              <td><div align="center" class="style39">الجنس</div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="right"><strong>
                <select name="bayane" id="bayane" onChange="getDpt()">
                  <?php   
			   	$Requete3 = "select bayane1,id from mention order by id asc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[1]; ?>"><?php echo $row[0]; }?></option>
                </select>
              </strong></div></td>
              <td><div align="center" class="style39">إختر البيان الهامشي</div></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF">
                  <div align="right">
                    <input name="nn" type="text" id="nn" size="18" maxlength="3" value="30">
                  </div></td>
              <td><div align="center" class="style39">عدد البيانات الصفحة</div></td>
            </tr>
            <tr>
              <td colspan="4" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="table" type="hidden" id="table" value="mention_p">
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
    </fieldset>
        </td>
      </tr>
    </table>

	</div>
	<p>
	</p>
	<p align="center">&nbsp;</p>
</form>
	  <p>
	    <?php } ?>
	    
	    
	    
	    
	    
	    
	    
	    
	    <?php if($type==13) { ?>  
</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;    </p>
	  <form action="etat/etat2.php" method="get" name="form1" target="_blank" id="form1">


	
	<div align="center">
	

		<fieldset style="width:75%">
          <legend class="style39" align="right">الوفيات حسب الحرفة</legend>
		  
		  
          
		  <table width="432" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong>
                <select name="annee_declaration" id="annee_declaration">
                  
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
              </strong></div></td>
              <td width="153"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
			



			
			
              <td width="154" bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois1" id="mois1">
                  <?php  
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; }?></option>
                </select>
              </strong></div></td>
              <td width="117" bgcolor="#EFEFEF" class="style39"><div align="center">من</div></td>
              <td rowspan="2"><div align="center" class="style39">الشهر</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois2" id="mois2">
                  <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; } ?></option>
                </select>
              </strong></div></td>
              <td bgcolor="#EFEFEF" class="style39"><div align="center">إلى</div></td>
			  
			  
		  
			  
			  
			  
			  
			  
			  
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="table" type="hidden" id="table" value="deces_prof">
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
    </fieldset>
        </td>
      </tr>
    </table>

	</div>
	<p>
	</p>
	<p align="center">&nbsp;</p>
</form>
	  <?php } ?>

	
	
	



	    <?php if($type==14) { ?>  
</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;    </p>
	  <form action="etat/fiche_dep.php" method="get" name="form1" target="_blank" id="form1">


	
	<div align="center">
	

		<fieldset style="width:75%">
          <legend class="style39" align="right">الحصيلة</legend>
		  
		  
          <table width="432" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong>
                <select name="annee_declaration" id="annee_declaration">
                  
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
              </strong></div></td>
              <td width="153"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
			



			
			
              <td width="154" bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois1" id="mois1">
                  <?php  
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; }?></option>
                </select>
              </strong></div></td>
              <td width="117" bgcolor="#EFEFEF" class="style39"><div align="center">من</div></td>
              <td rowspan="2"><div align="center" class="style39">الشهر</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois2" id="mois2">
                  <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; } ?></option>
                </select>
              </strong></div></td>
              <td bgcolor="#EFEFEF" class="style39"><div align="center">إلى</div></td>
			  
			  
		  
			  
			  
			  
			  
			  
			  
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
    </fieldset>
        </td>
      </tr>
    </table>

	</div>
	<p>
	</p>
	<p align="center">&nbsp;</p>
</form>
	  <?php } ?>

	








	    <?php if($type==15) { ?>  
</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;    </p>
	  <form action="etat/fiche_dep2.php" method="get" name="form1" target="_blank" id="form1">


	
	<div align="center">
	

		<fieldset style="width:75%">
          <legend class="style39" align="right">الوفيات حسب العمر</legend>
		  
		  
          
		  <table width="432" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong>
                <select name="annee_declaration" id="annee_declaration">
                  
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
              </strong></div></td>
              <td width="153"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
			



			
			
              <td width="154" bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois1" id="mois1">
                  <?php  
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; }?></option>
                </select>
              </strong></div></td>
              <td width="117" bgcolor="#EFEFEF" class="style39"><div align="center">من</div></td>
              <td rowspan="2"><div align="center" class="style39">الشهر</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois2" id="mois2">
                  <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; } ?></option>
                </select>
              </strong></div></td>
              <td bgcolor="#EFEFEF" class="style39"><div align="center">إلى</div></td>
			  
			  
		  
			  
			  
			  
			  
			  
			  
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
    </fieldset>
        </td>
      </tr>
    </table>

	</div>
	<p>
	</p>
	<p align="center">&nbsp;</p>
</form>
	  <?php } ?>










	    <?php if($type==16) { ?>  
</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;    </p>
	  <form action="etat/fiche_dep3.php" method="get" name="form1" target="_blank" id="form1">


	
	<div align="center">
	

		<fieldset style="width:75%">
          <legend class="style39" align="right"> الولادات حسب مكان الإقامة </legend>
		  
		  
          <table width="432" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong>
                <select name="annee_declaration" id="annee_declaration">
                  
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
              </strong></div></td>
              <td width="153"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
			



			
			
              <td width="154" bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois1" id="mois1">
                  <?php  
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; }?></option>
                </select>
              </strong></div></td>
              <td width="117" bgcolor="#EFEFEF" class="style39"><div align="center">من</div></td>
              <td rowspan="2"><div align="center" class="style39">الشهر</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois2" id="mois2">
                  <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; } ?></option>
                </select>
              </strong></div></td>
              <td bgcolor="#EFEFEF" class="style39"><div align="center">إلى</div></td>
			  
			  
		  
			  
			  
			  
			  
			  
			  
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="table" type="hidden" id="table" value="deces_prof">
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
		  
    </fieldset>
        </td>
      </tr>
    </table>

	</div>
	<p>
	</p>
	<p align="center">&nbsp;</p>
</form>
	  <?php } ?>









	    <?php if($type==17) { ?>  
</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;    </p>
	  <form action="etat/etat2.php" method="get" name="form9" target="_blank" id="form9">


	
	<div align="center">
	

		<fieldset style="width:75%">
          <legend class="style39" align="right">رتبة الولادة</legend>
		  
		  
          
		  <table width="432" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong>
                <select name="annee_declaration" id="annee_declaration">
                  
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
              </strong></div></td>
              <td width="153"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
			



			
			
              <td width="154" bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois1" id="mois1">
                  <?php  
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; }?></option>
                </select>
              </strong></div></td>
              <td width="117" bgcolor="#EFEFEF" class="style39"><div align="center">من</div></td>
              <td rowspan="2"><div align="center" class="style39">الشهر</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois2" id="mois2">
                  <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; } ?></option>
                </select>
              </strong></div></td>
              <td bgcolor="#EFEFEF" class="style39"><div align="center">إلى</div></td>
			  
			  
		  
			  
			  
			  
			  
			  
			  
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
    </fieldset>
        </td>
      </tr>
    </table>

	</div>
	<p>
	</p>
	<p align="center">&nbsp;</p>
</form>
	  <?php } ?>

	







	    <?php if($type==18) { ?>  
</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;    </p>
	  <form action="etat/fiche_dep4.php" method="get" name="form9" target="_blank" id="form9">


	
	<div align="center">
	

		<fieldset style="width:75%">
          <legend class="style39" align="right">الزواج حسب السن </legend>
		  
		  
          
		  <table width="432" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="271" bgcolor="#EFEFEF"><div align="right"><strong>
                <select name="annee_declaration" id="annee_declaration">
                  
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
              </strong></div></td>
              <td width="153"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
    </fieldset>
        </td>
      </tr>
    </table>

	</div>
	<p>
	</p>
	<p align="center">&nbsp;</p>
</form>
	  <?php } ?>








	    <?php if($type==19) { ?>  
</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;    </p>
	  <form action="etat/fiche_dep5.php" method="get" name="form1" target="_blank" id="form1">


	
	<div align="center">
	

		<fieldset style="width:75%">
          <legend class="style39" align="right"> الوفيات حسب مكان الإقامة</legend>
		  
		  
          <table width="432" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong>
                <select name="annee_declaration" id="annee_declaration">
                  
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
              </strong></div></td>
              <td width="153"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
			



			
			
              <td width="154" bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois1" id="mois1">
                  <?php  
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; }?></option>
                </select>
              </strong></div></td>
              <td width="117" bgcolor="#EFEFEF" class="style39"><div align="center">من</div></td>
              <td rowspan="2"><div align="center" class="style39">الشهر</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois2" id="mois2">
                  <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; } ?></option>
                </select>
              </strong></div></td>
              <td bgcolor="#EFEFEF" class="style39"><div align="center">إلى</div></td>
			  
			  
		  
			  
			  
			  
			  
			  
			  
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="table" type="hidden" id="table" value="deces_prof">
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
		  
    </fieldset>
        </td>
      </tr>
    </table>

	</div>
	<p>
	</p>
	<p align="center">&nbsp;</p>
</form>
	  <?php } ?>






	    <?php if($type==20) { ?>  
</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;    </p>
	  <form action="etat/fiche_dep6.php" method="get" name="form1" target="_blank" id="form1">


	
	<div align="center">
	

		<fieldset style="width:75%">
          <legend class="style39" align="right"> الولادات حسب سن الاب</legend>
		  
		  
          <table width="432" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="right"><strong>
                <select name="annee_declaration" id="annee_declaration">
                  
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
              </strong></div></td>
              <td width="153"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            <tr>
			



			
			
              <td width="154" bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois1" id="mois1">
                  <?php  
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; }?></option>
                </select>
              </strong></div></td>
              <td width="117" bgcolor="#EFEFEF" class="style39"><div align="center">من</div></td>
              <td rowspan="2"><div align="center" class="style39">الشهر</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="mois2" id="mois2">
                  <?php   
			   	$Requete3 = "select mois, mois_a from mois  ";
				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[mois]; ?>"><?php echo $row[mois_a]; } ?></option>
                </select>
              </strong></div></td>
              <td bgcolor="#EFEFEF" class="style39"><div align="center">إلى</div></td>
			  
			  
		  
			  
			  
			  
			  
			  
			  
            </tr>
            <tr>
              <td colspan="3" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="table" type="hidden" id="table" value="deces_prof">
                <input name="type" type="hidden" id="type" value="<?php echo $type; ?>">
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
		  
    </fieldset>
        </td>
      </tr>
    </table>

	</div>
	<p>
	</p>
	<p align="center">&nbsp;</p>
</form>
	  <?php } ?>





		<?php if($type==21) { ?>  


<form action="etat/fiche_dep7.php" method="get" name="form1" target="_blank" id="form1">


	
	<div align="center">
	

		<fieldset style="width:75%">
          <legend class="style39" align="right">المسجلين حسب العمر</legend>
		  
		  
          <table width="580" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="170" bgcolor="#EFEFEF"><div align="right" class="style44">
                <select name="annee2" id="annee2">
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select> 
                من 
                <select name="annee1" id="annee1">
                  
                  <?php   
			   	$Requete3 = "select annee from annee WHERE `type`=0 order by annee desc  ";
					mysql_query("SET NAMES 'UTF8' ");

				
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
$n=mysql_num_rows($result3);

for($i=0;$i<$n;$i++)
{
	$row = mysql_fetch_array($result3);
//echo $idr;
?>
                  <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; }?></option>
                </select>
               إلى</div></td>
              <td width="251"><div align="center" class="style39">&#1575;&#1604;&#1587;&#1606;&#1577;</div></td>
            </tr>
            
            <tr>
              <td colspan="2" bgcolor="#EFEFEF"><div align="center">
                <label>
                <input name="valider" type="submit" id="valider" value="---بحث---">
                </label>
              </div></td>
            </tr>
          </table>
    </fieldset>
        </td>
      </tr>
    </table>
  </div>
</form>

	  <?php } ?>

	
</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

