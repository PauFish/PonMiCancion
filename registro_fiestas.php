<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php 

if($_POST){
    $nombre_fiesta= $_POST['nombre_fiesta'];
    $musica_fiesta=$_POST['musica_fiesta'];
    $fotos_fiesta=$_POST['fotos_fiesta'];
    

    $fecha=new DateTime();
    //mumeros de tiempo _ nombre de fotos_fiesta
    $fotos_fiesta=$fecha->getTimestamp()."_".$_FILES['fotos_fiesta']['name'];
    $fotos_fiesta_temporal=$_FILES['fotos_fiesta']['tmp_name'];

    move_uploaded_file($fotos_fiesta_temporal,"media/fotos/fotos_fiestas_discoteca".$fotos_fiesta);  

    $objConexion= new conexion();
    //string que recuperamos de la base de datos, null para que el "id" lo ponga la bbdd
    $sql="INSERT INTO `fiestas` (`id`, `nombre_fiesta`, `musica_fiesta`, `fotos_fiesta` ) VALUES (NULL, '$nombre_fiesta', '$musica_fiesta', '$fotos_fiesta');";    
    //acceder al metodo ejecutar de registro_fiesta y le pasamos un string generando una intruccion

    $objConexion->ejecutar($sql);
    header("location:registro_fiesta.php");

}
if($_GET){

    $id=$_GET["borrar"]; 
    $objConexion= new conexion();

    //Borrado del fotos_fiesta 
   $fotos_fiesta=$objConexion->consultar("SELECT `fotos_fiesta` FROM `fiestas` WHERE id=".$id); 
    unlink("media/fotos/fotos_fiestas_discoteca".$fotos_fiesta[0]['fotos_fiesta']); 

    //Borrado utilizando el get en la bbdd
   $sql="DELETE FROM `fiestas` WHERE `id` = ".$_GET['borrar'];
   $sql="DELETE FROM `fiestas` WHERE `id` =".$id;

    $objConexion->ejecutar($sql);
    header("location:registro_fiesta.php");

}
//creamos una isntancia para crear la conexion con el contrucctor de conexion.php

$objConexion= new conexion();
//seleccioname todos los registros de la tabla fiestas (fetchall en conexion)

$fiestas=$objConexion->consultar("SELECT * FROM `fiestas`");
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
      <!--Enctype recepciona los fotos_fiesta-->
<form method="post" action="registro_fiestas.php" enctype="multipart/form-data">
    <!--introduce el nombre" es para accesibilidad-->
    Nombre de la Fiesta: <input required="Nombre la la fiesta"  class="" type="text" name="fiesta" >
   <br>
    Estilo Musical: <input required="Estilo de musica"  class="" type="text"  name="estilo">
    <br>
  
   Foto: <input required="Introduce foto del evento"  class="" type="file"  name="fotos_fiesta">
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
            <th>Fiestas</th>
            <th>Estilos</th>
            <th>fotos</th>
          
        </tr>
    </thead>
    <tbody>
    <?php //todos las fiestass leelos de fiesta en fiesta
         foreach($fiestas as $fiesta){?>
        <tr>
        <td>
            <?php echo $fiesta['nombre_fiesta'];?></td>
            <td><?php echo $fiesta['musica_fiesta'];?></td>
            <td><img width="100" src="media/fotos/fotos_fiestas_discoteca<?php echo $fiesta['fotos_fiesta']; ?>" alt="" srcset=""> </td>
            <td><a type="button" class="" href="?borrar=<?php echo $fiesta['id'];?>">Eliminar</a></td>
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