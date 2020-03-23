<?php
	require 'conexion.php';
	$que_se_reubicara	=	$_POST['que_se_reubicara'];
	$ubicacion_actual	=	$_POST['ubicacion_actual'];
	$nueva_ubicacion	=	$_POST['nueva_ubicacion'];
	$conectar 		= 	mysqli_connect($servidor, $usuario, $pass, $basededatos);

	switch ($que_se_reubicara) {
        case 'Cpu':
          	$consulta = "UPDATE cpu_oficial SET ubicacion = '$nueva_ubicacion' WHERE ubicacion = '$ubicacion_actual'";
			$query = mysqli_query($conectar, $consulta);
			if ($query) {
				echo "<script>
					alert('Equipo reubicado');
					windows.close();
				  </script>";
			} else {
				echo "<script>
					alert('Equipo no encontrado');
				  </script>";
			}
		break;

		case 'Monitor':
           	$consulta = "UPDATE monitor_oficial SET ubicacion = '$nueva_ubicacion' WHERE ubicacion = '$ubicacion_actual'";
			$query = mysqli_query($conectar, $consulta);
			if ($query) {
				echo "<script>
						alert('Equipo reubicaco');
						windows.close();
					  </script>";
			} else {
				echo "<script>
						alert('Equipo no encontrado');
					  </script>";
			}
		break;
	}
?>