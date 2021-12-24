<?php

echo 'Versão Atual do PHP: ' . phpversion();
//echo 'Versão Atual do PHP: ' . phpinfo();

$hostname_d = "127.0.0.1";
$username_d = "usernaelson";
$password_d = "admin1234.";
$database_d = "test";

try {
    $conn = new PDO("mysql:host=$hostname_d;port=3307;dbname=" . $database_d . ";charset=utf8", $username_d, $password_d);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
