<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$nombre = $_POST['nombrePaciente'];
$email = $_POST['email'];
$cedula = $_POST['cedula'];
$contrasena = $_POST['contrasena'];

$sql = "INSERT INTO administrador(nombrePaciente, email, cedula, contrasena) 
        VALUES('$nombre', '$email', '$cedula', '$contrasena')";
        

if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'alert("Nuevo usuario agregado");';
    echo 'window.location="registrationAdministrador.php";';
    echo '</script>';
} else {
    echo '<script language="javascript">';
    echo 'alert("Usuario duplicado!");';
    echo 'window.location="registration.php";';
    echo '</script>';
}
?>
 