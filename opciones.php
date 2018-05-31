<?php  
 $id = $_POST['id'];
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $identificacion = $_POST['identificacion'];
 include 'conexion.php';
    

include 'inicioo.php';

 if($_POST['borrar']){
    $eliminar= " DELETE FROM usuarios WHERE id = '$id'" ;
   $result = mysqli_query($conexion,$eliminar); 
   
   header('Location: editar.php');
}
 ?>
 <style>
 th{
    background: white;
  }
  td{
    background: white;
  }
  input{
    border:none;
	
  }
  </style>
 
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre del Libro</th>
      <th scope="col">Autor del Libro</th>
	  <th scope="col">Numero de identificacion</th>
	  <th scope="col">Opciones</th>
      
    </tr>
  </thead>
  <tbody>
 <form action="" method="POST">
	<tr><th scope="row"> <input type="text" name="id" placeholder="<?php echo $id;?>" value="<?php echo $id;?>" readonly></th>
	<td> <input type="text"name="nombre" placeholder="<?php echo $nombre;?>"value="<?php echo $nombre;?>"></td>
	<td> <input type="text"name="apellido" placeholder="<?php echo  $apellido;?>"value="<?php echo $apellido;?>"></td>
	<td> <input type="text"name="identificacion" placeholder="<?php echo $identificacion;?>"value="<?php echo $identificacion;?>"></td>
	<td><input type="submit" value="Guardar" name="guardar" class="btn btn-success"><input type="submit" value="Borrar" name="borrar" class="btn btn-danger"></td></tr>
	</form>


<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$identificacion=$_POST['documento'];

if($_POST['guardar']){
    $sSQL="UPDATE dbusuarios Set nombre='$nombre', apellido='$apellido', identificacion='$identificacion' Where id='$id'";
    mysqli_query($conexion,$sSQL);
    header('Location: editar.php');
}if($_POST['borrar']){
     $eliminar= " DELETE FROM dbusuarios WHERE id = '$id'" ;
    $result = mysqli_query($conexion,$eliminar); 
    
    header('Location: editar.php');
}



?>