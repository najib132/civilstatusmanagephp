<?php
/*
 * This work is hereby released into the Public Domain.
 * To view a copy of the public domain dedication,
 * visit http://creativecommons.org/licenses/publicdomain/ or send a letter to
 * Creative Commons, 559 Nathan Abbott Way, Stanford, California 94305, USA.
 *
 */
 $data = @unserialize($_GET['values']); 
require_once "../BarPlot.class.php";
function labelFormat($value) {
    return round($value, 2);
}


$graph = new Graph(300, 300);

//$graph->title->set('The title');
$graph->setAntiAliasing(TRUE);
$graph->setBackgroundGradient(new color(0xcc,0xff,0x99));
//$values = array(19, 42, 15, -25, 3);



$plot = new BarPlot( $data );
$plot->setBarColor(
	new Color(0, 0, 250)
//	new Color(0, 0, 250)
//	new Color(0, 250, 0)
);
$plot->yAxis->title->set("Heures");
$plot->yAxis->title->setFont(new TuffyBold(10));
$plot->yAxis->title->move(-4, 0);
$plot->yAxis->setTitleAlignment(LABEL_TOP);

$plot->xAxis->title->set("Postes");
$plot->xAxis->title->setFont(new TuffyBold(10));
$plot->xAxis->setTitleAlignment(LABEL_RIGHT);

$y = array(
    'P3',
    'P1',
    'P2',
  
);

$plot->xAxis->setLabelText($y);
$plot->xAxis->label->setFont(new TuffyBold(7));
$x=$data;

    $plot->label->set($x);
    $plot->label->move(0, -6);
    $plot->label->setFont(new Tuffy(7));
    $plot->label->setAngle(90);
    $plot->label->setAlign(NULL, LABEL_TOP);
    $plot->label->setPadding(3, 1, 0, 6);

$plot->setSpace(5, 5, NULL, NULL);

$plot->barShadow->setSize(4);
$plot->barShadow->setPosition(SHADOW_RIGHT_TOP);
$plot->barShadow->setColor(new Color(250, 0, 0, 10));
 $plot->label->setCallbackFunction("labelFormat");

$graph->add($plot);
$graph->draw();

?>