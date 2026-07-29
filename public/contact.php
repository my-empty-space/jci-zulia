<?php
header('Content-Type: application/json');

// Permitir solicitudes solo si es POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Method not allowed"]);
    exit;
}

// Leer entrada JSON si existe, de lo contrario intentar con $_POST
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    $input = $_POST;
}

// Sanitizar datos
$fullName = htmlspecialchars(trim($input["fullName"] ?? ''));
$email = filter_var(trim($input["corporateEmail"] ?? ''), FILTER_SANITIZE_EMAIL);
$service = htmlspecialchars(trim($input["serviceInterest"] ?? ''));
$message = htmlspecialchars(trim($input["message"] ?? ''));

// Validaciones
if (empty($fullName) || empty($email) || empty($message) || empty($service)) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Please fill in all required fields."]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Invalid email format."]);
    exit;
}

// Configurar correo
// $to = "presidencia@jcizulia.org";
$to = "joseg200217@gmail.com";
$subject = "New Contact Form Submission from $fullName";

$body = "You have received a new message from your website contact form.\n\n";
$body .= "Name: $fullName\n";
$body .= "Email: $email\n";
$body .= "Service Interest: $service\n\n";
$body .= "Message:\n$message\n";

$headers = "From: noreply@sscgusa.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Enviar correo
if (mail($to, $subject, $body, $headers)) {
    echo json_encode(["status" => "success", "message" => "Message sent successfully."]);
} else {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Failed to send message. Please try again later."]);
}
