<?php
require 'db.php'; // Memasukkan file koneksi database
session_start(); // Memulai sesi untuk menyimpan pesan

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['new_username'];
    $password = $_POST['new_password'];

    if (!empty($username) && !empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT); // Hash password

        try {
            $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
            $stmt->execute(['username' => $username, 'password' => $hashed_password]);
            
            // Menyimpan pesan keberhasilan dalam session
            $_SESSION['message'] = "Registrasi berhasil. Silakan <a href='login.php'>masuk</a>.";
            
            // Redirect ke halaman login
            header('Location: login.php');
            exit; // Pastikan script berhenti setelah redirect
        } catch (PDOException $e) {
            var_dump($e->getCode()); // Debug kode error
            if ($e->getCode() == 23000) {
                $_SESSION['error'] = "Username sudah digunakan. <a href='register.php'>Coba lagi</a>.";
            } else {
                $_SESSION['error'] = "Gagal registrasi: " . $e->getMessage();
            }
            header('Location: register.php');
            exit;
        }
        
    } else {
        // Menyimpan pesan kesalahan jika ada field yang kosong
        $_SESSION['error'] = "Harap isi semua field. <a href='register.php'>Coba lagi</a>.";
        header('Location: register.php');
        exit;
    }
}
?>
