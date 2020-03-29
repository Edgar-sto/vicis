<?php
    $usuario=$_POST['user'];
    $ip=$_POST['servidor'];
    $contraseña=$_POST['pass'];
    $user_server=$_POST['user_server'];
    $baseDatos1 ='asterisk';
    $conn = mysqli_connect($ip, $user_server,$contraseña) or die ("NO se a podido conectar al server ");
    /*Conexxion a base de datos*/
    if(!$conn)
    {
        die("Conexion fallo!". mysqli_connect_error());
    }
    $db2 = mysqli_select_db($conn,$baseDatos1) or die("upps!! no se a podido conectar con la bd");
    
      /*Query*/
    $select="SELECT * FROM vicidial_users where user like '%$usuario%' and user_level <= '8';";
    //$select="SELECT * FROM vicidial_users where user like '%$usuario%';";
    $resul = mysqli_query($conn, $select);


    echo "<table class=\"table table-bordered table-dark\" >
        <thead>
            <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Usuariso</th>
                <th scope=\"Col\">Nivel</th>
                <th scope=\"col\">Nombre Completo</th>
                <th scope=\"col\">Estado</th>
                <th scope=\"col\">Activar/Desactiva/Restablecer</th>
                <th scope=\"col\">Ultimo Logueo</th>
                <th scope=\"col\">Fecha de reingreso</th>
            </tr>
        </thead>";

    echo "<tr>";

    $contador=1;
    $id_usuario="";
    while( $row = mysqli_fetch_assoc($resul)) {

    $id_usuario = $row['user_id'];
    $activo = $row['active'];

    echo "<td id='id_$contador'>".$id_usuario."</td>
            <td id='user_".$contador."'>".$row['user']."</td>
            <td>".$row['user_level']."</td>
            <td>".$row['full_name']."</td>
            <td>    <div id='act_".$contador."'>$activo</div>    </td>
            <td>
                <button id='btn_".$contador."'>Activar</button>
                <button id='btnd_".$contador."'>Desactiva</button>
                <button id='btn_res".$contador."'>Restablecer</button> 
            </td>
            <td>".$row['last_login_date']."</td>
            <td>    <div id='act1_".$contador."'>".$row['last_date']."</div>    </td>";
     echo " </tr>";

    echo"<script>
      $(document).on('click','#btn_$contador',function(){
        var url = 'activa.php';  
        var ip = '$ip';"; 
        echo " var id = '$id_usuario';";                  
        echo "var pass_server = '$contraseña';";
        echo "$.ajax({                        
            type: 'POST',                 
            url: url,                    
            data:{userid:id,servidor:ip,pass:pass_server} ,
            success: function(data)            
            {
        // alert('Usuario activado'+ data);
        document.getElementById('act_".$contador."').innerHTML =data;
        // location.reload();          
        }
        });
      });

      $(document).on('click','#btnd_$contador',function(){
        var url = 'desactiva.php';  
        var ip = '$ip';"; 
        echo " var id = '$id_usuario';";                  
        echo "var pass_server = '$contraseña';";
        echo "$.ajax({                        
            type: 'POST',                 
            url: url,                    
            data:{userid:id,servidor:ip,pass:pass_server} ,
            success: function(data)            
            {
            //alert('Usuario Desactivado'+data);
            // $('act_$contador').html(data); 
            document.getElementById('act_".$contador."').innerHTML =data;
            ///location.reload();          
            }
        });
      });

      $(document).on('click','#btn_res$contador',function(){
        var url = 'restablecer.php';  
        var ip = '$ip';"; 
        echo " var id = '$id_usuario';";                  
        echo "var pass_server = '$contraseña';";
        echo "$.ajax({                        
            type: 'POST',                 
            url: url,                    
            data:{userid:id,servidor:ip,pass:pass_server} ,
            success: function(data)            
            {
            alert('Usuario Restablecido');
            // $('act1_$contador').html(data); 
            document.getElementById('act1_".$contador."').innerHTML =data;
            //location.reload();          
            }
        });
      });
    </script>";
    /*$activa_user="UPDATE vicidial_users SET active='y', last_login_date=now() where user_id='$id_usuario' ; ";
     $act = mysqli_query($conn, $activa_user);
     */
    $contador++;
    $id_usuario="";
    }
    echo"</table>";
?>