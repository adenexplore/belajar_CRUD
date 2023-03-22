<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_edit = $_POST['id_edit'];
$judul_buku = $_POST['judul_buku'];
$penerbit = $_POST['penerbit_buku'];
$genre = $_POST['genre_buku'];   
$harga = $_POST['harga_buku'];

 
$query = "update buku set judul_buku='$judul_buku', penerbit_buku='$penerbit', genre_buku='$genre' , harga_buku='$harga' where id_buku='$id_edit'";

if (mysqli_query($conn,$query)) {
 # credirect ke page index
 echo "<script> alert('Berhasil di update');document.location='/belajar_CRUD/crudphpbuku/index.php'</script>";
}
else{
 echo "ERROR, data gagal diupdate ". mysqli_error($conn);
}

mysqli_close($conn);
?>	
 
?>