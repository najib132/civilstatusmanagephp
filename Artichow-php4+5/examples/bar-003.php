<?php
/*
 * This work is hereby released into the Public Domain.
 * To view a copy of the public domain dedication,
 * visit http://creativecommons.org/licenses/publicdomain/ or send a letter to
 * Creative Commons, 559 Nathan Abbott Way, Stanford, California 94305, USA.
 *
 */

require_once "../BarPlot.class.php";

$graph = new Graph(400, 400);
$graph->title->set('Two bars');

$values = array(12);

$group = new PlotGroup;
$group->setPadding(NULL, NULL, 35, NULL);

$plot = new BarPlot($values, 3);
$plot->setBarColor(new LightBlue(25));
$plot->setBarSpace(5);

$group->add($plot);

$values = array(6);

$plot = new BarPlot($values, 2);
$plot->setBarColor(new LightOrange(50));
$plot->setBarSpace(5);

$group->add($plot);

$graph->add($group);
$graph->draw();

?>