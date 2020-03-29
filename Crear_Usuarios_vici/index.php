	<head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
    <br>
    <style>
		body {
		background-image: url("Public/imagenes/logo-STO.png");
		background-repeat: no-repeat;
		background-position: center center;
		}
    </style>
	<body  >
		<header>
            <br>
            <br>
			<!-- Fixed navbar -->
			<div class="container">
			    <a href="index.php" title="Inicio"><img class="logo" src="Public/imagenes/fondo.png" style="margin-left: -370px;
			    margin-right: 30px;
			    float: left;
			    height: 50px;
			    font-size: 50px;
			    line-height: 50px;"></a>
			</div>
		</header>
		<section class="text-center lado-a" >
			<br>
            <br>
            <br>
            <div class="input-group">
	        	<div class="container" style="background-color:#dfe2f0;">
                	<div class="panel panel-default">
                		<div class="panel-body">
                		<br>
                		<br>
                		<h2>Sistema de Creación de Usuarios:</h2><br>
    					<label>Seleciona el Servidor:</label><br>
                    	<form class="md-form" action="Public/view/index11.php" method="post"  id="import_form">            
							<select class="custom-select" name="server" id="inputGroupSelect04" style="width: 250px">
							    <option value="10.9.2.5"  name="server">10.9.2.5</option>
							    <option value="10.9.2.6"  name="server">10.9.2.6</option>
							    <option value="10.9.2.8"  name="server">10.9.2.8</option>
							    <option value="10.9.2.11" name="server">10.9.2.11</option>
							    <option value="10.9.2.22" name="server">10.9.2.22</option>
							    <option value="10.9.2.25" name="server">10.9.2.25</option>
							    <option value="10.9.2.27" name="server">10.9.2.27</option>
							    <option value="10.9.2.28" name="server">10.9.2.28</option>
							    <option value="10.9.2.29" name="server">10.9.2.29</option>
							    <option value="10.9.2.35" name="server">10.9.2.35</option>
							    <option value="10.9.2.36" name="server">10.9.2.36</option>
							    <option value="10.9.2.37" name="server">10.9.2.37</option>
							    <option value="10.9.2.38" name="server">10.9.2.38</option>
							    <option value="10.9.2.39" name="server">10.9.2.39</option>
							    <option value="10.9.2.41" name="server">10.9.2.41</option>
							    <option value="10.9.2.42" name="server">10.9.2.42</option>
							    <option value="10.9.2.43" name="server">10.9.2.43</option>
							    <option value="10.9.2.44" name="server">10.9.2.44</option>
							    <option value="10.9.2.45" name="server">10.9.2.45</option>
							    <option value="10.9.2.46" name="server">10.9.2.46</option>
							    <option value="10.9.2.201"name="server">10.9.2.201</option>
   							</select>
   							<br>
   							<br>
   							<br>
   							<div >
                    			<input type="submit" class="btn btn-primary" name="import_data" value="Aceptar" data-toggle="modal" data-target="#miModal">
                   			 </div>
   						</form>
						 	<br>
						 	<br>
						</div>
 					</div>
				</div>
			</div>
		</section>
	</body>