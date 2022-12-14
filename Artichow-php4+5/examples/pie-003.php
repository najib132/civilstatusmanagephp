<?php
/*
 * This work is hereby released into the Public Domain.
 * To view a copy of the public domain dedication,
 * visit http://creativecommons.org/licenses/publicdomain/ or send a letter to
 * Creative Commons, 559 Nathan Abbott Way, Stanford, California 94305, USA.
 *
 */

require_once "../Pie.class.php";


$graph = new Graph(400, 250);
$graph->setAntiAliasing(TRUE);

$graph->title->set("Pie (example 3)");

 $values = array(18, 14, 16, 12, 15, 13, 66);

$plot = new Pie($values, PIE_AQUA);
$plot->setCenter(0.4, 0.55);
$plot->setSize(0.7, 0.6);
$plot->set3D(15);
$plot->explode(array(4 => 10, 0 => 30));

$plot->setLegend(array(
	'poste 1',
	'poste 2',
	'poste 3',
	
));

$plot->legend->setPosition(1.3);
$plot->legend->setBackgroundColor(new VeryLightGray(0));

$graph->add($plot);
$graph->draw();

?>