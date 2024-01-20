<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings - ejercicio_1</title>
</head>
<body>
  <?php 
    /* Comillas dobles o simples? */
  
    /*
      Se pueden utilizar las comillas dobles o simples, pero existen diferencias entre ellas.

      Con las comillas dobles se puede realizar interpolacion de variables.

      Esto lo que quiere decir es que cuando hay una variable en la cadena, devuelve el valor de la variable
    */

    $x = "Jose";
    echo "Hola $x";

    echo "<br><br>";

    /*
      Los strings entre comillas simples no realizan interpolacion de variable, devuelven la cadena tal como fue escrita, con el nombre de la variable pero no su valor
    */

    $x = "Maria";
    echo 'Hola $x';
  ?>
</body>
</html>