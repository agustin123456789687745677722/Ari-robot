<?php
$host ='localhost';
$dbname = '127_0-0-1';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host; $dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "conexion fallida: " . $e->getMessage();
}