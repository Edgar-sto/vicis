<?php 
    require_once '../phpqrcode/qrlib.php';
    $estacion = $_POST['estacion'];
    $usuario    = "root";
    $pass       = "";
    $servidor   = "127.0.0.1";
    $basededatos= "soporte";
    $conexion = mysqli_connect( $servidor, $usuario, $pass );
    $db = mysqli_select_db( $conexion, $basededatos );
    $consulta = "SELECT * FROM estaciones WHERE num_estacion = '$estacion'";
    $resultado = mysqli_query($conexion, $consulta);

    
?>

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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
                    while ($fila = mysqli_fetch_array($resultado)){
                        echo '<table class="table">';
                            echo "<tbody>";
                                echo "<tr class='nom_campo'>";
                                        $num_estacion = $fila['num_estacion'];
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
                                    $local_host = $fila['local_host'];
                                    echo '<td>'.$fila['local_host'].'</td>';
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>Dirección MAC</td>";
                                    $direccion_mac = $fila['mac_address'];
                                    echo '<td>'.$fila['mac_address'].'</td>';

                                echo "<tr>";
                                    echo "<td>Número de serie</td>";
                                    $serieCPU = $fila['serie_cpu'];
                                    echo '<td>'.$fila['serie_cpu'].'</td>';
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>Modelo CPU</td>";
                                    $modeloCPU = $fila['modelo_cpu'];
                                    echo '<td>'.$fila['modelo_cpu'].'</td>';
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>Marca CPU</td>";
                                    $marcaCPU = $fila['marca_cpu'];
                                    echo '<td>'.$fila['marca_cpu'].'</td>';
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>Número de serie monitor</td>";
                                    $serieMONITOR = $fila['serie_monitor'];
                                    echo '<td>'.$fila['serie_monitor'].'</td>';
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>Marca Monitor</td>";
                                    $marcaMONITOR = $fila['marca_monito'];
                                    echo '<td>'.$fila['marca_monito'].'</td>';
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>Campaña</td>";
                                    $campain = $fila['campania'];
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
                
                <div class="result_qr">
                    <!-- Impresión de código QR -->
                    <?php
                        $nombre_de_imagen = $local_host;
                        $content = "$local_host, $direccion_mac, $serieCPU, $modeloCPU, $marcaCPU, $serieMONITOR, $marcaMONITOR";
                        //QRcode::png ($contenido, $archivo, $ecc, $tamaño, $margen)
                        QRcode::png(
                            $content,                                           //CONTENIDO
                            "../img/codigos_qr/".$nombre_de_imagen.".png",      //NOMBRE DEL ARCHIVO
                            QR_ECLEVEL_L,                                       //INDICE DE CORRECION DE ERROREES
                            6,                                                  //TAMAÑO EN PIXELES
                            1,                                                  //TAMAÑO DEL MARGEN
                        );
                    ?>
                    <img src='../img/codigos_qr/<?=$nombre_de_imagen?>.png'>
                </div>
                <br>
            </div>

            <div class="col-4" id="modificar">
                <h1 class="titulo_modificar">Modificar</h1>
                <form class="form" action="modificar.php" method="post" name="generador" id="generador">
                    
                </form>
            </div>
        </div>
        <div class="row">
            

        </div>
    </div>
</body>
</html>