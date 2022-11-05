<?php  include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php 

if($_POST){
    $cancion= $_POST['cancion'];
    $artista= $_POST['artista'];
    

    $fecha=new DateTime();
    
    $objConexion= new conexion();
    //string que recuperamos de la base de datos, null para que el "id" lo ponga la bbdd
    $sql="INSERT INTO `canciones` (`id`, `cancion`, `artista` ) VALUES (NULL, '$cancion', '$artista');";    
    //acceder al metodo ejecutar de registro_canciones y le pasamos un string generando una intruccion

    $objConexion->ejecutar($sql);
    header("location:registro_canciones.php");

}
if($_GET){

    $id=$_GET["borrar"]; 
    $objConexion= new conexion();

    

    //Borrado utilizando el get en la bbdd
   $sql="DELETE FROM `canciones` WHERE `id` = ".$_GET['borrar'];
   $sql="DELETE FROM `canciones` WHERE `id` =".$id;

    $objConexion->ejecutar($sql);
    header("location:registro_canciones.php");

}
//creamos una isntancia para crear la conexion con el contrucctor de conexion.php

$objConexion= new conexion();
//seleccioname todos los registros de la tabla canciones (fetchall en conexion)

$canciones=$objConexion->consultar("SELECT * FROM `canciones`");
//para ver si la info que llega en forma array print_r($resultado)




?>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
    <div class="card-header">
        Canciones Disponibles
    </div>
    <div class="card-body">
      <!--Enctype recepciona los fotos_fiesta-->
<form method="post" action="registro_canciones.php" >
    <!--introduce el nombre" es para accesibilidad-->
    Nombre de la Cancion: <input required="Nombre la Cancion"  class="" type="text" name="cancion" >
   <br>
   Nombre del Artista: <input required="Nombre del Artista"  class="" type="text" name="artista" >
   <br>
    <input type="submit" value="Enviar cancion">
</form>
    </div>

</div>
        </div>
        <div class="col-md-6">
<table class="table">
    <thead>
        <tr>
            <th>Canciones</th>
            <th>Artista</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
    <?php //todos las canciones  en cancion
         foreach($canciones as $cancion){?>
        <tr>
            <td><?php echo $cancion['cancion'];?> | </td>
            <!-- por cada cancion sacame el artista-->
            <td><?php echo $cancion['artista'];?> | </td>
            <td><a type="button" class="" href="?borrar=<?php echo $cancion['id'];?>">Eliminar</a></td>
        </tr>    
            <?php
    //parece raro pero asi hace la lectura
     } ?>
            </tbody>
</table>
        </div>

    </div>
</div>

<?php include("footer.php"); ?>