<?php

include_once 'dbconnect.php';

$error = false;

//revisamos que esten los campos completos e indicados
if (isset($_POST['enviar'])) {
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
	$genero = mysqli_real_escape_string($con, $_POST['genero']);
    $autor = mysqli_real_escape_string($con, $_POST['autor']);
	$editorial = mysqli_real_escape_string($con, $_POST['editorial']);
	
	//Nombre sólo puede contener caracteres alfabéticos y espacio (esto varia sgun requerimiento)
	if (!preg_match("/^[a-zA-Z0-9 ]+$/",$nombre)) {
		$error = true;
		$nombre_error = "El nombre debe contener solo caracteres del alfabeto y numeros o espacio.";
	}
    if (!preg_match("/^[a-zA-Z0-9 ]+$/",$autor)) {
		$error = true;
		$autor_error = "El nombre debe contener solo caracteres del alfabeto y numeros o espacio.";
	}
    if (!preg_match("/^[a-zA-Z0-9 ]+$/",$editorial)) {
		$error = true;
		$editorial_error = "El nombre debe contener solo caracteres del alfabeto y numeros o espacio.";
	}
    
    if (!$error) {
		if(mysqli_query($con, "INSERT INTO db_obras() VALUES('" . $nombre . "', '" . $genero . "', '" . $autor . "', '" . $editorial . "')")) {
            
			//$successmsg = "¡Registrado exitosamente! <a href='login.php'>Click here to Login</a>";
			$successmsg = '
			  <div class="alert alert-success alert-dismissable fade in">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    <strong>EXITO.!</strong> ¡Registrado exitosamente!
			  </div>
			  ';
		} else {
			//$errormsg = "Error de registro. Vuelve a intentarlo más tarde.";
			$errormsg = '
			<div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    <strong>Error de registro.!</strong> Verifica tus datos.
			</div>
			';
		}
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro Usuario</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<!--link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>
<body background="imagenes/09.jpg" style="background-repeat: no-repeat; background-size:100% 100%; background-attachment: fixed">

<nav class="navbar navbar-default" role="navigation" >
	<div class="container-fluid" >
		<!-- add header -->
		<div class="navbar-header" >
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
			</button>
		</div>
	</div>
    
    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="estudiantes.php">Creacion de estudiantes</a></li>
            <li><a href="inventario.php">Listado de libros</a></li>
            <li><a href="login.php">Log Out</a></li>
        </ul>
    </div>
</nav>
    
<div class="container" >
    <div class="row">
		<div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset >
                    <legend>Registro</legend>

                    <div class="form-group">
				        <label for="name">Nombre del libro</label>
				        <input type="text" name="nombre" placeholder="Nombre libro" required value="<?php if($error) echo $nombre;?>"class="form-control" />
				        <span class="text-danger"><?php if (isset($nombre_error)) echo $nombre_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Genero</label>
                        <br>
                        <input type="radio" name="genero" value="Historia" required="required">Historia
                        <br>
                        <input type="radio" name="genero" value="Terror" required="required">Terror
                        <br>
                        <input type="radio" name="genero" value="Educativo" required="required">Educativo
                        <br>
                        <input type="radio" name="genero" value="Romantico" required="required">Romantico
                        <br>
                        <input type="radio" name="genero" value="Infantil" required="required">Infantil
                        <br>
                        <input type="radio" name="genero" value="Otros" required="required">Otros
                    </div>

                    <div class="form-group">
				        <label for="name">Autor</label>
				        <input type="text" name="autor" placeholder="Autor libro" required value="<?php if($error) echo $autor; ?>" class="form-control"/>
                        <span class="text-danger"><?php if (isset($autor_error)) echo $autor_error; ?></span>
                    </div>

                    <div class="form-group">
				        <label for="name">Editorial</label>
				        <input type="text" name="editorial" placeholder="Editorial libro" required value="<?php if($error) echo $editorial; ?>" class="form-control"/>
                        <span class="text-danger"><?php if (isset($editorial_error)) echo $editorial_error; ?></span>
                    </div>

                    <div class="form-group">
				        <input type="submit" name="enviar" value="Registrar" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
    <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>     
</div>
    
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>