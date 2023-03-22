<?php
//add dbconnect

include('koneksi.php');

$judul = $_POST['judul_bk'];
$penerbit = $_POST['penerbit_bk'];
$genre = $_POST['genre_bk'];
$harga = $_POST['harga_bk'];

//query

$query =  "INSERT INTO buku(judul_buku , penerbit_buku , genre_buku , harga_buku) VALUES('$judul' , '$penerbit' , '$genre' , '$harga')";


if (mysqli_query($conn,$query)) {
    # credirect ke page index
    echo "<script> alert('Berhasil di tambahkan');document.location='/belajar_CRUD/crudphpbuku/index.php'</script>";
   }
   else{
    echo "ERROR, data gagal diupdate ". mysqli_error($conn);
   }
   
   mysqli_close($conn);
?>