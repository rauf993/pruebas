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



$sql = "INSERT INTO paciente(nombrePaciente,apellidoPaciente,direccion,celular,edad,sexo,estadoCivil,fechaNacimiento,escolaridad,ocupacion,email,contrasena,nutriologo) 
VALUES( '$nombrePaciente', '$apellidoPaciente','$direccion','$celular','$edad','$sexo','$estadoCivil','$fechaNacimiento','$escolaridad','$ocupacion','$email','$contrasena','$nutriologo')";


if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
	echo 'window.location="registrationNutriologo.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="registrationNutriologo.php";';
	echo '</script>';
}
?>