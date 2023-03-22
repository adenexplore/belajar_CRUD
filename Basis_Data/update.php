<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
// $kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis_buku = $_POST['penulis_buku'];
$penerbit_buku = $_POST['penerbit_buku'];
$tahun_penerbit = $_POST['tahun_penerbit'];
$stok = $_POST['stok'];
 
// update data ke database
mysqli_query($koneksi,"update bukuceria set  judul_buku='$judul_buku', penulis_buku ='$penulis_buku', penerbit_buku ='$penerbit_buku', tahun_penerbit='$tahun_penerbit', stok ='$stok',' where kode_buku='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>