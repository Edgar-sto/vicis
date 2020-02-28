<!DOCTYPE html>
<html lang="es">
<head>
    <title>Estación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- Tipografias -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>//Script para abrir ventana de tamaño asignado.
        function abrir(url) {
            open(url,'','top=300,left=300,width=300,height=300') ;
        }
    </script>
    <script languague="javascript">
        function mostrar() {
            div = document.getElementById('flotante');
            div.style.display = '';
        }

        function cerrar() {
            div = document.getElementById('flotante');
            div.style.display = 'none';
        }
</script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <img class=".img-fluid" src="img/vicidial_admin_web_logo.png">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/vicis/panelvicis/panel_vicis.php" target="_blank">VICIDial</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" target="_blank" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    <span class="nav-label">Telefonía</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="http://127.0.0.1/vicis/factura/datos_factura.php" target="_blank">Datos Telefonía</a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/facturacion/index.php" target="_blank">Factura</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown"><!-- Inicio de cambios en nav-->
                <a class="nav-link dropdown-toggle" href="" target="_blank" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    <span class="nav-label">Estaciones</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="javascript:abrir('estaciones/agregar.php')">Agregar</a>
                    </li>
                    <li>
                        <a href="javascript:abrir('estaciones/modificar.php')">Modificar</a>
                    </li>
                    <li>
                        <a href="javascript:abrir('estaciones/eliminar.php')">Eliminar</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/facturacion/index.php" target="_blank">Facturación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/vicis/correos/correos.php" target="_blank">Correos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1/vicis/stock/stock.php" target="_blank">Correos</a>
            </li>
        </ul>
    </nav> 
    <br>
    <div class="container"> 
        <p>
            <a href="javascript:mostrar();">Mostrar</a>
        </p>
        <div id="flotante" style="display:none;">
                <div id="close"><a href="javascript:cerrar();">cerrar</a>
                Este es un div ocultar
                </div>
            
        </div>
        <div id="flotante" style="display:none;">CONTENIDO A OCULTAR/MOSTRAR</div>
</div>
</body>
</html>