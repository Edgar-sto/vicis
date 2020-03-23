<?php 
	$ping	=	$_POST['ping'];

	$res	= shell_exec("ping $ping");
	
	if (strpos($res, "recibidos = 0")) {
		echo "Nose pudo hacer ping";
	} else {
		echo "Ping exitoso";
	}
	/*exec("$ping", $output);
	foreach ($output as $x) {
		print_r($x."<br>");
	}*/
 ?>