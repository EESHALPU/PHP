<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Cell(90,50,'Dr Santosh Kumar!');
$pdf->Cell(100,80,'Chanakya Kumar');
$pdf->Output();
?>