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
    //Tabla 5
  	echo "  
                <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 5</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_5, $info_servidor_5);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 6
    $info_servidor_6 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_6, $info_servidor_6);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 6
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 6</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_6, $info_servidor_6);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 8
    $info_servidor_8 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_8, $info_servidor_8);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 8
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 8</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_8, $info_servidor_8);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 11
    $info_servidor_11 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_11, $info_servidor_11);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 11
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 11</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_11, $info_servidor_11);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 22
    $info_servidor_22 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_22, $info_servidor_22);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 22
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 22</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_22, $info_servidor_22);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 27
    $info_servidor_27 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_27, $info_servidor_27);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 27
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 27</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_27, $info_servidor_27);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 28
    $info_servidor_28 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_28, $info_servidor_28);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 28
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 28</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_28, $info_servidor_28);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 29
    $info_servidor_29 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_29, $info_servidor_29);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 29
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 29</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_29, $info_servidor_29);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 35
    $info_servidor_35 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_35, $info_servidor_35);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 35
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 35</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_35, $info_servidor_35);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 36
    $info_servidor_36 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_36, $info_servidor_36);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla .36
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 36</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_36, $info_servidor_36);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 37
    $info_servidor_37 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_37, $info_servidor_37);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 37
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 37</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_37, $info_servidor_37);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 38
    $info_servidor_38 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_38, $info_servidor_38);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 38
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 38</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_38, $info_servidor_38);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 39
    $info_servidor_39 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_39, $info_servidor_39);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 39
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 39</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_39, $info_servidor_39);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 41
    $info_servidor_41 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_41, $info_servidor_41);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 41
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 41</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_41, $info_servidor_41);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 42
    $info_servidor_42 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_42, $info_servidor_42);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 42
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 42</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_42, $info_servidor_42);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 43
    $info_servidor_43 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_43, $info_servidor_43);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 43
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 43</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_43, $info_servidor_43);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 44
    $info_servidor_44 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_44, $info_servidor_44);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 44
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 44</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_44, $info_servidor_44);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 45
    $info_servidor_45 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_45, $info_servidor_45);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 45
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 45</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_45, $info_servidor_45);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 46
    $info_servidor_46 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_46, $info_servidor_46);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 46
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 46</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_46, $info_servidor_46);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";

    //consulta servidor 201
    $info_servidor_201 =  "SELECT campaign_id, campaign_name, active, dial_prefix, dial_method FROM vicidial_campaigns ORDER BY campaign_id";
    //conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar_201, $info_servidor_201);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 201
    echo "  <div class='media tm-notification-item'>
                    <div class='media-body'>
                        <table class='table table-bordered tabla_campanias'>
                            <thead >
                                <th colspan='5'>Server 201</th>
                            </thead>
                            <tbody>";
                                echo "<td class='medidas_cabecera'>Id Campaña</td>
                                <td class='medidas_cabecera'>Nombre</td>
                                <td class='medidas_cabecera'>Estado</td>
                                <td class='medidas_cabecera'>Prefijo</td>
                                <td class='medidas_cabecera'>Método</td>";
                                $ejecucion_consulta              =   mysqli_query($conectar_201, $info_servidor_201);
                                while ($resultado =   mysqli_fetch_array($ejecucion_consulta))
                                {
                                    $id_campania    =   $resultado['campaign_id'];
                                    echo "<tr>
                                            <td>".$resultado['campaign_id']."</td>
                                            <td>".$resultado['campaign_name']."</td>
                                            <td>".$resultado['active']."</td>
                                            <td>".$resultado['dial_prefix']."</td>
                                            <td>".$resultado['dial_method']."</td>
                                        </tr>";
                                }                              
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";
?>