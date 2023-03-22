<?php
include 'koneksi.php';
$title = $_POST['title'];
$artist = $_POST['artist'];
 
mysqli_query($conn,"INSERT INTO tb_album1  VALUES ('','$title','$artist')")or die(mysqli_error($conn));
 

header("location:index.php");
?>
