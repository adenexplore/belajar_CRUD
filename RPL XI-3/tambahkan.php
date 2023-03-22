<?php 
//koneksi ke database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nis= $_POST['nis'];
$tanggal = $_POST['tanggal'];
$rombel= $_POST['rombel'];
$rayon = $_POST['rayon'];

// menginput data ke database

mysqli_query($koneksi,"insert into siswa(nis,nama,tanggal,rombel,rayon) values('$nis','$nama','$tanggal','$rombel','$rayon')");
// mengalihkan kembali ke halaman index.php
header ("location:index.php");

 ?>