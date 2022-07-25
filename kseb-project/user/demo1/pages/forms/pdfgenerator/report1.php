
<?php



if(!isset($_POST['sub']))
{
$con=mysqli_connect('localhost','root','','kseb');
require_once __DIR__ .'/vendor/autoload.php';

$re = mysqli_query($con,"SELECT bill_id,name,consumer_no, add1, p_reading,pre,unit,amount,start_date,end_date,due,due1,phno1,status FROM bill1 where bill_id='0'");


$pdf = new \Mpdf\Mpdf();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30, 5, 'Bill Generation', 0, 0, 'C');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
  $pdf->Ln();
$pdf->Ln();
while($row=mysqli_fetch_assoc($re))
{
$pdf->cell(40,12,'ID',0,0,'L');
$pdf->cell(40,12,''. $row['bill_id'],0,0,'L');
$pdf->Ln();

$pdf->cell(40,12,'name',0,0,'L');
$pdf->cell(40,12,''. $row['consumer_no'],0,0,'L');
$pdf->Ln();

$pdf->cell(40,12,'Address',0,0,'L');
$pdf->cell(50,12,''. $row['name'],0,0,'L');
$pdf->Ln();


$pdf->cell(40,12,'Address',0,0,'L');
$pdf->cell(40,12,''. $row['add1'],0,0,'L');
$pdf->Ln();

$pdf->cell(40,12,'current reading',0,0,'L');
$pdf->cell(40,12,''. $row['p_reading'],0,0,'L');
$pdf->Ln();

$pdf->cell(40,12,'Previous Reading',0,0,'L');
$pdf->cell(50,12,''. $row['pre'],0,0,'L');
$pdf->Ln();
$pdf->cell(40,12,'unit consumed',0,0,'L');
$pdf->cell(50,12,''. $row['unit'],0,0,'L');
$pdf->Ln();
$pdf->cell(40,12,'Amount',0,0,'L');
$pdf->cell(50,12,''. $row['amount'],0,0,'L');
$pdf->Ln();
$pdf->cell(40,12,'Start Date',0,0,'L');
$pdf->cell(50,12,''. $row['start_date'],0,0,'L');
$pdf->Ln();
$pdf->cell(40,12,'End Date',0,0,'L');
$pdf->cell(50,12,''. $row['end_date'],0,0,'L');
$pdf->Ln();
$pdf->cell(40,12,'Due Date',0,0,'L');
$pdf->cell(50,12,''. $row['due'],0,0,'L');
$pdf->Ln();
$pdf->cell(40,12,'Disconnection',0,0,'L');
$pdf->cell(50,12,''. $row['due1'],0,0,'L');
$pdf->Ln();
$pdf->cell(40,12,'Phone Number',0,0,'L');
$pdf->cell(50,12,''. $row['phno1'],0,0,'L');
$pdf->Ln();


}
$pdf->Output();
#file_put_contents($pdf->Output(),file_get_contents('re.pdf'));
}
?>