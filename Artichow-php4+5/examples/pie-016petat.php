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
	new color(0,100,255),
	new color(0,255,255),
	new color(250,250,255),
	

);
$plot = new Pie($data,$colors);
$graph = new Graph(450, 450);
$plot->setAbsSize(350, 350);
$plot->set3D(20);
$graph->setBackgroundGradient(new color(0xcc,0xff,0x99));
//$graph->title->set("porcentage de fonctionnement par poste:");
//$plot->label->set($data);

$plot->setLabelPosition(-80);

$plot->label->setPadding(2, 2, 2, 2);
$plot->label->setFont(new Tuffy(20));
//$plot->legend->setFont(new Tuffy(20));
$plot->setLegend(array(
	'Gasoil       ',
	'Huile       ',
	'PDR       ',
	'Pneus       ',
	'MO       ',

));

$plot->legend->setPosition(1.30);

$plot->legend->setTextFont(new Tuffy(20));
$plot->legend->setBackgroundColor(new VeryLightGray(30));

//$plot->legend->hide(TRUE);
$graph->add($plot);
$graph->draw();


?>