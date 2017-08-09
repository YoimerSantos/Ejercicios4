<?php
$i=10;
$m=45;
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio2</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3>Algoritmo que solicite dos numeros y muestre todos los numeros impares que van del primero al segundo:</h3>
     <h4>Valor Numero1; <?php echo $i ?> </h4>
     <h4>Valor Numero2; <?php echo $m ?> </h4>
    <?php

    for ($i;$i<=$m; $i++) {
      if (($i%2)==1 ){
     echo "$i <br>";
    }
    }

     ?>

  </body>
</html>
