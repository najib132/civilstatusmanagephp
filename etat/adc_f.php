<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);    
  include"../conn/connexion.php";
$permission=$_SESSION["permission"];                                                                 $section=$_SESSION["section"];      
$section1=$_SESSION["section1"];  

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


	
$Requete = "select * from $table where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());

$row = mysql_fetch_array($result);	



$off=$_SESSION["off"];
$off1=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
-$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
-->
</style>
</head>

<body>

<div align="right"><table  width="97%" align="center">
      <tr>
        <td width="29%" align="center"><div align="left">ROYAUME DU MAROC</div></td>
        <td width="40%"><div align="center"></div></td>
      </tr><tr>
        <td width="29%" align="center"><div align="left">MINISTERE DE L'INTERIEUR</div></td>
        <td width="40%"><div align="center"></div></td>
        </tr><tr>
        <td width="29%" align="center"><div align="left">Province ou préfecture de
          <span class="gras"><?php echo $province; ?></span></div></td>
        <td width="40%"><div align="center"></div></td>
        </tr><tr>
        <td width="29%" align="center"><div align="left"><?php echo $r['region']; ?> 
          : <span class="gras"> 
          <?php 
		echo $r['section'];
		?>
          </span></div></td>
        <td width="40%"><div align="left"></div></td>
        </tr><tr>
        <td width="29%" align="center"><div align="left"><span class="gras"><?php echo $bureau; ?></span></div></td>
        <td width="40%"><div align="right"><span class="style4"><?php echo $_SESSION["idf"]; ?></span></div></td>
        </tr></table>
  <table width="100%" bordercolor="#000000">
    <tr>
        <td width="48%"><p style="font-size:25px" class="gras"><span class="gras" style="font-size:25px"> ATTESTATION DE CONCORDANCE </span></p>          <p class="gras">&nbsp;</p></td>
    </tr>
  </table>
  <table  width="100%" bordercolor="#000000">
      <tr>
        <td dir="rtl"><div align="left">
          Les autorités Administratives et L'officier d'état civil de <?php echo $r['region']."  "; ?>
        <span class="gras">  <?php 
		echo $r['section']." ";
		?>
        </span></div></td>
        <td>&nbsp;</td>
    </tr>
      <tr>
        <td><div align="left">
          <span>Certifie que
          <?php if ($row["sex"] == 'M') echo "Mr : "; else echo "Mme : ";
?>
  <span class="gras">&nbsp;&nbsp;&nbsp;<?php echo $_GET["nom"]; ?>&nbsp;&nbsp;&nbsp;<?php echo $_GET["prenom"]; ?></span> </span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="left">
          <span>De Nationalité 
          <span class="gras">Marocaine</span></span>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="left">
          <span>  <?php if ($row["sex"] == 'M') echo "Né "; else echo "Née ";
?>
          le :
          <span class="gras"><?php echo $_GET["date"]; ?></span></span>
</div></td><td></td>
      </tr>
      <tr>
        <td><div align="left">
          <span>A<span class="gras"> <?php echo $_GET["lieu"]; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="left">
          <span>Commune / Municipalité de : <span class="gras"><?php echo $_GET["com"]; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="left">
          <span>Province de : <span class="gras"><?php echo $_GET["province"]; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="left"><span>
          <?php if ($row["sex"] == 'M')    echo "Filse "; else echo "Fille ";
?>
         de </span><span class="gras"><?php echo $_GET["pere"]; ?></span></div></td><td></td>
      </tr>
      <tr>
        <td><div align="left">
          <span>
          
          Et de          :&nbsp;&nbsp;<span class="gras"><?php echo $_GET["mere"]; ?></span></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="left">
          <span>A été 
          <?php if ($row['sex'] == 'M') echo     "inscrit "; else echo "inscrite ";
?>
   conformément aux textes en vigueur régissant l'état civil au Maroc, au <?php echo $bureau ?>  </span>
        <?php echo $r['region']; ?>  <span class="gras">
        <?php 
		echo $r['section']." ";
		?>
        </span></div></td><td></td>
      </tr>
      <tr>
        <td><div align="left">
          <?php if ($row['sex'] == 'M') echo     "Il "; else echo "Elle  ";
?>
        figure désormais sur les registre d'état civil, acte de naissance N° <span class="gras"><?php echo $row['code']; ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;année <span class="gras"><?php echo $row['annee_declaration']; ?></span></div></td><td></td>
      </tr>
      <tr>
        <td><div align="left">Sous l'identification suivant : </div></td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td><div align="left">Prénom : &nbsp;&nbsp;&nbsp;&nbsp;<span class="gras"><?php echo $row['prenom']; ?></span></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="left">Nom : &nbsp;&nbsp;&nbsp;&nbsp;<span class="gras"><?php echo $row['nom']; ?></span></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="left">
          <?php if ($row['sex'] == 'M') echo "Né "; else echo "Née ";
?> 
        le <span class="gras"> <?php echo $row['date_mlf']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp; à <span class="gras"><?php echo $row['lieu']; ?></span></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="left"><span>
          <?php if ($row['sex'] == 'M')     echo "Fils "; else echo "Fille ";
?>&nbsp;          de  </span><span class="gras"> <?php echo $row['nom_f_p']; ?></span></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="left"><span>
        Et de </span><span class="gras"> <?php echo $row['nom_f_m']; ?></span></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="left"><?php echo $r['region']."  "; ?><span class="gras">
            <?php 
		echo $r['section']." ";
		?></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="left">
          Province ou préfecture de
        <span class="gras">
        <?php echo $province; ?></span>
        </div></td><td></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="left">La présente attestation est délivrée pour servir et valoir ce que de droit.</div></td>
        <td>&nbsp;</td>
      </tr>
  </table>
       <table width="100%">
      <tr>
        <td width="50%" colspan="2"><div align="center"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td width="50%" colspan="2"><div align="right"></div></td>
      </tr>
      <tr>
        <td width="50%" colspan="2"><div align="left">Fait à :<span class="gras"><?php echo $_SESSION["redaction"]; ?></span></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td width="50%" colspan="2"><div align="left">Le :<span class="gras"><?php echo date("d/m/Y"); ?></span></div></td>
      </tr>
      
      <tr>
        <td width="50%" colspan="2"><div align="center"></div></td>
		
<?php

//////////////////////////////:INSERTION///////////////


///////////////

?>
		
        <td width="50%" colspan="2"><div align="right"></div></td>
      </tr>
      <tr>
        <td width="50%" colspan="2"><div align="center">
          <p>Cachet et visa de l'autorité Administrative </p>
        </div></td>
		
		
        <td width="50%" colspan="2"><div align="center">Cachet et visa de l'Officier de l'état civil compétent </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div align="center">Cachet et Visa de L'autorité Consulaire </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="50%" colspan="2"><div align="left">
          <p>&nbsp;</p>
        </div></td>
		
		
        <td width="50%" colspan="2"><div align="right"></div></td>
      </tr>
    </table>
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
