<?php
include("config.php");
session_start();

$nombrePaciente = $_POST['nombrePaciente'];
$contrasena = $_POST['contrasena'];

$nombrePaciente = $mysqli->real_escape_string($nombrePaciente);

$query1 = "SELECT nombrePaciente, contrasena FROM paciente WHERE nombrePaciente = '$nombrePaciente' AND contrasena = '$contrasena'";

$result1 = $mysqli->query($query1);


if ($result1->num_rows == 1 ||  ($nombrePaciente == "Administrador" && $contrasena == "sistema") || ($nombrePaciente == "Nutriologo" && $contrasena == "sistema")) {
    if ($result1->num_rows == 1) {
        $_SESSION['user'] = $nombrePaciente;
        header('Location: home3.php');
        exit();
    }



    if ($nombrePaciente == "Administrador" && $contrasena == "sistema") {
        $_SESSION['user'] = $nombrePaciente;
        header('Location: home.php');
        exit();
    }

    if ($nombrePaciente == "Nutriologo" && $contrasena == "sistema") {
        $_SESSION['user'] = $nombrePaciente;
        header('Location: home2.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}
?>
