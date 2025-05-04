<?php

$host = '127.0.0.1';
$db   = 'products';
$user = 'root';
$pass = '';

try {
    return new PDO("mysql:dbname=$db;host=$host", $user, $pass);
} catch (PDOException $e) {
    die("DB connection failed: " . $e->getMessage());
}
