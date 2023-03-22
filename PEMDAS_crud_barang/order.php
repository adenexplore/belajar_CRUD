<?php 
    require 'functions.php';
    $ordera = query("SELECT * FROM ordera");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Order Product</title>
</head>
<body>
    <div class="header">
    <a href="index.php">Home</a>
    <a href="product.php">Product</a>
    <a href="order.php">Order</a>
    </div>
    <h1>Order</h1>
    <table border="1" cellpadding="10" cellspacing="0" style="margin-top:50px;">
            <tr>
                <td>No.</td>
                <td>Action</td>
                <td>Invoice</td>
                <td>Product Id</td>
                <td>Quantity</td>
                <td>Total</td>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($ordera as $row) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><a href="hapus_order.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">Delete</a></td>
                <td><?php echo $row["invoice"]; ?></td>
                <td><?php echo $row["product_id"]; ?></td>
                <td><?php echo $row["qty"]; ?></td>
                <td><?php echo $row["total"]; ?></td>
            </tr>
            <?php  $i++; ?>
            <?php endforeach; ?>
            </table>
            <a href="product.php" class="a1">Tambah Order</a>
</body>
</html>