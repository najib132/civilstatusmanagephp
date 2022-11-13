<?php
/*
 * This work is hereby released into the Public Domain.
 * To view a copy of the public domain dedication,
 * visit http://creativecommons.org/licenses/publicdomain/ or send a letter to
 * Creative Commons, 559 Nathan Abbott Way, Stanford, California 94305, USA.
 *
 */
$data = @unserialize($_GET['values']); 
require_once "../Pie.class.php";

$graph = new Graph(700, 400);
//$graph->setBackgroundGradient(new color(0,0,100));
$graph->setAntiAliasing(TRUE);
$graph->title->set("Pourcentage de fonctionnement par poste:");
$plot = new Pie($data, PIE_AQUA);
$plot->setCenter(0.4, 0.55);
$plot->setSize(0.8, 0.8);
//
$plot->set3D(15);
$plot->explode(array(2 => 10, 0 => 30));

$plot->setLegend(array(
	'poste 1',
	'poste 2',
	'poste 3',
	
));

$plot->legend->setPosition(1.2);
$plot->legend->setBackgroundColor(new VeryLightGray(0));
$plot->setLabelPosition(-70);
$plot->label->setFont(new Tuffy(10));
$graph->add($plot);
$graph->draw();

?>