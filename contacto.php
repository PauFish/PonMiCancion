<?php // include("cabecera.php"); ?>
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

<div class="container_contacto">
  <div class="form_contacto">
    <h2>Contacta con nosotros</h2>
    <h3>Te responderemos lo antes posible</h3>
  </div>
    <form action="">
      <ul>
        
        <li>
          <p class="">
            <label for="first_name">Nombre<span class="req">*</span></label>
            <input type="text" name="formulario_contact_name" placeholder="Tu nombre"required />
          </p>
          </li>
          <li>
          <p class="">
            <label for="last_name">Apellidos<span class="req">*</span></label>
            <input type="text" name="contact_name" placeholder="Apellidos"required />      
          </p>
          </li>
          <li>
          <p class="">
            <label for="last_name">Telefono</span></label>
            <input type="text" name="contact_telefono" placeholder="Telefono"/>      
          </p>
        </li>
        
        <li>
          <p>
            <label for="email">Email <span class="req">*</span></label>
            <input type="email" name="formulario_contact_email" placeholder="tuEmail@gmail.com" required/>
          </p>
        </li>  
        <label for="ayudarte">¿En que podemos ayudarte?</label>
        <li>
          
          <textarea rows="4" cols="40"  name="formulario_contact_ayudarte"required></textarea>
        </li>
        <!--Envia el formulario a nuestro email preferido gratuitamente gracias a: https://mailthis.to/-->
        <form action="index.php" class="form_button_contacto" action="https://mailthis.to/contacto@ponmicancion.com" method="POST">
            
    <input type="submit" value="Enviar" />
        
   


      </ul>
    </form>  
  </div>

</div>

