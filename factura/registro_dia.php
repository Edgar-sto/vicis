<?php 
	$usuario    	= 	"root";
	$password       = 	"";
	$servidor   	=	"127.0.0.1";
	$basededatos	= 	"consumo_server_dia";

	$conectar 	= 	mysqli_connect($servidor, $usuario, $password, $basededatos);

	//consulta servidor 5
	$consultar_registros =	"SELECT * FROM consumo_dia ORDER BY fecha_registro";
	//conexion y ejecucion de querys
    $ejecucion_consulta              =   mysqli_query($conectar, $consultar_registros);
    $resultado   =   mysqli_fetch_assoc($ejecucion_consulta);
    //Tabla 5
  	echo "
                <div class='media tm-notification-item'>
                    <div class='media-body table-responsive'>
                        <table class='table table-bordered tabla_registros_por_dia'>
                            <thead class='cabecera_tbl_consumo'>
                            	<th>SER 5</th>
								<th>SER 6</th>
								<th>SER 8</th>
								<th>SER 11</th>
								<th>SER 22</th>
								<th>SER 27</th>
								<th>SER 28</th>
								<th>SER 29</th>
								<th>SER 35</th>
								<th>SER 36</th>
								<th>SER 37</th>
								<th>SER 38</th>
								<th>SER 39</th>
								<th>SER 41</th>
								<th>SER 42</th>
								<th>SER 43</th>
								<th>SER 44</th>
								<th>SER 45</th>
								<th>SER 46</th>
								<th>SER 201</th>
								<th>Fecha de registro</th>
                            </thead>
                            <tbody class='resultado_consulta'>";
                                while( $resultado   =   mysqli_fetch_assoc($ejecucion_consulta)) {
					                echo "<tr>";
					                echo "
					                    <td>".$resultado['ip_cinco']."</td>
					                    <td>".$resultado['ip_seis']."</td>
					                    <td>".$resultado['ip_ocho']."</td>
					                    <td>".$resultado['ip_once']."</td>
					                    <td>".$resultado['ip_veintidos']."</td>
					                    <td>".$resultado['ip_veintisiete']."</td>
					                    <td>".$resultado['ip_veintiocho']."</td>
					                    <td>".$resultado['ip_veintinueve']."</td>
					                    <td>".$resultado['ip_treintaycinco']."</td>
					                    <td>".$resultado['ip_treintayseis']."</td>
					                    <td>".$resultado['ip_treintaysiete']."</td>
					                    <td>".$resultado['ip_treintayocho']."</td>
					                    <td>".$resultado['ip_treintaynueve']."</td>
										<td>".$resultado['ip_cuarentayuno']."</td>
										<td>".$resultado['ip_cuarentaydos']."</td>
										<td>".$resultado['ip_cuarentaytres']."</td>
										<td>".$resultado['ip_cuarentaycuatro']."</td>
										<td>".$resultado['ip_cuarentaycinco']."</td>
										<td>".$resultado['ip_cuarentayseis']."</td>
										<td>".$resultado['ip_doscientosuno']."</td>
										<td>".$resultado['fecha_registro']."</td>";
					                echo"</tr>";
					            }                             
                    echo "  </tbody>
                        </table>
                    </div>
                </div>";




?>