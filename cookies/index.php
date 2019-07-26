<?php

if(isset($_COOKIE['font-size'])){
  $tamaño = htmlspecialchars($_COOKIE['font-size']);
} else{
  $tamaño = '40px';
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Texto</title>
    <style media="screen">
      p{
        font-size: <?php echo $tamaño; ?>;
      }
    </style>
  </head>
  <body>
    <p>Nescius labore elit constias amet, aliquip nulla possumus excepteur, nisi
      pariatur ad familiaritatem an fugiat iis et nisi cernantur. Tempor singulis in
      pariatur in probant distinguantur id iudicem, multos incididunt sed eram nisi de
      aute offendit offendit, do quem excepteur incurreret ab an sunt velit quae
      iudicem ne hic dolor cupidatat possumus, expetendis amet mentitum incididunt. Se
      tamen laborum firmissimum nam et labore quis hic ingeniis.Non est duis
      quibusdam, possumus tempor consequat vidisse e non quis enim te probant, fugiat
      nam a elit probant. Expetendis anim magna non cillum. Nulla iudicem a summis
      enim ab vidisse sunt deserunt laborum e admodum malis nisi ingeniis irure, eu
      nisi amet iis laboris.</p>
  </body>
</html>
