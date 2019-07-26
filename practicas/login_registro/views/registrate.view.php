<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrate</title>
  </head>
  <body>
    <div class="contenedor">
      <h1 class="titulo">Registrate</h1>
      <hr class="border">

      <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="login" method="post">
        <div class="form-group">
          <img src="./css/user.svg" height="50px" width="50px"><input type="text" name="usuario" class="usuario" placeholder="Usuario">
        </div>
        <div class="form-group">
          <img src="./css/locked.svg" height="50px" width="50px"><input type="password" name="password" class="password" placeholder="Contraseña">
        </div>
        <div class="form-group">
          <img src="./css/locked.svg" height="50px" width="50px"><input type="password" name="password2" class="password_btn" placeholder="Repetir Contraseña">
          <img src="./css/login.svg" height="50px" width="50px" class="submit-btn" onclick="login.submit()">
        </div>
        <?php if(!empty($errores)): ?>
          <div class="error">
            <ul>
              <?php echo $errores; ?>
            </ul>
          </div>
        <?php endif; ?>
      </form>

      <p class="texto-registrate">
        ¿Ya tienes cuenta? </br>
        <a href="login.php">Iniciar Sesión</a>
      </p>
    </div>
  </body>
</html>
