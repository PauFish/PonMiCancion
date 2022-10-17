<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php $objConexion= new conexion();
$fiestas=$objConexion->consultar("SELECT * FROM `Usuarios`");?>

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Pon Mi Cancion</h1>
        <p class="lead">Las mejores fiestas</p>
        <hr class="my-2">
        <p>Más información </p>
        
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach($fiestas as $fiesta) { ?>

    <div class="col">
    <div class="card">
    <img src="media/fotos/fotos_fiestas_discoteca/<?php echo $fiesta['archivo']; ?>" alt="" srcset=""> 
      <div class="card-body">
      <td><?php echo $fiesta['nombre'];?></td>
            <td><?php echo $fiesta['apellidos'];?></td>
            <td><?php echo $fiesta['email'];?></td>
            <td><?php echo $fiesta['telefono'];?></td>
            

      </div>
    </div>
  </div>

<?php } ?>

 
</div>

<?php include("pie.php"); ?>