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

	$output = shell_exec('ls'); 
  
// Display the list of all file 
// and directory 
echo "<pre>$output</pre>"; 
	/*exec("$ping", $output);
	foreach ($output as $x) {
		print_r($x."<br>");
	}*/
 ?>