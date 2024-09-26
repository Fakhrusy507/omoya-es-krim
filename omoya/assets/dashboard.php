<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard Mahasiswa</title>
</head>
<body>
<header>
    <nav>
        <a href="index.php">
        <img src="img/logo.png" alt="Omoya Logo" class="logo">
        </a>
        <ul>
            <li><a href="index.php">Profil</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
            <li><a href="location.php">Lokasi</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </nav>
    </header>

    <main>
        <div class="container fade-in">
            <h1>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <p>Anda sekarang berada di dashboard Omoya Ice Cream.</p>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const container = document.querySelector('.container');
        setTimeout(() => {
            container.classList.add('visible');
        }, 100); // Delay kecil untuk memulai animasi setelah DOM sepenuhnya dimuat
    });
    </script>
</body>
</html>
