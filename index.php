<!DOCTYPE html>
<html lang="es">
<head>
    <title>Panel Edgar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ESTILOS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--script>
        $(document).on('ready',function()
        {
            $('#btn-obtener-grupos').click(function()
            {
                var url         =   "estacion001.php";
                var estacion     =   $('#est_001').val();
                if(estacion =='')
                {
                    alert('No se encontro informacion sobre la estación.');
                }
                $.ajax(
                {
                    type: "POST",
                    url: url,
                    data:{est_001:estacion},
                    //beforeSend:function (){},
                    success:function(data)
                    {
                        /*console.log(data);
                        $('#resp_grupos').html(data);*/
                    }
                });
            });
        });
    </script-->
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <img class=".img-fluid" src="img/vicidial_admin_web_logo.png">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/facturacion/index.php" target="_blank">Facturación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/vicis/datos_factura.php" target="_blank">Datos Facturación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/vicis/panel_vicis.php" target="_blank">Vicis Dial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/vicis/nueva.php" target="_blank">Estaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/vicis/correos.php" target="_blank">Correos</a>
            </li>
        </ul>
    </nav> 
    <br>
    <div class="container">
        <h2>Validación HSBC</h2>
        <div class="row filas" id="validacion">
            <!-- Fila 1 -->
            <?php
                $columna = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43);
                $tamanio_array_columnas = count($columna);
                for ($i=0; $i < $tamanio_array_columnas; $i++)
                {
                    echo "<div class='col' id='columna_".$columna[$i]."'>";
                    echo "<i class='material-icons'>desktop_windows</i>";
                    echo "<br>";
            ?>
                <input id='est_0<?=$columna[$i]?>' class='btn btn-dark btn-lg' type='button' value='Estación 0<?=$columna[$i]?>' onclick="window.open('estaciones/estacion001.php','Estación 0<?=$columna[$i]?>','width=500, height=308')"/>;
            <?php 
                echo "</div>";
                }
            ?>
        </div>

        <h2>Validación Invex</h2>
        <div class="row filas" id="vali-invex">
            <!-- Fila 1 -->
            <?php
                $columna = array(44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54);
                $tamanio_array_columnas = count($columna);
                for ($i=0; $i < $tamanio_array_columnas; $i++)
                {
                    echo "<div class='col' id='columna_".$columna[$i]."'>";
                    echo "<i class='material-icons'>desktop_windows</i>";
                    echo "<br>";
            ?>
                <input id='est_0<?=$columna[$i]?>' class='btn btn-dark btn-lg' type='button' value='Estación 0<?=$columna[$i]?>' onclick="window.open('estaciones/estacion001.php','Estación 0<?=$columna[$i]?>','width=500, height=308')"/>;
            <?php 
                echo "</div>";
                }
            ?>
        </div>

        <h2>Área libre</h2>
        <div class="row filas" id="area-libre">
            <!-- Fila 1 -->
            <?php
                $columna = array(55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66);
                $tamanio_array_columnas = count($columna);
                for ($i=0; $i < $tamanio_array_columnas; $i++)
                {
                    echo "<div class='col' id='columna_".$columna[$i]."'>";
                    echo "<i class='material-icons'>desktop_windows</i>";
                    echo "<br>";
            ?>
                <input id='est_0<?=$columna[$i]?>' class='btn btn-dark btn-lg' type='button' value='Estación 0<?=$columna[$i]?>' onclick="window.open('estaciones/estacion001.php','Estación 0<?=$columna[$i]?>','width=500, height=308')"/>;
            <?php 
                echo "</div>";
                }
            ?>
        </div>

        <h2>Monitoreo</h2>
        <div class="row filas" id="monitoreo">
            <!-- Fila 1 -->
            <?php
                $columna = array(67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82);
                $tamanio_array_columnas = count($columna);
                for ($i=0; $i < $tamanio_array_columnas; $i++)
                {
                    echo "<div class='col' id='columna_".$columna[$i]."'>";
                    echo "<i class='material-icons'>desktop_windows</i>";
                    echo "<br>";
            ?>
                <input id='est_0<?=$columna[$i]?>' class='btn btn-dark btn-lg' type='button' value='Estación 0<?=$columna[$i]?>' onclick="window.open('estaciones/estacion001.php','Estación 0<?=$columna[$i]?>','width=500, height=308')"/>;
            <?php 
                echo "</div>";
                }
            ?>
        </div>
    </div>
</body>
</html>