<?php
include("config.php");
include("session.php");


$idPaciente = $_POST['idPaciente'];
$nombrePaciente = $_POST['nombrePaciente'];
$apellidoPaciente=$_POST['apellidoPaciente'];
$direccion=$_POST['direccion'];
$celular=$_POST['celular'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$estadoCivil=$_POST['estadoCivil'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$escolaridad=$_POST['escolaridad'];
$ocupacion=$_POST['ocupacion'];
$email=$_POST['email'];
$contrasena=$_POST['contrasena'];
$nutriologo=$_POST['nutriologo'];



$sql = "UPDATE paciente SET idPaciente='$idPaciente', nombrePaciente='$nombrePaciente', apellidoPaciente='$apellidoPaciente', direccion='$direccion', celular='$celular', edad='$edad', sexo='$sexo', estadoCivil='$estadoCivil', fechaNacimiento='$fechaNacimiento', escolaridad='$escolaridad', ocupacion='$ocupacion', email='$email', contrasena='$contrasena', nutriologo='$nutriologo' WHERE idPaciente='$idPaciente'";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="usersNutriologo.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="usersNutriolog";';
	echo '</script>';
}
?>
