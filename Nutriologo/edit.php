<?php
	include("session.php");
	include("config.php");
	$id = $_GET['id'];
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
	<html lang="en">
	<!DOCTYPE html>
	<html>
	<head>
	<?php $url="http://".$_SERVER['HTTP_HOST']."/crud2/"?>
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

	

<form action="update.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM administrador WHERE id='$id'");
	while($row = mysqli_fetch_array($result))
	{
	
   echo"<input type='text' placeholder='Id' name='id' value='{$row['id']}' required>";    
    echo"<input type='text' placeholder='Nombre' name='nombrePaciente' value='{$row['nombrePaciente']}' required>";
    echo"<input type='text' placeholder='Email' name='email' value='{$row['email']}' required>";
    echo"<input type='text' placeholder='Cedula' name='cedula' value='{$row['cedula']}' required>";
    echo"<input type='text' placeholder='Contrasena' name='contrasena' value='{$row['contrasena']}' required>";
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
  </div>
</form>