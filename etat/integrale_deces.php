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

$code=$_GET["code"];
$partie=$_GET["partie"];$anneeNais=$_GET["annee_declaration"];



$Req = "select * from administration";
mysql_query("SET NAMES 'utf8'");
$res = @mysql_query($Req) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$r = mysql_fetch_array($res);	

	
$Req2 =  "SELECT count(code) as kayn  FROM `origine_deces` WHERE `annee_declaration`='".$anneeNais."' and `code`='".$code."' and `partie`='".$partie."'  ";
$res2 = @mysql_query($Req2,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res2); 
$kayn_n=$detail['kayn'];

if($kayn_n==0) {
	
$Requete = "select * from deces where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	
}

else {


$Requete = "select * from origine_deces where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	


$Requetee = "select nom,prenom,nom_a,prenom_a from deces where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$resulte = @mysql_query($Requetee) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$rowe = mysql_fetch_array($resulte);	



}

$off=$_SESSION["off"];
$off1=$_SESSION["off1"];
$province=$_SESSION["province"];
$province_a=$_SESSION["province1"];
$municipalite=$_SESSION["province"];
$municipalite_a=$_SESSION["province1"];
$bureau=$_SESSION["annexe"];
$bureau_a=$_SESSION["annexe1"];


?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">          <title>  برنامج تسيير مصلحة الحالة المدنية سيفيل بروكرما </title>      

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
.style1 {font-size: 9px}
-->
</style>
</head>

<body>





<div align="right">
  
<table  width="97%" align="center">
      <tr>
      <td width="33%"><div align="center" class="gras">ROYAUME DU MAROC</div></td>
      <td width="67%"><div align="center">En l'application de la loi n° 37.99 relative à l'état civil pomulguée par le</div></td>
      </tr>
      <tr>
      <td width="33%"><div align="center" class="gras">MINISTERE DE L'INTERIEUR</div></td>
      <td width="67%"><div align="center">dahir n° 1.02.239 du 25 Rajeb 1423 (3 Octobre 2002) </div></td>
      </tr>
      <tr>
      <td width="33%"><div align="center">Province ou préfecture de <span class="gras"><?php echo $province; ?></span></div></td>
      <td width="67%" rowspan="4"><div align="center"  style="font-size:25px" >
        <p>Copie intégrale de l'acte de décès</p>
      </div></td>
      </tr>
    <tr>
      <td width="33%" align="center"><?php echo $r['region']  ?>   <span class="gras"><?php 
		echo $r['section'];
		?> </span> </td>
    </tr>
    <tr>
      <td width="33%"><div align="center">
	  <span class="gras"><?php echo $bureau; ?></span></div></td>
    </tr>
    <tr>
      <td width="33%"><div align="center" class="gras">&nbsp;</div></td>
    </tr>
    <tr>
      <td width="33%" align="left"><div align="left">Acte  N° <span class="gras">  <span class="gras"><?php echo $row['code']; ?></span></div></td>
      <td width="67%"><div></div></td>
    </tr>
   <tr>
      <td width="33%"><div>
        <div align="left">Année Hégirienne <span class="gras"><?php echo $row['annee_h']; ?></span></div>
      </div></td>
      <td width="67%"><div></div></td>
   </tr>
   <tr>
      <td width="33%"><div align="left">Année Grégorienne <span class="gras"><?php echo $row['annee_declaration']; ?></span></div></td>
      <td width="67%"><div align="left">Le &nbsp;&nbsp;<span class="gras"><?php echo $row['date_hlf_d']; ?></span> Hijri </div></td>
   </tr>
   
   <tr>
      <td width="33%" rowspan="2" align="left"><span class="gras"><?php
	  
	   if($kayn_n==0) echo $row['prenom']; else echo $rowe[prenom];
	   
	   
	   ?></span></td>
      <td width="67%"><div align="left">Correspondant au  &nbsp;<span class="gras"><?php echo $row['date_mlf_d']; ?></span> <span class="gras">Grégo</span></div></td>
   </tr>     
   <tr>
      <td width="67%"><div align="left">Heure <span class="gras"><?php echo $row['heure_f']; ?></span> et minute <span class="gras"><?php echo $row['minute_f']; ?></span></div></td>
   </tr>
   <tr>
      <td width="33%" align="left"><span class="gras"><?php 

	   if($kayn_n==0) echo $row['nom']; else echo $rowe[nom];
	  
	  
	   ?></span></td>
    <td width="67%"><div align="left">
      <?php if ($row['sex'] == 'M') echo "Décédé "; else echo "Décédée ";
