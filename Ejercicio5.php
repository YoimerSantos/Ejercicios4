<?php
$N=7;

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio5</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3>Algoritmo que solicite un numero N y muestre en pantalla el mismo numero de asteriscos:</h3>
     <h4>Valor de N; <?php echo $N ?> </h4>
    <?php

    for ($i=1;$i<=$N;$i++ ) {

     echo " * ";
    }


     ?>

  </body>
</html>
