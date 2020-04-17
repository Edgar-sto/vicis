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
                    
        $carrier=$_POST['carrier'];
        $troncales=$_POST['troncales'];
        $fe_inicio=$_POST['fecha_inicio'];
        $fe_termino=$_POST['fecha_termino'];
        //echo "$carrier";
        //echo "$fe_inicio";
        //echo "$fe_termino";
 
            $server =   "$carrier";
            $consulta1 ="SELECT DISTINCT (d_carrier_prefix), (d_campaign_id) , (d_user_group)
                        FROM $carrier
                        WHERE    u_start_time>='$fe_inicio 00:00:00'  AND  u_start_time<='$fe_termino 23:59:59'
                        AND c_dialstatus IN ('ANSWER') AND d_carrier_prefix IN ($troncales)
                        ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta1);
    ?>
    <div class="text-center font-weight-bold container-fluid">Prefijo</div>
    <br>
        <div></div>
        <?php
                while ($mostrar=mysqli_fetch_array($resultado)) {
        ?>
            <div class='row'>
                <div class='col-md-2'>
                    <label><?php echo "$server" ?></label>
                </div>
                <div class='col-md-1'>
        <?php
            $prefijo_t  =   $mostrar['d_carrier_prefix'];
            if ($prefijo_t == '11') {
                echo "<label>Local 11</label>";
            } else {
                echo "<label>Raptor 999</label>";
            }
        ?>
    <?php     
                        echo "</div>
                    
                </div>";
                echo "<div class='row'>";
                    echo "<div class='col-md-1
                        <label>ID Campaña</label>
                    </div>";
                    echo "<div class='col-md-1
                        <label>Sucursal</label>
                    </div>";
                    echo "<div class='col-md-1
                        <label>Grupo</label>
                    </div>";
                    echo "<div class='col-md-1
                        <label>Eventos</label>
                    </div>";
                    echo "<div class='col-md-1
                        <label>Celular</label>
                    </div>";
                    echo "<div class='col-md-1
                        <label>Fijo</label>
                    </div>";
                echo "</div>";


                echo "<table class='customTable'>";
                  echo "<thead>
                    <tr>
                      <th>Header 1</th>
                      <th>Header 2</th>
                      <th>Header 3</th>
                      <th>Header 4</th>
                      <th>Header 5</th>
                      <th>Header 6</th>
                    </tr>
                        </thead>
                  <tbody>
                    <tr>
                      <td>".$mostrar['d_carrier_prefix']."</td>
                      <td>".$mostrar['d_campaign_id']."</td>
                      <td>".$mostrar['d_user_group']."</td>
                    </tr>
                  </tbody>";
                echo "</table>";
            } 
?>
</body>
</html>