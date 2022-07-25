<?php
//include connection file 
include_once("repcon.php");
include_once('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    // $this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(50,10,'Bill generation',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('bill_id'=>'ID', 'consumer_no'=> 'Consumer ','name'=> 'Name', 'add1'=> 'Address','p_reading'=> 'current ','pre'=> 'previous','unit'=> 'unit ','amount'=> 'amount ','start_date'=> 'start','end_date'=> 'end ','due'=> 'due date','due1'=> 'Disconnection ','phno1'=> 'Phone ','status'=> 'status');

$display_heading1 = array('bill_id'=>'ID', 'consumer_no'=> 'Consumer ','name'=> 'Name', 'add1'=> 'Address','p_reading'=> 'current ','pre'=> 'previous','unit'=> 'unit ','amount'=> 'amount ','start_date'=> 'start','end_date'=> 'end ','due'=> 'due date','due1'=> 'Disconnection ','phno1'=> 'Phone ','status'=> 'status');


$result = mysqli_query($connString, "SELECT bill_id,consumer_no, add1, p_reading,pre,unit,amount,start_date,end_date,due,due1,phno1,status FROM bill1") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM bill1");

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);

foreach($header as $heading) {
$pdf->Cell(25,12,$display_heading1[$heading['Field']],1);
}


foreach($header as $heading) {
$pdf->Cell(25,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(25,12,$column,1);
}
$pdf->Output();
?>