?>
      &nbsp;&nbsp;à<span class="gras"> <?php echo $row['ville_deces']; ?></span></div></td>
   </tr>
   <tr>
      <td width="33%" rowspan="25" align="left"><div style="margin:20px; font-size:12px"> <?php
$Requete3 = "select mention_p.bayane as mb, mention_p.bayane1 as mb1, mention.bayane1 as mb2, date from mention_p, mention where mention.id = mention_p.jugement and deces_naissance = 1 and  `partie`='".$partie."' and code = ".$code ." and annee_declaration =".$anneeNais;
$result3 = @mysql_query($Requete3) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row3 = mysql_fetch_array($result3);	
  while($row3!="" && $row3['mb']!=""){
  
    echo"- "; 

  echo $row3['mb']."<br />";
  $row3 = mysql_fetch_array($result3);
  
  
  }?></div></td>
      <td width="67%"><div align="left">Nom&nbsp;&nbsp; <span class="gras"><?php echo $row['nom']; ?></span></div></td>
   </tr>
   <tr><td><div align="left">Prénom&nbsp;&nbsp; <span class="gras"><?php echo $row['prenom']; ?></span></div></td></tr>
   <tr>
   		<td width="67%"><div align="left">Sexe&nbsp;&nbsp; <span class="gras"><?php if ($row['sex'] == 'M') echo "Masculin"; else echo "Féminin"; ?></span> &nbsp;&nbsp; Nationalité
        <span class="gras"><?php echo $row['nationalite_personne']; ?></span></div></td>
   </tr>
   <tr><td><div align="left">
     <?php if ($row['sex'] == 'M') echo "Né à "; else echo "Née à ";
?>
     &nbsp;<span class="gras"><?php echo $row['lieu']; ?></span></div></td></tr>
    <tr><td><div align="left">Le <span class="gras"><?php echo $row['date_hlf']; ?> Hijri</span></div></td></tr>
    <tr><td><div align="left">Correspondant au <span class="gras"><?php echo $row['date_mlf']; ?> Grégo</span></div></td></tr>
    <tr><td><div align="left">Profession <span class="gras"><?php echo $row['prof_personne']; ?></span>
      Adresse <span class="gras"><?php echo $row['adresse_personne']; ?></span></div></td></tr>
   <tr>
   		<td width="67%"><div align="left">
	      <?php if ($row['sex'] == 'M') echo "Fils"; else echo "Fille";
?>
	      &nbsp;&nbsp;de <span class="gras"><?php echo $row['nom_f_p']; ?>  </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nationalité <span class="gras"><?php echo $row['nationalite_p']; ?></span></div></td>
   </tr>
   
   <tr>
   		<td width="67%"><div align="left">Le <span class="gras">&nbsp;&nbsp;<?php echo $row['date_hlf_p']; ?></span> Hijri</div></td>
   </tr>
   <tr>
   		<td width="67%"><div align="left">Correspondant au&nbsp;&nbsp; <span class="gras"><?php echo $row['date_plf_p']; ?></span> <span class="gras">Grégo</span></div></td>
   </tr>
   <tr>
   		<td width="67%"><div align="left">Profession&nbsp;&nbsp; <span class="gras"><?php echo $row['prof_p']; ?></span></div></td>
   </tr>
   <tr>
     <td><div align="left">Domicilié&nbsp;&nbsp; à <span class="gras"><?php echo $row['adresse_p']; ?></span></div></td>
   </tr>
   <tr>
   		<td width="67%"><div align="left">Et de<span class="gras">&nbsp;&nbsp;<?php echo $row['nom_f_m']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Nationalité  <span class="gras"><?php echo $row['nationalite_m']; ?></span></div></td>
   </tr>
   
   <tr>
   		<td width="67%"><div align="left">Le <span class="gras">&nbsp;&nbsp;<?php echo $row['date_hlf_m']; ?></span> Hijri</div></td>
   </tr>
   <tr>
   		<td width="67%"><div align="left">Correspondant au &nbsp;&nbsp;<span class="gras"><?php echo $row['date_mlf_m']; ?></span> <span class="gras">Grégo</span></div></td>
   </tr>
   <tr>
   		<td width="67%"><div align="left">Profession&nbsp;&nbsp; <span class="gras"><?php echo $row['prof_m']; ?></span></div></td>
   </tr>
   <tr>
   		<td width="67%"><div align="left">Domiciliée à &nbsp;&nbsp; <span class="gras"><?php echo $row['adresse_m']; ?></span></div></td>
   </tr>
   <tr>
   		<td width="67%"><div align="left">
   		  <?php if ($row['sex'] == 'M') echo "Le décédé"; else echo "La décédée";
