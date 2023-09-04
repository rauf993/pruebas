<?php $url = "http://" . $_SERVER['HTTP_HOST'] ."/crud2/"?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link" href="<?php echo $url; ?>principal.php" style="background-color: blue; color: white; padding: 10px 20px; border-radius: 5px;">Regresar</a>
    </div>
</nav>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />

    <style>
        body {
            background-color: #f5f5f5;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-top: 50px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        label input[type="checkbox"] {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <form action="validate.php" method="POST">
        <div class="imgcontainer">
            <img src="images/nutriologo.png" alt="User" class="user" width="300" height="200">
        </div>

        <div class="container">
            <label for="nombrePaciente"><b>Nombre del usuario</b></label>
            <input type="text" placeholder="Ingresar nombre" name="nombrePaciente" required>

            <label for="contrasena"><b>Contraseña</b></label>
            
            <input type="password" placeholder="Ingresar Contraseña" id="contrasena" name="contrasena" required>
            <button type="submit" name="submit">Acceder</button>


            
            <label>
                <input type="checkbox" checked="checked"> Recordarme
            </label>

            <label>

            
                <input type="checkbox" onclick="verpassword()">Mostrar contraseña
            </label>
        </div>
    </form>

    <script>
        function verpassword() {
            var tipo = document.getElementById("contrasena");
if (tipo.type === "password") {
tipo.type = "text";
} else {
tipo.type = "password";
}
}
</script>

</body>
</html>
