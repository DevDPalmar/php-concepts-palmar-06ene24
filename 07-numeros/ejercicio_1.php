<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Numeros - ejercicio 1</title>
</head>
<body>
<?php 
    /*Infinito en PHP */
    
    /*Un valor numerico mayor ue PHP_FLOAT_MAX se considera infinito */

    /* PHP tiene las siguientes funciones para saber si un numero es finito o infinito
    
        -is_finite()
        -is_infinite()

       sin embargo la funcion PHP var_dump() devuelve el valo y el tipo de datos
    */

    $x = 1.9e411;
    var_dump($x);
    echo "<br><br>";

    /* PHP NaN */
    
    /* NaN se utiliza para operaciones matematicas imposibles */

    /* La funcion en PHP para comprobar si un valorr no es un numero es: 
    
    - is__nan()
    */

    /* Aunque tambien se puede utilizar la funcion var_dump() */

    $x = acos(8);
    var_dump($x);
    echo "<br><br>";

    /* La funcion PHP is_numeric() se puede utilizar para deteminar si una variable es numerica. La funcion devuelve verdadero si la variable es un numero o una cadena numerica, falso en caso contrario */

    $x = 5985;
    var_dump(is_numeric($x));
    echo "<br><br>";

    $x = "5985";
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo "<br><br>";

    $x = "Hola";
    var_dump(is_numeric($x));
    echo "<br><br>";

    /*Conversion de string y floats en integers */

    /* Las funciones (int), (integer) e intval() se utillizan para convertir un valor en un numero entero */

    //transformar un float en un integer

    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br><br>";

    //transfomar string a int

    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
?>
  
</body>
</html>