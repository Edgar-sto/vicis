<!DOCTYPE html>
<html>
    <head>
        <title>Panel ViciDial</title>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
        <!-- Javascript -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
        <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <img class=".img-fluid" src="img/vicidial_admin_web_logo.png">
                    <!--General botones-->
                    <?php
                        $servidor = array(5, 6, 8, 9, 14, 16, 35, 38, 42, 43, 45, 22, 27, 28, 29, 36, 39, 41, 44, 46, 201);
                        $tamanio_array_servidor = count($servidor);
                        echo "<br/>";
                        for ($i=0; $i < $tamanio_array_servidor; $i++) {
                            echo "<input class=\"btn btn-primary btn-md btn-block\" type=\"button\" id=\"server_$servidor[$i]\" value=\"Server $servidor[$i]\" target=\"_blank\" />";
                        }
                    ?>   
                </div>
                <div class="col-md-1 align-self-start">
                    <script type="text/javascript">
                        $(document).ready(function(){
                            <?php
                                for ($j=0; $j < $tamanio_array_servidor; $j++) {
                                    echo "$('#server_$servidor[$j]').click(function(){";
                                    for ($k=0; $k < $tamanio_array_servidor; $k++) {
                                        if ($servidor[$k] == $servidor[$j]) {
                                            echo "$('#ocultar_ser_$servidor[$j]').each(function() {
                                            displaying = $(this).css('display');
                                            if(displaying == 'block') {
                                                $(this).fadeOut('slow',function() {
                                                    $(this).css('display','none');
                                                });
                                            } else {
                                                $(this).fadeIn('slow',function() {
                                                    $(this).css('display','block');
                                                });
                                            }
                                            });
                                        });";
                                        } else {
                                            echo "$('#ocultar_ser_$servidor[$k]').hide();";
                                        }    
                                    }
                                }
                            ?>
                        });
                    </script>
                    <!--Server5-->
                    <div id="ocultar_ser_5" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.5</h3>
                        <object type="text/html" width="100%" height="871px" data="http://10.9.2.5/vicidial/welcome.php"></object>
                    </div> 
                    <!--Server6-->
                    <div id="ocultar_ser_6" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.6</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.6/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server8-->
                    <div id="ocultar_ser_8" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.8</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.8/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server9-->
                    <div id="ocultar_ser_9" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.9</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.9/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server14-->
                    <div id="ocultar_ser_14" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.14</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.14/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server16-->
                    <div id="ocultar_ser_16" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.16</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.16/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server35-->
                    <div id="ocultar_ser_35" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.35</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.35/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server38-->
                    <div id="ocultar_ser_38" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.38</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.38/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server42-->
                    <div id="ocultar_ser_42" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.42</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.42/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server43-->
                    <div id="ocultar_ser_43" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.43</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.43/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server45-->
                    <div id="ocultar_ser_45" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.45</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.45/vicidial/welcome.php"></object>  
                    </div>
                    <!--Sucursales Externas-->
                    <!--Server22-->
                    <div id="ocultar_ser_22" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.22</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.22/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server27-->
                    <div id="ocultar_ser_27" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.27</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.27/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server28-->
                    <div id="ocultar_ser_28" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.28</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.28/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server29-->
                    <div id="ocultar_ser_29" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.29</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.29/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server36-->
                    <div id="ocultar_ser_36" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.36</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.36/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server39-->
                    <div id="ocultar_ser_39" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.39</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.39/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server41-->
                    <div id="ocultar_ser_41" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.41</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.41/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server44-->
                    <div id="ocultar_ser_44" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.44</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.44/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server46-->
                    <div id="ocultar_ser_46" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.46</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.46/vicidial/welcome.php"></object>  
                    </div>
                    <!--Server201-->
                    <div id="ocultar_ser_201" style="display:none;width:1000px;height:100px;">
                        <h3 class="h3_titulos">10.9.2.201</h3>
                        <object type="text/html" width="100%" height="900px" data="http://10.9.2.201/vicidial/welcome.php"></object>  
                    </div>
                </div>
            </div>            
        </div>
    </body>
</html>