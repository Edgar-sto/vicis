<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos Facturación</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_obtener_datos.css">
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<!-- Script obtener prefijos -->
    <script>
        $(document).on('ready',function()
        {
           	$('#btn-obtener').click(function()
           	{
                var url = "obtener_prefijos.php";
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
                    beforeSend: function ()
                    {
                    	$("#resp").html("Procesando, espere por favor...");
                	},
                	success:function(data)
                    {
                      	console.log(data);
                       	$('#resp').html(data);
                	}
                });
            });
        });
	</script>
	<!-- Script obtener campañas -->
    <script>
        $(document).on('ready',function()
        {
           	$('#btn-obtener-campañas').click(function()
           	{
                var url = "obtener_campañas.php";
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
                       	$('#resp_campañas').html(data);
                	}
                });
            });
        });
	</script>
	<!-- Script obtener grupos -->
    <script>
        $(document).on('ready',function()
        {
           	$('#btn-obtener-grupos').click(function()
           	{
                var url 		=	"obtener_grupos.php";
                var carrier		= 	$('#carrier').val();
                var campania 	=	$('#campania').val(); 
                var prefijos 	=	$('#prefijos').val(); 
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
                    data:{carrier:carrier, campania:campania, prefijos:prefijos, fecha_inicio:f_inicio, fecha_termino:f_termino},
                    //beforeSend:function (){},
                    success:function(data)
                    {
                      	console.log(data);
                       	$('#resp_grupos').html(data);
                	}
                });
            });
        });
	</script>
</head>

