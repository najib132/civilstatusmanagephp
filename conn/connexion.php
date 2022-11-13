<?php
$base = "base";

$_SERVER['HTTP_HOST']=="localhost";

 $serveur = "localhost";
 $login = "root";           $pass = "";



$id=@mysql_connect($serveur,$login,$pass) or die ("<br>Probl&egrave;me connexion au serveur <br>".mysql_error());

@mysql_select_db("$base") or die ("<br>Probl&egrave;me de selection de la base<br>".mysql_error());

?>
