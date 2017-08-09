<?php
$N=5;

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio6</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3>Algoritmo que muestre la tabla de multiplicar de N numero:</h3>
     <h4>Valor de N; <?php echo $N ?> </h4>

    <?php

    for ($i=1;$i<=10; $i++) {
      $M=$i*$N;
     echo "$i x $N = $M <br>";
    }


     ?>

  </body>
</html>
