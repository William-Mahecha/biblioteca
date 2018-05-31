<?php
include_once 'dbconnect.php';
?>	

<!DOCTYPE html>
<html>
<head>
	<title>Inventario Libros</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

</head>
<body background="imagenes/09.jpg" style="background-repeat: no-repeat; background-size:100% 100%; background-attachment: fixed">

<nav class="navbar navbar-default" role="navigation">
	<div class="collapse navbar-collapse" id="navbar1">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="estudiantes.php">Creacion de estudiantes</a></li>
             <li><a href="register.php">Registrar Libros</a></li>
			<li><a href="login.php">Log Out</a></li>
        </ul>
    </div>
</nav>

<br><br><br><br>    
<table border='2' cellpadding='10' cellspacing="10" align='center'>
    <tr bgcolor='black'>
        <th style="text-align:center; color:white;">Nombre</th>
        <th style="text-align:center; color:white;">Genero</th>
        <th style="text-align:center; color:white;">Autor</th>
        <th style="text-align:center; color:white;">Editorial</th>
        <th style="text-align:center; color:white;">Opciones</th>
    </tr>
    <tbody>
        
<?php 

$consulta = "SELECT * FROM db_obras";

$resultado = mysqli_query($con,$consulta);
while ($mostrar = mysqli_fetch_array($resultado)) {
	?>
	<form action="editar_guardar.php" method="POST">
    <tr>
    <td style="background: white;"> <input style="border:none;" type="text" name="nombre" placeholder="<?php echo $mostrar['nombre'];?>" value="<?php echo  $mostrar['nombre'];?>" readonly></td>
	<td style="background: white;"> <input style="border:none;" type="text"name="genero" placeholder="<?php echo  $mostrar['genero'];?>"value="<?php echo  $mostrar['genero'];?>" readonly></td>
	<td style="background: white;"> <input style="border:none;" type="text"name="autor" placeholder="<?php echo  $mostrar['autor'];?>"value="<?php echo  $mostrar['autor'];?>" readonly></td>
	<td style="background: white;"> <input style="border:none;" type="text"name="editorial" placeholder="<?php echo  $mostrar['editorial'];?>" value="<?php echo $mostrar['editorial'];?>" readonly></td>
	<td style="text-align:center; background:black"><input style="border:none;" type="submit" value="editar" name="editar" class="btn btn-success" ></td>
    </tr>
	</form>
	<?php
	}
?>	
      
    </tbody>
</table>
    
<div class="row">
    <div class="text-center col-md-6 col-md-offset-3">
        <br><br><br><br><br><br><br>
        <p style="opacity:0.7; background-color: #000000; color:#FFFFFF; margin: 20px;">Copyright &copy; 2018 &middot; All Rights Reserved &middot; Creado por: William Mahecha </p>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>