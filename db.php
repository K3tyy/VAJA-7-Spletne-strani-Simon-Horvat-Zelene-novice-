<?php
$dsn = "mysql:host=mysql-novice.alwaysdata.net;dbname=novice_baza;charset=utf8mb4";
$user = "novice";
$pass = "Trav4J3Ze1ena.";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Napaka pri povezavi: " . $e->getMessage());
}
