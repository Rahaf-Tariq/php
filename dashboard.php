<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #323e3f 0%, #176a86 100%);
        }
        .navbar {
            background: #0c0d0e;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar h1 {
            font-size: 24px;
        }
        .navbar .user-section {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .logout-btn {
            background: #e74c3c;
            color: white;
            padding: 8px 20px;
            border-radius: 4px;
            text-decoration: none;
        }
        .logout-btn:hover {
            background: #c0392b;
        }
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .stat-card h3 {
            color: #7f8c8d;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .stat-card .number {
            color: #2c3e50;
            font-size: 32px;
            font-weight: bold;
        }
        .main-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }
        .panel {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .panel h2 {
            color: #2c3e50;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #ecf0f1;
        }
        .activity-item {
            padding: 12px 0;
            border-bottom: 1px solid #ecf0f1;
        }
        .activity-item:last-child {
            border-bottom: none;
        }
        .activity-time {
            color: #95a5a6;
            font-size: 12px;
        }
        .user-info-row {
            display: flex;
            padding: 12px 0;
            border-bottom: 1px solid #ecf0f1;
        }
        .user-info-row:last-child {
            border-bottom: none;
        }
        .info-label {
            font-weight: bold;
            color: #7f8c8d;
            width: 120px;
        }
        .info-value {
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <h1>Dashboard</h1>
        <div class="user-section">
            <span>Welcome, <?php echo htmlspecialchars($user['username']); ?></span>
            <a href="?logout=true" class="logout-btn">Logout</a>
        </div>
    </nav>
    
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <h3>TOTAL PROJECTS</h3>
                <div class="number">24</div>
            </div>
            <div class="stat-card">
                <h3>ACTIVE TASKS</h3>
                <div class="number">12</div>
            </div>
            <div class="stat-card">
                <h3>COMPLETED</h3>
                <div class="number">156</div>
            </div>
            <div class="stat-card">
                <h3>PENDING</h3>
                <div class="number">8</div>
            </div>
        </div>
        
        <div class="main-content">
            <div class="panel">
                <h2>Recent Activity</h2>
                <div class="activity-item">
                    <div>Project "Website Redesign" updated</div>
                    <div class="activity-time">2 hours ago</div>
                </div>
                <div class="activity-item">
                    <div>New task assigned: Update documentation</div>
                    <div class="activity-time">5 hours ago</div>
                </div>
                <div class="activity-item">
                    <div>Completed task: Database migration</div>
                    <div class="activity-time">1 day ago</div>
                </div>
                <div class="activity-item">
                    <div>Team meeting scheduled for tomorrow</div>
                    <div class="activity-time">2 days ago</div>
                </div>
            
            
            <div class="panel">
                <h2>Account Details</h2>
                <div class="user-info-row">
                    <div class="info-label">Username:</div>
                    <div class="info-value"><?php echo htmlspecialchars($user['username']); ?></div>
                </div>
                <div class="user-info-row">
                    <div class="info-label">Email:</div>
                    <div class="info-value"><?php echo htmlspecialchars($user['email']); ?></div>
                </div>
                <div class="user-info-row">
                    <div class="info-label">Member Since:</div>
                    <div class="info-value"><?php echo date('F j, Y'); ?></div>
                </div>
                <div class="user-info-row">
                    <div class="info-label">Account Type:</div>
                    <div class="info-value">Premium</div>
                </div>
                <div class="user-info-row">
                    <div class="info-label">Status:</div>
                    <div class="info-value">Active</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>