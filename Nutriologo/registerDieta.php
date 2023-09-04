<?php
include("config.php");
include("session.php");



$idPaciente = $_POST['idPaciente'];
$nombrePaciente=$_POST['nombrePaciente'];
$idNutriologo= $_POST['idNutriologo'];
$fecha = $_POST['fecha'];
$alimentos=$_POST['alimentos'];
$ejercicios=$_POST['ejercicios'];


$sql = "INSERT INTO crearDieta(idPaciente,nombrePaciente,idNutriologo,fecha,alimentos,ejercicios) 
VALUES( '$idPaciente','$nombrePaciente', '$idNutriologo', '$fecha','$alimentos','$ejercicios')";
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