<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$nombre = $_POST['nombrePaciente'];
$email = $_POST['email'];
$cedula = $_POST['cedula'];
$contrasena=$_POST['contrasena'];


$sql = "UPDATE administrador SET id='$id',nombrePaciente='$nombre', email='$email', cedula='$cedula',contrasena='$contrasena'
WHERE id='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>
