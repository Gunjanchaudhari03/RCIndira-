<?php
require('../database.php');
require('fpdf/fpdf.php');
$sql="select * from queries";
$q=mysqli_query($conn,$sql);
$res=mysqli_fetch_array($q);

$fname = $res['nme'];
$mname = $res['email'];
$ques = $res['question'];

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","",16);
$pdf->Cell(0,10,"Queries",1,1,'C');
$pdf->SetFont("Arial","",10);
$pdf->Cell(45,5,"FullName",1,0,'');
$pdf->Cell(50,5,"Email",1,0,'');
$pdf->Cell(0,5,"Question",1,1,'');


$pdf->Cell(45,5,$fname,1,0,'');
$pdf->Cell(50,5,$mname,1,0,'');
$pdf->Cell(0,5,$ques,1,0,'');


$pdf->output();
/*
header("Content-Type: application/pdf"); 
header("Content-Disposition: attachment; filename=queries.pdf") ;  
 
header("Pragma: no-cache"); 
header("Expires: 0");
*/
?>