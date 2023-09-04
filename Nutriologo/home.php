<?php
include("config.php");
session_start(); // Iniciar la sesión
?>

<!doctype html>
<html lang="en">
<head>
  <title>Base de datos</title>
  
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

  $nombre = isset($_SESSION['user']) ? $_SESSION['user'] : ""; // Valor predeterminado si la variable 
  ?>

  <nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
      <a class="nav-item nav-link active" href="#">Administrador <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo $url; ?>registrationAdministrador.php">Agregar Nutriologos</a>
      <a class="nav-item nav-link" href="<?php echo $url; ?>users.php">Ver Nutriologos</a>
      <a class="nav-item nav-link" href="<?php echo $url; ?>loginNutriologo.php">Cerrar</a>
    </div>
  </nav>

  <div class="container">
    <br/>
    <div class="row">
      <div class="container">
        <div class="vertical-center">
          <font size="+4">Hola <?php echo $nombre; ?> <b></a></b></font>
        </div>
      </div>
    </div>

    <div class="imgcontainer">
      <img src="images/nutricion.png" alt="User" class="user" width="400" height="200">
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH8abt0yQ4n7Mwwnz" crossorigin="anonymous"></script>
</body>
</html>

<html>
<head>
  <title>Imágenes Cambiantes</title>
  <style>
    #imagen-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .imagen {
      width: 400px; /* Ajusta el ancho deseado */
      height: 300px; /* Ajusta la altura deseada */
      object-fit: contain;
    }
    .flecha {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 3rem;
      color: #000;
      cursor: pointer;
    }
    .flecha-izquierda {
      left: 20px;
    }
    .flecha-derecha {
      right: 20px;
    }
  </style>
  <script>
    // Array con las rutas de las imágenes
    var imagenes = ["images/nutricion.png", "images/nutriologo.png", "images/nutricion.png"];
    var index = 0;

    function cambiarImagen(direccion) {
      if (direccion === "izquierda") {
        index = (index - 1 + imagenes.length) % imagenes.length; // Retroceder al índice anterior circularmente
      } else {
        index = (index + 1) % imagenes.length; // Avanzar al siguiente índice circularmente
      }

      var imgElement = document.getElementById("imagen");
      imgElement.src = imagenes[index];
    }
  </script>
</head>
<body>
  <div id="imagen-container">
    <img id="imagen" src="images/nutriologo.png" alt="Imagen Cambiante" class="imagen">
    <div class="flecha flecha-izquierda" onclick="cambiarImagen('izquierda')">&lt;</div>
    <div class="flecha flecha-derecha" onclick="cambiarImagen('derecha')">&gt;</div>

  </div>
</body>
</html>