<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Ejercicio 1 </h3>
    <?php
    
     $numpares = [2,4,6,8,10,12,14,16,18,20];
     foreach($numpares as $valor){
      print "$valor\n";
     }
  
    ?>
    <br>
    <hr>

    <h3>Ejercicio 2 </h3>
    <?php
   $array = ["Pedro","Ana",34,1];
   print_r($array);

    ?>
    <br>
    <hr>

    <h3>Ejercicio 3 </h3>
    <?php
   $array = [
    'Nombre' => "Pedro",
    'Apellido' => "Torres",
    'Direccion' => "Av. Mayor 3703",
    'Telefono' => "1122334455",
   ];
   foreach($array as $indice => $valor){
    print "$indice =   $valor\n";
   }

    ?>
    <br>
    <hr>

    <h3>Ejercicio 4 </h3>
    <?php
   $array = ["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];
   
   print "La ciudad con el indice 2 tiene el nombre de $array[2]";
    
    ?>
    <br>
    <hr>
    
    <h3>Ejercicio 5 </h3>
    <?php
   $array = [
   'MD' => "Madrid",
   'BCL' => "Barcelona",
   'LD' => "Londres",
   'NY' => "New York",
   'LA' => "Los Angeles",
   'CCG' => "Chicago"
];
   foreach($array as $indice => $valor){
    print "El indice de $valor es $indice\n";
    
   }

    ?>
    <br>
    <hr>


</body>
</html>