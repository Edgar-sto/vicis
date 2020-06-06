<?php
	/*
    5, 6, 22, 27, 28, 29, 35, 36, 37, 38, 39, 41, 
    cron
    @l**pbx++t3l3

    8, 11, 201
    cron
    1234

    */
	$usuario    	= 	"cron";
	$password       = 	"@l**pbx++t3l3";
    $contraseña     =   "1234";
	$servidor_5   	=	"10.9.2.5";
    $servidor_6     =   "10.9.2.6";
    $servidor_8     =   "10.9.2.8";
    $servidor_11    =   "10.9.2.11";
    $servidor_22    =   "10.9.2.22";
    $servidor_27    =   "10.9.2.27";
    $servidor_28    =   "10.9.2.28";
    $servidor_29    =   "10.9.2.29";
    $servidor_35    =   "10.9.2.35";
    $servidor_36    =   "10.9.2.36";
    $servidor_37    =   "10.9.2.37";
    $servidor_38    =   "10.9.2.38";
    $servidor_39    =   "10.9.2.39";
    $servidor_41    =   "10.9.2.41";
    $servidor_42    =   "10.9.2.42";
    $servidor_43    =   "10.9.2.43";
    $servidor_43    =   "10.9.2.43";
    $servidor_44    =   "10.9.2.44";
    $servidor_45    =   "10.9.2.45";
    $servidor_46    =   "10.9.2.46";
    $servidor_201   =   "10.9.2.201";
                
	$basededatos	= 	"asterisk";

	$conectar_5 	= 	mysqli_connect($servidor_5, $usuario, $password, $basededatos);
    $conectar_6     =   mysqli_connect($servidor_6, $usuario, $password, $basededatos);
    $conectar_22    =   mysqli_connect($servidor_22, $usuario, $password, $basededatos);
    $conectar_27    =   mysqli_connect($servidor_27, $usuario, $password, $basededatos);
    $conectar_28    =   mysqli_connect($servidor_28, $usuario, $password, $basededatos);
    $conectar_29    =   mysqli_connect($servidor_29, $usuario, $password, $basededatos);
    $conectar_35    =   mysqli_connect($servidor_35, $usuario, $password, $basededatos);
    $conectar_36    =   mysqli_connect($servidor_36, $usuario, $password, $basededatos);
    $conectar_37    =   mysqli_connect($servidor_37, $usuario, $password, $basededatos);
    $conectar_38    =   mysqli_connect($servidor_38, $usuario, $password, $basededatos);
    $conectar_39    =   mysqli_connect($servidor_39, $usuario, $password, $basededatos);
    $conectar_41    =   mysqli_connect($servidor_41, $usuario, $password, $basededatos);
    $conectar_42    =   mysqli_connect($servidor_42, $usuario, $password, $basededatos);
    $conectar_43    =   mysqli_connect($servidor_43, $usuario, $password, $basededatos);
    $conectar_44    =   mysqli_connect($servidor_44, $usuario, $password, $basededatos);
    $conectar_45    =   mysqli_connect($servidor_45, $usuario, $password, $basededatos);
    $conectar_46    =   mysqli_connect($servidor_46, $usuario, $password, $basededatos);

    $conectar_8     =   mysqli_connect($servidor_8, $usuario, $contraseña, $basededatos);
    $conectar_11    =   mysqli_connect($servidor_11, $usuario, $contraseña, $basededatos);
    $conectar_201   =   mysqli_connect($servidor_201, $usuario, $contraseña, $basededatos);

    //consulta servidor 5
	$info_servidor_5 =	"SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns";
	//conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_5, $info_servidor_5);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tablas
    $servidor = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43);
    $tamanio_array_servidor = count($servidor);
    for ($i=0; $i < $tamanio_array_servidor; $i++)
    {


  	echo "   
                            $cual_server = $servidor[$i];
                            <thead >
                                <th colspan='5'>Server" .$cual_server."</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta = mysqli_query($conectar_.$cual_server, $info_servidor_.$cual_server);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>";
    }
?>