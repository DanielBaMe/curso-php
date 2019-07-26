<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="utf-8">
    <title>Paginación</title>
  </head>
  <body>
    <div class="contenedor">
      <h1>Articulos</h1>
      <section class="articulos">
        <ul>
          <?php foreach ($articulos as $articulo): ?>
            <li><?php echo $articulo['ID'] . '.- ' . $articulo['nombre'] ?></li>
          <?php endforeach; ?>
        </ul>
      </section>
      <section class="paginacion">
        <ul>
          <?php if($pagina == 1): ?>
            <li class="disable">&laquo;</li>
          <?php else: ?>
            <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>;
          <?php endif; ?>

          <?php

          for ($i=1; $i <= $numeroPaginas; $i++){
            if($pagina == $i){
              echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
            } else {
              echo "<li><a href='?pagina=$i'>$i</a></li>";
            }
          }
          ?>

          <?php if($pagina == $numeroPaginas): ?>
            <li class="disable">&raquo;</li>
          <?php else: ?>
            <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>;
          <?php endif; ?>
        </ul>
      </section>
    </div>
  </body>
</html>
