<?php
// db_connect.php

$host = '127.0.0.1';
$db = 'fdtc';
$user = 'root';
$pass = '';

// Create a PDO instance
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
