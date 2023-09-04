<?php
include("config.php");
include("session.php");

$contador = $_POST['contador'];

$idPaciente = $_POST['idPaciente'];
$nombrePaciente=$_POST['nombrePaciente'];
$idNutriologo= $_POST['idNutriologo'];
$fecha = $_POST['fecha'];
$peso=$_POST['peso'];


$sql = "INSERT INTO crearcita(idPaciente,nombrePaciente,idNutriologo,fecha,peso) 
VALUES( '$idPaciente','$nombrePaciente', '$idNutriologo', '$fecha','$peso')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Se ha creado la cita");';
	echo 'window.location="usersNutriologo.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("La cita ya existe!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
?>