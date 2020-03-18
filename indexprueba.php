
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Estación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estaciones.css">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Tipografias -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).on('ready',function()
        {
            $('#btn-generar').click(function()
            {
                var url = "equipo/qr_cpu.php";
                var marcaCPU    =   $('marcaCPU').val();
                var numeroSerie =   $('num_serieCPU').val();
                var modelCPU    =   $('modeloCPU').val();
                var direccionMAC =  $('direccionMAC').val();
                var ubicacion   =   $('ubicacion').val();
                var area        =   $('area').val();
                var comentario  =   $('comentario').val();
                
                $.ajax(
                {
                    type: "POST",
                    url: url,
                    data:{marca_cpu:marcaCPU, num_serie_cpu:numeroSerie, modelo_cpu:modelCPU, direccion_mac:direccionMAC, ubicacion:ubicacion, area:area, comentary:comentario},


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
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3" id="datos">
               <h1>QR CPU</h1>
    <form action="estaciones/agregar_cpu.php" method="POST" name="form_guardar">
        <table class="table">
            <tbody>
                <tr>
                    <td>    <label class="form-check-label" for="marca_cpu">Marca CPU</label>               </td>
                    <td>    <input class="form-control-sm" type="text" name="marcaCPU" id="marca_cpu">      </td>   
                </tr>
                <tr>
                    <td>    <label class="form-check-label" for="num_serie_cpu">Número de serie</label>     </td>
                    <td>    <input class="form-control-sm" type="text" name="num_serieCPU" id="num_serie_cpu">  </td>
                </tr>
                <tr>
                    <td>    <label class="form-check-label" for="modelo_cpu">Modelo CPU</label>             </td>
                    <td>    <input class="form-control-sm" type="text" name="modeloCPU" id="modelo_cpu">    </td>
                </tr>
                <tr>
                    <td>    <label class="form-check-label" for="direccion_mac">Dirección MAC</label>       </td>
                    <td>    <input class="form-control-sm" type="text" name="direccionMAC" id="direccion_mac">  </td>
                </tr>
                <tr>
                    <td>    <label class="form-check-label" for="ubicacion_sucursal">Ubicación</label>                      </td>
                    <td>    <input class="form-control-sm" type="text" name="ubicacion" id="ubicacion"> </td>
                </tr>
                <tr>
                    <td>    <label class="form-check-label" for="area_sucursal">Área</label>                      </td>
                    <td>    <input class="form-control-sm" type="text" name="area" id="area"> </td>
                </tr>
                <tr>
                    <td>    <label class="form-check-label" for="comentary">Comentario</label>          </td>
                    <td>    <input class="form-control-sm" type="text" name="comentario" id="comentary">    </td>
                </tr>
                <tr>
                    <td class="columna_btn" colspan="2">
                        <input class="btn btn-secondary btn-lg btn-block" id='btn-generar' name="btn-generar" type="submit" value="Generar" >
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
            </div>
            
            <div class="col-3 modificar" id="resp">
                <h1 class="titulo_modificar">Modificar</h1>
                
            </div>

            <div class="col-3" id="codigo_qr">
                <h1 class="titulo_codigo_qr">Código QR</h1>
                
                <div class="result_qr">
                    
                    <img src='img/codigos_qr/cpu/<?=$nombre_de_imagen?>.png'>
                </div>
                <br>
            </div>

            
        </div>
        <div class="row">
            

        </div>
    </div>
</body>
</html>