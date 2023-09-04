<?php
	include("session.php");
	include("config.php");
	$idPaciente = $_GET['idPaciente'];
?>
<!DOCTYPE html>
<html lang="en">
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

	<h2>Actualizar Cita</h2>
	<hr/>

	<form action="updateCita.php" method="POST">
		<div class="container">
		<?php
			$result = mysqli_query($mysqli,"SELECT * FROM crearcita WHERE idPaciente='$idPaciente'");
			while($row = mysqli_fetch_array($result))
			{
				echo "<input type='text' placeholder='nombrePaciente' name='nombrePaciente' value='{$row['nombrePaciente']}' required>";    
				echo "<input type='text' placeholder=idPaciente' name='idPaciente' value='{$row['idPaciente']}' required>";
				echo "<input type='text' placeholder='idNutriologo' name='idNutriologo' value='{$row['idNutriologo']}' required>";
				echo "<input type='date' placeholder='fecha' name='fecha' value='{$row['fecha']}' required>";
				echo "<input type='text' placeholder='peso' name='peso' value='{$row['peso']}' required>";
				echo "<div class='clearfix'>";
				echo "<button type='submit' class='signupbtn'>Actualizar</button>";
				echo "</div>";
				break; // Detener el bucle después de mostrar los datos del primer registro
			}
		?>
		</div>
	</form>

</body>
</html>
