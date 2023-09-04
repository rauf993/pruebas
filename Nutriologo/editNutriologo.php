<?php
	include("session.php");
	include("config.php");  
	$idPaciente= $_GET['idPaciente'];
?>

<!DOCTYPE html>
	<html lang="en">
	<!DOCTYPE html>
	<html>
	<head>
	<?php $url="http://".$_SERVER['HTTP_HOST']."/crud2/";?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
		<title>Base de datos</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	
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

	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Actualizar</h2>
<hr/>

<form action="updateNutriologo.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM paciente WHERE idPaciente='$idPaciente'");
	while($row = mysqli_fetch_array($result))
	{
   echo "<input type='text' placeholder='Id' name='idPaciente' value='{$row['idPaciente']}' required>";    
    echo "<input type='text' placeholder='Nombre' name='nombrePaciente' value='{$row['nombrePaciente']}' required>";
    echo "<input type='text' placeholder='Apellido' name='apellidoPaciente' value='{$row['apellidoPaciente']}' required>";
    echo "<input type='text' placeholder='Dirección' name='direccion' value='{$row['direccion']}' required>";
    echo "<input type='text' placeholder='Celular' name='celular' value='{$row['celular']}' required>";
    echo "<input type='text' placeholder='Edad' name='edad' value='{$row['edad']}' required>";
    echo "<input type='text' placeholder='Sexo' name='sexo' value='{$row['sexo']}' required>";
    echo "<input type='text' placeholder='Estado Civil' name='estadoCivil' value='{$row['estadoCivil']}' required>";
    echo "<input type='date' placeholder='Fecha de Nacimiento' name='fechaNacimiento' value='{$row['fechaNacimiento']}' required>";
    echo "<input type='text' placeholder='Escolaridad' name='escolaridad' value='{$row['escolaridad']}' required>";
    echo "<input type='text' placeholder='Ocupación' name='ocupacion' value='{$row['ocupacion']}' required>";
    echo "<input type='text' placeholder='Email' name='email' value='{$row['email']}' required>";
    echo "<input type='password' placeholder='Contraseña' name='contrasena' value='{$row['contrasena']}' required>";
    echo "<input type='text' placeholder='Nutriólogo' name='nutriologo' value='{$row['nutriologo']}' required>";
    echo "<div class='clearfix'>";
    echo "<button type='submit' class='signupbtn'>Actualizar</button>";
    echo "</div>";
	}?>
  </div>
</form>

