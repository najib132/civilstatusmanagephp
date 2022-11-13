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

$graph->title->set("Pie (example 2)");


$plot = new Pie($values, PIE_EARTH);
$plot->setCenter(0.4, 0.44);
$plot->setSize(0.7, 0.6);
$plot->set3D(10);
$plot->explode(array(1 => 20, 4 => 26, 0 => 25));

$plot->setLegend(array(
	'Carburant',
	'Lubrifiant',
	'PDR',
	'Pneus',
	'Amortissement','Divers'));

$plot->legend->setPosition(1.3);

$graph->add($plot);
$graph->draw();

?>