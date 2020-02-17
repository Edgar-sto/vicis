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
    <section class="container-fluid">
        <div id="area_uno">
            <div class="clearfix">
                <!-- Estaciones Validación -->
                    <div class="row fondofilauno">
                        <!-- Fila 1 -->
                        <?php
                            $columna = array(1, 2, 3, 4, 5, 6);
                            $tamanio_array_columnas = count($columna);
                            for ($i=0; $i < $tamanio_array_columnas; $i++)
                            {
                                echo "<div class='col' id='columna_".$columna[$i]."'>";
                                    echo "<i class='material-icons'>desktop_windows</i>";
                                    echo "<br>";
                        ?>
                                    <input id='est_00<?=$columna[$i]?>' class='btn btn-dark btn-lg' type='button' value='Estación 00<?=$columna[$i]?>' onclick="window.open('estaciones/estacion001.php','Estación 00<?=$columna[$i]?>','width=500, height=308')"/>;
                        <?php 
                            
                                echo "</div>";
                            }
                        ?>
                    </div>

                    <div class="row">
                        <!-- Fila 2 -->
                        <?php
                            $columna = array(7, 8, 9, 10, 11, 12);
                            $tamanio_array_columnas = count($columna);
                            for ($i=0; $i < $tamanio_array_columnas; $i++)
                            {
                                echo "<div class='col' id='columna_".$columna[$i]."'>";
                                    echo "<i class='material-icons'>desktop_windows</i>";
                                    echo "<br>";
                        ?>
                                    <input id='est_00<?=$columna[$i]?>' class='btn btn-dark btn-lg' type='button' value='Estación 00<?=$columna[$i]?>' onclick="window.open('estaciones/estacion001.php','Estación 00<?=$columna[$i]?>','width=500, height=308')"/>;
                        <?php 
                            
                                echo "</div>";
                            }
                        ?>
                    </div>
            </div>
        </div>
    </section>
</body>
</html>