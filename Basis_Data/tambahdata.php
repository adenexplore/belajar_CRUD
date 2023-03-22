<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis_buku = $_POST['penulis_buku'];
$penerbit_buku = $_POST['penerbit_buku'];
$tahun_penerbit = $_POST['tahun_penerbit'];
$stok = $_POST['stok'];

// menginput data ke database
mysqli_query($koneksi,"insert into bukuceria (kode_buku, judul_buku, penulis_buku, penerbit_buku, tahun_penerbit,stok) values('$kode_buku','$judul_buku','$penulis_buku','$penerbit_buku', '$tahun_penerbit', '$stok')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>