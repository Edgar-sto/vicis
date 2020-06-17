<!DOCTYPE html>
<html lang="es"> 
<head>
    <title>Panel Soporte</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- ESTILOS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/cmd.css">
    <link rel="shortcut icon" href="img/favicon1.ico" />
    <!-- Fuentes de iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <!-- SCRIPT -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script>
            //Script para abrir ventana agregar y modificar de tamaño asignado.
                function abrir(url) {
                    open(url,'','top=300,left=300,width=280,height=550') ;
                }
            //Script para abrir ventana eliminar de tamaño asignado.
                function cerrar(url) {
                    open(url,'','top=300,left=300,width=280,height=200') ;
                }
            //Script para abrir ventana modificar de tamaño asignado.
                function modificar(url) {
                    open(url,'','top=300,left=300,width=280,height=200') ;
                }
            //Script para abrir ventana agregar cpu de tamaño asignado.
                function agregarCPU(url) {
                    open(url,'','top=300,left=300,width=280,height=370') ;
                }
            //Script para abrir ventana agregar monitor de tamaño asignado.
                function agregarMONITOR(url) {
                    open(url,'','top=300,left=300,width=280,height=330') ;
                }
            //Script para abrir ventana reubicar equipo.
                function reubicar(url) {
                    open(url,'','top=300,left=300,width=280,height=360') ;
                }
            //Script para abrir ventana ping.
                function ping(url) {
                    open(url,'','top=300,left=300,width=480,height=360') ;
                }
            //servidores
                function servidores(url) {
                    open(url,'','top=300,left=300,width=820,height=490');
                }
            //
            function campanias_activas(url) {
                    open(url,'','top=300,left=300,width=480,height=300') ;
                }
            function registro_x_dia(url) {
                    open(url,'','top=420,left=420,width=400,height=720');
            }
    </script>
    <script type="text/javascript">
            $(document).ready(function(){
                $("#hide").on('click', function() {
                    $("#element").hide();
                    return false;
                });
             
                $("#show").on('click', function() {
                    $("#element").show();
                    return false;
                });
            });

            $(document).ready(function(){
                $("#hide1").on('click', function() {
                    $("#element1").hide();
                    return false;
                });
             
                $("#show1").on('click', function() {
                    $("#element1").show();
                    return false;
                });
            });

            $(document).ready(function(){
                $("#hide2").on('click', function() {
                    $("#element2").hide();
                    return false;
                });
             
                $("#show2").on('click', function() {
                    $("#element2").show();
                    return false;
                });
            });
    </script> 
    <!-- Tabla busqueda de usuario -->
    <script>
        /*Cargar imagen GIF de carga*/
        $(document).ajaxStart(function () {
            $('#ajaxBusy').hide();
        }).ajaxStop(function () {
            $('#ajaxBusy').show();
        });
        /*Funcion para cargar  archivos de consulta*/
        function buscarUsuario(valorCaja1, valorCaja2){
            var parametros = {
                "valorCaja1" : valorCaja1,
                "valorCaja2" : valorCaja2,
            }; 
            $.ajax({
                data:  parametros,
                url:   'buscar_usuario.php',
                type:  'post',
                beforeSend: function () {
                    $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                    $("#resultado").html(response);
                }
            });
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
            <!-- Brand --> 
            <!--img class="img-fluid" src="img/sto_admin_web_logo.png"-->
            <!-- Links -->
            <ul class="navbar-nav text-white">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" target="_blank" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        <span class="nav-label">Panel VICIdial</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:servidores('panelvicis/panel_vicis.php')">Servidores</a>
                        </li>
                        <li>
                            <a href="Crear_Usuarios_vici/index.php" target="_blank">Activar, Restablecer Usuario</a>
                        </li>
                        <li>
                            <a href="javascript:campanias_activas('panelvicis/datos_por_server.php')">Campañas Activas</a>
                        </li>
                    </ul>
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
                            <a href="javascript:abrir('estaciones/agregar.html')">Agregar estación</a>
                        </li>
                        <li>
                            <a href="javascript:agregarCPU('estaciones/agregar_cpu.html')">Agregar CPU</a>
                        </li>
                        <li>
                            <a href="javascript:agregarMONITOR('estaciones/agregar_monitor.html')">Agregar Monitor</a>
                        </li>
                        <li><!--Elemento dehabilitado-->
                            <a class="dropdown-item disabled" href="javascript:modificar('estaciones/modificar.php')">Modificar</a>
                        </li>
                        <li>
                            <a href="javascript:cerrar('estaciones/eliminar.html')">Eliminar</a>
                        </li>
                        <li>
                            <a href="javascript:reubicar('estaciones/reubicar.html')">Reubicar</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1/facturacion/index.php" target="_blank">Facturación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1/vicis/personal/personal.html" target="_blank">Personal Home office</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:ping('ping/ping.html')">Ping</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1/vicis/indexprueba.php" target="_blank">Pruebas</a>
                </li>
            </ul>
    </nav> 
    <br>
    <spawn>
        <h1 class="">Soporte Técnico</h1>
    </spawn>
    <!--fila uno-->
    <div class="container">
        <div class="container-fluid">
            <div class="row fila">
            <br>
                <table class="table">
                    <caption class="cabecera_tbl">(Acceso a VICIdial)</caption>
                    <thead class="cabecera_tbl">
                        <th colspan="5">
                            <img src="img/vicidial_admin_web_logo.png" alt="vicidial">
                        </th>
                    </thead>
                    <tbody class="cabecera_tbl">
                        <tr >
                            <td class="columna_tabla_btn">
                                <button class="myButton btn" onclick="window.open('http://10.9.2.5/vicidial/welcome.php')">05</button>
                            </td>
                            <td class="columna_tabla_btn">
                                <button class="myButto btn" onclick="window.open('http://10.9.2.6/vicidial/welcome.php')">06</button>
                            </td>
                            <td class="columna_tabla_btn">
                                <button class="myButton btn" onclick="window.open('http://10.9.2.8/vicidial/welcome.php')">08</button> 
                            </td>
                            <td class="columna_tabla_btn">
                                    <button class="myButton btn" onclick="window.open('http://10.9.2.9/vicidial/welcome.php')">09</button>
                            </td>
                            <td class="columna_tabla_btn">
                                <button class="myButton btn" onclick="window.open('http://10.9.2.22/vicidial/welcome.php')">22</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="columna_tabla_btn">
                                <button class="myButton btn" onclick="window.open('http://10.9.2.27/vicidial/welcome.php')">27</button>
                            </td>
                            <td class="columna_tabla_btn">
                                <button class="myButton btn" onclick="window.open('http://10.9.2.28/vicidial/welcome.php')">28</button>
                            </td>
                            <td class="columna_tabla_btn">
                                <button class="myButton btn" onclick="window.open('http://10.9.2.29/vicidial/welcome.php')">29</button>
                            </td>
                            <td class="columna_tabla_btn">
                                <button class="myButton btn" onclick="window.open('http://10.9.2.35/vicidial/welcome.php')">35</button>
                            </td>
                            <td class="columna_tabla_btn">
                                <button class="myButton btn" onclick="window.open('http://10.9.2.36/vicidial/welcome.php')">36</button>
                            </td>
                        </tr>
                        <tr>
                                    <td class="columna_tabla_btn">
                                        <button class="myButton btn" onclick="window.open('http://10.9.2.37/vicidial/welcome.php')">37</button> 
                                    </td>
                                    <td class="columna_tabla_btn">
                                        <button class="myButton btn" onclick="window.open('http://10.9.2.38/vicidial/welcome.php')">38</button> 
                                    </td>
                                    <td class="columna_tabla_btn">
                                        <button class="myButton btn" onclick="window.open('http://10.9.2.39/vicidial/welcome.php')">39</button> 
                                    </td>
                                    <td class="columna_tabla_btn">
                                        <button class="myButton btn" onclick="window.open('http://10.9.2.41/vicidial/welcome.php')">41</button> 
                                    </td>
                                    <td class="columna_tabla_btn">
                                        <button class="myButton btn" onclick="window.open('http://10.9.2.42/vicidial/welcome.php')">42</button> 
                                    </td>
                                    </tr>
                                    <tr>
                                        <td class="columna_tabla_btn">
                                        <button class="myButton btn" onclick="window.open('http://10.9.2.43/vicidial/welcome.php')">43</button>  
                                        </td>
                                        <td class="columna_tabla_btn">
                                        <button class="myButton btn" onclick="window.open('http://10.9.2.44/vicidial/welcome.php')">44</button>  
                                        </td>
                                        <td class="columna_tabla_btn">
                                        <button class="myButton btn" onclick="window.open('http://10.9.2.45/vicidial/welcome.php')">45</button> 
                                        </td>
                                        <td class="columna_tabla_btn">
                                        <button class="myButton btn" onclick="window.open('http://10.9.2.46/vicidial/welcome.php')">46</button> 
                                        </td>
                                        <td class="columna_tabla_btn">
                                        <button class="myButton btn" onclick="window.open('http://10.9.2.201/vicidial/welcome.php')">201</button> 
                                        </td>
                                    </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <br>
    <!--fila dos-->
    <div class="container">
        <div class="container-fluid">
            <div class="row fila">
                <h2 class="subtitulos">Informacion de campañas</h2>
                <div class='spinner-grow text-success' ></div>
                <div id="campanias" class='tm-notification-items'>
                    
                </div>
            </div>
        </div>
    </div>
    <br>
    <!--Fila tres-->
    <div class="container">
        <div class="container-fluid">
            <div class="row fila">
                <?php
                    include 'inventario/inventario.php';
                ?>
            </div>
        </div>
    </div>
    <br>
    <!--fila cuatro-->
    <div class="container">
        <div class="container-fluid">
            <section class="row fila">
                    <h2 class="subtitulos">Consumo por día</h2>
                    <div class='spinner-grow text-success' ></div>
                    <div id="recargar_registros" class='tm-notification-items'>
                
                    </div>
                    <a class="GeneratedLink" href="javascript:registro_x_dia('factura/agregar_registro.html')">Agregar Registro</a>
            </section>
    <br>
    <br>
    <!--fila cinco -->
    <div class="container">
        <div class="container-fluid">
            <section class="row fila">
                <h2 class="subtitulos">Reactivacion de usuarios</h2>
                <form method="POST" name="form_search_user">
                    <table id="campaign_table" class="table table-bordered tabla_campanias">
                        <tbody>
                            <tr class="caja_de_texto">
                                <td>
                                    <input class="form-control" type="text" name="caja_texto" id="usuario" placeholder="Usuario">
                                </td>
                                <td>
                                    <select class="form-control form-control-sm" id="s" name="carrier">
                                        <!--General etiquetas por reporte-->
                                        <?php
                                            $servidor = array(5, 6, 8, 11, 22, 27, 28, 29, 35, 36, 37, 38, 39, 41, 42, 43, 44, 45, 46, 201);
                                            $tamanio_array_servidor = count($servidor);
                                            echo "<br/>";
                                            for ($i=0; $i < $tamanio_array_servidor; $i++)
                                            {
                                                echo "<option>10.9.2.$servidor[$i]</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                                <td class="columna_btn">
                                    <input class="btn btn-danger btn-buscar-usuario" type="button" href="javascript:;" onclick="buscarUsuario($('#usuario').val(), $('#usuario_server').val());return false;" value="BUSCAR"/>
                                </td>
                            </tr>
                            <tr id="resultado">
                                <div id="ajaxBusy">
                                    <p>

                                    </p>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </section>
        </div>
    </div>
</body>
    <!-- Recargar Div -->
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(
                function(){
                    $('#recargar_registros').load('factura/registro_dia.php');
                },3000
            );
        });

        $(document).ready(function(){
            setInterval(
                function(){
                    $('#campanias').load('info_campanias/info_campanias.php');
                },5000
            );
        });
    </script>
</html>