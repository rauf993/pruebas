<?php
require('fpdf/fpdf.php');
include('config.php');
$idPaciente = $_GET['idPaciente'];

$pdf = new FPDF();
///var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Fecha: '.date('d-m-Y').'',0,"R");
$pdf->Ln(14);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(120,10,'Perfil de Usuario',1,0);

$query="SELECT * FROM crearcita WHERE idPaciente='$idPaciente'";
$result = mysqli_query($mysqli, $query);
$no=0;

while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,8,'No.',1,0);
	$pdf->Cell(70,8,$no,1,1);

	$pdf->Cell(50,8,'idPaciente',1,0);
	$pdf->Cell(70,8,$row['idPaciente'],1,1);

	$pdf->Cell(50,8,'Nombre',1,0);
	$pdf->Cell(70,8,$row['idNutriologo'],1,1);
	
	$pdf->Cell(50,8,'Fecha',1,0);
	$pdf->Cell(70,8,$row['fecha'],1,1);
	
	$pdf->Cell(50,8,'Peso',1,0);
	$pdf->Cell(70,8,$row['peso'],1,1);
	
	
}

$pdf->Output();
?>