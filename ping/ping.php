<?php 

	$ping	=	$_POST['valorCaja1'];

	$res	= shell_exec("ping $ping");
	
	echo  "<pre>".$res."</pre>";


	/*
	if (strpos($res, "recibidos = 0")) {
		echo "Nose pudo hacer ping";
	} else {
		echo "Ping exitoso <br>";
		echo "$res";
	}*/
 ?>