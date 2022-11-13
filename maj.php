<?php 

error_reporting(E_ALL ^ E_NOTICE); 

?>
<style type="text/css">
<!--
.style2 {font-size: 12px}
-->
</style>

<div align="center">
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="">
  
  <?php 
  
  $annee1=$_POST["annee1"];
  $annee2=$_POST["annee2"];
  $nbr_files=$_POST["nbr_files"];
  $dossier=$_POST["dossier"];
  $tiret=$_POST["tiret"];
  $OK=$_POST["OK"];
  $apartir=$_POST["apartir"];
  $decalage=$_POST["decalage"];
  
if($OK=="OK") {

for($annee=$annee1; $annee<$annee2+1; $annee++) { 
$i=$apartir;

while($i < $nbr_files+1) {

$j=$i+$decalage;

 $nomFichier="$dossier/$annee/$tiret$i).jpg";
 $newFichier="$dossier/$annee/$j.jpg";
		
if (file_exists($nomFichier)==TRUE)     	   rename($nomFichier, $newFichier);

$i++;

}
}
}

?>
  <table width="58%" border="1">
    <tr>
      <td width="52%">depuis (ann&eacute;e de d&eacute;part) </td>
      <td width="48%" bgcolor="#000000"><label>
        <input name="annee1" type="text" id="annee1" />
      </label></td>
      </tr>
    <tr>
      <td>jusqu'au (ann&eacute;e de fin) </td>
      <td bgcolor="#000000"><label>
        <input name="annee2" type="text" id="annee2" />
      </label></td>
    </tr>
    <tr>
      <td>Nom de dossier <span class="style2">(example RN ) </span></td>
      <td bgcolor="#000000"><input name="dossier" type="text" id="dossier" /></td>
    </tr>
    <tr>
      <td>l'incr&eacute;mentation &agrave; partir </td>
      <td bgcolor="#000000"><input name="apartir" type="text" id="apartir" /></td>
    </tr>
    <tr>
      <td>L'incr&eacute;mentation jusqu'au </td>
      <td bgcolor="#000000"><input name="nbr_files" type="text" id="nbr_files" /></td>
    </tr>
    <tr>
      <td>Texte avant l'incr&eacute;mentation <span class="style2">(example Image00 ) </span></td>
      <td bgcolor="#000000"><input name="tiret" type="text" id="tiret" /></td>
    </tr>
    <tr>
      <td>D&eacute;calage<span class="style2">(lorsque le num&eacute;ro est d&eacute;cal&eacute; par rapport au code du fichier) </span></td>
      <td bgcolor="#000000"><label>
        <input name="decalage" type="text" id="decalage" />
      </label></td>
      </tr>
  </table>
  <label>
  <input name="OK" type="submit" id="OK" value="OK" />
  </label>
  </form>
  
</div>
