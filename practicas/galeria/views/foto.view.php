<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Galería</title>
  </head>
  <body>
    <header>
      <div class="contenedor">
        <h1 class="titulo">Foto: <?php if(!empty($foto['titulo'])){
          echo $foto['titulo'];
        } else{
          echo $foto['imagen'];
        } ?></h1>
      </div>
    </header>
      <div class="contenedor">
        <div class="foto">
            <img src="./fotos/<?php echo $foto['imagen']; ?>">
            <p class="texto"><?php echo $foto['texto']; ?></p>
            <a href="index.php" class="regresar">Regresar</a>
        </div>
      </div>
    <footer>
      <p class="copyright">Galería creada por Daniel Osvaldo</p>
    </footer>
  </body>
</html>
