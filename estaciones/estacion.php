 <!DOCTYPE html>
<html lang="es">
<head>
    <title>Estación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estaciones.css">
    <!-- Tipografias -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="script/ajax_generate_code.js"></script><!-- llama archivo generador del codigo QR -->
    <script>//Script para abrir ventana de tamaño asignado.
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
                                        echo '<td class="titulo" scope="row">'.$fila['num_estacion'].'</td>';
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
            
            <div class="col-2" id="codigo_qr">
                <h1 class="titulo_codigo_qr">Código QR</h1>
                <div class="showQRCode">
                    <!-- Impresión de código QR -->
                </div>
                <br>
                    <form class="form" method="post" id="codeForm" onsubmit="return false">
                        <div class="form-group">
                            <label class="control-label">Información : </label>
                            <input class="form-control form-control-sm" id="content" type="text" required="required">
                            
                            <label class="control-label">Nivel del código (ECC) : </label>
                            <select class="form-control form-control-sm" id="ecc">
                                <option value="H">H - Mejor</option>
                                <option value="M">Me - Media</option>
                                <option value="Q">B - baja</option>
                                <option value="L">P - Peor</option>                         
                            </select>
                        
                            <label class="control-label">Tamaño : </label>
                            <input type="number" min="1" max="10" step="1" class="form-control form-control-sm" id="size" value="5">
                            <br>
                            <label class="control-label"></label>
                            <input type="submit" name="submit" id="submit" class="btn_codigo_qr btn btn-success" value="Generar código QR">
                        </div>
                    </form>
            </div>

            <div class="col-4" id="modificar">
                <h1 class="titulo_modificar">Modificar</h1>
                <form action="">
                    
                </form>
            </div>
        </div>
        <div class="row">
            

        </div>
    </div>
</body>
</html>