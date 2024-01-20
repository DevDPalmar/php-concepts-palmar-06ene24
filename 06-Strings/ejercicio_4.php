<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings - ejercicio_4</title>
</head>
<body>
  <?php 
    /* Concatenacion de string
    
       Para concatenar o 
       combinar 2 cadenas se puede utilizar el operador '.'
    */

    $x = "Hola";
    $y = "mundo";
    $z = $x . $y;
    echo $z;
    echo "<br><br>";

    /* el siguiente ejemplo agrega un espacio entre palabras */

    $z = $x . " " . $y;
    echo $z;
    echo "<br><br>";

    /* Concatenacion con interpolacion de variables */

    $z = "$x $y";
    echo $z;

    echo "<br><br>";
  ?>
</body>
</html>