<?php
// Koneksi ke database
function connectDatabase()
{
    $host = 'localhost';
    $dbname = 'php_mvc';
    $username = 'root';
    $password = '';

    try {
        return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
