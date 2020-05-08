<!DOCTYPE html>
<html>
    <head>
        <title>Panel ViciDial</title>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index1.css">
        <!-- Javascript -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
        <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 table-responsive">
                    <!--General botones-->
                    <table class="table table-sm">
                        <thead class="thead-dark">
                            <tr>
                              <th scope="col">Servidores</th>
                            </tr>
                        </thead>
                    <?php
                        $servidor = array(5, 6, );
                        $tamanio_array_servidor = count($servidor);
                        for ($i=0; $i < $tamanio_array_servidor; $i++)
                        {
                            $res    = exec("ping 10.9.2.$servidor[$i]");
                            
                            if (strpos($res, "recibidos = 0"))
                            {
                                echo "<tr>";
                                echo "<td>
                                    <img type=\"button\" src='img/gifs/LED-ROJO.gif'>";
                            } else {
                                echo "<img type=\"button\" src='img/gifs/LED-VERDE.gif'>";
                            }
                            echo " <input class=\"btn btn-sm btn-block\" type=\"button\" id=\"server_$servidor[$i]\" value=\"Server $servidor[$i]\" target=\"_blank\" />
                                    </td>";
                            echo "</tr>";
                        }
                    ?>
                    </table> 
                </div>
                <div class="col-md-1 align-self-start" id="element">
                    
                </div>
            </div>            
        </div>
    </body>
</html>