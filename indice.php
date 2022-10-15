<?php include("cabecera.php");?> 
<?php include("conexion.php");?> 
<?php 
//intruccion de consulta
    $objConexion= new conexion();
    $proyectos= $objConexion->consultar("SELECT * FROM `usuarios`"); 

    
?> 
<div class="body">
<h1>Pon Mi Cancion</h1>
<h2>Elige que canciones sonarán en la fiesta</h2>
<div class="boton_fiestas">
    <button type="button" class="fiestas">Próximas Fiestas!</button>
</div>
</div>

<?php foreach ($proyectos as $proyecto){ ?>

<h2>Usuarios"cambir por fiestas luego"</h2>


<?php } ?>
<?php
    include("pie.php"); 
?>   