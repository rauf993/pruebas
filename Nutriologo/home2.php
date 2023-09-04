<?php
include("config.php");
//include('barra_lateral.php');
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Base de datos</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
</head>

<body>
   
    <?php
  $url="http://".$_SERVER['HTTP_HOST']."/nutricionGNP/";

  if(isset($_SESSION['user'])){
    $nombre = $_SESSION['user'];
  }
  else{
    $nombre = ""; 
  }
  ?>

    <?php $url="http://".$_SERVER['HTTP_HOST']."/crud2/"?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Nutriologo<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url;?>registrationNutriologo.php" >Agregar usuarios</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>usersNutriologo.php" >Ver Usuarios</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>usersCita.php" >Ver Citas</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>cambiarContrasena.php">Cambiar contrasena</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>loginNutriologo.php">cerrar</a>
        </div>
    </nav>
   
            </nav>
            <div class="container">
                <br />

                <div class="row">

                    <div class="container">

                    <div class="vertical-center">
                    
                    </div>
                    
                    </div>

                    

                </div>
                <div class="imgcontainer">
            <img src="images/prueba.png" alt="User" class="user" width="300" height="200">
        </div>
                <?php

                
  
    ?>
</body>

</html>
<html>
<title>Nutricion GNP</title>
<script>
		function verhorafor12() {
			var fecha = new Date();
			var hora = fecha.getHours();
			var minutos = fecha.getMinutes();
			var segundos = fecha.getSeconds();
			var dianoche = "AM";
			if (hora > 12) {
				hora = hora - 12;
				dianoche = "PM";
			}
			if (hora === 0) {
				hora = 12;
			}
			var tothora = hora + ":" + minutos + ":" + segundos + " " + dianoche;
			document.getElementById("hora").innerHTML = tothora;
		}
	</script>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>VaidrollTeam</title>
    <script>
        function verhorafor12() {
            var fecha = new Date();
            var hora = fecha.getHours();
            var minutos = fecha.getMinutes();
            var segundos = fecha.getSeconds();
            var dianoche = "AM";
            if (hora > 12) {
                hora = hora - 12;
                dianoche = "PM";
            }
            if (hora === 0) {
                hora = 12;
            }
            var tothora = hora + ":" + minutos + ":" + segundos + " " + dianoche;
            document.getElementById("hora").innerHTML = tothora;
        }

        setInterval(verhorafor12, 1000); // Actualizar cada segundo
    </script>
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nutricion GNP</title>
    <style>
        #fecha {
            font-size: 24px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hola, bienvenido a Nutricion GNP</h1>
        <h2 id="hora"></h2>
        <?php
            $fecha_actual = date('d/m/Y');
            echo "<h2 id='fecha'>La fecha actual es: " . $fecha_actual . "</h2>";
        ?>
    </div>
</body>

</html>
