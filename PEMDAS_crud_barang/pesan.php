<?php
    // hubungkan ke DBMS
    require 'functions.php';
    // cek apakah tombol pernah dipencet sebelumnya
    if(isset($_POST["submit"])){
        if(pesan($_POST) > 0) {
             echo "
             <script>
                alert('Order Succesfull');
                document.location.href = 'order.php';
            </script>";
            } else {
                echo "<script>
                alert('Order Failed');
                document.location.href = 'order.php';
                </script>";
            }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pesan</title>
</head>
<body>
    <h1>Pesan Sekarang</h1>
    <form action="" method="post">
        <ul>
           <li>
               <label>Invoice : </label>
               <input type="text" name="invoice">
           </li>
            
             <li>
                <label>Name Product :</label>
                <select name="product_id">
                    <option value="none">None</option>
                    <option value="lamborghini">Lamborghini</option>
                    <option value="porsche">Porsche</option>
                    <option value="mazda">Mazda</option>
                    <option value="nissan">Nissan</option>
                </select>
            </li>
            <li>
                <label>Quantity :</label>
               <select name="qty" id="qty">
                   <option value="none">None</option>
                   <option value="bagus">Bagus</option>
                   <option value="bekas">Bekas</option>
               </select>
            </li>
            <li>
                <label>Total :</label>
                <input type="text" name="total">
            </li>
            <li>
                <button type="submit" name="submit">Order Now</button>
            </li>
        </ul>
    </form>
</body>
</html>