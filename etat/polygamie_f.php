<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];
 include"../accesclient1.php";    
 if ($permission==securite2($tim2))
        { 
           $entreprise=$_SESSION["entreprise"];

$table=$_GET["table"];
$code=$_GET["code"];
$partie=$_GET["partie"];$anneeNais=$_GET["annee_declaration"];


$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);	

	

$off=$_SESSION["off"];
$off1=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];

$section=$_SESSION["section"];
$section1=$_SESSION["section1"];


$code=$_GET["code"];
$partie=$_GET["partie"];$anneeNais=$_GET["annee_declaration"];

if($table=="naissance") {
$Requete = "select * from ".$table." where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	
}


if($table=="deces") {
$Requete = "select * from deces where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	
}



?>

<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/><link rel="shortcut icon" href="/7.jpeg" type="image/jpg"/>


<style type="text/css">
<!--
.gras {
	font-weight: bold;
}
.gras {
	font-weight: bold;
	text-align: center;
}
.style4 {font-size: 10px}
.style5 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<div align="right">
<table  width="97%" align="center">
      <tr>
        <td width="71%" align="center"><div align="left">ROYAUME DU MAROC</div></td>
        <td width="29%"><div align="center"></div></td>
      </tr><tr>
        <td width="71%" align="center"><div align="left">MINISTERE DE L'INTERIEUR</div></td>
        <td width="29%"><div align="center"></div></td>
        </tr><tr>
        <td width="71%" align="center"><div align="left">Province ou préfecture de
          <span class="gras"><?php echo $province; ?></span></div></td>
        <td width="29%"><div align="center"></div></td>
        </tr><tr>
        <td width="71%" align="center"><div align="left"><?php echo $r['region']; ?> 
          : <span class="gras"> 
          <?php 
		echo $r['section'];
		?>
          </span></div></td>
        <td width="29%"><div align="left"></div></td>
        </tr><tr>
        <td width="71%" align="center"><div align="left"><span class="gras"><?php echo $bureau; ?></span></div></td>
        <td width="29%"><div align="left"></div></td>
  </tr></table>
    <span class="style4"><?php echo $_SESSION["idf"]; ?></span>
    <table width="100%" bordercolor="#000000">
      <tr>
        <td width="48%"><p class="gras" style="font-size:25px">&nbsp;</p>
          <p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px">ATTESTATION DE POLYGAMIE</span></p>
          <p style="font-size:25px" class="gras">&nbsp;</p></td>
      </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td><div align="left">L'officier détat civil de la <?php echo $r['region']  ?>
           <span class="gras"> <?php 
		echo $r['section']." ";
		?></span>
        </div></td>
        <td>&nbsp;</td>
    </tr>
      <tr>
        <td><div align="left"><span>Certifie selon l'enquête effectuée en l'objet, que le nommé    : </span>
          <span class="gras">
            <?php  echo $row['prenom']." ".$row['nom'] ; ?>
        </span></div></td><td></td>
      </tr>
      <tr>
        <td><div align="left">
          <span>Né le <span class="gras"><?php echo $row['date_hlf']; ?></span></span>
</div></td><td></td>
      </tr>
      <tr>
        <td><div align="left">
          <span>Correspondant à <span class="gras"> <?php echo $row['date_mlf']; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="left">
          <span>A<span class="gras"> <?php echo $row['lieu']; ?></span></span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td><td></td>
      </tr>
      <tr>
        <td><div align="right">
          <div align="left"><span>Fils de  <span class="gras"> <?php echo $row['nom_f_p']; ?></span></span> </div>
        </div></td>
        <td></td>
      </tr>
      <tr>
        <td><div align="left"><span>Et de <span class="gras"><?php echo $row['nom_f_m']; ?></span></span></div></td><td></td>
      </tr>
      <tr>
        <td><div align="left"><?php if($row['date_mlf_d'] != "") echo "Décédé le "; ?> <span class="gras"><?php echo $row['date_mlf_d']; ?></span></div></td><td></td>
      </tr></table>
       <table width="100%">
      <tr>
        <td width="53%" ><div align="left"><span> 
          <?php  if($table=="naissance") echo "Acte de naissance N° : "; else  echo "Acte de décés N°  ";?> <span class="gras"> <?php echo $row['code']; ?> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo "Année : "; ?> <span class="gras"> <?php echo $row['annee_declaration']; ?></span></div></td>
		
        <td width="45%"><div align="right">
          <p>&nbsp;</p>
        </div></td><td width="2%"></td>
      </tr>
      <tr>
        <td ><div align="left">
            <p> Inscrit au<span class="gras"> <?php echo  $bureau ?> <?php echo $r['region']; ?>
                <?php 
		echo $r['section']." ";
		?>

            </span></p>
        </div></td>
        <td ><div align="left">
            <p><span></span>Province ou préfecture de <span class="gras"><?php echo $province; ?></span></p>
        </div></td>
        <td></td>
      </tr>
      <tr>
        <td ><div align="left">
         Est <span class="style5">polygame</span> ses épouses sont :
        </div></td>
		
		
        <td ><div align="right"></div></td><td></td>
      </tr>
    </table>

       <table width="100%" border="1" cellpadding="0" cellspacing="0">
         <tr>
           <td bgcolor="#EFEFEF"><div align="center">Nom et prénom</div></td>
           <td bgcolor="#EFEFEF"><div align="center">Date de naissance</div></td>
           <td bgcolor="#EFEFEF"><div align="center">Lieu de naissance</div></td>
         </tr>
		 
		 
		 <?php 
		 
		 include"../conn/conversion.php";
		  	   $options=$_GET["options"];

		 		 
	$k=0;
	while($options[$k]!="")
	{

$Requete3 = "select prenom,nom,date_n,lieu FROM tmp where `id`='$options[$k]'   ";
		mysql_query("SET NAMES 'UTF8' ");

	$result3 = @mysql_query($Requete3,$id) or die ("<br>Probl&egrave;me lors de la lecture de la table<br>".mysql_error());
	$row3 = mysql_fetch_array($result3);


	echo"
        <tr>
		
				  <td><div align=\"center\" class=\"Style9\">".$row3[nom]." ".$row3[prenom]."</div></td>

		  <td><div align=\"center\" class=\"Style9\">".convertDate_f($row3[date_n])."</div></td>
		  <td><div align=\"center\" class=\"Style9\">".$row3[lieu]."</div></td>

        </tr>";
		$k++;
		
		}
			
?>
		 
  </table>
       <table width="100%">
      <tr>
        <td><div align="right"></div></td>
      </tr><tr>
        <td><hr /></td>
      </tr>
    </table>
       <table width="100%">
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td colspan="2">La présente attestation est délivrée à l'intéressé(e) pour servir et valoir ce que de droit.</td>
           
         </tr>
         <tr>
           <td width="44%"><div align="left">Fait à :<span class="gras"><?php echo $_SESSION["redaction"]; ?></span></div></td>

           <td width="56%"><div align="left">Le : <span class="gras"><?php echo date("d/m/Y"); ?></span></div></td>
         </tr>
         <tr>
           <td width="44%"><div align="center">
               <p>Officier de l'état civil</p>
           </div></td>
           <td width="56%"><div align="right"></div></td>
         </tr>
       </table>
  <div align="left" class="style4"></div>
  <p>&nbsp;</p>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
