<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Campañas activas por server</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/campanias_activas.css">
    <link rel="shortcut icon" href="img/campanias_activas.ico" />
    <!-- Tipografias -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
        /*Cargar imagen GIF de carga*/
        $(document).ajaxStart(function () {
            $('#ajaxBusy').show();
        }).ajaxStop(function () {
            $('#ajaxBusy').hide();
        });
        /*Funcion para cargar  archivos de consulta*/
        function realizaconsulta(valorCaja1, valorCaja2){
            var parametros = {
                "valorCaja1" : valorCaja1,
                "valorCaja2" : valorCaja2,
            }; 
            $.ajax({
                data:  parametros,
                url:   'consulta_por_server.php',
                type:  'post',
                beforeSend: function () {
                    $("#area_de_resultados").html("Consultando, espere por favor...");
                },
                success:  function (response) {
                    $("#area_de_resultados").html(response);
                }
            });
        }
    </script>
</head>
<body>
	<!-- Tablas vici para obtener datos
			vicidial_server_carriers 
			vicidial_campaigns
	-->
	<div class="container-fluid">
		<div id="area_de_datos" class="container">
			<form class="">
				<table class="datos_a_buscar">
                    <tr>
                        <td>
                            <select class="form-control form-control-md" id="servidor" name="servidor">
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
                            <select class="form-control form-control-md" id="campania_carrier" name="cam_carr">
                                <option>Campañas</option>
                                <option>Carrier Activos</option>
                            </select>
                        </td>
                        <td>
                            <input type="button" href="javascript:;" onclick="realizaconsulta($('#servidor').val(), $('#campania_carrier').val());return false;" value="Consultar"/>
                        </td>
                    </tr>
                </table>
			</form>
		</div>
		<div id="area_de_resultados" class="container">
			<!--div id="ajaxBusy">
                <p>
                    <img src="ajax-loader.gif">
                </p>
            </div-->
		</div>
	</div>
</body>
</html>