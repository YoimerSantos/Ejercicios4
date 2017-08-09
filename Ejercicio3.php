<?php
$i=15;
$m=30;
$cont=0;
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio3</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3>Algoritmo que solicite dos numeros y muestre la suma de todos los numeros que van del primero al segundo:</h3>
     <h4>Valor Numero1; <?php echo $i ?> </h4>
     <h4>Valor Numero2; <?php echo $m ?> </h4>
    <?php

    for ($i;$i<=$m; $i++) {
      $cont=$cont+$i;
     echo "$cont <br>";

    }

     ?>

  </body>
</html>
