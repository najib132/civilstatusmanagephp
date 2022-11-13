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


$Req2 =  "SELECT count(code) as kayn  FROM `origine_naissance` WHERE `annee_declaration`='".$anneeNais."' and `code`='".$code."' and `partie`='".$partie."'  ";
$res2 = @mysql_query($Req2,$id) or die ("<br>Probl&egrave;me d'execution de la requete <br>".mysql_error()); 
$detail = mysql_fetch_assoc($res2); 
$kayn_n=$detail['kayn'];

if($kayn_n==0) {
	
$Requete = "select * from naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	
}

else {


$Requete = "select * from origine_naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$result = @mysql_query($Requete) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$row = mysql_fetch_array($result);	


$Requetee = "select nom,prenom,nom_a,prenom_a from naissance where `code` = '".$code."' and `annee_declaration` ='".$anneeNais."' and `partie`='".$partie."' ";
		//$result3 = @mysql_query($Requete3,$id)
$resulte = @mysql_query($Requetee) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());
$rowe = mysql_fetch_array($resulte);	



}




$idf_f=$_SESSION["idf_f"];
$idf=$_SESSION["idf"];
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
<style>
.invisible{
	visibility:hidden;
	}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>



<style type="text/css">
<!--
.gras {
	font-weight: bold;
}
.gras {
	font-weight: bold;
	text-align: center;
}
.style4 {font-size: 9px}
-->
</style>
</head>

<body>




<?php if($row[deces_naissance]==0 || $row[deces_naissance]==4) { ?>





<div align="right">
  <table  width="97%" align="center">
      <tr>
      <td width="33%"><div align="center" class="gras">ROYAUME DU MAROC</div></td>
      <td width="67%"><div align="center">En l'application de la loi n° 37.99 relative à l'état civil pomulguée par le</div></td>
      </tr>
      <tr>
      <td><div align="center" class="gras">MINISTERE DE L'INTERIEUR</div></td>
      <td><div align="center">dahir n° 1.02.239 du 25 Rajeb 1423 (3 Octobre 2002) </div></td>
      </tr>
      <tr>
      <td><div align="center">Province ou préfecture de <span class="gras"><?php echo $province; ?></span></div></td>
      <td rowspan="4"><div align="center"  style="font-size:25px" >Copie intégrale de l'acte de naissance</div></td>
      </tr>
    <tr>
      <td align="center"><?php echo $r['region']  ?>   <span class="gras"><?php 
		echo $r['section'];
		?> </span> </td>
    </tr>
    <tr>
      <td><div align="center">
	  <span class="gras"><?php echo $bureau; ?></span></div></td>
    </tr>
    <tr>
      <td><div align="center" class="gras">&nbsp;</div></td>
    </tr>
    <tr>
      <td align="left"><div align="left">Acte de naissance N° <span class="gras">  <span class="gras"><?php echo $row['code']; ?></span></div></td>
      <td><div></div></td>
    </tr>
   <tr>
      <td><div>
        <div align="left">Année Hégirienne <span class="gras"><?php echo $row['annee_h']; ?></span></div>
      </div></td>
      <td><div></div></td>
   </tr>
   <tr>
      <td><div align="left">Année Grégorienne <span class="gras"><?php echo $row['annee_declaration']; ?></span></div></td>
      <td><div align="left">Le &nbsp;&nbsp; <span class="gras"><?php echo $row['date_hlf']; ?> Hijri</span></div></td>
   </tr>
   
   <tr>
      <td rowspan="2" align="left"><span class="gras"><?php
	  
if($kayn_n==0)	echo $row['prenom']; else echo  $rowe[prenom];
	  
	  ?></span></td>
      <td><div align="left">Correspondant au  &nbsp;&nbsp; <span class="gras"><?php echo $row['date_mlf']; ?> Grégo</span></div></td>
   </tr>     
   <tr>
      <td><div align="left">Heure <span class="gras"><?php echo $row['heure_f']; ?></span> et minute <span class="gras"><?php echo $row['minute_f']; ?></span></div></td>
   </tr>
   <tr>
      <td align="left"><span class="gras"><?php 
	  
	  if($kayn_n==0)	echo $row['nom']; else echo  $rowe[nom];

	  
	   ?></span></td>
    <td><div align="left"><?php if ($row['sex'] == 'M') echo "Né à"; else echo "Née à";
?>  &nbsp;&nbsp;<span class="gras"><?php echo $row['lieu']; ?></span></div></td>
   </tr>
   <tr>
      <td rowspan="20"><div style="margin:20px; font-size:12px">
        <div align="left">
          <?php
	  
$Requete3 = "select mention_p.bayane as mb, mention_p.bayane1 as mb1, mention.bayane1 as mb2, date from mention_p, mention where mention.id = mention_p.jugement and deces_naissance = 0 and `partie`='".$partie."' and code = ".$code ." and annee_declaration =".$anneeNais;

$result3 = @mysql_query($Requete3) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());

