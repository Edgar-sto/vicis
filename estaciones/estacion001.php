 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada&display=swap" rel="stylesheet">
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
        $consulta = "SELECT * FROM estaciones WHERE num_estacion = 'Estacion 001'";
        $resultado = mysqli_query($conexion, $consulta);
        while ($fila = mysqli_fetch_array($resultado)) {
            echo '<table class="table table-dark">';
                echo "<tbody>";
                    echo "<tr class='nom_campo'>";
                            echo '<td id="titulo" scope="2 row">'.$fila['num_estacion'].'</td>';
                    echo "</tr>";
                
                    echo "<tr>";
                        echo "<td>Nombre de la estacion</td>";
                        echo '<td>'.$fila['local_host'].'</td>';
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Número de serie</td>";
                        echo '<td>'.$fila['serie_cpu'].'</td>';
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Marca CPU</td>";
                        echo '<td>'.$fila['marca_cpu'].'</td>';
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Número de serie monitor</td>";
                        echo '<td>'.$fila['serie_monitor'].'</td>';
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Marca Monitor</td>";
                        echo '<td>'.$fila['marca_monito'].'</td>';
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Campaña</td>";
                        echo '<td>'.$fila['campania'].'</td>';
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Mouse</td>";
                        //echo $fila['mouse'];
                        echo "<td><i class='material-icons'>mouse</i></td>";   
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Teclado</td>";
                        //echo $fila['teclado'];
                        echo "<td><i class='material-icons'>keyboard</i></td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Diadema</td>";
                            //echo $fila['diadema'];
                            echo "<td><i class='material-icons'>headset_mic</i></td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo "<td>Comentario</td>";
                        echo '<td>'.$fila['comentario'].'</td>';
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
        }           
    ?>
</body>
</html>