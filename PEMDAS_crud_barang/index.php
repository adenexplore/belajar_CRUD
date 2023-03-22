<?php
    // hubungkan ke DBMS 
    require 'functions.php';

    $user = query("SELECT * FROM user");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Data Product</title>
</head>
<body>
    <div class="header">
    <a href="index.php">Home</a>
    <a href="product.php">Product</a>
    <a href="order.php">Order</a>
    </div> 

    <h1>User</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Action</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Password</th>
            <th>Role</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($user as $row) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">Delete</a></td>
            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["fullname"]; ?></td>
            <td><?php echo $row["password"]; ?></td>
            <td><?php echo $row["role"]; ?></td>
        </tr>
        <?php  $i++; ?>
        <?php endforeach; ?>
    </table> 
    <br><br>
    <a href="tambah_user.php" class="tambahdata">Registerasi</a>
    <a href="order.php" style="margin:auto; text-decoration: none; background-color: darkcyan; color:white; font-size: 20px; border-radius:30px;">Order Now</a>
</body>
</html>