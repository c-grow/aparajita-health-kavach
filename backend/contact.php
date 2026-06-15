<?php
session_start();
header('Content-Type: application/json; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', 0);

require_once __DIR__ . '/config.php';

function respond(bool $ok, array $payload = [], int $code = 200): void {
    http_response_code($code);
    echo json_encode(array_merge(['ok' => $ok], $payload));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, ['error' => 'Invalid request'], 405);
}

$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$phone   = trim($_POST['phone']   ?? '');
$service = trim($_POST['service'] ?? $_POST['service_needed'] ?? '');
$message = trim($_POST['message'] ?? '');

if (empty($name) || empty($phone)) {
    respond(false, ['error' => 'Name aur Phone number required hai'], 400);
}

try {
    $conn = getDB();
    $stmt = $conn->prepare(
        "INSERT INTO contacts (name, email, phone, service, message) VALUES (?, ?, ?, ?, ?)"
    );
    $stmt->bind_param('sssss', $name, $email, $phone, $service, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    respond(true);
} catch (Throwable $e) {
    respond(false, ['error' => 'Server error, please call us directly'], 500);
}
?>
