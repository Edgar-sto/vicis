<!DOCTYPE html>
<html lang="en">
<head>
        <title>Panel Soporte</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- ESTILOS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/index1.css">
        <link rel="shortcut icon" href="img/favicon1.ico" />
        <!-- Fuentes de iconos -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap" rel="stylesheet">
        <!-- SCRIPT -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
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
        <script type="text/javascript" language="javascript">
			function refreshDivs(divid,secs,url)
			{

			// define our vars
			var divid,secs,url,fetch_unix_timestamp;

			// Chequeamos que las variables no esten vacias..
			if(divid == ""){ alert('Error: escribe el id del div que quieres refrescar'); return;}
			else if(!document.getElementById(divid)){ alert('Error: el Div ID selectionado no esta definido: '+divid); return;}
			else if(secs == ""){ alert('Error: indica la cantidad de segundos que quieres que el div se refresque'); return;}
			else if(url == ""){ alert('Error: la URL del documento que quieres cargar en el div no puede estar vacia.'); return;}

			// The XMLHttpRequest object

			var xmlHttp;
			try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
			}
			catch (e){
			try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
			try{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e){
			alert("Tu explorador no soporta AJAX.");
			return false;
			}
			}
			}

			// Timestamp para evitar que se cachee el array GET

			fetch_unix_timestamp = function()
			{
			return parseInt(new Date().getTime().toString().substring(0, 10))
			}

			var timestamp = fetch_unix_timestamp();
			var nocacheurl = url+"?t="+timestamp;

			// the ajax call
			xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			document.getElementById(divid).innerHTML=xmlHttp.responseText;
			setTimeout(function(){refreshDivs(divid,secs,url);},secs*1000);
			}
			}
			xmlHttp.open("GET",nocacheurl,true);
			xmlHttp.send(null);
			}

			// LLamamos las funciones con los repectivos parametros de los DIVs que queremos refrescar.
			window.onload = function startrefresh(){
			refreshDivs('campañas',30000,'info_campanias.php');
			}
		</script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <img class="img-fluid" src="img/sto_admin_web_logo.png">
            <!-- Links -->
            <ul class="navbar-nav">
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
                    <a class="nav-link" href="http://127.0.0.1/vicis/correos/correos.HTML" target="_blank">Correos</a>
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
    <h1 class="">Soporte Técnico</h1>
    <div class="row fila_uno">
    	<div class="col-md-1"></div>
  		<div class="col-md-4">
  			<h2 class="subtitulos">Servidores</h2>
  			<br>
  			<table class="table">
  				<caption class="cabecera_tbl">(Acceso a VICIdial)</caption>
  				<thead class="cabecera_tbl">
                    <tr>
                        <!--th colspan="5"><img class="rounded mx-auto d-block" src="img/imagenes/red.png"></th-->
                    </tr>
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
  		<div class="col-md-2"></div>
  		<div class="col-md-4">
  			<h2 class="subtitulos">Informacion por servidor</h2>
  			<div id="campañas" class='tm-notification-items'>
  			<?php
  				require 'info_campanias/info_campanias.php';
  			?>
  			</div>
  		</div>
  		<div class="col-md-1"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row fila_dos">
    	<div class="col-md-1">
    		
    	</div>
		<div class="col-md-10">
			
		</div>
		<div class="col-md-1">
			
		</div>
    </div>

</body>
</html>