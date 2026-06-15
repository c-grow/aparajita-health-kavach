<?php
session_start();
require_once __DIR__ . '/../backend/config.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['username'] ?? '');
    $pass = trim($_POST['password'] ?? '');

    if ($user === ADMIN_USERNAME && $pass === ADMIN_PASSWORD) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid username or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Aparajita Health Kavach</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: #fff;
            border-radius: 16px;
            padding: 48px 40px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.25);
        }
        .logo {
            text-align: center;
            margin-bottom: 32px;
        }
        .logo h2 {
            color: #1e3c72;
            font-size: 22px;
            font-weight: 700;
        }
        .logo p {
            color: #888;
            font-size: 13px;
            margin-top: 4px;
        }
        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #444;
            margin-bottom: 6px;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
            margin-bottom: 20px;
            transition: border 0.2s;
            outline: none;
        }
        input:focus { border-color: #2a5298; }
        button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #1e3c72, #e63946);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.2s;
        }
        button:hover { opacity: 0.9; }
        .error {
            background: #fff0f0;
            color: #e63946;
            border: 1px solid #ffcdd2;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 14px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="login-card">
    <div class="logo">
        <h2>🏥 Aparajita Health Kavach</h2>
        <p>Admin Panel — Leads Dashboard</p>
    </div>

    <?php if ($error): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST">
        <label>Username</label>
        <input type="text" name="username" placeholder="admin" required autofocus>

        <label>Password</label>
        <input type="password" name="password" placeholder="••••••••" required>

        <button type="submit">Login →</button>
    </form>
</div>
</body>
</html>
