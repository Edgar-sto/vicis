<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<title>Cargar Usuarios</title>
  	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <body>
    <section class="text-center lado-a" >
		  <header>
  			<!-- Fixed navbar -->
  			<nav class="navbar navbar-default navbar-fixed-top" >
  				<!-- Conexión a servidor -->
          <?php 
  					include 'nav.php';
                $ip=$_GET['server'];
                if($ip=='10.9.2.11'){
                  $contraseña1 = "1234";
                  $mysqli=new mysqli("$ip","cron","1234","asterisk");//@l**pbx++t3l3
                }else if($ip=='10.9.2.201'){
                  $contraseña1 = "1234";
                  $mysqli=new mysqli("$ip","cron","1234","asterisk");
                }else {
                  $contraseña1 = "@l**pbx++t3l3";
                  $mysqli=new mysqli("$ip","cron","@l**pbx++t3l3","asterisk");    
                }
                echo" <div><center><h3>Usuarios Desactivados</h3></center></div>";
                echo "<h3 > Servidor Vicidial: ".$ip."</h3>";
                $usuario1 = "cron";
                //$contraseña1 = "@l**pbx++t3l3";
                $servidor1 = "$ip";
                $baseDatos1 = "asterisk";
                $conn = mysqli_connect($servidor1, $usuario1,$contraseña1) or die ("NO se a podido conectar al server ");
                if(!$conn){
                  die("Conexion fallo!". mysqli_connect_error());
                }
                //echo "Conexcion lista!!";
                $db2 = mysqli_select_db($conn,$baseDatos1) or die("upps!! no se a podido conectar con la bd");
  				?>
          <script>
            $(document).on('ready',function(){
              $('#btn-buscar').click(function(){
                var url = "datos_login.php";  
                var usuario= $('#user').val(); 
                var ip = "<?php echo "$ip";?>";                  
                var pass_server = "<?php echo "$contraseña1";?>";
                var user_serve = "<?php echo "$usuario1";?>";
                $.ajax({                        
                   type: "POST",                 
                   url: url,                    
                   data:{user:usuario,servidor:ip,pass:pass_server,user_server:user_serve} ,
                  beforeSend: function () {

                    
                  },
                  success: function(data)            
                  {
                    $('#resp').html(data);           
                  }
                });
              });
            });
          </script>
  			</nav>
		  </header>
		  <br>
		  <br>
		  <br><br><br>
			<br>
		  <br>
		  <br>
      <div class="panel panel-default">
        <div>
        	<input type="text"  id ='user' name="Buscar"  >
        	<input type="submit" id='btn-buscar' name="btn_Buscar" value="Buscar" >
        </div>
        <center>
          <div id='resp'></div>
        </center>     
      </div>
    </section>
  </body>
</html>