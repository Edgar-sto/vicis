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
    <br>
    <br>
    <br>
    <section class="row datos_generales" id="stock">
        <table class="table">
            <thead>
                <th colspan='5'>Inventario</th>
            </thead>
            <tbody class="cuerpo_tabla">                    
                <?php
        echo "  <tr>
                    <td class='datos_base'>
                        <p class='parrafo_enlaces'>
                            <a href='#'' id='show'><!--span class='material-icons'>remove_red_eye</span-->CPU</a>
                        </p>
                    </td>
                    <td class='datos_base'>
                        <p class='parrafo_enlaces'>
                            <a href='#'' id='show1'><!--span class='material-icons'>remove_red_eye</span-->Monitor</a>
                        </p>
                    </td>
                    <td colspan='2' class='datos_base'>
                        <p class='parrafo_enlaces'>
                            <a href='#'' id='show2'><!--span class='material-icons'>remove_red_eye</span-->Diademas</a>
                        </p>
                    </td>
                    <td colspan='2' class='datos_base'>
                        <p class='parrafo_enlaces'>
                            Mouse
                        </p>
                    </td>
                    <td colspan='2' class='datos_base'>
                        <p class='parrafo_enlaces'>
                            Teclado
                        </p>
                    </td>              
                </tr>";
        echo "  <tr>
                    <td>Piso</td>
                    <td>Almacen</td>
                    <td>Piso</td>
                    <td>Almacen</td>
                    <td>Piso</td>
                    <td>Almacen</td>
                    <td>Piso</td>
                    <td>Almacen</td>
                    <td>Piso</td>
                    <td>Almacen</td>
                </tr>";
        echo "  <tr>
                    <td class='texto'><i class='material-icons'>smartphone</i><br>".$fila['ubicacion']."</td>
                    <td class='texto'><i class='material-icons'>smartphone</i><br>".$fila2['ubicacion']."</td>
                    <td class='texto'><i class='material-icons'>desktop_windows</i><br>".$fila3['ubicacion']."</td>
                    <td class='texto'><i class='material-icons'>desktop_windows</i><br>".$fila4['ubicacion']."</td>
                    <td class='texto'><i class='material-icons'>headset_mic</i><br>".$fila5['piso']."</td>
                    <td class='texto'><i class='material-icons'>headset_mic</i><br>".$fila6['almacen']."</td>
                    <td class='texto'><i class='material-icons'>mouse</i><br>".$fila7['piso']."</td>
                    <td class='texto'><i class='material-icons'>mouse</i><br>".$fila8['almacen']."</td>
                    <td class='texto'><i class='material-icons'>keyboard</i><br>".$fila9['piso']."</td>
                    <td class='texto'><i class='material-icons'>keyboard</i><br>".$fila10['almacen']."</td>
                </tr>";
                ?>
                                
            </tbody>
        </table>
    </section>