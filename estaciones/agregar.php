<?php
	require 'conexion.php';



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



	$insertar = "INSERT INTO estaciones (uniqueid, num_estacion, local_host, mac_address, serie_cpu, modelo_cpu, marca_cpu, serie_monitor, marca_monito, campania, mouse, teclado, diadema, comentario) VALUES ('$estacion', '$local_host', '$mac', '$numSerieCpu', '$modeloCpu', '$marcaCpu', '$serieMonitor', '$marcaMonitor', '$campaign', '$mouse', '$keyboard', '$headphones', '$comentary')";


	$query = mysqli_query($conectar, $insertar);

	if ($query) {
		echo "<script>
				alert('Equipo guardado');
			  </script>";
	} else {
		echo "<script>
				alert('No se guardo');
			  </script>";
	}





?>











