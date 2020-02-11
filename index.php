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
<<<<<<< HEAD
    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
=======
    <style type="text/css">
        #contenedor {
            background: red;
            margin: auto;
            width: 90%;
            height: 200px;
        }
    </style>
>>>>>>> c03782478dcf9b961723b20915c77cd54a4fe638
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
        </ul>
    </nav> 
    <br>
    <section class="container-fluid">
        <div id="area_uno">
            <div class="clearfix">
                <div class="box" id="columna_1" >
                    <i class="material-icons">desktop_windows</i>
                    <br>
                    <input class="btn btn-dark btn-lg" type="button" value="Estación 001" onclick="window.open('estaciones/estacion001.html','Estación 001','width=300, height=200')" />
                </div>
                <div class="box" id="columna_2">
                    <i class="material-icons">desktop_windows</i>
                    <br>
                    <input class="btn btn-dark btn-lg" type="button" value="Estación 002" onclick="window.open('estaciones/estacion002.html','Estación 002','width=300, height=400')" />
                </div>
                <div class="box" id="columna_3">
                    <i class="material-icons">desktop_windows</i>
                    <br>
                    <input class="btn btn-dark btn-lg" type="button" value="Estación 003" onclick="window.open('estaciones/estacion003.html','Estación 001','width=300, height=400')" />
                </div>
                <div class="box" id="columna_4">
                    <i class="material-icons">desktop_windows</i>
                    <br>
                    <input class="btn btn-dark btn-lg" type="button" value="Estación 004" onclick="window.open('estaciones/estacion004.html','Estación 004','width=300, height=400')" />
                </div>
                <div class="box" id="columna_5">
                    <i class="material-icons">desktop_windows</i>
                    <br>
                    <input class="btn btn-dark btn-lg" type="button" value="Estación 005" onclick="window.open('estaciones/estacion005.html','Estación 005','width=300, height=400')" />
                </div>
                <div class="box" id="columna_6">
                    <i class="material-icons">desktop_windows</i>
                    <br>
                    <input class="btn btn-dark btn-lg" type="button" value="Estación 006" onclick="window.open('estaciones/estacion006.html','Estación 006','width=300, height=400')" />
                </div>
            </div>
        </div>
    </section>
</body>
</html>