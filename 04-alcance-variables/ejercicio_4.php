<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alcance de las variables - ejercicio 4</title>
</head>
<body>
  <?php
  /*PHP tambien almacena todas las variables globales en un arreglo. Contiene el nombre de la variable. Tambien se puede acceder a este arreglo desde funciones y se puede utilizar para actualizar variables globales directamente. $GLOBALS[index] */

   $x = 5;
   $y = 10;

    function myTest() {
      $GLOBALS['y'] = $GLOBALS['x'] + $GLOBAlS['y'];
    }

    myTest();
    echo $y; 
  ?>
</body>
</html>