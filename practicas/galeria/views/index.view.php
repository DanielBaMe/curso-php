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
        <h1 class="titulo">Mi increible galería en PHP y MySQL</h1>
      </div>
    </header>
    <section class="fotos">
      <div class="contenedor">
        <?php foreach($fotos as $foto): ?>
          <div class="thumb">
            <a href="foto.php?id=<?php echo $foto['id']; ?>">
              <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
            </a>
          </div>
        <?php endforeach; ?>
        <div class="paginacion">
          <?php if($pagina_actual>1): ?>
            <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda">Pagina anterior</a>
          <?php endif ?>

          <?php if($total_paginas != $pagina_actual): ?>
            <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente</a>
          <?php endif?>
          <!-- <a href="#" class="izquierda">Pagina Anterior</a>
          <a href="#" class="derecha">Pagina Siguiente</a> -->
        </div>
      </div>
    </section>

    <footer>
      <p class="copyright">Galería creada por Daniel Osvaldo</p>
    </footer>
  </body>
</html>
