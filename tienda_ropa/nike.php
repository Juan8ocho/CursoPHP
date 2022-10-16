<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tienda de ropa</h1>

<h2>Lista de ropa</h2>
<p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
<table border="1">
<tr>
    <th>TIPO</th>
    <th>MARCA</th>
    <th>TALLE</th>
    <th>PRECIO</th>
    <th>CANTIDAD</th>
    <th>IMAGEN</th>
</tr>
<?php

$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion, "prendas");


$consulta= "SELECT * FROM prenda WHERE marca = 'nike' ";

$datos= mysqli_query($conexion,$consulta);




while ( $reg=mysqli_fetch_array($datos)) { ?>
    <tr>
    <td><?php echo $reg['tipo']; ?></td>
    <td><?php echo $reg['marca']; ?></td>
    <td><?php echo $reg['talle']; ?></td>
    <td><?php echo $reg['precio']; ?></td>
    <td><?php echo $reg['cantidad']; ?></td>
    <td><?php echo $reg['imagen']; ?></td>
    </tr>
<?php } ?>
</table>
</body>
</html>