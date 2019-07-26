<?php
session_start();

$_SESSION['nombre'] = 'Carlos';

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Sessions</title>
   </head>
   <body>
     <h1>Pagina de inicio</h1>
     <p></p>
     <a href="pagina2.php">Ir a la pagina 2</a>
   </body>
 </html>
