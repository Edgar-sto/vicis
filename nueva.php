<!DOCTYPE html>
<html lang="en">
<head>
 <title>Panel Edgar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ESTILOS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Sucursal Lázaro</h2>
    <div class="row">
        <!-- Fila 1 -->
        <?php
            $columna = array(1, 2, 3, 4, 5, 6);
            $tamanio_array_columnas = count($columna);
            for ($i=0; $i < $tamanio_array_columnas; $i++)
            {
                echo "<div class='col' id='columna_".$columna[$i]."'>";
                echo "<i class='material-icons'>desktop_windows</i>";
                echo "<br>";
        ?>
            <input id='est_00<?=$columna[$i]?>' class='btn btn-dark btn-lg' type='button' value='Estación 00<?=$columna[$i]?>' onclick="window.open('estaciones/estacion001.php','Estación 00<?=$columna[$i]?>','width=500, height=308')"/>;
        <?php 
            echo "</div>";
            }
        ?>
    </div>
</div>
  <!-- Trigger the modal with a button 
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>

 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a small modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>-->
</div> 

</body>
</html>