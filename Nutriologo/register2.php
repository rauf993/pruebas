<?php
include("config.php");
include("session.php");


$nombre = $_POST['nombre'];
$email= $_POST['email'];
$cedula= $_POST['cedula'];
$contrasena= $_POST['contrasena'];

$sql = "INSERT INTO administrador(nombre,email,cedula, contrasena) 
VALUES( '$nombre','$email','$cedula', '$contrasena')";


if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
	echo 'window.location="regustrarse.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="regustrarse.php.php";';
	echo '</script>';
}
?>