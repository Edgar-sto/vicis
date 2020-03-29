<?php
	//$usuario=$_POST['user'];
	$ip=$_POST['servidor'];
	$contraseña=$_POST['pass'];
	$baseDatos1 ='asterisk';
	$id_user=$_POST['userid'];
	$user_server='cron';
	//echo $ip."". $contraseña ."". $baseDatos1."". $id_user;
	$conn = mysqli_connect($ip,$user_server,$contraseña) or die ("NO se a podido conectar al server ");
	if(!$conn)
	{
	  die("Conexion fallo!". mysqli_connect_error());
	}

	$db2 = mysqli_select_db($conn,$baseDatos1) or die("upps!! no se a podido conectar con la bd");
	$activa_user="UPDATE vicidial_users SET active='N' where user_id='$id_user' ; ";
	 $act = mysqli_query($conn, $activa_user);

	$Select="SELECT active from vicidial_users where user_id='$id_user'";
	 $act2 = mysqli_query($conn, $Select);
	 
	while( $row = mysqli_fetch_assoc($act2))
	{
		echo $row['active'];

	}
?>