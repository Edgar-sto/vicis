<?php 
    //usuarios
    $usuario        =   "root";
    //pass
    $pass           =   "";
    //servidores
    $servidor_local =   "127.0.0.1";
    //Bases de datos
    $bd_inventario  =   "soporte_mariano";
    //Conexiones
    $conexion_inventario    =   mysqli_connect($servidor_local, $usuario, $pass, $bd_inventario);

    /*
    comprobar si el servidor sigue funcionando 
    if (mysqli_ping($conectar)) {
        printf ("¡La conexión está bien!");
    } else {
        printf ("Error: %s\n", mysqli_error($conectar));
    }

    cerrar la conexión 
    mysqli_close($conectar);
    */
 ?>