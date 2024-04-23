<?php 

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $msg = $_POST["message"];
    $destination = "scjh091098@hotmail.com";
    $affair = "FREELANCER";

    $content = "Nombre: $name\n";
    $content .= "Email: $email\n";
    $content .= "Telefono: $phone\n";
    $content .= "Mensaje: \n$msg\n";
    $from = "From: $email";

    mail($destination,$affair,$content,$from);
    header('location: confirmacion.html');
}
