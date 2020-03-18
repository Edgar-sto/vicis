<?php
	require_once '../phpqrcode/qrlib.php';
	require 'conexion.php';

	$marcaMonitor 		=	$_POST['marca-monitor'];
	$numSerieMonitor 	= 	$_POST['num-serie-monitor'];
	$modeloMonitor 		=	$_POST['modelo-monitor'];
	$ubicacion		=	$_POST['ubicacion'];
	$area			=	$_POST['area'];
	$comentary  	=	$_POST['comentario'];

	/*echo "$marcaMonitor";
	echo "$numSerieMonitor";
	echo "$modeloMonitor";
	echo "$ubicacion";
	echo "$comentary";*/
	echo "<br>";

	$conectar 		= 	mysqli_connect($servidor, $usuario, $pass, $basededatos);
	$insertar = "INSERT INTO monitor_oficial (marca_monitor, serie_monitor, modelo_monitor, ubicacion, area, comentario) VALUES ( '$marcaMonitor', '$numSerieMonitor', '$modeloMonitor', '$ubicacion', '$area', '$comentary')";
	$query = mysqli_query($conectar, $insertar);

	//Codigo QR
	$nombre_de_imagen = $ubicacion;
    $content = "$marcaMonitor, $numSerieMonitor, $modeloMonitor, $ubicacion, $area, $comentary";
    //QRcode::png ($contenido, $archivo, $ecc, $tamaño, $margen)
    QRcode::png(
    $content,                                           //CONTENIDO
    "../img/codigos_qr/monitor/".$nombre_de_imagen.".png",  //NOMBRE DEL ARCHIVO
    QR_ECLEVEL_L,                                       //INDICE DE CORRECION DE ERROREES
    6,                                                  //TAMAÑO EN PIXELES
    1,                                                  //TAMAÑO DEL MARGEN
    );


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