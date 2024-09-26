<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lokasi - Omoya Ice Cream</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="location">
            <h2>Lokasi Kami</h2>
            <p>Kunjungi toko kami di:</p>
            <address>
                Jalan Raya, Sambogunung, Sukorejo, Kec. Sidayu, Kabupaten Gresik, Jawa Timur 61153<br>
                Gresik, Indonesia<br>
                Telp: 082140593441
            </address>
            <div id="map">
                <!-- Placeholder untuk peta lokasi -->
                <p>Lokasi Omoya di Google Maps</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.178949738706!2d112.50071749091147!3d-6.98819123471717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77e555be15b78d%3A0xd641ae3efe46bce5!2sOmoya%20Ice%20Cream!5e0!3m2!1sid!2sid!4v1722360604897!5m2!1sid!2sid" width=1350" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>

    <?php include 'footer.php'?>
</body>
</html>
