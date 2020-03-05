<?php
	require 'conexion.php';

	$marcaMonitor 		=	$_POST['marca-monitor'];
	$numSerieMonitor 	= 	$_POST['num-serie-monitor'];
	$modeloMonitor 		=	$_POST['modelo-monitor'];
	$mac 			=	$_POST['direccion-mac'];
	$ubicacion		=	$_POST['ubicacion'];
	$comentary  	=	$_POST['comentario'];

	echo "$marcaMonitor";
	echo "$numSerieMonitor";
	echo "$modeloMonitor";
	echo "$mac";
	echo "$ubicacion";
	echo "$comentary";
	echo "<br>";

	$conectar 		= 	mysqli_connect($servidor, $usuario, $pass, $basededatos);
$insertar = "INSERT INTO monitor (marca_monitor, num_serie_monitor, modelo_monitor, ubicacion, comentario) VALUES ( '$marcaMonitor', '$numSerieMonitor', '$modeloMonitor', '$mac', '$ubicacion', '$comentary')";
	$query = mysqli_query($conectar, $insertar);
	if ($query) {
		echo "<script>
				alert('Equipo guardado');
				windows.close();
			  </script>";
	} else {
		echo "<script>
				alert('No se guardo');
			  </script>";
	}
 ?>