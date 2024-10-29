<?php
include_once 'Lipstick.php';
include_once 'Foundation.php';

// Membuat objek produk
$lipstick = new Lipstick("Lipstick Matte", 200000, "BrandA", "Merah Ceri");
$foundation = new Foundation("Foundation Cair", 300000, "BrandB", "Kulit Berminyak");

// Terapkan diskon
$lipstick->applyDiscount(10);
$foundation->applyDiscount(15, 250000);

// Tampilkan produk dan total produk
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Makeup</title>
</head>
<body>
    <h1>Produk Makeup Setelah Diskon</h1>
    <?php
    echo $lipstick->getInfo();
    echo $foundation->getInfo();
    echo "<p>Total Produk: " . Product::getTotalProducts() . "</p>";
    ?>
</body>
</html>
