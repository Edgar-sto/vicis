<!DOCTYPE html>
<html lang="es">
<head>
    <title>Estación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/activos_fijos.css"">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Tipografias -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>//Script para abrir ventana de tamaño asignado.
        function generar_QR(url) {
            open(url,'','top=300,left=300,width=300,height=300') ;
        }
    </script>
</head>

<body>
    <?php
        require 'estaciones/conexion.php';
        $conectar       =   mysqli_connect($servidor, $usuario, $pass, $basededatos);
        //querys
        $consulta_cpu_operacion     =   "SELECT COUNT(*) ubicacion FROM cpu WHERE ubicacion != 'Almacen'";
        $consulta_cpu_almacen       =   "SELECT COUNT(*) ubicacion FROM cpu WHERE ubicacion = 'Almacen'";

        $consulta_monitor_operacion =   "SELECT COUNT(*) ubicacion FROM monitor WHERE ubicacion !='Almacen' ";
        $consulta_monitor_almacen   =   "SELECT COUNT(*) ubicacion FROM monitor WHERE ubicacion ='Almacen' ";

        $consulta_diadema_operacion =   "SELECT COUNT(*) ubicacion FROM diademas WHERE ubicacion != 'Almacen'";
        $consulta_diadema_almacen   =   "SELECT COUNT(*) ubicacion FROM diademas WHERE ubicacion = 'Almacen'";

        $consulta_mouse_operaciones =   "SELECT COUNT(*) ubicacion FROM mouse WHERE ubicacion != 'Almacen'";
        $consulta_mouse_almacen     =   "SELECT COUNT(*) ubicacion FROM mouse WHERE ubicacion = 'Almacen'";

        $consulta_teclado_operaciones =   "SELECT COUNT(*) ubicacion FROM teclados WHERE ubicacion != 'Almacen'";
        $consulta_teclado_almacen     =   "SELECT COUNT(*) ubicacion FROM teclados WHERE ubicacion = 'Almacen'";

        
        //conexion y ejecucion de querys
        $resul              =   mysqli_query($conectar, $consulta_cpu_operacion);
        $resul2             =   mysqli_query($conectar, $consulta_cpu_almacen);

        $resul_monitor      =   mysqli_query($conectar, $consulta_monitor_operacion);
        $resul_monitor2     =   mysqli_query($conectar, $consulta_monitor_almacen);

        $resul_diadema      =   mysqli_query($conectar, $consulta_diadema_operacion);
        $resul_diadema2     =   mysqli_query($conectar, $consulta_diadema_almacen);

        $resul_mouse        =   mysqli_query($conectar, $consulta_mouse_operaciones);
        $resul_mouse2       =   mysqli_query($conectar, $consulta_mouse_almacen);

        $resul_teclado        =   mysqli_query($conectar, $consulta_teclado_operaciones);
        $resul_teclado2       =   mysqli_query($conectar, $consulta_teclado_almacen);

        
        //resultados
        $fila   =   mysqli_fetch_assoc($resul);
        $fila2  =   mysqli_fetch_assoc($resul2);

        $fila3  =   mysqli_fetch_assoc($resul_monitor);
        $fila4  =   mysqli_fetch_assoc($resul_monitor2);

        $fila5  =   mysqli_fetch_assoc($resul_diadema);
        $fila6  =   mysqli_fetch_assoc($resul_diadema2);

        $fila7  =   mysqli_fetch_assoc($resul_mouse);
        $fila8  =   mysqli_fetch_assoc($resul_mouse2);

        $fila9  =   mysqli_fetch_assoc($resul_teclado);
        $fila10  =   mysqli_fetch_assoc($resul_teclado2);

        

                
    ?>
    <h1>Activos fijos</h1>
    <br>
    <div class="container-fluid">
        <div class="col datos_generales">
            <table class="table table-striped table-dark table-hover" id="cpu-id">
                <thead class="cabecera_tabla">
                    <tr>
                        <th>PISO</th>
                        <th>ALMACÉN</th>
                        <th>PISO</th>
                        <th>ALMACÉN</th>
                        <th>PISO</th>
                        <th>ALMACÉN</th>
                        <th>PISO</th>
                        <th>ALMACÉN</th>
                        <th>PISO</th>
                        <th>ALMACÉN</th>
                    </tr>
                </thead>
                <tbody class="cuerpo_tabla">
                    <?php
                        
                        echo "<tr>";
                            echo "<td colspan='2' class='texto'>CPU</td>";
                            echo '<td colspan="2" class="texto">Monitor</td>';
                            echo '<td colspan="2" class="texto">Diadema</td>';
                            echo '<td colspan="2" class="texto">Mouse</td>';
                            echo '<td colspan="2" class="texto">Teclado</td>';
                        echo "</tr>";
                        echo "<tr>";
                            //Sección conteo CPU
                            echo "<td class='texto'><i class='material-icons'>smartphone</i><br>".$fila['ubicacion']."</td>";
                            echo "<td class='texto'><i class='material-icons'>smartphone</i><br>".$fila2['ubicacion']."</td>";
                            //Sección conteo Monitor
                            echo "<td class='texto'><i class='material-icons'>desktop_windows</i><br>".$fila3['ubicacion']."</td>";
                            echo "<td class='texto'><i class='material-icons'>desktop_windows</i><br>".$fila4['ubicacion']."</td>";
                            //Sección conteo diadema
                            echo "<td class='texto'><i class='material-icons'>headset_mic</i><br>".$fila5['ubicacion']."</td>";
                            echo "<td class='texto'><i class='material-icons'>headset_mic</i><br>".$fila6['ubicacion']."</td>";
                            //Sección conteo mouse
                            echo "<td class='texto'><i class='material-icons'>mouse</i><br>".$fila7['ubicacion']."</td>";
                            echo "<td class='texto'><i class='material-icons'>mouse</i><br>".$fila8['ubicacion']."</td>";
                            //Sección conteo teclado
                            echo "<td class='texto'><i class='material-icons'>keyboard</i><br>".$fila9['ubicacion']."</td>";
                            echo "<td class='texto'><i class='material-icons'>keyboard</i><br>".$fila10['ubicacion']."</td>";
                        echo "</tr>";
                    ?>
                </tbody>
            </table>
        </div>

        <div class="todo">
            <table class="table table-striped table-dark table-hover" id="cpu-id">
                <thead class="cabecera_tabla">
                    <tr>
                        <th>MARCA</th>
                        <th>Serie</th>
                        <th>Modelo</th>
                        <th>Direccion MAC</th>
                        <th>Ubicación</th>
                        <th>Área</th>
                        <th>Comentario</th>
                    </tr>
                </thead>
                <tbody class="cuerpo_tabla">
                    <?php
                        $consulta_general_cpu       =   "SELECT * FROM cpu";
                        $res_consulta_general_cpu   =   mysqli_query($conectar, $consulta_general_cpu);
                        
                        $contador=1;
                        
                        while( $fila_general   =   mysqli_fetch_assoc($res_consulta_general_cpu)) {
                echo "<tr>";
                echo "
                    <td id='user_".$contador."'>".$fila_general['marca_cpu']."</td>
                    <td>".$fila_general['serie_cpu']."</td>
                    <td>".$fila_general['modelo_cpu']."</td>
                    <td>".$fila_general['mac_address']."</td>
                    <td>".$fila_general['ubicacion']."</td>
                    <td>".$fila_general['area']."</td>
                    <td>".$fila_general['comentario']."</td>";                    
                echo"</tr>";
            }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<!--li>
<a href="javascript:generar_QR('activos_fijos/generarQR.php')">Eliminar</a>
</li-->

</div>
</body>
</html>