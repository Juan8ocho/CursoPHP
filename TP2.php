<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <script>
  alert("Aprobame Profe!!! XD")
 </script>
  <h1>Trabajo Practico BackEnd N 2</h1>
  
    
    <?php
     $n = 29;
     if ($n > 0) {
        echo "El numero es positivo";
       } else {
        echo "El numero no es positivo";
      }
    ?>
    <br>
    <hr>

    
    <?php
     $n = 30;
      if ($n > 1 & $n < 10) {
        echo "El numero esta entra 1 y 10";
      } else {
        echo "El numero no esta entre 1 y 10";
      }
    ?>

    <br>
    <hr>


    <?php  $n = 31;
      if($n > 10){
        echo "El numero es mayor a 10";
      } elseif($n < 2){
        echo "El numero es menor a 2";
      } else {
        echo "El numero no cumple con los requisitos";
      }
    ?> 
    <br>
    <hr>

    <?php
    $numero1 = 28;

    $numero2 = 47;

    if($numero1 > $numero2){
        echo "La suma de los numeros es: ", $numero1 + $numero2; 
        echo "La resta de los numeros es: ", $numero1 - $numero2;
    } elseif($numero1 < $numero2){
        echo "La multiplicacion da: ", $numero1 * $numero2," .";
        echo "La division da: ", $numero1 / $numero2," .";
        echo "El resto de la division da: ", $numero1 % $numero2,".";
    } elseif($numero1 == $numero2) {
        echo "Los números ingresados son iguales"; 
      }
    ?>
 


 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>