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
if ($permission==securite2($tim2)) { include("div2.php");  

$sex=$_GET["sex"];


	$Requete3 = "select supprimer from utilisateurs where `id`='".$idf_m."'   ";
	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());

	$rowv = mysql_fetch_array($result3);

$droit=$rowv[supprimer];

if($droit==0) $supprimer="supprimer.php"; else $supprimer="#";


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

 $code = addslashes($_GET["code"]);
 $partie = addslashes($_GET["partie"]);
 $annee_declaration = addslashes($_GET["annee_declaration"]);
$type = addslashes($_GET["type"]);
$date_n = addslashes($_GET["date_n"]);
$deces_naissance = addslashes($_GET["deces_naissance"]);



?>



<?php
$valider=$_POST["valider"];
if ($valider!="إضافة البيانات الهامشية") { ?>

<style type="text/CSS">
#scan {
border-width:2px 0;
width:660px;
color:#000000;
background-color:#FFFFFF;
}


#formulaire {
border-width:2px 0;
width:400px;
color:#000000;
background-color:#FFFFFF;
}


#scan  {
float:left;
}

#formulaire  {
float:right;
}


#contenu1 {
margin-left:155px;
}
#menu2 {
float:right;
}
#contenu2 {
margin-right:155px;
}

#formulaire {
  position: absolute;
  top: 223px;
  left: 705px;
}


</style>



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
.style40 {font-size: 14px}
.style41 {font-size: 18; }
#Layer3 {
	position:absolute;
	left:695px;
	top:155px;
	width:542px;
	height:286px;
	z-index:1;
}
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


   <div id="scan">
<a href="<?php 	

if($deces_naissance==0) $table="naissance"; else $table="deces";

$acte="doc_$table/$annee_declaration/$partie/$code.jpg";
$acte0="doc_$table/$annee_declaration/$partie/0$code.jpg";



if((file_exists($acte0)==TRUE)) $lien=$acte0; else $lien=$acte;

echo $lien  ?>" target="_blank"><img src="<?php echo $lien ?>" width="692" height="780" /></a>
</div> 



