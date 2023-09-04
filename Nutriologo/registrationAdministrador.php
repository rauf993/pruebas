<?php
include("session.php");
?>

<!doctype html>
<html lang="en">
<head>  
  <title>Nutriologo</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
  <style>
    .input-field {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
    }
  </style>
</head>

<body>
  <?php $url="http://".$_SERVER['HTTP_HOST']."/crud2/"?>
    
  <nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
      <a class="nav-item nav-link active" href="#">administrador <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo $url;?>registrationAdministrador.php">Agregar Nutriologos</a>
      <a class="nav-item nav-link" href="<?php echo $url;?>users.php">Ver Nutriologos</a>
      <a class="nav-item nav-link" href="<?php echo $url;?>loginNutriologo.php">cerrar</a>
    </div>
  </nav>

  <div class="container">
    <br/>
    <div class="row">
      <div class="container">
        <br/>
        <h2>Registrar Nutriologos</h2>
        <hr/>
        <form id="id"action="registerAdministrador.php" method="POST">
          <div class="container">
          <label for="nombre"><b>Nombre:<b></label>
            <input type="text" placeholder="Nombre" name="nombrePaciente" class="input-field" required>
            <label for="email">Email:</label>
            <input type="email" placeholder="email" name="email" class="input-field" required>
            <label for="cedula">Cedula:</label>
            <input type="text" placeholder="cedula" name="cedula" class="input-field" required>
            <label for="contrasena">Contraseña:</label>
            <input type="password" placeholder="contrasena" name="contrasena" class="input-field" required>
            <div class="clearfix">
              <button type="submit" class="signupbtn">Registrarse</button>
              
              <button type="reset" class="cancelbtn">Cancelar</button>
            </div>

            <div id="mensajeExito" style="display: none;" class="alert alert-success">
             Tus datos se han guardado con exito :
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>

  
  <script>
        // Cargar datos guardados automaticamente
window.addEventListener('load', function () {
    var formulario = document.getElementById('id');
    formulario.nombrePaciente.value = localStorage.getItem('nombre') || '';
    formulario.email.value = localStorage.getItem('email') || '';
    formulario.cedula.value = localStorage.getItem('cedula') || '';
    formulario.contrasena.value = localStorage.getItem('contrasena') || '';
});

// Autoguardado cada minuto
        setInterval(function () {
            var formulario = document.getElementById('id');
            localStorage.setItem('nombre', formulario.nombrePaciente.value);
            localStorage.setItem('email', formulario.email.value);
            localStorage.setItem('cedula', formulario.cedula.value);
            localStorage.setItem('contrasena', formulario.contrasena.value);
            var mensajeExito = document.getElementById('mensajeExito');
    mensajeExito.style.display = 'block'; // Mostrar el mensaje
    
    // Ocultar el mensaje después de 3 segundos
    setTimeout(function () {
        mensajeExito.style.display = 'none'; // Ocultar el mensaje
    }, 3000); // 3 segundos
            
        }, 10000); 
        document.getElementById('id').addEventListener('submit', function () {
        // Reiniciar los campos
        var formulario = document.getElementById('id');
        localStorage.removeItem('nombre');
        localStorage.removeItem('email');
        localStorage.removeItem('cedula');
        localStorage.removeItem('contrasena');
        formulario.reset();
    });

    </script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH8abt0yQ4n7Mwwnz" crossorigin="anonymous"></script>
</body>
</html>
