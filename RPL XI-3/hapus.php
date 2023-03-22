<?php 
// koneksi ke database
include 'koneksi.php';

// menangkap data nis yang dikirim dari url
$nis = $_GET['nis'];

// menghapus data dari database 
mysqli_query($koneksi,"delete from siswa where nis='$nis'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
 ?>