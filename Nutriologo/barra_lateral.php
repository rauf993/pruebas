<?php
session_start(); // Iniciar la sesion

include("config.php");

$url = "http://" . $_SERVER['HTTP_HOST'] . "/crud2/";

// Obtener el valor de la variable de ssesion
if (isset($_SESSION['user'])) {
  $nombre = $_SESSION['user'];
} else {
  $nombre = ""; 
}
?>

<html>
<head>
<title>VaidrollTeam</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="BarraLateral">
<ul>
<div class="NomUsuario"><?php echo $nombre?></div>
<hr>
<li><a href="principal.php">Inicio</a></li>
<li><a href="cambiarContrasenaUsuario.php">Cambiar Contraseña</a></li>
<li><a href="usersCitaUsuario.php">Revisar Cita</a></li>
<li><a href="usersDietaUsuario.php">Revisar Dieta</a></li>

<li><a href="login.php">Cerrar sesión</a></li>
</ul>
</div>
</body>
</html>
