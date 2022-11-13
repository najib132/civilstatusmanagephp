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

?>


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

<script type="text/javascript" src="js/listeLieesb.js"></script>

 <script type="text/javascript" src="js/arabic.js"></script>
 
<link type="text/css" rel="stylesheet" href="calendrier/green.css" media="screen">
<script type="text/javascript" src="calendrier/zapatec.js"></script>
<script type="text/javascript" src="calendrier/calendar.js"></script>
<script type="text/javascript" src="calendrier/calendar-fr.js"></script>


<?php  ///////////////////////////MISE A JOUR DONNES PERE

 $partie = addslashes($_GET["partie"]);
 $code = addslashes($_GET["code"]);
 $annee_declaration = addslashes($_GET["annee_declaration"]);
$N = addslashes($_GET["N"]);
$sex = addslashes($_GET["sex"]);

$deces_naissance = addslashes($_GET["deces_naissance"]);

$date_n = addslashes($_GET["date_n"]);



?>



<?php
$valider=$_POST["valider"];
if ($valider!="تعديل البيانات الهامشية") { ?>


<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:549px;
	top:300px;
	width:112px;
	height:62px;
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
<div align="right">
  <table width="20%">
    <tr>
      <td><div align="right">الرقم : <?php echo $code; ?></div></td>
      <td><div align="right">السنة : <?php echo $annee_declaration; ?></div></td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>





    <script type="text/javascript">

function Validerfrm()
{


var bayane1 = document.form1.bayane1.value;


var date = document.form1.date.value;

var long=form1.date.value.length;
var mois=date.substring(3,5);
var jour=date.substring(0,2);
var annee=date.substring(6,10);



if(date == "" || long!=10 || date.substring(2,3)!="/" || date.substring(5,6)!="/" || mois>12 || jour>31 || isNaN(jour) || isNaN(mois) || isNaN(annee) ) 
		{ 
        alert ('Vérifier le Champ date de mention'); 
		//alert(date.substring(5,7))
		//alert(date.substring(0,4))
        document.form1.date.focus(); 
        return false; 
    	} 
	


if(bayane1=="" || !isNaN(bayane1)) 
		{ 
		
        alert ('Vérifier le Champ mention marginale'); 
        document.form1.bayane1.focus(); 
        return false; 
    	} 
		

 }
		
		
///////////////////////////////////

    </script>
  
  


  <form action="" method="POST" name="form1" id="form1" onSubmit="return Validerfrm()">
  <div align="center">
    <p>
      <label></label></p>

		<fieldset style="width:75%">
          <legend class="style39" align="right">تعديل البيانات الهامشية</legend>
          <div id="Layer1">
            <div id="background" class="background" style="display: none;"></div>
            <div id="clv_arb" class="clv_arb" style="display: none;"></div>
        </div>
          <table width="75%" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td width="366" bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="region" id="region">
            <option value="<?php 
			
	  	$Requete3 = "select  * FROM mention_p where `id`='".$N."'    ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$rox = mysql_fetch_array($result3);
			
			echo $rox[jugement]; ?>"><?php 
			
			$Requete31 = "select bayane1 from mention where `id`='".$rox[jugement]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$roxx = mysql_fetch_array($result);

			echo $roxx[bayane1];
			
			
			 ?></option>
			 
			 
                  <option value="0">----إختر البيان الهامشي----</option>
                  <?php   
			   	$Requete3 = "select bayane1,id from mention   ";
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
              <td width="366"><div align="center">نوع البيان</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <input name="date" type="text" id="date" value="<?php include"conn/conversion.php"; echo convertDate_f($rox['date']); ?>" size="30" maxlength="10">
                <button id="trigger1"><img src="calendrier/bouton_calendar.gif" alt="" width="16" height="16" /></button>
                <script type="text/javascript">//<![CDATA[
		      	Zapatec.Calendar.setup({
		        firstDay          : 1,
		        showOthers        : true,
		        electric          : false,
		        inputField        : "date",
		        button            : "trigger1",
		        ifFormat          : "%d/%m/%Y",
		        daFormat          : "%d/%m/%Y",
		        numberMonths          : 2,
		        monthsInRow          : 2
		      	});
		    	//]]>
		    	</script>
</div></td>
              <td><div align="center">تاريخ البيان</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <textarea name="bayane1" cols="35" rows="5" id="bayane1" dir="rtl"><?php 
				echo $rox[bayane1];
		?>
                </textarea>
              
			  <img src="icone/arabe.png" width="22" height="20" style="cursor: pointer;" title="Cliquer pour utilisez le Clavier arabe" onClick="showArabicKey('bayane1')" />
			  
			  </div></td>
              <td><div align="center">نص البيان</div></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <textarea name="bayane" cols="35" rows="5" id="bayane"><?php 
				
				echo $rox[bayane];
		
		?>		
		
                  </textarea>
              </div></td>
              <td><div align="center">Texte mention marginale </div></td>
            </tr>
			
			
<?php 		

if($rox[jugement]==1 || $rox[jugement]==2)	 {


?>          


  <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                  <input name="intersse" type="text" id="intersse" dir="rtl" value="<?php echo $rox[intersse]; ?>" size="40" />
                </div>
                  <div align="center"></div></td>
              <td bgcolor="#EFEFEF"><div align="center"><strong><strong>المعنيين بالعقد</strong></strong></div></td>            
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                  <input name="numero" type="text" id="numero" size="40" dir="rtl" value="<?php echo $rox[numero]; ?>" />
              </div></td>
              <td bgcolor="#EFEFEF"><div align="center"><strong>رقم الصحيفة </strong></div></td>
			  
			  <?php } ?>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                  <input name="date_r" type="text" id="date_r" value="<?php echo ConvertDate_f($rox[date_reception]);	?>" maxlength="10" />
              </div></td>
              <td bgcolor="#EFEFEF"><div align="center"><strong>تاريخ التوصل</strong></div></td>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                  <input name="source" type="text" id="source" dir="rtl" value="<?php echo $rox[source]; ?>" size="40" />
                </div>
                  <div align="center"></div></td>
              <td bgcolor="#EFEFEF"><div align="center"><strong>&#1575;&#1604;&#1580;&#1607;&#1577; &#1575;&#1604;&#1605;&#1585;&#1587;&#1604;&#1577;</strong></div></td>
            <tr>
              <td bgcolor="#EFEFEF"><div align="center">
                <input name="remarque" type="text" id="remarque" dir="rtl" value="<?php echo $rox[remarque]; ?>" size="40" />
              </div></td>
              <td bgcolor="#EFEFEF"><div align="center"><strong>
                <?php if($rox[jugement]!=12 && $rox[jugement]!=24) echo "&#1605;&#1604;&#1575;&#1581;&#1592;&#1575;&#1578;"; ?>
                <?php if($rox[jugement]==12 || $rox[jugement]==24) echo "&#1606;&#1589; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606; &#1575;&#1604;&#1605;&#1608;&#1580;&#1586; &#1575;&#1604;&#1584;&#1610; &#1610;&#1592;&#1607;&#1585; &#1601;&#1610; &#1575;&#1604;&#1606;&#1587;&#1582;&#1577; &#1575;&#1604;&#1605;&#1608;&#1580;&#1586;&#1577; &#1604;&#1604;&#1608;&#1604;&#1575;&#1583;&#1577;";  ?>
              </strong></div></td>
            <tr>


			
	 <?php if($rox[jugement]==12 || $rox[jugement]==24) { ?>
	
	  <td bgcolor="#EFEFEF"><div align="center">
	    En fran&ccedil;ais
	    <input name="remarque_f" type="text" id="remarque_f" value="<?php echo $rox[remarque_f]; ?>" size="35" />
	  </div>	    <div align="center"></div></td>
	  <td bgcolor="#EFEFEF"><div align="center"></div></td>
	  
	  <?php } ?>
			  
			  
			  
			  
        </table>
          <p align="center">
            <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
            <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
            <input name="valider" type="submit" id="valider" value="تعديل البيانات الهامشية"/>
          </p>
        </fieldset>
    <p><br>
      <br>
    </p>
  </div>
</form>
<?php }else
	
