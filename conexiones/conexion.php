<?php 
    //usuarios
    $usuario    	= 	"root";
    //pass
    $pass       	= 	"";
    //servidores
    $servidor_local	=	"127.0.0.1";
    //Bases de datos
    $basededatos	= 	"soporte";
    $bd_inventario  =   "soporte_mariano";
    //Conexiones
    $conectar 		= 	mysqli_connect($servidor_local, $usuario, $pass, $basededatos);
    $conexion_inventario    =   mysqli_connect($servidor_local, $usuario, $pass, $bd_inventario);

	/* comprobar la conexión 
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s", mysqli_connect_error());
    exit();
}

comprobar si el servidor sigue funcionando 
if (mysqli_ping($conectar)) {
    printf ("¡La conexión está bien!");
} else {
    printf ("Error: %s\n", mysqli_error($conectar));
}

cerrar la conexión 
mysqli_close($conectar);*/
?>
    