<?php
	//$usuario=$_POST['user'];
	$ip=$_POST['servidor'];
	$contraseña=$_POST['pass'];
	$baseDatos1 ='asterisk';
	$id_user=$_POST['userid'];
	$user_server='cron';
	//echo $ip."". $contraseña ."". $baseDatos1."". $id_user;
	$conn = mysqli_connect($ip, $user_server,$contraseña) or die ("NO se a podido conectar al server ");
	if(!$conn)
		{
	  		die("Conexion fallo!". mysqli_connect_error());
		}

		$db2 = mysqli_select_db($conn,$baseDatos1) or die("upps!! no se a podido conectar con la bd");
		
		$level = "SELECT user_level FROM vicidial_users WHERE user_id='$id_user'";
		$level_= mysqli_query($conn, $level);
		while ($row_level = mysqli_fetch_assoc($level_))
		{
			$level_us = $row_level['user_level'];
            if ($level_us == '1')
		    {
		        $resetear_usuario = "UPDATE vicidial_users SET pass='hsbc123', last_date=now() where user_id='$id_user' ; ";
		        $act = mysqli_query($conn, $resetear_usuario);
				$Select="SELECT last_date from vicidial_users where user_id='$id_user'";
				$act2 = mysqli_query($conn, $Select);
				while( $row = mysqli_fetch_assoc($act2))
				{
       				echo $row['last_date'];
       			}
		    }
		    else if ($level_us == '7')
		    {
				$resetear_usuario = "UPDATE vicidial_users SET pass='supervisor123', last_date=now() where user_id='$id_user' ; ";
		        $act = mysqli_query($conn, $resetear_usuario);
				$Select="SELECT last_date from vicidial_users where user_id='$id_user'";
				$act2 = mysqli_query($conn, $Select);
				while( $row = mysqli_fetch_assoc($act2))
				{
       				echo $row['last_date'];
       			}
		    } 
		    else
		    {
		    	$resetear_usuario = "UPDATE vicidial_users SET pass='coke123', last_date=now() where user_id='$id_user' ; ";
		        $act = mysqli_query($conn, $resetear_usuario);
				$Select="SELECT last_date from vicidial_users where user_id='$id_user'";
				$act2 = mysqli_query($conn, $Select);
				while( $row = mysqli_fetch_assoc($act2))
				{
       				echo $row['last_date'];
       			}
		    }
		}
/*		$resetear_usuario = "UPDATE vicidial_users SET pass='hsbc123', last_date=now() where user_id='$id_user' ; ";
		//$resetear_usuario = "UPDATE vicidial_users SET pass='hsbc123', last_date=now() where user_id='$id_user' ; ";
		$act = mysqli_query($conn, $resetear_usuario);

		$Select="SELECT last_date from vicidial_users where user_id='$id_user'";
		$act2 = mysqli_query($conn, $Select);
		while( $row = mysqli_fetch_assoc($act2))
		{
       		echo $row['last_date'];
       	}*/
?>