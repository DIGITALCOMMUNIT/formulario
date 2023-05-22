<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Recuperar los datos del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$experiencia = $_POST['experience'];
$calidad_comida = $_POST['food-quality'];
$servicio = $_POST['service'];
$ambiente = $_POST['atmosphere'];
$recomendacion = $_POST['recommendation'];
$comentarios = $_POST['comments'];

// Crear una nueva instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurar el servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ai.bryan.auto@gmail.com';
    $mail->Password = 'anryb2323';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configurar el correo electrónico
    $mail->setFrom('ai.beyan.auto@gmail.com', 'prueva');
    $mail->addAddress('digitalcommunity3@gmail.com', 'Destinatario');
    $mail->Subject = 'Respuestas de la encuesta del restaurante';
    $mail->Body = "Nombre: $nombre\nEmail: $email\nExperiencia general: $experiencia\nCalidad de la comida: $calidad_comida\nServicio: $servicio\nAmbiente: $ambiente\n¿Recomendaría nuestro restaurante?: $recomendacion\nComentarios adicionales:\n$comentarios";

    // Enviar el correo electrónico
    $mail->send();
    echo 'El correo electrónico ha sido enviado.';
} catch (Exception $e) {
    echo 'El correo electrónico no pudo ser enviado. Error: ', $mail->ErrorInfo;
}
?>
