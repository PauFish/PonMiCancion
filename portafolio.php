<?php 
    include("cabecera.php"); 
?>   

<h1>Soy el portafolio/Formulario</h1>
<br>
<form method="post" action="portafolio.php">

    Nombre del proyecto: <input type="text" class="form-contro l" name="nombre">
   <br>
    Imagen del proyecto: <input type="file" class="form-control" name="archivo">

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


////6:06





<?php 
    include("pie.php"); 
?>   

