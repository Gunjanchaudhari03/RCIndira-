<?php
require('../database.php');
require('fpdf/fpdf.php');
$sql="select * from prospectiveform";
$q=mysqli_query($conn,$sql);
$res=mysqli_fetch_array($q);

$fname = $res['firstName'];
$mname = $res['fatherSpousename'];
$lname = $res['lastName'];
$mob = $res['mobNo'];
$bloodgroup = $res['bloodgroup'];
$dob = $res['dob'];
$mail =$res['email'];
$add = $res['ad'];
$emob =$res['emergencyNo'];
$gender = $res['gender'];
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","",16);
$pdf->Cell(0,10,"Candidate Form",1,1,'C');
$pdf->SetFont("Arial","",10);
$pdf->Cell(20,5,"Firstname",1,0,'');
$pdf->Cell(20,5,"Fathername",1,0,'');
$pdf->Cell(20,5,"Lastname",1,0,'');
$pdf->Cell(22,5,"MobNo",1,0,'');
$pdf->Cell(7,5,"Bg",1,0,'');
$pdf->Cell(20,5,"DOB",1,0,'');
$pdf->Cell(45,5,"MailId",1,0,'');
$pdf->Cell(30,5,"EmgergencyNo",1,0,'');
$pdf->Cell(0,5,"G",1,1,'');


$pdf->Cell(20,5,$fname,1,0,'');
$pdf->Cell(20,5,$mname,1,0,'');
$pdf->Cell(20,5,$lname,1,0,'');
$pdf->Cell(22,5,$mob,1,0,'');
$pdf->Cell(7,5,$bloodgroup,1,0,'');
$pdf->Cell(20,5,$dob,1,0,'');
$pdf->Cell(45,5,$mail,1,0,'');
$pdf->Cell(30,5,$emob,1,0,'');
$pdf->Cell(0,5,$gender,1,1,'');

$pdf->output();

header("Content-Type: application/pdf"); 
header("Content-Disposition: attachment; filename=prospectivedata.pdf") ;  
 
header("Pragma: no-cache"); 
header("Expires: 0");

?>