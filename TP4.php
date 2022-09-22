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
<h1>Trabajo Practico BackEnd N 4</h1>
<h3>Estructuras de control parte 2 </h3>


<h5>Mostrar los números del 1 al 100</h5>
<?php 

for ($i=0; $i < 101 ; $i++) { 
    print "<p>$i<p>\n";
}


?>
<br>
<hr>

<h5>Mostrar los números del 100 al 1</h5>
<?php 
$i = 100;

while ($i >= 1) {
    print "<p>$i<p>\n";
    $i--;
}

?>

<br>
<hr>

<h5>Mostrar los números pares del 1 al 100</h5>
<?php 
$i = 2;

while ($i <= 100) {
   
  print "<p>$i<p>\n"; 
  $i= $i+2;
}

?>


<h5>Mostrar los números impares del 1 al 100</h5>
<br>
<hr>
<?php 
$i = 1;

while ($i <= 100) {
   
  print "<p>$i<p>\n"; 
  $i= $i+2;
}

?>

<br>
<hr>

<h5>Mostrar la suma de los números de 1 a 20</h5>
<?php 
 $suma = 0;

for ($i=0; $i <= 20 ; $i++ ){
    $suma = $suma + $i;
} 
print $suma;

?>

<br>
<hr>

<h5>Mostrar la suma de números pares de 1 a 20</h5>
<?php  
$suma = 0;

for ($i=0; $i <= 20 ; $i= $i+2 ){
   $suma = $suma + $i;
} 
print $suma;

?>





<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>