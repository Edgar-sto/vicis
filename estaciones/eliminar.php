<?php
	require 'conexion.php';
	$tabla			=	$_POST['que_tabla'];
	$num_serie	=	$_POST['numero_de_serie'];
	$conectar 		= 	mysqli_connect($servidor, $usuario, $pass, $basededatos);

	switch ($tabla) {
        case 'Cpu':
          	$consulta = "DELETE FROM cpu_oficial WHERE serie_cpu = $num_serie";
			$query = mysqli_query($conectar, $consulta);
			if ($query) {
				echo "<script>
					alert('Equipo eliminado');
					windows.close();
				  </script>";
			} else {
				echo "<script>
					alert('Equipo no encontrado');
				  </script>";
			}
		break;

		case 'Monitor':
           	$consulta = "DELETE FROM monitor_oficial WHERE serie_monitor = $num_serie";
			$query = mysqli_query($conectar, $consulta);
			if ($query) {
				echo "<script>
						alert('Equipo eliminado');
						windows.close();
					  </script>";
			} else {
				echo "<script>
						alert('Equipo no encontrado');
					  </script>";
			}
		break;

		case 'Diadema':
           	$consulta = "DELETE FROM diademas WHERE num_serie = $num_serie";
			$query = mysqli_query($conectar, $consulta);
			if ($query) {
				echo "<script>
						alert('Equipo eliminado');
						windows.close();
					  </script>";
			} else {
				echo "<script>
						alert('Equipo no encontrado');
					  </script>";
			}
		break;
		case 'Mouse_piso':
			$consulta	=	"UPDATE `soporte`.`mouse` SET `piso`='$num_serie' WHERE  `uniqueid`=1";
			$query = mysqli_query($conectar, $consulta);
			if ($query) {
				echo "<script>
						alert('Equipo eliminado');
						windows.close();
					  </script>";
			} else {
				echo "<script>
						alert('Equipo no encontrado');
					  </script>";
			}
		break;
		case 'Mouse_almacen':
			$consulta	=	"UPDATE `soporte`.`mouse` SET `almacen`='$num_serie' WHERE  `uniqueid`=1";
			$query = mysqli_query($conectar, $consulta);
			if ($query) {
				echo "<script>
						alert('Equipo eliminado');
						windows.close();
					  </script>";
			} else {
				echo "<script>
						alert('Equipo no encontrado');
					  </script>";
			}
		break;
		case 'Teclado_piso':
			$consulta	=	"UPDATE `soporte`.`teclados` SET `piso`='$num_serie' WHERE  `uniqueid`=128";
			$query = mysqli_query($conectar, $consulta);
			if ($query) {
				echo "<script>
						alert('Equipo eliminado');
						windows.close();
					  </script>";
			} else {
					echo "<script>
							alert('Equipo no encontrado');
						  </script>";
				}
			break;

			case 'Teclado_almacen':
				$consulta	=	"UPDATE `soporte`.`teclados` SET `almacen`='$num_serie' WHERE  `uniqueid`=128";
				$query = mysqli_query($conectar, $consulta);

				if ($query) {
					echo "<script>
							alert('Equipo eliminado');
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