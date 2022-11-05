

<!-- Control de usuarios aniguos hay que arreglarlo-->
<?php  include("cabecera.php"); ?>
<!-- conexion con la base de datos-->
<?php include("conexion.php"); ?>
<?php $objConexion= new conexion();?>





<html lang="es">
  <head>
    <title>Pon Mi Cancion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>
  <body>
    <div class="">
    <h1>Las Mejores Canciones</h1>
    </div>
 
    <div class="">
    <?php $canciones=$objConexion->consultar("SELECT * FROM `canciones`");?>
    <?php foreach($canciones as $cancion) { ?>

      <div class="col">
      <div class="card">
      <!--<img src="media/fotos/fotos_fiestas_discoteca<?php //echo $fiesta['archivo']; ?>" alt="" srcset=""> -->
        <div class="card-body">
            <td><?php echo $cancion['cancion'];?> | </td>
           <!-- <td><img width="100" src="media/fotos/fotos_fiestas_discoteca<?php //echo $fiesta['cartel']; ?>" alt="" srcset=""> </td> -->
           <!-- por cada cancion sacame el artista-->
           <td><?php echo $cancion['artista'];?></td>
        </div>
      </div>
      </div>
  <?php } ?>
  </div>

  </body>
</html>

<?php include("footer.php"); ?>


