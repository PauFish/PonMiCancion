<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php 
$objConexion= new conexion();
$proyectos=$objConexion->consultar("SELECT * FROM `Usuarios`");

?>
<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Bienvenid@s</h1>
        <p class="lead">Este es un portafolio privado</p>
        <hr class="my-2">
        <p>Más información </p>
        
    </div>
</div>




<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach($proyectos as $proyecto) { ?>

    <div class="col">
    <div class="card">
    <img src="imagenes/<?php echo $proyecto['archivo']; ?>" alt="" srcset=""> 
      <div class="card-body">
      <td><?php echo $proyecto['Nombre'];?></td>
            <td><?php echo $proyecto['Apellidos'];?></td>
            <td><?php echo $proyecto['Email'];?></td>
            <td><?php echo $proyecto['Telefono'];?></td>
            

      </div>
    </div>
  </div>

<?php } ?>

 
</div>

<?php include("pie.php"); ?>