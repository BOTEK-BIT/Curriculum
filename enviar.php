<?php
// Recoge los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Configura el correo electrónico
$para = '21307019@utcgg.edu.mx'; // Cambia esto por tu dirección de correo electrónico
$titulo = 'Mensaje enviado desde mi currículum';
$contenido = "Nombre: $nombre\nCorreo electrónico: $email\nMensaje:\n$mensaje";

// Envía el correo electrónico
mail($para, $titulo, $contenido);

// Redirige al usuario de vuelta a tu página después de enviar el mensaje
header('Location: index.html');
exit;
