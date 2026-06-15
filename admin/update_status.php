<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['admin_logged_in'])) {
    echo json_encode(['ok' => false, 'error' => 'Unauthorized']);
    exit;
}

require_once __DIR__ . '/../backend/config.php';

$id     = (int)($_POST['id'] ?? 0);
$status = trim($_POST['status'] ?? '');
$allowed = ['Pending', 'Called', 'Interested', 'Not Interested'];

if (!$id || !in_array($status, $allowed)) {
    echo json_encode(['ok' => false, 'error' => 'Invalid data']);
    exit;
}

try {
    $conn = getDB();
    $stmt = $conn->prepare("UPDATE contacts SET status = ? WHERE id = ?");
    $stmt->bind_param('si', $status, $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    echo json_encode(['ok' => true]);
} catch (Throwable $e) {
    echo json_encode(['ok' => false, 'error' => 'DB error']);
}
?>
