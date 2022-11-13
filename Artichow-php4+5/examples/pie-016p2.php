<?php
/*
 * This work is hereby released into the Public Domain.
 * To view a copy of the public domain dedication,
 * visit http://creativecommons.org/licenses/publicdomain/ or send a letter to
 * Creative Commons, 559 Nathan Abbott Way, Stanford, California 94305, USA.
 *
 */
 /**/
 $data = @unserialize($_GET['values']); 
 require_once "../Pie.class.php";
 $colors = array(
	new color(0,255,0),
	new color(255,0,0),

);
$plot = new Pie($data,$colors);
$graph = new Graph(450, 450);
$plot->setAbsSize(500, 500);
$graph->setBackgroundGradient(new color(0,0,0));
//$plot->label->set($data);

$plot->setLabelPosition(-200);

$plot->label->setPadding(2, 2, 2, 2);
$plot->label->setFont(new Tuffy(90));

$plot->legend->hide(TRUE);
$graph->add($plot);
$graph->draw();
 
 
 
 
 
 
 
/*******************
 $data = @unserialize($_GET['values']); 
require_once "../Pie.class.php";


$graph = new Graph(450, 450);
$graph->setBackgroundGradient(new color(0,0,0));
$graph->setAntiAliasing(TRUE);

//$graph->title->set("Pie (example 13) - Adjusting labels");
$data = @unserialize($_GET['values']);
$colors = array(
	new color(0,255,0),
	new color(255,0,0),

);

$plot = new Pie($data, $colors);
$plot->setBackgroundColor(new Color(0, 0, 0));
$plot->setCenter(0.5, 0.5);
$plot->setAbsSize(500, 500);

$plot->setLegend(array(
	'marche',
	'Arrêt',

));
$plot->legend->setPosition(1.30);

$plot->label->set($values);

$plot->setLabelPosition(-200);

$plot->label->setPadding(2, 2, 2, 2);
$plot->label->setFont(new Tuffy(90));
//$plot->label->setBackgroundColor(new White(0));
   $plot->label->setBackgroundGradient(
      new LinearGradient(
         new Color(250, 250, 250, 10),
         new Color(255, 200, 200, 30),
         0
      )
   );

$plot->label->setPadding(3, 1, 1, 0);
//$plot->label->border->setColor(new Color(20, 20, 20, 20));   


//$plot->label->border->setColor(new Color(225, 0, 0, 20));

//$plot->legend->shadow->setSize(0);
$plot->legend->hide(TRUE);

$graph->add($plot);
$graph->draw();*/
/**************************************************/
?>