<?php
	/*
    5, 6, 22, 27, 28, 29, 35, 36, 37, 38, 39, 41, 
    cron
    @l**pbx++t3l3

    8, 11, 201
    cron
    1234

    */
    $usuario	=	$_POST['valorCaja1'];
    $servidor    =   $_POST['valorCaja2'];
    echo "$usuario";
    echo "$servidor";
    $servidor1 = "10.9.2.6";
	$usuario1    	= 	"cron";
	$password       = 	"@l**pbx++t3l3";
    $contraseña     =   "1234";
                
	$basededatos	= 	"asterisk";

	$conectar_con_servidor 	= 	mysqli_connect($servidor, 'cron', $password, $basededatos);
    


    //consulta servidor 5
	$buscar_usuario = "SELECT user, full_name, pass, user_level, active, last_login_date FROM vicidial_users WHERE user='$usuario'";
	//conexion y ejecucion de querys
    $ejecucion_consulta = mysqli_query($conectar_con_servidor, $buscar_usuario);
    $resultado = mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla
?>
    <table id='campaign_table' class='table table-bordered tabla_campanias'>
        <thead >
            <td class='medidas_cabecera'>Usuario</td>
            <td class='medidas_cabecera'>Nombre</td>
            <td class='medidas_cabecera'>Contraseña</td>
            <td class='medidas_cabecera'>Nivel</td>
            <td class='medidas_cabecera'>Estado</td>
            <td class='medidas_cabecera'>Ultimo Ingreso</td>
        </thead>
        <tbody>
        <?php
            echo "<tr>
                <td>".$resultado['user']."</td>
                <td>".$resultado['full_name']."</td>
                <td>".$resultado['pass']."</td>
                <td>".$resultado['user_level']."</td>
                <td>".$resultado['active']."</td>
                <td>".$resultado['last_login_date']."</td>
            </tr>";                            
        ?>
        </tbody>
    </table>
