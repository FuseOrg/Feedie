<?php
require('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../../../../../../images/logo.png',63,7,12);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Feedback Report',0,1,'C');
    // Line break
    $this->Ln(10);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',9);
    // Org name
    $this->Cell(0,0,'Powered by FeediE',0,1,'C');
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',15);
$pdf->Cell(0,10,"Teacher's name  :",0,1);
$pdf->Cell(0,10,"Department        :",0,1);
$pdf->Cell(0,10,"Class                  :",0,1);
$pdf->Cell(0,10,"Subject name     :",0,1);
$pdf->Cell(0,10,"Subject code      :",0,1);
$pdf->Cell(0,10,"Overall Rating   :",0,1);
// Line break
$pdf->Ln(5);
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
?>