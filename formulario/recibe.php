<?php
//print_r($_POST)

// if(!$_POST){
//   header('Location: http://localhost/curso_php/formulario/');
//
// }
  $nombre = $_GET['nombre'];
  $sexo = $_GET['sexo'];
  $year = $_GET['year'];
  $terminos = $_GET['terminos'];
  echo $nombre . '<br/>';
  echo $sexo . '<br/>';
  echo $year . '<br/>';
  echo $terminos . '<br/>';

 ?>