<body>
	<div class="container-fluid">
		<div class="outset row">

			<!-- PREFIJOS -->
			<div class="col-md-2 fondopanel">
				<h3>Prefijos:</h3>
				<div class="form-group">
					<!-- Selector de reporte -->
                	<div class="form-check">
                        <label class="nav-group-title" for="carrier">Reporte</label>
                        <select class="form-control form-control-sm" id="carrier" name="carrier">
                        <!--General etiquetas por reporte-->
			            <?php
			                $servidor = array(5, 6, 8, 11, 22, 27, 28, 29, 35, 36, 37, 38, 39, 41, 42, 43, 44, 45, 46, 201);
			                $tamanio_array_servidor = count($servidor);
			                echo "<br/>";
			                for ($i=0; $i < $tamanio_array_servidor; $i++)
			                {
			                   	echo "<option>reporte_$servidor[$i]</option>";
			                }
			            ?>
                        </select>
                	</div>
                	<!-- Seccion para seleccionar fehas -->	
	                <div class="form-check">
	                    <label for="fecha_inicio" class="nav-group-title">Fechas Inicio</label>
	                    <input id="fecha_inicio" type="date" name="fecha_inicio" class="form-control form-control-sm">
					    <label class="nav-group-title" for="fecha_termino">Fechas Termino</label>
	                    <input class="form-control form-control-sm" id="fecha_termino" name="fecha_termino" type="date">
	                </div>
	                <br>
	                <!-- Seccion botón -->	
	                <div >
	                  	<input class="btn btn-secondary btn-lg btn-block" id='btn-obtener' name="btn-obtener" type="submit" value="Obtener" >
                    </div>
                </div>
			</div>
			<div class="col-md-1 fondoresultados" id="resp">
			</div>
			<!-- FIN PREFIJOS -->

			<!-- CAMPAÑAS -->
			<div class="col-md-2 fondopanel">
				<h3>Campañas:</h3>
				<div class="form-group">
					<!-- Selector de reporte -->
                	<div class="form-check">
                        <label class="nav-group-title" for="carrier">Reporte</label>
                        <select class="form-control form-control-sm" id="carrier" name="carrier">
                        <!--General etiquetas por reporte-->
			            <?php
			                $servidor = array(5, 6, 8, 11, 22, 27, 28, 29, 35, 36, 37, 38, 39, 41, 42, 43, 44, 45, 46, 201);
			                $tamanio_array_servidor = count($servidor);
			                echo "<br/>";
			                for ($i=0; $i < $tamanio_array_servidor; $i++)
			                {
			                   	echo "<option>reporte_$servidor[$i]</option>";
			                }
			            ?>
                        </select>
                	</div>
                	<!-- Seccion para seleccionar fehas -->	
	                <div class="form-check">
	                    <label for="fecha_inicio" class="nav-group-title">Fechas Inicio</label>
	                    <input id="fecha_inicio" type="date" name="fecha_inicio" class="form-control form-control-sm">
					    <label class="nav-group-title" for="fecha_termino">Fechas Termino</label>
	                    <input class="form-control form-control-sm" id="fecha_termino" name="fecha_termino" type="date">
	                </div>
	                <br>
	                <!-- Seccion botón -->	
	                <div >
	                  	<input class="btn btn-secondary btn-lg btn-block" id='btn-obtener-campañas' name="btn-obtener" type="submit" value="Obtener" >
                    </div>
                </div>
			</div>
			<div class="col-md-1 fondoresultados" id="resp_campañas">
			</div>
			<!-- FIN CAMPAÑAS -->

			<!-- GRUPOS -->
			<div class="col-md-2 fondopanel">
				<h3>Grupos:</h3>
				<div class="form-group">
					<!-- Selector de rreporte -->
                	<div class="form-check">
                        <label class="nav-group-title" for="carrier">Reporte</label>
                        <select class="form-control form-control-sm" id="carrier" name="carrier">
                        <!--Generar etiquetas por reporte-->
				            <?php
				                $servidor = array(5, 6, 8, 11, 22, 27, 28, 29, 35, 36, 37, 38, 39, 41, 42, 43, 44, 45, 46, 201);
				                $tamanio_array_servidor = count($servidor);
				                echo "<br/>";
				                for ($i=0; $i < $tamanio_array_servidor; $i++)
				                {
				                   	echo "<option>reporte_$servidor[$i]</option>";
				                }
				            ?>
						</select>
						<!--Generar etiquetas por campaña-->
						<label class="nav-group-title" for="campania">Campaña</label>
						<select class="form-control form-control-sm" id="campania" name="campania">
							<?php
								$campania = array('0001', '0002', '0003', '0004', '0005', '0006', '0007', '0008', '0009', '0011', '0012', '0013', '0014', '0015', '0016', '0027', '001',' 002', '003', '004', '005', '006', '007', '008', '009', '010', '011', '012', '013', '014', '015', '016', '017', '018', '019', '020', '021', '022', '027');
								$tamanio_array_campania = count($campania);
								echo "<br/>";
								for ($j=0; $j < $tamanio_array_campania; $j++)
				                {
				                	echo "<option>$campania[$j]</option>";
				                }
							?>
						</select>
						<!--Generar etiquetas por prefijo-->
						<label class="nav-group-title" for="prefijos">Prefijo</label>
						<select class="form-control form-control-sm" id="prefijos" name="prefijos">
							<?php 
								$prefijo_local = array(9, 11, 209, 210, 222, 223);
								$tamanio_array_prefijo_local = count($prefijo_local);
								$prefijo_raptor = array(777, 999, 444, 888);
								$tamanio_array_prefijo_raptor = count($prefijo_raptor);
								echo "<br/>";
								for ($pl=0; $pl < $tamanio_array_prefijo_local; $pl++)
				                {
				                	echo "<option>$prefijo_local[$pl]</option>";
				                }
				                for ($pr=0; $pr < $tamanio_array_prefijo_raptor; $pr++)
				                {
				                	echo "<option>$prefijo_raptor[$pr]</option>";
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
	                <!-- Seccion botón -->	
	                <div >
	                  	<input class="btn btn-secondary btn-lg btn-block" id='btn-obtener-grupos' name="btn-obtener" type="submit" value="Obtener" >
                    </div>
                </div>
			</div>
			<div class="col-md-1 fondoresultados" id="resp_grupos">
			</div>
			<!-- FIN GRUPOS -->
		</div>

		<!-- Segunda sección de la ventana -->
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam nemo officiis ipsam, architecto ad, ipsa molestias dignissimos voluptate tempore, at expedita provident incidunt. Voluptas debitis quos, asperiores, molestias vitae sed.</p>

		</div>
	</div>
</body>
</html>