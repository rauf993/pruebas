
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Registrarse</h2>
<hr/>
<form action="register2.php" method="POST">
  <div class="container">
    <input type="text" placeholder="Nombre" name="nombre" required>
    <input type="text" placeholder="email" name="email" required>
    <input type="text" placeholder="cedula" name="cedula" required>
    <input type="password" placeholder="Nueva Contraseña" name="contrasena" required>
    <input type="password" placeholder="Repetir Contraseña" name="psw-repeat" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Registrarse</button>
	  <button type="reset" class="cancelbtn">Cancelar</button>
    </div>
    <div>
        <a href="login.php"class="Regresar">Regresar</a>
        </div>
  </div>
</form>


