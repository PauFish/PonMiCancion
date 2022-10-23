<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php $objConexion= new conexion();



$fiestas=$objConexion->consultar("SELECT * FROM `fiestas`");?>

<html lang="es">
  <head>
    <title>Pon Mi Cancion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>
  <body>
    <div class="titulo_fiestas_container">
    <h1>Las Mejores Fiestas</h1>
    </div>
 
    <div class="lanzador_fiestas_container">

    <?php foreach($fiestas as $fiesta) { ?>

      <div class="col">
      <div class="card">
      <img src="media/fotos/fotos_fiestas_discoteca<?php echo $fiesta['archivo']; ?>" alt="" srcset=""> 
        <div class="card-body">
            <td><?php echo $fiesta['nombre_fiesta'];?></td>
            <td><?php echo $fiesta['musica_fiesta'];?></td>
            <td><?php echo $fiesta['fotos_fiesta'];?></td>
            
        </div>
      </div>
      </div>
  <?php } ?>
  </div>

  </body>
</html>

<?php include("footer.php"); ?>





