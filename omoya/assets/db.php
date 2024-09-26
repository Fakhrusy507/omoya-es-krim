<?php
$dsn = 'mysql:host=localhost;dbname=omoya_ice_cream';
$db_user = 'root'; // Nama pengguna default untuk XAMPP
$db_pass = ''; // Password default untuk XAMPP adalah kosong

try {
    $pdo = new PDO($dsn, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Koneksi database gagal: ' . $e->getMessage());
}
?>
