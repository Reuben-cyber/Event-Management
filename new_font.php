<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddFont('Allura-Regular','B','Allura-Regular.php');
$pdf->AddPage();
$pdf->SetFont('Allura-Regular','B',35);
$pdf->Write(10,'Enjoy new fonts with FPDF!');
$pdf->SetXY(50,100);
$pdf->Write(50,'trying out allura font');
$pdf->Output();
?>