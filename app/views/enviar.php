<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'msg' => 'Método no permitido']);
    exit;
}

// ==========================
// Datos del formulario
// ==========================
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    http_response_code(400);
    echo json_encode(['success' => false, 'msg' => 'Campos incompletos']);
    exit;
}

$mail = new PHPMailer(true);

try {
   // ==========================
    // SMTP EXTERNO (GMAIL)
    // ==========================
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                 // 🔴 CAMBIO
    $mail->SMTPAuth   = true;
    $mail->Username   = 'artesgraficascd@gmail.com';             // 🔴 CAMBIO
    $mail->Password   = 'pucaxlaczyehgnku';             // 🔴 CAMBIO
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL/TLS
$mail->Port       = 465; 

    $mail->CharSet = 'UTF-8';

    // ==========================
    // Remitente y destino
    // ==========================
    $mail->setFrom('artesgraficascd@gmail.com', 'Formulario Web'); // 🔴 CAMBIO
    $mail->addAddress('ventas@lineagraficaxxi.com');        // 🔴 DESTINO REAL

    $mail->addReplyTo($email, $name);                       // ✔ IGUAL

   // ==========================
   // Contenido del correo (HTML ORIGINAL)
   // ==========================
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje desde la web';
    
    $mail->Body = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Nuevo contacto</title>
    </head>
    <body style="margin:0;padding:0;background-color:#f4f4f4;font-family:Arial,Helvetica,sans-serif;">
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center" style="padding:30px 0;">
                    <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:8px;overflow:hidden;">

                        <!-- Header -->
                        <tr>
                            <td style="background:#BE1119;color:#ffffff;padding:20px 30px;">
                                <h2 style="margin:0;font-size:20px;">Nuevo contacto desde la web</h2>
                            </td>
                        </tr>

                        <!-- Contenido -->
                        <tr>
                            <td style="padding:30px;color:#333333;font-size:14px;line-height:1.6;">

                                <p style="margin:0 0 10px;"><strong>Nombre:</strong> '.$name.'</p>
                                <p style="margin:0 0 10px;"><strong>Correo:</strong> '.$email.'</p>
                                <p style="margin:0 0 20px;"><strong>Teléfono:</strong> '.$phone.'</p>

                                <div style="background:#f7f7f7;padding:15px;border-radius:6px;">
                                    <p style="margin:0 0 8px;font-weight:bold;">Mensaje:</p>
                                    <p style="margin:0;">'.nl2br(htmlspecialchars($message)).'</p>
                                </div>

                            </td>
                        </tr>

                        <!-- Footer -->
                        <tr>
                            <td style="background:#eeeeee;padding:15px 30px;font-size:12px;color:#777777;text-align:center;">
                                Este mensaje fue enviado desde el formulario de contacto del sitio web.
                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>
    ';

    // ==========================
    // Env�o
    // ==========================
    $mail->send();

   echo json_encode(['success' => true]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'msg' => $mail->ErrorInfo
    ]);
}
