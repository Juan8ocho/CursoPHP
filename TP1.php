<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$var1= print "Hola Mundo";
?>
<br>
<hr>
<?php
$var2= "Hola Mundo";

echo $var2;
?> 
<br>
<?php
$num1= 8;
$num2= 2;

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;
$resto = $num1 % $num2;

echo  "El valor de la suma entre 8 y 2  es: ", $suma, ". La resta da: ",$resta, ". La multiplicacion: ",$multiplicacion,
" y por ultimo la division da: ",$division, " cuyo resto es: ",$resto;
?>

<br>
<?php
$celcius = 20;
$Fahrenheit = $celcius * 1.8 + 32;

echo "20 grados celcius equivalen a:  " , $Fahrenheit , " Fahrenheit"."\n";
?>

<br>
<?php
$base= 18;
$altura= 12;

$perimetro= 2* $base + 2* $altura;
$area= $base * $altura;

echo "Para un rectangulo cuya base es e 18 cm y su altura es de 12 cm, su perimetro vale: ", $perimetro, " y su area es: ",$area, ".";
?>
<br>
<?php
$radio = 20;
$pi= 3.14;

$perimetrocirculo= 2 * $pi * $radio ;
$areacirculo= $pi * ($radio**2);
echo "Para un circulo cuyo radio es de 20 cm, su perimetro y area son: ",$perimetrocirculo, " y " ,$areacirculo, " respectivamente."; 

?>
</body>
</html>