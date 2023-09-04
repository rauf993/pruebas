<?php
include("config.php");
include("session.php");

// Recibe los datos del formulario
$nombre = $_POST['nombrePaciente'];
$email = $_POST['email'];
$cedula = $_POST['cedula'];
$contrasena = $_POST['contrasena'];

// Realiza el proceso de autoguardado en la base de datos o en otro lugar
$sql = "INSERT INTO administrador(nombrePaciente, email, cedula, contrasena) 
        VALUES ('$nombre', '$email', '$cedula', '$contrasena')";

if (mysqli_query($mysqli, $sql)) {
    echo 'Guardado automáticamente exitoso.';
} else {
    echo 'Error en el autoguardado: ' . mysqli_error($mysqli);
}
?>
