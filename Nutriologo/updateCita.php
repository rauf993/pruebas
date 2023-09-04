<?php
include("config.php");
include("session.php");

$nombrePaciente = $_POST['nombrePaciente'];
$idPaciente = $_POST['idPaciente'];
$idNutriologo = $_POST['idNutriologo'];
$fecha = $_POST['fecha'];
$peso=$_POST['peso'];


$sql = "UPDATE crearcita SET nombrePaciente='$nombrePaciente',idPaciente='$idPaciente', idNutriologo='$idNutriologo', fecha='$fecha',peso='$peso'
WHERE idPaciente='$idPaciente'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="usersCita.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>
