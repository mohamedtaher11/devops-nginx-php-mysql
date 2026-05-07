<?php
$host = 'mysql';
$user = 'mohamed';
$pass = 'password123';
$db   = 'portfolio';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    $db_status = "MySQL Connection Failed: " . $conn->connect_error;
    $db_color = "#ff4757";
} else {
    $db_status = "Connected to MySQL | Database: portfolio";
    $db_color = "#00ff88";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohamed Taher | DevOps Engineer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', 'Roboto', sans-serif;
            background: #0a0a0a;
            color: #e0e0e0;
            overflow-x: hidden;
        }
        .gradient-bg {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: radial-gradient(circle at 20% 50%, #00d4ff15 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, #7b2ff715 0%, transparent 50%),
                        radial-gradient(circle at 40% 20%, #00ff8815 0%, transparent 50%);
            z-index: -1;
        }
        .container { max-width: 900px; margin: 0 auto; padding: 60px 20px; text-align: center; }
        .card {
            background: rgba(20, 20, 30, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 60px 40px;
            backdrop-filter: blur(20px);
            box-shadow: 0 8px 32px rgba(0, 212, 255, 0.1);
        }
        h1 {
            font-size: 3.5em; font-weight: 700;
            background: linear-gradient(135deg, #00d4ff, #00ff88, #7b2ff7);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }
        .title { font-size: 1.5em; color: #00d4ff; margin-bottom: 30px; letter-spacing: 2px; }
        .datetime { font-size: 1.1em; color: #888; margin-bottom: 40px; font-family: 'Courier New', monospace; }
        .db-status {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(0, 255, 136, 0.1);
            border: 1px solid <?php echo $db_color; ?>;
            padding: 8px 20px; border-radius: 20px;
            margin-top: 30px; color: <?php echo $db_color; ?>;
        }
        .status-dot {
            width: 8px; height: 8px; background: <?php echo $db_color; ?>;
            border-radius: 50%; animation: pulse 2s infinite;
        }
        @keyframes pulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.3; } }
    </style>
</head>
<body>
    <div class="gradient-bg"></div>
    <div class="container">
        <div class="card">
            <h1>Mohamed Taher</h1>
            <p class="title">DevOps Engineer - PHP Stack</p>
            <div class="datetime" id="datetime"></div>
            <div class="db-status">
                <span class="status-dot"></span>
                <span><?php echo $db_status; ?></span>
            </div>
        </div>
    </div>
    <script>
        function updateDateTime() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
            document.getElementById('datetime').textContent = now.toLocaleDateString('en-US', options);
        }
        updateDateTime(); setInterval(updateDateTime, 1000);
    </script>
</body>
</html>
<?php $conn->close(); ?>
