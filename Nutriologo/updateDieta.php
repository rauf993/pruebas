<?php
include("config.php");
include("session.php");

$nombrePaciente = $_POST['nombrePaciente'];
$idPaciente = $_POST['idPaciente'];
$idNutriologo = $_POST['idNutriologo'];
$fecha = $_POST['fecha'];
$alimentos=$_POST['alimentos'];
$ejercicios=$_POST['ejercicios'];


$sql = "UPDATE creardieta SET nombrePaciente='$nombrePaciente',idPaciente='$idPaciente', idNutriologo='idNutriologo', fecha='$fecha',alimentos='$alimentos',ejercicios='$ejercicios'
WHERE idPaciente='$idPaciente'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="usersDieta.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="usersDieta.php";';
	echo '</script>';
}
?>
