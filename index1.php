<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <img class=".img-fluid" src="img/vicidial_admin_web_logo.png">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="http://127.0.0.1/facturacion/index.php" target="_blank">Facturación</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://127.0.0.1/vicis/datos_factura.php" target="_blank">Datos Facturación</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Vicis Dial
      </a>
      <div class="dropdown-menu">
        <?php
                        $servidor = array(5, 6, 8, 9, 14, 16, 35, 38, 42, 43, 45, 22, 27, 28, 29, 36, 39, 41, 44, 46, 201);
                        $tamanio_array_servidor = count($servidor);
                        
                        for ($i=0; $i < $tamanio_array_servidor; $i++) {
                        	echo "<a class=\"dropdown-item btn-md btn-block\" id=\"server_$servidor[$i]\" value=\"Server $servidor[$i]\" target=\"_blank\">Server $servidor[$i]</a>";
                        }
                    ?>
      </div>
    </li>
  </ul>
</nav> 
<br>

<div class="container">
	<script type="text/javascript">
        $(document).ready(function(){
        	<?php
            	for ($j=0; $j < $tamanio_array_servidor; $j++) {
                    echo "$('#server_$servidor[$j]').click(function(){";
                    for ($k=0; $k < $tamanio_array_servidor; $k++) {
                        if ($servidor[$k] == $servidor[$j])
                        {
	                        echo "$('#ocultar_ser_$servidor[$j]').each(function()
	                        {
	                            displaying = $(this).css('display');
	                            if(displaying == 'block')
	                            {
	                                $(this).fadeOut('slow',function()
	                                {
	                             		$(this).css('display','none');
	                                });
	                            }
	                            else
	                            {
	                                $(this).fadeIn('slow',function()
	                                {
	                                    $(this).css('display','block');
	                                });
	                            }
	                        });
	                               });";
                        }
                        else
                        {
                            echo "$('#ocultar_ser_$servidor[$k]').hide();";
                        }    
                    }
                }
            ?>
        });
    </script>
                <!--Server5-->
                <div id="ocultar_ser_5" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.5/vicidial/welcome.php"></object>
                </div> 
                <!--Server6-->
                <div id="ocultar_ser_6" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.6/vicidial/welcome.php"></object>  
                </div>
                <!--Server8-->
                <div id="ocultar_ser_8" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.8/vicidial/welcome.php"></object>  
                </div>
                <!--Server9-->
                <div id="ocultar_ser_9" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.9/vicidial/welcome.php"></object>  
                </div>
                <!--Server14-->
                <div id="ocultar_ser_14" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.14/vicidial/welcome.php"></object>  
                </div>
                <!--Server16-->
                <div id="ocultar_ser_16" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.16/vicidial/welcome.php"></object>  
                </div>
                <!--Server35-->
                <div id="ocultar_ser_35" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.35/vicidial/welcome.php"></object>  
                </div>
                <!--Server38-->
                <div id="ocultar_ser_38" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.38/vicidial/welcome.php"></object>  
                </div>
                <!--Server42-->
                <div id="ocultar_ser_42" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.42/vicidial/welcome.php"></object>  
                </div>
                <!--Server43-->
                <div id="ocultar_ser_43" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.43/vicidial/welcome.php"></object>  
                </div>
                <!--Server45-->
                <div id="ocultar_ser_45" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.45/vicidial/welcome.php"></object>  
                </div>
                <!--Sucursales Externas-->
                <!--Server22-->
                <div id="ocultar_ser_22" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.22/vicidial/welcome.php"></object>  
                </div>
                <!--Server27-->
                <div id="ocultar_ser_27" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.27/vicidial/welcome.php"></object>  
                </div>
                <!--Server28-->
                <div id="ocultar_ser_28" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.28/vicidial/welcome.php"></object>  
                </div>
                <!--Server29-->
                <div id="ocultar_ser_29" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.29/vicidial/welcome.php"></object>  
                </div>
                <!--Server36-->
                <div id="ocultar_ser_36" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.36/vicidial/welcome.php"></object>  
                </div>
                <!--Server39-->
                <div id="ocultar_ser_39" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.39/vicidial/welcome.php"></object>  
                </div>
                <!--Server41-->
                <div id="ocultar_ser_41" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.41/vicidial/welcome.php"></object>  
                </div>
                <!--Server44-->
                <div id="ocultar_ser_44" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.44/vicidial/welcome.php"></object>  
                </div>
                <!--Server46-->
                <div id="ocultar_ser_46" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.46/vicidial/welcome.php"></object>  
                </div>
                <!--Server201-->
                <div id="ocultar_ser_201" style="background:#000000;display:none;width:1000px;height:100px;">
                    <object type="text/html" width="100%" height="900px" data="http://10.9.2.201/vicidial/welcome.php"></object>  
                </div>
</div>

</body>
</html>