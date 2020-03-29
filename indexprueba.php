<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Panel Soporte</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- ESTILOS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/index1.css">
        <link rel="shortcut icon" href="img/favicon1.ico" />
        <!-- Fuentes de iconos -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap" rel="stylesheet">
        <!-- SCRIPT -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script>//Script para abrir ventana agregar y modificar de tamaño asignado.
            function abrir(url) {
                open(url,'','top=300,left=300,width=280,height=550') ;
            }
        //Script para abrir ventana eliminar de tamaño asignado.
            function cerrar(url) {
                open(url,'','top=300,left=300,width=280,height=200') ;
            }
        //Script para abrir ventana modificar de tamaño asignado.
            function modificar(url) {
                open(url,'','top=300,left=300,width=280,height=200') ;
            }
        //Script para abrir ventana agregar cpu de tamaño asignado.
            function agregarCPU(url) {
                open(url,'','top=300,left=300,width=280,height=370') ;
            }
        //Script para abrir ventana agregar monitor de tamaño asignado.
            function agregarMONITOR(url) {
                open(url,'','top=300,left=300,width=280,height=330') ;
            }
        //Script para abrir ventana reubicar equipo.
            function reubicar(url) {
                open(url,'','top=300,left=300,width=280,height=360') ;
            }
        //Script para abrir ventana ping.
            function ping(url) {
                open(url,'','top=300,left=300,width=480,height=360') ;
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#hide").on('click', function() {
                    $("#element").hide();
                    return false;
                });
             
                $("#show").on('click', function() {
                    $("#element").show();
                    return false;
                });
            });

            $(document).ready(function(){
                $("#hide1").on('click', function() {
                    $("#element1").hide();
                    return false;
                });
             
                $("#show1").on('click', function() {
                    $("#element1").show();
                    return false;
                });
            });

            $(document).ready(function(){
                $("#hide2").on('click', function() {
                    $("#element2").hide();
                    return false;
                });
             
                $("#show2").on('click', function() {
                    $("#element2").show();
                    return false;
                });
            });
        </script>
    </head>
    <body>
        
      <div class="collapse" id="instagram">
        <a class="instagram" href="#instagram"
          ><i class="fab fa-instagram"></i> Instagram</a
        >
        <div class="content">
          <div class="inner-content">
            <h3>Instagram</h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
            nobis iusto deleniti corporis alias quo a quam similique cupiditate
            pariatur aliquid, omnis, officia dicta officiis impedit nisi dolores
            ut, distinctio placeat. Magni dolores perferendis ab laborum in
            neque, non exercitationem!
          </div>
        </div>
      </div>
      <div class="collapse" id="twitter">
        <a class="twitter" href="#twitter"
          ><i class="fab fa-twitter"></i> Twitter</a
        >
        <div class="content">
          <div class="inner-content">
            <h3>Twitter</h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
            nobis iusto deleniti corporis alias quo a quam similique cupiditate
            pariatur aliquid, omnis, officia dicta officiis impedit nisi dolores
            ut, distinctio placeat. Magni dolores perferendis ab laborum in
            neque, non exercitationem!
          </div>
        </div>
      </div>
      <div class="collapse" id="dribbble">
        <a class="dribbble" href="#dribbble"
          ><i class="fab fa-dribbble"></i> Dribble</a
        >
        <div class="content">
          <div class="inner-content">
            <h3>Dribbble</h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
            nobis iusto deleniti corporis alias quo a quam similique cupiditate
            pariatur aliquid, omnis, officia dicta officiis impedit nisi dolores
            ut, distinctio placeat. Magni dolores perferendis ab laborum in
            neque, non exercitationem!
          </div>
        </div>
      </div>
      <div class="collapse" id="youtube">
        <a class="youtube" href="#youtube"
          ><i class="fab fa-youtube"></i> Youtube</a
        >
        <div class="content">
          <div class="inner-content">
            <h3>Youtube</h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
            nobis iusto deleniti corporis alias quo a quam similique cupiditate
            pariatur aliquid, omnis, officia dicta officiis impedit nisi dolores
            ut, distinctio placeat. Magni dolores perferendis ab laborum in
            neque, non exercitationem!
          </div>
        </div>
      </div>
    </div>
    </body>
</html>