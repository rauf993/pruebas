<?php
include("config.php");
include("session.php");


$contrasena= $_POST['contrasena'];
$nombrePaciente = $_POST['nombrePaciente'];


$sql = "UPDATE Administrador SET contrasena='$contrasena'
WHERE nombrePaciente='$nombrePaciente'";
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
