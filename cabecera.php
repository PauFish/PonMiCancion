<?php 
session_start();
if( isset($_SESSION['usuario'])!="develoteca"){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<div class="container">


<a href="index.php"> Inicio </a> | 
    <a href="nuevo_usuario.php"> Introducir datos </a> |
    <a href="usuarios.php"> Usuarios </a>|
    <a href="dj.php"> DJ's </a>|
    <a href="fiestas.php"> Fiestas </a>|
    <a href="discotecas.php"> Discotecas </a>|
    <a href="cerrar.php"> Cerrar </a>

    <br/>
</div>

</body>



