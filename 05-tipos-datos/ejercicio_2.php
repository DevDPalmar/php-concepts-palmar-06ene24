<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de datos - ejercicio 2</title>
</head>
<body>
  <?php
  /* Cambiar tipos de datos
  */

  /*
    Si asignamos un valor entero a una variable, el tipo sera automaticamente un numero entero.

    Si asignamo una cadena a la misma variable, el tipo de dato cambiara a una cadena:
  */

 $x = 5;

 var_dump($x);

 echo "<br>";

 $x = "Hello";
 var_dump($x);

 /* Si desea cambiar el tipo de datos de una variable existente, pero no cambiar el valor, se puede utilizar la conversion
 
  La conversion le permite cambiar el tipo de datos en las variables 
 */

 echo "<br><br>";
 $x = 5;
 $x = (string) $x;
 var_dump($x);
  ?>
</body>
</html>