<?php 
    $usuario    	= 	"root";
    $pass       	= 	"";
    $servidor   	=	"127.0.0.1";
    $basededatos	= 	"soporte";
    $conectar 		= 	mysqli_connect($servidor, $usuario, $pass, $basededatos);
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
    