<!doctype html>
<html lang="en">
<head>
  <title>Base de datos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    .imgcontainer {
      text-align: center;
    }
  </style>
</head>

<body>
 <?php
 
  $url="http://".$_SERVER['HTTP_HOST']."/crud2/";

  // Obtener el valor de la variable de sesión 'user'
  if(isset($_SESSION['user'])){
    $nombre = $_SESSION['user'];
  }
  else{
    $nombre = ""; // Valor predeterminado si la variable de sesión no está definida
  }
  ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="nav navbar-nav">
    <a class="nav-item nav-link active" href="#">Pagina Principal <span class="sr-only">(current)</span></a>
    <a class="nav-item nav-link" href="<?php echo $url;?>login.php">Acceder usuario</a>
    <a class="nav-item nav-link" href="<?php echo $url;?>loginNutriologo.php">Acceder nutriologo</a>
    
  </div>
</nav>

<div class="container">
  <br/>
  <div class="row">
    <div class="container">
      <div class="vertical-center">
        <h1 class="display-4">¡Bienvenido!</h1>
        <p class="lead">Ingresa al siguiente acerca de recomendaciones de la buena nutricion <a href="https://www.youtube.com/watch?v=ETIwmxTAxB4">link</a></p>
        <hr>
        <h2>Acerca de nuestra plataforma</h2>
        <p>Esta plataforma de base de datos está diseñada para administrar información de pacientes y nutriólogos. Permite registrar y programar citas, así como realizar seguimiento de la información nutricional y de salud de los pacientes.</p>
        <p>Para acceder como usuario, utiliza el enlace "Acceder usuario". Si eres nutriólogo, puedes acceder a través del enlace "Acceder nutriólogos".</p>
        <p>Explora las diferentes funcionalidades de la plataforma y aprovecha al máximo su potencial para mejorar la atención nutricional de tus pacientes.</p>
      </div>
    </div>
  </div>

  <div class="imgcontainer">
    <img src="images/nutricion.png" alt="User" class="user" width="400" height="200">
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7jrw2ym9q0MlSwg8wKQsNek+gNOZwGlNE6GfCq4VBgH2ukd8+" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-1w9A3dXn9wP7F+6+HXWrPs6bbn+a9/4q+g5bsGf+RTE2vEKK+6s1Ld99+s4Svz+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
