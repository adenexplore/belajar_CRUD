<?php
//include('dbconnected.php');
include('koneksi.php');

// $id = $_GET['id_bk'];
$judul_buku = $_GET['judul_bk'];
$penerbit = $_GET['terbit_bk'];
$genre = $_GET['genre_bk'];
$harga = $_GET['harga_bk'];

//query update
$query = "UPDATE buku SET judul_bk='$judul' , penerbit_bk='$penerbit' , genre_bk='$genre' , harga_bk='$harga' WHERE id_bk='$id' ";

if (mysqli_query($conn, $query)) {
 # credirect ke page index
 header("location:index.php");
 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>
