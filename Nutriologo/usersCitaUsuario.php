<?php
	include("session.php");
	include("config.php");
	//$idPaciente = $_GET['iPaciente'];
	$url=$url="http://".$_SERVER['HTTP_HOST']."/crud2/";;

  // Obtener el valor de la variable de sesión 'user'
  if(isset($_SESSION['user'])){
    $nombre = $_SESSION['user'];
  }
  else{
    $nombre = ""; // Valor predeterminado si la variable de sesión no está definida
  } 
	
		$query = "SELECT * FROM crearcita where nombrePaciente='$nombre'";
		$result = filterRecord($query);
	
	
	function filterRecord($query)
	{
		include("config.php");
		$filter_result = mysqli_query($mysqli, $query);
		
		// Check for query execution errors
		if (!$filter_result) {
			die("Query execution failed: " . mysqli_error($mysqli));
		}
		
		return $filter_result;
	}
   
?>

<!DOCTYPE html>
<html>
<head>
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
	<?php $url="http://".$_SERVER['HTTP_HOST']."/crud2/"?>
    
	<nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Usuario<span class="sr-only">(current)</span></a>
           
            <a class="nav-item nav-link" href="<?php echo $url;?>home3.php">cerrar</a>
        </div>
    </nav>
   

		<br/>
		<div class="row">
			<div class="container">
				<h2>Citas</h2>
				<hr/>
				
					<?php
			echo "<table border='1'>
      <tr>
        <th>idPaciente</th>
		<th>nombrePaciente</th>
        <th>Nutriologo</th>
        <th>Fecha</th>
        <th>Peso</th>
       
        <th>Imprimir</th>
	
      </tr>";
    
    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . $row['idPaciente'] . "</td>";
	  echo "<td>" . $row['nombrePaciente'] . "</td>";
      echo "<td>" . $row['idNutriologo'] . "</td>";
      echo "<td>" . $row['fecha'] . "</td>";
      echo "<td>" . $row['peso'] . "</td>";
     
      echo "<td><a href='printCita.php?idPaciente=".$row['idPaciente']."'><img src='./images/icons8-Print-32.png' alt='Print'></a></td>";
	  
      echo "</tr>";
    }
    echo "</table>";
    ?>
    </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/NpDh5G9+XnUs4gW+D/K4bP" crossorigin="anonymous"></script>
    
    </body>
    </html>

