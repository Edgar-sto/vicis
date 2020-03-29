 <!DOCTYPE html>
    <html lang="es" >
	   <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		</head>
	<body>
        <style type="text/css">
            .loade {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url('images/pageLoader.gif') 50% 50% no-repeat rgb(249,249,249);
                opacity: .8;
            }
            /*
            div .container{ background:url('2.jpg') 50% 50% no-repeat rgb(249,249,249); }
            div .table-bordered { background-color:#D8D8D8  }*/
        </style>
        <center>
		<header>
			<!-- Fixed navbar -->
			<nav  class="navbar navbar-default navbar-fixed-top" >
				<?php 
					include 'nav.php';
                    $ip=$_POST['server'];
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
                    else if($ip=='10.9.2.8'){
                    $contraseña1 = "1234";
                    $mysqli=new mysqli("$ip","cron","1234","asterisk");

                    }
                    else
                    {
                        $contraseña1 = "@l**pbx++t3l3";
                        $mysqli=new mysqli("$ip","cron","@l**pbx++t3l3","asterisk");    
                    }
                    //$mysqli=new mysqli("$ip","cron","@l**pbx++t3l3","asterisk"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
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
			</nav>
		</header>
        </center>
        <center>
    		<section class="instagram-wrap" >
    			<br>
                <br>
                <br>
                <div class="input-group" >
          		<div class="container">
                <?php
                    echo"<center><h1> <label> Servidor Vicidial: ".$ip=$_POST['server']."</label></h1></center>";
                    echo"<input type='hidden' id='ip' name='opcion' value=".$ip=$_POST['server'].">";
                    $server="SELECT * FROM `asterisk`.`system_settings`;";
                    $resultset0 = mysqli_query($conn, $server);
                    while( $rowscount = mysqli_fetch_assoc($resultset0) )
                    {
                        echo "<center><label> Version: ".$rowscount['version']."</label></center>"."<br>";
                        echo "<center><label>Instalacion: ".$rowscount['install_date']."</label></center>";
                    }
                ?>
                <div class="panel panel-default">
                <div class="panel-body">
                <br>
                <br>
                <div class="file-field">
                    <div class="input-group">
                        <label>Seleciona la Campaña:</label>
                        <br>
                        <select class="custom-select" id="inputGroup">
                            <?php
                                $sql = "SELECT user_group, group_name FROM vicidial_user_groups";
                                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                if(mysqli_num_rows($resultset))
                                {
                                    while( $rows3 = mysqli_fetch_assoc($resultset) )
                                    {
                                        echo " <option value=".$rows3['user_group'].">".$rows3['user_group']."--".$rows3['group_name']."</option>";
                                    }
                                }                   
                            ?>
                        </select>
                    <br> 
                    </div>
                    <div class="input-group">
                        <label>Seleciona el Nivel:</label>
                        <select class="custom-select" id="inputGroupSelect04">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                        <br>
                        <br>
                    </div>
                        <div >
                            <form class="md-form" action="../modulo/Creacion_Users/Activar_Usuarios.php" method="get"  id="import_form" >
                                <input type="submit" class="btn btn-primary" name="submit" value="ACTIVAR USUARIO" >
                                <?php
                                    echo"<input type='hidden' name='server' value=".$ip=$_POST['server'].">";
                                ?>
                            </form>
                    </div>
                    <br>
                    <br>
                    
        </center>
	</body>
</html>