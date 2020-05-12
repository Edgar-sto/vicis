<?php 

	$ping	=	$_POST['valorCaja1'];

	$res	= exec("ping -c 10 $ping");
	
	if (strpos($res, "recibidos = 0")) {
		echo "Nose pudo hacer ping";
	} else {
		echo "Ping exitoso <br>";
		echo "$res";
	}
 ?>