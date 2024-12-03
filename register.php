<?php
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
$paracorreo = "suzetthelmcke@gmail.com";
$asunto= "Mensaje Nuevo - Usuario nuevo registrado en la plataforma RAIKS TECH";
$mensaje="Nombre del registrado: $nombre
E-mail: $email";
$tucorreo= "From: jackelinesuzett@gmail.com";
if(mail($paracorreo,$asunto,$mensaje,$tucorreo)){
    echo "Registro Completado";
}
else{
    echo "Error";
}
?>