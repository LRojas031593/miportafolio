<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  $destinatario = "luis.miguelrm@hotmail.com";
  $asunto = "Mensaje del formulario de contacto";
  $cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
  $cabeceras = "From: $email\r\nReply-To: $email\r\n";

  if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
    echo "Mensaje enviado con éxito";
  } else {
    echo "Ha ocurrido un error al enviar el mensaje";
  }
}
?>
