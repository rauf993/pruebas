
<?php
=
include('config.php');
include('barra_lateral.php');


// Verifica si el usuario ha ingresado algun valor
if(isset($_GET['usuario'])){
  $usuario = $_GET['usuario'];

  // Consulta SQL para obtener el ID de la persona que acaba de ingresar
  $query = "SELECT idPaciente FROM paciente WHERE nombrePaciente = '$usuario'";

  // Ejecuta la consulta
  $resultado = mysqli_query($mysqli, $query);

  //
  if($resultado){
    // Obtiene el ID de la persona
    $fila = mysqli_fetch_assoc($resultado);
    $idPersona = $fila['idPaciente'];

    // Realiza cualquier operación adicional con el ID de la persona
    echo "El ID de la persona es: " . $idPersona;

  } else {
    
  }


} else {
 
}
?>







<html>
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
</script>

<body onload="setInterval(verhorafor12, 1000);">
    <div class="ContenedorPrincipal">
        <div>
            <h1><?php echo "Bienvenido: ".$nombre;?></h1>
          
           
            <h3>La hora del sistema es: <span id="hora"></span></h3>
        </div>
    </div>
</body>
</html>