$row3 = mysql_fetch_array($result3);	

  while($row3!="" && $row3['mb']!=""){
  
  echo"- "; 
  
  echo  $row3['mb']."<br />";
  $row3 = mysql_fetch_array($result3);
  
  }
  
  ?>
        </div>
      </div></td>
      <td><div align="left">Sexe&nbsp;&nbsp; <span class="gras"><?php if ($row['sex'] == 'M') echo "Masculin"; else echo "Féminin"; ?></span> &nbsp;&nbsp; Nationalité
        <span class="gras"><?php echo $row['nationalite_personne']; ?></span></div></td>
   </tr>
   <tr>
     <td><div align="left">Prénom  <span class="gras"><?php 


echo $row['prenom']; 
	 
	 
	 ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Nom de famille&nbsp;&nbsp; <span class="gras"><?php 
		
		echo $row['nom']; 
		
		
		
		?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left"><?php if ($row['sex'] == 'M') echo "Fils"; else echo "Fille";
?>&nbsp;&nbsp;de <span class="gras"><?php echo $row['nom_f_p']; ?>  </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nationalité <span class="gras"><?php echo $row['nationalite_p']; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Né à&nbsp;&nbsp; <span class="gras"><?php echo $row['lieu_p']; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Le <span class="gras">&nbsp;&nbsp;<?php echo $row['date_hlf_p']; ?></span> <span class="gras">Hijri</span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Correspondant au&nbsp;&nbsp; <span class="gras"><?php echo $row['date_plf_p']; ?></span> <span class="gras">Grégo</span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Profession&nbsp;&nbsp; <span class="gras"><?php echo $row['prof_p']; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Et de&nbsp;&nbsp;<span class="gras"><?php echo $row['nom_f_m']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nationalité  <span class="gras"><?php echo $row['nationalite_m']; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Née à  <span class="gras">&nbsp;&nbsp;<?php echo $row['lieu_m']; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Le <span class="gras">&nbsp;&nbsp;<?php echo $row['date_hlf_m']; ?></span> <span class="gras">Hijri</span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Correspondant au &nbsp;&nbsp;<span class="gras"><?php echo $row['date_mlf_m']; ?></span> <span class="gras">Grégo</span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Profession&nbsp;&nbsp; <span class="gras"><?php echo $row['prof_m']; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Domiciliés&nbsp;&nbsp; <span class="gras"><?php echo $row['adresse']; ?></span></div></td>
   </tr>
   
   <tr>
   		<td>
		
	      <div align="left">
	        <?php  if($row[deces_naissance]==0 || $row[deces_naissance]==2)  { ?>
	        Déclaration faite par&nbsp;&nbsp;<span class="gras">
	          <?php

		 echo " ".$row['lien'].", ".$row['resp_declaration']." agé(e) de ".$row['age_f'] ."  sa profession ".$row['prof_lien'] ." sa nationalité ".$row['nationalite_d'] ."  résidant à ".$row['adresse_d'] ." ";
		 ?>
            </span>
	        
	        
	        <?php } ?>  
	        
	        <?php  if($row[deces_naissance]==3 || $row[deces_naissance]==4)  { ?>
	        
	        
	        Vu la signification faite à nous le <span class="gras"> <?php echo " ". $row['date_jugement']; ?> du jugement numéro <?php echo $row['num_jugement']; ?>  par  <?php echo $row['tribunale']; ?>  
                </span>
	        
	        <?php } ?>
	        
	        
          </div></td>
     

	
	  
	 </td>
   </tr>
   
   <tr>
     <td width="67%"><div align="left">
       <?php 
		
		 if($row[deces_naissance]==4) echo "Transféré"; 
		 if($row[deces_naissance]==0) echo "Dressé"; 
		
		?>  
       le&nbsp;&nbsp; <span class="gras">
         <?php
		
