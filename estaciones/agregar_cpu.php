<?php
	require 'conexion.php';

	$marcaCpu 		=	$_POST['marcaCPU'];
	$numSerieCpu 	= 	$_POST['num_serieCPU'];
	$modeloCpu 		=	$_POST['modeloCPU'];
	$mac 			=	$_POST['direccionMAC'];
	$ubicacion		=	$_POST['ubicacion'];
	$comentary  	=	$_POST['comentario'];
	
	echo "$marcaCpu";
	echo "$numSerieCpu";
	echo "$modeloCpu";
	echo "$mac";
	echo "$ubicacion";
	echo "$comentary";
	echo "<br>";

	$conectar 		= 	mysqli_connect($servidor, $usuario, $pass, $basededatos);

	$insertar ="SELECT MAX(uniqueid) AS id FROM cpu";
	$query = mysqli_query($conectar, $insertar);
	if ($row = mysql_fetch_row($query)) {
		$id = trim($row[0]);
		echo "$id";
	}


/*
	$insertar = "INSERT INTO cpu (uniqueid, marca_cpu, serie_cpu, modelo_cpu, mac_address, ubicacion, comentario) VALUES ( '$marcaCpu', '$numSerieCpu', '$modeloCpu', '$mac', '$ubicacion', '$comentary')";
	$query = mysqli_query($conectar, $insertar);
	if ($query) {
		echo "<script>
				alert('Equipo guardado');
				
			  </script>";
	} else {
		echo "<script>
				alert('No se guardo');
			  </script>";
	}*/
 ?>