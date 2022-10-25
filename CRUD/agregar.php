<?php

  $conexion = mysqli_connect("127.0.0.1", "root", "");
  mysqli_select_db($conexion, "prendas");


  $tipo_prenda = $_POST ['tipo'];
  $marca = $_POST['marca'];
  $talle = $_POST['talle'];
  $precio = $_POST['precio'];
  $cantidad = $_POST['cantidad'];
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


  $consulta = "INSERT INTO prenda (id,tipo,marca,talle,precio,cantidad,imagen)
          VALUES ('','$tipo_prenda','$marca','$talle','$precio','$cantidad','$imagen')";


  mysqli_query($conexion,$consulta);

   header('location: index.html');

?>
