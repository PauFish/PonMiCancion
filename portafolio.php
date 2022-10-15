<?php include("conexion.php"); ?>    
<?php include("cabecera.php"); ?>
<?php

if($_POST){
    $objConexion= new conexion();
    
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];

    //string que recuperamos de la base de datos, null para que el "id" lo ponga la bbdd
    $sql="INSERT INTO `usuarios` (`Usuarios_Id`, `Nombre`, `Apelido`, `Email`, `Telefono`) VALUES (NULL, '$nombre', '$apellido', '$email', '$telefono');";    
    //acceder al metodo ejecutar de portafolio y le pasamos un string generando una intruccion
    $objConexion->ejecutar($sql);
}
?>   

<h1>Soy el portafolio/Formulario</h1>
<br>
 <!--Enctype recepciona los archivos-->
<form method="post" action="portafolio.php" enctype="multipart/form-data">
   
    Nombre Usuario: <input type="text" class="form-control" name="nombre" >
   <br>
    Apellido: <input type="text" class="form-control" name="apellido">
    <br>
    Email: <input type="text" class="form-control" name="email">
    <br>
    Telefono: <input type="text" class="form-control" name="telefono">
   

    <input type="submit" value="Enviar proyecto">

<br>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
        </tr>
    </thead>    
    <tbody>
        <tr>
            <td>3</td>
            <td>Aplicacion web</td>
            <td>ira imagen.jpg</td>


</table>







<?php 
    include("pie.php"); 
?>   

