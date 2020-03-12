<?php 
    require_once '../phpqrcode/qrlib.php';
    require '../estaciones/conexion.php';
    $conectar       =   mysqli_connect($servidor, $usuario, $pass, $basededatos);
    $cpu            =   $_POST['codigo_qr']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3" id="datos">
                <table>
                    <?php 
                        echo "$cpu";
                        $consulta_cpu   =   "SELECT * FROM cpu WHERE uniqueid = '$cpu'";
                        $res_de_consulta=   mysqli_query($conectar, $consulta_cpu);
                        while( $fila_general   =   mysqli_fetch_assoc($res_de_consulta)) {
                    echo "<thead>";
                        echo "<tr>";
                            echo "<td>ID</td>";
                            $id=$fila_general['uniqueid'];
                            echo "$id";
                            echo "<td>".$fila_general['uniqueid']."</td>";
                        echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                        echo "<tr>";
                            echo "<td>Marca</td>";
                            echo "<td>".$fila_general['marca_cpu']."</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>Serie</td>";
                            echo "<td>".$fila_general['serie_cpu']."</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>Modelo</td>";
                            echo "<td>".$fila_general['modelo_cpu']."</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>Direccion MAC</td>";
                            echo "<td>".$fila_general['mac_address']."</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>Ubicacion</td>";
                            echo "<td>".$fila_general['ubicacion']."</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>Área</td>";
                            echo "<td>".$fila_general['area']."</td>";
                        echo "</tr>";

                        echo "<tr>";
                            echo "<td>Comentario</td>";
                            echo "<td>".$fila_general['comentario']."</td>";
                        echo "</tr>";
                    echo "</tbody>";
                }
                    ?>
                </table>
            </div>
        </div>          
    </div>
</body>
</html> 