<?php
session_start();
require 'db.php'; // Memasukkan file koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
            exit;
        } else {
            $_SESSION['error'] = '<div class="error">Login gagal. Username atau password salah.</div>';
            header('Location: login.php'); // Redirect ke halaman login
            exit;
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = '<div class="error">Error: ' . $e->getMessage() . '</div>';
        header('Location: login.php'); // Redirect ke halaman login jika ada error
        exit;
    }
}
?>
