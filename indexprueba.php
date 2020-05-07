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
                    <img class="img-fluid" src="img/sto_admin_web_logo.png">
                    <!--General botones-->
                    <img src="img/gifs/Router-01.gif">
                    <label for="">Server $servidor[$i]</label>
                    <img src="img/gifs/Router-01.gif">
                    <img src="img/gifs/Router-01.gif">
                    <?php
                        $servidor = array(5, 6, 8, 9, 14, 16, 22, 27, 28, 29, 35, 36, 37, 38, 39, 41, 42, 43, 44, 45, 46, 201);
                        $tamanio_array_servidor = count($servidor);
                        echo "<br/>";
                        for ($i=0; $i < $tamanio_array_servidor; $i++)
                        {
                            echo "<img src='img/gifs/Router-01.gif'>
                                  <label>Server $servidor[$i]</label>";

                            echo "<input class=\"btn btn-primary btn-md btn-block\" type=\"button\" id=\"server_$servidor[$i]\" value=\"Server $servidor[$i]\" target=\"_blank\" />";
                        }
                    ?> 
                </div>
                <div class="col-md-1 align-self-start" id="element">
                    
                </div>
            </div>            
        </div>
    </body>
</html>