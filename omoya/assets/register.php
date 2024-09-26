<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registrasi - Omoya Ice Cream</title>
</head>
<body>
    <?php
    session_start(); // Memulai sesi

    // Menampilkan pesan kesalahan jika ada
    if (isset($_SESSION['error'])) {
        echo '<div class="error">' . $_SESSION['error'] . '</div>';
        unset($_SESSION['error']);
    }

    // Menampilkan pesan keberhasilan jika ada
    if (isset($_SESSION['message'])) {
        echo '<div class="message">' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']);
    }
    ?>

    <?php include 'header.php'; ?>

    <main>
        <div class="container">
            <h2>Registrasi</h2>
            <form action="register_action.php" method="post">
                <label for="new_username">Username:</label>
                <input type="text" id="new_username" name="new_username" required>

                <label for="new_password">Password:</label>
                <input type="password" id="new_password" name="new_password" required>

                <button type="submit">Daftar</button>
            </form>
            <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
