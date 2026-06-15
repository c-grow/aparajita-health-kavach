<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: index.php');
    exit;
}
require_once __DIR__ . '/../backend/config.php';

// Filters
$statusFilter  = $_GET['status']  ?? 'all';
$searchQuery   = trim($_GET['search'] ?? '');

// Build query
$where = [];
$params = [];
$types  = '';

if ($statusFilter !== 'all') {
    $where[]  = 'status = ?';
    $params[] = $statusFilter;
    $types   .= 's';
}
if (!empty($searchQuery)) {
    $where[]  = '(name LIKE ? OR phone LIKE ? OR service LIKE ?)';
    $like     = "%$searchQuery%";
    $params[] = $like; $params[] = $like; $params[] = $like;
    $types   .= 'sss';
}

$whereSQL = $where ? 'WHERE ' . implode(' AND ', $where) : '';

try {
    $conn   = getDB();
    // Total counts per status
    $counts = ['all' => 0, 'Pending' => 0, 'Called' => 0, 'Interested' => 0, 'Not Interested' => 0];
    $cr     = $conn->query("SELECT status, COUNT(*) as c FROM contacts GROUP BY status");
    while ($row = $cr->fetch_assoc()) {
        $counts[$row['status']] = (int)$row['c'];
        $counts['all'] += (int)$row['c'];
    }

    // Fetch leads
    $sql  = "SELECT * FROM contacts $whereSQL ORDER BY created_at DESC";
    $stmt = $conn->prepare($sql);
    if ($params) {
        $stmt->bind_param($types, ...$params);
    }
    $stmt->execute();
    $leads = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    $conn->close();
} catch (Throwable $e) {
    $leads  = [];
    $counts = ['all' => 0, 'Pending' => 0, 'Called' => 0, 'Interested' => 0, 'Not Interested' => 0];
}

