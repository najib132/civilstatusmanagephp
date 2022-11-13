<?php 
error_reporting(E_ALL ^ E_NOTICE);  include"conn/connexion.php";
$Submit=$_POST["Submit"];
if ($Submit!="Valider") { ?>

<?php 


   
	include("conn/conversion.php");


	$Requete3 = "SELECT date from administration   ";
$result3o = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de lagg lecture de la table <br>".mysql_error());
$row3o = mysql_fetch_array($result3o);

$insert=$row3o['date'];	
$daba=date("Y-m-d H:i:s");
$durd=diff_minutea($daba,$insert);
//echo $durd;
if($durd > 20 || $durd<0 )
{
$daba=date("Y-m-d H:i:s");

$Requete =  "UPDATE administration SET  `date`='$daba';";
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
<title>  ?????? ????? ?????? ??????? ??????? ????? ?????? : Sud Programa </title>    


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
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:-86px;
	top:43px;
	width:89px;
	height:287px;
	z-index:1;
}
.style4 {
	font-size: 36px;
	color: #0000FF;
	font-style: italic;
}
.style7 {color: #0000FF; font-size: 36px;}
.style8 {font-size: 18px}
.style9 {color: #000000; font-size: 18px; }
.style10 {color: #FFFFFF}
.style11 {color: #000000}
.style12 {font-size: 24px}
.style13 {
	font-size: 36px;
	color: #FF0000;
}
.style14 {color: #FFFF99}
-->
</style>
</head>

<body bgcolor="#FFFFFF">
<div align="left"></div>
<form name="form1" method="post" action="">
  <div align="left">
    <p align="center" class="style9">&nbsp;</p>
    <p align="center">      <span class="style7">
      <label><span class="style8"><span class="style9">
      <?php
	
		$Requete3 = "SELECT date from administration   ";
$result3o = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de lagg lecture de la table <br>".mysql_error());
$rou = mysql_fetch_array($result3o);
$dd=$rou['date'];

		$tmp=explode(" ",$dd);
		
		$heuredebut=$tmp[1];
		$datedebut=$tmp[0];
		
		$hd = explode(":", $heuredebut);
		$dda = explode("-", $datedebut);
$yy=$dda[0];
$mm=$dda[1];
$dd=$dda[2];
$hh=$hd[0];
$mmm=$hd[1];
$ss=$hd[2];	

$yys=$mmm*12+$ss*7-154;
//echo $yys;
	
	 ?>
      <span class="style10">_____      </span></span></span></label>
    </span>
      <label><span class="style11 style12">Veuillez entrer le Code de s&eacute;curit&eacute; logiciel  correspondant</span></label>
      <span class="style11 style12">
      <label></label>
      &agrave;      
      <label> 
      <span class="style13"><?php
	  

	   echo $yys; 
	//  $yys=$_GET["yys"];
	   
	   ?></span><span class="style10">_</span></label>
      </span><span class="style4"><label></label>
        </span></p>
  </div>
  <p align="center"><span class="style4"><span class="style14">
    <input name="yys" type="hidden" id="yys" value="<?php echo $yys; ?>">
  </span>
      <input name="code" type="text" id="code">
  </span>
    <input name="Submit" type="submit" id="Submit" value="Valider">
</p>
</form>
</body>
</html>
<?php }else
	
{
$code=$_POST["code"];

	 $yys=$_POST["yys"];

 $equation=5*$yys*$yys-19*$yys+66;
if ($equation==$code)

{

 $fichier="../../prog"; //OUVRE LE FICHIER compteur.txt
// $fichier1="../PHP-MYSQL"; //OUVRE LE FICHIER compteur.txt
  

 if(file_exists($fichier)==FALSE)     $fp=mkdir("../../prog"); //OUVRE LE FICHIER compteur.txt
 //if (file_exists($fichier1)==FALSE)   $fp1=mkdir("../PHP-MYSQL"); //OUVRE LE FICHIER compteur.txt


echo "<div align=\"center\"><span class=\"style9\" size= 30><b>F&eacute;licitation</b></span><BR>";
echo "<div align=\"center\"><span class=\"style9\" size= 30><b>Code identifi&eacute;</b></span><BR>";
		echo "<a href=\"index.php\">Cliquer ici pour acc&eacute;der au Syst&egrave;me</a>"; 

}

else {
// Code erron&eacute;e
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";
echo "<div align=\"center\"><span class=\"style9\"><b></b></span><BR>";
echo "<div align=\"center\"><span class=\"style9\"><b>D&eacute;sol&eacute; code Incorrect</b></span><BR>";
		echo "<a href=\"index.php\">Cliquer ici pour vous essay&eacute; &agrave; nouveau</a>"; 

}

}

?>
</div>
</body>
</html>
