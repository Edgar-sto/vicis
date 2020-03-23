<!DOCTYPE html>
<html lang="es">
<head>
    <title>Panel Edgar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- ESTILOS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="shortcut icon" href="img/favicon1.ico" />
    <!-- Fuentes de iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>//Script para abrir ventana agregar y modificar de tamaño asignado.
        function abrir(url) {
            open(url,'','top=300,left=300,width=280,height=550') ;
        }
    </script>
    <script>//Script para abrir ventana eliminar de tamaño asignado.
        function cerrar(url) {
            open(url,'','top=300,left=300,width=280,height=200') ;
        }
    </script>
    <script>//Script para abrir ventana modificar de tamaño asignado.
        function modificar(url) {
            open(url,'','top=300,left=300,width=280,height=200') ;
        }
    </script>
    <script>//Script para abrir ventana agregar cpu de tamaño asignado.
        function agregarCPU(url) {
            open(url,'','top=300,left=300,width=280,height=370') ;
        }
    </script>
    <script>//Script para abrir ventana agregar monitor de tamaño asignado.
        function agregarMONITOR(url) {
            open(url,'','top=300,left=300,width=280,height=330') ;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#hide").on('click', function() {
                $("#element").hide();
                return false;
            });
         
            $("#show").on('click', function() {
                $("#element").show();
                return false;
            });
        });

        $(document).ready(function(){
            $("#hide1").on('click', function() {
                $("#element1").hide();
                return false;
            });
         
            $("#show1").on('click', function() {
                $("#element1").show();
                return false;
            });
        });

        $(document).ready(function(){
            $("#hide2").on('click', function() {
                $("#element2").hide();
                return false;
            });
         
            $("#show2").on('click', function() {
                $("#element2").show();
                return false;
            });
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <img class=".img-fluid" src="img/vicidial_admin_web_logo.png">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/vicis/panelvicis/panel_vicis.php" target="_blank">VICIdial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/Crear_Usuarios_vici/index.php" target="_blank">Usuarios Vici</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" target="_blank" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    <span class="nav-label">Telefonía</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="http://127.0.0.1/vicis/factura/datos_factura.php" target="_blank">Datos Telefonía</a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/facturacion/index.php" target="_blank">Factura</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown"><!-- Inicio de cambios en nav-->
                <a class="nav-link dropdown-toggle" href="" target="_blank" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    <span class="nav-label">Estaciones</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="javascript:abrir('estaciones/agregar.html')">Agregar estación</a>
                    </li>
                    <li>
                        <a href="javascript:agregarCPU('estaciones/agregar_cpu.html')">Agregar CPU</a>
                    </li>
                    <li>
                        <a href="javascript:agregarMONITOR('estaciones/agregar_monitor.html')">Agregar Monitor</a>
                    </li>
                    <li><!--Elemento dehabilitado-->
                        <a class="dropdown-item disabled" href="javascript:modificar('estaciones/modificar.php')">Modificar</a>
                    </li>
                    <li>
                        <a href="javascript:cerrar('estaciones/eliminar.html')">Eliminar</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/facturacion/index.php" target="_blank">Facturación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/vicis/correos/correos.HTML" target="_blank">Correos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/vicis/activos_fijos/activos_fijos.php" target="_blank">Activos Fijos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/vicis/indexprueba.php" target="_blank">Pruebas</a>
            </li>
        </ul>
    </nav> 
    <br>
    <div class="container-fluid">
        <?php
        require 'estaciones/conexion.php';
        $conectar       =   mysqli_connect($servidor, $usuario, $pass, $basededatos);
        //querys
        $consulta_cpu_operacion     =   "SELECT COUNT(*) ubicacion FROM cpu_oficial WHERE ubicacion != 'Almacen'";
        $consulta_cpu_almacen       =   "SELECT COUNT(*) ubicacion FROM cpu_oficial WHERE ubicacion = 'Almacen'";

        $consulta_monitor_operacion =   "SELECT COUNT(*) ubicacion FROM monitor_oficial WHERE ubicacion !='Almacen' ";
        $consulta_monitor_almacen   =   "SELECT COUNT(*) ubicacion FROM monitor_oficial WHERE ubicacion ='Almacen' ";

        $consulta_diadema_operacion =   "SELECT * FROM diadema_oficial";
        $consulta_diadema_almacen   =   "SELECT * FROM diadema_oficial";

        $consulta_mouse_operaciones =   "SELECT * FROM mouse";
        $consulta_mouse_almacen     =   "SELECT * FROM mouse";

        $consulta_teclado_operaciones =   "SELECT * FROM teclados";
        $consulta_teclado_almacen     =   "SELECT * FROM teclados";

        
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
        <section class="row datos_generales" id="stock">
            <table class="table">
                <thead class="cabecera_tabla">
                    <tr>
                        <th class="cabecera_tabla">PISO</th>
                        <th class="cabecera_tabla">ALMACÉN</th>
                        <th class="cabecera_tabla">PISO</th>
                        <th class="cabecera_tabla">ALMACÉN</th>
                        <th class="cabecera_tabla">PISO</th>
                        <th class="cabecera_tabla">ALMACÉN</th>
                        <th class="cabecera_tabla">PISO</th>
                        <th class="cabecera_tabla">ALMACÉN</th>
                        <th class="cabecera_tabla">PISO</th>
                        <th class="cabecera_tabla">ALMACÉN</th>
                    </tr>
                </thead>
                <tbody class="cuerpo_tabla">
                    <tr>
                            <td colspan="2" class="datos_base">
                                <p class="parrafo_enlaces">
                                    <a href="#" id="show"><!--span class="material-icons">remove_red_eye</span-->CPU</a>
                                </p>
                            </td>
                            <td colspan="2" class="datos_base">
                                <p class="parrafo_enlaces">
                                    <a href="#" id="show1"><!--span class="material-icons">remove_red_eye</span-->Monitor</a>
                                </p>
                            </td>
                            <td colspan="2" class="datos_base">
                                <p class="parrafo_enlaces">
                                    <a href="#" id="show2"><!--span class="material-icons">remove_red_eye</span-->Diademas</a>
                                </p>
                            </td>
                            <td colspan="2" class="datos_base">
                                <p class="parrafo_enlaces">
                                    Mouse
                                </p>
                            </td>
                            <td colspan="2" class="datos_base">
                                <p class="parrafo_enlaces">
                                    Teclado
                                </p>
                            </td>
                    <?php
                        echo "<tr>";
                            //Sección conteo CPU
                            echo "<td class='texto'><i class='material-icons'>smartphone</i><br>".$fila['ubicacion']."</td>";
                            echo "<td class='texto'><i class='material-icons'>smartphone</i><br>".$fila2['ubicacion']."</td>";
                            //Sección conteo Monitor
                            echo "<td class='texto'><i class='material-icons'>desktop_windows</i><br>".$fila3['ubicacion']."</td>";
                            echo "<td class='texto'><i class='material-icons'>desktop_windows</i><br>".$fila4['ubicacion']."</td>";
                            //Sección conteo diadema
                            echo "<td class='texto'><i class='material-icons'>headset_mic</i><br>".$fila5['piso']."</td>";
                            echo "<td class='texto'><i class='material-icons'>headset_mic</i><br>".$fila6['almacen']."</td>";
                            //Sección conteo mouse
                            echo "<td class='texto'><i class='material-icons'>mouse</i><br>".$fila7['piso']."</td>";
                            echo "<td class='texto'><i class='material-icons'>mouse</i><br>".$fila8['almacen']."</td>";
                            //Sección conteo teclado
                            echo "<td class='texto'><i class='material-icons'>keyboard</i><br>".$fila9['piso']."</td>";
                            echo "<td class='texto'><i class='material-icons'>keyboard</i><br>".$fila10['almacen']."</td>";
                        echo "</tr>";
                    ?>
                </tbody>
            </table>
        </section>
        <section class="container datos_generales" id="element" style="display: none;">
            <div id="close" class="row">
                <h2 id="cpu-id" class="col">CPU</h2>
                <a class="btn btn-small col" href="#" id="hide" title="Cerrar">
                    <span class="material-icons">visibility_off</span>
                </a>
            </div>
            <table class="table table-dark table-hover" >
                <thead class="cabecera_tabla">
                    <tr>
                        <th class="cabecera_tabla1">MARCA</th>
                        <th class="cabecera_tabla1">Serie</th>
                        <th class="cabecera_tabla1">Modelo</th>
                        <th class="cabecera_tabla1">Direccion MAC</th>
                        <th class="cabecera_tabla1">Ubicación</th>
                        <th class="cabecera_tabla1">Área</th>
                        <th class="cabecera_tabla1">Comentario</th>
                    </tr>
                </thead>
                <tbody class="cuerpo_tabla">
                    <?php
                        $consulta_general_cpu       =   "SELECT * FROM cpu_oficial";
                        $res_consulta_general_cpu   =   mysqli_query($conectar, $consulta_general_cpu);
                        $contador=1;
                        
                        while( $fila_general   =   mysqli_fetch_assoc($res_consulta_general_cpu)) {
                echo "<tr>";
                echo "
                    <td class='texto1'>".$fila_general['marca_cpu']."</td>
                    <td class='texto1'>".$fila_general['serie_cpu']."</td>
                    <td class='texto1'>".$fila_general['modelo_cpu']."</td>
                    <td class='texto1'>".$fila_general['mac_address']."</td>
                    <td class='texto1'>".$fila_general['ubicacion']."</td>
                    <td class='texto1'>".$fila_general['area']."</td>
                    <td class='texto1'>".$fila_general['comentario']."</td>";                 
                echo"</tr>";
            }
                    ?>
                </tbody>
            </table>
        </section>
        <section class="container datos_generales" id="element1" style="display: none;">
            <div id="close1" class="row">
                <h2 id="monitor-id" class="col">Monitores</h2>
                <a class="btn btn-small col" href="#" id="hide1" title="Cerrar">
                    <span class="material-icons">visibility_off</span>
                </a>
            </div>
            <table class="table table-dark table-hover">
                <thead class="cabecera_tabla">
                    <tr>
                        <th class="cabecera_tabla1">MARCA</th>
                        <th class="cabecera_tabla1">Serie</th>
                        <th class="cabecera_tabla1">Modelo</th>
                        <th class="cabecera_tabla1">Ubicación</th>
                        <th class="cabecera_tabla1">Área</th>
                        <th class="cabecera_tabla1">Comentario</th>
                    </tr>
                </thead>
                <tbody class="cuerpo_tabla">
                    <?php
                        $consulta_general_monitor       =   "SELECT * FROM monitor_oficial";
                        $res_consulta_general_monitor   =   mysqli_query($conectar, $consulta_general_monitor);
                        $contador=1;
                        
                        while( $fila_general   =   mysqli_fetch_assoc($res_consulta_general_monitor)) {
                echo "<tr>";
                echo "
                    <td class='texto1'>".$fila_general['marca_monitor']."</td>
                    <td class='texto1'>".$fila_general['serie_monitor']."</td>
                    <td class='texto1'>".$fila_general['modelo_monitor']."</td>
                    <td class='texto1'>".$fila_general['ubicacion']."</td>
                    <td class='texto1'>".$fila_general['area']."</td>
                    <td class='texto1'>".$fila_general['comentario']."</td>";                 
                echo"</tr>";
            }
                    ?>
                </tbody>
            </table>
        </section>
        <br>
        <section class="container datos_generales" id="element2" style="display: none;">
            <div id="close2" class="row">
                <h2 id="diadema-id" class="col">Diademas</h2>
                <a class="btn btn-small col" href="#" id="hide2" title="Cerrar">
                    <span class="material-icons">visibility_off</span>
                </a>
            </div>
            <table class="table table-dark table-hover">
                <thead class="cabecera_tabla">
                    <tr>
                        <th class="cabecera_tabla1">MARCA</th>
                        <th class="cabecera_tabla1">Serie</th>
                        <th class="cabecera_tabla1">Ubicación</th>
                        <th class="cabecera_tabla1">Área</th>
                        <th class="cabecera_tabla1">Piso</th>
                        <th class="cabecera_tabla1">Almacen</th>
                    </tr>
                </thead>
                <tbody class="cuerpo_tabla">
                    <?php
                        $consulta_general_diadema       =   "SELECT * FROM diademas";
                        $res_consulta_general_diadema   =   mysqli_query($conectar, $consulta_general_diadema);
                        $contador=1;
                        
                        while( $fila_general   =   mysqli_fetch_assoc($res_consulta_general_diadema)) {
                echo "<tr>";
                echo "
                    <td class='texto1'>".$fila_general['marca_diadema']."</td>
                    <td class='texto1'>".$fila_general['num_serie']."</td>
                    <td class='texto1'>".$fila_general['ubicacion']."</td>
                    <td class='texto1'>".$fila_general['area']."</td>
                    <td class='texto1'>".$fila_general['piso']."</td>
                    <td class='texto1'>".$fila_general['almacen']."</td>
                    ";
                                      
                echo"</tr>";
            }
                    ?>
                </tbody>
            </table>
        </section>

<!--li>
<a href="javascript:generar_QR('activos_fijos/generarQR.php')">Eliminar</a>
</li-->

</div>
    </div>
</body>
</html>



















