<?php
    $usuario    = "root";
    $pass       = "";
    $servidor   = "127.0.0.1";
    $basededatos= "telefonia";
    $conexion = mysqli_connect( $servidor, $usuario, $pass );
    $db = mysqli_select_db( $conexion, $basededatos );

    $carrier=$_POST['carrier'];
    $fe_inicio=$_POST['fecha_inicio'];
    $fe_termino=$_POST['fecha_termino'];
    echo "$carrier";
    switch ($carrier){
        case 'reporte_5':
            $consulta ="SELECT distinct(d_carrier_prefix) FROM telefonia.'$carrier' WHERE fecha_registro>='$fe_inicio 00:00:00' AND fecha_registro<='$fe_termino 23:59:59' AND c_dialstatus in ('ANSWER')";
            $resultado = mysqli_query($conexion, $consulta);
            echo "<table>
                    <tr>
                        <td>Prefijo</td>
                    </tr>";
            while ($mostrar=mysqli_fetch_array($resultado)) {
                echo "{$mostrar['d_carrier_prefix']}";
            }
                        
        break;

    }
    /*if ($carrier = 'Directo') {
        $select = "SELECT * FROM factura_directo WHERE fecha_registro>='$fe_inicio 00:00:00' AND fecha_registro<='$fe_termino 23:59:59' ORDER BY ip_server";
        $resul = mysqli_query($conexion, $select);
        $contador=1;
        $ip_servidor="";
        echo"   <table class=\"table-striped\">
                <thead>
                    <tr>
                        <th>Servidor</th>
                        <th>Prefijo</th>
                        <th>Sucursal</th>
                        <th>Campaña</th>
                        <th>Grupo</th>
                        <th>Eventos</th>
                        <th>Celular</th>
                        <th>Fijo</th>
                        <th>Drop Movil</th>
                        <th>Drop Fijo</th>
                        <th>Buzon Movil</th>
                        <th>Buzon Fijo</th>
                        <th>Fecha Registro</th>
                    </tr>
                </thead>";
        while( $row = mysqli_fetch_assoc($resul)) {
        //$ip_servidor = $row['ip_server'];
        //$activo = $row['active'];
        echo "<tr>";
        echo "
            <td id='user_".$contador."'>".$row['ip_server']."</td>
            <td>".$row['prefijo']."</td>
            <td>".$row['sucursal']."</td>
            <td>".$row['id_campania']."</td>
            <td>".$row['grupo']."</td>
            <td>".$row['eventos']."</td>
            <td>".$row['celular']."</td>
            <td>".$row['fijo']."</td>
            <td>".$row['drop_movil']."</td>
            <td>".$row['drop_fijo']."</td>
            <td>".$row['buzon_movil']."</td>
            <td>".$row['buzon_fijo']."</td>
            <td>".$row['fecha_registro']."</td>";
            echo"</tr>";
        }
    }*/
?>