?>
          été<span class="gras"> <?php echo $row['etat']; ?></span></div></td>
   </tr>
   <tr>
   		<td width="67%"><div align="left">
		
		<?php
		
		
		  if($row[deces_naissance]==1)  { ?>
		Déclaration faite par&nbsp;&nbsp; <span class="gras">
		<?php 
		 echo " ".$row['lien'].", ".$row['resp_declaration']." agé(e) de ".$row['age_f'] ."  sa profession ".$row['prof_lien'] ." sa nationalité ".$row['nationalite_d'] ."  résidant à ".$row['adresse_d'] ." ";
		 
		 }
		 
		 
		 
		 ?></span>
		 
		 
		<?php  if($row[deces_naissance]==5)  { ?>


			Vu la signification faite à nous le <span class="gras"> <?php echo " ". $row['date_jugement']; ?> du jugement numéro <?php echo $row['num_jugement']; ?>  par  <?php echo $row['tribunale']; ?>  
		</span>
		
			 <?php } ?>
		 
		 
		 
		 
		  </div></td>
   </tr>
   
   <tr>
     <td width="67%"><div align="left">
       <?php 
		
		 if($row[deces_naissance]==5) echo "Transféré Le"; 
		 if($row[deces_naissance]==1) echo "Dressé Le"; 
		
		?> 
       le&nbsp;&nbsp; <span class="gras">
         <?php
		
echo $row[date_d_hlf];

		
		
		
		 ?>
     </span> Hijri</div></td>
	</tr>
   <tr>
     <td width="67%"><div align="left">Correspondant au&nbsp;&nbsp; <span class="gras">
         <?php 
		
		
echo $row[date_d_mlf];	  
		
		
		
		 ?>
     </span> <span class="gras">Grégo</span> </div></td>
	</tr>
   <tr>
     <td><div align="left">A l'heure <span class="gras"><?php echo $row['heure_f_d']; ?></span> et minute <span class="gras"><?php echo $row['minute_f_d']; ?></span></div></td>
   </tr>
   <tr>
   		<td width="67%"><div align="left">Devant nous&nbsp;&nbsp;<span class="gras"><?php echo $row[officier]; ?></span></div></td>
   </tr>
   
   <tr>
   		<td width="67%"><div align="left">Après lecture faite <span class="gras">
   		  <?php if ($row['signature']==0) echo " nous l'avons signés seuls "; else echo " nous l'avons signés avec le déclarant  ";
?>
   		</span> et officier d'état civil <span class="gras"><?php echo $row[delegation]; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Nous, officier de l'état civil, certifie conforme la présente aux registres de l'état civil   </div></td>
   </tr>
   <tr>
        <td></td>
   		<td><div align="left">&nbsp;</div></td>
   </tr>
   <tr>
   		<td></td>
   		<td><div align="left"><hr /></div></td>
   </tr>
   <tr>
   		<td colspan="2"><div align="left">&nbsp;</div></td>
   </tr>
   <tr>
   		<td colspan="2"><div align="left" class="style1"><?php echo $_SESSION["idf_f"]; ?></div></td>
   </tr>
  </table>
<table  width="97%" align="center">
  <tr>
    <td width="68%"><div align="left">Fait à <span class="gras"><?php echo $bureau; ?></span> de <?php echo $r['region']  ?> <span class="gras">
      <?php 
		echo $r['section'];
		?>
    </span></div>
      <div align="center"></div></td>
    <td width="11%">&nbsp;</td>
    <td width="21%">Le : &nbsp;<span class="gras"><?php echo date('d/m/Y'); ?></span></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">Officier de l'état civil</div></td>
  </tr>
</table>
</div>





</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
