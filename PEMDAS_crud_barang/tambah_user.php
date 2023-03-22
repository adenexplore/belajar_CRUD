<?php 
    // hubungkan ke DBMS 
    require 'functions.php';

    // cek apakah tombol pernah dipencet sebelumnya 
    if(isset($_POST["submit"])) {
        if(tambah($_POST) > 0) {
            echo "<script>
                alert('Add Username Succesfull');
                document.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>
            alert('Add Username Failed');
            document.location.href = 'index.php';
            </script>";
        }
    }
?>

<html>
    <head>
        <title>Registrasi</title>
    </head>
    <body>
        <h1>Add User</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label>Username :</label>
                    <input type="text" name="username">
                </li>
                <li>
                    <label>Fullname :</label>
                    <input type="text" name="fullname">
                </li>
                <li>
                    <label>Password :</label>
                    <input type="password" name="password">
                </li>
                <li>
                    <label>Role :</label>
                    <select name="role">
                    <option value="none">None</option>
                    <option value="pegawai">Pegawai</option>
                    <option value="pengunjung">Pengunjung</option>
                </select>

                </li>
                <li>
                    <button type="submit" name="submit">Register</button>
                </li>
            </ul>
        </form>
       
    </body>
</html>