$statusColors = [
    'Pending'      => '#f59e0b',
    'Called'       => '#3b82f6',
    'Interested'   => '#10b981',
    'Not Interested' => '#ef4444',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads Dashboard — Aparajita Health Kavach</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f1f5f9; color: #1e293b; }

        /* Sidebar */
        .sidebar {
            position: fixed; left: 0; top: 0; bottom: 0;
            width: 220px; background: #1e3c72; color: #fff;
            padding: 24px 0; display: flex; flex-direction: column;
        }
        .sidebar-logo {
            padding: 0 20px 24px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar-logo h2 { font-size: 16px; font-weight: 700; }
        .sidebar-logo p  { font-size: 11px; opacity: 0.6; margin-top: 3px; }
        .sidebar-menu { padding: 20px 0; flex: 1; }
        .sidebar-menu a {
            display: flex; align-items: center; gap: 10px;
            padding: 12px 20px; color: rgba(255,255,255,0.75);
            text-decoration: none; font-size: 14px; transition: all 0.2s;
        }
        .sidebar-menu a.active, .sidebar-menu a:hover {
            background: rgba(255,255,255,0.1); color: #fff;
        }
        .sidebar-bottom { padding: 16px 20px; border-top: 1px solid rgba(255,255,255,0.1); }
        .sidebar-bottom a { color: rgba(255,255,255,0.6); font-size: 13px; text-decoration: none; }
        .sidebar-bottom a:hover { color: #fff; }

        /* Main */
        .main { margin-left: 220px; padding: 32px; }

        /* Header */
        .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 28px; }
        .page-header h1 { font-size: 24px; font-weight: 700; }
        .page-header span { font-size: 13px; color: #64748b; }

        /* Stat cards */
        .stats { display: grid; grid-template-columns: repeat(5, 1fr); gap: 16px; margin-bottom: 28px; }
        .stat-card {
            background: #fff; border-radius: 12px; padding: 20px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.07);
            cursor: pointer; border: 2px solid transparent;
            transition: all 0.2s; text-decoration: none; color: inherit;
            display: block;
        }
        .stat-card:hover, .stat-card.active { border-color: #2a5298; }
        .stat-card .label { font-size: 12px; color: #64748b; font-weight: 600; text-transform: uppercase; }
        .stat-card .count { font-size: 32px; font-weight: 800; margin-top: 6px; }

        /* Filter & Search bar */
        .toolbar {
            display: flex; gap: 12px; align-items: center;
            margin-bottom: 20px; flex-wrap: wrap;
        }
        .toolbar input {
            padding: 10px 16px; border: 1px solid #e2e8f0;
            border-radius: 8px; font-size: 14px; width: 260px; outline: none;
        }
        .toolbar input:focus { border-color: #2a5298; }
        .toolbar button {
            padding: 10px 20px; background: #2a5298; color: #fff;
            border: none; border-radius: 8px; font-size: 14px; cursor: pointer;
        }
        .toolbar .clear { background: #64748b; }

        /* Table */
        .table-wrap {
            background: #fff; border-radius: 12px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.07); overflow: hidden;
        }
        table { width: 100%; border-collapse: collapse; }
        thead { background: #1e3c72; color: #fff; }
        thead th { padding: 14px 16px; text-align: left; font-size: 13px; font-weight: 600; }
        tbody tr { border-bottom: 1px solid #f1f5f9; transition: background 0.15s; }
        tbody tr:hover { background: #f8fafc; }
        tbody td { padding: 14px 16px; font-size: 14px; vertical-align: middle; }
        .td-name { font-weight: 600; }
        .td-date { color: #94a3b8; font-size: 12px; }

        /* Status badge */
        .badge {
            display: inline-block; padding: 4px 10px;
            border-radius: 20px; font-size: 12px; font-weight: 600; color: #fff;
        }

        /* Status dropdown */
        .status-select {
            padding: 6px 10px; border-radius: 6px; border: 1px solid #e2e8f0;
            font-size: 13px; cursor: pointer; outline: none;
            background: #fff; font-weight: 500;
        }
        .status-select:focus { border-color: #2a5298; }

        /* Toast */
        #toast {
            position: fixed; bottom: 24px; right: 24px;
            background: #10b981; color: #fff; padding: 12px 20px;
            border-radius: 8px; font-size: 14px; font-weight: 600;
            display: none; z-index: 1000; box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        /* Empty state */
        .empty { text-align: center; padding: 60px 20px; color: #94a3b8; font-size: 15px; }

        @media (max-width: 900px) {
            .sidebar { display: none; }
            .main { margin-left: 0; padding: 16px; }
            .stats { grid-template-columns: repeat(2, 1fr); }
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-logo">
        <h2>🏥 Aparajita Health</h2>
        <p>Admin Dashboard</p>
    </div>
    <div class="sidebar-menu">
        <a href="dashboard.php" class="active">📋 All Leads</a>
    </div>
    <div class="sidebar-bottom">
        <a href="logout.php">🚪 Logout</a>
    </div>
</div>

<!-- Main Content -->
<div class="main">
    <div class="page-header">
        <h1>Leads Dashboard</h1>
        <span><?= date('d M Y, h:i A') ?></span>
    </div>

    <!-- Stat Cards -->
    <div class="stats">
        <?php
        $statItems = [
            'all'          => ['label' => 'Total Leads', 'color' => '#1e3c72'],
            'Pending'      => ['label' => 'Pending',     'color' => '#f59e0b'],
            'Called'       => ['label' => 'Called',      'color' => '#3b82f6'],
            'Interested'   => ['label' => 'Interested',  'color' => '#10b981'],
            'Not Interested' => ['label' => 'Not Interested', 'color' => '#ef4444'],
        ];
        foreach ($statItems as $key => $info):
            $active = ($statusFilter === $key) ? 'active' : '';
            $url    = '?status=' . urlencode($key) . ($searchQuery ? '&search=' . urlencode($searchQuery) : '');
        ?>
        <a href="<?= $url ?>" class="stat-card <?= $active ?>">
            <div class="label"><?= $info['label'] ?></div>
            <div class="count" style="color:<?= $info['color'] ?>"><?= $counts[$key] ?></div>
        </a>
        <?php endforeach; ?>
    </div>

    <!-- Search / Filter Toolbar -->
    <form method="GET" class="toolbar">
        <input type="hidden" name="status" value="<?= htmlspecialchars($statusFilter) ?>">
        <input type="text" name="search" value="<?= htmlspecialchars($searchQuery) ?>"
               placeholder="🔍 Search by name, phone, service...">
        <button type="submit">Search</button>
        <?php if ($searchQuery): ?>
            <a href="?status=<?= urlencode($statusFilter) ?>">
                <button type="button" class="clear">✕ Clear</button>
            </a>
        <?php endif; ?>
    </form>

    <!-- Leads Table -->
    <div class="table-wrap">
        <?php if (empty($leads)): ?>
            <div class="empty">No leads found.</div>
        <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Service</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($leads as $i => $lead): ?>
                <tr id="row-<?= $lead['id'] ?>">
                    <td style="color:#94a3b8"><?= $i + 1 ?></td>
                    <td class="td-name"><?= htmlspecialchars($lead['name']) ?>
                        <?php if ($lead['email']): ?>
                            <div style="font-size:12px;color:#94a3b8;font-weight:400"><?= htmlspecialchars($lead['email']) ?></div>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="tel:<?= htmlspecialchars($lead['phone']) ?>" style="color:#2a5298;font-weight:600;text-decoration:none">
                            📞 <?= htmlspecialchars($lead['phone']) ?>
                        </a>
                    </td>
                    <td><?= htmlspecialchars($lead['service'] ?: '—') ?></td>
                    <td style="max-width:200px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis" title="<?= htmlspecialchars($lead['message']) ?>">
                        <?= htmlspecialchars($lead['message'] ?: '—') ?>
                    </td>
                    <td class="td-date"><?= date('d M Y<br>h:i A', strtotime($lead['created_at'])) ?></td>
                    <td>
                        <select class="status-select"
                                data-id="<?= $lead['id'] ?>"
                                style="border-color:<?= $statusColors[$lead['status']] ?? '#ccc' ?>">
                            <?php foreach (array_keys($statusColors) as $s): ?>
                                <option value="<?= $s ?>" <?= $lead['status'] === $s ? 'selected' : '' ?>><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>

<div id="toast">✅ Status updated!</div>

<script>
const statusColors = <?= json_encode($statusColors) ?>;

document.querySelectorAll('.status-select').forEach(sel => {
    sel.addEventListener('change', async function () {
        const id     = this.dataset.id;
        const status = this.value;
        this.style.borderColor = statusColors[status] || '#ccc';

        try {
            const res  = await fetch('update_status.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `id=${id}&status=${encodeURIComponent(status)}`
            });
            const data = await res.json();
            if (data.ok) showToast('✅ Status updated!', '#10b981');
            else         showToast('❌ Update failed', '#ef4444');
        } catch (e) {
            showToast('❌ Network error', '#ef4444');
        }
    });
});

function showToast(msg, color = '#10b981') {
    const t = document.getElementById('toast');
    t.textContent = msg;
    t.style.background = color;
    t.style.display = 'block';
    setTimeout(() => t.style.display = 'none', 2500);
}
</script>
</body>
</html>
