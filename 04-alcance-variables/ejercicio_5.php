<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alcance de las variables - ejercicio 5</title>
</head>
<body>
  <?php
  /*La palabra reservada static*/

  /* Normalmente, cuando se finaliza/ejecuta una funcion, se eliminan todas sus variables. Sin embargo, a veces no queremos que se elimine una variable local. Quizas la necesitemos para otra tarea.
  
  Para ello se utiliza la palabra reservada static apenas se declare la variable por primera vez.
  */
    function myTest() {
      static $x = 0;
      echo $x;
      $x++;
    }

    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();
    echo "<br>";  
  ?>
</body>
</html>