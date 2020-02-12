<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
    	<?php
		    $usuario    = "root";
		    $pass       = "";
		    $servidor   = "127.0.0.1";
		    $basededatos= "soporte";
		    $conexion = mysqli_connect( $servidor, $usuario, $pass );
		    $db = mysqli_select_db( $conexion, $basededatos );
            
		    $consulta = "SELECT * FROM estaciones WHERE num_estacion = 'Estacion 001'";
            $resultado = mysqli_query($conexion, $consulta);
            while ($fila = mysqli_fetch_array($resultado)) {
                echo '<div class="container-fluid">';
                    echo '<div class="text-center font-weight-bold">Estacion 001</div>';
                    echo "<br>";
                    echo "<br>";
                    echo "<div class='text-center'>".$fila['num_estacion']."</div>";
                    echo "<br>";
                    echo "<div class='text-center'>".$fila['local_host']."</div>";
                    echo "<br>";
                    echo "<div class='text-center'>".$fila['campania']."</div>";
                    echo "<br>";
                    echo "<div class='text-center'>".$fila['teclado']."</div>";
                    echo "<br>";
                    echo "<div class='text-center'>".$fila['mouse']."</div>";
                    echo "<br>";
                    echo "<div class='text-center'>".$fila['diadema']."</div>";
                echo "</div>";
            }           
    	?>       
    </div>
</body>
</html>