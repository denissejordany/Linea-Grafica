<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'msg' => 'Método no permitido']);
    exit;
}

// Identificamos de qué formulario viene (si no viene, asumimos que es el de Contacto)
$tipoFormulario = $_POST['tipo_formulario'] ?? 'Contacto General';
$emailCliente   = $_POST['email'] ?? 'no-reply@lineagrafica.com';
$nombreCliente  = $_POST['nombre'] ?? $_POST['name'] ?? 'Usuario Web';

// ==========================
// CONSTRUCCIÓN DINÁMICA DEL CUERPO DEL CORREO
// ==========================
$htmlCampos = '';
foreach ($_POST as $key => $value) {
    // Ignoramos el campo oculto para que no salga en el correo
    if ($key === 'tipo_formulario') continue;
    
    // Formateamos el nombre del campo (ej: "razon_social" -> "Razon social")
    $label = ucfirst(str_replace('_', ' ', $key));
    // Limpiamos etiquetas HTML por seguridad
    $val = nl2br(htmlspecialchars(trim($value)));
    
    $htmlCampos .= "<p style=\"margin:0 0 10px;\"><strong>{$label}:</strong> {$val}</p>";
}

$mail = new PHPMailer(true);

try {
    // ==========================
    // PROCESAMIENTO SEGURO DEL ARCHIVO ADJUNTO
    // ==========================
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $archivoTmp  = $_FILES['archivo']['tmp_name'];
        $archivoName = $_FILES['archivo']['name'];
        $archivoSize = $_FILES['archivo']['size'];

        $maxSize = 1048576; // 1 MB
        if ($archivoSize > $maxSize) {
            http_response_code(400);
            echo json_encode(['success' => false, 'msg' => 'El archivo supera el límite de 1MB.']);
            exit;
        }

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $archivoTmp);
        finfo_close($finfo);

        $tiposPermitidos = ['application/pdf', 'image/jpeg', 'image/jpg', 'image/png', 'image/gif'];

        if (!in_array($mime, $tiposPermitidos)) {
            http_response_code(400);
            echo json_encode(['success' => false, 'msg' => 'Formato no permitido. Solo PDF, JPG, PNG o GIF.']);
            exit;
        }

        $mail->addAttachment($archivoTmp, $archivoName);
    }

    // ==========================
    // CONFIGURACIÓN SMTP
    // ==========================
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'artesgraficascd@gmail.com';
    $mail->Password   = 'pucaxlaczyehgnku'; // Recuerda cambiar esto luego por seguridad
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->CharSet    = 'UTF-8';

    // Remitente y destino
    $mail->setFrom('artesgraficascd@gmail.com', 'Web Línea Gráfica');
    $mail->addAddress('ventas@lineagraficaxxi.com'); 
    
    // Responder a: Usa el correo del cliente detectado dinámicamente
    if(filter_var($emailCliente, FILTER_VALIDATE_EMAIL)){
        $mail->addReplyTo($emailCliente, $nombreCliente);
    }

    // ==========================
    // PLANTILLA HTML
    // ==========================
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo registro: ' . $tipoFormulario;
    
    $mail->Body = '
    <!DOCTYPE html>
    <html>
    <head><meta charset="UTF-8"></head>
    <body style="margin:0;padding:0;background-color:#f4f4f4;font-family:Arial,Helvetica,sans-serif;">
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center" style="padding:30px 0;">
                    <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:8px;overflow:hidden;">
                        <tr>
                            <td style="background:#BE1119;color:#ffffff;padding:20px 30px;">
                                <h2 style="margin:0;font-size:20px;">' . $tipoFormulario . '</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:30px;color:#333333;font-size:14px;line-height:1.6;">
                                <!-- AQUÍ SE INSERTAN LOS DATOS DINÁMICOS -->
                                ' . $htmlCampos . '
                            </td>
                        </tr>
                        <tr>
                            <td style="background:#eeeeee;padding:15px 30px;font-size:12px;color:#777777;text-align:center;">
                                Enviado desde el sitio web de Línea Gráfica.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>
    ';

    $mail->send();
    echo json_encode(['success' => true]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'msg' => 'Error al enviar el correo: ' . $mail->ErrorInfo
    ]);
}