<?php

$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "prendas");


$id = $_GET['id'];


$consulta = "SELECT * FROM prenda WHERE id=$id";

$respuesta = mysqli_query($conexion, $consulta);

$datos=mysqli_fetch_array($respuesta);

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda de Ropa</title>
    </head>
    <body>
        <?php
        
        $tipo_prenda=$datos["tipo"];
        $marca=$datos["marca"];
        $talle=$datos["talle"];
        $precio=$datos["precio"];
        $cantidad=$datos["cantidad"];
        $imagen=$datos['imagen'];?>

        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos de la prenda.</p>
        
        <form action="" method="post" enctype="multipart/form-data">
            <label>Tipo de prenda</label>
            <input type="text" name="tipo" placeholder="Tipo de Prenda" value="<?php echo "$tipo_prenda"; ?>"> 
            <label>Marca</label>
            <input type="text" name="marca" placeholder="Marca" value="<?php echo "$marca"; ?>">
            <label>Talle</label>
            <input type="text" name="talle" placeholder="Talle" value="<?php echo "$talle"; ?>">
            <label>Precio</label>
            <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
            <label>Cantidad</label>
            <input type="text" name="cantidad" placeholder="Cantidad" value="<?php echo "$cantidad"; ?>">
            <label>Imagen</label>
            <input type="file" name="imagen" placeholder="imagen">
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
            <button type="submit" name="Cancelar" formaction="index.html">Cancelar</button>
        </form>
        <?php
        
        if(array_key_exists('guardar_cambios',$_POST)){

        
            $tipo_prenda = $_POST ['tipo'];
              $marca = $_POST['marca'];
              $talle = $_POST['talle'];
              $precio = $_POST['precio'];
              $cantidad = $_POST['cantidad'];
              $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

           
             $consulta = "UPDATE prenda SET tipo='$tipo_prenda', marca='$marca', talle='$talle', precio='$precio', cantidad='$cantidad', imagen='$imagen' WHERE id =$id";

             
             mysqli_query($conexion,$consulta);

           
            header('location: index.html');

        }?>
    </body>
</html>