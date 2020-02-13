<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/estaciones.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        $usuario    = "root";
        $pass       = "";
        $servidor   = "127.0.0.1";
        $basededatos= "soporte";
        $conexion = mysqli_connect( $servidor, $usuario, $pass );
        $db = mysqli_select_db( $conexion, $basededatos );
        $consulta = "SELECT * FROM estaciones WHERE num_estacion = 'Estacion 002'";
        $resultado = mysqli_query($conexion, $consulta);
        while ($fila = mysqli_fetch_array($resultado)) {
            echo '<div class="container-fluid">';
                echo '<div id="titulo"  class="row">'.$fila['num_estacion'].'</div>';
                    echo "<div class='row text-center'>";
                        echo "<div class='col'>Nombre de la estacion</div>";
                        echo '<div class="col">'.$fila['local_host']."</div>";
                    echo "</div>";

                    echo "<div class='row text-center'>";
                        echo "<div class='col-1'>Número de serie</div>";
                        echo '<div class="col-1">'.$fila['serie_cpu']."</div>";
                    echo "</div>";

                    echo "<div class='row text-center'>";
                        echo "<div class='col'>Marca CPU</div>";
                        echo '<div class="col">'.$fila['marca_cpu']."</div>";
                    echo "</div>";

                    echo "<div class='row text-center'>";
                        echo "<div class='col'>Número de serie monitor</div>";
                        echo '<div class="col">'.$fila['serie_monitor']."</div>";
                    echo "</div>";

                    echo "<div class='row text-center'>";
                        echo "<div class='col'>Marca CPU</div>";
                        echo '<div class="col">'.$fila['marca_monito']."</div>";
                    echo "</div>";

                    echo "<div class='row'>";
                        echo "<div class='col'>Campaña</div>";
                        echo '<div class="col">'.$fila['campania']."</div>";
                    echo "</div>";

                    echo "<div class='row'>";
                        echo "<div class='col'>Mouse";
                            echo "<br>";
                            echo $fila['mouse'];
                            echo "<i class='material-icons'>mouse</i>";
                        echo "</div>";

                        echo "<div class='col'>Teclado";
                            echo "<br>";
                            echo $fila['teclado'];
                            if ($fila == 'S')
                            {
                                echo "<i class='material-icons verde'>keyboard</i>";
                            }
                            //echo "<i class='material-icons'>keyboard</i>";
                        echo "</div>";

                        echo "<div class='col'>Diadema</div>";
                            echo "<br>";
                            echo $fila['diadema'];
                            //echo "<i class='material-icons'>headset_mic</i>";
                        echo "</div>";

                    echo "</div>";
                    echo "<div class='row text-center'>Comentario</div>";
                    echo '<div class="row text-center">'.$fila['comentario']."</div>";
                echo "</div>";
            echo "</div>";
        }           
    ?>
</body>
</html>