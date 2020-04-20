<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <title>Datos prefijos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_obtener_datos.css">
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <style>
table.customTable {
  width: 100%;
  background-color: #FFFFFF;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #7EA8F8;
  border-style: dotted;
  color: #000000;
}

table.customTable td, table.customTable th {
  border-width: 2px;
  border-color: #7EA8F8;
  border-style: dotted;
  padding: 5px;
}

table.customTable thead {
  background-color: #7EA8F8;
}
</style>
</head>
<body>
    <?php
        $usuario    = "root";
        $pass       = "@l**pbx++t3l3";
        $servidor   = "10.9.2.21";
        $basededatos= "telefonia";
        $conexion = mysqli_connect( $servidor, $usuario, $pass );
        $db = mysqli_select_db( $conexion, $basededatos );
                    
       
 
            $server =   "reporte_36";
            $consulta1 ="SELECT DISTINCT (d_carrier_prefix), (d_campaign_id) , (d_user_group)
                        FROM reporte_36
                        WHERE    u_start_time>='2020/02/28 00:00:00'  AND  u_start_time<='2020/03/29 23:59:59'
                        AND c_dialstatus IN ('ANSWER') AND d_carrier_prefix IN ('11','999')
                        ORDER BY d_carrier_prefix";

            $resultado      =   mysqli_query($conexion, $consulta1);
    ?>
    <div class="contenedor_principal">
        <br>
        <div class="contenedor_tablas">
            <table class="comicGreen">
                <tbody>
                    <tr>
                        <td colspan="2">    <label><?php echo "$server"; ?></label> </td>
                        <td>
                            <?php 
                           $consul_prefijo = "SELECT distinct d_carrier_prefix FROM reporte_36 WHERE u_start_time>='2020/02/28 00:00:00' AND u_start_time<='2020/03/29 23:59:59' AND c_dialstatus in ('ANSWER') AND d_carrier_prefix IN ('11','999')";

                            $resul_prefijo = mysqli_query($conexion, $consul_prefijo);
                            
                            while ($mostrar=mysqli_fetch_array($resul_prefijo))
                            {
                                $prefijo_t  =   $mostrar['d_carrier_prefix'];
                                if ($prefijo_t == '11') {
                                    echo "<label>LOCAL 11</label>";
                                } else {
                                    echo "<label>Raptor 999</label>";
                                }
                                //echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
                            }
                        ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="resultado_factura_por_reporte" style="width: 100%;">
                <thead>
                    <th class="titulos_tabla_resultado">ID Campaña</th>
                    <th class="titulos_tabla_resultado">Sucursal</th>
                    <th class="titulos_tabla_resultado">Grupo</th>
                    <th class="titulos_tabla_resultado">Eventos</th>
                    <th class="titulos_tabla_resultado">Celular</th>
                    <th class="titulos_tabla_resultado">Fijo</th>
                </thead>
            </table>
        </div>
        <?php
            echo "<table class='customTable'>  
                <tbody>";
                while ($mostrar=mysqli_fetch_array($resultado))
                {
                    echo "<tr>
                            <td>"
                                .$mostrar['d_campaign_id'].
                            "</td>
                            <td>           </td>
                            <td>".$mostrar['d_user_group']."</td>
                            <td>           </td>
                            <td>";
                                if ($mostrar['d_campaign_id'] == 11)
                                {
                                    $consulta_movil = 'SELECT SUM(redondea_a_minutos) FROM reporte_36
                                        WHERE u_start_time>="2020-02-28 00:00:00"  AND  u_start_time<="2020-03-29 23:59:59"
                                        AND c_dialstatus IN ("ANSWER") AND d_campaign_id="0003" AND d_carrier_prefix IN  ("11")
                                        AND d_user_group="$mostrar["d_user_group"]" AND d_tipo_numero="movil" ';

                                    $resultado_movil = mysqli_query($conexion, $consulta_movil);
                                    echo "$resultado_movil";
                                } else {
                                    $consulta_movil     = "SELECT SUM(redondea_a_minutos) as movil FROM reporte_36
                                                            WHERE u_start_time>='2020-02-28 00:00:00'
                                                            AND u_start_time<='2020-03-29 23:59:59'
                                                            AND c_dialstatus IN ('ANSWER')
                                                            AND d_campaign_id='0003'
                                                            AND d_carrier_prefix IN  ('999')
                                                            AND d_user_group='STOMIXCOAC-HSBC'
                                                            AND d_tipo_numero='movil';";
                                    $resultado_movil    = mysqli_query($conexion, $consulta_movil);
                                    $mostrar_res_movil  = mysqli_fetch_array($resultado_movil);                                     

                                    echo $mostrar_res_movil["movil"];
                                }      
                            echo "</td>
                            <td>           </td>
                        </tr>";
                }
            echo "  <tr>
                        <td>        </td>
                        <td>        </td>
                        <td>DROP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>        </td>
                        <td>        </td>
                        <td>BUZON</td>
                        <td>        </td>
                        <td>        </td>
                        <td>        </td>
                    </tr>
                    <tr>
                        <td>        </td>
                        <td>        </td>
                        <td>CAMPAÑA 0</td>
                        <td>        </td>
                        <td>        </td>
                        <td>        </td>
                    </tr>
                </tbody>
                </table>";
        ?>
    </div>
</body>
</html>