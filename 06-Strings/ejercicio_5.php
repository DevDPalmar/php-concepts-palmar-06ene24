<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings - ejercicio_5</title>
</head>
<body>
  <?php 
    /* Cortar strings */

    /* La funcion 'subst()' corta una cadena, se debe especificar como primer parametro el indice inicial y como segundo parametro el numero de caracteres que desea retonar */

    $x = "Hola mundo!";
    echo substr($x, 5, 5);

    /* Cortar la cadena hasta el final */

    /* Si omites el segundo parametro o el parametro de longitud, el rango ira hasta el final */

    echo substr($x, 6);
    echo "<br><br>";

    /* Cotar desde el final */

    /* Se deben utilizar indices negativos en el segundo parametro para comenzar desde el final del string */

    echo substr($x, -5, 3);
    echo "<br><br>";

    /* longitud negativa */

    /* Se utiliza una longitud negativa para especificar cuantos caracteres omitir, comenzando desde el final del string */

    echo substr($x, -5, 3); //mun "son llamados \"vikingos\" los..."
    echo "<br><br>";


  ?>
</body>
</html>