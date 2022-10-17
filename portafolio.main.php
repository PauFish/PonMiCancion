<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php 

if($_POST){
    
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];

    $fecha=new DateTime();
    //mumeros de tiempo _ nombre del archivo
    $imagen=$_FILES['archivo']['name']."_".$fecha->getTimestamp();
    $imagen_temporal=$_FILES['archivo']['tmp_name'];

    move_uploaded_file($imagen_temporal,"media/fotos/fotos_fiestas_discoteca/".$imagen);  

    $objConexion= new conexion();
    //string que recuperamos de la base de datos, null para que el "id" lo ponga la bbdd
    $sql="INSERT INTO `usuarios` (`usuario_id`, `nombre`, `apellidos`, `email`, `telefono`, `archivo` ) VALUES (NULL, '$nombre', '$apellido', '$email', '$telefono','$imagen');";    
    //acceder al metodo ejecutar de portafolio y le pasamos un string generando una intruccion
    
    $objConexion->ejecutar($sql);
    header("location:portafolio.php");

}
if($_GET){

    $id=$_GET["borrar"]; 
    $objConexion= new conexion();
    
    //Borrado del archivo 
   $imagen=$objConexion->consultar("SELECT `archivo` FROM `usuarios` WHERE usuario_id=".$id); 
    unlink("media/fotos/fotos_fiestas_discoteca/".$imagen[0]['archivo']); 

    //Borrado utilizando el get en la bbdd
   $sql="DELETE FROM `usuarios` WHERE `usuarios`.`usuario_id` = ".$_GET['borrar'];
   $sql="DELETE FROM `usuarios` WHERE `usuarios`.`usuario_id` =".$id;
   
    $objConexion->ejecutar($sql);
    header("location:portafolio.php");
    
}
//creamos una isntancia para crear la conexion con el contrucctor de conexion.php
   
$objConexion= new conexion();
//seleccioname todos los registros de la tabla usuario (fetchall en conexion)
   
$fiestas=$objConexion->consultar("SELECT * FROM `usuarios`");
//para ver si la info que llega en forma array print_r($resultado)



?>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
    <div class="card-header">
        Datos de la fiesta
    </div>
    <div class="card-body">
      <!--Enctype recepciona los archivos-->
<form method="post" action="portafolio.php" enctype="multipart/form-data">
    <!--introduce el nombre" es para accesibilidad-->
    Nombre: <input required="Introduce tu Nombre"  class="" type="text" name="nombre" >
   <br>
    Apellido: <input required="Introduce tu Apellido"  class="" type="text"  name="apellido">
    <br>
    Email: <input required="Introduce tu Email"  class="" type="text"  name="email">
    <br>
    Telefono: <input required="Introduce tu Telefono"  class="" type="text"  name="telefono">
   <br>
   Foto: <input required="Introduce foto del evento/dj"  class="" type="file"  name="archivo">
   <br>

    <input type="submit" value="Enviar fiesta">
</form>
    </div>
   
</div>
        </div>
        <div class="col-md-6">
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Foto</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
    <?php //todos las fiestas leelos de fiestas en fiestas
         foreach($fiestas as $fiesta){?>
        <tr>
            <td><?php echo $fiesta['nombre'];?></td>
            <td><?php echo $fiesta['apellidos'];?></td>
            <td><?php echo $fiesta['email'];?></td>
            <td><?php echo $fiesta['telefono'];?></td>
            <td><img width="100" src="media/fotos/fotos_fiestas_discoteca/<?php echo $fiesta['archivo']; ?>" alt="" srcset=""> </td>
             
            
            <td><a type="button" class="" href="?borrar=<?php echo $fiesta['usuario_id'];?>">Eliminar</a></td>
        </tr>    
            <?php
    //parece raro pero asi hace la lectura
     } ?>
            </tbody>
</table>
        </div>
        
    </div>
</div>


<?php include("pie.php"); ?>