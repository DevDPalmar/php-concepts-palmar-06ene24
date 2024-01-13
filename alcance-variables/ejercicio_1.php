<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alcance de las variables - ejercicio 1</title>
</head>
<body>
  <?php
  /* PHP tiene tres alcances de variables diferentes
       - local
       - global
       - static
  */

  /* Variable con alcance global*/

    $x = 5; // alcance global

    function myTest() {
       // usando la variable dentro de esta funcion se generara un error

       echo "<p>El valor de la variable x dentro de la funcion es: $x</p>";

    }
    myTest();
       echo "<p>El valor de la variable x dentro de la funcion es: $x</p>";
  ?>
</body>
</html>