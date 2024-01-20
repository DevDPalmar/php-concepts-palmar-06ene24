<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alcance de las variables - ejercicio 3</title>
</head>
<body>
  <?php
  /*La palabra reservada global se utiliza para acceder a una variable global desde dentro de una funcion*/

   $x = 5;
   $y = 10;

    function myTest() {
      global  $x, $y;
      $y = $x + $y;
    }

    myTest(); // ejecucion de la funcion.
    echo $y; // salida del nuevo valor de la variable $y.
  ?>
</body>
</html>