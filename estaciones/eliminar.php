<?php
	require 'conexion.php';
	$num_estacion	=	$_POST['numero_de_estacion'];
	$conectar 		= 	mysqli_connect($servidor, $usuario, $pass, $basededatos);
	$consulta = "DELETE FROM estaciones WHERE uniqueid = $num_estacion";
	$query = mysqli_query($conectar, $consulta);

	if ($query) {
		echo "<script>
				alert('Equipo eliminado');
				window.close();
			  </script>";
	} else {
		echo "<script>
				alert('No se guardo');
			  </script>";
	}
?>