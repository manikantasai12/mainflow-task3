<?php
$host = 'localhost';
$db = 'myapp';
$user = 'root';  // default user for XAMPP/WAMP/MAMP
$pass = '';      // default password for XAMPP/WAMP/MAMP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
