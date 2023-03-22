<?php 
// koneksi ke database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nis= $_POST['nis'];
$nama= $_POST['nama'];
$nama = $_POST['nama'];
$rombel= $_POST['rombel'];
$rayon = $_POST['rayon'];

// update data ke database
mysqli_query($koneksi,"update siswa set nama='$nama',rombel='$rombel',rayon='$rayon' where nis='$nis'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 ?>