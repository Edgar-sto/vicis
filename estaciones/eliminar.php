<?php
	
	require 'conexion.php';
	
	$num_estacion	=	$_POST['numero_de_estacion'];

	mysqli_select_db($conectar, $basededatos) or die("Error al conectar a la base de datos");
	$consulta = mysqli_query("DELETE FROM estaciones WHERE uniqueid = $num_estacion");

	if ($consulta) {
		echo "<script>
				alert('Equipo guardado');
			  </script>";
	} else {
		echo "<script>
				alert('No se guardo');
			  </script>";
	}

?>