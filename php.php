<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'ruta_hacia_PHPMailer/Exception.php';
require 'ruta_hacia_PHPMailer/PHPMailer.php';
require 'ruta_hacia_PHPMailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtén los datos de la encuesta
  $name = $_POST['name'];
  $email = $_POST['email'];
  $experience = $_POST['experience'];
  $foodQuality = $_POST['food-quality'];
  $service = $_POST['service'];
  $atmosphere = $_POST['atmosphere'];
  $recommendation = $_POST['recommendation'];
  $comments = $_POST['comments'];

  // Configura la información del correo electrónico
  $to = 'tucorreo@example.com';
  $subject = 'Respuestas de la encuesta';

  // Construye el contenido del correo electrónico
  $message = "Nombre: $name\n";
  $message .= "Email: $email\n";
  $message .= "Overall Experience: $experience\n";
  $message .= "Food Quality: $foodQuality\n";
  $message .= "Service: $service\n";
  $message .= "Atmosphere: $atmosphere\n";
  $message .= "Would you recommend us to others? $recommendation\n";
  $message .= "Additional Comments:\n$comments\n";

  // Configura PHPMailer
  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPAuth = true;
  $mail->Username = 'ai.bryan.auto@gmail.com';
  $mail->Password = 'anryb2323';

  // Configura los detalles del mensaje
  $mail->setFrom('ai.bryan.auto@gmail.com', 'Tu Nombre');
  $mail->addAddress($to);
  $mail->Subject = $subject;
  $mail->Body = $message;

  // Envía el correo electrónico
  if ($mail->send()) {
    echo "Gracias por completar la encuesta. Tus respuestas han sido enviadas.";
  } else {
    echo "Ha ocurrido un error al enviar las respuestas de la encuesta: " . $mail->ErrorInfo;
  }
}
?>