<div id="Layer3">
  <div align="center">
  
  
  
    <form action="" method="POST" name="form1" id="form1" onSubmit="return Validerfrm()">
  <div align="center">
    <p>
      <label></label></p>

    <a href="bayane_fenetre.php?annee_declaration=<?php echo $annee_declaration ?>&code=<?php echo $code ?>&sex=<?php echo $sex ?>&deces_naissance=<?php echo $deces_naissance ?>&date_n=<?php echo $date_n ?>&table=<?php echo $table ?>" style="text-decoration:none"></a>
    <fieldset style="width:450px">
          <legend class="style39" align="right">إضافة البيانات الهامشية</legend>
          <table width="450">
            <tr>
              <td width="732" height="24" bgcolor="#EFEFEF"><div align="center"><strong>
                <select name="region" id="region" onChange="getDpt()">
                  <option value="0">----إختر البيان الهامشي----</option>
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
              </strong>
			  
			  
                    <script type="text/javascript">
                <!--
                        function open_infoss()
                        {
                                width = 520;
                                height = 580;
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
                                 window.open('date_bayane.php?ch1=date_hla&ch2=date_m','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
                    <a href="#null" onClick="javascript:open_infoss();"><img src="icone/convertisseur.PNG" width="20" height="20"></a>			  
			  

				                      <script type="text/javascript">
                <!--
                        function open_documentp()
                        {
                                width = 520;
                                height = 580;
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
    window.open('prepare.php','nom_de_ma_popup','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }
                -->
                    </script>
                    <a href="#null" onClick="javascript:open_documentp();" style="text-decoration:none"></a>
			  

			  </div>                
                <div align="center"></div></td>
            </tr>
        </table>
          <p align="center"><span class="style40">
            <?php
	echo "
		<div id=champsDpt>

		</div>";
		?>
          </span><span class="style39"><a href="modifier_bayane.php?annee_declaration=<?php echo $annee_declaration; ?>&code=<?php echo $code; ?>"></a></span></p>
          <p align="center">
            <input name="annee_declaration" type="hidden" id="annee_declaration" value="<?php echo $annee_declaration;?>">
            <input name="code" type="hidden" id="code" value="<?php echo $code;?>">
            <input name="valider" type="submit" id="valider" value="إضافة البيانات الهامشية"/>
            <br>
    </p>
    </fieldset>
    </div>
</form>

  
  
  </div>
</div>
<div align="right"></div>
  


    <script type="text/javascript">

function Validerfrm()
{


var bayane1 = document.form1.bayane1.value;


var date_m = document.form1.date_m.value;

var long=form1.date_m.value.length;
var mois=date_m.substring(3,5);
var jour=date_m.substring(0,2);
var annee=date_m.substring(6,10);



if(date_m == "" || date_m == "00/00/0000" || long!=10 || date_m.substring(2,3)!="/" || date_m.substring(5,6)!="/" || mois>12 || jour>31 || isNaN(jour) || isNaN(mois) || isNaN(annee) ) 
		{ 
        alert ('Vérifier le Champ date de mention'); 
		//alert(date_m.substring(5,7))
		//alert(date_m.substring(0,4))
        document.form1.date_m.focus(); 
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
  
  
  
  
  
  <div align="center">
    <table width="408">
      <tr>
        <td width="21%"><div align="center"></div></td>
        <td width="50%"><div align="right">الرقم : <?php echo $code; ?></div></td>
        <td width="29%"><div align="right">السنة : <?php echo $annee_declaration;
		
		$_SESSION['num'] = $code;
		$_SESSION['annee'] = $annee_declaration;

		 ?></div></td>
      </tr>
    </table>
    <table width="60%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="116" bgcolor="#EFEFEF"><div align="center">تعديل من طرف</div></td>
        <td width="121" bgcolor="#EFEFEF"><div align="center">إضافة من طرف</div></td>
        <td width="222" bgcolor="#EFEFEF"><div align="center">نص البيان بالفرنسية</div></td>
        <td width="267" bgcolor="#EFEFEF"><div align="center">نص البيان</div></td>
        <td width="74" bgcolor="#EFEFEF"><div align="center">نوع البيان</div></td>
        <td width="94" bgcolor="#EFEFEF"><div align="center">تاريخ البيان</div></td>
        <td width="35" bgcolor="#EFEFEF"><div align="center">حذف</div></td>
        <td width="41" bgcolor="#EFEFEF"><div align="center">تعديل</div></td>
      </tr>
	<?php   include"conn/conversion.php"; $now=date("Y-m-d");
	  
 $Requete3 = "select  * FROM mention_p where `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `partie`='".$partie."' and `deces_naissance`='".$deces_naissance."' order by date desc    ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);

		while($row3!="")
	
{ 

$Requete31 = "select bayane1 from mention where `id`='".$row3[jugement]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$rox = mysql_fetch_array($result);
	
	
	
	$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf_m]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$ro = mysql_fetch_array($result);
	
$Requete31 = "select nom, prenom from utilisateurs where `id`='".$row3[idf]."'  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors deooooo la lecture de la table<br>".mysql_error());

	$roxx = mysql_fetch_array($result);




	echo"
        <tr>
		  <td><div align=\"center\" class=\"Style9\">".$ro[prenom]." ".$ro[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$roxx[prenom]." ".$roxx[nom]."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[bayane]."</div></td>
		
		  <td><div align=\"center\" class=\"Style9\">".$row3[bayane1]."</div></td>
		  		  <td><div align=\"center\" class=\"Style9\">".$rox[bayane1]."</div></td>

		  		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3['date'])."</div></td>
					  <td><div align=\"center\"><a href=\"$supprimer?N=$row3[id]&table=mention_p\"><img src=\"icone/b_drop.PNG\" border=0></div></td>

<td><div align=\"center\"><a href=\"modifier_bayane.php?N=$row3[id]&annee_declaration=$row3[annee_declaration]&code=$row3[code]&deces_naissance=$deces_naissance&date_n=$date_n&sex=$row3[sex]&partie=$row3[partie]\"><img src=\"icone/b_edit.PNG\" border=0></div></td>
        </tr>";
			$row3 = mysql_fetch_array($result3);

			}
	
?>
    </table>
  <?php }else
	
{

$bayane=addslashes($_POST["bayane"]);
$bayane1=addslashes($_POST["bayane1"]);
$region=addslashes($_POST["region"]);
$date_m=addslashes($_POST["date_m"]);


$intersse=addslashes($_POST["intersse"]);
$numero=addslashes($_POST["numero"]);
$date_r=addslashes($_POST["date_r"]);
$source=addslashes($_POST["source"]);
$remarque=addslashes($_POST["remarque"]);
$remarque_f=addslashes($_POST["remarque_f"]);


$bayane=trim($bayane);
$bayane1=trim($bayane1);


if($region==0) {

////////////////////////////////////////////////////////////
echo "<div align=\"center\"><span ><b></b></span><BR>";

		echo "<div align=\"center\"><center><font color=\"#FF0000\"><span class=\"style9\"><b>إنتبه</b></span><BR>";
		echo "<div align=\"center\"><center><font color=\"#FF0000\"><span class=\"style9\"><b>قم باختيار أحد البينات الهامشية</b></span><BR>";


}

else {

include"conn/conversion.php";

$date_m=convertDate($date_m);
$date_r=convertDate($date_r);


$Req =  "SELECT jugement  FROM `mention_p` WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `partie`='".$partie."' and `date`='".$date_m."' and `jugement`='".$region."'   ";
$res = @mysql_query($Req,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 

$nn=mysql_num_rows($res);

if($nn!=0) 
{
include"aces2.php";
}
else {

////////////////////TROUVER ANCIEN NOM 


 $Requete =  "INSERT INTO `mention_p`(`annee_declaration`,
                                    `code`,
									`jugement`,
									`date`,
									`bayane`,
									`bayane1`,
									`deces_naissance`,
									`idf`,
									`sex`, 
									`intersse`,
									`numero`,
									`date_reception`,
									`source`,
									`remarque`,
									`remarque_f`,
									`partie`
									
									) 
									
 VALUES ('$annee_declaration','$code','$region','$date_m','$bayane','$bayane1','$deces_naissance','$idf_m','$sex','$intersse','$numero','$date_r','$source','$remarque','$remarque_f','$partie');"; 
 mysql_query("SET NAMES 'UTF8' ");

$result = @mysql_query($Requete,$id) or die ("<br>Problme d'execution de la requete <br>".mysql_error()); 


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

include"aces1.php";
echo "
<div align=center>
  
      <p><a href=bayane.php?annee_declaration=$annee_declaration&code=$code&deces_naissance=$deces_naissance&date_n=$date_n&sex=$sex&partie=$partie>رجوع</a></p>

</div>
<p>&nbsp;</p>";


if($variable==1 && $num==0)
{


$Requete31 = "INSERT INTO origine_$table (SELECT * FROM $table WHERE `annee_declaration`='".$annee_declaration."' and `code`='".$code."' and `partie`='".$partie."')  ";
	$result = @mysql_query($Requete31,$id) or die ("<br>Pb lors de la lecture de la table<br>".mysql_error());

}

if($variable==1)
{

echo"<style type=text/css>
<!--
.style1 {font-size: 24px}
-->
</style>
<div align=center><span class=style1><font color=\"#FF0000\"> يجب تحديث المعلومات لأن البيان يغير مضمون النسخة الموجزة </span>
</div>
<p align=center>&nbsp;</p>
<div align=center><span class=style1><font color=\"#FF0000\">ملاحظة : التعديل لايغير صلب الرسم</span>
</div>
<p align=center>&nbsp;</p>

  <p align=center><a href=modifier_$table.php?annee_declaration=$annee_declaration&code=$code&table=$table&cat=$cat&trans=$trans&origineb=2&partie=$partie>أنقر هنا للتعديل</a></p>
";

}

	
//echo $Requete;


}
}

}
?>
</div>
  </div>
</body>
</html>
<?php   }else{ ?> 
vous n'avez pas le droit de voir cette page
<?php } ?>

