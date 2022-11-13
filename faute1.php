<table width="60%" border="1">

<?php 
error_reporting(E_ALL ^ E_NOTICE);   

include"conn/connexion.php";
$i=1950; 
while ($i<=2014)
{
 $Requete =  " SELECT count(code) as nbr  FROM `naissance` WHERE `annee_declaration` = '$i' AND YEAR(date_d) <> '$i' ;";
									
$result = @mysql_query($Requete,$id) or die ("<br>Probl&egrave;me d'execution 1de la requete d'identification<br>".mysql_error()); 

$detail = mysql_fetch_assoc($result); 
 $nbr=$detail['nbr'];
if($nbr!=0) {
echo"  <tr>
    <td> $i </td>
    <td>";
	
echo $nbr;


echo "</td>
  </tr>"; }
   $i++;
 }
?>
</table>
