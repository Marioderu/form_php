<?php

$error = '';
$enviado = '';

if (isset($_POST['submit'])) {

    $name = $_POST['nombre'];
    $mail = $_POST['correo'];
    $msg = $_POST['mensaje'];

    if (!empty($name)) {
        $name = trim($name);
        $name = strip_tags($name);
        $name = stripslashes($name);
    
    } else {
        $error .= 'Por favor, ingrese un nombre<br>';
    }

    if (!empty($mail)) {
        $mail = trim($mail);
        $mail = strip_tags($mail);
        $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);

        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $error .= 'Por favor, ingrese un correo válido<br>';
        }
    
    } else {
        $error .= 'Por favor, ingrese un correo<br>';
    }

    if (!empty($msg)) {
        $msg = trim($msg);
        $msg = strip_tags($msg);
        $msg = stripslashes($msg);
    
    } else {
        $error .= 'Por favor, ingrese un mensaje<br>';
    }

    if (!$error) {
        $send = 'mariodr0796@gmail.com';
        $subject = 'Correo enviado desde MiProyectoPHP.com';
        $mensaje = "De: $name \n";
        $mensaje .= "Correo: $mail \n";
        $mensaje .= "Mensaje $msg";

        mail($send, $subject, $mensaje);
        $enviado = 'true';
    }
}

require 'index.view.php';

?>