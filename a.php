<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura los datos del formulario
    $name = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['asunto']);
    $message = htmlspecialchars($_POST['mensaje']);

    // Configura el destinatario y el asunto del correo
    $to = 'pselectricidad@outlook.com'; // Cambia esto por tu dirección de correo
    $email_subject = 'Nuevo mensaje de contacto: ' . $subject;

    // Cuerpo del correo
    $body = "Nombre: $name\n";
    $body .= "Correo Electrónico: $email\n";
    $body .= "Asunto: $subject\n";
    $body .= "Mensaje:\n$message\n";

    // Encabezados del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envía el correo
    if (mail($to, $email_subject, $body, $headers)) {
        echo 'Correo enviado con éxito.';
    } else {
        echo 'Hubo un problema al enviar el correo.';
    }
} else {
    // Manejo de acceso no permitido
    echo 'Acceso no permitido.';
}
?>