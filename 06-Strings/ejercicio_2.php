<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings - ejercicio_2</title>
</head>
<body>
  <?php 
    /* Longitud de un string en PHP */

    /*
      La funcion strlen() en php devuelve la longitud de una cadena.
    */

    echo strlen("Hola Mundo");

    echo "<br><br>";

    /* Recuento de palabras en PHP */

    /* La funcion  str_word_count() de PHP cuenta el numero de palabras en un string. */
    echo str_word_count("buenos dias");

    echo "<br><br>";

    /* Buscarr texto dentro de una cadena */

    /* La funcion PHP strpos() busca un texto especifico dentro de una cadena.
    
       Si se encuentra una coincidencia, la funcion devuelve la posicion del caracter de la primera coincidencia. si no se encuentra ninguna coincidencia, devolvera falso.
     */

     echo strpos("Bonito dia", "dia");
     Echo "<br>";
     echo strpos("Maria Hernandez", "Perez");
  ?>
</body>
</html>