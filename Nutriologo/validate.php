<?php
include("config.php");
session_start();

$nombrePaciente = $_POST['nombrePaciente'];
$contrasena = $_POST['contrasena'];

$nombrePaciente = $mysqli->real_escape_string($nombrePaciente);


$query2 = "SELECT nombrePaciente, contrasena FROM administrador WHERE nombrePaciente = '$nombrePaciente' AND contrasena = '$contrasena'";


$result2 = $mysqli->query($query2);

if ($result2->num_rows == 1 || ($nombrePaciente == "Administrador" && $contrasena == "sistema") || ($nombrePaciente == "Nutriologo" && $contrasena == "sistema")) {
    

    if ($result2->num_rows == 1) {
        $_SESSION['user'] = $nombrePaciente;
        header('Location: home2.php');
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
    header('Location: loginNutriologo.php');
    exit();
}
?>
