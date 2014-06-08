<?php
$sendTo = "granredy@gmail.com";
$subject = "Contacto";
$titulo = "Alguien se ha contactado con usted";
$ip = $_SERVER["REMOTE_ADDR"];
$name = $_POST["contactName"];
$email = $_POST["contactEmail"];
$comentarios = $_POST["contactMessage"];
$message = "\nAlguien se ha contactado con usted:" . "\nIP: " . $ip . "\nNombre: " . $name . "\nEmail: " . $email . "\nComentarios: " . $comentarios;
mail($sendTo, $subject, $message);
header('Location: /index.html');
?>