echo $row[date_d_hlf];

		
		
		
		 ?>
     </span> <span class="gras">Hijri</span></div></td>
	</tr>
   <tr>
     <td width="67%"><div align="left">Correspondant au&nbsp;&nbsp; <span class="gras">
         <?php 
		
		
echo $row[date_d_mlf];	  
		
		
		
		 ?>
     </span> <span class="gras">Grégo</span></div></td>
	</tr>
   <tr>
   		<td><div align="left">Devant nous&nbsp;&nbsp;<span class="gras"><?php echo $row[officier]; ?></span></div></td>
   </tr>
   
   <tr>
   		<td><div align="left">Après lecture faite <span class="gras">
        <?php if ($row['signature']==0) echo " nous l'avons signés seuls "; else echo " nous l'avons signés avec le déclarant  ";
?>
        </span> et officier d'état civil <span class="gras"><?php echo $row[delegation]; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Nous, officier de l'état civil, certifie conforme la présente aux registres de l'état civil   </div></td>
   </tr>
   <tr>
        <td><div align="left"><span class="style4"><?php echo $idf_f; ?></span></div></td>
   		<td><div align="left">&nbsp;</div></td>
   </tr>
   <tr>
   		<td></td>
   		<td><div align="left"><hr /></div></td>
   </tr>
   <tr>
   		<td colspan="2"><div align="left"></div></td>
   </tr>
  </table>
  <table  width="97%" align="center">
    <tr>
      <td width="47%"><div align="left">Fait à <span class="gras"><?php echo $bureau; ?></span> de <?php echo $r['region']  ?> <span class="gras">
          <?php 
		echo $r['section'];
		?>
        </span></div>
          <div align="center"></div></td>
      <td width="32%">&nbsp;</td>
      <td width="21%">Le : &nbsp;<span class="gras"><?php echo date('d/m/Y'); ?></span></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">Officier de l'état civil</div></td>
    </tr>
  </table>
  
  
  
