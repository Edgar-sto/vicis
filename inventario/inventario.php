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
                        <td class='texto'>".$fila['cpu_almacen']."</td>
                        <td class='texto'>".$fila['cpu_uso']."</td>
                        <td class='texto'>".$fila['cpu_dañados']."</td>

                        <td class='texto'>".$fila['monitor_almacen']."</td>
                        <td class='texto'>".$fila['monitor_uso']."</td>
                        <td class='texto'>".$fila['monitor_dañados']."</td>

                        <td class='texto'>".$fila['diadema_almacen']."</td>
                        <td class='texto'>".$fila['diadema_uso']."</td>
                        <td class='texto'>".$fila['diadema_dañados']."</td>

                        <td class='texto'>".$fila['teclado_almacen']."</td>
                        <td class='texto'>".$fila['teclado_uso']."</td>
                        <td class='texto'>".$fila['teclado_dañados']."</td>

                        <td class='texto'>".$fila['mouse_almacen']."</td>
                        <td class='texto'>".$fila['mouse_uso']."</td>
                        <td class='texto'>".$fila['mouse_dañados']."</td>
                    </tr>";
    ?>                 
                </tbody>
            </table>
        </div>