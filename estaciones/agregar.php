<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel Edgar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ESTILOS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/agregar-modificar.css">
    <!-- Fuentes de iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="#" method="POST">
		<table class="table">
            <tbody>
                <tr class='nom_campo'>
                	<td>	<label class="form-check-label" for="estacion">Estación</label>				</td>
					<td>	<input class="form-control-sm" type="text" name="estacioN" id="estacion">	</td>
				</tr>
				<tr>
					<td>	<label class="form-check-label" for="host">HOST</label>						</td>
					<td>	<input class="form-control-sm" type="text" name="localHost" id="host">	</td>
				</tr>
				<tr>
					<td>	<label class="form-check-label" for="direccion_mac">Dirección MAC</label>		</td>
					<td>	<input class="form-control-sm" type="text" name="direccionMAC" id="direccion_mac">	</td>
				</tr>
				<tr>
					<td>	<label class="form-check-label" for="num_serie_cpu">Número de serie</label>		</td>
					<td>	<input class="form-control-sm" type="text" name="num_serieCPU" id="num_serie_cpu">	</td>
				</tr>
				<tr>
					<td>	<label class="form-check-label" for="modelo_cpu">Modelo CPU</label>			</td>
					<td>	<input class="form-control-sm" type="text" name="modeloCPU" id="modelo_cpu">	</td>
				</tr>
				<tr>
					<td>	<label class="form-check-label" for="marca_cpu">Marca CPU</label>			</td>
					<td>	<input class="form-control-sm" type="text" name="marcaCPU" id="marca_cpu">	</td>	
				</tr>
				<tr>
					<td>	<label class="form-check-label" for="num_serie_monitor">Serie monitor</label>		</td>
					<td>	<input class="form-control-sm" type="text" name="num_serieMonitor" id="num_serie_monitor">	</td>
				</tr>
					<tr>
					<td>	<label class="form-check-label" for="marca_monitor">Marca monitor</label>		</td>	
					<td>	<input class="form-control-sm" type="text" name="marcaMonitor" id="marca_monitor">	</td>
				</tr>
				<tr>
					<td>	<label class="form-check-label" for="campania">Campaña</label>				</td>
					<td>	<input class="form-control-sm" type="text" name="campaniA" id="campania">	</td>
				</tr>
				<tr>
					<td>	<label class="form-check-label" for="mouse">Mouse</label>				</td>
					<td>	<input class="form-control-sm" type="text" name="raton" id="mouse">	</td>
				</tr>
				<tr>
					<td>	<label class="form-check-label" for="keyboard">Teclado</label>				</td>
					<td>	<input class="form-control-sm" type="text" name="teclado" id="keyboard">	</td>
				</tr>
				<tr>	
					<td>	<label class="form-check-label" for="headphones">Diadema</label>				</td>
					<td>	<input class="form-control-sm" type="text" name="diadema" id="headphones">	</td>
				</tr>
				<tr>
					<td>	<label class="form-check-label" for="comentary">Comentario</label>			</td>
					<td>	<input class="form-control-sm" type="text" name="comentario" id="comentary">	</td>
				</tr>
				<tr>
					<td class="columna_btn" colspan="2">
						<input class="button_xdx" type="submit" value="Agregar">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	<div>
		<?php
			$usuario    = "root";
   			$pass       = "";
    		$servidor   = "127.0.0.1";
    		$basededatos= "soporte";
    		$conexion = mysqli_connect( $servidor, $usuario, $pass );
    		$db = mysqli_select_db( $conexion, $basededatos );

			if(isset($_POST['estacioN'])) {
				$estacion 		= 	$_POST['estacioN'];
				$local_host 	= 	$_POST['localHost'];
				$mac 			=	$_POST['direccionMAC'];
				$numSerieCpu 	= 	$_POST['num_serieCPU'];
				$modeloCpu 		=	$_POST['modeloCPU'];
				$marcaCpu 		=	$_POST['marcaCPU'];
				$serieMonitor 	=	$_POST['num_serieMonitor'];
				$marcaMonitor 	= 	$_POST['marcaMonitor'];
				$campaign		=	$_POST['campaniA'];
				$mouse 			=  	$_POST['raton'];
				$keyboard 		=	$_POST['teclado'];
				$headphones		=	$_POST['diadema'];
				$comentary  	=	$_POST['comentario'];

				$insertar = "INSERT INTO estaciones (uniqueid, num_estacion, local_host, mac_address, serie_cpu, modelo_cpu, marca_cpu, serie_monitor, marca_monito, campania, mouse, teclado, diadema, comentario) VALUES ('$estacion', 'LAZ-EST-$estacion', '$local_host', '$mac', '$numSerieCpu', '$modeloCpu', '$marcaCpu', '$serieMonitor', '$marcaMonitor', '$campaign', '$mouse', '$keyboard', '$headphones', '$comentary')";
			}
?>

	</div>
</body>
</html>