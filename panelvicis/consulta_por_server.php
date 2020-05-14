<?php 
	$ip=$_POST['valorCaja1'];
	$campania_carrier	=	$_POST['valorCaja2'];
	
    if($ip=='10.9.2.11')
        {
            $contraseña1 = "1234";
            $mysqli=new mysqli("$ip","cron","1234","asterisk");//@l**pbx++t3l3
        }
        else if($ip=='10.9.2.201')
        {
            $contraseña1 = "1234";
            $mysqli=new mysqli("$ip","cron","1234","asterisk");
        }
        else if($ip=='10.9.2.8')
        {
        	$contraseña1 = "1234";
       		$mysqli=new mysqli("$ip","cron","1234","asterisk")
        }
        else
        {
            $contraseña1 = "@l**pbx++t3l3";
            $mysqli=new mysqli("$ip","cron","@l**pbx++t3l3","asterisk");    
        }
        if(mysqli_connect_errno())
                    {
                        echo 'Conexion Fallida : ', mysqli_connect_error();
                        exit();
                    }
                    $usuario1 = "cron";
                    //$contraseña1 = "@l**pbx++t3l3";
                    $servidor1 = "$ip";
                    $baseDatos1 = "asterisk";
                    $conn = mysqli_connect($servidor1, $usuario1,$contraseña1) or die ("NO se a podido conectar al server ");
                    if(!$conn)
                    {
                        die("Conexion fallo!". mysqli_connect_error());
                    }
                    //echo "Conexcion lista!!";
                    $db2 = mysqli_select_db($conn,$baseDatos1) or die("upps!! no se a podido conectar con la bd");

 ?>