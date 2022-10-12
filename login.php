<?php
session_start();
if($_POST){
    if( ($_POST['Usuario']=="pau") && ($_POST['Contraseña']=="1")){
    $_SESSION['Usuario']="pau";
        header("location:indice.php");
    
    }

    else{
        echo "<script> alert('Usuario o contraseña incorrecta');</script>";
    }
}







?>


<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pon Mi Cancion</title>

</head>

<body>
<div class="container">
    <h2>Iniciar sesión</h2>
    <form action="login.php" method="post" >
        Usuario:
        <input type="text" class="form-control" name="Usuario">
        <br> 
        Contraseña:  
        <input type="password" class="form-control" name="Contraseña">
        <br>
        <button class="btn btn-succes" type="submit">Login</button>
    </form>
</div>
</body>
</html>    

<!--5:45-->
      