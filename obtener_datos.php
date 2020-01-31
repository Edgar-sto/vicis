<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos Facturación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_datos_factura.css">
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <title>Document</title>
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
    $fe_inicio=$_POST['fecha_inicio'];
    $fe_termino=$_POST['fecha_termino'];
    //echo "$carrier";
    //echo "$fe_inicio";
    //echo "$fe_termino";

    switch ($carrier){
        case 'reporte_5':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_5 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            
            $consulta2 = "SELECT distinct d_campaign_id FROM reporte_5  WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' and c_dialstatus in ('ANSWER') ORDER BY d_campaign_id";
            $resultado = mysqli_query($conexion, $consulta);
            echo '<table>
                    <tr>
                        <td class="font-weight-bold" >Prefijo</td>
                    </tr>';

            while ($mostrar=mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>".$mostrar['d_carrier_prefix']."</td>";
                echo "</tr>";
                echo "</table";
            }
                        
        break;

    }
    
?>
</body>
</html>





