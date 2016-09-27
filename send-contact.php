<?php
if (!$_POST) exit;

require 'mailer/PHPMailerAutoload.php';

function sendMessage($values, $message, $subject) {
    require 'PHPMailerAutoload.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'localhost';
        $mail->SMTPSecure = 'tls';
        $mail->Username = '';
        $mail->Password = '';
        $mail->CharSet = 'UTF-8';

        $mail->From = $values['correo'];

        $mail->addAddress('rcsialer1@hotmail.com', 'Información');
        // $mail->addCC($values['correo'], $values['nombre']);

        $mail->isHTML(true);

        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AltBody = $values['mensaje'];

        if (!$mail->send()) {
            return ['error_message' => 'El mensaje no pudo ser enviado, intentelo de nuevo, error: ' . $mail->ErrorInfo, 'code' => 412];
        } else {
            return ['success_message' => 'Tu mensaje ha sido enviado', 'code' => 200];
        }

    } catch (phpmailerException $pex) {
        return ['error_message' => $pex->getMessage(), 'code' => 412];
    }
}

$json = [];

$params = [
	'nombre' => FILTER_SANITIZE_STRING,
	'correo' => FILTER_VALIDATE_EMAIL,
	'celular' => FILTER_SANITIZE_STRING,
	'mensaje' => FILTER_SANITIZE_STRING
];

$values = filter_input_array(INPUT_POST, $params);

if (empty($values['nombre'])) {
    $error_message = ['error_message' => 'El nombre es requerido', 'code' => 412];
} else if (!$values['correo']) {
    $error_message = ['error_message' => 'Debe poner un email válido', 'code' => 412];
} else if (empty($values['mensaje'])) {
    $error_message = ['error_message' => 'Debe escribir su mensaje', 'code' => 412];
} else {
    $message = nl2br('<br><b>Correo:</b> ' . $values['correo'] . '<br><br><blockquote style="border-left:5px solid #CCC;padding: 4px 7px;">' . $values['mensaje'] . '</blockquote>');
    $error_message = sendMessage($values, $message, 'Mensaje enviado desde la página web');
}

http_response_code($error_message['code']);
echo json_encode($error_message);