<?php 
    require_once '../phpqrcode/qrlib.php';
    $estacion = $_POST['estacion'];
    $usuario    = "root";
    $pass       = "";
    $servidor   = "127.0.0.1";
    $basededatos= "soporte";
    $conexion = mysqli_connect( $servidor, $usuario, $pass );
    $db = mysqli_select_db( $conexion, $basededatos );
    $consulta = "SELECT * FROM estaciones WHERE num_estacion = '$estacion'";
    $resultado = mysqli_query($conexion, $consulta);

    $nombre_de_imagen = $local_host;
    $content = "$local_host, $direccion_mac, $serieCPU, $modeloCPU, $marcaCPU, $serieMONITOR, $marcaMONITOR";
    //QRcode::png ($contenido, $archivo, $ecc, $tamaño, $margen)
    QRcode::png(
        $content,                                           //CONTENIDO
        "../img/codigos_qr/".$nombre_de_imagen.".png",      //NOMBRE DEL ARCHIVO
        QR_ECLEVEL_L,                                       //INDICE DE CORRECION DE ERROREES
        6,                                                  //TAMAÑO EN PIXELES
        1,                                                  //TAMAÑO DEL MARGEN
    );
∫?>