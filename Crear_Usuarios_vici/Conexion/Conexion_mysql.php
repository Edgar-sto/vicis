<?php
/*
$ip=$_POST['server'];*/
$mysqli=new mysqli("10.9.2.25","cron","1234","asterisk"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
}



$usuario1 = "cron";
$contraseña1 = "1234";
$servidor1 = "10.9.2.25";
$baseDatos1 = "asterisk";


$conn = mysqli_connect($servidor1, $usuario1,$contraseña1) or die ("NO se a podido conectar al server ");
if(!$conn){

  die("Conexion fallo!". mysqli_connect_error());


}

//echo "Conexcion lista!!";

$db2 = mysqli_select_db($conn,$baseDatos1) or die("upps!! no se a podido conectar con la bd");
?>