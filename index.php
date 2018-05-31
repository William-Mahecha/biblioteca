<?php
    include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio | Panel de Control</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap  -->
	<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body background="imagenes/09.jpg" style="background-repeat: no-repeat; background-size:100% 100%; background-attachment: fixed">

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php" style="font-family: 'Lobster', cursive;">Biblioteca Especial</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center" style="opacity:0.7; background-color: #000000; color:#FFFFFF; margin: 20px;">Bienvenido a la biblioteca virtual</h1>
    </div>
  </div>
  <hr>
</div>
<div class="container">
  <div class="row text-center">
    <div class="col-md-6 col-md-offset-3"><strong><h4 style="opacity:0.7; background-color: #000000; color:#FFFFFF; margin: 20px;">En esta biblioteca encontrara una gran cantidad de variedad de libros de diferentes generos y escritores esperamos puedan ser de su provecho, gusto y satisfaccion, agradecemos mucho que sigan recomendando esta pagina </h4></strong>. </div>
  </div>
  <hr>
  <hr>
  <br><br>
  <div class="row">
    <div class="col-sm-4 text-center">
      <h4 style="opacity:0.7; background-color: #000000; color:#FFFFFF; margin: 20px;"><strong>Cien años de soledad</strong></h4>
      <img style="height:100%; width:80%;" src="imagenes/CienA%C3%B1osDeSoledad.png">
    </div>
    
    <div class="text-center col-sm-4">
      <h4 style="opacity:0.7; background-color: #000000; color:#FFFFFF; margin: 20px;"><strong>El Alquimista</strong></h4>
      <img style="height:100%; width:100%;" src="imagenes/ElAlquimista.png">
      <br>
      <br>
    </div>
    
    <div class="text-center col-sm-4">
      <h4 style="opacity:0.7; background-color: #000000; color:#FFFFFF; margin: 20px; "><strong>El ultimo deseo</strong></h4>
      <img style="height:100%; width:90%;" src="imagenes/ElUltimoDeseo.png">
    </div>
    
  </div>
  <hr>
  <div class="row" style="opacity:0.7; background-color: #000000; color:#FFFFFF; margin: 20px ">
    <div class="text-center col-md-6 col-md-offset-3"; >
      <h3 >Footer </h3>
      <p style="font-size:15px">Copyright &copy; 2018 &middot; All Rights Reserved &middot; Creado por: Estudiantes de la FUTC</p>
    </div>
  </div>
  <hr>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>