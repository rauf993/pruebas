<?php
include("config.php");
include("session.php");

$idPaciente = $_GET['idPaciente'];


$sql = "DELETE FROM crearcita WHERE idPaciente='$idPaciente'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Cita eliminado exitósamente");';
	echo 'window.location="usersCita.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="usersCita.php";';
	echo '</script>';
}
?>