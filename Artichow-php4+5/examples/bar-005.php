<?php
/*
 * This work is hereby released into the Public Domain.
 * To view a copy of the public domain dedication,
 * visit http://creativecommons.org/licenses/publicdomain/ or send a letter to
 * Creative Commons, 559 Nathan Abbott Way, Stanford, California 94305, USA.
 *
 */
 session_start();

 error_reporting(E_ALL ^ E_NOTICE);
 
 $annee=$_SESSION["annee"];

/*
 * This work is hereby released into the Public Domain.
 * To view a copy of the public domain dedication,
 * visit http://creativecommons.org/licenses/publicdomain/ or send a letter to
 * Creative Commons, 559 Nathan Abbott Way, Stanford, California 94305, USA.
 *
 */
 $tab= $_GET['tab'];
 $values=explode(",",$tab); 
 


require_once "../BarPlot.class.php";

$graph = new Graph(830, 350);

// Set a title to the graph
$graph->title->set('');

// Change graph background color
$graph->setBackgroundColor(new Color(230, 230, 230));

//$values = array(8, 2, 6, 1, 3, 5);

// Declare a new BarPlot
$plot = new BarPlot($values);

// Reduce padding around the plot
$plot->setPadding(NULL, NULL, NULL, 20);

// Reduce plot size and move it to the bottom of the graph
$plot->setSize(1, 0.96);
$plot->setCenter(0.5, 0.52);

// Set a background color to the plot
$plot->grid->setBackgroundColor(new White);
// Set a dashed grid
$plot->grid->setType(LINE_DASHED);


$plot->label->set($values);
$plot->label->move(0, -10);
$plot->label->setColor(new DarkBlue);

// Set a shadow to the bars
$plot->barShadow->setSize(0);

// Bar size is at 60%
$plot->setBarSize(0.6);

// Change the color of the bars
$plot->setBarColor(
	new LightBlue(15)
	
);

//$annee=date("Y");

$y = array(
    $annee-10,
    $annee-9,
    $annee-8,
    $annee-7,
    $annee-6,
    $annee-5,
    $annee-4,
    $annee-3,
    $annee-2,
    $annee-1,
    $annee
  
);

$plot->xAxis->setLabelText($y);


// Add the plot to the graph
$graph->add($plot);

// Draw the graph
$graph->draw();

?>