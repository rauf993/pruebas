<?php
	include("session.php");
	include("config.php");
	
?>
<?php
  $url="http://".$_SERVER['HTTP_HOST']."/crud2/";


  if(isset($_SESSION['user'])){
    $nombre = $_SESSION['user'];
  }
  else{
    $nombre = ""; 
  }
  ?>
<!doctype html>
<html lang="en">
<head>
  <title>Base de datos</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    .imgcontainer {
      text-align: center;
    }
  </style>
</head>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
      <a class="nav-item nav-link active" href="#">administrador <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo $url;?>registrationAdministrador.php">Agregar Nutriologos</a>
      <a class="nav-item nav-link" href="<?php echo $url;?>users.php">Ver Nutriologos</a>
      <a class="nav-item nav-link" href="<?php echo $url;?>loginNutriologo.php">cerrar</a>
    </div>
  </nav>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Cambiar Contrasena</h2>
<hr/>

<form action="updateContrasena.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM administrador WHERE nombrePaciente='$nombre'");
	while($row = mysqli_fetch_array($result))
	{
	

    echo"<input type='text' placeholder='Nombre' name='nombrePaciente' value='{$row['nombrePaciente']}' required>";
   
    echo"<input type='text' placeholder='Contrasena' name='contrasena' value='{$row['contrasena']}' required>";
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
  </div>
</form>