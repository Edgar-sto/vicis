<?php  
    require_once '../phpqrcode/qrlib.php';
    $estacion = $_POST['estacion'];
    $cpus        =   $_POST['uniqueid'];
    $usuario    = "root";
    $pass       = "";
    $servidor   = "127.0.0.1";
    $basededatos= "soporte";
    $conexion = mysqli_connect( $servidor, $usuario, $pass );
    $db = mysqli_select_db( $conexion, $basededatos );
    echo "$estacion";
    echo "$cpus";
    $consulta       =   "SELECT * FROM estaciones WHERE num_estacion = '$estacion'";
    $consulta_cpu   =   "SELECT * FROM cpu WHERE uniqueid = '260'";

    $resultado_cpu  =   mysqli_query($conexion, $consulta_cpu);
    $resultado      =   mysqli_query($conexion, $consulta); 
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
    <link rel="shortcut icon" href="../img/favicon.ico" />
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
            <div class="col-3" id="datos">
                <?php 
                while ($fila_cpu = mysqli_fetch_array($resultado_cpu)){
                    echo '<table class="table">';
                        echo "<tbody>";
                            echo "<tr class='nom_campo'>";
                                $uniqueid = $fila_cpu['uniqueid'];
                                echo "<td class='titulo'>ID</td>";
                                echo '<td class="titulo" scope="row">'.$fila_cpu['uniqueid'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $marcaCPU = $fila_cpu['marca_cpu'];
                                echo "<td>Marca CPU</td>";
                                echo '<td>'.$fila_cpu['marca_cpu'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $serieCPU = $fila_cpu['serie_cpu'];
                                echo '<td>Número de Serie</td>';
                                echo '<td>'.$fila_cpu['serie_cpu'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $modeloCPU = $fila_cpu['modelo_cpu'];
                                echo '<td>Modelo CPU</td>';
                                echo '<td>'.$fila_cpu['modelo_cpu'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $mac_address = $fila_cpu['mac_address'];
                                echo '<td>Dirección MAC</td>';
                                echo '<td>'.$fila_cpu['mac_address'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $ubicacion = $fila_cpu['ubicacion'];
                                echo "<td>Ubicacion</td>";
                                echo '<td>'.$fila_cpu['ubicacion'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $area = $fila_cpu['area'];
                                echo '<td>Área</td>';
                                echo '<td>'.$fila_cpu['area'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $comentario = $fila_cpu['comentario'];
                                echo '<td>Comentario</td>';
                                echo '<td>'.$fila_cpu['comentario'].'</td>';
                            echo "</tr>";
                        echo "</tbody>";
                    echo "</table>";
                }
                ?>
            </div>
            
            <div class="col-3" id="codigo_qr">
                <h1 class="titulo_codigo_qr">Código QR</h1>
                
                <div class="result_qr">
                    <!-- Impresión de código QR -->
                    <?php
                        $nombre_de_imagen = $uniqueid;
                        $content = "$uniqueid, $marcaCPU, $serieCPU, $modeloCPU, $mac_address, $ubicacion, $area, $comentario";
                        //QRcode::png ($contenido, $archivo, $ecc, $tamaño, $margen)
                        QRcode::png(
                            $content,                                           //CONTENIDO
                            "../img/codigos_qr/cpu/".$nombre_de_imagen.".png",      //NOMBRE DEL ARCHIVO
                            QR_ECLEVEL_L,                                       //INDICE DE CORRECION DE ERROREES
                            6,                                                  //TAMAÑO EN PIXELES
                            1,                                                  //TAMAÑO DEL MARGEN
                        );
                    ?>
                    <img src='../img/codigos_qr/cpu/<?=$nombre_de_imagen?>.png'>
                </div>
                <br>
            </div>

            <div class="col-3" id="modificar">
                <h1 class="titulo_modificar">Modificar</h1>
                <?php 
                while ($fila_cpu = mysqli_fetch_array($resultado_cpu)){
                    echo '<table class="table">';
                        echo "<tbody>";
                            echo "<tr class='nom_campo'>";
                                $uniqueid = $fila_cpu['uniqueid'];
                                echo "<td class='titulo'>ID</td>";
                                echo '<td class="titulo" scope="row">'.$fila_cpu['uniqueid'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $marcaCPU = $fila_cpu['marca_cpu'];
                                echo "<td>Marca CPU</td>";
                                echo '<td>'.$fila_cpu['marca_cpu'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $serieCPU = $fila_cpu['serie_cpu'];
                                echo '<td>Número de Serie</td>';
                                echo '<td>'.$fila_cpu['serie_cpu'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $modeloCPU = $fila_cpu['modelo_cpu'];
                                echo '<td>Modelo CPU</td>';
                                echo '<td>'.$fila_cpu['modelo_cpu'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $mac_address = $fila_cpu['mac_address'];
                                echo '<td>Dirección MAC</td>';
                                echo '<td>'.$fila_cpu['mac_address'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $ubicacion = $fila_cpu['ubicacion'];
                                echo "<td>Ubicacion</td>";
                                echo '<td>'.$fila_cpu['ubicacion'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $area = $fila_cpu['area'];
                                echo '<td>Área</td>';
                                echo '<td>'.$fila_cpu['area'].'</td>';
                            echo "</tr>";

                            echo "<tr>";
                                $comentario = $fila_cpu['comentario'];
                                echo '<td>Comentario</td>';
                                echo '<td>'.$fila_cpu['comentario'].'</td>';
                            echo "</tr>";
                        echo "</tbody>";
                    echo "</table>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            

        </div>
    </div>
</body>
</html>