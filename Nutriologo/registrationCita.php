<?php
include("session.php");
include("config.php");
$idPaciente = $_GET['idPaciente'];
$nombrePaciente = $_GET['nombrePaciente'];
?>

<!doctype html>
<html lang="en">
<head>  
  <title>Nutriologo</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>

<body>
  <?php
  $url="http://".$_SERVER['HTTP_HOST']."/crud2/";
  
  if (isset($_SESSION['user'])) {
    $nombre = $_SESSION['user'];
  } else {
    $nombre = ""; // Valor predeterminado si la variable de sesión no está definida
  }
  ?>
 
  <nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
      <a class="nav-item nav-link active" href="#">Nutriologo<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo $url; ?>usersNutriologo.php">regresar</a>
      <a class="nav-item nav-link" href="<?php echo $url; ?>logout.php">cerrar</a>
    </div>
  </nav>

  <div class="container">
    <div class="vertical-center">
      <font size="+4">Hola <?php echo $nombre; ?> <b><a href="https://www.youtube.com/watch?v=gpXuEghz1zc">Ingresa al siguiente link</a></b></font>
    </div>
    <br/>
    <div class="row">
      <div class="container">
        <br/>
        <h2>Registrar Citas</h2>
        <hr/>
        <form action="registerCita.php" method="POST">
          <div class="container">
            <?php
            $result = mysqli_query($mysqli, "SELECT * FROM paciente WHERE idPaciente='$idPaciente'");
            while ($row = mysqli_fetch_array($result)) {
              echo "<input type='text' placeholder='Id' name='idPaciente' value='{$row['idPaciente']}' required>";    
            }
            ?>

            <?php
            $result = mysqli_query($mysqli, "SELECT * FROM paciente WHERE nombrePaciente='$nombrePaciente'");
            while ($row = mysqli_fetch_array($result)) {
              echo "<input type='text' placeholder='Nombre' name='nombrePaciente' value='{$row['nombrePaciente']}' required>";    
            }
            ?>

 <input type="text" placeholder="nombre de Nutriologo" name="idNutriologo" value="<?php echo $nombre; ?>" required>
           
<input type="date" placeholder="fecha" name="fecha" required>
<input type="text" placeholder="peso" name="peso" required>

<div class="clearfix">
  <button type="submit" class="signupbtn">Agregar</button>
  <button type="reset" class="cancelbtn">Cancelar</button>
</div>
</div>
</form>
</div>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH8abt0yQ4n7Mwwnz" crossorigin="anonymous"></script>
</body>
</html>


           
