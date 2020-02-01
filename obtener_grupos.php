<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos Grupos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_obtener_datos.css">
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 
</head>
<body>
    <?php
        $usuario    = "root";
        $pass       = "@l**pbx++t3l3";
        $servidor   = "10.9.2.21";
        $basededatos= "telefonia";
        $conexion = mysqli_connect( $servidor, $usuario, $pass );
        $db = mysqli_select_db( $conexion, $basededatos );
                    
        $carrier    =   $_POST['carrier'];
        $campania   =   $_POST['campania'];
        $prefijos   =   $_POST['prefijos'];
        $fe_inicio=$_POST['fecha_inicio'];
        $fe_termino=$_POST['fecha_termino'];

        echo "$carrier";
        echo "$campania";
        echo "$prefijos";
        echo "$fe_inicio";
        echo "$fe_termino";



        switch ($carrier) {
            case 'reporte_5':
                $consulta = "SELECT distinct d_user_group FROM reporte_5 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') AND d_campaign_id ='$campania' AND d_carrier_prefix ='$prefijos' ORDER BY d_user_group ";
                $resultado = mysqli_query($conexion, $consulta);
                echo '<div class="text-center font-weight-bold">Grupo(s)</div>';
                echo "<br>";
                echo "<br>";
                echo "<br>";
                while ($mostrar=mysqli_fetch_array($resultado))
                {
                    echo "<p class='text-lg-center'>".$mostrar['d_user_group']."</p>";
                }
            break;
            case 'reporte_6':
                $consulta = "SELECT distinct d_user_group FROM reporte_6 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') AND d_campaign_id ='$campania' AND d_carrier_prefix ='$prefijos' ORDER BY d_user_group ";
                $resultado = mysqli_query($conexion, $consulta);
                echo '<div class="text-center font-weight-bold">Grupo(s)</div>';
                echo "<br>";
                echo "<br>";
                echo "<br>";
                while ($mostrar=mysqli_fetch_array($resultado))
                {
                    echo "<p class='text-lg-center'>".$mostrar['d_user_group']."</p>";
                }
            break;
            case 'reporte_8':
                $consulta = "SELECT distinct d_user_group FROM reporte_8 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') AND d_campaign_id ='$campania' AND d_carrier_prefix ='$prefijos' ORDER BY d_user_group ";
                $resultado = mysqli_query($conexion, $consulta);
                echo '<div class="text-center font-weight-bold">Grupo(s)</div>';
                echo "<br>";
                echo "<br>";
                echo "<br>";
                while ($mostrar=mysqli_fetch_array($resultado))
                {
                    echo "<p class='text-lg-center'>".$mostrar['d_user_group']."</p>";
                }
            break;
        }
    ?>
</body>
</html>