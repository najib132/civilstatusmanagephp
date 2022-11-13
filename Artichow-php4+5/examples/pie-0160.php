<?php

require_once('../Pie.class.php');

$graph = new Graph(450, 450);

$graph->shadow->setPosition(SHADOW_RIGHT_BOTTOM);
$graph->shadow->setSize(4);

$graph->setBackgroundGradient(
	new LinearGradient(
		new Color(240, 240, 240, 0),
		new White,
		0
	)
);

$genres = array(
	'Action'		=> 28,
	'Policier'		=> 14,
	'Aventure'		=> 20,
	'Romance'		=> 8,
	'Drame'			=> 3,
	'Science-Fiction'	=> 17,
);

$pie = new Pie(array_values($genres));

$pie->setLabelPrecision(1);

$pie->setLegend(array_keys($genres));
$pie->legend->setPosition(1.45, .25);

$pie->setCenter(.5, .5);

$pie->setSize(1, 1);

$pie->set3D(5);

$pie->title->set('Popularit&eacute; pour le mois juin');
$pie->title->move(0, -40);
$pie->title->setFont(new TuffyBold(14));
$pie->title->setBackgroundColor(new White(50));
$pie->title->setPadding(5, 5, 2, 2);
$pie->title->border->setColor(new Black());

$graph->add($pie);

$graph->draw();

?>