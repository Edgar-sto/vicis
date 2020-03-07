<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Stock</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- ESTILOS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/activos_fijos.css">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Fuentes de iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Inventario</h1>
	<div class="contenedor">
		<h2>CPU</h2>
			<?php
				require '../estaciones/conexion.php';
				$conectar 		= 	mysqli_connect($servidor, $usuario, $pass, $basededatos);
           		$select = "SELECT * FROM cpu";
           		$resul = mysqli_query($conectar, $select);
           		$contador_cpu=1;
           	?>
       		<table class="table table-striped table-dark table-hover" id="cpu-id">
	           	<thead class="cabecera_tabla">
		           	<tr>
		           		<th>Marca</th>
		           		<th>Número de serie</th>
		           		<th>Modelo </th>
		           		<th>Dirección MAC</th>
		           		<th>Ubicación</th>
		                <th>Comentarios</th>
		            </tr>
	            </thead>
	            <tbody class="cuerpo_tabla">
	            	<form action="estaciones/estacion.php" method="post" target="_blank">
	                <?php
	            		while( $row = mysqli_fetch_assoc($resul)) {
	                		echo "<tr>";
	                		echo "
	            					<td id='user_".$contador_cpu."'>".$row['marca_cpu']."</td>
	            					<td>".$row['serie_cpu']."</td>
	            					<td>".$row['modelo_cpu']."</td>
	            					<td>".$row['mac_address']."</td>
	            					<td>".$row['ubicacion']."</td>
	            					<td>".$row['comentario']."</td>";
	            	?>
	            					<td>
	            						
                  							<input name='codigoQR_cpu' id='' class='button_xdx btn btn-dark btn-lg' type='submit' value='Generar QR'/>
						                
	            					</td>
	            	<?php
	                		echo "</tr>";
	            		}
	            	?>
	            	</form>
				</tbody>
			</table>
	</div>

	<div class="contenedor">
		<h2>Monitor</h2>
			<?php
				$select = "SELECT * FROM monitor";

            		$resul = mysqli_query($conectar, $select);

            		$contador_monitor=1;
            ?>
            <table class="table table-striped table-dark" id="monitor-id">
	           	<thead class="cabecera_tabla">
		           	<tr>
		           		<th>Marca</th>
		           		<th>Número de serie</th>
		           		<th>Modelo </th>
		           		<th>Ubicación</th>
		                <th>Comentarios</th>
		            </tr>
	            </thead>
	            <tbody class="cuerpo_tabla">
	                <?php
	            		while( $row = mysqli_fetch_assoc($resul)) {
	                		echo "<tr>";
	                		echo "
	            					<td id='user_".$contador_monitor."'>".$row['marca_monitor']."</td>
	            					<td>".$row['serie_monitor']."</td>
	            					<td>".$row['modelo_monitor']."</td>
	            					<td>".$row['ubicacion']."</td>
	            					<td>".$row['comentario']."</td>";
	                		echo "</tr>";
	            		}
	            	?>
				</tbody>
			</table>
			
		
	</div>
</body> 
</html>