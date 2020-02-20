 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Estación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estaciones.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        function abrir(url) {
            open(url,'','top=300,left=300,width=300,height=300') ;
        }
</script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4" id="datos">
                <?php
                    $estacion = $_POST['estacion'];
                    //echo '<h1 id="titulo">'.$estacion.'</h1>';
                    $usuario    = "root";
                    $pass       = "";
                    $servidor   = "127.0.0.1";
                    $basededatos= "soporte";
                    $conexion = mysqli_connect( $servidor, $usuario, $pass );
                    $db = mysqli_select_db( $conexion, $basededatos );
                    $consulta = "SELECT * FROM estaciones WHERE num_estacion = '$estacion'";
                    $resultado = mysqli_query($conexion, $consulta);
                    while ($fila = mysqli_fetch_array($resultado)) {
                        echo '<table class="table">';
                            echo "<tbody>";
                                echo "<tr class='nom_campo'>";
                                        echo '<td id="titulo" scope="row">'.$fila['num_estacion'].'</td>';
                ?>
                                              <td>
                                                <a href="javascript:abrir('modificar.php')">Modificar</a>
                                                <a href="ping.php">Ping</a>
                                              </td>
                <?php
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
                                    echo "<td>Modelo CPU</td>";
                                    echo '<td>'.$fila['modelo_cpu'].'</td>';
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
                                    $color_mouse = $fila['mouse'];
                                    if ($color_mouse == 1) {
                                        echo "<td><i class='material-icons text-success'>mouse</i></td>";
                                    } else {
                                        echo "<td><i class='material-icons text-danger'>mouse</i></td>";
                                    }
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>Teclado</td>";
                                    $color_teclado = $fila['teclado'];
                                    if ($color_teclado == 1) {
                                        echo "<td><i class='material-icons text-success'>keyboard</i></td>";
                                    } else {
                                        echo "<td><i class='material-icons text-danger'>keyboard</i></td>";
                                    }                        
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>Diadema</td>";
                                        $color_diadema = $fila['diadema'];
                                        if ($color_diadema == 1) {
                                            echo "<td><i class='material-icons text-success'>headset_mic</i></td>";
                                        } else {
                                            echo "<td><i class='material-icons text-danger'>headset_mic</i></td>";
                                        }                            
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>Comentario</td>";
                                    echo '<td>'.$fila['comentario'].'</td>';
                                echo "</tr>";
                            echo "</tbody>";
                        echo "</table>";
                    }           
                ?>
            </div>
            <div class="col-6" id="codigo_qr">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quisquam in repellendus fugit doloribus eveniet, minus nostrum officiis fugiat, soluta. Pariatur ab iusto id quod fugit ex nostrum reprehenderit, quo.
                </p>
            </div>
        </div>
    </div>
</body>
</html>