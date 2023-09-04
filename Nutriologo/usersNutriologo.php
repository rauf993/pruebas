
	<?php
		include("session.php");
		include("config.php");
		$url="http://".$_SERVER['HTTP_HOST']."/crud2/";


	if(isset($_SESSION['user'])){
		$nombre = $_SESSION['user'];
	}
	else{
		$nombre = ""; 
	}
		if(isset($_POST['search']))
		{
			$valueToSearh = $_POST['valueToSearh']; 
			$query = "SELECT * FROM paciente WHERE nombrePaciente LIKE '%".$valueToSearh."%' OR nutriologo   LIKE '%".$valueToSearh."%'";
			$result = filterRecord($query);
		}
		else
		{
			
			$query = "SELECT * FROM paciente WHERE nutriologo = '$nombre'";
			$result = filterRecord($query);


		
		}
		
		
		function filterRecord($query)
		{
			include("config.php");
			$filter_result = mysqli_query($mysqli, $query);
			return $filter_result;
		}
	?>

	<!DOCTYPE html>
	<html lang="en">
	<!DOCTYPE html>
	<html>
	<head>
	<?php $url="http://".$_SERVER['HTTP_HOST']."/crud2/"?>
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

	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h2><h2><h2><h2><h2><h2>Usuarios Agregados <h2><h2><h2><h2></h2>
	<hr/>

	<div class="container">

	<form action="" method="POST">
	<input type="search" name="valueToSearh" placeholder="Búsqueda">
	<button type="submit" class="signupbtn" name="search" >Buscar</button>
	</form>
	<br />
	<?php
echo "<table border='1' style='float: left;'>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Direccion</th>
<th>Celular</th>
<th>Edad</th>
<th>Sexo</th>
<th>Estado Civil</th>
<th>Fecha Nacimiento</th>
<th>Escolaridad</th>
<th>Ocupacion</th>
<th>Email</th>
<th>Nutriologo</th>
<th>Actualizar</th>
<th>Eliminar</th>
<th>Imprimir</th>
<th>Cita</th>
<th>Dieta</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['idPaciente'] . "</td>";
echo "<td>" . $row['nombrePaciente'] . "</td>";
echo "<td>" . $row['apellidoPaciente'] . "</td>";
echo "<td>" . $row['direccion'] . "</td>";
echo "<td>" . $row['celular'] . "</td>";
echo "<td>" . $row['edad'] . "</td>";
echo "<td>" . $row['sexo'] . "</td>";
echo "<td>" . $row['estadoCivil'] . "</td>";
echo "<td>" . $row['fechaNacimiento'] . "</td>";
echo "<td>" . $row['escolaridad'] . "</td>";
echo "<td>" . $row['ocupacion'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['nutriologo'] . "</td>";

echo "<td><a href='editNutriologo.php?idPaciente=".$row['idPaciente']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
echo "<td><a href='deleteNutriologo.php?idPaciente=".$row['idPaciente']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
echo "<td><a href='printNutriologo.php?idPaciente=".$row['idPaciente']."'><img src='./images/icons8-Print-32.png' alt='Print'></a></td>";
echo "<td><a href='registrationCita.php?idPaciente=" . $row['idPaciente'] . "&nombrePaciente=" . $row['nombrePaciente'] . "'><img src='./images/icons8-calendario-30.png' alt='Print'></a></td>";

echo "<td><a href='registrationDieta.php?idPaciente=" . $row['idPaciente'] . "&nombrePaciente=" . $row['nombrePaciente'] . "'><img src='./images/icons8-dieta-48.png' alt='Print'></a></td>";
echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
