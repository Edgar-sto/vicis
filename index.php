<!DOCTYPE html>
<html lang="es">
<head>
    <title>Panel Edgar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ESTILOS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- Fuentes de iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
                        <a href="http://127.0.0.1/vicis/estaciones/agregar.php" target="_blank">Agregar</a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/vicis/estaciones/modificar.php" target="_blank">Modificar</a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/vicis/estaciones/eliminar.php" target="_blank">Eliminar</a>
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
    <div class="container-fluid"> 
        <h2>Validación HSBC</h2>
        <div class="row filas" id="validacion">
            <!-- Fila 1 -->
            <?php
                $columna = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43);
                $tamanio_array_columnas = count($columna);
                for ($i=0; $i < $tamanio_array_columnas; $i++)
                {
                    if ($columna[$i] <= 9)
                    {
                        echo "<div class='col' id='columna_".$columna[$i]."'>";
                        echo "<i class='material-icons'>desktop_windows</i>";
                        echo "<br>";
                        echo "<br>";
            ?>
                <form action="estaciones/estacion.php" method="post" target="_blank">
                  <input name='estacion' id='est_00<?=$columna[$i]?>' class='button_xdx btn btn-dark btn-lg' type='submit' value='estacion 00<?=$columna[$i]?>'/>
                </form>
                <br>
            <?php 
                        echo "</div>";
                    } else {
                        echo "<div class='col' id='columna_".$columna[$i]."'>";
                        echo "<i class='material-icons'>desktop_windows</i>";
                        echo "<br>";
                        echo "<br>";
   
            ?>
                <form action="estaciones/estacion.php" method="post" target="_blank">
                  <input name='estacion' id='est_0<?=$columna[$i]?>' class='button_xdx btn btn-dark btn-lg' type='submit' value='estacion 0<?=$columna[$i]?>'/>
                </form>
                <br>
            <?php
                        echo "</div>";
                    }
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
                <form action="estaciones/estacion.php" method="post" target="_blank">
                  <input name='estacion' id='est_0<?=$columna[$i]?>' class='button_xdx btn btn-dark btn-lg' type='submit' value='estacion 0<?=$columna[$i]?>'/>
                </form>
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
                <form action="estaciones/estacion.php" method="post" target="_blank">
                  <input name='estacion' id='est_0<?=$columna[$i]?>' class='button_xdx btn btn-dark btn-lg' type='submit' value='estacion 0<?=$columna[$i]?>'/>
                </form>
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
                <form action="estaciones/estacion.php" method="post" target="_blank">
                  <input name='estacion' id='est_0<?=$columna[$i]?>' class='button_xdx btn btn-dark btn-lg' type='submit' value='estacion 0<?=$columna[$i]?>'/>
                </form>
            <?php 
                echo "</div>";
                }
            ?>
        </div>

        <h2>Proceso</h2>
        <div class="row filas" id="proceso">
            <!-- Fila 1 -->
            <?php
                $columna = array(83, 84);
                $tamanio_array_columnas = count($columna);
                for ($i=0; $i < $tamanio_array_columnas; $i++)
                {
                    echo "<div class='col' id='columna_".$columna[$i]."'>";
                    echo "<i class='material-icons'>desktop_windows</i>";
                    echo "<br>";
            ?>
                <form action="estaciones/estacion.php" method="post" target="_blank">
                  <input name='estacion' id='est_0<?=$columna[$i]?>' class='button_xdx btn btn-dark btn-lg' type='submit' value='estacion 0<?=$columna[$i]?>'/>
                </form>
            <?php 
                echo "</div>";
                }
            ?>
        </div>

        <h2>Formalizacion</h2>
        <div class="row filas" id="formalizacion">
            <!-- Fila 1 -->
            <?php
                $columna = array(85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100);
                $tamanio_array_columnas = count($columna);
                for ($i=0; $i < $tamanio_array_columnas; $i++)
                {
                    if ($columna[$i] <= 99)
                    {
                        echo "<div class='col' id='columna_".$columna[$i]."'>";
                        echo "<i class='material-icons'>desktop_windows</i>";
                        echo "<br>";
            ?>
                <form action="estaciones/estacion.php" method="post" target="_blank">
                  <input name='estacion' id='est_0<?=$columna[$i]?>' class='button_xdx btn btn-dark btn-lg' type='submit' value='estacion 0<?=$columna[$i]?>'/>
                </form>
            <?php 
                        echo "</div>";
                    } else {
                        echo "<div class='col' id='columna_".$columna[$i]."'>";
                        echo "<i class='material-icons'>desktop_windows</i>";
                        echo "<br>";    
            ?>
                <form action="estaciones/estacion.php" method="post" target="_blank">
                  <input name='estacion' id='est_<?=$columna[$i]?>' class='button_xdx btn btn-dark btn-lg' type='submit' value='estacion <?=$columna[$i]?>'/>
                </form>
            <?php
                        echo "</div>";
                    }
                }
            ?>
        </div>

        <h2>Auditoria</h2>
        <div class="row filas" id="auditoria">
            <!-- Fila 1 -->
            <?php
                $columna = array(101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119);
                $tamanio_array_columnas = count($columna);
                for ($i=0; $i < $tamanio_array_columnas; $i++)
                {
                    echo "<div class='col'>";
                    echo "<i class='material-icons'>desktop_windows</i>";
                    echo "<br>";
            ?>
                <form action="estaciones/estacion.php" method="post" target="_blank">
                  <input name='estacion' id='est_<?=$columna[$i]?>' class='button_xdx btn btn-dark btn-lg' type='submit' value='estacion <?=$columna[$i]?>'/>
                </form>
            <?php 
                echo "</div>";
                }
            ?>
        </div>
    </div>
</body>
</html>