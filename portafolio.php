<?php include("conexion.php"); ?>    
<?php include("cabecera.php"); ?>
<?php

if($_POST){

    print_r($_POST);
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $objConexion= new conexion();
    //string que recuperamos de la base de datos, null para que el "id" lo ponga la bbdd
    $sql="INSERT INTO `usuarios` (`Usuarios_Id`, `Nombre`, `Apellidos`, `Email`, `Telefono`) VALUES (NULL, '$nombre', '$apellido', '$email', '$telefono');";    
    //acceder al metodo ejecutar de portafolio y le pasamos un string generando una intruccion
    
}
if($_GET){
   $id=$_GET["borrar"]; //o quitarlo y dejar solo lo del comentario linea 22
   $objConexion= new conexion(); 
   //Borrado utilizando el get
   //$sql="DELETE FROM `usuarios` WHERE `usuarios`.`Usuarios_Id` = ".$_GET['borrar'];
   $sql="DELETE FROM `usuarios` WHERE `usuarios`.`Usuarios_Id` =".$id;
   $objConexion->ejecutar($sql);
   
}

    //creamos una isntancia para crear la conexion con el contrucctor de conexion.php
    $objConexion= new conexion();
    //seleccioname todos los registros de la tabla usuario (fetchall en conexion)
    $proyectos= $objConexion->consultar("SELECT * FROM `usuarios`"); 

    //para ver si la info que llega en forma array print_r($resultado)

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
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Eliminar</th>

        </tr>
    </thead>    
    <tbody>
    <?php //todos los proyectos leelos de proyectos en proyectos
         foreach($proyectos as $proyecto){?>
        <tr>
            <td><?php echo $proyecto['Nombre'];?></td>
            <td><?php echo $proyecto['Apellidos'];?></td>
            <td><?php echo $proyecto['Email'];?></td>
            <td><?php echo $proyecto['Telefono'];?></td>
            <td><a type="button" class="" href="?borrar=<?php echo $proyecto['Usuarios_Id'];?>">Eliminar</a></td>
        </tr>    
            <?php
    //parece raro pero asi hace la lectura
    } ?>

</table>







<?php 
    include("pie.php"); 
?>   

