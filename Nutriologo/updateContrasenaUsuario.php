<?php
include("config.php");
include("session.php");


$contrasena= $_POST['contrasena'];
$nombrePaciente = $_POST['nombrePaciente'];
$idPaciente=$_POST['idPaciente'];

$sql = "UPDATE paciente SET nombrePaciente='$nombrePaciente', contrasena='$contrasena'
WHERE nombrePaciente='$nombrePaciente'";
$sql = "UPDATE paciente SET nombrePaciente='$nombrePaciente', contrasena='$contrasena'
WHERE idPaciente =' $idPaciente'";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="home3.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="home3.php";';
	echo '</script>';
}
?>
