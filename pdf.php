<?php 

require('FPDF/fpdf.php');
$pdf = new FPDF('L','mm','A5');
$pdf->AddPage();
$pdf->SetFont('Times','',9);



$pdf->Cell(60,10,'ffffffff',0,1);


$pdf->Output(); 
?>

