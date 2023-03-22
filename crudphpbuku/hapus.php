<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM buku WHERE id_buku = '$id' ";


if (mysqli_query($conn,$query)) {
    # credirect ke page index
    echo "<script> alert('Berhasil di hapus');document.location='/belajar_CRUD/crudphpbuku/index.php'</script>";
   }
   else{
    echo "ERROR, data gagal diupdate ". mysqli_error($conn);
   }
   
   mysqli_close($conn); 
?>