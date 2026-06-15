<?php
// =============================================
// DATABASE CONFIGURATION
// Hostinger mein jaake:
// hPanel → Databases → MySQL Databases
// Wahan se ye values copy karo
// =============================================

// FOR LOCAL XAMPP & PRODUCTION SWITCH:
if ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_ADDR'] === '127.0.0.1' || $_SERVER['SERVER_NAME'] === '192.168.1.5') {
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'aparajita');
    define('DB_USER', 'root');
    define('DB_PASS', '');
} else {
    // FOR PRODUCTION / INFINITYFREE:
    // ⚠️ NOTE: Update DB_HOST to your actual MySQL Hostname from InfinityFree panel (e.g. sql200.infinityfree.com)
    define('DB_HOST', 'sql300.infinityfree.com'); 
    define('DB_NAME', 'if0_42185028_aparajita');   // Change if your created database has a different name
    define('DB_USER', 'if0_42185028');             // InfinityFree username
    define('DB_PASS', 'Lakshmi0411');              // InfinityFree password
}

// Admin login credentials
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'Aparajita@2025');  // ye change kar lo

// =============================================

function getDB(): mysqli {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $conn->set_charset('utf8mb4');
    return $conn;
}

// Auto-create tables if not exist
function ensureTables(): void {
    $conn = getDB();
    $conn->query("CREATE TABLE IF NOT EXISTS contacts (
        id          INT AUTO_INCREMENT PRIMARY KEY,
        name        VARCHAR(100) NOT NULL,
        email       VARCHAR(100) DEFAULT '',
        phone       VARCHAR(20)  NOT NULL,
        service     VARCHAR(100) DEFAULT '',
        message     TEXT,
        status      ENUM('Pending','Called','Interested','Not Interested') DEFAULT 'Pending',
        created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    $conn->close();
}

try {
    ensureTables();
} catch (Throwable $e) {
    // Log the error but do not crash the app immediately (allows returning proper JSON/error responses)
    error_log("Database tables initialization failed: " . $e->getMessage());
}
?>
