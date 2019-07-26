<?php

$errores ='';

if(isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];

  if (!empty($nombre)) {
      // $nombre = trim($nombre);
      // $nombre = htmlspecialchars($nombre);
      // $nombre = stripslashes($nombre);

      $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
      echo "Tu nombre es: $nombre <br />";
  } else {
    $errores .= 'Por favor agrega un nombre <br />';
  }
  if(!empty($correo)){
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

    if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
      $errores .= 'Por favor ingresa un correo valido <br />';
    }
    echo "Tu correo es: $correo";
  }else{
    $errores .= 'Por favor agrega un correo';
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <style media="screen">
      .error{
        color:red;
      }
    </style>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="email" name="correo" placeholder="correo">

        <?php if(!empty($errores)): ?>
          <div class="error">
            <?php echo $errores; ?>
          </div>
        <?php endif; ?>

        <input type="submit" name="submit" value="Enviar consulta">

    </form>

    <!-- <form action="valida_envio.php" method="get">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="email" name="correo" placeholder="correo">

        <input type="submit" name="submit" value="Enviar consulta">

    </form> -->
  </body>
</html>
