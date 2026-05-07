<?php
$host = 'mysql';
$db   = 'portfolio';
$user = 'user';        //
$pass = 'pass';        //
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "Connected to MySQL successfully! 🎉";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<!-- CI/CD Working Now -->
