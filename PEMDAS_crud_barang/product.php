<?php 
    // hubungkan ke DBMS atau functions.php
    require 'functions.php';

    // connect dari mysqli_connect functions.php
    $product = query("SELECT * FROM product");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Product</title>
</head>
<body>
    <div class="header">
    <a href="index.php">Home</a>
    <a href="product.php">Product</a>
    <a href="order.php">Order</a>
    </div> 
    <!-- product -->
    <h1>Product</h1>
    <!-- menampilkan tabel -->
<table border="1" cellpadding="10" cellspacing="0" style="margin-top: 50px;">
            <tr>
                <td>No.</td>
                <td>Action</td>
                <td>Name Product</td>
                <td>Stock</td>
                <td>Categories</td>
                <td>Price</td>
            </tr>
            <!-- terhubung ke functions.php -->
            <?php $i = 1; ?>
            <?php foreach ($product as $row) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">Delete</a></td>
                <td><?php echo $row["name_product"]; ?></td>
                <td><?php echo $row["stock"]?></td>
                <td><?php echo $row["categories"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            </table>
            <p style="text-align:center;">Ingin Order?Buruan Klik Dibawah Ini</p>
            <a href="pesan.php" class="a1">Pesan Disini</a>
</body>
</html>