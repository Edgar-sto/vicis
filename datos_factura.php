<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos Facturación</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_datos_factura.css">
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>
	<header>
		<?php
	            $usuario      = "root";
	            $pass         = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
	            $servidor     = "127.0.0.1";
	            $basededatos  = "telefonia";
	            if ($conexion = mysqli_connect( $servidor, $usuario, $pass )) {
	                //echo "<h1 class='title'>Conección servidor pruebas</h1>";
	            } else {
	                //echo "<h1 class='title'>Conección fallida</h1>";
	            }
	            if ($db = mysqli_select_db( $conexion, $basededatos )) {
	                //echo "<h1 class='title'>Conección a BD de pruebas</h1>";
	            } else {
	                //echo "<h1 class='title'>Conección a BD fallida</h1>";
	            }
	    ?>
	</header>
	<div class="container-fluid">
		<div class="outset row">
			<div class="col-md-2 fondopanel">
				<h3>Obtener Prefijos:</h3>
				<div class="form-group">
                	<div class="form-check">
                        <label class="nav-group-title" for="carrier">Prefijo</label>
                            <select class="form-control form-control-sm" id="carrier" name="carrier">
                            	<!--General botones-->
			                    <?php
			                        $servidor = array(5, 6, 8, 9, 14, 16, 35, 38, 42, 43, 45, 22, 27, 28, 29, 36, 39, 41, 44, 46, 201);
			                        $tamanio_array_servidor = count($servidor);
			                        echo "<br/>";
			                        for ($i=0; $i < $tamanio_array_servidor; $i++) {
			                        	echo "<option>reporte_$servidor[$i]</option>";
			                        }
			                    ?>
                            </select>
                	</div>	
	                    <div class="form-check">
	                        <label for="fecha_inicio" class="nav-group-title">Fechas Inicio</label>
	                        <input id="fecha_inicio" type="date" name="fecha_inicio" class="form-control form-control-sm">

	                        <label class="nav-group-title" for="fecha_termino">Fechas Termino</label>
	                        <input class="form-control form-control-sm" id="fecha_termino" name="fecha_termino" type="date">
	                    </div>
	                    <br>
	                    <div >
	                    	<input class="btn btn-secondary btn-lg btn-block" id='btn-obtener' name="btn-obtener" type="submit" value="Obtener" >
                    </div>
                </div>
			</div>
            <script>
                $(document).on('ready',function()
                {
                  	$('#btn-obtener').click(function(){
                        var url = "obtener_datos.php";
                        var carrier= $('#carrier').val();
                        var f_inicio = $('#fecha_inicio').val();
                        var f_termino = $('#fecha_termino').val();
                        console.log(f_inicio+f_termino);
                        if(f_inicio =='')
                        {
                            alert('hola mundo');
					    }
                        $.ajax(
    	                {
                            type: "POST",
                            url: url,
                            data:{carrier:carrier, fecha_inicio:f_inicio, fecha_termino:f_termino},
                            //beforeSend:function (){},
                            success:function(data)
                            {
                              	console.log(data);
                              	$('#resp').html(data);
                            }
                        });
                    });
                });
		    </script>			
			<div class="fondoquery1 col" id="resp">
				

			</div>
		</div>
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam nemo officiis ipsam, architecto ad, ipsa molestias dignissimos voluptate tempore, at expedita provident incidunt. Voluptas debitis quos, asperiores, molestias vitae sed.</p>

		</div>
	</div>
</body>
</html>