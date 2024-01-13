<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de datos - ejercicio 1</title>
</head>
<body>
  <?php
  /* Los tipos de datos en PHP son:
         
         - string
         - integer
         - float
         - boolean
         - array
         - object
         - NULL
         - Resource
  */

  /*
    Las clases y los objetos son los dos aspectos principales de la programacion orientada a objetos.
    
    Una clase es una plantilla para objetos y un objeto es una instacia de una clase.

    Cuando se crean los objeto indiviuales, heredan todas las propiedades y comportamientos de la clase, pero cada objeto tendra valores diferentes para las propiedades.
  */

  class Carro {
    public $color;
    public $modelo;
    public function __constuct($color, $modelo) {
      $this -> color = $color;
      $this -> modelo = $modelo;
    }

    public function mensaje() {
      return "My car is a ". $this -> color . "" . $this -> modelo . "!";
    }
  }

  $myCar = new Carro("rojo", "chevrolet");
  var_dump($myCar);
  
  ?>
</body>
</html>