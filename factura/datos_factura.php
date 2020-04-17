<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8">
	<title>Datos Facturación</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos_obtener_datos.css">
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
                var troncales = $('#troncales').val();
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
                    data:{carrier:carrier, troncales:troncales, fecha_inicio:f_inicio, fecha_termino:f_termino},
                    //beforeSend:function (){},
                    beforeSend: function ()
                    {
                    	$("#resp").html("Consultando, espere por favor...");
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
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<!-- Monto por server -->
			<div class="row">
				<h3>Datos para facturacion</h3>
				<table style="width: 100%;">
					<thead>
						<tr>
							<th class="titulos_tabla">Reporte</th>
							<th class="titulos_tabla">Prefijos</th>
							<th class="titulos_tabla">Fecha de inicio</th>
							<th class="titulos_tabla">Fecha de termino</th>
							<th class="titulos_tabla">Botón</th>
						</tr>
					</thead>
					<tbody>
					<tr>
					<td>
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
					</td>
					<td>
						<select class="form-control form-control-sm" id="troncales" name="troncales">
	                        <!--General etiquetas por reporte-->
				            <?php
				                $troncales = array("'11', '999'" , "'444'" , "'888', '209','210','222','223'" , "'9', '777'");
				                $tamanio_array_troncal = count($troncales);
				                echo "<br/>";
				                for ($z=0; $z < $tamanio_array_troncal; $z++)
				                {
				                   	echo "<option>$troncales[$z]</option>";
				                }
				            ?>
	                    </select>
					</td>
					<td>
						<input id="fecha_inicio" type="date" name="fecha_inicio" class="form-control form-control-sm">
					</td>
					<td>
						<input class="form-control form-control-sm" id="fecha_termino" name="fecha_termino" type="date">
					</td>
					<td>
						<input class="btn btn-secondary btn-sm btn-block" id='btn-obtener' name="btn-obtener" type="submit" value="Obtener" >
					</td>
					</tr>
					</tbody>
				</table>
			</div>

			<div class="row fondoresultados text-left" id="resp">

			</div>
			
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<!-- Segunda sección de la ventana -->
			<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam nemo officiis ipsam, architecto ad, ipsa molestias dignissimos voluptate tempore, at expedita provident incidunt. Voluptas debitis quos, asperiores, molestias vitae sed.</p>

			</div>
		</div>
	</div>
</body>
</html>