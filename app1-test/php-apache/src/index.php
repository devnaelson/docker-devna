<?php

echo 'Versão Atual do PHP: ' . phpversion();

$servername = "testComposer";
$username = "root";
$password = "admin123.";

try {
    $run_federal = new PDO("mysql:host=localhost;dbname=" . $servername . ";charset=utf8", $username, $password);
    $run_federal->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "true";
} catch (PDOException $e) {
    error_reporting(0);
    echo "Erro de conexão main.php, Linha:" . __LINE__;
}
