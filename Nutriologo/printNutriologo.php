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

$query="SELECT * FROM paciente WHERE idPaciente='$idPaciente'";
$result = mysqli_query($mysqli, $query);
$no=0;

while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,8,'No.',1,0);
	$pdf->Cell(70,8,$no,1,1);

	$pdf->Cell(50,8,'idPacientre',1,0);
	$pdf->Cell(70,8,$row['idPaciente'],1,1);

	$pdf->Cell(50,8,'Nombre',1,0);
	$pdf->Cell(70,8,$row['nombrePaciente'],1,1);
	
	$pdf->Cell(50,8,'Apellido',1,0);
	$pdf->Cell(70,8,$row['apellidoPaciente'],1,1);
	
	$pdf->Cell(50,8,'direccion',1,0);
	$pdf->Cell(70,8,$row['direccion'],1,1);

    $pdf->Cell(50,8,'celular',1,0);
	$pdf->Cell(70,8,$row['celular'],1,1);

    $pdf->Cell(50,8,'edad',1,0);
	$pdf->Cell(70,8,$row['edad'],1,1);

    $pdf->Cell(50,8,'sexo',1,0);
	$pdf->Cell(70,8,$row['sexo'],1,1);

    $pdf->Cell(50,8,'estadoCivil',1,0);
	$pdf->Cell(70,8,$row['estadoCivil'],1,1);

    $pdf->Cell(50,8,'fechaNacimiento',1,0);
	$pdf->Cell(70,8,$row['fechaNacimiento'],1,1);

    $pdf->Cell(50,8,'escolaridad',1,0);
	$pdf->Cell(70,8,$row['escolaridad'],1,1);

    $pdf->Cell(50,8,'ocupacion',1,0);
	$pdf->Cell(70,8,$row['ocupacion'],1,1);

    $pdf->Cell(50,8,'email',1,0);
	$pdf->Cell(70,8,$row['email'],1,1);

    $pdf->Cell(50,8,'contrasena',1,0);
	$pdf->Cell(70,8,$row['contrasena'],1,1);

    $pdf->Cell(50,8,'nutriologo',1,0);
	$pdf->Cell(70,8,$row['nutriologo'],1,1);
	
	
}

$pdf->Output();
?>