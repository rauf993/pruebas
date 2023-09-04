<?php
	include("session.php");
  $url="http://".$_SERVER['HTTP_HOST']."/crud2/";

  // Obtener el valor de la variable de sesión 'user'
  if(isset($_SESSION['user'])){
    $nombre = $_SESSION['user'];
  }
  else{
    $nombre = ""; // Valor predeterminado si la variable de sesión no está definida
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Base de datos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/crud2/";?>
    
  
	<!DOCTYPE html>
	<html lang="en">
	<!DOCTYPE html>
	<html>
	<head>
	<?php $url="http://".$_SERVER['HTTP_HOST']."/crud2/";?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
		<title>Base de datos</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-expand navbar-light bg-light">
			<div class="nav navbar-nav">
				<a class="nav-item nav-link active" href="#">Nutriologo<span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="<?php echo $url;?>registrationNutriologo.php" >Agregar usuarios</a>
				<a class="nav-item nav-link" href="<?php echo $url;?>usersNutriologo.php" >Ver Usuarios</a>
				<a class="nav-item nav-link" href="<?php echo $url;?>usersCita.php" >Ver Citas</a>
				<a class="nav-item nav-link" href="<?php echo $url;?>usersDieta.php" >Ver Dietas</a>
				<a class="nav-item nav-link" href="<?php echo $url;?>loginNutriologo.php">cerrar</a>
			</div>
		</nav>
	
	</body>
	</html>


 <!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>


<div class="container">
	<h2>Registrarse</h2>
	<hr/>
	<form action="register3Nutriologo.php" method="POST">
		<div class="container">
			<label for="nombrePaciente"><b>Nombre:</b></label>
			<input type="text" placeholder="nombrePaciente" name="nombrePaciente" required>

			<label for="apellidoPaciente"><b>Apellido:</b></label>
			<input type="text" placeholder="apellidoPaciente" name="apellidoPaciente" required> 

			<label for="direccion"><b>Dirección:</b></label>
			<input type="text" placeholder="direccion" name="direccion" required> 

			<label for="celular"><b>Celular:</b></label>
			<input type="text" placeholder="celular" name="celular" required> 

			<label for="edad"><b>Edad:</b></label>
			<input type="text" placeholder="edad" name="edad" required> 

			<label for="sexo"><b>Sexo:</b></label>
			<input type="text" placeholder="sexo" name="sexo" required> 

			<label for="estadoCivil"><b>Estado Civil:</b></label>
			<input type="text" placeholder="estadoCivil" name="estadoCivil" required> 

			<label for="fechaNacimiento"><b>Fecha de Nacimiento:</b></label>
			<input type="date" placeholder="fechaNacimiento" name="fechaNacimiento" required> 

			<label for="escolaridad"><b>Escolaridad:</b></label>
			<input type="text" placeholder="escolaridad" name="escolaridad" required> 

			<label for="ocupacion"><b>Ocupación:</b></label>
			<input type="text" placeholder="ocupacion" name="ocupacion" required> 

			<label for="contrasena"><b>Contraseña:</b></label>
			<input type="password" placeholder="contrasena" name="contrasena" minlength="8" required>

			<label for="email"><b>Email:</b></label>
			<input type="email" class="form-control" placeholder="email" name="email" required>
      <label for="email"><b>Nutriologo:</b></label>
			<?php 
				echo"<input type='text' placeholder='nutriologo' name='nutriologo' value='{$nombre}' required>";   
			?>

			<div class="clearfix">
				<button type="submit" class="signupbtn">Registrarse</button>
				<button type="reset" class="cancelbtn">Cancelar</button>
			</div>
		</div>
	</form>
</div>
</body>