<?php
    include 'conexion_inventario.php';
    /*$usuario      =   "root";
    $pass           =   "";
    $servidor_local =   "127.0.0.1";
    $bd_inventario  =   "soporte_mariano";*/
    $conexion_inventario    =   mysqli_connect($servidor_local, $usuario, $pass, $bd_inventario);
    //querys
    $consulta_inventario     =   "SELECT * FROM inv_general";
    //conexion y ejecucion de querys
    $resul              =   mysqli_query($conexion_inventario, $consulta_inventario);                           
    //resultados
    $fila   =   mysqli_fetch_assoc($resul);
?>
    <br>
    <br>
        <div class="contenedor_tbl_inv">
            <table class="table table-bordered tabla_inventarios">
                <thead class="cabecera_tbl_inventario">
                    <th colspan='15'>Inventario</th>
                </thead>
                <tbody class="cuerpo_tabla">                    
                    <tr class="medidas_icon_inv">
                        <td colspan='3'>
                            <p>
                                <i class='material-icons' style="font-size: 4em;">smartphone</i>
                            </p>
                        </td>
                        <td colspan='3'>
                            <p>
                                <i class='material-icons' style="font-size: 4em;" >desktop_windows</i>
                            </p>
                        </td>
                        <td colspan='3'>
                            <p>
                                <i class='material-icons' style="font-size: 4em;" >headset_mic</i>
                            </p>
                        </td>
                        <td colspan='3'>
                            <p>
                                <i class='material-icons' style="font-size: 4em;" >mouse</i>
                            </p>
                        </td>
                        <td colspan='3'>
                            <p>
                                <i class='material-icons' style="font-size: 4em;" >keyboard</i>
                            </p>
                        </td>              
                    </tr>
                    <tr>
                        <td class="texto">ALMACEN</td>
                        <td class="texto">PISO</td>
                        <td class="texto">DAÑADO</td>
                        <td class="texto">ALMACEN</td>
                        <td class="texto">PISO</td>
                        <td class="texto">DAÑADO</td>
                        <td class="texto">ALMACEN</td>
                        <td class="texto">PISO</td>
                        <td class="texto">DAÑADO</td>
                        <td class="texto">ALMACEN</td>
                        <td class="texto">PISO</td>
                        <td class="texto">DAÑADO</td>
                        <td class="texto">ALMACEN</td>
                        <td class="texto">PISO</td>
                        <td class="texto">DAÑADO</td>
                    </tr>
<?php
echo"               <tr>
                        <td class='texto'><b>".$fila['cpu_almacen']."</b></td>
                        <td class='texto'><b>".$fila['cpu_uso']."</b></td>
                        <td class='texto'><b>".$fila['cpu_dañados']."</b></td>

                        <td class='texto'><b>".$fila['monitor_almacen']."</b></td>
                        <td class='texto'><b>".$fila['monitor_uso']."</b></td>
                        <td class='texto'><b>".$fila['monitor_dañados']."</b></td>

                        <td class='texto'><b>".$fila['diadema_almacen']."</b></td>
                        <td class='texto'><b>".$fila['diadema_uso']."</b></td>
                        <td class='texto'><b>".$fila['diadema_dañados']."</b></td>

                        <td class='texto'><b>".$fila['teclado_almacen']."</b></td>
                        <td class='texto'><b>".$fila['teclado_uso']."</b></td>
                        <td class='texto'><b>".$fila['teclado_dañados']."</b></td>

                        <td class='texto'><b>".$fila['mouse_almacen']."</b></td>
                        <td class='texto'><b>".$fila['mouse_uso']."</b></td>
                        <td class='texto'><b>".$fila['mouse_dañados']."</b></td>
                    </tr>";
    ?>                 
                </tbody>
            </table>
        </div>