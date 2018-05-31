<?php
$nombre =$_POST['nombre'];
$genero =$_POST['genero'];
$autor =$_POST['autor'];
$editorial =$_POST['editorial'];
 
 include 'dbconnect.php';
    
if(isset ($_POST['guardar'])){
    $sSQL="UPDATE db_obras Set genero='$genero', autor='$autor', editorial='$editorial' Where nombre='$nombre'";
    mysqli_query($con,$sSQL);
    header('Location: inventario.php');
}if(isset ($_POST['borrar'])){
     $eliminar= " DELETE FROM db_obras WHERE nombre = '$nombre'" ;
    $result = mysqli_query($con,$eliminar); 
    
    header('Location: inventario.php');
}

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
    
<table border='2' cellpadding='10' cellspacing="10" align='center'>
    <tr bgcolor='black'>
        <th style="text-align:center; color:white;">Nombre</th>
        <th style="text-align:center; color:white;">Genero</th>
        <th style="text-align:center; color:white;">Autor</th>
        <th style="text-align:center; color:white;">Editorial</th>
        <th style="text-align:center; color:white;">Opciones</th>
    </tr>
    <tbody>
        
    <form action="" method="POST">
	<tr>
        <td style="background: white;"><input style="border:none;" type="text" name="nombre" placeholder="<?php echo $nombre;?>" value="<?php echo $nombre;?>" readonly></td>
        <td style="background: white;"> <input style="border:none;" type="text"name="genero" placeholder="<?php echo $genero;?>" value="<?php echo $genero;?>"></td>
        <td style="background: white;"> <input style="border:none;" type="text"name="autor" placeholder="<?php echo  $autor;?>" value="<?php echo $autor;?>"></td>
        <td style="background: white;"> <input style="border:none;" type="text"name="editorial" placeholder="<?php echo $editorial;?>"value="<?php echo $editorial;?>"></td>
        <td style="background: black;">
            <input style="border:none; text-align:center;" type="submit" value="guardar" name="guardar" class="btn btn-success">
            <input style="border:none; text-align:center;" type="submit" value="borrar" name="borrar" class="btn btn-danger">
        </td>
    </tr>
	</form>   
    </tbody>
</table>
    
<div class="row">
    <div class="text-center col-md-6 col-md-offset-3">
        <br><br><br><br><br><br><br>
        <p>Copyright &copy; 2018 &middot; All Rights Reserved &middot; Creado por: William Mahecha </p>
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