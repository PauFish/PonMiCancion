<!---------------- Una vez ya dentro de tu usuario con tus credenciales-->
<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>



<!---------------- una vez ya dentro de tu usuario con tus credenciales-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pon Mi Cancion</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <br>Hola! <?= $user['email']; ?>
      <br>Vamos de fiesta!</br>
      <button type="button"><a href="fiestas.php">Fiestas Disponibles</a> </button>
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h1> Entra y elige</h1>

      <a href="login2.php">Login</a> or
      <a href="signup.php">Registrar</a>
    <?php endif; ?>
  </body>
</html>