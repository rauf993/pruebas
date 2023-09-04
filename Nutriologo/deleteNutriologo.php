<?php
include("config.php");
include("session.php");

$idPaciente= $_GET['idPaciente'];


$sql = "DELETE FROM paciente WHERE idPaciente='$idPaciente'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="usersNutriologo.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="usersNutriologo.php";';
	echo '</script>';
}
?>