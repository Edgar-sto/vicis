<?php
	require_once '../phpqrcode/qrlib.php';
	require 'conexion.php';

	$marcaCpu 		=	$_POST['marcaCPU'];
	$numSerieCpu 	= 	$_POST['num_serieCPU'];
	$modeloCpu 		=	$_POST['modeloCPU'];
	$mac 			=	$_POST['direccionMAC'];
	$ubicacion		=	$_POST['ubicacion'];
	$area			=	$_POST['area'];
	$comentary  	=	$_POST['comentario'];
	
	
	echo "$marcaCpu";
	echo "$numSerieCpu";
	echo "$modeloCpu";
	echo "$mac";
	echo "$ubicacion";
	echo "$area";
	echo "$comentary";
	echo "<br>";

	//$conectar 		= 	mysqli_connect($servidor, $usuario, $pass, $basededatos);

	//$insertar = "INSERT INTO cpu_oficial (marca_cpu, serie_cpu, modelo_cpu, mac_address, ubicacion, area, comentario) VALUES ( '$marcaCpu', '$numSerieCpu', '$modeloCpu', '$mac', '$ubicacion', '$area', '$comentary')";
	//$query = mysqli_query($conectar, $insertar);

	//Codigo QR
	$nombre_de_imagen = $ubicacion;
    $content = "Edgar, dueñas";
    //QRcode::png ($contenido, $archivo, $ecc, $tamaño, $margen)
    QRcode::png(
    $content,                                           //CONTENIDO
    "../img/".$nombre_de_imagen.".png",  //NOMBRE DEL ARCHIVO
    QR_ECLEVEL_L,                                       //INDICE DE CORRECION DE ERROREES
    6,                                                  //TAMAÑO EN PIXELES
    1,                                                  //TAMAÑO DEL MARGEN
    );


	if (QRcode) {
		echo "<script>
				alert('Equipo guardado');
				window.close();
			  </script>";
	} else {
		echo "<script>
				alert('No se guardo');
			  </script>";
	}
 ?>