<?php

require_once '../../../AntiSpam.class.php';

// On cr&eacute;&eacute; l'image anti-spam
$object = new AntiSpam();

// La valeur affich&eacute;e sur l'image fera 5 caract&egrave;res
$object->setRand(5);

// On assigne un nom &agrave; cette image pour v&eacute;rifier
// ult&eacute;rieurement la valeur fournie par l'utilisateur
$object->save('example');

// On affiche l'image &agrave; l'&eacute;cran
$object->draw();

?>
