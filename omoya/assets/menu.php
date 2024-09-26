<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Menu - Omoya Ice Cream</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
    <h2>Menu Kami</h2>
    <section class="menu">
        <div class="menu-item">
            <img src="img/ice_cream1.jpg" alt="Vanilla Delight" width="1000" height="1000">
            <h3>Vanilla Delight</h3>
            <p>Es krim vanilla yang lembut dengan taburan almond dan saus karamel.</p>
        </div>
        <div class="menu-item">
            <img src="img/ice_cream2.jpg" alt="Chocolate Heaven">
            <h3>Chocolate Heaven</h3>
            <p>Es krim coklat pekat dengan potongan coklat Belgia yang meleleh di mulut.</p>
        </div>
        <div class="menu-item">
            <img src="img/ice_cream3.jpg" alt="Strawberry Bliss">
            <h3>Strawberry Bliss</h3>
            <p>Es krim stroberi segar dengan saus stroberi asli dan potongan buah.</p>
        </div>
        
    </section>
</main>


    <?php include 'footer.php'?>
</body>
</html>
