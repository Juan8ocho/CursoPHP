<?php 

$ususario = $_POST ["user"];

$contraseña = $_POST ["pass"];

$saveuser = "admin";
$savepass = "1234";

if ($usuario == $saveuser && $contraseña == $savepass) {
    header ("location:https://www.youtube.com/");
}else {
    header("location:error.html");
}

?>