{

$bayane=addslashes($_POST["bayane"]);
$bayane1=addslashes($_POST["bayane1"]);
$region=addslashes($_POST["region"]);
$date=addslashes($_POST["date"]);
$N=addslashes($_GET["N"]);


$NewNom_a=addslashes($_POST["NewNom_a"]);
$NewNom=addslashes($_POST["NewNom"]);

$Nom_a=addslashes($_POST["Nom_a"]);
$Nom=addslashes($_POST["Nom"]);

$intersse=addslashes($_POST["intersse"]);
$numero=addslashes($_POST["numero"]);
$date_r=addslashes($_POST["date_r"]);
$source=addslashes($_POST["source"]);
$remarque=addslashes($_POST["remarque"]);
$remarque_f=addslashes($_POST["remarque_f"]);


$bayane=trim($bayane);
$bayane1=trim($bayane1);


include"conn/conversion.php";
$date=convertDate($date);
$date_r=convertDate($date_r);




 $Requete =  "UPDATE mention_p SET    
									`date`='$date',
									`jugement`='$region',
									`bayane`='$bayane',
									`bayane1`='$bayane1',
									`idf_m`='$idf_m',
									`sex`='$sex',
									`intersse`='$intersse',
									`source`='$source',
									`remarque`='$remarque',
									`remarque_f`='$remarque_f',
									`date_reception`='$date_r',
									`numero`='$numero'
									  WHERE `id`='$N'  ;";
									
									 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete d'identification<br>".mysql_error()); 

	
//echo $Requete;

include"aces1.php";

echo "
<div align=center>
  
      <p><a href=bayane.php?annee_declaration=$annee_declaration&code=$code&deces_naissance=$deces_naissance&date_n=$date_n&sex=$sex&partie=$partie>رجوع</a></p>

</div>
<p>&nbsp;</p>";



if($deces_naissance==0) 
{
$table="naissance";
$cat="المولود";
}
 else if($deces_naissance==1) 
 {
 $table="deces";
 $cat="المتوفى";
 }



	$Requete31 = "select code from `origine_$table` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `partie`='".$partie."' ";
	$resultd = @mysql_query($Requete31,$id) or die ("<br>Pb lors de123 la lecture de la table<br>".mysql_error());

	$num = mysql_num_rows($resultd);


$Requete31 = "select variable from mention where `id`='".$region."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);
	
$variable=$rox[variable];

if($variable==1 && $num!=0)
{

echo"<style type=text/css>
<!--
.style1 {font-size: 24px}
-->
</style>
<div align=center><span class=style1>يجب تعديل معلومات المعني بالامر </span>
</div>
<p align=center>&nbsp;</p>
<div align=center><span class=style1>ملاحظة : التعديل لايغير صلب الرسم</span>
</div>
<p align=center>&nbsp;</p>

  <p align=center><a href=modifier_naissance.php?annee_declaration=$annee_declaration&code=$code&table=$table&cat=$cat&trans=$trans&partie=$partie>أنقر هنا للتعديل</a></p>
";

}


}
?>
</div>
</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

