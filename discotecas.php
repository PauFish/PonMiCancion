<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php $objConexion= new conexion();
$usuarios=$objConexion->consultar("SELECT * FROM `usuarios`");?>

<html lang="en">
  <head>
    <title>Pon Mi Cancion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <h1>Las Mejores Discotecas</h1>
        
  

  </body>
</html>

<?php include("footer.php"); ?>