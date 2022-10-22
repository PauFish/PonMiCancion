<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php $objConexion= new conexion();
$usuarios=$objConexion->consultar("SELECT * FROM `usuarios`");?>

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Pon Mi Cancion</h1>
        <p class="lead">Las mejores fiestas las haces TU!</p>
        <hr class="my-2">
        
        
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach($usuarios as $usuario) { ?>

    <div class="col">
    <div class="card">
    <img src="media/fotos/fotos_fiestas_discoteca<?php echo $usuario['archivo']; ?>" alt="" srcset=""> 
      <div class="card-body">
            <td><?php echo $usuario['nombre'];?></td>
            <td><?php echo $usuario['apellidos'];?></td>
            <td><?php echo $usuario['email'];?></td>
            <td><?php echo $usuario['telefono'];?></td>
      </div>
    </div>
    </div>
<?php } ?>
</div>
<?php include("footer.php"); ?>