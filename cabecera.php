<?php
session_start();
if(isset($_SESSION['Usuario'])!="pau"){
    header("location:login.php");
}


?>




<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pon Mi Cancion</title>

</head>

<a href="indice.php">Inicio</a>
<a href="portafolio.php">Portafolio</a>
<a href="cerrar.php">Cerrar</a>


<body>
      