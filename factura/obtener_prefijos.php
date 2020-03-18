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
            $resultado = mysqli_query($conexion, $consulta);
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_6':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_6 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);

            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_8':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_8 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_11':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_11 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_22':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_22 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_27':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_27 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_28':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_28 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_29':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_29 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_35':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_35 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_36':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_36 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_37':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_37 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_38':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_38 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_39':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_39 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_41':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_41 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_42':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_42 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_43':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_43 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_44':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_44 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_45':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_45 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_46':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_46 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
        case 'reporte_201':
            $consulta ="SELECT distinct d_carrier_prefix FROM reporte_201 WHERE u_start_time>='$fe_inicio 00:00:00' AND u_start_time<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER') ORDER BY d_carrier_prefix";
            $resultado = mysqli_query($conexion, $consulta);
            
            echo '<div class="text-center font-weight-bold">Prefijo</div>';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            while ($mostrar=mysqli_fetch_array($resultado))
            {
                echo "<p class='text-lg-center'>".$mostrar['d_carrier_prefix']."</p>";
            }
                        
        break;
    }
    
?>
</body>
</html>