<?php } if($row[deces_naissance]==2 || $row[deces_naissance]==3) { ?>





<div align="right">
  <table  width="97%" align="center">
      <tr>
      <td width="33%"><div align="center" class="gras">ROYAUME DU MAROC</div></td>
      <td><div align="center">En l'application de la loi n° 37.99 relative à l'état civil pomulguée par le</div></td>
      </tr>
      <tr>
      <td><div align="center" class="gras">MINISTERE DE L'INTERIEUR</div></td>
      <td><div align="center">dahir n° 1.02.239 du 25 Rajeb 1423 (3 Octobre 2002) </div></td>
      </tr>
      <tr>
      <td><div align="center">Province ou préfecture de <span class="gras"><?php echo $province; ?></span></div></td>
      <td rowspan="4"><div align="center"  style="font-size:25px" >Copie intégrale de l'acte de naissance</div></td>
      </tr>
    <tr>
      <td align="center"><?php echo $r['region']  ?>   <span class="gras"><?php 
		echo $r['section'];
		?> </span> </td>
    </tr>
    <tr>
      <td><div align="center">
	  <span class="gras"><?php echo $bureau; ?></span></div></td>
    </tr>
    <tr>
      <td><div align="center" class="gras">&nbsp;</div></td>
    </tr>
    <tr>
      <td align="left"><div align="left"></div></td>
      <td><div>Le <span class="gras"><?php echo $row['date_hlf_d1']; ?></span> Hijri </div></td>
    </tr>
   <tr>
      <td><div></div></td>
      <td><div>Correspondant au <span class="gras"><?php echo $row['date_mlf_d1']; ?></span> Grégo </div></td>
   </tr>
   <tr>
     <td align="left"><div align="left">Acte de naissance N° <span class="gras"> <span class="gras"><?php echo $row['code']; ?></span></div></td>
     <td><div align="left">Que <?php echo $row['ancien_officier_f']; ?></div></td>
   </tr>
   <tr>
     <td><div>
       <div align="left">Année Hégirienne <span class="gras"><?php echo $row['annee_h']; ?></span></div>
     </div></td>
     <td>Nous a demandé d'enregistrer la déclaration naissance sous numéro N° <?php echo $row[ancien_code]; ?></td>
   </tr>
   <tr>
     <td><div align="left">Année Grégorienne <span class="gras"><?php echo $row['annee_declaration']; ?></span></div></td>
      <td><div align="left">Le &nbsp;&nbsp; <span class="gras"><?php echo $row['date_hlf']; ?> Hijri</span></div></td>
   </tr>
   
   <tr>
     <td rowspan="2" align="left"><span class="gras">
       <?php
	  
if($kayn_n==0)	echo $row['prenom']; else echo  $rowe[prenom];
	  
	  ?>
     </span></td>
      <td><div align="left">Correspondant au  &nbsp;&nbsp; <span class="gras"><?php echo $row['date_mlf']; ?> Grégo</span></div></td>
   </tr>     
   <tr>
      <td><div align="left">Heure <span class="gras"><?php echo $row['heure_f']; ?></span> et minute <span class="gras"><?php echo $row['minute_f']; ?></span></div></td>
   </tr>
   <tr>
     <td align="left"><span class="gras">
       <?php 
	  
	  if($kayn_n==0)	echo $row['nom']; else echo  $rowe[nom];

	  
	   ?>
     </span></td>
      <td><div align="left"><?php if ($row['sex'] == 'M') echo "Né à"; else echo "Née à";
?>  &nbsp;&nbsp;<span class="gras"><?php echo $row['lieu']; ?></span></div></td>
   </tr>
   <tr>
      <td rowspan="20"><div style="margin:20px; font-size:12px">
        <div align="left">
          <?php
	  
$Requete3 = "select mention_p.bayane as mb, mention_p.bayane1 as mb1, mention.bayane1 as mb2, date from mention_p, mention where mention.id = mention_p.jugement and deces_naissance = 0 and `partie`='".$partie."' and code = ".$code ." and annee_declaration =".$anneeNais;

$result3 = @mysql_query($Requete3) or die ("<br>Problme lors de la lecture de la table<br>".mysql_error());

$row3 = mysql_fetch_array($result3);	

  while($row3!="" && $row3['mb']!=""){
  
  echo"- "; 
  
  echo  $row3['mb']."<br />";
  $row3 = mysql_fetch_array($result3);
  
  }
  
  ?>
        </div>
      </div></td>
      <td><div align="left">Sexe&nbsp;&nbsp; <span class="gras"><?php if ($row['sex'] == 'M') echo "Masculin"; else echo "Féminin"; ?></span> &nbsp;&nbsp; Nationalité
        <span class="gras"><?php echo $row['nationalite_personne']; ?></span></div></td>
   </tr>
   <tr>
     <td><div align="left">Prénom  <span class="gras"><?php 


echo $row['prenom']; 
	 
	 
	 ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Nom de famille&nbsp;&nbsp; <span class="gras"><?php 
		
		echo $row['nom']; 
		
		
		
		?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left"><?php if ($row['sex'] == 'M') echo "Fils"; else echo "Fille";
?>&nbsp;&nbsp;de <span class="gras"><?php echo $row['nom_f_p']; ?>  </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nationalité <span class="gras"><?php echo $row['nationalite_p']; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Né à&nbsp;&nbsp; <span class="gras"><?php echo $row['lieu_p']; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Le <span class="gras">&nbsp;&nbsp;<?php echo $row['date_hlf_p']; ?></span> <span class="gras">Hijri</span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Correspondant au&nbsp;&nbsp; <span class="gras"><?php echo $row['date_plf_p']; ?></span> <span class="gras">Grégo</span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Profession&nbsp;&nbsp; <span class="gras"><?php echo $row['prof_p']; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Et de&nbsp;&nbsp;<span class="gras"><?php echo $row['nom_f_m']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nationalité  <span class="gras"><?php echo $row['nationalite_m']; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Née à  <span class="gras">&nbsp;&nbsp;<?php echo $row['lieu_m']; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Le <span class="gras">&nbsp;&nbsp;<?php echo $row['date_hlf_m']; ?></span> <span class="gras">Hijri</span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Correspondant au &nbsp;&nbsp;<span class="gras"><?php echo $row['date_mlf_m']; ?></span> <span class="gras">Grégo</span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Profession&nbsp;&nbsp; <span class="gras"><?php echo $row['prof_m']; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Domiciliés&nbsp;&nbsp; <span class="gras"><?php echo $row['adresse']; ?></span></div></td>
   </tr>
   
   <tr>
   		<td><div align="left">
		
		
		
		<?php  if($row[deces_naissance]==2)  { ?>
		
		Déclaration faite par&nbsp;&nbsp;<span class="gras">
   		  <?php

		 echo " ".$row['lien'].", ".$row['resp_declaration']." agé(e) de ".$row['age_f'] ."  sa profession ".$row['prof_lien'] ." sa nationalité ".$row['nationalite_d'] ."  résidant à ".$row['adresse_d'] ." ";
		 ?>
	  </span>
	  
	  
	<?php } ?>  
	
		<?php  if($row[deces_naissance]==3)  { ?>


			Vu la signification faite à nous le <span class="gras"> <?php echo " ". $row['date_jugement']; ?> du jugement numéro <?php echo $row['num_jugement']; ?>  par  <?php echo $row['tribunale']; ?>  
		</span>
		
			 <?php } ?>

	
		
		
		
		
		</div></td>
   </tr>
   
   
   <tr>
   		<td><div align="left">
		
		
		<?php 
		
		 if($row[deces_naissance]==3) echo "Transféré Le"; 
		 if($row[deces_naissance]==2) echo "Dressé Le"; 
		
		?>
		
		
		
		 le&nbsp;&nbsp; <span class="gras"><?php
		

echo $row[date_d_hlf];		
		
		
		 ?></span> <span class="gras">Hijri</span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Correspondant au&nbsp;&nbsp;<span class="gras">
   		  <?php
		

echo $row[date_d_mlf];		
		
		
		 ?>
   		</span> <span class="gras">Grégo</span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Devant nous <span class="gras"><?php echo $row[officier]; ?></span></div></td>
    </tr>
   
   
   <tr>
   		<td><div align="left">Après lecture faite <span class="gras">
        <?php if ($row['signature']==0) echo " nous l'avons signés seuls "; else echo " nous l'avons signés avec le déclarant  ";
?>
        </span> et officier d'état civil <span class="gras"><?php echo $row[delegation]; ?></span></div></td>
   </tr>
   <tr>
   		<td><div align="left">Nous, officier de l'état civil, certifie conforme la présente aux registres de l'état civil   </div></td>
   </tr>
   <tr>
        <td><div align="left"><span class="style4"><?php echo $idf_f; ?></span></div></td>
   		<td><div align="left">&nbsp;</div></td>
   </tr>
   <tr>
   		<td></td>
   		<td><div align="left"><hr /></div></td>
   </tr>
   <tr>
   		<td colspan="2"><div align="left"></div></td>
   </tr>
  </table>
  <table  width="97%" align="center">
    <tr>
      <td width="47%"><div align="left">Fait à <span class="gras"><?php echo $bureau; ?></span> de <?php echo $r['region']  ?> <span class="gras">
          <?php 
		echo $r['section'];
		?>
        </span></div>
          <div align="center"></div></td>
      <td width="32%">&nbsp;</td>
      <td width="21%">Le : &nbsp;<span class="gras"><?php echo date('d/m/Y'); ?></span></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">Officier de l'état civil</div></td>
    </tr>
  </table>
  


  <?php } ?>

  
  
</div>
</body>
</html>
<?php    }else{ ?> 
Vous n'avez pas le droit de voir cette page
  <?php } ?>
