<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Omoya Ice Cream</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Include CSS file here -->
</head>
<body>
    <?php
    session_start(); // Memulai sesi

    // Menampilkan pesan kesalahan jika ada
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']); // Hapus pesan setelah ditampilkan
    }

    // Menampilkan pesan keberhasilan jika ada
    if (isset($_SESSION['message'])) {
        echo '<div class="message">' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']); // Hapus pesan setelah ditampilkan
    }
    ?>

    <?php include 'header.php'; ?>

    <main>
        <div class="container">
            <h2>Login</h2>
            <form action="login_action.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Login</button>
            </form>
            <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
