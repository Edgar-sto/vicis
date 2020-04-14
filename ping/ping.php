<?php 

	$ping	=	$_POST['valorCaja1'];

	$res	= exec("ping $ping");
	
	if (strpos($res, "recibidos = 0")) {
		echo "Nose pudo hacer ping";
	} else {
		echo "Ping exitoso";
		echo "$res";
	}

	echo "<br>";

 ?>